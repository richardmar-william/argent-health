{{-- @extends('layouts.app')
@section('content') --}}
<!-- Modal -->

{{-- @php
use Illuminate\Support\Str;
use App\Models\Media;

$randomString = Str::random(40); // generate a random string of length 10
session(['my_random_string' => $randomString]); // store the random string in session
$myValue = session('my_random_string');

@endphp 
<h1 class="mai kya na" hidden>
    {{ $myValue }}
</h1>
--}}

@php $product = DB::table('products')->where('category_id', 30)->get(); @endphp 

<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="language" content="en" />
    <meta name="country" content="us" />
    <meta name="robots" content="INDEX, FOLLOW" />
    <title>Hair Loss</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Khand:wght@300;400;500;600;700&family=Yeseva+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome/all.min.css" />
    <link rel="stylesheet" href="css/quest-v2.css">
    <link rel="stylesheet" href="css/quest-v2-respsv.css">
    <link rel="stylesheet" href="{{ asset('css/quest-v2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/quest-v2-respsv.css') }}">

    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="description" content="">
    <link rel="shortcut icon" href="{{ asset('frontend_new/images/logo.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/icofont.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_new/css/new-questionnaire.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Khand:wght@300;400;500;600;700&family=Yeseva+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome/all.min.css" />
    <link rel="stylesheet" href="{{ asset('frontend_new/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_new/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_new/css/owl.theme.default.min.css') }}"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css"> 
    <link rel="stylesheet" href="/css/jquery.mCustomScrollbar.min.css"> 
    <link rel="stylesheet" href="{{ asset('frontend_new/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_new/css/questionnaire.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_new/css/responsive.css') }}"> -->

    
    
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

</head>
<body>
@php
    use Illuminate\Support\Str;
    $randomString = Str::random(40); // generate a random string of length 10
    session(['my_random_string' => $randomString]); // store the random string in session
