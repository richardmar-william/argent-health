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
        .thankyou-right {
             padding: 4rem 0rem 0rem 3rem;
        }
        @media screen and (max-width: 991px) {
            .ques-lfc {
                display: none;
            }
            .thankyou-right {
                padding: 4rem 2rem 0rem 2rem;
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
    <div class="thank-you-box" style="width: 80%; padding: 3rem 4rem; border-radius: 36px; margin: auto; margin-top: 4rem; background-color: white; color: black; margin-bottom: 5rem;">
        <div class="row">
            <div class="col col-md-12 col-lg-6">
                <img src="/frontend/images/thankyou.png" style="width: 100%">
                <div class='col-lg-6 col-md-12 ques-lfc'  style="width: 100%">
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
            <div class="col col-md-12 col-lg-6 thankyou-right" style="display: flex; flex-direction: column; justify-content: space-between;">
                <?php
                $orderRefId = Session::get("order_id");
                $total_price = 75;
                $first_time_discount = 60;
                $discount_price = 15;
                $category_id = 30;
                $price = 75;
                $product = DB::table('products')->where('id',"115")->first();
                ?>
                
                <div>
                    <h1>Thank You</h1>
                    <h1>For your order</h1>

                    <h4 style="margin-top: 2rem;">Full Beard Kit with Topical Solutions</h4>
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
                </div>
                <div style="width: 90%; display: flex; justify-content: space-between; margin: 2rem;">
                    <button class='btn-d-trans' style="border: 1px solid black; color: black; padding: 1rem 4rem">Back</button>
                    <button class='btn-d-black' style=" padding: 1rem 4rem">Continue</button>
                </div>
            </div>
        </div>
    </div>


</section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="js/custom.js"></script> -->
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>

