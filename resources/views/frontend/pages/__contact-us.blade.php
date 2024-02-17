@extends('layouts.app')
@section('content')
<section class="contect-wedlove-sec sci-behind-sec">
    <div class="container-xxl container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="pro_heading_desc">
                    <h2>We'd love to hear from you!</h2>
                    <p class="pro_desc">
                        Thank you for your interest in getting in touch with us. 
                        Please fill out the form below with your name, email, and message and we will get back to you as soon as possible. If you have any questions, 
                        comments, or concerns, please don't hesitate to reach out. We look forward to hearing from you!
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contect-wedlove-box">
                    <figure>
                        <img src="http://49.249.236.30:3007/agent/public/frontend_new/images/contact-us-image1.svg" alt="img">
                    </figure>
                </div>
            </div>
        </div>    
    </div>
</section>
<!--form  start -->
<section class="form-wedlove-sec sci-behind-sec">
    <div class="container-xxl container">
        <div class="row justify-content-center ">
            <div class="col-lg-8 col-md-6">
                <div class="form-main">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">What is your name?</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Type your full name here...">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">What is your email address?</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Type your full name here...">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">What is your phone number?</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="+11 2222 333344">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Which service you required?</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Type here....">
                </div>
                <div class="check-box-contact">
                     <h2>Preferred method of contact.</h1>
                    <form class="form-section" action="/action_page.php">
                    <div class="check-form">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1">Phone Call</label>
                    </div>
                    <div class="check-form">
                   <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                    <label for="vehicle2"> Email</label>
                   </div>
                   <div class="check-form">
                    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                    <label for="vehicle3">Either</label>
                    </div>
                    </form>
                    <div class="product-get-button">
                     <a href="#">Contact us</a>
                 </div>
                    
                </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
               <div class="content-get-main">
               <ul class="cont-get-start">
               <li class="cont-text">
                    <i class="fa-solid fa-phone-volume"></i><h4> Call Us</h4>
                    <span><a href="tel:+234(81)5182-1591">+234 (81) 5182-1591</a></span>
                    <span><a href="tel:+447360255584">+447360255584</a></span>
                </li>
                <li class="cont-text">
                <figure>
        <img src="http://49.249.236.30:3007/agent/public/frontend_new/images/content-icon-image.svg" alt="img">
    </figure>
    <h4>Location</h4>
    <span>Head Office: 128 City Road, London, United Kingdom, EC1V 2NX</span>
    <span>Branch Office: Wuse Zone 2, FCT, Abuja.</span>
                </li>
                <li class="cont-text">
                <i class="fa-solid fa-envelope"></i><h4> Email</h4>
                <span><a href="mailto:Kashanbhatti00004@gmail.com">Kashanbhatti00004@gmail.com</a></span>
                </li>
               </ul>
            <ul class="cont-get-start d-flex icon-size">
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
            </ul>
               </div>
                </div>
            </div>
        </div>    
    </div>
</section>
<!-- form end -->
@endsection
