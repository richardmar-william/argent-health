@extends('layouts.app')
@section('title', 'Homepage')
@section('content')

<div class="main-div homepage-banner" style="background-image: url({{ asset('frontend_new/images/home-banner.png') }}); background-position: right center;">
    <div class="container-xxl container">
        <div class="top-div text-white">
            <h1>be the gent you <br>were born to be</h1>
            <h4>Let us help you with</h4>
            <div class="d-flex align-items-center">
                <a class="white-btn transparent-btn" href="{{ route('shop.index','hair-loss') }}">Hair 
                    <!-- <span><img src="{{ asset('frontend_new/images/svg/hair.svg') }}" alt="hair"/></span> -->
                    <span>
                        <?xml version="1.0" standalone="no"?>
                        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                        "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                        width="423.000000pt" height="362.000000pt" viewBox="0 0 423.000000 362.000000"
                        preserveAspectRatio="xMidYMid meet">

                        <g transform="translate(0.000000,362.000000) scale(0.100000,-0.100000)"
                        fill="#000000" stroke="none">
                        <path d="M1795 3443 c-114 -15 -278 -47 -347 -69 -171 -53 -320 -142 -395
                        -233 -43 -53 -113 -184 -113 -213 0 -7 -5 -30 -10 -50 -10 -35 -13 -37 -108
                        -69 -223 -74 -366 -167 -476 -313 -66 -87 -94 -138 -133 -241 -65 -171 -91
                        -361 -73 -538 6 -67 15 -128 19 -136 6 -10 18 -1 47 33 21 25 41 46 45 46 3 0
                        9 -42 13 -92 40 -540 148 -983 310 -1267 30 -53 62 -105 71 -116 16 -19 16
                        -19 12 10 -2 17 -20 102 -40 190 -50 224 -67 374 -67 593 0 276 32 439 118
                        607 49 96 199 246 297 297 l70 37 55 -36 c94 -60 288 -150 404 -187 200 -64
                        277 -76 506 -76 287 0 404 27 695 162 156 72 243 91 352 78 213 -27 380 -222
                        478 -559 58 -196 99 -469 115 -751 13 -220 15 -225 47 -169 39 69 128 276 157
                        364 65 200 96 405 96 644 0 89 4 151 9 146 4 -6 25 -54 46 -107 35 -93 63
                        -131 51 -70 -3 15 -8 54 -12 87 -26 250 -64 443 -122 620 -192 587 -565 959
                        -1087 1084 -49 12 -101 24 -115 27 l-25 6 25 10 c66 25 207 48 295 48 87 0
                        121 10 78 23 -10 3 -43 15 -73 26 -85 33 -244 78 -357 100 -81 17 -139 21
                        -296 21 -174 0 -205 -3 -288 -24 -52 -14 -128 -39 -169 -56 -107 -45 -106 -45
                        -113 -18 -10 35 -10 36 39 88 51 54 51 54 -31 43z"/>
                        </g>
                        </svg>
                    </span>
                </a>
                <a class="white-btn transparent-btn" href="{{ route('shop.index','beard') }}">Beard 
                    <!-- <span><img src="{{ asset('frontend_new/images/svg/beared.svg') }}" alt="beared" /></span> -->
                    <span>
                        <?xml version="1.0" standalone="no"?>
                        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                        "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                        width="15.000000pt" height="15.000000pt" viewBox="0 0 15.000000 15.000000"
                        preserveAspectRatio="xMidYMid meet">

                        <g transform="translate(0.000000,15.000000) scale(0.100000,-0.100000)"
                        fill="#000000" stroke="none">
                        <path d="M1 113 c-1 -34 18 -68 47 -85 23 -14 31 -14 51 -4 29 16 50 52 50 86
                        l0 25 -10 -24 c-6 -15 -15 -21 -24 -17 -9 3 -15 0 -15 -9 0 -10 -10 -15 -30
                        -15 -22 0 -28 4 -24 15 5 11 2 13 -10 9 -11 -4 -19 1 -25 17 -10 24 -10 24
                        -10 2z"/>
                        <path d="M68 83 c7 -3 16 -2 19 1 4 3 -2 6 -13 5 -11 0 -14 -3 -6 -6z"/>
                        </g>
                        </svg>
                    </span>
                </a>
                <a class="white-btn transparent-btn" href="{{ url('sexMain') }}">Sex 
                    <!-- <span><img src="{{ asset('frontend_new/images/svg/sex.svg') }}" alt="sex" /></span> -->
                    <span>
                        <?xml version="1.0" standalone="no"?>
                        <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                        "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                        width="200.000000pt" height="200.000000pt" viewBox="0 0 200.000000 200.000000"
                        preserveAspectRatio="xMidYMid meet">

                        <g transform="translate(0.000000,200.000000) scale(0.100000,-0.100000)"
                        fill="#000000" stroke="none">
                        <path d="M1417 1923 c-4 -3 -7 -37 -7 -75 l0 -68 95 0 c52 0 95 -3 95 -8 0 -4
                        -38 -45 -85 -92 l-84 -84 -48 26 c-134 72 -316 78 -443 13 -60 -30 -134 -92
                        -170 -144 l-35 -50 -85 6 c-184 12 -341 -66 -440 -219 -54 -82 -73 -164 -68
                        -281 3 -84 8 -103 40 -168 65 -131 151 -207 282 -250 l66 -22 0 -53 0 -54 -85
                        0 -85 0 0 -75 0 -75 85 0 84 0 3 -87 3 -88 72 -3 72 -3 3 88 3 88 88 3 87 3 0
                        74 0 75 -90 0 -90 0 0 54 0 54 46 11 c100 25 210 100 264 178 l34 50 96 -5
                        c154 -7 268 36 367 140 92 98 133 200 133 328 -1 84 -14 140 -52 218 l-31 63
                        84 85 84 85 5 -93 5 -93 73 -3 72 -3 0 231 0 230 -218 0 c-120 0 -222 -3 -225
                        -7z m-137 -419 c68 -31 123 -84 158 -149 24 -44 27 -61 27 -145 0 -107 -15
                        -147 -82 -221 -57 -63 -122 -92 -220 -97 l-83 -5 0 87 c0 145 -52 262 -158
                        356 l-56 50 60 59 c72 69 121 89 224 90 60 1 86 -4 130 -25z m-599 -309 c10
                        -159 54 -251 172 -353 l38 -32 -47 -50 c-127 -136 -332 -142 -461 -13 -58 58
                        -87 124 -91 208 -5 87 8 139 51 201 65 95 161 146 272 141 l60 -2 6 -100z
                        m229 -103 c11 -29 20 -67 20 -84 0 -31 0 -31 -21 -12 -34 30 -79 134 -79 179
                        l1 40 30 -35 c16 -19 38 -58 49 -88z"/>
                        </g>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
        <!-- <div class="partners">
            <a class="partner-link" href="javascript:void(0);"><img
                    src="{{ asset('frontend_new/images/svg/bloomberg.svg') }}" alt="bloomberg" /></a>
            <a class="partner-link" href="javascript:void(0);"><img
                    src="{{ asset('frontend_new/images/svg/menshealth.svg') }}" alt="menshealth" /></a>
            <a class="partner-link" href="javascript:void(0);"><img src="{{ asset('frontend_new/images/svg/GQ.svg') }}"
                    alt="GQ" /></a>
            <a class="partner-link" href="javascript:void(0);"><img
                    src="{{ asset('frontend_new/images/svg/forbes.svg') }}" alt="forbes" /></a>
        </div> -->
    </div>
    <div class="arrow">
        <a class="arrow-down scrollDown" href="#agTreatmentsSec"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
    </div>
