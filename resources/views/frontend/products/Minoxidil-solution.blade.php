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
        padding-bottom: 0px;
        text-align: center;
        margin: 0px !important;
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
                    <img src="{{ asset('frontend_new/images/min-hd.JPG') }}" class="img-fluid" alt="discreet">
                </figure>

            </div>
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="sildenafil-right">
                <div class="product-details-content">
                        <h3 class="silden-head">Minoxidil Marvel: The Superior Hair Solution for the Contemporary Gentleman</h3>
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
                        <p>In pursuit of a Minoxidil solution that delivers tangible results while
                             prioritizing your skin's comfort? Discover Agent's Minoxidil, exclusively available through
                              our pharmacy. Our formulation is devoid of alcohol and propylene glycol, offering the benefits
                               you seek while steering clear of the irritation often associated with conventional formulations.
                                Crafted by our esteemed team of hair loss experts, we merge luxury with efficacy in the sphere of male grooming.</p>
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
            <h2>TThe Magic of Minoxidil in Three Simple Steps</h2>
        </div>
        <div class="row how-its-row">
            <div class="col-md-4 col-sm-12">
                <div class="how-its-workdiv text-center">
                    <figure>
                        <img src="{{ asset('frontend_new/images/hand-with-candel 1.png') }}" class="img-fluid"
                            alt="Quick Consultation">
                    </figure>
                    <figcaption>
                        <h4>Apply It</h4>
                        <p>Administer our gentle, alcohol-free Minoxidil solution directly to the thinning areas on </br> your scalp. In return, it asks only for your steadfast commitment and patience.</p>
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
                        <h4>Stick to It</h4>
                        <p>Remember: a true gentleman is always consistent. Stick to the official application </br>instructions, applying the solution religiously twice daily as directed.
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
                        <h4>Track Your Progress</h4>
                        <p>While patience is key, a sense of anticipation is natural. Expect to see results from Minoxidil<br> after approximately three months of consistent use.
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
                <h2 class="consultation-head">IS MINOXIDIL THE RIGHT TREATMENT FOR ME? </h2>
                <p class="consultation-text">If you're grappling with male pattern baldness or general thinning, and prefer
                     to avoid oral hair regrowth treatments, Minoxidil could be your ideal solution. This treatment enhances
                      blood flow to the scalp, extending the growth phase and offering a clinically proven remedy for gentlemen keen on reviving dormant hair follicles.
                    </p>
                <a href="{{ url('/contact_us') }}" class="trans-btn black-btn learn-more-card-btn">Start Consultation</a>
            </div>
            <div class="col-lg-6 col-md-12 consultation-right sildenafil-right">
                <div class="consultation-right-inner">
                    <h3 class="consultation-right-head">Still Unsure? Consider these Points:</h3>
                    <p class="consultation-right-text">You can acquire this hair regrowth solution without a doctor's visit; a brief online consultation will suffice. </p>

                    <ul class="silder-list">
                        <li>Expect results in 3 to 6 months.</li>
                        <li>Results last as long as you continue the application.</li>
                        <li>Visible outcomes for most men are usually observed after approximately six months.</li>
                    </ul>
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
    <h3 class="silden-head-slider text-black">So What Is Minoxidil?</h3>
    <p>Minoxidil Unraveled</p>
        <div class="owl-carousel owl-theme sildenafil-slider">
            <div class="item">
                <div class="sildenafil-wrap">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="main-heading text-left">
                                <h2>The Marvel of Minoxidil Explained </h2>
                                <p>Minoxidil revitalizes dormant follicles by enhancing blood circulation within the scalp. For enduring and impactful effects a dash of commitment and patience is needed to foster hair growth and fortify your follicles. Minoxidil, 
                                    a clinically validated hair growth accelerator, has the potential to transform your hair care regimen. Incorporate Minoxidil into your daily routine, and you may reclaim that lush, full head of hair you once cherished.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <figure>
                                <img src="{{ asset('frontend_new/images/Slider%201-minoxidil%20marvel.JPG') }}" alt="Sildenafil" />
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
                                <h2>Dropper vs Spray: Your Minoxidil, Your Choice</h2>
                                <p>At Agent, we appreciate the uniqueness of every gentleman's hair care journey, offering two application methods for our Minoxidil solution: the spray and the dropper. Each method is tailored to suit different hair types and lengths.

                                    The Spray: An Optimal Solution for Short Hair
                                    Perfect for gentlemen with shorter hair, the spray ensures quick, direct access of Minoxidil to your scalp. Its fine mist guarantees even coverage and absorption, resulting in an efficient and effortless application.

                                    The Dropper: Precision Application for Longer Hair
                                    For those blessed with longer tresses, the dropper is your ideal companion. It permits you to place the solution directly onto the scalp, maneuvering through your hair with precision. The dropper ensures an effective scalp application, paving the way for optimal results.

                                    Choose the method that aligns with your hair length and lifestyle then experience the magic of Agent's Minoxidil solution.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <figure>
                                <img src="{{ asset('frontend_new/images/slider-2-mn.jpeg') }}" alt="Sildenafil" />
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
                                <h2>How to Apply: The Finer Details </h2>
                                <p>For optimal results, apply the Minoxidil solution to a clean, dry scalp. The goal is to activate the follicles within your scalp, not merely to cover the hair.
                                     Ensure the solution reaches your scalp by parting your hair in sections if necessary. This process should be
                                      repeated twice daily, every day. Consistency is key to unlocking the full potential of our Minoxidil Marvel.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <figure>
                                <img src="{{ asset('frontend_new/images/slider%203-%20How%20to%20apply.PNG') }}" alt="Sildenafil" />
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
                <p>Tell our clinicians about your symptoms by completing our quick health questionnaire.
                     Our experts are on hand to deal with your issues and </br>offer the best treatment plans available. 
                     If needed you can contact us for some free gentlemanly advice also.
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
            <h2>Get Your Questions About Minoxidil Solution Answered </h2>
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
                        What is Minoxidil?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Minoxidil is a clinically proven treatment designed to regrow thicker, fuller hair, primarily for male pattern baldness.

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How does Minoxidil work?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Minoxidil promotes hair regrowth by enhancing blood flow within the scalp, improving oxygen levels. As a vasodilator, it "resets" the life cycle of hair follicles, extending their growth phase and yielding thicker, healthier hair..

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Does Minoxidil work?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Research shows that over 70% of men who use Minoxidil alone to treat baldness report some regrowth. It increases hair count on the scalp after 3-4 months of consistent use.

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        When can I expect to see results?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Minoxidil requires consistent, twice-daily use for at least 3-6 months to observe effects. Hair regrowth is a slow process, and initial changes might be subtle. Hair loss beings to slow down, and newly regrown hair 
                    should begin to emerge. Beyond four months, hair loss should decrease significantly, with thicker, denser-looking hairs filling in patches of thinning hair.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        What happens if I stop?

                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    If you discontinue Minoxidil use, the regrown hair may be lost within three to four months. To maintain hair regrowth, continuous use is recommended.

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        What are the side effects of Minoxidil?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    While generally safe, Minoxidil can cause scalp irritation, whilst this is less common with our alcohol free formulation. Side effects are rare and often result from over-application. Symptoms may include chest pain, dizziness, headache, or increased heart rate. If you experience severe side effects, seek emergency medical attention.

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        Can I use Finasteride with Minoxidil?
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Yes! Combining Finasteride and Minoxidil can enhance the effectiveness of both treatments. Finasteride prevents the breakdown of testosterone into DHT, while Minoxidil stimulates scalp blood flow, creating a potent combo against hair loss.

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        Can I buy Minoxidil topical solutions from a shop?
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                     In the UK, you can only purchase alcohol-free Minoxidil with a prescription. Our online service simplifies this process, offering an online consultation and delivering your Minoxidil solution straight to your door.

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingnine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                        What's different about Agent's Minoxidil formula?
                    </button>
                </h2>
                <div id="collapsenine" class="accordion-collapse collapse" aria-labelledby="headingnine"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Our unique solution excludes alcohol and propylene glycol, common irritants found in other Minoxidil solutions. Our formula dries quickly post-application and leaves no greasy residue, ensuring a comfortable, irritation-free experience.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingten">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                        When should I start Minoxidil?
                    </button>
                </h2>
                <div id="collapseten" class="accordion-collapse collapse" aria-labelledby="headingten"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    The sooner, the better. Minoxidil promotes follicular health. If hair loss has advanced too far without treatment, these follicles could be permanently damaged. There's no such thing as too soon with topical Minoxidil.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ END  -->
</div>

@endsection