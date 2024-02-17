@extends('layouts.app')
@section('title', $product->name)
@section('content')
<!-- SILDENAFIL-BANNER START  -->
<section class="sildenafil-banner">
    <div class="container-xxl container">
        <div class="row sildenafil-inner">
            <div class="col-lg-7 col-md-12 col-sm-12 text-center">
                <figure>
                    <img src="{{ asset('frontend_new/images/Img.png') }}" class="img-fluid" alt="Sildenafil">
                </figure>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="sildenafil-right">
                    <ul class="breadcrumb">
                        <li><a href="javascript:void(0);" class="silde-navigationb">Home/</a></li>
                        <li><a href="javascript:void(0);" class="silde-navigationb">Erectile Dysfunction/</a></li>
                        <li><a href="javascript:void(0);" class="active navigation"> Sildenafil </a></li>
                    </ul>
                    <h3 class=""> {{$product->name}} </h3>


                    <div class="stars treatment-stars">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <p class="slider-text">{!! $product->description !!}</p>
                    <ul class="silder-list">
                        <li>$15 For First Month</li>
                        <li>$24 Per Month Thereafter</li>
                    </ul>
                    <a href="javascript:void(0);" class="trans-btn see-detailbtn">Start Journey</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SILDENAFIL-BANNER END  -->



<section class="consultation-sec silden-icon-upper pt-120">
    <div class="container-xxl container">
        <div class="row cstm-row backed-upper silden-icon">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="consult-div d-flex align-items-center">
                    <figure>
                        <img src="{{ asset('frontend_new/images/Icon (1).png') }}" class="img-fluid" alt="backed">
                    </figure>
                    <div class="consult-heading">
                        <h4>Ongoing Clinic &amp; <br>pSupport</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="consult-div d-flex align-items-center">
                    <figure>
                        <img src="{{ asset('frontend_new/images/Icon (2).png') }}" class="img-fluid" alt="discreet">
                    </figure>
                    <div class="consult-heading">
                        <h4>Free, Discreet, Next <br>Day delivery
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="consult-div d-flex align-items-center">
                    <figure>
                        <img src="{{ asset('frontend_new/images/Icon (3).png') }}" class="img-fluid" alt="on-time">
                    </figure>
                    <div class="consult-heading">
                        <h4>online consultation <br>with doctors</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="consult-div d-flex align-items-center">
                    <figure>

                        <img src="{{ asset('frontend_new/images/Mask group (7).png') }}" class="img-fluid" alt="online">
                    </figure>
                    <div class="consult-heading">
                        <h4>Cancel anytime
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="how-its-work hard-easy-sec pt-100 pb-100">
    <div class="container-xxl container">
        <div class="main-heading text-center how-its-head">
            <h2>Sildenafil makes hard easy</h2>
        </div>
        <div class="row how-its-row">
            <div class="col-md-4 col-sm-12">
                <div class="how-its-workdiv text-center">
                    <figure>
                        <img src="{{ asset('frontend_new/images/hand-with-candel 1.png') }}" class="img-fluid"
                            alt="Quick Consultation">
                    </figure>
                    <figcaption>
                        <h4>Feel the urge</h4>
                        <p>Sildenafil starts to work when you’re sexually <br> aroused. So start by getting in the
                            mood</p>
                    </figcaption>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="how-its-workdiv text-center">
                    <figure>
                        <img src="{{ asset('frontend_new/images/hand-with-candel 1 (1).png') }}" class="img-fluid"
                            alt="Free-Fast-Delivery">
                    </figure>
                    <figcaption>
                        <h4>Take the pills</h4>
                        <p>Sildenafil takes 30-60 minutes to work, with the <br> sweet spot at the one-hour mark.
                        </p>
                    </figcaption>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="how-its-workdiv text-center">
                    <figure>
                        <img src="{{ asset('frontend_new/images/hand-with-candel 1 (2).png') }}" class="img-fluid"
                            alt="Continous-Support">
                    </figure>
                    <figcaption>
                        <h4>Enjoy the ride</h4>
                        <p>Effects last for four hours, sometimes longer. Get <br> ready for a great time with your
                            partner.</p>
                    </figcaption>
                </div>
            </div>
        </div>

    </div>
</section>

