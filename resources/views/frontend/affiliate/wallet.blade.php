
@include('layouts.affiliate.header')

<!-- sidebar start -->
<div class="user-dashboard py-5">
      <div class="row">
          
          <div class="col-lg-12">
<!-- Sign Up start -->

<section class=" user-dashboard affiliate wallet aff-pd" id="sign_sec">
<div class="container">
<div class="row">
  <div class="col-lg-12">
      <div class="user-dash-info">
      @if(!empty($successMsg))
       <div class="alert alert-success"> {{ $successMsg }}</div>
            @endif
        <div class="d-flex d-user-title">
              <h2 class="h5 text-uppercase mb-4">Wallet</h2>
              <div class="hist-box">
                      <a href="{{ route('wallet.list') }}">History</a>
                </div>
        </div>
        <div class="card shadow bg-white ab">
                  <div class="bal-box">
                      @php
                      $get_coupon = DB::table('affiliate_coupon_assign')->where('affiliate_id', auth()->user()->id)->pluck('id');
                       $wallet = DB::table('referral_wallets')
                           ->whereIn('aff_coupan_id', $get_coupon)
                           ->where('payment_status', 0)
                           ->where('delivery_status', 1)
                           ->where('payment_request', 0)
                           ->sum('commission_ammount');

                       $completed_coupons = DB::table('referral_wallets')
                           ->whereIn('aff_coupan_id', $get_coupon)
                           ->where('payment_status', 0)
                           ->where('delivery_status', 1)
                           ->where('payment_request', 0)
                           ->pluck('id');
                           
                             $arr2 = [];
                             
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
                            if (!isset($arr2[$date])) {
                                $arr2[$date] = 0;
                            }
                            $arr2[$date] += $entry->total_commission;
                        }
                    }
                      @endphp
                      <p>Balance:  
                        @if(!$wallet)
                        <span class="bal-inner-box">£00</span>
                        @else
                        <span class="bal-inner-box">£{{$wallet}}</span>
                        @endif
                      </p>
                  </div>
        </div>
        <div class="l-s-button-box  udate-btn_wal hist-box mt-3">
           <a href="{{ route('affiliate.payment', $completed_coupons)}}"  type="submit">Withdrawal</a>
        </div>
        <div class="d-flex d-user-title">
              <h2 class="h5 text-uppercase mb-4">Payment Request</h2>
        </div>
        <div class="card shadow bg-white ab">
              <div class="bal-box">
                @if($arr2)
              <table class="table table-hover">
        <thead class="">
            <tr>
                <th>No.</th>
                <th>DateTime</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody class="">
            @forelse($arr2 as $datetime => $total_commission)
            <tr class="">
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $datetime }}</td>
            <td>£{{ $total_commission }}</td>
            </tr>
            @empty
                    <tr>
                        <td class="text-center" colspan="8">You have not Payment Request.</td>
                    </tr>
                @endforelse
        </tbody>
    </table>
    @endif

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