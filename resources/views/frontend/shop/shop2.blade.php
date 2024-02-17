@extends('layouts.app')
@section('title', 'Homepage')
@section('content')



<div class="main-div electile-main product-hero-banner"
    style="background-image: url({{ asset('frontend_new/images/erectile-banner.png')}} )">
    <div class="container-xxl container">
        <div class="top-div erectile-top-div text-white">
            <h1>“Get ED meds online, <br>shipped to you”</h1>
            <ul>
                <li>
                    <p><img src="{{ asset('frontend_new/images/svg/treatment.svg') }}" alt="treatment" /><span>Treatment
                            is clinically
                            proven</span></p>
                </li>
                <li>
                    <p><img src="{{ asset('frontend_new/images/svg/clicians.svg') }}" alt="clicians" /><span>prescribed
                            by UK licenced
                            clinicians</span></p>
                </li>
                <li>
                    <p><img src="{{ asset('frontend_new/images/svg/fast-delivery.svg') }}"
                            alt="fast-delivery" /><span>fast delivery</span></p>
                </li>
                <li>
                    <p><img src="{{ asset('frontend_new/images/svg/online-process.svg') }}"
                            alt="online-process" /><span>Online Process</span>
                    </p>
                </li>
            </ul>
            <a href="{{ url('questionnaire') }}" class="white-trans-btn">Start Assessment</a>
        </div>
    </div>
</div>
<!-- HEADER END  -->

<!-- TREATMENT-OPTION-SEC START  -->
<section class="treatment-option-sec pt-100 pb-100">
    <div class="container-xxl container">
        <div class="main-heading text-center treatment-head">
            <h2>Treatment options</h2>
        </div>
        <div class="row treatment-row">



            @php 
            use App\Models\Media;
            foreach($products as $pro)
            {
            $pro_img = Media::select('file_name')
                ->where('mediable_id','=',$pro->id)
                ->get()
                ->toArray();
            @endphp
            <div class="col-md-6 col-sm-12">
                <div class="treatment-option-div">
                    <h4>{{ $pro->name }}</h4>
                    <p>It contains the same active ingredient as viagra but comes at <br>a lower price because you
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
                            <img src="{{ asset('storage/images/products') }}{{ '/'.$pro_img[0]['file_name'] }}" class="img-fluid"
                                    alt="Sildenafil" />
                            </figure>
                        </div>
                    </div>
                    <a href="{{ url('product') }}/{{ $pro->slug }}" class="trans-btn black-btn learn-more-card-btn">Learn More</a>
                </div>
            </div>
        @php    
        }
            @endphp

        </div>
    </div>
</section>
<!-- TREATMENT-OPTION-SEC END  -->

<!-- BEST-TREATMENT START  -->
<section class="best-treatment pb-100">
    <div class="black-sec">
        <div class="container-xxl container">
            <div class="unsure-div text-white text-center">
                <div class="text-white">
                    <h2>NOT SURE THE BEST TREATMENT FOR YOU, <br>CLICK HERE FOR PERSONAL RECCOMENDATION </h2>
                </div>
                <a class="white-btn" href="javascript:void(0);">Get a Recommendation</a>
            </div>
        </div>
    </div>
</section>
<!-- BEST-TREATMENT END  -->

<!-- AGENT-OFFER START  -->
<section class="agent-offer">
    <div class="container-xxl container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="agent-div">
                    <h2>“Agent offer treatments that are clinically proven and backed by doctors and pharmacist”
                    </h2>
                    <p>Vikesh Patel Medical advisor<span>(pharmacist)</span></p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <figure>
                    <img src="{{ asset('frontend_new/images/agent-offer-img.png') }}" alt="agent-offer-img" />
                </figure>
            </div>
        </div>
    </div>
</section>
<!-- AGENT-OFFER END  -->

<!-- BLACK-SEC2 START  -->
<section class="black-sec erectile-black">
    <div class="container-xxl container">
        <div class="unsure-div d-flex justify-content-between align-items-center flex-wrap-wrap">
            <div class="d-flex align-items-center">
                <figure>
                    <img src="{{ asset('frontend_new/images/svg/comment.svg') }}" alt="comment" />
                </figure>
                <div class="text-white">
                    <h2>Question, Concern, Comments?</h2>
                    <p>Drop us a message and a Pharmacist will be in contact to discuss</p>
                </div>
            </div>
            <a class="white-btn" href="javascript:void(0);">Speak to pharmacist</a>
        </div>
    </div>
