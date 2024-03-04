<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ProfileRequest;
use App\Services\ImageService;
use Illuminate\Support\Facades\Hash;
use App\Traits\ImageUploadTrait;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Delivery_address;
use App\Models\Billing_address;

class UserController extends Controller
{
    use ImageUploadTrait;

    public function dashboard()
    {
        return view('frontend.user.dashboard');
    }

    public function profile()
    {
        return view('frontend.user.profile');
    }

    public function updateProfile(ProfileRequest $request)
    {
                              

        $user = auth()->user();
        // $uploadedFile = $request->user_image; // Your UploadedFile object
        // $originalName = $uploadedFile->getClientOriginalName();
        
        if (!empty($request->password) && !Hash::check($request->password, $user->password)) {
            $password = bcrypt($request->password);
        }

        // if ($request->hasFile('user_image')) {
        //     if ($user->user_image) {
                
        //         (new ImageService())->unlinkImage($user->user_image, 'users');
        //     }
           
        //     $userImage = (new ImageService())->storeUserImages($user->username, $request->user_image);
        
        // }

        

        $user->update([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'receive_email' => $request->receive_email,
            // 'user_image' => $userImage ?? $user->user_image,
            'user_image' => $originalName ?? $user->user_image,
            'password' => $password ?? $user->password
        ]);
        
        return redirect()->back()->with([
            'message' => 'Updated profile successfully',
            'alert-type' => 'success'
        ]);
    }

    public function removeImage()
    {
        if (auth()->user()->user_image) {
            
            (new ImageService())->unlinkImage(auth()->user()->user_image, 'users');
            auth()->user()->update(['user_image' => NULL]);
           
            toast('Image removed successfully', 'success');
            return redirect()->back();
        }

        toast('please try again later', 'warning');
        return redirect()->back();
    }

    public function addresses()
    {
        return view('frontend.user.addresses');
    }

    public function orders()
    {
        return view('frontend.user.orders');
    }
    
    public function pages(Request $request)
    {
        return $request;
    }
    

    /* page_ques */
   public function page_ques() {
    return view('frontend.user.page_ques');
   }


   public function order_detail($id){
           $ids = $id;
    return view('frontend.user.order_detail', compact('ids'));
   }
   
   public function cancel_order($id){
     $order_cancel = Order::where('id', $id)->update(['order_status' => 5]);
     if($order_cancel){ 
        return view('frontend.user.orders')->with('message', 'Order is cancelled successfull..');
       }
    }

    // code to update delivery address
    public function update_address(Request $request){
        // dd($request->all());
        if(isset($request->id) && !empty($request->id)){
        $update_address = Delivery_address::where('id', $request->id)->where('user_id', auth()->user()->id)->update(['city'=>$request->city, 'address'=>$request->address, 'zip_code'=>$request->zip_code]);
        }else{
            $update_address = new Delivery_address;
            $update_address->user_id = auth()->user()->id;
            $update_address->city = $request->city;
            $update_address->address = $request->address;
            $update_address->zip_code = $request->zip_code;
            $update_address->save();
        }
        return redirect()->back()->with('message', 'Delivery address updated successfull');
    }
    // code to check user exists
    public function isExist(Request $request){
        // dd($request->all());
        if(isset($request->email) && !empty($request->email)){
            $user = User::where('email', $request->email)->get()->first();
            return $user;
            // if($user)
        }
        else return null;
    }

    // code to update billing address
    public function update_bill_address(Request $request){
        //dd($request->all(), $request->zip_code);
        if(isset($request->id) && !empty($request->id)){
        $update_b_address = Billing_address::where('id', $request->id)->where('user_id', auth()->user()->id)->update(['city'=>$request->city, 'address'=>$request->address, 'zip_code'=>$request->zip_code]);
        }else{
            $update_b_address = new Billing_address;
            $update_b_address->user_address_id = auth()->user()->id;
            $update_b_address->city = $request->city;
            $update_b_address->address = $request->address;
            $update_b_address->zip_code = $request->zip_code;  
            $update_b_address->save();

        }
        
        if($update_b_address){
          return redirect()->back()->with('message', 'Billing address updated successfull');
        }
        else {
            return redirect()->back()->with('error', 'Unable to updated Billing address');
        }
    }

    //delete_address
    public function delete_address($id){
        $res = Delivery_address::where('id',$id)->delete();
        return redirect()->back()->with('message', 'Delivery address deleted successfully...');
    } 

}
