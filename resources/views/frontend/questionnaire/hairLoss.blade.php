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
    <title>Hair Loss | Questionnaire | Agent</title>
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
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta name="bucls" content="SHARED-SERVICES" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Khand:wght@300;400;500;600;700&family=Yeseva+One&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

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
    if(Session::has('hair_loss')){
    $sessionId = Session::get('hair_loss');
    } else {
    $randomString = Str::random(40);
    Session::put('hair_loss', $randomString);
    $sessionId = Session::get('hair_loss');
    }
    //dd($sessionId);
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
                    <form action="{{ route('cart_product') }}" method="POST">
                        @csrf
                        <input type="hidden" name="category_id" value="30">
                        <input type="hidden" name="session_id" value="{{ $sessionId }}">

                        <!-- 1st step -->
                        <div class="quest-v2-step data-progress" data-progress="0" id="step1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-2step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                    aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>0%</h3>
                                        </div>
                                        <!-- <h3 class="quest-v2-subh mb-30">
                                        What is your type of hair loss?
                                    </h3> -->
                                        <h3 class="quest-v2-subh mb-30">
                                            <!-- <input class="in_type" readonly="readonly"  name="What is your type of hair loss?" id="Kindly_Tell_Us_Your_Age" type="text" value="What is your type of hair loss?">  -->
                                            <textarea class="in_type" readonly="readonly" name="Q1"
                                                id="Kindly_Tell_Us_Your_Age"
                                                type="text">What is your type of hair loss?</textarea>
                                        </h3>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="genhairloss" name="Q1_answer"
                                                value="Genetic Hair Loss/ Mild">
                                            <label class="next-button" for="genhairloss">Genetic Hair Loss/ Mild
                                            </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="recehairline" name="Q1_answer"
                                                value="Receding Hairline (Temples)">
                                            <label class="next-button" for="recehairline">Receding Hairline (Temples)
                                            </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="thincrownhl" name="Q1_answer" value="thincrown">
                                            <label class="next-button" for="thincrownhl">Thin Crown </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="thinninghl" name="Q1_answer"
                                                value="Thinning all over (Temples and Crown)">
                                            <label class="next-button" for="thinninghl">Thinning all over (Temples and
                                                Crown) </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="extensivehl" name="Q1_answer"
                                                value="Extensive hair loss">
                                            <label class="next-button" for="extensivehl">Extensive hair loss </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="patchyhl" name="Q1_answer" value="Patchy">
                                            <label class="open-que-error" for="patchyhl">Patchy</label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="completelyhl" name="Q1_answer"
                                                value="Completely bald">
                                            <label class="open-que-error" for="completelyhl">Completely bald </label>
                                        </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button"
                                                href="{{ url('/shop/hair-loss') }}">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 2nd step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="13" id="step2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 10%;"
                                                    aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <h3>13%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                            <!-- <input class="in_type" readonly="readonly"  name="When did you notice any hair loss?"  type="text" value=" When did you notice any hair loss?">  -->
                                            <textarea class="in_type" readonly="readonly" name="Q2"
                                                value="when did you first begin to notice your hair loss ?"
                                                type="text">when did you first begin to notice your hair loss ?</textarea>
                                        </h3>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="noticehl-days" name="Q2_answer"
                                                value="My hair loss has been sudden and I’ve noticed over the past few days/weeks">
                                            <label for="noticehl-days" class="open-que-error">My hair loss has been
                                                sudden and I’ve noticed over the past few days / weeks</label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="noticehl-months" name="Q2_answer"
                                                value="I have had gradual hair loss which I have noticed over the past couple of months / years">
                                            <label class="next-button" for="noticehl-months">I have had gradual hair
                                                loss which I have noticed over the past couple of months / years</label>
                                        </div>

                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button"
                                                href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 3rd step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="26" id="step3">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 20%;"
                                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>26%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea class="in_type" readonly="readonly" name="Q3" type="text"
                                                value="Have you experienced hair loss anywhere else on your body?">Have you experienced hair loss anywhere else on your body?</textarea>
                                            <!-- <input class="in_type" readonly="readonly"  name="Have you experienced hair loss anywhere else on your body?"  type="text" value="Have you experienced hair loss anywhere else on your body?">  -->
                                        </h3>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="exphl-yes" name="Q3_answer" value="Yes">
                                            <label for="exphl-yes" class="open-sub-step">Yes</label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="exphl-no" name="Q3_answer" value="No">
                                            <label class="next-button" for="exphl-no">No </label>
                                        </div>

                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button"
                                                href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-step fixed-step" id="sub-step1">
                                <div class="inner-form-group">
                                    <h3 class="quest-v2-subh mb-30">
                                        <textarea class="in_type" readonly="readonly" type="text" name="Q4"
                                            value="Please tell us about hair loss in areas other than your head">Please tell us about hair loss in areas other than your head.</textarea>
                                    </h3>

                                    <div class="form-group form-text-field">
                                        <!-- <input type="text" class="form-control" id="" value=""> -->
                                        <textarea type="text" class="form-control" id="" name="Q4_answer"
                                            placeholder="enter your text"></textarea>
                                    </div>
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-black btn-wt-300 mr-20 next-button"
                                            href="javascript:void(0)">Continue</a>
                                        <a class="btn-d-trans btn-wt-170 back-sub-step"
                                            href="javascript:void(0)">Back</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- 4th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="40" id="step4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 30%;"
                                                    aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>40%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea class="in_type" readonly="readonly" name="Q5" type="text"
                                                value="Have you taken any of these medications consistently over the last 12 months:Minoxidil (also known as Regaine) or Finasteride (also known as Propecia)?">Have you taken any of these medications consistently over the last 12 months:Minoxidil (also known as Regaine) or Finasteride (also known as Propecia)?</textarea>
                                            <!-- <input class="in_type" readonly="readonly"  name="Have you taken any of these medications consistently over the last 12 months: Minoxidil, Regaine, Finasteride, or Propecia?"  type="text" value="Have you taken any of these medications consistently over the last 12 months: Minoxidil, Regaine, Finasteride, or Propecia?">  -->
                                        </h3>

                                        <div class="form-group form-radio">
                                            <input type="radio" id="medi-consM-yes" name="Q5_answer"
                                                value="Yes">
                                            <label for="medi-consM-yes" class="open-sub-step">Yes</label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="medi-consM-no" name="Q5_answer"
                                                value="No">
                                            <label class="next-button" for="medi-consM-no">No</label>
                                        </div>

                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button"
                                                href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-step fixed-step" id="sub-step1">
                                <div class="inner-form-group">
                                    <h3 class="quest-v2-subh mb-30">
                                        <textarea class="in_type" readonly="readonly" name="Q6" type="text"
                                            value="Please tell us what medication you've taken, its effectiveness, and any side effects.">Please tell us what medication you've taken, its effectiveness, and any side effects.</textarea>
                                    </h3>

                                    <div class="form-group form-text-field">
                                        <textarea type="text" class="form-control" id="" name="Q6_answer"
                                            placeholder="enter your text"></textarea>
                                    </div>
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-black btn-wt-300 mr-20 next-button"
                                            href="javascript:void(0)">Continue</a>
                                        <a class="btn-d-trans btn-wt-170 back-sub-step"
                                            href="javascript:void(0)">Back</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- 5th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="53" id="step5">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 40%;"
                                                    aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>53%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea class="in_type" readonly="readonly" name="Q7"
                                                value="Do you have any scalp problems?"
                                                type="text">Do you have any scalp problems?</textarea>
                                            <!-- <input class="in_type" readonly="readonly"  name="Do you have any scalp problems?"  type="text" value="Do you have any scalp problems?">  -->
                                        </h3>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="scalphl-prob-no" name="Q7_answer" value="Yes">
                                            <label class="open-sub-step" for="scalphl-prob-no">Yes</label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="scalphl-prob-yes" name="Q7_answer" value="No">
                                            <label class="next-button" for="scalphl-prob-yes">No</label>
                                        </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button"
                                                href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-step fixed-step" id="sub-step1">
                                <div class="inner-form-group">
                                    <h3 class="quest-v2-subh mb-30">
                                        <textarea class="in_type" readonly="readonly" name="Q8"
                                            value="Please select your scalp problems?"
                                            type="text">Please select your scalp problems?</textarea>
                                    </h3>
                                    <div class="form-group form-radio">
                                        <input type="radio" id="scalppsoriasis" name="Q8_answer" value="Psoriasis">
                                        <label class="open-que-error" for="scalppsoriasis">Psoriasis</label>
                                    </div>
                                    <div class="form-group form-radio">
                                        <input type="radio" id="scalpsunburn" name="Q8_answer" value="Sunburn">
                                        <label class="open-que-error" for="scalpsunburn"> Sunburn</label>
                                    </div>
                                    <div class="form-group form-radio">
                                        <input type="radio" id="scalpsudden" name="Q8_answer"
                                            value="Sudden soreness/redness">
                                        <label class="open-que-error" for="scalpsudden">Sudden soreness/redness</label>
                                    </div>
                                    <div class="form-group form-radio">
                                        <input type="radio" id="scalpdandruff" name="Q8_answer" value="Dandruff">
                                        <label class="next-button" for="scalpdandruff">Dandruff</label>
                                    </div>
                                    <div class="form-group form-radio">
                                        <input type="radio" id="scalpother" name="Q8_answer" value="other">
                                        <label class="open-other-step" for="scalpother"
                                            step-id="sub-step-1">other</label>
                                    </div>
                                    <!-- other step start-->
                                    <div class="other-step" data-sub-id="sub-step-1">
                                        <div class="inner-form-group">
                                            <div class="form-group form-text-field">
                                                <textarea type="text" class="form-control" id="" value=""
                                                    name="Q8_other" placeholder="enter your text"></textarea>
                                            </div>
                                            <div class="quest-v2-btn">
                                                <a class="btn-d-black btn-wt-300 mr-20 next-button"
                                                    href="javascript:void(0)">Continue</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- other step end -->
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-trans btn-wt-170 back-sub-step"
                                            href="javascript:void(0)">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="66" id="step6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 50%;"
                                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>66%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea class="in_type" readonly="readonly" name="Q9" type="text"
                                                value="Are any of the following true?"> Are any of the following true?</textarea>
                                        </h3>
                                        <ul class="quest-v2-list pb-30 mb-30">
                                            <li>I have previously been diagnosed with breast cancer, prostate cancer, or
                                                I am currently undergoing PSA (prostate monitoring).</li>
                                            <li>I have uncontrolled low or high blood pressure.</li>
                                            <li>I am experiencing, or have previously experienced, depression, anxiety,
                                                or panic disorders.</li>
                                        </ul>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="areaf-yes" name="Q9_answer" value="Yes">
                                            <label class="open-sub-step" for="areaf-yes">Yes</label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="areaf-no" name="Q9_answer" value="No">
                                            <label class="next-button" for="areaf-no">No</label>
                                        </div>
                                        <!-- other step end -->
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button"
                                                href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-step fixed-step" id="sub-step1">
                                <div class="inner-form-group">
                                    <h3 class="quest-v2-subh mb-30">
                                        <textarea class="in_type" readonly="readonly" name="Q10" type="text"
                                            value="Have you previously been diagnosed with breast cancer, prostate cancer, or are you currently undergoing PSA (prostate monitoring)?"> Have you previously been diagnosed with breast cancer, prostate cancer, or are you currently undergoing PSA (prostate monitoring)?</textarea>
                                    </h3>
                                    <div class="form-group form-radio">
                                        <input type="radio" id="prev-diag-yes" name="Q10_answer" value="Yes">
                                        <label class="open-que-error" for="prev-diag-yes">Yes</label>
                                    </div>
                                    <div class="form-group form-radio">
                                        <input type="radio" id="prev-diag-no" name="Q10_answer" value="No">
                                        <label class="open-sub-step" for="prev-diag-no">No</label>
                                    </div>
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-trans btn-wt-170 back-sub-step"
                                            href="javascript:void(0)">Back</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-step fixed-step" id="sub-step2">
                                <div class="inner-form-group">
                                    <h3 class="quest-v2-subh mb-30">
                                        <textarea class="in_type" readonly="readonly" name="Q11" type="text"
                                            value="Are you experiencing, or have previously experienced, depression, anxiety or panic disorders?"> Are you experiencing, or have previously experienced, depression, anxiety or panic disorders?</textarea>
                                    </h3>

                                    <div class="form-group form-radio">
                                        <input type="radio" id="exper-deps-yes" name="Q11_answer" value="Yes">
                                        <label class=" open-other-step" for="exper-deps-yes"
                                            step-id="sub-step-1">Yes</label>
                                    </div>
                                    <div class="form-group form-radio">
                                        <input type="radio" id="areaf-other" name="Q11_answer" value="No">
                                        <label class=" open-other-step" for="areaf-other"
                                            step-id="sub-step-2">No</label>
                                    </div>
                                    <!-- other step start-->
                                    <div class="other-step fixed-step" data-sub-id="sub-step-1">
                                        <div class="inner-form-group">
                                            <h3 class="quest-v2-subh mb-30">
                                                <textarea class="in_type" readonly="readonly" name="Q11" type="text"
                                                    value="Patients treated with finasteride, have had reports of mood alterations including depression and although less frequently, suicidal ideation">Patients treated with finasteride, have had reports of mood alterations including depression and although less frequently, suicidal ideation</textarea>
                                            </h3>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="treatment-immed" name="Q11_answer"
                                                    value="I understand and agree to stop this treatment immediately and consult a doctor if I experience symptoms of depression, anxiety, or panic disorders.">
                                                <label class="open-sub-step" for="treatment-immed"> I understand and
                                                    agree to stop this treatment immediately and consult a doctor if I
                                                    experience symptoms of depression, anxiety, or panic disorders.
                                                </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="currently-stable" name="Q11_answer"
                                                    value="I am not currently stable or don't want to proceed with Finasteride.">
                                                <label class="open-que-error" for="currently-stable">I am not currently
                                                    stable or don't want to proceed with Finasteride.</label>
                                            </div>
                                            <div class="quest-v2-btn">
                                                <a class="btn-d-trans btn-wt-170 back-sub-step"
                                                    href="javascript:void(0)">Back</a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="other-step fixed-step" data-sub-id="sub-step-2">
                                        <div class="inner-form-group">
                                            <h3 class="quest-v2-subh mb-30">
                                                <textarea class="in_type" readonly="readonly" name="Q12" type="text"
                                                    value="Do you have uncontrolled low or high blood pressure?"> Do you have uncontrolled low or high blood pressure?</textarea>
                                            </h3>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="uncont-bloodp-no" name="Q12_answer" value="No">
                                                <label class="next-button" for="uncont-bloodp-no">No</label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="uncont-bloodp-yes" name="Q12_answer"
                                                    value="Yes">
                                                <label class="open-que-error" for="uncont-bloodp-yes">Yes</label>
                                            </div>
                                            <div class="quest-v2-btn">
                                                <a class="btn-d-trans btn-wt-170 back-sub-step"
                                                    href="javascript:void(0)">Back</a>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- other step end -->

                                    <div class="quest-v2-btn">
                                        <a class="btn-d-trans btn-wt-170 back-sub-step"
                                            href="javascript:void(0)">Back</a>
                                    </div>

                                </div>
                            </div>
                            <!-- <div class="sub-step fixed-step" id="sub-step3">
                                <div class="inner-form-group">
                                    <h3 class="quest-v2-subh mb-30">
                                        <textarea class="in_type" readonly="readonly" name="Q12" type="text"
                                            value="Do you have uncontrolled low or high blood pressure?"> Do you have uncontrolled low or high blood pressure?</textarea>
                                    </h3>

                                    <div class="form-group form-radio">
                                        <input type="radio" id="uncont-bloodp-no" name="Q12_answer" value="No">
                                        <label class="next-button" for="uncont-bloodp-no">No</label>
                                    </div>
                                    <div class="form-group form-radio">
                                        <input type="radio" id="uncont-bloodp-yes" name="Q12_answer" value="Yes">
                                        <label class="open-que-error" for="uncont-bloodp-yes">Yes</label>
                                    </div>
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-trans btn-wt-170 back-sub-step"
                                            href="javascript:void(0)">Back</a>
                                    </div>

                                </div>
                            </div> -->
                        </div>
                        <!-- 7th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="70" id="step7">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 65%;"
                                                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>80%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea class="in_type" readonly="readonly" name="Q13" type="text"
                                                value="Do you have any of the following problems?">Do you have any of the following problems?</textarea>
                                            <!-- <input class="in_type" readonly="readonly"  name=" Do you have any of the following problems?"  type="text" value=" Do you have any of the following problems?">  -->
                                        </h3>
                                        <ul class="quest-v2-list pb-30 mb-30">
                                            <li>Significant or Chronic Kidney Disease</li>
                                            <li>Phaeochromocytoma</li>
                                            <li>Heart attack, stroke, or mini-stroke within the last 6 months</li>
                                            <li>Chest pain symptoms or any heart rhythm issues</li>
                                            <li>Heart valve problems</li>
                                            <li>Disease of the heart muscles</li>
                                            <li>Get breathless or have chest pain with light exertion, such as walking
                                                briskly for 20 minutes or climbing two flights of stairs </li>
                                        </ul>

                                        <div class="form-group form-radio">
                                            <input type="radio" id="anyf-prob-yes" name="Q13_answer" value="Yes">
                                            <label class="open-que-error" for="anyf-prob-yes">Yes</label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="anyf-prob-no" name="Q13_answer" value="No">
                                            <label class="next-button" for="anyf-prob-no">No</label>
                                        </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button"
                                                href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 8th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="80" id="step8">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-2step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 85%;"
                                                    aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>90%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea class="in_type" readonly="readonly" name="Q14" type="text"
                                                value="Do you have any intolerances/allergies to the following?">Do you have any intolerances/allergies to the following? </textarea>
                                            <!-- <input class="in_type" readonly="readonly"  name="Do you have any intolerances/allergies to the following? "  type="text" value="Do you have any intolerances/allergies to the following? ">  -->
                                        </h3>

                                        <div class="form-group form-radio">
                                            <input type="radio" id="lactosehl" name="Q14_answer" value="Lactose">
                                            <label class="open-sub-step" for="lactosehl">Lactose</label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="minoxidilhl" name="Q14_answer" value="Minoxidil">
                                            <label class="next-button" for="minoxidilhl">Minoxidil</label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="finasteridehl" name="Q14_answer"
                                                value="Finasteride">
                                            <label class="next-button" for="finasteridehl">Finasteride</label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="None1" name="Q14_answer" value="None">
                                            <label class="next-button" for="None1">None</label>
                                        </div>

                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button"
                                                href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-step fixed-step" id="sub-step1">
                                <div class="inner-form-group">
                                    <h3 class="quest-v2-subh mb-30">
                                        <textarea class="in_type" readonly="readonly" name="Q15" type="text"
                                            value="If we recommend a tablet medication in your plan it can contain very small amounts of lactose. If you have previously taken most tablet formulations without causing any symptoms then it is unlikely that you will get undesirable effects from the lactose within our tablets. Are you okay to proceed?">If we recommend a tablet medication in your plan it can contain very small amounts of lactose. If you have previously taken most tablet formulations without causing any symptoms then it is unlikely that you will get undesirable effects from the lactose within our tablets. Are you okay to proceed?</textarea>
                                    </h3>

                                    <div class="form-group form-radio">
                                        <input type="radio" id="into-allerg-yes" name="Q15_answer" value="Yes">
                                        <label class="next-button" for="into-allerg-yes">Yes</label>
                                    </div>
                                    <div class="form-group form-radio">
                                        <input type="radio" id="into-allerg-no" name="Q15_answer" value="No">
                                        <label class="next-button" for="into-allerg-no">No</label>
                                    </div>
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-trans btn-wt-170 back-sub-step"
                                            href="javascript:void(0)">Back</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- 9th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="90" id="step9">
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
                                            <textarea class="in_type" readonly="readonly" name="Q16" type="text"
                                                value="Please Inform Us About Any Major Illnesses, Ongoing Medical Conditions, Medications (Prescribed Or Over-The-Counter) You Take, Allergies To Medication, Or Surgeries. This Information Is Necessary For Our Clinicians To Ensure The Prescribed Treatment Is Safe For You.">Please Inform Us About Any Major Illnesses, Ongoing Medical Conditions, Medications (Prescribed Or Over-The-Counter) You Take, Allergies To Medication, Or Surgeries. This Information Is Necessary For Our Clinicians To Ensure The Prescribed Treatment Is Safe For You.</textarea>
                                            <!-- <input class="in_type" readonly="readonly"  name=" It's really important to tell us about:"  type="text" value=" It's really important to tell us about:">  -->
                                        </h3>
                                        <!-- <ul class="quest-v2-list pb-30 mb-30">
                                            <li>Major illnesses</li>
                                            <li>Ongoing medical conditions</li>
                                            <li>Any medication prescribed or over the counter that you take</li>
                                            <li>Allergies to medication</li>
                                            <li>Operations</li>
                                        </ul> -->

                                        <div class="form-group form-radio">
                                            <input type="radio" id="relyimpohl-yes" name="Q16_answer" value="Yes">
                                            <label class="next-button" for="relyimpohl-yes">I have a major illness, ongoing medical condition, allergy to medication, or take prescribed or over-the-counter medication to inform you about.</label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="relyimpohl-no" name="Q16_answer" value="No">
                                            <label class="next-button" for="relyimpohl-no">I do not have a major illness, ongoing medical condition, operation, allergy to medication, or take prescribed or over-the-counter medication to inform you about.</label>
                                        </div>

                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button"
                                                href="javascript:void(0)">Back</a>
                                            <!-- <button class="btn-d-black" type="submit" id="relyimpohl-btn" name="" value="btn">continue</button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="sub-step fixed-step" id="sub-step1">
                                <div class="inner-form-group">
                                    <h3 class="quest-v2-subh mb-30">
                                        <textarea class="in_type" readonly="readonly" name="Q17" type="text"
                                            value="ongoing medical conditions">Please Inform Us About Any Major Illnesses, Ongoing Medical Conditions, Medications (Prescribed Or Over-The-Counter) You Take, Allergies To Medication, Or Surgeries. This Information Is Necessary For Our Clinicians To Ensure The Prescribed Treatment Is Safe For You.”</textarea>
                                    </h3>

                                    <div class="form-group form-radio">
                                        <input type="radio" id="prescribed-1" name="Q17_answer"
                                            value="I have a major illness, ongoing medical condition, allergy to medication, or take prescribed or over-the-counter medication to inform you about.">
                                        <label class="next-button" for="prescribed-1">I have a major illness, ongoing
                                            medical condition, allergy to medication, or take prescribed or
                                            over-the-counter medication to inform you about.</label>
                                    </div>
                                    <div class="form-group form-radio">
                                        <input type="radio" id="prescribed-2" name="Q17_answer"
                                            value="I do not have a major illness, ongoing medical condition, operation, allergy to medication, or take prescribed or over-the-counter medication to inform you about.">
                                        <label class="next-button" for="prescribed-2"> I do not have a major illness,
                                            ongoing medical condition, operation, allergy to medication, or take
                                            prescribed or over-the-counter medication to inform you about.</label>
                                    </div>
                                    <div class="quest-v2-btn">


                                        <a class="btn-d-trans btn-wt-170 back-sub-step"
                                            href="javascript:void(0)">Back</a>
                                    </div>

                                </div>
                            </div> -->
                        </div>

                        <div class="quest-v2-step data-progress d-none" data-progress="100" id="step10">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 100%;"
                                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>71%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea class="in_type" readonly="readonly" type="text" name="Q20"
                                                value="Would you like us to inform your GP about your treatment?">Would you like us to inform your GP about your treatment?</textarea>
                                            <!-- <input class="in_type" readonly="readonly"  type="text" name="Would you like us to inform your GP about your treatment?" value="Would you like us to inform your GP about your treatment?">   -->
                                        </h3>

                                        <div class="form-group form-radio">
                                            <input type="radio" id="GP-per-1" name="Q20_answer" value="Yes">
                                            <label class="open-sub-step" for="GP-per-1">Yes </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="GP-per-2" name="Q20_answer" value="No">
                                            <!-- <button type="submit" id="GP-per-2" name="Q20_answer">No</button> -->
                                            <label class="next-button" for="GP-per-2">No</label>
                                        </div>

                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button"
                                                href="javascript:void(0)">Back</a>
                                            <!-- <button class="btn-d-black" type="submit" id="GP-per-2" name="">continue</button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-step fixed-step" id="sub-step1">
                                <div class="inner-form-group">
                                    <h3 class="quest-v2-subh mb-30">
                                        <textarea class="in_type" readonly="readonly" type="text" name="Q21"
                                            value="Please provide your GP's name and address.">Please provide your GP's name and address.</textarea>
                                    </h3>
                                    <div class="form-group form-text-field">
                                        <textarea type="text" class="form-control" name="Q21_answer"
                                            placeholder="enter your text"></textarea>
                                    </div>
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-black btn-wt-300 mr-20 next-button"
                                            href="javascript:void(0)">Continue</a>
                                        <a class="btn-d-trans btn-wt-170  back-sub-step"
                                            href="javascript:void(0)">Back</a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="quest-v2-step d-none" id="step11">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="v2-1step-cont">
                                        <h4 class="weare-going-con mb-20">Final Acknowledgment: </h4>
                                        <p class="mb-30">Thank you for answering questions about your health and experiences with hair loss. Your responses will assist our licensed clinicians in determining if a prescription for hair loss
                                            treatment could be appropriate for you. They will promptly review your answers and get back to you with suitable suggestions.</p>
                                        <h3 class="list-heading mb-30">Before Submitting Your Answers, Please
                                            Acknowledge The Following:</h3>
                                        <ul class="quest-v2-list pb-30 mb-20">
                                            <li>You Are The Sole User Of Any Medication Provided Through This Service.
                                            </li>
                                            <li>You Have Provided Truthful Answers To The Best Of Your Knowledge.</li>
                                            <li>You Are Aware That Minoxidil 5% Solution And Combined Minoxidil 5% With 0.1% Finasteride Solution Are Prescribed As Unlicensed Products.</li>
                                            <li>You Were Assigned Male At Birth.</li>
                                            <li>You Have Disclosed Any Serious Illnesses Or Operations You Have Had.</li>
                                            <li>You Have Disclosed Any Prescription Medication You Currently Take.</li>
                                            <li>You Will Only Use The Recommended Method Of Hair Loss Treatment And Not Combine More Than One Different Medication For This Condition.</li>
                                            <li>You Are Aware That You Should Not Take Finasteride If You’re Trying For A Baby.</li>
                                            <li>You Accept Our Terms & Conditions, Privacy Policy, And Terms Of Sale.
                                            </li>
                                            <li>You Currently Live In The UK.</li>
                                            <li>You Are Using This Service Of Your Own Free Will.</li>
                                            <li>Will Read all patient information leaflets available</li>
                                            <li>You Agree To The Terms Of Service, Terms Of Subscription, And Privacy Policy.</li>
                                        </ul>
                                        <ul class="quest-lfc-btn desktop-none">
                                            <li><a href="javascript:void(0)">
                                                    <img src="{{asset('frontend_new/images/licensed.png')}}" alt="backed">
                                                    Licensed & Registered Medication
                                                </a></li>
                                            <li><a href="javascript:void(0)">
                                                    <img src="{{asset('frontend_new/images/lock.png')}}" alt="backed">
                                                    Free & Discreet 24 Hour Shipping
                                                </a></li>
                                            <li><a href="javascript:void(0)">
                                                    <img src="{{asset('frontend_new/images/delete.png')}}" alt="backed">
                                                    Pause or Cancel Anytime
                                                </a></li>
                                        </ul>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button"
                                                href="javascript:void(0)">Back</a>
                                            <button class="btn-d-black" type="submit" id="relyimpohl-btn" name=""
                                                value="btn">continue</button>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <ul class="quest-lfc-btn phone-none">
                                        <li><a href="javascript:void(0)">
                                                <img src="{{asset('frontend_new/images/licensed.png')}}" alt="backed">
                                                Licensed & Registered Medication
                                            </a></li>
                                        <li><a href="javascript:void(0)">
                                                <img src="{{asset('frontend_new/images/lock.png')}}" alt="backed">
                                                Free & Discreet 24 Hour Shipping
                                            </a></li>
                                        <li><a href="javascript:void(0)">
                                                <img src="{{asset('frontend_new/images/delete.png')}}" alt="backed">
                                                Pause or Cancel Anytime
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </form>
                    <!-- 10th step end -->

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
                                            <p>No recommended treatment. Based on your answers, there is no treatment
                                                suitable for you. If you think you have made an error in your responses,
                                                please click below to review your answers.</p>
                                            <p><b>Did you make a mistake?</b> Providing false information can lead to
                                                serious harm to your
                                                health.</p>
                                            <div class="form-group form-check mb-30 pb-2">
                                                <input id="check" class="form-check-input" type="checkbox"
                                                    name="terms-and-services" required>
                                                <label class="form-check-label m-0" for="terms-and-services">
                                                    I agree only to provide accurate answers
                                                </label>
                                            </div>
                                            <button type="button" id="btncheck" class="btn-d-black close-que-modal"
                                                data-bs-dismiss="modal">Review your answers</button>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="js/custom.js"></script> -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>
        $(function(){
            $('.d-none').removeClass('d-none');
        })
    </script>


</body>

</html>

<!-- script for the popup -->
<script>
$('#check').change(function() {
    $('#btncheck').prop("disabled", !this.checked);
}).change()
</script>



<!-- saving questionnair -->
<!-- <script>
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
</script>   -->