</div>


<section id="agTreatmentsSec" class="treatments-sec pt-120 pb-120">
    <div class="container-xxl container">
        <div class="main-heading text-center">
            <h2>get personalized treatments for</h2>
        </div>
        <div class="row">
            @php
            use App\Models\Category;
            $category = Category::orderBy('id','desc')->get();
            foreach($category as $cat){

            @endphp
            <div class="col-lg-3 col-6">
                <div class="cards text-center">
                    <figure>
                        <img src="{{ asset('storage/images/categories/') }}{{ '/'.$cat->cover }}" alt="Hair-Loss" />
                    </figure>
                    <div class="card-heading">
                        <h4>{{ $cat->name }}</h4>
                    </div>
                    <a href="{{ route('shop.index', $cat->slug) }}" class="black-link"><i class="fa fa-long-arrow-right"
                            aria-hidden="true"></i></a>
                </div>
            </div>
            @php
            }
            @endphp
          

        </div>
    </div>
</section>
<!-- TREATMENTS-SEC END  -->

<!-- BLACK-SEC START  -->
<section class="black-sec">
    <div class="container-xxl container">
        <div class="unsure-div text-white text-center">
            <h2>If you are unsure </h2>
            <a class="white-trans-btn" href="javascript:void(0);">Get a Recommendation</a>
        </div>
    </div>
</section>
<!-- BLACK-SEC END  -->

