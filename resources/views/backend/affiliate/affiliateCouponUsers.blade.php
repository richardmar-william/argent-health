@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
    <div class="card-header py-3 d-md-flex d-sm-block">
            <h6 class="m-0 mb-3 mb-md-0 font-weight-bold text-primary">
            Affiliate Assing Coupon Users
            </h6>
            <div class="ml-auto">
                    <!-- <a href="{{ ('admin.affiliate.index') }}" class="btn btn-primary"> -->
                    <span class="icon text-white-50">
                    </span>
                        <span onclick="history.back()" class="text btn btn-primary">Back</span>
                    <!-- </a> -->
            </div>
        </div>

        <!-- @include('partials.backend.filter', ['model' => route('admin.affiliate.affiliateCouponShow')]) -->

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>User Name</th>
                    <th>Amount</th>
                    <th>Coupon Code</th>
                    <th>Commision</th>
                    <!-- <th class="text-center" style="width: 30px;">Action</th> -->
                </tr>
                </thead>
                <tbody>
                @forelse($coupons as $coupon)
                    <tr>
                    @php 
                        $cat_name = DB::table('users')->where('id',$coupon->user_id)->select('full_name')->first();
                        @endphp
                        <td>{{ $cat_name->full_name }}</td>
                        <td>{{ $coupon->total_ammount }}</td>
                        @php
                        $coupon_name = DB::table('affiliateCoupon')->where('id',$coupon->aff_coupan_id)->select('code')->first();
                        @endphp
                        <td>{{ $coupon_name->code }}</td>
                        <td>{{ $coupon->commission_ammount }}</td>
                        <!-- <td>
                        <div class="btn-group btn-group-sm">
                        @if($coupon->payment_status == 0)
                        <a href="{{ route('admin.affiliatePayment', $coupon->id) }}" class="btn btn-sm btn-primary">Pay</a>
                        @else
                        <p class="btn btn-sm btn-primary">Paid</p>
                        @endif
                            </div>
                        </td>  -->
                    </tr>
                @empty
                    <tr>
                        <td class="text-center" colspan="8">No User Found.</td>
                    </tr>
                @endforelse
                </tbody>
                <!--  -->
                </tfoot>
            </table>
        </div>
    </div>
@endsection
