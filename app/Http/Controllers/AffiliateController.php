<?php

namespace App\Http\Controllers;

use App\Models\Affiliate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\Models\AffChangeRequest; 
use App\Models\Referral_wallet; 
use Carbon\Carbon;


class AffiliateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('frontend.affiliate.index');
    }


    public function signup_page() {
        return view('frontend.affiliate.signup');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {     
            $referral_code = "@Ant-".bin2hex(random_bytes(5));
            // dd($referral_code);
            $cat = implode(",",$request->cat); 
            // dd($cat);
            $user = new User();
            $user->full_name = $request->full_name;
            $user->barber_name = $request->barber_name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->role  = 4;
            $user->cat_id = $cat;
            $user->password = Hash::make($request->pwd);
            $user->account_number = $request->account_number;
            $user->account_type = $request->account_type;
            $user->referral_code = $referral_code;
            $user->sort_code = $request->sort_code;
            $user->name_on_account = $request->name_on_account;
            $user->save();

         if($user->save()){
            $u_id = $user->id;
            $affiliate = User::where('id',$u_id)->first();
            Auth::login($affiliate);
            return view('frontend.affiliate.profile', compact('affiliate'));
         }   
        
    }


    public function dashboard(){

        return view('frontend.affiliate.dashboard');

    }

    public function affiliate_profile() {
      if(Auth::check()){
        $u_id = auth()->user()->id;
        $affiliate = User::where('id',$u_id)->first();
        //  dd($affiliate);
        return view('frontend.affiliate.profile', compact('affiliate'));
      }
      else{
        return view('frontend.affiliate.index');
      }
    
    }

    // function to update affiliate data
    public function affiliate_update(Request $request){
        //dd($request);
        $u_id = auth()->user()->id;
        $cat = implode(",",$request->cat); 

        $affiliates = User::where('id',$u_id)->update([
            'full_name'=>$request->full_name,
            'barber_name'=>$request->barber_name,
            // 'email'=>$request->email,
            'phone'=>$request->phone,
            'cat_id' => $cat,
            //'sort_code' => $request->sort_code,
            // 'account_number'=>$request->account_number,
            'account_type'=>$request->account_type
        ]);
        
        $affiliate = User::where('id',$u_id)->first();
         if($affiliates){
        return view('frontend.affiliate.profile', compact('affiliate'))->with('successMsg','Profile Updated Successfully...');
         }
    }

    public function affiliate_wallet(){
        return view('frontend.affiliate.wallet');
    }

    public function wallet_list() {
        return view('frontend.affiliate.wallet_list');
    }
/********
 * **Payment request function
 */
    public function payment_request(Request $request, $array) {
        $jsonString = $array;
    $ids = json_decode($jsonString, true);
    $mytime = Carbon::now();
       $formattedTime = $mytime->toDateTimeString();
    $data = Referral_wallet::whereIn('id', $ids)->update([
        'payment_request' => 1,
        'payment_request_date' => $formattedTime, 
    ]);
    return redirect()->back()->with('successMsg','Withdrawal requests Successfully sended');
    }

    public function affiliate_users(){
        $u_id = auth()->user()->id;
        $affiliate = User::where('id',$u_id)->first();
        $users = User::where('referral_code',$affiliate->referral_code)->get();

        return view('frontend.affiliate.users',compact('affiliate','users'));
    }
   
    // function to make the change request to ADMIN
    public function affiliate_change_req(Request $request){
       // dd($request->all());
        $data = [
            "user_id"=>$request->user_id,
            "email"=>isset($request->email) ? $request->email : '',
            "sort_code"=>$request->sort_code,
            "account_number"=>$request->new_account,
            "name_on_account"=>$request->name_on_account,
        ];
        $main = AffChangeRequest::create($data);
       
        User::where('id',$request->user_id)->update(['update_request'=>1]);
        $affiliate = User::where('id',$request->user_id)->first();
        if($main){
            return view('frontend.affiliate.profile', compact('affiliate'))->with('successMsg','Changing requests Successfully sended to the admin...');
        }
    }

   

    /*
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Affiliate $affiliate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Affiliate $affiliate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Affiliate $affiliate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Affiliate $affiliate)
    {
        //
    }
}