<!-- CONSULTAION-SEC START  -->
<section class="consultation-sec consultation-sec-v2 pt-120">
    <div class="container-xxl container">
        <div class="row cstm-row backed-upper">
            <div class="col-lg-3 col-6">
                <div class="consult-div d-flex align-items-center">
                    <!-- <figure>
                        <img src="{{ asset('frontend_new/images/svg/backed.svg') }}" alt="backed" />
                    </figure> -->
                    <?xml version="1.0" standalone="no"?>
                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="65.000000pt" height="65.000000pt" viewBox="0 0 65.000000 65.000000"
                    preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,65.000000) scale(0.100000,-0.100000)" stroke="none">
                    <path d="M263 634 c-94 -47 -100 -190 -10 -244 90 -55 208 9 209 114 2 107
                    -105 176 -199 130z"/>
                    <path d="M270 342 c-31 -6 -36 -12 -52 -62 -19 -63 -23 -110 -8 -110 6 0 15
                    -11 22 -25 9 -19 8 -29 -6 -50 -20 -31 -58 -33 -86 -5 -26 26 -25 46 3 74 17
                    18 62 144 53 153 -1 1 -19 -11 -39 -28 -60 -49 -80 -99 -81 -199 l-1 -85 250
                    0 250 0 -1 85 c0 67 -5 94 -22 127 -20 37 -86 103 -104 103 -19 0 -4 -60 27
                    -110 19 -30 35 -64 35 -77 0 -23 -31 -63 -49 -63 -20 0 -21 19 -1 30 29 15 25
                    54 -9 92 l-29 32 -36 -27 c-37 -29 -47 -62 -24 -85 16 -16 1 -29 -20 -16 -42
                    27 -19 99 44 136 32 19 34 23 28 57 -4 20 -9 39 -13 43 -10 10 -93 17 -131 10z"/>
                    </g>
                    </svg>
                    <div class="consult-heading">
                        <h4>backed by doctors & <br>pharmacists</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="consult-div d-flex align-items-center">
                    <!-- <figure>
                        <img src="{{ asset('frontend_new/images/svg/discreet.svg') }}" alt="discreet" />
                    </figure> -->
                    <?xml version="1.0" standalone="no"?>
                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="70.000000pt" height="70.000000pt" viewBox="0 0 70.000000 70.000000"
                    preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,70.000000) scale(0.100000,-0.100000)" stroke="none">
                    <path d="M301 626 l-44 -23 64 -36 c35 -19 94 -50 132 -68 l67 -33 0 -82 c0
                    -77 -1 -81 -25 -92 -14 -7 -28 -12 -30 -12 -2 0 -5 33 -7 73 l-3 72 -135 72
                    -135 72 -60 -32 -60 -32 0 -155 0 -155 143 -73 142 -73 143 73 142 73 0 155 0
                    155 -140 72 c-77 40 -142 72 -145 72 -3 0 -25 -10 -49 -23z"/>
                    </g>
                    </svg>
                    <div class="consult-heading">
                        <h4>discreet <br> packaging
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="consult-div d-flex align-items-center">
                    <!-- <figure>
                        <img src="{{ asset('frontend_new/images/svg/online.svg') }}" alt="online" />
                    </figure> -->
                    <?xml version="1.0" standalone="no"?>
                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="65.000000pt" height="65.000000pt" viewBox="0 0 65.000000 65.000000"
                    preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,65.000000) scale(0.100000,-0.100000)" stroke="none">
                    <path d="M230 638 c-71 -19 -103 -84 -65 -134 9 -13 12 -31 8 -58 l-6 -40 46
                    27 c25 15 57 27 72 27 14 0 44 9 65 20 115 59 12 194 -120 158z"/>
                    <path d="M420 553 c-1 -42 -12 -61 -53 -88 -32 -21 -22 -35 26 -35 16 0 49
                    -12 73 -26 l45 -27 -6 36 c-5 25 -2 42 10 60 22 34 10 74 -29 98 -49 30 -66
                    25 -66 -18z"/>
                    <path d="M150 367 c-52 -26 -52 -105 0 -132 80 -41 149 57 85 120 -27 28 -48
                    31 -85 12z"/>
                    <path d="M415 355 c-64 -63 5 -161 84 -121 31 17 41 34 41 72 0 33 -42 74 -75
                    74 -14 0 -37 -11 -50 -25z"/>
                    <path d="M130 190 c-45 -11 -107 -77 -115 -124 -13 -67 -14 -67 172 -64 l168
                    3 3 35 c3 44 -32 108 -73 131 -37 22 -109 30 -155 19z"/>
                    <path d="M409 191 c-14 -5 -35 -14 -47 -20 -22 -11 -22 -13 -5 -44 9 -18 19
                    -52 22 -77 l6 -45 125 0 125 0 3 28 c5 39 -32 108 -70 134 -37 24 -119 37
                    -159 24z"/>
                    </g>
                    </svg>
                    <div class="consult-heading">
                        <h4>online consultation <br>with doctors</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="consult-div d-flex align-items-center">
                    <!-- <figure>
                        <img src="{{ asset('frontend_new/images/svg/on-time.svg') }}" alt="on-time" />
                    </figure> -->
                    <?xml version="1.0" standalone="no"?>
                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="65.000000pt" height="65.000000pt" viewBox="0 0 65.000000 65.000000"
                    preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,65.000000) scale(0.100000,-0.100000)" stroke="none">
                    <path d="M340 641 c-152 -50 -222 -206 -152 -342 86 -170 312 -184 419 -26
                    102 152 0 360 -184 373 -32 2 -69 0 -83 -5z m82 -163 l3 -53 53 -3 c37 -2 52
                    -7 52 -18 0 -11 -16 -14 -70 -14 l-70 0 0 70 c0 54 3 70 14 70 11 0 16 -15 18
                    -52z"/>
                    <path d="M46 361 c-38 -39 -44 -50 -33 -59 10 -9 23 -1 61 37 38 39 44 50 33
                    59 -10 9 -23 1 -61 -37z"/>
                    <path d="M70 239 c-49 -52 -53 -62 -30 -67 23 -4 102 81 94 101 -9 23 -13 21
                    -64 -34z"/>
                    <path d="M106 131 c-46 -47 -54 -60 -43 -69 10 -9 25 1 71 47 46 47 54 60 43
                    69 -10 9 -25 -1 -71 -47z"/>
                    <path d="M212 97 c-42 -42 -50 -61 -33 -71 13 -9 115 89 107 102 -13 21 -31
                    13 -74 -31z"/>
                    <path d="M336 71 c-38 -39 -44 -50 -33 -59 10 -9 23 -1 61 37 38 39 44 50 33
                    59 -10 9 -23 1 -61 -37z"/>
                    </g>
                    </svg>
                    <div class="consult-heading">
                        <h4>on time <br> ship
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CONSULTAION-SEC END  -->

