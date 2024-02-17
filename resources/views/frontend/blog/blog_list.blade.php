@extends('layouts.app')
@section('content')

<div class="main-div homepage-banner" style="background-image: url({{ asset('frontend_new/images/home-banner.png') }}); background-position: right center;">
    <div class="container-xxl container">
        <div class="top-div text-white">
            <h1>be the gent you <br>were born to be</h1>
            <h4>Let us help you with</h4>
            <div class="d-flex align-items-center">
                <a class="white-btn transparent-btn" href="{{ route('shop.index','hair-loss') }}">Hair 
                    <span>
                        <?xml version="1.0" encoding="utf-8"?>
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 715.3 599.5" style="enable-background:new 0 0 715.3 599.5;" xml:space="preserve">
                        <path d="M629.3,556.3c0,0,48.9-29.5,51.4-207.4c20.2,34.6,13.5,29.5,13.5,29.5s23.6-261.4-231-317c16-11,60.7-18.5,74.2-13.5
                            C509.6,31,405.9-0.1,308.1,39.5c0,0-9.3-16,6.7-22.8C291.3,7.4,169,18.4,153,120.4c-36.3,5.1-158.5,43.8-138.3,223.4
                            c0,0,16-26.1,21.1-20.2c1.7,29.5,2.5,172,70.8,267.3c-12.3-107.6-56.7-252.1,53.5-306.2c5.3-2.6,11.5-2.6,16.7,0.1
                            c78.8,41.8,102.8,48.1,161.6,48.1c60.7,0,153.4-42.2,153.4-42.2s43-14.4,66.6,11.8C582.1,328.7,630.2,385.1,629.3,556.3z"/>
                        </svg>
                    </span>
                </a>
                <a class="white-btn transparent-btn" href="{{ route('shop.index','beard') }}">Beard
                    <span>
                        <?xml version="1.0" encoding="utf-8"?>
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 368 309" style="enable-background:new 0 0 368 309;" xml:space="preserve">
                        <path d="M77.9,138.1c18.3-29.5,51.2-44.5,75.5-34.8c-6.1,3.3-12.3,6.3-18.1,10c-9.9,6.5-18,14.8-22.3,26.1
                            c-5,13.6-0.8,25.8,12.5,31.5c8.6,3.7,18,6.2,27.3,7.2c24.2,2.6,48.6,2.9,72.6-2.3c4.5-1,8.9-2.7,13.1-4.8
                            c12.8-6.4,17.4-17.8,12.5-31.3c-5.1-14.1-15.7-23.2-28.3-30.3c-3.9-2.2-8-3.9-13.2-6.4c16.2-3.7,30.6-2.2,44.7,4.1
                            c14.2,6.3,24.4,16.9,31.8,31.1c10.2-9.4,18.6-19.6,25.7-30.9c15.2-24.1,22.6-50.5,23.2-78.8c0.1-6.5,4.2-10.6,10.1-10.5
                            c5.7,0,10.1,4.1,10,10.2c-0.5,27.9,1,56-2.2,83.6c-7.8,65.3-40.4,116.8-93.9,155.1c-22,15.7-46.4,26.5-72.6,33.3
                            c-2.7,0.7-6,0.6-8.8-0.1c-61.5-16.7-108.4-52.5-140-107.7C19.4,161.1,10.1,127,9.1,90.8C8.5,70.4,8.9,50,8.9,29.5
                            c0-6.9,3.9-11.3,9.9-11.4C25.1,18,29,22.2,29.2,29.5c1.2,41.5,16.5,76.8,45.9,106.1C75.9,136.4,76.8,137.1,77.9,138.1z"/>
                        <path d="M186.9,160.3c-3.4,0.3-6.8,0.3-10.2-0.1c-11.4-1.2-22.9-2.1-34.2-4.1c-13-2.3-14.5-7.8-5.7-17.8c17.3-19.8,49.7-25,74.4-12
                            c7.8,4.1,14.8,9.2,19.4,16.9c2.8,4.8,0.6,10-4.7,11.5c-7.2,2.1-14.7,3.4-22.2,4.2L186.9,160.3z"/>
                        </svg>
                    </span>
                </a>
                <a class="white-btn transparent-btn" href="{{ url('sexMain') }}">Sex 
                    <span>
                        <?xml version="1.0" encoding="utf-8"?>
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 82.1 109.1" style="enable-background:new 0 0 82.1 109.1;" xml:space="preserve">
                        <path d="M79.1,3.5L79.1,3.5c-1-1-2.4-1.5-3.8-1.4c-0.1,0-0.3,0-0.4,0H59.7c-2.4,0-4.3,1.9-4.3,4.3v1.1c0,2.4,1.9,4.3,4.3,4.3h4.3
                            l-7.3,7.3c-5.8-4.5-13-7.1-20.9-7.1C16.8,12,1.6,27.3,1.6,46.1c0,17.3,12.8,31.5,29.4,33.8v6.3h-6.2c-2.6,0-4.7,2.1-4.7,4.7v0.2
                            c0,2.6,2.1,4.7,4.7,4.7H31v6.3c0,2.7,2.2,4.9,4.9,4.9h0c2.7,0,4.9-2.2,4.9-4.9v-6.3h6.2c2.6,0,4.7-2.1,4.7-4.7V91
                            c0-2.6-2.1-4.7-4.7-4.7h-6.2v-6.3c16.5-2.4,29.1-16.6,29.1-33.8c0-7.5-2.4-14.4-6.5-20l7.4-7.4v3.6c0,2.4,1.9,4.3,4.3,4.3h1.1
                            c2.4,0,4.3-1.9,4.3-4.3V7.2C80.6,5.8,80.1,4.5,79.1,3.5z M35.7,70.4c-13.4,0-24.3-10.9-24.3-24.3s10.9-24.3,24.3-24.3
                            S60,32.7,60,46.1S49.1,70.4,35.7,70.4z"/>
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

<section class="gent-sec blog-page-banner pt-120 pb-120">
    <div class="container-xxl container">
        <div class="main-heading">
            <h2>Gent hub</h2>
        </div>
        <div class="row gent-hub-upper">
          @php
             $blog = DB::table('blogs')->get();
          @endphp
           @foreach($blog as $blogs)
           <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="cards">
                    <figure>
                        <img src="{{ asset('images/') }}{{ '/'. $blogs->image}}" alt="gent-img2"
                            class="hideonhover" />
                        <img src="{{ asset('frontend_new/images/gent-img1.png') }}" class="showonhover"
                            alt="gent-img1" />
                        <span class="date-time">1/1/2023 / 20:23 PM</span>
                    </figure>
                    <div class="card-heading">
                        <p>{{ $blogs->title }}</p>
                        <div class="read-more d-flex justify-content-between align-items-center">
                            <a href="{{ route('blog_detail',$blogs->id) }}" class="trans-btn">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!--  <div class="col-lg-3 col-md-6 col-sm-12">
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
            </div> -->
        </div>
    </div>
</section>
@endsection