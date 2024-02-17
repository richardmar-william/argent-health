@extends('layouts.app')
@section('title', 'Get Started')
@section('meta-desc', 'Discover cutting-edge treatments at Agent. From Hair Treatments to Erectile Dysfunction, our solutions prioritize your well-being. Explore effective options for a confident, satisfying life."')
@section('content')



<div class="breadcrumb-area comon-padding" style="background-color: #09c6a2">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>Get Started</h2>
        </div>
    </div>
</div>

@if (\Session::has('error'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('error') !!}</li>
        </ul>
    </div>
@endif

<section id="agTreatmentsSec" class="treatments-sec pt-120 pb-120">
    <div class="container-xxl container">
        <div class="main-heading text-center">
            <h2 class="sans-heading text-black">get personalized treatments for</h2>
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
                    @if($cat->name == 'Beard')
                    <h4>Beard Growth</h4>
                    @else
                    <h4>{{ $cat->name }}</h4>
                    @endif
                    </div>
                    <a href="{{ route('questionnaire.index', $cat->id) }}" class="black-link"><i class="fa fa-long-arrow-right"
                            aria-hidden="true"></i></a>
                </div>
            </div>
            @php
            }
            @endphp


        </div>
    </div>
</section>

@endsection
