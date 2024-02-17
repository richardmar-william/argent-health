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
</style>
<div class="in-1_solution">
    <!-- SILDENAFIL-BANNER START  -->
<section class="sildenafil-banner deft">
    <div class="container-xxl container">
        <div class="row sildenafil-inner">
            <div class="col-lg-7 col-md-12 col-sm-12 text-center">
                <figure>
                    <img src="{{ asset('frontend_new/images/beard-hd-1.JPG') }}" class="img-fluid" alt="discreet">
                </figure>

            </div>
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="sildenafil-right">
                <div class="product-details-content">
                        <h3 class="silden-head">Beard Growth Kit</h3>
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
                        <p>Introducing the all-inclusive Beard Growth Kit, your key to unlocking the full
                             potential of your facial hair. Our premium package includes a powerful 
                            topical Minoxidil 5% solution, a high-quality derma roller with 0.55mm titanium
                             needles and a sanitizer. Experience a comprehensive approach to beard growth and invest in your facial hair's future.</p>
                    </div>
                    
                    <ul class="silder-list">
                        <li>$24 for the first month</li>
                        <li>$15 a month thereafter</li>
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
            <h2>Beard Growth Treatments in Action</h2>
        </div>
        <div class="row how-its-row">
            <div class="col-lg-4 col-sm-6">
                <div class="how-its-workdiv text-center">
                    <figure>
                        <img src="{{ asset('frontend_new/images/hand-with-candel 1.png') }}" class="img-fluid"
                            alt="Quick Consultation">
                    </figure>
                    <figcaption>
                        <h4>Patience Pays Off:</h4>
                        <p>Consistency is key to achieving your desired beard. Apply your beard growth treatment daily for two to three months and be patient as you await transformative results. Trust the Process. </p>
                    </figcaption>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="how-its-workdiv text-center">
                    <figure>
                        <img src="{{ asset('frontend_new/images/hand-with-candel 1 (1).png') }}" class="img-fluid"
                            alt="Free-Fast-Delivery">
                    </figure>
                    <figcaption>
                        <h4>Nurture Your Desired Beard:</h4>
                        <p> Treat your evolving beard with the care it deserves. Apply the topical solution as prescribed and use the derma roller as recommended. In time, your commitment will be rewarded with a fuller, more vibrant beard. 
                        </p>
                    </figcaption>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="how-its-workdiv text-center">
                    <figure>
                        <img src="{{ asset('frontend_new/images/hand-with-candel 1 (2).png') }}" class="img-fluid"
                            alt="Continous-Support">
                    </figure>
                    <figcaption>
                        <h4>Admire Your Beard: </h4>
                        <p>After approximately four months, your beard should exhibit noticeable improvement. However, maintaining your impressive facial hair requires ongoing attention. Continue your beard growth treatment and grooming habits to preserve your hard-earned results.

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
                <h2 class="consultation-head">WHY YOUR FACE DESERVES THE BEARD GROWTH KIT</h2>
                <p class="consultation-text">The Ultimate Beard Growth Kit offers a comprehensive, no-fuss solution
                     for men seeking consistent beard growth. Including a topical solution and a premium derma roller
                      with sanitizer, our kit provides everything your facial hair needs to thrive. Opt for our no-contract subscription and receive a monthly delivery 
                    of Minoxidil topical solution, ensuring your beard growth journey remains uninterrupted. Our kit
                     is designed to promote hair growth and improve hair health, making it an ideal choice for men seeking a fuller, more even beard.</p>
                <a href="{{ url('/contact_us') }}" class="trans-btn black-btn learn-more-card-btn">Start Consultation</a>
            </div>
            <div class="col-lg-6 col-md-12consultation-right">
                <div class="consultation-right-inner">
                    <h3 class="consultation-right-head">Not Sure? Here Are the Facts</h3>
                    <p class="consultation-right-text">You can get your hands on this beard kit without a visit to your doctor. A short consultation with our online clinicians is all that’s required </p>

                    <table class="consultation-right-table">
                        <tr>
                            <td class="pt-0">How long does it take to work?</td>
                            <td class="pt-0">2 to 4 months</td>
                        </tr>
                        <tr>
                            <td>How long do the results last?</td>
                            <td> For as long as you apply the topical solution</td>
                        </tr>
                        <tr>
                            <td>What are the benefits?</td>
                            <td>  helping a vast number of gents achieve their beard goals </td>
                        </tr>
                        <tr>
                            <td class="pb-0">How often will I receive a delivery of Minoxidil topical solution ? </td>
                            <td class="pb-0"> Once a month</td>
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
    <h3 class="silden-head-slider text-black">What’s in the Box?</h3>
        <div class="owl-carousel owl-theme sildenafil-slider">
            <div class="item">
                <div class="sildenafil-wrap">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="main-heading text-left">
                                <h2>Minoxidil the star of the show </h2>
                                <p>The Minoxidil solution is the star player of our Beard Growth Kit. This alcohol-free solution, with a 5% concentration of Minoxidil, is the key to stimulating follicular growth without the drying or irritation that can accompany conventional alcohol-based options. Minoxidil, renowned for its effectiveness in treating male pattern baldness, has also shown promise in enhancing beard growth.

                                    The way it works is straightforward yet powerful: Minoxidil widens blood vessels, facilitating the delivery of nutrient-rich blood to the hair follicles. The result? An extended growth phase, enlarged follicles, and thicker individual hairs, all contributing to a denser, fuller beard.

                                    Whether your beard is long or short, or you have specific areas you'd like to target, we've got you covered. Choose between a spray or dropper for application, with the spray being ideal for shorter beards and wider coverage, and the dropper providing precise application for longer beards or those targeting specific regions. But remember, the Minoxidil solution is just one part of the comprehensive Beard Growth Kit we've assembled for you. … 
                                    </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <figure>
                                <img src="{{ asset('frontend_new/images/beard-slide-1.JPG') }}" alt="Sildenafil" />
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="sildenafil-wrap">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="main-heading text-left">
                                <h2>The Science and beauty behind How Dermarollers Improve Beard Growth </h2>
                                <p>Our kit boasts a high-quality dermaroller, a secret weapon for optimizing beard growth. This remarkable tool enhances blood flow to your follicles, synergizing perfectly with the topical solution to boost the follicles' growth period and diameter. This dynamic duo fosters a denser, fuller beard, offering a solution that  solves patchy growth. We recommend a 1-2x weekly application for optimal results, whilst also allowing your skin time to rejuvenate.

                                    The derma roller operates through an ingenious method – creating micro-injuries on the skin that stimulate the body's natural healing process. This leads to increased collagen production and enhanced blood flow, stimulating new and healthier hair growth. A study published in the Journal of Cutaneous and Aesthetic Surgery affirms that regular use of a derma roller significantly improves hair density and thickness, amplifying the glory of your beard. Your journey to a bolder, fuller beard begins here.

                                    We also have a sanitiser, needed to ensure you keep your derma roller clean and fit for purpose. 
                                    </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <figure>
                                <img src="{{ asset('frontend_new/images/beard-slide-2.JPG') }}" alt="Sildenafil" />
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
                <p>Tell our men’s health experts about your symptoms by completing our quick health questionnaire. Our pharmacists and men’s health experts are available Monday to Friday, 9 am to 4:30 pm.  
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
                <p>Let’s converse like true gentlemen. Talk to us about your health issues, and we’ll connect you with the medical professional best placed to help.
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
                <a href="{{ url('/questionnaire/31') }}" class="trans-btn">get started</a>
            </div>
            <div class="col-lg-4 col-md-12">
                <figure class="mob">
                    <img src="{{ asset('frontend_new/images/mobile-gif.gif') }}" alt="mobile">
                </figure>
                <a href="{{ url('/contact_us') }}') }}" class="trans-btn">Chat now!</a>
            </div>
        </div>
        <div class="row cstm-row2">
            <div class="col-lg-8 col-md-12">
                <a href="{{ url('/questionnaire/31') }}" class="trans-btn">get started</a>
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
            <h2>Get Your Questions About the Beard Growth Kit Answered </h2>
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
                        What exactly will I receive each month?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Your first delivery includes a derma roller, sanitiser, and Minoxidil solution. You'll receive a replenishment of our unique Minoxidil solution each month to ensure your beard grooming never misses a beat. Your derma roller and sanitiser are designed for reuse. Need replacements or other beard care essentials? We're always stocked and ready to assist.

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How do I use the beard roller correctly?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Use the beard roller with moderated touch, applying enough pressure to stimulate your skin without causing discomfort. A little redness post-use is expected due to increased blood flow. You should apply gentle pressure to the areas of the beard you want to target. We suggest starting with once a week and moving to twice weekly as your skin adjusts.

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Do I need a monthly supply of Minoxidil spray?

                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Indeed, commitment is key. Daily application of Minoxidil for at least four months should lead to significant improvements in your beard's fullness.
                     To maintain this, continued use is necessary. Your dedication to your facial fuzz will surely pay off in handsome dividends.

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Will this kit help with my patchy beard?

                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Absolutely. Minoxidil spray excels at encouraging growth in sparse areas. Consistent application, combined with the use of the beard roller and vitamins, will help you tackle those challenging patches. A little patience, and your beard will reward you with an impressive, full look.

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Should I be worried about side effects with Minoxidil?

                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Minoxidil is well-tolerated by most men, with side effects being rare when used as directed and not over applied. Some may experience mild skin irritation, although far less likely with our non-alcohol-based solution. A complete list of the side effects is found here on our Minoxidil information leaflet. If you experience any side effects using the medication, please contact us. 

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        How often should I use the derma roller on my beard?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    We recommend using the derma roller once or twice a week. This schedule allows your skin ample time to heal between treatments and supports the emergence of new hair growth.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingseven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                        Is it safe to use a derma roller on my beard?

                    </button>
                </h2>
                <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    Yes, it's entirely safe to use a derma roller on your beard. However, ensure you're using a high-quality derma roller like ours, and always adhere to the provided instructions to prevent potential skin damage.

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingeight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                        Should I choose a spray or dropper for my Minoxidil solution?



                    </button>
                </h2>
                <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                    It depends on your preference and beard length. Those with larger beards may prefer dropper application to ensure the solution reaches then skin underneath the beard, while those with smaller beards may prefer the ease and coverage of spray application.
                 </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ END  -->
</div>

@endsection