@endphp

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
                <!-- <form action="{{ route('cart_product') }}" method="POST"> -->
                    @csrf
                    <div class="quest-v2-step" id="step1">
                        <div class="row">
                            <div class="col-lg-7 col-md-12">
                                <div class="v2-1step-cont">
                                    <h4 class="weare-going-con mb-20">Welcome! We're about to ask you a few questions about your health and hair loss. This will help us determine if a prescription for hair loss treatment is right for you. Our licensed clinicians will promptly review your answers and get back to you with suitable suggestions.</h4>
                                    <h3 class="list-heading mb-30">Please declare that:</h3>
                                    <ul class="quest-v2-list pb-30 mb-20">
                                        <li>You are the sole user of any medication provided through this service.</li>
                                        <li>You will provide truthful answers to the best of your knowledge.</li>
                                        <li>You are aware that Minoxidil 5% solution and combined Minoxidil 5% with 0.1% Finasteride solution are prescribed as unlicensed products.</li>
                                        <li>You were assigned male at birth.</li>
                                        <li>You will disclose any serious illnesses or operations you have had.</li>
                                        <li>You will disclose any prescription medication you currently take.</li>
                                        <li>You will only use the recommended method of hair loss treatment and not combine more than one different medication for this condition.</li>
                                        <li>You are aware that you should not take Finasteride if you’re trying for a baby.</li>
                                        <li>You accept our Terms & Conditions, Privacy Policy, and Terms of Sale.</li>
                                        <li>You currently live in the UK.</li>
                                        <li>You are using this service of your own free will.</li>
                                        <li>You agree to the terms of service, terms of subscription, and privacy policy.</li>
                                    </ul>
                                    <ul class="quest-lfc-btn desktop-none">
                                            <li><a href="javascript:void(0)">
                                                <?xml version="1.0" standalone="no"?>
                                                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                                                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                                    width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                                                    preserveAspectRatio="xMidYMid meet">

                                                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                                    fill="#000000" stroke="none">
                                                    <path d="M1641 4784 c-169 -45 -301 -180 -346 -351 -12 -44 -15 -120 -15 -325
                                                    l0 -268 43 0 c144 0 363 -57 522 -135 719 -354 934 -1272 449 -1921 l-53 -71
                                                    -3 -669 c-2 -501 -6 -676 -15 -697 l-13 -27 1083 0 c1191 0 1138 -3 1258 61
                                                    70 38 157 126 193 197 59 116 56 43 56 1554 l0 1388 -428 0 c-463 0 -488 2
                                                    -594 56 -71 36 -159 123 -197 193 -59 111 -61 133 -61 603 l0 428 -912 -1
                                                    c-764 0 -922 -3 -967 -15z m1485 -970 c53 -39 69 -71 69 -134 0 -63 -16 -95
                                                    -69 -134 -26 -20 -43 -21 -304 -24 -178 -2 -290 1 -314 7 -101 30 -140 169
                                                    -71 252 49 57 60 59 375 56 272 -2 288 -3 314 -23z m960 -800 c53 -39 69 -71
                                                    69 -134 0 -63 -16 -95 -69 -134 -27 -20 -40 -21 -544 -24 -345 -2 -529 0 -554
                                                    8 -101 29 -140 168 -71 251 51 60 39 59 615 56 514 -2 527 -2 554 -23z m0
                                                    -800 c53 -39 69 -71 69 -134 0 -63 -16 -95 -69 -134 -27 -20 -40 -21 -544 -24
                                                    -345 -2 -529 0 -554 8 -101 29 -140 168 -71 251 51 60 39 59 615 56 514 -2
                                                    527 -2 554 -23z m0 -800 c53 -39 69 -71 69 -134 0 -63 -16 -95 -69 -134 -27
                                                    -21 -39 -21 -704 -24 -457 -2 -689 0 -714 8 -101 29 -140 168 -71 251 51 61
                                                    25 59 775 56 676 -2 687 -2 714 -23z"/>
                                                    <path d="M3840 4337 c0 -288 3 -375 14 -400 17 -42 68 -85 109 -92 18 -3 191
                                                    -4 385 -3 l352 3 -430 430 -430 430 0 -368z"/>
                                                    <path d="M1113 3505 c-201 -36 -383 -134 -524 -283 -359 -375 -357 -956 5
                                                    -1330 169 -176 393 -276 641 -289 455 -23 853 273 977 726 31 110 31 352 0
                                                    462 -103 377 -397 649 -769 714 -102 18 -232 18 -330 0z"/>
                                                    <path d="M640 950 c0 -556 -1 -545 65 -595 38 -30 82 -40 132 -30 32 6 68 36
                                                    241 208 l202 201 203 -201 c172 -172 208 -202 240 -208 50 -10 94 0 132 30 66
                                                    50 65 40 65 593 l0 501 -95 -45 c-184 -86 -332 -118 -545 -118 -238 -1 -394
                                                    40 -632 162 -5 2 -8 -222 -8 -498z"/>
                                                    </g>
                                                    </svg>
                                                    Licensed medication</a></li>
                                            <li><a href="javascript:void(0)">
                                                <?xml version="1.0" standalone="no"?>
                                                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                                                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                                    width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                                                    preserveAspectRatio="xMidYMid meet">

                                                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                                    fill="#000000" stroke="none">
                                                    <path d="M1411 4624 c-30 -8 -76 -26 -102 -41 -66 -35 -154 -130 -185 -198
                                                    -19 -40 -65 -245 -158 -698 l-131 -642 -200 -5 c-183 -5 -203 -7 -235 -27 -96
                                                    -59 -100 -199 -8 -265 l33 -23 2129 -3 2128 -2 40 22 c75 42 102 150 56 218
                                                    -50 73 -57 75 -282 78 l-203 3 -127 637 c-113 568 -131 645 -162 710 -59 121
                                                    -158 203 -289 237 -86 22 -2221 22 -2304 -1z"/>
                                                    <path d="M1245 2394 c-346 -55 -619 -258 -757 -562 -57 -125 -81 -241 -80
                                                    -392 0 -113 4 -151 26 -234 141 -539 692 -846 1221 -679 309 97 552 353 635
                                                    668 l23 85 252 0 251 0 17 -72 c79 -333 362 -616 698 -698 506 -123 1002 164
                                                    1156 667 24 81 27 102 27 258 0 195 -14 263 -83 411 -124 263 -346 446 -639
                                                    526 -113 31 -333 31 -456 0 -103 -26 -226 -81 -317 -142 -186 -125 -341 -354
                                                    -390 -572 l-12 -58 -253 0 -254 0 -6 28 c-17 80 -40 145 -75 220 -121 261
                                                    -349 448 -637 523 -76 20 -280 33 -347 23z"/>
                                                    </g>
                                                    </svg>
                                                    Free & discreet delivery</a></li>
                                            <li><a href="javascript:void(0)"><?xml version="1.0" standalone="no"?>
                                                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                                                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                                    width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                                                    preserveAspectRatio="xMidYMid meet">

                                                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                                    fill="#000000" stroke="none">
                                                    <path d="M403 5106 c-58 -18 -105 -49 -148 -97 -59 -66 -79 -120 -80 -219 0
                                                    -73 4 -93 28 -142 35 -71 110 -140 183 -167 50 -19 77 -21 309 -21 241 0 255
                                                    -1 265 -19 7 -13 10 -456 10 -1362 l0 -1341 23 6 c212 61 365 69 547 31 39 -8
                                                    73 -15 76 -15 2 0 4 649 4 1443 0 1586 4 1491 -61 1620 -38 75 -151 190 -226
                                                    230 -113 60 -171 67 -547 66 -251 0 -352 -4 -383 -13z"/>
                                                    <path d="M1927 3964 c-4 -4 -7 -533 -7 -1175 l0 -1167 48 -35 c60 -44 180
                                                    -169 217 -224 l28 -43 1173 0 1174 0 -2 1208 -3 1207 -27 51 c-33 64 -113 136
                                                    -176 161 -45 17 -108 18 -1233 21 -652 1 -1188 -1 -1192 -4z m1138 -934 l174
                                                    -174 169 166 c93 92 181 172 196 178 69 26 151 1 187 -56 23 -38 28 -108 9
                                                    -146 -7 -12 -87 -98 -178 -190 l-167 -168 178 -178 177 -178 0 -53 c0 -109
                                                    -75 -175 -178 -156 -30 6 -67 37 -212 181 l-176 174 -164 -165 c-178 -178
                                                    -216 -204 -285 -191 -49 9 -102 59 -115 107 -22 80 -5 106 181 294 l168 170
                                                    -168 170 c-196 197 -209 220 -175 303 28 68 72 95 147 90 l58 -4 174 -174z"/>
                                                    <path d="M1195 1486 c-488 -95 -753 -615 -541 -1061 92 -195 273 -344 486
                                                    -402 88 -24 281 -24 370 0 148 39 299 136 393 252 61 76 131 219 151 312 59
                                                    269 -42 565 -252 739 -78 64 -203 128 -292 149 -94 22 -232 27 -315 11z m199
                                                    -506 c23 -11 52 -36 66 -57 24 -34 25 -44 25 -172 0 -125 -2 -139 -24 -174
                                                    -63 -101 -212 -100 -270 3 -18 33 -21 54 -21 169 0 140 6 166 52 208 49 46
                                                    109 54 172 23z"/>
                                                    <path d="M2344 1003 c27 -92 35 -313 16 -431 -6 -35 -21 -97 -34 -138 l-24
                                                    -74 1207 2 1206 3 50 27 c62 32 129 103 158 166 17 37 22 65 22 132 -1 73 -5
                                                    93 -30 144 -33 65 -92 122 -163 158 l-47 23 -1183 3 c-1128 2 -1183 2 -1178
                                                    -15z"/>
                                                    </g>
                                                    </svg>
                                                    Cancel anytime</a></li>
                                    </ul>
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-black btn-wt-300 mr-20 next-button" href="javascript:void(0)">Next</a>
                                        <a class="btn-d-trans btn-wt-170 prev-button" href="{{ url('/questionnaireCat') }}">Back</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                        <ul class="quest-lfc-btn phone-none">
                                            <li><a href="javascript:void(0)">
                                                <?xml version="1.0" standalone="no"?>
                                                        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                                                        "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                                        width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                                                        preserveAspectRatio="xMidYMid meet">

                                                        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                                        fill="#000000" stroke="none">
                                                        <path d="M1641 4784 c-169 -45 -301 -180 -346 -351 -12 -44 -15 -120 -15 -325
                                                        l0 -268 43 0 c144 0 363 -57 522 -135 719 -354 934 -1272 449 -1921 l-53 -71
                                                        -3 -669 c-2 -501 -6 -676 -15 -697 l-13 -27 1083 0 c1191 0 1138 -3 1258 61
                                                        70 38 157 126 193 197 59 116 56 43 56 1554 l0 1388 -428 0 c-463 0 -488 2
                                                        -594 56 -71 36 -159 123 -197 193 -59 111 -61 133 -61 603 l0 428 -912 -1
                                                        c-764 0 -922 -3 -967 -15z m1485 -970 c53 -39 69 -71 69 -134 0 -63 -16 -95
                                                        -69 -134 -26 -20 -43 -21 -304 -24 -178 -2 -290 1 -314 7 -101 30 -140 169
                                                        -71 252 49 57 60 59 375 56 272 -2 288 -3 314 -23z m960 -800 c53 -39 69 -71
                                                        69 -134 0 -63 -16 -95 -69 -134 -27 -20 -40 -21 -544 -24 -345 -2 -529 0 -554
                                                        8 -101 29 -140 168 -71 251 51 60 39 59 615 56 514 -2 527 -2 554 -23z m0
                                                        -800 c53 -39 69 -71 69 -134 0 -63 -16 -95 -69 -134 -27 -20 -40 -21 -544 -24
                                                        -345 -2 -529 0 -554 8 -101 29 -140 168 -71 251 51 60 39 59 615 56 514 -2
                                                        527 -2 554 -23z m0 -800 c53 -39 69 -71 69 -134 0 -63 -16 -95 -69 -134 -27
                                                        -21 -39 -21 -704 -24 -457 -2 -689 0 -714 8 -101 29 -140 168 -71 251 51 61
                                                        25 59 775 56 676 -2 687 -2 714 -23z"/>
                                                        <path d="M3840 4337 c0 -288 3 -375 14 -400 17 -42 68 -85 109 -92 18 -3 191
                                                        -4 385 -3 l352 3 -430 430 -430 430 0 -368z"/>
                                                        <path d="M1113 3505 c-201 -36 -383 -134 -524 -283 -359 -375 -357 -956 5
                                                        -1330 169 -176 393 -276 641 -289 455 -23 853 273 977 726 31 110 31 352 0
                                                        462 -103 377 -397 649 -769 714 -102 18 -232 18 -330 0z"/>
                                                        <path d="M640 950 c0 -556 -1 -545 65 -595 38 -30 82 -40 132 -30 32 6 68 36
                                                        241 208 l202 201 203 -201 c172 -172 208 -202 240 -208 50 -10 94 0 132 30 66
                                                        50 65 40 65 593 l0 501 -95 -45 c-184 -86 -332 -118 -545 -118 -238 -1 -394
                                                        40 -632 162 -5 2 -8 -222 -8 -498z"/>
                                                        </g>
                                                        </svg>
                                                        Licensed medication</a></li>
                                            <li><a href="javascript:void(0)">
                                                <?xml version="1.0" standalone="no"?>
                                                        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                                                        "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                                                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                                        width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                                                        preserveAspectRatio="xMidYMid meet">

                                                        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                                        fill="#000000" stroke="none">
                                                        <path d="M1411 4624 c-30 -8 -76 -26 -102 -41 -66 -35 -154 -130 -185 -198
                                                        -19 -40 -65 -245 -158 -698 l-131 -642 -200 -5 c-183 -5 -203 -7 -235 -27 -96
                                                        -59 -100 -199 -8 -265 l33 -23 2129 -3 2128 -2 40 22 c75 42 102 150 56 218
                                                        -50 73 -57 75 -282 78 l-203 3 -127 637 c-113 568 -131 645 -162 710 -59 121
                                                        -158 203 -289 237 -86 22 -2221 22 -2304 -1z"/>
                                                        <path d="M1245 2394 c-346 -55 -619 -258 -757 -562 -57 -125 -81 -241 -80
                                                        -392 0 -113 4 -151 26 -234 141 -539 692 -846 1221 -679 309 97 552 353 635
                                                        668 l23 85 252 0 251 0 17 -72 c79 -333 362 -616 698 -698 506 -123 1002 164
                                                        1156 667 24 81 27 102 27 258 0 195 -14 263 -83 411 -124 263 -346 446 -639
                                                        526 -113 31 -333 31 -456 0 -103 -26 -226 -81 -317 -142 -186 -125 -341 -354
                                                        -390 -572 l-12 -58 -253 0 -254 0 -6 28 c-17 80 -40 145 -75 220 -121 261
                                                        -349 448 -637 523 -76 20 -280 33 -347 23z"/>
                                                        </g>
                                                        </svg>
                                                        Free & discreet delivery</a></li>
                                            <li><a href="javascript:void(0)"><?xml version="1.0" standalone="no"?>
                                                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                                                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                                    width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                                                    preserveAspectRatio="xMidYMid meet">

                                                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                                                    fill="#000000" stroke="none">
                                                    <path d="M403 5106 c-58 -18 -105 -49 -148 -97 -59 -66 -79 -120 -80 -219 0
                                                    -73 4 -93 28 -142 35 -71 110 -140 183 -167 50 -19 77 -21 309 -21 241 0 255
                                                    -1 265 -19 7 -13 10 -456 10 -1362 l0 -1341 23 6 c212 61 365 69 547 31 39 -8
                                                    73 -15 76 -15 2 0 4 649 4 1443 0 1586 4 1491 -61 1620 -38 75 -151 190 -226
                                                    230 -113 60 -171 67 -547 66 -251 0 -352 -4 -383 -13z"/>
                                                    <path d="M1927 3964 c-4 -4 -7 -533 -7 -1175 l0 -1167 48 -35 c60 -44 180
                                                    -169 217 -224 l28 -43 1173 0 1174 0 -2 1208 -3 1207 -27 51 c-33 64 -113 136
                                                    -176 161 -45 17 -108 18 -1233 21 -652 1 -1188 -1 -1192 -4z m1138 -934 l174
                                                    -174 169 166 c93 92 181 172 196 178 69 26 151 1 187 -56 23 -38 28 -108 9
                                                    -146 -7 -12 -87 -98 -178 -190 l-167 -168 178 -178 177 -178 0 -53 c0 -109
                                                    -75 -175 -178 -156 -30 6 -67 37 -212 181 l-176 174 -164 -165 c-178 -178
                                                    -216 -204 -285 -191 -49 9 -102 59 -115 107 -22 80 -5 106 181 294 l168 170
                                                    -168 170 c-196 197 -209 220 -175 303 28 68 72 95 147 90 l58 -4 174 -174z"/>
                                                    <path d="M1195 1486 c-488 -95 -753 -615 -541 -1061 92 -195 273 -344 486
                                                    -402 88 -24 281 -24 370 0 148 39 299 136 393 252 61 76 131 219 151 312 59
                                                    269 -42 565 -252 739 -78 64 -203 128 -292 149 -94 22 -232 27 -315 11z m199
                                                    -506 c23 -11 52 -36 66 -57 24 -34 25 -44 25 -172 0 -125 -2 -139 -24 -174
                                                    -63 -101 -212 -100 -270 3 -18 33 -21 54 -21 169 0 140 6 166 52 208 49 46
                                                    109 54 172 23z"/>
                                                    <path d="M2344 1003 c27 -92 35 -313 16 -431 -6 -35 -21 -97 -34 -138 l-24
                                                    -74 1207 2 1206 3 50 27 c62 32 129 103 158 166 17 37 22 65 22 132 -1 73 -5
                                                    93 -30 144 -33 65 -92 122 -163 158 l-47 23 -1183 3 c-1128 2 -1183 2 -1178
                                                    -15z"/>
                                                    </g>
                                                    </svg>
                                                    Cancel anytime</a></li>
                                        </ul>
                            </div>
                        </div>
                    </div>
                    <!-- 1st step -->
                    <div class="quest-v2-step data-progress" data-progress="10" id="step2">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="v2-2step-cont">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 0.5%;"
                                                aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h3>0%</h3>
                                    </div>
                                    <!-- <h3 class="quest-v2-subh mb-30">
                                        What is your type of hair loss?
                                    </h3> -->
                                    <form action="" id="ed-form">
                                            <h3 class="quest-v2-subh mb-30">
                                                <!-- <input class="in_type" readonly="readonly"  name="What is your type of hair loss?" id="Kindly_Tell_Us_Your_Age" type="text" value="What is your type of hair loss?">  -->
                                                <textarea class="in_type" readonly="readonly"  name="What is your type of hair loss?" id="Kindly_Tell_Us_Your_Age" type="text">What is your type of hair loss?</textarea>
                                            </h3>
                                    <!-- <form action=""> -->
                                        <div class="form-group form-radio">
                                            <input type="radio" id="genhairloss" name="radio-group" value="genhairloss">
                                            <label class="next-button" for="genhairloss">Genetic Hair Loss/ Mild </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="recehairline" name="radio-group" value="recehairline">
                                            <label class="next-button" for="recehairline">Receding Hairline (Temples) </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="thincrownhl" name="radio-group" value="thincrownhl">
                                            <label class="next-button" for="thincrownhl">Thin Crown </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="thinninghl" name="radio-group" value="thinninghl">
                                            <label class="next-button" for="thinninghl">Thinning all over (Temples and Crown)  </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="extensivehl" name="radio-group" value="extensivehl">
                                            <label class="next-button" for="extensivehl">Extensive hair loss </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="patchyhl" name="radio-group" value="patchyhl">
                                            <label class="open-que-error" for="patchyhl">Patchy</label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="completelyhl" name="radio-group" value="completelyhl">
                                            <label class="open-que-error" for="completelyhl">Completely bald </label>
                                        </div>
                                    <!-- </form> -->
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 2nd step -->
                    <div class="quest-v2-step data-progress" data-progress="20" id="step3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="v2-3step-cont">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 10%;"
                                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h3>10%</h3>
                                    </div>
                                    <h3 class="quest-v2-subh mb-30">
                                        <!-- <input class="in_type" readonly="readonly"  name="When did you notice any hair loss?"  type="text" value=" When did you notice any hair loss?">  -->
                                        <textarea class="in_type" readonly="readonly"  name="When did you notice any hair loss?"  type="text">When did you notice any hair loss?</textarea>
                                    </h3>
                                    <!-- <form action=""> -->
                                        <div class="form-group form-radio">
                                            <input type="radio" id="noticehl-days" name="radio-group" value="noticehl-days">
                                            <label for="noticehl-days" class="open-que-error">My hair loss has been sudden and I’ve noticed over the past few days/weeks</label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="noticehl-months" name="radio-group" value="noticehl-months">
                                            <label class="next-button" for="noticehl-months">I have had gradual hair loss which I have noticed over the past couple of months / years</label>
                                        </div>
                                    <!-- </form> -->
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 3rd step -->
                    <div class="quest-v2-step data-progress" data-progress="30" id="step4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="v2-3step-cont">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 20%;"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h3>20%</h3>
                                    </div>
                                    <h3 class="quest-v2-subh mb-30">
                                        <textarea class="in_type" readonly="readonly"  name="Have you experienced hair loss anywhere else on your body?"  type="text" >Have you experienced hair loss anywhere else on your body?</textarea>
                                        <!-- <input class="in_type" readonly="readonly"  name="Have you experienced hair loss anywhere else on your body?"  type="text" value="Have you experienced hair loss anywhere else on your body?">  -->
                                    </h3>
                                    <!-- <form action=""> -->
                                        <div class="form-group form-radio">
                                            <input type="radio" id="exphl-yes" name="radio-group" value="exphl-yes">
                                            <label for="exphl-yes" class="open-sub-step">Yes</label>
                                        </div>                                        
                                        <div class="form-group form-radio">
                                            <input type="radio" id="exphl-no" name="radio-group" value="exphl-no">
                                            <label class="next-button" for="exphl-no">No </label>
                                        </div>
                                    <!-- </form> -->
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sub-step fixed-step" id="sub-step1">
                            <div class="inner-form-group">
                                <h3 class="quest-v2-subh mb-30">Please tell us about hair loss in areas other than your head</h3>
                                <!-- <form action=""> -->
                                    <div class="form-group form-text-field">
                                        <!-- <input type="text" class="form-control" id="" value=""> -->
                                        <textarea type="text" class="form-control" id=""></textarea>
                                    </div>
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-black btn-wt-300 mr-20 next-button" href="javascript:void(0)">Continue</a>
                                        <a class="btn-d-trans btn-wt-170 back-sub-step" href="javascript:void(0)">Back</a>
                                    </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                    <!-- 4th step -->
                    <div class="quest-v2-step data-progress" data-progress="40" id="step5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="v2-3step-cont">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 30%;"
                                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h3>30%</h3>
                                    </div>
                                    <h3 class="quest-v2-subh mb-30">
                                        <textarea class="in_type" readonly="readonly"  name="Have you taken any of these medications consistently over the last 12 months: Minoxidil, Regaine, Finasteride, or Propecia?"  type="text">Have you taken any of these medications consistently over the last 12 months: Minoxidil, Regaine, Finasteride, or Propecia?</textarea>
                                        <!-- <input class="in_type" readonly="readonly"  name="Have you taken any of these medications consistently over the last 12 months: Minoxidil, Regaine, Finasteride, or Propecia?"  type="text" value="Have you taken any of these medications consistently over the last 12 months: Minoxidil, Regaine, Finasteride, or Propecia?">  -->
                                    </h3>
                                    <!-- <form action=""> -->
                                        <div class="form-group form-radio">
                                            <input type="radio" id="medi-consM-yes" name="radio-group" value="medi-consM-yes">
                                            <label for="medi-consM-yes" class="open-sub-step">Yes</label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="medi-consM-no" name="radio-group" value="medi-consM-no">
                                            <label class="next-button" for="medi-consM-no">No</label>
                                        </div>
                                    <!-- </form> -->
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sub-step fixed-step" id="sub-step1">
                            <div class="inner-form-group">
                                <h3 class="quest-v2-subh mb-30">Please tell us what medication you've taken, its effectiveness, and any side effects.</h3>
                                <!-- <form action=""> -->
                                    <div class="form-group form-text-field">
                                        <textarea type="text" class="form-control" id="" ></textarea>
                                        <!-- <input type="text" class="form-control" id="" value=""> -->
                                    </div>
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-black btn-wt-300 mr-20 next-button" href="javascript:void(0)">Continue</a>
                                        <a class="btn-d-trans btn-wt-170 back-sub-step" href="javascript:void(0)">Back</a>
                                    </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                    <!-- 5th step -->
                    <div class="quest-v2-step data-progress" data-progress="50" id="step6">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="v2-3step-cont">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 40%;"
                                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h3>40%</h3>
                                    </div>
                                    <h3 class="quest-v2-subh mb-30">
                                        <textarea class="in_type" readonly="readonly"  name="Do you have any scalp problems?"  type="text">Do you have any scalp problems?</textarea>
                                        <!-- <input class="in_type" readonly="readonly"  name="Do you have any scalp problems?"  type="text" value="Do you have any scalp problems?">  -->
                                    </h3>
                                    <!-- <form action=""> -->
                                        <div class="form-group form-radio">
                                            <input type="radio" id="scalphl-prob-no" name="radio-group" value="scalphl-prob-no">
                                            <label class="open-sub-step" for="scalphl-prob-no">Yes</label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="scalphl-prob-yes" name="radio-group" value="scalphl-prob-yes">
                                            <label class="next-button" for="scalphl-prob-yes">No</label>
                                        </div>
                                        
                                    <!-- </form> -->
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sub-step fixed-step" id="sub-step1">
                            <div class="inner-form-group">
                                    <h3 class="quest-v2-subh mb-30">
                                        <textarea class="in_type" readonly="readonly"  name="Please select your scalp problems?"  type="text">Please select your scalp problems?</textarea>
                                        
                                    </h3>
                                <!-- <form action=""> -->
                                    <div class="form-group form-radio">
                                        <input type="radio" id="scalppsoriasis" name="radio-group" value="scalppsoriasis">
                                        <label class="open-que-error" for="scalppsoriasis">Psoriasis</label>
                                    </div>
                                    <div class="form-group form-radio">
                                        <input type="radio" id="scalpsunburn" name="radio-group" value="scalpsunburn">
                                        <label class="open-que-error" for="scalpsunburn"> Sunburn</label>
                                    </div>
                                    <div class="form-group form-radio">
                                        <input type="radio" id="scalpsudden" name="radio-group" value="scalpsudden">
                                        <label class="open-que-error" for="scalpsudden">Sudden soreness/redness</label>
                                    </div>
                                    <div class="form-group form-radio">
                                        <input type="radio" id="scalpdandruff" name="radio-group" value="scalpdandruff">
                                        <label class="next-button" for="scalpdandruff">Dandruff</label>
                                    </div>
                                    <div class="inner-form-group">
                                            <p class="quest-desc">Other</p>
                                            <!-- <form action=""> -->
                                            <div class="form-group form-text-field">
                                                <textarea type="text" class="form-control" id="" value=""></textarea>                                               
                                            </div>
                                            <div class="quest-v2-btn">
                                                <a class="btn-d-black btn-wt-300 mr-20 next-button" href="javascript:void(0)">Continue</a>
                                            </div>
                                                <!-- </form>                                     -->
                                        </div>
                                <!-- </form> -->
                                <div class="quest-v2-btn">
                                    <a class="btn-d-trans btn-wt-170 back-sub-step" href="javascript:void(0)">Back</a>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <!-- 6th step -->
                    <div class="quest-v2-step data-progress" data-progress="60" id="step7">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="v2-3step-cont">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 50%;"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h3>50%</h3>
                                    </div>
                                    <h3 class="quest-v2-subh mb-30">
                                        <textareaclass="in_type" readonly="readonly"  name=" Are any of the following true?"  type="text"> Are any of the following true?</textarea>
                                        <!-- <input class="in_type" readonly="readonly"  name=" Are any of the following true?"  type="text" value=" Are any of the following true?">  -->
                                    </h3>
                                    <ul class="quest-v2-list pb-30 mb-30">
                                        <li>I have previously been diagnosed with breast cancer, prostate cancer, or I am currently undergoing PSA (prostate monitoring).</li>
                                        <li>I have uncontrolled low or high blood pressure.</li>
                                        <li>I am experiencing, or have previously experienced, depression, anxiety, or panic disorders.</li>
                                    </ul>
                                    <!-- <form action=""> -->
                                        <div class="form-group form-radio">
                                            <input type="radio" id="areaf-yes" name="radio-group" value="areaf-yes">
                                            <label class="open-sub-step" for="areaf-yes">Yes</label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="areaf-no" name="radio-group" value="areaf-no">
                                            <label class="next-button" for="areaf-no">No</label>
                                        </div>
                                    <!-- </form> -->
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sub-step fixed-step" id="sub-step1">
                            <div class="inner-form-group">
                                <h3 class="quest-v2-subh mb-30">
                                <textarea class="in_type" readonly="readonly"  name=" Have you previously been diagnosed with breast cancer, prostate cancer, or are you currently undergoing PSA (prostate monitoring)?"  type="text"> Have you previously been diagnosed with breast cancer, prostate cancer, or are you currently undergoing PSA (prostate monitoring)?</textarea>
                                    </h3>
                                <!-- <form action=""> -->
                                    <div class="form-group form-radio">
                                        <input type="radio" id="prev-diag-yes" name="radio-group" value="prev-diag-yes">
                                        <label class="open-que-error" for="prev-diag-yes">Yes</label>
                                    </div>
                                    <div class="form-group form-radio">
                                        <input type="radio" id="prev-diag-no" name="radio-group" value="prev-diag-no">
                                        <label class="open-sub-step" for="prev-diag-no">No</label>
                                    </div>
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-trans btn-wt-170 back-sub-step" href="javascript:void(0)">Back</a>
                                    </div>                        
                                <!-- </form> -->
                            </div>
                        </div>
                        <div class="sub-step fixed-step" id="sub-step2">
                            <div class="inner-form-group">
                                <h3 class="quest-v2-subh mb-30">
                                    <textarea class="in_type" readonly="readonly"  name=" Are you experiencing, or have previously experienced, depression, anxiety or panic disorders?"  type="text"> Are you experiencing, or have previously experienced, depression, anxiety or panic disorders?</textarea>
                                </h3>
                                <!-- <form action=""> -->
                                    <div class="form-group form-radio">
                                        <input type="radio" id="exper-deps-no" name="radio-group" value="exper-deps-no">
                                        <label class="open-sub-step" for="exper-deps-no">No</label>
                                    </div>
                                    <div class="form-group form-radio">
                                        <input type="radio" id="exper-deps-yes" name="radio-group" value="exper-deps-yes">
                                        <label class="open-sub-inr-step" for="exper-deps-yes">Yes</label>
                                    </div>
                                    <div class="inner-form-group" id="openInrSubSteps">
                                        <div class="form-group form-radio">
                                            <input type="radio" id="treatment-immed" name="radio-group" value="treatment-immed">
                                            <label class="open-sub-step" for="treatment-immed"> I understand and agree to stop this treatment immediately and consult a doctor if I experience symptoms of depression, anxiety, or panic disorders. </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="currently-stable" name="radio-group" value="currently-stable">
                                            <label class="open-que-error" for="currently-stable">I am not currently stable or don't want to proceed with Finasteride.</label>
                                        </div>
                                    </div>
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-trans btn-wt-170 back-sub-step" href="javascript:void(0)">Back</a>
                                    </div>
                                <!-- </form> -->
                            </div>
                        </div>
                        <div class="sub-step fixed-step" id="sub-step3">
                            <div class="inner-form-group">
                                <h3 class="quest-v2-subh mb-30">
                                <textarea class="in_type" readonly="readonly"  name=" Do you have uncontrolled low or high blood pressure?"  type="text"> Do you have uncontrolled low or high blood pressure?</textarea>
                               </h3>
                                <!-- <form action=""> -->
                                    <div class="form-group form-radio">
                                        <input type="radio" id="uncont-bloodp-no" name="radio-group" value="uncont-bloodp-no">
                                        <label class="next-button" for="uncont-bloodp-no">No</label>
                                    </div>
                                    <div class="form-group form-radio">
                                        <input type="radio" id="uncont-bloodp-yes" name="radio-group" value="uncont-bloodp-yes">
                                        <label class="open-que-error" for="uncont-bloodp-yes">Yes</label>
                                    </div>
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-trans btn-wt-170 back-sub-step" href="javascript:void(0)">Back</a>
                                    </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                    <!-- 7th step -->
                    <div class="quest-v2-step data-progress" data-progress="74" id="step8">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="v2-3step-cont">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 65%;"
                                                aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h3>65%</h3>
                                    </div>
                                    <h3 class="quest-v2-subh mb-30">
                                        <textarea class="in_type" readonly="readonly"  name=" Do you have any of the following problems?"  type="text">Do you have any of the following problems?</textarea>
                                        <!-- <input class="in_type" readonly="readonly"  name=" Do you have any of the following problems?"  type="text" value=" Do you have any of the following problems?">  -->
                                    </h3>
                                    <ul class="quest-v2-list pb-30 mb-30">
                                        <li>Significant or Chronic Kidney Disease</li>
                                        <li>Phaeochromocytoma</li>
                                        <li>Heart attack, stroke, or mini-stroke within the last 6 months</li>
                                        <li>Chest pain symptoms or any heart rhythm issues</li>
                                        <li>Heart valve problems</li>
                                        <li>Disease of the heart muscles</li>                                       
                                        <li>Get breathless or have chest pain with light exertion, such as walking briskly for 20 minutes or climbing two flights of stairs </li>
                                    </ul>
                                    <!-- <form action=""> -->
                                        <div class="form-group form-radio">
                                            <input type="radio" id="anyf-prob-yes" name="radio-group" value="anyf-prob-yes">
                                            <label class="open-que-error" for="anyf-prob-yes">Yes</label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="anyf-prob-no" name="radio-group" value="anyf-prob-no">
                                            <label class="next-button" for="anyf-prob-no">No</label>
                                        </div>
                                    <!-- </form> -->
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 8th step -->
                    <div class="quest-v2-step data-progress" data-progress="85" id="step9">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="v2-2step-cont">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 85%;"
                                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h3>85%</h3>
                                    </div>
                                    <h3 class="quest-v2-subh mb-30">
                                        <textarea class="in_type" readonly="readonly"  name="Do you have any intolerances/allergies to the following? "  type="text">Do you have any intolerances/allergies to the following? </textarea>
                                        <!-- <input class="in_type" readonly="readonly"  name="Do you have any intolerances/allergies to the following? "  type="text" value="Do you have any intolerances/allergies to the following? ">  -->
                                    </h3>
                                    <!-- <form action=""> -->
                                        <div class="form-group form-radio">
                                            <input type="radio" id="lactosehl" name="radio-group" value="lactosehl">
                                            <label class="open-sub-step" for="lactosehl">Lactose</label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="minoxidilhl" name="radio-group" value="minoxidilhl">
                                            <label class="open-que-error" for="minoxidilhl">Minoxidil</label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="finasteridehl" name="radio-group" value="finasteridehl">
                                            <label class="open-que-error" for="finasteridehl">Finasteride</label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="None1" name="radio-group" value="None1">
                                            <label class="next-button" for="None1">None</label>
                                        </div>
                                    <!-- </form> -->
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sub-step fixed-step" id="sub-step1">
                            <div class="inner-form-group">
                                <h3 class="quest-v2-subh mb-30">
                                    <textarea class="in_type" readonly="readonly"  name="If we recommend a tablet medication in your plan it can contain very small amounts of lactose. If you have previously taken most tablet formulations without causing any symptoms then it is unlikely that you will get undesirable effects from the lactose within our tablets. Are you okay to proceed?"  type="text">If we recommend a tablet medication in your plan it can contain very small amounts of lactose. If you have previously taken most tablet formulations without causing any symptoms then it is unlikely that you will get undesirable effects from the lactose within our tablets. Are you okay to proceed?</textarea>
                                </h3>
                                <!-- <form action=""> -->
                                    <div class="form-group form-radio">
                                        <input type="radio" id="into-allerg-yes" name="radio-group" value="into-allerg-yes">
                                        <label class="next-button" for="into-allerg-yes">Yes</label>
                                    </div>
                                    <div class="form-group form-radio">
                                        <input type="radio" id="into-allerg-no" name="radio-group" value="into-allerg-no">
                                        <label class="open-que-error" for="into-allerg-no">No</label>
                                    </div>
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-trans btn-wt-170 back-sub-step" href="javascript:void(0)">Back</a>
                                    </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                    <!-- 9th step -->
                    <div class="quest-v2-step data-progress" data-progress="100" id="step10">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="v2-3step-cont">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 100%;"
                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h3>100%</h3>
                                    </div>
                                    <h3 class="quest-v2-subh mb-30">
                                        <textarea class="in_type" readonly="readonly"  name=" It's really important to tell us about:"  type="text">It's really important to tell us about:</textarea>
                                        <!-- <input class="in_type" readonly="readonly"  name=" It's really important to tell us about:"  type="text" value=" It's really important to tell us about:">  -->
                                    </h3>
                                    <ul class="quest-v2-list pb-30 mb-30">
                                        <li>Major illnesses</li>
                                        <li>Ongoing medical conditions</li>
                                        <li>Any medication prescribed or over the counter that you take</li>
                                        <li>Allergies to medication</li>
                                        <li>Operations</li>                                      
                                    </ul>
                                    <!-- <form action=""> -->
                                        <div class="form-group form-radio">
                                            <input type="radio" id="relyimpohl-yes" name="radio-group" value="relyimpohl-yes">
                                            <label class="open-sub-step" for="relyimpohl-yes">Yes</label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="relyimpohl-no" name="radio-group" value="relyimpohl-no">
                                            <label class="next-button" for="relyimpohl-no">No</label>
                                        </div>
                                    </form>
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sub-step fixed-step" id="sub-step1">
                            <div class="inner-form-group">
                                <h3 class="quest-v2-subh mb-30">
                                <textarea class="in_type" readonly="readonly"  name=" Please specify any major illness you have, ongoing medical conditions, any medicine prescribed or over the counter you take, allergies to medications, or details of any recent operations you have had."  type="text"> Please specify any major illness you have, ongoing medical conditions, any medicine prescribed or over the counter you take, allergies to medications, or details of any recent operations you have had.</textarea>
                                    </h3>
                                <!-- <form action=""> -->
                                    <div class="form-group form-text-field">
                                        <textarea type="text" class="form-control" id="" value=""></textarea>
                                        <!-- <input type="text" class="form-control" id="" value=""> -->
                                    </div>
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-black btn-wt-300 mr-20 next-button" href="javascript:void(0)">Continue</a>
                                        <!-- <button type="submit" class="btn-d-black btn-wt-300 mr-20 next-button" value="Continue"></button> -->
                                        <a class="btn-d-trans btn-wt-170 back-sub-step" href="javascript:void(0)">Back</a>
                                    </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                <!-- </form> -->
                <!-- 10th step end -->
                
                <!-- product start -->
                @php
                $product = DB::table('products')->where('category_id', 30)->get();
                
                @endphp 
                <form action="{{ route('checkout.index') }}" method="POST">
                    @csrf
                    <div class="quest-v2-step" id="step11">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="v2-5step-cont">
                                    <div class="back-btn-content mb-40">
                                        <div class="row align-items-center">
                                            <div class="col-lg-1 col-md-2 col-6 order-ph-1">
                                                <a href="javascript:void(0)" class="text-icon-btn prev-button"><i
                                                        class="fa-sharp fa-solid fa-circle-arrow-left"></i>Back</a>
                                            </div>
                                            <div class="col-lg-10 col-md-8 col-12 ordr-3 order-ph-3">
                                                <h3 class="quest-v2-subh text-center m-0">
                                                    Please choose your preferred monthly treatment
                                                </h3>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-6 d-flex justify-content-end order-ph-2">
                                                <a href="javascript:void(0)" class="text-icon-btn"><i
                                                        class="fa-solid fa-circle-question"></i>Help</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="quest-v2-btn recommended-btn text-center">
                                        <a class="btn-d-black btn-wt-300" href="javascript:void(0)">Recommended for
                                            you</a>
                                    </div>

                                        <!-- recocomndation sec start-->
                                    <div class="recmd-tabcard-main mb-40">
                                        <div class="recmd-tablets-card mt-30">
                                            <div class="r-t-card-body">
                                                <figure>
                                                    <img src="{{asset('storage/images/products/minoxidil-and-finasteride-2-in-1-solutionhair1681464473-1.png')}}" height="90px" alt="">
                                                </figure>
                                                <div class="r-t-body-cont">
                                                    @php
                                                        $product_data = \App\Models\Product::where('id', 22)->first();
                                                    @endphp
                                                        <h5>{{ $product_data->name }}</h5>
                                                        <p>{{ $product_data->description }}</p>
                                                        <h4>from £{{$product_data->price}} </h4>
                                                    @php 
                                                            $productid = 22;
                                                            $productss = DB::table('products')->where('id','=',22)->get();
                                                    @endphp
                                                            
                                                        <!-- add to cart button goes here          -->
                                                            {{-- <livewire:frontend.product.single-product-cart-component :product="$productss[0]->id"/> --}}
                                                            <a href="javascript:void(0);" onclick="AddToCart('{{ $product_data->id }}')" class="trans-btn black-btn learn-more-card-btn detailbtn">Add</a>        
                                                </div>
                                                
                                            </div>
                                            <!-- <div class="r-t-card-footer"><button type="button" class="btn-d-black" title="Add To Cart"><i class="fa-solid fa-circle-plus me-2"></i>Add</button></div> -->
                                                                                    
                                        </div>
                                        <!-- recocomndation sec end-->
                                        <h3 class="quest-v2-subh text-center mt-40 other-recmd">
                                            Other Recommendation for you
                                        </h3>

                                    <!-- all treatment sec start -->
                                        {{-- <livewire:addtocart/> --}}
                                        @php
                                         $product1 = \App\Models\Product::where('category_id', 30)->get();
                                        @endphp
                                        @foreach($product1 as $products)
                                            @php   
                                                    $media = DB::table('media')->where('mediable_id',$products->id)->first();
                                                    $pro_tag = DB::table('product_tags')->where('product_id',$products->id)->first();
                                                    //dd($pro_tag);
                                                    if($pro_tag)
                                                    $tag = DB::table('tags')->where('id',$pro_tag->tag_id)->first(); 
                                                    
                                            @endphp
                                            <div class="recmd-tablets-card mt-30">
                                                <div class="r-t-card-body">
                                                    <figure>
                                                        <img src="{{asset('storage/images/products/')}}{{ '/'. $media->file_name}}" height="90px" alt="">
                                                    </figure>
                                                    <div class="r-t-body-cont">
                                                    <h5>{{ $products->name }}</h5>
                                                        <p>{{ $products->description }}</p>
                                                        <h4>from £{{$products->price}} </h4>
                                                    </div>
                                                </div>
                                                <div class="r-t-card-footer">
                                                    <a href="javascript:void(0);" onclick="AddToCart('{{ $products->id }}')" class="trans-btn black-btn learn-more-card-btn detailbtn">Add</a>
                                                    <!-- <a wire:click="cart({{ $products->id }})" class="trans-btn black-btn learn-more-card-btn detailbtn">Add</a> -->
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <input type="hidden" name="product_ids" id="ProductIds">
                                        <input type="hidden" name="Session_Id" value="{{ session('my_random_string') }}">
                                        <input type="hidden" name="category_id" value="{{ $cat }}">

                                    <!-- all treatmenyt sec end -->

                                    
                                    <h4 class="prefer-diff-tm mb-30 text-center">Prefer a different treatment?</h4>
                                    <div class="quest-v2-btn text-center">
                                        <a class="btn-d-trans btn-wt-300 mr-20 read-m-btn" href="javascript:void(0)">See all treatments</a>
                                        <a class="btn-d-black btn-wt-300 next-button" href="javascript:void(0)">Continue</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 11th step end -->
                    <div class="quest-v2-step" id="step12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="v2-6step-cont">
                                    <div class="back-btn-content mb-30">
                                        <div class="row align-items-center">
                                            <div class="col-lg-1 col-md-2 col-6">
                                                <a href="javascript:void(0)" class="text-icon-btn prev-button"><i
                                                        class="fa-sharp fa-solid fa-circle-arrow-left"></i>Back</a>
                                            </div>
                                            <div class="col-lg-10 col-md-8 col-12 ordr-3">
                                                <h3 class="quest-v2-subh text-center m-0">
                                                    Please choose your preferred monthly treatment
                                                </h3>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-6 d-flex justify-content-end"></div>
                                        </div>
                                    </div>
                                    <div class="text-icon-btn justify-content-center fw-500 mb-40"><i
                                            class="fa-solid fa-circle-info"></i>Which strength is right for me?
                                    </div>
                                    <div class="ctsm_radio_box">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="Sildenafil" name="strength_type" value="Spray">
                                                    <label class="" for="Sildenafil">
                                                        <h3>Spray</h3>
                                                         <figure>
                                                            <img src="{{asset('storage/images/categories/hair-loss.png')}}" alt="">
                                                        </figure>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="Sildenafil2" name="strength_type" value="Dropper">
                                                    <label class="" for="Sildenafil2">
                                                        <h3>Dropper</h3>
                                                        <figure>
                                                            <img src="{{asset('storage/images/categories/beard.png')}}" alt="">
                                                        </figure>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="quest-v2-btn text-center mt-30 pt-30">
                                        <a class="btn-d-black btn-wt-300 next-button" href="javascript:void(0)">Continue</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 12th step end -->
                    <div class="quest-v2-step" id="step13">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="v2-7step-cont">
                                    <div class="back-btn-content">
                                        <a href="javascript:void(0)" class="text-icon-btn prev-button"><i
                                                class="fa-sharp fa-solid fa-circle-arrow-left"></i>Back</a>
                                    </div>
                                    <div class="loading-user-img recmd-user">
                                        <img src="{{asset('frontend_new/images/loading-user.png')}}" alt="">
                                    </div>
                                    <h3 class="quest-v2-subh quest-sh-large text-center mb-20">Recommended add-ons for
                                        you</h3>
                                    <p class="text-center pb-20">Power your ED treatment with our additional services
                                        and supplements.</p>
                                    <div class="row justify-content-center">
                                        <div class="col-md-11 col-lg-8 col-xl-7 col-xxl-6">
                                            <div class="card-design mt-30 overflow-hdn position-rel">
                                                <div class="recmd-discount-box">
                                                    <span class="discount-percntg">Save 33%</span>
                                                    <div class="offer-tablet-name">
                                                        <figure>
                                                            <img src="{{asset('frontend_new/images/sildenafil-img.png')}}" alt="">
                                                        </figure>
                                                        <h5>Testosterone Support</h5>
                                                    </div>
                                                    <p class="offer-desc mb-40">Get support where you need it. Our daily
                                                        supplement helps maintain your sex drive, muscle mass, strength,
                                                        and endurance. It contains 11 carefully selected ingredients
                                                        that are tailored to your needs. Embrace the help your body
                                                        wants.</p>
                                                    <div class="offer-price-btn">
                                                        <div class="ofr-price">£18.76 <span>£20.00</span></div>
                                                        <div class="ofr-add-btn">
                                                            <a href="javascript:void(0)"
                                                                class="btn-learn-more mr-30">Learn More</a>
                                                            <a href="javascript:void(0)" class="btn-d-black"><i
                                                                    class="fa-solid fa-circle-plus me-2"></i> Add</a>
                                                                    @php 
                                                                        $productid = 37;
                                                                        $productss = DB::table('products')->where('id',$productid)->get();
                                                                    //dd($productss);
                                                                        @endphp
                                                                    {{-- <livewire:frontend.product.single-product-cart-component :product="$productss"/> --}}
                                                                   
                                                                    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="loading-text text-center mb-40 mt-30 pt-30">*Discount may not be applied
                                        to subsequent purchases</h5>
                                    <div class="quest-v2-btn text-center">
                                        <!-- <a class="btn-d-black btn-wt-300 next-button" href="{{ route('checkout.index')}}">Continue</a> -->
                                        <button type="submit" class="btn-d-black btn-wt-300">Continue</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- error message start -->
                <div class="quest-v2-errorstep" style="display: none;">
                    <div class="quest-v2-error">
                        <div class="modal-dialog">
                            <div class="modal-content border-0">
                                <div class="quest-v2-header">
                                    <a class="quest-logo" href="{{ url('/') }}">
                                        <img src="{{ asset('frontend_new/images/quest-logo.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="modal-body">
                                <form> 
                                    <div class="error-btn">
                                        <img src="{{ asset('frontend_new/images/error-icon.svg') }}" alt="">
                                    </div>
                                    <h3 class="quest-v2-subh mb-30">Your safety is our top priority.</h3>
                                    <h5>Unfortunately, we can’t offer you any Hair Loss medication.</h5>
                                    <p>No recommended treatment. Based on your answers, there is no treatment suitable for you. If you think you have made an error in your responses, please click below to review your answers.</p>
                                    <p><b>Did you make a mistake?</b> Providing false information can lead to serious harm to your
                                        health.</p>
                                    <div class="form-group form-check mb-30 pb-2">
                                        <input id="check" class="form-check-input" type="checkbox" name="terms-and-services"
                                            required>
                                        <label class="form-check-label m-0" for="terms-and-services">
                                            I agree only to provide accurate answers
                                        </label>
                                    </div>
                                    <button type="button" id="btncheck" class="btn-d-black close-que-modal" data-bs-dismiss="modal">Review your answers</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- error message end -->
                <!-- loader section start -->
                <div class="quest-v2-loadingstep" style="display: none;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="quest-loading-steps">
                                <div class="loading-user-img">
                                    <img src="{{ asset('frontend_new/images/loading-user.png') }}" alt="">
                                </div>
                                <h3 class="quest-v2-subh mb-30">
                                    We are creating your personalized recommendations.
                                </h3>
                                <div class="quest-progress-bar">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 70%;"
                                            aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <h5 class="loading-text">This will only take couple of seconds</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- loader section end -->
            </div>
        </div>
    </div>
