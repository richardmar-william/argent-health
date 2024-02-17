@extends('layouts.app')
@section('title', 'About Us')
@section('meta-desc', 'Elevate your vitality with our men\'s supplements. Boost energy, enhance performance. Discover peak health at Agent!')
@section('content')
<div class="about-us-page">
    <!-- section1 -->
{{--    <section class="mission-sec full-wt"--}}
{{--        style="background-image: url({{ asset('storage/'.GetMetaData('section1_image',$page_type)) }});">--}}

        <section class="as-agent-sec full-wt"
                 style="background-color: #000; padding-top: 150px ">
        <div class="container-xxl container">
            <div class="main-mission-sec">
                <div class="pro_heading_desc">
                    <h2 class="text-white sans-heading">{{ GetMetaData('section1_title',$page_type) }}</h2>
                </div>
                <div class="">
                    <p class="about-desc">{{ GetMetaData('section1_content',$page_type) }}</p>
                </div>
                <br><br>
                <a class="pure-white-btn"
                    href="https://agenthealth.co.uk/questionnaireCat">{{ GetMetaData('section1_button_text',$page_type) }}</a>
            </div>
        </div>
    </section>
    <!-- /section1 -->
    <!-- SECTION2 -->
{{--    <section class="themselves-sec full-wt"--}}
{{--        style="background-image: url({{ asset('storage/'.GetMetaData('section2_image',$page_type)) }});">--}}
{{--        --}}
        <section class="themselves-sec full-wt"
        style="background-color: #2A2421;">
        <div class="container-xxl container">
            <div class="text-center">
                <div class="pro_heading_desc">
                    <h2 class="sans-heading text-white">{{ GetMetaData('section2_title',$page_type) }}</h2>
                </div>
                <p class="about-desc">{{ GetMetaData('section2_content',$page_type) }}</p>
            </div>
        </div>
    </section>
    <!-- /SECTION2 -->
    <!-- SECTION3 -->
{{--    <section class="as-agent-sec full-wt"--}}
{{--        style="background-image: url({{ asset('storage/'.GetMetaData('section3_image',$page_type)) }});"> --}}
{{--        --}}
        <section class="as-agent-sec full-wt"
        style="background-color: #000;">
        <div class="container-xxl container">
            <div class="">
                <div class="pro_heading_desc">
                    <h2 class="text-white">{{ GetMetaData('section3_title',$page_type) }}</h2>
                </div>
                <p class="about-desc">{{ GetMetaData('section3_content',$page_type) }}</p>
            </div>
        </div>
    </section>
    <!-- /SECTION3 -->
    <!-- SECTION4 -->
    <section class="pharmacy-sec">
        <div class="container-xxl container">
            <div class="main-pharmacy-sec">
                <div class="pro_heading_desc">
                    <h2>{{ GetMetaData('section4_title',$page_type) }}</h2>
                </div>
                <p>
                    <span>{{ GetMetaData('section4_heading1',$page_type) }}</span><br>
                    <!-- ClickPill Pharmacy, Ground Floor 5, Building 11<br>
                    Thames industrial park <br>
                    Princess Margaret Road <br>
                    East Tilbury <br>
                    Rm18 8RH<br> -->
                    {{ strip_tags(GetMetaData('section4_content1',$page_type)) }}
                </p>
                <p><span>{{ GetMetaData('section4_heading2',$page_type) }}</span><br>
                    <!-- Anthony Olayiwola<br>
                    Gphc registration number <br>
                    2217450<br> -->
                    {{ strip_tags(GetMetaData('section4_content2',$page_type)) }}
                </p>
                <a href="{{ GetMetaData('section4_button_url',$page_type) }}"
                    class="trans-btn">{{ GetMetaData('section4_button_text',$page_type) }}</a>
            </div>
        </div>
    </section>
    <!-- /SECTION4 -->
</div>

<!-- form end -->
@include('partials.frontend.above-footer')

@endsection

@section('script')
<script>
setTimeout(function() {
    $(".alert-dismissible").hide();
}, 5000)
</script>
@endsection
