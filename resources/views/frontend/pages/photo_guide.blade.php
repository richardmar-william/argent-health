@extends('layouts.app')
@section('title', 'Photo Guidance')
@section('content')
    <div class="comon-padding"></div>
    <div class="body-main pages-content inner-pages-design">
        <div class="container-xxl container">
            <div class="inner-pages-wrap">

                <h1 class="mb-24">Hair Loss - Photo Guidance</h1>


                <div class="row">
                    <div class="col-md-5 border-1">
                        <img src="{{asset('frontend_new/images/guide1.webp')}}" alt="Photo Guide" class="img-fluid" style="border: 1px solid #ccc;"/>
                    </div>
                    <div class="col-md-5 offset-md-2 border-1">
                        <img src="{{asset('frontend_new/images/guide2.webp')}}" alt="Photo Guide" class="img-fluid" style="border: 1px solid #ccc;"/>
                    </div>
                </div>







            </div>
        </div>
    </div>
@endsection