</section>
<!-- BLACK-SEC2 END  -->

<!-- HOW-ITS-WORK START  -->
<section class="how-its-work pt-100 pb-100">
    <div class="container-xxl container">
        <div class="main-heading text-center how-its-head">
            <h2>How its work</h2>
        </div>
        <div class="row how-its-row">
            <div class="col-md-4 col-sm-12">
                <div class="how-its-workdiv text-center">
                    <figure>
                        <img src="{{ asset('frontend_new/images/Quick Consultation.png') }}" alt="Quick Consultation">
                    </figure>
                    <figcaption>
                        <h4>Quick Consultation</h4>
                        <p>Once complete, your consultation will be reviewed by our clinicians. Most prescriptions
                            are approved the same day.</p>
                    </figcaption>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="how-its-workdiv text-center">
                    <figure>
                        <img src="{{ asset('frontend_new/images/Free-Fast-Delivery.png') }}" alt="Free-Fast-Delivery">
                    </figure>
                    <figcaption>
                        <h4>Free & Fast Delivery</h4>
                        <p>Your selected treatment will be delivered for free, with discreet packaging and
                            instructions on how to use it.</p>
                    </figcaption>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="how-its-workdiv text-center">
                    <figure>
                        <img src="{{ asset('frontend_new/images/Continous-Support.png') }}" alt="Continous-Support">
                    </figure>
                    <figcaption>
                        <h4>Continous Support</h4>
                        <p>Your Will Get Continue support from our experts and instructions on how to use it.</p>
                    </figcaption>
                </div>
            </div>
        </div>
        <a href="javascript:void(0);" class="trans-btn">Learn more</a>
    </div>
</section>
<!-- HOW-ITS-WORK END  -->

<!-- ERECTILE-SEC START  -->
<section class="erectile-sec pb-100">
    <div class="container-xxl container">
        <div class="main-heading text-center what-erectile-head">
            <h2>So what is erectile dysfunction (ED), anyway?</h2>
        </div>
        <div class="row happens-row-gap">
            <div class="col-md-6 col-sm-12">
                <figure>
                    <img src="{{ asset('frontend_new/images/erectile-img.png') }}" alt="erectile-img" />
                </figure>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="erectile-right">
                    <div class="erectile-info">
                        <span class="trans-btn black-btn">Why it happens?</span>
                        <h4>What is ED? </h4>
                        <p>Erectile dysfunction, the inability to get or keep an erection during sexual activity,
                            happens when the penile erection chambers fail to generate and maintain the high
                            pressures that characterise a fully hard erection. Usually, sexual stimulation is enough
                            to get things going, but men with ED have trouble staying firm through ejaculation. Lots
                            of things can contribute, like age, high blood pressure, vascular disease, disease,
                            stress, and more.</p>
                    </div>
                    <div class="erectile-info">
                        <span class="trans-btn black-btn">What you can do?</span>
                        <h4>Can ED be treated? </h4>
                        <p>Yes, Treatments like Sildenafil and Tadalafil – the active ingredients in Viagra and
                            Cialis respectively have been clinically proven to treat the symptoms of ED. Both drugs
                            are PDE5 inhibitors. They target the enzyme, phosphodiesterase 5, which is responsible
                            for smooth muscle contraction in the blood vessels supplying your penis. By inhibiting
                            this enzyme, blood flow is improved – increasing the chances of achieving and
                            maintaining a full erection. Both drugs are PDE5 inhibitors. They target the enzyme,
                            phosphodiesterase 5, which is responsible for smooth muscle contraction in the blood
                            vessels supplying your penis. By inhibiting this enzyme, blood flow is improved –
                            increasing the chances of achieving and maintaining a full erection.</p>
                    </div>
                    <div class="erectile-info">
                        <span class="trans-btn black-btn">The different ED Med?</span>
                        <h4>What ED treatment is the most effective? </h4>
                        <p>A number of ED pills are prescribed in the UK. We worked with our expert medical advisors
                            to determine which ED treatments to offer through our platform. Sildenafil and Tadalafil
                            – known by their common brand names, Viagra and Cialis – are the most effective erectile
                            dysfunction drugs on the market. They work in over 80% of men, and studies have shown
                            that they are less likely than Vardenafil and other PDE5 inhibitors to cause side
                            effects. However both take different amounts of time to work, and their effects also
                            last for different amounts of time, so which is best will depend on your specific needs.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- ERECTILE-SEC END  -->