</section>

    <script src="/js/jquery3.6.4.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="js/custom.js"></script> -->
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>

<script>
    function moveToNext(selector){    
        $(".qtnr-inner").removeClass('active');
        $(`${selector}`).addClass('active');
    }   
    $(document).ready(function() {
    //click 
    $('#UnsutableBtn').on('click', function() {

    })

    $('#textbox3').hide();
    $('#textbox4').hide();
    $('#textbox5').hide();
    $('#ques8atext').hide();
    $('#textbox9').hide();
    $('#detail6_2').hide();
    $('#textboxt6_2a').hide();
    $('#div8a').hide();
// step3
    
    $('#ques3').click(function() {
        if ($('#ques3').is(':checked')) {
            $('#textbox3').show();
            $('#ques3').hide();
        }
    });
    $('#ques3b').click(function() {
        if ($('#ques3b').is(':checked')) {
            $('#textbox3').hide();
        }
    });
        
    // $('#lactose-radio').click(function() {
    //     if ($('#lactose-radio').is(':checked')) {
    //         $('#div8a').show();
    //     }
    // });

    // step4

    $('#ques4').click(function() {
        if ($('#ques4').is(':checked')) {
            $('#textbox4').show();
        }
    });

    $('#ques4b').click(function() {
        if ($('#ques4b').is(':checked')) {
            $('#textbox4').hide();
        }
    });

  // step4
    $('#ques5').click(function() {
        if ($('#ques5').is(':checked')) {
            $('#textbox5').show();
        }
    });

    $('#quesb').click(function() {
        if ($('#quesb').is(':checked')) {
            $('#textbox5').hide();
        }
    });

    

    $('#ques6_2a').click(function() {
        if ($('#ques6_2a').is(':checked')) {
            $('#textboxt6_2a').show();
        }
    });

    $('#ques6_2b').click(function() {
        if ($('#ques6_2b').is(':checked')) {
            $('#textboxt6_2a').hide();
        }
    });
    
    // $('#ques6_2').click(function() {
    //     if ($('#ques6_2').is(':checked')) {
    //         $('#detail6_2').show();
    //     }
    // });


    $('#ques8').click(function() {
        if ($('#ques8').is(':checked')) {
            $('#ques8atext').show();
        }
    });

    $('#ques8b').click(function() {
        if ($('#ques8b').is(':checked')) {
            $('#ques8atext').hide();
        }
    });

    $('#ques8c').click(function() {
        if ($('#ques8c').is(':checked')) {
            $('#ques8atext').hide();
        }
    });
    

    $('#ques9').click(function() {
        if ($('#ques9').is(':checked')) {
            $('#textbox9').show();
        }
    });

    $('#ques9b').click(function() {
        if ($('#ques9b').is(':checked')) {
            $('#textbox9').hide();
        }
    });
    

    $detail = '';
    $('.quest-nextbtn').on('click', function() {
        $catId = $('#catId').val();
        // if ($('input[name="radio-group"]', this).is(':checked')) {
        //     // everything's fine...
        // } else {
        //     setTimeout(function() {
        //         $(".quest-backbtn").click();
        //         alert('Please select something!');

        //     }, 1);

        // }
        var step = $(this).data("proress");
        if (step == 3) {
            $detail = $('#textbox3').val();
        }
        if (step == 4) {
            $detail = $('#textbox4').val();
        }
        if (step == 5) {
            $detail = $('#textbox5').val();
        }
        if (step == 6_2) {
            $detail = $('#detail6_2').val();
        }
        if (step == 8) {
            $detail = $('.textbox8').val();
        }
        // if (step == 11) {
        //     $detail = $('#textbox11').val();
        // }
        // if (step == 12) {
        //     $detail = $('#textbox12').val();
        // }
        $ques = $('.questinnaire-step' + step + ' .questinnaire-heading').text();
        $ans = $('.questinnaire-step' + step + ' input[name="radio-group"]:checked').val();
        console.log($ans);
        // if($ans==undefined){
        //   $('.error'+step).html('select the answer');

        // }
        // else{
        //     // $('.nxt').addClass('quest-nextbtn');  
        //     $('.error'+step).html('');
        //     const nextBtns = document.querySelectorAll('.nxt');
        //     nextBtns.forEach((btn, i) => {
        //     btn.addEventListener('click', e => {
        //         e.preventDefault();
        //         steps[i].classList.remove('active');
        //         steps[i + 1].classList.add('active');
        //     });
        //     });

        $.ajax({
            type: "get",
            url: "{{route('questionnaire.storeHairLoss') }}",
            data: {
                'question': $ques,
                'answer': $ans,
                'detail': $detail,
                'catId': $catId,
            },
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function(result) {

                if (result.status == 404) {
                    $('#abortModal').modal('show');
                    // $('#abortModalBody').html('result.message')
                    $('#abortModalBody').html('No recommended treatment Based on your answers, there is no treatment suitable for you. If you think you have made an error in your responses, please click below to review your answers')

                    // alert(result.message)
                }
                console.log(result.status);
            }
        });
        // }
    })

});
// document.addEventListener('DOMContentLoaded', function() {
// const formSteps = document.querySelectorAll('.qtnr-inner');
// const nextBtn = document.querySelectorAll('.nextBtn');
// const backBtn = document.querySelectorAll('.backBtn');

