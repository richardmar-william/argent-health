@extends('layouts.app')
@section('title', 'Premature Ejaculation Treatment')
@section('meta-desc', 'Explore effective remedies and regain control for lasting longer. Unlock confidence and intimacy.')
@section('content')

<style>
/* new css faq */
.faq table.my_table tbody {
    border: 1px solid;
}

.faq table.my_table tr {
    border-bottom: 1px solid;
}

.faq table.my_table th {
    border-right: 1px solid;
    padding: 10px;
}

.faq table.my_table td {
    border-right: 1px solid;
    padding: 10px;
}

.pro-get-started .get-started-inr .pure-white-btn {
    padding: 15px 25px;
}
</style>

<div class="main-div Save-hair-banner" style=" background-image: url({{ asset('frontend_new/images/pe.jpg') }}); background-position: right center;">
    <div class="container-xxl container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-8">
                                <div class="top-div text-white">
                                    <h1> Premature Ejaculation </br><span class="sans-heading">Treatment</span></h1>
                                    <p class="text54 pro_desc poppins">Private and Trusted PE Treatments</p>
                                </div>

                                <div class="hair-banner-inr text-color margin-hair">
                                    <p class="pro_desc"><i class="fa fa-check text-white"></i> Swiftly Conquer Premature Ejaculation with Expert Guidance from Agent</p>
                                </div>

                                <div class="hair-banner-inr text-color">
                                    <p class="pro_desc"><i class="fa fa-check text-white"></i> Master Your Performance and Extend Pleasure with Our Proven, Effective
                                        Treatments</p>
                                </div>

                                <div class="hair-banner-inr text-color">
                                    <p class="pro_desc"><i class="fa fa-check text-white"></i> Free online consultations</p>
                                </div>

                                <div class="hair-banner-inr text-color">

                                    <p class="pro_desc"><i class="fa fa-check text-white"></i> Just One Click Away from Your Best Performance - Skip the Awkward Doctor's
                                        Appointments</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="align-self-sm-center text-center text-md-start" style="margin: 50px 0;">

                    <a href="{{ route('questionnaire.index', $products[0]->category_id) }}" class="pure-white-btn" style="font-size: 1.3rem !important; box-shadow: 0px 0px 9px yellow;">get
                        started</a>
                </div>

                <img src="{{asset('frontend_new/images/mob-pe-new.png')}}" class="head-img img-fluid d-block d-sm-none" alt=""/>
            </div>

        </div>

        <div class="arrow">
            <a class="arrow-down scrollDown" href="#Pre-Ejaculation"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
        </div>
    </div>
</div>




