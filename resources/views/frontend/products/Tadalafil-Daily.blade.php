@extends('layouts.app')

@section('content')
<!-- <style>
    .in-1_solution .sildenafil-right .silden-head {
        font-size: 49px;
    }
    .in-1_solution .main-heading p {
        font-size: 16px;
        line-height: 40px;
    }
    .in-1_solution .silder-list li {
        font-size: 19px;
        line-height: 40px;
    }
    .in-1_solution::marker {
        font-size: 20px;
    }
    .in-1_solution .consultation-head {
        font-size: 52px;
        font-weight: 400;
        line-height: 94px;
        text-align: left;
        margin-bottom: 10px;
        font-family: 'Yeseva One', cursive;
    }
    .in-1_solution .consultation-text {
        font-size: 19px;
    }
</style> -->
<div class="in-1_solution">
    <!-- SILDENAFIL-BANNER START  -->
<section class="sildenafil-banner deft">
    <div class="container-xxl container">
        <div class="row sildenafil-inner">
            <div class="col-lg-7 col-md-12 col-sm-12 text-center">
                <figure>
                    <img src="{{ asset('frontend_new/images/hd-ed-iamge.JPG') }}" class="img-fluid" alt="discreet">
                </figure>

            </div>
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="sildenafil-right">
                <div class="product-details-content">
                        <h3 class="silden-head">Tadalafil Daily - Your Everyday Ally: </h3>
                        <div class="rating-number">
                            <div class="quick-view-number">
                                <span class="score">
                                    <div class="score-wrap">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                         <i class="far fa-star"></i>
                                         <i class="far fa-star"></i>
                                         <i class="far fa-star"></i>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="main-heading ">
                        <p>This suave, unbranded variant of Cialis offers the same potent active ingredient, 
                            but without the premium price tag. Tadalafil Daily 5mg is your loyal companion, 
                            taken once a day, gradually building its presence in your system. This steady
                             partner allows you to freely engage in spontaneous moments of intimacy, 
                             eliminating the need for a last-minute prep.</p>
                    </div>
                    
                    <ul class="silder-list">
                        <li>Effective for 90% of men. </li>
                        <li>Available doses: 5mg</li>
                        <li>Available doses: 5mg</li>
                        <li>£0 For First Month</li>
                        <li>£0 Per Month Thereafter</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SILDENAFIL-BANNER END  -->

