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
                    <img src="{{ asset('frontend_new/images//bg-pe-hd.jpg') }}" class="img-fluid" alt="discreet">
                </figure>

            </div>
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="sildenafil-right">
                <div class="product-details-content">
                        <h3 class="silden-head">Viagra Connect: Your Ticket to Enhanced Intimacy  </h3>
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
                        <p>Distinguished gentlemen, meet Viagra Connect®. This over-the-counter
                             marvel, available in a potent 50mg dose, is the distinguished choice
                              in the world of ED solutions. It promotes robust blood flow to your
                               intimate areas, facilitating an enduring and assertive erection.</p>
                    </div>
                    
                    <ul class="silder-list">
                        <li>Available dose: 50mg </li>
                        <li> Popular Brand</li>
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
            <h2> The Viagra Sequence - Making The Hard, Effortless:</h2>
        </div>
        <div class="row how-its-row">
            <div class="col-md-4 col-sm-12">
                <div class="how-its-workdiv text-center">
                    <figure>
                        <img src="{{ asset('frontend_new/images/hand-with-candel 1.png') }}" class="img-fluid"
                            alt="Quick Consultation">
                    </figure>
                    <figcaption>
                        <h4>Anticipate Desire </h4>
                        <p> Remember, Viagra Connect® isn't an aphrodisiac. You'll need to be sexually aroused for it to work its magic. So, let the mood build. </p>
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
                        <h4>Pop The Pill</h4>
                        <p>Take a pill an hour before you plan to make love. Viagra Connect® gets to work within 30-60 minutes, reaching its zenith around the one-hour mark.
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
                        <h4>Savour The Moment </h4>
                        <p>With effects lasting up to four hours or even longer, you're set for an enriching experience with your partner.
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
                <h2 class="consultation-head">IS VIAGRA CONNECT YOUR IDEAL ALLY?</h2>
                <p class="consultation-text">The reality is, ED is a common companion for many men.
                     But there's no need to concede. With Viagra Connect®, the leading name in the ED
                      arena, you're never alone. Clinically proven and trusted by many, it's the 
                      discreet, effective solution for gentlemen grappling with ED.</p>
                <a href="{{ url('/contact_us') }}" class="trans-btn black-btn learn-more-card-btn">Start Consultation</a>
            </div>
            <div class="col-lg-6 col-md-12consultation-right">
                <div class="consultation-right-inner">
                    <h3 class="consultation-right-head">Not Sure? Here Are the Facts:</h3>
                    <p class="consultation-right-text">YYou can get your hands on this beard care set without a visit to your doctor.</p>

                    <table class="consultation-right-table">
                        <tr>
                            <td class="pt-0">Effective for</td>
                            <td class="pt-0">4 Hours </td>
                        </tr>
                        <tr>
                            <td>Time taken before effect</td>
                            <td>60 Minutes</td>
                        </tr>
                        <tr>
                            <td>Must not take with </td>
                            <td> Nitrates, alcohol </td>
                        </tr>
                        <tr>
                            <td class="pb-0">Pros </td>
                            <td class="pb-0"> Widely effective; household name; clinically proven</td>
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
                                <h2>Widely effective; household name; clinically proven</h2>
                                <p>Enter the world of Viagra Connect, the distinguished ally in the fight against ED. It boasts the esteemed Sildenafil citrate, 
                                    a PDE5 inhibitor with over 20 years of medical trust. Like a skilled negotiator, Viagra Connect eases your blood vessels, paving the way for an influx of blood when you're in the mood. The outcome? An assertive, enduring erection.
                                    </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <figure>
                             <img src="{{ asset('frontend_new/images/Introducing%20Viagra.png') }}" alt="Sildenafil" />
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
                                <h2>Deploying Viagra Connect</h2>
                                <p> To optimise its performance, take Viagra Connect on an empty stomach, about an hour prior to anticipated sexual activities. It's a reliable partner, offering a robust and prolonged erection whenever duty calls.
                                    </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <figure>
                                <img src="{{ asset('frontend_new/images/Deploying%20Viagra.png') }}" alt="Sildenafil" />
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
                                <h2>Viagra: The Right Fit?</h2>
                                <p> Gentlemen, Viagra Connect is exclusively designed for your use. Women and individuals under
                                     18 are not part of the club. If erectile dysfunction isn't your battle, there's no need for
                                      Viagra Connect . Should your doctor advise against sexual activities due to health issues or
                                       recent cardiac events, please steer clear of Viagra Connect, please discuss with your GP or
                                        pharmacist if you take any regular medication prior to purchasing viagra connect as some medicines may interact 
                                    (see product literature for examples). Before embarking on your Viagra Connect journey, ensure
                                     you review the Patient Information Leaflet accompanying your medication. It's your vital guide to safety and optimum results.
                                    </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <figure>
                                <img src="{{ asset('frontend_new/images/Viagra_%20The%20Right%20Fit_.png') }}" alt="Sildenafil" />
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
                     by completing our quick health questionnaire. </BR>
                     <!-- Our pharmacists and men’s health experts are available Monday to Friday, 9 am to 4:30 pm.  -->
