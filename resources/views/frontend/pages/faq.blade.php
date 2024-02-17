@extends('layouts.app')
@section('title', 'FAQ\'s')
@section('meta-desc', 'Got questions or feedback? Reach out to us! Our dedicated team at Agent is here to assist. Contact us for a prompt and personalized response.')
@section('content')
<section class="faq faq-page">
    <div class="container-xxl container">
        <div class="main-heading text-center">
            <h2>Frequently Asked Questions</h2>
            <p>Have Questions? We’re Here to help.</p>
        </div>
        <form id="search_faq" action="{{route('faqsearch')}}">
            <div class="input-group">
                <span><i class="fa-solid fa-magnifying-glass"></i></span>
                <input type="text" name="search" class="form-control" placeholder="Search">
            </div>
        </form>
      @php
       $faques = !empty($faqsearch) ? $faqsearch : $faqs;
      @endphp
      @foreach($faques as $faq)
        <div class="accordion" id="questionaccordion-{{$faq->id}}">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-{{$faq->id}}" aria-expanded="false" aria-controls="collapseOne">
                        {{$faq->question}}
                    </button>
                </h2>
                <div id="collapseOne-{{$faq->id}}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#questionaccordion-{{$faq->id}}">
                    <div class="accordion-body">
                        {{$faq->answer}}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- form end -->

@include('partials.frontend.above-footer')

@endsection

@section('script')
<script>
  setTimeout(function(){
    $(".alert-dismissible").hide();
    }, 5000)
</script>
@endsection
