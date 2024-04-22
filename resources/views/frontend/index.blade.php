@extends('layouts.app')
@section('title', 'Agent - UK’s Leading Men’s Health Pharmacy')
@section('meta-desc', 'We are the ultimate and leading UK online pharmacy for men striving to become the best versions of themselves. ')

@section('content')
    @php
        Session::forget('placed_order');
    @endphp
    <div class="main-div homepage-banner"
        style="background: #000000 url({{ asset('frontend_new/images/agent-home.webp') }}); background-position: right center; background-size: cover;">
        <div class="container-xxl container mb-60">
            <div class="home-div top-div text-white">
                <h1><span class="sans-heading">be the gent<br> you were</span> <br>born to be</h1>
                <h4>UK’s Leading Men’s Health Pharmacy</h4>
                <h4>Allow us to assist you with</h4>
                <div class="d-flex align-items-center">
                    <a class="white-btn" href="{{ route('shop.index', 'hair-loss') }}">Hair
                        <span>
                            <?xml version="1.0" encoding="utf-8"?>
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 715.3 599.5"
                                style="enable-background:new 0 0 715.3 599.5;" xml:space="preserve">
                                <path
                                    d="M629.3,556.3c0,0,48.9-29.5,51.4-207.4c20.2,34.6,13.5,29.5,13.5,29.5s23.6-261.4-231-317c16-11,60.7-18.5,74.2-13.5
                                C509.6,31,405.9-0.1,308.1,39.5c0,0-9.3-16,6.7-22.8C291.3,7.4,169,18.4,153,120.4c-36.3,5.1-158.5,43.8-138.3,223.4
                                c0,0,16-26.1,21.1-20.2c1.7,29.5,2.5,172,70.8,267.3c-12.3-107.6-56.7-252.1,53.5-306.2c5.3-2.6,11.5-2.6,16.7,0.1
                                c78.8,41.8,102.8,48.1,161.6,48.1c60.7,0,153.4-42.2,153.4-42.2s43-14.4,66.6,11.8C582.1,328.7,630.2,385.1,629.3,556.3z" />
                            </svg>
                        </span>
                    </a>
                    <a class="white-btn" href="{{ route('shop.index', 'beard') }}">Beard
                        <span>
                            <?xml version="1.0" encoding="utf-8"?>
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 368 309"
                                style="enable-background:new 0 0 368 309;" xml:space="preserve">
                                <path
                                    d="M77.9,138.1c18.3-29.5,51.2-44.5,75.5-34.8c-6.1,3.3-12.3,6.3-18.1,10c-9.9,6.5-18,14.8-22.3,26.1
                                c-5,13.6-0.8,25.8,12.5,31.5c8.6,3.7,18,6.2,27.3,7.2c24.2,2.6,48.6,2.9,72.6-2.3c4.5-1,8.9-2.7,13.1-4.8
                                c12.8-6.4,17.4-17.8,12.5-31.3c-5.1-14.1-15.7-23.2-28.3-30.3c-3.9-2.2-8-3.9-13.2-6.4c16.2-3.7,30.6-2.2,44.7,4.1
                                c14.2,6.3,24.4,16.9,31.8,31.1c10.2-9.4,18.6-19.6,25.7-30.9c15.2-24.1,22.6-50.5,23.2-78.8c0.1-6.5,4.2-10.6,10.1-10.5
                                c5.7,0,10.1,4.1,10,10.2c-0.5,27.9,1,56-2.2,83.6c-7.8,65.3-40.4,116.8-93.9,155.1c-22,15.7-46.4,26.5-72.6,33.3
                                c-2.7,0.7-6,0.6-8.8-0.1c-61.5-16.7-108.4-52.5-140-107.7C19.4,161.1,10.1,127,9.1,90.8C8.5,70.4,8.9,50,8.9,29.5
                                c0-6.9,3.9-11.3,9.9-11.4C25.1,18,29,22.2,29.2,29.5c1.2,41.5,16.5,76.8,45.9,106.1C75.9,136.4,76.8,137.1,77.9,138.1z" />
                                <path
                                    d="M186.9,160.3c-3.4,0.3-6.8,0.3-10.2-0.1c-11.4-1.2-22.9-2.1-34.2-4.1c-13-2.3-14.5-7.8-5.7-17.8c17.3-19.8,49.7-25,74.4-12
                                c7.8,4.1,14.8,9.2,19.4,16.9c2.8,4.8,0.6,10-4.7,11.5c-7.2,2.1-14.7,3.4-22.2,4.2L186.9,160.3z" />
                            </svg>
                        </span>
                    </a>
                    <a class="white-btn" href="{{ url('sexMain') }}">Sex
                        <span>
                            <?xml version="1.0" encoding="utf-8"?>
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 82.1 109.1"
                                style="enable-background:new 0 0 82.1 109.1;" xml:space="preserve">
                                <path d="M79.1,3.5L79.1,3.5c-1-1-2.4-1.5-3.8-1.4c-0.1,0-0.3,0-0.4,0H59.7c-2.4,0-4.3,1.9-4.3,4.3v1.1c0,2.4,1.9,4.3,4.3,4.3h4.3
                                l-7.3,7.3c-5.8-4.5-13-7.1-20.9-7.1C16.8,12,1.6,27.3,1.6,46.1c0,17.3,12.8,31.5,29.4,33.8v6.3h-6.2c-2.6,0-4.7,2.1-4.7,4.7v0.2
                                c0,2.6,2.1,4.7,4.7,4.7H31v6.3c0,2.7,2.2,4.9,4.9,4.9h0c2.7,0,4.9-2.2,4.9-4.9v-6.3h6.2c2.6,0,4.7-2.1,4.7-4.7V91
                                c0-2.6-2.1-4.7-4.7-4.7h-6.2v-6.3c16.5-2.4,29.1-16.6,29.1-33.8c0-7.5-2.4-14.4-6.5-20l7.4-7.4v3.6c0,2.4,1.9,4.3,4.3,4.3h1.1
                                c2.4,0,4.3-1.9,4.3-4.3V7.2C80.6,5.8,80.1,4.5,79.1,3.5z M35.7,70.4c-13.4,0-24.3-10.9-24.3-24.3s10.9-24.3,24.3-24.3
                                S60,32.7,60,46.1S49.1,70.4,35.7,70.4z" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <img loading="eager" style="margin-top: 20px;" src="{{ asset('frontend_new/images/mob-home-new.webp') }}"
            class="head-img img-fluid d-block d-md-none pt-50" alt="" width="100%" height="500" />
        <div class="arrow">
            <a class="arrow-down scrollDown" href="#agTreatmentsSec"><i class="fa fa-angle-double-down"
                    aria-hidden="true"></i></a>
        </div>
    </div>


    <section class="swiper-design mb-0 home-beard-slider2 pt-120 pb-170" >
        <div class="container-xxl container slider_container">
            <h2 class="big-heading zoom6">Get <span>personalised</span> treatments for</h2>
            <div class="swiper-slider0 mt-40">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="beared-item home-item">
                            <figure>
                                <img width="300" height="500" loading="lazy" src="{{ asset('frontend_new/images/hh.webp') }}" alt="slider-img1" />
                            </figure>
                            <figcaption class="text-white">

                                <div class="d-flex align-items-center">
                                    <h6>Hair loss</h6>
                                    <a href="{{ url('/shop/hair-loss') }}" class="black-link"><i
                                            class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </figcaption>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="beared-item home-item">
                            <figure>
                                <img width="300" height="500" loading="lazy" src="{{ asset('frontend_new/images/edh.webp') }}" alt="slider-img1" />
                            </figure>
                            <figcaption class="text-white">

                                <div class="d-flex align-items-center">
                                    <h6>Erectile Dysfunction</h6>
                                    <a href="{{ url('/shop/erectile-dysfunction') }}" class="black-link"><i
                                            class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </figcaption>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="beared-item home-item">
                            <figure>
                                <img width="300" height="500" loading="lazy" src="{{ asset('frontend_new/images/bgh.webp') }}" alt="slider-img1" />
                            </figure>
                            <figcaption class="text-white">

                                <div class="d-flex align-items-center">
                                    <h6>Beard Growth</h6>
                                    <a href="{{ url('/shop/beard') }}" class="black-link"><i class="fa fa-long-arrow-right"
                                            aria-hidden="true"></i></a>
                                </div>
                            </figcaption>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="beared-item home-item">
                            <figure>
                                <img width="300" height="500" loading="lazy" src="{{ asset('frontend_new/images/peh.webp') }}" alt="slider-img1" />
                            </figure>
                            <figcaption class="text-white">

                                <div class="d-flex align-items-center">
                                    <h6>Premature Ejaculation</h6>
                                    <a href="{{ url('/shop/premature-ejaculation') }}" class="black-link"><i
                                            class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </figcaption>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>


    @php
        use App\Models\Category;
        $category = Category::orderBy('id', 'desc')->get();
        foreach ($category as $cat) {
        }
    @endphp


    {{-- <section id="agTreatmentsSec" class="treatments-sec pt-120 pb-120"> --}}
    {{--    <div class="container-xxl container"> --}}
    {{--        <div class="main-heading text-center"> --}}
    {{--            <h2>Personalised Healthcare for Gentlemen</h2> --}}
    {{--        </div> --}}

    {{--          --}}
    {{--            <div class="row"> --}}
    {{--                <div class="col-lg-3 col-6"> --}}
    {{--                    <div class="cards text-center"> --}}
    {{--                        <figure> --}}
    {{--                            <img src="{{ asset('frontend_new/images/hair-loss-home.JPG') }}" alt="Hair-Loss" /> --}}
    {{--                        </figure> --}}
    {{--                        <div class="card-heading"> --}}
    {{--                            <h4>Hair Loss</h4> --}}
    {{--                        </div> --}}
    {{--                        <a href="{{ url('/shop/hair-loss'); }}" class="black-link"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> --}}
    {{--                    </div> --}}
    {{--                </div> --}}
    {{--                <div class="col-lg-3 col-6"> --}}
    {{--                    <div class="cards text-center"> --}}
    {{--                        <figure> --}}
    {{--                            <img src="{{ asset('frontend_new/images/beared-img4.png') }}" alt="beared-img4" /> --}}
    {{--                        </figure> --}}
    {{--                        <div class="card-heading"> --}}
    {{--                            <h4>Erectile Dysfunction</h4> --}}
    {{--                        </div> --}}
    {{--                        <a href="{{ url('/shop/erectile-dysfunction'); }}" class="black-link"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> --}}
    {{--                    </div> --}}
    {{--                </div> --}}
    {{--                <div class="col-lg-3 col-6"> --}}
    {{--                    <div class="cards text-center"> --}}
    {{--                        <figure> --}}
    {{--                            <img src="{{ asset('frontend_new/images/Beard-Growth-other.JPG') }}" alt="Beard-Growth" /> --}}
    {{--                        </figure> --}}
    {{--                        <div class="card-heading"> --}}
    {{--                            <h4>Beard Growth</h4> --}}
    {{--                        </div> --}}
    {{--                        <a href="{{ url('/shop/beard'); }}" class="black-link"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> --}}
    {{--                    </div> --}}
    {{--                </div> --}}
    {{--                <div class="col-lg-3 col-6"> --}}
    {{--                    <div class="cards text-center"> --}}
    {{--                        <figure> --}}
    {{--                            <img src="{{ asset('frontend_new/images/beared-img3.png') }}" alt="beared-img3" /> --}}
    {{--                        </figure> --}}
    {{--                        <div class="card-heading"> --}}
    {{--                            <h4>Premature Ejaculation</h4> --}}
    {{--                        </div> --}}
    {{--                        <a href="{{ url('/shop/premature-ejaculation'); }}" class="black-link"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> --}}
    {{--                    </div> --}}
    {{--                </div> --}}
    {{--            </div> --}}

    {{--    </div> --}}
    {{-- </section> --}}
    <!-- TREATMENTS-SEC END  -->

    <!-- BLACK-SEC START  -->
    <section class="black-sec mt-50">
        <div class="container-xxl container">
            <div class="row">
                <div class="col-md-8 col  col-12 unsure-text">
                    <div class="unsure-div text-white">
                        <h2>Unsure about <span>the best treatment</span> for you?</h2>
                    </div>
                    <a class="pure-white-btn mt-30" href="{{ url('/questionnaireCat') }}">Get a Recommendation</a>
                </div>

            </div>

        </div>
    </section>
    <!-- BLACK-SEC END  -->

    <!-- CONSULTAION-SEC START  -->
    {{-- <section class="consultation-sec consultation-sec-v2 pt-120"> --}}
    {{--    <div class="container-xxl container"> --}}
    {{--        <div class="row cstm-row backed-upper"> --}}
    {{--            <div class="col-lg-3 col-6"> --}}
    {{--                <div class="consult-div d-flex align-items-center"> --}}
    {{--                    <!-- <figure> --}}
    {{--                        <img src="{{ asset('frontend_new/images/svg/backed.svg') }}" alt="backed" /> --}}
    {{--                    </figure> --> --}}
    {{--                    <?xml version="1.0" standalone="no"?> --}}
    {{--                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN" --}}
    {{--                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd"> --}}
    {{--                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" --}}
    {{--                    width="65.000000pt" height="65.000000pt" viewBox="0 0 65.000000 65.000000" --}}
    {{--                    preserveAspectRatio="xMidYMid meet"> --}}

    {{--                    <g transform="translate(0.000000,65.000000) scale(0.100000,-0.100000)" stroke="none"> --}}
    {{--                    <path d="M263 634 c-94 -47 -100 -190 -10 -244 90 -55 208 9 209 114 2 107 --}}
    {{--                    -105 176 -199 130z"/> --}}
    {{--                    <path d="M270 342 c-31 -6 -36 -12 -52 -62 -19 -63 -23 -110 -8 -110 6 0 15 --}}
    {{--                    -11 22 -25 9 -19 8 -29 -6 -50 -20 -31 -58 -33 -86 -5 -26 26 -25 46 3 74 17 --}}
    {{--                    18 62 144 53 153 -1 1 -19 -11 -39 -28 -60 -49 -80 -99 -81 -199 l-1 -85 250 --}}
    {{--                    0 250 0 -1 85 c0 67 -5 94 -22 127 -20 37 -86 103 -104 103 -19 0 -4 -60 27 --}}
    {{--                    -110 19 -30 35 -64 35 -77 0 -23 -31 -63 -49 -63 -20 0 -21 19 -1 30 29 15 25 --}}
    {{--                    54 -9 92 l-29 32 -36 -27 c-37 -29 -47 -62 -24 -85 16 -16 1 -29 -20 -16 -42 --}}
    {{--                    27 -19 99 44 136 32 19 34 23 28 57 -4 20 -9 39 -13 43 -10 10 -93 17 -131 10z"/> --}}
    {{--                    </g> --}}
    {{--                    </svg> --}}
    {{--                    <div class="consult-heading"> --}}
    {{--                        <h4>Online prescriptions <br> from UK pharmacy</h4> --}}
    {{--                    </div> --}}
    {{--                </div> --}}
    {{--            </div> --}}
    {{--            <div class="col-lg-3 col-6"> --}}
    {{--                <div class="consult-div d-flex align-items-center"> --}}
    {{--                    <!-- <figure> --}}
    {{--                        <img src="{{ asset('frontend_new/images/svg/discreet.svg') }}" alt="discreet" /> --}}
    {{--                    </figure> --> --}}
    {{--                    <?xml version="1.0" standalone="no"?> --}}
    {{--                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN" --}}
    {{--                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd"> --}}
    {{--                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" --}}
    {{--                    width="70.000000pt" height="70.000000pt" viewBox="0 0 70.000000 70.000000" --}}
    {{--                    preserveAspectRatio="xMidYMid meet"> --}}

    {{--                    <g transform="translate(0.000000,70.000000) scale(0.100000,-0.100000)" stroke="none"> --}}
    {{--                    <path d="M301 626 l-44 -23 64 -36 c35 -19 94 -50 132 -68 l67 -33 0 -82 c0 --}}
    {{--                    -77 -1 -81 -25 -92 -14 -7 -28 -12 -30 -12 -2 0 -5 33 -7 73 l-3 72 -135 72 --}}
    {{--                    -135 72 -60 -32 -60 -32 0 -155 0 -155 143 -73 142 -73 143 73 142 73 0 155 0 --}}
    {{--                    155 -140 72 c-77 40 -142 72 -145 72 -3 0 -25 -10 -49 -23z"/> --}}
    {{--                    </g> --}}
    {{--                    </svg> --}}
    {{--                    <div class="consult-heading"> --}}
    {{--                        <h4>Discreet packaging <br>  and fast delivery --}}
    {{--                        </h4> --}}
    {{--                    </div> --}}
    {{--                </div> --}}
    {{--            </div> --}}
    {{--            <div class="col-lg-3 col-6"> --}}
    {{--                <div class="consult-div d-flex align-items-center"> --}}
    {{--                    <!-- <figure> --}}
    {{--                        <img src="{{ asset('frontend_new/images/svg/online.svg') }}" alt="online" /> --}}
    {{--                    </figure> --> --}}
    {{--                    <?xml version="1.0" standalone="no"?> --}}
    {{--                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN" --}}
    {{--                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd"> --}}
    {{--                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" --}}
    {{--                    width="65.000000pt" height="65.000000pt" viewBox="0 0 65.000000 65.000000" --}}
    {{--                    preserveAspectRatio="xMidYMid meet"> --}}

    {{--                    <g transform="translate(0.000000,65.000000) scale(0.100000,-0.100000)" stroke="none"> --}}
    {{--                    <path d="M230 638 c-71 -19 -103 -84 -65 -134 9 -13 12 -31 8 -58 l-6 -40 46 --}}
    {{--                    27 c25 15 57 27 72 27 14 0 44 9 65 20 115 59 12 194 -120 158z"/> --}}
    {{--                    <path d="M420 553 c-1 -42 -12 -61 -53 -88 -32 -21 -22 -35 26 -35 16 0 49 --}}
    {{--                    -12 73 -26 l45 -27 -6 36 c-5 25 -2 42 10 60 22 34 10 74 -29 98 -49 30 -66 --}}
    {{--                    25 -66 -18z"/> --}}
    {{--                    <path d="M150 367 c-52 -26 -52 -105 0 -132 80 -41 149 57 85 120 -27 28 -48 --}}
    {{--                    31 -85 12z"/> --}}
    {{--                    <path d="M415 355 c-64 -63 5 -161 84 -121 31 17 41 34 41 72 0 33 -42 74 -75 --}}
    {{--                    74 -14 0 -37 -11 -50 -25z"/> --}}
    {{--                    <path d="M130 190 c-45 -11 -107 -77 -115 -124 -13 -67 -14 -67 172 -64 l168 --}}
    {{--                    3 3 35 c3 44 -32 108 -73 131 -37 22 -109 30 -155 19z"/> --}}
    {{--                    <path d="M409 191 c-14 -5 -35 -14 -47 -20 -22 -11 -22 -13 -5 -44 9 -18 19 --}}
    {{--                    -52 22 -77 l6 -45 125 0 125 0 3 28 c5 39 -32 108 -70 134 -37 24 -119 37 --}}
    {{--                    -159 24z"/> --}}
    {{--                    </g> --}}
    {{--                    </svg> --}}
    {{--                    <div class="consult-heading"> --}}
    {{--                        <h4>Medically backed<br> treatments</h4> --}}
    {{--                    </div> --}}
    {{--                </div> --}}
    {{--            </div> --}}
    {{--            <div class="col-lg-3 col-6"> --}}
    {{--                <div class="consult-div d-flex align-items-center"> --}}
    {{--                    <!-- <figure> --}}
    {{--                        <img src="{{ asset('frontend_new/images/svg/on-time.svg') }}" alt="on-time" /> --}}
    {{--                    </figure> --> --}}
    {{--                    <?xml version="1.0" standalone="no"?> --}}
    {{--                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN" --}}
    {{--                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd"> --}}
    {{--                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" --}}
    {{--                    width="65.000000pt" height="65.000000pt" viewBox="0 0 65.000000 65.000000" --}}
    {{--                    preserveAspectRatio="xMidYMid meet"> --}}

    {{--                    <g transform="translate(0.000000,65.000000) scale(0.100000,-0.100000)" stroke="none"> --}}
    {{--                    <path d="M340 641 c-152 -50 -222 -206 -152 -342 86 -170 312 -184 419 -26 --}}
    {{--                    102 152 0 360 -184 373 -32 2 -69 0 -83 -5z m82 -163 l3 -53 53 -3 c37 -2 52 --}}
    {{--                    -7 52 -18 0 -11 -16 -14 -70 -14 l-70 0 0 70 c0 54 3 70 14 70 11 0 16 -15 18 --}}
    {{--                    -52z"/> --}}
    {{--                    <path d="M46 361 c-38 -39 -44 -50 -33 -59 10 -9 23 -1 61 37 38 39 44 50 33 --}}
    {{--                    59 -10 9 -23 1 -61 -37z"/> --}}
    {{--                    <path d="M70 239 c-49 -52 -53 -62 -30 -67 23 -4 102 81 94 101 -9 23 -13 21 --}}
    {{--                    -64 -34z"/> --}}
    {{--                    <path d="M106 131 c-46 -47 -54 -60 -43 -69 10 -9 25 1 71 47 46 47 54 60 43 --}}
    {{--                    69 -10 9 -25 -1 -71 -47z"/> --}}
    {{--                    <path d="M212 97 c-42 -42 -50 -61 -33 -71 13 -9 115 89 107 102 -13 21 -31 --}}
    {{--                    13 -74 -31z"/> --}}
    {{--                    <path d="M336 71 c-38 -39 -44 -50 -33 -59 10 -9 23 -1 61 37 38 39 44 50 33 --}}
    {{--                    59 -10 9 -23 1 -61 -37z"/> --}}
    {{--                    </g> --}}
    {{--                    </svg> --}}
    {{--                    <div class="consult-heading"> --}}
    {{--                        <h4>UK registered <br> medicines --}}
    {{--                        </h4> --}}
    {{--                    </div> --}}
    {{--                </div> --}}
    {{--            </div> --}}
    {{--        </div> --}}
    {{--    </div> --}}
    {{-- </section> --}}
    <!-- CONSULTAION-SEC END  -->

    <!-- HANDS-SEC START  -->
    <section class="hands-sec pt-120 pb-120">
        <div class="container-xxl container">
            <div class="row mb-20">
                <div class="col-12 col-md-6">
                    <h2 class="big-heading">Your health is in <span>great hands</span></h2>
                    <p style="line-height: 1.7;">Agent, the ultimate online pharmacy for men striving to become the best
                        versions of themselves. Our team of experts work together to provide tailored, effective treatments
                        to suit your unique needs using a simple, online process. </p>
                </div>
            </div>
            <div class="row free-consultation-upper">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="hands-card text-center">
                        <figure>
                            <img loading="lazy" height="280" width="224" src="{{ asset('frontend_new/images/video3.webp') }}" alt="free-consultation" />
{{--                            <video playsinline muted preload="auto" autoplay loop="loop" >--}}
{{--                                <source src="{{ asset('frontend_new/images/video3.webm') }}" type="video/webm">--}}
{{--                            </video>--}}


                        </figure>
                        <!-- <video controls autoplay loop muted>
                            <source src="{{ asset('frontend_new/images/free-consultation.mov') }}" type="video/mp4">
                            <source src="{{ asset('frontend_new/images/free-consultation.ogg') }}" type="video/ogg">
                        </video> -->
                        <div class="card-heading">
                            <h4>Free Discreet Consultations</h4>
                            <p>We’re all gentlemen here! Complete a concise <br>medical questionnaire, and our men’s health
                                experts<br> will tailor a bespoke treatment for you.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="hands-card text-center">
                        <figure>
{{--                            <video playsinline muted preload="auto" autoplay loop="loop" >--}}
{{--                                <source src="{{ asset('frontend_new/images/video1.webm') }}" type="video/webm">--}}
{{--                            </video>--}}
                            <img loading="lazy" height="280" width="224" src="{{ asset('frontend_new/images/video1.webp') }}" alt="free" />

                        </figure>

                        <!-- <video controls autoplay loop muted>
                            <source src="{{ asset('frontend_new/images/avoid-long-waiting-times.mov') }}" type="video/mp4">
                            <source src="{{ asset('frontend_new/images/avoid-long-waiting-times.ogg') }}" type="video/ogg">
                        </video> -->
                        <div class="card-heading">
                            <h4>Skip the Queues!</h4>
                            <p>Wave goodbye to stuffy waiting rooms and awkward conversations, connect with experts online
                                for quick prescriptions, with fast and free delivery to your door.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="hands-card text-center">
                        <figure>
{{--                            <video playsinline muted preload="auto" autoplay loop="loop" >--}}
{{--                                <source src="{{ asset('frontend_new/images/video2.webm') }}" type="video/webm">--}}
{{--                            </video>--}}
                        <img loading="lazy" height="280" width="224" src="{{ asset('frontend_new/images/video2.webp') }}" alt="free" />
                        </figure>
                        <!-- <video controls autoplay loop muted>
                            <source src="{{ asset('frontend_new/images/continuous-support.mov') }}" type="video/mp4">
                            <source src="{{ asset('frontend_new/images/continuous-support.ogg') }}" type="video/ogg">
                        </video> -->
                        <div class="card-heading">
                            <h4>Online support </h4>
                            <p>We offer accessible, long-term medical support tailored to your needs, with skilled
                                healthcare experts to assist you every step of the way, at the touch of a button.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HANDS-SEC END  -->

    <!-- BEARED-SEC START  -->
    <section class="beared-sec pt-100 swiper-design mb-50 home-beard-slider ">
        <div class="container-xxl container slider_container">
            <div class="swiper-slider1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="beared-item">
                            <figure>
                                <img loading="lazy" src="{{ asset('frontend_new/images/slider-img1.webp') }}" alt="slider-img1" width="543" height="507" />
                            </figure>
                            <figcaption class="text-white">
                                <h6>Gentlemen Always Finish Last</h6>
                                <p>Treatments for premature ejaculation — minus the awkward conversations with your family
                                    doctor.</p>
                                <div class="beared-btns d-flex align-items-center">
                                    <a class="pure-white-btn" href="{{ url('questionnaire/33') }}">Start Visit</a>
                                    <a class="white-trans-btn" href="{{ url('/shop/premature-ejaculation') }}">Learn
                                        more</a>
                                </div>
                            </figcaption>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="beared-item">
                            <figure>
                                <img loading="lazy" src="{{ asset('frontend_new/images/slider-img2.webp') }}" alt="slider-img2" width="543" height="507" />
                            </figure>
                            <figcaption class="text-white">
                                <h6>Grow Thicker Fuller Beard</h6>
                                <p>Thicker, fuller beards are only a free consultation away, we’ve got you covered.</p>
                                <div class="beared-btns d-flex align-items-center">
                                    <a class="pure-white-btn" href="{{ url('questionnaire/31') }}">Start Visit</a>
                                    <a class="white-trans-btn" href="{{ url('/shop/beard') }}">Learn more</a>
                                </div>
                            </figcaption>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="beared-item">
                            <figure>
                                <img loading="lazy" src="{{ asset('frontend_new/images/slider-img4.webp') }}" alt="slider-img3" width="543" height="507" />
                            </figure>
                            <figcaption class="text-white">
                                <h6>Reinvent Your Hair Story Today</h6>
                                <p>Halt hair loss in its tracks and fuel regrowth with our clinically backed treatments</p>
                                <div class="beared-btns d-flex align-items-center">
                                    <a class="pure-white-btn" href="{{ url('/questionnaire/30') }}">Start Visit</a>
                                    <a class="white-trans-btn" href="{{ url('/shop/hair-loss') }}">Learn more</a>
                                </div>
                            </figcaption>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="beared-item">
                            <figure>
                                <img loading="lazy" src="{{ asset('frontend_new/images/slider-img3.webp') }}" alt="slider-img4" width="543" height="507" />
                            </figure>
                            <figcaption class="text-white">
                                <h6>Harden Your Resolve in the Bedroom</h6>
                                <p>Gentlemen don’t let erectile dysfunction get in the way of romance</p>
                                <div class="beared-btns d-flex align-items-center">
                                    <a class="pure-white-btn" href="{{ url('/questionnaire/32') }}">Start Visit</a>
                                    <a class="white-trans-btn" href="{{ url('/shop/erectile-dysfunction') }}">Learn
                                        more</a>
                                </div>
                            </figcaption>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="beared-item">
                            <figure>
                                <img loading="lazy" src="{{ asset('frontend_new/images/slider-img5.webp') }}" alt="slider-img5" width="543" height="507" />
                            </figure>
                            <figcaption class="text-white">
                                <h6>If unsure - get a tailor made <br>treatment for you today</h6>
                                <div class="beared-btns d-flex align-items-center">
                                    <a class="pure-white-btn" href="{{ url('/questionnaireCat') }}">Start Visit</a>
                                    <a class="white-trans-btn" href="{{ url('/questionnaireCat') }}">Learn more</a>
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


    <!-- WORDS-SEC START  -->
    <section class="consultation-sec words-sec dark-black-bg ptb-70" style="padding-bottom: 100px;">
        <div class="container-xxl container">

            <div class="row text-center">
                <div class="col-md-6 offset-md-3">
                    <h2 class="big-heading text-white pb-40 p-4">Our <span>Gentlemen’s</span> agreement </h2>

                </div>
            </div>
            <div class="row gentelman-upper pt-20">
                <div class="col-lg-2 col-md-4 col-6 text-center">
                    <div class="consult-div text-center">
                        <figure>
                            <img loading="lazy" src="{{ asset('frontend_new/images/b2.jpeg') }}" alt="backed" />
                        </figure>
                    </div>
                    <div class="consult-heading text-white text-center">
                        <h4> Backed by Doctors and pharmacists</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 text-center">
                    <div class="consult-div text-center">
                        <figure>
                            <img loading="lazy" src="{{ asset('frontend_new/images/free-consult.png') }}" alt="backed" />
                        </figure>
                    </div>
                    <div class="consult-heading text-white text-center">
                        <h4> Free Online Consultations</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 text-center">
                    <div class="consult-div text-center">
                        <figure>
                            <img loading="lazy" src="{{ asset('frontend_new/images/support.png') }}" alt="backed" />
                        </figure>
                    </div>
                    <div class="consult-heading text-white text-center">
                        <h4> One-To-One Support From Men’s Health Experts</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 text-center">
                    <div class="consult-div text-center">
                        <figure>
                            <img loading="lazy" src="{{ asset('frontend_new/images/uk-registered.png') }}" alt="backed" />
                        </figure>
                    </div>
                    <div class="consult-heading text-white text-center">
                        <h4> Uk Registered Pharmacy</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 text-center">
                    <div class="consult-div text-center">
                        <figure>
                            <img  loading="lazy" src="{{ asset('frontend_new/images/licensed.png') }}" alt="backed" />
                        </figure>
                    </div>
                    <div class="consult-heading text-white text-center">
                        <h4> Licensed And Registered Medicines</h4>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 text-center">
                    <div class="consult-div text-center">
                        <figure>
                            <img loading="lazy" src="{{ asset('frontend_new/images/lock.png') }}" alt="backed" />
                        </figure>
                    </div>
                    <div class="consult-heading text-white text-center">
                        <h4> Discretion Guaranteed</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- WORDS-SEC END  -->


    <!-- OTHER-SEC START  -->
    <section class="other-sec pt-120 pb-120 swiper-design">
        <div class="container-xxl container mb-30">
            <div class="row text-center">
                <div class="col-md-6 offset-md-3">
                    <h2 class="big-heading">Other Gentlemen <span>Benefited</span> From </h2>
                </div>
            </div>
        </div>
        <div class="container-xxl container slider_container">
            <div class="swiper-slider2 button-width">
                <div class="swiper-wrapper">
                    @php $category = Category::orderBy('id','desc')->get();  @endphp
                    <div class="swiper-slide">
                        <div class="item cards other-item">
                            <figure>
                                <img loading="lazy" src="{{ asset('frontend_new/images/Beard_Growth_treatments-op.webp') }}"
                                         alt="Beard-Growth" width="300" height="300"/>
                            </figure>
                            <figcaption>
                                <p>Beard Growth<br> Treatments</p>

                                <div class="stars">
                                    <p class="p-0 price-text">from £18.33/month</p>
                                </div>
                                <a href="{{ url('/shop/beard') }}" class="trans-btn black-btn">See details</a>
                            </figcaption>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="item cards other-item">
                            <figure>
                                <img loading="lazy" src="{{ asset('frontend_new/images/Hair_Loss_treatments.webp') }}"
                                    alt="hair-loss" width="300" height="300" />
                            </figure>
                            <figcaption>
                                <p>Hair Loss<br> Treatments
                                </p>
                                <div class="stars">
                                    <p class="p-0 price-text">£16.67/month</p>

                                </div>
                                <a href="{{ url('/shop/hair-loss') }}" class="trans-btn black-btn">See details</a>
                            </figcaption>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item cards other-item">
                            <figure>
                                <img loading="lazy" src="{{ asset('frontend_new/images/Premature_Ejaculation_treatments.webp') }}"
                                    alt="beared-img3" width="300" height="300" />
                            </figure>
                            <figcaption>
                                <p>Premature Ejaculation <br>Treatments</p>
                                <div class="stars">
                                    <p class="p-0 price-text"> £5.81/Pill</p>

                                </div>
                                <a href="{{ url('/shop/premature-ejaculation') }}" class="trans-btn black-btn">See
                                    details</a>
                            </figcaption>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="item cards other-item">
                            <figure>
                                <img loading="lazy" width="300" height="300" src="{{ asset('frontend_new/images/Viagra_connect.webp') }}" alt="beared-img4" />
                            </figure>
                            <figcaption>
                                <p>Viagra <br>Connect ©</p>
                                <div class="stars">
                                    <p class="p-0 price-text">£8.75/Pill</p>

                                </div>
                                <a href="{{ url('/shop/erectile-dysfunction') }}" class="trans-btn black-btn">See
                                    details</a>
                            </figcaption>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="item cards other-item">
                            <figure>
                                <img loading="lazy" width="300" height="300" src="{{ asset('frontend_new/images/full-beard-kit.webp') }}"
                                    alt="beared-img5" />
                            </figure>
                            <figcaption>
                                <p>Beard <br>Kit</p>
                                <div class="stars">
                                    <p class="p-0 price-text">from £18.33/month</p>

                                </div>
                                <a href="{{ url('/shop/beard') }}" class="trans-btn black-btn">See details</a>
                            </figcaption>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="item cards other-item">
                            <figure>
                                <img loading="lazy" width="300" height="300" src="{{ asset('frontend_new/images/Hair_care_vitamins.webp') }}" alt="beared-img5" />
                            </figure>
                            <figcaption>
                                <p>Hair <br>Vitamins</p>
                                <div class="stars">
                                    <p class="p-0 price-text">from £11.67/month</p>

                                </div>
                                <a href="{{ url('/shop/hair-loss') }}" class="trans-btn black-btn">See details</a>
                            </figcaption>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- OTHER-SEC END  -->



    <!-- MEDICAL-SEC START  -->
    <section class="medical-advice pt-120 pb-120  ">
        <div class="container-xxl container">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="row">
                        <div class="col-lg-9">
                            <h2 class="big-heading text-white">Get <span>Expert</span> Medical <span>Advice</span></h2>
                            <p class="text-white mb-45">Let’s converse like true gentlemen. Talk to us about your health
                                issues, and we’ll connect you with the medical professional best placed to help.</p>

                            <a href="{{ url('/contact-us') }}" class="pure-white-btn mb-50">Chat now!</a>

                            <p class="text-white pt-50">Do you need help? <a href="{{ url('/contact-us') }}"
                                    class="text-white">Contact Us</a></p>
                        </div>
                    </div>


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
                    <div class="mb-45">
                        <h2 class="big-heading">Your Questions <span>Answered</span></h2>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="accordion" id="questionaccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    What Is Agent?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#questionaccordion">
                                <div class="accordion-body">
                                    Agent is an online pharmacy that specialises in treatments for men’s health issues,
                                    however our mission extends far beyond that. we're a united community, who share the
                                    belief that true greatness transcends mere appearances. true greatness emanates from our
                                    inner well-being, and that all begins with maintaining good health.<br>
                                    Agent is a completely discreet, online platform, offering a modern approach, for the
                                    modern man.


                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How Does It Work?

                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#questionaccordion">
                                <div class="accordion-body">
                                    Your Agent experience begins with a quick and free consultation. Within minutes, we will
                                    determine the most suitable registered clinician to review your details. After a brief
                                    assessment, we will provide you with the most appropriate treatment and/or expert
                                    advice. Your prescribed treatments will then be discreetly and promptly delivered to
                                    your doorstep, all with a simple click.

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- QUESTIONS-SEC END  -->

    @include('partials.frontend.above-footer')

    <!-- BLACK-SEC2 START  -->
    <section class="black-sec home-free-cnslt">
        <div class="container-xxl container">
            <div class="unsure-div d-flex justify-content-between align-items-center flex-wrap-wrap">
                <div class="text-white">
                    <h2 class="footer-h2">Start Your Free Consultation Today</h2>
                    <p>Complete our quick health questionnaire to get advice from our top men’s health experts</p>
                </div>
                <a class="pure-white-btn mt-10" href="{{ url('/questionnaireCat') }}">Get Started</a>
            </div>
        </div>
    </section>
    <!-- BLACK-SEC2 END  -->

    <!-- GENT-SEC START  -->
    <!-- <section class="gent-sec pt-120 pb-120">
        <div class="container-xxl container">
            <div class="main-heading">
                <h2>Gent hub</h2>
            </div>
            <div class="row gent-hub-upper">


               @php
                   $blog = DB::table('blogs')
                       ->orderBy('id', 'DESC')
                       ->take(4)
                       ->get();
               @endphp
               @foreach ($blog as $blogs)
    <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="cards">
                        <figure>
                            <img src="{{ asset('images/') }}{{ '/' . $blogs->image }}" alt="gent-img2"
                                class="hideonhover" />
                            <img src="{{ asset('frontend_new/images/gent-img1.png') }}" class="showonhover"
                                alt="gent-img1" />
                            <span class="date-time">{{ $blogs->updated_at }} PM</span>
                        </figure>
                        <div class="card-heading">
                            <p>{{ $blogs->title }}</p>
                            <div class="read-more d-flex justify-content-between align-items-center">
                                <a href="{{ route('blog_detail', $blogs->id) }}" class="trans-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
    @endforeach

            </div>
        </div>
    </section> -->
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
<script>
    $(document).ready(function () {
        new Swiper(".swiper-slider0", {
            loop: true,
            // nextButton: ".swiper-button-next",
            // prevButton: ".swiper-button-prev",
            pagination: '.swiper-pagination',
            paginationClickable: true,
            slidesPerView: 3.2,
            spaceBetween: 20,
            breakpoints: {
                1199: {
                    slidesPerView: 2.2,
                },
                575: {
                    slidesPerView: 2.2,
                },
            }
        });
    });
</script>


    </body>

</html>@endsection
