{{--e
    @extends('layouts.app')
    @section('title', 'Questionnaire')
     --}}
     @section('content')
    <!-- Modal -->



    <!DOCTYPE HTML>
    <html lang="en-US">

    <head>
        <meta charset="UTF-8" />
        <meta name="language" content="en" />
        <meta name="country" content="us" />
        <meta name="robots" content="INDEX, FOLLOW" />
        <title>Beard Growth</title>
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
        <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}">
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
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('frontend/js/vendor/modernizr-2.8.3.min.js') }}"></script>
        <script src="{{ asset('frontend/js/vendor/jquery-1.12.0.min.js') }}"></script>
    <!-- Add CkEditor -->

    </head>
    <body>
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
                        <!-- 1st step -->
                        <div class="quest-v2-step data-progress" data-progress="8" id="step1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-2step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 10%;"
                                                    aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <h3>8%</h3>
                                        </div>
                                    <form id="bg-form" action="{{ route('cart_product') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="category_id" value="31">
                                        <input type="hidden" name="session_id" value="{{ $sessionId }}">
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea readonly="readonly" class="in_type" type="text" name="Q1" value="IDENTIFY YOUR BIRTH GENDER">IDENTIFY YOUR BIRTH GENDER</textarea>
                                           <!-- <input class="in_type" type="text" name="IDENTIFY YOUR BIRTH GENDER" value="IDENTIFY YOUR BIRTH GENDER"> -->
                                        </h3>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="birth-gender-1" name="Q1_answer" value="Male">
                                                <label class="next-button" for="birth-gender-1">Male </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="birth-gender-2" name="Q1_answer" value="Female">
                                                <label  class="open-que-error" for="birth-gender-2" data-error="Regrettably, Agent's beard growth products are currently designed only for those identified as male at birth. Made a mistake? Please click here to review your answer.">Female</label>
                                            </div>
                                            <div class="quest-v2-btn">
                                                <!-- <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a> -->
                                                <a class="btn-d-trans btn-wt-170 prev-button" href="http://49.249.236.30:3007/agent/public/questionnaireCat">Back</a>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 2nd step -->
                        <div class="quest-v2-step data-progress" data-progress="16" id="step2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 15%;"
                                                    aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>15%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                            <!-- <input class="in_type" type="text" name="PLEASE INDICATE YOUR AGE GROUP" value="PLEASE INDICATE YOUR AGE GROUP"> -->
                                            <textarea readonly="readonly" class="in_type" type="text" name="Q2" value="PLEASE INDICATE YOUR AGE GROUP">PLEASE INDICATE YOUR AGE GROUP</textarea>
                                        </h3>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="age-group-1" name="Q2_answer" value="Under 18">
                                                <label class="open-que-error" for="age-group-1" data-error="Unfortunately, your provided age makes you unsuitable for this Agent treatment. Made a mistake? Please click here to review your answer.">Under 18 </label>
                                            </div>
                                            <div class="form-group form-radio ">
                                                <input type="radio" id="age-group-2" name="Q2_answer" value="18-65">
                                                <label class="next-button" for="age-group-2">18-65</label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="age-group-3" name="Q2_answer" value="Over 65">
                                                <label class="next-button" for="age-group-3">Over 65  </label>
                                            </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 3rd step -->
                        <div class="quest-v2-step data-progress" data-progress="25" id="step3">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>25%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea readonly="readonly" class="in_type" type="text" name="Q3" value="DESCRIBE YOUR CURRENT BEARD GROWTH">DESCRIBE YOUR CURRENT BEARD GROWTH</textarea>
                                         </h3>
                                             <div class="form-group form-radio">
                                                 <input type="radio" id=" beard-growth-1" name="Q3_answer" value="No growth at all">
                                                 <label class="open-que-error" for=" beard-growth-1" data-error="A complete absence of beard growth could indicate a hormonal issue or an autoimmune condition. It's best to consult your GP who can conduct an investigation into the root cause of your inability to grow beard hair.">No growth at all  </label>
                                             </div>
                                             <div class="form-group form-radio">
                                                 <input type="radio" id=" beard-growth-2" name="Q3_answer" value="Hair loss over/around red inflamed areas">
                                                 <label class="open-que-error" for=" beard-growth-2" data-error="Hair loss around red or inflamed skin could signal dermatitis or a fungal infection. Consult your GP for an investigation or to prescribe medication to help with the skin condition.">Hair loss over/around red inflamed areas</label>
                                             </div>
                                             <div class="form-group form-radio ">
                                                 <input type="radio" id=" beard-growth-3" name="Q3_answer" value="Defined circular areas of no growth">
                                                 <label  class="open-que-error"  for=" beard-growth-3" data-error="Defined circular areas of hair loss on the beard may suggest a form of alopecia. Consult your GP for further investigation.">Defined circular areas of no growth </label>
                                             </div>
                                             <div class="form-group form-radio">
                                                 <input type="radio" id=" beard-growth-4" name="Q3_answer" value="Slow or patchy growth">
                                                 <label class="next-button" for=" beard-growth-4">Slow or patchy growth  </label>
                                             </div>

                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 4th step -->
                        <div class="quest-v2-step data-progress" data-progress="32" id="step4">
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
                                            <textarea  readonly="readonly" class="in_type" type="text" name="Q4" value="HAVE YOU OBSERVED ANY SUDDEN CHANGES IN YOUR BEARD GROWTH?">HAVE YOU OBSERVED ANY SUDDEN CHANGES IN YOUR BEARD GROWTH?</textarea>
                                        </h3>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="observed-1" name="Q4_answer" value="Yes">
                                                <label class="open-que-error" for="observed-1" data-error="The safety of our patients is our top priority. Unfortunately, the treatment you selected is not designed for sudden hair loss, which may signal an underlying condition. We recommend contacting your GP for advice.">Yes </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="observed-2" name="Q4_answer" value="No">
                                                <label class="next-button" for="observed-2">No</label>
                                            </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 5th step -->
                        <div class="quest-v2-step data-progress" data-progress="40" id="step5">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 35%;"
                                                    aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>35%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                          <!-- <input class="in_type" type="text" name="HAVE YOU EXPERIENCED HAIR LOSS ON OTHER PARTS OF YOUR BODY?" value="HAVE YOU EXPERIENCED HAIR LOSS ON OTHER PARTS OF YOUR BODY?">  -->
                                          <textarea readonly="readonly" class="in_type" type="text" name="Q5" value="HAVE YOU EXPERIENCED HAIR LOSS ON OTHER PARTS OF YOUR BODY?">HAVE YOU EXPERIENCED HAIR LOSS ON OTHER PARTS OF YOUR BODY?</textarea>
                                        </h3>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="exp-hair-loss-1" name="Q5_answer" value="Yes">
                                                <label  class="open-sub-step" for="exp-hair-loss-1">Yes </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="exp-hair-loss-2" name="Q5_answer" value="No">
                                                <label class="next-button" for="exp-hair-loss-2">No</label>
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
                                        <textarea readonly="readonly" class="in_type" type="text" name="Q6" value="Please specify the areas of your body affected and how long you have been experiencing this hair loss.">Please specify the areas of your body affected and how long you have been experiencing this hair loss.</textarea>
                                      <!-- <input class="in_type" type="text" name="Please specify the areas of your body affected and how long you have been experiencing this hair loss." value="Please specify the areas of your body affected and how long you have been experiencing this hair loss.">  -->
                                    </h3>
                                        <div class="form-group form-text-field">
                                            <input type="text" class="form-control" id="" name="Q6_answer" value="">
                                        </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-black btn-wt-300 mr-20 next-button" href="javascript:void(0)">Continue</a>
                                            <a class="btn-d-trans btn-wt-170 back-sub-step" href="javascript:void(0)">Back</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- 6th step -->
                        <div class="quest-v2-step data-progress" data-progress="49" id="step6">
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
                                          <!-- <input class="in_type" type="text" name="HAVE YOU USED MINOXIDIL IN THE PAST 12 MONTHS?" value="HAVE YOU USED MINOXIDIL IN THE PAST 12 MONTHS?">  -->
                                          <textarea  readonly="readonly"class="in_type" type="text" name="Q7" value="HAVE YOU USED MINOXIDIL IN THE PAST 12 MONTHS?">HAVE YOU USED MINOXIDIL IN THE PAST 12 MONTHS?</textarea>
                                        </h3>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="minoxidil-1" name="Q7_answer" value="Yes-1">
                                                <label class="open-sub-step" for="minoxidil-1">Yes </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="minoxidil-2" name="Q7_answer" value="no-2">
                                                <label class="next-button" for="minoxidil-2">No</label>
                                            </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button " href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-step fixed-step" id="sub-step1">
                                <div class="inner-form-group">
                                    <h3 class="quest-v2-subh mb-30">
                                        <textarea readonly="readonly" class="in_type" type="text" name="Q8" value="Please provide details about your previous experience with minoxidil, including formulation, efficacy, and side effects.">Please provide details about your previous experience with minoxidil, including formulation, efficacy, and side effects.</textarea>
                                       <!-- <input class="in_type" type="text" name="Please provide details about your previous experience with minoxidil, including formulation, efficacy, and side effects." value="Please provide details about your previous experience with minoxidil, including formulation, efficacy, and side effects.">  -->
                                    </h3>
                                        <div class="form-group form-text-field">
                                            <input type="text" class="form-control" id="" name="Q8_answer" value="">
                                        </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-black btn-wt-300 mr-20 next-button" href="javascript:void(0)">Continue</a>
                                            <a class="btn-d-trans btn-wt-170 back-sub-step" href="javascript:void(0)">Back</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- 7th step -->
                        <div class="quest-v2-step data-progress" data-progress="56" id="step7">
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
                                            <textarea readonly="readonly" class="in_type" type="text" name="Q9" value="DO YOU HAVE A KNOWN ALLERGY TO MINOXIDIL?">DO YOU HAVE A KNOWN ALLERGY TO MINOXIDIL?</textarea>
                                          <!-- <input class="in_type" type="text" name="DO YOU HAVE A KNOWN ALLERGY TO MINOXIDIL?" value="DO YOU HAVE A KNOWN ALLERGY TO MINOXIDIL?">  -->
                                        </h3>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="allergy-1" name="Q9_answer" value="Yes">
                                                <label class="open-que-error"  for="allergy-1" data-error="Unfortunately, our topical solution contains minoxidil which is unsuitable if you are allergic.">Yes </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="allergy-2" name="Q9_answer" value="No">
                                                <label class="next-button" for="allergy-2">No</label>
                                            </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 8th step -->
                        <div class="quest-v2-step data-progress" data-progress="64" id="step8">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-2step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 45%;"
                                                    aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>45%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea readonly="readonly" class="in_type" type="text" name="Q10" value="DO YOU HAVE SENSITIVE OR DAMAGED SKIN, OR A DIAGNOSED SKIN CONDITION IN THE BEARD AREA?">DO YOU HAVE SENSITIVE OR DAMAGED SKIN, OR A DIAGNOSED SKIN CONDITION IN THE BEARD AREA?</textarea>
                                           <!-- <input class="in_type" type="text" name="DO YOU HAVE SENSITIVE OR DAMAGED SKIN, OR A DIAGNOSED SKIN CONDITION IN THE BEARD AREA?" value="DO YOU HAVE SENSITIVE OR DAMAGED SKIN, OR A DIAGNOSED SKIN CONDITION IN THE BEARD AREA?">  -->
                                        </h3>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="damaged-1" name="10_answer" value="Yes">
                                                <label class="open-sub-step" for="damaged-1">Yes </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="damaged-2" name="10_answer" value="No">
                                                <label class="next-button" for="damaged-2">No</label>
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
                                        <textarea readonly="readonly" class="in_type" type="text" name="Q11" name="Please provide details about your skin condition, including any diagnosis if applicable.">Please provide details about your skin condition, including any diagnosis if applicable.</textarea>
                                     <!-- <input class="in_type" type="text" name="Please provide details about your skin condition, including any diagnosis if applicable." value="Please provide details about your skin condition, including any diagnosis if applicable."> -->
                                    </h3>
                                        <div class="form-group form-text-field">
                                            <input type="text" class="form-control" id="skin_condition" name="Q11_answer" value="">
                                        </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-black btn-wt-300 mr-20 next-button" href="javascript:void(0)">Continue</a>
                                            <a class="btn-d-trans btn-wt-170 back-sub-step" href="javascript:void(0)">Back</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- 9th step -->
                        <div class="quest-v2-step data-progress" data-progress="73" id="step9">
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
                                            <textarea readonly="readon" class="in_type" type="text" name="Q12" name="HAVE YOU BEEN DIAGNOSED WITH HIGH OR LOW BLOOD PRESSURE?">HAVE YOU BEEN DIAGNOSED WITH HIGH OR LOW BLOOD PRESSURE?</textarea>
                                        <!-- <input class="in_type" type="text" name="HAVE YOU BEEN DIAGNOSED WITH HIGH OR LOW BLOOD PRESSURE?" value="HAVE YOU BEEN DIAGNOSED WITH HIGH OR LOW BLOOD PRESSURE?"> -->
                                        </h3>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="diagnosed-1" name="Q12_answer" value="Yes">
                                                <label class="open-que-error"  for="diagnosed-1" data-error="This treatment is not suitable for you.">Yes </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="diagnosed-2" name="Q12_answer" value="diagnosed-2">
                                                <label class="next-button" for="diagnosed-2">No</label>
                                            </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 10th step -->
                        <div class="quest-v2-step data-progress" data-progress="81" id="step10">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 60%;"
                                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>60%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea readonly="readonly" class="in_type" type="text" name="Q13" name="DO YOU SMOKE?">DO YOU SMOKE?</textarea>
                                        <!-- <input class="in_type" type="text" name="DO YOU SMOKE?" value="DO YOU SMOKE?"> -->
                                        </h3>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="smoke-1" name="Q13_answer" value="Yes">
                                                <label class="next-button" for="smoke-1">Yes </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="smoke-2" name="Q13_answer" value="No">
                                                <label class="next-button" for="smoke-2">No</label>
                                            </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 11th step -->
                        <div class="quest-v2-step data-progress" data-progress="88" id="step11">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 70%;"
                                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>70%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea readonly="readonly" class="in_type" type="text" name="Q14" value="HAVE YOU HAD ANY OF THE FOLLOWING:">HAVE YOU HAD ANY OF THE FOLLOWING:</textarea>
                                        <!-- <input class="in_type" type="text" name="HAVE YOU HAD ANY OF THE FOLLOWING:" value="HAVE YOU HAD ANY OF THE FOLLOWING:"> -->
                                        </h3>
                                        <ul class="quest-v2-list pb-30">
                                            <li>Major illnesses</li>
                                            <li>Ongoing medical conditions</li>
                                            <li>Prescribed or over-the-counter medication that you currently take</li>
                                            <li>Allergies to medication</li>
                                            <li>Recent operations</li>
                                        </ul>
                                        <p class="quest-desc mb-30">Your responses will help our clinicians determine if the prescription is safe for you.</p>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="safe-1" name="Q14_answer" value="Yes">
                                                <label class="open-sub-step" for="safe-1">Yes </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="safe-2" name="Q14_answer" value="No">
                                                <label class="next-button" for="safe-2">No </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="safe-3" name="Q14_answer" value="other">
                                                <label class="open-other-step" for="safe-3" step-id="sub-step-1">other</label>
                                            </div>
                                            <!-- other step start-->
                                            <div class="other-step" data-sub-id="sub-step-1">
                                                <div class="inner-form-group">
                                                        <div class="form-group form-text-field">
                                                            <!-- <input type="text" class="form-control" name="Q14_other" id="" value=""> -->
                                                            <textarea type="text" class="form-control" id="" value="" name="Q14_answer"></textarea>
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
                            <div class="sub-step fixed-step" id="sub-step2">
                                <div class="inner-form-group">
                                    <h3 class="quest-v2-subh mb-30">
                                        <textarea readonly="readonly" class="in_type" type="text" name="Q15" value="HAVE YOU HAD ANY OF THE FOLLOWING:Please provide specific details about any or all of the above conditions that apply to you.">HAVE YOU HAD ANY OF THE FOLLOWING:Please provide specific details about any or all of the above conditions that apply to you.</textarea>
                                       <!-- <input class="in_type" type="text" name="HAVE YOU HAD ANY OF THE FOLLOWING:Please provide specific details about any or all of the above conditions that apply to you." value="HAVE YOU HAD ANY OF THE FOLLOWING:Please provide specific details about any or all of the above conditions that apply to you."> -->
                                    </h3>
                                        <div class="form-group form-text-field">
                                            <input type="text" class="form-control" id="" name="Q15_answer" >
                                        </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-black btn-wt-300 mr-20 next-button" href="javascript:void(0)">Continue</a>
                                            <a class="btn-d-trans btn-wt-170 back-sub-step" href="javascript:void(0)">Back</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- 12th step -->
                        <div class="quest-v2-step data-progress" data-progress="100" id="step12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-3step-cont">
                                        <div class="quest-progress-bar">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 100%;"
                                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <h3>90%</h3>
                                        </div>
                                        <h3 class="quest-v2-subh mb-30">
                                            <textarea readonly="readonly" class="in_type" type="text" name="Q16" value="WOULD YOU LIKE TO INFORM YOUR GP ABOUT THIS CONSULTATION?">WOULD YOU LIKE TO INFORM YOUR GP ABOUT THIS CONSULTATION?</textarea>
                                         <!-- <input class="in_type" type="text" name="WOULD YOU LIKE TO INFORM YOUR GP ABOUT THIS CONSULTATION?" value="WOULD YOU LIKE TO INFORM YOUR GP ABOUT THIS CONSULTATION?"> -->
                                        </h3>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="prefer-1" name="Q16_answer" value="Yes">
                                                <label class="open-sub-step" for="prefer-1">Yes </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="prefer-2" name="Q16_answer" value="No">
                                                <label class="" for="prefer-2">No </label>
                                            </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                            <input id="submit_question2" type="submit" class="btn-d-black btn-wt-170 next-button"  name="submit" value="Submit Questionanair for Beard Growth">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-step fixed-step" id="sub-step1">
                                <div class="inner-form-group">
                                    <h3 class="quest-v2-subh mb-30">
                                    <textarea readonly="readonly" class="in_type" type="text" name="Q17" value="WOULD YOU LIKE TO INFORM YOUR GP ABOUT THIS CONSULTATION?">WOULD YOU LIKE TO INFORM YOUR GP ABOUT THIS CONSULTATION?</textarea>
                                    <!-- <input class="in_type" type="text" name="Please provide your GP's name and the practice's address." value="Please provide your GP's name and the practice's address."> -->
                                    </h3>
                                        <div class="form-group form-text-field">
                                            <input type="text" class="form-control" id="" name="Q17_answer" value="">
                                        </div>
                                        <div class="quest-v2-btn">
                                        <input id="submit_question2" type="submit" class="btn-d-black btn-wt-170 next-button"  name="submit" value="Submit Questionanair for Beard Growth">
                                            <a class="btn-d-trans btn-wt-170 back-sub-step" href="javascript:void(0)">Back</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- 13th step end -->




                        <!-- product steps start -->
                        <form action="{{ route('checkout.index') }}" method="POST">
                            @csrf
                            <div class="quest-v2-step" id="step13">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="v2-5step-cont">
                                            <div class="back-btn-content mb-40">
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
                                                    <div class="col-lg-1 col-md-2 col-6 d-flex justify-content-end">
                                                        <a href="javascript:void(0)" class="text-icon-btn"><i class="fa-solid fa-circle-question"></i>Help</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="quest-v2-btn recommended-btn text-center">
                                                <a class="btn-d-black btn-wt-300" href="javascript:void(0)">Recommended for
                                                    you</a>
                                            </div>

                                             <!-- recocomndation sec start-->
                                             @php
                                                    $product1 = \App\Models\Product::where('category_id', 31)->get();
                                            @endphp
                                            <div class="recmd-tabcard-main mb-40">
                                                <div class="recmd-tablets-card treat-option mt-30">
                                                   <div class="mb-4">
                                                   <div class="r-t-card-body flex-*-wrap">
                                                        <figure>
                                                            <img src="{{ asset('frontend_new/images/beard-hd-1.JPG') }}" alt="">
                                                        </figure>
                                                        <div class="r-t-body-cont">
                                                            <h5>Full Beard Growth Kit</h5>
                                                            <p>Introducing The All-Inclusive Beard Growth Kit, Your Key To Unlocking The
                                                                Full Potential Of Your Facial Hair. Our Premium Package Includes A Powerful
                                                                Topical Minoxidil 5% Solution, A High-Quality Derma Roller With 0.55mm
                                                                Titanium Needles And A Sanitizer. Experience A Comprehensive Approach To
                                                                Beard Growth And Invest In Your Facial Hair's Future.</p>
                                                            <h4>from £2.40</h4>
                                                        </div>
                                                    </div>
                                                    <div class="r-t-card-footer">
                                                        <div class="tablets-list-box">
                                                                <!-- <button type="button" onclick="cartItem('Full Beard Growth Kit','2.40')" class="btn-d-black" title="Add To Cart">
                                                                    <i class="fa-solid fa-circle-plus me-2"></i>Add</button> -->
                                                                <a href="javascript:void(0);" onclick="AddToCart(33)" class="trans-btn black-btn learn-more-card-btn detailbtn">Add</a>
                                                        </div>
                                                    </div>
                                                   </div>


                                                    <div class="mb-4">
                                                        <div class="r-t-card-body">
                                                            <figure>
                                                                <img src="{{ asset('frontend_new/images/beard-slide-2.JPG') }}" alt="">
                                                            </figure>
                                                            <div class="r-t-body-cont">
                                                                <h5>Beard care accessories</h5>
                                                                <p>Introducing Agent's Beard Care Accessories, Your Ultimate Grooming Arsenal.
                                                                    Our Sophisticated Set Includes A Premium Derma Roller, A Sanitiser And High- Quality
                                                                    Biotin Vitamins. Enhance Your Grooming Routine With This Trio And Invest In The Future Of Your Beard.
                                                                <h4>from £2.40 </h4>
                                                            </div>
                                                        </div>
                                                    <div class="r-t-card-footer">
                                                        <div class="tablets-list-box">
                                                                <!-- <button type="button" onclick="cartItem('Beard care accessories','2.40')" class="btn-d-black" title="Add To Cart">
                                                                <i class="fa-solid fa-circle-plus me-2"></i>Add</button> -->
                                                                <a href="javascript:void(0);" onclick="AddToCart(34)" class="trans-btn black-btn learn-more-card-btn detailbtn">Add</a>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                 <!-- recocomndation sec end-->

                                                   <!-- all treatment sec start -->
                                                <h3 class="quest-v2-subh text-center mt-40 other-recmd">
                                                    Other Recommendation for you
                                                </h3>
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
                                                            <img src="{{asset('storage/images/products/')}}{{ '/'. $media->file_name}}" alt="">
                                                        </figure>
                                                        <div class="r-t-body-cont">
                                                        <h5>{{ $products->name }}</h5>
                                                            <p>{{ $products->description }}</p>
                                                            <h4>from £{{$products->price}} </h4>
                                                        </div>
                                                    </div>
                                                    <div class="r-t-card-footer">
                                                        <div class="tablets-list-box">
                                                                <!-- <button type="button" class="btn-d-black" onclick="cartItem('{{ $products->name }}','{{ $products->price }}')" title="Add To Cart">
                                                                    <i class="fa-solid fa-circle-plus me-2"></i>Add</button> -->
                                                                <a href="javascript:void(0);" onclick="AddToCart('{{ $products->id }}')" class="trans-btn black-btn learn-more-card-btn detailbtn">Add</a>
                                                        </div>
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
                                                <a class="btn-d-black btn-wt-300 next-button" onclick="getvalue()" href="javascript:void(0)">Continue</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 14th step end -->
                            <div class="quest-v2-step" id="step14">
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
                                                    class="fa-solid fa-circle-info"></i>Choose From Dropper and Spray
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
                            <!-- 15th step end -->
                            <div class="quest-v2-step" id="step15">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="v2-7step-cont">
                                            <div class="back-btn-content">
                                                <a href="javascript:void(0)" class="text-icon-btn prev-button"><i
                                                        class="fa-sharp fa-solid fa-circle-arrow-left"></i>Back</a>
                                            </div>
                                            <div class="loading-user-img recmd-user">
                                                <img src="{{ asset('images/loading-user.png') }}" alt="">
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
                                                                    <img src="{{ asset('images/sildenafil-img.png') }}" alt="">
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
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="loading-text text-center mb-40 mt-30 pt-30">*Discount may not be applied
                                                to subsequent purchases</h5>
                                            <div class="quest-v2-btn text-center">
                                                <!-- <a class="btn-d-black btn-wt-300 next-button" href="{{ url('/checkout') }}">Continue</a> -->
                                                <!-- <a class="btn-d-black btn-wt-300 mr-20 next-button" onclick="get_type()" href="javascript:void(0)">Continue</a> -->
                                                <button type="submit" class="btn-d-black btn-wt-300">Continue</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- 16th step end -->
                        <div class="quest-v2-step data-progress" id="step16">
                            <div class="row quest-ordrsmry-wrap">
                                <div class="col-lg-5 col-md-12">
                                    <div class="quest-ordrsmry-left">
                                        <div class="card-design mb-40">
                                            <h3 class="card-heading mb-30">Your Order</h3>
                                            <div class="qos-product">
                                                <figure>
                                                    <img class="img-fluid" src="{{ asset('images/sildenafil-img.png') }}" alt="">
                                                </figure>
                                                <div class="qos-product-cont">
                                                    <h5 id="p_name"> </h5>
                                                    <p id="p_type"></p>
                                                </div>
                                                <div class="qos-product-price">
                                                    £<p id="p_price"></p>
                                                </div>
                                            </div>
                                            <div class="cstm-border"></div>
                                            <div class="qos-product-text mb-20">Subtotal <div class="price">£<p id="pr_price"></p></div>
                                            </div>
                                            <div class="qos-product-text">Add promo code </div>
                                            <div class="cstm-border"></div>
                                            <div class="qos-product-text">Delivery <div class="price">Free</div>
                                            </div>
                                            <div class="cstm-border"></div>
                                            <div class="total-amount">
                                                <h3>Total</h3>
                                                <h3>£<p id="pro_price"></p></h3>
                                            </div>
                                        </div>
                                        <div class="card-design smlprdt-offer mb-40">
                                            <h3 class="card-heading mb-30">Current offers</h3>
                                            <div class="offer-tablet-name">
                                                <figure>
                                                    <img src="{{ asset('images/sildenafil-img.png') }}" alt="">
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
                                                    <img src="{{ asset('images/sildenafil-img.png') }}" alt="">
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
                                        </div>
                                        <ul class="quest-lfc-btn">
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
                                <div class="col-lg-7 col-md-12">
                                    <div class="quest-ordrsmry-right">
                                        <h3 class="quest-v2-subh mb-30">
                                            Order summary
                                        </h3>
                                        <h4 class="q-orsm-heading mb-20">Log in to your account </h4>
                                        <p class="mb-40">Please log in to your account to complete your order.Don't have an account?
                                            <!-- <a href="{{ route('register') }}">Sign up</a> -->
                                            <a class="next-button" href="javascript:void(0)">Sign up</a>
                                        </p>
                                        <form method="POST" id="login_form" novalidate="novalidate">
                                            <div class="form-group">
                                                <label for="email">Email address</label>
                                                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter Here">
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" id="pass" name="password" value="{{ old('email') }}" placeholder="Enter Here">
                                                @error('password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="login-btn-pw">
                                                <!-- <button class="btn-d-black next-button">Login</button> -->
                                                <button type="button" class="btn-d-black next-button">Login</button>
                                              {{--  @if (Route::has('password.request'))
                                                  <a href="ja">Forget your password?</a>
                                                @endif --}}
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 17th step end -->
                        <div class="quest-v2-step" id="step17">
                            <div class="row quest-ordrsmry-wrap">
                                <div class="col-lg-5 col-md-12">
                                    <div class="quest-ordrsmry-left">
                                        <div class="card-design mb-40">
                                            <h3 class="card-heading mb-30">Your Order</h3>
                                            <div class="qos-product">
                                                <figure>
                                                    <img class="img-fluid" src="{{ asset('images/sildenafil-img.png') }}" alt="">
                                                </figure>
                                                <div class="qos-product-cont">
                                                    <h5>Sildenafil (Erectile dysfunction treatment)</h5>
                                                    <p>50mg 12 tablets monthly</p>
                                                </div>
                                                <div class="qos-product-price">
                                                    £39.00
                                                </div>
                                            </div>
                                            <div class="cstm-border"></div>
                                            <div class="qos-product-text mb-20">Subtotal <div class="price">£39.00</div>
                                            </div>
                                            <div class="qos-product-text">Add promo code </div>
                                            <div class="cstm-border"></div>
                                            <div class="qos-product-text">Delivery <div class="price">Free</div>
                                            </div>
                                            <div class="cstm-border"></div>
                                            <div class="total-amount">
                                                <h3>Total</h3>
                                                <h3>£39.00</h3>
                                            </div>
                                        </div>
                                        <div class="card-design smlprdt-offer mb-40">
                                            <h3 class="card-heading mb-30">Current offers</h3>
                                            <div class="offer-tablet-name">
                                                <figure>
                                                    <img src="{{ asset('images/sildenafil-img.png') }}" alt="">
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
                                                    <img src="{{ asset('images/sildenafil-img.png') }}" alt="">
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
                                        </div>
                                        <ul class="quest-lfc-btn">
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
                                <div class="col-lg-7 col-md-12">
                                    <div class="quest-ordrsmry-right">
                                        <h3 class="quest-v2-subh mb-20">
                                            Order summary
                                        </h3>
                                        <p class="mb-10"><b>A few details about you</b></p>
                                        <p class="mb-40">We just need a few more details before we can send your order out. These will be kept private and will never be shared unless you ask us to. Already registered? <a href="javascript:void(0)">Log in</a></p>
                                        <h4 class="q-orsm-heading mb-30">Account details</h4>
                                        <form action="" method="POST" class="pb-30">
                                            <div class="form-group">
                                                <label for="email">Email address</label>
                                                <input type="text" class="form-control" name="email" value="" placeholder="Enter Here">
                                                <p class="text-end input-desc">We will let you know via email once your prescription has been issued.</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" id="pass" name="password" value="" placeholder="Enter Here">
                                            </div>
                                        </form>
                                        <h4 class="q-orsm-heading mb-20">Personal information</h4>
                                        <p class="mb-30">We are required to confirm the identity of our members. Any incorrect details will cause delays to your order.</p>
                                        <form action="" method="POST" class="pb-30">
                                            <div class="form-group">
                                                <label for="fName">Legal First name</label>
                                                <input type="text" class="form-control" name="fName" value="" placeholder="Enter Here">
                                                <p class="text-end input-desc">We will let you know via email once your prescription has been issued.</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="Surname">Legal Surname</label>
                                                <input type="text" class="form-control" name="Surname" value="" placeholder="Enter Here">
                                            </div>
                                            <div class="form-group">
                                                <label for="dob">Date of birth</label>
                                                <input type="date" class="form-control" name="dob" value="" placeholder="Day / Month / year">
                                            </div>
                                            <div class="form-group">
                                                <label for="number">Phone number</label>
                                                <input type="number" class="form-control" name="number" value="" placeholder="Enter Here">
                                                <p class="text-end input-desc">In very rare cases our clinicians may need to call you. They will always be discreet.</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="Sex">Sex</label>
                                                <select class="form-control" aria-label="Gender Select">
                                                    <option selected>Choose sex</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                    <option value="3">Other</option>
                                                </select>
                                                <p class="text-end input-desc">What sex were you assigned at birth, as shown on your original birth certificate. This is important for us to know because it allows us to provide you with treatments as safely as possible.</p>
                                            </div>
                                        </form>
                                        <h4 class="q-orsm-heading mb-20">Delivery address</h4>
                                        <p class="mb-30">Please make sure your address is accurate. Try using our auto-complete option. This will help us confirm your identity.</p>
                                        <form action="" method="POST" class="pb-30">
                                            <div class="form-group">
                                                <label for="postcode">Post code</label>
                                                <input type="text" class="form-control" name="postcode" value="" placeholder="Enter Here">
                                            </div>
                                            <div class="form-group">
                                                <label for="city">City</label>
                                                <input type="text" class="form-control" name="city" value="" placeholder="Enter Here">
                                            </div>
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input type="text" class="form-control" name="address" value="" placeholder="Enter Here">
                                            </div>
                                            <div class="form-group form-check pt-20">
                                                <input class="form-check-input error" type="checkbox" name="terms_and_services" id="terms-and-services" aria-required="true">
                                                <label class="form-check-label m-0" for="terms-and-services">
                                                    Yes, I’m agree to AGENT term’s & Conditions and Privacy Policy.
                                                </label>
                                                <label id="terms_and_services-error" class="error" for="terms_and_services">Please click to agree with our terms of services.</label>
                                            </div>
                                            <div class="form-group form-check">
                                                <input class="form-check-input error" type="checkbox" name="terms_and_services" id="terms-and-services" aria-required="true">
                                                <label class="form-check-label m-0" for="terms-and-services">
                                                    Please keep me updated with special offers, promotions and marketing communications.
                                                </label>
                                                <label id="terms_and_services-error" class="error" for="terms_and_services">Please click to agree with our terms of services.</label>
                                            </div>
                                        </form>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-black btn-wt-300 next-button" href="javascript:void(0)">Continue</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 18th step end -->
                        <div class="quest-v2-step" id="step18">
                            <div class="row quest-ordrsmry-wrap">
                                <div class="col-lg-5 col-md-12">
                                    <div class="quest-ordrsmry-left">
                                        <div class="card-design mb-40">
                                            <h3 class="card-heading mb-30">Your Order</h3>
                                            <div class="qos-product">
                                                <figure>
                                                    <img class="img-fluid" src="{{ asset('images/sildenafil-img.png') }}" alt="">
                                                </figure>
                                                <div class="qos-product-cont">
                                                    <h5>Sildenafil (Erectile dysfunction treatment)</h5>
                                                    <p>50mg 12 tablets monthly</p>
                                                </div>
                                                <div class="qos-product-price">
                                                    £39.00
                                                </div>
                                            </div>
                                            <div class="cstm-border"></div>
                                            <div class="qos-product-text mb-20">Subtotal <div class="price">£39.00</div>
                                            </div>
                                            <div class="qos-product-text">Add promo code </div>
                                            <div class="cstm-border"></div>
                                            <div class="qos-product-text">Delivery <div class="price">Free</div>
                                            </div>
                                            <div class="cstm-border"></div>
                                            <div class="total-amount">
                                                <h3>Total</h3>
                                                <h3>£39.00</h3>
                                            </div>
                                        </div>
                                        <div class="card-design smlprdt-offer mb-40">
                                            <h3 class="card-heading mb-30">Current offers</h3>
                                            <div class="offer-tablet-name">
                                                <figure>
                                                    <img src="{{ asset('images/sildenafil-img.png') }}" alt="">
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
                                                    <img src="{{ asset('images/sildenafil-img.png') }}" alt="">
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
                                        </div>
                                        <ul class="quest-lfc-btn">
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

                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-12">
                                    <div class="quest-ordrsmry-right">
                                        <h3 class="quest-v2-subh mb-20">
                                            Order summary
                                        </h3>
                                        <p class="mb-10"><b>Delivery and payment details</b></p>
                                        <p class="mb-40 pb-20">Please make sure the delivery address and payment details below are correct before placing your order.</p>
                                        <h4 class="q-orsm-heading mb-30">Delivery address</h4>
                                        <form action="" method="POST" class="pb-30">
                                            <div class="form-group address-f-group">
                                                <input type="text" class="form-control" name="address" value="" placeholder="Enter Here">
                                                <button type="button" class="btn-d-trans"><i class="fa-solid fa-circle-plus me-2"></i>Use New address</button>
                                            </div>
                                        </form>
                                        <h4 class="q-orsm-heading mb-30">Billing address</h4>
                                        <form action="" method="POST" class="pb-30">
                                            <div class="form-group address-f-group">
                                                <input type="text" class="form-control" name="address" value="" placeholder="Enter Here">
                                                <button type="button" class="btn-d-trans"><i class="fa-solid fa-circle-plus me-2"></i>Add another address</button>
                                            </div>
                                        </form>
                                        <h4 class="q-orsm-heading mb-40">Add payment method</h4>
                                        <div class="payment-method-card mb-40">
                                            <div><h5>Debit or credit card</h5></div>
                                        </div>
                                        <div class="quest-v2-btn">
                                            <a class="btn-d-black btn-wt-300 next-button" href="javascript:void(0)"  data-bs-toggle="modal" data-bs-target="#placeOrderModal">Place order</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 20th step end -->

                         <!-- Modal -->
                      <div class="modal fade" id="placeOrderModal" tabindex="-1" aria-labelledby="placeOrderModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <!-- <h5 class="modal-title" id="placeOrderModalLabel">Modal title</h5> -->
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <figure>
                                        <img src="{{ asset('frontend_new/images/model-cross-icon.png') }}" alt="img"/>
                                    </figure>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <figure>
                                        <img src="{{ asset('frontend_new/images/Icon.png') }}" alt="img"/>
                                    </figure>
                                    <!-- <img src="{{ asset('images/popup%20icon.png') }}"alt="Icon"> -->
                                    <h1>Thank You Jashan</h1>
                                    <h3>Order Number #2700</h3>
                                    <p>Your order is confirmed You’ll receive a confirmation email with your order number shortly.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-d-black" data-bs-dismiss="modal">Continue Shoping</button>
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
                                            <div class="error-btn">
                                                <img src="{{ asset('images/error-icon.svg') }}" alt="">
                                            </div>
                                            <h3 class="quest-v2-subh mb-30">Your safety is our top priority.</h3>
                                            <h5>Unfortunately, we can’t offer you any beard growth medication.</h5>
                                            <p>No recommended treatment. Based on your answers, there is no treatment suitable for you. If you think you have made an error in your responses, please click below to review your answers.</p>
                                            <p><b>Did you make a mistake?</b> Providing false information can lead to serious harm to your
                                                health.</p>
                                            <div class="form-group form-check mb-30 pb-2">
                                                <!-- <input class="form-check-input" type="checkbox" name="terms-and-services"
                                                    id="terms-and-services"> -->
                                                    <input class="form-check-input" type="checkbox" name="terms-and-services"
                                                    id="check">
                                                <label class="form-check-label m-0" for="terms-and-services">
                                                    I agree only to provide accurate answers
                                                </label>
                                            </div>
                                            <button type="button" id="btncheck" class="btn-d-black close-que-modal" data-bs-dismiss="modal">Review your answers</button>
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

        function set_type(dropper,spray){
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
      console.log(product_id, unique_array, final_array);
      $("#ProductIds").val(final_array);
    }
</script>
