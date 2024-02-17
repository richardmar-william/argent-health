@extends('layouts.app')
@section('title', 'User Orders')
@section('content')
<body class="dashboard-open">

    <!-- <section class="breadcrumb-area comon-padding" style="background-color: #09c6a2">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>Orders</h2>
                <ul>
                    <li><a href="{{route('home')}}">home</a></li>
                    <li> My orders</li>
                </ul>
            </div>
        </div>
    </section> -->

    <section class="user-dashboard py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="user-dash-info">
                        <div class="dashboard-left-inr">
                        <div class="table-responsive mb-4">
                    <table class="table">
                        <thead class="bg-light">
                            <tr>
                                <th class="border-0" scope="col"><strong class="text-small text-uppercase">Id</strong></th>
                                <!-- <th class="border-0" scope="col"><strong class="text-small text-uppercase">Images</strong></th> -->
                                <th class="border-0" scope="col"><strong class="text-small text-uppercase">Products</strong></th>
                                <th class="border-0" scope="col"><strong class="text-small text-uppercase">Sub Total</strong></th>
                                <th class="border-0" scope="col"><strong class="text-small text-uppercase">Total</strong></th>
                          
                            </tr>
                        </thead>
                        <tbody>
                            @php
                              $order = DB::table('orders')->where('id', $ids)->first();
                               // dd($order->session_id); 
                               $product = DB::table('temp')->where('session_id', $order->session_id)->first();
                               $product_id = $product->product_ids;
                              // dd($product_id);
                               $prod = explode(",", $product_id);
                               //dd($prod); 
                               $prod_name = DB::table('products')->whereIn('id',$prod)->get();  
                               //dd($prod_name);
                                                         
                           @endphp
                        
                            <tr>
                                <td>{{ $order->id }}</td>
                                <!-- <td>
                                   @foreach($prod as $img)
                                       
                                   @endforeach
                                </td> -->
                                <td>
                                   @foreach($prod_name as $pro)
                                       <p>{{ $pro->name }},</p>
                                   @endforeach
                                </td>
                                <td>{{ $order->subtotal }}</td>
                                <td>{{ $order->total }}</td>
                                
                            </tr>
                        </tbody>
                    </table>

                </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    @include('partials.frontend.user.sidebar')
                </div>
            </div>
        </div>
    </section>
</body>
@endsection