<section class="consultation-sec consultation-sec-v2  silden-icon-upper pt-120">
    <div class="container-xxl container">
        <div class="row cstm-row backed-upper silden-icon">
            <div class="col-lg-3 col-6">
                <div class="consult-div d-flex align-items-center">
                    <figure>
                        <img src="{{ asset('frontend_new/images/Icon (1).png') }}" class="img-fluid" alt="backed">
                    </figure>
                    <div class="consult-heading">
                        <h4>Continuous Expert</br> Guidance</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="consult-div d-flex align-items-center">
                    <figure>
                        <img src="{{ asset('frontend_new/images/Icon (2).png') }}" class="img-fluid" alt="discreet">
                    </figure>
                    <div class="consult-heading">
                        <h4>Discreet, Express <br> Delivery - On Us
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="consult-div d-flex align-items-center">
                    <figure>
                        <img src="{{ asset('frontend_new/images/Icon (3).png') }}" class="img-fluid" alt="on-time">
                    </figure>
                    <div class="consult-heading">
                        <h4>Online Consultations with<br> Medical Professionals</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="consult-div d-flex align-items-center">
                    <figure>

                        <img src="{{ asset('frontend_new/images/Mask group (7).png') }}" class="img-fluid" alt="online">
                    </figure>
                    <div class="consult-heading">
                        <h4>Cancel With Ease,</br> On Your Terms
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
            <h2> Deploying Tadalafil Daily:</h2>
        </div>
        <div class="row how-its-row">
            <div class="col-md-4 col-sm-12">
                <div class="how-its-workdiv text-center">
                    <figure>
                        <img src="{{ asset('frontend_new/images/hand-with-candel 1.png') }}" class="img-fluid"
                            alt="Quick Consultation">
                    </figure>
                    <figcaption>
                        <h4>Daily Dose </h4>
                        <p>Take one pill per day and let Tadalafil Daily build a stronghold within your system. There's no need for a tactical pre-sex tablet. </p>
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
                        <h4>Ready When You Are</h4>
                        <p>With Tadalafil Daily, spontaneity is your new normal. No need for advanced planning—be ready for action at a moment's notice.
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
                        <h4>Long-Lasting Impact </h4>
                        <p>With effects that remain constant, gear up for an extended rendezvous with your partner.
                        </p>
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
                <h2 class="consultation-head">IS TADALAFIL DAILY YOUR PERFECT MATCH?</h2>
                <p class="consultation-text">Erectile difficulties, though unspoken, are a common adversary,
                     affecting 40% of men by age 40. But with reliable allies like Tadalafil Daily, constant
                      support is assured. This regimen is designed for the discerning gentleman who prefers 
                      a ready-to-act solution. Clinical studies have confirmed its efficacy in managing ED 
                      for most men.</p>
                <a href="{{ url('/contact_us') }}" class="trans-btn black-btn learn-more-card-btn">Start Consultation</a>
            </div>
            <div class="col-lg-6 col-md-12consultation-right">
                <div class="consultation-right-inner">
                    <h3 class="consultation-right-head">Not Sure? Here Are the Facts:</h3>
                    <p class="consultation-right-text">YYou can get your hands on this beard care set without a visit to your doctor.</p>

                    <table class="consultation-right-table">
                        <tr>
                            <td class="pt-0">Effective for</td>
                            <td class="pt-0">Continuous </td>
                        </tr>
                        <tr>
                            <td>Time taken before effect</td>
                            <td>3-5 Days</td>
                        </tr>
                        <tr>
                            <td>Must not take with </td>
                            <td> Nitrates, alcohol </td>
                        </tr>
                        <tr>
                            <td class="pb-0">Pros </td>
                            <td class="pb-0"> Effective in majority of men, No tactical pre sex tablet needed</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section>
    <div class="container what-silidar-main container-xxl">
        <div class="owl-carousel owl-theme what-silidar-upper">
            <div class="item what-silidar-crous">
                <div class="what-silidar">
                    <div class="row what-silidar-row">
                        <div class="col-lg-6 col-md-12">
                            <h1 class="what-silidar-head">What Is the 2-in-1 Hair Loss Solution? </h1>
                            <p class="what-silidar-text">Introducing Agent's refined 2-in-1 hair restoration formula. 
                                This potent blend fuses the power of two licensed, clinically proven hair loss medicines 
                                - Minoxidil and Finasteride. Our topical solution is designed for direct scalp application,
                                 thus typically reducing the side effects associated with oral consumption. This innovative
                                  spray provides a dual-action strategy: it actively blocks the hormone causing hair loss, 
                                  while simultaneously promoting scalp blood circulation to bolster follicle growth. It's 
                                  a straightforward, effective, and stylish solution for the modern gentleman taking command 
                                  of hair loss.</p>
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
                            <h1 class="what-silidar-head">Topical Vs Oral </h1>
                            <p class="what-silidar-text">Agent presents an innovative approach with our 2-in-1 solution, 
                                designed specifically for the gents who prefer a no pill approach. This topical solution with 
                                Finasteride, directly targets hair loss where it begins - on the scalp.

                                Topical Finasteride is not just an alternative; it's a cutting-edge advancement 
                                in hair loss treatment. It delivers the active ingredient straight to the source,
                                 allowing for a more focused and direct impact. Notably, clinical studies found it
                                  to be effective whilst associated with fewer side effects when compared to oral.
                                   While the oral version remains a potent tool in our arsenal, our topical formula 
                                   offers ease of use and a potentially lower risk of side effects. It's yet another
                                    way Agent empowers the discerning gentleman with an array of sophisticated, high-performance
                                     solutions for managing hair loss."
                            </p>
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
                            <h1 class="what-silidar-head"> dropper vs Spray: The Art of Application </h1>
                            <p class="what-silidar-text">At Agent, we understand that every gentleman's hair is unique, which is why we offer our solutions in two formats: a precise dropper and an advanced spray system.

                                For those gentlemen with longer hair or targeting specific thinning areas, the dropper is your tool of choice. It allows for a meticulous application, ensuring the solution has an accurate delivery to the exact regions you wish to target, bypassing the hair to work at the root of the problem, the scalp.

                                Meanwhile, those sporting shorter hair may find the spray offers better coverage and easier application. The spray disperses the solution over a wider area, ideal for a uniform scalp application. 

                                However, irrespective of the chosen method, it's essential to remember that the goal is to get the treatment onto the scalp, not the hair. Gentle massaging into the scalp ensures the formula's optimal performance.

                                Whether you opt for the dropper or the spray, it's all about selecting the method that suits your hair type and lifestyle best. Agent is committed to providing high-end, effective solutions tailored to the unique needs of the modern gentleman combating hair loss
                            </p>
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
</section> -->

