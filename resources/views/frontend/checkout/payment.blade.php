
@php
    $order = DB::table('orders')->where('ref_id', $order_id)->first();
    $user = DB::table('users')->where('id', $user_id)->first();
    $user_address1 =  DB::table('delivery_address')->where('user_id', $user_id)->orderBy('id','DESC')->first();
    $user_address2 =  DB::table('delivery_address')->where('id', $order->user_address_id)->first();
    if(isset($billing_street) && !empty($billing_street)) $user_address1->address = $billing_street;
    if(isset($billing_city) && !empty($billing_city)) $user_address1->city = $billing_city;
    if(isset($billing_zipcode) && !empty($billing_zipcode)) $user_address1->zip_code = $billing_zipcode;
    $user_name = $user->full_name;
    $user_tel = $user->phone;
    $user_email = $user->email;
    $order_refId = $order->ref_id;
    if($user_address2 == ''){
        $user_add = $user_address1->address;
        $user_city = $user_address1->city;
        $user_zip = $user_address1->zip_code;
    }
    else {
        $user_add = $user_address2->address;
        $user_city = $user_address2->city;
        $user_zip = $user_address2->zip_code;
    }
        //
        $user_del_add = $user_address1->address;
        $user_del_city = $user_address1->city;
        $user_del_zip = $user_address1->zip_code;
