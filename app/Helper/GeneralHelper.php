<?php

use Illuminate\Support\Facades\Cache;
use Spatie\Valuestore\Valuestore;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Collection;
use App\Models\PageMetaTag;

function get_gravatar($email, int $s = 80, string $d = 'mp', string $r = 'g', bool $img = false, array $atts = array()): string
{
    $url = 'https://www.gravatar.com/avatar/';
    $url .= md5(strtolower(trim($email)));
    $url .= "?s=$s&d=$d&r=$r";

    if ($img) {
        $url = '<img src="' . $url . '"';
        foreach ($atts as $key => $val)
            $url .= ' ' . $key . '="' . $val . '"';
        $url .= ' />';
    }

    return $url;
}

function clear_cache(): void
{
    Cache::forget('shop_categories_menu');
    Cache::forget('shop_tags_menu');
    Cache::forget('recent_reviews');
}

function getSettingsOf(string $key)
{
    $settings = Valuestore::make(config_path('settings.json'));
    return $settings->get($key);
}

function getNumbersOfCart(): Collection
{
    $subtotal = Cart::instance('default')->subtotal();
    $discount = session()->has('coupon') ? session()->get('coupon')['discount'] : 0.00;
    $discountCode = session()->has('coupon') ? session()->get('coupon')['code'] : null;

    $subtotalAfterDiscount = $subtotal - $discount;

    $tax = config('cart.tax') / 100;
    $taxText = config('cart.tax') . '%';

    $productTaxes = round($subtotalAfterDiscount * $tax, 2);
    $newSubTotal = $subtotalAfterDiscount + $productTaxes;

    $shipping = session()->has('shipping') ? session()->get('shipping')['cost'] : 0.00;
    $shippingCode = session()->has('shipping') ? session()->get('shipping')['code'] : null;

    $total = ($newSubTotal + $shipping) > 0 ? round($newSubTotal + $shipping, 2) : 0.00;

    return collect([
        'subtotal' => $subtotal,
        'tax' => $tax,
        'taxText' => $taxText,
        'productTaxes' => (float) $productTaxes,
        'newSubTotal' => (float) $newSubTotal,
        'discount' => (float) $discount,
        'discountCode' => $discountCode,
        'shipping' => (float) $shipping,
        'shippingCode' => $shippingCode,
        'total' => (float) $total,
    ]);

}
/* about-us custom page start*/
//******************************************
// Update mate value 
//******************************************
function updateMeta($key, $value, $page_type, $request){
    $chk = PageMetaTag::where(['key'=> $key, 'type'=> $page_type])->first();
      if(!empty($chk)) {
        $chk->key = $key;
        $old_image = $chk->keyValue;
    }else{
      $chk = new PageMetaTag();
      $chk->key = $key;
      $old_image = "";
    }
  
    // Check if file exist
    if ($request->hasFile($key)) {
      $value = uploadImageFile($request->file($key), 'Settings', $old_image);
    }
  
    // Save value in db
    $chk->keyValue = !empty($value) ? $value : "";
    $chk->type = $page_type;
    $chk->save();
  }
  //******************************************
  // Update mate value End
  //******************************************

// Return Meta data
function GetMetaData($key,$page_type){
    $data = PageMetaTag::where(['key'=> $key, 'type'=> $page_type])->first();  
    if(!empty($data)){
      return $data->keyValue;
    }
  }

  // Return slug into text
function SlugToText($slug){
  return ucwords(str_replace('-', ' ', $slug));
}

// Image Upload function create folder and move the image and return image name
function uploadImageFile($image, $dir, $old_image = ""){  
  $name = uniqid() . '.' .$image->getClientOriginalExtension();
  $filePath = $image->storeAs('uploads/'.$dir, $name, 'public');

  // Delete old image 
  if(!empty($old_image)){    
    $img_path = public_path('/storage/'.$old_image);
    if (file_exists($img_path) && $old_image != 'default.png') {
        unlink($img_path);
    }
  }
  
  return $filePath;
}

//to get user name
// public function getUsername($id){
//   $user = App\User::where('id',$id)->first();
//   return !empty($user['name']) ? $user['name'] : "";
// }
/* about-us custom page ends here */
