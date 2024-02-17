@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
    <div class="card-header py-3 d-md-flex d-sm-block">
            <h6 class="m-0 mb-3 mb-md-0 font-weight-bold text-primary">
            Affiliate Assing Coupon List-( {{ $user->full_name }} )
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
                    <th>Code</th>
                    <!-- <th>Value</th> -->
                    <th>Validity date</th>
                    <!-- <th>Status</th> -->
                    <th>Created at</th>
                    <th class="text-center" style="width: 30px;">Coupon User</th>
                </tr>
                </thead>
                <tbody>
                @forelse($coupons as $coupon)
                    <tr>
                        <td>
                                {{ $coupon->code }}
                            </td>
                        <!-- <td>{{ $coupon->values }}{{ $coupon->type == 'fixed' ? '$' : '%' }}</td> -->
                        <td>Start:  {{ $coupon->start_date != '' ? Carbon\Carbon::parse($coupon->start_date)->format('Y-m-d') : '-' }}
                            <br>
                            Expire:
                            <span class="text-danger">
                                {{ $coupon->expire_date != '' ? Carbon\Carbon::parse($coupon->expire_date)->format('Y-m-d') : '-' }}
                            </span>
                        </td>
                        <!-- <td>{{ $coupon->status }}</td> -->
                        <td>{{ $coupon->created_at ?? $coupon->created_at->format('Y-m-d h:i a') }}</td>
                        <td>
                        <div class="btn-group btn-group-sm">
                        <a href="{{ route('admin.affiliateCouponUsers', $coupon->id) }}" class="btn btn-sm btn-primary">
                                    <i class="fa fa-users"></i>
                                </a>
                        <!-- <a href="{{ route('admin.affiliateassign.coupon', ['coupon_id'=>$coupon->id,'id'=>$id]) }}" class="btn btn-sm btn-primary">
                                    <i class="fa fa-check"></i>
                                </a> -->
                            </div>
                        </td> 
                    </tr>
                @empty
                    <tr>
                        <td class="text-center" colspan="8">No coupons found.</td>
                    </tr>
                @endforelse
                </tbody>
                <!--  -->
                </tfoot>
            </table>
        </div>
    </div>
@endsection
