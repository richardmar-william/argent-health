@extends('layouts.app')

@section('content')
<style>
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
    .sildenafil-sec .silden-head-slider {
    font-size: 54px;
    font-weight: 400;
    line-height: 66px;
    text-align: left;
    position: relative;
    color: #242423;
    padding-bottom: 27px;
    text-align: center;
    margin: 0px !important;
    font-family: 'Yeseva One', cursive;
}
    .sildenafil-sec p {
        font-weight: 400;
        font-size: 20px;
        line-height: 20px;
        color: #242423;
        margin-top: 20px;
        text-transform: capitalize;
        text-align: center;
        padding-bottom: 30px !important;
    }
</style>
<div class="in-1_solution">
    <!-- SILDENAFIL-BANNER START  -->
<section class="sildenafil-banner deft">
    <div class="container-xxl container">
        <div class="row sildenafil-inner">
            <div class="col-lg-7 col-md-12 col-sm-12 text-center">
                <figure>
                    <img src="{{ asset('frontend_new/images/s-t-hd.jpeg') }}" class="img-fluid" alt="discreet">
                </figure>

            </div>
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="sildenafil-right">
                <div class="product-details-content">
                        <h3 class="silden-head">Introducing Our Comprehensive Hair Loss Solution: Minoxidil & Finasteride Combination Treatment</h3>
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
                        <p>Welcome to the cutting-edge of hair loss treatment, where our dual-action solution unites topical 
                            Minoxidil with oral Finasteride for a comprehensive approach to addressing male pattern baldness.
                             This potent combination tackles hormonal causes while maximizing regrowth, ensuring a refined transformation.
                             Clinical trials reveal a remarkable 94% effectiveness, making our Finasteride and Minoxidil Combo
                              the ideal choice for discerning gentlemen seeking to regain their youthful hair with elegance and confidence.</p>
                    </div>
                    
                    <ul class="silder-list">
                        <li>$15 for the first month</li>
                        <li>$24 per month thereafter</li>
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
                        <h4>Online prescriptions <br>from UK pharmacists</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="consult-div d-flex align-items-center">
                    <figure>
                        <img src="{{ asset('frontend_new/images/Icon (2).png') }}" class="img-fluid" alt="discreet">
                    </figure>
                    <div class="consult-heading">
                        <h4>Discreet packaging and<br> fast delivery
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
                        <h4>Doctor-backed men’s<br>health services</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
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
            <h2>Three steps to Elevate Your Hair Appeal:</h2>
            <p>Upgrade to thicker, captivating hair with our outstanding Finasteride and Minoxidil combination treatment. Embrace these three straightforward steps:</p>
        </div>
        <div class="row how-its-row">
            <div class="col-md-4 col-sm-12">
                <div class="how-its-workdiv text-center">
                    <figure>
                        <img src="{{ asset('frontend_new/images/hand-with-candel 1.png') }}" class="img-fluid"
                            alt="Quick Consultation">
                    </figure>
                    <figcaption>
                        <h4>Easy application:</h4>
                        <p>Effortlessly apply the Minoxidil solution to your scalp, using either the fine spray or the precise dropper.</p>
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
                        <h4>Trust the guidance:</h4>
                        <p>Take the Finasteride pill as suggested by our hair loss experts.
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
                        <h4>Appreciate the change:</h4>
                        <p>Bare Witness your hair becoming fuller and more refined.  
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
                <h2 class="consultation-head">IS THE FINASTERIDE AND MINOXIDIL COMBO TREATMENT RIGHT FOR ME</h2>
                <p class="consultation-text">Our bespoke combination treatment is tailored for those experiencing
                     hair loss at the crown and a receding hairline. With a staggering 94% effectiveness rate, it's
                      an investment in your hair's future. This dual-action treatment targets hair loss from all angles:
                       Minoxidil revitalizes the scalp, while Finasteride inhibits the hair loss hormone DHT. The result?
                        A powerful, scientifically-backed solution for hair regrowth with potential to trigger new follicle
                         hair growth within three to six months.</p>
                <a href="{{ url('/contact_us') }}" class="trans-btn black-btn learn-more-card-btn">Start Consultation</a>
            </div>
            <div class="col-lg-6 col-md-12consultation-right">
                <div class="consultation-right-inner">
                    <h3 class="consultation-right-head">Still Undecided? Consider the Facts</h3>
                    <p class="consultation-right-text">Get access to our premium Finasteride and Minoxidil Combo Treatment without needing a doctor's appointment. A brief consultation with our hair loss experts is all it takes. </p>

                    <table class="consultation-right-table">
                        <tr>
                            <td class="pt-0"> Time to see results?</td>
                            <td class="pt-0">Expect changes in 3 to 6 months</td>
                        </tr>
                        <tr>
                            <td>Duration of the effects? </td>
                            <td> They last as long as you</BR>continue the treatment</td>
                        </tr>
                        <tr>
                            <td>The advantages?</td>
                            <td>Proven effective for over 90% of men with consistent use for at least six months </td>
                        </tr>
                        <tr>
                            <td class="pb-0">What about side effects? </td>
                            <td class="pb-0">Rare occurrences, with most</br> men experiencing none at all</td>
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
    <h3 class="silden-head-slider text-black">What Is the Finasteride and Minoxidil Combo Treatment?</h3>
        <div class="owl-carousel owl-theme sildenafil-slider">
            <div class="item">
                <div class="sildenafil-wrap">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="main-heading text-left">
                                <h2>The Power Duo: Minoxidil and Finasteride </h2>
                                <p>Our combination treatment pairs an alcohol and propylene
                                     glycol-free Minoxidil topical solution with the oral Finasteride 
                                     tablet for a potent hair restoration approach. The Minoxidil
                                      solution promotes hair growth by stimulating blood flow to 
                                      the follicles, while Finasteride, a DHT blocker, tackles the
                                       hormonal root of hair loss. This dual-action therapy offers
                                        a highly effective and efficient solution for those seeking to combat male pattern baldness.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <figure>
                                <img src="{{ asset('frontend_new/images/slider-1-s-t.PNG') }}" alt="Sildenafil" />
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
                                <h2>Numbers Don't Lie - Effective Hair Restoration </h2>
                                <p>Statistics offer clear-cut truths and ours reflect an impressive 94% success rate. Merging Minoxidil solution and Finasteride tablets, this formidable combination is your ticket to reclaiming hair lost to male pattern baldness.
                                A dual-action strategy, this treatment bolsters hair growth while arresting further loss. Minoxidil increases blood supply to your follicles, while Finasteride checks the unwanted influence of DHT hormone.
                                Our combination treatment is not a shot in the dark, but a scientifically-backed, proven solution to hair loss. For the discerning gent who values efficiency and effectiveness, this dual-action remedy is your choice. Make your stand, reclaim your full head of hair, and remember — numbers don't lie.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <figure>
                                <img src="{{ asset('frontend_new/images/slider-2-s-t.JPG') }}" alt="Sildenafil" />
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
                                <h2>Dropper or spray </h2>
                                <p>At Agent, we understand that every gentleman's hair is unique, which is why we offer our solutions in two formats: a precise dropper and an advanced spray system.

                                    For those gentlemen with longer hair or targeting specific thinning areas, the dropper is your tool of choice. It allows for a meticulous application, ensuring the solution has an accurate delivery to the exact regions you wish to target, bypassing the hair to work at the root of the problem, the scalp.

                                    Meanwhile, those sporting shorter hair may find the spray offers better coverage and easier application. The spray disperses the solution over a wider area, ideal for a uniform scalp application. 

                                    However, irrespective of the chosen method, it's essential to remember that the goal is to get the treatment onto the scalp, not the hair. Gentle massaging into the scalp ensures the formula's optimal performance.

                                    Whether you opt for the dropper or the spray, it's all about selecting the method that suits your hair type and lifestyle best. Agent is committed to providing high-end, effective solutions tailored to the unique needs of the modern gentleman combating hair loss
                                    </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <figure>
                                <img src="{{ asset('frontend_new/images/Slider%203%20dropper.jpeg') }}" alt="Sildenafil" />
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
                <p>Tell our men’s health experts about your symptoms by completing our quick health questionnaire. Our pharmacists and men’s health experts are available Monday to Friday, 9 am to 4:30 pm.</p>
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
        <h2>We Connect Gentlemen with the Ideal </BR>Men’s Health Experts</h2>
                <p>Let’s converse like true gentlemen. Talk to us about your health issues, and we’ll connect you with the medical professional best placed to help.</p>
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
                <a href="{{ url('/questionnaire/30') }}" class="trans-btn">get started</a>
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
                <a href="{{ url('/questionnaire/30') }}" class="trans-btn">get started</a>
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
            <h2>Get Your Questions About the Finasteride and Minoxidil Combo Treatment Answered</h2>
            <p>Have Questions? We’re Here to help.</p>
        </div>
        <form action="" method="get">
            <div class="input-group">
                <span><i class="fa-solid fa-magnifying-glass"></i></span>
                <input type="search" name="" class="form-control" placeholder="Search">
            </div>
        </form>
        <!-- <div class="accordion question-acco" id="questionaccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        What does Finasteride do? 

                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Finasteride is a 5-alpha-reductase inhibitor that blocks the enzyme that converts testosterone to DHT — the common hair loss hormone. In some countries,
                     it is called Propecia®. Available as a pill in the Finasteride and Minoxidil Combo Treatment, it is clinically proven to treat male pattern baldness and general thinning. 
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Why do some men lose their hair?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    The most common cause of male pattern baldness is a hereditary condition called androgenic alopecia. This is a 
                    degenerative condition that eventually leads to follicle shrinkage, weakening and loss. Relegated to the hormone
                     DHT, the condition can be slowed or reversed with treatments such as Finasteride and Minoxidil. 

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Is Finasteride effective?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Take the Finasteride pill daily as prescribed, and you should start to notice improvements to the coverage and thickness of your hair within three to six months. However, you will need to continue taking Finasteride to maintain the progress beyond the initial six-month period.
                 </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        "How should I apply the 2-in-1 hair loss solution?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Applying our solution is a breeze. You just need to apply 1ml to your scalp twice daily. This can be measured using the dropper or by administering five sprays from the spray system. Always follow the usage instructions included with the product. For best results, try incorporating the application into your daily routine - consistent use is key to your progress."
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Are there any side effects?

                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Agent's 2-in-1 hair loss solution, a unique blend of topical Finasteride and Minoxidil, is generally well-tolerated. While topical Finasteride hasn't been studied as extensively as its oral counterpart, it's shown promising results in treating male pattern baldness.
                Like all treatments, there's a potential for side effects. Previous studies found reduction in serum DHT, potentiating systemic side effects. However, systemic side effects usually associated with oral Finasteride, such as erectile dysfunction or reduced libido, were not reported in topical Finasteride studies. It's important to note that more research is needed to fully comprehend potential systemic risks.
                Minoxidil, the other active component in our 2-in-1 solution, may also cause side effects, including scalp irritation and unusual hair growth on areas other than the scalp. These are usually seen with over-application and are not common under normal usage.
                Local side effects, such as itching or irritation at the application site, have been observed in some studies of topical Finasteride and Minoxidil. With Agent's unique formulation, free from alcohol and PEG, the risk of local irritation is expected to be reduced.
                However, if side effects do occur, or if there are symptoms of an allergic reaction, such as rash, itching, or swelling, please seek medical attention promptly. If you're currently on oral Finasteride or dutasteride for benign prostatic hyperplasia (BPH), we recommend avoiding our topical Finasteride solution to prevent possible increased side effects.
                At Agent, we're committed to your wellbeing. Don't hesitate to reach out to our men's health professionals with any concerns or questions. We're here to support you on your journey to improved hair health."

                    </div>
                </div>
            </div>
        </div> -->
        
        
        <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingone">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseone" aria-expanded="false" aria-controls="flush-collapseone">
                    What does Finasteride do? 
                    </button>
                    </h2>
                    <div id="flush-collapseone" class="accordion-collapse collapse" aria-labelledby="flush-headingone" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Finasteride is a 5-alpha-reductase inhibitor that blocks the enzyme that converts testosterone to DHT — the common hair loss hormone. In some countries, it is called Propecia®. Available as a pill in the Finasteride and Minoxidil Combo Treatment, it is clinically proven to treat male pattern baldness and general thinning. </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Why do some men lose their hair?

                    </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">The most common cause of male pattern baldness is a hereditary condition called androgenic alopecia. This is a degenerative condition that eventually leads to follicle shrinkage, weakening and loss. Relegated to the hormone DHT, the condition can be slowed or reversed with treatments such as Finasteride and Minoxidil. 
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingthree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsethree" aria-expanded="false" aria-controls="flush-collapsethree">
                    Is Finasteride effective?

                    </button>
                    </h2>
                    <div id="flush-collapsethree" class="accordion-collapse collapse" aria-labelledby="flush-headingthree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Take the Finasteride pill daily as prescribed, and you should start to notice improvements to the coverage and thickness of your hair within three to six months. However, you will need to continue taking Finasteride to maintain the progress beyond the initial six-month period. 
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingfour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                    Can I buy Finasteride at the shop?

                    </button>
                    </h2>
                    <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">No, Finasteride is only available in the United Kingdom with a prescription. Fortunately, just a short online consultation with an Agent pharmacist is all you need to get your course of Finasteride delivered directly to your door.</div>
                    </div>
                        <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion accordion-flush subaccordian" id="accordionFlushExampl2">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingInrOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseInrOne" aria-expanded="false" aria-controls="flush-collapseInrOne">
                                    What is the Finasteride and Minoxidil combo treatment? 

                                    </button>
                                    </h2>
                                    <div id="flush-collapseInrOne" class="accordion-collapse collapse" aria-labelledby="flush-headingInrOne" data-bs-parent="#accordionFlushExampl2">
                                        <div class="accordion-body">The Finasteride and Minoxidil combo treatment is a comprehensive approach to treating male pattern baldness. It combines the oral medication Finasteride, a DHT blocker, with the topical solution Minoxidil, which stimulates hair growth, for a more effective and powerful solution against hair loss.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingInrTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseInrTwo" aria-expanded="false" aria-controls="flush-collapseInrTwo">
                                    How does the combination treatment work for hair loss? 
                                    </button>
                                    </h2>
                                    <div id="flush-collapseInrTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingInrTwo" data-bs-parent="#accordionFlushExampl2">
                                        <div class="accordion-body">Finasteride works by blocking the conversion of testosterone to dihydrotestosterone (DHT), the hormone responsible for hair loss in genetically predisposed men. Minoxidil, on the other hand, stimulates hair follicles to promote hair growth. The combination of these two treatments addresses both the hormonal cause and the symptom of hair loss, making it a potent solution.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingInrthree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseInrthree" aria-expanded="false" aria-controls="flush-collapseInrthree">
                                    Who is the combination treatment suitable for?

                                    </button>
                                    </h2>
                                    <div id="flush-collapseInrthree" class="accordion-collapse collapse" aria-labelledby="flush-headingInrthree" data-bs-parent="#accordionFlushExampl2">
                                        <div class="accordion-body">The combination treatment is suitable for adult men experiencing hair loss due to male pattern baldness, particularly those with hair thinning at the crown or a receding hairline. It is not recommended for women or individuals with hair loss due to other causes.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingInrfour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseInrfour" aria-expanded="false" aria-controls="flush-collapseInrfour">
                                    How do I use the Finasteride and Minoxidil combination treatment? 


                                    </button>
                                    </h2>
                                    <div id="flush-collapseInrfour" class="accordion-collapse collapse" aria-labelledby="flush-headingInrfour" data-bs-parent="#accordionFlushExampl2">
                                        <div class="accordion-body">Apply the Minoxidil solution to the affected areas of your scalp as directed, typically twice a day. Take one Finasteride tablet daily, or as prescribed by your healthcare professional.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingInrfive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseInrfive" aria-expanded="false" aria-controls="flush-collapseInrfive">
                                    How long does it take to see results with the combo treatment? 

                                    </button>
                                    </h2>
                                    <div id="flush-collapseInrfive" class="accordion-collapse collapse" aria-labelledby="flush-headingInrfive" data-bs-parent="#accordionFlushExampl2">
                                        <div class="accordion-body">Results may vary between individuals, but it typically takes 3 to 6 months to see significant improvements in hair growth and thickness.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingInrsix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseInrsix" aria-expanded="false" aria-controls="flush-collapseInrsix">
                                    Can I use the combination treatment if I have sensitive skin? 

                                    </button>
                                    </h2>
                                    <div id="flush-collapseInrsix" class="accordion-collapse collapse" aria-labelledby="flush-headingInrsix" data-bs-parent="#accordionFlushExampl2">
                                        <div class="accordion-body">The Minoxidil solution in this combination treatment is alcohol and propylene glycol-free, making it suitable for individuals with sensitive skin. However, it's always best to consult a healthcare professional before starting any new treatment.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingInrseven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseInrseven" aria-expanded="false" aria-controls="flush-collapseInrseven">
                                    What are the possible side effects of the Finasteride and Minoxidil combo treatment? 

                                    </button>
                                    </h2>
                                    <div id="flush-collapseInrseven" class="accordion-collapse collapse" aria-labelledby="flush-headingInrseven" data-bs-parent="#accordionFlushExampl2">
                                        <div class="accordion-body">Side effects are rare, but they may occur. Finasteride side effects can include decreased libido, erectile dysfunction, and ejaculation disorders. Minoxidil may cause scalp irritation or dryness. If you experience any severe or persistent side effects, consult your healthcare professional.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingInreight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseInreight" aria-expanded="false" aria-controls="flush-collapseInreight">
                                    Do I need a prescription for the Finasteride and Minoxidil combination treatment?
                                    </button>
                                    </h2>
                                    <div id="flush-collapseInreight" class="accordion-collapse collapse" aria-labelledby="flush-headingInreight" data-bs-parent="#accordionFlushExampl2">
                                        <div class="accordion-body">Finasteride is a prescription medication, while Minoxidil can be obtained over the counter. However, it's best to consult a healthcare professional before starting the combination treatment to ensure it's suitable for you.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingInrnine">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseInrnine" aria-expanded="false" aria-controls="flush-collapseInrnine">
                                    Can I use other hair loss treatments alongside the combo treatment? 

                                    </button>
                                    </h2>
                                    <div id="flush-collapseInrnine" class="accordion-collapse collapse" aria-labelledby="flush-headingInrnine" data-bs-parent="#accordionFlushExampl2">
                                        <div class="accordion-body">Consult your healthcare professional before using other hair loss treatments in combination with the Finasteride and Minoxidil treatment, as it may not be necessary or could lead to potential interactions.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingInrten">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseInrten" aria-expanded="false" aria-controls="flush-collapseInrten">
                                    What happens if I stop using the Finasteride and Minoxidil combination treatment? 
                                    </button>
                                    </h2>
                                    <div id="flush-collapseInrten" class="accordion-collapse collapse" aria-labelledby="flush-headingInrten" data-bs-parent="#accordionFlushExampl2">
                                        <div class="accordion-body">If you stop using the combination treatment, your hair may return to its previous state over time, and you may lose the progress made during treatment.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingInreleven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseInreleven" aria-expanded="false" aria-controls="flush-collapseInreleven">
                                    Why do some men lose their hair and how does the combination treatment help?
                                    </button>
                                    </h2>
                                    <div id="flush-collapseInreleven" class="accordion-collapse collapse" aria-labelledby="flush-headingInreleven" data-bs-parent="#accordionFlushExampl2">
                                        <div class="accordion-body">Genetic predisposition and hormonal factors contribute to hair loss in men. The Finasteride and Minoxidil combo treatment helps by targeting both the hormonal cause (DHT) and promoting hair growth, providing a comprehensive solution to hair loss.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingInrtwelve">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseInrtwelve" aria-expanded="false" aria-controls="flush-collapseInrtwelve">
                                    How do Finasteride and Minoxidil individually contribute to hair regrowth? 
                                    </button>
                                    </h2>
                                    <div id="flush-collapseInrtwelve" class="accordion-collapse collapse" aria-labelledby="flush-headingInrtwelve" data-bs-parent="#accordionFlushExampl2">
                                        <div class="accordion-body">Finasteride helps by blocking the production of DHT, the hormone responsible for hair loss, while Minoxidil stimulates hair follicles to promote hair growth. Together, they create a powerful combination for treating hair loss.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingInr13">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseInr13" aria-expanded="false" aria-controls="flush-collapseInr13">
                                    Is the combination of Finasteride and Minoxidil effective for treating hair loss?

                                    </button>
                                    </h2>
                                    <div id="flush-collapseInr13" class="accordion-collapse collapse" aria-labelledby="flush-headingInr13" data-bs-parent="#accordionFlushExampl2">
                                        <div class="accordion-body">Yes, the combination of Finasteride and Minoxidil is effective for treating hair loss. Clinical studies have shown that when used together, these treatments are more effective than when used individually. About 94% of men see positive results when using the combination treatment regularly for at least six months.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingInr14">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseInr14" aria-expanded="false" aria-controls="flush-collapseInr14">
                                    Can I buy the Finasteride and Minoxidil Combo Treatment at a shop or pharmacy?
                                    </button>
                                    </h2>
                                    <div id="flush-collapseInr14" class="accordion-collapse collapse" aria-labelledby="flush-headingInr14" data-bs-parent="#accordionFlushExampl2">
                                        <div class="accordion-body">Finasteride is a prescription medication, so it must be prescribed by a healthcare professional. Minoxidil is available over the counter at pharmacies, although not alcohol free like agents. However, it's best to consult with a healthcare professional before starting the combination treatment to ensure it's suitable for you and to receive a prescription for Finasteride.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingInr15">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseInr15" aria-expanded="false" aria-controls="flush-collapseInr15">
                                    Can Finasteride be combined with other hair loss treatments? 
                                    </button>
                                    </h2>
                                    <div id="flush-collapseInr15" class="accordion-collapse collapse" aria-labelledby="flush-headingInr15" data-bs-parent="#accordionFlushExampl2">
                                        <div class="accordion-body">Finasteride can potentially be combined with other hair loss treatments, such as Minoxidil. However, it's important to consult your healthcare professional before combining Finasteride with any other treatment to avoid potential interactions and ensure the best results.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingInr16">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseInr16" aria-expanded="false" aria-controls="flush-collapseInr16">
                                    What is the Finasteride and Minoxidil combo treatment? 

                                    </button>
                                    </h2>
                                    <div id="flush-collapseInr16" class="accordion-collapse collapse" aria-labelledby="flush-headingInr16" data-bs-parent="#accordionFlushExampl2">
                                        <div class="accordion-body">The Finasteride and Minoxidil combo treatment is a comprehensive approach to treating male pattern baldness. It combines the oral medication Finasteride, a DHT blocker, with the topical solution Minoxidil, which stimulates hair growth, for a more effective and powerful solution against hair loss.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingInr17">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseInr17" aria-expanded="false" aria-controls="flush-collapseInr17">
                                    What are the potential side effects of the Finasteride and Minoxidil Combo Treatment?
                                    </button>
                                    </h2>
                                    <div id="flush-collapseInr17" class="accordion-collapse collapse" aria-labelledby="flush-headingInr17" data-bs-parent="#accordionFlushExampl2">
                                        <div class="accordion-body">Potential side effects of Finasteride include decreased libido, erectile dysfunction, and ejaculation disorders, while Minoxidil may cause scalp irritation or dryness. These side effects are rare, and the majority of men experience none. If you do encounter any severe or persistent side effects, consult your healthcare professional.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingInr18">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseInr18" aria-expanded="false" aria-controls="flush-collapseInr18">
                                    How long do the results of the Finasteride and Minoxidil treatment last?
                                    </button>
                                    </h2>
                                    <div id="flush-collapseInr18" class="accordion-collapse collapse" aria-labelledby="flush-headingInr18" data-bs-parent="#accordionFlushExampl2">
                                        <div class="accordion-body">The results of the Finasteride and Minoxidil treatment will last as long as you continue using the treatment as directed. If you stop using the treatment, your hair may return to its previous state over time, and you may lose the progress made during treatment.
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingInr19">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseInr19" aria-expanded="false" aria-controls="flush-collapseInr19">
                                    Do I need a prescription for the Finasteride and Minoxidil Combo Treatment? 
                                    </button>
                                    </h2>
                                    <div id="flush-collapseInr19" class="accordion-collapse collapse" aria-labelledby="flush-headingInr19" data-bs-parent="#accordionFlushExampl2">
                                        <div class="accordion-body">Finasteride is a prescription medication, while Minoxidil is available over the counter. However, it's best to consult a healthcare professional before starting the combination treatment to ensure it's suitable for you and to receive a prescription for Finasteride.
                                    </div>
                                    </div>
                                </div>
                        </div>
                </div>
            </div>
        </div>






    </div>
</section>
<!-- FAQ END  -->
</div>

@endsection