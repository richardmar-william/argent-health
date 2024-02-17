@extends('layouts.app')
@section('content')
<style>
    .blog-detail-content-txt .title{
        font-weight: 500;
        font-size: 24px;
        line-height: 34px;
    }
    .blog-detail-content-img figure img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        border-radius: 20px;
    }
    .blog-detail-content-img figure {
        height: 610px;
        width: 100%;
    }
    .blog-detail-content-img {
        margin-bottom: 40px;
    }
    .blog-detail-content-txt .title {
        padding: 10px 0 20px 0;
    }
    .blog-detail-page {
        padding-top: 220px;
    }
    .blog-detail-sidebar .blog-detail-sidebar-post figure img {
        height: 100px;
        margin-right: 30px;
    }
    .blog-detail-sidebar .blog-detail-sidebar-post {
        display: flex;
    }
    .blog-detail-page .col-md-4 {
        border-right: 1px solid #ddd;
        padding-right: 0;
    }
    .blog-detail-page .col-md-8 {
        padding-left: 40px;
    }
    .blog-detail-sidebar .blog-detail-sidebar-post,
    .blog-detail-sidebar .main-heading .title {
        padding-right: 30px;
    }
    .blog-detail-sidebar .blog-detail-sidebar-post:not(:last-child) {
        margin-bottom: 30px;
        padding-bottom: 30px;
        border-bottom: 1px solid #ddd;
    }
    .blog-detail-sidebar .main-heading .title {
        font-size: 40px;
    }

    /* responsive */
    @media(max-width: 1199px) {
        .blog-detail-content-img figure {
            height: 450px;
        }
        .blog-detail-page {
            padding-top: 150px;
        }
    }

    @media(max-width: 991px) {
        .blog-detail-sidebar .main-heading .title {
            font-size: 29px;
        }
        .blog-detail-sidebar .blog-detail-sidebar-post figure img {
            height: 100px;
            margin-right: 20px;
        }
        .blog-detail-sidebar .blog-detail-sidebar-post,
        .blog-detail-sidebar .main-heading .title {
            padding-right: 20px;
        }
    }

    @media(max-width: 767px) {
        .blog-detail-page .col-md-8 {
            padding-left: 0px;
            margin-top: 60px;
        }
        .blog-detail-page .col-md-4 {
            border-right: none;
            padding-right: 12px;
        }
        .blog-detail-sidebar {
            height: 486px;
            overflow-y: auto;
        }
        .blog-detail-page {
            padding-top: 120px;
        }
    }

    @media(max-width: 575px) {
        .blog-detail-page .container {
            padding-left: 50px;
            padding-right: 50px;
        }
        .blog-detail-content-img figure {
            height: 400px;
        }
        .blog-detail-sidebar .main-heading .title {
            font-size: 25px;
        }
    }

    @media (max-width: 400px) {
        .blog-detail-content-img figure {
            height: 240px;
        }
    }
</style>
<section class="blog-detail-page pb-120">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="blog-detail-sidebar">
                    <div class="main-heading">
                        <h2 class="title">Recent Articles</h2>
                    </div>
                 @php
                    $blog = DB::table('blogs')->get();
                 @endphp
                 @foreach($blog as $blogss)
                    <a href="{{route('blog_detail',$blogss->id)}}" class="blog-detail-sidebar-post">
                        <figure>
                            <img src="{{ asset('images/') }}{{ '/'. $blogss->image}}" alt="gent-img2" class="hideonhover" />
                        </figure>
                        <h5 class="title">{{$blogss->title}}</h5>
                    </a>
                 @endforeach
                    <!-- <a href="javascript:oid(0);" class="blog-detail-sidebar-post">
                        <figure>
                        <img src="{{ asset('frontend_new/images/gent-img3.png') }}" alt="gent-img3" class="hideonhover" />
                        </figure>
                        <h5 class="title">Signs to watch out for hair loss</h5>
                    </a>
                    <a href="javascript:oid(0);" class="blog-detail-sidebar-post">
                        <figure>
                        <img src="{{ asset('frontend_new/images/gent-img4.png') }}" alt="gent-img4" class="hideonhover" />
                        </figure>
                        <h5 class="title">10 tips for grooming beard with easy tricks</h5>
                    </a> -->
                </div>
            </div>
             
            <div class="col-sm-12 col-md-8">
                <div class="blog-detail-content">
                    <div class="blog-detail-content-img">
                        <figure>
                            <img src="{{ asset('images/') }}{{ '/'. $blogs->image}}" alt="gent-img1"
                                class="hideonhover" />
                        </figure>
                    </div>
                    <div class="blog-detail-content-txt">
                        <span class="date-time">1/1/2023 / 20:23 PM</span>
                        <h5 class="title">{{$blogs->title}}</h5>
                        <p>{{ strip_tags($blogs->description) }}</p>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>
<!-- form end -->
@endsection