<!-- HANDS-SEC START  -->
<section class="hands-sec pt-120 pb-120">
    <div class="container-xxl container">
        <div class="main-heading text-center">
            <h2>your health is in good hands.</h2>
            <p>Medical expert bringing you the effective treatments you have needad with our easy onilne process</p>
        </div>
        <div class="row free-consultation-upper">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="hands-card text-center">
                    <figure>
                        <img src="{{ asset('frontend_new/images/video3.gif') }}" alt="free-consultation" />
                    </figure>
                    <!-- <video controls autoplay loop muted>
                        <source src="{{ asset('frontend_new/images/free-consultation.mov') }}" type="video/mp4">
                        <source src="{{ asset('frontend_new/images/free-consultation.ogg') }}" type="video/ogg">
                    </video> -->
                    <div class="card-heading">
                        <h4>free consultation</h4>
                        <p>Quick medical questiommaire to be filed by <br>uoi them a bespoke treatment picked by a
                            <br>clinician will be prescribed after reviewing <br>answers
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="hands-card text-center">
                    <figure>
                        <img src="{{ asset('frontend_new/images/video1.gif') }}" alt="avoid" />
                    </figure>
                    <!-- <video controls autoplay loop muted>
                        <source src="{{ asset('frontend_new/images/avoid-long-waiting-times.mov') }}" type="video/mp4">
                        <source src="{{ asset('frontend_new/images/avoid-long-waiting-times.ogg') }}" type="video/ogg">
                    </video> -->
                    <div class="card-heading">
                        <h4>Avoid long waiting time</h4>
                        <p>100% online no stress of doctors clinics and <br>waiting in pharmacies. free and fast
                            delivery <br>issued to you.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="hands-card text-center">
                    <figure>
                        <img src="{{ asset('frontend_new/images/video2.gif') }}" alt="free" />
                    </figure>
                    <!-- <video controls autoplay loop muted>
                        <source src="{{ asset('frontend_new/images/continuous-support.mov') }}" type="video/mp4">
                        <source src="{{ asset('frontend_new/images/continuous-support.ogg') }}" type="video/ogg">
                    </video> -->
                    <div class="card-heading">
                        <h4>Continuous support</h4>
                        <p>Long term support available from medical <br>professionals at your fingertips for as
                            <br>long as you need
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- HANDS-SEC END  -->

