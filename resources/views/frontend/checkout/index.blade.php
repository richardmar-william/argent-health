
<?php
    if(Auth::check()) {
        $user = DB::table('users')->where('id', Auth::user()->id)->first();
    
        $user_name = $user->full_name;
        $user_tel = $user->phone;
        $user_email = $user->email;
    }
    $savedAddress = [];
?>

<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="language" content="en" />
    <meta name="country" content="us" />
    <meta name="robots" content="INDEX, FOLLOW" />
    <title>Checkout</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta property="og:title" content="html" />
    <meta property="og:description" content="" />
    <meta name="section" content="html" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:type" content="website" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta name="bucls" content="SHARED-SERVICES" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Khand:wght@300;400;500;600;700&family=Yeseva+One&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Yeseva+One&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yeseva:wght@300;400;500;600;700;800;900&family=Yeseva+One&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/quest-v2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/quest-v2-respsv.css') }}">
    <link rel="stylesheet" href="{{ asset('css/quest-v2.1.css') }}">

    <livewire:styles />
    @yield('style')
    <livewire:scripts />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <x-livewire-alert::flash />
    <x-livewire-alert::scripts />
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Add CkEditor -->


    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KV2ZB6ZG');</script>
    <!-- End Google Tag Manager -->
<style>
            .gpay-card-info-iframe.gpay-card-info-iframe-fade-in{
                display: none;
            }
            .google-pay-area, .apple-pay-area {
                display: flex;
                justify-content: center;
                margin-top: 20px;
            }
            .apple-pay-area {
                display: none;
            }
            .google-pay-area .google-pay-button, #apple-pay-button {
                /* height: 44px;
                max-height: 44px; */
                overflow: hidden
            }
            .payment-method-btns {
                margin-top: 2rem;
            }
            #apple-pay-button {
                display: flex;
                justify-content: center;
                align-items: center;
                /* height: 44px;
                max-height: 44px; */
                /* background-color: #242423; */
                border-radius: 30px;
                overflow: hidden; 
                /* padding: 0px 40px; */
            }
            .gpay-card-info-container.black.long.en{
                /* max-height: 44px; */
                background-color: #333;
                color: white;
                border-radius: 30px;
                overflow: hidden; 
                background-image: url(/frontend/images/gpay.png); 
                background-repeat: no-repeat; 
                background-size: contain;
                height: 4rem;
                width: 100%;
                background-position: center;
            }
            .gpay-card-info-animation-container {
                display: none !important;
            }
            #google-pay-button div {
                display: none !important;
            }
            .quest-v2-content .form-radio label {
                padding: 0.5rem 0rem 0.5rem 2.4rem;
            }
            .quest-v2-content [type="radio"]:checked + label:before,
            .quest-v2-content [type="radio"]:not(:checked) + label:before {
                left: 0px;
            }
            .quest-v2-content [type="radio"]:checked + label:after,
            .quest-v2-content [type="radio"]:not(:checked) + label:after {
                left: 4px;
            }
            #apple-pay-button img{
                height: 4rem;
            }
            @media screen and (min-width: 992px) {
                .logged-in {
                    display: block !important;
                }
                #apple-pay-button img{
                    height: 3rem;
                }
            }
        </style>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KV2ZB6ZG"
            height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>

<!-- Matomo Tag Manager -->
<script>
    var _mtm = window._mtm = window._mtm || [];
    _mtm.push({'mtm.startTime': (new Date().getTime()), 'event': 'mtm.Start'});
    (function() {
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src='https://analytics.agenthealth.co.uk/js/container_JjcvL0pk.js';
        s.parentNode.insertBefore(g,s);
    })();
