<div>
     @include('partials.backend.flash')
    <div class="row">
        <div class="col-lg-7 col-md-12">
            <div class="checkout-shipping-add">
                <h2 class="checkout-heading">Shipping addresses</h2>
                @if($userAddressId)
                    <h2 class="checkout-heading">Shipping way</h2>
                    <div class="row">
                        @forelse($shippingCompanies as $shippingCompany)
                            <div class="col-12 col-sm-6 form-group">
                                <div class="custom-control custom-radio">
                                    <input
                                        type="radio"
                                        id="shipping-company-{{ $shippingCompany->id }}"
                                        class="custom-control-input"
                                        wire:model="shippingCompanyId"
                                        wire:click="storeShippingCost()"
                                        {{ intval($shippingCompanyId) == $shippingCompany->id ? 'checked' : '' }}
                                        value="{{ $shippingCompany->id }}">
                                    <label for="shipping-company-{{ $shippingCompany->id }}"
                                        class="custom-control-label text-small">
                                        <b>{{ $shippingCompany->name }}</b>
                                        <small>
                                            {{ $shippingCompany->description }} (${{ $shippingCompany->cost }})
                                        </small>
                                    </label>
                                </div>
                            </div>
                        @empty
                            <p>No shipping companies found</p>
                        @endforelse
                    </div>
                @endif
                @if($userAddressId && $shippingCompanyId)
                    <h2 class="checkout-heading">Payment way</h2>
                    <div class="row">
                        @forelse($paymentMethods as $paymentMethod)
                            <div class="col-12 col-sm-6 form-group">
                                <div class="custom-control custom-radio">
                                    <input
                                        type="radio"
                                        id="payment-method-{{ $paymentMethod->id }}"
                                        class="custom-control-input"
                                        wire:model="paymentMethodId"
                                        wire:click="getPaymentMethod()"
                                        {{ intval($paymentMethodId) == $paymentMethod->id ? 'checked' : '' }}
                                        value="{{ $paymentMethod->id }}">
                                    <label for="payment-method-{{ $paymentMethod->id }}"
                                        class="custom-control-label text-small">
                                        <b>{{ $paymentMethod->name }}</b>
                                    </label>
                                </div>
                            </div>
                        @empty
                            <p>No payment way found</p>
                        @endforelse
                    </div>
                @endif

                @if($userAddressId && $shippingCompanyId && $paymentMethodId)
                    @if(\Str::lower($paymentMethodCode) == 'ppex')
                        <form action="{{ route('payment.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="userAddressId" value="{{ old('userAddressId', $userAddressId) }}"
                                class="form-control">
                            <input type="hidden" name="shippingCompanyId"
                                value="{{ old('shippingCompanyId', $shippingCompanyId) }}" class="form-control">
                            <input type="hidden" name="paymentMethodId" value="{{ old('paymentMethodId', $paymentMethodId) }}"
                                class="form-control">
                            <button type="submit" name="submit" class="btn btn-sm btn-primary btn-block uppercase">
                                PayPay Place order
                            </button>
                        </form>
                    @endif
                        @if(\Str::lower($paymentMethodCode) == 'ppex')
                            <form action="{{ route('checkout.charge_request') }}">
                                @csrf
                                <input type="hidden" name="userAddressId" value="{{ old('userAddressId', $userAddressId) }}"
                                    class="form-control">
                                <input type="hidden" name="shippingCompanyId"
                                    value="{{ old('shippingCompanyId', $shippingCompanyId) }}" class="form-control">
                                <input type="hidden" name="paymentMethodId" value="{{ old('paymentMethodId', $paymentMethodId) }}"
                                    class="form-control">
                                <button type="submit" name="submit" class="btn btn-sm btn-dark btn-block uppercase">
                                    Mada Place order
                                </button>
                            </form>
                        @endif
                        @if(\Str::lower($paymentMethodCode=='stripe'))
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="nav-tab-card">
                                @foreach (['danger', 'success'] as $status)
                                    @if(Session::has($status))
                                        <p class="alert alert-{{$status}}">{{ Session::get($status) }}</p>
                                    @endif
                                @endforeach
                                <form role="form" method="POST" id="paymentForm" action="{{ route('stripe.post') }}">
                                    @csrf
                                    <input type="hidden" name="amount" value="{{ $cartTotal }}">
                                    <input type="hidden" name="userAddressId" value="{{ old('userAddressId', $userAddressId) }}"
                                class="form-control">
                                    <input type="hidden" name="shippingCompanyId"
                                value="{{ old('shippingCompanyId', $shippingCompanyId) }}" class="form-control">
                                    <input type="hidden" name="paymentMethodId" value="{{ old('paymentMethodId', $paymentMethodId) }}"
                                class="form-control">
                                    <div class="form-group">
                                        <label for="username">Full name (on the card)</label>
                                        <input type="text" class="form-control" name="fullName" placeholder="Full Name" id="fullName" maxlength="50">
                                        <span class="error_stripe" id="fullName_error"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="cardNumber">Card number</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="cardNumber" placeholder="Card Number" id="cardNumber" maxlength="12">
                                            <div class="input-group-append">
                                                <span class="input-group-text text-muted">
                                                <i class="fab fa-cc-visa fa-lg pr-1"></i>
                                                <i class="fab fa-cc-amex fa-lg pr-1"></i>
                                                <i class="fab fa-cc-mastercard fa-lg"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <span class="error_stripe" id="cardNumber_error"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label><span class="hidden-xs">Expiration</span> </label>
                                                <div class="input-group">
                                                    <select class="form-control" name="month" id="month">
                                                        <option value="M">MM</option>
                                                        @foreach(range(1, 12) as $month)
                                                            <option value="{{$month}}">{{$month}}</option>
                                                        @endforeach
                                                    </select>
                                                   
                                                    <select class="form-control" name="year" id="year">
                                                        <option value="Y">YYYY</option>
                                                        @foreach(range(date('Y'), date('Y') + 10) as $year)
                                                            <option value="{{$year}}">{{$year}}</option>
                                                        @endforeach
                                                    </select>
                                                   
                                                </div>
                                                <span class="error_stripe month" id="month_error"></span>
                                                 <span class="error_stripe year" id="year_error"></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV 
                                                    <i class="fa fa-question-circle"></i></label>
                                                <input type="number" class="form-control" placeholder="CVV" name="cvv" id="cvv"  maxlength="3">
                                                <span class="error_stripe" id="cvv_error"></span>

                                            </div>
                                        </div>
                                    </div>
                                    <button class="subscribe btn btn-primary btn-block" type="submit" id="pay" > Confirm </button>
                                </form>
                            </div>
                        </div>
                    @endif
                    @if(\Str::lower($paymentMethodCode=='opayo'))
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="nav-tab-card">
                                @foreach (['danger', 'success'] as $status)
                                    @if(Session::has($status))
                                        <p class="alert alert-{{$status}}">{{ Session::get($status) }}</p>
                                    @endif
                                @endforeach
                                 
                                <div id="sp-container"></div>
                                    <p><a id="my-tokenisation-trigger" href="#">tokenise</a></p>
                                    <script type="text/javascript" src="https://pi-test.sagepay.com/api/v1/js/sagepay.js"></script>
                                    <script type="text/javascript">
                                        const checkout = sagepayCheckout({
                                            merchantSessionKey: 'b9e213be-087d-465e-93c3-ff4a7246cd41',
                                            onTokenise: function(tokenisationResult) {
                                                        if (tokenisationResult.success) {
                                                            mySubmit(tokenisationResult.cardIdentifier);
                                                        } else {
                                                            console.error(tokenisationResult.error.errorMessage);
                                                        }
                                                        }
                                        });
                                        $('#my-tokenisation-trigger').click(function(e) {
                                            e.preventDefault();
                                            checkout.tokenise();
                                        });
                                    </script>

                            </div>
                        </div>
                    @endif
                @endif
            </div>
        </div>
        <div class="col-lg-5 col-md-12">
            <div class="checkout-your-order">
                <h2 class="checkout-heading">Your order</h2>
                <div class="your-order-table table-responsive">
                    <table>
                        <tbody>
                        <tr>
                            <th class="product-name">
                                <strong>Subtotal</strong>
                            </th>
                            <th class="product-total">₤{{ $cartSubTotal }}</th>
                        </tr>
                        @if(session()->has('coupon'))
                            <tr>
                                <th class="product-name">
                                    <strong>Discount</strong>
                                    <small>({{ getNumbersOfCart()->get('discountCode') }})</small><br>
                                    <a wire:click.prevent="removeCoupon()"
                                              class="btn btn-link btn-sm text-decoration-none text-danger">
                                            <small>Remove coupon</small>
                                        </a>
                                </th>
                                <th class="product-total">- ₤{{ $cartDiscount }}</th>
                            </tr>
                        @endif
                        @if(session()->has('shipping'))
                            <tr>
                                <th class="product-name">
                                    <strong>Shipping</strong>
                                    <small>({{ getNumbersOfCart()->get('shippingCode') }})</small>
                                </th>
                                <th class="product-total">₤{{ $cartShipping }}</th>
                            </tr>
                        @endif
                        <tr>
                            <th class="product-name">
                                <strong>Tax</strong>
                            </th>
                            <th class="product-total">₤{{ $cartTax }}</th>
                        </tr>
                        <tr class="order-total">
                            <th>
                                <strong>Total</strong>
                            </th>
                            <td>
                                <strong><span>₤{{ $cartTotal }}</span></strong>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- <div class="checkout-coupon">
                    @if(!session()->has('coupon'))
                        <p>Have a coupon?</p>
                        <form wire:submit.prevent="applyDiscount()">
                            <div class="form-group">
                                <input wire:model="couponCode" type="text" placeholder="Coupon code" required/>
                                <input type="submit" value="Apply Coupon" />
                            </div>
                        </form>
                    @endif
                </div> -->
            </div>
        </div>
    </div>
