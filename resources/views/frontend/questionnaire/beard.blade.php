@section('content')
<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="language" content="en" />
    <meta name="country" content="us" />
    <meta name="robots" content="INDEX, FOLLOW" />
    <title>Beard Growth | Questionnaire | Agent</title>
    <style>
        #loader {
            background: rgba(0, 0, 0, 0.7);
            overflow: hidden;
            height: 100%;
            width: 100%;
            z-index: 99999;
            position:fixed;
            bottom:0;
            left:0;
            top:0;
        }
        .spinner {
            margin-top: -21px;
            position: absolute;
            text-align: center;
            top: 50%;
            width: 100%;
        }

        .spinner svg {
            -webkit-animation: loading-rotate 2s linear infinite;
            -moz-animation: loading-rotate 2s linear infinite;
            -o-animation: loading-rotate 2s linear infinite;
            animation: loading-rotate 2s linear infinite;
            height: 42px;
            width: 42px;
        }

        .spinner .path {
            stroke-dasharray: 90, 150;
            stroke-dashoffset: 0;
            stroke-width: 2;
            stroke: #fff;
            stroke-linecap: round;
            -webkit-animation: loading-dash 1.5s ease-in-out infinite;
            -moz-animation: loading-dash 1.5s ease-in-out infinite;
            -o-animation: loading-dash 1.5s ease-in-out infinite;
            animation: loading-dash 1.5s ease-in-out infinite;
        }

        @-webkit-keyframes loading-rotate {
            to {
                -webkit-transform: rotate(1turn);
                transform: rotate(1turn);
            }
        }

        @-moz-keyframes loading-rotate {
            to {
                -moz-transform: rotate(1turn);
                transform: rotate(1turn);
            }
        }

        @-o-keyframes loading-rotate {
            to {
                -o-transform: rotate(1turn);
                transform: rotate(1turn);
            }
        }

        @keyframes loading-rotate {
            to {
                -webkit-transform: rotate(1turn);
                -moz-transform: rotate(1turn);
                -o-transform: rotate(1turn);
                transform: rotate(1turn);
            }
        }

        @-webkit-keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0;
            }
            50% {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -40px;
            }
            to {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -120px;
            }
        }

        @-moz-keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0;
            }
            50% {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -40px;
            }
            to {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -120px;
            }
        }

        @-o-keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0;
            }
            50% {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -40px;
            }
            to {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -120px;
            }
        }

        @keyframes loading-dash {
            0% {
                stroke-dasharray: 1, 200;
                stroke-dashoffset: 0;
            }
            50% {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -40px;
            }
            to {
                stroke-dasharray: 90, 150;
                stroke-dashoffset: -120px;
            }
        }

    </style>
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Poppins&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <link rel="stylesheet" href="{{ asset('css/quest-v2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/quest-v2-respsv.css') }}">
    <link rel="stylesheet" href="{{ asset('css/quest-v2.1.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
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
        <link rel="stylesheet" href="{{ asset('frontend/css/bundle.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('frontend_new/css/new-questionnaire.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
        <link href="https://fonts.googleapis.com/css2?family=Khand:wght@300;400;500;600;700&family=Yeseva+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
        <link rel="stylesheet" href="{{ asset('frontend_new/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_new/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_new/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
        <link rel="stylesheet" href="https://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="{{ asset('frontend_new/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_new/css/questionnaire.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_new/css/responsive.css') }}"> -->



    <livewire:styles />
    @yield('style')
    <livewire:scripts />
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    <x-livewire-alert::flash />
    <x-livewire-alert::scripts />
{{--    <script src="{{ asset('js/app.js') }}"></script>--}}
    <script src="{{ asset('frontend/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery-1.12.0.min.js') }}"></script>

    {{--    <script src="{{ asset('frontend/js/vendor/jquery-1.12.0.min.js') }}"></script>--}}
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

{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>--}}

</head>

<body style="background-color: #f2f2f2">

