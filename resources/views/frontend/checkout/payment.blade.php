
@php
    $order = DB::table('orders')->where('ref_id', $order_id)->first();
    $user = DB::table('users')->where('id', $user_id)->first();
    $user_address1 =  DB::table('delivery_address')->where('user_id', $user_id)->orderBy('id','DESC')->first();
    $user_address2 =  DB::table('delivery_address')->where('id', $order->user_address_id)->first();
     $user_name = $user->full_name;
     $user_tel = $user->phone;
     $user_email = $user->email;
     $order_refId = $order->ref_id;
        if($user_address2 == ''){
            $user_add = $user_address1->address;
            $user_city = $user_address1->city;
            $user_zip = $user_address1->zip_code;
        }
        else {
            $user_add = $user_address2->address;
            $user_city = $user_address2->city;
            $user_zip = $user_address2->zip_code;
        }
            //
            $user_del_add = $user_address1->address;
            $user_del_city = $user_address1->city;
            $user_del_zip = $user_address1->zip_code;

@endphp
<!DOCTYPE HTML>
<html lang="en-US">
<head>
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
    <link href="https://fonts.googleapis.com/css2?family=Khand:wght@300;400;500;600;700&family=Yeseva+One&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="css/quest-v2.css">
    <link rel="stylesheet" href="css/quest-v2-respsv.css">
     <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
     <link rel="stylesheet" href="{{ asset('frontend_new/css/new-questionnaire.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/quest-v2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/quest-v2-respsv.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">


    <style>
        .sm-images img {
            max-width: 200px;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        main {
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .pay-col {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        iframe {
            width: 100%;
        }

        .text-d-c {
            text-align: left;
        }

        .text-d-c p {
            font-size: 23px;
            font-weight: 900;
            margin-bottom: 20px;
        }

        .text-d-c p i {
            padding: 0px 10px;
        }

        #st-form label {
            font-size: 18px !important;
            font-weight: 600;
        }

        .st-card-number__wrapper {
            margin-top: 10px;
        }

        button[type="submit"] {
            background-color: #000;
            margin: auto;
            padding: 10px 72px;
        }

        .error-field {
            background-color: #fff;
        }

        .user-dashboard {
            display: flex !important;
            align-items: center !important;
        }
        .google-pay-area, .apple-pay-area {
            display: flex;
            justify-content: center;
            width: 100%;
            margin-top: 20px;
        }
        .google-pay-area .google-pay-button {
            height: 44px;
        }
    </style>

    <livewire:styles />
    @yield('style')
    <livewire:scripts />
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    <x-livewire-alert::flash />
    <x-livewire-alert::scripts />
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery-1.12.0.min.js') }}"></script>
    <!-- Add CkEditor -->
    <!-- Matomo Tag Manager -->
    <script>
        var _mtm = window._mtm = window._mtm || [];
        _mtm.push({'mtm.startTime': (new Date().getTime()), 'event': 'mtm.Start'});
        (function() {
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.async=true; g.src='https://analytics.agenthealth.co.uk/js/container_JjcvL0pk.js';
            s.parentNode.insertBefore(g,s);
        })();
    </script>
    <!-- End Matomo Tag Manager -->
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KV2ZB6ZG');</script>
    <!-- End Google Tag Manager -->

</head>
<body class="" style="    color: #fff;
    background: #484F47;">

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KV2ZB6ZG"
            height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>

<section class="questionnaire-v2-main">
    <div class="quest-v2-header">
        <div class="container-fluid">
            <a class="quest-logo" href="{{ url('/') }}">
                <!-- <img src="images/quest-logo.png" alt=""> -->
                <img src="{{ asset('images/quest-logo.png')}}" alt="">
            </a>
        </div>
    </div>
    <div class="quest-v2-content">
        <div class="container-fluid">
            <div class="quest-v2-inner-wrap">

    <div class="py-5">
        <div class="container bg-image">
            <div class="row align-items-center">

                <div class="col-lg-6 pay-col">
{{--                    <div class="text-pay">--}}
{{--                        <figure>--}}
{{--                            <img src="{{ asset('frontend_new/images/logo-pay.png') }}" alt="">--}}
{{--                        </figure>--}}

{{--                    </div>--}}
                    <div class="card-design mb-40">
                        <h3 class="card-heading mb-30">Your Order</h3>
                        @foreach($prod_name as $product)
                                        @php
                                        $first_time_discount = $product->first_time_disc;
                                        $category_id = $product->category_id;
                                        $price = $product->price;
                                        $discount_price = abs( (float) $product->first_time_disc - (float) $product->price );
                                        $img = DB::table('media')->where('mediable_id',$product->id)->first();
                                        $tag = DB::table('product_tags')->where('product_id', $product->id)->first();
                                        if(isset($tag->tag_id)) {
                                        $type = DB::table('tags')->where('id',$tag->tag_id)->first();
                                        }
                                        $category_id = $product->category_id;
                                        @endphp
                        <div class="qos-product">
                            <figure>
                                <img class="img-fluid"
                                    src="{{ asset('storage/images/products/') }}{{ '/'. $img->file_name}}"
                                    alt="gent-img2">
                            </figure>
                            <div class="qos-product-cont">
                                <h5>{{ $product->name }}</h5>
                                <h5 id="p_name"></h5>
                            </div>
                            <div class="qos-product-price" style="display: flex;">
                           {{($product->subscription_duration == 1)? 'Monthly subscription':$product->subscription_duration.' Monthly subscription'}}
                            </div>
                        </div>
                        @endforeach
                        <div class="cstm-border"></div>
                        <form id="myForm">
                            <input type="hidden" name="_token" value="Lw9F4CbRYIZULxwOAxUIMs5vnGYVBe8k3ie1idTc">
                            @if($price > $first_time_discount)
                                <div class="qos-product-text mb-20 text-dark">Subtotal <div class="price text-dark">
                                        £{{$price}}.00</div>
                                </div>
                            @else
                                <div class="qos-product-text mb-20 text-dark">Subtotal <div class="price text-dark">
                                        £{{$first_time_discount}}.00</div>
                                </div>
                            @endif

                            <p class="clearText">{{$product->subscription_duration}} x months supply of treatment</p>

                            <div class="qos-product-text">
                                <ul class="list-group w-100 ">
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center border-0 p-0">
                                        Online Consultation and Health Assessment
                                        <span class="text-success">Included</span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center border-0 p-0">
                                        Continuous Support with Ongoing Reviews
                                        <span class="text-success">Included</span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center border-0 p-0">
                                        Medical Evaluation and Screening
                                        <span class="text-success">Included</span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center border-0 p-0">
                                        Shipping
                                        <span class="text-success">Included</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="cstm-border"></div>
                            <div class="qos-product-multi qos-product-text">
                                <ul class="list-group w-100">
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center border-0 p-0">
                                        First order discount
                                        @if($price > $first_time_discount)
                                           <span class="">-£{{$discount_price}}</span>
                                        @else
                                           <span class="">£0</span>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                            <div class="cstm-border"></div>
                            <div class="total-amount">
                                <h3>Total</h3>
                                <h3 id="final_price" class="text-default"> <span class="text-grey" style="margin: 0"> @if($category_id != 31)  <span class="text-grey"> <del>£{{$price}}</del></span> @endif <span id="first_time_disc"> £{{$first_time_discount}}.00 <br>

                                </h3>
                                <!-- <p><span id="user_off"></span>%Discount</p> -->
                            </div>

                            @if($cc!="")
                                <div class="total-amount">
                                    <h3>Coupon Discount</h3>
                                    <h3>- £{{round(($first_time_discount * .1),2)}}</h3>
                                </div>
                                <div class="total-amount">
                                    <h3>Order Total</h3>
                                    <h3 class="text-success">£{{round(($first_time_discount * .9),2)}}</h3>
                                </div>
                            @endif
                            <div class="cstm-border"></div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="button-box">
                        <!-- form to make the payment through the trust payments -->
                        <!-- <form method="POST" action="https://payments.securetrading.net/process/payments/choice">
                                <input type="hidden" name="sitereference" value="test_agenthealth119402">
                                <input type="hidden" name="stprofile" value="default">
                                <input type="hidden" name="currencyiso3a" value="GBP">
                                <input type="hidden" name="mainamount" value="{{ $final_price }}.00">


                                <input type="hidden" name="stdefaultprofile" value="st_paymentcardonly">


                                <input type=hidden name="ruleidentifier" value="STR-6">

                                <input type=hidden name="successfulurlredirect" value="http://49.249.236.30:3007/agent/public/checkout/success1">


                                <input type=hidden name="ruleidentifier" value="STR-13">

                                <input type=hidden name="errorurlredirect" value="http://49.249.236.30:3007/agent/public/checkout/error">

                                <input type="hidden" name="version" value="2">
                                <input class="white-trans-btn" type="submit" value="Pay">
                        </form>  -->

                        <!-- <form method="POST" action="https://payments.securetrading.net/process/payments/choice">
                            <input type="hidden" name="sitereference" value="test_agenthealth119402">
                            <input type="hidden" name="currencyiso3a" value="GBP">
                            <input type="hidden" name="mainamount" value="10.00">
                            <input type="hidden" name="stprofile" value="default">
                            <input type="hidden" name="version" value="2">
                            <input type="hidden" name="subscriptionunit" value="MONTH">
                            <input type="hidden" name="subscriptionfrequency" value="1">
                            <input type="hidden" name="subscriptionnumber" value="1">
                            <input type="hidden" name="subscriptionfinalnumber" value="12">
                            <input type="hidden" name="subscriptiontype" value="RECURRING">
                            <input type="hidden" name="credentialsonfile" value="1">
                            <input type="submit" value="Pay">
                        </form> -->

                        <!-- <form method="POST" action="https://payments.securetrading.net/process/payments/choice">
                                <input type="hidden" name="sitereference" value="test_agenthealth119402">
                                <input type="hidden" name="stprofile" value="default">
                                <input type="hidden" name="currencyiso3a" value="GBP">
                                <input type="hidden" name="mainamount" value="10.00">
                                <input type="hidden" name="version" value="2">
                                <input type="hidden" name="orderedrequesttypedescriptions" value="THREEDQUERY,ACCOUNTCHECK,SUBSCRIPTION">
                                <input type="hidden" name="subscriptionunit" value="MONTH">
                                <input type="hidden" name="subscriptionfrequency" value="1">
                                <input type="hidden" name="subscriptionnumber" value="1">
                                <input type="hidden" name="subscriptionfinalnumber" value="12">
                                <input type="hidden" name="subscriptiontype" value="RECURRING">
                                <input type="hidden" name="credentialsonfile" value="1">
                                <input type="submit" value="Pay">
                        </form> -->
                        <main class="bg-white card-design">
                            <img src="{{asset('frontend_new/images/payments.png')}}" class="img-fluid mb-5"/>

                            <div id="st-notification-frame"></div>
                            <form id="st-form">

                                <div class="text-d-c">
                                    <p class="text-dark"> <i class="fa-solid fa-credit-card"></i> Debit or credit card</p>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div id="st-card-number"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div id="st-expiration-date"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div id="st-security-code"></div>
                                    </div>
                                </div>
                                <button type="submit">Pay securely</button>
                                <div class='google-pay-area'>
                                    <div id="google-pay-button"></div>
                                </div>
                            </form>

                            <p class="mt-4"><small style="font-size: 10px; color: #ccc;">After your initial discounted purchase, automatic billing of the regular subtotal amount will occur in line with your chosen subscription frequency, starting after the current period </small></p>
                        </main>

                        <div class="d-none d-xs-block d-md-none">
                        <div class="sm-images" style="background: white; border-radius: 20px; margin-top: 40px; padding: 20px 80px;">
                            <div class="container">
                                <section class="container-fluid">
                                    <div class="row footer-logos-header">
                                        <div class=" col text-center">
                                            <h4 style="color: #000;">We are regulated by and associated with</h4>
                                        </div>
                                    </div>

                                    <div class="row footer-logos">
                                        <div class="col-sm-4 col-12 text-center">
                                            <img src="{{asset('frontend_new/images/mhra.webp')}}" alt="Medicines and Healthcare products Regulatory Agency" class="img-fluid"/>
                                            {{--        <h6>Medicines and Healthcare products Regulatory Agency</h6>--}}
                                        </div>

                                        <div class=" col-sm-4 col-12 text-center">
                                            <img src="{{asset('frontend_new/images/npa.webp')}}" alt="Regulated by the NPA" class="img-fluid"/>
                                            {{--        <h6>Regulated by the NPA</h6>--}}
                                        </div>

                                        <div class="col-sm-4 col-12 text-center">
                                            <img src="{{asset('frontend_new/images/gpc.webp')}}" alt="GPhC Regulated Pharmacy" class="img-fluid"/>
                                            {{--        <h6>GPhC Regulated Pharmacy</h6>--}}
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        </div>

                        <!-- <form method="POST" action="https://payments.securetrading.net/process/payments/choice">
                            <input type="hidden" name="credentialsonfile" value="1">
                            <input type="hidden" name="currencyiso3a" value="GBP">
                            <input type="hidden" name="mainamount" value="{{ $final_price }}.00">
                            <input type="hidden" name="sitereference" value="test_agenthealth119402">
                            <input type="hidden" name="sitesecurity" value="59-0051c01ec6601235ee72c033f76863f5dc0de7ab9951fa6b2193615dadd63be9">
                            <input type="hidden" name="sitesecuritytimestamp" value="2023-08-29 14:22:37">
                            <input type="hidden" name="stprofile" value="default">
                            <input type="hidden" name="subscriptionnumber" value="1">
                            <input type="hidden" name="subscriptiontype" value="RECURRING">
                            <input type="hidden" name="version" value="2">

                            <input type="hidden" name="stdefaultprofile" value="st_paymentcardonly">
                            <input type=hidden name="ruleidentifier" value="STR-6">
                            <input type=hidden name="successfulurlredirect" value="http://49.249.236.30:3007/agent/public/checkout/success1">
                            <input type=hidden name="ruleidentifier" value="STR-13">
                            <input type=hidden name="errorurlredirect" value="http://49.249.236.30:3007/agent/public/checkout/error">

                            <input type="submit" value="Pay">
                        </form> -->

                        <!-- <form method="POST" action="https://payments.securetrading.net/process/payments/choice">
                                <input type="hidden" name="credentialsonfile" value="1">
                                <input type="hidden" name="currencyiso3a" value="GBP">
                                <input type="hidden" name="mainamount" value="100.00">
                                <input type="hidden" name="sitereference" value="test_agenthealth119402">
                                <input type="hidden" name="sitesecurity" value="hee879a9ab97753b3a768925d50842f10e19fea03fef0b820026b6df92d415866">
                                <input type="hidden" name="sitesecuritytimestamp" value="2023-08-22 17:22:37">
                                <input type="hidden" name="stprofile" value="default">
                                <input type="hidden" name="subscriptionnumber" value="1">
                                <input type="hidden" name="subscriptiontype" value="RECURRING">
                                <input type="hidden" name="version" value="2">
                                <input type="submit" value="Pay">
                        </form> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- form to make the payment through the trust payments -->

    </div>

                <div class=" bg-white" style="border-radius: 20px; margin: 15px; color: #000; padding-top: 40px;">
                    @include('partials.frontend.above-footer')
                </div>
            </div>




        </div>
    </div>

</section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script>
    <script type="text/javascript" src="https://cdn.eu.trustpayments.com/js/latest/st.js "></script>
    <script>
    function formatCurrentDate() {
        const currentDate = new Date();

        const year = currentDate.getFullYear();
        const month = (currentDate.getMonth() + 1).toString().padStart(2, '0');
        const day = currentDate.getDate().toString().padStart(2, '0');

        const formattedDate = `${year}-${month}-${day}`;
        return formattedDate;
    }

    function formatNextMonthDate() {
        const currentDate = new Date();

        var year = currentDate.getFullYear();
        var month = (currentDate.getMonth() + 2).toString().padStart(2, '0');
        const day = currentDate.getDate().toString().padStart(2, '0');

        if (month > 12) {
            // If the next month is greater than 11 (December), add 1 to the year and set the month to 0 (January)
            month = '01';
            year += 1;
        }

        const formattedDate = `${year}-${month}-${day}`;
        return formattedDate;


    }

    function formatThreeMonthDate() {
        const currentDate = new Date();

        var year = currentDate.getFullYear();
        var month = (currentDate.getMonth() + 4).toString().padStart(2, '0');
        const day = currentDate.getDate().toString().padStart(2, '0');

        if (month > 12) {
            // If the next month is greater than 11 (December), add 1 to the year and set the month to 0 (January)
            month = '01';
            year += 1;
        }

        const formattedDate = `${year}-${month}-${day}`;
        return formattedDate;


    }

    const formattedCurrentDate = formatCurrentDate();

    <?php
        if($subscription_dur==3) {
            ?>
    const subscribtionPaymentDate = formatThreeMonthDate();

    <?php

        }
        else {
            ?>

    const subscribtionPaymentDate = formatNextMonthDate();

    <?php

        }
        ?>
    const subscriptionDuration = <?php echo $subscription_dur ?>;
    const finalPrice = <?php echo $final_price ?>;
    console.log(finalPrice);


    /**
 * Define the version of the Google Pay API referenced when creating your
 * configuration
 *
 */
const baseRequest = {
    apiVersion: 2,
    apiVersionMinor: 0,
};

/**
 * Card networks supported by your site and your gateway
 *
 */
const allowedCardNetworks = [
    "AMEX",
    "DISCOVER",
    "JCB",
    "MASTERCARD",
    "MIR",
    "VISA",
];

/**
 * Card authentication methods supported by your site and your gateway
 *
 * supported card networks
 */
const allowedCardAuthMethods = ["PAN_ONLY", "CRYPTOGRAM_3DS"];

/**
 * Identify your gateway and your site's gateway merchant identifier
 *
 * The Google Pay API response will return an encrypted payment method capable
 * of being charged by a supported gateway after payer authorization
 *
 */
const tokenizationSpecification = {
    type: "PAYMENT_GATEWAY",
    parameters: {
        gateway: "example",
        gatewayMerchantId: "Example Merchant",
    },
};

/**
 * Describe your site's support for the CARD payment method and its required
 * fields
 *
 */
const baseCardPaymentMethod = {
    type: "CARD",
    parameters: {
        allowedAuthMethods: allowedCardAuthMethods,
        allowedCardNetworks: allowedCardNetworks,
    },
};

/**
 * Describe your site's support for the CARD payment method including optional
 * fields
 *
 */
const cardPaymentMethod = Object.assign({}, baseCardPaymentMethod, {
    tokenizationSpecification: tokenizationSpecification,
});

/**
 * An initialized google.payments.api.PaymentsClient object or null if not yet set
 *
 */
let paymentsClient = null;

/**
 * Configure your site's support for payment methods supported by the Google Pay
 * API.
 *
 * Each member of allowedPaymentMethods should contain only the required fields,
 * allowing reuse of this base request when determining a viewer's ability
 * to pay and later requesting a supported payment method
 *
 */
function getGoogleIsReadyToPayRequest() {
    return Object.assign({}, baseRequest, {
        allowedPaymentMethods: [baseCardPaymentMethod],
    });
}

/**
 * Configure support for the Google Pay API
 *
 */
function getGooglePaymentDataRequest() {
    const paymentDataRequest = Object.assign({}, baseRequest);
    paymentDataRequest.allowedPaymentMethods = [cardPaymentMethod];
    paymentDataRequest.transactionInfo = getGoogleTransactionInfo();
    paymentDataRequest.merchantInfo = {
        // merchantId: 'BCR2DN4T5GROHDAU',
        merchantName: "Example Merchant",
    };

    paymentDataRequest.callbackIntents = [
        "SHIPPING_ADDRESS",
        "SHIPPING_OPTION",
        "PAYMENT_AUTHORIZATION",
    ];
    paymentDataRequest.shippingAddressRequired = true   ;
    paymentDataRequest.shippingAddressParameters = {};
    paymentDataRequest.shippingOptionRequired = true;

    return paymentDataRequest;
}

/**
 * Return an active PaymentsClient or initialize
 *
 */
function getGooglePaymentsClient() {
    if (paymentsClient === null) {
        paymentsClient = new google.payments.api.PaymentsClient({
            environment: "TEST",
            merchantInfo: {
                merchantName: "Example Merchant",
                merchantId: "01234567890123456789",
            },
            paymentDataCallbacks: {
                onPaymentAuthorized: onPaymentAuthorized,
                onPaymentDataChanged: onPaymentDataChanged,
                // onMailVerificiatJ Iz
            },
        });
    }
    return paymentsClient;
}

function onPaymentAuthorized(paymentData) {
    return new Promise(function (resolve, reject) {
        // handle the response
        processPayment(paymentData)
            .then(function () {
                resolve({ transactionState: "SUCCESS" });
            })
            .catch(function () {
                resolve({
                    transactionState: "ERROR",
                    error: {
                        intent: "PAYMENT_AUTHORIZATION",
                        message: "Insufficient funds",
                        reason: "PAYMENT_DATA_INVALID",
                    },
                });
            });
    });
}

/**
 * Handles dynamic buy flow shipping address and shipping options callback intents.
 *
 */
function onPaymentDataChanged(intermediatePaymentData) {
    return new Promise(function (resolve, reject) {
        let shippingAddress = intermediatePaymentData.shippingAddress;
        let shippingOptionData = intermediatePaymentData.shippingOptionData;
        let paymentDataRequestUpdate = {};

        if (
            intermediatePaymentData.callbackTrigger == "INITIALIZE" ||
            intermediatePaymentData.callbackTrigger == "SHIPPING_ADDRESS"
        ) {
            if (shippingAddress.administrativeArea == "NJ") {
                paymentDataRequestUpdate.error =
                    getGoogleUnserviceableAddressError();
            } else {
                paymentDataRequestUpdate.newShippingOptionParameters =
                    getGoogleDefaultShippingOptions();
                let selectedShippingOptionId =
                    paymentDataRequestUpdate.newShippingOptionParameters
                        .defaultSelectedOptionId;
                paymentDataRequestUpdate.newTransactionInfo =
                    calculateNewTransactionInfo(selectedShippingOptionId);
            }
        } else if (
            intermediatePaymentData.callbackTrigger == "SHIPPING_OPTION"
        ) {
            paymentDataRequestUpdate.newTransactionInfo =
                calculateNewTransactionInfo(shippingOptionData.id);
        }

        resolve(paymentDataRequestUpdate);
    });
}

/**
 * Helper function to create a new TransactionInfo object.
 *
 */
function calculateNewTransactionInfo(shippingOptionId) {
    let newTransactionInfo = getGoogleTransactionInfo();

    let shippingCost = getShippingCosts()[shippingOptionId];
    newTransactionInfo.displayItems.push({
        type: "LINE_ITEM",
        label: "Shipping cost",
        price: String(shippingCost),
        status: "FINAL",
    });

    let totalPrice = 0.0;
    newTransactionInfo.displayItems.forEach(
        (displayItem) => (totalPrice += parseFloat(displayItem.price))
    );
    newTransactionInfo.totalPrice = totalPrice.toString();

    return newTransactionInfo;
}

/**
 * Initialize Google PaymentsClient after Google-hosted JavaScript has loaded
 *
 * Display a Google Pay payment button after confirmation of the viewer's
 * ability to pay.
 */
function onGooglePayLoaded() {
    const paymentsClient = getGooglePaymentsClient();
    paymentsClient
        .isReadyToPay(getGoogleIsReadyToPayRequest())
        .then(function (response) {
            if (response.result) {
                addGooglePayButton();
                // @todo prefetch payment data to improve performance after confirming site functionality
                // prefetchGooglePaymentData();
            }
        })
        .catch(function (err) {
            // show error in developer console for debugging
            console.error(err);
        });
}

/**
 * Add a Google Pay purchase button alongside an existing checkout button
 *
 */
function addGooglePayButton() {
    const paymentsClient = getGooglePaymentsClient();
    const button = paymentsClient.createButton({
        onClick: onGooglePaymentButtonClicked,
        allowedPaymentMethods: [baseCardPaymentMethod],
    });
    document.getElementById("google-pay-button").appendChild(button);
}

/**
 * Provide Google Pay API with a payment amount, currency, and amount status
 *
 */
function getGoogleTransactionInfo() {
    const prodNames = <?php echo json_encode($prod_name);?>;
    return {
        displayItems: prodNames.map(item => {
            return {
                label: item.name,
                type: "SUBTOTAL",
                price: String(item.first_time_disc),
            }}),
        countryCode: "GB",
        currencyCode: "GBP",
        totalPriceStatus: "FINAL",
        totalPrice: String(<?php echo $final_price ?>),
        totalPriceLabel: "Total",
    };
}

/**
 * Provide a key value store for shippping options.
 */
function getShippingCosts() {
    return {
        "shipping-001": "0.00",
    };
}

/**
 * Provide Google Pay API with shipping address parameters when using dynamic buy flow.
 *
 */
function getGoogleShippingAddressParameters() {
    return {
        allowedCountryCodes: ["UK"],
        phoneNumberRequired: true,
    };
}

/**
 * Provide Google Pay API with shipping options and a default selected shipping option.
 *
 */
function getGoogleDefaultShippingOptions() {
    return {
        defaultSelectedOptionId: "shipping-001",
        shippingOptions: [
            {
                id: "shipping-001",
                label: "Free: Standard shipping",
                description: "Free Shipping delivered in 5 business days.",
            },
        ],
    };
}

/**
 * Provide Google Pay API with a payment data error.
 *
 */
function getGoogleUnserviceableAddressError() {
    return {
        reason: "SHIPPING_ADDRESS_UNSERVICEABLE",
        message: "Cannot ship to the selected address",
        intent: "SHIPPING_ADDRESS",
    };
}

/**
 * Prefetch payment data to improve performance
 *
 */
function prefetchGooglePaymentData() {
    const paymentDataRequest = getGooglePaymentDataRequest();
    // transactionInfo must be set but does not affect cache
    paymentDataRequest.transactionInfo = {
        totalPriceStatus: "NOT_CURRENTLY_KNOWN",
        currencyCode: "USD",
    };
    const paymentsClient = getGooglePaymentsClient();
    paymentsClient.prefetchPaymentData(paymentDataRequest);
}

/**
 * Show Google Pay payment sheet when Google Pay payment button is clicked
 */
function onGooglePaymentButtonClicked() {
    const paymentDataRequest = getGooglePaymentDataRequest();
    paymentDataRequest.transactionInfo = getGoogleTransactionInfo();

    const paymentsClient = getGooglePaymentsClient();
    paymentsClient.loadPaymentData(paymentDataRequest);
}

/**
 * Process payment data returned by the Google Pay API
 *
 *
 */
function processPayment(paymentData) {
    return new Promise(function (resolve, reject) {
        setTimeout(function () {
            paymentToken = paymentData.paymentMethodData.tokenizationData.token;
            if (paymentToken != "") {
                jQuery.ajax({
                    url: "{{ url('google-payment') }}",
                    method: "POST",
                    data: {
                        data: paymentData,
                        amount: <?php echo $total_price; ?>,
                        order_id: '<?php echo $order_id; ?>',
                        _token: "{{ csrf_token() }}",
                    },
                    success: function (result) {
                        if (result.success) {
                            window.location.href = result.url;
                        } else {
                            alert("Some thing went wrong, please tray again");
                        }
                    },
                });
            }

            resolve({});
        }, 3000);
    });
}

    </script>
    <script async src="https://pay.google.com/gp/p/js/pay.js" onload="onGooglePayLoaded()"></script>
    <script>
    // console.log(formattedCurrentDate);  // Output: '2023-10-05' (assuming the current date is October 5, 2023)
    </script>
    <script>
    (function() {
        const header = {
            alg: "HS256",
            typ: "JWT"
        };
        const subscriptionnumber = "1";
        // const amount = (subscriptionnumber === "1") ? 122 : 143;
        const amount = finalPrice;
        const accounttypedescription = "ECOM";
        const currencyiso3a = "GBP";
        const sitereference = "agenthealth119403";
        // const sitereference = "test_agenthealth119402";
        const subscriptiontype = "RECURRING";
        const subscriptionunit = "MONTH";
        const subscriptionfrequency = subscriptionDuration;
        const subscriptionfinalnumber = "12";
        const subscriptionbegindate = subscribtionPaymentDate;
        const credentialsonfile = "1";
        const requesttypedescriptions = ["THREEDQUERY", "AUTH", "SUBSCRIPTION"];
        const locale = "en_GB";
        const orderreference = "{{ $order_refId }}";
        //26oct23 delivery details
        const billingfirstname = "{{ $user_name }}";
        const billingtelephone = "{{ $user_tel }}";
        const billingemail = "{{ $user_email }}";
        // const billingstreet = "{{ $user_add }}";
        const billingtown = "{{ $user_city }}";
        const billingpostcode = "{{ $user_zip }}";
        const billingpremise = "{{ $user_add }}";

        const customerfirstname = "{{ $user_name }}";
        const customertelephone = "{{ $user_tel }}";
        const customeremail = "{{ $user_email }}";
        // const customerstreet = "{{ $user_del_add }}";
        const customertown = "{{ $user_del_city }}";
        const customerpostcode = "{{ $user_del_zip }}";
        const customerpremise = "{{ $user_del_add }}";
        const billingcountryiso2a = "GB";
        const customercountryiso2a = "GB";
        var payload = {
            payload: {
                accounttypedescription: accounttypedescription,
                baseamount: amount * 100,
                currencyiso3a: currencyiso3a,
                sitereference: sitereference,
                subscriptiontype: subscriptiontype,
                subscriptionunit: subscriptionunit,
                subscriptionfrequency: subscriptionfrequency,
                subscriptionnumber: subscriptionnumber,
                subscriptionfinalnumber: subscriptionfinalnumber,
                subscriptionbegindate: subscriptionbegindate,
                credentialsonfile: credentialsonfile,
                requesttypedescriptions: requesttypedescriptions,
                orderreference: orderreference,
                //26oct23
                billingfirstname: billingfirstname,
                billingtelephone: billingtelephone,
                // billingstreet: billingstreet,
                billingtown: billingtown,
                billingpostcode: billingpostcode,
                billingemail: billingemail,
                billingpremise: billingpremise,
                billingcountryiso2a: billingcountryiso2a,

                customerfirstname: customerfirstname,
                customertelephone: customertelephone,
                // customerstreet: customerstreet,
                customertown: customertown,
                customerpostcode: customerpostcode,
                customeremail: customeremail,
                customerpremise: customerpremise,
                customercountryiso2a: customercountryiso2a,


                // accounttypedescription:"RECUR",

                locale: locale
            },
            iat: Math.floor(Date.now() / 1000),
            iss: "jwt@agenthealth.com"
        };
        const base64UrlHeader = btoa(JSON.stringify(header)).replace(/=/g, '').replace(/\+/g, '-').replace(/\//g,
            '_');
        const base64UrlPayload = btoa(JSON.stringify(payload)).replace(/=/g, '').replace(/\+/g, '-').replace(/\//g,
            '_');
        const tokenContent = `${base64UrlHeader}.${base64UrlPayload}`;
        const secret = "59-0051c01ec6601235ee72c033f76863f5dc0de7ab9951fa6b2193615dadd63be9";
        const signature = CryptoJS.HmacSHA256(tokenContent, secret);
        const base64UrlSignature = CryptoJS.enc.Base64.stringify(signature).replace(/=/g, '').replace(/\+/g, '-')
            .replace(/\//g, '_');
        const jwt = `${tokenContent}.${base64UrlSignature}`;
        console.log("JWT Token are:------", jwt);
        try {
            var st = SecureTrading({
                jwt: jwt,
            });

            st.Components()

        } catch (error) {
            console.error("Error initializing SecureTrading:", error);
        }
    })();
    </script>


</body>
</html>