<!-- BEARED-SEC START  -->
<section class="beared-sec pt-100 swiper-design mb-0">
    <div class="container-xxl container slider_container">
        <div class="swiper-slider1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="beared-item">
                        <figure>
                            <img src="{{ asset('frontend_new/images/slider-img1.png') }}" alt="slider-img1" />
                        </figure>
                        <figcaption class="text-white">
                            <h6>Gentlemen always finish <br>last</h6>
                            <div class="beared-btns d-flex align-items-center">
                                <a class="pure-white-btn" href="javascript:void(0);">Start Visit</a>
                                <a class="white-trans-btn" href="javascript:void(0);">Learn more</a>
                            </div>
                        </figcaption>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="beared-item">
                        <figure>
                            <img src="{{ asset('frontend_new/images/slider-img2.png') }}" alt="slider-img2" />
                        </figure>
                        <figcaption class="text-white">
                            <h6>grow thicker fuller <br>beard</h6>
                            <div class="beared-btns d-flex align-items-center">
                                <a class="pure-white-btn" href="javascript:void(0);">Start Visit</a>
                                <a class="white-trans-btn" href="javascript:void(0);">Learn more</a>
                            </div>
                        </figcaption>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="beared-item">
                        <figure>
                            <img src="{{ asset('frontend_new/images/slider-img3.png') }}" alt="slider-img3" />
                        </figure>
                        <figcaption class="text-white">
                            <h6>Don’t come <br>unequipped</h6>
                            <div class="beared-btns d-flex align-items-center">
                                <a class="pure-white-btn" href="javascript:void(0);">Start Visit</a>
                                <a class="white-trans-btn" href="javascript:void(0);">Learn more</a>
                            </div>
                        </figcaption>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="beared-item">
                        <figure>
                            <img src="{{ asset('frontend_new/images/slider-img4.png') }}" alt="slider-img4" />
                        </figure>
                        <figcaption class="text-white">
                            <h6>revive that receding <br>hairline</h6>
                            <div class="beared-btns d-flex align-items-center">
                                <a class="pure-white-btn" href="javascript:void(0);">Start Visit</a>
                                <a class="white-trans-btn" href="javascript:void(0);">Learn more</a>
                            </div>
                        </figcaption>
                    </div>    
                </div>
                <div class="swiper-slide">
                    <div class="beared-item">
                        <figure>
                            <img src="{{ asset('frontend_new/images/slider-img5.png') }}" alt="slider-img5" />
                        </figure>
                        <figcaption class="text-white">
                            <h6>If unsure - get a tailor made <br>treatment for you today</h6>
                            <div class="beared-btns d-flex align-items-center">
                                <a class="pure-white-btn" href="javascript:void(0);">Start Visit</a>
                                <a class="white-trans-btn" href="javascript:void(0);">Learn more</a>
                            </div>
                        </figcaption>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<!-- BEARED-SEC END  -->

<!-- OTHER-SEC START  -->
<section class="other-sec pt-120 pb-120 swiper-design">
    <div class="container-xxl container">
        <div class="main-heading text-center">
            <h2>Other gentlemen have benefited from.</h2>
        </div>
    </div>
    <div class="container-xxl container slider_container">
        <div class="swiper-slider2">
            <div class="swiper-wrapper">
                @php
                $category = Category::orderBy('id','desc')->get();
                foreach($category as $cat){

                @endphp
                <div class="swiper-slide">
                    <div class="other-item">
                        <figure>
                            <img src="{{ asset('storage/images/categories/') }}{{ '/'.$cat->cover }}" alt="Beard-Growth" />
                        </figure>
                        <figcaption>
                            <p>{{ $cat->name }}</p>
                            <div class="stars">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <a href="{{ route('shop.index', $cat->slug) }}" class="trans-btn see-detailbtn">See details</a>
                        </figcaption>
                    </div>
                </div>
                @php
                }
                @endphp
            </div>            
            <div class="swiper-pagination"></div>
        </div>      
    </div>
</section>
<!-- OTHER-SEC END  -->

