@extends('layouts.app')
@section('title', 'Contact Us')
@section('meta-desc', 'Got questions or feedback? Reach out to us! Our dedicated team at Agent is here to assist. Contact us for a prompt and personalized response.')
@section('content')
<section class="contect-wedlove-sec sci-behind-sec">
    <div class="container-xxl container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="pro_heading_desc">
                    <h2>Agent Health - Reach Out to Us</h2>
                    <p class="pro_desc">
                        Welcome to Agent Health, your exclusive destination for men's wellness and care. We are
                        dedicated to
                        addressing the unique health concerns of the modern gentleman with precision, discretion, and
                        expertise.
                    </p>
                    <h4>Always Here to Assist</h4>
                    <p class="pro_desc">Should you desire to connect with our customer service team or clinicians, we
                        are at your service. Drop us a message using the form below or direct your correspondence to <a
                            href="#">info@agenthealth.co.uk.</a>
                        Your queries, whether related to your account or seeking clinical insights, will be attended to
                        with the utmost attention and promptness.</p>
                    <h4>Expert Care at Your Fingertips</h4>
                    <p class="pro_desc">We understand the importance of privacy and direct communication. Rest assured,
                        your queries will be addressed with professionalism and confidentiality. Your voice is essential
                        to us, and every concern is
                        a step towards creating bespoke health solutions that are as distinguished as you are.</p>
                    <p class="pro_desc">For immediate assistance or detailed consultations, reach out. Your journey to
                        impeccable health and well-being is our honoured commitment.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contect-wedlove-box">
                    <figure>
                        <img src="{{asset('/frontend_new/images/contact-us-image1.svg')}}" alt="img">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!--form  start -->
<section class="form-wedlove-sec sci-behind-sec">

    <div class="container-xxl container">
        @if (session('message'))
        <div class="alert alert-{{session('alert_type')}} alert-dismissible fade show" role="alert" id="alert-message">
            {{session('message')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="row justify-content-center ">
            <div class="col-lg-8 col-md-6">

                <div class="form-main">
                    <form class="form-section" action="{{route('page.post.contactus')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">What is your name?</label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Type your full name here...">
                            @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">What is your email address?</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Type your email address here">
                            @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">What is your phone number?</label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                placeholder="Type your phone number here...">
                            @error('phone')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <!-- <div class="mb-3">
                            <label for="service" class="form-label">Which service you required?</label>
                            <input type="text" class="form-control" id="service" name="service"
                                placeholder="Type here....">
                            @error('service')<span class="text-danger">{{ $message }}</span>@enderror
                        </div> -->
                        <div class="check-box-contact">
                            <h2>Preferred method of contact.</h2>
                            <div class="form-section">
                                <div class="check-form">
                                    <input type="checkbox" id="phoneCall" name="contactBy[]" value="phone">
                                    <label for="phoneCall">Phone Call</label>
                                </div>
                                <div class="check-form">
                                    <input type="checkbox" id="emailSent" name="contactBy[]" value="email">
                                    <label for="emailSent"> Email</label>
                                </div>
                                <div class="check-form">
                                    <input type="checkbox" id="either" name="contactBy[]" value="either">
                                    <label for="either">Either</label>
                                </div>
                            </div>
                            <!-- @error('contactBy')<span class="text-danger">{{ $message }}</span>@enderror -->
                            <div class="product-get-button">
                                <button type="submit" class="contact-btn">Contact us</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="content-get-main">
                    <ul class="cont-get-start">
                        <li class="cont-text">
                            <i class="fa-solid fa-phone-volume"></i>
                            <h4> Call Us</h4>
                            <span><a href="tel:+44208-683-8381">+44208 683 8381</a></span>
                        </li>
                        <li class="cont-text">
                            <figure>
                                <img src="{{asset('/frontend_new/images/content-icon-image.svg')}}" alt="img">
                            </figure>
                            <h4>Location</h4>
                            <span>Agent- ClickPharm, Groundfloor 5, Building 111
                                Thames industrial Estate, East tilbury, Essex, RM18 8rh.
                            </span>
                        </li>
                        <li class="cont-text cont-email">
                            <i class="fa-solid fa-envelope"></i>
                            <h4> Email</h4>
                            <span><a href="mailto:Kashanbhatti00004@gmail.com">Info@agenthealth.co.uk</a></span>
                        </li>
                    </ul>
                    <!-- <ul class="cont-get-start d-flex icon-size">
	                <li class="cont-text">
	                    <a href="javascript(0);"><i class="fa-brands fa-twitter"></i></a>
	                </li>
	                <li class="cont-text">
	                    <a href="javascript(0);"><i class="fa-brands fa-square-facebook"></i></a>
	                </li>
	                <li class="cont-text">
	                    <a href="javascript(0);"><i class="fa-brands fa-square-instagram"></i></a>
	                </li>
	                <li class="cont-text">
	                    <a href="javascript(0);"><i class="fa-brands fa-linkedin"></i></a>
	                </li>
	            </ul> -->
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
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