<section>
    <div class="consultation-left container container-xxl">
        <div class="row consultation-row">
            <div class="col-lg-6 col-md-12">
                <h2 class="consultation-head">IS SILDENAFIL <br> RIGHT FOR ME </h2>
                <p class="consultation-text">Erection difficulties are very common. 40% of men will experience ED by
                    age 40. Fortunately,
                    there are effective solutions available. Sildenafil is the most popular treatment for men with
                    ED. It has been clinically proven to work for the vast majority of guys with ED.</p>
                <a href="javascript:void(0);" class="trans-btn black-btn learn-more-card-btn">Start Consultation</a>
            </div>
            <div class="col-lg-6 col-md-12consultation-right">
                <div class="consultation-right-inner">
                    <h3 class="consultation-right-head">Not sure if Sildenafil is right for you?</h3>
                    <p class="consultation-right-text">Get professional medical guidance without in-person visits or
                        long pharmacy queues.</p>

                    <table class="consultation-right-table">
                        <tr>
                            <td class="pt-0">How long does it last?</td>
                            <td class="pt-0">4 Hours</td>
                        </tr>
                        <tr>
                            <td>How long to feel the effect?</td>
                            <td>60 Minutes</td>
                        </tr>
                        <tr>
                            <td>Don't combine with</td>
                            <td>Nitrates, alcohol</td>
                        </tr>
                        <tr>
                            <td class="pb-0">Benefits</td>
                            <td class="pb-0">Works for most guys; cost <br> effective; clinically approved</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container what-silidar-main container-xxl">
        <div class="owl-carousel owl-theme what-silidar-upper">
            <div class="item what-silidar-crous">
                <div class="what-silidar">
                    <div class="row what-silidar-row">
                        <div class="col-lg-6 col-md-12">
                            <h1 class="what-silidar-head">What is Sildenafil? </h1>
                            <p class="what-silidar-text">Sildenafil citrate is a well known PDE5 inhibitor that has
                                been prescribed by doctors for
                                the last 20 years, Sildenafil works by helping the blood vessels in your penis to
                                relax
                                and open up. This allows blood to flow into the penis when you become sexually
                                aroused,
                                resulting in a harder and longer-lasting erection.</p>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <figure>
                                <img src="{{ asset('frontend_new/images/Rectangle 223.png') }}" class="img-fluid"
                                    alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item what-silidar-crous">
                <div class="what-silidar">
                    <div class="row what-silidar-row">
                        <div class="col-lg-6 col-md-12">
                            <h1 class="what-silidar-head">What is Sildenafil? </h1>
                            <p class="what-silidar-text">Sildenafil citrate is a well known PDE5 inhibitor that has
                                been prescribed by doctors for
                                the last 20 years, Sildenafil works by helping the blood vessels in your penis to
                                relax
                                and open up. This allows blood to flow into the penis when you become sexually
                                aroused,
                                resulting in a harder and longer-lasting erection.</p>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <figure>
                                <img src="{{ asset('frontend_new/images/Rectangle 223.png') }}" class="img-fluid"
                                    alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item what-silidar-crous">
                <div class="what-silidar">
                    <div class="row what-silidar-row">
                        <div class="col-lg-6 col-md-12">
                            <h1 class="what-silidar-head">What is Sildenafil? </h1>
                            <p class="what-silidar-text">Sildenafil citrate is a well known PDE5 inhibitor that has
                                been prescribed by doctors for
                                the last 20 years, Sildenafil works by helping the blood vessels in your penis to
                                relax
                                and open up. This allows blood to flow into the penis when you become sexually
                                aroused,
                                resulting in a harder and longer-lasting erection.</p>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <figure>
                                <img src="{{ asset('frontend_new/images/Rectangle 223.png') }}" class="img-fluid"
                                    alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item what-silidar-crous">
                <div class="what-silidar">
                    <div class="row what-silidar-row">
                        <div class="col-lg-6 col-md-12">
                            <h1 class="what-silidar-head">What is Sildenafil? </h1>
                            <p class="what-silidar-text">Sildenafil citrate is a well known PDE5 inhibitor that has
                                been prescribed by doctors for
                                the last 20 years, Sildenafil works by helping the blood vessels in your penis to
                                relax
                                and open up. This allows blood to flow into the penis when you become sexually
                                aroused,
                                resulting in a harder and longer-lasting erection.</p>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <figure>
                                <img src="{{ asset('frontend_new/images/Rectangle 223.png') }}" class="img-fluid"
                                    alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

</section>
<!-- BLACK-SEC2 START  -->
<section class="black-sec black-silinder">
    <div class="container-xxl container">
        <div class="unsure-div d-flex justify-content-between align-items-center flex-wrap-wrap">
            <div class="text-white">
                <h2>Get a free consultation</h2>
                <p>Speak with one of our clinicians and get personalised advice. Monday to Friday 9am - 4:30pm</p>
            </div>
            <a class="white-btn" href="javascript:void(0);">Book Consultation <span>Book Consultation</span></a>
        </div>
    </div>
</section>
<!-- BLACK-SEC2 END  -->


