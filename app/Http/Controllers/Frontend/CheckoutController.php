<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\{QuesAns, Questions};
use Illuminate\Support\Facades\Cache;
Use DB;
use App\Models\City;
use App\Models\UserAddress;
use Illuminate\Http\Request;
use App\Models\Delivery_address;
use App\Models\Billing_address;
use App\Models\Temp;
use App\Models\Product;
use App\Models\Media;
use Session;
use App\Models\Order;
use Auth;
use Illuminate\Support\Str;
use App\Models\affiliateCoupon;
use App\Models\Referral_wallet;
use App\Models\AffiliateCouponDetails;
use App\Traits\SMPT2GoTrait;
use Illuminate\Support\Facades\Http;
use SMTP2GO\ApiClient;
use SMTP2GO\Types\Mail\Address;
use SMTP2GO\Service\Mail\Send as MailSend;
use SMTP2GO\Collections\Mail\AddressCollection;
use Mail;

class CheckoutController extends Controller
{
    use SMPT2GoTrait;
    // public function index(Request $request)
    // {
    //     //dd('yaga', $request);
    //     // Cache::flush();
    //     // $Userid = auth()->user()->id;
    //     // $id =session('my_random_string');
    //     // QuesAns::where('session_id', $id)->update(['userid' => $Userid]);

    //     if ($request->isMethod('post')) {
    //         $check_data = Temp::where('session_id',session('my_random_string'))->first();
    //         if($check_data){
    //             // $check_data->category_id = $request->category_id;
    //             $check_data->strength_type = $request->strength_type;
    //             $check_data->recommended = $request->recommended;
    //             $check_data->product_ids = $request->product_ids;
    //             $check_data->save();
    //         }else{
    //             $data = new Temp();
    //             $data->session_id = session('my_random_string');
    //             // $data->category_id = $request->category_id;
    //             $data->recommended = $request->recommended;
    //             $data->strength_type = $request->strength_type;
    //             $data->product_ids = $request->product_ids;
    //             $data->save();
    //         }
    //     }

    //     $get_data = Temp::where('session_id',session('my_random_string'))->first();
    //     // if($get_data){
    //         $product_data = Product::whereIn('id',explode(',', $get_data->product_ids))->get();
    //         $total_price = Product::whereIn('id',explode(',', $get_data->product_ids))->sum('price');
    //         return view('frontend.checkout.index',compact('get_data','product_data','total_price'));
    //     // }else{
    //     //     return redirect()->route('questionnaire.index',$request->category_id);
    //     // }
    // }


