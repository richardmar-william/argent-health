{{--
@extends('layouts.app')
@section('title', 'Questionnaire')
--}}
@section('content')

<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="language" content="en" />
    <meta name="country" content="us" />
    <meta name="robots" content="INDEX, FOLLOW" />
    <title>Premature Ejaculation | Questionnaire | Agent</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Yeseva+One&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <link rel="stylesheet" href="{{ asset('css/quest-v2.css') }}">

    <link rel="stylesheet" href="{{ asset('css/quest-v2-respsv.css') }}">
    <link rel="stylesheet" href="{{ asset('css/quest-v2.1.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/questionnaire/premature.css') }}">
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

<body style="background-color: #f2f2f2;">

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
    if(Session::has('premature_ejaculation')){
    $sessionId = Session::get('premature_ejaculation');
    } else {
    $randomString = Str::random(40);
    Session::put('premature_ejaculation', $randomString);
    $sessionId = Session::get('premature_ejaculation');
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
            <div class="main-container container-fluid">
                <main class="quest-v2-inner-wrap">
                    <form id="" action="{{ route('cart_product') }}" method="POST">
                        @csrf
                        <input type="hidden" name="category_id" value="33">
                        <input type="hidden" name="session_id" value="{{ $sessionId }}">

                        <!-- 1st step -->
                        <div class="quest-v2-step data-progress" data-progress="0" id="step1">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 0%;"
                                                aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="v2-2step-cont">
                                        <div class="row">
                                            <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                                <h3 class="quest-v2-subh mb-30">
                                                    <textarea class="in_type" readonly="readonly" type="text" name="Q1"
                                                        value="Kindly Tell Us Your Age">Kindly Tell Us Your Age</textarea>
                                                    <!-- <input class="in_type" readonly="readonly"  type="text" name="Kindly Tell Us Your Age" id="Kindly_Tell_Us_Your_Age" value="Kindly Tell Us Your Age">   -->
                                                </h3>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button"
                                                    href="{{ url('/shop/premature-ejaculation') }}"><span>Back</span><i class="ti-arrow-left quetions-icon"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-12">
                                                <div class="quest-progress-bar mobile">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 0%;" aria-valuenow="0" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quest-v2-quest col-md-5 col-sm-12">
                                                <div class="form-group form-radio ">
                                                    <input type="radio" id="verify1" name="Q1_answer" value="Under 18">
                                                    <label class="open-que-error" for="verify1">Under 18 </label>
                                                </div>
                                                <div class="form-group form-radio ">
                                                    <input type="radio" id="verify2" name="Q1_answer" value="18-25">
                                                    <label class="next-button" for="verify2"> 18-25 </label>
                                                </div>
                                                <div class="form-group form-radio ">
                                                    <input type="radio" id="verify3" name="Q1_answer" value="26-64">
                                                    <label class="next-button" for="verify3">26-64 </label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="verify4" name="Q1_answer" value="65 or above">
                                                    <label class="next-button" for="verify4"> 65 or above </label>
                                                </div>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button mobile"
                                                        href="{{ url('/shop/premature-ejaculation') }}">Back</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 2nd step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="8" id="step2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 7%;"
                                                aria-valuenow="7" aria-valuemin="0" aria-valuemax="70"></div>
                                        </div>
                                    </div>
                                    <div class="v2-3step-cont">
                                        <div class="row">
                                            <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                                <h3 class="quest-v2-subh mb-30">
                                                    <textarea class="in_type" readonly="readonly" type="text" name="Q2"
                                                        value="Could you specify the duration for which you've been experiencing premature ejaculation?">Could you specify the duration for which you've been experiencing premature ejaculation?</textarea>
                                                    <!-- <input class="in_type" readonly="readonly"  type="text" name="Could you specify the duration for which you've been experiencing premature ejaculation?" value="Could you specify the duration for which you've been experiencing premature ejaculation?">   -->
                                                </h3>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button"
                                                        href="javascript:void(0)"><span>Back</span><i class="ti-arrow-left quetions-icon"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-12">
                                                <div class="quest-progress-bar mobile">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 7%;" aria-valuenow="7" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quest-v2-quest col-md-5 col-sm-12">
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="expe-pre-1" name="Q2_answer"
                                                        value="From my first sexual encounter">
                                                    <label class="next-button" for="expe-pre-1">From my first sexual encounter
                                                    </label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="expe-pre-2" name="Q2_answer"
                                                        value="More than 6 months">
                                                    <label class="next-button" for="expe-pre-2">More than 6 months </label>
                                                </div>
                                                <div class="form-group form-radio ">
                                                    <input type="radio" id="expe-pre-3" name="Q2_answer"
                                                        value="Less than 6 months">
                                                    <label class="next-button" for="expe-pre-3">Less than 6 months </label>
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
                        <div class="quest-v2-step data-progress d-none" data-progress="16" id="step3">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 13%;"
                                                aria-valuenow="13" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="v2-3step-cont">
                                        <div class="row">
                                            <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                                <h3 class="quest-v2-subh mb-30">
                                                    <textarea class="in_type" readonly="readonly" type="text" name="Q3"
                                                        value="How regularly does premature ejaculation affect you?">How regularly does premature ejaculation affect you?</textarea>
                                                    <!-- <input class="in_type" readonly="readonly"  type="text" name="How regularly does premature ejaculation affect you?" value="How regularly does premature ejaculation affect you?">   -->
                                                </h3>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button"
                                                        href="javascript:void(0)"><span>Back</span><i class="ti-arrow-left quetions-icon"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-12">
                                                <div class="quest-progress-bar mobile">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 13%;" aria-valuenow="13" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quest-v2-quest col-md-5 col-sm-12">
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="pre-ejacu-1" name="Q3_answer"
                                                        value="Every time I engage in sexual activity">
                                                    <label class="next-button" for="pre-ejacu-1">Every time I engage in sexual
                                                        activity </label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="pre-ejacu-2" name="Q3_answer"
                                                        value="More than half the times I engage in sexual activity">
                                                    <label class="next-button" for="pre-ejacu-2">More than half the times I
                                                        engage in sexual activity </label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="pre-ejacu-3" name="Q3_answer"
                                                        value="Less than half the time during sexual activity">
                                                    <label class="next-button" for="pre-ejacu-3">Less than half the time during
                                                        sexual activity </label>
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
                        <div class="quest-v2-step data-progress d-none" data-progress="25" id="step4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 18%;"
                                                aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="v2-3step-cont">
                                        <div class="row">
                                            <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                                <h3 class="quest-v2-subh mb-30">
                                                    <textarea class="in_type" readonly="readonly" type="text" name="Q4"
                                                        value="How soon after penetration do you typically ejaculate?">How soon after penetration do you typically ejaculate?</textarea>
                                                    <!-- <input class="in_type" readonly="readonly"  type="text" name="How soon after penetration do you typically ejaculate?" value="How soon after penetration do you typically ejaculate?"> -->
                                                </h3>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button"
                                                        href="javascript:void(0)"><span>Back</span><i class="ti-arrow-left quetions-icon"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-12">
                                                <div class="quest-progress-bar mobile">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 18%;" aria-valuenow="18" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quest-v2-quest col-md-5 col-sm-12">
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="typ-ejacu-1" name="Q4_answer"
                                                        value="Less than 2 minutes">
                                                    <label class="next-button" for="typ-ejacu-1">Less than 2 minutes </label>
                                                </div>
                                                <div class="form-group form-radio ">
                                                    <input type="radio" id="typ-ejacu-2" name="Q4_answer"
                                                        value="Between 2 and 5 minutes">
                                                    <label class="next-button" for="typ-ejacu-2">Between 2 and 5 minutes
                                                    </label>
                                                </div>
                                                <div class="form-group form-radio ">
                                                    <input type="radio" id="typ-ejacu-3" name="Q4_answer"
                                                        value="Between 5 and 10 minutes">
                                                    <label class="next-button" for="typ-ejacu-3">Between 5 and 10 minutes
                                                    </label>
                                                </div>
                                                <div class="form-group form-radio ">
                                                    <input type="radio" id="typ-ejacu-4" name="Q4_answer"
                                                        value="10 minutes and above">
                                                    <label class="next-button" for="typ-ejacu-4">10 minutes and above </label>
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
                        <div class="quest-v2-step data-progress d-none" data-progress="33" id="step5">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="v2-3step-cont">
                                        <div class="row">
                                            <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                                <h3 class="quest-v2-subh mb-30">
                                                    <textarea class="in_type" readonly="readonly" type="text" name="Q5"
                                                        value="Would you say you have control over when you ejaculate?">Would you say you have control over when you ejaculate?</textarea>
                                                    <!-- <input class="in_type" readonly="readonly"  type="text" name="Would you say you have control over when you ejaculate? " value="Would you say you have control over when you ejaculate? "> -->
                                                </h3>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button"
                                                        href="javascript:void(0)"><span>Back</span><i class="ti-arrow-left quetions-icon"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-12">
                                                <div class="quest-progress-bar mobile">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quest-v2-quest col-md-5 col-sm-12">
                                                <div class="form-group form-radio ">
                                                    <input type="radio" id="control-ejacu-1" name="Q5_answer"
                                                        value="Yes, I can control when I ejaculate">
                                                    <label class="next-button" for="control-ejacu-1"> Yes, I can control when I
                                                        ejaculate </label>
                                                </div>
                                                <div class="form-group form-radio ">
                                                    <input type="radio" id="control-ejacu-2" name="Q5_answer"
                                                        value="I can control when I ejaculate sometimes">
                                                    <label class="next-button" for="control-ejacu-2"> I can control when I
                                                        ejaculate sometimes </label>
                                                </div>
                                                <div class="form-group form-radio ">
                                                    <input type="radio" id="control-ejacu-3" name="Q5_answer"
                                                        value="No, I cannot control when I ejaculate">
                                                    <label class="next-button" for="control-ejacu-3"> No, I cannot control when
                                                        I ejaculate </label>
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
                        <!-- 6th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="41" id="step6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 30%;"
                                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="v2-3step-cont">
                                        <div class="row">
                                            <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                                <h3 class="quest-v2-subh mb-30">
                                                    <textarea class="in_type" readonly="readonly" type="text" name="Q6"
                                                        value="Has premature ejaculation caused distress or difficulties in your sexual relationships?">Has premature ejaculation caused distress or difficulties in your sexual relationships?
                                                        </textarea>
                                                    <!-- <input class="in_type" readonly="readonly"  type="text" name="Has premature ejaculation caused distress or difficulties in your sexual relationships?" value="Has premature ejaculation caused distress or difficulties in your sexual relationships?">   -->
                                                </h3>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button"
                                                        href="javascript:void(0)"><span>Back</span><i class="ti-arrow-left quetions-icon"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-12">
                                                <div class="quest-progress-bar mobile">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 30%;" aria-valuenow="30" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quest-v2-quest col-md-5 col-sm-12">
                                                <div class="form-group form-radio ">
                                                    <input type="radio" id=" sexual-yes-1" name="Q6_answer" value="Yes">
                                                    <label class="next-button" for=" sexual-yes-1">Yes</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="sexual-no-2" name="Q6_answer" value="No">
                                                    <label class="next-button" for="sexual-no-2">No</label>
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
                        <!-- 7th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="49" id="step7">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 38%;"
                                                aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="v2-3step-cont">
                                        <div class="row">
                                            <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                                <h3 class="quest-v2-subh mb-30">
                                                    <textarea class="in_type" readonly="readonly" type="text" name="Q7"
                                                        value="Have you previously tried any medication for premature ejaculation such as Paroxetine 20mg, Dapoxetine 30mg,Dapoxetine 60mg, Delay spray, Delay wipes, or any other treatment?">Have you previously tried any medication for premature ejaculation such as Paroxetine 20mg, Dapoxetine 30mg,Dapoxetine 60mg, Delay spray, Delay wipes, or any other treatment?</textarea>
                                                    <!-- <textarea class="in_type" readonly="readonly"  type="text" name="Q7" value="Have you previously tried any medication for premature ejaculation such as Paroxetine 20mg, Dapoxetine 30mg,Dapoxetine 60mg, Delay spray, Delay wipes, or any other treatment?">Have you previously tried any medication for premature ejaculation such as Paroxetine 20mg, Dapoxetine 30mg,Dapoxetine 60mg, Delay spray, Delay wipes, or any other treatment?</textarea> -->
                                                    <!-- <input class="in_type" readonly="readonly"  type="text" name="Have you previously tried any medication for premature ejaculation such as Paroxetine 20mg, Dapoxetine 30mg,
                                                        Dapoxetine 60mg, Delay spray, Delay wipes, or any other treatment?" value="Have you previously tried any medication for premature ejaculation such as Paroxetine 20mg, Dapoxetine 30mg,
                                                        Dapoxetine 60mg, Delay spray, Delay wipes, or any other treatment?">   -->

                                                </h3>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button"
                                                        href="javascript:void(0)"><span>Back</span><i class="ti-arrow-left quetions-icon"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-12">
                                                <div class="quest-progress-bar mobile">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 38%;" aria-valuenow="38" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quest-v2-quest col-md-5 col-sm-12">
                                                <div class="form-group form-radio ">
                                                    <input type="radio" id=" treatment-yes-1" name="Q7_answer" value="Yes">
                                                    <label class="open-sub-step" for=" treatment-yes-1">Yes/ other </label>
                                                </div>
                                                <div class="form-group form-radio ">
                                                    <input type="radio" id="treatment-no-2" name="Q7_answer" value="No">
                                                    <label class="next-button" for="treatment-no-2">No</label>
                                                </div>
                                                <!-- </form> -->
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
                                                <textarea class="in_type" readonly="readonly" type="text" name="Q8"
                                                    value="We appreciate you sharing your past experiences with premature ejaculation treatment. Could you please provide more details about the type of treatment you underwent, how long you were on it,and how it impacted you? Were there any side effects? This information will help us understand your situation better and offer the most suitable treatment.">We appreciate you sharing your past experiences with premature ejaculation treatment. Could you please provide more details about the type of treatment you underwent, how long you were on it,and how it impacted you? Were there any side effects? This information will help us understand your situation better and offer the most suitable treatment.</textarea>
                                                <!-- <input class="in_type" readonly="readonly"  type="text" name="We appreciate you sharing your past experiences with premature ejaculation treatment. Could you please provide more details about the type of treatment you underwent, how long you were on it,
                                                and how it impacted you? Were there any side effects? This information will help us understand your situation better and offer the most suitable treatment." value="We appreciate you sharing your past experiences with premature ejaculation treatment. Could you please provide more details about the type of treatment you underwent, how long you were on it,
                                                and how it impacted you? Were there any side effects? This information will help us understand your situation better and offer the most suitable treatment.">  -->

                                            </h3>
                                        </div>
                                        <div class="col-md-1 col-sm-12">
                                        </div>
                                        <div class="quest-v2-quest col-md-5 col-sm-12">
                                            <div class="form-group form-text-field">
                                                <textarea type="text" class="form-control" id="" value=""
                                                    name="Q8_answer" placeholder="enter your text" ></textarea>
                                            </div>
                                            <div class="quest-v2-btn d-flex flex-row">
                                                <a class="btn-d-black btn-wt-300 mr-20 open-sub-step"
                                                    href="javascript:void(0)">Continue</a>
                                                <a class="btn-d-black btn-wt-170 back-sub-step"
                                                    href="javascript:void(0)">Back</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-step fixed-step" id="sub-step2">
                                <div class="inner-form-group">
                                    <div class="row">
                                        <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                            <h3 class="quest-v2-subh mb-30">
                                                <textarea class="in_type" readonly="readonly" type="text" name="Q9"
                                                    value="It's important to note that taking multiple medications for premature ejaculation at the same time may lead to undesirable effects, such as lower blood pressure, headaches, dizziness, blurred vision, confusion, fainting, and feeling sick">It's important to note that taking multiple medications for premature ejaculation at the same time may lead to undesirable effects, such as lower blood pressure, headaches, dizziness, blurred vision, confusion, fainting, and feeling sick.</textarea>
                                                <!-- <input class="in_type" readonly="readonly"  type="text" name="It's important to note that taking multiple medications for premature ejaculation at the same time may lead to undesirable effects, such as lower blood pressure, headaches, dizziness, blurred vision, confusion, fainting, and feeling sick" value="It's important to note that taking multiple medications for premature ejaculation at the same time  may lead to undesirable effects, such as lower blood pressure, headaches, dizziness, blurred vision, confusion, fainting, and feeling sick"> -->

                                            </h3>
                                        </div>
                                        <div class="col-md-1 col-sm-12  mt-2">
                                        </div>
                                        <div class="quest-v2-quest col-md-5 col-sm-12">
                                            <div class="form-group form-radio ">
                                                <input type="radio" id=" time-1" name="Q9_answer" value="I Confirm">
                                                <label class="next-button" for=" time-1">I Confirm </label>
                                            </div>
                                            <div class="form-group form-radio  ">
                                                <input type="radio" id=" time-2" name="Q9_answer" value="I Do Not Confirm">
                                                <label class="open-que-error" for=" time-2">I Do Not Confirm </label>
                                            </div>
                                            <div class="quest-v2-btn d-flex">
                                                <a class="btn-d-black btn-wt-170 back-sub-step"
                                                    href="javascript:void(0)">Back</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 8th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="57" id="step8">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 47%;"
                                                aria-valuenow="47" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="v2-3step-cont">
                                        <div class="row">
                                            <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                                <h3 class="quest-v2-subh mb-30">
                                                    <textarea class="in_type" readonly="readonly" type="text" name="Q10"
                                                        value="Are you always able to achieve and maintain an erection when you desire?">Are you always able to achieve and maintain an erection when you desire?</textarea>
                                                    <!-- <input class="in_type" readonly="readonly"  type="text" name="Are you always able to achieve and maintain an erection when you desire?" value="Are you always able to achieve and maintain an erection when you desire?">   -->
                                                </h3>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button"
                                                        href="javascript:void(0)"><span>Back</span><i class="ti-arrow-left quetions-icon"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-12">
                                                <div class="quest-progress-bar mobile">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 47%;" aria-valuenow="47" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quest-v2-quest col-md-5 col-sm-12">
                                                <div class="form-group form-radio  ">
                                                    <input type="radio" id=" ach-yes-1" name="Q10_answer" value="Yes">
                                                    <label class="next-button" for=" ach-yes-1">Yes</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id=" ach-no-2" name="Q10_answer" value="No">
                                                    <label class="open-sub-step" for=" ach-no-2">No</label>
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
                                                <textarea class="in_type" readonly="readonly" type="text" name="Q11"
                                                    value="Are you currently under any treatment for erectile dysfunction?">Are you currently under any treatment for erectile dysfunction? </textarea>
                                                <!-- <input class="in_type" readonly="readonly"  type="text" name=" Are you currently under any treatment for erectile dysfunction? " value=" Are you currently under any treatment for erectile dysfunction? ">   -->
                                            </h3>
                                        </div>
                                        <div class="col-md-1 col-sm-12 mt-2">
                                        </div>
                                        <div class="quest-v2-quest col-md-5 col-sm-12">
                                            <div class="form-group form-radio">
                                                <input type="radio" id="treat-dysfunct-1" name="Q11_answer" value="Yes">
                                                <label class="open-sub-step" for="treat-dysfunct-1">Yes</label>
                                            </div>
                                            <div class="form-group form-radio ">
                                                <input type="radio" id="treat-dysfunct-2" name="Q11_answer" value="No">
                                                <label class="next-button" for="treat-dysfunct-2">No</label>
                                            </div>
                                            <div class="quest-v2-btn d-flex">
                                                <a class="btn-d-black btn-wt-170 back-sub-step"
                                                    href="javascript:void(0)">Back</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-step fixed-step" id="sub-step2">
                                <div class="inner-form-group">
                                    <div class="row">
                                        <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                            <h3 class="quest-v2-subh mb-30">
                                                <textarea class="in_type" readonly="readonly" type="text" name="Q12"
                                                    value="Please specify your current medication for erectile dysfunction:">Please specify your current medication for erectile dysfunction:</textarea>
                                                <!-- <input class="in_type" readonly="readonly"  type="text" name="Please specify your current medication for erectile dysfunction:" value="Kindly Tell Us Your AgePlease specify your current medication for erectile dysfunction:"> -->
                                            </h3>
                                        </div>
                                        <div class="col-md-1 col-sm-12 mt-2">
                                        </div>
                                        <div class="quest-v2-quest col-md-5 col-sm-12">
                                            <div class="form-group form-radio">
                                                <input type="radio" id="erectile-dysfunc-1" name="Q12_answer"
                                                    value="Tadalafil (Cialis or generic)">
                                                <label class="open-sub-step" for="erectile-dysfunc-1">Tadalafil (Cialis or
                                                    generic)</label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="erectile-dysfunc-2" name="Q12_answer"
                                                    value="Sildenafil (Viagra or generic)">
                                                <label class="open-sub-step" for="erectile-dysfunc-2"> Sildenafil (Viagra or
                                                    generic)</label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="erectile-dysfunc-3" name="Q12_answer"
                                                    value="Vardenafil (Levitra or generic)">
                                                <label class="open-sub-step" for="erectile-dysfunc-3"> Vardenafil (Levitra or
                                                    generic)</label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="erectile-dysfunc-4" name="Q12_answer"
                                                    value="Avanafil (Stendra or generic)">
                                                <label class="open-sub-step" for="erectile-dysfunc-4"> Avanafil (Stendra or
                                                    generic) </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="erectile-dysfunc-5" name="Q12_answer" value="other">
                                                <label class="open-other-step" for="erectile-dysfunc-5"
                                                    step-id="sub-step-1">other</label>
                                            </div>
                                            <!-- other step start-->
                                            <div class="other-step" data-sub-id="sub-step-1">
                                                <div class="inner-form-group">
                                                    <div class="form-group form-text-field">
                                                        <!-- <input type="text" class="form-control" name="Q14_other" id="" value=""> -->
                                                        <textarea type="text" class="form-control" id="" value=""
                                                            name="Q12_other" placeholder="enter your text" ></textarea>
                                                    </div>
                                                    <div class="quest-v2-btn d-flex">
                                                        <a class="btn-d-black btn-wt-300 mr-20 next-button"
                                                            href="javascript:void(0)">Continue</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quest-v2-btn d-flex">
                                                <a class="btn-d-black btn-wt-170 back-sub-step"
                                                    href="javascript:void(0)">Back</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-step fixed-step" id="sub-step3">
                                <div class="inner-form-group">
                                    <div class="row">
                                        <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                            <h3 class="quest-v2-subh mb-30">
                                                <textarea class="in_type" readonly="readonly" type="text" name="Q13"
                                                    value="Taking medications or erectile dysfunction concurrently with treatments for premature ejaculation can potentially lead to lower blood pressure. Possible  side effects may include headaches, dizziness, blurred vision,  confusion, fainting, and feeling sick.">Taking medications or erectile dysfunction concurrently with treatments for premature ejaculation can potentially lead to lower blood pressure. Possible  side effects may include headaches, dizziness, blurred vision,  confusion, fainting, and feeling sick.</textarea>
                                            </h3>
                                        </div>
                                        <div class="col-md-1 col-sm-12 mt-2">
                                        </div>
                                        <div class="quest-v2-quest col-md-5 col-sm-12">
                                            <div class="form-group form-radio">
                                                <input type="radio" id="med-1" name="Q13_answer"
                                                    value="I confirm that I will not combine these medications.">
                                                <label class="next-button" for="med-1">I confirm that I will not combine these
                                                    medications. </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="med-2" name="Q13_answer" value="I cannot confirm.">
                                                <label class="open-que-error" for="med-2">I cannot confirm.</label>
                                            </div>
                                            <div class="quest-v2-btn d-flex">
                                                <a class="btn-d-black btn-wt-170 back-sub-step"
                                                    href="javascript:void(0)">Back</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 9th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="65" id="step9">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 55%;"
                                                aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="v2-2step-cont">
                                        <div class="row">
                                            <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                                <div>
                                                    <h3 class="quest-v2-subh mb-30">
                                                        <textarea class="in_type" readonly="readonly" type="text" name="Q14"
                                                            value="Do you regularly use any of the following recreational substances?">Do you regularly use any of the following recreational substances?</textarea>
                                                    </h3>
                                                    <ul class="quest-v2-list pb-30 mb-20">
                                                        <li>Ecstasy</li>
                                                        <li>LSD</li>
                                                        <li>Cocaine</li>
                                                        <li>Methamphetamine</li>
                                                        <li>Poppers</li>
                                                    </ul>
                                                </div>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button"
                                                        href="javascript:void(0)"><span>Back</span><i class="ti-arrow-left quetions-icon"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-12">
                                                <div class="quest-progress-bar mobile">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 55%;" aria-valuenow="55" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quest-v2-quest col-md-5 col-sm-12">
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="recreational-1" name="Q14_answer" value="Yes">
                                                    <label class="open-que-error" for="recreational-1"> Yes</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="recreational-2" name="Q14_answer" value="No">
                                                    <label class="next-button" for="recreational-2">No</label>
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
                        <div class="quest-v2-step data-progress d-none" data-progress="74" id="step10">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 61%;"
                                                aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="v2-3step-cont">
                                        <div class="row">
                                            <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                                <h3 class="quest-v2-subh mb-30">
                                                    <textarea class="in_type" readonly="readonly" type="text" name="Q15"
                                                        value="Do you suffer with any of the following health conditions">Do you suffer with any of the following health conditions?</textarea>
                                                </h3>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button"
                                                        href="javascript:void(0)"><span>Back</span><i class="ti-arrow-left quetions-icon"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-12">
                                                <div class="quest-progress-bar mobile">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 61%;" aria-valuenow="61" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quest-v2-quest col-md-5 col-sm-12">
                                                <div class="form-group form-radio line_bottom">
                                                    <input type="radio" id="pertain-1" name="Q15_answer"
                                                        value="None of the above apply to me">
                                                    <label class="next-button" for="pertain-1">None of these apply to me</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="pertain-2" name="Q15_answer"
                                                        value="Any heart-related problems, such as heart failure, heart valve issues, rhythm disturbances, ischemic heart disease, or peripheral vascular disease">
                                                    <label class="open-que-error" for="pertain-2">Any heart-related problems,
                                                        such as heart failure, heart valve issues, rhythm disturbances, ischemic
                                                        heart disease, or peripheral vascular disease</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="pertain-3" name="Q15_answer"
                                                        value="History of heart attack, stroke, transient ischemic attack (TIA), or mini-stroke">
                                                    <label class="open-que-error" for="pertain-3">History of heart attack,
                                                        stroke, transient ischemic attack (TIA), or mini-stroke</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="pertain-4" name="Q15_answer"
                                                        value="Unexplained instances of feeling faint or dizzy">
                                                    <label class="open-que-error" for="pertain-4">Unexplained instances of
                                                        feeling faint or dizzy</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="pertain-5" name="Q15_answer"
                                                        value="Abnormalities in heart rate or rhythm">
                                                    <label class="open-que-error" for="pertain-5">Abnormalities in heart rate or
                                                        rhythm</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="pertain6" name="Q15_answer"
                                                        value="Difficulty climbing a flight of stairs without experiencing chest pain">
                                                    <label class="open-que-error" for="pertain-6">Difficulty climbing a flight
                                                        of stairs without experiencing chest pain</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="pertain-7" name="Q15_answer"
                                                        value="Presence of mental health conditions like bipolar disorder, mania, or schizophreni">
                                                    <label class="open-que-error" for="pertain-7">Presence of mental health
                                                        conditions like bipolar disorder, mania, or schizophrenia</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="pertain-8" name="Q15_answer"
                                                        value="Blood pressure outside the normal range (below 90/50 mmHg or above 150/90 mmHg)">
                                                    <label class="open-que-error" for="pertain-8">Blood pressure outside the
                                                        normal range (below 90/50 mmHg or above 150/90 mmHg)</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="pertain-9" name="Q15_answer"
                                                        value="Current or past mental health conditions like anxiety or depression, or the use of antidepressants">
                                                    <label class="open-que-error" for="pertain-9">Current or past mental health
                                                        conditions like anxiety or depression, or the use of
                                                        antidepressants</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="pertain-10" name="Q15_answer"
                                                        value="Neurological disorders such as epilepsy, or history of fainting due to low blood pressure">
                                                    <label class="open-que-error" for="pertain-10">Neurological disorders such
                                                        as epilepsy, or history of fainting due to low blood pressure</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="pertain-11" name="Q15_answer"
                                                        value="Disorders affecting blood clotting or usage of blood thinning medications">
                                                    <label class="open-que-error" for="pertain-11">Disorders affecting blood
                                                        clotting or usage of blood thinning medications</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="pertain-12" name="Q15_answer"
                                                        value="Blood-related conditions such as Non-Hodgkin lymphoma, sickle cell anemia, or haemophilia">
                                                    <label class="open-que-error" for="pertain-12">Blood-related conditions such
                                                        as Non-Hodgkin lymphoma, sickle cell anemia, or haemophilia</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="pertain-13" name="Q15_answer"
                                                        value="Liver or kidney disorders">
                                                    <label class="open-que-error" for="pertain-13">Liver or kidney
                                                        disorders</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="pertain-14" name="Q15_answer"
                                                        value="Eye conditions like glaucoma, or susceptibility to high intraocular pressure (angle-closure glaucoma)">
                                                    <label class="open-que-error" for="pertain-14">Eye conditions like glaucoma,
                                                        or susceptibility to high intraocular pressure (angle-closure
                                                        glaucoma)</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="pertain-15" name="Q15_answer" value="pertain-15">
                                                    <label class="open-que-error" for="pertain-15">Rare inherited conditions
                                                        like galactose intolerance, Lapp lactase deficiency, or
                                                        glucose-galactose malabsorption</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="pertain-16" name="Q15_answer" value="pertain-16">
                                                    <label class="open-que-error" for="pertain-16">Hormonal disorders like
                                                        thyroid issues or hypogonadism (low testosterone levels)</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="pertain-17" name="Q15_answer"
                                                        value="Hormonal disorders like thyroid issues or hypogonadism (low testosterone levels)7">
                                                    <label class="open-que-error" for="pertain-17">Vascular disorders affecting
                                                        your arteries or veins</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="pertain-18" name="Q15_answer"
                                                        value="Specific conditions affecting the penis such as Peyronie’s disease, injury, or inability to retract foreskin">
                                                    <label class="open-que-error" for="pertain-18">Specific conditions affecting
                                                        the penis such as Peyronie’s disease, injury, or inability to retract
                                                        foreskin</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="pertain-19" name="Q15_answer"
                                                        value="Prostate conditions like prostatitis or benign prostatic hypertrophy">
                                                    <label class="open-que-error" for="pertain-19">Prostate conditions like
                                                        prostatitis or benign prostatic hypertrophy</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="pertain-20" name="Q15_answer" value="other">
                                                    <label class="open-other-step" for="pertain-20"
                                                        step-id="sub-step-1">other</label>
                                                </div>
                                                <!-- other step start-->
                                                <div class="other-step" data-sub-id="sub-step-1">
                                                    <div class="inner-form-group">
                                                        <div class="form-group form-text-field">
                                                            <textarea type="text" class="form-control" id="" value=""
                                                                name="Q15_other" placeholder="enter your text" ></textarea>
                                                        </div>
                                                        <div class="quest-v2-btn">
                                                            <a class="btn-d-black btn-wt-300 mr-20 next-button"
                                                                href="javascript:void(0)">Continue</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- other step end -->

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
                        <div class="quest-v2-step data-progress d-none" data-progress="83" id="step11">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 73%;"
                                                aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="v2-3step-cont">
                                        <div class="row">
                                            <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                                <h3 class="quest-v2-subh mb-30">
                                                    <textarea class="in_type" readonly="readonly" type="text" name="Q16"
                                                        value="Are you currently taking any of the following medications?">Are you currently taking any of the following medications?</textarea>
                                                    <!-- <input class="in_type" readonly="readonly"  type="text" name=" Are you currently taking any of the following medications?" value=" Are you currently taking any of the following medications?  ">   -->
                                                </h3>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button"
                                                        href="javascript:void(0)"><span>Back</span><i class="ti-arrow-left quetions-icon"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-12">
                                                <div class="quest-progress-bar mobile">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 73%;" aria-valuenow="73" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quest-v2-quest col-md-5 col-sm-12">
                                                <div class="form-group form-radio line_bottom">
                                                    <input type="radio" id="following-med-1" name="Q16_answer"
                                                        value="None of the above apply to me">
                                                    <label class="next-button" for="following-med-1">None of these apply to
                                                        me</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="following-med-2" name="Q16_answer"
                                                        value="Monoamine oxidase inhibitors">
                                                    <label class="open-que-error" for="following-med-2">Monoamine oxidase
                                                        inhibitors </label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="following-med-3" name="Q16_answer"
                                                        value="Thioridazine">
                                                    <label class="open-que-error" for="following-med-3">Thioridazine</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="following-med-4" name="Q16_answer"
                                                        value="Other mood stabilizers or antidepressants">
                                                    <label class="open-que-error" for="following-med-4">Other mood stabilizers
                                                        or antidepressants</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="following-med-5" name="Q16_answer" value="Lithium">
                                                    <label class="open-que-error" for="following-med-5">Lithium</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="following-med-6" name="Q16_answer"
                                                        value="Tryptophan">
                                                    <label class="open-que-error" for="following-med-6">Tryptophan</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="following-med-7" name="Q16_answer"
                                                        value="St John's wort">
                                                    <label class="open-que-error" for="following-med-7">St John's wort</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="following-med-8" name="Q16_answer" value="Tramadol">
                                                    <label class="open-que-error" for="following-med-8">Tramadol</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="following-med-9" name="Q16_answer"
                                                        value="Medications used for migraines, like sumatriptan, riaztriptan, and zolmitriptan">
                                                    <label class="open-que-error" for="following-med-9">Medications used for
                                                        migraines, like sumatriptan, riaztriptan, and zolmitriptan</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="following-med-10" name="Q16_answer"
                                                        value="Antifungal medications, including ketoconazole, fluconazole, and itraconazole">
                                                    <label class="open-que-error" for="following-med-10">Antifungal medications,
                                                        including ketoconazole, fluconazole, and itraconazole</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="following-med-11" name="Q16_answer"
                                                        value="HIV medications, including ritonavir, saquinavir, nelfinavir, fosamprenavir, and atazanavir">
                                                    <label class="open-que-error" for="following-med-11">HIV medications,
                                                        including ritonavir, saquinavir, nelfinavir, fosamprenavir, and
                                                        atazanavir</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="following-med-12" name="Q16_answer"
                                                        value="Antibiotics including telithromycin, line_bottomzolid, azithrmocyin, and clarithromycin">
                                                    <label class="open-que-error" for="following-med-12">Antibiotics including
                                                        telithromycin, line_bottomzolid, azithrmocyin, and
                                                        clarithromycin</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="following-med-13" name="Q16_answer"
                                                        value="Nefazodone">
                                                    <label class="open-que-error" for="following-med-13">Nefazodone</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="following-med-14" name="Q16_answer"
                                                        value="Other mental health medications">
                                                    <label class="open-que-error" for="following-med-14">Other mental health
                                                        medications</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="following-med-15" name="Q16_answer"
                                                        value="Non-steroidal anti-inflammatory drugs like ibuprofen or acetylsalicyclic acid">
                                                    <label class="open-que-error" for="following-med-15">Non-steroidal
                                                        anti-inflammatory drugs like ibuprofen or acetylsalicyclic acid</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="following-med-16" name="Q16_answer"
                                                        value="Blood thinning medications like warfarin">
                                                    <label class="open-que-error" for="following-med-16">Blood thinning
                                                        medications like warfarin</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="following-med-17" name="Q16_answer"
                                                        value="Medications for erectile dysfunction, such as sildenafil, tadalafil, or vardenafil">
                                                    <label class="open-que-error" for="following-med-17">Medications for
                                                        erectile dysfunction, such as sildenafil, tadalafil, or
                                                        vardenafil</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="following-med-18" name="Q16_answer"
                                                        value="Medications for high blood pressure, chest pain (angina), or enlarged prostate, like verapamil and diltiazem">
                                                    <label class="open-que-error" for="following-med-18">Medications for high
                                                        blood pressure, chest pain (angina), or enlarged prostate, like
                                                        verapamil and diltiazem</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="following-med-19" name="Q16_answer"
                                                        value="Aprepitant">
                                                    <label class="open-que-error" for="following-med-19">Aprepitant</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="following-med-20" name="Q16_answer"
                                                        value="Busprione">
                                                    <label class="open-que-error" for="following-med-20">Busprione</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="following-med-21" name="Q16_answer"
                                                        value="Bupropion">
                                                    <label class="open-que-error" for="following-med-21">Bupropion</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="following-med-22" name="Q16_answer"
                                                        value="Cimetidine">
                                                    <label class="open-que-error" for="following-med-22">Cimetidine</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="following-med-23" name="Q16_answer"
                                                        value="Rectogesic ointment">
                                                    <label class="open-que-error" for="following-med-23">Rectogesic
                                                        ointment</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="following-med-24" name="Q16_answer" value="other">
                                                    <label class="open-other-step" for="following-med-24"
                                                        step-id="sub-step-1">other</label>
                                                </div>
                                                <!-- other step start-->
                                                <div class="other-step" data-sub-id="sub-step-1">
                                                    <div class="inner-form-group">
                                                        <div class="form-group form-text-field">
                                                            <textarea type="text" class="form-control" id="" value=""
                                                                name="Q16_other" placeholder="enter your text" ></textarea>
                                                        </div>
                                                        <div class="quest-v2-btn">
                                                            <a class="btn-d-black btn-wt-300 mr-20 next-button"
                                                                href="javascript:void(0)">Continue</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- other step end -->

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
                        <div class="quest-v2-step data-progress d-none" data-progress="90" id="step12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 82%;"
                                                aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="v2-3step-cont">
                                        <div class="row">
                                            <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                                <h3 class="quest-v2-subh mb-30">
                                                    <textarea class="in_type" readonly="readonly" type="text" name="Q17"
                                                        value="Do you have any allergies to the following?">Do you have any allergies to the following?</textarea>
                                                    <!-- <input class="in_type" readonly="readonly"  type="text" name="Do you have any allergies to the following?" value="Do you have any allergies to the following?">   -->
                                                </h3>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button"
                                                        href="javascript:void(0)"><span>Back</span><i class="ti-arrow-left quetions-icon"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-12">
                                                <div class="quest-progress-bar mobile">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 82%;" aria-valuenow="82" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quest-v2-quest col-md-5 col-sm-12">
                                                <div class="form-group form-radio line_bottom">
                                                    <input type="radio" id="conditions-per-1" name="Q17_answer"
                                                        value="None of the above apply to me">
                                                    <label class="next-button" for="conditions-per-1">None of these apply to
                                                        me</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="conditions-per-2" name="Q17_answer"
                                                        value="Serotonin reuptake inhibitors i.e priligy"
                                                        onclick="cartItem('priligy')">
                                                    <label class="next-button" for="conditions-per-2">Serotonin reuptake
                                                        inhibitors i.e priligy </label>
                                                </div>
                                                <div class="form-group form-radio ">
                                                    <input type="radio" id="conditions-per-3" name="Q17_answer" value="Lactose">
                                                    <label class="open-sub-step" for="conditions-per-3">Lactose</label>
                                                </div>
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="conditions-per-4" name="Q17_answer"
                                                        value="Lidocaine or other local anesthetics">
                                                    <label class="next-button" for="conditions-per-4">Lidocaine or other local
                                                        anesthetics</label>
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
                                    <h3 class="quest-v2-subh mb-30">
                                        <div class="inner-form-group">
                                            <div class="row">
                                                <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                                    <div class="quest-v2-btn">
                                                        <a class="btn-d-trans btn-wt-170 prev-button"
                                                            href="javascript:void(0)"><span>Back</span><i class="ti-arrow-left quetions-icon"></i></a>
                                                    </div>
                                                </div>
                                                <div class="col-md-1 col-sm-12">
                                                </div>
                                                <div class="quest-v2-quest col-md-5 col-sm-12">
                                                    <h3 class="quest-v2-subh mb-30">
                                                        <textarea class="in_type" readonly="readonly" type="text" name="Q16"
                                                            value="Our tablets contain minuscule amounts of lactose. If you have previously taken a tablet formulation without any symptoms, it's unlikely that you'll experience adverse effects from the lactose in our tablets.">Our tablets contain minuscule amounts of lactose. If you have previously taken a tablet formulation without any symptoms, it's unlikely that you'll experience adverse effects from the lactose in our tablets.</textarea>
                                                    </h3>
                                                    <div class="form-group form-radio">
                                                        <input class="in_type" readonly="readonly" type="radio"
                                                            id="tablets-1" name="Q16_answer"
                                                            value="I'm comfortable with proceeding to be assessed for a prescription">
                                                        <label class="next-button" for="tablets-1"> I'm comfortable with
                                                            proceeding to be assessed for a prescription </label>
                                                    </div>
                                                    <div class="form-group form-radio">
                                                        <input class="in_type" readonly="readonly" type="radio"
                                                            id="tablets-2" name="Q16_answer"
                                                            value="I can't tolerate even small amounts of lactose">
                                                        <label class="next-button" for="tablets-2">I can't tolerate even
                                                            small amounts of lactose </label>
                                                    </div>
                                                    <div class="quest-v2-btn d-flex">
                                                        <a class="btn-d-black btn-wt-170 back-sub-step" step-val="0"
                                                            href="javascript:void(0)">Back</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- 12th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="95" id="step13">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 92%;"
                                                aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="v2-3step-cont">
                                        <div class="row">
                                            <div class="quest-v2-label col-md-6 col-sm-12 d-flex flex-column justify-content-between">
                                                <h3 class="quest-v2-subh mb-30">
                                                    <textarea class="in_type" readonly="readonly" type="text" name="Q18"
                                                        value="Please inform us about any major illnesses, ongoing medical conditions, medications (prescribed or over-the-counter) you take, allergies to medication, or surgeries. This information is necessary for our clinicians to ensure the prescribed treatment is safe for you.">Please inform us about any major illnesses, ongoing medical conditions, medications (prescribed or over-the-counter) you take, allergies to medication, or surgeries. This information is necessary for our clinicians to ensure the prescribed treatment is safe for you.</textarea>
                                                    <!-- <input class="in_type" readonly="readonly"  type="text" name="Please inform us about any major illnesses, ongoing medical conditions, medications (prescribed or over-the-counter) you take, allergies to medication, or surgeries.
                                                        This information is necessary for our clinicians to ensure the prescribed treatment is safe for you." value="Please inform us about any major illnesses, ongoing medical conditions, medications (prescribed or over-the-counter) you take, allergies to medication, or surgeries.
                                                        This information is necessary for our clinicians to ensure the prescribed treatment is safe for you."> -->

                                                </h3>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button"
                                                        href="javascript:void(0)"><span>Back</span><i class="ti-arrow-left quetions-icon"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-12">
                                                <div class="quest-progress-bar mobile">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 92%;" aria-valuenow="92" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quest-v2-quest col-md-5 col-sm-12">
                                                <div class="form-group form-radio">
                                                    <input type="radio" id="ongoing-per-1" name="Q18_answer"
                                                        value="I have a major illness, ongoing medical condition, allergy to medication, or take prescribed or over-the-counter medication to inform you about. ">
                                                    <label class="open-sub-step" for="ongoing-per-1">I have a major illness,
                                                        ongoing medical condition, allergy to medication, or take prescribed or
                                                        over-the-counter medication to inform you about. </label>
                                                </div>
                                                <div class="form-group form-radio ">
                                                    <input type="radio" id="ongoing-per-2" name="Q18_answer"
                                                        value="I do not have a major illness, ongoing medical condition, operation, allergy to medication, or take prescribed or over-the-counter medication to inform you about.">
                                                    <label class="next-button" for="ongoing-per-2">I do not have a major
                                                        illness, ongoing medical condition, operation, allergy to medication, or
                                                        take prescribed or over-the-counter medication to inform you
                                                        about.</label>
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
                                                <textarea class="in_type" readonly="readonly" type="text" name="Q19"
                                                    value="Please provide more information about your condition or medication.">Please provide more information about your condition or medication.</textarea>
                                                <!-- <input class="in_type" readonly="readonly"  type="text" name="Please provide more information about your condition or medication." value="Please provide more information about your condition or medication.">   -->
                                            </h3>
                                        </div>
                                        <div class="col-md-1 col-sm-12 mt-2">
                                        </div>
                                        <div class="quest-v2-quest col-md-5 col-sm-12">
                                            <div class="form-group form-text-field">
                                                <textarea type="text" class="form-control" id="" value=""
                                                    name="Q19_answer" placeholder="enter your text" ></textarea>
                                            </div>
                                            <div class="quest-v2-btn d-flex flex-row">
                                                <a class="btn-d-black btn-wt-300 mr-20 next-button"
                                                    href="javascript:void(0)">Continue</a>
                                                <a class="btn-d-black btn-wt-170  back-sub-step"
                                                    href="javascript:void(0)">Back</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 13th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="100" id="step14">
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
                                                    <textarea class="in_type" readonly="readonly" type="text" name="Q20"
                                                        value="Would you like us to inform your GP about your treatment?">Would you like us to inform your GP about your treatment?</textarea>
                                                    <!-- <input class="in_type" readonly="readonly"  type="text" name="Would you like us to inform your GP about your treatment?" value="Would you like us to inform your GP about your treatment?">   -->
                                                </h3>
                                                <div class="quest-v2-btn">
                                                    <a class="btn-d-trans btn-wt-170 prev-button"
                                                        href="javascript:void(0)"><span>Back</span><i class="ti-arrow-left quetions-icon"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-12">
                                                <div class="quest-progress-bar mobile">
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 100%;" aria-valuenow="100" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quest-v2-quest col-md-5 col-sm-12">
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
                                                    <a class="btn-d-trans btn-wt-170 prev-button mobile"
                                                        href="javascript:void(0)">Back</a>
                                                    <!-- <button class="btn-d-black" type="submit" id="GP-per-2" name="">continue</button> -->
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
                                                <textarea class="in_type" readonly="readonly" type="text" name="Q21"
                                                    value="Please provide your GP's name and address.">Please provide your GP's name and address.</textarea>
                                            </h3>
                                        </div>
                                        <div class="col-md-1 col-sm-12 mt-2">
                                        </div>
                                        <div class="quest-v2-quest col-md-5 col-sm-12">
                                            <div class="form-group form-text-field">
                                                <textarea type="text" class="form-control" name="Q21_answer" placeholder="enter your text" ></textarea>
                                            </div>
                                            <div class="quest-v2-btn d-flex flex-row">
                                                <a class="btn-d-black btn-wt-300 mr-20 next-button"
                                                    href="javascript:void(0)">Continue</a>
                                                <a class="btn-d-black btn-wt-170  back-sub-step"
                                                    href="javascript:void(0)">Back</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="quest-page-type" value="premature">
                        <div class="quest-v2-step d-none question-final" id="step15">
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
                                            <p class="mb-30">Thank you for answering questions about your health and
                                                experiences with hair loss. Your responses will assist our licensed
                                                clinicians in determining if a prescription for hair loss
                                                treatment could be appropriate for you. They will promptly review your
                                                answers and get back to you with suitable suggestions.</p>
                                        </div>
                                        <div>
                                            <h3 class="list-heading mb-30">Before Submitting Your Answers,
                                                PleaseAcknowledge The Following:</h3>
                                            <ul class="quest-v2-list pb-30 mb-20 before-submit-area">
                                                <li>You Are The Sole User Of Any Medication Provided Through This
                                                    Service.</li>
                                                <li>You Have Provided Truthful Answers To The Best Of Your Knowledge.
                                                </li>
                                                <li>You Are Aware That Minoxidil 5% Solution And Combined Minoxidil 5%
                                                    With 0.1% Finasteride Solution Are Prescribed As Unlicensed
                                                    Products.</li>
                                                <li>You Were Assigned Male At Birth.</li>
                                                <li>You Have Disclosed Any Serious Illnesses Or Operations You Have Had.
                                                </li>
                                                <li>You Have Disclosed Any Prescription Medication You Currently Take.
                                                </li>
                                                <li>You Will Only Use The Recommended Method Of Hair Loss Treatment And
                                                    Not Combine More Than One Different Medication For This Condition.
                                                </li>
                                                <li>You Are Aware That You Should Not Take Finasteride If You’re Trying
                                                    For A Baby.</li>
                                                <li>You Accept Our Terms & Conditions, Privacy Policy, And Terms Of
                                                    Sale.</li>
                                                <li>You Currently Live In The UK.</li>
                                                <li>You Are Using This Service Of Your Own Free Will.</li>
                                                <li>Will Read all patient information leaflets available</li>
                                                <li>You Agree To The Terms Of Service, Terms Of Subscription, And
                                                    Privacy Policy.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ques-footer">
                                <div class="col-lg-6"></div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="quest-v2-btn d-flex justify-content-between">
                                        <a class="btn-d-trans btn-wt-170 prev-button">Back</a>
                                        <a class="btn-d-black-outline btn-wt-170 prev-button mobile">Back</a>
                                        <button class="btn-d-black" type="submit" id="relyimpohl-btn"
                                        name="" value="btn">continue</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 13th step end -->
                        <div class='container-fluid brands-reviews-content' style="display: none">
                            <div class="col-12">
                                <div class="brands container mt-5" id="business brands">
                                    <div class="d-flex justify-content-center">
                                        <div class="d-flex justify-content-between brand-images mobile">
                                            <img src="{{ asset('images/brand-medicine.png') }}">
                                            <p class="font-heavy-green mr-50">Licensed & Registered
                                                    Medication</p>
                                            <img src="{{ asset('images/brand-shipping.png') }}"><p class="font-heavy-green mr-50">Free & Discreet 24Hr Shipping</p>
                                            <img src="{{ asset('images/brand-pause.png') }}" style="margin-right: 16px;"><p class="font-heavy-green">Pause Or CancelAt Anytime</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="brands mobile mt-5" id="business brands">

                                        <div class="d-flex justify-content-around brand-images mobile">
                                            <img src="{{ asset('images/brand-medicine.png') }}">
                                            <img src="{{ asset('images/brand-shipping.png') }}">
                                            <img src="{{ asset('images/brand-pause.png') }}">
                                        </div>

                                </div>
                            </div>
                        </div>
                        <!-- 14th step end -->
                    </form>
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
                                            <div
                                                class="col-md-5 col-sm-12 quest-v2-error-modal-label d-flex flex-column justify-content-between">
                                                <div style="position: relative">
                                                    <div class="error-btn d-flex flex-row-reverse">
                                                        <img src="{{ asset('images/error-icon.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="col-9">
                                                        <h2 class="quest-v2-subh mb-30 font-weight-bold">
                                                            <div><span class="font-poppins">Your</span> <span
                                                                    class="font-yeseva">safety</span></div>
                                                            <div><span class="font-poppins">is our top</span></div>
                                                            <div><span class="font-yeseva">priority</span>.</div>
                                                    </div>
                                                </div>
                                                <button type="button" id="btncheck"
                                                    class="btn-d-black-outline close-que-modal"
                                                    data-bs-dismiss="modal"><span>Review Your Answers</span><i
                                                        class="ti-arrow-left quetions-icon"></i></button>
                                            </div>
                                            <div class="col-1"></div>
                                            <div class="col-md-6 col-sm-12">
                                                <h5 class="font-poppins-bold">Unfortunately, we can’t offer you any
                                                    beard growth medication.</h5>
                                                <p class="font-poppins">No recommended treatment. Based on your
                                                    answers, there is no treatment
                                                    suitable for you. If you think you have made an error in your
                                                    responses,
                                                    please click below to review your answers.</p>
                                                <h5 class="font-poppins-bold">Did you make a mistake?</h5>
                                                <p>Providing false information can lead to
                                                    serious harm to your
                                                    health.</p>
                                                <div class="form-group form-check mb-30 pb-2"
                                                    style="text-align: justify">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="terms-and-services" id="check">
                                                    <label class="form-check-label m-0" for="terms-and-services">
                                                        I agree only to provide accurate answers
                                                    </label>
                                                </div>
                                                <button type="button" id="btncheck"
                                                    class="btn-d-black close-que-modal mobile"
                                                    data-bs-dismiss="modal">Review Your Answers</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- error message end -->

                </main>
                <div class="quest-review-content">
                    <div class="view">
                        <div class="card review-card mt-5">
                            <div class="card-header d-flex justify-content-between bg-transparent">
                                <h5 class="font-poppins review-user-name pt-1">Jenny D.</h5>
                                <ul class="d-flex flex-row-reverse stars mt-1">
                                    @for ($i=0; $i<5; $i++)
                                        <li><i class="fa fa-star text-warning"></i></li>
                                    @endfor
                                </ul>
                            </div>
                            <div class="card-body">
                                <div>
                                    <p class="font-black" id="quest-review-description"></p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div><img class="ad-content-image" src="{{ asset('images/verified.svg') }}"/><span class="font-poppins text-dark verified-title">Verified Customer</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="video-content">
                    <video muted loop class="video-player" id="video-player-desktop">
                        <source id="video-src-desktop" type="video/mp4">
                    </video>
                    <video muted loop class="video-player" id="video-player-mobile">
                        <source id="video-src-mobile" type="video/mp4">
                    </video>
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
    var app_url = '{{ env('APP_URL') }}';
function cartItem(priligy) {
    localStorage.setItem("p_name", priligy);
}

function getvalue() {
    var product_name = localStorage.getItem("p_name");
    //   alert(product_name);
    document.getElementById("p_name").innerHTML = p_name;

}
</script>

<script>
function cartItem(p_name, p_price) {
    // alert(p_name);
    localStorage.setItem("p_name", p_name);
    localStorage.setItem("p_price", p_price);
}

function getValue() {

    var p_name = localStorage.getItem("p_name");
    var p_price = localStorage.getItem("p_price");
    var pr_price = localStorage.getItem("p_price");

    document.getElementById("p_name").innerHTML = p_name;
    document.getElementById("p_price").innerHTML = p_price;

    document.getElementById("pr_price").innerHTML = pr_price;


}
</script>





<!-- script for the popup -->
<!-- script for the popup -->
<script>
$('#check').change(function() {
    $('#btncheck').prop("disabled", !this.checked);
}).change()
</script>

<!-- getting alergies for prilgy -->
<!-- <script>
 $(document).ready(function(){
    $('input[type=radio][name=allergies]').change(function(){
    var allergies = $('input[name="allergies"]:checked').val();
    var product_name = localStorage.getItem("product_name");
    });
 });
</script>     -->



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
})
</script>
