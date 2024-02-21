@extends('layouts.app')
@section('content')
<style>
#sign_add .error {
    color: indianred;
}
</style>
<!-- Sign Up start -->
<section class=" user-dashboard affiliate" id="sign_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="user-dash-info">
                    <div class="dashboard-left-inr">
                                <div class="d-md-flex d-user-title">
                                    <h2 class="h5 text-uppercase mb-4">Affiliate Sign-up</h2>
                                </div>
                            <form  method="post" action="{{ route('affiliate.create') }}" id="sign_add">
                               @csrf                         
                                    <div class="row">
                                        <div class="col-lg-6 form-group">
                                            <label class="text-small text-uppercase" for="address_title">Full Name</label>
                                            <input class="form-control" name="full_name" type="text" placeholder="Enter your name">
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label class="text-small text-uppercase" for="address_title">Barber Name</label>
                                            <input class="form-control" name="barber_name" type="text" placeholder="Enter your name">
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label class="text-small text-uppercase" for="address_title">Email address</label>
                                            <input class="form-control" name="email" type="email" placeholder="Enter your email address">
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label class="text-small text-uppercase" for="address_title">Password</label>
                                            <input class="form-control" name="password" type="password" placeholder="Enter your Password">
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <label class="text-small text-uppercase" for="address_title">Phone Number</label>
                                            <input class="form-control" name="phone" type="number" placeholder="Enter your number">
                                        </div>
                                        
                                        <div class="col-lg-12 form-group">
                                            <label class="text-small text-uppercase" for="address_title">Catgeories</label>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                    <input class="width-0" type="checkbox" id="cat1" name="cat[]" value="30">
                                                    <label for="cat1"> Hairloss</label><br>
                                                    </div>
                                                    <div class="col-lg-6">
                                                    <input class="width-0" type="checkbox" id="cat2" name="cat[]" value="31">
                                                    <label for="cat2"> Beard Growth</label><br>
                                                    </div>
                                                    <div class="col-lg-6">
                                                    <input class="width-0" type="checkbox" id="cat3" name="cat[]" value="32">
                                                    <label for="cat3"> Erectile Dysfunction</label><br>
                                                    </div>
                                                    <div class="col-lg-6">
                                                    <input class="width-0" type="checkbox" id="cat4" name="cat[]" value="33">
                                                    <label for="cat4"> Premeture Edjaculation</label><br>
                                                    </div>
                                                </div>
                                                <span id="Product_Category_show"></span>
                                        </div>
                                        

                                        <div class="d-md-flex d-user-title">
                                            <h2 class="h5 text-uppercase mb-4">Bank Account</h2>
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label class="text-small text-uppercase" for="sort_code">Sort Code</label>
                                            <input class="form-control" name="sort_code" type="text" placeholder="Enter your sort code">
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label class="text-small text-uppercase" for="account_number">Account Number</label>
                                            <input class="form-control" name="account_number" type="number" placeholder="Enter your account no.">
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label class="text-small text-uppercase" for="account_type">Account Type</label>
                                            <input class="form-control" name="account_type" type="text" placeholder="Enter your account type">
                                        </div>
                                        <div class="col-lg-6 form-group">
                                            <label class="text-small text-uppercase" for="sort_coe">Name On Account</label>
                                            <input class="form-control" name="name_on_account" type="text" placeholder="Enter your Account Name">
                                        </div>
                                        <div class="l-s-button-box">
                                            <button class="l-s-btn" type="submit">Sign Up</button>
                                        </div>
                                        
                                    </div>
                            </form>
                                 <div class="dont-have-ac">
                                    <p>Already a member? <a href="{{ route('affiliate.index') }}">Login instead!</a></p>
                                 </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sign Up end -->
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<script>
$(document).ready(function() {
      $("#sign_add").validate({
    // Specify validation rules
        rules: {
          full_name: {
              required: true,
              maxlength: 14,
              minlength: 3,
          },
          barber_name: {
              required: true,
              maxlength: 14,
              minlength: 3,
          },
          email: {
              required: true,
              email: true,
          },
          phone: {
              required: true,
              maxlength: 12,
              minlength: 10,
          },
          account_number: {
              required: true,
              maxlength: 16,
              minlength: 16,
          },
          account_type: {
              required: true,
          },
          password: {
              required: true,
              maxlength: 20,
              minlength: 8,
          },
          'cat[]': {
              required: true,
          },
          name_on_account: {
              required: true,
              maxlength: 14,
              minlength: 4,
          },
          sort_code: {
              required: true,
              maxlength: 14,
              minlength: 4,
          }, 
        

        },
    // Specify validation error messages
        messages: {
          full_name: {
           required: "Please fill your Full Name",
            maxlength: "Password must be below 14 characters",
            minlength: "Password must be above 7 characters",
          },
          barber_name: {
           required: "Please fill your barber_name",
            maxlength: "Password must be below 14 characters",
            minlength: "Password must be above 3 characters",
          },
          email: {
           required: "Please fill your email address",
           email: "Please enter a valid email address",
          },
          phone: {
           required: "Please fill your Phone Number",
            maxlength: "Password must be below 12 characters",
            minlength: "Password must be above 10 characters",
          },
          account_number: {
           required: "Please fill your account_number",
           maxlength: "Password must be 16 characters",
            minlength: "Password must be 16 characters",
          },
          account_type: {
           required: "Please fill your account_type",
          },
          password: {
           required: "Please fill your password",
            maxlength: "Password must be below 20 characters",
            minlength: "Password must be above 8 characters",
          },
          'cat[]': {
           required: "Please choose atleast one Category",
          },
          name_on_account: {
           required: "Please fill your Name on Account",
            maxlength: "Password must be below 14 characters",
            minlength: "Password must be above 4 characters",
          },
          sort_code: {
           required: "Please fill your Sort Code",
            maxlength: "Password must be below 14 characters",
            minlength: "Password must be above 4 characters",
          },
       
        },

        errorElement : 'div',
        errorPlacement: function(error, element) {
            var placement = $(element).data('error');
            var placement1 = element.attr('name');

            if (placement) {
                $(placement).append(error)
            }else if(placement1=="cat[]"){
                error.insertAfter("#Product_Category_show");
            }else {
                error.insertAfter(element);
            }        
        },
    });
      });
</script>