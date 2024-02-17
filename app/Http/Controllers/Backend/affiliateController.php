<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\affiliateCoupon;
use App\Models\AffCouponAssing;
use App\Models\Referral_wallet;
use App\Models\AffiliateCouponDetails;
use App\Models\AffChangeRequest;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class affiliateController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('frontend.affiliate.index');
    }
    
    public function admin_list() {

        $this->authorize('access_user');
        $users = User::where('role',4)
            ->when(\request()->keyword != null, function ($query) {
                $query->search(\request()->keyword);
            })
            ->when(\request()->status != null, function ($query) {
                $query->whereStatus(\request()->status);
            })
            ->orderBy(\request()->sortBy ?? 'id', \request()->orderBy ?? 'desc')
            ->paginate(\request()->limitBy ?? 10);

        return view('backend.affiliate.index', compact('users'));

        // return view('backend.affiliate.index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create_user');

        return view('backend.affiliate.create');
        //
    }
    
    /**
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
    public function edit(User $user)
    {
        $this->authorize('edit_user');

        return view('backend.affiliate.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,User $user)
    {
        $this->authorize('edit_user');

        if ($request->hasFile('user_image')) {
            if ($user->user_image) {
                $this->imageService->unlinkImage($user->user_image, 'users');
            }
            $userImage = $this->imageService->storeUserImages($request->username, $request->user_image);
        }

        if ($request->password){
            $password = bcrypt($request->password);
        }

        $user->update([
            'full_name' => $request->full_name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => $request->status,
            'receive_email' => $request->receive_email,
            'user_image' => $userImage ?? $user->user_image,
            'password' => $password ?? $user->password
        ]);

        return redirect()->route('admin.affiliate.index')->with([
            'message' => 'Updated successfully',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.use Carbon\Carbon;

     */
    public function destroy(User $user)
    {
        $this->authorize('delete_user');

        if ($user->user_image) {
            $this->imageService->unlinkImage($user->user_image, 'users');
        }

        $user->delete();

        return redirect()->route('admin.affiliate.index')->with([
            'message' => 'Deleted successfully',
            'alert-type' => 'success'
        ]);
    }
/***
 * ******************** COUPON SECTION
*/
    public function affiliateCouponShow(Request $request)
    {

        $coupons = affiliateCoupon::query()
        ->when(\request()->keyword != null, function ($query) {
            $query->where('code', 'LIKE', '%' . \request()->keyword . '%');
        })
        ->when(\request()->status != null, function ($query) {
            $query->where('status', \request()->status);
        })
        ->orderBy(\request()->sortBy === 'name' ? 'code' : (\request()->sortBy ?? 'id'), \request()->orderBy ?? 'desc')
        ->paginate(\request()->limitBy ?? 10);
    

        return view('backend.affiliate.couponsindex', compact('coupons'));
    }
    /**
     * Affiliate Coupon Category
     */
    public function affiliatecoupon()
    {
        $category = Category::whereNull('parent_id')->get(['id','name']);
        return view('backend.affiliate.affiliatecoupon',compact('category'));
    }
    /**
     * Affiliate Coupon Curde
     */
    public function affiliatecoupon_create(Request $request)
    {
        $check = affiliateCoupon::where('code',$request->code)->where('status',1)->first();
        if($check){
            return redirect()->back()->with([
                'message' => 'Coupon Name is already exit',
                'alert-type' => 'danger'
            ]);
        }
        $cat_name = Category::where('id',$request->cat_id)->select('name')->first();
        $data=[
            'code' =>$request->code,
            'type' =>$request->type,
            'start_date' =>$request->start_date,
            'expire_date' =>$request->expire_date,
            'status' =>$request->status,
        ];
       $add= affiliateCoupon::create($data);

    $run = count($request->cat_id);

    for ($x = 0; $x < $run; $x++) {
        $data1=[
        'coupon_id' => $add->id,
        'cat_id' => $request->cat_id[$x],
        'value' => $request->values[$x],
        'commission' => $request->commissions[$x],
       ];
       $couponDetails = AffiliateCouponDetails::create($data1);
    }

        return redirect()->route('admin.affiliate.affiliateCouponShow')->with([
            'message' => 'Coupon Created successfully',
            'alert-type' => 'success'
        ]);
        
    }
    
      //delete affilifate coupon
      public function affiliate_coup_delete($id) {
         
        // Find the coupon by ID
    $coupon = AffiliateCoupon::find($id);
    // Check if the coupon exists
    if (!$coupon) {
        return redirect()->back()->with('error', 'Coupon not found');
    }
    // Delete the coupon
    $coupon->delete();
    // Redirect back with a success message
    return redirect()->back()->with('success', 'Coupon deleted successfully');

}