<!-- WORDS-SEC START  -->
<section class="consultation-sec words-sec">
    <div class="container-xxl container">
        <div class="main-heading text-center">
            <h2>A Gentleman’s word</h2>
        </div>
        <div class="row gentelman-upper">
            <div class="col-lg-2 col-md-4 col-6">
                <div class="consult-div text-center">
                    <!-- <figure>
                        <img src="{{ asset('frontend_new/images/svg/backed.svg') }}" alt="backed" />
                    </figure> -->
                    <?xml version="1.0" standalone="no"?>
                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="90.000000pt" height="90.000000pt" viewBox="0 0 90.000000 90.000000"
                    preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,90.000000) scale(0.100000,-0.100000)" stroke="none">
                    <path d="M380 884 c-42 -18 -86 -59 -106 -96 -21 -41 -18 -136 6 -176 46 -75
                    116 -109 199 -98 150 20 216 209 113 320 -56 60 -142 80 -212 50z"/>
                    <path d="M359 474 c-30 -6 -46 -39 -75 -153 -16 -62 -15 -65 4 -80 65 -52 41
                    -141 -39 -141 -29 0 -42 6 -58 26 -29 37 -26 71 8 103 22 20 34 46 45 92 8 35
                    19 76 25 92 6 15 7 27 2 27 -23 0 -113 -96 -138 -148 -26 -52 -28 -66 -28
                    -172 l0 -115 345 0 345 0 3 94 c3 112 -14 181 -61 243 -31 40 -110 108 -126
                    108 -4 0 -4 -25 2 -57 6 -38 20 -70 42 -99 43 -56 59 -103 46 -137 -10 -26
                    -47 -57 -68 -57 -20 0 -15 28 6 40 43 23 31 89 -26 142 l-29 28 -40 -29 c-22
                    -17 -46 -42 -54 -56 -12 -23 -12 -30 5 -61 20 -37 14 -55 -13 -38 -29 18 -46
                    58 -38 89 7 27 66 92 115 125 20 14 21 19 11 69 -5 30 -12 57 -15 60 -7 6
                    -163 10 -196 5z"/>
                    </g>
                    </svg>
                    <div class="consult-heading">
                        <h4>backed by doctors <br>and pharmacist</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="consult-div text-center">
                    <!-- <figure>
                        <img src="{{ asset('frontend_new/images/svg/free-consultation.svg') }}"
                            alt="free-consultation" />
                    </figure> -->
                    <?xml version="1.0" standalone="no"?>
                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="90.000000pt" height="90.000000pt" viewBox="0 0 90.000000 90.000000"
                    preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,90.000000) scale(0.100000,-0.100000)" stroke="none">
                    <path d="M345 831 c-74 -34 -145 -130 -145 -194 0 -14 -7 -30 -15 -37 -18 -15
                    -21 -120 -3 -138 18 -18 56 -14 68 7 15 28 12 103 -4 127 -33 47 26 154 107
                    196 56 29 138 29 194 0 83 -43 139 -148 106 -198 -10 -16 -14 -40 -11 -74 3
                    -47 1 -50 -27 -62 -16 -7 -55 -13 -85 -13 -48 0 -55 -2 -55 -20 0 -23 36 -32
                    69 -17 39 17 124 42 143 42 32 0 43 21 43 81 0 38 -5 61 -15 69 -8 7 -15 24
                    -15 39 -1 66 -77 164 -152 196 -52 21 -153 19 -203 -4z"/>
                    <path d="M370 752 c-92 -46 -113 -184 -45 -297 42 -68 48 -83 42 -99 -3 -8
                    -42 -33 -85 -55 -104 -52 -142 -90 -142 -141 0 -87 95 -115 356 -108 210 6
                    264 28 264 108 0 56 -34 91 -135 136 -63 28 -87 44 -91 61 -5 17 -14 23 -42
                    25 -30 2 -38 8 -47 32 -8 24 -6 31 14 48 20 16 34 18 76 13 51 -7 52 -7 66 27
                    21 50 18 146 -7 188 -44 76 -143 103 -224 62z"/>
                    </g>
                    </svg>
                    <div class="consult-heading">
                        <h4>free online <br>consultations</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="consult-div text-center">
                    <!-- <figure>
                        <img src="{{ asset('frontend_new/images/svg/online.svg') }}" alt="online" />
                    </figure> -->
                    <?xml version="1.0" standalone="no"?>
                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="90.000000pt" height="90.000000pt" viewBox="0 0 90.000000 90.000000"
                    preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,90.000000) scale(0.100000,-0.100000)" stroke="none">
                    <path d="M283 870 c-79 -36 -101 -107 -52 -173 19 -26 20 -33 9 -73 -7 -25
                    -10 -47 -7 -51 4 -3 33 10 66 30 43 27 70 37 100 37 78 0 161 65 161 125 0 66
                    -84 125 -180 125 -33 0 -72 -8 -97 -20z"/>
                    <path d="M585 787 c10 -50 -16 -101 -70 -139 l-47 -33 29 -12 c15 -7 43 -12
                    62 -13 19 0 55 -13 83 -30 27 -17 53 -28 58 -25 4 3 3 23 -2 44 -9 35 -7 44
                    11 67 41 52 18 119 -52 153 -64 31 -79 29 -72 -12z"/>
                    <path d="M183 485 c-32 -32 -35 -39 -30 -78 11 -79 86 -119 157 -82 37 19 50
                    43 50 95 0 59 -42 100 -100 100 -35 0 -48 -6 -77 -35z"/>
                    <path d="M575 498 c-53 -47 -49 -134 8 -168 72 -44 153 -6 164 77 5 39 2 46
                    -30 78 -44 44 -100 49 -142 13z"/>
                    <path d="M155 256 c-79 -34 -133 -111 -138 -193 l-2 -48 244 -3 244 -2 -5 54
                    c-10 126 -105 206 -242 206 -39 -1 -84 -7 -101 -14z"/>
                    <path d="M523 245 l-52 -26 25 -48 c14 -26 28 -73 31 -104 l6 -57 173 0 c106
                    0 175 4 179 10 11 17 -15 117 -38 152 -12 18 -42 46 -66 63 -38 26 -52 30
                    -124 33 -72 3 -88 0 -134 -23z"/>
                    </g>
                    </svg>
                    <div class="consult-heading">
                        <h4>support chat with 1-1 <br>with medical experts</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="consult-div text-center">
                    <!-- <figure>
                        <img src="{{ asset('frontend_new/images/svg/pharmacy.svg') }}" alt="pharmacy" />
                    </figure> -->
                    <?xml version="1.0" standalone="no"?>
                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="90.000000pt" height="90.000000pt" viewBox="0 0 90.000000 90.000000"
                    preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,90.000000) scale(0.100000,-0.100000)" stroke="none">
                    <path d="M263 881 c-17 -11 -34 -29 -38 -40 -4 -13 -16 -21 -38 -23 -30 -3
                    -32 -6 -35 -46 -2 -28 3 -53 13 -68 15 -23 19 -24 148 -24 162 0 171 4 172 81
                    0 54 0 54 -33 57 -23 2 -36 10 -43 26 -13 28 -59 56 -91 56 -12 0 -37 -9 -55
                    -19z"/>
                    <path d="M52 770 c-18 -11 -37 -32 -42 -46 -13 -33 -13 -515 0 -548 5 -14 24
                    -35 42 -46 29 -18 51 -20 179 -20 l147 0 6 35 c4 19 18 48 32 65 l26 30 -155
                    0 c-161 0 -185 6 -171 44 5 14 30 16 198 16 l192 0 67 68 67 68 0 127 c0 152
                    -12 190 -64 212 -46 19 -46 19 -46 -10 0 -38 -25 -90 -51 -109 -19 -13 -50
                    -16 -162 -16 l-139 0 -34 34 c-28 28 -34 42 -34 75 0 47 -9 50 -58 21z m470
                    -242 c13 -35 0 -38 -202 -38 -199 0 -219 3 -206 35 7 20 401 22 408 3z m0
                    -120 c13 -35 0 -38 -202 -38 -199 0 -219 3 -206 35 7 20 401 22 408 3z"/>
                    <path d="M618 305 c-152 -155 -153 -156 -166 -217 -17 -85 -8 -93 81 -77 l66
                    12 151 152 c112 113 150 158 150 176 0 31 -77 109 -107 109 -14 0 -73 -52
                    -175 -155z"/>
                    </g>
                    </svg>
                    <div class="consult-heading">
                        <h4>uk registered <br>pharmacy</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="consult-div text-center">
                    <!-- <figure>
                        <img src="{{ asset('frontend_new/images/svg/medicine.svg') }}" alt="medicine" />
                    </figure> -->
                    <?xml version="1.0" standalone="no"?>
                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="90.000000pt" height="90.000000pt" viewBox="0 0 90.000000 90.000000"
                    preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,90.000000) scale(0.100000,-0.100000)" stroke="none">
                    <path d="M358 820 c-78 -41 -108 -112 -108 -252 l0 -88 200 0 200 0 0 83 c-1
                    103 -14 162 -47 205 -51 68 -168 92 -245 52z m117 -115 c0 -11 -11 -25 -25
                    -32 -13 -6 -28 -21 -32 -32 -9 -24 -43 -28 -52 -6 -8 22 9 60 36 79 31 22 73
                    17 73 -9z"/>
                    <path d="M250 333 c0 -103 12 -155 47 -202 51 -67 165 -91 243 -51 79 41 109
                    111 110 258 l0 82 -200 0 -200 0 0 -87z"/>
                    </g>
                    </svg>
                    <div class="consult-heading">
                        <h4>uk registered <br>medicines</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="consult-div text-center">
                    <!-- <figure>
                        <img src="{{ asset('frontend_new/images/svg/discreet.svg') }}" alt="discreet" />
                    </figure> -->
                    <?xml version="1.0" standalone="no"?>
                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="90.000000pt" height="90.000000pt" viewBox="0 0 90.000000 90.000000"
                    preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,90.000000) scale(0.100000,-0.100000)" stroke="none">
                    <path d="M381 801 l-54 -28 171 -88 172 -89 0 -100 0 -101 -31 -17 c-17 -10
                    -35 -18 -40 -18 -5 0 -9 42 -9 94 l0 95 -162 83 c-90 45 -170 86 -178 89 -9 4
                    -48 -9 -90 -30 l-75 -36 -3 -203 -2 -202 185 -92 185 -93 185 93 185 92 0 200
                    0 200 -180 90 c-99 49 -185 90 -192 90 -7 -1 -37 -14 -67 -29z"/>
                    </g>
                    </svg>
                    <div class="consult-heading">
                        <h4>free delivery and <br>discreet package</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- WORDS-SEC END  -->

