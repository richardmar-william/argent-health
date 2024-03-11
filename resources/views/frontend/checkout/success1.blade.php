{{-- @extends('layouts.app')
@section('content') --}}
<!-- Modal -->
<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="language" content="en" />
    <meta name="country" content="us" />
    <meta name="robots" content="INDEX, FOLLOW" />
    <title>Cart Product</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Khand:wght@300;400;500;600;700&family=Yeseva+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="css/quest-v2.css">
    <link rel="stylesheet" href="css/quest-v2-respsv.css">
    <link rel="stylesheet" href="{{ asset('css/quest-v2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/quest-v2-respsv.css') }}">
    <link rel="stylesheet" href="{{ asset('css/quest-v2.1.css') }}">
    <style>
        .thankyou-right, .left-image-area {
            display: flex; 
            flex-direction: column; 
            justify-content: space-between;
        }
        .thankyou-right {
            padding: 3rem 2rem 0rem 2rem;
        }
        .ques-lfc {
            padding: 0px;
        }
        .quest-lfc-btn {
            font-size: 0.7rem;
        }
        .total-amount h3 {
            font-size: 1.2rem;
        }
        .footer-btn {
            padding: 0.8rem 2rem;
            font-size: 1.2rem;
        }
        .qos-product-text li.list-group-item {
            font-size: 1rem;
        }
        span.text-grey {
            font-size: 1rem;
        }
        .text-success {
            font-size: 0.9rem;
        }
        .thank-you-box, .thank-you-title {
            width: 80%; 
            padding: 3rem; 
            margin: auto; 
            color: black; 
        }
        .left-image-area {
            padding: 0rem 4rem 0rem 2rem;
        }
        .thank-you-title {
            padding-bottom: 0px;
        }
        .thank-you-title h1{
            font-size: 4rem;
            font-weight: bold;
            line-height: 4rem;
        }
        .thank-you-title h1:first-child{
            font-family: 'Yeseva one';
        }
        .thank-you-title h1:last-child{
            font-family: 'Poppins';
            font-size: 4.4rem;
        }
        .thank-you-box {
            border-radius: 36px; 
            margin-top: 4rem; 
            background-color: white; 
            margin-bottom: 5rem;
        }
        .thank-you-title.mobile{
            display: none;
        }
        .thank-you-title.desktop{
            display: block;
            width: 100%;
            padding: 0px;
            padding-bottom: 3rem;
            
        }
        .product-title {
            font-size: 2.2rem;
            font-weight: normal;
        }
        .footer-btns {
            margin-bottom: 2rem;
        }
        .thankyou-desktop-img {
            display: block;
        }
        .thankyou-mobile-img {
            display: none;
        }
        @media screen and (max-width: 1600px) {
            .thank-you-box, .thank-you-title {
                width: 84%; 
                padding: 2.6rem; 
            }
            .left-image-area {
                padding: 0rem 3.4rem 0rem 1.6rem
            }
            .thank-you-title.desktop {
                padding-bottom: 2.4rem;
            }
            .thankyou-right {
                padding: 2.6rem 1.8rem 0rem 1.8rem;
            }
            .thank-you-title.desktop h1{
                font-size: 3.4rem;
                line-height: 3.4rem;
            }
            .product-title {
                font-size: 2rem;
            }
        }
        @media screen and (max-width: 1440px) {
            .thank-you-box, .thank-you-title {
                width: 88%; 
                padding: 2.2rem; 
            }
            .left-image-area {
                padding: 0rem 2.8rem 0rem 1.2rem
            }
            .thank-you-title.desktop {
                padding-bottom: 2.2rem;
            }
            .thankyou-right {
                padding: 2.2rem 1.6rem 0rem 1.6rem;
            }
            .thank-you-title.desktop h1{
                font-size: 2.8rem;
                line-height: 2.8rem;
            }
            .product-title {
                font-size: 1.8rem;
            }
        }
        @media screen and (max-width: 1280px) {
            .thank-you-box, .thank-you-title {
                width: 92%; 
                padding: 1.8rem; 
            }
            .left-image-area {
                padding: 0rem 2.2rem 0rem 1.4rem
            }
            .thank-you-title.desktop {
                padding-bottom: 1.8rem;
            }
            .thankyou-right {
                padding: 1.8rem 1.4rem 0rem 1.4rem;
            }
            .thank-you-title.desktop h1{
                font-size: 2.4rem;
                line-height: 2.4rem;
            }
            .product-title {
                font-size: 1.6rem;
            }
        }
        @media screen and (max-width: 991px) {
            
            .thankyou-desktop-img {
                display: none;
            }
            .thankyou-mobile-img {
                display: block;
            }
            .thank-you-title.mobile{
                display: block;
            }
            .thank-you-title.desktop{
                display: none;
            }
            .thankyou-right {
                padding: 1rem 2rem 0rem 2rem;
            }
            .left-image-area {
                padding: 0.5rem 1rem;
            }
            .ques-lfc {
                padding: 0px;
            }
            .quest-lfc-btn {
                font-size: 0.7rem;
            }
            .total-amount h3 {
                font-size: 1.2rem;
            }
            .footer-btn {
                padding: 0.8rem 2rem;
                font-size: 1.2rem;
            }
            .qos-product-text li.list-group-item {
                font-size: 1rem;
            }
            span.text-grey {
                font-size: 1rem;
            }
            .text-success {
                font-size: 0.9rem;
            }
            .thank-you-box, .thank-you-title {
                width: 80%; 
                padding: 3rem; 
                color: black; 
            }
            .thank-you-box {
                border-radius: 36px; 
                margin: auto; 
                margin-top: 0rem; 
                background-color: white; 
                margin-bottom: 5rem;
            }
            .qos-product-text li.list-group-item {
                font-size: 0.8rem;
            }
            .thank-you-box, .thank-you-title {
                width: 85%; 
                padding: 2.8rem; 
                border-radius: 36px; 
            }
            .ques-lfc {
                display: none;
            }
            .footer-btns {
                flex-direction: column-reverse;   
            }
            .thankyou-right {
                padding: 1rem 2rem 0rem 2rem;
            }
            .thank-you-title h1{
                font-size: 3rem;
                font-weight: bold;
                line-height: 3rem;
            }
            .thank-you-title h1:last-child{
                font-family: 'Poppins';
                font-size: 3.2rem;
            }
        }
        @media screen and (max-width: 768px)  {
            .thank-you-box {
                padding: 2.6rem;
            }
            .product-title {
                font-size: 2.2rem;
            }
        }
        @media screen and (max-width: 640px)  {
            .thank-you-box {
                padding: 2.2rem;
            }
        }
        @media screen and (max-width: 640px)  {
            .product-title {
                font-size: 1.8rem;
            }
        }
    </style>
    <livewire:styles />
    @yield('style')
    <livewire:scripts />
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
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

