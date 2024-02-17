@extends('layouts.app')
@section('title', $static_page->title)
@section('content')
<div class="comon-padding"></div>
<div class="body-main pages-content inner-pages-design">
    <div class="container-xxl container">
        <div class="inner-pages-wrap">
            <div>
                <h3>{{ $static_page->title }}</h3>
                <!-- <h4>{{ $static_page->title }}</h4> -->
                <p>{!! $static_page->content !!}</p>
            </div>
            <div class="ip-latest-update">Last update: {{ $static_page->updated_at }}</div>
        </div>
    </div>
</div>
@endsection