//
public function affiliate_coup_edit($id){
    $category = Category::whereNull('parent_id')->get(['id','name']);
    $coupon_detail = AffiliateCoupon::where('id',$id)->first();
    return view('backend.affiliate.affiliate_coup_edit', compact('coupon_detail', 'category'));
}

//update affiliate coupon
public function affiliate_coup_update(Request $request) {
    //dd($request->all());
    $id = $request->id;
    //checking for th affiliate code is already exist or not

    $cat_name = Category::where('id',$request->cat_id)->select('name')->first();
    
    AffiliateCoupon::where('id',$id)->update([
        'code' =>$request->code,
        'type' =>$request->type,
        'start_date' =>$request->start_date,
        'expire_date' =>$request->expire_date,
        'status' =>$request->status,
    ]);

$run = count($request->cat_id);

for ($x = 0; $x < $run; $x++) {
    $data1=[
    'coupon_id' => $id,
    'cat_id' => $request->cat_id[$x],
    'value' => $request->values[$x],
    'commission' => $request->commissions[$x],
   ];
   $couponDetails = AffiliateCouponDetails::where('id',$id)->update($data1);
}

return redirect()->route('admin.affiliate.affiliateCouponShow')->with([
    'message' => 'Coupon Updated successfully',
    'alert-type' => 'success'
]);

} 

    public function assignCoupon(User $user)
    {
        $id= $user->id;
        $getCat = User::where('id',$user->id)->select('cat_id')->first();
        $cat_id =explode(',',$getCat->cat_id);
        $coupons = [];
        foreach($cat_id as $ids){
        $data =  DB::table('affiliate_coupon_details')
        ->join('affiliateCoupon','affiliate_coupon_details.coupon_id','affiliateCoupon.id')
        ->where('affiliateCoupon.assign',0)
        ->where('affiliate_coupon_details.cat_id',$ids)
        ->select('affiliateCoupon.*','affiliate_coupon_details.value as values')
        ->get();
        if($data){
        array_push($coupons,$data);
        }
        }
        $coupons = $coupons[0];

        return view('backend.affiliate.assigncoupon', compact('user','coupons','id'));
    }

    public function affiliateassign(Request $request)
    {
        $coupon_id=$request->coupon_id;
        $id=$request->id;
        $data=[
            'coupon_id' =>$coupon_id,
            'affiliate_id' =>$id,
            'status' =>1,
        ];
        $coupUpdate= affiliateCoupon::where('id',$coupon_id)->update(['assign'=>1]);
        $add= AffCouponAssing::create($data);
        return redirect()->back()->with([
            'message' => 'Coupon successfully assign',
            'alert-type' => 'success'
        ]);
    }

    public function assignCouponList(User $user)
    {
        $id= $user->id;
        $coup_id = AffCouponAssing::where('affiliate_id',$id)->select('coupon_id')->orderBy('id', 'DESC')->get();
        $coupons=[];
        foreach($coup_id as $coup_id){
        $coup= affiliateCoupon::where('id',$coup_id->coupon_id)->first();
        array_push($coupons,$coup);
        }


        return view('backend.affiliate.assingCouponList', compact('user','coupons','id'));
    }

    public function affiliateCouponUsers(Request $request,User $user)
    {
        $coupon_id= $user->id;
         $coupons = Referral_wallet::where('aff_coupan_id',$coupon_id)->orderBy('id', 'DESC')->get();
        return view('backend.affiliate.affiliateCouponUsers', compact('user','coupon_id','coupons'));
    }

    public function affiliatePayment($id)
    {
       $check = DB::table('referral_wallets')->where('id',$id)->first();
        if(!$check){
            return redirect()->back()->with([
                'message' => 'Sorry Try Again',
                'alert-type' => 'danger'
            ]);       
         }
         $update = DB::table('referral_wallets')->where('id',$id)->update(['payment_status'=> 1]);
         if($update == 0){
            return redirect()->back()->with([
                'message' => 'Payment Fail',
                'alert-type' => 'danger'
            ]);  
         }
         return redirect()->back()->with([
            'message' => 'Payment successfully Done',
            'alert-type' => 'success'
        ]);

    }
    public function update_request(User $user)
    {
        $id=$user->id;
        $user = AffChangeRequest::where('user_id',$user->id)->orderBy('id', 'desc')->first();
        return view('backend.affiliate.requestUpdate', compact('user','id'));


    }

    public function final_request(Request $request,$id)
    {
        //dd($request,$id);
        $users = User::where('role',4)
            ->when(\request()->keyword != null, function ($query) {
                $query->search(\request()->keyword);
            })
            ->when(\request()->status != null, function ($query) {
                $query->whereStatus(\request()->status);
            })
            ->orderBy(\request()->sortBy ?? 'id', \request()->orderBy ?? 'desc')
            ->paginate(\request()->limitBy ?? 10);

        // $update = DB::table('users')->where('id',$id)->update(['email'=> $request->email, 'account_number'=> $request->account_number,'update_request'=> 0]);
        $update = DB::table('users')->where('id',$id)->update(['sort_code'=> $request->sort_code, 'name_on_account'=> $request->name_on_account, 'account_number'=> $request->account_number,'update_request'=> 0]);
        
        $user = AffChangeRequest::where('user_id',$id)->update(['aproval_status'=> 1, 'affiliate_req_status'=> 1]);
        
        return view('backend.affiliate.index', compact('users'));

    }

    public function accept_payment_request(User $user)
    {
        $id = $user->id;
        $data= [];
        $get_coupon = DB::table('affiliate_coupon_assign')->where('affiliate_id', $id)->pluck('id');
                        foreach ($get_coupon as $coupon) {
                            $wallet2 = DB::table('referral_wallets')
                                ->select(
                                    DB::raw('DATE_FORMAT(payment_request_date, "%Y-%m-%d %H:%i:%s") as datetime'),
                                    DB::raw('SUM(commission_ammount) as total_commission')
                                )
                                ->where('aff_coupan_id', $coupon)
                                ->where('payment_status', 0)
                                ->where('delivery_status', 1)
                                ->where('payment_request', 1)
                                ->groupBy('datetime')
                                ->get();
                            
                            foreach ($wallet2 as $entry) {
                                $date = $entry->datetime;
                                if (!isset($data[$date])) {
                                    $data[$date] = 0;
                                }
                                $data[$date] += $entry->total_commission;
                            }
                        }

                        return view('backend.affiliate.accept_payment_request', compact('data'));


    }

    public function accept_payment(Request $request)
    {
        $requestedDate = $request->date;
        $desiredDateTime = Carbon::parse($requestedDate);

$data = Referral_wallet::where('payment_request_date', $desiredDateTime)->update(['payment_request'=> 2]);
return redirect()->back()->with([
    'message' => 'Payment successfully Done',
    'alert-type' => 'success'
]);

     }

}
