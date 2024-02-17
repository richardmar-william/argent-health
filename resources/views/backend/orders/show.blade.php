@extends('layouts.admin')
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">Order ({{ $order->ref_id }})</h6>
            <div class="ml-auto">
                <form action="{{ route('admin.orders.update', $order) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-row align-items-center">
                        <label class="sr-only" for="inlineFormInputGroupUsername">Order Status</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Order status</div>
                            </div>
                            <select class="form-control" name="order_status" style="outline-style: none;" onchange="this.form.submit()">
                                <option value=""> Choose Action </option>
                                @foreach($orderStatusArray as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="d-flex">
            <div class="col-8">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th>Ref. Id</th>
                            <td>{{ $order->ref_id }}</td>
                            <th>Customer</th>
                            <td><a href="{{ route('admin.users.show', $order->user_id) }}">{{ $order->user->full_name }}</a></td>
                        </tr>
                        <tr>
                            @php
                              if(isset($order->user_address_id)){
                               $address1 = DB::table('delivery_address')->where('id',$order->user_address_id)->first();
                              }
                               
                              $address = DB::table('delivery_address')->where('user_id',$order->user_id)->first();
                              // dd($address);
                            @endphp
                            <th>Address</th>
                            <td>  
                                    {{ isset($address1->address) ? $address1->address : $address->address??'' }} {{ isset($address1->city) ? $address1->city : $address->city??'' }} {{ isset($address1->zip_code) ? $address1->zip_code : $address->zip_code??'' }}
                                </a>
                            </td>
                            <th>Shipping Company</th>
                            <td>Royal Mail{{-- $order->shippingCompany->name . '('. $order->shippingCompany->code .')' --}}</td>
                        </tr>
                        <tr>
                            <th>Created date</th>
                            <td>{{ $order->created_at->format('d-m-Y h:i a') }}</td>
                            <th>Order status</th>
                            <td>{!! $order->statusWithBadge() !!}</td>
                        </tr>
                        <tr>
                            <td>Questionnaire</td>
                            <td>
                                <div style="width:100px;">
                                    <a href="{{ route('admin.order.qn',['s_id'=> $order->session_id]) }}" class="btn btn-primary">
                                    <span class="icon text-white-50">
                                    </span>
                                        <span class="text">Questions</span>
                                    </a>
                                </div>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-4">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th>Subtotal</th>
                            <td>{{ $order->currency() . $order->subtotal }}</td>
                        </tr>
                        <tr>
                            <th>Discount code</th>
                            <td>{{ $order->discount_code }}</td>
                        </tr>
                        <tr>
                            <th>Discount</th>
                            <td>{{ $order->currency() . $order->discount }}</td>
                        </tr>
                        <tr>
                            <th>Shipping</th>
                            <td>{{ $order->currency() . $order->shipping }}</td>
                        </tr>
                        <!-- <tr>
                            <th>tax</th>
                            <td> $order->currency() . $order->tax }}</td>
                        </tr> -->
                        <tr>
                            <th>Amount</th>
                            <td>{{ $order->currency() . $order->total }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Transactions</h6>
        </div>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Transaction</th>
                    <th>Transaction number</th>
                    <th>Payment result</th>
                    <th>Action date</th>
                </tr>
                </thead>
                <tbody>
                @forelse($order->transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->transaction_status }}</td>
                        <td>{{ $transaction->transaction_number }}</td>
                        <td>{{ $transaction->payment_result }}</td>
                        <td>{{ $transaction->created_at->format('Y-m-d h:i a') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No transactions found</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div> -->
    

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Details</h6>
        </div>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Product</th>
                    <th>Strength</th>
                    <th>Quantity</th>
                    <th>Bottle Type</th>
                    <th>Subscription Type</th>
                </tr>
                </thead>
                <tbody>
               @php
                  $temp = DB::table('temp')->where('session_id', $order->session_id)->first();
                    // dd($temp->product_ids);
                    $product = DB::table('products')->where('id',$temp->product_ids)->first();
                    $tag = DB::table('product_tags')->where('product_id', $product->id)->first();
                   if(isset($tag->tag_id)) {
                    $type = DB::table('tags')->where('id',$tag->tag_id)->first();
                   }
                  @endphp
                    <tr>
                        <td>
                            <a href="{{ route('admin.products.show', $product->id) }}">
                                {{ $product->name }}
                            </a>
                        </td>
                        <td>{{ isset($product->_mg) ? $product->quantity_mg : "Not Applicable" }} @if(isset($product->_mg)) mg @endif</td>
                        <td>{{ isset($product->quantity) ? $product->quantity : "Not Applicable" }} Tablets</td>
                        <td>{{ isset($type->name) ? $type->name : "Not Applicable" }} </td>
                        <td>in process </td>
                    </tr>
                  
                    <!-- <tr>
                        <td colspan="2">No products found</td>
                    </tr> -->
               
                </tbody>
            </table>
        </div>
    </div>
@endsection