       //code to save questionnair
       public function cart_product(Request $request)
       {    
        // print_r($request->isMethod('post')); exit;

                    //DB::table('temp')->where('product_ids', NULL)->delete();
                    //DB::beginTransaction();
        
                try {

                    $data = [];
                    if((isset($request->Q1) && !empty($request->Q1)) && (isset($request->Q1_answer) && !empty($request->Q1_answer))){
                        if($request->Q1_answer == 'other'){
                            $answer1 = $request->Q1_other;
                        }
                        else{
                            $answer1 = $request->Q1_answer;
                        }
                        array_push($data, ['ques'=>$request->Q1, 'answer'=>$answer1]);
                    }

                    if((isset($request->Q2) && !empty($request->Q2)) && (isset($request->Q2_answer) && !empty($request->Q2_answer))){
                        if($request->Q2_answer == 'other'){
                            $answer2 = $request->Q2_other;
                        }
                        else{
                            $answer2 = $request->Q2_answer;
                        }
                        array_push($data, ['ques'=>$request->Q2, 'answer'=>$answer2]);
                    }

                    if((isset($request->Q3) && !empty($request->Q3)) && (isset($request->Q3_answer) && !empty($request->Q3_answer))){
                        if($request->Q3_answer == 'other'){
                            $answer3 = $request->Q3_other;
                        }
                        else{
                            $answer3 = $request->Q3_answer;
                        }
                        array_push($data, ['ques'=>$request->Q3, 'answer'=>$answer3]);
                    }

                    if((isset($request->Q4) && !empty($request->Q4)) && (isset($request->Q4_answer) && !empty($request->Q4_answer))){
                        if($request->Q4_answer == 'other'){
                            $answer4 = $request->Q4_other;
                        }
                        else{
                            $answer4 = $request->Q4_answer;
                        }
                        array_push($data, ['ques'=>$request->Q4, 'answer'=>$answer4]);
                    }

                    if((isset($request->Q5) && !empty($request->Q5)) && (isset($request->Q5_answer) && !empty($request->Q5_answer))){
                        if($request->Q5_answer == 'other'){
                            $answer5 = $request->Q5_other;
                        }
                        else{
                            $answer5 = $request->Q5_answer;
                        }
                        array_push($data, ['ques'=>$request->Q5, 'answer'=>$answer5]);
                    }

                    if((isset($request->Q6) && !empty($request->Q6)) && (isset($request->Q6_answer) && !empty($request->Q6_answer))){
                        if($request->Q6_answer == 'other'){
                            $answer6 = $request->Q6_other;
                        }
                        else{
                            $answer6 = $request->Q6_answer;
                        }
                        array_push($data, ['ques'=>$request->Q6, 'answer'=>$answer6]);
                    }

                    if((isset($request->Q7) && !empty($request->Q7)) && (isset($request->Q7_answer) && !empty($request->Q7_answer))){
                        if($request->Q7_answer == 'other'){
                            $answer7 = $request->Q7_other;
                        }
                        else{
                            $answer7 = $request->Q7_answer;
                        }
                        array_push($data, ['ques'=>$request->Q7, 'answer'=>$answer7]);
                    }

                    if((isset($request->Q8) && !empty($request->Q8)) && (isset($request->Q8_answer) && !empty($request->Q8_answer))){
                        if($request->Q8_answer == 'other'){
                            $answer8 = $request->Q8_other;
                        }
                        else{
                            $answer8 = $request->Q8_answer;
                        }
                        array_push($data, ['ques'=>$request->Q8, 'answer'=>$answer8]);
                    }

                    if((isset($request->Q9) && !empty($request->Q9)) && (isset($request->Q9_answer) && !empty($request->Q9_answer))){
                        if($request->Q9_answer == 'other'){
                            $answer9 = $request->Q9_other;
                        }
                        else{
                            $answer9 = $request->Q9_answer;
                        }
                        array_push($data, ['ques'=>$request->Q9, 'answer'=>$answer9]);
                    }

                    if((isset($request->Q10) && !empty($request->Q10)) && (isset($request->Q10_answer) && !empty($request->Q10_answer))){
                        if($request->Q10_answer == 'other'){
                            $answer10 = $request->Q10_other;
                        }
                        else{
                            $answer10 = $request->Q10_answer;
                        }
                        array_push($data, ['ques'=>$request->Q10, 'answer'=>$answer10]);
                    }

                    if((isset($request->Q11) && !empty($request->Q11)) && (isset($request->Q11_answer) && !empty($request->Q11_answer))){
                        if($request->Q11_answer == 'other'){
                            $answer11 = $request->Q11_other;
                        }
                        else{
                            $answer11 = $request->Q11_answer;
                        }
                        array_push($data, ['ques'=>$request->Q11, 'answer'=>$answer11]);
                    }

                    if((isset($request->Q12) && !empty($request->Q12)) && (isset($request->Q12_answer) && !empty($request->Q12_answer))){
                        if($request->Q12_answer == 'other'){
                            $answer12 = $request->Q12_other;
                        }
                        else{
                            $answer12 = $request->Q12_answer;
                        }
                        array_push($data, ['ques'=>$request->Q12, 'answer'=>$answer12]);
                    }

                    if((isset($request->Q13) && !empty($request->Q13)) && (isset($request->Q13_answer) && !empty($request->Q13_answer))){
                        if($request->Q13_answer == 'other'){
                            $answer13 = $request->Q13_other;
                        }
                        else{
                            $answer13 = $request->Q13_answer;
                        }
                        array_push($data, ['ques'=>$request->Q13, 'answer'=>$answer13]);
                    }

                    if((isset($request->Q14) && !empty($request->Q14)) && (isset($request->Q14_answer) && !empty($request->Q14_answer))){
                        if($request->Q14_answer == 'other'){
                            $answer14 = $request->Q14_other;
                        }
                        else{
                            $answer14 = $request->Q14_answer;
                        }
                        array_push($data, ['ques'=>$request->Q14, 'answer'=>$answer14]);
                    }

                    if((isset($request->Q15) && !empty($request->Q15)) && (isset($request->Q15_answer) && !empty($request->Q15_answer))){
                        if($request->Q15_answer == 'other'){
                            $answer15 = $request->Q15_other;
                        }
                        else{
                            $answer15 = $request->Q15_answer;
                        }
                        array_push($data, ['ques'=>$request->Q15, 'answer'=>$answer15]);
                    }

                    if((isset($request->Q16) && !empty($request->Q16)) && (isset($request->Q16_answer) && !empty($request->Q16_answer))){
                        if($request->Q16_answer == 'other'){
                            $answer16 = $request->Q16_other;
                        }
                        else{
                            $answer16 = $request->Q16_answer;
                        }
                        array_push($data, ['ques'=>$request->Q16, 'answer'=>$answer16]);
                    }

                    if((isset($request->Q17) && !empty($request->Q17)) && (isset($request->Q17_answer) && !empty($request->Q17_answer))){
                        if($request->Q17_answer == 'other'){
                            $answer17 = $request->Q17_other;
                        }
                        else{
                            $answer17 = $request->Q17_answer;
                        }
                        array_push($data, ['ques'=>$request->Q17, 'answer'=>$answer17]);
                    }

                    if((isset($request->Q18) && !empty($request->Q18)) && (isset($request->Q18_answer) && !empty($request->Q18_answer))){
                        if($request->Q18_answer == 'other'){
                            $answer18 = $request->Q18_other;
                        }
                        else{
                            $answer18 = $request->Q18_answer;
                        }
                        array_push($data, ['ques'=>$request->Q18, 'answer'=>$answer18]);
                    }

                    if((isset($request->Q19) && !empty($request->Q19)) && (isset($request->Q19_answer) && !empty($request->Q19_answer))){
                        if($request->Q19_answer == 'other'){
                            $answer19 = $request->Q19_other;
                        }
                        else{
                            $answer19 = $request->Q19_answer;
                        }
                        array_push($data, ['ques'=>$request->Q19, 'answer'=>$answer19]);
                    }

                    if((isset($request->Q20) && !empty($request->Q20)) && (isset($request->Q20_answer) && !empty($request->Q20_answer))){
                        if($request->Q20_answer == 'other'){
                            $answer20 = $request->Q20_other;
                        }
                        else{
                            $answer20 = $request->Q20_answer;
                        }
                        array_push($data, ['ques'=>$request->Q20, 'answer'=>$answer20]);
                    }

                    if((isset($request->Q21) && !empty($request->Q21)) && (isset($request->Q21_answer) && !empty($request->Q21_answer))){
                        if($request->Q21_answer == 'other'){
                            $answer21 = $request->Q21_other;
                        }
                        else{
                            $answer21 = $request->Q21_answer;
                        }
                        array_push($data, ['ques'=>$request->Q21, 'answer'=>$answer21]);
                    }

                    if((isset($request->Q22) && !empty($request->Q22)) && (isset($request->Q22_answer) && !empty($request->Q22_answer))){
                        if($request->Q22_answer == 'other'){
                            $answer22 = $request->Q22_other;
                        }
                        else{
                            $answer22 = $request->Q22_answer;
                        }
                        array_push($data, ['ques'=>$request->Q22, 'answer'=>$answer22]);
                    }

                    if((isset($request->Q23) && !empty($request->Q23)) && (isset($request->Q23_answer) && !empty($request->Q23_answer))){
                        if($request->Q23_answer == 'other'){
                            $answer23 = $request->Q23_other;
                        }
                        else{
                            $answer23 = $request->Q23_answer;
                        }
                        array_push($data, ['ques'=>$request->Q23, 'answer'=>$answer23]);
                    }

                    if((isset($request->Q24) && !empty($request->Q24)) && (isset($request->Q24_answer) && !empty($request->Q24_answer))){
                        if($request->Q24_answer == 'other'){
                            $answer24 = $request->Q24_other;
                        }
                        else{
                            $answer24 = $request->Q24_answer;
                        }
                        array_push($data, ['ques'=>$request->Q24, 'answer'=>$answer24]);
                    }

                    $jsonData = json_encode($data);

                   // dd($jsonData);
                    // $questionnair = new Temp();
                    // $questionnair->session_id = session('my_random_string');
                    // $questionnair->user_id = $user_id;
                    // $questionnair->category_id = $request->category_id;
                    // $questionnair->jason_data = $jsonData;
                    // $questionnair->save();
                    // dd($request->session_id, $request->category_id, $jsonData) ;
                    if(Auth::check()){
                        $user_id = auth()->id();
                    }
                    else{
                        $user_id = '';
                    }

                    if(empty($request->session_id)){
                        if(!isset($request->session_id)) {
                            if(Session::has('hair_loss')){
                                $sessionId = Session::get('hair_loss');
                                //Session::forget('hair_loss');
                            }
                            if(Session::has('beard_browth')){
                                $sessionId = Session::get('beard_browth');
                                //Session::forget('beard_browth');
                            }
                            if(Session::has('erectile_dysfunction')){
                                $sessionId = Session::get('erectile_dysfunction');
                                //Session::forget('erectile_dysfunction');
                            }
                            if(Session::has('premature_ejaculation')){
                                $sessionId = Session::get('premature_ejaculation');
                                //Session::forget('premature_ejaculation');
                            }
                            $request->session_id = $sessionId;
                        }
                        $request->category_id = $request->session()->get('categoryId');
                        $jsonData = $request->session()->get('jsonData');
                    }
                    else $tmpId = $request->session_id;
                    // print_r($request->session()); exit;
                    // print_r($request->session()); exit;
                    // print_r($request->all()); exit;
                    $check_temp = Temp::where('session_id',$request->session_id)->first();
                    if($check_temp){
                        $check_temp->user_id = $user_id;
                        $check_temp->session_id = $request->session_id;
                        $check_temp->category_id = $request->category_id;
                        $check_temp->jason_data = $jsonData;
                        $check_temp->save();
                    }
                    else{
                        $check_temp = new Temp();
                        $check_temp->session_id = $request->session_id;
                        $check_temp->category_id = $request->category_id;
                        $check_temp->jason_data = $jsonData;
                        $check_temp->save();
                        $check_temp->user_id = $user_id;

                        Session::put("jsonData", $jsonData);
                        Session::put("oldSessionId", $request->session_id);
                        Session::put("categoryId", $request->category_id);
                    }
                    $session = $request->session_id;
                 
                    //echo $request->session_id;die;
                    //$check_tempd = DB::table('temp')->where('session_id',$request->session_id)->first();
                    //dd($check_tempd);

                    //     $temp = Temp::updateOrCreate([
                    //     'session_id' => $request->session_id,
                    // ],[
                    //     'user_id' => $user_id,
                    //     'session_id' => $request->session_id,
                    //     'category_id' => $request->category_id,
                    //     'jason_data' => $jsonData
                    // ]);
                    //dd("$request->session_id");
                    // DB::commit();
                    $productList = Product::with('tags')->orderBy("category_id")->orderBy("quantity_mg")->orderBy("quantity")->orderBy("treat_method")->get()->toArray();
                    $mediaList = Media::get()->toArray();
                    return view('frontend.checkout.cart_product', ["category"=>$request->category_id, 'productList' => $productList, "mediaList" => $mediaList, "session_id"=>$request->session_id]);
                }
                catch (\Exception $e) {
                    DB::rollback();
                    print_r($e->getMessage()); exit;
                    return redirect('/')->withErrors(['error' => $e->getMessage()]);
                }

       }