<!-- slider sec start -->
<section class="sildenafil-sec pt-120 pb-120">
    <div class="container-xxl container">
    <!-- <h3 class="silden-head-slider text-black">What’s in the Box?</h3> -->
        <div class="owl-carousel owl-theme sildenafil-slider">
            <div class="item">
                <div class="sildenafil-wrap">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="main-heading text-left">
                                <h2>What is Tadalafil Daily?</h2>
                                <p>Tadalafil Daily is a distinguished PDE5 inhibitor that is your
                                     steadfast companion in the ongoing mission against ED. It 
                                     operates in the same manner as Tadalafil, promoting relaxation
                                      and openness of your penile blood vessels. This strategic
                                       move allows blood to freely flow when sexual 
                                    arousal is in play, facilitating a firm and sustained erection.
                                     The unique aspect of Tadalafil Daily is its everyday deployment,
                                      offering continuous erectile support as a trusted ally.
                                    </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <figure>
                             <img src="{{ asset('frontend_new/images/daily-1.JPG') }}" alt="Sildenafil" />
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="sildenafil-wrap">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="main-heading text-left">
                                <h2>The Tadalafil Daily Strategy</h2>
                                <p>  This formulation is taken once daily, at a consistent time, 
                                    independent of the potential field of sexual activity. This
                                     routine allows the medication to gradually accumulate in 
                                     your system over several days, providing the opportunity
                                      for spontaneous sexual engagement.
                                    </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <figure>
                                <img src="{{ asset('frontend_new/images/daily-st-2.png') }}" alt="Sildenafil" />
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="item">
                <div class="sildenafil-wrap">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="main-heading text-left">
                                <h2>Mission Restrictions</h2>
                                <p> Similar to Tadalafil, Tadalafil Daily is not to be deployed by
                                     women or those under the age of 18. It's not a tool for
                                    individuals devoid of erectile dysfunction. If you've
                                    been instructed by your physician to avoid sexual
                                    activities due to health constraints such as a 
                                     recent heart attack or stroke, this medication 
                                    is not your ally. Men with existing heart conditions
                                    requiring medical attention, and those taking certain
                                    medications (see product literature for list of
                                    examples), should consult their trusted GP before
                                     deploying Tadalafil Daily. Additional conditions may
                                     also restrict the use of this strategic treatment.
                                      Before launching Tadalafil Daily, please thoroughly 
                                      review the Patient Information Leaflet supplied with
                                       your medication. This provides vital intelligence for 
                                       your mission.
                                    </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <figure>
                                <img src="{{ asset('frontend_new/images/Mission%20Restrictions.png') }}" alt="Sildenafil" />
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- slider sec start -->

<!-- BLACK-SEC2 START  -->
<section class="black-sec home-free-cnslt product-deatils-b-sec">
    <div class="container-xxl container">
        <div class="unsure-div d-flex justify-content-between align-items-center flex-wrap-wrap">
            <div class="text-white">
                <h2>Book Your Free Consultation Today</h2>
                <p>Book Your Free Consultation Today Tell our men’s health experts about your symptoms
                     by completing our quick health questionnaire. </BR>Our pharmacists and men’s health experts are available Monday to Friday, 9 am to 4:30 pm. 
</p>
            </div>
            <a class="white-btn" href="{{ url('/contact_us') }}">Book Consultation <span>Book Consultation</span></a>
        </div>
    </div>
</section>
<!-- BLACK-SEC2 END  -->

