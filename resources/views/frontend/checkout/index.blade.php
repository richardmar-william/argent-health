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
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta name="bucls" content="SHARED-SERVICES" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/css2.css?family=Khand:wght@300;400;500;600;700&family=Yeseva+One&display=swap"
        rel="stylesheet">
    <link href="/css/css2.css?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome/all.min.css" />
    <link rel="stylesheet" href="css/quest-v2.css">
    <link rel="stylesheet" href="css/quest-v2-respsv.css">
    <link rel="stylesheet" href="{{ asset('css/quest-v2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/quest-v2-respsv.css') }}">

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
            '/js/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KV2ZB6ZG');</script>
    <!-- End Google Tag Manager -->
        <style>
            .gpay-card-info-iframe.gpay-card-info-iframe-fade-in{
                display: none;
            }
            .google-pay-area .google-pay-button, #apple-pay-button {
                height: 44px;
                max-height: 44px;
                overflow: hidden
            }
            #apple-pay-button {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 44px;
                max-height: 44px;
                background-color: #242423;
                border-radius: 30px;
                overflow: hidden; 
                padding: 0px 60px;
            }
            .gpay-card-info-container.black.long.en{
                height: 44px;
                max-height: 44px;
                background-color: #242423;
                border-radius: 30px;
                overflow: hidden; 
                background-image: url(https://www.gstatic.com/instantbuy/svg/dark/en.svg); background-repeat: no-repeat; 
                background-position: center;
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
                            <div class="col-lg-5 col-md-12">
                                <input type="hidden" name="session_id" value="{{$sessionId}}">
                                <input type="hidden" name="total_price" value="{{$total_price}}">

                                <div class="quest-ordrsmry-left">

                                    <!-- apply affiliate -->
                                    <div class="card-design mb-40">
                                        <h3 class="card-heading mb-30">Your Order</h3>
                                        @foreach($product_data as $product)
                                        @php
                                        $first_time_discount = $product->first_time_disc;
                                        $category_id = $product->category_id;
                                        // dd($category_id);
                                        $price = $product->price;
                                        $discount_price = abs( (float) $product->first_time_disc - (float) $product->price );
                                        $img = DB::table('media')->where('mediable_id',$product->id)->first();
                                        $tag = DB::table('product_tags')->where('product_id', $product->id)->first();
                                        if(isset($tag->tag_id)) {
                                        $type = DB::table('tags')->where('id',$tag->tag_id)->first();
                                        }
                                        $category_id = $product->category_id;
                                        @endphp

                                        <div class="qos-product">
                                            <figure>
                                                <!-- <img class="img-fluid" src="{{asset('frontend_new/images/sildenafil-img.png')}}" alt=""> -->
                                                <img class="img-fluid"
                                                    src="{{ asset('storage/images/products/') }}{{ '/'. $img->file_name}}"
                                                    alt="gent-img2" />
                                            </figure>
                                            <div class="qos-product-cont">
                                                <h5 class="text-dark">{{ $product->name }}</h5>
                                                <h5 id="p_name"></h5>
                                                <!-- <p>50mg 12 tablets monthly</p> -->
                                            </div>
                                            <div class="qos-product-price" style="display: flex; font-size: 16px;">
                                                <!-- <div class="qos-product-price"> -->
                                                <!-- £<p id="p_price">



                                                </p>
                                                @if(isset($product->quantity) || $product->quantity == 0)
                                                /<p id="p_strength">{{ $product->quantity }}</p>Tabs
                                                @endif
                                                @if(isset($product->quantity_mg))
                                                <p id="p_mg">{{ '/'.$product->quantity_mg }}</p>mg
                                                @endif
                                                @if(isset($type->name))
                                                <p id="p_strength">{{ '/'.$type->name }}</p>
                                                @endif -->
                                                {{($product->subscription_duration == 1)? 'Monthly subscription':$product->subscription_duration.' Monthly subscription'}}
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="cstm-border"></div>
                                        <!-- <form id="myForm"> -->
                                           @if($total_price > $first_time_discount)
                                            <div class="qos-product-text text-dark mb-20">Subtotal <div class="price text-dark">
                                                    £{{$total_price}}.00
                                                </div>
                                            </div>
                                           @else
                                           <div class="qos-product-text text-dark mb-20">Subtotal <div class="price text-dark">
                                                    £{{$first_time_discount}}.00
                                                </div>
                                            </div>
                                           @endif

                                        <p class="clearText">{{$product->subscription_duration}} x months supply of treatment</p>
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
                                                          <span class="">-£{{$discount_price}}</span>
                                                        @else
                                                        <span class="">£0</span>
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


{{--                                        <div class="text-div mt-1">--}}
{{--                                            <p class="text-p text-dark orderText">You'll be recharged the same amount at the end of <br>--}}
{{--                                                each subscription cycle you've selected, </br>--}}
{{--                                                until you decide to cancel</p>--}}
{{--                                            </div>--}}
                                            <div class="cstm-border"></div>


                                            <div class="qos-product-text mb-3 mt-2">
                                                <input type="text" id="coupon_code" class="discount-cls-main"
                                                    name="coupon_code" value="" placeholder="Coupon Code" >
                                                <input type="hidden" id="input_couponTotal" value="">
                                                <input type="hidden" name="total_price" value="{{$total_price}}">
                                                <input type="hidden" name="session_id" value="{{$sessionId}}">

                                                <div class="qos-product-text"> <button type="button" id="coupon_btn"
                                                                                       class="btn-d-black">Apply Coupon</button></div>

                                                <p id="coupon_error"></p>
                                            </div>


                                        <!-- </form> -->
                                    </div>
                                    <!-- apply affiliate -->




                                    <!-- <div class="card-design smlprdt-offer mb-40">
                                        <h3 class="card-heading mb-30">Current offers</h3>
                                        <div class="offer-tablet-name">
                                            <figure>
                                                <img src="{{asset('frontend_new/images/sildenafil-img.png')}}" alt="">
                                            </figure>
                                            <h5>Testosterone Support</h5>
                                        </div>
                                        <p class="offer-desc mb-20">A daily supplement that helps to support your natural testosterone levels.</p>
                                        <div class="offer-price-btn">
                                            <div class="ofr-price">£18.76 <span>£20.00</span></div>
                                            <div class="ofr-add-btn">
                                                <a href="javascript:void(0)" class="btn-learn-more mr-15">Learn More</a>
                                                <a href="javascript:void(0)" class="btn-d-black"><i
                                                        class="fa-solid fa-circle-plus me-2"></i> Add</a>
                                            </div>
                                        </div>
                                        <div class="cstm-border"></div>
                                        <div class="offer-tablet-name">
                                            <figure>
                                                <img src="{{asset('frontend_new/images/sildenafil-img.png')}}" alt="">
                                            </figure>
                                            <h5>Testosterone & Cholesterol Test Kit</h5>
                                        </div>
                                        <p class="offer-desc mb-20">A daily supplement that helps to support your natural testosterone levels.</p>
                                        <div class="offer-price-btn">
                                            <div class="ofr-price">£18.76 <span>£20.00</span></div>
                                            <div class="ofr-add-btn">
                                                <a href="javascript:void(0)" class="btn-learn-more mr-15">Learn More</a>
                                                <a href="javascript:void(0)" class="btn-d-black"><i
                                                        class="fa-solid fa-circle-plus me-2"></i> Add</a>
                                            </div>
                                        </div>
                                    </div> -->
                                    <ul class="quest-lfc-btn">
                                        <li><a href="javascript:void(0)">
                                                <img src="{{asset('frontend_new/images/lock.png')}}" alt="backed">
                                                 Free and discreet 24 hour shipping
                                            </a></li>
                                        <li><a href="javascript:void(0)">
                                                <img src="{{asset('frontend_new/images/delete.png')}}" alt="backed">
                                                 Pause or cancel subscription anytime
                                            </a></li>
                                        <li><a href="javascript:void(0)">
                                                <img src="{{asset('frontend_new/images/licensed.png')}}" alt="backed">
                                                Licensed & Registered medications
                                            </a></li>
                                    </ul>
                                </div>
                            </div>

                            @if(!Auth::check())
                            <!-- LOGIN -->
                            <div class="col-lg-7 col-md-12 auths" id="logins">
                                <div class="quest-ordrsmry-right">


                                    @if($category_id != 32 and $category_id!=33)
                                    <div class="col-12 text-center 1 ">
                                        <img src="{{asset('frontend_new/images/money-back.png')}}" class="img-fluid"/>
                                    </div>
                                    @endif

                                    <h3 class="quest-v2-subh mb-30">
                                        Order summary
                                    </h3>
                                    <h4 class="q-orsm-heading mb-20">Log in to your account </h4>

                                    <p class="mb-40">Please log in to your account to complete your order.<br>Or if you don't have an
                                        account
                                        <a href="javascript:void(0)" onClick="ShowHideSignup(1)"
                                            class="l-s-btn next-button btn-d-black text-light">Sign up</a>
                                    </p>
                                    <!-- log in form -->
                                    <form method="POST" action="{{ route('login') }}" id="login_form"
                                        novalidate="novalidate">
                                        @csrf
                                        <input type="hidden" name="session_id" value="{{ $sessionId }}">
                                        <div class="form-group">
                                            <input type="hidden" name="log-in" value="checkout">
                                            <label for="email">Email address</label>
                                            <input type="email" class="form-control" name="email"
                                                value="{{ old('email') }}" placeholder="Enter Here">
                                            @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="pass" name="password"
                                                value="{{ old('email') }}" placeholder="Enter Here">
                                            @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="login-btn-pw">
                                            <div class="l-s-button-box" style="display: flex; justify-content: between;">
                                                <button type="submit"
                                                    class="l-s-btn next-button btn-d-black">{{ __('Login') }}</button>
                                                    
                                            </div>
                                            <!-- <button class="btn-d-black next-button">Login</button> -->

                                            @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">Forget your password?</a>
                                            @endif
                                            
                                        </div>
                                    </form>
                                    <!-- log in form end-->
                                    <!-- {!! JsValidator::formRequest('App\Http\Requests\Frontend\LoginRequest') !!} -->

                                </div>
                            </div>
                            <!-- LOGIN -->

                            @if(!empty($successMsg))
                            <div class="alert alert-success"> {{ $successMsg }}</div>
                            @endif
                            <div class="col-lg-7 col-md-12 auths" id="signups">
                                <div class="quest-ordrsmry-right">


                                    <div class="col-12 text-center 2">
                                        <img src="{{asset('frontend_new/images/money-back.png')}}" class="img-fluid"/>
                                    </div>



                                    <h3 class="quest-v2-subh mb-20">
                                        Order summary
                                    </h3>
                                    <p class="mb-10"><b>A few details about you</b></p>
                                    <p class="mb-40">We just need a few more details before we can send your order out.
                                        These will be kept private and will
                                        never be shared unless you ask us to. Already registered?
                                        <a href="javascript:void(0)" onClick="ShowHideSignup(0)">Log in</a>
                                    </p>
                                    <h4 class="q-orsm-heading mb-30">Account details</h4>

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

                                        <h4 class="q-orsm-heading mb-20">Personal information</h4>
                                        <p class="mb-30">We are required to confirm the identity of our members. Any
                                            incorrect details will cause delays to your order.</p>

                                        <div class="form-group">
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

                                        <div class="form-group">
                                            <label for="dob">Date of birth</label>
                                            <input type="date" class="form-control" id="dob" name="dob" value=""
                                                placeholder="Day / Month / year">
                                            <p id="age" style="color:red;"></p>
                                        </div>
                                        @error('dob')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                        <div class="form-group">
                                            <label for="number">Phone number</label>
                                            <input type="number" class="form-control" name="number" value=""
                                                placeholder="Enter Here">
                                            <p class="text-e20 20 20 20nd input-desc">In very rare cases our clinicians
                                                may need to call you. They will always be discreet.</p>
                                        </div>
                                        @error('number')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                        <div class="form-group">
                                            <label for="Sex">Sex</label>
                                            <select class="form-control" aria-label="Gender Select" name="sex">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select>
                                            <p class="text-end input-desc">What sex were you assigned at birth, as shown
                                                on your original birth certificate. This is important for us to know
                                                because it allows us to provide you with treatments as safely as
                                                possible.</p>
                                        </div>
                                        @error('sex')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror


                                        <!-- address -->
                                        <h4 class="q-orsm-heading mb-20 text-light">Delivery address</h4>
                                        <p class="mb-30 text-light">Please make sure your address is accurate. Try using our
                                            auto-complete option. This will help us confirm your identity.</p>
                                        <div class="form-group">
                                            <label for="address ">Address</label>
                                            <input type="text" class="form-control" name="address" id="new_address"
                                                value="" placeholder="Enter Here">
                                        </div>
                                        @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <input type="text" id="city_dropdown" name="city" class="form-control" name="city"
                                                value="" placeholder="Enter Here">
                                        </div>
                                        @error('city')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <div class="form-group">
                                            <label for="postcode">Post code</label>
                                            <input type="text" class="form-control" id="zipcode" name="postcode" value=""
                                                placeholder="Enter Here">
                                        </div>
                                        @error('postcode')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <div class="form-group form-check pt-20">
                                            <input class="form-check-input error" type="checkbox"
                                                name="terms_and_services" id="terms-and-service" aria-required="true">
                                            <label class="form-check-label m-0" for="terms-and-service">
                                                Yes, I’m agree to AGENT term’s & Conditions and Privacy Policy.
                                            </label>
                                            <label id="terms_and_services-error" class="error"
                                                for="terms_and_services">Please click to agree with our terms of
                                                services.</label>
                                        </div>
                                        <div class="form-group form-check">
                                            <input class="form-check-input error" type="checkbox" name="services"
                                                id="service" aria-required="true">
                                            <label class="form-check-label m-0" for="service">
                                                Please keep me updated with special offers, promotions and marketing
                                                communications.
                                            </label>
                                            <label id="terms" class="error" for="services">Please click to agree with
                                                our terms of services.</label>
                                        </div>
                                        <div class="quest-v2-btn">
                                            <!-- <a class="btn-d-black btn-wt-300 next-button" href="javascript:void(0)">Continue</a> -->
                                            <button id="valid" type="submit"
                                                class="btn-d-black btn-wt-300 next-button">Continue</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <!-- Signups-->
                            <!--Adress & Order place-->

                            @else

                            <div class="col-lg-7 col-md-12" id="address_order">
                                <div class="quest-ordrsmry-right">


                                    <div class="col-12 text-center 3">
                                        <img src="{{asset('frontend_new/images/money-back.png')}}" class="img-fluid"/>
                                    </div>



                                    <h3 class="quest-v2-subh mb-20">
                                        Order summary
                                    </h3>
                                    @if(!empty($successMsg))
                                    <div class="alert alert-success"> {{ $successMsg }} </div>
                                    @endif
                                    <p class="mb-10"><b>Delivery and payment details</b></p>
                                    <p class="mb-40 pb-20">Please make sure the delivery address and payment details
                                        below are correct before placing your order.</p>

                                    @php
                                    $user_id = auth()->user()->id;
                                    $addresses = DB::table('delivery_address')->where('user_id', $user_id)->orderBy("created_at", "desc")->first();
                                    $login_addreses = (isset($addresses->address)) ? $addresses->address:'';
                                    @endphp


                                    <h4 class="q-orsm-heading mb-30">Delivery address</h4>
                                    <div class="form-group address-f-group">
                                        <!-- <textarea type="text" class="form-control" id="ShippingAddress" name="delivery_address" placeholder="Enter Here"></textarea>
                                                <button type="button" class="btn-d-trans" data-bs-toggle="modal" data-bs-target="#addressModal"><i class="fa-solid fa-circle-plus me-2"></i>Use New address</button> -->

                                        <div class="cstm-border"></div>
                                        <div class="qos-product-text mb-20">Address<div class="price">
                                                {{ isset($addresses->address) ? $addresses->address : "Please fill your address on your Profile." }}
                                            </div>
                                        </div>
                                        <div class="qos-product-text mb-20">city<div class="price">
                                                {{ isset($addresses->city) ? $addresses->city : "Please fill your City on your profile." }}
                                            </div>
                                        </div>
                                        <div class="qos-product-text mb-20">Zip<div class="price">
                                                {{ isset($addresses->zip_code) ? $addresses->zip_code : "Please fill your Zip code on your profile." }}
                                            </div>
                                        </div>

                                        <div class="cstm-border"></div>
                                    </div>

                                    <div class="b_address">
                                        <input type="checkbox" id="vehicle1" class="bill_add" name="vehicle1"
                                            value="Bike" onchange="valueChanged()" checked>
                                        <label for="vehicle1"> Billing Address Same As Delivery Address</label><br>
                                        <div class="form-group address-f-group" id="billing_address">
                                            <!--billing address -->
                                            @if(!empty($successMsg))
                                            <div class="alert alert-success"> {{ $successMsg }}</div>
                                            @endif
                                            <form id="bill_address" method="POST"
                                                action="{{ route('delivery_address')}} ">
                                                @csrf
                                                <h4 class="q-orsm-heading mb-20">Billing address</h4>
                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <input type="text" class="form-control" name="address" id="new_address" value=""
                                                        placeholder="Enter Here">
                                                </div>
                                                @error('address')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <div class="form-group">
                                                    <label for="city">City</label>
                                                    <input type="text" id="city_dropdown" class="form-control"
                                                        name="city" value="" placeholder="Enter Here">
                                                </div>
                                                @error('city')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <div class="form-group">
                                                    <label for="postcode">Post code</label>
                                                    <input type="text" class="form-control" 
                                                    id="zipcode" name="zip_code" value=""
                                                        placeholder="Enter Here">
                                                </div>
                                                @error('zip_code')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                                <div class="quest-v2-btn">
                                                    <!-- <a class="btn-d-black btn-wt-300 next-button" href="javascript:void(0)">Continue</a> -->
                                                    <button id="bil_submit" type="submit"
                                                        class="btn-d-black btn-wt-300 next-button">Continue</button>
                                                </div>
                                            </form>
                                        </div>

                                        <!-- 21sep code -->
                                        @php
                                        $user_id = auth()->user()->id;
                                        $address = DB::table('delivery_address')->where('user_id', $user_id)->get();
                                        @endphp
                                        <form id="add_form">
                                            <div class="biling-add-box" id="choose_add">
                                                <h4 class="q-orsm-heading mb-30">Choose Another Address</h4>
                                                @foreach($address as $addresses)
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="west_1-{{ $addresses->id }}"
                                                            name="subs_1" value="{{ $addresses->id }}"
                                                            onclick="appendRadioValue('{{ $addresses->id }}')">
                                                        <label class="next-button" for="west_1-{{ $addresses->id }}">
                                                            <span>{{ $addresses->address }}</span>
                                                            <span>{{ $addresses->city }}</span>
                                                            <span>{{ $addresses->zip_code }}</span>
                                                        </label>
                                                    </li>
                                                </ul>
                                                @endforeach
                                            </div>
                                        </form>
                                        <!-- 21sep code -->

                                        <!-- code for billing address 18sep2013 -->

                                        <!-- <h4 class="q-orsm-heading mb-30">Billing address</h4>
                                            <div class="form-group address-f-group pb-30">
                                                <textarea type="text" class="form-control" id="BillingAddress" name="billing_address" placeholder="Enter Here"></textarea>

                                                <button type="button" class="btn-d-trans"  data-bs-toggle="modal" data-bs-target="#addressModal2"><i class="fa-solid fa-circle-plus me-2"></i>Add another address</button>
                                            </div>
                                            <h4 class="q-orsm-heading mb-40">Add payment method</h4> -->

                                        

                                        <div class="quest-v2-btn">
                                            <div class="quest-ordrsmry-right">

                                                <!-- <form id="card_payment" action="{{ route('place.order') }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="session_id" value="{{$sessionId}}">
                                                            <input type="hidden" name="total_price" value="{{$total_price}}">
                                                            <input type="hidden" id="ass_coupon_code" name="coupon_code" value="">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group d-card">
                                                                        <label for="text">Card number</label>
                                                                        <input type="text" id="ccnum" inputmode="numeric" class="form-control " name="card_number"  placeholder="1234 5678 9012 3456">
                                                                        <i class="fa-solid fa-credit-card"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="date">Expiry date</label>
                                                                        <input type="month" class="form-control" id="date" name="ex_date" placeholder="mM / YYYY">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="cvc">CVC / CVV</label>
                                                                        <input type="number" class="form-control" id="cvc" name="cvc"  placeholder="3 digits">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h4 class="q-orsm-heading mb-20 debit-text">
                                                                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                                                                "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                                                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                                                width="32.000000pt" height="32.000000pt" viewBox="0 0 32.000000 32.000000"
                                                                preserveAspectRatio="xMidYMid meet">

                                                                <g transform="translate(0.000000,32.000000) scale(0.100000,-0.100000)"
                                                                fill="#000000" stroke="none">
                                                                <path d="M105 295 c-17 -16 -25 -35 -25 -58 0 -26 -5 -36 -20 -40 -18 -5 -20
                                                                -14 -20 -89 0 -52 5 -89 12 -96 16 -16 200 -16 216 0 7 7 12 43 12 90 0 67 -3
                                                                80 -20 90 -11 7 -20 23 -20 36 0 79 -83 120 -135 67z m93 -17 c7 -7 12 -27 12
                                                                -45 0 -33 0 -33 -50 -33 -50 0 -50 0 -50 33 0 40 15 57 50 57 14 0 31 -5 38
                                                                -12z m-18 -143 c10 -12 10 -19 2 -27 -7 -7 -12 -22 -12 -35 0 -13 -4 -23 -10
                                                                -23 -5 0 -10 10 -10 23 0 13 -5 28 -12 35 -8 8 -8 15 2 27 7 8 16 15 20 15 4
                                                                0 13 -7 20 -15z"/>
                                                                </g>
                                                                </svg>
                                                                Your transaction and payment details are encrypted and highly secure.</h4>
                                                            <div class="debit-btn-pw">
                                                            <button type="submit" class="btn-d-black btn-wt-300 next-button me-2" id="order_btn" type="submit">Place order</button>
                                                            </div>
                                                        </form> -->

                                                <form id="card_payment" action="{{ route('place.order') }}"
                                                    method="POST">
                                                    @csrf
                                                    <input type="hidden" name="session_id" value="{{$sessionId}}">
                                                    <input type="hidden" name="total_price" value="">
                                                    <input type="hidden" id="ass_coupon_code" name="coupon_code"
                                                        value="">
                                                    <input type="hidden" id="address_id" type="hidden" name="address_id"
                                                        value="">
                                                    <input type="hidden" name="subscription_duration"
                                                        value="{{$prod_subs}}">
                                                    <input type="hidden" name="product_id"
                                                        value="{{$product_id}}">
                                                      <!--place order button disabled untill user has a delivery address-->
                                                        @if(isset($login_addreses) && !empty($login_addreses))
                                                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                                                <div class="debit-btn-pw mt-30" style="margin-top: 20px;">
                                                                    <button type="submit"
                                                                        class="btn-d-black btn-wt-300 next-button me-2"
                                                                        id="order_btn" type="submit">Pay with card</button>
                                                                </div>
                                                                
                                                                <div class='google-pay-area' style="display: inline-block;">
                                                                    <div id="google-pay-button"></div>
                                                                </div>
                                                                
                                                                <div class='apple-pay-area' style="display: inline-block;">
                                                                    <div id="apple-pay-button">Pay with Apple pay</div>
                                                                </div>
                                                            </div>
                                                        @else
                                                        <div class="debit-btn-pw">
                                                            <button type="button" class="btn-d-black btn-wt-300 next-button">Please fill your Delivery Address first.</button>
                                                        </div>
                                                        @endif
                                                </form>

                                                <!-- <form method="POST" action="https://payments.securetrading.net/process/payments/choice">


                                                            <input type="hidden" name="credentialsonfile" value="1">
                                                            <input type="hidden" name="currencyiso3a" value="GBP">
                                                            <input type="hidden" name="mainamount" value="{{$total_price}}">
                                                            <input type="hidden" name="sitereference" value="test_agenthealth119402">
                                                            <input type="hidden" name="sitesecurity" value="59-0051c01ec6601235ee72c033f76863f5dc0de7ab9951fa6b2193615dadd63be9">
                                                            <input type="hidden" name="sitesecuritytimestamp" value="2023-08-28 14:22:37">
                                                            <input type="hidden" name="stprofile" value="default">
                                                            <input type="hidden" name="subscriptionnumber" value="1">
                                                            <input type="hidden" name="subscriptiontype" value="RECURRING">
                                                            <input type="hidden" name="version" value="2">

                                                            <input type="hidden" name="stdefaultprofile" value="st_paymentcardonly">
                                                            <input type=hidden name="ruleidentifier" value="STR-6">
                                                            <input type=hidden name="successfulurlredirect" value="http://49.249.236.30:3007/agent/public/checkout/success1">
                                                            <input type=hidden name="ruleidentifier" value="STR-13">
                                                            <input type=hidden name="errorurlredirect" value="http://49.249.236.30:3007/agent/public/checkout/error">

                                                            <input type="submit" value="Pay">
                                                        </form> -->

                                                <!-- <form method="POST" action="https://payments.securetrading.net/process/payments/choice">
                                                            <input type="hidden" name="stprofile" value="default">
                                                            <input type="hidden" name="stdefaultprofile" value="st_iframe_cardonly">

                                                            <input type="hidden" name="sitereference" value="test_agenthealth119402">
                                                            <input type="hidden" name="stprofile" value="default">
                                                            <input type="hidden" name="currencyiso3a" value="GBP">
                                                            <input type="hidden" name="mainamount" value="10.00">
                                                            <input type="hidden" name="version" value="2">
                                                            <input type="hidden" name="orderedrequesttypedescriptions" value="THREEDQUERY,ACCOUNTCHECK,SUBSCRIPTION">
                                                            <input type="hidden" name="subscriptionunit" value="MONTH">
                                                            <input type="hidden" name="subscriptionfrequency" value="1">
                                                            <input type="hidden" name="subscriptionnumber" value="1">
                                                            <input type="hidden" name="subscriptionfinalnumber" value="12">
                                                            <input type="hidden" name="subscriptiontype" value="RECURRING">
                                                            <input type="hidden" name="credentialsonfile" value="1">
                                                            <input type="submit" value="Pay">
                                                            </form> -->

                                            </div>
                                        </div>
                                    </div>




                                    @endif
                                    <!--Address & Order place-->
                                    <div class="card-body">
                                        {{-- <livewire:frontend.checkout.checkout-component /> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>







                    @if(Auth::check())
                    <!--address modal to select the  -->
                    <!-- Modal1 -->
                    <div class="modal fade" id="addressModal" tabindex="-1" aria-labelledby="addressModalLabel"
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
                    <div class="modal fade" id="addressModal2" tabindex="-1" aria-labelledby="addressModalLabel"
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

    <script src="/js/jquery3.6.4.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>

    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
    <script src="http://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
    <script async crossorigin
        src="https://applepay.cdn-apple.com/jsapi/v1.1.0/apple-pay-sdk.js"
        ></script>
        <script>
            const currencyCode = 'USD';
const totalLabel = 'Total';

const shippingMethods = [{
	// label is only used for Apple Pay, not Payment Request
	label: 'Priority Shipping',
	// detail is used for Apple Pay
	// and Payment Request's shipping method's label
	detail: 'USPS Priority Shipping',
	amount: '5.99',
	identifier: 'usps-priority'
}, {
	label: '2 Day Shipping',
	detail: '2 Day Shipping - arrives on ' + new Date(Date.now() + 1000 * 60 * 60 * 24 * 2).toLocaleDateString(),
	amount: '8.99',
	identifier: '2-day'
}];

/* Apple Pay Web */
if (window.ApplePaySession) {
	const STATUSES = {
		Failure: ApplePaySession.STATUS_FAILURE,
		InvalidBillingPostalAddress: ApplePaySession.STATUS_INVALID_BILLING_POSTAL_ADDRESS,
		InvalidShippingPostalAddress: ApplePaySession.STATUS_INVALID_SHIPPING_POSTAL_ADDRESS,
		InvalidShippingContact: ApplePaySession.STATUS_INVALID_SHIPPING_CONTACT,
		PINRequired: ApplePaySession.STATUS_PIN_REQUIRED,
		PINIncorrect: ApplePaySession.STATUS_PIN_INCORRECT,
		PINLockout: ApplePaySession.STATUS_PIN_LOCKOUT
	};
}

function mapStatus (status) {
	if (status && STATUSES[status]) {
		return STATUSES[status];
	}
	return ApplePaySession.STATUS_FAILURE;
}

function getProductDetails () {
    const prodNames = <?php echo json_encode($product_data);?>;
	return {
		label: "asdf",
		amount:  $("[name='total_price']").val()
	}
}

function createApplePayPaymentRequest (product) {
	return {
		countryCode: 'US',
		currencyCode: currencyCode,
		supportedNetworks: ["discover"],
		merchantCapabilities: ['supports3DS'],
		requiredShippingContactFields: ['postalAddress', 'name', 'phone'],
		requiredBillingContactFields: ['postalAddress', 'name'],
		lineItems: [product],
		total: {
			label: 'Apple Pay Web Example',
			amount: product.amount
		}
	};
}

function validateApplePayMerchant (session, event) {
	postJson('merchant-validate', {
		validationURL: event.validationURL
	}).then(function (response) {
		console.log(JSON.stringify(response));
		session.completeMerchantValidation(response);
	}, function (status) {
		console.log(JSON.stringify(status));
		session.abort();
	});
}

function applePayPaymentMethodSelected (session, request, event) {
	console.log(event.paymentMethod);
	session.completePaymentMethodSelection(request.total, request.lineItems);
}

function selectApplePayShippingMethod (request, shippingMethod) {
	// add shipping method to line items
	var lineItems = request.lineItems.concat({
		label: shippingMethod.label,
		amount: shippingMethod.amount
	});

	// calculate total amount
	var totalAmount = lineItems.reduce(function (total, item) {
		return total += parseFloat(item.amount);
	}, 0);
	// create a new total object with the new amount from 
	// the request's original total
	var total = Object.assign({}, request.total, {
		amount: totalAmount.toString()
	});
	// return updated request
	return Object.assign({}, request, {lineItems, total});
}

function applePayShippingContactSelected (session, request, event) {
	console.log(event.shippingContact);
	var updatedRequest = selectApplePayShippingMethod(request,
		shippingMethods[0]);
	session.completeShippingContactSelection(ApplePaySession.STATUS_SUCCESS,
		shippingMethods, updatedRequest.total, updatedRequest.lineItems);

	// return the new request so the session's request can be updated
	return updatedRequest;
}

function applePayShippingMethodSelected (session, request, event) {
	console.log(event.shippingMethod);
	var updatedRequest = selectApplePayShippingMethod(request,
		event.shippingMethod);
	session.completeShippingMethodSelection(ApplePaySession.STATUS_SUCCESS,
		updatedRequest.total, updatedRequest.lineItems);

	// return the new request so the session's request can be updated
	return updatedRequest;
}

function applePayPaymentAuthorized (session, request, event) {
	console.log(event.payment);
	postJson('payment-authorize', {
		payment: event.payment,
		amount: request.total.amount
	}).then(function (response) {
		console.log(response);
		session.completePayment(ApplePaySession.STATUS_SUCCESS);
		window.location = 'order-confirmation.html';
	});
}

function cancel (session, event) {
	console.log(event);
}

function startApplePay () {
	// listen to apple pay buttons' click events
	$("#apple-pay-button").click(function(e) {
        console.log("applemay", window.ApplePaySession)
        if (!window.ApplePaySession) {
            return;
        }
        e.preventDefault();
        var request = createApplePayPaymentRequest(getProductDetails());
        var session = new ApplePaySession(1, request);
        session.onvalidatemerchant = function (event) {
            validateApplePayMerchant(session, event);
        }
        session.onpaymentmethodselected = function (event) {
            applePayPaymentMethodSelected(session, request, event);
        }
        session.onshippingcontactselected = function (event) {
            request = applePayShippingContactSelected(session, request, event);
        }
        session.onshippingmethodselected = function (event) {
            request = applePayShippingMethodSelected(session, request, event);
        }
        session.onpaymentauthorized = function (event) {
            applePayPaymentAuthorized(session, request, event);
        }
        session.oncancel = function () {
            cancel(session);
        }
        session.begin();
    })
}

/* Payment Request API */
function createPaymentRequest (product) {
	var methodData = [ {
		supportedMethods: ['https://apple.com/apple-pay'],
		data: {
			environment: 'TEST',
            merchantIdentifier:" sdfasdf",
            paymentMethodType: "credit",
            countryCode:"US", 
            version: "12",
            currencyCode: "USD",
            merchantCapabilities: ['supports3DS', 'supportsCredit', 'supportsDebit'],
            supportedNetworks: ["visa","masterCard","amex"],
            requiredBillingContactFields: ["postalAddress"],
            requiredShippingContactFields: ["postalAddress","name", "phone", "email"],
			paymentMethodTokenizationParameters: {
				tokenizationType: 'NETWORK_TOKEN',
				parameters: {
					publicKey: 'BO39Rh43UGXMQy5PAWWe7UGWd2a9YRjNLPEEVe+zWIbdIgALcDcnYCuHbmrrzl7h8FZjl6RCzoi5/cDrqXNRVSo='
				}
			}
		}
	}];
	var details = {
		total: {
			label: totalLabel,
			amount: {
				currency: currencyCode,
				value: product.amount
			}
		},
		displayItems: [{
			label: product.label,
			amount: {
				currency: currencyCode,
				value: product.amount
			}
		}]
	};
	 var options = {
		 requestShipping: true,
		 requestPayerEmail: true,
		 requestPayerPhone: true
	};
	return {
		methodData: methodData,
		details: details,
		options: options
	};
}

function selectShippingOption (details, option) {
	var selectedShippingMethod;
	shippingMethods.forEach(function (method) {
		if (method.identifier === option) {
			selectedShippingMethod = method;
		}
	});
	return Object.assign({}, details, {
		shippingOptions: shippingMethods.map(function (method) {
			return {
				id: method.identifier,
				label: method.detail,
				amount: {
					currency: currencyCode,
					value: method.amount
				},
				selected: (method.identifier === option)
			}
		}),
		total: {
			label: totalLabel,
			amount: {
				currency: currencyCode,
				value: (parseFloat(details.total.amount.value) + parseFloat(selectedShippingMethod.amount)).toString()
			}
		}
	})
}

function shippingAddressChange (request, details, event) {
	console.log(request.shippingAddress);
	// select the first shipping method by default
	event.updateWith(Promise.resolve(selectShippingOption(details, shippingMethods[0].identifier)));
}

function shippingOptionChange (request, details, event) {
	console.log(request.shippingOption);
	event.updateWith(Promise.resolve(selectShippingOption(details, request.shippingOption)));
}

function startPaymentRequest () {
	// listen to buy now buttons' click event
    $("#apple-pay-button").click(function(e) {
        e.preventDefault();
        console.log("window.PaymentRequest")
        if (!window.PaymentRequest) {
            return;
        }
        console.log("window.PaymentRequest1")
        var requestData = createPaymentRequest(getProductDetails());
        var request = new PaymentRequest(requestData.methodData, requestData.details, requestData.options);
        request.addEventListener('shippingaddresschange', shippingAddressChange.bind(window, request, requestData.details));
        request.addEventListener('shippingoptionchange', shippingOptionChange.bind(window, request, requestData.details));
        request.show()
            .then(function (instrument) {
                console.log(instrument);
                instrument.complete()
                    .then(function () {
                        window.location = 'order-confirmation.html';
                    })
            }, function (failure) {
                console.error(failure);
            });
    })
}

$(document.body).ready(function(){
    if(window.ApplePaySession) {
        startApplePay();
        startPaymentRequest();
    }
    else {
        $(".apple-pay-area").hide();
    }
})
        </script>
    <!-- <script src="js/custom.js"></script> -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <Script>/**
 * Define the version of the Google Pay API referenced when creating your
 * configuration
 *
 */
const baseRequest = {
    apiVersion: 2,
    apiVersionMinor: 0,
};

/**
 * Card networks supported by your site and your gateway
 *
 */
const allowedCardNetworks = [
    "AMEX",
    "DISCOVER",
    "JCB",
    "MASTERCARD",
    "MIR",
    "VISA",
];

/**
 * Card authentication methods supported by your site and your gateway
 *
 * supported card networks
 */
const allowedCardAuthMethods = ["PAN_ONLY", "CRYPTOGRAM_3DS"];

/**
 * Identify your gateway and your site's gateway merchant identifier
 *
 * The Google Pay API response will return an encrypted payment method capable
 * of being charged by a supported gateway after payer authorization
 *
 */
const tokenizationSpecification = {
    type: "PAYMENT_GATEWAY",
    parameters: {
        gateway: "example",
        gatewayMerchantId: "exampleGatewayMerchantId",
    },
};

/**
 * Describe your site's support for the CARD payment method and its required
 * fields
 *
 */
const baseCardPaymentMethod = {
    type: "CARD",
    parameters: {
        allowedAuthMethods: allowedCardAuthMethods,
        allowedCardNetworks: allowedCardNetworks,
    },
};

/**
 * Describe your site's support for the CARD payment method including optional
 * fields
 *
 */
const cardPaymentMethod = Object.assign({}, baseCardPaymentMethod, {
    tokenizationSpecification: tokenizationSpecification,
});

/**
 * An initialized google.payments.api.PaymentsClient object or null if not yet set
 *
 */
let paymentsClient = null;

/**
 * Configure your site's support for payment methods supported by the Google Pay
 * API.
 *
 * Each member of allowedPaymentMethods should contain only the required fields,
 * allowing reuse of this base request when determining a viewer's ability
 * to pay and later requesting a supported payment method
 *
 */
function getGoogleIsReadyToPayRequest() {
    return Object.assign({}, baseRequest, {
        allowedPaymentMethods: [baseCardPaymentMethod],
    });
}

/**
 * Configure support for the Google Pay API
 *
 */
function getGooglePaymentDataRequest() {
    const paymentDataRequest = Object.assign({}, baseRequest);
    paymentDataRequest.allowedPaymentMethods = [cardPaymentMethod];
    paymentDataRequest.transactionInfo = getGoogleTransactionInfo();
    paymentDataRequest.merchantInfo = {
        // merchantId: 'BCR2DN4T5GROHDAU',
        merchantName: "example",
    };

    paymentDataRequest.callbackIntents = [
        "SHIPPING_ADDRESS",
        "SHIPPING_OPTION",
        "PAYMENT_AUTHORIZATION",
    ];
    paymentDataRequest.shippingAddressRequired = true   ;
    paymentDataRequest.shippingAddressParameters = {};
    paymentDataRequest.shippingOptionRequired = true;

    return paymentDataRequest;
}

/**
 * Return an active PaymentsClient or initialize
 *
 */
function getGooglePaymentsClient() {
    if (paymentsClient === null) {
        paymentsClient = new google.payments.api.PaymentsClient({
            environment: "TEST",
            merchantInfo: {
                merchantName: "example",
                merchantId: "exampleGatewayMerchantId",
            },
            paymentDataCallbacks: {
                onPaymentAuthorized: onPaymentAuthorized,
                onPaymentDataChanged: onPaymentDataChanged,
                // onMailVerificiatJ Iz
            },
        });
    }
    return paymentsClient;
}

function onPaymentAuthorized(paymentData) {
    return new Promise(function (resolve, reject) {
        // handle the response
        processPayment(paymentData)
            .then(function () {
                resolve({ transactionState: "SUCCESS" });
            })
            .catch(function () {
                resolve({
                    transactionState: "ERROR",
                    error: {
                        intent: "PAYMENT_AUTHORIZATION",
                        message: "Insufficient funds",
                        reason: "PAYMENT_DATA_INVALID",
                    },
                });
            });
    });
}

/**
 * Handles dynamic buy flow shipping address and shipping options callback intents.
 *
 */
function onPaymentDataChanged(intermediatePaymentData) {
    return new Promise(function (resolve, reject) {
        let shippingAddress = intermediatePaymentData.shippingAddress;
        let shippingOptionData = intermediatePaymentData.shippingOptionData;
        let paymentDataRequestUpdate = {};

        if (
            intermediatePaymentData.callbackTrigger == "INITIALIZE" ||
            intermediatePaymentData.callbackTrigger == "SHIPPING_ADDRESS"
        ) {
            if (shippingAddress.administrativeArea == "NJ") {
                paymentDataRequestUpdate.error =
                    getGoogleUnserviceableAddressError();
            } else {
                paymentDataRequestUpdate.newShippingOptionParameters =
                    getGoogleDefaultShippingOptions();
                let selectedShippingOptionId =
                    paymentDataRequestUpdate.newShippingOptionParameters
                        .defaultSelectedOptionId;
                paymentDataRequestUpdate.newTransactionInfo =
                    calculateNewTransactionInfo(selectedShippingOptionId);
            }
        } else if (
            intermediatePaymentData.callbackTrigger == "SHIPPING_OPTION"
        ) {
            paymentDataRequestUpdate.newTransactionInfo =
                calculateNewTransactionInfo(shippingOptionData.id);
        }

        resolve(paymentDataRequestUpdate);
    });
}

/**
 * Helper function to create a new TransactionInfo object.
 *
 */
function calculateNewTransactionInfo(shippingOptionId) {
    let newTransactionInfo = getGoogleTransactionInfo();

    let shippingCost = getShippingCosts()[shippingOptionId];
    newTransactionInfo.displayItems.push({
        type: "LINE_ITEM",
        label: "Shipping cost",
        price: String(shippingCost),
        status: "FINAL",
    });

    let totalPrice = 0.0;
    newTransactionInfo.displayItems.forEach(
        (displayItem) => (totalPrice += parseFloat(displayItem.price))
    );
    newTransactionInfo.totalPrice = totalPrice.toString();

    return newTransactionInfo;
}

/**
 * Initialize Google PaymentsClient after Google-hosted JavaScript has loaded
 *
 * Display a Google Pay payment button after confirmation of the viewer's
 * ability to pay.
 */
function onGooglePayLoaded() {
    const paymentsClient = getGooglePaymentsClient();
    paymentsClient
        .isReadyToPay(getGoogleIsReadyToPayRequest())
        .then(function (response) {
            if (response.result) {
                addGooglePayButton();
                // @todo prefetch payment data to improve performance after confirming site functionality
                // prefetchGooglePaymentData();
            }
        })
        .catch(function (err) {
            // show error in developer console for debugging
            console.error(err);
        });
}

/**
 * Add a Google Pay purchase button alongside an existing checkout button
 *
 */
function addGooglePayButton() {
    const paymentsClient = getGooglePaymentsClient();
    const button = paymentsClient.createButton({
        onClick: onGooglePaymentButtonClicked,
        allowedPaymentMethods: [baseCardPaymentMethod],
    });
    document.getElementById("google-pay-button").appendChild(button);
}

/**
 * Provide Google Pay API with a payment amount, currency, and amount status
 *
 */
function getGoogleTransactionInfo() {
    const prodNames = <?php echo json_encode($product_data);?>;
    let displayTmpItems = prodNames.map(item => {
        return {
            label: item.name,
            type: "SUBTOTAL",
            price: String(item.first_time_disc),
        }})
    if($("#input_couponTotal").val()) {
        displayTmpItems.push( {
            label: `Coupon code: ${$("#coupon_code").val()}`,
            type: "SUBTOTAL",
            price: String(-1 * $("#input_couponTotal").val()),
        })
    }
    return {
        displayItems: displayTmpItems,
        countryCode: "GB",
        currencyCode: "GBP",
        totalPriceStatus: "FINAL",
        totalPrice: $("[name='total_price']").val(),
        totalPriceLabel: "Total",
    };
}

/**
 * Provide a key value store for shippping options.
 */
function getShippingCosts() {
    return {
        "shipping-001": "0.00",
    };
}

/**
 * Provide Google Pay API with shipping address parameters when using dynamic buy flow.
 *
 */
function getGoogleShippingAddressParameters() {
    return {
        allowedCountryCodes: ["UK"],
        phoneNumberRequired: true,
    };
}

/**
 * Provide Google Pay API with shipping options and a default selected shipping option.
 *
 */
function getGoogleDefaultShippingOptions() {
    return {
        defaultSelectedOptionId: "shipping-001",
        shippingOptions: [
            {
                id: "shipping-001",
                label: "Free: Standard shipping",
                description: "Free Shipping delivered in 5 business days.",
            },
        ],
    };
}

/**
 * Provide Google Pay API with a payment data error.
 *
 */
function getGoogleUnserviceableAddressError() {
    return {
        reason: "SHIPPING_ADDRESS_UNSERVICEABLE",
        message: "Cannot ship to the selected address",
        intent: "SHIPPING_ADDRESS",
    };
}

/**
 * Prefetch payment data to improve performance
 *
 */
function prefetchGooglePaymentData() {
    const paymentDataRequest = getGooglePaymentDataRequest();
    // transactionInfo must be set but does not affect cache
    paymentDataRequest.transactionInfo = {
        totalPriceStatus: "NOT_CURRENTLY_KNOWN",
        currencyCode: "USD",
    };
    const paymentsClient = getGooglePaymentsClient();
    paymentsClient.prefetchPaymentData(paymentDataRequest);
}

/**
 * Show Google Pay payment sheet when Google Pay payment button is clicked
 */
function onGooglePaymentButtonClicked() {
    const paymentDataRequest = getGooglePaymentDataRequest();
    paymentDataRequest.transactionInfo = getGoogleTransactionInfo();

    const paymentsClient = getGooglePaymentsClient();
    paymentsClient.loadPaymentData(paymentDataRequest);
}

/**
 * Process payment data returned by the Google Pay API
 *
 *
 */
function processPayment(paymentData) {
    return new Promise(function (resolve, reject) {
        setTimeout(function () {
            paymentToken = paymentData.paymentMethodData.tokenizationData.token;
            if (paymentToken != "") {
                jQuery.ajax({
                    url: "{{ url('google-payment') }}",
                    method: "POST",
                    data: {
                        total_price: <?php echo $first_time_discount?>,
                        coupon_code: $('#ass_coupon_code').val(),
                        data: paymentData,
                        subscription_duration: "<?php echo $prod_subs?>",
                        amount: $("[name='total_price']").val(),
                        address_id: $("#address_id").val(),
                        order_id: '<?php echo $order_id; ?>',
                        product_id: "<?php echo $product_id; ?>",
                        session_id: "<?php echo $sessionId;?>",
                        productData: <?php echo json_encode($product_data);?>,
                        _token: "{{ csrf_token() }}",
                    },
                    success: function (result) {
                        if (result.success) {
                            window.location.href = result.url;
                        } else {
                            alert("Some thing went wrong, please tray again");
                        }
                    },
                });
            }

            resolve({});
        }, 3000);
    });
}

    </script>
    <script async src="https://pay.google.com/gp/p/js/pay.js" onload="onGooglePayLoaded()"></script>
    

</body>

</html>

<script>
$(".auths").hide();
$("#logins").show();

function ShowHideSignup($data) {
    // $(".auths").hide();
    // $("#signups").show();
    if ($data == 0) {
        $("#logins").show();
        $("#signups").hide();
    }
    if ($data == 1) {
        $("#logins").hide();
        $("#signups").show();
    }


    // else{
    //     $("#signups").hide();
    // }
}
</script>


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
                // You can perform additional actions here before submitting the form
                form.submit();
            }
        });
</script>




<script type="text/javascript">
$(document).ready(function() {


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
$(document).ready(function() {
    $('input[type="radio"]').click(function() {
        var presence = $(this).val();
        $.ajax({
            url: "{{ route('subscription.update') }}",
            method: "POST",
            data: {
                '_token': $('input[name=_token]').val(),
                'presence': presence
            },
            success: function(data) {
                alert('ff');
            }
        });
    });
});
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
            $("[name='total_price']").val(afterAmt)
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
<script>
const apiKey = "AIzaSyB6w6K6XGM-FfYNTKiSNmgcWFzwOqXqWaw";
let autocomplete;
let address1Field;
let address2Field;
let postalField;

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
}

window.initAutocomplete = initAutocomplete;
console.log(window)
window.initAutocomplete();
// console.log(new google.maps.event())
// google.maps.event.addListener(window, 'load', initialize);

// function initialize() {
//     console.log("google map inialized");
//     var input = document.getElementById('autocomplete');
//     var autocomplete = new google.maps.places.Autocomplete(input, {
//         types: ['geocode'], // Restrict to addresses
//         componentRestrictions: {
//             country: 'UK'
//         }, // Restrict to Algeria
//     });
//     console.log(autocomplete)
//     autocomplete.addListener('place_changed', function() {

//         var place = autocomplete.getPlace();
//         console.log(place.adr_address);
//         getLocationDetails(place.adr_address, apiKey)
//             .then(({
//                 city,
//                 country,
//                 pincode
//             }) => {
//                 $('input[name="postcode"]').val(pincode);
//                 $('input[name="city"]').val(city);

//             });


//         $('#latitude').val(place.geometry['location'].lat());

//         $('#longitude').val(place.geometry['location'].lng());

//         $("#latitudeArea").removeClass("d-none");

//         $("#longtitudeArea").removeClass("d-none");
//     });
// }



// function getLocationDetails(address, apiKey) {
//     const apiUrl =
//         `https://maps.googleapis.com/maps/api/geocode/json?address=${encodeURIComponent(address)}&key=${apiKey}`;

//     return fetch(apiUrl)
//         .then(response => response.json())
//         .then(data => {
//             if (data.status === "OK") {
//                 const result = data.results[0];
//                 const city = result.address_components.find(comp => comp.types.includes("locality"))?.long_name ||
//                     null;
//                 const country = result.address_components.find(comp => comp.types.includes("country"))?.long_name ||
//                     null;
//                 const pincode = result.address_components.find(comp => comp.types.includes("postal_code"))
//                     ?.long_name || null;

//                 return {
//                     city,
//                     country,
//                     pincode
//                 };
//             } else {
//                 throw new Error("Geocoding API request failed");
//             }
//         })
//         .catch(error => {
//             console.error("Error fetching location details:", error);
//             return {
//                 city: null,
//                 country: null,
//                 pincode: null
//             };
//         });
// }
</script>
