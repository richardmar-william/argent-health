@extends('layouts.app')
@section('title', 'Personalised Treatment for Sex')
@section('meta-desc', 'Revitalize your intimate life with our effective treatments for Erectile Dysfunction and Premature Ejaculation. Regain confidence and redefine pleasure.')
@section('content')

<section id="agTreatmentsSec" class="treatments-sec mt-20">
    <div class="container-xxl container comon-padding">
        <div class="main-heading text-center">
            <h2>Get Personalised Treatments</h2>
        </div>
        <div class="row mb-5">
            @php
            use App\Models\Category;
            $category = Category::orderBy('id','desc')->get();
            foreach($category as $cat){
            if($cat->slug == 'premature-ejaculation' || $cat->slug =='erectile-dysfunction'){

            @endphp
            <div class="col-lg-6 col-12">
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
            }
            @endphp


        </div>
    </div>
</section>

@endsection