// let currentStep = 0; // Current step index

// function hideSteps() {
//     formSteps.forEach((step, index) => {
//     if (index !== currentStep) {
//       step.style.display = 'none';
//     }
//   });
// }


// function showCurrentStep() {
//   hideSteps();
//   formSteps[currentStep].style.display = 'block';
// }


// function nextStep() {
//   currentStep++;
//   alert("working")
//   if (currentStep >= formSteps.length) {
//     currentStep = formSteps.length - 1;
//   }
//   showCurrentStep();
// }

// function previousStep() {
//   currentStep--;
//   if (currentStep < 0) {
//     currentStep = 0;
//   }
//   showCurrentStep();
// }

// nextBtn.addEventListener('click', nextStep);
// backBtn.addEventListener('click', previousStep);

// showCurrentStep();
// });
</script>


 <!-- script for the popup -->
<script>
    $('#check').change(function () {
    $('#btncheck').prop("disabled", !this.checked);
    }).change()
 </script>



<!-- saving questionnair -->
<script>
    $(document).ready(function(){
            $("#submit_question2").click(function(e){
            e.preventDefault();
            console.log('data',$('#bg-form').serialize());
                // $.ajax({
                //    alert('sdfsdfsdf');
                //     type: "get",
                //  
                //     data : $('#ed-form').serialize(); 
                //     console.log(data);
                //     success: function( msg ) {
                //         alert( msg );
                //     }
                // });
        });  
    });

    var product_ids = [];
    function AddToCart(product_id) {
      product_ids.push(product_id);
      var unique_array = [...new Set(product_ids)];
      var final_array = unique_array.join(','); // Convert to comma-separated string
      // console.log(product_id, unique_array, final_array);
      $("#ProductIds").val(final_array);
    }
</script>  