    //code to save product and price in temp folder
    public function index(Request $request)
    {
            $session = $request->Session_Id;
            if(Session::has('hair_loss')){
                $sessionId = Session::get('hair_loss');
                 //Session::forget('hair_loss');
            }
            if(Session::has('beard_browth')){
                $sessionId = Session::get('beard_browth');
                //Session::forget('beard_browth');
            }
            if(Session::has('erectile_dysfunction')){
                $sessionId = Session::get('erectile_dysfunction');
                 //Session::forget('erectile_dysfunction');
            }
            if(Session::has('premature_ejaculation')){
                $sessionId = Session::get('premature_ejaculation');
                //Session::forget('premature_ejaculation');
            }
            
            //dd($sessionId);
            // if($request->Session_Id != $sessionId){
            //     DB::table('temp')->where('product_ids', NULL)->delete();
            //         Session::forget('hair_loss');
            //         Session::forget('beard_browth');
            //         Session::forget('erectile_dysfunction');
            //         Session::forget('premature_ejaculation');
            //     return view('frontend.questionnaire.mainPage')->withErrors(['error', 'Sorry there was some server error, please fill the questionnaire again...']);
            // }
            //  dd($request->product_ids,$sessionId );
            if(!isset($sessionId) || empty($sessionId)){
               return redirect('/shop');
            }
            // $check_data = Temp::where('session_id',$session)->first();

            // if(!isset($check_data->session_id) || empty($check_data->session_id)){
            //     return redirect('/shop');
            // }elseif($check_data->session_id != $sessionId){
            //     return redirect('/shop');
            // }
            try {

                if ($request->isMethod('post')) {
                    $check_data = Temp::where('session_id',$sessionId)->first();

                    if(isset($check_data)){
                        $check_data->strength_type = $request->strength_type;
                        $check_data->recommended = $request->recommended;
                        $check_data->product_ids = $request->product_ids;
                        $check_data->subscription_duration = 1;
                        $check_data->save();
                    }

                }

                $get_data = Temp::where('session_id', $sessionId)->first();
                if(!isset($get_data) || empty($get_data)){
                    return redirect('/shop');
                }
                // $total_price = Product::whereIn('id',explode(',', $get_data->product_ids))->select('price');
                // print_r($get_data); exit;
                $product_detail = Product::whereIn('id',explode(',', $get_data->product_ids))->first();
                // dd($get_data->product_ids);
                $product_data = Product::whereRaw("name='{$product_detail['name']}'")->whereRaw("subscription_duration={$get_data->subscription_duration}")->first();
                    
                if(!isset($product_data) || empty($product_data)){
                    return redirect('/shop');
                }
                
                

                $prod_subs = $product_data['subscription_duration'];
                $total_price = $product_data['price'];
                $first_time_disc = $product_data['first_time_disc'];
     
                $product_id = $product_data['id'];
                $product_data = Product::whereIn('id',explode(',',  $product_data['id']))->get();

                $order_id = 0;
                return view('frontend.checkout.index',compact('get_data','product_data', 'order_id','total_price', 'sessionId','prod_subs','first_time_disc','product_id'));
            } catch (\Illuminate\Session\TokenMismatchException $e) {
    // If a TokenMismatchException is caught, it means the CSRF token validation failed

    // You can log the exception if needed
    // \Log::error('CSRF Token Mismatch: ' . $e->getMessage());
    // Redirect to a custom error page or any other route
        return redirect()->route('/questionnaireCat');
    }
}