<!-- MEDICAL-SEC START  -->
<section class="medical-sec pt-120 pb-120">
    <div class="container-xxl container">
        <div class="main-heading text-center">
        <h2>We Connect Gentlemen with the Ideal Men’s Health Experts</h2>
                <p>Connecting Gentlemen with Men’s Health Experts Let’s converse like true gentlemen. Talk to us about your health issues, and we’ll connect you with the medical professional best placed to help
                </p>
        </div>
        <div class="row cstm-row">
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-4">
                        <figure class="expert">
                            <img src="{{ asset('frontend_new/images/medical-img1.png') }}" alt="medical-img1">
                        </figure>
                    </div>
                    <div class="col-4">
                        <figure class="expert">
                            <img src="{{ asset('frontend_new/images/medical-img2.png') }}" alt="medical-img2">
                        </figure>
                    </div>
                    <div class="col-4">
                        <figure class="expert">
                            <img src="{{ asset('frontend_new/images/medical-img3.png') }}" alt="medical-img3">
                        </figure>
                    </div>
                    <div class="col-4">
                        <figure class="expert">
                            <img src="{{ asset('frontend_new/images/medical-img4.png') }}" alt="medical-img4">
                        </figure>
                    </div>
                    <div class="col-4">
                        <figure class="expert">
                            <img src="{{ asset('frontend_new/images/medical-img5.png') }}" alt="medical-img5">
                        </figure>
                    </div>
                    <div class="col-4">
                        <figure class="expert">
                            <img src="{{ asset('frontend_new/images/medical-img6.png') }}" alt="medical-img6">
                        </figure>
                    </div>
                </div>
                <a href="{{ url('/questionnaire/32') }}" class="trans-btn">get started</a>
            </div>
            <div class="col-lg-4 col-md-12">
                <figure class="mob">
                    <img src="{{ asset('frontend_new/images/mobile-gif.gif') }}" alt="mobile">
                </figure>
                <a href="{{ url('/contact_us') }}" class="trans-btn">Chat now!</a>
            </div>
        </div>
        <div class="row cstm-row2">
            <div class="col-lg-8 col-md-12">
                <a href="{{ url('/questionnaire/32') }}" class="trans-btn">get started</a>
            </div>
            <div class="col-lg-1 col-md-12"></div>
            <div class="col-lg-3 col-md-12">
                <a href="{{ url('/contact_us') }}" class="trans-btn">Chat now!</a>
            </div>
        </div>
    </div>
</section>
<!-- MEDICAL-SEC END  -->

<!-- FAQ START  -->
<section class="faq pt-100 pb-100">
    <div class="container-xxl container">
        <div class="main-heading text-center faq-head">
            <h2>Frequently Asked Questions about Tadalafil Daily</h2>
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
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        How does Tadalafil Daily work?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Tadalafil Daily works by helping the blood vessels in your penis to relax and open. This allows blood to flow into
                     the penis when you become sexually aroused, resulting in a harder and longer-lasting erection. Because it's taken
                      daily, it stays in your system and allows for spontaneous sexual activity.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How long does Tadalafil Daily take to start working?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Tadalafil Daily takes 3-5 days to build up in your system. This means that, after a few days of taking it, you should be ready for sexual activity at any time, rather than needing to plan around taking a pill.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        How long do the effects of Tadalafil Daily last? 
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    The most common side effects of Tadalafil Daily include headache, muscle aches, back pain, stuffy or runny nose, dizziness, facial flushing, rash, upset stomach or nausea, blurred vision or other visual changes, and lowered blood pressure. Serious side effects are rare but can include sudden loss of vision, hearing problems, and priapism, an erection lasting longer than four hours. If you experience signs of an allergic reaction, such as hives or difficulty breathing, seek emergency medical help.
                 </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        What side effects can Tadalafil Daily cause?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    The most common side effects of Tadalafil Daily include headache, muscle aches, back pain, stuffy or runny nose, dizziness, facial flushing, rash, upset stomach or nausea, blurred vision or other visual changes, and lowered blood pressure. Serious side effects are rare but can include sudden loss of vision, hearing problems, and priapism, an erection lasting longer than four hours. If you experience signs of an allergic reaction, such as hives or difficulty breathing, seek emergency medical help.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Is it safe to buy Tadalafil Daily online?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Yes, it is safe to buy Tadalafil Daily online, but you should ensure that you purchase it from a registered and accredited pharmacy. Look for the Registered Pharmacy Logo and GPHC number for assurance.

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Can I drink alcohol while taking Tadalafil Daily?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Drinking alcohol can lower blood pressure and can make it more difficult to achieve an erection. It can also increase the likelihood of experiencing side effects such as dizziness and faintness.

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingseven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                        Are there any medications that cannot be taken with Tadalafil Daily?

                    </button>
                </h2>
                <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Tadalafil has known drug interactions with certain prescription medications. It interacts with nitrates (nitroglycerin), guanylate cyclase stimulators (riociguat), alpha-blockers, HIV protease inhibitors (ritonavir, indinavir sulfate, saquinavir, atazanavir sulfate), oral antifungal medicines (ketoconazole, itraconazole), antibiotics (clarithromycin, telithromycin, erythromycin), and other high blood pressure drugs. Avoid taking Tadalafil at the same time as any nitrate medications (e.g., nitroglycerin, isosorbide) or other PDE5 inhibitors, including Revatio®, Cialis® (tadalafil), Levitra® (vardenafil), and Stendra® (avanafil).

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ END  -->
</div>

@endsection