<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KV2ZB6ZG"
            height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<section>
    <div class="quest-v2-header">
        <div class="container-fluid">
            <a class="quest-logo" href="{{ url('/') }}">
                <!-- <img src="images/quest-logo.png" alt=""> -->
                <img src="{{ asset('images/quest-logo.png')}}" alt="">
            </a>
        </div>
    </div>
    <div class="thank-you-title mobile">
        <h1>Thank You</h1>
        <h1>For your order</h1>
    </div>
    <div class="thank-you-box">
        <div class="row">
            <div class="col col-12 col-md-12 col-lg-6 left-image-area">
                <img src="/frontend/images/thankyou.png" class="thankyou-desktop-img" style="width: 100%;">
                <img src="/frontend/images/thankyou-mobile.png" class="thankyou-mobile-img" style="width: 100%;">
                <div class='col col-md-12 col-lg-6 ques-lfc'  style="width: 100%">
                    <div class="quest-lfc-btn" style="width: 100%; display: flex; justify-content: space-between; margin: 2rem 0rem; padding: 0rem;">
                        <div style="display: flex; justify-content: space-between; align-items: center">
                            <div><img src="{{asset('frontend_new/images/licensed.png')}}" alt="backed" style="width: 2rem; margin: 0.5rem;"></div>
                            <div style="margin: 0px;"><span>Licensed & Registered Medication</span></div>
                        </div>
                        <div style="display: flex; justify-content: space-between; align-items: center">
                            <div><img src="{{asset('frontend_new/images/lock.png')}}" alt="backed" style="width: 2rem; margin: 0.5rem;"></div>
                            <div style="margin: 0px;"><span>Free & Discreet 24 Hour Shipping</span></div>
                        </div>
                        <div style="display: flex; justify-content: space-between; align-items: center">
                            <div><img src="{{asset('frontend_new/images/delete.png')}}" alt="backed" style="width: 2rem; margin: 0.5rem;"></div>
                            <div style="margin: 0px;"><span>Pause or Cancel Anytime</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-md-12 col-lg-6 thankyou-right">
                <?php
                $product_id = Session::get("product_id");

                $product = DB::table('products')->where('id',$product_id)->first();
                if(empty($product)) {
                    $total_price = 0;
                    $first_time_discount = 0;
                    $discount_price = 0;
                    $category_id = 0;
                    $price = 0;
                }
                else {
                    $total_price = $product->first_time_disc;
                    $first_time_discount = $product->first_time_disc;
                    $discount_price = $product->price - $product->first_time_disc;
                    $category_id = $product->category_id;
                    $price = $total_price;
                }
                ?>
                
                <div>
                    <div class="thank-you-title desktop">
                        <h1>Thank You</h1>
                        <h1>For your order</h1>
                    </div>
                    <h4 class="product-title">Full Beard Kit with Topical Solutions</h4>
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

                <p class="clearText duration-label"><span id="dur_label">{{empty($product->subscription_duration) ? "" : $product->subscription_duration}}</span> x months supply of treatment</p>
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
                </div>
                <div class="row footer-btns">
                    <div class="col col-md-12 col-lg-6">
                        <!-- <button class='btn-d-trans footer-btn footer-back' style="border: 1px solid black; margin-top: 1rem; color: black; width: 100%;">Back</button> -->
                    </div>
                    <div class="col col-md-12 col-lg-12">
                        <a href="{{ url('/questionnaireCat') }}"><button class='btn-d-black footer-btn' style=" width: 100%; margin-top: 1rem;">Continue</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="js/custom.js"></script> -->
    <script src="{{ asset('js/custom.js') }}"></script>

    <script>
        $(document.body) .ready(function() {
            $(".footer-back").click(function() {
                window.history.back()
            })
        })
    </script>
</body>
</html>

