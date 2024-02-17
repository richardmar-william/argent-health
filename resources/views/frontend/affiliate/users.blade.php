
@include('layouts.affiliate.header')

<!-- sidebar start -->
<div class="user-dashboard py-5">
      <div class="row">
          
          <div class="col-lg-12">
<!-- Sign Up start -->

<section class="user-dashboard affiliate aff-pd" id="sign_sec">
<div class="container">
<div class="row">
  <div class="col-lg-12">
      <div class="user-dash-info">
          <div class="dashboard-left-inr">
                      <div class="d-md-flex d-user-title">
                          <h2 class="h5 text-uppercase mb-4">Users</h2>
                      </div>
                     @php 
                     //dd($affiliate);
                      $affiliate_referral = $affiliate->referral_code;
                      //dd($affiliate_referral);
                     @endphp 
                     
                     <div class="table-responsive">
                     <table class="table table-hover">
        <thead class="">
            <tr>
                <th>No.</th>
                <!-- <th>Date</th> -->
                <th>User Name</th>
                <th>Cart Ammount</th>
                <th>Commission Ammount</th>
                <th>Status</th>
                <th>Subscription</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody class="">
        @php 
            $get_coupon = DB::table('affiliate_coupon_assign')->where('affiliate_id', auth()->user()->id)->get();
            $arr = [];
            foreach ($get_coupon as $coupon) {
                $wallet = DB::table('referral_wallets')->where('aff_coupan_id', $coupon->id)->where('delivery_status',1)->get();  
                if($wallet){
                array_push($arr, $wallet);
                }
                }
        @endphp
        @foreach($arr[0] as $userkey=>$wallets)
            @php
               $user = DB::table('users')->where('id',$wallets->user_id)->first();
            @endphp
            <tr class="">
                <td>{{$userkey+1}}</td>
                <!-- <td>{{ $wallets->created_at }}</td> -->
                 <td>{{ isset($user->full_name) ? $user->full_name : '' }}</td>
                <td>{{ $wallets->total_ammount }}</td> 
                <td>{{ $wallets->commission_ammount }}</td>
                <td>Active</td>
                <td>3 Month</td>
                <td>{{ $wallets->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
        </div>
          </div>
      </div>
  </div>
</div>
</div>
</section>

<!-- Sign Up end -->
          </div>
       <!-- side bar start -->
          @include('layouts.affiliate.sidebar')

          <!-- side bar end -->
      </div>
  </div>
  <!-- sidebar end -->


@include('layouts.affiliate.footer')