<!-- MEDICAL-SEC START  -->
<section class="medical-sec pt-120 pb-120">
    <div class="container-xxl container">
        <div class="main-heading text-center">
            <h2>Get expert advise from medical professionals</h2>
            <p>we will pair you with expert medical providers to ensure the right treament for you</p>
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
                <a href="javascript:void(0);" class="trans-btn">get started</a>
            </div>
            <div class="col-lg-4 col-md-12">
                <figure class="mob">
                    <img src="{{ asset('frontend_new/images/mobile-gif.gif') }}" alt="mobile">
                </figure>
                <a href="javascript:void(0);" class="trans-btn">Chat now!</a>
            </div>
        </div>
        <div class="row cstm-row2">
            <div class="col-lg-8 col-6 d-flex justify-content-lg-center justify-content-end">
                <a href="javascript:void(0);" class="trans-btn">get started</a>
            </div>
            <div class="col-lg-4 col-6 d-flex justify-content-lg-center justify-content-start">
                <a href="javascript:void(0);" class="trans-btn">Chat now!</a>
            </div>
        </div>
    </div>
</section>
<!-- MEDICAL-SEC END  -->

<!-- QUESTIONS-SEC START  -->
<section class="questions-sec pb-120">
    <div class="container-xxl container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="main-heading">
                    <h2>Have <br>questions? <br>Get answers.</h2>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="accordion" id="questionaccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                What is agent?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#questionaccordion">
                            <div class="accordion-body">
                                Agent is a 100% online telehealth platform that connects patients to licensed
                                healthcare professionals in the UK. We offer support for conditions ranging from
                                sexual health to skincare, and hair care. Through our easy online process, anyone
                                can answer
                                a few questions, meet with a licensed medical provider, and then get a customised
                                treatment plan, including medical and over-the-counter products, shipped right to
                                their door.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How does agent work?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#questionaccordion">
                            <div class="accordion-body">
                                Agent is a 100% online telehealth platform that connects patients to licensed
                                healthcare professionals in the UK. We offer support for conditions ranging from
                                sexual health to skincare, and hair care. Through our easy online process, anyone
                                can answer
                                a few questions, meet with a licensed medical provider, and then get a customised
                                treatment plan, including medical and over-the-counter products, shipped right to
                                their door.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- QUESTIONS-SEC END  -->

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
<section class="gent-sec pt-120 pb-120">
    <div class="container-xxl container">
        <div class="main-heading">
            <h2>Gent hub</h2>
        </div>
        <div class="row gent-hub-upper">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="cards">
                    <figure>
                        <img src="{{ asset('frontend_new/images/gent-img1.png') }}" alt="gent-img1"
                            class="hideonhover" />
                        <span class="date-time">1/1/2023 / 20:23 PM</span>
                    </figure>
                    <div class="card-heading">
                        <p>Don't let erectile dysfunction affect your relationship!</p>
                        <div class="read-more">
                            <a href="javascript:void(0);" class="trans-btn">Read more</a>
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
                        <span class="date-time">1/1/2023 / 20:23 PM</span>
                    </figure>
                    <div class="card-heading">
                        <p>10 tips for grooming beard with easy tricks</p>
                        <div class="read-more d-flex justify-content-between align-items-center">
                            <a href="javascript:void(0);" class="trans-btn">Read more</a>
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
                        <span class="date-time">1/1/2023 / 20:23 PM</span>
                    </figure>
                    <div class="card-heading">
                        <p>Signs to watch out for hair loss</p>
                        <div class="read-more d-flex justify-content-between align-items-center">
                            <a href="javascript:void(0);" class="trans-btn">Read more</a>
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
                        <span class="date-time">1/1/2023 / 20:23 PM</span>
                    </figure>
                    <div class="card-heading">
                        <p>10 tips for grooming beard with easy tricks</p>
                        <div class="read-more d-flex justify-content-between align-items-center">
                            <a href="javascript:void(0);" class="trans-btn">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- GENT-SEC END  -->
<!-- <section class="swiper-slider-test pt-100 pb-100">
    <div class="container-xxl container">
        <div class="swiper-slider1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">Slide 1</div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 4</div>
                <div class="swiper-slide">Slide 5</div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>  
</section> -->




</body>

</html>@endsection