{{--<!-- Banner Start -->--}}
{{--<div class="main-div electile-main premature-hero-banner"--}}
{{--    style="background-image: url({{ asset('frontend_new/images/pe.jpg')}} )">--}}
{{--    <div class="container-xxl container">--}}
{{--        <div class="top-div erectile-top-div text-white">--}}
{{--            <h1> Premature Ejaculation </br><span class="sans-heading">Treatment</span></h1>--}}
{{--            <ul>--}}
{{--                <li>--}}
{{--                    <p>--}}
{{--                        <?xml version="1.0" standalone="no"?>--}}
{{--                        <!DOCTYPE svg--}}
{{--                            PUBLIC "-//W3C//DTD SVG 20010904//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">--}}
{{--                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt"--}}
{{--                            viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">--}}

{{--                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">--}}
{{--                                <path d="M4598 4491 c-243 -127 -627 -368 -878 -551 -503 -366 -952 -799--}}
{{--                    -1267 -1224 -126 -169 -229 -331 -313 -490 l-64 -119 -40 46 c-23 26 -169 195--}}
{{--                    -326 376 -157 181 -298 337 -315 346 -27 14 -82 16 -528 13 l-499 -3 -24 -28--}}
{{--                    c-39 -46 -33 -95 19 -155 23 -27 469 -511 991 -1075 554 -599 960 -1030 976--}}
{{--                    -1037 40 -16 96 3 114 38 7 15 32 97 55 182 270 1001 821 2009 1558 2852 155--}}
{{--                    177 436 461 595 600 75 65 139 126 142 134 9 24 7 73 -4 95 -12 21 -60 49 -84--}}
{{--                    49 -9 0 -57 -22 -108 -49z" />--}}
{{--                            </g>--}}
{{--                        </svg><span>Swiftly Conquer Premature Ejaculation with Expert Guidance from Agent</span>--}}
{{--                    </p>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <p>--}}
{{--                        <?xml version="1.0" standalone="no"?>--}}
{{--                        <!DOCTYPE svg--}}
{{--                            PUBLIC "-//W3C//DTD SVG 20010904//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">--}}
{{--                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt"--}}
{{--                            viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">--}}

{{--                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">--}}
{{--                                <path d="M4598 4491 c-243 -127 -627 -368 -878 -551 -503 -366 -952 -799--}}
{{--                    -1267 -1224 -126 -169 -229 -331 -313 -490 l-64 -119 -40 46 c-23 26 -169 195--}}
{{--                    -326 376 -157 181 -298 337 -315 346 -27 14 -82 16 -528 13 l-499 -3 -24 -28--}}
{{--                    c-39 -46 -33 -95 19 -155 23 -27 469 -511 991 -1075 554 -599 960 -1030 976--}}
{{--                    -1037 40 -16 96 3 114 38 7 15 32 97 55 182 270 1001 821 2009 1558 2852 155--}}
{{--                    177 436 461 595 600 75 65 139 126 142 134 9 24 7 73 -4 95 -12 21 -60 49 -84--}}
{{--                    49 -9 0 -57 -22 -108 -49z" />--}}
{{--                            </g>--}}
{{--                        </svg><span>Master Your Performance and Extend Pleasure with Our Proven, Effective--}}
{{--                            Treatments</span>--}}
{{--                    </p>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <p>--}}
{{--                        <?xml version="1.0" standalone="no"?>--}}
{{--                        <!DOCTYPE svg--}}
{{--                            PUBLIC "-//W3C//DTD SVG 20010904//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">--}}
{{--                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt"--}}
{{--                            viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">--}}

{{--                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none">--}}
{{--                                <path d="M4598 4491 c-243 -127 -627 -368 -878 -551 -503 -366 -952 -799--}}
{{--                    -1267 -1224 -126 -169 -229 -331 -313 -490 l-64 -119 -40 46 c-23 26 -169 195--}}
{{--                    -326 376 -157 181 -298 337 -315 346 -27 14 -82 16 -528 13 l-499 -3 -24 -28--}}
{{--                    c-39 -46 -33 -95 19 -155 23 -27 469 -511 991 -1075 554 -599 960 -1030 976--}}
{{--                    -1037 40 -16 96 3 114 38 7 15 32 97 55 182 270 1001 821 2009 1558 2852 155--}}
{{--                    177 436 461 595 600 75 65 139 126 142 134 9 24 7 73 -4 95 -12 21 -60 49 -84--}}
{{--                    49 -9 0 -57 -22 -108 -49z" />--}}
{{--                            </g>--}}
{{--                        </svg><span>Just One Click Away from Your Best Performance - Skip the Awkward Doctor's--}}
{{--                            Appointments</span>--}}
{{--                    </p>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            <a href="{{ route('questionnaire.index', $products[0]->category_id) }}" class="white-trans-btn">get--}}
{{--                started</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="arrow">--}}
{{--        <a class="arrow-down scrollDown" href="#Pre-Ejaculation"><i class="fa fa-angle-double-down"--}}
{{--                aria-hidden="true"></i></a>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- Banner end  -->--}}

{{--<!-- start section -->--}}
{{--<section id="Pre-Ejaculation" class="consultation-sec consultation-sec-v2 pt-120">--}}
{{--    <div class="container-xxl container">--}}
{{--        <div class="row cstm-row backed-upper">--}}
{{--            <div class="col-lg-3 col-6">--}}
{{--                <div class="consult-div d-flex align-items-center">--}}
{{--                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="65.000000pt" height="65.000000pt"--}}
{{--                        viewBox="0 0 65.000000 65.000000" preserveAspectRatio="xMidYMid meet">--}}
{{--                        <g transform="translate(0.000000,65.000000) scale(0.100000,-0.100000)" stroke="none">--}}
{{--                            <path d="M263 634 c-94 -47 -100 -190 -10 -244 90 -55 208 9 209 114 2 107--}}
{{--                    -105 176 -199 130z"></path>--}}
{{--                            <path d="M270 342 c-31 -6 -36 -12 -52 -62 -19 -63 -23 -110 -8 -110 6 0 15--}}
{{--                    -11 22 -25 9 -19 8 -29 -6 -50 -20 -31 -58 -33 -86 -5 -26 26 -25 46 3 74 17--}}
{{--                    18 62 144 53 153 -1 1 -19 -11 -39 -28 -60 -49 -80 -99 -81 -199 l-1 -85 250--}}
{{--                    0 250 0 -1 85 c0 67 -5 94 -22 127 -20 37 -86 103 -104 103 -19 0 -4 -60 27--}}
{{--                    -110 19 -30 35 -64 35 -77 0 -23 -31 -63 -49 -63 -20 0 -21 19 -1 30 29 15 25--}}
{{--                    54 -9 92 l-29 32 -36 -27 c-37 -29 -47 -62 -24 -85 16 -16 1 -29 -20 -16 -42--}}
{{--                    27 -19 99 44 136 32 19 34 23 28 57 -4 20 -9 39 -13 43 -10 10 -93 17 -131 10z"></path>--}}
{{--                        </g>--}}
{{--                    </svg>--}}
{{--                    <div class="consult-heading">--}}
{{--                        <h4 class="text-black"> Harness the power of clinically-backed treatments .</h4>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-6">--}}
{{--                <div class="consult-div d-flex align-items-center">--}}
{{--                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="70.000000pt" height="70.000000pt"--}}
{{--                        viewBox="0 0 70.000000 70.000000" preserveAspectRatio="xMidYMid meet">--}}
{{--                        <g transform="translate(0.000000,70.000000) scale(0.100000,-0.100000)" stroke="none">--}}
{{--                            <path d="M301 626 l-44 -23 64 -36 c35 -19 94 -50 132 -68 l67 -33 0 -82 c0--}}
{{--                    -77 -1 -81 -25 -92 -14 -7 -28 -12 -30 -12 -2 0 -5 33 -7 73 l-3 72 -135 72--}}
{{--                    -135 72 -60 -32 -60 -32 0 -155 0 -155 143 -73 142 -73 143 73 142 73 0 155 0--}}
{{--                    155 -140 72 c-77 40 -142 72 -145 72 -3 0 -25 -10 -49 -23z"></path>--}}
{{--                        </g>--}}
{{--                    </svg>--}}
{{--                    <div class="consult-heading">--}}
{{--                        <h4 class="text-black"> Benefit from expert advice</br> tailored to your needs.--}}
{{--                        </h4>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-6">--}}
{{--                <div class="consult-div d-flex align-items-center">--}}
{{--                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="65.000000pt" height="65.000000pt"--}}
{{--                        viewBox="0 0 65.000000 65.000000" preserveAspectRatio="xMidYMid meet">--}}
{{--                        <g transform="translate(0.000000,65.000000) scale(0.100000,-0.100000)" stroke="none">--}}
{{--                            <path d="M230 638 c-71 -19 -103 -84 -65 -134 9 -13 12 -31 8 -58 l-6 -40 46--}}
{{--                    27 c25 15 57 27 72 27 14 0 44 9 65 20 115 59 12 194 -120 158z"></path>--}}
{{--                            <path d="M420 553 c-1 -42 -12 -61 -53 -88 -32 -21 -22 -35 26 -35 16 0 49--}}
{{--                    -12 73 -26 l45 -27 -6 36 c-5 25 -2 42 10 60 22 34 10 74 -29 98 -49 30 -66--}}
{{--                    25 -66 -18z"></path>--}}
{{--                            <path d="M150 367 c-52 -26 -52 -105 0 -132 80 -41 149 57 85 120 -27 28 -48--}}
{{--                    31 -85 12z"></path>--}}
{{--                            <path d="M415 355 c-64 -63 5 -161 84 -121 31 17 41 34 41 72 0 33 -42 74 -75--}}
{{--                    74 -14 0 -37 -11 -50 -25z"></path>--}}
{{--                            <path d="M130 190 c-45 -11 -107 -77 -115 -124 -13 -67 -14 -67 172 -64 l168--}}
{{--                    3 3 35 c3 44 -32 108 -73 131 -37 22 -109 30 -155 19z"></path>--}}
{{--                            <path d="M409 191 c-14 -5 -35 -14 -47 -20 -22 -11 -22 -13 -5 -44 9 -18 19--}}
{{--                    -52 22 -77 l6 -45 125 0 125 0 3 28 c5 39 -32 108 -70 134 -37 24 -119 37--}}
{{--                    -159 24z"></path>--}}
{{--                        </g>--}}
{{--                    </svg>--}}
{{--                    <div class="consult-heading">--}}
{{--                        <h4 class="text-black">Enjoy our discreet,</br> seamless service.</h4>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-3 col-6">--}}
{{--                <div class="consult-div d-flex align-items-center">--}}
{{--                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="65.000000pt" height="65.000000pt"--}}
{{--                        viewBox="0 0 65.000000 65.000000" preserveAspectRatio="xMidYMid meet">--}}
{{--                        <g transform="translate(0.000000,65.000000) scale(0.100000,-0.100000)" stroke="none">--}}
{{--                            <path d="M340 641 c-152 -50 -222 -206 -152 -342 86 -170 312 -184 419 -26--}}
{{--                    102 152 0 360 -184 373 -32 2 -69 0 -83 -5z m82 -163 l3 -53 53 -3 c37 -2 52--}}
{{--                    -7 52 -18 0 -11 -16 -14 -70 -14 l-70 0 0 70 c0 54 3 70 14 70 11 0 16 -15 18--}}
{{--                    -52z"></path>--}}
{{--                            <path d="M46 361 c-38 -39 -44 -50 -33 -59 10 -9 23 -1 61 37 38 39 44 50 33--}}
{{--                    59 -10 9 -23 1 -61 -37z"></path>--}}
{{--                            <path d="M70 239 c-49 -52 -53 -62 -30 -67 23 -4 102 81 94 101 -9 23 -13 21--}}
{{--                    -64 -34z"></path>--}}
{{--                            <path d="M106 131 c-46 -47 -54 -60 -43 -69 10 -9 25 1 71 47 46 47 54 60 43--}}
{{--                    69 -10 9 -25 -1 -71 -47z"></path>--}}
{{--                            <path d="M212 97 c-42 -42 -50 -61 -33 -71 13 -9 115 89 107 102 -13 21 -31--}}
{{--                    13 -74 -31z"></path>--}}
{{--                            <path d="M336 71 c-38 -39 -44 -50 -33 -59 10 -9 23 -1 61 37 38 39 44 50 33--}}
{{--                    59 -10 9 -23 1 -61 -37z"></path>--}}
{{--                        </g>--}}
{{--                    </svg>--}}
{{--                    <div class="consult-heading">--}}
{{--                        <h4 class="text-black"> Skip the waiting room with </br>our online consultations.--}}
{{--                        </h4>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!-- end section -->--}}

<!-- ERECTILE-SEC START  -->
<section class="erectile-sec pb-100">
    <div class="container-xxl container">
        <div class="text-center what-erectile-head pb-40">
            <h2 class="big-heading">So what is <span>premature ejaculation</span> anyway?</h2>
        </div>
        <div class="row happens-row-gap">
            <div class="col-md-6 col-sm-12">
                <figure>
                    <img src="{{asset('frontend_new/images/Premature-image-1.png')}}"
                        alt="erectile-img">
                </figure>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="erectile-right">
                    <div class="erectile-info">
                        <span class="trans-btn black-btn">WHY DOES IT HAPPEN</span>
                        <h4 class="big-heading">What is premature ejaculation? </h4>
                        <p>Premature Ejaculation (PE) is a common concern among men, often characterised by reaching
                            climax sooner than desired. This can occur during the height of passion, potentially
                            leaving you and your partner unsatisfied. But worry not, you're not alone in this journey.
                            With our expert guidance and clinically proven solutions, you can take control and elevate
                            your intimate experiences.

                            </br>
                            The underlying causes of PE often reside within the mind's labyrinth - think
                            performance-related anxiety or the pressures of living up to certain expectations. However,
                            like any intricate plot, PE can also have physical roots. Prostate issues, for instance,
                            have been known to play the villain in this story.

                        </p>
                    </div>
                    <div class="erectile-info">
                        <span class="trans-btn black-btn">What you can do?</span>
                        <h4 class="big-heading">Can It Be Treated?</h4>
                        <p>
                            Thanks to the relentless pursuit of medical innovation, we now possess powerful strategies to take control of the issue of PE. Enter Priligy, a trusted ally in your mission to master timing. Its method of operation? Fine-tuning your body's serotonin levels to delay the inevitable climax. With Priligy, you're not just a participant but the conductor of your intimate symphony.<br>
                            Then, we have Stud 100 - another formidable asset to have in your arsenal. This secret weapon operates by subtly reducing penile sensitivity, allowing you the luxury of time. With Stud 100, you gain the upper hand on your climax, turning the tables on PE.<br>
                            In the world of intimacy, timing is everything, and with these tools at your disposal, you're well-equipped to transform your experiences. Remember, the art of control is within your reach, and with Agent by your side, you're never alone in your mission.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ERECTILE-SEC END  -->

<!-- start section -->
<section class="other-sec premature-sec-4 pt-120 pb-120 premature-other-sec swiper-design">
    <div class="container-xxl container">
        <div class="text-center pb-5">
            <h2 class="big-heading">Explore Your Treatment Options</h2>
            <p>Every journey begins with a single step; let's take yours.</p>
        </div>
        <div class="swiper-slider3 premature-slide">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="cards other-item">
                        <figure>
                            <img src="{{ asset('frontend_new/images/pre-Img-1.PNG') }}" alt="treatment" />
                        </figure>
                        <figcaption>
                            <div class="fig-outer">
                                <div class="fig-inner">
                                    <h3 class="pre-crou-head">Stud 100</h3>
                                    <p class="price-text">From £8/Bottle</p>
                                    <p class="pre-crou-para">Your discreet companion to navigate the turbulent waters of
                                        premature ejaculation. Crafted with lidocaine,
                                        a trusted local anaesthetic, this over-the-counter elixir helps you stand firm,
                                        delaying your climax and enriching your intimate journey</p>
                                </div>
                                <div class="premature-btns-crousel">
                                    <a href="{{ url('/questionnaire/33')}}"
                                        class="trans-btn black-btn learn-more-card-btn">Start
                                        Visit</a>
                                    <!-- <a href="{{ url('/product/stud100')}}" class="trans-btn see-detailbtn">Learn More</a> -->
                                    <!-- <a href="{{ route('product.detail','Stud-100') }}"
                                        class="trans-btn see-detailbtn">Learn More</a> -->
                                </div>
                            </div>
                        </figcaption>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="cards other-item">
                        <figure>
                            <img src="{{ asset('frontend_new/images/Dapoxetine-Prilligy.PNG') }}" alt="treatment" />
                        </figure>
                        <figcaption>
                            <div class="fig-outer">
                                <div class="fig-inner">
                                    <h3 class="pre-crou-head">Dapoxetine (Priligy)</h3>
                                    <p class="price-text">From £5.81/Pill</p>
                                    <p class="pre-crou-para"> a trusted ally in the battle against premature
                                        ejaculation.
                                        As a unique formulation containing dapoxetine, Priligy operates with the finesse
                                        of a secret agent.
                                        It subtly enhances serotonin levels in your brain, delaying the physiological
                                        process of ejaculation
                                        and extending your moments of passion.
                                    </p>
                                </div>
                                <div class="premature-btns-crousel">
                                    <a href="{{ url('/questionnaire/33')}}"
                                        class="trans-btn black-btn learn-more-card-btn">Start
                                        Visit</a>
                                    <!-- <a href="{{ url('/product/priligy')}}" class="trans-btn see-detailbtn">Learn More</a> -->
                                    <!-- <a href="{{ route('product.detail','Priligy') }}"
                                        class="trans-btn see-detailbtn">Learn More</a> -->
                                </div>
                            </div>
                        </figcaption>
                    </div>
                </div>

                <!-- <div class="swiper-slide">
                    <div class="cards other-item">
                        <figure>
                            <img src="{{ asset('frontend_new/images/Img 2 (1).png') }}" alt="treatment" />
                        </figure>
                        <figcaption>
                            <div class="fig-outer">
                                <div class="fig-inner">
                                    <h3 class="pre-crou-head">Finasteride tablet</h3>
                                    <p class="pre-crou-para">Easy, once-a-day pill. It has been clinically proven to be an
                                        effective treatment for
                                        male-pattern hair loss in 9 out of 10 men....<b> READ MORE</b></p>
                                </div>
                                <div class="premature-btns-crousel">
                                    <a href="javascript:void(0);" class="trans-btn black-btn learn-more-card-btn">Start
                                        Visit</a>
                                    <a href="javascript:void(0);" class="trans-btn see-detailbtn">Learn More</a>
                                </div>
                            </div>
                        </figcaption>
                    </div>
                </div> -->

                <!-- <div class="swiper-slide">
                    <div class="cards other-item">
                        <figure>
                            <img src="{{ asset('frontend_new/images/pre-Img1.png') }}" alt="treatment" />
                        </figure>
                        <figcaption>
                            <div class="fig-outer">
                                <div class="fig-inner">
                                    <h3 class="pre-crou-head">Minoxidil solution</h3>
                                    <p class="pre-crou-para">Unique formula is free from alcohol and propylene glycol,
                                         which means it’s kinder to your scalp.
                                         Available in spray or dropper for your preference.....<b> READ MORE</b></p>
                                </div>
                                <div class="premature-btns-crousel">
                                    <a href="javascript:void(0);" class="trans-btn black-btn learn-more-card-btn">Start
                                        Visit</a>
                                    <a href="javascript:void(0);" class="trans-btn see-detailbtn">Learn More</a>
                                </div>
                            </div>
                        </figcaption>
                    </div>
                </div> -->


            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- start section -->
<section class="pro-get-started pre-button-section">
    <div class="container-xxl container">
        <div class="get-started-inr">
            <h2 class="text-white">Take the first step towards lasting longer in bed</h2>
            <a class="pure-white-btn" href="{{ url('/questionnaire/33') }}">Begin your journey towards endurance</a>
        </div>
    </div>
</section>
<!-- end section -->

<!-- start section -->
<section class="agent-offer agent-section">
    <div class="container-xxl container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="agent-div">
                    <h2 class="big-heading">“Agent offer treatments that are clinically proven and backed by doctors and pharmacists”
                    </h2>
                    <p><b>Vikesh Patel</b>, Medical Advisor, Pharmacist</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <figure>
                    <img src="{{asset('frontend_new/images/agent-offer-img.png')}}"
                        alt="agent-offer-img">
                </figure>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- start section -->
<section class="black-sec erectile-black">
    <div class="container-xxl container">
        <div class="unsure-div d-flex justify-content-between align-items-center flex-wrap-wrap">
            <div class="d-flex align-items-center">
                <div class="qcc-icon">
                    <?xml version="1.0" standalone="no"?>
                    <!DOCTYPE svg
                        PUBLIC "-//W3C//DTD SVG 20010904//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt"
                        viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet">

                        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#fff"
                            stroke="none">
                            <path d="M2415 4794 c-322 -34 -575 -105 -840 -234 -376 -185 -667 -439 -897
                    -785 -432 -648 -475 -1522 -111 -2233 265 -518 725 -914 1278 -1101 812 -273
                    1685 -73 2280 524 277 278 477 622 588 1010 152 527 102 1079 -139 1565 -78
                    157 -188 329 -258 405 -41 43 -48 47 -78 41 -18 -3 -41 -16 -50 -27 -32 -38
                    -23 -75 38 -156 311 -412 454 -915 404 -1414 -74 -734 -519 -1385 -1160 -1701
                    -529 -259 -1161 -275 -1715 -43 -264 110 -491 268 -700 486 -598 623 -745
                    1566 -366 2344 311 635 966 1081 1700 1155 540 54 1097 -123 1511 -481 44 -38
                    92 -74 106 -79 34 -13 74 6 92 43 21 43 2 75 -90 154 -322 275 -683 442 -1098
                    508 -101 16 -411 28 -495 19z" />
                            <path d="M2275 4074 c-11 -2 -45 -9 -75 -15 -30 -6 -93 -29 -139 -51 -140 -67
                    -262 -209 -310 -360 -10 -30 -9 -42 3 -66 17 -33 34 -42 75 -42 32 0 62 29 81
                    80 52 136 179 247 325 285 239 62 492 -80 567 -318 60 -189 -19 -483 -188
                    -697 -49 -62 -92 -99 -156 -132 -60 -32 -155 -31 -217 1 -131 68 -262 256
                    -326 466 -16 50 -34 97 -42 107 -22 25 -59 30 -92 14 -51 -27 -54 -70 -11
                    -197 100 -300 294 -521 499 -569 221 -52 454 114 606 432 189 395 125 760
                    -166 954 -125 83 -318 131 -434 108z" />
                            <path d="M1742 2510 c-24 -11 -80 -44 -125 -73 -252 -164 -442 -409 -538 -696
                    -49 -144 -37 -220 50 -313 160 -173 444 -323 701 -369 104 -19 888 -20 1010
                    -1 108 16 223 45 285 72 l48 21 76 -40 c97 -50 211 -75 305 -66 297 28 515
                    265 516 560 0 148 -56 281 -165 390 -117 117 -247 168 -411 163 l-91 -3 -100
                    101 c-140 142 -360 285 -410 267 -10 -3 -45 -32 -78 -63 -79 -75 -159 -125
                    -259 -163 -74 -28 -92 -31 -201 -32 -130 0 -176 11 -290 67 -68 34 -118 71
                    -190 139 -62 58 -79 63 -133 39z m201 -299 c142 -84 268 -115 442 -108 93 4
                    138 11 200 31 106 34 211 94 283 161 l59 54 78 -52 c44 -29 114 -86 158 -127
                    l78 -75 -64 -47 c-110 -80 -183 -196 -212 -335 -27 -127 -11 -242 49 -363 20
                    -39 36 -73 36 -75 0 -5 -106 -36 -185 -56 -69 -16 -837 -25 -950 -10 -247 33
                    -485 146 -649 308 -57 57 -58 59 -53 103 7 55 55 182 103 268 87 156 231 311
                    378 407 l81 53 56 -52 c31 -28 81 -66 112 -85z m1739 -250 c297 -141 303 -567
                    10 -715 -150 -76 -336 -48 -455 68 -217 210 -137 564 149 666 88 31 207 24
                    296 -19z" />
                            <path d="M3472 1873 c-25 -10 -42 -62 -42 -128 l0 -65 -69 0 c-38 0 -77 -3
                    -86 -6 -24 -10 -46 -60 -39 -89 11 -46 49 -65 125 -65 l69 0 0 -71 c0 -65 2
                    -73 30 -101 26 -25 36 -29 63 -24 52 10 67 37 67 121 l0 73 81 4 c70 3 83 6
                    100 27 27 32 24 77 -6 106 -21 22 -33 25 -100 25 l-75 0 0 75 c0 67 -3 79 -25
                    100 -23 24 -61 31 -93 18z" />
                        </g>
                    </svg>
                </div>
                <div class="text-white">
                    <h2 class="cta-h2">Question, Concern, Comments?</h2>
                    <p>Drop us a message and a Pharmacist will be in contact to discuss</p>
                </div>
            </div>
            <a class="white-btn" href="{{ url('/contact-us') }}">Speak to pharmacist</a>
        </div>
    </div>
</section>
<!-- end section -->
<!-- HOW-ITS-WORK START  -->
<section class="how-its-work pt-100 pb-100">
    <div class="container-xxl container">
        <div class="text-center how-its-head">
            <h2 class="big-heading">How it works</h2>
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
                        <h4>Continuous Support</h4>
                        <p>You will have continued support from our experts and instructions on how to use your treatment.</p>
                    </figcaption>
                </div>
            </div>
        </div>
        <a href="{{ url('/questionnaire/33') }}" class="trans-btn">Get Started</a>
    </div>
</section>
<!-- HOW-ITS-WORK END  -->
<!-- start section -->
<section class="faq pt-100 pb-100">
    <div class="container-xxl container">
        <div class=" text-center faq-head">
            <h2 class="big-heading">Frequently Asked Questions</h2>
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
                        What will happen when I take PE treatment?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        When you take Priligy or use Stud 100, you can expect to gain better control over your
                        ejaculation, enabling you to last longer during sex. The effect of these treatments can vary
                        from person to person, and they do not increase your sexual desire or libido.

                        <table class="my_table">
                            <tr>
                                <th>Treatment</th>
                                <th>Time to take effect</th>
                                <th>Lasts for up to</th>
                            </tr>
                            <tr>
                                <td>Priligy (Dapoxetine)</td>
                                <td>1-3 hours</td>
                                <td>12 hours</td>
                            </tr>
                            <tr>
                                <td>Stud 100</td>
                                <td>Immediate</td>
                                <td>1-2 hours</td>
                            </tr>


                        </table>
                        These treatments can be used with or without food. However, taking them after a heavy meal might
                        delay their effects slightly.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What is the main cause of PE?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        Premature ejaculation can be caused by psychological factors such as stress, anxiety, guilt or
                        excitement. It can also be due to physical issues like hormonal imbalances, injury, or side
                        effects from certain medications.

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What PE treatment will be best for me?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        Both Priligy and Stud 100 are effective treatments for PE. Priligy works by increasing the
                        activity of serotonin in the nervous system, thus enhancing control over ejaculation. Stud 100,
                        on the other hand, is a topical spray that reduces sensitivity in the penis, helping you
                        maintain control. The choice between the two depends on your preference, health status, and
                        lifestyle.

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Is it safe to use PE treatment long-term?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        Yes, both Priligy and Stud 100 are generally safe for long-term use. However, if you find
                        yourself needing to use them frequently, it may be worthwhile to consult with a healthcare
                        professional to address any potential underlying issues.

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
                        Side effects from PE treatments are generally mild and temporary. For Priligy, these may include
                        headaches, dizziness, and nausea. Stud 100 may cause a temporary reduction in sensitivity or
                        allergic reactions in some men. If you experience any severe or persistent side effects, you
                        should consult with a healthcare professional.

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        How quickly do PE treatments work?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        Priligy takes about 1-3 hours to take effect, while Stud 100 works almost immediately after
                        application. Both treatments should be used shortly before engaging in sexual activity.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        Can I use more than one PE treatment a day?
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        It's not typically recommended to use multiple treatments for PE in a single day. Overuse can
                        potentially lead to unwanted side effects or decreased efficacy. If you're finding that a single
                        treatment isn't sufficient, it's best to consult with a healthcare professional for advice.

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        Do I need a prescription for Priligy or Stud 100?
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        Priligy is a prescription medication, while Stud 100 can be purchased over-the-counter.</br>


                        Remember to always consult with a healthcare professional for any medical concerns or before
                        starting any new treatment.



                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

@include('partials.frontend.above-footer')



<!-- start section -->
<section class="black-sec home-free-cnslt">
    <div class="container-xxl container">
        <div class="unsure-div d-flex justify-content-between align-items-center flex-wrap-wrap">
            <div class="text-white pb-20">
                <h2 class="footer-h2">Get a free consultation</h2>
                <p>Speak with one of our clinicians and get personalised advice. Monday to Friday 9am - 4:30pm</p>
            </div>
            <a class="pure-white-btn" href="{{ url('/questionnaire/33') }}">Get Started </a>
        </div>
    </div>
</section>
<!-- end section -->

<!-- GENT-SEC START  -->
<!-- <section class="gent-sec pt-120 pb-120">
    <div class="container-xxl container">
        <div class="main-heading">
            <h2>Gent hub</h2>
        </div>
        <div class="row gent-hub-upper">
            @php
            $blog = DB::table('blogs')->orderBy('id','DESC')->take(4)->get();
            @endphp
            @foreach($blog as $blogs)
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="cards">
                    <figure>
                        <img src="{{ asset('images/') }}{{ '/'. $blogs->image}}" alt="gent-img2" class="hideonhover" />
                        <img src="{{ asset('frontend_new/images/gent-img1.png') }}" class="showonhover"
                            alt="gent-img1" />
                        <span class="date-time">{{$blogs->updated_at}} PM</span>
                    </figure>
                    <div class="card-heading">
                        <p>{{$blogs->title}}</p>
                        <div class="read-more d-flex justify-content-between align-items-center">
                            <a href="{{route('blog_detail',$blogs->id)}}" class="trans-btn">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section> -->
<!-- GENT-SEC END  -->

@endsection
