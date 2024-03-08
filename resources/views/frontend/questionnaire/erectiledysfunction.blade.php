{{--
@extends('layouts.app')
@section('title', 'Questionnaire')
--}}

<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="language" content="en" />
    <meta name="country" content="us" />
    <meta name="robots" content="INDEX, FOLLOW" />
    <title>Erectile Dysfunction | Questionnaire | Agent</title>
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

<body style="background-color: #484f47;">

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
    if(Session::has('erectile_dysfunction')){
    $sessionId = Session::get('erectile_dysfunction');
    } else {
    $randomString = Str::random(40);
    Session::put('erectile_dysfunction', $randomString);
    $sessionId = Session::get('erectile_dysfunction');
    }
    @endphp
    <!-- questionnair start here -->
    <section class="questionnaire-v2-main">
        <div class="quest-v2-header">
            <div class="container-fluid">
                <a class="quest-logo" href="{{ url('/') }}">
                    <img src="{{ asset('images/quest-logo.png')}}" alt="">
                </a>
            </div>
        </div>
        <div class="quest-v2-content">
            <div class="container-fluid">
                <div class="quest-v2-inner-wrap">
                    <form id="" action="{{ route('cart_product') }}" method="POST">
                        @csrf
                        <input type="hidden" name="category_id" value="32">
                        <input type="hidden" name="session_id" value="{{ $sessionId }}">

                        <!-- questionnair start here -->
                        <!-- 1st step -->
                        <div class="quest-v2-step data-progress" data-progress="0" id="step1" style="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-2step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="1"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>0%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea class="in_type" readonly="readonly" name="Q1" type="text"
                                                value="Kindly Tell Us Your Age">Kindly Tell Us Your Age</textarea>
                                        </h3>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio" id="age-2"
                                                name="Q1_answer" value="Under 18">
                                            <label class="open-que-error" for="age-2">Under 18 </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio" id="age-3"
                                                name="Q1_answer" value="18-25">
                                            <label class="open-sub-step" for="age-3">18-25 </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio" id="age-4"
                                                name="Q1_answer" value="26-69">
                                            <label class="next-button" for="age-4">26-69 </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio" id="age-5"
                                                name="Q1_answer" value="70 or over">
                                            <label for="age-5" class="open-sub-step" step-val="2">70 or over </label>
                                        </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button"
                                                href="{{ url('/shop/erectile-dysfunction') }}">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-step fixed-step" id="sub-step1">
                                <div class="inner-form-group">
                                    <h3 class="quest-v2-subh mb-30">
                                        <textarea class="in_type" readonly="readonly" type="text" name="Q2"
                                            value="Please select all the statements that are applicable to you">Please select all the statements that are applicable to you</textarea>
                                    </h3>
                                    <div class="form-group form-radio">
                                        <input class="in_type" readonly="readonly" type="radio" id="applicable-1"
                                            name="Q2_answer" value="I've never experienced an erection ">
                                        <label class="open-que-error" for="applicable-1"> I've never experienced an
                                            erection </label>
                                    </div>
                                    <div class="form-group form-radio">
                                        <input class="in_type" readonly="readonly" type="radio" id="applicable-2"
                                            name="Q2_answer" value="I've been diagnosed with cardiovascular disease">
                                        <label class="open-que-error" for="applicable-2">I've been diagnosed with
                                            cardiovascular disease </label>
                                    </div>
                                    <div class="form-group form-radio">
                                        <input class="in_type" readonly="readonly" type="radio" id="applicable-3"
                                            name="Q2_answer"
                                            value="I have previously been able to maintain an erection, but I'm now unable to do so reliably.">
                                        <label class="next-button" for="applicable-3">I have previously been able to
                                            maintain an erection, but I'm now unable to do so reliably.</label>
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
                                        <textarea class="in_type" readonly="readonly" type="text" name="Q3"
                                            value="Have you had your blood pressure checked within the past 6 months?">Have you had your blood pressure checked within the past 6 months?</textarea>
                                    </h3>
                                    <div class="form-group form-radio">
                                        <input class="in_type" readonly="readonly" type="radio" id="blood-months-yes"
                                            name="Q3_answer" value="Yes">
                                        <label class="open-sub-step" for="blood-months-yes"> Yes</label>
                                    </div>
                                    <div class="form-group form-radio">
                                        <input class="in_type" readonly="readonly" type="radio" id="blood-months-no"
                                            name="Q3_answer" value="No">
                                        <label class="open-que-error" for="blood-months-no">No </label>
                                    </div>
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-trans btn-wt-170 back-sub-step" step-val="0"
                                            href="javascript:void(0)">Back</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-step fixed-step" id="sub-step3">
                                <div class="inner-form-group">
                                    <h3 class="quest-v2-subh mb-30"><textarea class="in_type" readonly="readonly"
                                            type="text" name="Q4"
                                            value="What was the reading of your blood pressure?">What was the reading of your blood pressure?</textarea>
                                    </h3>
                                    <div class="form-group form-radio">
                                        <input class="in_type" readonly="readonly" type="radio" id="blood-press-1"
                                            name="Q4_answer" value="Less than 90/50 mmHg">
                                        <label class="open-que-error" for="blood-press-1">Less than 90/50 mmHg (low)
                                        </label>
                                    </div>
                                    <div class="form-group form-radio">
                                        <input class="in_type" readonly="readonly" type="radio" id="blood-press-2"
                                            name="Q4_answer" value="Between 90/50 and 140/90 mmHg">
                                        <label class="next-button" for="blood-press-2">Between 90/50 and 140/90 mmHg
                                            (normal) </label>
                                    </div>
                                    <div class="form-group form-radio">
                                        <input class="in_type" readonly="readonly" type="radio" id="blood-press-3"
                                            name="Q4_answer" value="Above 140/90 mmHg">
                                        <label class="open-que-error" for="blood-press-3">Above 140/90 mmHg (high)
                                        </label>
                                    </div>
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-trans btn-wt-170 back-sub-step"
                                            href="javascript:void(0)">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 2nd step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="8" id="step2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="10"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>15%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea class="in_type" readonly="readonly" type="text" name="Q5"
                                                value="Have you tried any of the following treatments before?">Have you tried any of the following treatments before?</textarea>
                                        </h3>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio"
                                                id="treatment-before-1" name="Q5_answer" value="Viagra / Sildenafil">
                                            <label class="open-sub-step" for="treatment-before-1">Viagra / Sildenafil
                                            </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio"
                                                id="treatment-before-2" name="Q5_answer" value="Cialis / Tadalafil">
                                            <label class="open-sub-step" for="treatment-before-2">Cialis / Tadalafil
                                            </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio"
                                                id="treatment-before-2" name="Q5_answer" value="Both">
                                            <label class="open-sub-step" for="treatment-before-2">Both</label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio"
                                                id="treatment-before-3" name="Q5_answer" value="None of the above">
                                            <label class="next-button" for="treatment-before-3">None of the above
                                            </label>
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
                                        <textarea class="in_type" readonly="readonly" type="text" name="Q6"
                                            value="Please share your experiences with these treatments, including any side effects you may have had.">Please share your experiences with these treatments, including any side effects you may have had.</textarea>
                                    </h3>
                                    <div class="form-group form-text-field">
                                        <!-- <input class="in_type" readonly="readonly"  type="text" class="form-control" id="" value=""> -->
                                        <textarea type="text" class="form-control" id="experiences" value="experiences"
                                            name="Q6_answer" placeholder="enter your text" ></textarea>

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
                        <!-- 3rd step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="16" id="step3">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="20"
                                                    aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <h3>23%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea class="in_type" readonly="readonly" type="text" name="Q7"
                                                value="Do any of the following statements apply to you?">Do any of the following statements apply to you?</textarea>
                                        </h3>
                                        <ul class="quest-v2-list pb-30 mb-10">
                                            <li>I've had a heart attack, stroke, or mini-stroke within the past 6
                                                months. </li>
                                            <li>I have symptoms of chest pain or any heart rhythm irregularities. </li>
                                            <li>I have issues with my heart valves.</li>
                                            <li>I have heart muscle disease.</li>
                                            <li>I become breathless or experience chest pain with light exertion, such
                                                as climbing two flights of stairs. </li>
                                            <li>I've been advised to refrain from sexual activity for medical reasons.
                                            </li>
                                            <li>I have or have had heart or neurological conditions.</li>
                                        </ul>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio" id="mini-stroke-1"
                                                name="Q7_answer" value="Yes">
                                            <label class="open-que-error" for="mini-stroke-1">Yes </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio" id="mini-stroke-2"
                                                name="Q7_answer" value="No">
                                            <label class="next-button" for="mini-stroke-2">No</label>
                                        </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button"
                                                href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- 4th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="25" id="step4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="30"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>30%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea class="in_type" readonly="readonly" type="text" name="Q8"
                                                value="Do any of the following medical conditions apply to you?">Do any of the following medical conditions apply to you?</textarea>
                                        </h3>
                                        <ul class="quest-v2-list pb-30 mb-10">
                                            <li>Serious liver problems (like cirrhosis) or kidney problems. </li>
                                            <li>Currently prescribed GTN, Isosorbide mononitrate, Isosorbide dinitrate,
                                                Nicorandil (nitrates), or Rectogesic ointment. </li>
                                            <li>Blood pressure abnormality (below 90/50 mmHg or above 160/90 mmHg).
                                            </li>
                                            <li>A condition affecting your penis (such as Peyronie's Disease, previous
                                                injuries, or inability to maintain an erection due to shape). </li>
                                            <li>Leukemia, multiple myeloma, sickle cell anemia, or a bleeding disorder
                                                (like hemophilia). </li>
                                            <li>Stomach ulcers or certain eye diseases like retinitis pigmentosa. </li>
                                            <li>Taking Alpha-blockers (medication for high blood pressure or prostate
                                                condition). </li>
                                        </ul>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio" id="medical-1"
                                                name="Q8_answer" value="Yes">
                                            <label class="open-que-error" for="medical-1">Yes </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio" id="medical-2"
                                                name="Q8_answer" value="No">
                                            <label class="next-button" for="medical-2">No</label>
                                        </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button"
                                                href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 5th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="33" id="step5">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="40"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>38%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea class="in_type" readonly="readonly" type="text" name="Q9"
                                                value="Are you currently on any of the following medications?">Are you currently on any of the following medications?</textarea>
                                        </h3>
                                        <ul class="quest-v2-list pb-30 mb-10">
                                            <li>Nitrate medications (like GTN spray, isosorbide mononitrate/dinitrate
                                                for chest pain, or nicorandil). </li>
                                            <li>Riociguat for pulmonary hypertension. </li>
                                            <li>Recreational drugs (such as 'poppers', 'room odorizers', amyl nitrate,
                                                butyl nitrate). </li>

                                        </ul>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio" id="medications-1"
                                                name="Q9_answer" value="Yes">
                                            <label class="open-que-error" for="medications-1">Yes </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio" id="medications-2"
                                                name="Q9_answer" value="No">
                                            <label class="next-button" for="medications-2">No</label>
                                        </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button"
                                                href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="41" id="step6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="49"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>46%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea class="in_type" readonly="readonly" type="text" name="Q10"
                                                value="Have you experienced any of the following">Have you experienced any of the following</textarea>
                                        </h3>
                                        <ul class="quest-v2-list pb-30 mb-10">
                                            <li>Loss of vision in one or both eyes. </li>
                                            <li>Sudden decrease or loss of hearing. </li>
                                            <li>An erection that lasted more than 4 hours (priapism). </li>
                                        </ul>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio" id="experienced-1"
                                                name="Q10_answer" value="Yes">
                                            <label class="open-que-error" for="experienced-1">Yes </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio" id="experienced-2"
                                                name="Q10_answer" value="No">
                                            <label class="next-button" for="experienced-2">No</label>
                                        </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button "
                                                href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 7th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="49" id="step7">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="58"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>54%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea class="in_type" readonly="readonly" type="text" name="Q11"
                                                value="Do you agree to the following statement?">Do you agree to the following statement?</textarea>
                                        </h3>
                                        <ul class="quest-v2-list pb-30 mb-10">
                                            <li>I will promptly report any changes in my health or adverse effects to my
                                                doctor. </li>
                                        </ul>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio" id="agree-2"
                                                name="Q11_answer" value="Yes">
                                            <label class="next-button" for="agree-2">Yes </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio" id="agree-3"
                                                name="Q11_answer" value="No">
                                            <label class="open-que-error" for="agree-3">No</label>
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
                        <div class="quest-v2-step data-progress d-none" data-progress="57" id="step8">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-2step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="68"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>61%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea class="in_type" readonly="readonly" type="text" name="Q12"
                                                value="Are you taking any medications (including over the counter or herbal medicines)? Do you have any other medical conditions not already mentioned?">Are you taking any medications (including over the counter or herbal medicines)? Do you have any other medical conditions not already mentioned?</textarea>
                                        </h3>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio" id="herbal-1"
                                                name="Q12_answer" value="Yes">
                                            <label class="open-sub-step" for="herbal-1">Yes </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio" id="herbal-2"
                                                name="Q12_answer" value="No">
                                            <label class="next-button" for="herbal-2">No</label>
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
                                        <textarea class="in_type" readonly="readonly" type="text" name="Q13"
                                            value="Please list all your medications you take and any other medical conditions.">Please list all your medications you take and any other medical conditions.</textarea>
                                    </h3>
                                    <div class="form-group form-text-field">
                                        <!-- <input class="in_type" readonly="readonly"  type="text" class="form-control" id="" value=""> -->
                                        <textarea type="text" class="form-control" id="list_all_your_medications"
                                            value="" name="Q13_answer" placeholder="enter your text" ></textarea>
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
                        <!-- 9th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="65" id="step9">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="75"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>69%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea class="in_type" readonly="readonly" type="text" name="Q14"
                                                value="Does any of the following statements regarding allergies apply to you?">Does any of the following statements regarding allergies apply to you?</textarea>
                                        </h3>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio" id="allergies-1"
                                                name="Q14_answer" value="I have an allergy to a medicine or substance">
                                            <label class="open-sub-step" for="allergies-1">I have an allergy to a
                                                medicine or substance </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio" id="allergies-2"
                                                name="Q14_answer"
                                                value="I have lactose intolerance but not a lactose allergy">
                                            <label for="allergies-2" class="open-sub-step" step-val="2">I have lactose
                                                intolerance but not a lactose allergy</label>
                                        </div>
                                        <div class="form-group form-radio ">
                                            <input class="in_type" readonly="readonly" type="radio" id="allergies-3"
                                                name="Q14_answer" value="I have no allergies">
                                            <label class="next-button" for="allergies-3">I have no allergies</label>
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
                                        <textarea class="in_type" readonly="readonly" type="text" name="Q15"
                                            value="Please list any substances or medicines that you may have allergies to.">Please list any substances or medicines that you may have allergies to.</textarea>
                                    </h3>
                                    <div class="form-group form-text-field">
                                        <!-- <input class="in_type" readonly="readonly"  type="text" class="form-control" id="" value=""> -->
                                        <textarea type="text" class="form-control" id="have_allergies" value=""
                                            name="Q15_answer" placeholder="enter your text" ></textarea>
                                    </div>
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-black btn-wt-300 mr-20 next-button"
                                            href="javascript:void(0)">Continue</a>
                                        <a class="btn-d-trans btn-wt-170 back-sub-step"
                                            href="javascript:void(0)">Back</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-step fixed-step" id="sub-step2">
                                <div class="inner-form-group">
                                    <h3 class="quest-v2-subh mb-30">
                                        <textarea class="in_type" readonly="readonly" type="text" name="Q16"
                                            value="Our tablets contain minuscule amounts of lactose. If you have previously taken a tablet formulation without any symptoms, it's unlikely that you'll experience adverse effects from the lactose in our tablets.">Our tablets contain minuscule amounts of lactose. If you have previously taken a tablet formulation without any symptoms, it's unlikely that you'll experience adverse effects from the lactose in our tablets.</textarea>
                                    </h3>
                                    <div class="form-group form-radio">
                                        <input class="in_type" readonly="readonly" type="radio" id="tablets-1"
                                            name="Q16_answer"
                                            value="I'm comfortable with proceeding to be assessed for a prescription">
                                        <label class="next-button" for="tablets-1"> I'm comfortable with proceeding to
                                            be assessed for a prescription </label>
                                    </div>
                                    <div class="form-group form-radio">
                                        <input class="in_type" readonly="readonly" type="radio" id="tablets-2"
                                            name="Q16_answer" value="I can't tolerate even small amounts of lactose">
                                        <label class="open-que-error" for="tablets-2">I can't tolerate even small
                                            amounts of lactose </label>
                                    </div>
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-trans btn-wt-170 back-sub-step" step-val="0"
                                            href="javascript:void(0)">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 10th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="74" id="step10">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="83"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>74%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea class="in_type" readonly="readonly" type="text" name="Q17"
                                                value="Please share with us any significant illnesses, ongoing medical conditions, medications (prescribed or over-the-counter) you're currently taking, allergies to medication, or surgical procedures you've undergone. This information is crucial for our clinicians to ensure the prescribed treatment is safe for you.">Please share with us any significant illnesses, ongoing medical conditions, medications (prescribed or over-the-counter) you're currently taking, allergies to medication, or surgical procedures you've undergone. This information is crucial for our clinicians to ensure the prescribed treatment is safe for you.</textarea>
                                        </h3>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio" id="significant-1"
                                                name="Q17_answer"
                                                value="I have a significant illness, ongoing medical condition,
                                                    allergy to medication, or take prescribed or over-the-counter medication to inform you about.">
                                            <label class="open-sub-step" for="significant-1">I have a significant
                                                illness, ongoing medical condition,
                                                allergy to medication, or take prescribed or over-the-counter medication
                                                to inform you about. </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio" id="significant-2"
                                                name="Q17_answer"
                                                value="I don't have a significant illness, ongoing medical condition, operation,
                                                    allergy to medication, or take prescribed or over-the-counter medication to inform you about">
                                            <label class="next-button" for="significant-2">I don't have a significant
                                                illness, ongoing medical condition, operation, allergy to medication, or
                                                take prescribed or over-the-counter medication to inform you about.
                                            </label>
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
                                        <textarea class="in_type" readonly="readonly" type="text" name="Q18"
                                            value="Please provide more information about your condition or medication.">Please provide more information about your condition or medication.</textarea>
                                    </h3>
                                    <div class="form-group form-text-field">
                                        <textarea type="text" class="form-control"
                                            id="more_information_about_your_condition" value=""
                                            name="Q18_answer" placeholder="enter your text" ></textarea>
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
                        <!-- 11th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="82" id="step11">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="92"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>85%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea class="in_type" readonly="readonly" type="text" name="Q19"
                                                value="Would you like us to inform your GP about your treatment?">Would you like us to inform your GP about your treatment?</textarea>
                                        </h3>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio" id="inform-1"
                                                name="Q19_answer" value="Yes">
                                            <label class="open-sub-step" for="inform-1">Yes </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio" id="inform-2"
                                                name="Q19_answer" value="No">
                                            <label class="next-button" for="inform-2">No</label>
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
                                        <textarea class="in_type" readonly="readonly" type="text" name="Q20"
                                            value="Please provide your GP's contact information?">Please provide your GP's contact information?</textarea>
                                    </h3>
                                    <div class="form-group form-text-field">
                                        <!-- <input class="in_type" readonly="readonly"  type="text" class="form-control" id="" value=""> -->
                                        <textarea type="text" class="form-control" id="GP's_contact" value=""
                                            name="Q20_answer" placeholder="enter your text" ></textarea>
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
                        <!-- 12th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="91" id="step12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="97"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>93%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea class="in_type" readonly="readonly" type="text" name="Q21"
                                                value="On average, how often do you anticipate having sex and using these medications?">On average, how often do you anticipate having sex and using these medications?</textarea>
                                        </h3>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio" id="anticipate-1"
                                                name="Q21_answer" value="Less than once per week  ">
                                            <label class="next-button" for="anticipate-1">Less than once per week
                                            </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio" id="anticipate-2"
                                                name="Q21_answer" value="1-2 times per week ">
                                            <label class="next-button" for="anticipate-2">1-2 times per week </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio" id="anticipate-3"
                                                name="Q21_answer" value="2-3 times per week">
                                            <label class="next-button" for="anticipate-3">2-3 times per week </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio" id="anticipate-4"
                                                name="Q21_answer" value="More than 3 per week">
                                            <label class="next-button" for="anticipate-4">More than 3 per week </label>
                                        </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button"
                                                href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 13th step -->
                        <div class="quest-v2-step data-progress d-none" data-progress="100" id="step13">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="100"
                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>100%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea class="in_type" readonly="readonly" type="text" name="Q22"
                                                value="How would you prefer to take your medication?">How would you prefer to take your medication?</textarea>
                                        </h3>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio" id="prefer-1"
                                                name="Q22_answer" value="1 hour before sexual intercourse">
                                            <label class="next-button" for="prefer-1">1 hour before sexual intercourse </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly" type="radio" id="prefer-2"
                                                name="Q22_answer"
                                                value="I'd rather not plan and take the tablet beforehand ">
                                            <label class="next-button" for="prefer-2">I'd rather not plan and take the
                                                tablet beforehand </label>
                                        </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button"
                                                href="javascript:void(0)">Back</a>
                                        </div>
                                        <p class="quest-desc">Before you submit your responses, please review them
                                            carefully. Our licensed clinician will go through
                                            your answers and get back to you shortly if a prescription is appropriate.
                                            By submitting this questionnaire, you are agreeing
                                            to our Terms & Conditions and Terms of Sale.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="quest-v2-step d-none question-final" id="step14">
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
                                            <p class="mb-30">Thank you for completing this questionnaire about your health and your experience with erectile dysfunction. Your answers will be reviewed by a licensed clinician on our team to assess if a prescription medication might be appropriate
                                            for your condition. They will promptly review your answers and get back to you with suitable suggestions.</p>
                                        </div>
                                        <div>
                                            <h3 class="list-heading mb-30">Before You Submit Your Responses, Please Affirm That You:</h3>
                                            <ul class="quest-v2-list pb-30 mb-20 before-submit-area">
                                                <li>Are Completing This Survey To The Best Of Your Abilities And In A Truthful Manner. </li>
                                            <li>Were Assigned Male At Birth And Are Currently Experiencing Symptoms Of Erectile Dysfunction. </li>
                                            <li>Have Disclosed Any Significant Illnesses Or Surgeries You've Undergone.
                                            </li>
                                            <li>Have Disclosed Any Prescription Medication You're Currently Using.</li>
                                            <li>Understand That A Higher Dose Of Sildenafil, Viagra Connect, Or Tadalafil (Non-Daily Dose)
                                                 Should Only Be Attempted If You've Tried A Lower Dose Several Times In The Past Year Without Success. </li>
                                            <li>Understand That It's Best To Start Tadalafil Daily At A Higher Dose, And Then Decrease To A Lower Dose Once You've Experienced Satisfactory Results. </li>
                                            <li>Will Only Utilise One Method Of ED Treatment At A Time And Will Refrain From Combining More Than One Different Medication For This Condition.
                                            </li>
                                            <li>Will Read all patient information leaflets available</li>
                                            <li>Are Accepting Our Terms & Conditions And Terms Of Sale.</li>
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

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- 14th step end -->
                    <!-- questionnair end here -->

                    <!-- error message start -->
                    <div class="quest-v2-errorstep" style="display: none;">
                        <div class="quest-v2-error">
                            <div class="modal-dialog">
                                <div class="modal-content border-0">
                                    <div class="quest-v2-header">
                                        <a class="quest-logo" href="{{ url('/') }}">
                                            <img src="{{ asset('images/quest-logo.png')}}" alt="">
                                        </a>
                                    </div>
                                    <div class="modal-body">
                                        <div class="error-btn">
                                            <img src="{{ asset('images/error-icon.svg')}}" alt="">
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">Your safety is our top priority.</h3>
                                        <h5>Unfortunately, we can’t offer you any ED medication.</h5>
                                        <p>No recommended treatment. Based on your answers, there is no treatment
                                            suitable for you. If you think you have made an error in your responses,
                                            please click below to review your answers.</p>
                                        <p><b>Did you make a mistake?</b> Providing false information can lead to
                                            serious harm to your
                                            health.</p>
                                        <div class="form-group form-check mb-30 pb-2">
                                            <input id="check" class="form-check-input" type="checkbox"
                                                name="terms-and-services" id="terms-and-services">
                                            <label class="form-check-label m-0" for="terms-and-services">
                                                I agree only to provide accurate answers
                                            </label>
                                        </div>
                                        <button id="btncheck" type="button" class="btn-d-black close-que-modal"
                                            data-bs-dismiss="modal">Review your answers</button>
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
                                        <img src="{{ asset('images/loading-user.png')}}" alt="">
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

</body>

</html>


<!-- script for the popup -->
<script>
$('#check').change(function() {
    $('#btncheck').prop("disabled", !this.checked);
}).change()
</script>

<!-- saving questionnair -->
<script>
$(document).ready(function() {
    $("#submit_question").click(function(e) {
        e.preventDefault();
        console.log('data', $('#ed-form').serialize());
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
