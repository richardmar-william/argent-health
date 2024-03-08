{{--
@extends('layouts.app')
@section('title', 'Questionnaire')
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

 @php
    $product = DB::table('products')->where('category_id', 30)->get();
    $product1 = \App\Models\Product::where('category_id', 30)->get();
 @endphp


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
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:type" content="website" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta name="bucls" content="SHARED-SERVICES" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="css/quest-v2.css">
    <link rel="stylesheet" href="css/quest-v2-respsv.css">
    <link rel="stylesheet" href="{{ asset('css/quest-v2.css') }}">


</head>
<body>

    <section class="questionnaire-v2-main">
        <div class="quest-v2-header">
            <div class="container-fluid">
                <a class="quest-logo" href="javascript:void(0)">
                    <!-- <img src="images/quest-logo.png" alt=""> -->
                    <img src="{{ asset('images/quest-logo.png')}}" alt="">
                </a>
            </div>
        </div>
        <div class="quest-v2-content">
            <div class="container-fluid">
                <div class="quest-v2-inner-wrap">
                    <div class="quest-v2-step" id="step1">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="v2-1step-cont">
                                    <h4 class="weare-going-con mb-20">x,msajchjqwWelcome! We're about to ask you a few questions about your health and hair loss. This will help us determine if a prescription for hair loss treatment is right for you. Our licensed clinicians will promptly review your answers and get back to you with suitable suggestions.</h4>
                                    <h3 class="list-heading mb-30">Please declare that:</h3>
                                    <ul class="quest-v2-list pb-30 mb-30">
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
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-black btn-wt-300 mr-20 next-button" href="javascript:void(0)">Next</a>
                                        <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <ul class="quest-lfc-btn">
                                    <li><a href="javascript:void(0)"><img src="{{asset('frontend_new/images/licensed-img.svg')}}"
                                             alt="Icon">Licensed medication</a></li>
                                    <li><a href="javascript:void(0)"><img src="{{asset('frontend_new/images/discreet-d-img.svg')}}"
                                                alt="Icon">Free 24 Hour Shipping</a></li>
                                    <li><a href="javascript:void(0)"><img src="{{asset('frontend_new/images/cancel-anytime-img.svg')}}"
                                                alt="Icon">Cancel anytime</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- 1st step -->
                    <div class="quest-v2-step" id="step2">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="v2-2step-cont">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 0.5%;"
                                                aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!-- <h3>0%</h3> -->
                                    </div>
                                    <h3 class="quest-v2-subh mb-30">
                                        What is your type of hair loss?
                                    </h3>
                                    <form action="">
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
                                            <label class="next-button" for="thinninghl">Thinning all over </label>
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
                                    </form>
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 2nd step -->
                    <div class="quest-v2-step" id="step3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="v2-3step-cont">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 10%;"
                                                aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!-- <h3>10%</h3> -->
                                    </div>
                                    <h3 class="quest-v2-subh mb-30">
                                        When did you notice any hair loss?
                                    </h3>
                                    <form action="">
                                        <div class="form-group form-radio">
                                            <input type="radio" id="noticehl-days" name="radio-group" value="noticehl-days">
                                            <label for="noticehl-days" class="open-que-error">My hair loss has been sudden and I’ve noticed over the past few days/weeks</label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="noticehl-months" name="radio-group" value="noticehl-months">
                                            <label class="next-button" for="noticehl-months">I have had gradual hair loss which I have noticed over the past couple of months / years</label>
                                        </div>
                                    </form>
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 3rd step -->
                    <div class="quest-v2-step" id="step4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="v2-3step-cont">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 23%;"
                                                aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!-- <h3>23%</h3> -->
                                    </div>
                                    <h3 class="quest-v2-subh mb-30">
                                        Have you experienced hair loss anywhere else on your body?
                                    </h3>
                                    <form action="">
                                        <div class="form-group form-radio">
                                            <input type="radio" id="exphl-yes" name="radio-group" value="exphl-yes">
                                            <label for="exphl-yes" class="open-sub-step">Yes</label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="exphl-no" name="radio-group" value="exphl-no">
                                            <label class="next-button" for="exphl-no">No </label>
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
                                <form action="">
                                    <div class="form-group form-text-field">
                                        <input type="text" class="form-control" id="" value="">
                                    </div>
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-black btn-wt-300 mr-20 next-button" href="javascript:void(0)">Continue</a>
                                        <a class="btn-d-trans btn-wt-170 back-sub-step" href="javascript:void(0)">Back</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- 4th step -->
                    <div class="quest-v2-step" id="step5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="v2-3step-cont">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 23%;"
                                                aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!-- <h3>23%</h3> -->
                                    </div>
                                    <h3 class="quest-v2-subh mb-30">
                                        Have you taken any of these medications consistently over the last 12 months: Minoxidil, Regaine, Finasteride, or Propecia?
                                    </h3>
                                    <form action="">
                                        <div class="form-group form-radio">
                                            <input type="radio" id="medi-consM-yes" name="radio-group" value="medi-consM-yes">
                                            <label for="medi-consM-yes" class="open-sub-step">Yes</label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="medi-consM-no" name="radio-group" value="medi-consM-no">
                                            <label class="next-button" for="medi-consM-no">No</label>
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
                                <form action="">
                                    <div class="form-group form-text-field">
                                        <input type="text" class="form-control" id="" value="">
                                    </div>
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-black btn-wt-300 mr-20 next-button" href="javascript:void(0)">Continue</a>
                                        <a class="btn-d-trans btn-wt-170 back-sub-step" href="javascript:void(0)">Back</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- 5th step -->
                    <div class="quest-v2-step" id="step6">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="v2-3step-cont">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 23%;"
                                                aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!-- <h3>23%</h3> -->
                                    </div>
                                    <h3 class="quest-v2-subh mb-30">
                                        Do you have any scalp problems?
                                    </h3>
                                    <form action="">
                                        <div class="form-group form-radio">
                                            <input type="radio" id="scalphl-prob-no" name="radio-group" value="scalphl-prob-no">
                                            <label class="open-sub-step" for="scalphl-prob-no">Yes</label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="scalphl-prob-yes" name="radio-group" value="scalphl-prob-yes">
                                            <label class="next-button" for="scalphl-prob-yes">No</label>
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
                                <form action="">
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
                                </form>
                                <div class="quest-v2-btn">
                                    <a class="btn-d-trans btn-wt-170 back-sub-step" href="javascript:void(0)">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 6th step -->
                    <div class="quest-v2-step" id="step7">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="v2-3step-cont">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 23%;"
                                                aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!-- <h3>23%</h3> -->
                                    </div>
                                    <h3 class="quest-v2-subh mb-30">
                                        Are any of the following true?
                                    </h3>
                                    <ul class="quest-v2-list pb-30 mb-30">
                                        <li>I have previously been diagnosed with breast cancer, prostate cancer, or I am currently undergoing PSA (prostate monitoring).</li>
                                        <li>I have uncontrolled low or high blood pressure.</li>
                                        <li>I am experiencing, or have previously experienced, depression, anxiety, or panic disorders.</li>
                                    </ul>
                                    <form action="">
                                        <div class="form-group form-radio">
                                            <input type="radio" id="areaf-yes" name="radio-group" value="areaf-yes">
                                            <label class="open-sub-step" for="areaf-yes">Yes</label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="areaf-no" name="radio-group" value="areaf-no">
                                            <label class="next-button" for="areaf-no">No</label>
                                        </div>
                                    </form>
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sub-step" id="sub-step1">
                            <div class="inner-form-group">
                                <h3 class="quest-v2-subh mb-30">Have you previously been diagnosed with breast cancer, prostate cancer, or are you currently undergoing PSA (prostate monitoring)?</h3>
                                <form action="">
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
                                </form>
                            </div>
                        </div>
                        <div class="sub-step" id="sub-step2">
                            <div class="inner-form-group">
                                <h3 class="quest-v2-subh mb-30">Are you experiencing, or have previously experienced, depression, anxiety or panic disorders?</h3>
                                <form action="">
                                    <div class="form-group form-radio">
                                        <input type="radio" id="exper-deps-no" name="radio-group" value="exper-deps-no">
                                        <label class="open-sub-step" for="exper-deps-no">No</label>
                                    </div>
                                    <div class="form-group form-radio">
                                        <input type="radio" id="exper-deps-yes" name="radio-group" value="exper-deps-yes">
                                        <label class="open-sub-inr-step" for="exper-deps-yes">Yes</label>
                                    </div>
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-trans btn-wt-170 back-sub-step" href="javascript:void(0)">Back</a>
                                    </div>
                                </form>
                                <div class="sub-inr-step fixed-step" id="sub-inr-step1">
                                    <div class="inner-form-group">
                                        <form action="">
                                            <div class="form-group form-radio">
                                                <input type="radio" id="treatment-immed" name="radio-group" value="treatment-immed">
                                                <label class="open-sub-step" for="treatment-immed"> I understand and agree to stop this treatment immediately and consult a doctor if I experience symptoms of depression, anxiety, or panic disorders. </label>
                                            </div>
                                            <div class="form-group form-radio">
                                                <input type="radio" id="currently-stable" name="radio-group" value="currently-stable">
                                                <label class="open-que-error" for="currently-stable">I am not currently stable or don't want to proceed with Finasteride.</label>
                                            </div>
                                            <div class="quest-v2-btn">
                                                <a class="btn-d-trans btn-wt-170 back-sub-step" href="javascript:void(0)">Back</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sub-step" id="sub-step3">
                            <div class="inner-form-group">
                                <h3 class="quest-v2-subh mb-30">Do you have uncontrolled low or high blood pressure?</h3>
                                <form action="">
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
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- 7th step -->
                    <div class="quest-v2-step" id="step8">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="v2-3step-cont">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 23%;"
                                                aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!-- <h3>23%</h3> -->
                                    </div>
                                    <h3 class="quest-v2-subh mb-30">
                                        Do you have any of the following problems?
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
                                    <form action="">
                                        <div class="form-group form-radio">
                                            <input type="radio" id="anyf-prob-yes" name="radio-group" value="anyf-prob-yes">
                                            <label class="open-que-error" for="anyf-prob-yes">Yes</label>
                                        </div>
                                        <div class="form-group form-radio">
                                            <input type="radio" id="anyf-prob-no" name="radio-group" value="anyf-prob-no">
                                            <label class="next-button" for="anyf-prob-no">No</label>
                                        </div>
                                    </form>
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 8th step -->
                    <div class="quest-v2-step" id="step9">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="v2-2step-cont">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 0.5%;"
                                                aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!-- <h3>0%</h3> -->
                                    </div>
                                    <h3 class="quest-v2-subh mb-30">
                                        Do you have any intolerances/allergies to the following?
                                    </h3>
                                    <form action="">
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
                                    </form>
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-trans btn-wt-170 prev-button" href="javascript:void(0)">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sub-step fixed-step" id="sub-step1">
                            <div class="inner-form-group">
                                <form action="">
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
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- 9th step -->
                    <div class="quest-v2-step" id="step10">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="v2-3step-cont">
                                    <div class="quest-progress-bar">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 23%;"
                                                aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!-- <h3>23%</h3> -->
                                    </div>
                                    <h3 class="quest-v2-subh mb-30">
                                        It's really important to tell us about:
                                    </h3>
                                    <ul class="quest-v2-list pb-30 mb-30">
                                        <li>Major illnesses</li>
                                        <li>Ongoing medical conditions</li>
                                        <li>Any medication prescribed or over the counter that you take</li>
                                        <li>Allergies to medication</li>
                                        <li>Operations</li>
                                    </ul>
                                    <form action="">
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
                                <form action="">
                                    <div class="form-group form-text-field">
                                        <input type="text" class="form-control" id="" value="">
                                    </div>
                                    <div class="quest-v2-btn">
                                        <a class="btn-d-black btn-wt-300 mr-20 next-button" href="javascript:void(0)">Continue</a>
                                        <a class="btn-d-trans btn-wt-170 back-sub-step" href="javascript:void(0)">Back</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- 10th step end -->

                    <!-- product start -->
                   @php
                    $product = DB::table('products')->where('category_id', 30)->get();

                    @endphp
                    <div class="quest-v2-step" id="step11">
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
                                                    <h5>Combination Solution (Pill-free option)</h5>
                                                    <p>Slution combination spray Pill free option, 94% effective</p>
                                                    <h4>from £199</h4>
                                                </div>
                                            </div>
                                            <!-- <div class="r-t-card-footer">
                                                <div class="tablets-list-box">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <figure><img src="{{asset('storage/images/products/minoxidil-and-finasteride-2-in-1-solutionhair1681464473-1.png')}}" height="20px" alt="">
                                                            </figure>
                                                            <h5>Pill free option</h5>
                                                        </div>
                                                        <div class="col-7">
                                                            <p><span class="price">$48.00</span>/pack</p>
                                                            <p>$2.40 per Spray Bottle <span class="clr-green">(-44%)</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->


                                        <!-- recocomndation sec end-->

                                        <h3 class="quest-v2-subh text-center mt-40 other-recmd">
                                            Other Recommendation for you
                                        </h3>

                                        <!-- all treatment sec start -->
                                        @foreach($product1 as $products)
                                        @php   $media = DB::table('media')->where('mediable_id',$products->id)->first(); @endphp
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
                                                <div class="tablets-list-box">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <figure><img src="{{asset('storage/images/products/')}}{{ '/'. $media->file_name}}" height="20px" alt="">
                                                            </figure>
                                                            <h5>Spray Bottle</h5>
                                                        </div>
                                                        <div class="col-7">
                                                            <p><span class="price">$34.00</span>/pack</p>
                                                            <p>$4.25 per</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="tablets-list-box">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <figure><img src="{{asset('frontend_new/images/sildenafil-tablet.svg')}}" alt="">
                                                            </figure>
                                                            <h5>Dropper</h5>
                                                        </div>
                                                        <div class="col-7">
                                                            <p><span class="price">$39.00</span>/pack</p>
                                                            <p>$3.25 per <span class="clr-green">(-24%)</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div> -->
                                               <!-- <div class="tablets-list-box">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <figure><img src="{{asset('frontend_new/images/sildenafil-tablet.svg')}}" alt="">
                                                            </figure>
                                                            <h5>16 Tablets</h5>
                                                        </div>
                                                        <div class="col-7">
                                                            <p><span class="price">$44.00</span>/pack</p>
                                                            <p>$2.75 per tablet <span class="clr-green">(-34%)</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tablets-list-box">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <figure><img src="{{asset('frontend_new/images/sildenafil-tablet.svg')}}" alt="">
                                                            </figure>
                                                            <h5>8 Tablets</h5>
                                                        </div>
                                                        <div class="col-7">
                                                            <p><span class="price">$48.00</span>/pack</p>
                                                            <p>$2.40 per tablet <span class="clr-green">(-44%)</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- <div class="recmd-tablets-card mt-30">
                                            <div class="r-t-card-body">
                                                <figure>
                                                    <img src="{{asset('frontend_new/images/sildenafil-img.png')}}" alt="">
                                                </figure>
                                                <div class="r-t-body-cont">
                                                    <h5>Sildenafil</h5>
                                                    <p>Our most popular treatment, Sildenafil combats erectile
                                                        dysfunction
                                                        at an affordable price. It works by increasing blood flow to the
                                                        penis, giving you a strong erection when you need one</p>
                                                    <h4>from £2.40 per tablet</h4>
                                                </div>
                                            </div>
                                            <div class="r-t-card-footer">
                                                <div class="tablets-list-box">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <figure><img src="{{asset('frontend_new/images/sildenafil-tablet.svg')}}" alt="">
                                                            </figure>
                                                            <h5>8 Tablets</h5>
                                                        </div>
                                                        <div class="col-7">
                                                            <p><span class="price">$34.00</span>/pack</p>
                                                            <p>$4.25 per tablet</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tablets-list-box">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <figure><img src="{{asset('frontend_new/images/sildenafil-tablet.svg')}}" alt="">
                                                            </figure>
                                                            <h5>12 Tablets</h5>
                                                        </div>
                                                        <div class="col-7">
                                                            <p><span class="price">$39.00</span>/pack</p>
                                                            <p>$3.25 per tablet <span class="clr-green">(-24%)</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tablets-list-box">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <figure><img src="{{asset('frontend_new/images/sildenafil-tablet.svg')}}" alt="">
                                                            </figure>
                                                            <h5>16 Tablets</h5>
                                                        </div>
                                                        <div class="col-7">
                                                            <p><span class="price">$44.00</span>/pack</p>
                                                            <p>$2.75 per tablet <span class="clr-green">(-34%)</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tablets-list-box">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <figure><img src="{{asset('frontend_new/images/sildenafil-tablet.svg')}}" alt="">
                                                            </figure>
                                                            <h5>8 Tablets</h5>
                                                        </div>
                                                        <div class="col-7">
                                                            <p><span class="price">$48.00</span>/pack</p>
                                                            <p>$2.40 per tablet <span class="clr-green">(-44%)</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="recmd-tablets-card mt-30">
                                            <div class="r-t-card-body">
                                                <figure>
                                                    <img src="{{asset('frontend_new/images/sildenafil-img.png')}}" alt="">
                                                </figure>
                                                <div class="r-t-body-cont">
                                                    <h5>Sildenafil</h5>
                                                    <p>Our most popular treatment, Sildenafil combats erectile
                                                        dysfunction
                                                        at an affordable price. It works by increasing blood flow to the
                                                        penis, giving you a strong erection when you need one</p>
                                                    <h4>from £2.40 per tablet</h4>
                                                </div>
                                            </div>
                                            <div class="r-t-card-footer">
                                                <div class="tablets-list-box">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <figure><img src="{{asset('frontend_new/images/sildenafil-tablet.svg')}}" alt="">
                                                            </figure>
                                                            <h5>8 Tablets</h5>
                                                        </div>
                                                        <div class="col-7">
                                                            <p><span class="price">$34.00</span>/pack</p>
                                                            <p>$4.25 per tablet</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tablets-list-box">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <figure><img src="{{asset('frontend_new/images/sildenafil-tablet.svg')}}" alt="">
                                                            </figure>
                                                            <h5>12 Tablets</h5>
                                                        </div>
                                                        <div class="col-7">
                                                            <p><span class="price">$39.00</span>/pack</p>
                                                            <p>$3.25 per tablet <span class="clr-green">(-24%)</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tablets-list-box">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <figure><img src="{{asset('frontend_new/images/sildenafil-tablet.svg')}}" alt="">
                                                            </figure>
                                                            <h5>16 Tablets</h5>
                                                        </div>
                                                        <div class="col-7">
                                                            <p><span class="price">$44.00</span>/pack</p>
                                                            <p>$2.75 per tablet <span class="clr-green">(-34%)</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tablets-list-box">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <figure><img src="{{asset('frontend_new/images/sildenafil-tablet.svg')}}" alt="">
                                                            </figure>
                                                            <h5>8 Tablets</h5>
                                                        </div>
                                                        <div class="col-7">
                                                            <p><span class="price">$48.00</span>/pack</p>
                                                            <p>$2.40 per tablet <span class="clr-green">(-44%)</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
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
                                            class="fa-solid fa-circle-info"></i>Which strength is right for me?</div>
                                    <div class="pre-tretmt-dosage">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="pre-tm-tablet">
                                                    <figure>
                                                        <img src="{{asset('frontend_new/images/sildenafil-img.png')}}" alt="">
                                                    </figure>
                                                    <h5>Sildenafil</h5>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="pre-tm-dosage-mg">
                                                    <div class="dosage-mg">
                                                        <h4>100 mg</h4>
                                                        <h6>Double dosage</h6>
                                                    </div>
                                                    <div class="dosage-price">
                                                        <h3>$48.00</h3>
                                                        <p>$2.00 per 10mg</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="pre-tm-dosage-mg">
                                                    <div class="dosage-mg">
                                                        <h4>100 mg</h4>
                                                    </div>
                                                    <div class="dosage-price">
                                                        <h3>$39.00</h3>
                                                        <p>$3.25 per 50mg</p>
                                                    </div>
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
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="loading-text text-center mb-40 mt-30 pt-30">*Discount may not be applied
                                        to subsequent purchases</h5>
                                    <div class="quest-v2-btn text-center">
                                        <a class="btn-d-black btn-wt-300 next-button" href="javascript:void(0)">Continue</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 13th step end -->
                    <div class="quest-v2-step" id="step14">

                        <div class="row quest-ordrsmry-wrap">
                            <div class="col-md-5">
                                <div class="quest-ordrsmry-left">
                                    <div class="card-design mb-40">
                                        <h3 class="card-heading mb-30">Your Order</h3>
                                        <div class="qos-product">
                                            <figure>
                                                <img class="img-fluid" src="{{asset('frontend_new/images/sildenafil-img.png')}}" alt="">
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
                                    </div>
                                    <ul class="quest-lfc-btn">
                                        <li><a href="javascript:void(0)"><img src="{{asset('frontend_new/images/licensed-img.svg')}}"
                                                    alt="Icon">Licensed medication</a></li>
                                        <li><a href="javascript:void(0)"><img src="{{asset('frontend_new/images/discreet-d-img.svg')}}"
                                                    alt="Icon">Free 24 Hour Shipping</a></li>
                                        <li><a href="javascript:void(0)"><img src="{{asset('frontend_new/images/cancel-anytime-img.svg')}}"
                                                    alt="Icon">Cancel anytime</a></li>
                                    </ul>
                                </div>
                            </div>




                        </div>
                    </div>
                    <!-- 14th step end -->
                    @if (Auth::check())
                    <div class="quest-v2-step" id="step15">
                        <div class="row quest-ordrsmry-wrap">
                            <div class="col-md-5">
                                <div class="quest-ordrsmry-left">
                                    <div class="card-design mb-40">
                                        <h3 class="card-heading mb-30">Your Order</h3>
                                        <div class="qos-product">
                                            <figure>
                                                <img class="img-fluid" src="{{asset('frontend_new/images/sildenafil-img.png')}}" alt="">
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
                                    </div>
                                    <ul class="quest-lfc-btn">
                                        <li><a href="javascript:void(0)"><img src="{{asset('frontend_new/images/licensed-img.svg')}}"
                                                    alt="Icon">Licensed medication</a></li>
                                        <li><a href="javascript:void(0)"><img src="{{asset('frontend_new/images/discreet-d-img.svg')}}"
                                                    alt="Icon">Free & discreet delivery</a></li>
                                        <li><a href="javascript:void(0)"><img src="{{asset('frontend_new/images/cancel-anytime-img.svg')}}"
                                                    alt="Icon">Cancel anytime</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="quest-ordrsmry-right">
                                    <h3 class="quest-v2-subh mb-20">
                                        Order summary
                                    </h3>
                                    <p class="mb-10"><b>A few details about you</b></p>
                                    <p class="mb-40">We just need a few more details before we can send your order out. These will be kept private and will never be shared unless you ask us to. Already registered? <a href="{{route('login')}}">Log in</a></p>
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
                    @else
                        <div class="col-md-7">
                                <div class="quest-ordrsmry-right">
                                    <h3 class="quest-v2-subh mb-30">
                                        Order summary
                                    </h3>
                                    <h4 class="q-orsm-heading mb-20">Log in to your account </h4>
                                    <p class="mb-40">Please log in to your account to complete your order.Don't have an account?
                                        <a href="{{ route('register') }}">Sign up</a>
                                    </p>
                                    <!-- log in form -->
                                    <form method="GET" action="{{ route('login') }}"  id="login_form" novalidate="novalidate">
                                     @csrf
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
                                        <div class="l-s-button-box">
                                            <button class="l-s-btn">{{ __('Login') }}</button>
                                        </div>
                                            <!-- <button class="btn-d-black next-button">Login</button> -->

                                            @if (Route::has('password.request'))
                                              <a href="{{ route('password.request') }}">Forget your password?</a>
                                            @endif
                                        </div>
                                    </form>
                                    <!-- log in form end-->
                                    {!! JsValidator::formRequest('App\Http\Requests\Frontend\LoginRequest') !!}
                                </div>
                            </div>
                   @endif
                    <!-- 15th step end -->
                    <div class="quest-v2-step" id="step16">
                        <div class="row quest-ordrsmry-wrap">
                            <div class="col-md-5">
                                <div class="quest-ordrsmry-left">
                                    <div class="card-design mb-40">
                                        <h3 class="card-heading mb-30">Your Order</h3>
                                        <div class="qos-product">
                                            <figure>
                                                <img class="img-fluid" src="{{ asset('frontend_new/images/sildenafil-img.png') }}" alt="">
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
                                                <img src="{{ asset('frontend_new/images/sildenafil-img.png') }}" alt="">
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
                                                <img src="{{ asset('frontend_new/images/sildenafil-img.png') }}" alt="">
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
                                        <li><a href="javascript:void(0)"><img src="{{ asset('frontend_new/images/licensed-img.svg') }}"
                                                    alt="Icon">Licensed medication</a></li>
                                        <li><a href="javascript:void(0)"><img src="{{ asset('frontend_new/images/discreet-d-img.svg') }}"
                                                    alt="Icon">Free & discreet delivery</a></li>
                                        <li><a href="javascript:void(0)"><img src="{{ asset('frontend_new/images/cancel-anytime-img.svg') }}"
                                                    alt="Icon">Cancel anytime</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-7">
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
                                        <a class="btn-d-black btn-wt-300 next-button" href="javascript:void(0)">Place order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 16th step end -->



                    <!-- error message start -->
                    <div class="quest-v2-errorstep" style="display: none;">
                        <div class="quest-v2-error">
                        <div class="modal-dialog">
                            <div class="modal-content border-0">
                                <div class="quest-v2-header">
                                    <a class="quest-logo" href="javascript:void(0)">
                                        <img src="{{ asset('frontend_new/images/quest-logo.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="modal-body">
                                    <div class="error-btn">
                                        <img src="{{ asset('frontend_new/images/error-icon.svg') }}" alt="">
                                    </div>
                                    <h3 class="quest-v2-subh mb-30">Your safety is our top priority.</h3>
                                    <h5>Unfortunately, we can’t offer you any Hair Loss medication.</h5>
                                    <p>Our treatments are not suitable for patients with your medical history. Please consult your GP.</p>
                                    <p><b>Did you make a mistake?</b> Providing false information can lead to serious harm to your
                                        health.</p>
                                    <div class="form-group form-check mb-30 pb-2">
                                        <input class="form-check-input" type="checkbox" name="terms-and-services"
                                            id="terms-and-services">
                                        <label class="form-check-label m-0" for="terms-and-services">
                                            I agree only to provide accurate answers
                                        </label>
                                    </div>
                                    <button type="button" class="btn-d-black close-que-modal" data-bs-dismiss="modal">Review your answers</button>
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
</body>
</html>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
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
