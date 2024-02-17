@extends('layouts.app')
@section('title', 'Questionnaire')
@section('content')
<!-- Modal -->
@php
use Illuminate\Support\Str;
use App\Models\Media;

$randomString = Str::random(40); // generate a random string of length 10
session(['my_random_string' => $randomString]); // store the random string in session
$myValue = session('my_random_string');

@endphp
<h1 class="mai kya na" hidden>

    {{ $myValue }}
</h1>

<div class="modal fade ques-modal" id="abortModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body" id="abortModalBody">

            </div>
            <div class="modal-footer">
                <a href="" class="btn btn-primary" id="UnsutableBtn">Please click here to review your answer </a>
                <!-- {{ route('questionnaire.abortQuestionnaire',['catId'=>$cat]) }} -->
            </div>
        </div>
    </div>
</div>





<section class="questinnaire-main">
    <div class="container-xxl container">
        <!-- step start -->
        <div class="questinnaire-step0 qtnr-inner active">
            <h2 class="questinnaire-heading">Introduction/Disclaimer:</h2>
            <p>Welcome! We're about to ask you a few questions about your health and hair loss. This will help us
                determine if a prescription for hair loss treatment is right for you. Our licensed clinicians will
                promptly review your answers and get back to you with suitable suggestions. </p>
            <ul class="ques-list-sec">
                <li class="p-0 m-0 list-heading">
                    <h5>Please declare that:</h5>
                </li>
                <li>You are the sole user of any medication provided through this service.</li>
                <li>You will provide truthful answers to the best of your knowledge.</li>
                <li>You are aware that Minoxidil 5% solution and combined Minoxidil 5% with 0.1% Finasteride solution
                    are prescribed as unlicensed products.</li>
                <li>You will disclose any serious illnesses or operations you have had.</li>
                <li>You will disclose any prescription medication you currently take.</li>
                <li>You will only use the recommended method of hair loss treatment and not combine more than one
                    different medication for this condition.</li>
                <li>You are aware that you should not take Finasteride if you’re trying for a baby.</li>
                <li>You accept our Terms & Conditions, Privacy Policy, and Terms of Sale.</li>
                <li>You currently live in the UK.</li>
                <li>You are using this service of your own free will.</li>
                <li>You agree to the terms of service, terms of subscription, and privacy policy.</li>
            </ul>
            <div class="questinnaire-button">
                <a class="quest-backbtn" href="{{ url('/questionnaireCat') }}" style="display: none;">Back</a>
                <a class="quest-nextbtn nxt" href="javascript:void(0)" data-proress="0">Next</a>
            </div>
        </div>
        <!-- 1st step -->
        <div class="questinnaire-step1 qtnr-inner">
            <h2 class="questinnaire-heading">What is your type of hair loss</h2>
            <input type="hidden" id="catId" value="{{$cat}}">
            <div class="form-section">
                <form action="">
                    <div class="form-group form-radio">
                        <input type="radio" id="hairloss" name="radio-group" value="Genetic Hair Loss/ Mild" checked>
                        <label for="hairloss">Genetic Hair Loss/ Mild</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="recedinghairline" name="radio-group" value="Receding Hairline">
                        <label for="recedinghairline">Receding Hairline</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="thincrown" name="radio-group" value="Thin Crown">
                        <label for="thincrown">Thin Crown</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="Thinning" name="radio-group" value="Thinning all over">
                        <label for="Thinning">Thinning all over</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="Extensive" name="radio-group" value="Extensive hair loss ">
                        <label for="Extensive">Extensive hair loss </label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="Patchy" name="radio-group" value="Patchy">
                        <label for="Patchy">Patchy</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="Completely" name="radio-group" value="Completely bald">
                        <label for="Completely">Completely bald</label>
                    </div>

                    <input type="hidden" class="steps" value="1">
                </form>
                <span class="error1" style="color:red"></span>
            </div>

            <div class="questinnaire-button">
                <a class="quest-backbtn" href="javascript:void(0)">Back</a>
                <a class="quest-nextbtn nxt" href="javascript:void(0)" data-proress="1">Next</a>
            </div>
        </div>
        <!-- 2nd step -->
        <div class="questinnaire-step2 qtnr-inner">
            <h2 class="questinnaire-heading">When did you notice any hair loss</h2>
            <div class="form-section step2">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id=" NOT SUITABLE1" name="radio-group" value="past few days/weeks">
                        <label for=" NOT SUITABLE1">My hair loss has been sudden and I’ve noticed over the past few
                            days/weeks</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="next question" name="radio-group" value="past couple of months / years"
                            checked>
                        <label for="next question">I have had gradual hair loss which I have noticed over the past
                            couple of months / years </label>
                    </div>
                    <input type="hidden" class="steps" value="2">
                </form>
            </div>
            <div class="questinnaire-button">
                <a class="quest-backbtn" href="javascript:void(0)">Back</a>
                <a class="quest-nextbtn" href="javascript:void(0)" data-proress="2">Next</a>
            </div>
        </div>
        <!-- 3rd step -->
        <div class="questinnaire-step3 qtnr-inner">
            <h2 class="questinnaire-heading">Have you experienced hair loss anywhere else on your body</h2>
            <div class="form-section">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id="ques3" name="radio-group" value="yes">
                        <label for="ques3">Yes</label>
                    </div>
                    <div class="form-group ques-textarea">
                        <input class="form-control" type="text" id="textbox3"
                            placeholder="Please tell us about hair loss in areas other than your head.">
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="PATCHY GROWTH" name="radio-group" value="no" checked>
                        <label for="PATCHY GROWTH">no</label>
                    </div>
                </form>
            </div>
            <div class="questinnaire-button">
                <a class="quest-backbtn" href="javascript:void(0)">Back</a>
                <a class="quest-nextbtn" href="javascript:void(0)" data-proress="3">Next</a>
            </div>
        </div>
        <!--4 step  -->
        <div class="questinnaire-step4 qtnr-inner">
            <h2 class="questinnaire-heading">Have you taken any of these medications consistently over the last 12
                months: Minoxidil, Regaine, Finasteride, or Propecia</h2>
            <div class="form-section">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id="ques4" name="radio-group" value="yes">
                        <label for="ques4">YES </label>
                    </div>
                    <div class="form-group ques-textarea">
                        <input class="form-control" type="text" id="textbox4"
                            placeholder="Please tell us what medication you've taken, its effectiveness, and any side effects.">
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="THEM PROGRESS" name="radio-group" value="no" checked>
                        <label for="THEM PROGRESS">NO</label>
                    </div>
                </form>
            </div>
            <div class="questinnaire-button">
                <a class="quest-backbtn" href="javascript:void(0)">Back</a>
                <a class="quest-nextbtn" href="javascript:void(0)" data-proress="4">Next</a>
            </div>
        </div>
        <!-- 5 step -->
        <div class="questinnaire-step5 qtnr-inner">
            <h2 class="questinnaire-heading">Do you have any scalp problems</h2>
            <div class="form-section">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id="ques5" name="radio-group" value="yes">
                        <label for="ques5">YES</label>
                    </div>
                    <div class="form-group ques-textarea">
                        <select name="cars" id="textbox5">
                            <option value="Psoriasis">Psoriasis</option>
                            <option value="Sunburn">Sunburn</option>
                            <option value="Sudden soreness/redness">Sudden soreness/redness</option>
                            <option value="Dandruff">Dandruff</option>
                        </select>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="SUITABLE1" name="radio-group" value="no" checked>
                        <label for="SUITABLE1">NO</label>
                    </div>
                </form>
            </div>
            <div class="questinnaire-button">
                <a class="quest-backbtn" href="javascript:void(0)">Back</a>
                <a class="quest-nextbtn" href="javascript:void(0)" data-proress="5">Next</a>
            </div>
        </div>
        <!-- 6 step -->
        <div class="questinnaire-step6 qtnr-inner">
            <h2 class="questinnaire-heading">Are any of the following true</h2>
            <div class="form-section">
                <form action="#">
                    <ul class="ques-list-sec">
                        <li>I have previously been diagnosed with breast cancer, prostate cancer, or I am currently
                            undergoing PSA (prostate monitoring)</li>
                        <li>I have uncontrolled low or high blood pressure</li>
                        <li>I am experiencing, or have previously experienced, depression, anxiety, or panic disorders
                        </li>
                    </ul>
                    <div class="form-group form-radio">
                        <input type="radio" id="ques6_1" name="radio-group" value="yes">
                        <label for="ques6_1">Yes</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="ques6_2" name="radio-group" value="no" checked>
                        <label for="ques6_2">No </label>
                    </div>
                </form>
            </div>
            <div class="questinnaire-button">
                <a class="quest-backbtn" href="javascript:void(0)">Back</a>
                <a class="quest-nextbtn" href="javascript:void(0)" data-proress="6">Next</a>
            </div>
        </div>
        <!-- 6_1 step -->
        <div class="questinnaire-step6_1 qtnr-inner">
            <h2 class="questinnaire-heading">Have you previously been diagnosed with breast cancer, prostate cancer, or
                are you currently undergoing PSA (prostate monitoring)</h2>
            <div class="form-section">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id="yes" name="radio-group" value="yes">
                        <label for="ques6_1">Yes</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="no" name="radio-group" value="no" checked>
                        <label for="ques6_1">No </label>
                    </div>
                </form>
            </div>
            <div class="questinnaire-button">
                <a class="quest-backbtn" href="javascript:void(0)">Back</a>
                <a class="quest-nextbtn" href="javascript:void(0)" data-proress="6">Next</a>
            </div>
        </div>
        <!-- 6_2 step -->
        <div class="questinnaire-step6_2 qtnr-inner">
            <h2 class="questinnaire-heading">Are you experiencing, or have previously experienced, depression, anxiety
                or panic disorders</h2>
            <div class="form-section">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id="ques6_2" name="radio-group" value="yes">
                        <label for="ques6_2">Yes</label>
                    </div>
                    <div id="textboxt6_2" class="form-group form-radio">
                        <div class="form-group form-radio">
                            <input type="radio" id="css" name="detail6_2"
                                value="I understand and agree to stop this treatment immediately and consult a doctor if I experience symptoms of depression, anxiety, or panic disorders">
                            <label for="css">I understand and agree to stop this treatment immediately and consult a
                                doctor
                                if I experience symptoms of depression, anxiety, or panic disorders</label>
                        </div>
                        <div class="form-group form-radio">
                            <input type="radio" id="javascript" name="detail6_2"
                                value="I am not currently stable or don't want to proceed with Finasteride.">
                            <label for="javascript">I am not currently stable or don't want to proceed with
                                Finasteride.</label>
                        </div>

                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="no" name="radio-group" value="no" checked>
                        <label for="ques6_2">No </label>
                    </div>
                </form>
            </div>
            <div class="questinnaire-button">
                <a class="quest-backbtn" href="javascript:void(0)">Back</a>
                <a class="quest-nextbtn" href="javascript:void(0)" data-proress="6">Next</a>
            </div>
        </div>
        <!-- 6_3 step -->
        <div class="questinnaire-step6_3 qtnr-inner">
            <h2 class="questinnaire-heading">Do you have uncontrolled low or high blood pressure</h2>
            <div class="form-section">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id="ques6_1" name="radio-group" value="yes">
                        <label for="ques6_1">Yes</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="ques6_2" name="radio-group" value="no" checked>
                        <label for="ques6_1">No </label>
                    </div>
                </form>
            </div>
            <div class="questinnaire-button">
                <a class="quest-backbtn" href="javascript:void(0)">Back</a>
                <a class="quest-nextbtn" href="javascript:void(0)" data-proress="6">Next</a>
            </div>
        </div>
        <!-- 7 step -->
        <div class="questinnaire-step7 qtnr-inner">
            <h2 class="questinnaire-heading">Do you have any of the following problems</h2>
            <div class="form-section">
                <form action="#">
                    <li>Significant or Chronic Kidney Disease</li>
                    <li>Phaeochromocytoma</li>
                    <li>Heart attack, stroke, or mini-stroke within the last 6 months</li>
                    <li>Chest pain symptoms or any heart rhythm issues</li>
                    <li>Heart valve problems</li>
                    <li>Disease of the heart musclesGet breathless or have chest pain with light exertion, such as
                        walking briskly for 20 minutes or climbing two flights of stairs</li>
                    <li></li>
                    <div class="form-group form-radio">
                        <input type="radio" id=" NOT SUITABLE4" name="radio-group" value="yes">
                        <label for=" NOT SUITABLE4">YES</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="CONTINUE1" name="radio-group" value="no" checked>
                        <label for="CONTINUE1">NO </label>
                    </div>
                </form>
            </div>
            <div class="questinnaire-button">
                <a class="quest-backbtn" href="javascript:void(0)">Back</a>
                <a class="quest-nextbtn" href="javascript:void(0)" data-proress="7">Next</a>
            </div>
        </div>
        <!-- 8 step -->
        <div class="questinnaire-step8 qtnr-inner">
            <h2 class="questinnaire-heading">Do you have any intolerances/allergies to the following</h2>
            <div class="form-section">
                <form action="#">
                    <div class="form-group form-radio">
                        <input type="radio" id="ques8" name="radio-group" value="Lactose" checked>
                        <label for="ques8">Lactose</label>
                    </div>
                    <div class="form-group ques-textarea">
                        <p>If we recommend a tablet medication in your plan it can contain very small amounts of
                            lactose. If you have previously taken most tablet formulations without causing any symptoms
                            then it is unlikely that you will get undesirable effects from the lactose within our
                            tablets. Are you okay to proceed ?</p>
                        <input type="radio" id="" class="textbox8" value="yes" checked>
                        <label for="ques8">Yes</label>
                        <input type="radio" id="" class="textbox8" value="no">
                        <label for="ques8">No</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="SUITABLE CONTINUE1 " name="radio-group" value="Minoxidil">
                        <label for="SUITABLE CONTINUE1 ">Minoxidil</label>
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="SUITABLE CONTINUE1 " name="radio-group" value="Finasteride">
                        <label for="SUITABLE CONTINUE1 ">Finasteride</label>
                    </div>

                </form>
            </div>
            <div class="questinnaire-button">
                <a class="quest-backbtn" href="javascript:void(0)">Back</a>
                <a class="quest-nextbtn" href="javascript:void(0)" data-proress="8">Next</a>
            </div>
        </div>
        <!-- 9 step -->
        <div class="questinnaire-step9 qtnr-inner">
            <h2 class="questinnaire-heading">It's really important to tell us about</h2>
            <div class="form-section">
                <form action="#">
                    <li>Major illnesses</li>
                    <li>Ongoing medical conditions</li>
                    <li>Any medication prescribed or over the counter that you take</li>
                    <li>Allergies to medication</li>
                    <li>Operations</li>
                    <div class="form-group form-radio">
                        <input type="radio" id="ques9" name="radio-group" value="yes">
                        <label for="ques9">Yes</label>
                    </div>
                    <div class="form-group ques-textarea">
                        <input class="form-control" type="text" id="textbox9"
                            placeholder="Please specify any major illness you have, ongoing medical conditions, any medicine prescribed or over the counter you take, allergies to medications, or details of any recent operations you have had">
                    </div>
                    <div class="form-group form-radio">
                        <input type="radio" id="" name="radio-group" value="no" checked>
                        <label for="question">No </label>
                    </div>
                </form>
            </div>
            <div class="questinnaire-button">
                <a class="quest-backbtn" href="javascript:void(0)">Back</a>
                <a class="quest-nextbtn" href="javascript:void(0)" data-proress="9">Next</a>
            </div>
        </div>

        <!-- 13 step -->
        <div class="questinnaire-laststep qtnr-inner">
            <div class="questinnaire-thankyou">
                <div class="success">
                    <i class="fa-solid fa-circle-check"></i>
                </div>
                <h2 class="questinnaire-heading">You Have Successfully Completed Questionnaire</h2>
            </div>
            <!-- TREATMENT-OPTION-SEC START  -->
            <div class="treatment-option-sec">
                <div class="main-heading text-center treatment-head">
                    <h2>Recommended Treatment options</h2>
                </div>
                <div class="row treatment-row">
                    <h3>Combination Solution (Pill-free option)</h3>
                    <ul>
                        <li>Is your hair long or short? If you have longer hair, a dropper may help you apply the
                            solution directly
                            onto the scalp. If your hair is shorter, a spray might be more suitable for easy coverage
                            and
                            application.</li>
                    </ul>
                    @php
                    foreach($products as $pro)
                    {
                    $pro_img = Media::select('file_name')->where('mediable_id','=',$pro->id)->get()->toArray();
                    $exists = DB::table('product_tags')->where('product_id', $pro->id)->exists();
                    if ($exists) {
                    if (strpos($pro->slug, 'minoxidil-and-finasteride') !== false) {
                    @endphp
                    <div class="col-md-6 col-sm-12">
                        <div class="treatment-option-div">
                            <h4>{{ $pro->name }}</h4>
                            <p>It contains the same active ingredient as viagra but comes at <br>a lower price because
                                you
                                aren’t paying for the brand name. </p>
                            <div class="star-reviews d-flex align-items-center">
                                <div class="stars treatment-stars">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <span>261 Reviews</span>
                            </div>
                            <div class="row">
                                <div class="col-lg-7 col-md-12 treatment-btns">
                                    <a href="javascript:void(0);" class="trans-btn">Improve blood Flow</a>
                                    <a href="javascript:void(0);" class="trans-btn">Smooth muscles</a>
                                    <a href="javascript:void(0);" class="trans-btn">relaxing blood vessels</a>
                                    <ul>
                                        <li>
                                            <p class="d-flex align-items-center justify-content-between"><span>effective
                                                    For</span> for 90% of men</p>
                                        </li>
                                        <li>
                                            <p class="d-flex align-items-center justify-content-between"><span>Work
                                                    within</span> for 90% of men</p>
                                        </li>
                                        <li>
                                            <p class="d-flex align-items-center justify-content-between"><span>Support
                                                    Erection</span> 4 hours</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-5 col-md-12">
                                    <figure class="agent-card-pic">
                                        <img src="{{ asset('storage/images/products') }}{{ '/'.$pro_img[0]['file_name'] }}"
                                            class="img-fluid" alt="Sildenafil" />
                                    </figure>
                                </div>
                            </div>
                            <livewire:frontend.product.single-product-cart-component :product="$pro" />
                        </div>
                    </div>

                    @php
                    }
                    }
                    } @endphp
                </div>
                <div class="row treatment-row">
                    <h3>Combination Pack (Tablet and Spray)</h3>
                    <ul>
                        <li>Statement: "94% effective in men</li>
                        <li>Is your hair long or short? If you have longer hair, a dropper may help you apply the
                            solution directly
                            onto the scalp. If your hair is shorter, a spray might be more suitable for easy coverage
                            and
                            application</li>
                    </ul>
                    @php
                    foreach($products as $pro)
                    {
                    $pro_img = Media::select('file_name')->where('mediable_id','=',$pro->id)->get()->toArray();
                    $exists = DB::table('product_tags')->where('product_id', $pro->id)->exists();
                    if ($exists) {
                    if (strpos($pro->slug, 'combination-pack') !== false) {
                    @endphp
                    <div class="col-md-6 col-sm-12">
                        <div class="treatment-option-div">
                            <h4>{{ $pro->name }}</h4>
                            <p>It contains the same active ingredient as viagra but comes at <br>a lower price because
                                you
                                aren’t paying for the brand name. </p>
                            <div class="star-reviews d-flex align-items-center">
                                <div class="stars treatment-stars">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <span>261 Reviews</span>
                            </div>
                            <div class="row">
                                <div class="col-lg-7 col-md-12 treatment-btns">
                                    <a href="javascript:void(0);" class="trans-btn">Improve blood Flow</a>
                                    <a href="javascript:void(0);" class="trans-btn">Smooth muscles</a>
                                    <a href="javascript:void(0);" class="trans-btn">relaxing blood vessels</a>
                                    <ul>
                                        <li>
                                            <p class="d-flex align-items-center justify-content-between"><span>effective
                                                    For</span> for 90% of men</p>
                                        </li>
                                        <li>
                                            <p class="d-flex align-items-center justify-content-between"><span>Work
                                                    within</span> for 90% of men</p>
                                        </li>
                                        <li>
                                            <p class="d-flex align-items-center justify-content-between"><span>Support
                                                    Erection</span> 4 hours</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-5 col-md-12">
                                    <figure class="agent-card-pic">
                                        <img src="{{ asset('storage/images/products') }}{{ '/'.$pro_img[0]['file_name'] }}"
                                            class="img-fluid" alt="Sildenafil" />
                                    </figure>
                                </div>
                            </div>
                            <livewire:frontend.product.single-product-cart-component :product="$pro" />
                        </div>
                    </div>

                    @php
                    }
                    }
                    } @endphp
                </div>


                <div class="row treatment-row">
                    <h3>Minoxidil Hair Loss Solution</h3>
                    <ul>
                        <li>Is your hair long or short? If you have longer hair, a dropper may help you apply the
                            solution directly
                            onto the scalp. If your hair is shorter, a spray might be more suitable for easy coverage
                            and
                            application</li>
                    </ul>
                    @php
                    foreach($products as $pro)
                    {
                    $pro_img = Media::select('file_name')->where('mediable_id','=',$pro->id)->get()->toArray();
                    $exists = DB::table('product_tags')->where('product_id', $pro->id)->exists();
                    if ($exists) {
                    if (strpos($pro->slug, 'minoxidil-solution-hair') !== false) {
                    @endphp
                    <div class="col-md-6 col-sm-12">
                        <div class="treatment-option-div">
                            <h3>minoxidil-solution-hair</h3>
                            <h4>{{ $pro->name }}</h4>
                            <p>It contains the same active ingredient as viagra but comes at <br>a lower price because
                                you
                                aren’t paying for the brand name. </p>
                            <div class="star-reviews d-flex align-items-center">
                                <div class="stars treatment-stars">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <span>261 Reviews</span>
                            </div>
                            <div class="row">
                                <div class="col-lg-7 col-md-12 treatment-btns">
                                    <a href="javascript:void(0);" class="trans-btn">Improve blood Flow</a>
                                    <a href="javascript:void(0);" class="trans-btn">Smooth muscles</a>
                                    <a href="javascript:void(0);" class="trans-btn">relaxing blood vessels</a>
                                    <ul>
                                        <li>
                                            <p class="d-flex align-items-center justify-content-between"><span>effective
                                                    For</span> for 90% of men</p>
                                        </li>
                                        <li>
                                            <p class="d-flex align-items-center justify-content-between"><span>Work
                                                    within</span> for 90% of men</p>
                                        </li>
                                        <li>
                                            <p class="d-flex align-items-center justify-content-between"><span>Support
                                                    Erection</span> 4 hours</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-5 col-md-12">
                                    <figure class="agent-card-pic">
                                        <img src="{{ asset('storage/images/products') }}{{ '/'.$pro_img[0]['file_name'] }}"
                                            class="img-fluid" alt="Sildenafil" />
                                    </figure>
                                </div>
                            </div>
                            <livewire:frontend.product.single-product-cart-component :product="$pro" />
                        </div>
                    </div>

                    @php
                    }
                    }
                    } @endphp
                </div>

                <div class="row treatment-row">
                    <h3>Finasteride Oral Tablet(Pill option)</h3>
                    @php
                    foreach($products as $pro)
                    {
                    $pro_img = Media::select('file_name')->where('mediable_id','=',$pro->id)->get()->toArray();
                    $exists = DB::table('product_tags')->where('product_id', $pro->id)->exists();
                    if (!$exists) {
                    if (strpos($pro->slug, 'oral-finasteride-tablet') !== false) {
                    @endphp
                    <div class="col-md-6 col-sm-12">
                        <div class="treatment-option-div">
                            <h3>minoxidil-solution-hair</h3>
                            <h4>{{ $pro->name }}</h4>
                            <p>It contains the same active ingredient as viagra but comes at <br>a lower price because
                                you
                                aren’t paying for the brand name. </p>
                            <div class="star-reviews d-flex align-items-center">
                                <div class="stars treatment-stars">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <span>261 Reviews</span>
                            </div>
                            <div class="row">
                                <div class="col-lg-7 col-md-12 treatment-btns">
                                    <a href="javascript:void(0);" class="trans-btn">Improve blood Flow</a>
                                    <a href="javascript:void(0);" class="trans-btn">Smooth muscles</a>
                                    <a href="javascript:void(0);" class="trans-btn">relaxing blood vessels</a>
                                    <ul>
                                        <li>
                                            <p class="d-flex align-items-center justify-content-between"><span>effective
                                                    For</span> for 90% of men</p>
                                        </li>
                                        <li>
                                            <p class="d-flex align-items-center justify-content-between"><span>Work
                                                    within</span> for 90% of men</p>
                                        </li>
                                        <li>
                                            <p class="d-flex align-items-center justify-content-between"><span>Support
                                                    Erection</span> 4 hours</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-5 col-md-12">
                                    <figure class="agent-card-pic">
                                        <img src="{{ asset('storage/images/products') }}{{ '/'.$pro_img[0]['file_name'] }}"
                                            class="img-fluid" alt="Sildenafil" />
                                    </figure>
                                </div>
                            </div>
                            <livewire:frontend.product.single-product-cart-component :product="$pro" />
                        </div>
                    </div>

                    @php
                    }
                    }
                    } @endphp
                </div>
            </div>
            <!-- TREATMENT-OPTION-SEC END  -->
        </div>
    </div>
</section>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).ready(function() {
    //click 
    $('#UnsutableBtn').on('click', function() {

    })

    $('#textbox3').hide();
    $('#textbox4').hide();
    $('#textbox5').hide();
    $('.textbox8').hide();
    $('#textbox9').hide();
    $('#detail6_2').hide();

    $('#ques3').click(function() {
        if ($('#ques3').is(':checked')) {
            $('#textbox3').show();
        }
    });

    $('#ques4').click(function() {
        if ($('#ques4').is(':checked')) {
            $('#textbox4').show();
        }
    });
    $('#ques5').click(function() {
        if ($('#ques5').is(':checked')) {
            $('#textbox5').show();
        }
    });
    $('#ques6_2').click(function() {
        if ($('#ques6_2').is(':checked')) {
            $('#detail6_2').show();
        }
    });


    $('#ques8').click(function() {
        if ($('#ques8').is(':checked')) {
            $('.textbox8').show();
        }
    });

    $('#ques9').click(function() {
        if ($('#ques9').is(':checked')) {
            $('#textbox9').show();
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
                    $('#abortModalBody').html(result.message)
                    // alert(result.message)
                }
                console.log(result.status);
            }
        });
        // }
    })

});
</script>