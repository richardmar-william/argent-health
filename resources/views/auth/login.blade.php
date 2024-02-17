<!DOCTYPE HTML>
<html lang="en-US">

<head>
   <style>
    form#login_form .error {
    color: #dc3545 !important;
        }

   </style> 
    <meta charset="UTF-8" />
    <meta name="language" content="en" />
    <meta name="country" content="us" />
    <meta name="robots" content="INDEX, FOLLOW" />
    <title>Log In</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta property="og:title" content="html" />
    <meta property="og:description" content="" />
    <meta name="section" content="html" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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
<section class="login-signup-main">
        <div class="l-s-wrap">
            <div class="l-s-logo">
                <picture class="l-s-bg-img full-fit">
                    <!-- <img src="images/l-s-bg.png" alt=""> -->
                    <img src="{{ asset('log_in/l-s-bg.png') }}" alt="">
                </picture>
                <div class="l-s-logo-content">
                    <a class="navbar-brand navbar-brand-desk" href="{{ url('/') }}">
                        <!-- <img src="images/logo.png" alt="logo" class="Logo" /> -->
                        <img src="{{ asset('log_in/logo.png') }}" alt="logo" class="Logo" />
                    </a>
                    <h3>be the gent you were <br>born to be</h3>
                </div>
            </div>
            <div class="l-s-details">
                <div class="l-s-details-inr">
                    <div>
                        <h3>log in</h3>
                        <p class="continue-with">Continue with</p>
                        <ul class="c-w-sociallinks">
                            <li><a href="{{ route('social_login', 'facebook') }}"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa-brands fa-google"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="fa-brands fa-apple"></i></a></li>
                        </ul>
                        <div class="login-or">
                            <span>Or</span>
                        </div>

                        <form action="{{ route('login') }}" method="POST" id="login_form" novalidate="novalidate">
                           @csrf
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-0">
                                <label for="password">Password</label>
                                <div class="pw-relative">
                                    <input type="password" class="form-control" id="pass" name="password" value="{{ old('email') }}">
                                    <label class="hide"><i class="fa fa-eye" aria-hidden="true"></i></label>
                                    <label class="show"><i class="fa fa-eye-slash" aria-hidden="true"></i></label>
                                </div>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group text-end">
                                @if (Route::has('password.request'))
                                            <a class="forget-pw" href="{{ route('password.request') }}">
                                    Forget Password
                                         </a>
                                @endif
                            </div>
                            
                            <div class="form-group form-check">
                                <label class="form-check-label m-0" for="terms-and-services">
                                    I agree to the Terms of Services and Disclaimer
                                </label>
                                <input class="form-check-input" type="checkbox" name="terms_and_services"
                                    id="terms-and-services">
                                @error('terms-and-services')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="l-s-button-box">
                                <button class="l-s-btn">{{ __('Login') }}</button>
                            </div>

                            <div class="dont-have-ac">
                                <p>Don’t have an account yet? <a href="{{ route('register') }}">Sign Up!</a></p>
                            </div>
                            
                            <div class="captcha-img">
                                <img src="{{ asset('log_in/captcha.png') }}" alt="Captcha">
                            </div>
                            
                            <!-- recaptcha -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <strong>ReCaptcha:</strong>
                                        <div class="g-recaptcha" data-sitekey="{{ env('6LdFJW4mAAAAALDnfwjSz048smiv6d4wwWJ_bv3x') }}"></div>
                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                        @endif
                                    </div>  
                                </div>
                            </div>
                              <!-- social login form -->
                            {{-- <div class="form-group mt-4 mb-0">
                                        <a href="{{ route('social_login', 'facebook') }}" class="btn btn-block"
                                            style="background-color: #1877F2; color: #FFFFFF">
                                            Login with Facebook
                                        </a>
                                        <a href="{{ route('social_login', 'twitter') }}" class="btn btn-block"
                                            style="background-color: #1DA1F2; color: #FFFFFF">
                                            Login with Twitter
                                        </a>
                                        <a href="{{ route('social_login', 'google') }}" class="btn btn-block"
                                            style="border-color: #1877F2; color: black">
                                            Login with Google
                                        </a>
                                    </div> --}}
                        </form>
                                {!! JsValidator::formRequest('App\Http\Requests\Frontend\LoginRequest') !!}
                                </div>
                </div>
            </div>
    </section>
    
    <script src="/js/jquery3.6.4.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery.validate1.16.0.min.js"></script>

    <script>
        $(".pw-relative label i").click(function () {
            $(".pw-relative").toggleClass("eyes-show");
        });
    </script>




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



    <script type="text/javascript">
            $(document).ready(function(){
                $("#login_form").validate({
                    rules :{
                    "terms_and_services" : {
                        required : true
                    },
                    "email" : {
                        required : true
                    },
                    "password" : {
                        required : true
                    }
                },
                messages :{
                    "terms_and_services" : {
                        required : 'Please click to agree with our terms of services.'
                    },
                    "email" : {
                        required : 'The email field is required.'
                    },
                    "password" : {
                        required : 'The Password field is required.'
                    }
                }
                });
            });
    </script>


  










