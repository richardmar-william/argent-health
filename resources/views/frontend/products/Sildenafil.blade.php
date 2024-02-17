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
                    <img src="{{ asset('frontend_new/images/beared-img3.JPG') }}" class="img-fluid" alt="discreet">
                </figure>

            </div>
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="sildenafil-right">
                <div class="product-details-content">
                        <h3 class="silden-head">Sildenafil - Your Reliable Companion</h3>
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
                        <p>This cost-effective remedy shares the same active ingredient as Viagra, 
                            offering you the same efficacy without the brand name premium. By relaxing
                             your blood vessels and smooth muscle, it improves blood flow to the penis, 
                             leading to a more robust and enduring erection. A solution that has proven 
                             its effectiveness for 90% of men, Sildenafil is truly the gentleman's choice for ED.</p>
                    </div>
                    
                    <ul class="silder-list">
                        <li>Available doses: 50mg, 100mg</li>
                        <li>Most popular treatment</li>
                        <li>£15 For First Month</li>
                        <li> £24 Per Month Thereafter</li>
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
            <h2>The Sildenafil Sequence - Making The Hard, Effortless:</h2>
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
                        <p>Remember, Sildenafil isn't an aphrodisiac. You'll need to be sexually aroused for it to work its magic. So, let the mood build. </p>
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
                        <p>Take a pill an hour before you plan to make love. Sildenafil gets to work within 30-60 minutes, reaching its zenith around the one-hour mark.
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
                <h2 class="consultation-head">IS SILDENAFIL THE PERFECT FOR YOU?</h2>
                <p class="consultation-text">Erection difficulties can be more common than you think,
                     with 40% of men facing ED by age 40. The good news is, solutions like Sildenafil 
                     have proven highly effective. It stands as the most preferred treatment for men
                     with ED, with its efficacy clinically attested for a vast majority of users.</p>
                <a href="{{ url('/contact_us') }}" class="trans-btn black-btn learn-more-card-btn">Start Consultation</a>
            </div>
            <div class="col-lg-6 col-md-12consultation-right">
                <div class="consultation-right-inner">
                    <h3 class="consultation-right-head">Not Sure? Here Are the Facts:</h3>
                    <p class="consultation-right-text">YYou can get your hands on this beard care set without a visit to your doctor.</p>

                    <table class="consultation-right-table">
                        <tr>
                            <td class="pt-0">Effective for</td>
                            <td class="pt-0">4 Hours</td>
                        </tr>
                        <tr>
                            <td>Time taken before effect</td>
                            <td>60 Minutes</td>
                        </tr>
                        <tr>
                            <td>Must not take with </td>
                            <td>  Nitrates, alcohol </td>
                        </tr>
                        <tr>
                            <td class="pb-0">Pros </td>
                            <td class="pb-0"> Works for most gents; affordable; clinically proven</td>
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
                                <h2>Sildenafil Unveiled</h2>
                                <p>In the realm of PDE5 inhibitors, Sildenafil Citrate has reigned supreme
                                     for the past two decades. Its modus operandi is simple but effective.
                                      By inducing relaxation and dilation in your penile blood vessels, it
                                       invites a healthy blood flow when you're sexually stirred, laying the 
                                       foundation for a sturdier and enduring erection.
                                    </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <figure>
                             <img src="{{ asset('frontend_new/images/Sildenafil%20Unveiled.JPG') }}" alt="Sildenafil" />
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
                                <h2>Sildenafil & You - The Ritual</h2>
                                <p> Sildenafil's potency is best harnessed on an empty stomach, about an hour before you plan to indulge in intimate activities. Once taken, rest assured, your erection should stand firm for as long as the moment requires.
                                    </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <figure>
                                <img src="{{ asset('frontend_new/images/Sildenafil%20&%20You.JPG') }}" alt="Sildenafil" />
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
                                <h2>The Sildenafil Caveats</h2>
                                <p>Sildenafil is not a universal ticket. It's off-limits to women,
                                     individuals below 18, and those without erectile dysfunction.
                                      If your doctor has advised against sexual activity due to health 
                                      concerns like recent AMI or stroke, bypass Sildenafil. Heart 
                                      patients under treatment should also tread with caution. Before
                                       popping a pill, cross-verify with your GP if you're on other medications 
                                    (please see product literature also for list of medicines that may
                                     interact). Always refer to the Patient Information Leaflet that
                                      accompanies your medication for crucial details.
                                    </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <figure>
                                <img src="{{ asset('frontend_new/images/The%20Sildenafil%20Caveats.JPG') }}" alt="Sildenafil" />
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
                                <h2>Viagra or Sildenafil - The Dilemma?</h2>
                                <p> The only disparity between Viagra and Sildenafil is in the branding and the price tag. Viagra® 
                                    is Pfizer's brainchild, while Sildenafil is the active ingredient in Viagra®
                                     that wields the magic against erectile dysfunction. In essence, they're two
                                      sides of the same coin, offering similar results but at different costs.
                                    </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <figure>
                                <img src="{{ asset('frontend_new/images/Viagra%20or%20Sildenafil%20-%20The%20Dilemma_.png') }}" alt="Sildenafil" />
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
            <a class="white-btn" href="j{{ url('/contact_us') }}">Book Consultation <span>Book Consultation</span></a>
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
            <h2> Frequently Asked Questions about Sildenafil</h2>
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
                        How does Sildenafil work?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Sildenafil works by relaxing and expanding the blood vessels in the penis. This allows increased blood flow when you are sexually aroused, resulting in a harder and longer-lasting erection.

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How long does it take for Sildenafil to work?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Sildenafil typically starts working within 15-30 minutes, with its peak effect occurring about an hour after ingestion on an empty stomach. Keep in mind that food in the stomach can delay the absorption of Sildenafil by up to an hour. It's important to note that Sildenafil only works when you are sexually aroused, but it facilitates the process of getting and maintaining an erection during sexual intercourse.

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        How long does the effect of Sildenafil last?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Sildenafil's effect usually lasts for at least 4 hours and can extend up to 8-12 hours, with the strongest effect occurring 2-4 hours after consumption. As the amount of Sildenafil in the bloodstream decreases, so does its effect. It's worth noting that the effects of Sildenafil do not accumulate with higher doses taken in advance. It should be used only when needed.

                 </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        What are the possible side effects of Sildenafil?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    The most common side effects of Sildenafil include headaches, muscle aches, back pain, stuffy or runny nose, dizziness, facial flushing, rash, upset stomach or nausea, blurred vision or other changes in vision, and lowered blood pressure. If any of these effects persist or are particularly bothersome, consult your healthcare provider. Serious side effects of Sildenafil, although rare, include sudden loss of vision, hearing problems, and priapism (an erection lasting longer than four hours), which require immediate medical attention. If you experience signs of an allergic reaction, such as hives or difficulty breathing, seek emergency medical help.

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Is it safe to buy Sildenafil online?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    It is safe to obtain Sildenafil online, but caution must be exercised when choosing where to make the purchase. Viagra and other ED treatments are frequently counterfeited drugs, and the internet can be unreliable when it comes to ensuring the authenticity of the product. Only purchase medications, including Sildenafil, from registered and accredited pharmacies. Look for the Registered Pharmacy Logo and GPHC number as assurance.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Can I consume alcohol while taking Sildenafil?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Consuming alcohol can lower blood pressure, making it more challenging to achieve or maintain an erection when you have ED. It can also exacerbate certain side effects of ED medication, such as headaches, dizziness, and faintness.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingseven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                        Are there any medications that should not be taken with Sildenafil?
                    </button>
                </h2>
                <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Sildenafil interacts with several prescription medications. It should not be taken concurrently with nitrates (e.g., nitroglycerin, isosorbide), guanylate cyclase stimulators (riociguat), alpha-blockers, HIV protease inhibitors (ritonavir, indinavir sulfate, saquinavir, atazanavir sulfate), oral antifungal medicines (ketoconazole, itraconazole), antibiotics (clarithromycin, telithromycin, erythromycin), and other high blood pressure drugs. It is important to avoid taking Sildenafil simultaneously other PDE5 inhibitors, including Revatio®, Cialis® (tadalafil), Levitra® (vardenafil), and Stendra® (avanafil).

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingeight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                        Can I take more than one Sildenafil tablet a day?   
                    </button>
                </h2>
                <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Sildenafil tablets should not be taken more than once a day. Taking any ED treatment more frequently increases the risk of experiencing side effects. If you prefer the flexibility of having more frequent sexual activity, you may want to consider trying tadalafil or Tadalafil Daily. These ED medications have a longer duration of action and provide more flexibility for spontaneous sex without the need to wait 24 hours between doses.
                 </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ END  -->
</div>

@endsection