    // function to place order
    public function place_order(Request $request){
            // dd($request->all());
            // dd(Session::get('hair_loss'));
            $user_id = auth()->id();


            if(isset($_GET['errorcode'])){
                if($_GET['errorcode'] == 0){
                    if(Session::has('sessionid')){
                    $sessionid =  Session::get('sessionid');
                    }else{
                        session()->flash('message', 'You have already placed this order!');
                        session()->flash('alert-type', 'danger');
                        // toast('You have already placed this order', 'alert');
                        return redirect('/shop');
                    }
                  $get_data = Temp::where('session_id', $sessionid)->first();
                  if(isset($get_data)){
                  $data =  $get_data->toArray();
                  }else{
                    return redirect('/shop');
                  }
                $prod = explode(",", $data['product_ids']);
                //dd($prod);
                $prod_name = DB::table('products')->whereIn('id',$prod)->get();
                $data['product_details'] = $prod_name;
                // dd($prod_name);
                $data['fullname'] = Auth()->user()->full_name;
                $order_data = Order::where('session_id',$get_data->session_id)->first();
                $data['ref_id'] = $order_data->ref_id;
                // $data['product_details'] = $product_details->toArray();
                // dd($data['product_details']);
                $full_name = auth()->user()->full_name;
                $order_num = $order_data->ref_id;
                
                $this->sendOrderConfirmMail($full_name, $order_num);
                
                Session::put("order_id", $order_data->ref_id);
                Session::put("product_id", $data['product_ids']);
                Session::put("subscription_duration", $request->subscription_duration);
                Session::put('placed_order','placed');
                Session::forget('sessionid');
                Session::forget('hair_loss');
                Session::forget('beard_browth');
                Session::forget('erectile_dysfunction');
                Session::forget('premature_ejaculation');
                return redirect('http://agenthealth.co.uk/agent/public/checkout/success1');
            }else{
                return redirect('http://agenthealth.co.uk/agent/public/checkout/error');
            }
        }

        if(Session::has('placed_order')){
            Session::forget('placed_order');
            session()->flash('message', 'You have already placed this order!');
            session()->flash('alert-type', 'danger');
            // toast('You have already placed this order', 'error');
            return redirect('/shop');
            }
            //  dd($user_id);
            $latestOrder = Order::latest()->first();

            if ($latestOrder && strpos($latestOrder->ref_id, 'ORD-') === 0) {
                $arrOrder = explode('-', $latestOrder->ref_id);
                $newNumber = (int)$arrOrder[1] + 1;
                $order_id = 'ORD-' . $newNumber;
            } else {
                // If there's no record or if the ref_id is not in the expected format, fallback to 'ORD-1000'
                $order_id = 'ORD-1000';
            }


            $coupon_data = affiliateCoupon::where('code',$request->coupon_code)->first();
            ////////////////////////////////////////////////////////////////////////


            // code to calculate the price
            if(!isset($request->total_price)){
                return redirect()->back();
            }
            $total_price = $request->total_price;
            $subscription_dur = $request->subscription_duration;
            $prodcut_id = $request->product_id;
            $sessionId = $request->session_id;
            if(!isset($total_price, $subscription_dur, $prodcut_id, $sessionId)){
                return redirect()->back();
            }
            Session::put('sessionid',$sessionId);
            $get_data = Temp::where('session_id', $sessionId)->first();
                // if(isset($coupon_data)){
                //     $get = AffiliateCouponDetails::where('coupon_id',$coupon_data->id)->where('cat_id',$get_data->category_id)->first();
                //     $user_off = $get->value;
                //     $discount = ($user_off/100)*$total_price;
                //     $final_price = $total_price - $discount;
                //     }
                // else{
                // }
                $final_price = $total_price;

            $prod_name = DB::table('products')->where('id',$prodcut_id)->get();

            //////////////////////////////////////////////////////////////////////////
            // code to update the user when placing order
            $update_user_id = Temp::where('session_id', $request->session_id)->update(['user_id' => $user_id, 'final_price' => $final_price ]);

            // code to create the orders placing order
            $order = Order::create([
                    'ref_id' => $order_id,
                    'user_id' => $user_id,
                    'affiliate_code_id' => isset($coupon_data->id) ? $coupon_data->id : '',
                    'user_address_id' => $request->address_id,
                // 'user_address_id' => $request['userAddressId'],
                // 'shipping_company_id' => $request['shippingCompanyId'],
                // 'payment_method_id' => $request['paymentMethodId'],
                    'subtotal' => $request->total_price,
                    // 'discount_code' => session()->has('coupon') ? session()->get('coupon')['code'] : NULL,
                    'discount_code' => $request->coupon_code,
                // 'discount' => getNumbersOfCart()->get('discount'),
                // 'shipping' => getNumbersOfCart()->get('shipping'),
                    'tax' => getNumbersOfCart()->get('productTaxes'),
                    'total' => $final_price,
                    'subscription' => $subscription_dur,
                    'currency' => 'GBP',
                    'order_status' => 0,

                    'session_id'=>$request->session_id,
                ]);

             if($order){
                 //   code to calculate commission ammount
            // if(isset($coupon_data->id)){
            //     // $aff_off = $get->commission;
            //     $commission_ammount = ($aff_off/100)*$request->total_price;
            //     // $commission_ammount = $request->total_price - $discount;
            // }
            // else{
            //     $commission_ammount = '';
            // }


            // if(isset($coupon_data->id)){
            //     $data=[
            //         'referral_id' => $order->id,
            //         'user_id' => $user_id,
            //         'cart_ammount' => $request->total_price,
            //         'total_ammount' => $final_price,
            //         'aff_coupan_id' => isset($coupon_data->id) ? $coupon_data->id : '',
            //         //'currency' => 'USD',
            //         'commission_%' => isset($coupon_data->value) ? $coupon_data->value : '',
            //         'commission_ammount' => $commission_ammount,
            //         'payment_status' => 0,
            //         'order_status' => 1,
            //         'session_id'=>$request->session_id,
            //         'delivery_status' => 0
            //     ];
            //     //dd($data);

            //     $referral_wallet = Referral_wallet::create($data);
            //     //dd($referral_wallet);
            // }


            // else{
            //     return view('frontend.checkout.success',compact('user_id','order_id'));
            // }
        // code to chage date
        $date = $request->ex_date;
        $timestamp = strtotime($date);
        $formattedDate = date('m/Y', $timestamp);

        $ccnumber = str_replace(' ', '', $request->card_number);

        $update_order = Order::where('ref_id', $order->id)->update(['order_status' => 2]);


        // DB::table('temp')->where('product_ids', NULL)->orWhere('final_price', NULL)->delete();

        $sessionId = $request->session_id;
        $cc = $request->coupon_code;
        
        return view('frontend.checkout.payment',compact('user_id','order_id','final_price','subscription_dur','prod_name','total_price','sessionId','cc'));

        //  return redirect('checkout/payment-page')->route('payment.page',['user_id'=>$user_id,'order_id'=>$order_id,'final_price'=>$final_price]);
        // for testing
        // return view('frontend.checkout.success1',compact('user_id','order_id'));
        }
        else{
                return view('frontend.checkout.error',compact('user_id','order_id'));
        }
            // for testing
    }

