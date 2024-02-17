@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
    <div class="card-header py-3 d-md-flex d-sm-block">
            <h6 class="m-0 mb-3 mb-md-0 font-weight-bold text-primary">
                Affiliate Coupons
            </h6>
            <div class="ml-auto">
                    <a href="{{ ('affiliates-coupon') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-plus"></i>
                    </span>
                        <span class="text">New coupon</span>
                    </a>
            </div>
        </div>

        @include('partials.backend.filter', ['model' => route('admin.affiliate.affiliateCouponShow')])
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif
        @if (\Session::has('error'))
            <div class="alert alert-danger">
                <ul>
                    <li>{!! \Session::get('error') !!}</li>
                </ul>
            </div>
        @endif
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Code</th>
                    <th>Category</th>
                    <th>Value</th>
                    <th>Validity date</th>
                    <th>Assing</th>
                    <th>Created at</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <!-- <th class="text-center" style="width: 30px;">Action</th> -->
                </tr>
                </thead>
                <tbody>
                @forelse($coupons as $key => $coupon)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>
                                {{ $coupon->code }}
                            </td>
                            @php
                            $arr= [];
                            $arr1= [];
                            $details_id = DB::table('affiliate_coupon_details')->where('coupon_id',$coupon->id)->get();
                            foreach ($details_id as $details){
                                $cat = DB::table('categories')->where('id',$details->cat_id)->select('name')->first();
                                array_push($arr,$cat->name);
                                array_push($arr1,$details->value);
                            }           
                            @endphp
                            <td>
                                {{ implode(",",$arr) }}
                            </td>
                        <td>{{ $coupon->type == 'fixed' ? implode("$,",$arr1).'$' : implode("%,",$arr1).'%' }}</td>
                        <td>Start:  {{ $coupon->start_date != '' ? Carbon\Carbon::parse($coupon->start_date)->format('Y-m-d') : '-' }}
                            <br>
                            Expire:
                            <span class="text-danger">
                                {{ $coupon->expire_date != '' ? Carbon\Carbon::parse($coupon->expire_date)->format('Y-m-d') : '-' }}
                            </span>
                        </td>
                        @if($coupon->assign == 0)
                        <td>No</td>
                        @else
                        <td>Yes</td>
                        @endif
                        <td>{{ $coupon->created_at ?? $coupon->created_at->format('Y-m-d h:i a') }}</td>

                        <td><a href="{{ route('admin.affiliate_coup_edit', ['id' => $coupon->id]) }}" id="page-edit"><i class="fa fa-edit"></i></a></td>
                        <td>
                            <a href="{{ route('admin.affiliate_coup_delete', ['id' => $coupon->id]) }}" id="page-delete"> 
                            <button class="btn  btn-danger"><i class="fa fa-trash "></i></button></a>
                        </td>
                        
                        <!-- <td>
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('admin.coupons.edit', $coupon) }}" class="btn btn-sm btn-primary">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="javascript:void(0);"
                                   onclick="if (confirm('Are you sure to delete this record?'))
                                       {document.getElementById('delete-coupon-{{ $coupon->id }}').submit();} else {return false;}"
                                   class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                            <form action="{{ route('admin.coupons.destroy', $coupon) }}"
                                  method="POST"
                                  id="delete-coupon-{{ $coupon->id }}" class="d-none">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td> -->
                    </tr>
                @empty
                    <tr>
                        <td class="text-center" colspan="8">No coupons found.</td>
                    </tr>
                @endforelse
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="8">
                        <div class="float-right">
                            {!! $coupons->appends(request()->all())->links() !!}
                        </div>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
