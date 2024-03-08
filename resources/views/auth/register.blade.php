<!DOCTYPE HTML>
<html lang="en-US">

<head>
   <style>
        label#terms_and_services-error {
        color: #dc3545;
        }
   </style> 
    <meta charset="UTF-8" />
    <meta name="language" content="en" />
    <meta name="country" content="us" />
    <meta name="robots" content="INDEX, FOLLOW" />
    <title>Sign Up</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta property="og:title" content="html" />
    <meta property="og:description" content="" />
    <meta name="section" content="html" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:type" content="website" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta name="bucls" content="SHARED-SERVICES" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/css2.css?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/font-awesome/all.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="{{ URL::asset('css/logincss/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/logincss/reset.css') }}">


</head>
<body>

    <section class="login-signup-main">
        <div class="l-s-wrap">
            <div class="l-s-logo">
                <picture class="l-s-bg-img full-fit">
                    <img src="{{ asset('log_in/l-s-bg.png') }}" alt="">
                </picture>
                <div class="l-s-logo-content">
                    <a class="navbar-brand navbar-brand-desk" href="{{ url('/') }}">
                        <img src="{{ asset('log_in/logo.png') }}" alt="logo" class="Logo" />
                    </a>
                    <h3>be the gent you were <br>born to be</h3>
                </div>
            </div>
            <div class="l-s-details">
                <div class="l-s-details-inr">
                    <div>
                        <h3>Sign Up</h3>
                        <p class="continue-with">Continue with</p>
                        <ul class="c-w-sociallinks">
                            <li><a href="javascript:void(0)"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa-brands fa-google"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa-brands fa-apple"></i></a></li>
                        </ul>
                        <div class="login-or">
                            <span>Or</span>
                        </div>
                        <form action="{{ route('register') }}" method="POST" id="reg_form_id" novalidate="novalidate">
                            @csrf
                            <div class="form-group">
                                <label for="text">Full name</label>
                                <input type="text" class="form-control" name="full_name" value="{{ old('full_name') }}">
                                @error('full_name')<span class="text-danger error-msg" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>

                            <div class="form-group">
                                <!-- <label for="text">username</label> -->
                                <input type="hidden" class="form-control" name="username" value="">
                                <!-- @error('username')<span class="text-danger error-msg" role="alert"><strong>{{ $message }}</strong></span>@enderror -->
                            </div>

                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                                @error('email')<span class="text-danger error-msg" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Phone Number</label>
                                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                                @error('phone')<span class="text-danger error-msg" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>
                             
                            <div class="form-group">
                                <label for="Sex">Sex</label>
                                <select class="form-control" aria-label="Gender Select" name="sex">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                                <p class="text-end input-desc">What sex were you assigned at birth, as shown
                                    on your original birth certificate. This is important for us to know
                                    because it allows us to provide you with treatments as safely as
                                    possible.</p>
                            </div>
                            @error('sex')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                            
                                <div class="form-group">
                                    <label for="dob">Date of birth</label>
                                    <input type="date" class="form-control" id="dob" name="dob" value="" placeholder="Day / Month / year">
                                            <p id="age" style="color:red;"></p>
                                </div>@error('dob')  <span class="text-danger">{{ $message }}</span> @enderror
                                
                            <!-- <div class="form-group">
                                <label for="referral_code">Referral Code</label>
                                <input type="text" class="form-control" name="referral_code" value="{{ old('referral_code') }}">
                                @error('referral_code')<span class="text-danger error-msg" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div> -->
                            
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="pw-relative">
                                    <input type="password" class="form-control" id="pass" name="password">
                                    <label class="hide"><i class="fa fa-eye" aria-hidden="true"></i></label>
                                    <label class="show"><i class="fa fa-eye-slash" aria-hidden="true"></i></label>
                                </div>
                                 @error('password')<span class="text-danger error-msg" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>

                            <div class="form-group">
                                <label for="password">Confirm password</label>
                                <div class="pw-relative1">
                                    <input type="password" class="form-control" id="cpass" name="password_confirmation">
                                    <label class="hide1"><i class="fa fa-eye" aria-hidden="true"></i></label>
                                    <label class="show1"><i class="fa fa-eye-slash" aria-hidden="true"></i></label>
                                </div>
                                @error('password_confirmation')<span class="text-danger error-msg" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>


                            <div class="form-group form-check">
                                <label class="form-check-label m-0" for="terms-and-services">
                                    I agree to the Terms of Services and Disclaimer
                                </label>
                                <input class="form-check-input" type="checkbox" name="terms_and_services"
                                    id="terms-and-services">
                                 @error('terms-and-services')<span class="text-danger error-msg" role="alert"><strong>{{ $message }}</strong></span>@enderror
                            </div>


                            <div class="l-s-button-box">
                                <button class="l-s-btn" type="submit">Sign Up</button>
                            </div>

                            <div class="dont-have-ac">
                                <p>Already a member? <a href="{{route('login')}}">Login instead!</a></p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
    </section>
    
    <script src="/js/jquery3.6.4.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery.validate1.16.0.min.js"></script>


    <!-- toggle c password section -->
        <script>
            $(document).ready(function(){
                $('.hide1').click(function () {
                    $('.show1').show();
                    $('.hide1').hide();
                    $('#cpass').attr('type', 'password');
                });
                $('.show1').click(function(){
                    $('.hide1').show();
                    $('.show1').hide();
                    $('#cpass').attr('type', 'text');
                });
                });
        </script>
     
       <!-- passs toggle   -->
        <script>
          $(document).ready(function(){
            $('.hide').click(function () {
                $('.show').show();
                $('.hide').hide();
                $('#pass').attr('type', 'password');
            });
            $('.show').click(function(){
                $('.hide').show();
                $('.show').hide();
                $('#pass').attr('type', 'text');
            });
            });
        </script>
     

  <!-- validating recaptcha -->
  <script type="text/javascript">
            $(document).ready(function(){
                $("#reg_form_id").validate({
                rules :{
                    "full_name" : {
                        required : true
                    },
                    "email" : {
                        required : true
                        email: true
                    },
                    "phone" : {
                        required : true
                    },
                    "sex" : {
                        required : true
                    },
                    "dob" : {
                        required : true
                    },
                    "password" : {
                        required : true
                    },
                    "password_confirmation" : {
                        required : true
                    },
                    "terms_and_services" : {
                        required : true
                    }
                },
                messages :{
                    "full_name" : {
                        required : 'Name field in required.'
                    },
                    "email" : {
                        required : 'Email field is required.'
                        email : 'Please enter a valid email.'
                    },
                    "phone" : {
                        required : 'Phone field is required.'
                    },
                    "sex" : {
                        required : 'Phone field is required.'
                    },
                    "dob" : {
                        required : 'Phone field is required.'
                    },
                    "password" : {
                        required : 'Password field is required.'
                    },
                    "password_confirmation" : {
                        required : 'Confirm password field is required.'
                    },
                    "terms_and_services" : {
                        required : 'Please agree with our terms of services.'
                    }
                }
                });
            });
    </script>

</body>
</html>


<!-- script for age validation in sign up form -->
<script>
$(document).ready(function() {
    $("#dob").change(function() {
        // alert("sdsdsds");
        var dob = new Date($(this).val());
        // Get the selected date of birth
        var today = new Date();
        // Get today's date
        var age = today.getFullYear() - dob.getFullYear();
        // Calculate the difference in years
        // Adjust the age if the birthday hasn't occurred yet this year
        if (today.getMonth() < dob.getMonth() || (today.getMonth() === dob.getMonth() && today
                .getDate() < dob.getDate())) {
            age--;
        }

        // condition if age is less then 18 years
        if (age < 18) {
            $("#age").text("Your age should be atleast 18.");
            // $('#dob')[0].reset();
            $('input[name=dob]').val("");
        } else {
            $("#age").text("");
        }

    });
});
</script>