    public function payment_page(){
        return view('frontend.checkout.payment');
    }
    // function to apply coupon on placeing order
     public function apply_coupon(Request $request){
        $coupon_code = $request->coupon_code;
        $total_price = $request->total_price;
        $sessionId = $request->session_id;
        $check = affiliateCoupon::where('code',$coupon_code)->first();
        $get_data = Temp::where('session_id', $sessionId)->first();
        $get = AffiliateCouponDetails::where('coupon_id',$check->id)->where('cat_id',$get_data->category_id)->first();
        $user_off = $get->value;
        $discount = ($user_off/100)*$total_price;
        $final_price = $total_price - $discount;
        $update_Final_price = Temp::where('session_id', $sessionId)->update(['final_price' => $final_price ]);

        return response()->json([$final_price, $user_off]);

     }



     //code for payment
     public function makePaymentRequest()
            {
                return view('frontend.checkout.success1', compact('user_id','order_id', 'orderreference', 'final_price', 'merchantname'));
            }
     //code for payment


    public function success() {
        return view('frontend.checkout.success1');
    }

    public function subscription_update(){
        dd('subscription function');
        exit;
    }
    public function setTempEmail(Request $request) {
        $session_id = $request->session_id;
        $email = $request->email;

        $check_temp = Temp::where('session_id',$request->session_id)->first();
        if($check_temp){
            $check_temp->email = $email;
            $check_temp->save();
        }
        exit("success");
    }
}