</p>
            </div>
            <a class="white-btn" href="{{ url('/questionnaire/32') }}">Get Started <span>Get Started</span></a>
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
            <h2>Frequently Asked Questions about Viagra Connect</h2>
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
                        How does Viagra Connect work?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Viagra works by helping the blood vessels in your penis to relax and open up. This allows blood to flow into the penis when you become sexually aroused, resulting in a harder and longer-lasting erection.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How long does Viagra Connect take to work?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Viagra typically starts working in about 15-30 minutes, but its peak effect begins for most men about one hour after it’s taken on an empty stomach. Keep in mind that food in the stomach can delay the absorption of Viagra by up to an hour, and also that the timing of each individual’s 
                     response is a little bit different. Remember that Viagra will only work when you are sexually aroused, but it should make it easier to get and sustain an erection during sexual intercourse.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        How long does Viagra Connect’s effect last for?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Viagra typically lasts for at least 4 hours and up to 8-12 hours, but its effect is strongest 2-4 hours after it’s taken. As the amount of Viagra in the bloodstream drops, so do the effects. The effects of Viagra don’t accumulate if you take more in advance. Use it only when you need it.
                 </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        What side effects can Viagra Connect cause?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    The most common side effects of Viagra include headache, muscle aches, back pain, stuffy or runny nose, dizziness, facial flushing, rash, upset stomach or nausea, blurred vision or other visual changes, and lowered blood pressure. If any of these effects do not go away over time or are particularly bothersome, talk to your clinician. Serious side effects of Viagra include sudden loss of vision, hearing problems, and priapism, which is an erection lasting longer than four hours. These side effects are rare but require immediate medical attention. If you experience signs of an allergic reaction, such as hives or trouble breathing, seek emergency medical help.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Is Viagra Connect safe to buy online?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    It is safe to obtain Viagra online. But you should be careful where you buy it. Viagra and other ED treatments are some of the most counterfeited drugs globally, and the trouble with the internet is you can't always be sure what you’re buying is the real deal. Only buy drugs, including Sildenafil, from a registered, accredited pharmacy. Look for the Registered Pharmacy Logo and number.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Can I drink alcohol whilst taking Viagra Connect?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Drinking alcohol causes a drop in blood pressure, which can make it even more difficult to get or maintain an erection when you have ED. It can also worsen some of the potential side effects of ED medication, such as headaches, dizziness, and feeling faint.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingseven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                        Are there any medications that can’t be taken with Viagra Connect?

                    </button>
                </h2>
                <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Viagra does have known drug interactions with some other prescription medications. Viagra interacts with nitrates (nitroglycerin), guanylate cyclase stimulators (riociguat), alpha-blockers, HIV protease inhibitors (ritonavir, indinavir sulfate, saquinavir, atazanavir sulfate), oral antifungal medicines (ketoconazole, itraconazole), antibiotics (clarithromycin, telithromycin, erythromycin), and other high blood pressure drugs. Be sure to avoid taking Viagra at the same time as any nitrate medications (e.g., nitroglycerin, isosorbide, etc.) or other PDE5 inhibitors, including Revatio®, Cialis® (tadalafil), Levitra® (vardenafil), and Stendra® (avanafil).
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingeight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                        Can I take more than one Viagra Connect tablet a day?

                    </button>
                </h2>
                <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Viagra tablets should not be taken more than once a day. Taking any ED treatment more than once a day will increase the risk of experiencing side effects. If you'd prefer the freedom to have more frequent sex, you may want to try tadalafil or Tadalafil Daily. These ED medications have a longer duration of action and give you more flexibility to enjoy spontaneous sex without needing to wait 24 hours to take another tablet.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ END  -->
</div>

@endsection