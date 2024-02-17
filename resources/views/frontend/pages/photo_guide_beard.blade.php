@extends('layouts.app')
@section('title', 'Photo Guidance')
@section('content')
    <div class="comon-padding"></div>
    <div class="body-main pages-content inner-pages-design">
        <div class="container-xxl container">
            <div class="inner-pages-wrap">

                <h1 class="mb-24">Beard - Photo Guidance</h1>


                <div class="row">
                    <div class="col-md-5">
                        <img style="border: 1px solid #ccc;" src="{{asset('frontend_new/images/guide3.webp')}}" alt="Photo Guide" class="img-fluid"/>
                    </div>
                    <div class="col-md-5 offset-md-2">
                        <img style="border: 1px solid #ccc;" src="{{asset('frontend_new/images/guide4.webp')}}" alt="Photo Guide" class="img-fluid"/>
                    </div>
                </div>



                <div class="row">
                    <div class="col-md-5">
                        <img style="border: 1px solid #ccc;" src="{{asset('frontend_new/images/guide5.webp')}}" alt="Photo Guide" class="img-fluid"/>
                    </div>
                    <div class="col-md-5 offset-md-2">
                        <img style="border: 1px solid #ccc;" src="{{asset('frontend_new/images/guide6.webp')}}" alt="Photo Guide" class="img-fluid"/>
                    </div>
                </div>






            </div>
        </div>
    </div>
@endsection