@endphp
<!DOCTYPE HTML>
<html lang="en-US">
<head>
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
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="css/quest-v2.css">
    <link rel="stylesheet" href="css/quest-v2-respsv.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_new/css/new-questionnaire.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/quest-v2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/quest-v2-respsv.css') }}">
    <link rel="stylesheet" href="{{ asset('css/quest-v2.1.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <style>
        .sm-images img {
            max-width: 200px;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        main {
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .pay-col {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        iframe {
            width: 100%;
        }

        .text-d-c {
            text-align: left;
        }

        .text-d-c p {
            font-size: 23px;
            font-weight: 900;
            margin-bottom: 20px;
        }

        .text-d-c p i {
            padding: 0px 10px;
        }

        #st-form label {
            font-size: 18px !important;
            font-weight: 600;
        }

        .st-card-number__wrapper {
            margin-top: 10px;
        }

        button[type="submit"] {
            background-color: #000;
            margin: auto;
            padding: 1.5rem 5rem;
        }

        .error-field {
            background-color: #fff;
        }

        .user-dashboard {
            display: flex !important;
            align-items: center !important;
        }
        .google-pay-area, .apple-pay-area {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .google-pay-area .google-pay-button {
            height: 44px;
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
        .btn_order_pay {
            width: 100%;
            border-radius: 50px;
        }
        .st-form__group {
            height: 5rem;
            margin: 1.5rem 0px;
        }
    </style>

    <livewire:styles />
    @yield('style')
    <livewire:scripts />
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    <x-livewire-alert::flash />
    <x-livewire-alert::scripts />
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery-1.12.0.min.js') }}"></script>
    <!-- Add CkEditor -->
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
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KV2ZB6ZG');</script>
    <!-- End Google Tag Manager -->

</head>
<body >

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KV2ZB6ZG"
            height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>

<section class="questionnaire-v2-main">
    <div class="quest-v2-header">
        <div class="container-fluid">
            <a class="quest-logo" href="{{ url('/') }}">
                <!-- <img src="images/quest-logo.png" alt=""> -->
                <img src="{{ asset('images/quest-logo.png')}}" alt="">
            </a>
        </div>
    </div>
    <div class="quest-v2-content" style="background-color: #d9d9d9">
        <div class="quest-v2-inner-wrap">
            <div class="bg-image">
                <div class="row">
                    <div class="col-lg-6 col-md-12 order-detail">
                        <input type="hidden" name="session_id" value="{{$sessionId}}">
                        <input type="hidden" name="total_price" value="{{$total_price}}">

                        <div class="quest-ordrsmry-left">
                                <h1 class="card-heading">
                                    <div class="font-poppins" style="font-weight: 600; letter-spacing: -2px;">Order</div>
                                    <div class="font-yeseva" style="font-weight: 400; letter-spacing: -2px;">Summary</div>
                                </h1>

                            <!-- apply affiliate -->
                            <div class="card-design mb-40">
                                @foreach($prod_name as $product)
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
                                            <div class="form-group form-radio mt-3" <?php echo $subscription_dur;?>>
                                                <input type="radio" id="product_sub_month_0" name="input_product_sub" <?php echo $subscription_dur == 0 ? "checked":""?> value="0" product-id="{{$month->id}}" product-img="{{ asset('storage/images/products/') }}{{ '/'. $img->file_name}}">
                                                <label class="sub-leb" for="product_sub_month_0">
                                                    <h4>One time treatment plan</h4>
                                                </label>
                                            </div>
                                        </div>
                                        @endif
                                        @if($month->subscription_duration == 1)
                                        <div class="col-lg-12 col-sm-12 mb-3 one-month-sb">
                                            <div class="form-group form-radio" style="margin-top: 30px">
                                                <input type="radio" id="product_sub_month_2" name="input_product_sub" disabled <?php if($subscription_dur == 1) echo "checked";?> value="1" product-id="{{$month->id}}" product-img="{{ asset('storage/images/products/') }}{{ '/'. $img->file_name}}">
                                                <label class="sub-leb" for="product_sub_month_2">
                                                    <h4>1 month treatment plan</h4>
                                                </label>
                                            </div>
                                        </div>
                                        @else
                                        <div class="col-lg-12 col-sm-12 mb-3 over-one-month-sb">
                                            <div class="form-group form-radio" style="margin-top: 30px">
                                                <input type="radio" id="product_sub_month_3" name="input_product_sub" disabled <?php if($subscription_dur == $month->subscription_duration) echo "checked";?> product-id="{{$month->id}}" value="3">
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

                                <div class="text-dark mt-30 orderText">
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
                    </div>
                    <div class="col-lg-6">
                        <div class="row right-banner banner-img">
                            <div class="col-12">
                                    <div class="shipping-details-header">
                                        <div class="font-poppins" style="font-weight: 600; letter-spacing: -3px;">Payment</div>
                                        <div class="font-yeseva" style="font-weight: 400; letter-spacing: -3px;">details</div>
                                    </div>
                                <img src="{{asset('frontend_new/images/money-back.png')}}" class="img-fluid"/>
                            </div>
                        </div>
                        <div class="quest-ordrsmry-right">

                            <div class="checkout-step">
                                <div class="checkout-step1">Account</div>
                                <div class="checkout-step1">-</div>
                                <div class="checkout-step1 checkout-step1-check"><i class='fa fa-circle-check'></i></div>
                                <div class="checkout-step2">-</div>
                                <div class="checkout-step2">Shipping</div>
                                <div class="checkout-step2">-</div>
                                <div class="checkout-step2 checkout-step1-check"><i class='fa fa-circle-check'></i></div>
                                <div class="checkout-step2">-</div>
                                <div class="checkout-step3">Payment</div>
                            </div>
                            <h4 class="q-orsm-heading mb-30">Payment details</h4>
                            <div class="row">
                                <!-- <div class="col col-md-12 col-lg-5" style="display: flex; align-items: center;">
                                    <label for="saved_address">Use saved card</label>
                                </div>
                                <div class="col col-md-12 col-lg-7">
                                    @php
                                    $user_id = auth()->user()->id;
                                    $address = DB::table('delivery_address')->where('user_id', $user_id)->orderBy("created_at", "desc")->get();
                                    @endphp
                                    <select class="form-control" aria-label="User saved address" name="saved_address" id="saved_address">
                                        @foreach($address as $adss)
                                        <option value="{{$adss->id}}">{{$adss->address}}</option>
                                        @endforeach
                                    </select>
                                </div> -->
                            </div>
                            <div style="width: 100%; display: flex; justify-content: flex-end;">
                                <img src="/frontend/images/default.png" style="margin:0px 10px; width: 2.4rem;"/>
                                <img src="/frontend/images/mastercard.png" style="margin:0px 10px; width: 2.4rem;"/>
                                <img src="/frontend/images/visa.png" style="margin:0px 10px; width: 2.4rem;"/>
                            </div>
                            <div class="button-box">
                                <main class="bg-white card-design" style="padding: 0px;">

                                    <div id="st-notification-frame"></div>
                                    <form id="st-form">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div id="st-card-number" class="st-form__group st-form__iframe-container"></div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div id="st-expiration-date" class="st-form__group st-form__iframe-container"></div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div id="st-security-code" class="st-form__group st-form__iframe-container"></div>
                                            </div>
                                        </div>
                                        <input type='hidden' name='subscription_duration' value="{{$subscription_dur}}">
                                        <button type="submit" class="btn_order_pay">Pay with Card</button>

                                    </form>
                                    <!-- <form id="st-form1">
                                        <div id="st-google-pay" style="color: black;"></div>
                                    </form> -->

                                </main>


                            </div>

                        </div>

                            <!-- <div class="row">
                                <div class="col col-12 payment-method-btns">
                                    <div class='apple-pay-area' style="display: inline-block;">
                                        <div id="apple-pay-button"><img src='/frontend/images/applepay.png'  style="height: 4rem;"></div>
                                    </div>
                                    <div class='google-pay-area' style="display: inline-block;">
                                        <div id="google-pay-button">
                                            <img src='/frontend/images/gpay.png' style="height: 4rem;">
                                        </div>
                                    </div>

                                </div>
                            </div> -->
                    </div>
                </div>
                <div class="row review-brand-content">
                    <div class="col-12 mb-3">
                        <div class="brands mobile mt-5" id="business brands" style="width: 100%">
                            <div class="d-flex justify-content-center">
                                <div class="d-flex justify-content-between brand-images mobile">
                                    <img src="{{ asset('images/brand-medicine.png') }}">
                                    <p class="font-heavy-green">Licensed & Registered
                                            Medication</p>
                                    <img src="{{ asset('images/brand-shipping.png') }}"><p class="font-heavy-green">Free & Discreet 24Hr Shipping</p>
                                    <img src="{{ asset('images/brand-pause.png') }}"><p class="font-heavy-green">Pause Or CancelAt Anytime</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="reviews">
                            <div class="swiper" id="review-swiper">
                                <div class="swiper-wrapper">
                                    @if (!empty($reviews))
                                        @foreach ($reviews as $review)
                                        <div class="swiper-slide">
                                            <div class="card review-card">
                                                <div class="card-header d-flex justify-content-between" style="background-color: #fff">
                                                    <h5 class="font-poppins review-user-name">{{ $review->username }}</h5>
                                                    <ul class="d-flex reivew-star">
                                                        @for ($i=0; $i<$review->rating; $i++)
                                                            <li><i class="fa fa-star text-warning"></i></li>
                                                        @endfor
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <p class="font-poppins review-content">{{ $review->content }}</p>
                                                </div>
                                                <div class="card-footer" style="background-color: #fff">
                                                    <img src="{{ asset('images/verified.svg') }}" style="max-width: 2rem"/><span class="font-poppins text-dark" style="font-size: 12px">Verified Customer</span>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="brands container mt-5 mb-5" id="business brands">
                            <div class="d-flex justify-content-center">
                                <div class="d-flex">
                                    <div class="d-flex bg-black brands-rating mr-3">
                                        <div class="border-right d-flex flex-column justify-content-center" style="margin-right: 32px">
                                            <div>
                                                <ul class="d-flex">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <p class="text-white" style="width: max-content; margin-top: 6px">100 ratings</p>
                                            </div>
                                        </div>
                                        <img src="{{ asset('images/brand line.png') }}">
                                        <div class="d-flex flex-column justify-content-center" style="margin-left: 32px">
                                        <div>
                                                <h4 class="font-poppins-bold">1000+</h4>
                                                <p class="text-white" style="width: max-content">Total ratings</p>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="font-heavy-green brands-title d-flex flex-column justify-content-center">
                                        <p class="font-poppins">Trusted by <b>hundreds</b> of
                                        customers with amazing
                                        results</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between brand-images">
                                    <img src="{{ asset('images/brand-medicine.png') }}">
                                    <img src="{{ asset('images/brand-shipping.png') }}">
                                    <img src="{{ asset('images/brand-pause.png') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- form to make the payment through the trust payments -->


            <!-- <div class=" bg-white" style="border-radius: 20px; margin: 15px; color: #000; padding-top: 40px;">
                @include('partials.frontend.above-footer')
            </div> -->
        </div>

        <!-- <form id="st-form1">
            <div id="st-google-pay"></div>
        </form> -->


    </div>

</section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script>
    <script type="text/javascript" src="https://cdn.eu.trustpayments.com/js/latest/st.js "></script>
    <script>

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

    const formattedCurrentDate = formatCurrentDate();

    <?php
        if($subscription_dur==3) {
            ?>
    const subscribtionPaymentDate = formatThreeMonthDate();

    <?php

        }
        else {
            ?>

    const subscribtionPaymentDate = formatNextMonthDate();

    <?php

        }
        ?>
    const subscriptionDuration = <?php echo $subscription_dur ?>;
    const finalPrice = <?php echo $final_price ?>;



    // console.log(formattedCurrentDate);  // Output: '2023-10-05' (assuming the current date is October 5, 2023)
    </script>
    <script>
    (function() {
        const header = {
            alg: "HS256",
            typ: "JWT"
        };
        const subscriptionnumber = "1";
        // const amount = (subscriptionnumber === "1") ? 122 : 143;
        const amount = finalPrice;
        const accounttypedescription = "ECOM";
        const currencyiso3a = "GBP";
        const sitereference = "agenthealth119403";
        // const sitereference = "test_agenthealth119402";
        const credentialsonfile = "1";
        let requesttypedescriptions = ["THREEDQUERY", "AUTH"];
        if(subscriptionDuration > 0) {
            requesttypedescriptions.push("SUBSCRIPTION")
        }
        const locale = "en_GB";
        const orderreference = "{{ $order_refId }}";
        //26oct23 delivery details
        const billingfirstname = "{{ $user_name }}";
        const billingtelephone = "{{ $user_tel }}";
        const billingemail = "{{ $user_email }}";
        // const billingstreet = "{{ $user_add }}";
        const billingtown = "{{ $user_city }}";
        const billingpostcode = "{{ $user_zip }}";
        const billingpremise = "{{ $user_add }}";

        const customerfirstname = "{{ $user_name }}";
        const customertelephone = "{{ $user_tel }}";
        const customeremail = "{{ $user_email }}";
        // const customerstreet = "{{ $user_del_add }}";
        const customertown = "{{ $user_del_city }}";
        const customerpostcode = "{{ $user_del_zip }}";
        const customerpremise = "{{ $user_del_add }}";
        const billingcountryiso2a = "GB";
        const customercountryiso2a = "GB";
        var payload = {
            payload: {
                accounttypedescription: accounttypedescription,
                baseamount: amount * 100,
                currencyiso3a: currencyiso3a,
                sitereference: sitereference,
                credentialsonfile: credentialsonfile,
                requesttypedescriptions: requesttypedescriptions,
                orderreference: orderreference,
                //26oct23
                billingfirstname: billingfirstname,
                billingtelephone: billingtelephone,
                // billingstreet: billingstreet,
                billingtown: billingtown,
                billingpostcode: billingpostcode,
                billingemail: billingemail,
                billingpremise: billingpremise,
                billingcountryiso2a: billingcountryiso2a,

                customerfirstname: customerfirstname,
                customertelephone: customertelephone,
                // customerstreet: customerstreet,
                customertown: customertown,
                customerpostcode: customerpostcode,
                customeremail: customeremail,
                customerpremise: customerpremise,
                customercountryiso2a: customercountryiso2a,


                // accounttypedescription:"RECUR",

                locale: locale
            },
            iat: Math.floor(Date.now() / 1000),
            iss: "jwt@agenthealth.com"
        };
        if(subscriptionDuration > 0) {
            const subscriptiontype = "RECURRING";
            // const subscriptionunit = "DAY";
            const subscriptionunit = "MONTH";
            const subscriptionfrequency = subscriptionDuration == 0 ? 1: subscriptionDuration;
            const subscriptionfinalnumber = subscriptionDuration == 0 ? 1 : 12;
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
        console.log("JWT Token are:------", jwt);
        try {
            var st = SecureTrading({
                jwt: jwt,
                placeholders:{
                    'pan':'Card Number',
                    'expirydate':'Expiry date',
                    'securitycode':'CVC/CVV'
                },
                styles: {
                    'background-color-input': '#e2e8f0',
                    'font-size-input': '1rem',
                    'font-size-label': '1rem',
                    'color-input': '#000',
                    'border-size-input': "0px",
                }
            });

            st.Components()

        } catch (error) {
            console.error("Error initializing SecureTrading:", error);
        }
    })();

    $(document.body).ready(function() {
        var swiper = new Swiper("#review-swiper", {
            spaceBetween: 0,
            initialSlide: 1,
            slidesPerView: 1,
            loop: true,
            speed: 50000,
            centeredSlides:true,
            autoplay: {
                enabled: true,
                delay: 1,
            },
            breakpoints: {
                575: {
                slidesPerView: 1,
                spaceBetween: 30,
                },
                768: {
                slidesPerView: 1,
                spaceBetween: 30,
                },
                1440: {
                slidesPerView: 2,
                spaceBetween: 30,
                },
            },
        });
        function getProductInfo(id) {
            var monthList = <?php echo json_encode($monthList)?>;

            for(var i = 0 ; i < monthList.length ; i ++) {
                if(monthList[i].id == id) return monthList[i];
            }
        }
        $("[name='input_product_sub']").click(function() {
            var productInfo = getProductInfo($(this).attr("product-id"));
            var total_price =(Math.min(productInfo.price, productInfo.first_time_disc))
            $(".qos-product .img-fluid").attr("src", $(this).attr("product-img"));
            $(".product-subtotal .price").text("£"+(Math.max(productInfo.price, productInfo.first_time_disc))+".00")
            $(".product-subtotal .price").text("£"+(Math.max(productInfo.price, productInfo.first_time_disc))+".00")
            $(".discount-price").text("-£"+(productInfo.price > productInfo.first_time_disc ? Math.abs(productInfo.price - productInfo.first_time_disc) : 0)+".00");

            if(productInfo.category_id != 31)
                $(".total-amount del").text("£"+productInfo.price)
            if($("#input_couponTotal").val() > 0) {
                total_price = total_price - $("#input_couponTotal").val();
            }
            $("#dur_label").text(productInfo.subscription_duration);
            $("#first_time_disc").text("£"+productInfo.first_time_disc)
            $("#orderTotal").text("£"+total_price);
            $('#totalAmt').text(total_price)
            $("[name='subscription_duration']").val(productInfo.subscription_duration);
            $("[name='product_id']").val(productInfo.id);

            $("[name='total_price']").val(total_price);
        })
    })
    </script>


</body>
</html>