<!-- MEDICAL-SEC START  -->
<section class="medical-sec slide-medical medical-wrap-page2 pt-120 pb-120">
    <div class="container-xxl container">
        <div class="main-heading text-center">
            <h2>Get expert advise from medical professionals</h2>
            <p>we will pair you with expert medical providers to ensure the right treament for you</p>
        </div>
        <div class="row cstm-row">
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <figure class="expert">
                            <img src="{{ asset('frontend_new/images/medical-img1.png') }}" alt="medical-img1">
                        </figure>
                    </div>
                    <div class="col-md-4">
                        <figure class="expert">
                            <img src="{{ asset('frontend_new/images/medical-img2.png') }}" alt="medical-img2">
                        </figure>
                    </div>
                    <div class="col-md-4">
                        <figure class="expert">
                            <img src="{{ asset('frontend_new/images/medical-img3.png') }}" alt="medical-img3">
                        </figure>
                    </div>
                    <div class="col-md-4">
                        <figure class="expert">
                            <img src="{{ asset('frontend_new/images/medical-img4.png') }}" alt="medical-img4">
                        </figure>
                    </div>
                    <div class="col-md-4">
                        <figure class="expert">
                            <img src="{{ asset('frontend_new/images/medical-img5.png') }}" alt="medical-img5">
                        </figure>
                    </div>
                    <div class="col-md-4">
                        <figure class="expert">
                            <img src="{{ asset('frontend_new/images/medical-img6.png') }}" alt="medical-img6">
                        </figure>
                    </div>
                </div>
                <a href="javascript:void(0);" class="trans-btn">get started</a>
            </div>
            <div class="col-lg-4 col-md-12">
                <figure class="mob">
                    <img src="{{ asset('frontend_new/images/mobile.png') }}" alt="mobile">
                </figure>
                <a href="javascript:void(0);" class="trans-btn">Chat now!</a>
            </div>
        </div>
        <div class="row cstm-row2">
            <div class="col-lg-8 col-md-12">
                <a href="javascript:void(0);" class="trans-btn">get started</a>
            </div>
            <div class="col-lg-1 col-md-12"></div>
            <div class="col-lg-3 col-md-12">
                <a href="javascript:void(0);" class="trans-btn">Chat now!</a>
            </div>
        </div>
    </div>
</section>
<!-- MEDICAL-SEC END  -->


<!-- FAQ START  -->
<section class="faq pt-100 pb-100">
    <div class="container-xxl container">
        <div class="main-heading text-center faq-head">
            <h2>Frequently Asked Questions about sildenafil</h2>
            <p>Have Questions? We’re Here to help.</p>
        </div>
        <form action="" method="get">
            <div class="input-group">
                <span><i class="fa-solid fa-magnifying-glass"></i></span>
                <input type="search" name="" class="form-control" placeholder="Search">
            </div>
        </form>
        <div class="accordion question-acco" id="questionaccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        How long does Sildenafil Take to work?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        Sildenafil typically starts working in about 15-30 minutes, but its peak effect begins for most
                        men about one hour after it’s taken on an empty stomach. Keep in mind that food in the stomach
                        can delay the absorption of sildenafil by up to an hour, and also that the timing of each
                        individual’s response is a little bit different. Remember that sildenafil will only work when
                        you are sexually aroused, but it should make it easier to get and sustain an erection during
                        sexual intercourse.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How does Sildenafil work?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        agent is a 100% online telehealth platform that connects patients to licensed healthcare
                        professionals in the UK. We offer support for conditions ranging from sexual health to
                        skincare, and hair care. Through our easy online process, anyone can answer a few questions,
                        meet with a licensed medical provider, and then get a customised treatment plan, including
                        medical and over-the-counter products, shipped right to their door.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        How long does Sildenafil’s effect last for?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        agent is a 100% online telehealth platform that connects patients to licensed healthcare
                        professionals in the UK. We offer support for conditions ranging from sexual health to
                        skincare, and hair care. Through our easy online process, anyone can answer a few questions,
                        meet with a licensed medical provider, and then get a customised treatment plan, including
                        medical and over-the-counter products, shipped right to their door.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        What side effects can Sildenafil cause?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        agent is a 100% online telehealth platform that connects patients to licensed healthcare
                        professionals in the UK. We offer support for conditions ranging from sexual health to
                        skincare, and hair care. Through our easy online process, anyone can answer a few questions,
                        meet with a licensed medical provider, and then get a customised treatment plan, including
                        medical and over-the-counter products, shipped right to their door.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Is Sildenafil safe to buy Online?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        agent is a 100% online telehealth platform that connects patients to licensed healthcare
                        professionals in the UK. We offer support for conditions ranging from sexual health to
                        skincare, and hair care. Through our easy online process, anyone can answer a few questions,
                        meet with a licensed medical provider, and then get a customised treatment plan, including
                        medical and over-the-counter products, shipped right to their door.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Can I drink alcohol whilst taking Sildenafil?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        agent is a 100% online telehealth platform that connects patients to licensed healthcare
                        professionals in the UK. We offer support for conditions ranging from sexual health to
                        skincare, and hair care. Through our easy online process, anyone can answer a few questions,
                        meet with a licensed medical provider, and then get a customised treatment plan, including
                        medical and over-the-counter products, shipped right to their door.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        Are there any Meds that can’t be taken with Sildenafil?
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        agent is a 100% online telehealth platform that connects patients to licensed healthcare
                        professionals in the UK. We offer support for conditions ranging from sexual health to
                        skincare, and hair care. Through our easy online process, anyone can answer a few questions,
                        meet with a licensed medical provider, and then get a customised treatment plan, including
                        medical and over-the-counter products, shipped right to their door.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ END  -->
@endsection