{{--<div id="loader">--}}
{{--    <div class="spinner">--}}
{{--        <svg viewBox="25 25 50 50">--}}
{{--            <circle cx="50" cy="50" r="20" fill="none" class="path"></circle>--}}
{{--        </svg>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KV2ZB6ZG"
            height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
    @php
    if(Session::has('beard_browth')){
    $sessionId = Session::get('beard_browth');
    } else {
    $randomString = Str::random(40);
    Session::put('beard_browth', $randomString);
    $sessionId = Session::get('beard_browth');
    }
    @endphp

    <section class="questionnaire-v2-main">
        <div class="quest-v2-header">
            <div class="container-fluid">
                <a class="quest-logo" href="{{ url('/') }}">
                    <img src="{{ asset('images/quest-logo.png') }}" alt="">
                </a>
            </div>
        </div>
        <div class="quest-v2-content">
            <div class="container-fluid">
                <div class="quest-v2-inner-wrap">
                    <form id="bg-form" action="{{ route('cart_product') }}" method="post">
                        @csrf
                        <input type="hidden" name="category_id" value="31">
                        <input type="hidden" name="session_id" value="{{ $sessionId }}">

                        <!-- 1st step -->
                        <div class="quest-v2-step data-progress" data-progress="0" id="step1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="v2-2step-cont">
                                        <div class="row">
                                            <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                                <h3 class="quest-v2-subh mb-30">
                                                    <textarea readonly="readonly" class="in_type" type="text" name="Q1"
                                                        value="IDENTIFY YOUR BIRTH GENDER">Identify your birth gender</textarea>
                                                    <!-- <input class="in_type" type="text" name="IDENTIFY YOUR BIRTH GENDER" value="IDENTIFY YOUR BIRTH GENDER"> -->
                                                </h3>
                                                <div class="quest-v2-btn">
                                                    <!-- <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a> -->
                                                    <a class="btn-d-trans btn-wt-170 prev-button"
                                                        href="{{ url('/shop/beard') }}"><span>Back</span><i class="ti-arrow-left quetions-icon"></i></a>

                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-12">
                                                <div class="quest-progress-bar mobile">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quest-v2-quest col-md-5 col-sm-12">
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="birth-gender-1" name="Q1_answer" value="Male">
                                                    <label class="next-button" for="birth-gender-1">Male </label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="birth-gender-2" name="Q1_answer" value="Female">
                                                    <label class="open-que-error" for="birth-gender-2"
                                                        data-error="Regrettably, Agent's beard growth products are currently designed only for those identified as male at birth. Made a mistake? Please click here to review your answer.">Female</label>
                                                </div>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button mobile"
                                                        href="{{ url('/shop/beard') }}">Back</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 2nd step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="9.1" id="step2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 9.1%;"
                                                aria-valuenow="9.1" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="v2-3step-cont">
                                        <div class="row">
                                            <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                                <h3 class="quest-v2-subh mb-30">
                                                    <!-- <input class="in_type" type="text" name="PLEASE INDICATE YOUR AGE GROUP" value="PLEASE INDICATE YOUR AGE GROUP"> -->
                                                    <textarea readonly="readonly" class="in_type" type="text" name="Q2"
                                                        value="PLEASE INDICATE YOUR AGE GROUP">Please indicate your age group</textarea>
                                                </h3>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button"
                                                        href="javascript:void(0)"><span>Back</span><i class="ti-arrow-left quetions-icon"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-12">
                                                <div class="quest-progress-bar mobile">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quest-v2-quest col-md-5 col-sm-12">
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="age-group-1" name="Q2_answer" value="Under 18">
                                                    <label class="open-que-error" for="age-group-1"
                                                        data-error="Unfortunately, your provided age makes you unsuitable for this Agent treatment. Made a mistake? Please click here to review your answer.">Under
                                                        18 </label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="age-group-2" name="Q2_answer" value="18-65">
                                                    <label class="next-button" for="age-group-2">18-65</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="age-group-3" name="Q2_answer" value="Over 65">
                                                    <label class="next-button" for="age-group-3">Over 65 </label>
                                                </div>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button mobile"
                                                        href="javascript:void(0)">Back</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 3rd step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="18.2" id="step3">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 18.2%;"
                                                aria-valuenow="18.2" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="v2-3step-cont">
                                        <div class="row">
                                            <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                                <h3 class="quest-v2-subh mb-30">
                                                    <textarea readonly="readonly" class="in_type" type="text" name="Q3"
                                                        value="DESCRIBE YOUR CURRENT BEARD GROWTH">Describe your current beard growth</textarea>
                                                </h3>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button"
                                                        href="javascript:void(0)"><span>Back</span><i class="ti-arrow-left quetions-icon"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-12">
                                                <div class="quest-progress-bar mobile">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-12">
                                                <div class="form-group form-radio line_bottom">
                                                    <input type="radio" id=" beard-growth-1" name="Q3_answer"
                                                        value="Slow or patchy growth">
                                                    <label class="next-button" for=" beard-growth-1">Minimal,Slow or patchy
                                                        growth </label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id=" beard-growth-2" name="Q3_answer"
                                                        value="No facial hairs at all">
                                                    <label class="open-que-error" for=" beard-growth-2"
                                                        data-error="A complete absence of beard growth could indicate a hormonal issue or an autoimmune condition. It's best to consult your GP who can conduct an investigation into the root cause of your inability to grow beard hair.">
                                                        No facial hairs at all</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id=" beard-growth-3" name="Q3_answer"
                                                        value="Hair loss over/around red inflamed areas">
                                                    <label class="open-que-error" for=" beard-growth-3"
                                                        data-error="Hair loss around red or inflamed skin could signal dermatitis or a fungal infection. Consult your GP for an investigation or to prescribe medication to help with the skin condition.">Hair
                                                        loss over/around red inflamed areas</label>
                                                </div>
                                                <div class="form-group form-radio ">
                                                    <input type="radio" id=" beard-growth-4" name="Q3_answer"
                                                        value="Defined circular areas of no growth">
                                                    <label class="open-que-error" for=" beard-growth-4"
                                                        data-error="Defined circular areas of hair loss on the beard may suggest a form of alopecia. Consult your GP for further investigation.">Defined
                                                        circular areas of no growth </label>
                                                </div>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button mobile"
                                                        href="javascript:void(0)">Back</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 4th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="27.3" id="step4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 27.3%;"
                                                aria-valuenow="27.3" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="v2-3step-cont">
                                        <div class="row">
                                            <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                                <h3 class="quest-v2-subh mb-30">
                                                    <textarea readonly="readonly" class="in_type" type="text" name="Q4"
                                                        value="HAVE YOU OBSERVED ANY SUDDEN CHANGES IN YOUR BEARD GROWTH?">Have you observed any sudden changes in your beard growth?</textarea>
                                                </h3>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button"
                                                        href="javascript:void(0)"><span>Back</span><i class="ti-arrow-left quetions-icon"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-12">
                                                <div class="quest-progress-bar mobile">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-12">
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="observed-1" name="Q4_answer" value="Yes">
                                                    <label class="open-que-error" for="observed-1"
                                                        data-error="The safety of our patients is our top priority. Unfortunately, the treatment you selected is not designed for sudden hair loss, which may signal an underlying condition. We recommend contacting your GP for advice.">Yes
                                                    </label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="observed-2" name="Q4_answer" value="No">
                                                    <label class="next-button" for="observed-2">No</label>
                                                </div>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button mobile"
                                                        href="javascript:void(0)">Back</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 5th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="36.4" id="step5">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 36.4%;"
                                                aria-valuenow="36.4" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="v2-3step-cont">
                                        <div class="row">
                                            <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                                <h3 class="quest-v2-subh mb-30">
                                                    <!-- <input class="in_type" type="text" name="HAVE YOU EXPERIENCED HAIR LOSS ON OTHER PARTS OF YOUR BODY?" value="HAVE YOU EXPERIENCED HAIR LOSS ON OTHER PARTS OF YOUR BODY?">  -->
                                                    <textarea readonly="readonly" class="in_type" type="text" name="Q5"
                                                        value="HAVE YOU EXPERIENCED HAIR LOSS ON OTHER PARTS OF YOUR BODY?">Have you experienced hair loss on other parts of your body?</textarea>
                                                </h3>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button"
                                                        href="javascript:void(0)"><span>Back</span><i class="ti-arrow-left quetions-icon"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-12">
                                                <div class="quest-progress-bar mobile">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-12">
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="exp-hair-loss-1" name="Q5_answer" value="Yes">
                                                    <label class="open-sub-step" for="exp-hair-loss-1">Yes </label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="exp-hair-loss-2" name="Q5_answer" value="No">
                                                    <label class="next-button" for="exp-hair-loss-2">No</label>
                                                </div>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button mobile"
                                                        href="javascript:void(0)">Back</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-step fixed-step" id="sub-step1">
                                <div class="inner-form-group">
                                    <div class="row">
                                        <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                            <h3 class="quest-v2-subh mb-30">
                                                <textarea readonly="readonly" class="in_type" type="text" name="Q6"
                                                    value="Please specify the areas of your body affected and how long you have been experiencing this hair loss.">Please specify the areas of your body affected and how long you have been experiencing this hair loss.</textarea>
                                                <!-- <input class="in_type" type="text" name="Please specify the areas of your body affected and how long you have been experiencing this hair loss." value="Please specify the areas of your body affected and how long you have been experiencing this hair loss.">  -->
                                            </h3>
                                        </div>
                                        <div class="col-md-1 col-sm-12">
                                        </div>
                                        <div class="quest-v2-quest col-md-5 col-sm-12">
                                            <div class="form-group form-text-field">
                                                <textarea type="text" class="form-control" id="experiencing_this_hair_loss"
                                                        value=""  name="Q6_answer" placeholder="enter your text" ></textarea>
                                                </div>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-black btn-wt-300 mr-20 next-button"
                                                        href="javascript:void(0)">Continue</a>
                                                    <a class="btn-d-black btn-wt-170 back-sub-step"
                                                        href="javascript:void(0)">Back</a>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="45.5" id="step6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 45.5%;"
                                                aria-valuenow="45.5" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="v2-3step-cont">
                                        <div class="row">
                                            <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                                <h3 class="quest-v2-subh mb-30">
                                                    <!-- <input class="in_type" type="text" name="HAVE YOU USED MINOXIDIL IN THE PAST 12 MONTHS?" value="HAVE YOU USED MINOXIDIL IN THE PAST 12 MONTHS?">  -->
                                                    <textarea readonly="readonly" class="in_type" type="text" name="Q7"
                                                        value="HAVE YOU USED MINOXIDIL IN THE PAST 12 MONTHS?">Have you used minoxidil in the past 12 months?</textarea>
                                                </h3>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button"
                                                        href="javascript:void(0)"><span>Back</span><i class="ti-arrow-left quetions-icon"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-12">
                                                <div class="quest-progress-bar mobile">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-12">
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="minoxidil-1" name="Q7_answer" value="Yes">
                                                    <label class="open-sub-step" for="minoxidil-1">Yes </label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="minoxidil-2" name="Q7_answer" value="No">
                                                    <label class="next-button" for="minoxidil-2">No</label>
                                                </div>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button mobile"
                                                        href="javascript:void(0)">Back</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-step fixed-step" id="sub-step1">
                                <div class="inner-form-group">
                                    <div class="row">
                                        <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                            <h3 class="quest-v2-subh mb-30">
                                                <textarea readonly="readonly" class="in_type" type="text" name="Q8"
                                                    value="Please provide details about your previous experience with minoxidil, including formulation, efficacy, and side effects.">Please provide details about your previous experience with minoxidil, including formulation, efficacy, and side effects.</textarea>
                                                <!-- <input class="in_type" type="text" name="Please provide details about your previous experience with minoxidil, including formulation, efficacy, and side effects." value="Please provide details about your previous experience with minoxidil, including formulation, efficacy, and side effects.">  -->
                                            </h3>
                                        </div>
                                        <div class="col-md-1 col-sm-12">
                                        </div>
                                        <div class="quest-v2-quest col-md-5 col-sm-12">
                                            <div class="form-group form-text-field">
                                                <textarea type="text" class="form-control" id="experience_with_minoxidil"
                                                    value="" name="Q8_answer" placeholder="enter your text" ></textarea>
                                            </div>
                                            <div class="quest-v2-btn">
                                                <a class="btn-d-black btn-wt-300 mr-20 next-button"
                                                    href="javascript:void(0)">Continue</a>
                                                <a class="btn-d-black btn-wt-170 back-sub-step"
                                                    href="javascript:void(0)">Back</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 7th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="54.6" id="step7">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 54.6%;"
                                                aria-valuenow="54.6" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="v2-3step-cont">
                                        <div class="row">
                                            <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                                <h3 class="quest-v2-subh mb-30">
                                                    <textarea readonly="readonly" class="in_type" type="text" name="Q9"
                                                        value="DO YOU HAVE A KNOWN ALLERGY TO MINOXIDIL?">Do you have a know allergy to minoxidil?</textarea>
                                                    <!-- <input class="in_type" type="text" name="DO YOU HAVE A KNOWN ALLERGY TO MINOXIDIL?" value="DO YOU HAVE A KNOWN ALLERGY TO MINOXIDIL?">  -->
                                                </h3>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button"
                                                        href="javascript:void(0)"><span>Back</span><i class="ti-arrow-left quetions-icon"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-12">
                                                <div class="quest-progress-bar mobile">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-12">
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="allergy-1" name="Q9_answer" value="Yes">
                                                    <label class="open-que-error" for="allergy-1"
                                                        data-error="Unfortunately, our topical solution contains minoxidil which is unsuitable if you are allergic.">Yes
                                                    </label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="allergy-2" name="Q9_answer" value="No">
                                                    <label class="next-button" for="allergy-2">No</label>
                                                </div>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button mobile"
                                                        href="javascript:void(0)">Back</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 8th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="63.7" id="step8">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 63.7%;"
                                                aria-valuenow="63.7" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="v2-2step-cont">
                                        <div class="row">
                                            <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                                <h3 class="quest-v2-subh mb-30">
                                                    <textarea readonly="readonly" class="in_type" type="text" name="Q10"
                                                        value="DO YOU HAVE SENSITIVE OR DAMAGED SKIN, OR A DIAGNOSED SKIN CONDITION IN THE BEARD AREA?">Do you have senstive or damaged skin, or a diagnosed skin condition in the beard area?</textarea>
                                                    <!-- <input class="in_type" type="text" name="DO YOU HAVE SENSITIVE OR DAMAGED SKIN, OR A DIAGNOSED SKIN CONDITION IN THE BEARD AREA?" value="DO YOU HAVE SENSITIVE OR DAMAGED SKIN, OR A DIAGNOSED SKIN CONDITION IN THE BEARD AREA?">  -->
                                                </h3>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button"
                                                        href="javascript:void(0)"><span>Back</span><i class="ti-arrow-left quetions-icon"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-12">
                                                <div class="quest-progress-bar mobile">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-12">
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="damaged-1" name="10_answer" value="Yes">
                                                    <label class="open-sub-step" for="damaged-1">Yes </label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="damaged-2" name="10_answer" value="No">
                                                    <label class="next-button" for="damaged-2">No</label>
                                                </div>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button mobile"
                                                        href="javascript:void(0)">Back</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-step fixed-step" id="sub-step1">
                                <div class="inner-form-group">
                                    <div class="row">
                                        <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                            <h3 class="quest-v2-subh mb-30">
                                                <textarea readonly="readonly" class="in_type" type="text" name="Q11"
                                                    name="Please provide details about your skin condition, including any diagnosis if applicable.">Please provide details about your skin condition, including any diagnosis if applicable.</textarea>
                                                <!-- <input class="in_type" type="text" name="Please provide details about your skin condition, including any diagnosis if applicable." value="Please provide details about your skin condition, including any diagnosis if applicable."> -->
                                            </h3>
                                        </div>
                                        <div class="col-md-1 col-sm-12">
                                        </div>
                                        <div class="quest-v2-quest col-md-5 col-sm-12">
                                            <div class="form-group form-text-field">
                                                <textarea type="text" class="form-control" id="list_applicable"
                                                value="" name="Q11_answer" placeholder="enter your text" ></textarea>
                                            </div>
                                            <div class="quest-v2-btn">
                                                <a class="btn-d-black btn-wt-300 mr-20 next-button"
                                                    href="javascript:void(0)">Continue</a>
                                                <a class="btn-d-black btn-wt-170 back-sub-step"
                                                    href="javascript:void(0)">Back</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 9th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="72.8" id="step9">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 72.8%;"
                                                aria-valuenow="72.8" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="v2-3step-cont">
                                        <div class="row">
                                            <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                                <h3 class="quest-v2-subh mb-30">
                                                    <textarea readonly="readon" class="in_type" type="text" name="Q12"
                                                        name="HAVE YOU BEEN DIAGNOSED WITH HIGH OR LOW BLOOD PRESSURE?">Have you been diagnosed with high or low blood pressure?</textarea>
                                                    <!-- <input class="in_type" type="text" name="HAVE YOU BEEN DIAGNOSED WITH HIGH OR LOW BLOOD PRESSURE?" value="HAVE YOU BEEN DIAGNOSED WITH HIGH OR LOW BLOOD PRESSURE?"> -->
                                                </h3>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button"
                                                        href="javascript:void(0)"><span>Back</span><i class="ti-arrow-left quetions-icon"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-12">
                                                <div class="quest-progress-bar mobile">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-12">
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="diagnosed-1" name="Q12_answer" value="Yes">
                                                    <label class="open-que-error" for="diagnosed-1"
                                                        data-error="This treatment is not suitable for you.">Yes </label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="diagnosed-2" name="Q12_answer" value="No">
                                                    <label class="next-button" for="diagnosed-2">No</label>
                                                </div>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button mobile"
                                                        href="javascript:void(0)">Back</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 10th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="81.9" id="step10">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 81.9%;"
                                                aria-valuenow="81.9" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="v2-3step-cont">
                                        <div class="row">
                                            <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                                <h3 class="quest-v2-subh mb-30">
                                                    <textarea readonly="readonly" class="in_type" type="text" name="Q13"
                                                        name="DO YOU SMOKE?">Do you smoke?</textarea>
                                                    <!-- <input class="in_type" type="text" name="DO YOU SMOKE?" value="DO YOU SMOKE?"> -->
                                                </h3>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button"
                                                        href="javascript:void(0)"><span>Back</span><i class="ti-arrow-left quetions-icon"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-12">
                                                <div class="quest-progress-bar mobile">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-12">
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="smoke-1" name="Q13_answer" value="Yes">
                                                    <label class="next-button" for="smoke-1">Yes </label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="smoke-2" name="Q13_answer" value="No">
                                                    <label class="next-button" for="smoke-2">No</label>
                                                </div>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button mobile"
                                                        href="javascript:void(0)">Back</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 11th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="91" id="step11">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 91%;"
                                                aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="v2-3step-cont">
                                        <div class="row">
                                            <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                                <div>
                                                    <h3 class="quest-v2-subh mb-30">
                                                        <textarea readonly="readonly" class="in_type" type="text" name="Q14"
                                                            value="HAVE YOU HAD ANY OF THE FOLLOWING:">Have you had any of the following:</textarea>
                                                        <!-- <input class="in_type" type="text" name="HAVE YOU HAD ANY OF THE FOLLOWING:" value="HAVE YOU HAD ANY OF THE FOLLOWING:"> -->
                                                    </h3>
                                                    <ul class="quest-v2-list pb-30">
                                                        <li>Major illnesses</li>
                                                        <li>Ongoing medical conditions</li>
                                                        <li>Prescribed or over-the-counter medication that you currently take</li>
                                                        <li>Allergies to medication</li>
                                                        <li>Recent operations</li>
                                                    </ul>
                                                    <p class="quest-desc mb-30">Your responses will help our clinicians determine if
                                                        the prescription is safe for you.</p>
                                                </div>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button"
                                                        href="javascript:void(0)"><span>Back</span><i class="ti-arrow-left quetions-icon"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-12">
                                                <div class="quest-progress-bar mobile">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-sm-12">
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="safe-1" name="Q14_answer" value="Yes">
                                                    <label class="open-sub-step" for="safe-1">Yes </label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="safe-2" name="Q14_answer" value="No">
                                                    <label class="next-button" for="safe-2">No </label>
                                                </div>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button mobile"
                                                        href="javascript:void(0)">Back</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-step fixed-step" id="sub-step1">
                                <div class="inner-form-group">
                                    <div class="row">
                                        <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                            <h3 class="quest-v2-subh mb-30">
                                                <textarea readonly="readonly" class="in_type" type="text" name="Q15"
                                                    value="HAVE YOU HAD ANY OF THE FOLLOWING:Please provide specific details about any or all of the above conditions that apply to you.">Have you had any of the following:Please provide specific details about any or all of the above conditions that apply to you.</textarea>
                                                <!-- <input class="in_type" type="text" name="HAVE YOU HAD ANY OF THE FOLLOWING:Please provide specific details about any or all of the above conditions that apply to you." value="HAVE YOU HAD ANY OF THE FOLLOWING:Please provide specific details about any or all of the above conditions that apply to you."> -->
                                            </h3>
                                        </div>
                                        <div class="col-md-1 col-sm-12">
                                        </div>
                                        <div class="quest-v2-quest col-md-5 col-sm-12">
                                            <div class="form-group form-text-field">
                                                <textarea type="text" class="form-control" id="list_apply_to_you"
                                                    value="" name="Q15_answer" placeholder="enter your text" ></textarea>
                                            </div>
                                            <div class="quest-v2-btn">
                                                <a class="btn-d-black btn-wt-300 mr-20 next-button"
                                                    href="javascript:void(0)">Continue</a>
                                                <a class="btn-d-black btn-wt-170 back-sub-step"
                                                    href="javascript:void(0)">Back</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 12th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="100" id="step12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 100%;"
                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="v2-3step-cont">
                                        <div class="row">
                                            <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                                <h3 class="quest-v2-subh mb-30">
                                                    <textarea readonly="readonly" class="in_type" type="text" name="Q16"
                                                        value="WOULD YOU LIKE TO INFORM YOUR GP ABOUT THIS CONSULTATION?">Would you like to inform your gp about this consultation?</textarea>
                                                    <!-- <input class="in_type" type="text" name="WOULD YOU LIKE TO INFORM YOUR GP ABOUT THIS CONSULTATION?" value="WOULD YOU LIKE TO INFORM YOUR GP ABOUT THIS CONSULTATION?"> -->
                                                </h3>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button"
                                                        href="javascript:void(0)"><span>Back</span><i class="ti-arrow-left quetions-icon"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-12">
                                                <div class="quest-progress-bar mobile">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="prefer-1" name="Q16_answer" value="Yes">
                                                    <label class="open-sub-step" for="prefer-1">Yes </label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="prefer-2" name="Q16_answer" value="No">
                                                    <label class="next-button" for="prefer-2">No </label>
                                                </div>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button mobile"
                                                        href="javascript:void(0)">Back</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-step fixed-step" id="sub-step1">
                                <div class="inner-form-group">
                                    <div class="row">
                                        <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                            <h3 class="quest-v2-subh mb-30">
                                                <textarea readonly="readonly" class="in_type" type="text" name="Q17"
                                                    value="WOULD YOU LIKE TO INFORM YOUR GP ABOUT THIS CONSULTATION?">Would you like to inform your gp about this consultation?</textarea>
                                                <!-- <input class="in_type" type="text" name="Please provide your GP's name and the practice's address." value="Please provide your GP's name and the practice's address."> -->
                                            </h3>
                                        </div>
                                        <div class="col-md-1 col-sm-12">
                                        </div>
                                        <div class="quest-v2-quest col-md-5 col-sm-12">
                                            <div class="form-group form-text-field">
                                                <textarea type="text" class="form-control" id="list_consultation"
                                                    value="" name="Q17_answer" placeholder="enter your text" ></textarea>
                                            </div>
                                            <div class="quest-v2-btn">
                                                <input id="submit_question222" class="btn-d-black btn-wt-170 next-button"
                                                    name="submit" value="Continue">
                                                <a class="btn-d-black btn-wt-170 back-sub-step"
                                                    href="javascript:void(0)">Back</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="quest-v2-step d-none question-final" id="step13">
                            <div class="row">
                                <div class="col-md-12 col-lg-6 qe-img">
                                    <img src="/frontend/images/questionnaire.jpg">
                                </div>
                                <div class="col-md-12 col-lg-6 qe-content">
                                    <div class="v2-1step-cont">
                                        <div>
                                            <h1 class="weare-going-con mb-20 qe-title">
                                                <div class="ques-final-thankyou">Thank you</div>
                                                <div class="ques-final-answering">For Answering</div>
                                            </h1>
                                            <p class="mb-30">Thank you for completing this questionnaire about your beard growth and overall health. Your responses will help our licensed clinicians determine if a prescription treatment may
                                            be appropriate for enhancing your beard growth. They will promptly review your answers and get back to you with suitable suggestions.</p>
                                        </div>
                                        <div>
                                            <h3 class="list-heading mb-30">Before You Finalise Your Submission, Please Declare That:</h3>
                                            <ul class="quest-v2-list pb-30 mb-20 before-submit-area">
                                                <li>You Are Completing This Questionnaire For Yourself And To The Best Of Your Knowledge. </li>
                                            <li>You are using this service out of free will </li>
                                            <li>You Will disclose any serious illnesses or operations you have had.</li>
                                            <li>You Will disclose any prescription medication you currently take and any
                                                allergies you have.</li>
                                            <li>You Understand that our clinical team will assess your case and if a
                                                prescription medicine is required they will select the specific
                                                medicine and dose.</li>
                                            <li>You Will only use one method of beard growth treatment at a time and
                                                will not combine more than one different medication for the
                                                condition.</li>
                                            <li>You Will only use your medication as prescribed and not change your
                                                medication or dose without first seeking medical advice.</li>
                                            <li>You Are aware that our Topical solution containing minoxidil 5% is an
                                                unlicensed product.</li>
                                            <li>Will Read all patient information leaflets available</li>
                                            <li>You Are accepting our Terms & Conditions and Terms of Sale.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ques-footer">
                                <div class='col-lg-6 col-md-12 ques-lfc' >
                                    <div class="quest-lfc-btn">
                                        <div>
                                            <img src="{{asset('frontend_new/images/licensed.png')}}" alt="backed">
                                            <span>Licensed & Registered Medication</span>
                                        </div>
                                        <div>
                                            <img src="{{asset('frontend_new/images/lock.png')}}" alt="backed">
                                            <span>Free & Discreet 24 Hour Shipping</span>
                                        </div>
                                        <div>
                                            <img src="{{asset('frontend_new/images/delete.png')}}" alt="backed">
                                            <span>Pause or Cancel Anytime</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-trans btn-wt-170 prev-button">Back</a>
                                        <button class="btn-d-black" type="submit" id="relyimpohl-btn" name=""
                                            value="btn">continue</button>
                                        <a class="btn-d-trans btn-wt-170 prev-button mobile">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 13th step end -->

                    </form>


                    <!-- Modal -->
                    <div class="modal fade" id="placeOrderModal" tabindex="-1" aria-labelledby="placeOrderModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!-- <h5 class="modal-title" id="placeOrderModalLabel">Modal title</h5> -->
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <figure>
                                            <img src="{{ asset('frontend_new/images/model-cross-icon.png') }}"
                                                alt="img" />
                                        </figure>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <figure>
                                        <img src="{{ asset('frontend_new/images/Icon.png') }}" alt="img" />
                                    </figure>
                                    <!-- <img src="{{ asset('images/popup%20icon.png') }}"alt="Icon"> -->
                                    <h1>Thank You Jashan</h1>
                                    <h3>Order Number #2700</h3>
                                    <p>Your order is confirmed You’ll receive a confirmation email with your order
                                        number shortly.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-d-black" data-bs-dismiss="modal">Continue
                                        Shoping</button>
                                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                </div>
                            </div>
                        </div>
                    </div>




                    <!-- error message start -->
                    <div class="quest-v2-errorstep" style="display: none;">
                        <div class="quest-v2-error">
                            <div class="modal-dialog ">
                                <div class="modal-content border-0">
                                    <div class="quest-v2-header">
                                        <a class="quest-logo" href="{{ url('/') }}">
                                            <img src="{{ asset('images/quest-logo.png') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-5 col-sm-12 quest-v2-error-modal-label d-flex flex-column justify-content-between">
                                                <div>
                                                    <div class="error-btn-reverse">
                                                        <img src="{{ asset('images/error-icon.svg') }}" alt="">
                                                    </div>
                                                    <div class="col-9">
                                                        <h2 class="quest-v2-subh mb-30 font-weight-bold">
                                                            <div><span class="font-poppins">Your</span> <span class="font-yeseva">safety</span></div>
                                                            <div><span class="font-poppins">is our top</span></div>
                                                            <div><span class="font-yeseva">priority</span>.</div>
                                                    </div>
                                                </div>
                                                <button type="button" id="btncheck" class="btn-d-black-outline close-que-modal"
                                                data-bs-dismiss="modal"><span>Back</span><i class="ti-arrow-left quetions-icon"></i></button>
                                            </div>
                                            <div class="col-1"></div>
                                            <div class="col-md-6 col-sm-12">
                                                <h5 class="font-poppins-bold">Unfortunately, we can’t offer you any beard growth medication.</h5>
                                                <p class="font-poppins">No recommended treatment. Based on your answers, there is no treatment
                                                    suitable for you. If you think you have made an error in your responses,
                                                    please click below to review your answers.</p>
                                                <h5 class="font-poppins-bold">Did you make a mistake?</h5>
                                                    <p>Providing false information can lead to
                                                        serious harm to your
                                                        health.</p>
                                                <div class="form-group form-check mb-30 pb-2" style="text-align: justify">
                                                    <input class="form-check-input" type="checkbox" name="terms-and-services"
                                                        id="check">
                                                    <label class="form-check-label m-0" for="terms-and-services">
                                                        I agree only to provide accurate answers
                                                    </label>
                                                </div>
                                                <button type="button" id="btncheck" class="btn-d-black close-que-modal mobile"
                                                data-bs-dismiss="modal">Back</button>
                                            </div>
                                        </div>
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
                                        <img src="{{ asset('images/loading-user.png') }}" alt="">
                                    </div>
                                    <h3 class="quest-v2-subh mb-30">
                                        We are creating your personalized recommendations.
                                    </h3>
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 100%;"
                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/custom.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>


</body>

</html>



<script>
function cartItem(product_name, product_price) {
    localStorage.setItem("product_name", product_name);
    localStorage.setItem("product_price", product_price);
}

function set_type(dropper, spray) {
    localStorage.setItem("dropper", dropper);
    localStorage.setItem("spray", spray);
}

function getvalue() {
    var product_name = localStorage.getItem("product_name");
    var product_price = localStorage.getItem("product_price");

    document.getElementById("product_name").innerHTML = product_name;
    document.getElementById("product_price").innerHTML = product_price;
}

function get_type() {

    var p_name = localStorage.getItem("product_name");
    var p_price = localStorage.getItem("product_price");
    var pr_price = localStorage.getItem("product_price");
    var pro_price = localStorage.getItem("product_price");

    document.getElementById("p_name").innerHTML = p_name;
    document.getElementById("p_price").innerHTML = p_price;
    document.getElementById("pr_price").innerHTML = pr_price;
    document.getElementById("pro_price").innerHTML = pro_price;

    var dropper = localStorage.getItem("dropper", dropper);
    var spray = localStorage.getItem("spray", spray);

    document.getElementById('dropper').innerHTML = dropper;
    document.getElementById("spray").innerHTML = spray;

}
</script>


<!-- script for the popup -->
<script>
$('#check').change(function() {
    $('#btncheck').prop("disabled", !this.checked);
}).change()
</script>


<!-- saving questionnair -->
<script>
$(document).ready(function() {
    $("#submit_question2").click(function(e) {
        e.preventDefault();
        console.log('data', $('#bg-form').serialize());
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
    console.log(product_id, unique_array, final_array);
    $("#ProductIds").val(final_array);
}

$(function(){
    $('.d-none').removeClass('d-none');
        $("body").css('background-color', "#f2f2f2");
})
</script>
