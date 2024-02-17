
@include('layouts.affiliate.header')
       
    <div class="user-dashboard py-5">
        <div class="row">     
            <div class="col-lg-12">
                <!-- profile sec start -->
                <section class=" user-dashboard affiliate aff-pd" id="sign_sec">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="user-dash-info  mein-update">
                                    <div class="dashboard-left-inr">
                                       
                                       @php  $cat_ids = explode(",",$affiliate->cat_id);  @endphp
                                        <div class="d-md-flex d-user-title">
                                            <h2 class="h5 text-uppercase mb-4"> Profile</h2>
                                        </div>
                                            @if(!empty($successMsg))
                                            <div class="alert alert-success"> {{ $successMsg }}</div>
                                            @endif
                                            <form  method="post" action="{{ route('affiliate.update') }}" id="affiliate_update">
                                              @csrf            
                                                <div class="row">
                                                    <div class="col-lg-6 form-group">
                                                        <label class="text-small text-uppercase" for="address_title">Full Name</label>
                                                        <input class="form-control" name="full_name" type="text" value="{{ $affiliate->full_name }}">
                                                    </div>
                                                    <div class="col-lg-6 form-group">
                                                        <label class="text-small text-uppercase" for="address_title">Barber Name</label>
                                                        <input class="form-control" name="barber_name" type="text" value="{{ $affiliate->barber_name }}">
                                                    </div>
                                                    <div class="col-lg-6 form-group">
                                                        <label class="text-small text-uppercase" for="address_title">Email address</label>
                                                        <input class="form-control" name="" type="email" value="{{ $affiliate->email }}" disabled>
                                                    </div>
                                                    <div class="col-lg-6 form-group">
                                                        <label class="text-small text-uppercase" for="address_title">Phone Number</label>
                                                        <input class="form-control" name="phone" type="phone" value="{{ $affiliate->phone }}">
                                                    </div>
                                                    
                                                    <div class="col-lg-12 form-group">
                                                    <label class="text-small text-uppercase" for="address_title">Categories</label>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <input type="checkbox" id="cat1" name="cat[]" value="30" <?=(in_array(30,$cat_ids) ? 'checked="checked"' : '')?>>
                                                                <label for="cat1"> Hairloss</label><br>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <input type="checkbox" id="cat2" name="cat[]" value="31" <?=(in_array(31,$cat_ids) ? 'checked="checked"' : '')?>>
                                                                <label for="cat2"> Beard Growth</label>
                                                            </div>
                                                            <div class="col-lg-6">
                                                            <input type="checkbox" id="cat3" name="cat[]" value="32" <?=(in_array(32,$cat_ids) ? 'checked="checked"' : '')?>>
                                                        <label for="cat3"> Erectile Dysfunction</label>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <input type="checkbox" id="cat3" name="cat[]" value="33" <?=(in_array(33,$cat_ids) ? 'checked="checked"' : '')?>>
                                                                <label for="cat3"> Premeture Edjaculation</label>
                                                            </div>
                                                        </div>
                                                    
                                                    </div>

                                                    <div class="d-md-flex d-user-title">
                                                        <h2 class="bank_acc text-uppercase mb-4">Bank Account</h2>
                                                    </div>
                                                    <div class="col-lg-6 form-group">
                                                        <label class="text-small text-uppercase" for="address_title">Sort Code</label>
                                                        <input class="form-control" name="sort_code" type="text" value="{{ $affiliate->sort_code }}" disabled>
                                                    </div>
                                                    <div class="col-lg-6 form-group">
                                                        <label class="text-small text-uppercase" for="address_title">Account Type</label>
                                                        <input class="form-control" name="account_type" type="text" value="{{ $affiliate->account_type }}" >
                                                    </div>
                                                    <div class="col-lg-6 form-group">
                                                        <label class="text-small text-uppercase" for="address_title">Account Number</label>
                                                        <input class="form-control" name="" type="number" value="{{ $affiliate->account_number }}" disabled>
                                                    </div>
                                                    <div class="col-lg-6 form-group">
                                                        <label class="text-small text-uppercase" for="address_title">Name on Account</label>
                                                        <input class="form-control" name="" type="text" value="{{ $affiliate->name_on_account }}" disabled>
                                                    </div>
                                                    <!-- <div class="col-lg-12 form-group">
                                                        <label class="text-small text-uppercase" for="address_title">Password</label>
                                                        <input class="form-control" name="password" type="password" value="{{ $affiliate->barber_name }}">
                                                    </div> -->
                                                    <div class="l-s-button-box  udate-btn">
                                                        <button class="l-s-btn" type="submit">Update</button>
                                                    </div>
                                                </div>
                                                
                                            </form>
                                            <div class="change-req">
                                                <p>To change email and account number please send request to the admin</p>
                                                <button class="l-s-btn" data-bs-toggle="modal" data-bs-target="#changerequest">Change Request</button>
                                               
                                            </div>
                                           <!-- <button class="l-s-btn" data-bs-toggle="modal" data-bs-target="#changerequest">Change Request</button></a>  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Profile sec end -->
            </div>
            <!-- side bar start -->
            @include('layouts.affiliate.sidebar')
            <!-- side bar end -->
        </div>
    </div>>

<!-- Modal -->
<div class="modal fade" id="changerequest" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="changerequestLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bd-hd">
                    <a type="button" href="#" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-circle-xmark"></i></a>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>
            <form method="POST" action="{{ route('affiliate.change.req') }}">
              @csrf  
               @php  $id = auth()->user()->id;  @endphp
              <input type="hidden" name="user_id" value="{{ $id }}">
                <div class="modal-body modal-display">
                    <h1 class="modal-title " id="changerequestLabel">Change Request</h1>
                        <div class="row">
                                <!-- <div class="col-lg-12 form-group">
                                    <label class="text-small text-uppercase" for="email">Email</label>
                                    <input class="form-control" name="email" type="email" value="{{ $affiliate->email }}">
                                </div> -->
                                <div class="col-lg-12 form-group">
                                    <label class="text-small text-uppercase" for="name_on_account">Sort Code</label>
                                    <input class="form-control" name="sort_code" type="text" value="asdasdad{{ $affiliate->sort_code }}">
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label class="text-small text-uppercase" for="account_number">Account number</label>
                                    <input class="form-control" name="new_account" type="number" value="{{ $affiliate->account_number }}">
                                </div>
                                <div class="col-lg-12 form-group">
                                    <label class="text-small text-uppercase" for="name_on_account">Name on Account</label>
                                    <input class="form-control" name="name_on_account" type="text" value="{{ $affiliate->name_on_account }}">
                                </div>
                        </div>
                </div>
                <div class="modal-footer footer-btn">
                    <button class="l-s-btn" data-bs-toggle="modal" data-bs-target="#changerequest" type="submit">Send request to admin</button> 
                </div>
            </form>
            </div>
        </div>
    </div>
@include('layouts.affiliate.footer')