@extends('layouts.app')
@section('title', 'Affiliate Program')
@section('meta-desc', 'Join our affiliate program and earn while promoting top-tier men\'s supplements. Partner with Agent for lucrative opportunities. Sign up now!')
@section('content')

<!-- login start -->
<section class=" user-dashboard affiliate" id="login_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="user-dash-info">
                    <div class="dashboard-left-inr">
                                <div class="d-md-flex d-user-title">
                                    <h2 class="h5 text-uppercase mb-4">Affiliates Log-in</h2>
                                </div>
                            <form  method="post" action="{{ route('login') }}" id="log_form" novalidate="novalidate" >
                                @csrf
                                    <div class="row">
                                        <div class="col-lg-12 form-group">
                                            <label class="text-small text-uppercase" for="address_title">Email address</label>
                                            <input class="form-control" name="email" type="email" placeholder="Enter your email address">
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <div class="form-group mb-0">
                                                <label for="password">Password</label>
                                                <div class="pw-relative">
                                                    <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter your Password">
                                                    <!-- <label class="hide"><i class="fa fa-eye" aria-hidden="true"></i></label>
                                                    <label class="show"><i class="fa fa-eye-slash" aria-hidden="true"></i></label> -->
                                                </div>
                                                @error('password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="form-group text-end l-s-button-box">
                                            @if (Route::has('password.request'))
                                                        <a class="forget-pw " href="{{ route('password.request') }}">
                                                Forget Password
                                                    </a>
                                            @endif
                                        </div>
                                        <div class="l-s-button-box">
                                            <button class="l-s-btn">{{ __('Login') }}</button>
                                        </div>
                                        <div class="dont-have-ac">
                                            <p id="sign_up">Don’t have an account yet? <a href="{{ route('affiliate.signup.page') }}">Sign Up!</a></p>
                                        </div>

                                    </div>
                            </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- login end -->
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<script>
$(document).ready(function() {
      $("#log_form").validate({
    // Specify validation rules
        rules: {
          email: {
              required: true,
              email: true,
          },
          password: {
              required: true,
              maxlength: 20,
              minlength: 8,
          },
        },
    // Specify validation error messages
        messages: {
          email: {
           required: "Please fill your email address",
           email: "Please enter a valid email address",
          },
          password: {
           required: "Please fill your password",
            maxlength: "Password must be below 20 characters",
            minlength: "Password must be above 8 characters",
          },
        },
    });
      });
</script>