<!-- FAQ START  -->
<section class="faq pt-100 pb-100">
    <div class="container-xxl container">
        <div class="main-heading text-center faq-head">
            <h2>Frequently Asked Questions</h2>
            <p>Have Questions? We’re Here to help.</p>
        </div>
        <form action="" method="get">
            <div class="input-group">
                <span><i class="fa-solid fa-magnifying-glass"></i></span>
                <input type="search" name="" class="form-control" placeholder="Search">
            </div>
        </form>
        <div class="accordion" id="questionaccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        What is the main cause of ED?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        Erectile dysfunction can be caused by psychological factors, medical conditions and certain
                        medications. In younger men with variable or situational ED, stress and anxiety can restrict
                        blood flow to the penis at exactly the wrong moment. In men with ED that doesn’t vary with
                        different partners or different situations, underlying problems with nerves, blood vessels
                        or hormone production may be present.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What will happen when I take ED treatment?
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
                        What ED treatment will be best for me?
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
                        Is it safe to use ED treatment long-term?
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
                        What are the side-effects?
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
                        Does Sildenafil work as good as Viagra?
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
                        Can I take more than one ED tablet a day?
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

<!-- BLACK-SEC2 START  -->
<section class="black-sec home-free-cnslt">
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
<!-- GENT-SEC START  -->
<section class="gent-sec pt-100 pb-100">
    <div class="container-xxl container">
        <div class="main-heading">
            <h2>Gent hub</h2>
        </div>
        <div class="row gent-hub-last">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="cards">
                    <figure>
                        <img src="{{ asset('frontend_new/images/gent-img1.png') }}" alt="gent-img1"
                            class="hideonhover" />
                    </figure>
                    <div class="card-heading">
                        <p>Don't let erectile dysfunction affect your relationship!</p>
                        <div class="read-more d-flex align-items-center">
                            <a href="javascript:void(0);" class="trans-btn">Read more</a>
                            <span class="date-time">1/1/2023 / 20:23 PM</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="cards">
                    <figure>
                        <img src="{{ asset('frontend_new/images/gent-img2.png') }}" alt="gent-img2"
                            class="hideonhover" />
                        <img src="{{ asset('frontend_new/images/gent-img1.png') }}" class="showonhover"
                            alt="gent-img1" />
                    </figure>
                    <div class="card-heading">
                        <p>10 tips for grooming beard with easy tricks</p>
                        <div class="read-more d-flex align-items-center">
                            <a href="javascript:void(0);" class="trans-btn">Read more</a>
                            <span class="date-time">1/1/2023 / 20:23 PM</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="cards">
                    <figure>
                        <img src="{{ asset('frontend_new/images/gent-img3.png') }}" alt="gent-img3"
                            class="hideonhover" />
                        <img src="{{ asset('frontend_new/images/gent-img1.png') }}" class="showonhover"
                            alt="gent-img1" />
                    </figure>
                    <div class="card-heading">
                        <p>Signs to watch out for hair loss</p>
                        <div class="read-more d-flex align-items-center">
                            <a href="javascript:void(0);" class="trans-btn">Read more</a>
                            <span class="date-time">1/1/2023 / 20:23 PM</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="cards">
                    <figure>
                        <img src="{{ asset('frontend_new/images/gent-img4.png') }}" alt="gent-img4"
                            class="hideonhover" />
                        <img src="{{ asset('frontend_new/images/gent-img1.png') }}" class="showonhover"
                            alt="gent-img1" />
                    </figure>
                    <div class="card-heading">
                        <p>10 tips for grooming beard with easy tricks</p>
                        <div class="read-more d-flex align-items-center">
                            <a href="javascript:void(0);" class="trans-btn">Read more</a>
                            <span class="date-time">1/1/2023 / 20:23 PM</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- GENT-SEC END  -->
@endsection