</script>
<!-- End Matomo Tag Manager -->

    <section class="questionnaire-v2-main">
        <div class="quest-v2-header">
            <div class="container-fluid">
                <a class="quest-logo" href="{{ url('/') }}">
                    <!-- <img src="images/quest-logo.png" alt=""> -->
                    <img src="{{ asset('images/quest-logo.png')}}" alt="">
                </a>
            </div>
        </div>
        <div class="quest-v2-content">
            <div class="container-fluid">
                <div class="quest-v2-inner-wrap">
                    <!-- 13th step end -->
                    <div class="quest-v2-step" id="step14">

                        <div class="row quest-ordrsmry-wrap">
                            <div class="col-lg-6 col-md-12 <?php echo Auth::check() ? "logged-in" : "login" ?> <?php echo Session::get('new_user') == 1 ? "new-user-auth":"";?>">
                                <input type="hidden" name="session_id" value="{{$sessionId}}">
                                <input type="hidden" name="total_price" value="{{$total_price}}">
                                
                                <div class="quest-ordrsmry-left">
                                        <h1 class="card-heading" >
                                            <div>Order</div>
                                            <div>Summary</div>
                                        </h1>

                                    <!-- apply affiliate -->
                                    <div class="card-design mb-40">
                                        @foreach($product_data as $product)
                                        @php
                                        $first_time_discount = $product->first_time_disc;
                                        $category_id = $product->category_id;
                                        // dd($category_id);
                                        $price = $product->price;
                                        $name = $product->name;
                                        $desc = $product->description;
                                        $discount_price = abs( (float) $product->first_time_disc - (float) $product->price );
                                        $img = DB::table('media')->where('mediable_id',$product->id)->first();
                                        $tag = DB::table('product_tags')->where('product_id', $product->id)->first();
                                        if(isset($tag->tag_id)) {
                                        $type = DB::table('tags')->where('id',$tag->tag_id)->first();
                                        }
                                        $category_id = $product->category_id;
                                        @endphp

                                        <div class="qos-product">
                                            <img class="img-fluid"
                                                src="{{ asset('storage/images/products/') }}{{ '/'. $img->file_name}}"
                                                alt="gent-img2" />
                                        </div>
                                        <h1 class="product-title">{{$name}}</h1>
                                        <p class="product-desc">{{strip_tags($desc)}}</p>

                                        @php
                                        $monthList = DB::table("products")->where('name', $name)->orderBy("subscription_duration")->get()->toArray();
                                        @endphp
                                        <div class="row">
                                            @foreach($monthList as $month) 
                                                @php
                                                $img = DB::table('media')->where('mediable_id',$product->id)->first();
                                                @endphp
                                                @if($category_id == "33" || $category_id == "32") 
                                                <div class="col-lg-12 col-sm-12 mb-3 one-month-sb">
                                                    <div class="form-group form-radio">
                                                        <input type="radio" id="product_sub_month_0" name="input_product_sub" value="0" product-id="{{$month->id}}" product-img="{{ asset('storage/images/products/') }}{{ '/'. $img->file_name}}">
                                                        <label class="sub-leb" for="product_sub_month_0">
                                                            <h4>One time treatment plan</h4>
                                                        </label>
                                                    </div>
                                                </div>
                                                @endif
                                                @if($month->subscription_duration == 1)
                                                <div class="col-lg-12 col-sm-12 mb-3 one-month-sb">
                                                    <div class="form-group form-radio">
                                                        <input type="radio" id="product_sub_month_2" name="input_product_sub" checked="checked" value="1" product-id="{{$month->id}}" product-img="{{ asset('storage/images/products/') }}{{ '/'. $img->file_name}}">
                                                        <label class="sub-leb" for="product_sub_month_2">
                                                            <h4>1 month treatment plan</h4>
                                                        </label>
                                                    </div>
                                                </div>
                                                @else 
                                                <div class="col-lg-12 col-sm-12 mb-3 over-one-month-sb">
                                                    <div class="form-group form-radio">
                                                        <input type="radio" id="product_sub_month_3" name="input_product_sub" product-id="{{$month->id}}" value="3">
                                                        <label class="sub-leb" for="product_sub_month_3">
                                                            <span class="">Recommended</span>
                                                            <h4>{{$month->subscription_duration}} months treatment plan</h4>
                                                            <p>Save up to 30% with this treatment duration</p>
                                                        </label>
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                            </div>
                                        @endforeach
                                        <!-- <form id="myForm"> -->
                                           @if($total_price > $first_time_discount)
                                            <div class="qos-product-text text-dark mb-20 product-subtotal">Subtotal <div class="price text-dark">
                                                    £{{$total_price}}.00
                                                </div>
                                            </div>
                                           @else
                                           <div class="qos-product-text text-dark mb-20 product-subtotal">Subtotal <div class="price text-dark">
                                                    £{{$first_time_discount}}.00
                                                </div>
                                            </div>
                                           @endif

                                        <p class="clearText duration-label"><span id="dur_label">{{$product->subscription_duration}}</span> x months supply of treatment</p>
                                            <div class="qos-product-text">
                                                <ul class="list-group w-100 ">
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center border-0 p-0">
                                                        Online Consultation and Health Assessment
                                                        <span class="text-success">Included</span>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center border-0 p-0">
                                                        Continuous Support with Ongoing Reviews
                                                        <span class="text-success">Included</span>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center border-0 p-0">
                                                        Medical Evaluation and Screening
                                                        <span class="text-success">Included</span>
                                                    </li>
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center border-0 p-0">
                                                        Shipping
                                                        <span class="text-success">Included</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="cstm-border"></div>
                                            <div class="qos-product-multi qos-product-text">
                                            <ul class="list-group w-100">
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-center border-0 p-0">
                                                        First order discount
                                                        @if(true or $total_price > $first_time_discount)
                                                          <span class="discount-price">-£{{$discount_price}}</span>
                                                        @else
                                                        <span class="discount-price">£0</span>
                                                        @endif
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="cstm-border"></div>


                                            <div class="total-amount">
                                                <h3>Total</h3>
                                                <h3 id="final_price" class="text-default"> @if($category_id != 31)  <span class="text-grey"> <del>£{{$price}}</del></span> @endif <span id="first_time_disc"> £{{$first_time_discount}}.00 </span>
                                            </h3>
                                                <span id="totalAmt" class="d-none">{{$first_time_discount}}</span>
                                                <!-- <p><span id="user_off"></span>%Discount</p> -->
                                            </div>

                                        <div class="text-dark mt-10 orderText">
                                            You will receive a monthly delivery of your treatment during the subscription
                                        </div>

                                            <div class="coupon-area d-none">
                                        <div class="total-amount">
                                            <h3>Coupon Discount</h3>
                                            <h3 class="text-default">- <span id="couponTotal">0</span></h3>
                                            <!-- <p><span id="user_off"></span>%Discount</p> -->
                                        </div>
                                        <div class="total-amount">
                                            <h3>Order Total</h3>
                                            <h3 class="text-success"><span id="orderTotal">0</span></h3>
                                            <!-- <p><span id="user_off"></span>%Discount</p> -->
                                        </div>
                                        </div>


                                            <div class="cstm-border"></div>


                                            <div class="qos-product-text mb-3 mt-2">
                                                <input type="text" id="coupon_code" class="discount-cls-main"
                                                    name="coupon_code" value="" placeholder="Coupon/Gift Code" >
                                                <input type="hidden" id="input_couponTotal" value="">
                                                <input type="hidden" name="total_price" value="{{$total_price}}">
                                                <input type="hidden" name="session_id" value="{{$sessionId}}">

                                                <div class="qos-product-text"> <button type="button" id="coupon_btn"
                                                                                       class="btn-d-black">Apply Coupon</button></div>

                                                <p id="coupon_error"></p>
                                            </div>
                                        <!-- </form> -->
                                    </div>
                                </div>
                                <button class="btn-d-black" id="to_shipping" style="width: 100%; font-size: 1.2rem;">continue</button>
                            </div>

                            @if(!Auth::check())
                            

                            @if(!empty($successMsg))
                            <div class="alert alert-success"> {{ $successMsg }}</div>
                            @endif
                            <div class="col-lg-6 col-md-12 auths <?php echo Session::get('new_user') == 1 ? "new-user-auth":"";?>" id="signups">
                                <div class="row banner-img">
                                    <div class="col-12 text-center 2">
                                        <h1 class="account-signup">
                                            <div>
                                                Account 
                                            </div>
                                            <div>
                                                Sign Up
                                            </div>
                                        </h1>
                                        <img src="{{asset('frontend_new/images/money-back.png')}}" class="img-fluid"/>
                                    </div>
                                </div>
                                <div class="quest-ordrsmry-right">
                                    
                                    <div class="checkout-step">
                                        <div class="checkout-step1">Account</div>
                                        <div class="checkout-step1 disabled">-</div>
                                        <div class="checkout-step1 disabled checkout-step1-check"><i class='fa fa-circle-check'></i></div>
                                        <div class="checkout-step2 disabled">-</div>
                                        <div class="checkout-step2 disabled">Shipping</div>
                                        <div class="checkout-step2 disabled">-</div>
                                        <div class="checkout-step2 disabled checkout-step1-check"><i class='fa fa-circle-check'></i></div>
                                        <div class="checkout-step2 disabled">-</div>
                                        <div class="checkout-step3 disabled">Payment</div>
                                    </div>
                                    <div class='signin-desc'>We just need a few more details before we ship your order. These will be kept private</div>
                                    <!-- Signup form -->
                                    <form id="sign_form" action="{{ route('register_new') }}" method="POST"
                                        class="pb-30">
                                        @csrf
                                        <div class="form-group">
                                            <label for="email">Email address</label>
                                            <input type="email" class="form-control" name="email" value=""
                                                placeholder="Enter Here">
                                            <!-- <p class="text-end input-desc">We will let you know via email once your prescription has been issued.</p> -->
                                        </div>
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="pass" name="password"
                                                value="" placeholder="Enter Here">
                                        </div>
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                        <p class="mb-30 require-comment">We are required to confirm the identity of our members. Any
                                            incorrect details will cause delays to your order.</p>
                                        <div class="row">
                                            <div class="col-5 form-group">
                                                <label for="first_name">First Name</label>
                                                <input type="text" class="form-control" name="first_name" value=""
                                                    placeholder="Enter Here">
                                                <!-- <p class="text-end input-desc">We will let you know via email once your prescription has been issued.</p> -->
                                            </div>
                                            <div class="col-7 form-group">
                                                <label for="surname">Surname</label>
                                                <input type="text" class="form-control" name="surname" value=""
                                                    placeholder="Enter Here">
                                                <!-- <p class="text-end input-desc">We will let you know via email once your prescription has been issued.</p> -->
                                            </div>
                                        </div>
                                        <div class="form-group d-none">
                                            <label for="fName">Full Name</label>
                                            <input type="text" class="form-control" name="fName" value=""
                                                placeholder="Enter Here">
                                            <!-- <p class="text-end input-desc">We will let you know via email once your prescription has been issued.</p> -->
                                        </div>
                                        @error('fName')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                        <!-- <div class="form-group">
                                                <label for="Username">Legal Username</label>
                                                <input type="text" class="form-control" name="Surname" value="" placeholder="Enter Here">
                                            </div>
                                            @error('Surname')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror -->

                                        <div class="row">
                                            <div class="col-5 col-md-12">
                                                <div class="form-group">
                                                    <label for="dob">Date of birth</label>
                                                    <input type="date" class="form-control" id="dob" name="dob" value=""
                                                    placeholder="Day / Month / year">
                                                    <p id="age" style="color:red;"></p>
                                                </div>
                                                @error('dob')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-7 col-md-12">

                                                <div class="form-group">
                                                    <label for="number">Phone number</label>
                                                <input type="number" class="form-control" name="number" value=""
                                                placeholder="Enter Here">
                                                <p class="text-e20 20 20 20nd input-desc">In very rare cases our clinicians
                                                    may need to call you. They will always be discreet.</p>
                                                </div>
                                            </div>
                                            @error('number')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="Sex">Sex</label>
                                            <select class="form-control" aria-label="Gender Select" name="sex">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                        @error('sex')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror


                                        <div class="form-group">
                                            <label for="address ">Address</label>
                                            <input type="text" class="form-control" name="address" id="new_address"
                                                value="" placeholder="Enter Here">
                                        </div>
                                        @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="form-group">
                                                    <label for="postcode">Postcode</label>
                                                    <input type="text" class="form-control" id="zipcode" name="postcode" value=""
                                                        placeholder="Enter Here">
                                                </div>
                                                @error('postcode')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-7">
                                                <div class="form-group">
                                                    <label for="city">City</label>
                                                    <input type="text" id="city_dropdown" class="form-control" name="city"
                                                        value="" placeholder="Enter Here">
                                                </div>
                                                @error('city')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="quest-v2-btn form-btns">
                                            <!-- <a class="btn-d-black btn-wt-300 next-button" href="javascript:void(0)">Continue</a> -->
                                            <button id="cancel_order" type="button"
                                                class="btn-d-trans btn-wt-300 next-button">Cancel order</button>
                                            <button id="valid" type="submit"
                                                class="btn-d-black btn-wt-300 next-button">Payment</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <!-- Signups-->
                            <!--Adress & Order place-->

                            @else
                            @php
                                $user = DB::table('users')->where('id', Auth::user()->id)->first();
                                
                                $user_name = $user->full_name;
                                $user_tel = $user->phone;
                                $user_email = $user->email;
                            @endphp
                            <div class="col-lg-6 col-md-12 <?php echo Session::get('new_user') == 1 ? "new-user-auth":"";?>" id="address_order">
                                <div class="row banner-img">
                                    <div class="col-12">
                                        <div class="shipping-details-header">
                                            <div>Shipping</div>
                                            <div>details</div> 
                                        </div>
                                        <img src="{{asset('frontend_new/images/money-back.png')}}" class="img-fluid"/>
                                    </div>
                                </div>
                                <div class="quest-ordrsmry-right">
                                    <div class="checkout-step">
                                        <div class="checkout-step1">Account</div>
                                        <div class="checkout-step1 ">-</div>
                                        <div class="checkout-step1  checkout-step1-check"><i class='fa fa-circle-check'></i></div>
                                        <div class="checkout-step2">-</div>
                                        <div class="checkout-step2">Shipping</div>
                                        <div class="checkout-step2 disabled">-</div>
                                        <div class="checkout-step2 disabled checkout-step1-check"><i class='fa fa-circle-check'></i></div>
                                        <div class="checkout-step2 disabled">-</div>
                                        <div class="checkout-step3 disabled">Payment</div>
                                    </div>
                                    @php
                                    $user_id = auth()->user()->id;
                                    $addresses = DB::table('delivery_address')->where('user_id', $user_id)->orderBy("created_at", "desc")->first();
                                    $login_addreses = (isset($addresses->address)) ? $addresses->address:'';
                                    @endphp


                                    <h4 class="q-orsm-heading mb-30">Shipping details</h4>
                                    <div class="row">
                                        <div class="col col-md-12 col-lg-5 shipping-address" style="align-items: center; display: flex;">
                                            <label for="saved_address">Use saved address</label>
                                        </div>
                                        <div class="col col-md-12 col-lg-7">
                                            @php
                                            $user_id = auth()->user()->id;
                                            $address = DB::table('delivery_address')->where('user_id', $user_id)->orderBy("created_at", "desc")->get();

                                            $savedAddress = $address;
                                            @endphp
                                            <select class="form-control" aria-label="User saved address" name="saved_address" id="saved_address">
                                                @foreach($address as $adss)
                                                <option value="{{$adss->id}}">{{$adss->address}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row b_address">
                                        <!--billing address -->
                                        @if(!empty($successMsg))
                                        <div class="alert alert-success"> {{ $successMsg }}</div>
                                        @endif
                                        <div class="col-12">
                                            <form id="bill_address" method="POST"
                                            action="{{ route('delivery_address')}} ">
                                            @csrf
                                                <h4 class="q-orsm-heading mb-20">Billing address</h4>
                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <input type="text" class="form-control" name="address" id="new_address" value="{{$addresses->address}}"
                                                        placeholder="Enter Here">
                                                </div>
                                                @error('address')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <div class="row">
                                                    <div class="col col-md-12 col-lg-5">
                                                        <div class="form-group">
                                                            <label for="postcode">Post code</label>
                                                            <input type="text" class="form-control" 
                                                            id="zipcode" name="zip_code" value="{{$addresses->zip_code}}"
                                                            placeholder="Enter Here">
                                                        </div>
                                                        @error('zip_code')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col col-md-12 col-lg-7">
                                                        <div class="form-group">
                                                            <label for="city">City</label>
                                                            <input type="text" id="city_dropdown" class="form-control"
                                                            name="city" value="{{$addresses->city}}" placeholder="Enter Here">
                                                        </div>
                                                        @error('city')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            <div class="quest-v2-btn pay-btn">
                                                <!-- <a class="btn-d-black btn-wt-300 next-button" href="javascript:void(0)">Continue</a> -->
                                                <!-- <button id="bil_submit" type="submit"
                                                    class="btn-d-black btn-wt-300 next-button">Payment</button> -->
                                                    <div class="row">
                                                        @if(isset($login_addreses) && !empty($login_addreses))  
                                                        <div class="col col-12">

                                                            <div class="row">
                                                                <div class="col col-12 debit-btn-pw mt-30" style="margin-top: 20px; padding: 0px; width: 100%;">
                                                                    <button type="button"
                                                                    class="btn-d-black btn-wt-300 next-button"
                                                                    id="order_btn" >Pay with Card </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @else
                                                        
                                                        <div class="debit-btn-pw">
                                                            <button type="submit" class="btn-d-black btn-wt-300 next-button">Please fill your Delivery Address first.</button>
                                                        </div>
                                                        @endif
                                                        @if(Auth::check())
                                                    <!-- <div id="st-notification-frame"></div> -->
                                                        <div class="col col-12">
                                                            <div class="row">
                                                                <div class="col col-12 col-md-12 col-lg-6 payment-method-btns" style="padding: 0px 0px; display: flex; justify-content: center; width: 100%">    
                                                                    <div id="st-apple-pay" style="width: 100%"></div>
                                                                </div>
                                                                <div class="col col-12 col-md-12 col-lg-6 payment-method-btns" style="padding: 0px 0px; display: flex; justify-content: center; width: 100%">
                                                                    <div id='st-google-pay' style="width: 100%"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    </div>
                                                </div>
                                            </form>
                                        <form id="st-form" action="/google-payment" method="post">
                                            @csrf
                                            <input type="hidden" name="total_price" value="{{$total_price}}">
                                            <input type="hidden" name="subscription_duration" value="{{$prod_subs}}">
                                            <input type="hidden" name="product_id" value="{{$product_id}}">
                                            <input type="hidden" name="session_id" value="{{$sessionId}}">
                                        </form>
                                        <form id="card_payment" action="{{ route('place.order') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="session_id" value="{{$sessionId}}">
                                            <input type="hidden" name="total_price" value="">
                                            <input type="hidden" name="billing_street" value="{{$addresses->address}}">
                                            <input type="hidden" name="billing_city" value="{{$addresses->city}}">
                                            <input type="hidden" name="billing_zipcode" value="{{$addresses->zip_code}}">
                                            <input type="hidden" id="ass_coupon_code" name="coupon_code"
                                                value="">
                                            <input type="hidden" id="address_id" type="hidden" name="address_id"
                                                value="">
                                            <input type="hidden" name="subscription_duration"
                                                value="{{$prod_subs}}">
                                            <input type="hidden" name="product_id"
                                                value="{{$product_id}}">
                                                <!--place order button disabled untill user has a delivery address-->
                                            <button type="submit" id="btn_pay_sub" style="display: none;"></button>
                                        </form>  
                                        
                                      
                                    </div>
                                    @endif
                                    <!--Address & Order place-->
                                    <div class="card-body d-none">
                                        {{-- <livewire:frontend.checkout.checkout-component /> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    @if(Auth::check())
                    <!--address modal to select the  -->
                    <!-- Modal1 -->
                    <div class="modal fade d-none" id="addressModal" tabindex="-1" aria-labelledby="addressModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered  address-popup">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title" id="addressModalLabel">Choose another address</h2>
                                    <button type="button" class="btn-close dismissModel" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <figure>
                                            <img src="{{ asset('frontend_new/images/model-cross-icon.png') }}"
                                                alt="img" />
                                        </figure>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- <h2>Add another address</h2> -->
                                    @php
                                    $user_id = auth()->user()->id;
                                    $addresses = DB::table('delivery_address')->where('user_id', $user_id)->get();
                                    @endphp
                                    @foreach($addresses as $address)
                                    <div class="inner-form">
                                        <label for="street" id="{{ $address->id }}">{{ $address->address }}</label>
                                        <a href="javascript:void(0)" data-address="{{ $address->address }}"
                                            class="btn-d-black getShippingAddress">Add</a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- modal2 -->
                    <div class="modal fade  d-none" id="addressModal2" tabindex="-1" aria-labelledby="addressModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered  address-popup">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title" id="addressModalLabel">Choose another address</h2>
                                    <button type="button" class="btn-close dismissModel" data-bs-dismiss="modal"
                                        aria-label="Close">
                                        <figure>
                                            <img src="{{ asset('frontend_new/images/model-cross-icon.png') }}"
                                                alt="img" />
                                        </figure>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    @php
                                    $user_id = auth()->user()->id;
                                    $addresses = DB::table('billing_address')->where('user_id', $user_id)->get();
                                    @endphp
                                    @foreach($addresses as $address)
                                    <div class="inner-form">
                                        <label for="street">{{ $address->address }}</label>
                                        <a href="javascript:void(0)" class="btn-d-black getBillingAddress"
                                            data-address="{{ $address->address }}">Add</a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>

    <script src="https://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
        <script>
            const currencyCode = 'GBP';
            const totalLabel = 'Total';
            const sitereference = "test_agenthealth11902";
            const shippingMethods = [
                {
                    identifier: "shipping-001",
                    label: "Free: Standard shipping",
                    detail: "Free Shipping delivered in 48 business hours.",
                }
            ];

            const payload = {
                "payload":{
                    "accounttypedescription":"ECOM",
                    "baseamount":"1050",
                    "currencyiso3a":"GBP",
                    "sitereference":sitereference,
                    "requesttypedescriptions":["THREEDQUERY","AUTH"]
                },
                iat: Math.floor(Date.now() / 1000),
                iss: "jwt@agenthealth.com"
            }
        </script>
    <!-- <script src="js/custom.js"></script> -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <Script>/**
 * Define the version of the Google Pay API referenced when creating your
 * configuration
 *
 */


        </script>
</body>

</html>


<!-- validating debit card form -->
<script>
$(document).ready(function() {
    // Apply form validation rules to the form when the document is ready
    $("#card_payment").validate({
        rules: {
            "card_number": {
                required: true,
                minlength: 19, // Minimum length of 16 digits
                maxlength: 20, // Maximum length of 16 digits with spaces

            },
            "ex_date": {
                required: true
            },
            "cvc": {
                required: true,
                maxlength: 3,
                minlength: 3,
                digits: true // Only allow digits
            }
        },
        messages: {
            "card_number": {
                required: 'Please fill Card Number.',
                minlength: 'Card Number must be 16 digits.',
                maxlength: 'Card Number must be 16 digits.',

            },
            "ex_date": {
                required: 'Please choose an expiry date.'
            },
            "cvc": {
                required: 'Please fill three-digit CVC Number.',
                minlength: 'CVC Number must be 3 digits.',
                maxlength: 'CVC Number must be 3 digits.',
                digits: 'Please enter only digits.'
            }
        }
    });
});



$("#sign_form").validate({
        rules: {
            "email": {
                required: true,
                email: true

            },
            "password": {
                required: true
            },
            "fName": {
                required: true
            },
            "first_name": {
                required: true
            },
            "surname": {
                required: true
            },
            // "Surname": {
            //     required: true
            // },
            "dob": {
                required: true
            },
            "number": {
                required: true
            },
            "sex": {
                required: true
            },
            "postcode": {
                required: true
            },
            "city": {
                required: true
            },
            "address": {
                required: true
            },
            "terms_and_services": {
                required: true
            }
        },
        messages: {
            "email": {
                required: 'The email field is required.',
                email: "Please enter a valid email address"
            },
            "password": {
                required: 'The Password field is required.'
            },
            "first_name": {
                required: "The First Name field is required"
            },
            "surname": {
                required: "The Surname field is required"
            },
            // "Surname": {
            //     required: 'The Surname field is required.'
            // },
            "dob": {
                required: 'The dob field is required.'
            },
            "number": {
                required: 'The number field is required.'
            },
            "sex": {
                required: 'The sex field is required.'
            },
            "postcode": {
                required: 'The postcode field is required.'
            },
            "city": {
                required: 'The city field is required.'
            },
            "address": {
                required: 'The address field is required.'
            },
            "terms_and_services": {
                required: 'Please confirm our terms_and_services.'
            }
        }
    });


    $('#sign_form').validate({
        // Rules and messages as before

            submitHandler: function (form) {
                $("[name='fName']").val($("[name='first_name']").val()+" "+$("[name='surname']").val())
                // You can perform additional actions here before submitting the form
                form.submit();
            }
        });
</script>



<script>
$(document).ready(function() {


    $(".getShippingAddress").click(function(e) {
        e.preventDefault();
        var shipping_address = $(this).data('address');
        console.log(shipping_address);
        $('#ShippingAddress').val(shipping_address);
        $('.dismissModel').click();
    });

    $(".getBillingAddress").click(function(e) {
        e.preventDefault();
        var billing_address = $(this).data('address');
        console.log(billing_address);
        $('#BillingAddress').val(billing_address);
        $('.dismissModel').click();
    });

    var priceString = $('#first_time_disc').text();

    var priceNumber = parseFloat(priceString.replace('£', ''));

// console.log(priceNumber);
    $('input[name="total_price"]').val(priceNumber);

});
</script>

<!-- script for calculate coupon -->
<script>
$(document).ready(function() {
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    // $("#myForm").submit(function(event) {
    //     event.preventDefault();
    //     var formData = $(this).serialize();
    //     $.ajax({
    //         type: "POST",
    //         url: "{{ route('checkout.applycoupon') }}",
    //         headers: {
    //             'X-CSRF-Token': csrfToken
    //         },
    //         data: formData,
    //         success: function(response) {
    //             const final = "£" + response[0];
    //             const user_off = response[1];
    //             $("#error").hide();
    //             $("#final_price").html(final),
    //                 $("#user_off").html(user_off)
    //             // console.log(response);
    //         },
    //         error: function(error) {
    //             // console.error("Error:", error);
    //             $("#error").html("Invalid Coupon")
    //         }
    //     });
    // });
});
</script>
<!-- script for calculate coupon -->

<!-- script for subscription update -->
<script>
</script>
<!-- script for subscription update-->

<script>
// Wait for the document to be ready
$(document).ready(function() {

    $('#coupon_btn').prop('disabled',false);
    $('#coupon_code').prop('disabled',false);
    $('#coupon_error').val('');
    $('#coupon_btn').removeClass('d-none');
    $('#coupon_btn').click(function(){
        if($('#coupon_code').val() != ''){
            $('#coupon_btn').prop('disabled',true);
            $('#coupon_code').prop('disabled',true);
            $('#coupon_error').text('Coupon applied');
            $('#coupon_btn').addClass('d-none');
            $('#coupon_error').addClass('text-success');


            var totalAmt = Number($('#totalAmt').html());
            var discountedAmt = totalAmt*(0.1);
            var afterAmt = totalAmt*(0.9);
            discountedAmt = parseFloat(discountedAmt).toFixed(2);
            afterAmt = parseFloat(afterAmt).toFixed(2);
            $("#input_couponTotal").val(discountedAmt)
            // $("[name='total_price']").val(afterAmt)
            $('#couponTotal').html('£'+discountedAmt);
            $('#orderTotal').html('£'+afterAmt)
            $('.coupon-area').removeClass('d-none');


        }else{
            $('#coupon_btn').prop('disabled',false);
            $('#coupon_code').prop('disabled',false);
        }
    });


    $('#coupon_code').keyup(function(){
        if($(this).val() != ''){
        $('#ass_coupon_code').val($(this).val());
        }
    });
    var $firstInput = $('#coupon_code');
    var $secondInput = $('#ass_coupon_code');

    $('#get_value').click(function() {
        var firstInputValue = $firstInput.val();
        //   console.log(firstInputValue);
        $secondInput.val(firstInputValue);
    });

});
</script>

<!-- refreash the page once when reload -->
<script>
window.onload = function() {
    if (!window.location.hash) {
        window.location = window.location + '#loaded';
        window.location.reload();
    }
}
</script>

<!-- code for credit card umber -->

<!-- <script>
    $('#ccnum').on('keypress change', function () {
    $(this).val(function (index, value) {
        return value.replace(/[^0-9]/g, "").replace(/\W/gi, '').replace(/(.{4})/g, '$1 ');
    });
    });
    </script> -->

<script>
$('#ccnum').on('input', function() {
    // Remove all non-numeric characters and spaces
    var inputValue = $(this).val().replace(/[^0-9]/g, '');

    // Limit to a maximum of 16 digits
    if (inputValue.length > 16) {
        inputValue = inputValue.slice(0, 16);
    }

    // Add spaces every four digits
    inputValue = inputValue.replace(/(.{4})/g, '$1 ');

    // Update the input value
    $(this).val(inputValue);
});
</script>

<script>
$('#cvc').on('input', function() {
    // Remove all non-numeric characters and spaces
    var inputValue = $(this).val().replace(/[^0-9]/g, '');

    // Limit to a maximum of 16 digits
    if (inputValue.length > 3) {
        inputValue = inputValue.slice(0, 3);
    }

    // Update the input value
    $(this).val(inputValue);
});
</script>

<!-- script for age validation in sign up form -->
<script>
$(document).ready(function() {
    $("#dob").change(function() {
        // alert("sdsdsds");
        var dob = new Date($(this).val());
        // Get the selected date of birth
        var today = new Date();
        // Get today's date
        var age = today.getFullYear() - dob.getFullYear();
        // Calculate the difference in years
        // Adjust the age if the birthday hasn't occurred yet this year
        if (today.getMonth() < dob.getMonth() || (today.getMonth() === dob.getMonth() && today
                .getDate() < dob.getDate())) {
            age--;
        }

        // condition if age is less then 18 years
        if (age < 18) {
            $("#age").text("Your age should be atleast 18.");
            // $('#dob')[0].reset();
            $('input[name=dob]').val("");
        } else {
            $("#age").text("");
        }

    });
});
</script>

<!-- code for hiding default page load -->
<script>
$(document).ready(function() {

    $("#billing_address").hide();
    $("#choose_add").hide();
});
</script>

<!-- code to display billing address when uncheked  -->
<script type="text/javascript">
function valueChanged() {
    if ($('.bill_add').is(":checked"))
        $("#billing_address").hide();

    else
        $("#billing_address").show();
    $("#choose_add").show();
}
</script>

<!-- code to append delivery address id into in hidden input field -->
<script>
function appendRadioValue(selectedId) {
    // Assuming the ID of the address_id input field is 'ass_coupon_code'
    var addressInput = document.getElementById('address_id');
    console.log(selectedId, addressInput);
    // Set the value of the address_id input field to the selected radio button's value
    addressInput.value = selectedId;
}
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6w6K6XGM-FfYNTKiSNmgcWFzwOqXqWaw&libraries=places">
</script>

<script type="text/javascript">
    $(document).ready(function(){
        if(localStorage.getItem("new_user_email")) {
            $("[name='email']").val(localStorage.getItem("new_user_email"))
        }
        function getProductInfo(id) {
            var monthList = <?php echo json_encode($monthList)?>;

            for(var i = 0 ; i < monthList.length ; i ++) {
                if(monthList[i].id == id) return monthList[i];
            }
        }
        $("[name='input_product_sub']").click(function() {
            var productInfo = getProductInfo($(this).attr("product-id"));
            var total_price = productInfo.first_time_disc
            if($(this).val() == 0) {
                total_price = productInfo.price;
                $(".discount-price").text("£0.00");
                $("#first_time_disc").text("£"+productInfo.price+".00");
                $("#final_price del").text("")
                $(".final_price del").hide()
            }
            else {
                total = Math.min(productInfo.price, productInfo.first_time_disc)
                $(".discount-price").text("-£"+(productInfo.price > productInfo.first_time_disc ? Math.abs(productInfo.price - total_price) : 0)+".00");
                $("#final_price del").text(productInfo.price)
                $("#final_price del").show()
                $("#first_time_disc").text("£"+(Math.min(productInfo.price, productInfo.first_time_disc))+".00")
            }
            if($("#input_couponTotal").val() > 0) {
                total_price = total_price - $("#input_couponTotal").val();
                if(productInfo.category_id != 31) 
                    $("#final_price del").text("£"+productInfo.price)
            }
            $(".qos-product .img-fluid").attr("src", $(this).attr("product-img"));
            $(".product-subtotal .price").text("£"+(Math.max(productInfo.price, productInfo.first_time_disc))+".00")
            
            $("#dur_label").text(productInfo.subscription_duration);
            $("#orderTotal").text("£"+total_price);
            $('#totalAmt').text(total_price)
            $("[name='subscription_duration']").val($(this).val());
            $("[name='product_id']").val(productInfo.id);

            $("[name='total_price']").val(total_price);
        })
    })
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script>
<script type="text/javascript" src="https://cdn.eu.trustpayments.com/js/latest/st.js "></script>
<script>
    var st = null;
    var initST = null;
    <?php
    if(Auth::check()) {
        ?>
    $(document).ready(function() {
        function formatCurrentDate() {
            const currentDate = new Date();

            const year = currentDate.getFullYear();
            const month = (currentDate.getMonth() + 1).toString().padStart(2, '0');
            const day = currentDate.getDate().toString().padStart(2, '0');

            const formattedDate = `${year}-${month}-${day}`;
            return formattedDate;
        }

        function formatNextMonthDate() {
            const currentDate = new Date();

            var year = currentDate.getFullYear();
            var month = (currentDate.getMonth() + 2).toString().padStart(2, '0');
            const day = currentDate.getDate().toString().padStart(2, '0');

            if (month > 12) {
                // If the next month is greater than 11 (December), add 1 to the year and set the month to 0 (January)
                month = '01';
                year += 1;
            }

            const formattedDate = `${year}-${month}-${day}`;
            return formattedDate;


        }

        function formatThreeMonthDate() {
            const currentDate = new Date();

            var year = currentDate.getFullYear();
            var month = (currentDate.getMonth() + 4).toString().padStart(2, '0');
            const day = currentDate.getDate().toString().padStart(2, '0');

            if (month > 12) {
                // If the next month is greater than 11 (December), add 1 to the year and set the month to 0 (January)
                month = '01';
                year += 1;
            }

            const formattedDate = `${year}-${month}-${day}`;
            return formattedDate;


        }
        $("[name='input_product_sub']").click(function (){
            initST();
        })
        initST = function () {
            $("#st-apple-pay,#st-google-pay").empty();
            if(st) st.destroy();
            const formattedCurrentDate = formatCurrentDate();

            let subscribtionPaymentDate = null;
            const subscription_dur = $("[name='subscription_duration']").val();
            if(subscription_dur == 3) {
                subscribtionPaymentDate = formatThreeMonthDate();
            }
            else (subscription_dur == 1)
                subscribtionPaymentDate = formatNextMonthDate();
                
            const header = {
                alg: "HS256",
                typ: "JWT"
            };
            const subscriptionnumber = "1";
            // const amount = (subscriptionnumber === "1") ? 122 : 143;
            const amount = $('input[name="total_price"]').val();
            const accounttypedescription = "ECOM";
            const currencyiso3a = "GBP";
            const sitereference = "agenthealth119403";
            // const sitereference = "test_agenthealth119402";
            const googleMerchantId = "BCR2DN4T5GROHDAU"
            const credentialsonfile = "1";
            let requesttypedescriptions = ["THREEDQUERY", "AUTH"];
            if(subscription_dur > 0) requesttypedescriptions.push("SUBSCRIPTION");
            const locale = "en_GB";
            
            //26oct23 delivery details

            const billingfirstname = "{{ $user_name }}";
            const billingtelephone = "{{ $user_tel }}";
            const billingemail = "{{ $user_email }}";
            const billingtown = $("#city_dropdown").val();
            const billingpostcode = $("#zipcode").val();
            const billingpremise = $("#new_address").val();

            const customerfirstname = "{{ $user_name }}";
            const customertelephone = "{{ $user_tel }}";
            const customeremail = "{{ $user_email }}";
            const customertown = $("#city_dropdown").val();
            const customerpostcode = $("#zipcode").val();
            const customerpremise = $("#new_address").val();
            const billingcountryiso2a = "GB";
            const customercountryiso2a = "GB";
            var payload = {
                payload: {
                    "accounttypedescription": accounttypedescription,
                    "baseamount": amount * 100,
                    "currencyiso3a": currencyiso3a,
                    "sitereference": sitereference,
                    "requesttypedescriptions": requesttypedescriptions,
                    // "subscriptionnumber": subscriptionnumber,
                    // "walletsoure": "GOOGLEPAY",
                    // orderreference: orderreference,
                    //26oct23
                    "billingfirstname": billingfirstname,
                    "billingtelephone": billingtelephone,
                    // billingstreet: billingstreet,
                    "billingtown": billingtown,
                    "billingpostcode": billingpostcode,
                    "billingemail": billingemail,
                    "billingpremise": billingpremise,
                    "billingcountryiso2a": billingcountryiso2a,

                    "customerfirstname": customerfirstname,
                    "customertelephone": customertelephone,
                    "customertown": customertown,
                    "customerpostcode": customerpostcode,
                    "customeremail": customeremail,
                    "customerpremise": customerpremise,
                    "customercountryiso2a": customercountryiso2a,
                    "locale": locale
                    // customerstreet: customerstreet,


                    // accounttypedescription:"RECUR",

                },

                iat: Math.floor(Date.now() / 1000),
                iss: "jwt@agenthealth.com"
            }
            if(subscription_dur > 0) {
                const subscriptiontype = "RECURRING";
                // const subscriptionunit = "DAY";
                const subscriptionunit = "MONTH";
                const subscriptionfrequency = subscription_dur == 0 ? 1: subscription_dur;
                const subscriptionfinalnumber = subscription_dur == 0 ? 1 : 12;
                // const subscriptionfinalnumber =  12;
                const subscriptionbegindate = subscribtionPaymentDate;
                
                payload.payload.credentialsonfile = credentialsonfile;
                payload.payload.subscriptiontype = subscriptiontype;
                payload.payload.subscriptionunit = subscriptionunit;
                payload.payload.subscriptionfrequency = subscriptionfrequency;
                payload.payload.subscriptionnumber = subscriptionnumber;
                payload.payload.subscriptionfinalnumber = subscriptionfinalnumber;
                payload.payload.subscriptionbegindate = subscriptionbegindate;
            }
            const base64UrlHeader = btoa(JSON.stringify(header)).replace(/=/g, '').replace(/\+/g, '-').replace(/\//g,
                '_');
            const base64UrlPayload = btoa(JSON.stringify(payload)).replace(/=/g, '').replace(/\+/g, '-').replace(/\//g,
                '_');
            const tokenContent = `${base64UrlHeader}.${base64UrlPayload}`;
            const secret = "59-0051c01ec6601235ee72c033f76863f5dc0de7ab9951fa6b2193615dadd63be9";
            const signature = CryptoJS.HmacSHA256(tokenContent, secret);
            const base64UrlSignature = CryptoJS.enc.Base64.stringify(signature).replace(/=/g, '').replace(/\+/g, '-')
                .replace(/\//g, '_');
            const jwt = `${tokenContent}.${base64UrlSignature}`;
            console.log(payload)
            st = SecureTrading({
                jwt: jwt,
                formId: "st-form",
            });
            st.Components();
            st.GooglePay({
                "buttonOptions": {
                    "buttonRootNode": "st-google-pay"
                },
                "paymentRequest": {
                    "allowedPaymentMethods": [{
                        "parameters": {
                            "allowedAuthMethods": ["PAN_ONLY", "CRYPTOGRAM_3DS"],
                            "allowedCardNetworks": ["AMEX", "DISCOVER", "JCB", "MASTERCARD", "VISA"]
                        },
                        "tokenizationSpecification": {
                            "parameters": {
                                "gateway": "trustpayments",
                                "gatewayMerchantId": sitereference
                            },
                            "type": "PAYMENT_GATEWAY"
                        },
                        "type": "CARD"
                    }],
                    "environment":"PRODUCTION",
                    "apiVersion": 2,
                    "apiVersionMinor": 0,
                    "merchantInfo": {
                        "merchantId": googleMerchantId
                    },
                    "transactionInfo": {
                        "countryCode": "UK",
                        "currencyCode": currencyiso3a,
                        "checkoutOption": "COMPLETE_IMMEDIATE_PURCHASE",
                        "totalPriceStatus": "FINAL",
                        "totalPrice": String(amount),
                        "displayItems": [{
                            "label": $(".product-title").text(),
                            "price": String(amount),
                            "type": "LINE_ITEM",
                            "status": "FINAL"
                        }]
                    }
                }
            });

            st.ApplePay({
                buttonStyle: 'white-outline',
                buttonText: 'plain',
                merchantId: 'merchant.agenthealth.uk',
                paymentRequest: {
                    countryCode: 'US',
                    currencyCode: currencyiso3a,
                    merchantCapabilities: ['supports3DS', 'supportsCredit', 'supportsDebit'],
                    supportedNetworks: ["visa","masterCard","amex"],
                    // requiredBillingContactFields: ["postalAddress"],
                    // requiredShippingContactFields: ["postalAddress","name", "phone", "email"],
                    total: {
                    label: $(".product-title").text(),
                    amount: String(amount)
                    }
                },
                buttonPlacement: 'st-apple-pay'
            });
        }
        initST()
        
    });
    
        <?php
    }
    ?>
    const apiKey = "AIzaSyB6w6K6XGM-FfYNTKiSNmgcWFzwOqXqWaw";
    let autocomplete;
    let address1Field;
    let address2Field;
    let postalField;
    function setBillingAddress() {
        $("[name='billing_street']").val($("#new_address").val())
        $("[name='billing_city']").val($("#city_dropdown").val())
        $("[name='billing_zipcode']").val($("#zipcode").val())
    }
    $(document.body).ready(function() {
        var timer = null;
        console.log($("#city_dropdown,#new_address,#zipcode"))
        $("#city_dropdown,#new_address,#zipcode").keyup(function() {
            console.log('df')
            if(timer) clearTimeout(timer)
            timer = setTimeout(function() {
                setBillingAddress();
                if(initST) initST()
            }, 500)
        })
    })
    function initAutocomplete() {
        address1Field = document.querySelector("#new_address");
        address2Field = document.querySelector("#city_dropdown");
        postalField = document.querySelector("#zipcode");
        // Create the autocomplete object, restricting the search predictions to
        // addresses in the US and Canada.
            autocomplete = new google.maps.places.Autocomplete(address1Field, {
            componentRestrictions: { country: ["uk"] },
            fields: ["address_components", "geometry"],
            types: ["address"],
        });
        address1Field.focus();
        // When the user selects an address from the drop-down, populate the
        // address fields in the form.
        autocomplete.addListener("place_changed", fillInAddress);
        }

        function fillInAddress() {
        // Get the place details from the autocomplete object.
        const place = autocomplete.getPlace();
        let address1 = "";
        let postcode = "";

        // Get each component of the address from the place details,
        // and then fill-in the corresponding field on the form.
        // place.address_components are google.maps.GeocoderAddressComponent objects
        // which are documented at http://goo.gle/3l5i5Mr
        for (const component of place.address_components) {
            // @ts-ignore remove once typings fixed
            const componentType = component.types[0];
            console.log(component, componentType)
            switch (componentType) {
            case "street_number": {
                address1 = `${component.long_name} ${address1}`;
                break;
            }

            case "route": {
                address1 += component.short_name;
                break;
            }

            case "postal_code": 
            case "postal_code_suffix": 
            {
                postcode = component.long_name;
                break;
            }

            case "locality":
            case "postal_town":
                document.querySelector("#city_dropdown").value = component.long_name;
                break;
            //   case "administrative_area_level_1": {
            //     document.querySelector("#state").value = component.short_name;
            //     break;
            //   }
            //   case "country":
            //     document.querySelector("#country").value = component.long_name;
            //     break;
            }
        }
        address1Field.value = address1;
        postalField.value = postcode;
        // After filling the form with address components from the Autocomplete
        // prediction, set cursor focus on the second address line to encourage
        // entry of subpremise information such as apartment, unit, or floor number.
        address2Field.focus();
        if(initST) initST();
        setBillingAddress();
    }
    $(document).ready(function() {
        $("#order_btn").click(function() {
            $("#btn_pay_sub").click();
        });
        $("#cancel_order").click(function() {
            window.history.back();
        });

        $("#saved_address").change(function() {
            const addresses = <?php echo json_encode($savedAddress);?>;

            for(var i = 0 ; i < addresses.length ; i ++) {
                if(addresses[i].id == $(this).val()) {
                    $("#new_address").val(addressses[i].address);
                    $("#zipcoe").val(addressses[i].zip_code);
                    $("#city_dropdown").val(addressses[i].city);
                    return;
                }
            }
        })
        const loggedIn = '<?php echo Auth::check();?>';
        if(localStorage.getItem("new_user_email") && loggedIn) {
            localStorage.removeItem("new_user_email");
            $(".logged-in").hide();
            $(".login-in").hide();
            $("#signups").hide();
            $("#address_order").show();
        }
        $("#to_shipping").click(function() {
            $(".login").hide();
            if(loggedIn) {
                $(".logged-in").hide();
                $("#address_order").show();
            }
            else  {
                $("#signups").show();
                $("#address_order").hide();

            }
        })
    })
    window.initAutocomplete = initAutocomplete;
    window.initAutocomplete();

  
</script>