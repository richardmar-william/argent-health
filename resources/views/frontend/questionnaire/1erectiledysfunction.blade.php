
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
    <title>Erectile Dysfunction</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
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
</head>
<body>
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
                <main class="quest-v2-inner-wrap">

                    <form id="1234" action="{{ route('cart_product') }}" method="POST">


                    @csrf
                        <input type="hidden" name="category_id" value="32">
                        <input type="hidden" name="session_id" value="{{ $sessionId }}">

                        <!-- questionnair start here -->
                        <!-- 1st step -->
                        <div class="quest-v2-step data-progress" data-progress="0" id="step1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-2step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar"
                                                    aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>0%</h3>
                                        </div>
                                            <h3 class="quest-v2-subh mb-30">
                                                <textarea class="in_type" readonly="readonly"  name="Q1" type="text" value="Kindly Tell Us Your Age">Kindly Tell Us Your Age</textarea>
                                            </h3>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="age-2" name="Q1_answer" value="Under 18">
                                                <label  class="open-que-error" for="age-2">Under 18  </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="age-3" name="Q1_answer" value="18-25">
                                                <label  class="open-sub-step" for="age-3">18-25 </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="age-4" name="Q1_answer" value="26-69">
                                                <label class="next-button" for="age-4">26-69  </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="age-5" name="Q1_answer" value="70 or over">
                                                <label for="age-5" class="open-sub-step" step-val="2">70 or over  </label>
                                            </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-step fixed-step" id="sub-step1">
                                <div class="inner-form-group">
                                    <h3 class="quest-v2-subh mb-30">
                                    <textarea class="in_type" readonly="readonly"  type="text" name="Q2" value="Please select all the statements that are applicable to you">Please select all the statements that are applicable to you</textarea></h3>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly"  type="radio" id="applicable-1" name="Q2_answer" value="I've never experienced an erection ">
                                            <label class="open-que-error" for="applicable-1"> I've never experienced an erection  </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly"  type="radio" id="applicable-2" name="Q2_answer" value="I've been diagnosed with cardiovascular disease">
                                            <label class="open-que-error" for="applicable-2">I've been diagnosed with cardiovascular disease </label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly"  type="radio" id="applicable-3" name="Q2_answer" value="I have previously been able to maintain an erection, but I'm now unable to do so reliably.">
                                            <label class="next-button" for="applicable-3">I have previously been able to maintain an erection, but I'm now unable to do so reliably.</label>
                                        </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 back-sub-step" href="javascript:void(0)">Back</a>
                                        </div>
                                </div>
                            </div>
                            <div class="sub-step fixed-step" id="sub-step2">
                                <div class="inner-form-group">
                                    <h3 class="quest-v2-subh mb-30">

                                        <textarea class="in_type" readonly="readonly"  type="text" name="Q3" value="Have you had your blood pressure checked within the past 6 months?">Have you had your blood pressure checked within the past 6 months?</textarea>
                                    </h3>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly"  type="radio" id="blood-months-yes" name="Q3_answer" value="Yes">
                                            <label class="open-sub-step" for="blood-months-yes"> Yes</label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input class="in_type" readonly="readonly"  type="radio" id="blood-months-no" name="Q3_answer" value="No">
                                            <label class="open-que-error" for="blood-months-no">No  </label>
                                        </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 back-sub-step" step-val="0" href="javascript:void(0)">Back</a>
                                        </div>
                                </div>
                            </div>
                            <div class="sub-step fixed-step" id="sub-step3">
                                <div class="inner-form-group">
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea class="in_type" readonly="readonly"  type="text" name="Q4" value="What was the reading of your blood pressure?">What was the reading of your blood pressure?</textarea>
                                        </h3>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="blood-press-1" name="Q4_answer" value="Less than 90/50 mmHg">
                                                <label class="open-que-error" for="blood-press-1">Less than 90/50 mmHg (low) </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="blood-press-2" name="Q4_answer" value="Between 90/50 and 140/90 mmHg">
                                                <label class="next-button" for="blood-press-2">Between 90/50 and 140/90 mmHg  (normal) </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="blood-press-3" name="Q4_answer" value="Above 140/90 mmHg">
                                                <label class="open-que-error" for="blood-press-3">Above 140/90 mmHg (high) </label>
                                            </div>
                                            <div class="quest-v2-btn">
                                                <a class="btn-d-trans btn-wt-170 back-sub-step" href="javascript:void(0)">Back</a>
                                            </div>
                                 </div>
                            </div>

                       </div>
                        <!-- 2nd step -->
                        <div class="quest-v2-step data-progress" data-progress="8" id="step2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>15%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea class="in_type" readonly="readonly"  type="text" name="Q5" value="Have you tried any of the following treatments before?">Have you tried any of the following treatments before?</textarea>
                                        </h3>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="treatment-before-1" name="Q5_answer" value="Viagra / Sildenafil">
                                                <label class="open-sub-step" for="treatment-before-1">Viagra / Sildenafil  </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="treatment-before-2" name="Q5_answer" value="Cialis / Tadalafil">
                                                <label class="open-sub-step" for="treatment-before-2">Cialis / Tadalafil </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="treatment-before-2" name="Q5_answer" value="Both">
                                                <label class="open-sub-step" for="treatment-before-2">Both</label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="treatment-before-3" name="Q5_answer" value="None of the above">
                                                <label class="next-button" for="treatment-before-3">None of the above  </label>
                                            </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-step fixed-step" id="sub-step1">
                                <div class="inner-form-group">
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea class="in_type" readonly="readonly"  type="text" name="Q6" value="Please share your experiences with these treatments, including any side effects you may have had.">Please share your experiences with these treatments, including any side effects you may have had.</textarea>
                                        </h3>
                                        <div class="form-group form-text-field">
                                            <!-- <input class="in_type" readonly="readonly"  type="text" class="form-control" id="" value=""> -->
                                            <textarea type="text" class="form-control" id="experiences" value="experiences" name="Q6_answer" ></textarea>

                                        </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-black btn-wt-300 mr-20 next-button" href="javascript:void(0)">Continue</a>
                                            <a class="btn-d-trans btn-wt-170 back-sub-step" href="javascript:void(0)">Back</a>
                                        </div>

                                </div>
                            </div>
                        </div>
                        <!-- 3rd step -->
                        <div class="quest-v2-step data-progress" data-progress="16" id="step3">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <h3>23%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                        <textarea class="in_type" readonly="readonly"  type="text" name="Q7" value="Do any of the following statements apply to you?">Do any of the following statements apply to you?</textarea>
                                        </h3>
                                        <ul class="quest-v2-list pb-30 mb-10">
                                            <li>I've had a heart attack, stroke, or mini-stroke within the past 6 months. </li>
                                            <li>I have symptoms of chest pain or any heart rhythm irregularities. </li>
                                            <li>I have issues with my heart valves.</li>
                                            <li>I have heart muscle disease.</li>
                                            <li>I become breathless or experience chest pain with light exertion, such as climbing two flights of stairs. </li>
                                            <li>I've been advised to refrain from sexual activity for medical reasons. </li>
                                            <li>I have or have had heart or neurological conditions.</li>
                                        </ul>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="mini-stroke-1" name="Q7_answer" value="Yes">
                                                <label class="open-que-error" for="mini-stroke-1">Yes  </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="mini-stroke-2" name="Q7_answer" value="No">
                                                <label class="next-button" for="mini-stroke-2">No</label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="mini-stroke-3" name="Q7_answer" value="other">
                                                <label class="open-other-step" for="mini-stroke-3" step-id="sub-step-1">other</label>
                                            </div>
                                            <!-- other step start-->
                                                <div class="other-step" data-sub-id="sub-step-1">
                                                    <div class="inner-form-group">
                                                            <div class="form-group form-text-field">
                                                                <textarea type="text" class="form-control" name="Q7_other"></textarea>
                                                            </div>
                                                            <div class="quest-v2-btn">
                                                                <a class="btn-d-black btn-wt-300 mr-20 next-button" href="javascript:void(0)">Continue</a>
                                                            </div>
                                                    </div>
                                                </div>
                                            <!-- other step end -->
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- 4th step -->
                        <div class="quest-v2-step data-progress" data-progress="25" id="step4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>30%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                        <textarea class="in_type" readonly="readonly"  type="text" name="Q8" value="Do any of the following medical conditions apply to you?">Do any of the following medical conditions apply to you?</textarea>
                                        </h3>
                                        <ul class="quest-v2-list pb-30 mb-10">
                                            <li>Serious liver problems (like cirrhosis) or kidney problems. </li>
                                            <li>Currently prescribed GTN, Isosorbide mononitrate, Isosorbide dinitrate, Nicorandil (nitrates), or Rectogesic ointment.  </li>
                                            <li>Blood pressure abnormality (below 90/50 mmHg or above 160/90 mmHg).  </li>
                                            <li>A condition affecting your penis (such as Peyronie's Disease, previous injuries, or inability to maintain an erection due to shape). </li>
                                            <li>Leukemia, multiple myeloma, sickle cell anemia, or a bleeding disorder (like hemophilia). </li>
                                            <li>Stomach ulcers or certain eye diseases like retinitis pigmentosa.  </li>
                                            <li>Taking Alpha-blockers (medication for high blood pressure or prostate condition). </li>
                                        </ul>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="medical-1" name="Q8_answer" value="Yes">
                                                <label class="open-que-error" for="medical-1">Yes </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="medical-2" name="Q8_answer" value="No">
                                                <label class="next-button" for="medical-2">No</label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="medical-3" name="Q8_answer" value="other">
                                                <label class="open-other-step" for="medical-3" step-id="sub-step-1">other</label>
                                            </div>
                                            <!-- other step start-->
                                            <div class="other-step" data-sub-id="sub-step-1">
                                                <div class="inner-form-group">
                                                        <div class="form-group form-text-field">
                                                            <textarea type="text" class="form-control" name="Q8_other"></textarea>
                                                        </div>
                                                        <div class="quest-v2-btn">
                                                            <a class="btn-d-black btn-wt-300 mr-20 next-button" href="javascript:void(0)">Continue</a>
                                                        </div>
                                                </div>
                                            </div>
                                            <!-- other step end -->
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 5th step -->
                        <div class="quest-v2-step data-progress" data-progress="33" id="step5">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>38%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                        <textarea class="in_type" readonly="readonly"  type="text" name="Q9" value="Are you currently on any of the following medications?">Are you currently on any of the following medications?</textarea>
                                        </h3>
                                        <ul class="quest-v2-list pb-30 mb-10">
                                            <li>Nitrate medications (like GTN spray, isosorbide mononitrate/dinitrate for chest pain, or nicorandil). </li>
                                            <li>Riociguat for pulmonary hypertension. </li>
                                            <li>Recreational drugs  (such as 'poppers', 'room odorizers', amyl nitrate, butyl nitrate). </li>

                                        </ul>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="medications-1" name="Q9_answer" value="Yes">
                                                <label class="open-que-error" for="medications-1">Yes </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="medications-2" name="Q9_answer" value="No">
                                                <label class="next-button" for="medications-2">No</label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="medications-3" name="Q9_answer" value="other">
                                                <label class="open-other-step" for="medications-3" step-id="sub-step-1">other</label>
                                            </div>
                                            <!-- other step start-->
                                            <div class="other-step" data-sub-id="sub-step-1">
                                                <div class="inner-form-group">
                                                        <div class="form-group form-text-field">
                                                            <textarea type="text" class="form-control" name="Q9_other"></textarea>
                                                        </div>
                                                        <div class="quest-v2-btn">
                                                            <a class="btn-d-black btn-wt-300 mr-20 next-button" href="javascript:void(0)">Continue</a>
                                                        </div>
                                                </div>
                                                </div>
                                            <!-- other step end -->
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6th step -->
                        <div class="quest-v2-step data-progress" data-progress="41" id="step6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>46%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                        <textarea class="in_type" readonly="readonly"  type="text" name="Q10" value="Have you experienced any of the following">Have you experienced any of the following</textarea>
                                        </h3>
                                        <ul class="quest-v2-list pb-30 mb-10">
                                            <li>Loss of vision in one or both eyes. </li>
                                            <li>Sudden decrease or loss of hearing.  </li>
                                            <li>An erection that lasted more than 4 hours (priapism).   </li>
                                        </ul>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="experienced-1" name="Q10_answer" value="Yes">
                                                <label class="open-que-error" for="experienced-1">Yes </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="experienced-2" name="Q10_answer" value="No">
                                                <label class="next-button" for="experienced-2">No</label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="experienced-3" name="Q10_answer" value="other">
                                                <label class="open-other-step" for="experienced-3" step-id="sub-step-1">other</label>
                                            </div>
                                            <!-- other step start-->
                                            <div class="other-step" data-sub-id="sub-step-1">
                                                <div class="inner-form-group">
                                                        <div class="form-group form-text-field">
                                                            <textarea type="text" class="form-control" id="" value="" name="Q10_other"></textarea>
                                                        </div>
                                                        <div class="quest-v2-btn">
                                                            <a class="btn-d-black btn-wt-300 mr-20 next-button" href="javascript:void(0)">Continue</a>
                                                        </div>
                                                </div>
                                                </div>
                                            <!-- other step end -->
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button " href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 7th step -->
                        <div class="quest-v2-step data-progress" data-progress="49" id="step7">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>54%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                        <textarea class="in_type" readonly="readonly"  type="text" name="Q11" value="Do you agree to the following statement?">Do you agree to the following statement?</textarea>
                                        </h3>
                                        <ul class="quest-v2-list pb-30 mb-10">
                                            <li>I will promptly report any changes in my health or adverse effects to my doctor. </li>
                                        </ul>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="agree-2" name="Q11_answer" value="Yes">
                                                <label class="next-button" for="agree-2">Yes </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="agree-3" name="Q11_answer" value="No">
                                                <label class="open-que-error" for="agree-3">No</label>
                                            </div>

                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 8th step -->
                        <div class="quest-v2-step data-progress" data-progress="57" id="step8">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-2step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>61%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                        <textarea class="in_type" readonly="readonly"  type="text" name="Q12" value="Are you taking any medications (including over the counter or herbal medicines)? Do you have any other medical conditions not already mentioned?">Are you taking any medications (including over the counter or herbal medicines)? Do you have any other medical conditions not already mentioned?</textarea>
                                        </h3>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="herbal-1" name="Q12_answer" value="Yes">
                                                <label class="open-sub-step" for="herbal-1">Yes </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="herbal-2" name="Q12_answer" value="No">
                                                <label class="next-button" for="herbal-2">No</label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="herbal-3" name="Q12_answer" value="other">
                                                <label class="open-other-step" for="herbal-3" step-id="sub-step-1">other</label>
                                            </div>
                                            <!-- other step start-->
                                            <div class="other-step" data-sub-id="sub-step-1">
                                                <div class="inner-form-group">
                                                        <div class="form-group form-text-field">
                                                            <!-- <input type="text" class="form-control" name="Q12_other" id="" value=""> -->
                                                            <textarea type="text" class="form-control" name="Q12_other" id="" value=""></textarea>
                                                        </div>
                                                        <div class="quest-v2-btn">
                                                            <a class="btn-d-black btn-wt-300 mr-20 next-button" href="javascript:void(0)">Continue</a>
                                                        </div>
                                                </div>
                                                </div>
                                            <!-- other step end -->
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-step fixed-step" id="sub-step1">
                                <div class="inner-form-group">
                                    <h3 class="quest-v2-subh mb-30">
                                    <textarea class="in_type" readonly="readonly"  type="text" name="Q13" value="Please list all your medications you take and any other medical conditions.">Please list all your medications you take and any other medical conditions.</textarea>
                                    </h3>
                                        <div class="form-group form-text-field">
                                            <!-- <input class="in_type" readonly="readonly"  type="text" class="form-control" id="" value=""> -->
                                            <textarea type="text" class="form-control" id="list_all_your_medications" value="" name="Q13_answer" ></textarea>
                                        </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-black btn-wt-300 mr-20 next-button" href="javascript:void(0)">Continue</a>
                                            <a class="btn-d-trans btn-wt-170 back-sub-step" href="javascript:void(0)">Back</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- 9th step -->
                        <div class="quest-v2-step data-progress" data-progress="65" id="step9">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>69%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                        <textarea class="in_type" readonly="readonly"  type="text" name="Q14" value="Does any of the following statements regarding allergies apply to you?">Does any of the following statements regarding allergies apply to you?</textarea>
                                        </h3>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="allergies-1" name="Q14_answer" value="I have an allergy to a medicine or substance">
                                                <label class="open-sub-step" for="allergies-1">I have an allergy to a medicine or substance </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="allergies-2" name="Q14_answer" value="I have lactose intolerance but not a lactose allergy">
                                                <label for="allergies-2"  class="open-sub-step" step-val="2">I have lactose intolerance but not a lactose allergy</label>
                                            </div>
                                            <div class="form-group form-radio ">
                                                <input class="in_type" readonly="readonly"  type="radio" id="allergies-3" name="Q14_answer" value="I have no allergies">
                                                <label  class="next-button" for="allergies-3">I have no allergies</label>
                                            </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-step fixed-step" id="sub-step1">
                                <div class="inner-form-group">
                                    <h3 class="quest-v2-subh mb-30">
                                    <textarea class="in_type" readonly="readonly"  type="text" name="Q15" value="Please list any substances or medicines that you may have allergies to.">Please list any substances or medicines that you may have allergies to.</textarea>
                                    </h3>
                                        <div class="form-group form-text-field">
                                            <!-- <input class="in_type" readonly="readonly"  type="text" class="form-control" id="" value=""> -->
                                            <textarea type="text" class="form-control" id="have_allergies" value="" name="Q15_answer" ></textarea>
                                        </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-black btn-wt-300 mr-20 next-button" href="javascript:void(0)">Continue</a>
                                            <a class="btn-d-trans btn-wt-170 back-sub-step" href="javascript:void(0)">Back</a>
                                        </div>
                                </div>
                            </div>
                            <div class="sub-step fixed-step" id="sub-step2">
                                <div class="inner-form-group">
                                    <h3 class="quest-v2-subh mb-30"> <div class="inner-form-group">
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea class="in_type" readonly="readonly"  type="text" name="Q16" value="Our tablets contain minuscule amounts of lactose. If you have previously taken a tablet formulation without any symptoms, it's unlikely that you'll experience adverse effects from the lactose in our tablets.">Our tablets contain minuscule amounts of lactose. If you have previously taken a tablet formulation without any symptoms, it's unlikely that you'll experience adverse effects from the lactose in our tablets.</textarea>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="tablets-1" name="Q16_answer" value="I'm comfortable with proceeding to be assessed for a prescription">
                                                <label class="next-button" for="tablets-1"> I'm comfortable with proceeding to be assessed for a prescription </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="tablets-2" name="Q16_answer" value="I can't tolerate even small amounts of lactose">
                                                <label class="open-que-error" for="tablets-2">I can't tolerate even small amounts of lactose  </label>
                                            </div>
                                            <div class="quest-v2-btn">
                                                <a class="btn-d-trans btn-wt-170 back-sub-step" step-val="0" href="javascript:void(0)">Back</a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 10th step -->
                        <div class="quest-v2-step data-progress" data-progress="74" id="step10">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>77%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea class="in_type" readonly="readonly"  type="text" name="Q17" value="Please share with us any significant illnesses, ongoing medical conditions, medications (prescribed or over-the-counter) you're currently taking, allergies to medication, or surgical procedures you've undergone. This information is crucial for our clinicians to ensure the prescribed treatment is safe for you.">Please share with us any significant illnesses, ongoing medical conditions, medications (prescribed or over-the-counter) you're currently taking, allergies to medication, or surgical procedures you've undergone. This information is crucial for our clinicians to ensure the prescribed treatment is safe for you.</textarea>
                                        </h3>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="significant-1" name="Q17_answer" value="I have a significant illness, ongoing medical condition,
                                                    allergy to medication, or take prescribed or over-the-counter medication to inform you about.">
                                                <label class="open-sub-step" for="significant-1">I have a significant illness, ongoing medical condition,
                                                    allergy to medication, or take prescribed or over-the-counter medication to inform you about.  </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="significant-2" name="Q17_answer" value="I don't have a significant illness, ongoing medical condition, operation,
                                                    allergy to medication, or take prescribed or over-the-counter medication to inform you about">
                                                <label class="next-button" for="significant-2">I don't have a significant illness, ongoing medical condition, operation, allergy to medication, or take prescribed or over-the-counter medication to inform you about. </label>
                                            </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-step fixed-step" id="sub-step1">
                                <div class="inner-form-group">
                                    <h3 class="quest-v2-subh mb-30">
                                    <textarea class="in_type" readonly="readonly"  type="text" name="Q18" value="Please provide more information about your condition or medication.">Please provide more information about your condition or medication.</textarea>
                                    </h3>
                                        <div class="form-group form-text-field">
                                            <textarea type="text" class="form-control" id="more_information_about_your_condition" value="" name="Q18_answer" ></textarea>
                                        </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-black btn-wt-300 mr-20 next-button" href="javascript:void(0)">Continue</a>
                                            <a class="btn-d-trans btn-wt-170 back-sub-step" href="javascript:void(0)">Back</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- 11th step -->
                        <div class="quest-v2-step data-progress" data-progress="82" id="step11">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>85%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                        <textarea class="in_type" readonly="readonly"  type="text" name="Q19" value="Would you like us to inform your GP about your treatment?">Would you like us to inform your GP about your treatment?</textarea>
                                        </h3>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="inform-1" name="Q19_answer" value="Yes">
                                                <label class="open-sub-step" for="inform-1">Yes </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="inform-2" name="Q19_answer" value="No">
                                                <label class="next-button" for="inform-2">No</label>
                                            </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-step fixed-step" id="sub-step1">
                                <div class="inner-form-group">
                                    <h3 class="quest-v2-subh mb-30">
                                    <textarea class="in_type" readonly="readonly"  type="text" name="Q20" value="Please provide your GP's contact information?">Please provide your GP's contact information?</textarea>
                                    </h3>
                                        <div class="form-group form-text-field">
                                            <!-- <input class="in_type" readonly="readonly"  type="text" class="form-control" id="" value=""> -->
                                            <textarea type="text" class="form-control" id="GP's_contact" value="" name="Q20_answer" ></textarea>
                                        </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-black btn-wt-300 mr-20 next-button" href="javascript:void(0)">Continue</a>
                                            <a class="btn-d-trans btn-wt-170 back-sub-step" href="javascript:void(0)">Back</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- 12th step -->
                        <div class="quest-v2-step data-progress" data-progress="91" id="step12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>93%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                        <textarea class="in_type" readonly="readonly"  type="text" name="Q21" value="On average, how often do you anticipate having sex and using these medications?">On average, how often do you anticipate having sex and using these medications?</textarea>
                                        </h3>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="anticipate-1" name="Q21_answer" value="Less than once per week  " >
                                                <label class="next-button" for="anticipate-1">Less than once per week  </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="anticipate-2" name="Q21_answer" value="1-2 times per week " >
                                                <label class="next-button"  for="anticipate-2">1-2 times per week </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="anticipate-3" name="Q21_answer" value="2-3 times per week">
                                                <label class="next-button"  for="anticipate-3">2-3 times per week </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="anticipate-4" name="Q21_answer" value="More than 3 per week">
                                                <label  class="next-button" for="anticipate-4">More than 3 per week </label>
                                            </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 13th step -->
                        <div class="quest-v2-step data-progress" data-progress="100" id="step13">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>100%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                        <textarea class="in_type" readonly="readonly"  type="text" name="Q22" value="How would you prefer to take your medication?">How would you prefer to take your medication?</textarea>
                                        </h3>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="prefer-1" name="Q22_answer" value="1 hour before sexual intercourse">
                                                <label  class=""  for="prefer-1">1 hour before sexual intercourse </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input class="in_type" readonly="readonly"  type="radio" id="prefer-2" name="Q22_answer" value="I'd rather not plan and take the tablet beforehand ">
                                                <label  class=""  for="prefer-2">I'd rather not plan and take the tablet beforehand  </label>
                                            </div>
                                            <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                            <!-- <input id="submit_question" type="submit" class="btn-d-black btn-wt-170"  name="submit" value="Submit Questionanair for ED"> -->
                                            <button type="submit" class="btn-d-black btn-wt-300 mr-20">Continue</button>
                                        </div>
                                        <p  class="quest-desc">Before you submit your responses, please review them carefully. Our licensed clinician will go through
                                            your answers and get back to you shortly if a prescription is appropriate. By submitting this questionnaire, you are agreeing
                                            to our Terms & Conditions and Terms of Sale.</p>



                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 14th step end -->
                        <!-- questionnair end here -->
                        <div class="quest-v2-step" id="step14">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="v2-1step-cont">
                                        <h4 class="weare-going-con mb-20">We're about to ask you a few essential questions regarding your health and your history of erectile dysfunction. This information will help us determine if a prescription could be beneficial for you.
                                            A licensed clinician from our team will review your responses and get back to you shortly if the medication is deemed appropriate.</h4>
                                        <h3 class="list-heading mb-30">By clicking “Next”, you're affirming that you:</h3>
                                        <ul class="quest-v2-list pb-30 mb-30">
                                            <li>Are filling out this survey truthfully and to the best of your abilities in a truthful manner. </li>
                                            <li>Were assigned male at birth and are currently experiencing symptoms of erectile dysfunction. </li>
                                            <li>Will disclose any significant illnesses or surgeries you've undergone. </li>
                                            <li>Will disclose any prescription medication you're currently using.</li>
                                            <li>Understand that a higher dose of sildenafil, Viagra Connect, or tadalafil (non-daily dose) should only be attempted if you've tried a lower dose several times in the past year without success. </li>
                                            <li>Understand that it's best to start tadalafil daily at a higher dose, and then decrease to a lower dose once you've experienced satisfactory results. </li>
                                            <li>Will only utilize one method of ED treatment at a time and will refrain from combining more than one different medication for this condition. </li>
                                            <li>Are accepting our Terms & Conditions and Terms of Sale.</li>
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
                                                        Licensed medication</a>
                                                    </li>
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
                                                    Free 24 Hour Shipping</a>
                                                </li>
                                         <li>
                                            <a href="javascript:void(0)"><?xml version="1.0" standalone="no"?>
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
                                                    Cancel anytime
                                                 </a>
                                            </li>

                                        </ul>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-black btn-wt-300 mr-20 next-button" href="javascript:void(0)">Next</a>
                                            <a class="btn-d-trans btn-wt-170 prev-button" href="{{ url('/questionnaireCat') }}">Back</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12">
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
                                        <li><a href="javascript:void(0)">
                                            <?xml version="1.0" standalone="no"?>
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
                    </form>
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
                                    <p>No recommended treatment. Based on your answers, there is no treatment suitable for you. If you think you have made an error in your responses, please click below to review your answers.</p>
                                    <p><b>Did you make a mistake?</b> Providing false information can lead to serious harm to your
                                        health.</p>
                                    <div class="form-group form-check mb-30 pb-2">
                                        <input  id="check" class="form-check-input" type="checkbox" name="terms-and-services"
                                            id="terms-and-services">
                                        <label class="form-check-label m-0" for="terms-and-services">
                                            I agree only to provide accurate answers
                                        </label>
                                    </div>
                                    <button id="btncheck" type="button" class="btn-d-black close-que-modal" data-bs-dismiss="modal">Review your answers</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
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
        $('#check').change(function () {
        $('#btncheck').prop("disabled", !this.checked);
        }).change()
  </script>

<!-- saving questionnair -->
<script>
$(document).ready(function(){
    $("#submit_question").click(function(e){
    e.preventDefault();
    console.log('data',$('#ed-form').serialize());
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
</script>