</div>
<script>

    $(document).on('input',"#cardNumber", function() {
       
            if ($(this).val().length >= $(this).attr("maxlength")) {
                $(this).val($(this).val().slice(0,16)); 
            }
        });
      $(document).on('input',"#cvv", function() {
            if ($(this).val().length >= $(this).attr("maxlength")) {
                $(this).val($(this).val().slice(0,3)); 
            }
        });
    $(document).on('click', '#pay', function(e){
        var fullName= $('#fullName').val().replace(/\s/g, '');
        var cardNumber= $('#cardNumber').val().replace(/\s/g, '');
        var cvv = $('#cvv').val().replace(/\s/g, '');
        var month = $('#month').val();
        var year = $('#year').val();
        console.log();
        if(fullName.length < 1 || cardNumber.length<16 || cvv.length < 3 || month == 'M' || year == 'Y'){
            e.preventDefault(); 
        }else{
              $(this).unbind("click");
        }
        if(fullName.length < 1 || fullName.length==""){
            $('#fullName_error').html('Enter fullName.');
        }else{
            $('#fullName_error').html('');
        }
        if(cardNumber.length < 16){
            $('#cardNumber_error').html('Enter valid card number.');
        }else{
            $('#cardNumber_error').html('');
        }
        if(cvv.length < 3){
            $('#cvv_error').html('Enter valid cvv.');
        }else{
            $('#cvv_error').html('');
        }
        if(month == 'M'){
            $('#month_error').html('Select Month');
        }else{
            $('#month_error').html('');
        }
        if(year == 'Y'){
            $('#year_error').html('Select Year');
        }else{
            $('#year_error').html('');
        }
    });

    setTimeout(function(){
    $(".alert-dismissible").hide();
    }, 5000)

</script>