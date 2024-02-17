@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
    <div class="card-header py-3 d-md-flex d-sm-block">
            <h6 class="m-0 mb-3 mb-md-0 font-weight-bold text-primary">
                Affilates 
            </h6>

            <!-- <div class="ml-auto">
                @can('create_user')
                    <a href="{{ route('admin.affiliate.create') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-plus"></i>
                    </span>
                        <span class="text">Add Affilate</span>
                    </a>
                @endcan
            </div> -->
        </div>
        <!-- @include('partials.backend.filter', ['model' => route('admin.affiliate.index')]) -->

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>No.</th>
                    <!-- <th>Image</th> -->
                    <th>Name</th>
                    <th>Email & Phone</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Created at</th>
                    <th>Coupons</th>
                    <th>Update Request</th>
                    <th>Payment Request</th>
                    <th class="text-center" style="width: 30px;">Details</th>
                </tr>
                </thead>
                <tbody>
                    
                    
                @forelse($users as $userkey=>$user)
                    <tr>
                        <td>{{$userkey+1}}</td>
                        <!-- <td>
                            @if($user->user_image)
                                <img src="{{ asset('storage/images/users/' . $user->user_image) }}" alt="{{ $user->full_name }}" class="img-profile rounded-circle">
                            @else
                                <img src="{{ asset('img/avatar.png') }}" alt="{{ $user->full_name }}" width="60" height="60">
                            @endif
                        </td> -->
                        <td>
                            <!-- <a href="{{ route('admin.users.show', $user->id) }}"> -->
                                {{ $user->full_name }}
                            <!-- </a><br> -->
                        </td>
                        <td>{{ $user->email }}<br>
                            {{ $user->phone }}
                        </td>
                        @php 
                        $cat_name = DB::table('categories')->where('id',$user->cat_id)->select('name')->first();
                        @endphp
                        
                        <td>{{ $cat_name->name ??'----' }}</td>
                        
                        <td>{{ $user->status }}</td>
                        <td>{{ $user->created_at ? $user->created_at->format('Y-m-d') : '' }}</td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('admin.assign.coupon', $user) }}" class="btn btn-sm btn-primary">
                                    <i class="fa fa-gift"></i>
                                </a>
                            </div>
                        </td>
                            <td>
                            @if($user->update_request == 1)
                                        <div class="btn-group btn-group-sm">
                                            <a href="{{ route('admin.update.request', $user) }}" class="btn btn-sm btn-primary">
                                               Requested
                                            </a>
                                        </div>
                            @else 
                            -----
                            @endif 
                            </td>

                            <td>
                            @php
                      $get_coupon = DB::table('affiliate_coupon_assign')->where('affiliate_id', $user->id)->get();
                      $arr2 = [];
                      foreach ($get_coupon as $coupon) {
                      $wallet2 = DB::table('referral_wallets')
                      ->select(
                          DB::raw('DATE_FORMAT(payment_request_date, "%Y-%m-%d %H:%i:%s") as datetime'),
                          DB::raw('SUM(commission_ammount) as total_commission')
                      )
                      ->where('aff_coupan_id', $coupon->id)
                      ->where('payment_status', 0)
                      ->where('delivery_status', 1)
                      ->where('payment_request', 1)
                      ->groupBy('datetime')
                      ->first(); 
                      if($wallet2){
                      array_push($arr2, $wallet2);
                        }
                        }
                      @endphp
                            @if($arr2)
                                        <div class="btn-group btn-group-sm">
                                            <a href="{{ route('admin.accept.payment.request', $user) }}" class="btn btn-sm btn-primary">
                                               Requested
                                            </a>
                                        </div>
                            @else 
                            -----
                            @endif 
                            </td>
                        
                        <td>
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('admin.affiliate_edit', $user) }}" class="btn btn-sm btn-primary">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.assign.couponlist', $user) }}" class="btn btn-sm btn-primary">
                                    <i class="fa fa-list"></i>
                                </a>
                                
                                <!-- <a href="javascript:void(0);"
                                   onclick="if (confirm('Are you sure to delete this record?'))
                                       {document.getElementById('delete-tag-{{ $user->id }}').submit();} else {return false;}"
                                   class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                            <form action="{{ route('admin.affiliate_delete', $user) }}"
                                  method="POST"
                                  id="delete-tag-{{ $user->id }}" class="d-none">
                                @csrf
                                @method('DELETE')
                            </form> -->
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center" colspan="6">No users found.</td>
                    </tr>
                @endforelse
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="6">
                        <div class="float-right">
                            {!! $users->appends(request()->all())->links() !!}
                        </div>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
