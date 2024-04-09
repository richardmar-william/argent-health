<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="language" content="en" />
    <meta name="country" content="us" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="INDEX, FOLLOW" />
    <title>Cart Product</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Khand:wght@300;400;500;600;700&family=Yeseva+One&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/quest-v2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/quest-v2-respsv.css') }}">
    <link rel="stylesheet" href="{{ asset('css/quest-v2.1.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart-product.css') }}">

    <livewire:styles />
    @yield('style')
    <livewire:scripts />
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery-1.12.0.min.js') }}"></script>
    <!-- Add CkEditor -->
    <style>
        .swiper {
            width: 100%;
        }
        .swiper-pagination {
            display: none;
        }
        .swiper-button-prev, .swiper-rtl .swiper-button-next {
            left: var(--swiper-navigation-sides-offset, -5px);
            right: auto;
            color: #747575;
            display: none;
        }
        .swiper-button-next, .swiper-rtl .swiper-button-prev {
            right: var(--swiper-navigation-sides-offset, -5px);
            left: auto;
            color: #747575;
            display: none;
        }
        @media screen and (max-width: 992px) {
            .swiper {
                width: 95%;
                margin: 0px;
                overflow: visible;
            }
            .swiper-pagination {
                display: block;
            }

            .swiper-button-prev, .swiper-rtl .swiper-button-next {
                display: flex;
            }
            .swiper-button-next, .swiper-rtl .swiper-button-prev {
                display: flex;
            }
        }
        @media screen and (min-width: 992px) {
            .swiper-wrapper {
                flex-wrap: wrap;
            }
        }
        .tablet-100size {
            width: 100%;
        }

        .swiper-button-prev::after {
            content: "";
        }
        .swiper-button-next::after {
            content: "";
        }

    </style>
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
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KV2ZB6ZG"
            height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<section class="questionnaire-v2-main">
    <div class="quest-v2-header">
        <div class="container-fluid">
            <a class="quest-logo" href="{{ url('/') }}">
                <!-- <img src="images/quest-logo.png" alt=""> -->
                <img src="{{ asset('images/quest-logo.png')}}" alt="">
            </a>
        </div>
    </div>
        <div class="quest-v2-content auth-view <?php echo Auth::check()?"d-none":""?>">
            <div class="quest-v21-signin">
                <div class="img-view"><img src="/frontend/images/signin.jpg"></div>
                <form class="quest-v21-signin-form" action="{{ route('login') }}" method="post">
                    @csrf
                    <input type="hidden" name="session_id" value="<?php echo $session_id;?>">
                    <input type="hidden" name="log-in" value="cart_product">
                    <h1>
                        <div>Please enter</div>
                        <span>your email</span>
                    </h1>
                    <h4>Enter Your Email to get started</h4>
                    <div class=" form-group input-email">
                        <label for="email" class="form-label">Email Address:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                    </div>
                    @error('email')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-group input-password">
                        <label for="pwd" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                    </div>
                    <button type="button" class='btn-d-black' id="btn_signin">Continue</button>
                </form>
            </div>
        </div>

    @if($category == "30" || $category == "31" || $category == "32" || $category == "33")
    <div class="container-fluid mt-3 choose-perfer-content authed-view <?php echo (!($category == "30" || $category == "31" || $category == "32" || $category == "33") || !Auth::check()) ? "d-none":""?>">
        <div class="row choose-prefer-contet-header">
            <div class="col col-lg-8 col-md-12 p-3 choose-prefer">
                <div class="choose-prefer-title">Please choose your  </div>
                <div>preferred monthly </div>
                <div>treatment</div>
            </div>
            <div class="col p-3 text-right recommend-button">
                <a class="btn-d-trans btn-wt-300" href="javascript:void(0)">Recommended for you</a>
            </div>
        </div>
        @php
        $recom_product = \App\Models\Temp::where('session_id',
                                                $session_id)->first();
        $ques_30 = json_decode($recom_product->jason_data);
        $con1 = array_column($ques_30, 'answer');
        $treat_method = null;
        if($category == 30) {
            if(in_array("Lactose", $con1)) $treat_method = "Lactose";
            else if(in_array("Minoxidil", $con1)) $treat_method = "Minoxidil";
            else if(in_array("Finasteride", $con1)) $treat_method = "Finasteride";
            else $treat_method = "Lactose";
        }
        if($category == 31) {
            $treat_method = "Beard";
        }
        if($category == 32) {
            if(in_array("1 hour before sexual intercourse", $con1)) $treat_method = "1 hour before sexual intercourse";
            else if(in_array("I'd rather not plan and take the tablet beforehand", $con1)) $treat_method = "I'd rather not plan and take the tablet beforehand";
            else $treat_method = "Erectile_Extra";

        }
        if($category == 33) {
            if(in_array("Serotonin reuptake inhibitors i.e priligy", $con1)) $treat_method = "Serotonin reuptake inhibitors i.e priligy";
            if(in_array("I can't tolerate even small amounts of lactose", $con1)) $treat_method = "I can't tolerate even small amounts of lactose";
            else if(in_array("I'm comfortable with proceeding to be assessed for a prescription", $con1)) $treat_method = "I'm comfortable with proceeding to be assessed for a prescription";
            else if(in_array("Lidocaine or other local anesthetics", $con1)) $treat_method = "Lidocaine or other local anesthetics";
            else $treat_method = "Lidocaine or other local anesthetics";

        }
        $product1 = \App\Models\Product::whereRaw('find_in_set("'.$treat_method.'",treat_method)')->orderBy('id', 'ASC')->get();
        @endphp
        <div class="swiper" id="rec_prod">
            <div class="recommended-product-list swiper-wrapper <?php echo sizeof($product1) == 1 ?  "single" : ""; ?>" >

                @foreach($product1 as $pkey => $products)
                    @php
                    $proList = [];
                    $tags=[];
                    for($i = 0 ; $i < sizeof($productList) ; $i ++) {
                        if($category == 30 || $category == 31 ) {
                            if($productList[$i]["type"] == null || $productList[$i]['type'] == "") continue;
                            if($productList[$i]['type'] == $products->type ) {
                                if(is_array($productList[$i]['tags']) && sizeof($productList[$i]['tags']) > 0) {
                                    $productList[$i]['tag'] = $productList[$i]['tags'][0]['name'];
                                    array_push($tags, $productList[$i]['tag']);
                                    array_push($proList, $productList[$i]);
                                }
                            }
                        }
                        else  {
                            if($productList[$i]['type'] == $products->type && $productList[$i]['category_id'] == $category) {
                                $productList[$i]['tag'] = $productList[$i]['quantity_mg']."mg";
                                $flag = false;
                                foreach($proList as $proItem) {

                                    if($proItem['quantity_mg'] == $productList[$i]['quantity_mg']) {
                                        $flag = true;
                                        break;
                                    }
                                }
                                if(!$flag) {
                                    array_push($tags, $productList[$i]['tag']);
                                    array_push($proList, $productList[$i]);
                                }
                            }
                        }
                    }
                    array_multisort($tags, SORT_ASC, $proList);
                    @endphp
                        <div class=" product-card swiper-slide">
                            <div class="tag-selector-area">
                                <ul class="nav nav-tabs tag-selector"  role="tablist">
                                    <?php
                                    foreach($proList as $key => $item) {
                                        echo "<li class='nav-item ".($key == 0 ? "nav-item-selected":"")."'>
                                                <a class='nav-link' data-bs-toggle='tab' href='#recom_{$products->id}_{$key}'>{$item['tag']}</a>
                                            </li>";
                                    }
                                    ?>
                                </ul>
                            </div>

                            <div class="tab-content">
                            @foreach($proList as $iKey => $proItem)
                                @php
                                $media = DB::table('media')->where('mediable_id',$proItem['id'])->first();
                                $pro_tag = DB::table('product_tags')->where('product_id',$proItem['id'])->first();
                                $tags = [];
                                if($pro_tag)
                                    $tags = DB::table('tags')->where('id', $pro_tag->tag_id)->first();
                                @endphp
                                <div class="row container tab-pane product-info <?php echo $iKey == 0 ? "active" :"" ?>" id="recom_{{$products->id}}_{{$iKey}}">
                                    <div class="col col-12">
                                        <figure style="display: flex; justify-content: center">
                                            <img src="{{asset('storage/images/products/')}}{{ '/'. $media->file_name}}" width="75%" alt="">
                                        </figure>
                                    </div>
                                    <div class="col col-12 product-detail-info">
                                        <p class="product-highlite">{{$proItem['highlite'] ? $proItem['highlite'] : "Pill free option"}}</p>
                                        <h1 class='product-name'>{{$proItem['name']}}</h1>
                                        <p class="product-detail-description">{{strip_tags($proItem['description'])}}</p>
                                        <div class="product-price">
                                            {{ 'Starting at £'.$proItem['first_time_disc']." ".($proItem['subscription_duration'] == 1 ? 'a month' : $proItem['subscription_duration']." months") }}
                                        </div>
                                        @if($category == 33 || $category == 32)
                                        <div class="choose-tablets">
                                            <h4>Choose your tablets per month</h4>
                                            <div class="tablets-items">
                                                @php
                                                $tablets = [];
                                                foreach($productList as $productItem) {
                                                    if($productItem['type'] == $proItem['type'] && $productItem['quantity_mg'] == $proItem['quantity_mg'] && $category == $productItem['category_id']) {
                                                        array_push($tablets, $productItem);
                                                    }
                                                }
                                                @endphp

                                                @foreach($tablets as $tablet)
                                                <div  class="tablets-item <?php if($tablet['id'] == $proItem['id']) echo "selected"?>" data-id="<?php echo $tablet['id'];?>">
                                                    <div>{{$tablet['quantity']}}</div>
                                                    <div>£{{number_format($tablet['first_time_disc'] /$tablet['quantity'], 2)}}/tablet</div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        @endif
                                        <div class="product-toolbar row">
                                            <div class="col-md-6 col-sm-12">
                                                <button type="button" class="btn-d-black show-product-modal" data-product="{{ json_encode($proItem) }}" data-image = "{{asset('storage/images/products/').'/'.$media->file_name  }}">Learn more</button>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <button class="btn-d-black checkout-btn" onclick="AddToCart('<?php echo $proItem['id'];?>')" >Continue</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                            </div>
                        </div>
                @endforeach
            </div>
            <div class="swiper-button-prev"><?xml version="1.0" encoding="UTF-8"?>
                <svg xmlns="http://www.w3.org/2000/svg" id="arrow-circle-down" viewBox="0 0 24 24" width="512" height="512"><path d="M24,12A12,12,0,1,0,12,24,12.013,12.013,0,0,0,24,12ZM8,12a2.993,2.993,0,0,1,.752-1.987c.291-.327.574-.637.777-.84L12.353,6.3a1,1,0,0,1,1.426,1.4L10.95,10.58c-.187.188-.441.468-.7.759a1,1,0,0,0,0,1.323c.258.29.512.57.693.752L13.779,16.3a1,1,0,0,1-1.426,1.4L9.524,14.822c-.2-.2-.48-.507-.769-.833A2.99,2.99,0,0,1,8,12Z"/></svg>
            </div>
            <div class="swiper-button-next">
                <?xml version="1.0" encoding="UTF-8"?>
                <svg xmlns="http://www.w3.org/2000/svg" id="arrow-circle-down" viewBox="0 0 24 24" width="512" height="512"><path d="M0,12A12,12,0,1,0,12,0,12.013,12.013,0,0,0,0,12Zm15.414-1.414a2,2,0,0,1,0,2.828l-4.673,4.673L9.327,16.673,14,12,9.289,7.288,10.7,5.874Z"/></svg>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="row asking-all-treatment">
            <div class="col col-12">
                <strong>Prefer a different treatment?</strong>
            </div>
            <div class="col col-12">
                <button class='btn-d-trans all-treatment-btn'>See All Treatment</button>
            </div>
        </div>

            @php

                $product1 = \App\Models\Product::whereIn('category_id', [$category])->orderBy('id',
                'ASC')->where("subscription_duration",'1')->groupBy("type")->get();

            @endphp

        <div class="swiper container" id="other_rec_prod">
            <div class="other-recommended recommended-product-list  swiper-wrapper  <?php echo sizeof($product1) == 1 ? "single" : ""; ?>">
                @foreach($product1 as $pkey => $products)
                    @php
                    $proList = [];
                    $tags = [];
                    if(empty($products->type)) {
                        array_push($tags, []);
                        array_push($proList, $products);
                    }
                    else for($i = 0 ; $i < sizeof($productList) ; $i ++) {
                        if($category == 30 || $category == 31 ) {

                            if($productList[$i]['type'] == $products->type ) {
                                if(is_array($productList[$i]['tags']) && sizeof($productList[$i]['tags']) > 0) {
                                    $productList[$i]['tag'] = $productList[$i]['tags'][0]['name'];

                                    array_push($tags, $productList[$i]['tag']);
                                    array_push($proList, $productList[$i]);
                                }
                            }
                        }
                        else  {
                            if($productList[$i]['type'] == $products->type && $productList[$i]['category_id'] == $category) {
                                $productList[$i]['tag'] = $productList[$i]['quantity_mg']."mg";
                                $flag = false;
                                foreach($proList as $proItem) {

                                    if($proItem['quantity_mg'] == $productList[$i]['quantity_mg']) {
                                        $flag = true;
                                        break;
                                    }
                                }
                                if(!$flag) {
                                    array_push($tags, $productList[$i]['tag']);
                                    array_push($proList, $productList[$i]);
                                }
                            }
                        }
                    }
                    array_multisort($tags, SORT_ASC, $proList);
                    @endphp
                        <div class="product-card swiper-slide">
                            <div class="tag-selector-area">
                                <ul class="nav nav-tabs tag-selector"  role="tablist">
                                    <?php
                                    foreach($proList as $key => $item) {
                                        echo "<li class='nav-item ".($key == 0 ? "nav-item-selected":"")."'>
                                                <a class='nav-link' data-bs-toggle='tab' href='#recom_{$products->id}_{$key}'>".($item['tag'] ? $item['tag']:"Tablets")."</a>
                                            </li>";
                                    }
                                    ?>
                                </ul>
                            </div>

                            <div class="tab-content">
                            @foreach($proList as $iKey => $proItem)
                                @php
                                $media = DB::table('media')->where('mediable_id',$proItem['id'])->first();
                                $pro_tag = DB::table('product_tags')->where('product_id',$proItem['id'])->first();
                                $tags = [];
                                if($pro_tag)
                                    $tags = DB::table('tags')->where('id', $pro_tag->tag_id)->first();
                                @endphp
                                <div class="row container tab-pane product-info <?php echo $iKey == 0 ? "active" :"" ?>" id="recom_{{$products->id}}_{{$iKey}}">
                                    <div class="col col-12">
                                        <figure style="display: flex; justify-content: center">
                                            <img src="{{asset('storage/images/products/')}}{{ '/'. $media->file_name}}" width="75%" alt="">
                                        </figure>
                                    </div>
                                    <div class="col col-12 product-detail-info">
                                        <p class="product-highlite">{{$proItem['highlite'] ? $proItem['highlite'] : "Pill free option"}}</p>
                                        <h1 class='product-name'>{{$proItem['name']}}</h1>
                                        <p class="product-detail-description">{{strip_tags($proItem['description'])}}</p>
                                        <div class="product-price">
                                            {{ 'Starting at £'.$proItem['first_time_disc']." ".($proItem['subscription_duration'] == 1 ? 'a month' : $proItem['subscription_duration']." months") }}
                                        </div>
                                        @if($category == 33 || $category == 32)
                                        <div class="choose-tablets">
                                            <h4>Choose your tablets per month</h4>
                                            <div class="tablets-items">
                                                @php
                                                $tablets = [];
                                                foreach($productList as $productItem) {
                                                    if($productItem['type'] == $proItem['type'] && $productItem['quantity_mg'] == $proItem['quantity_mg'] && $category == $productItem['category_id']) {
                                                        array_push($tablets, $productItem);
                                                    }
                                                }
                                                @endphp

                                                @foreach($tablets as $tablet)
                                                <div  class="tablets-item <?php if($tablet['id'] == $proItem['id']) echo "selected"?>" data-id="<?php echo $tablet['id'];?>">
                                                    <div>{{$tablet['quantity']}}</div>
                                                    <div>£{{number_format($tablet['first_time_disc'] /$tablet['quantity'], 2)}}/tablet</div>
                                                </div>
                                                @endforeach
                                                <div></div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="product-toolbar row">
                                            <div class="col-md-6 col-sm-12">
                                                <button type="button" class="btn-d-black show-product-modal" data-product="{{ json_encode($proItem) }}" data-image = "{{asset('storage/images/products/').'/'.$media->file_name  }}">Learn more</button>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <button class="btn-d-black checkout-btn" onclick="AddToCart('<?php echo $proItem['id'];?>')" >Continue</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                            </div>
                        </div>
                @endforeach
            </div>

            <div class="swiper-button-prev swiper-button-prev1"><?xml version="1.0" encoding="UTF-8"?>
                <svg xmlns="http://www.w3.org/2000/svg" id="arrow-circle-down" viewBox="0 0 24 24" width="512" height="512"><path d="M24,12A12,12,0,1,0,12,24,12.013,12.013,0,0,0,24,12ZM8,12a2.993,2.993,0,0,1,.752-1.987c.291-.327.574-.637.777-.84L12.353,6.3a1,1,0,0,1,1.426,1.4L10.95,10.58c-.187.188-.441.468-.7.759a1,1,0,0,0,0,1.323c.258.29.512.57.693.752L13.779,16.3a1,1,0,0,1-1.426,1.4L9.524,14.822c-.2-.2-.48-.507-.769-.833A2.99,2.99,0,0,1,8,12Z"/></svg>
            </div>
            <div class="swiper-button-next swiper-button-next1">
                <?xml version="1.0" encoding="UTF-8"?>
                <svg xmlns="http://www.w3.org/2000/svg" id="arrow-circle-down" viewBox="0 0 24 24" width="512" height="512"><path d="M0,12A12,12,0,1,0,12,0,12.013,12.013,0,0,0,0,12Zm15.414-1.414a2,2,0,0,1,0,2.828l-4.673,4.673L9.327,16.673,14,12,9.289,7.288,10.7,5.874Z"/></svg>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="reviews" id="product-review">

        </div>
    </div>

    @else
    <div class="quest-v2-content authed-view <?php echo ($category == "30" || $category == "31" || !Auth::check()) ? "d-none":""?>">
        <div class="container-fluid">
            <div class="quest-v2-inner-wrap">
                <!-- product start -->
                @php
                    $product = DB::table('products')->where('category_id', $category)->get();

                @endphp
                <form action="{{ route('checkout.index') }}" method="POST">
                    @csrf

                    <input type="hidden" name="product_ids" id="ProductIds">
                    <input type="hidden" name="Session_Id" value="{{ $session_id }}">
                    <div class="quest-v2-step" id="step1">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="v2-5step-cont">
                                        <div class="back-btn-content mb-40">
                                            <div class="row align-items-center">
                                                <!-- <div class="col-lg-1 col-md-2 col-6 order-ph-1">
                                            <a href="javascript:void(0)" class="text-icon-btn prev-button"><i
                                                    class="fa-sharp fa-solid fa-circle-arrow-left"></i>Back</a>
                                        </div> -->
                                                <div class="col-12 ordr-3 order-ph-3">
                                                    <h3 class="quest-v2-subh text-center m-0">
                                                        Please choose your preferred monthly treatment
                                                    </h3>


                                                </div>


                                            </div>
                                        </div>
                                        <div class="quest-v2-btn recommended-btn text-center">
                                            <a class="btn-d-black btn-wt-300" href="javascript:void(0)">Recommended
                                                for
                                                you</a>
                                        </div>

                                        <!-- recocomndation sec start-->
                                        <div class="recmd-tabcard-main mb-40">
                                            @if($category == 30)
                                                @php
                                                    $recom_product = \App\Models\Temp::where('session_id',
                                                    Session::get('hair_loss'))->first();
                                                    $ques_30 = json_decode($recom_product->jason_data);
                                                    $con1 = array_column($ques_30, 'answer');
                                                @endphp
                                                @if(in_array("Lactose", $con1));
                                                @php

                                                    $product1 = \App\Models\Product::whereRaw("find_in_set('Lactose',treat_method)")->orderBy('id',
                                                    'ASC')->get();
                                                @endphp
                                                @foreach($product1 as $products)
                                                    @php
                                                        $media =
                                                        DB::table('media')->where('mediable_id',$products->id)->first();
                                                        $pro_tag =
                                                        DB::table('product_tags')->where('product_id',$products->id)->first();
                                                        //dd($pro_tag);
                                                        if($pro_tag)
                                                        $tag = DB::table('tags')->where('id',$pro_tag->tag_id)->first();

                                                    @endphp
                                                    <div class="recmd-tablets-card act mt-30 hairLossProd">
                                                        <div class="r-t-card-body">
                                                            <figure>
                                                                <img src="{{asset('storage/images/products/')}}{{ '/'. $media->file_name}}"
                                                                     height="90px" alt="">
                                                            </figure>
                                                            <div class="r-t-body-cont">


                                                                <h5>
                                                                    <p class="add-highlite-main">{{$products->highlite}}</p>
                                                                            {{ $products->name }}
                                                                                                                                            </h5>
                                                                <p>{{ strip_tags($products->description) }}</p>
                                                                <div class="strength">
                                                                    <h4>
                                                                                {{ 'Starting at £'.$products->first_time_disc." ".($products->subscription_duration == 1 ? 'a month' : $products->subscription_duration." months") }}
                                                                                 </h4>


                                                                </div>


                                                            </div>
                                                        </div>
                                                        <div class="r-t-card-footer">
                                                            <a href="javascript:void(0);" id="myBtn"
                                                               onclick="AddToCart('{{ $products->id }}')"
                                                               class="trans-btn black-btn learn-more-card-btn detailbtn myBtn">
                                                                Select
                                                            </a>
                                                            <!-- <a wire:click="cart(22)" class="trans-btn black-btn learn-more-card-btn detailbtn">Add</a> -->
                                                        </div>
                                                        <!-- <div class="r-t-card-footer"><button type="button" class="btn-d-black" title="Add To Cart"><i class="fa-solid fa-circle-plus me-2"></i>Add</button></div> -->

                                                    </div>
                                                @endforeach

                                                @elseif(in_array("Minoxidil", $con1) || in_array("Finasteride", $con1))
                                                    <div class="recmd-tablets-card act mt-30">
                                                        <div class="r-t-card-body">
                                                            @php

                                                                $type = in_array("Minoxidil", $con1) ? "Minoxidil" : "Finasteride";
                                                                $product_data = \App\Models\Product::whereRaw("find_in_set('$type',treat_method)")->first();
                                                                $media =
                                                                DB::table('media')->where('mediable_id',$product_data->id)->first();
                                                            @endphp
                                                            <figure>
                                                                <img src="{{asset('storage/images/products/')}}{{ '/'. $media->file_name}}"
                                                                     height="90px" alt="">
                                                            </figure>
                                                            <div class="r-t-body-cont">

                                                                <h5>
                                                                    <p class="add-highlite-main">{{$product_data->highlite}}</p>
                                                                    {{$product_data->name }}
                                                                </h5>
                                                                <p>{{ strip_tags($product_data->description) }}</p>
                                                                <div class="strength">
                                                                    <h4>{{ 'Starting at £'.$product_data->first_time_disc.' '.($product_data->subscription_duration == 1 ? 'per month' : $product_data->subscription_duration.' months') }} </h4>
                                                                    <!-- <h4>(Strength {{ isset($product_data->quantity_mg) ? $product_data->quantity_mg : ""}} </h4>
                                                                                <h4>Tablet {{ isset($product_data->quantity) ? $product_data->quantity : "" }}) </h4> -->
                                                                </div>
                                                                <!-- <a href="javascript:void(0);" id="myBtn" onclick="AddToCart('{{ $product_data->id }}')" class="trans-btn black-btn learn-more-card-btn detailbtn">Add</a>         -->
                                                                <!-- <a href="javascript:void(0);" id="myBtn" data-bs-toggle="modal" data-bs-target="#addbutton" onclick="AddToCart('{{ $product_data->id }}')" class="trans-btn black-btn learn-more-card-btn detailbtn">Add</a>         -->
                                                            </div>
                                                        </div>
                                                        <div class="r-t-card-footer">
                                                            <a href="javascript:void(0);" id="myBtn"
                                                               onclick="AddToCart('{{ $product_data->id }}')"
                                                               class="trans-btn black-btn learn-more-card-btn detailbtn myBtn">Select</a>
                                                            <!-- <a wire:click="cart(22)" class="trans-btn black-btn learn-more-card-btn detailbtn">Add</a> -->
                                                        </div>
                                                        <!-- <div class="r-t-card-footer"><button type="button" class="btn-d-black" title="Add To Cart"><i class="fa-solid fa-circle-plus me-2"></i>Add</button></div> -->
                                                    </div>

                                                @else
                                                    @php

                                                        $product1 = \App\Models\Product::whereRaw("find_in_set('Lactose',treat_method)")->orderBy('id','ASC')->get();

                                                    @endphp
                                                    @foreach($product1 as $products)
                                                        @php
                                                            $media =
                                                            DB::table('media')->where('mediable_id',$products->id)->first();
                                                            $pro_tag =
                                                            DB::table('product_tags')->where('product_id',$products->id)->first();
                                                            //dd($pro_tag);
                                                            if($pro_tag)
                                                            $tag = DB::table('tags')->where('id',$pro_tag->tag_id)->first();

                                                        @endphp
                                                        <div class="recmd-tablets-card act mt-30 hairLossProd">
                                                            <div class="r-t-card-body">
                                                                <figure>
                                                                    <img src="{{asset('storage/images/products/')}}{{ '/'. $media->file_name}}"
                                                                         height="90px" alt="">
                                                                </figure>
                                                                <div class="r-t-body-cont">


                                                                    <h5>
                                                                    <p class="add-highlite-main">{{$products->highlite}}</p>
                                                                                {{ $products->name }}
                                                                                                                                                    </h5>
                                                                    <p>{{ strip_tags($products->description) }}</p>
                                                                    <div class="strength">
                                                                        <h4>
                                                                                    {{ 'Starting at £'.$products->first_time_disc." ".($products->subscription_duration == 1 ? ' a month' : $products->subscription_duration." months") }}
                                                                                        </h4>


                                                                    </div>


                                                                </div>
                                                            </div>
                                                            <div class="r-t-card-footer">
                                                                <a href="javascript:void(0);" id="myBtn"
                                                                   onclick="AddToCart('{{ $products->id }}')"
                                                                   class="trans-btn black-btn learn-more-card-btn detailbtn myBtn">Select</a>
                                                                <!-- <a wire:click="cart(22)" class="trans-btn black-btn learn-more-card-btn detailbtn">Add</a> -->
                                                            </div>
                                                            <!-- <div class="r-t-card-footer"><button type="button" class="btn-d-black" title="Add To Cart"><i class="fa-solid fa-circle-plus me-2"></i>Add</button></div> -->

                                                        </div>
                                                    @endforeach
                                                @endif



                                            @elseif($category == 31)

                                                <div class="recmd-tablets-card act mt-30" id="recom_pro">
                                                    @php
                                                        $product_data = \App\Models\Product::whereRaw("find_in_set('Beard',treat_method)")->orderBy('subscription_duration','asc')->first();
                                                        $media =
                                                        DB::table('media')->where('mediable_id',$product_data->id)->first();
                                                    @endphp
                                                    <div class="r-t-card-body">
                                                        <figure>
                                                            <img src="{{asset('storage/images/products/')}}{{ '/'. $media->file_name}}"
                                                                 alt="">
                                                        </figure>
                                                        <div class="r-t-body-cont">
                                                            <h5>

                                                                <p class="add-highlite-main">{{$product_data->highlite}}</p>
                                                                {{ $product_data->name }}



                                                            </h5>
                                                            <p>{{ strip_tags($product_data->description) }}</p>


                                                            <div class="strength">

                                                                <H4> {{ 'Starting at £'.$product_data->first_time_disc." ".($product_data->subscription_duration == 1 ? ' a month' : $product_data->subscription_duration." months") }}</H4>

                                                                </h4>
                                                                <!-- <h4>(Strength {{ isset($products->quantity_mg) ? $products->quantity_mg : ""}} </h4>
                                                           <h4>Tablet {{ isset($products->quantity) ? $products->quantity : ""}}) </h4> -->
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="r-t-card-footer">
                                                        <a href="javascript:void(0);" id="myBtn"
                                                           onclick="AddToCart('{{ $product_data->id }}')"
                                                           class="trans-btn black-btn learn-more-card-btn detailbtn myBtn">Select</a>
                                                        <!-- <a wire:click="cart(22)" class="trans-btn black-btn learn-more-card-btn detailbtn">Add</a> -->
                                                    </div>
                                                </div>

                                            @elseif($category == 32)
                                                @php
                                                    $recom_product = \App\Models\Temp::where('session_id',
                                                    Session::get('erectile_dysfunction'))->first();
                                                    $ques_3 = json_decode($recom_product->jason_data);
                                                    $con3 = array_column($ques_3, 'answer');

                                                @endphp
                                                    <!-- recocomndation sec start-->
                                                @if(in_array("1 hour before sexual intercourse", $con3));
                                                <div class="recmd-tablets-card act mt-30" id="recom_pro">
                                                    @php
                                                        $product_data = \App\Models\Product::whereRaw("find_in_set('1 hour before sexual intercourse',treat_method)")->first();
                                                        $media =
                                                        DB::table('media')->where('mediable_id',$product_data->id)->first();
                                                    @endphp
                                                    <div class="r-t-card-body">
                                                        <figure>
                                                            <img src="{{asset('storage/images/products/')}}{{ '/'. $media->file_name}}"
                                                                 alt="">
                                                        </figure>
                                                        <div class="r-t-body-cont">
                                                            <h5>
                                                                <p class="add-highlite-main">{{$product_data->highlite}}</p>
                                                                {{ $product_data->name }}
                                                            </h5>
                                                            <p>{{ strip_tags($product_data->description) }}</p>
                                                            <p> {{ 'Works within: 60 mins' }}</p>
                                                            <p> {{ 'Supports erection for: 4 hours' }}</p>
                                                            <div class="strength">

                                                                <!-- <h4>(Strength {{ isset($product_data->quantity_mg) ? $product_data->quantity_mg : ""}} </h4>
                                                                                <h4>Tablet {{ isset($product_data->quantity) ? $product_data->quantity : "" }}) </h4> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="r-t-card-footer">
                                                        <a href="javascript:void(0);" id="myBtn"
                                                           onclick="AddToCart('{{ $product_data->id }}')"
                                                           class="trans-btn black-btn learn-more-card-btn detailbtn myBtn">{{ 'Select from £2/pill' }}</a>
                                                        <!-- <a wire:click="cart(22)" class="trans-btn black-btn learn-more-card-btn detailbtn">Add</a> -->
                                                    </div>
                                                </div>


                                                @elseif(in_array("I'd rather not plan and take the tablet beforehand",
                                                $con3))

                                                    @php

                                                        $product1 = \App\Models\Product::whereRaw(`find_in_set("I'd rather not plan and take the tablet beforehand",treat_method)`)->orderBy('id',
                                                        'DESC')->get();

                                                    @endphp
                                                    @foreach($product1 as $products)
                                                        @php
                                                            $media =
                                                            DB::table('media')->where('mediable_id',$products->id)->first();
                                                            $pro_tag =
                                                            DB::table('product_tags')->where('product_id',$products->id)->first();
                                                            //dd($pro_tag);
                                                            if($pro_tag)
                                                            $tag = DB::table('tags')->where('id',$pro_tag->tag_id)->first();
                                                        @endphp
                                                        <div class="recmd-tablets-card act mt-30 hairLossProd">
                                                            <div class="r-t-card-body">
                                                                <figure>
                                                                    <img src="{{asset('storage/images/products/')}}{{ '/'. $media->file_name}}"
                                                                         height="90px" alt="">
                                                                </figure>
                                                                <div class="r-t-body-cont">
                                                                    <h5>
                                                                        <p class="add-highlite-main">{{$products->highlite}}</p>
                                                                                {{ $products->name }}
                                                                    </h5>
                                                                                                                                        <p>{{ strip_tags($products->description) }}</p>
                                                                    @switch($products->id)

                                                                        @case(56)
                                                                            <p> {{ 'Works within: 30 mins' }}</p>
                                                                            <p> {{ 'Supports erection for: 36 hours' }}</p>
                                                                            @break
                                                                        @case(40)
                                                                            <p> {{ 'Works within: 3-5 Days' }}</p>
                                                                            <p> {{ 'Supports erection for: Constant ∞' }}</p>
                                                                            @break
                                                                    @endswitch
                                                                    <div class="strength">



                                                                    </div>


                                                                </div>
                                                            </div>
                                                            <div class="r-t-card-footer">
                                                                <a href="javascript:void(0);" id="myBtn"
                                                                   onclick="AddToCart('{{ $products->id }}')"
                                                                   class="trans-btn black-btn learn-more-card-btn detailbtn myBtn">
                                                                    @switch($products->id)

                                                                        @case(56)
                                                                            {{ 'Select from £2.4/pill' }}

                                                                            @break
                                                                        @case(40)
                                                                            {{ 'Select from £0.71/pill' }}

                                                                            @break

                                                                    @endswitch
                                                                </a>
                                                                <!-- <a wire:click="cart(22)" class="trans-btn black-btn learn-more-card-btn detailbtn">Add</a> -->
                                                            </div>
                                                            <!-- <div class="r-t-card-footer"><button type="button" class="btn-d-black" title="Add To Cart"><i class="fa-solid fa-circle-plus me-2"></i>Add</button></div> -->

                                                        </div>
                                                    @endforeach
                                                                                                @endif
                                            @elseif($category == 33)
                                                <!-- pe recomendation -->
                                                @php
                                                    $recom_product = \App\Models\Temp::where('session_id',
                                                    Session::get('premature_ejaculation'))->first();
                                                    $ques_4 = json_decode($recom_product->jason_data);
                                                    $con4 = array_column($ques_4, 'answer');

                                                @endphp
                                                    <!-- recocomndation sec start-->
                                                @if(in_array("Serotonin reuptake inhibitors i.e priligy", $con4));

                                                <div class="recmd-tablets-card act mt-30">
                                                    <div class="r-t-card-body">
                                                        @php
                                                            $product_data = \App\Models\Product::whereRaw("find_in_set('Serotonin reuptake inhibitors i.e priligy',treat_method)")->first();
                                                            $media =
                                                            DB::table('media')->where('mediable_id',$product_data->id)->first();
                                                        @endphp
                                                        <figure>
                                                            <img src="{{asset('storage/images/products/')}}{{ '/'. $media->file_name}}"
                                                                 height="90px" alt="">
                                                        </figure>
                                                        <div class="r-t-body-cont">

                                                            <h5> {{ $product_data->name }}</h5>
                                                            <p>{{ strip_tags($product_data->description) }}</p>
                                                            <div class="strength">

                                                                <!-- <h4>(Strength {{ isset($product_data->quantity_mg) ? $product_data->quantity_mg : ""}} </h4>
                                                                                <h4>Tablet {{ isset($product_data->quantity) ? $product_data->quantity : "" }}) </h4> -->
                                                            </div>
                                                            <a href="javascript:void(0);"
                                                               onclick="AddToCart('{{ $product_data->id }}')"
                                                               class="trans-btn black-btn learn-more-card-btn detailbtn myBtn">{{ 'Select from £8/bottle' }}</a>
                                                        </div>

                                                    </div>
                                                    <!-- <div class="r-t-card-footer"><button type="button" class="btn-d-black" title="Add To Cart"><i class="fa-solid fa-circle-plus me-2"></i>Add</button></div> -->
                                                </div>
                                                <!-- recocomndation sec end-->
                                                                                                @if(in_array("I can't tolerate even small amounts of lactose",$con4))
                                                    <div class="recmd-tablets-card act mt-30">
                                                        <div class="r-t-card-body">
                                                            @php
                                                                $product_data = \App\Models\Product::whereRaw("find_in_set(\"I can't tolerate even small amounts of lactose\",treat_method)")->first();
                                                                $media =
                                                                DB::table('media')->where('mediable_id',$product_data->id)->first();
                                                            @endphp
                                                            <figure>
                                                                <img src="{{asset('storage/images/products/')}}{{ '/'. $media->file_name}}"
                                                                     height="90px" alt="">
                                                            </figure>
                                                            <div class="r-t-body-cont">

                                                                <h5> {{ 'Stud 100' }}</h5>
                                                                <p>{{ strip_tags($product_data->description) }}</p>
                                                                <div class="strength">

                                                                    <!-- <h4>(Strength {{ isset($product_data->quantity_mg) ? $product_data->quantity_mg : ""}} </h4>
                                                                                <h4>Tablet {{ isset($product_data->quantity) ? $product_data->quantity : "" }} )</h4> -->
                                                                </div>
                                                                <a href="javascript:void(0);"
                                                                   onclick="AddToCart('{{ $product_data->id }}')"
                                                                   class="trans-btn black-btn learn-more-card-btn detailbtn myBtn">{{ 'Select from £8/bottle' }}</a>
                                                            </div>

                                                        </div>
                                                        <!-- <div class="r-t-card-footer"><button type="button" class="btn-d-black" title="Add To Cart"><i class="fa-solid fa-circle-plus me-2"></i>Add</button></div> -->
                                                    </div>
                                                @elseif(in_array("I'm comfortable with proceeding to be assessed for a prescription",$con4))
                                                    <div class="recmd-tablets-card act mt-30">
                                                        <div class="r-t-card-body">
                                                            @php
                                                                $product_data = \App\Models\Product::whereRaw("find_in_set(\"I'm comfortable with proceeding to be assessed for a prescription\",treat_method")->first();
                                                                $media =
                                                                DB::table('media')->where('mediable_id',$product_data->id)->first();
                                                            @endphp
                                                            <figure>
                                                                <img src="{{asset('storage/images/products/')}}{{ '/'. $media->file_name}}"
                                                                     height="90px" alt="">
                                                            </figure>
                                                            <div class="r-t-body-cont">

                                                                <h5>{{ $product_data->name }}</h5>
                                                                <p>{{ strip_tags($product_data->description) }}</p>
                                                                <div class="strength">

                                                                    <!-- <h4>(Strength {{ isset($product_data->quantity_mg) ? $product_data->quantity_mg : ""}} </h4>
                                                                                <h4>Tablet {{ isset($product_data->quantity) ? $product_data->quantity : "" }} )</h4> -->
                                                                </div>
                                                                <a href="javascript:void(0);"
                                                                   onclick="AddToCart('{{ $product_data->id }}')"
                                                                   class="trans-btn black-btn learn-more-card-btn detailbtn myBtn">{{ 'Select from £5.83/pill' }}</a>
                                                            </div>

                                                        </div>
                                                        <!-- <div class="r-t-card-footer"><button type="button" class="btn-d-black" title="Add To Cart"><i class="fa-solid fa-circle-plus me-2"></i>Add</button></div> -->
                                                    </div>
                                                @endif
                                                @elseif(in_array("Lidocaine or other local anesthetics", $con4));
                                                <div class="recmd-tablets-card act mt-30">
                                                    <div class="r-t-card-body">
                                                        @php
                                                            $product_data = \App\Models\Product::whereRaw("find_in_set(\"Lidocaine or other local anesthetics\",treat_method)")->first();
                                                            $media =
                                                            DB::table('media')->where('mediable_id',$product_data->id)->first();
                                                        @endphp
                                                        <figure>
                                                            <img src="{{asset('storage/images/products/')}}{{ '/'. $media->file_name}}"
                                                                 height="90px" alt="">
                                                        </figure>
                                                        <div class="r-t-body-cont">

                                                            <h5>{{ 'Dapoxetine/Priligy' }}</h5>
                                                            <p>{{ strip_tags($product_data->description) }}</p>
                                                            <div class="strength">

                                                                <!-- <h4>(Strength {{ isset($product_data->quantity_mg) ? $product_data->quantity_mg : ""}} </h4>
                                                                                <h4>Tablet {{ isset($product_data->quantity) ? $product_data->quantity : "" }}) </h4> -->
                                                            </div>
                                                            <a href="javascript:void(0);"
                                                               onclick="AddToCart('{{ $product_data->id }}')"
                                                               class="trans-btn black-btn learn-more-card-btn detailbtn myBtn">{{ 'Select from £5.83/pill' }}</a>
                                                        </div>

                                                    </div>
                                                    <!-- <div class="r-t-card-footer"><button type="button" class="btn-d-black" title="Add To Cart"><i class="fa-solid fa-circle-plus me-2"></i>Add</button></div> -->
                                                </div>
                                                @else
                                                    <div class="recmd-tablets-card act mt-30">
                                                        <div class="r-t-card-body">
                                                            @php
                                                                $product_data = \App\Models\Product::where('id', 66)->first();
                                                                $media =
                                                                DB::table('media')->where('mediable_id',$product_data->id)->first();
                                                            @endphp
                                                            <figure>
                                                                <img src="{{asset('storage/images/products/')}}{{ '/'. $media->file_name}}"
                                                                     height="90px" alt="">
                                                            </figure>
                                                            <div class="r-t-body-cont">

                                                                <h5>{{ 'Dapoxetine/Priligy' }}</h5>
                                                                <p>{{ strip_tags($product_data->description) }}</p>
                                                                <div class="strength">

                                                                    <!-- <h4>(Strength {{ isset($product_data->quantity_mg) ? $product_data->quantity_mg : ""}} </h4>
                                                                                <h4>Tablet {{ isset($product_data->quantity) ? $product_data->quantity : "" }}) </h4> -->
                                                                </div>
                                                                <a href="javascript:void(0);"
                                                                   onclick="AddToCart('{{ $product_data->id }}')"
                                                                   class="trans-btn black-btn learn-more-card-btn detailbtn myBtn">{{ 'Select from £5.83/pill' }}</a>
                                                            </div>

                                                        </div>
                                                        <!-- <div class="r-t-card-footer"><button type="button" class="btn-d-black" title="Add To Cart"><i class="fa-solid fa-circle-plus me-2"></i>Add</button></div> -->
                                                    </div>
                                                @endif

                                            @endif

                                                <h4 class="mt-30 prefer-diff-tm mb-60 text-center">Prefer a different treatment?</h4>
                                                <div class="quest-v2-btn mt-30 text-center">
                                                    <a class="btn-d-trans btn-wt-300 mr-20 read-m-btn" href="javascript:void(0)">See all
                                                        treatments</a>
                                                    <button class="btn-d-black btn-wt-300 " type="button" id="cont_1">Continue</button>
                                                </div>
                                        </div>
                                    </div>
                                     <!-- recocomndation sec end-->
                                    <h3 class="quest-v2-subh text-center mt-40 other-recmd">
                                        Other Recommendation for you
                                    </h3>
                                    <div class="moon">
                                    <!-- all treatment sec start -->
                                    {{-- <livewire:addtocart/> --}}
                                    @if($category == 30)
                                        @php

                                            $product1 = \App\Models\Product::whereIn('category_id', [30])->orderBy('id',
                                            'ASC')->where("subscription_duration",'1')->groupBy("name")->get();

                                        @endphp
                                        @foreach($product1 as $products)
                                            @php
                                                $media = DB::table('media')->where('mediable_id',$products->id)->first();
                                                $pro_tag =
                                                DB::table('product_tags')->where('product_id',$products->id)->first();
                                                //dd($pro_tag);
                                                if($pro_tag)
                                                $tag = DB::table('tags')->where('id',$pro_tag->tag_id)->first();

                                            @endphp
                                            <div class="recmd-tablets-card act mt-30">
                                                <div class="r-t-card-body">
                                                    <figure>
                                                        <img src="{{asset('storage/images/products/')}}{{ '/'. $media->file_name}}"
                                                             height="90px" alt="">
                                                    </figure>
                                                    <div class="r-t-body-cont">
                                                        <h5>
                                                            <p class="add-highlite-main">{{ $products->highlite }}</p>
                                                                    {{ $products->name }}
                                                        </h5>
                                                        <p>{{ strip_tags($products->description) }}</p>
                                                        <div class="strength">
                                                            <h4>
                                                                {{ 'Starting at £'.$products->first_time_disc.' a month' }}
                                                            </h4>
                                                            <!-- <h4>(Strength {{ isset($products->quantity_mg) ? $products->quantity_mg : ""}} </h4>
                                                            <h4>Tablet {{ isset($products->quantity) ? $products->quantity : ""}}) </h4> -->
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="r-t-card-footer">
                                                    <a href="javascript:void(0);" onclick="AddToCart('{{ $products->id }}')"
                                                       class="trans-btn black-btn learn-more-card-btn detailbtn myBtn">Select</a>
                                                    <!-- <a wire:click="cart({{ $products->id }})" class="trans-btn black-btn learn-more-card-btn detailbtn">Add</a> -->
                                                </div>
                                            </div>
                                        @endforeach
                                </div>

                                @elseif($category == 32)
                                    @php

                                        $product1 = \App\Models\Product::whereIn('category_id', [32])->orderBy('id', 'ASC')->where("subscription_duration",'1')->groupBy("name")->orderBy('id',
                                        'DESC')->get();

                                    @endphp
                                    @foreach($product1 as $products)
                                        @php
                                            $media = DB::table('media')->where('mediable_id',$products->id)->first();
                                            $pro_tag = DB::table('product_tags')->where('product_id',$products->id)->first();
                                            //dd($pro_tag);
                                            if($pro_tag)
                                            $tag = DB::table('tags')->where('id',$pro_tag->tag_id)->first();

                                        @endphp
                                        <div class="recmd-tablets-card act mt-30">
                                            <div class="r-t-card-body">
                                                <figure>
                                                    <img src="{{asset('storage/images/products/')}}{{ '/'. $media->file_name}}"
                                                         height="90px" alt="">
                                                </figure>
                                                <div class="r-t-body-cont">
                                                    <h5>
                                                        {{ $products->highlite }}

                                                    </h5>
                                                    <p>{{ strip_tags($products->description) }}</p>

                                                    @switch($products->id)
                                                        @case(52)
                                                            <p> {{ 'Works within: 60 mins' }}</p>
                                                            <p> {{ 'Supports erection for: 4 hours' }}</p>
                                                            @break
                                                        @case(56)
                                                            <p> {{ 'Works within: 30 mins' }}</p>
                                                            <p> {{ 'Supports erection for: 36 hours' }}</p>
                                                            @break
                                                        @case(40)
                                                            <p> {{ 'Works within: 3-5 Days' }}</p>
                                                            <p> {{ 'Supports erection for: Constant ∞' }}</p>
                                                            @break
                                                        @case(45)
                                                            <p> {{ 'Works within: 60 mins' }}</p>
                                                            <p> {{ 'Supports erection for: 4 hours' }}</p>
                                                            @break
                                                    @endswitch

                                                    <div class="strength">
                                                        <!-- <h4> £{{$products->first_time_disc}} </h4> -->
                                                        <!-- <h4>(Strength {{ isset($products->quantity_mg) ? $products->quantity_mg : ""}} </h4>
                                                           <h4>Tablet {{ isset($products->quantity) ? $products->quantity : ""}}) </h4> -->
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="r-t-card-footer">
                                                <a href="javascript:void(0);" onclick="AddToCart('{{ $products->id }}')"
                                                   class="trans-btn black-btn learn-more-card-btn detailbtn myBtn">
                                                    @switch($products->id)
                                                        @case(52)
                                                            {{ 'Select from £2/pill' }}

                                                            @break
                                                        @case(56)
                                                            {{ 'Select from £2.4/pill' }}

                                                            @break
                                                        @case(40)
                                                            {{ 'Select from £0.71/pill' }}

                                                            @break
                                                        @case(45)
                                                            {{ 'Select from £8.75/pill' }}

                                                            @break
                                                    @endswitch
                                                </a>
                                                <!-- <a wire:click="cart({{ $products->id }})" class="trans-btn black-btn learn-more-card-btn detailbtn">Add</a> -->
                                            </div>
                                        </div>
                                    @endforeach
                                @elseif($category == 33)
                                    @php

                                        $product1 = \App\Models\Product::whereIn('category_id', [33])->orderBy('id', 'ASC')->where("subscription_duration",'1')->groupBy("name")->orderBy('id',
                                        'ASC')->get();

                                    @endphp
                                    @foreach($product1 as $products)
                                        @php
                                            $media = DB::table('media')->where('mediable_id',$products->id)->first();
                                            $pro_tag = DB::table('product_tags')->where('product_id',$products->id)->first();
                                            //dd($pro_tag);
                                            if($pro_tag)
                                            $tag = DB::table('tags')->where('id',$pro_tag->tag_id)->first();

                                        @endphp
                                        <div class="recmd-tablets-card act mt-30">
                                            <div class="r-t-card-body">
                                                <figure>
                                                    <img src="{{asset('storage/images/products/')}}{{ '/'. $media->file_name}}"
                                                         height="90px" alt="">
                                                </figure>
                                                <div class="r-t-body-cont">
                                                    <h5>
                                                        @ {{ $products->name }}
                                                    </h5>
                                                    <p>{{ strip_tags($products->description) }}</p>


                                                    <div class="strength">
                                                        <!-- <h4> £{{$products->first_time_disc}} </h4> -->
                                                        <!-- <h4>(Strength {{ isset($products->quantity_mg) ? $products->quantity_mg : ""}} </h4>
                                                           <h4>Tablet {{ isset($products->quantity) ? $products->quantity : ""}}) </h4> -->
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="r-t-card-footer">
                                                <a href="javascript:void(0);" onclick="AddToCart('{{ $products->id }}')"
                                                   class="trans-btn black-btn learn-more-card-btn detailbtn myBtn">
                                                    @switch($products->id)
                                                        @case(69)
                                                            {{ 'Select from £5.83/pill' }}

                                                            @break
                                                        @case(43)
                                                            {{ 'Select from £8/bottle' }}

                                                            @break

                                                    @endswitch
                                                </a>
                                                <!-- <a wire:click="cart({{ $products->id }})" class="trans-btn black-btn learn-more-card-btn detailbtn">Add</a> -->
                                            </div>
                                        </div>
                                    @endforeach
                                @elseif($category == 31)
                                    @php

                                        $product1 = \App\Models\Product::whereIn('category_id', [31])->orderBy('id',
                                        'ASC')->where("subscription_duration",'1')->groupBy("name")->get();

                                    @endphp
                                    @foreach($product1 as $products)
                                        @php
                                            $media = DB::table('media')->where('mediable_id',$products->id)->first();
                                            $pro_tag = DB::table('product_tags')->where('product_id',$products->id)->first();
                                            //dd($pro_tag);
                                            if($pro_tag)
                                            $tag = DB::table('tags')->where('id',$pro_tag->tag_id)->first();

                                        @endphp
                                        <div class="recmd-tablets-card act mt-30">
                                            <div class="r-t-card-body">
                                                <figure>
                                                    <img src="{{asset('storage/images/products/')}}{{ '/'. $media->file_name}}"
                                                         height="90px" alt="">
                                                </figure>
                                                <div class="r-t-body-cont">
                                                    class="r-t-body-cont">
                                                    <h5>
                                                        <p class="add-highlite-main">{{ $products->highlite }}</p>
                                                                {{ $products->name }}
                                                    </h5>
                                                    <p>{{ strip_tags($products->description) }}</p>


                                                    <div class="strength">
                                                        <h4>
                                                            {{ 'Starting at £'.$products->first_time_disc.' a month' }}
                                                        </h4>
                                                        <!-- <h4>(Strength {{ isset($products->quantity_mg) ? $products->quantity_mg : ""}} </h4>
                                                           <h4>Tablet {{ isset($products->quantity) ? $products->quantity : ""}}) </h4> -->
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="r-t-card-footer">
                                                <a href="javascript:void(0);" onclick="AddToCart('{{ $products->id }}')"
                                                   class="trans-btn black-btn learn-more-card-btn detailbtn myBtn">
                                                    Select
                                                </a>
                                                <!-- <a wire:click="cart({{ $products->id }})" class="trans-btn black-btn learn-more-card-btn detailbtn">Add</a> -->
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>


                    <input type="hidden" name="product_ids" id="ProductIds">
                    <input type="hidden" name="Session_Id" value="{{ $session_id }}">
                            @endif
                            <!-- all treatmenyt sec end -->


                        </div>
                    </div>

            </div>
        </div>
    </div>
    <!-- 11th step end -->
    <!--============================== strenth section =============================-->
    <div class="quest-v2-step authed-view <?php echo ($category == "30" || $category == "31" || !Auth::check()) ? "d-none":""?>" id="step2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="v2-6step-cont">
                        <div class="back-btn-content mb-30">
                            <div class="row align-items-center">
                                <div class="col-lg-1 col-md-2 col-6">
                                    <a href="javascript:void(0)" class="text-icon-btn prev-button"
                                       id="step2_back"><i
                                            class="fa-sharp fa-solid fa-circle-arrow-left"></i>Back</a>
                                </div>
                                <div class="col-lg-10 col-md-8 col-12 ordr-3">
                                    <h3 class="quest-v2-subh text-center m-0">
                                        Please choose your preferred monthly treatment
                                    </h3>
                                </div>
                                <div class="col-lg-1 col-md-2 col-6 d-flex justify-content-end"></div>
                            </div>
                        </div>


                        @if($category == 30)
                            <div class="text-icon-btn justify-content-center fw-500 mb-40" data-bs-toggle="modal"
                                 data-bs-target="#staticBackdrop_1"
                                 data-bs-content="Choose between the dropper and the spray bottle: Opt for the dropper for precise application, especially suited for longer hair and targeting specific thinning spots. Select the spray for broader coverage, making it easier to apply on shorter hair. Both methods are designed to reach the scalp for maximum scalp effectiveness.">
                                <i class="fa-solid fa-circle-info"></i>Which Bottle is right for me?
                            </div>
                            <div class='ctsm_radio_box' id="strength-view-content">
                        </div>
                        <!-- <div class="ctsm_radio_box" id="strength30">
                                <div class="row">
                                    @php
                                    $product1 = \App\Models\Product::where('type', 'Agents Minoxidl Solution')->orderBy('id', 'DESC')->get();

                                @endphp
                                @foreach($product1 as $key => $products)
                                    @php
                                        $media =
                                        DB::table('media')->where('mediable_id',$products->id)->first();
                                        $pro_tag =
                                        DB::table('product_tags')->where('product_id',$products->id)->first();
                                        //dd($pro_tag);
                                        if($pro_tag)
                                        $tag = DB::table('tags')->where('id',$pro_tag->tag_id)->first();

                                    @endphp
                                <div class="col-md-6 myBtn" onclick="AddToCart('{{$products->id}}')">
                                        <div class="form-group form-radio">
                                            <input type="radio" id="Sildenafil{{$key}}" name="strength_type" value="{{$tag->name}}">
                                            <label class="" for="Sildenafil{{$key}}">
                                                <h3>{{$tag->name}}</h3>
                                                <figure>
                                                    <img src="{{asset('storage/images/products/')}}{{ '/'. $media->file_name}}"
                                                         alt="">
                                                </figure>
                                            </label>
                                        </div>
                                    </div>

                                @endforeach
                                        </div>
                                    </div>

                            <div class="ctsm_radio_box" id="comb_pill_sol">
                                <div class="row">
                                    @php
                                    $product1 = \App\Models\Product::where('type', 'Agent Pill and solution')->orderBy('id', 'DESC')->get();

                                @endphp
                                @foreach($product1 as $key => $products)
                                    @php
                                        $media =
                                        DB::table('media')->where('mediable_id',$products->id)->first();
                                        $pro_tag =
                                        DB::table('product_tags')->where('product_id',$products->id)->first();
                                        //dd($pro_tag);
                                        if($pro_tag)
                                        $tag = DB::table('tags')->where('id',$pro_tag->tag_id)->first();

                                    @endphp
                                <div class="col-md-6 myBtn" onclick="AddToCart('{{$products->id}}')">
                                        <div class="form-group form-radio">
                                            <input type="radio" id="pill_sol_spray{{$key}}" name="strength_type" value="{{$tag->name}}">
                                            <label class="" for="pill_sol_spray{{$key}}">
                                                <h3>{{$tag->name}}</h3>
                                                <figure>
                                                    <img src="{{asset('storage/images/products/')}}{{ '/'. $media->file_name}}"
                                                         alt="">
                                                </figure>
                                            </label>
                                        </div>
                                    </div>

                                @endforeach
                                </div>
                            </div>
                            <div class="ctsm_radio_box" id="minoxidil">
                                <div class="row">
                                    <div class="col-md-6 myBtn" onclick="AddToCart('124','','minoxidil')">
                                        <div class="form-group form-radio">
                                            <input type="radio" id="minoxidil_spray" name="strength_type" value="Spray">
                                            <label class="" for="minoxidil_spray">
                                                <h3>Spray</h3>
                                                <figure>
                                                    <img src="{{asset('storage/images/categories/hair-loss.png')}}"
                                                         alt="">
                                                </figure>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 myBtn" onclick="AddToCart('118','','minoxidil')">
                                        <div class="form-group form-radio">
                                            <input type="radio" id="minoxidil_dropper" name="strength_type"
                                                   value="Dropper">
                                            <label class="" for="minoxidil_dropper">
                                                <h3>Dropper</h3>
                                                <figure>
                                                    <img src="{{asset('storage/images/categories/beard.png')}}" alt="">
                                                </figure>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ctsm_radio_box" id="min_fin_2in1">
                                <div class="row">
                                    @php
                                    $product1 = \App\Models\Product::where('type', 'Agent 2 in 1 combination solution')->orderBy('id', 'DESC')->get();

                                @endphp
                                @foreach($product1 as $key => $products)
                                    @php
                                        $media =
                                        DB::table('media')->where('mediable_id',$products->id)->first();
                                        $pro_tag =
                                        DB::table('product_tags')->where('product_id',$products->id)->first();
                                        //dd($pro_tag);
                                        if($pro_tag)
                                        $tag = DB::table('tags')->where('id',$pro_tag->tag_id)->first();

                                    @endphp
                                <div class="col-md-6 myBtn" onclick="AddToCart('{{$products->id}}')">
                                        <div class="form-group form-radio">
                                            <input type="radio" id="min_fin_2in1_spray{{$key}}" name="strength_type" value="{{$tag->name}}">
                                            <label class="" for="min_fin_2in1_spray{{$key}}">
                                                <h3>{{$tag->name}}</h3>
                                                <figure>
                                                    <img src="{{asset('storage/images/products/')}}{{ '/'. $media->file_name}}"
                                                         alt="">
                                                </figure>
                                            </label>
                                        </div>
                                    </div>

                                @endforeach

                                        </div>
                                    </div> -->
                        @elseif($category == 31)
                            <div class="text-icon-btn justify-content-center fw-500 mb-40" data-bs-toggle="modal"
                                 data-bs-target="#staticBackdrop_1"
                                 data-bs-content="Choose between the dropper and the spray bottle: Opt for the dropper for precise application, especially suited for longer hair and targeting specific thinning spots. Select the spray for broader coverage, making it easier to apply on shorter hair. Both methods are designed to reach the scalp for maximum scalp effectiveness.">
                                <i class="fa-solid fa-circle-info"></i>Which Bottle is right for me?
                            </div>
                            <div class="ctsm_radio_box" id="beard_minox">
                                <div class="row">
                                    @php
                                    $product1 = \App\Models\Product::where('type', 'Full Beard Growth kit with topical solution')->orderBy('id', 'DESC')->get();

                                @endphp
                                @foreach($product1 as $key => $products)
                                    @php
                                        $media =
                                        DB::table('media')->where('mediable_id',$products->id)->first();
                                        $pro_tag =
                                        DB::table('product_tags')->where('product_id',$products->id)->first();
                                        //dd($pro_tag);
                                        if($pro_tag)
                                        $tag = DB::table('tags')->where('id',$pro_tag->tag_id)->first();

                                    @endphp
                                <div class="col-md-6 myBtn" onclick="AddToCart('{{$products->id}}')">
                                        <div class="form-group form-radio">
                                            <input type="radio" id="beard_minox_spray{{$key}}" name="strength_type" value="{{$tag->name}}">
                                            <label class="" for="beard_minox_spray{{$key}}">
                                                <h3>{{$tag->name}}</h3>
                                                <figure>
                                                    <img src="{{asset('storage/images/products/')}}{{ '/'. $media->file_name}}"
                                                         alt="">
                                                </figure>
                                            </label>
                                        </div>
                                    </div>

                                @endforeach

                                </div>
                            </div>



                        @elseif($category == 32)
                            <div data-bs-toggle="modal"
                                 data-bs-target="#staticBackdrop"
                                 data-bs-content="For first-time users, the lower strength option is advised. This allows you to get the benefits of the treatment while giving your body time to acclimate. Once you see how you respond to the lower strength, you can then consider moving up." class="text-icon-btn justify-content-center fw-500 mb-40"><i
                                    class="fa-solid fa-circle-info" ></i>Which
                                strength is right for me?
                            </div>
                            <!-- NEW CODE START -->
                            <div class="ctsm_radio_box" id="sid">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-12 mb-3  d-flex justify-content-center">
                                        <div class="pre-tm-tablet">
                                            <figure>
                                                <img src="{{ asset('/storage/images/products/sildenafil-100mg-6-tablets1697799650-1.PNG')}}"
                                                     alt="">
                                            </figure>
                                            <h5 id="product_name"></h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-7 col-12 mb-3" onclick="AddToCart('52','100mg','Sildenafil')">
                                        <div class="form-group form-radio">
                                            <input type="radio" id="Sildenafil" name="strength_type" value="100mg">
                                            <label class="" for="Sildenafil">
                                                <div class=" pre-tm-mg">
                                                    <div class="dosage-mg">
                                                        <h3 class="hd-4">100 mg</h3>
                                                    </div>
                                                    <div class="dosage-price">
                                                        <h3>from</h3>
                                                            <h3>£16</h3>
                                                        <h3 class="hd-p">per month</h3>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-7 col-12 mb-3" onclick="AddToCart('65' ,'50mg','Sildenafil')">
                                        <div class="form-group form-radio">
                                            <input type="radio" id="Sildenafil2" name="strength_type" value="50mg">
                                            <label class="" for="Sildenafil2">
                                                <div class=" pre-tm-mg" data-strengthType="50 mg">
                                                    <div class="dosage-mg">
                                                        <h3 class="hd-4">50 mg</h3>
                                                    </div>
                                                    <div class="dosage-price">
                                                        <h3>from </h3>
                                                        <h3>£12</h3>
                                                        <h3 class="hd-p">per month</h3>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- NEW CODE END -->
                            <!-- NEW CODE START -->
                            <div class="ctsm_radio_box" id="teda">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-6 mb-3  d-flex justify-content-center">
                                        <div class="pre-tm-tablet">
                                            <figure>
                                                <img src="{{ asset('/storage/images/products/tadalafil-20mg-4-tablets1697799931-1.PNG')}}"
                                                     alt="">
                                            </figure>
                                            <h5 id="product_name"></h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 myBtn col-md-7 col-12 mb-3" onclick="AddToCart('55','20mg','tadalafil')">
                                        <div class="form-group form-radio">
                                            <input type="radio" id="tedenafil" name="strength_type" value="20mg">
                                            <label class="" for="tedenafil">
                                                <div class=" pre-tm-mg">
                                                    <div class="dosage-mg">
                                                        <h3 class="hd-4">20 mg</h3>
                                                    </div>
                                                    <div class="dosage-price">
                                                        <h3>from </h3>
                                                        <h3>£16 </h3>
                                                        <h3 class="hd-p">per month</h3>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 myBtn col-md-7 col-12 mb-3" onclick="AddToCart('61','10mg','tadalafil')">
                                        <div class="form-group form-radio">
                                            <input type="radio" id="tedenafil2" name="strength_type" value="10mg">
                                            <label class="" for="tedenafil2">
                                                <div class=" pre-tm-mg" data-strengthType="10 mg">
                                                    <div class="dosage-mg">
                                                        <h3 class="hd-4">10 mg</h3>
                                                    </div>
                                                    <div class="dosage-price">
                                                        <h3>from </h3>
                                                        <h3>£12 </h3>
                                                        <h3 class="hd-p">per month</h3>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ctsm_radio_box" id="tadalafil_daily">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-12 mb-3  d-flex justify-content-center">
                                        <div class="pre-tm-tablet">
                                            <figure>
                                                <img src="{{ asset('/storage/images/products/tadalafil-daily-5mg-28-tablets1697799830-1.PNG')}}"
                                                     alt="">
                                            </figure>
                                            <h5 id="product_name"></h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 myBtn col-md-7 col-12 mb-3" onclick="AddToCart('40','5mg','tadalafil_daily')">
                                        <div class="form-group form-radio">
                                            <input type="radio" id="tadalafil_daily_5" name="strength_type" value="5mg">
                                            <label class="" for="tadalafil_daily_5">
                                                <div class=" pre-tm-mg">
                                                    <div class="dosage-mg">
                                                        <h3 class="hd-4">5 mg</h3>
                                                    </div>
                                                    <div class="dosage-price">
                                                        <h3>from </h3>
                                                        <h3>£20</h3>
                                                        <h3 class="hd-p">per month</h3>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="ctsm_radio_box" id="viagra_connect">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-6 mb-3  d-flex justify-content-center">
                                        <div class="pre-tm-tablet">
                                            <figure>
                                                <img src="{{ asset('/storage/images/products/viagra-connect-50mg-4-tablets1697800053-1.PNG')}}"
                                                     alt="">
                                            </figure>
                                            <h5 id="product_name"></h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-7 col-12 mb-3 myBtn" onclick="AddToCart('45','50mg','viagra_connect')">
                                        <div class="form-group form-radio">
                                            <input type="radio" id="viagra_connect_50" name="strength_type"
                                                   value="50mg">
                                            <label class="" for="viagra_connect_50">
                                                <div class=" pre-tm-mg">
                                                    <div class="dosage-mg">
                                                        <h3 class="hd-4">50mg </h3>
                                                    </div>
                                                    <div class="dosage-price">
                                                        <h3>from </h3>
                                                        <h3>£35</h3>
                                                        <h3 class="hd-p">per month</h3>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- NEW CODE END -->
                        @elseif($category == 33)
                            <div data-bs-toggle="modal"
                                 data-bs-target="#staticBackdrop"
                                 data-bs-content="For first-time users, the lower strength option is advised. This allows you to get the benefits of the treatment while giving your body time to acclimate. Once you see how you respond to the lower strength, you can then consider moving up." class="text-icon-btn justify-content-center fw-500 mb-40"><i
                                    class="fa-solid fa-circle-info" ></i>Which
                                strength is right for me?
                            </div>
                            <!-- new code start  -->
                            <div class="ctsm_radio_box" id="month_priligy">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-6s mb-3  d-flex justify-content-center">
                                        <div class="pre-tm-tablet">
                                            <figure>
                                                <img src="{{asset('/storage/images/products/Dapoxetine-Prilligy.PNG')}}"
                                                     alt="">
                                            </figure>
                                            <h5 id="product_name"></h5>
                                        </div>
                                    </div>
                                    <div class="col-md-4 myBtn" onclick="AddToCart('66','30mg','priligy')">
                                        <div class="form-group form-radio">
                                            <input type="radio" id="priligy_30" name="strength_type"
                                                   value="Priligy (Dapoxetine) 30mg">
                                            <label class="" for="priligy_30">

                                                <div class=" pre-tm-mg">
                                                    <div class="dosage-mg">
                                                        <h3 class="hd-4">Priligy (Dapoxetine) 30mg</h3>
                                                    </div>
                                                    <div class="dosage-price">
                                                        <h3>from </h3>
                                                        <h3>£25</h3>
                                                        <h3 class="hd-p">per month</h3>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 myBtn" onclick="AddToCart('68','60mg','priligy')">
                                        <div class="form-group form-radio">
                                            <input type="radio" id="priligy_60" name="strength_type"
                                                   value="Priligy (Dapoxetine) 60mg">
                                            <label class="" for="priligy_60">
                                                <div class=" pre-tm-mg">
                                                    <div class="dosage-mg">
                                                        <h3 class="hd-4">Priligy (Dapoxetine) 60mg</h3>
                                                    </div>

                                                    <div class="dosage-price">
                                                        <h3>from </h3>
                                                        <h3>£29</h3>
                                                        <h3 class="hd-p">per month</h3>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ctsm_radio_box" id="month_normal">
                                <div class="row">
                                    <!-- <div class="col-md-6 myBtn" onclick="AddToCart('66')">
                                                    <div class="form-group form-radio">
                                                        <input type="radio" id="Sildenafil" name="strength_type" value="Priligy (Dapoxetine) 30mg">
                                                        <label class="" for="Sildenafil">
                                                            <h3>Priligy (Dapoxetine) 30mg</h3>
                                                            <figure>
                                                                <img src="{{asset('frontend_new/images/pre-Priligy.JPG')}}" alt="">
                                                            </figure>
                                                        </label>
                                                    </div>
                                                </div> -->
                                    <!-- <div class="col-md-6 myBtn" onclick="AddToCart('43')">
                                                    <div class="form-group form-radio">
                                                        <input type="radio" id="Sildenafil2" name="strength_type" value="Stud 100 Desensitization Spray">
                                                        <label class="" for="Sildenafil2">
                                                            <h3>Stud 100 Desensitization Spray</h3>
                                                            <figure>
                                                                <img src="{{asset('storage/images/categories/hair-loss.png')}}" alt="">
                                                            </figure>
                                                        </label>
                                                    </div>
                                                </div> -->

                                </div>
                            </div>
                            <!-- new code end -->
                        @endif
                        <!-- strenth section Ends-->
                        <div class="quest-v2-btn text-center mt-30 pt-30">
                            <!-- <a class="btn-d-black btn-wt-300 " href="javascript:void(0)" id="cont_2">Continue</a> -->
                            <!-- <button type="submit" class="btn-d-black btn-wt-300" >Continue</button> -->
                            <button class="btn-d-black btn-wt-300 " type="button" id="cont_2">Continue</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 12th step end -->
    <!-- recommended addon -->

    <!-- recommended addon -->

    <!-- tablet section start -->

    <div class="quest-v2-step authed-view <?php echo ($category == "30" || $category == "31" || !Auth::check()) ? "d-none":""?>" id="step3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="v2-6step-cont">
                        <div class="back-btn-content mb-30">
                            <div class="row align-items-center">
                                <div class="col-lg-1 col-md-2 col-6">
                                    <a href="javascript:void(0)" class="text-icon-btn prev-button"
                                       id="step3_back"><i
                                            class="fa-sharp fa-solid fa-circle-arrow-left"></i>Back</a>
                                </div>
                                <div class="col-lg-10 col-md-8 col-12 ordr-3">
                                    <h3 class="quest-v2-subh text-center m-0">
                                        Please select your  monthly tablet quantity
                                    </h3>
                                </div>
                                <div class="col-lg-1 col-md-2 col-6 d-flex justify-content-end"></div>
                            </div>
                        </div>
                        <!-- <div class="text-icon-btn justify-content-center fw-500 mb-40"><i
                                        class="fa-solid fa-circle-info"></i>Which strength is right for me?
                                </div> -->

                        {{--  @if($category == 30 && $category == 31) --}}
                        <!-- <div class="text-icon-btn justify-content-center fw-500 mb-40">
                                        Which Bottle is right for me?
                                    </div> -->
                        <!-- <div class="text-icon-btn justify-content-center fw-500 mb-40"><i
                                        class="fa-solid fa-circle-info"></i>Which Bottle is right for me?
                                </div> -->
                        {{--   @else --}}
                        <!-- <div class="text-icon-btn justify-content-center fw-500 mb-40"><i
                                            class="fa-solid fa-circle-info"></i>Which strength is right for me?
                                    </div> -->
                        {{--   @endif  --}}


                        @if($category == 30)
                            <div class="text-icon-btn justify-content-center fw-500 mb-40" data-bs-toggle="modal"
                                 data-bs-target="#staticBackdrop_1"
                                 data-bs-content="Choose between the dropper and the spray bottle: Opt for the dropper for precise application, especially suited for longer hair and targeting specific thinning spots. Select the spray for broader coverage, making it easier to apply on shorter hair. Both methods are designed to reach the scalp for maximum scalp effectiveness.">
                                <i class="fa-solid fa-circle-info"></i> Which Bottle is right for me?
                            </div>

                        @elseif($category == 31)
                            <div class="text-icon-btn justify-content-center fw-500 mb-40" data-bs-toggle="modal"
                                 data-bs-target="#staticBackdrop_1"
                                 data-bs-content="Choose between the dropper and the spray bottle: Opt for the dropper for precise application, especially suited for longer hair and targeting specific thinning spots. Select the spray for broader coverage, making it easier to apply on shorter hair. Both methods are designed to reach the scalp for maximum scalp effectiveness.">
                                <i class="fa-solid fa-circle-info"></i> Which Bottle is right for me?
                            </div>


                        @elseif($category == 32)
                            <div data-bs-toggle="modal"
                                 data-bs-target="#staticBackdrop"
                                 data-bs-content="For first-time users, the lower strength option is advised. This allows you to get the benefits of the treatment while giving your body time to acclimate. Once you see how you respond to the lower strength, you can then consider moving up." class="text-icon-btn justify-content-center fw-500 mb-40"><i
                                    class="fa-solid fa-circle-info" ></i>Which
                                strength is right for me?
                            </div>

                            <!-- NEW CODE START -->
                            <div class="r-t-card-footer justify-content-center d-none" id="Sildenafil_tablet_box_100">
                                <div class="tablets-list-box t1 myBtn" onclick="AddToCart('52')">
                                    <div class="row">
                                        <div class="col-sm-6 col-12">
                                            <figure><img src="{{ asset('images/sildenafil-tablet.svg')}}" alt="">
                                            </figure>
                                            <h5>6 tablets</h5>
                                        </div>

                                        <div class="col-sm-6 col-12">
                                            <p><del>£25/month</del></p>
                                            <p>£16/month</p>
                                            <p class="hd-6">1<sup>st</sup> order discount</span>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="tablets-list-box t1 myBtn" onclick="AddToCart('63')">
                                    <div class="row">
                                        <div class="col-sm-6 col-12">
                                            <figure><img src="{{ asset('images/sildenafil-tablet.svg')}}" alt="">
                                            </figure>
                                            <h5>8 tablets</h5>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <p><del>£30/month</del></p>
                                            <p>£20/month</p>
                                            <p class="hd-6">1<sup>st</sup> order discount</span>
                                            </p>
                                        </div>


                                    </div>
                                </div>
                                <div class="tablets-list-box t1 myBtn" onclick="AddToCart('64')">
                                    <div class="row">
                                        <div class="col-sm-6 col-6">
                                            <figure><img src="{{ asset('images/sildenafil-tablet.svg')}}" alt="">
                                            </figure>
                                            <h5>10 tablets</h5>
                                        </div>
                                        <div class="col-sm-6 col-6">
                                            <p><del>£34/month</del></p>
                                            <p>£24/month</p>
                                            <p class="hd-6">1<sup>st</sup> order discount</span>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="tablets-list-box t1 myBtn" onclick="AddToCart('65')">
                                    <div class="row">
                                        <div class="col-sm-6 col-12">
                                            <figure><img src="{{ asset('images/sildenafil-tablet.svg')}}" alt="">
                                            </figure>
                                            <h5>12 tablets</h5>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <p><del>£38/month</del></p>
                                            <p>£28/month</p>
                                            <p class="hd-6">1<sup>st</sup> order discount</span>
                                            </p>
                                        </div>

                                    </div>
                                </div>




                            </div>
                            <div class="r-t-card-footer justify-content-center d-none" id="Sildenafil_tablet_box_50">
                                <div class="tablets-list-box t1 myBtn" onclick="AddToCart('39')">
                                    <div class="row">
                                        <div class="col-sm-6 col-12">
                                            <figure><img src="{{ asset('images/sildenafil-tablet.svg')}}" alt="">
                                            </figure>
                                            <h5>6 tablets </h5>
                                        </div>

                                        <div class="col-sm-6 col-12">
                                            <p><del>£20/month</del></p>
                                            <p>£12/month</p>
                                            <p class="hd-6">1<sup>st</sup> order discount</span>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="tablets-list-box t1 myBtn" onclick="AddToCart('49')">
                                    <div class="row">
                                        <div class="col-sm-6 col-12">
                                            <figure><img src="{{ asset('images/sildenafil-tablet.svg')}}" alt="">
                                            </figure>
                                            <h5>8 tablets</h5>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <p><del>£25/month</del></p>
                                            <p>£16/month</p>
                                            <p class="hd-6">1<sup>st</sup> order discount</span>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="tablets-list-box t1 myBtn" onclick="AddToCart('50')">
                                    <div class="row">
                                        <div class="col-sm-6 col-12">
                                            <figure><img src="{{ asset('images/sildenafil-tablet.svg')}}" alt="">
                                            </figure>
                                            <h5>10 tablets</h5>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <p><del>£30/month</del></p>
                                            <p>£20/month</p>
                                            <p class="hd-6">1<sup>st</sup> order discount</span>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="tablets-list-box t1 myBtn" onclick="AddToCart('51')">
                                    <div class="row">
                                        <div class="col-sm-6 col-12">
                                            <figure><img src="{{ asset('images/sildenafil-tablet.svg')}}" alt="">
                                            </figure>
                                            <h5>12 tablets</h5>
                                        </div>
                                        <div class="col-sm-6 col-12">

                                            <p><del>£35/month</del></p>
                                            <p>£24/month</p>
                                            <p class="hd-6">1<sup>st</sup> order discount</span>
                                            </p>
                                        </div>

                                    </div>
                                </div>




                            </div>
                            <div class="r-t-card-footer justify-content-center d-none" id="tadalafil_tablet_box_20">
                                <div class="tablets-list-box t1 myBtn" onclick="AddToCart('56')">
                                    <div class="row">
                                        <div class="col-sm-5 col-6">
                                            <figure><img class="tablet-100size"
                                                         src="{{ asset('images/tadalafil-tablet.png')}}" alt="">
                                            </figure>
                                            <h5>4 Tablets </h5>
                                        </div>
                                        <div class="col-sm-7 col-6">
                                            <p><del>£25/month </del></p>
                                            <p>£16/month</p>
                                            <p class="hd-6">1<sup>st</sup> order discount</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tablets-list-box t1 myBtn" onclick="AddToCart('59')">
                                    <div class="row">
                                        <div class="col-sm-5 col-6">
                                            <figure><img class="tablet-100size"
                                                         src="{{ asset('images/tadalafil-tablet.png')}}" alt="">
                                            </figure>
                                            <h5>6 Tablets </h5>
                                        </div>
                                        <div class="col-sm-7 col-6">
                                            <p><del>£30/month </del></p>
                                            <p>£20/month</p>
                                            <p class="hd-6">1<sup>st</sup> order discount</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tablets-list-box t1 myBtn" onclick="AddToCart('60')">
                                    <div class="row">
                                        <div class="col-sm-5 col-6">
                                            <figure><img class="tablet-100size"
                                                         src="{{ asset('images/tadalafil-tablet.png')}}" alt="">
                                            </figure>
                                            <h5>8 Tablets </h5>
                                        </div>
                                        <div class="col-sm-7 col-6">
                                            <p><del>£35/month </del></p>
                                            <p>£25/month</p>
                                            <p class="hd-6">1<sup>st</sup> order discount</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tablets-list-box t1 myBtn" onclick="AddToCart('61')">
                                    <div class="row">
                                        <div class="col-sm-5 col-6">
                                            <figure><img class="tablet-100size"
                                                         src="{{ asset('images/tadalafil-tablet.png')}}" alt="">
                                            </figure>
                                            <h5>10 Tablets </h5>
                                        </div>
                                        <div class="col-sm-7 col-6">
                                            <p><del>£40/month </del></p>
                                            <p>£30/month</p>
                                            <p class="hd-6">1<sup>st</sup> order discount</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <div class="r-t-card-footer justify-content-center d-none" id="tadalafil_tablet_box_10">
                                <div class="tablets-list-box t1 myBtn" onclick="AddToCart('41')">
                                    <div class="row">
                                        <div class="col-sm-5 col-6">
                                            <figure><img class="tablet-100size"
                                                         src="{{ asset('images/tadalafil-tablet.png')}}" alt="">
                                            </figure>
                                            <h5 class="text-center">4 tablets</h5>
                                        </div>
                                        <div class="col-sm-7 col-6">
                                            <p><del>£20/month </del></p>
                                            <p>£12/month</p>
                                            <p class="hd-6">1<sup>st</sup> order discount</span>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="tablets-list-box t1 myBtn" onclick="AddToCart('53')">
                                    <div class="row">
                                        <div class="col-sm-5 col-6">
                                            <figure><img class="tablet-100size"
                                                         src="{{ asset('images/tadalafil-tablet.png')}}" alt="">
                                            </figure>
                                            <h5 class="text-center">6 tablets</h5>
                                        </div>
                                        <div class="col-sm-7 col-6">
                                            <p><del>£24/month </del></p>
                                            <p>£16/month</p>
                                            <p class="hd-6">1<sup>st</sup> order discount</span>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="tablets-list-box t1 myBtn" onclick="AddToCart('54')">
                                    <div class="row">
                                        <div class="col-sm-5 col-6">
                                            <figure><img class="tablet-100size"
                                                         src="{{ asset('images/tadalafil-tablet.png')}}" alt="">
                                            </figure>
                                            <h5 class="text-center">8 tablets</h5>
                                        </div>
                                        <div class="col-sm-7 col-6">
                                            <p><del>£28/month</del></p>
                                            <p>£20/month</p>
                                            <p class="hd-6">1<sup>st</sup> order discount</span>
                                            </p>
                                        </div>


                                    </div>
                                </div>
                                <div class="tablets-list-box t1 myBtn" onclick="AddToCart('55')">
                                    <div class="row">
                                        <div class="col-sm-4 col-6">
                                            <figure><img class="tablet-100size"
                                                         src="{{ asset('images/tadalafil-tablet.png')}}" alt="">
                                            </figure>
                                            <h5 class="text-center">10 tablets</h5>
                                        </div>
                                        <div class="col-sm-7 col-6">
                                            <p><del>£32/month</del></p>
                                            <p>£24/month</p>
                                            <p class="hd-6">1<sup>st</sup> order discount</span>
                                            </p>
                                        </div>

                                    </div>
                                </div>




                            </div>
                            <div class="r-t-card-footer justify-content-center d-none"
                                 id="tadalafil_daily_tablet_box_5">
                                <div class="tablets-list-box t1 myBtn" onclick="AddToCart('40')">
                                    <div class="row">
                                        <div class="col-sm-5 col-6">
                                            <figure><img class="tablet-100size"
                                                         src="{{ asset('images/tadalafil-tablet.png')}}" alt="">
                                            </figure>
                                            <h5 class="text-center">28 tablets</h5>
                                        </div>

                                        <div class="col-sm-7 col-6">
                                            <p><del>£35/month</del></p>
                                            <p>£20/month</p>
                                            <p class="hd-6">1<sup>st</sup> order discount</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="r-t-card-footer justify-content-center d-none" id="viagra_connect_box_50">
                                <div class="tablets-list-box t1 myBtn" onclick="AddToCart('45')">
                                    <div class="row">
                                        <div class="col-sm-6 col-12">
                                            <figure><img src="{{ asset('images/sildenafil-tablet.svg')}}" alt="">
                                            </figure>
                                            <h5>4 tablets</h5>
                                        </div>
                                        <div class="col-sm-6 col-12">
                                            <p><del>£40/month</del></p>
                                            <p>£35/month</p>
                                            <p class="hd-6">1<sup>st</sup> order discount</span>
                                            </p>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!-- NEW CODE END -->
                            <!-- NEW CODE START -->

                            <!-- NEW CODE END -->
                        @elseif($category == 33)
                            <div data-bs-toggle="modal"
                                 data-bs-target="#staticBackdrop"
                                 data-bs-content="For first-time users, the lower strength option is advised. This allows you to get the benefits of the treatment while giving your body time to acclimate. Once you see how you respond to the lower strength, you can then consider moving up." class="text-icon-btn justify-content-center fw-500 mb-40"><i
                                    class="fa-solid fa-circle-info" ></i>Which
                                strength is right for me?
                            </div>
                            <div class="r-t-card-footer justify-content-center d-none" id="priligy_box_30">
                                <div class="tablets-list-box t1 myBtn" onclick="AddToCart('66')">
                                    <div class="row">
                                        <div class="col-sm-5 col-6">
                                            <figure><img class="tablet-100size"
                                                         src="{{ asset('images/dapoxtine-tablet.png')}}" alt="">
                                            </figure>
                                            <h5>3 tablets</h5>
                                        </div>
                                        <div class="col-sm-7 col-6">
                                            <p><del>£35/month</del></p>
                                            <p>£25/month</p>
                                            <p class="hd-6">1<sup>st</sup> order discount</span>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="tablets-list-box t1 myBtn" onclick="AddToCart('67')">
                                    <div class="row">
                                        <div class="col-sm-5 col-6">
                                            <figure><img class="tablet-100size"
                                                         src="{{ asset('images/dapoxtine-tablet.png')}}" alt="">
                                            </figure>
                                            <h5>6 tablets</h5>
                                        </div>
                                        <div class="col-sm-7 col-6">
                                            <p><del>£56/month</del></p>
                                            <p>£35/month</p>
                                            <p class="hd-6">1<sup>st</sup> order discount</span>
                                            </p>
                                        </div>

                                    </div>
                                </div>


                            </div>
                            <div class="r-t-card-footer justify-content-center d-none" id="priligy_box_60">
                                <div class="tablets-list-box t1 myBtn" onclick="AddToCart('68')">
                                    <div class="row">
                                        <div class="col-sm-5 col-6">
                                            <figure><img class="tablet-100size"
                                                         src="{{ asset('images/dapoxtine-tablet.png')}}" alt="">
                                            </figure>
                                            <h5>3 tablets</h5>
                                        </div>
                                        <div class="col-sm-7 col-6">
                                            <p><del>£39/month</del></p>
                                            <p>£29/month</p>
                                            <p class="hd-6">1<sup>st</sup> order discount</span>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="tablets-list-box t1 myBtn" onclick="AddToCart('69')">
                                    <div class="row">
                                        <div class="col-md-5 col-4">
                                            <figure><img class="tablet-100size"
                                                         src="{{ asset('images/dapoxtine-tablet.png')}}" alt="">
                                            </figure>
                                            <h5>6 tablets</h5>
                                        </div>
                                        <div class="col-md-7 col-8">
                                            <p><del>£63/month</del></p>
                                            <p>£40/month</p>
                                            <p class="hd-6">1<sup>st</sup> order discount</span>
                                            </p>
                                        </div>


                                    </div>
                                </div>


                            </div>
                            <!-- new code end -->
                        @endif
                        <!-- strenth section Ends-->
                        <div class="quest-v2-btn text-center mt-30 pt-30">
                            <!-- <a class="btn-d-black btn-wt-300 " href="javascript:void(0)" id="cont_2">Continue</a> -->
                            <!-- <button type="submit" class="btn-d-black btn-wt-300" >Continue</button> -->
                            <button class="btn-d-black btn-wt-300 " type="button" id="cont_3">Continue</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="quest-v2-step authed-view <?php echo ($category == "30" || $category == "31" || !Auth::check()) ? "d-none":""?>" id="step4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="v2-6step-cont">
                        <div class="back-btn-content mb-30">
                            <div class="row align-items-center">
                                <div class="col-lg-1 col-md-2 col-6">
                                    <a href="javascript:void(0)" class="text-icon-btn prev-button"
                                       id="step4_back"><i
                                            class="fa-sharp fa-solid fa-circle-arrow-left"></i>Back</a>
                                </div>
                                <div class="col-lg-10 col-md-8 col-12 ordr-3 text-center">
                                    <h2 class="quest-v2-subh text-center m-0">
                                        Treatment Plan: Tailor Your Subscription
                                    </h2>
                                    <p>Select your subscription frequency to match your needs. Our flexible model is designed for your convenience.</p>
                                </div>
                                <div class="col-lg-1 col-md-2 col-6 d-flex justify-content-end"></div>
                            </div>
                        </div>

                        @if($category != 32 and $category!=33)
                        <div class="text-center">

                        <img src="{{asset('frontend_new/images/money-back.png')}}" style="width: 100%"/>

                        </div>
                        @endif
                        <div class="list mt-0">
                            <h3 class="text-center quest-v2-subh text-center m-0">Included in your plan</h3>
                            <div class="row mt-4">
                                <div class="col-lg-4 d-flex ico-cus-div" data-bs-toggle="modal"
                                     data-bs-target="#detail_modal"
                                     data-icon="fa-shopping-cart" data-content="You will receive a monthly delivery of your treatment during the subscription." data-title="Free monhtly shipping">
                                    <i class="ico-cus fa fa-shopping-cart"></i>
                                    <a class="text-white" style="margin: 10px 0;" href="javascript:void(null)">
                                        Free monthly shipping</a>
                                    <i class="ico-cus fa fa-chevron-right"></i>
                                </div>

                                <div class="col-lg-4 d-flex ico-cus-div" data-bs-toggle="modal" data-bs-target="#detail_modal"
                                     data-icon="fa-pause" data-content="We understand that life can be unpredictable. That's why our subscription plan offers the flexibility to pause or cancel whenever you need, ensuring it always aligns with your current situation." data-title="Pause treatment any time"> <i class="ico-cus fa fa-pause ico-cus"></i>
                                    <a class="text-white" style="margin: 10px 0;" href="javascript:void(null)"> Pause treatment any time </a><i class="ico-cus fa fa-chevron-right"></i></div>
                                <div class="col-lg-4  d-flex ico-cus-div" data-bs-toggle="modal" data-bs-target="#detail_modal"
                                     data-icon="fa-phone" data-content="Receive continuous support from our dedicated team, ensuring a seamless and effective treatment experience from start to finish. " data-title="Continuous care and support"> <i class="ico-cus fa fa-phone"></i><a class="text-white" style="margin: 10px 0;" href="javascript:void(null)"> Continuous care and support included </a><i class="ico-cus fa fa-chevron-right"></i></div>
                            </div>
                            </div>
                        </div>
                        <div class="card-design sub_pan mb-40 text-center list" id="subs_form">
                            <!-- <h3 class="card-heading mb-30">Our subscription plan</h3> -->
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">


                            <div class="row">
                                @if($category == 31)

                                    <div class="col-lg-6 col-sm-12 mb-3">
                                        <div class="form-group form-radio">
                                            <input type="radio" id="month_2" name="subs_1" checked="checked" value="1">
                                            <label class="sub-leb" for="month_2">

                                                <h4>1 month treatment plan</h4>
                                                <!-- <h4 class="sub-text-leb">£32.00 <span>per month’s treatment</span></h4> -->
                                                <!-- <p><i class="fa-solid fa-check"></i> No additional savings when choosing
                                                    this treatment course</p> -->
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12 mb-3 d-none" id="beard_subs">
                                        <div class="form-group form-radio">
                                            <input type="radio" id="month_3" name="subs_1" value="3">
                                            <label class="sub-leb" for="month_3">
                                                <span class="discount-percntg">Recommended</span>
                                                <h4>3 months treatment plan</h4>

                                                <!-- <h4 class="sub-text-leb">£36.00 <span><del>£44.00</del>per month’s -->
                                                <!-- treatment</span></h4> -->
                                                <p>Save up to 30% with this treatment duration</p>
                                            </label>
                                        </div>
                                    </div>

                                @elseif($category == 30)
                                    <div class="col-lg-6 col-sm-12 mb-3">
                                        <div class="form-group form-radio">
                                            <input type="radio" id="month_2" name="subs_1" checked="checked" value="1">
                                            <label class="sub-leb" for="month_2">

                                                <h4>1 month treatment plan</h4>
                                                <!-- <h4 class="sub-text-leb">£32.00 <span>per month’s treatment</span></h4> -->

                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12 mb-3">
                                        <div class="form-group form-radio">
                                            <input type="radio" id="month_3" name="subs_1" value="3">
                                            <label class="sub-leb" for="month_3">
                                                <span class="discount-percntg">Reccomended</span>
                                                <h4>3 months treatment plan</h4>

                                                <!-- <h4 class="sub-text-leb">£36.00 <span><del>£44.00</del>per month’s -->
                                                <!-- treatment</span></h4> -->
                                                <p>Save up to 30% with this treatment duration</p>
                                            </label>
                                        </div>
                                    </div>

                                @else
                                    <div class="col-lg-6 col-sm-12 mb-3">
                                        <div class="form-group form-radio mb-3">
                                            <input type="radio" id="month_1" name="subs_1" checked="checked" value="1">
                                            <label class="sub-leb" for="month_1">
                                                <h4>1 months treatment plan</h4>
                                                <!-- <h4 class="sub-text-leb">£22.00 <span>per month’s treatment</span></h4> -->
                                                <!-- <p><i class="fa-solid fa-check"></i> No additional savings when choosing
                                                    this treatment course</p> -->
                                            </label>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="quest-v2-btn text-center mt-30 pt-30">
                            <!-- <a class="btn-d-black btn-wt-300 " href="javascript:void(0)" id="cont_2">Continue</a> -->
                            <button type="submit" class="btn-d-black btn-wt-300">Continue</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tablet section end -->
    </form>


    <!-- loader section start -->
    <div class="quest-v2-loadingstep " style="display: none;">
        <div class="row">
            <div class="col-md-12">
                <div class="quest-loading-steps">
                    <div class="loading-user-img">
                        <img src="{{ asset('frontend_new/images/loading-user.png') }}" alt="">
                    </div>
                    <h3 class="quest-v2-subh mb-30">
                        We are creating your personalized recommendations.
                    </h3>
                    <div class="quest-progress-bar">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <h5 class="loading-text">This will only take couple of seconds</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- loader section end -->
    </div>
    </div>
    </div>
                                @endif
    <!-- pop up   start (add)-->
    <!-- <div class="ques_product_seccess"><h5>Added to cart...</h5></div> -->
    <!-- pop up end (add) -->

    <!-- Button trigger modal -->


    <!-- Modal-1 -->
    <div class="modal fade  poppover" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
         tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Which strength is right for me?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    For first-time users, the lower strength option is advised. This allows you to get the benefits
                    of the treatment while
                    giving your body time to acclimate. Once you see how you respond to the lower strength, you can
                    then consider moving up.
                </div>
            </div>
        </div>
    </div>
    <!-- Modal-1 -->
    <div class="modal fade  poppover" id="detail_modal" data-bs-backdrop="static" data-bs-keyboard="false"
         tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="margin-right: 10px;"><i class="" id="ico-modal"></i></h5>
                    <h5 class="modal-title" id="moid">Title is loading</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    Loading...
                </div>
            </div>
        </div>
    </div>


    <!-- model-2 -->
    <div class="modal fade  poppover" id="staticBackdrop_1" data-bs-backdrop="static" data-bs-keyboard="false"
         tabindex="-1" aria-labelledby="staticBackdropLabel_1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel_1">Which Bottle Is Right For Me?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Choose between the dropper and the spray bottle: Opt for the dropper for precise application,
                    especially suited for longer hair and targeting specific thinning spots. Select the spray for
                    broader coverage, making it easier to apply on shorter hair. Both methods are designed to
                    reach the scalp for maximum scalp effectiveness.


                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="product-modal">
        <div class="modal-dialog" style="max-width: revert-layer;">
          <div class="modal-content">
            <!-- Modal Header -->
            <!-- Modal body -->
            <div class="modal-body">
                <div>
                    <img class="modal-product-image" style="width: 75%">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><img src="{{ asset('images/close-icon.png') }}"/></button>
                </div>
                <div class="modal-product-content">
                    <h3 class="modal-product-title"></h3>
                    <p class="modal-product-description"></p>
                </div>
            </div>
          </div>
        </div>
    </div>

    <form action="{{ route('checkout.index') }}" method="POST" id="submit_form">
        @csrf
        <input type="hidden" name="product_ids" id="ProductIds">
        <input type="hidden" name="Session_Id" value="{{ $session_id }}">
    </form>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script src="js/custom.js"></script> -->
<script src="{{ asset('js/custom.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>



<!-- script for the popup -->
<script>
    $('#check').change(function() {
        $('#btncheck').prop("disabled", !this.checked);
    }).change()
</script>


<script>
    $(document).ready(function () {
         var swiper = new Swiper("#rec_prod", {
            watchSlidesProgress: true,
            slidesPerView: 1,
            spaceBetween: 0,
            breakpoints: {
                992: {
                    slidesPerView: 2,
                    spaceBetween: 0,
                },
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });


        var swiper1 = new Swiper("#other_rec_prod", {
            watchSlidesProgress: true,
            slidesPerView: 1,
            spaceBetween: 0,
            enabled: window.screen.width < 992,
            breakpoints: {
                992: {
                    slidesPerView: 2,
                    spaceBetween: 0,
                },
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next1",
                prevEl: ".swiper-button-prev1",
            },
        });
        document.body.onresize = function() {
            if(window.screen.width < 992 && swiper1)  {
                swiper1.enable()
            }
            else swiper1 && swiper1.disable();
        }
    });
</script>

<!-- saving questionnair -->
<script>
    $(document).ready(function() {

        $('#detail_modal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var title = button.data('title');
            var content = button.data('content');
            var icon = button.data('icon');
            var modal = $(this);
            modal.find('#moid').html(title);
            modal.find('.modal-body').html(content);
            modal.find('#ico-modal').removeAttr('class');
            modal.find('#ico-modal').addClass('fa');
            modal.find('#ico-modal').addClass(icon);
        });


        $("#submit_question2").click(function(e) {
            e.preventDefault();
            console.log('data', $('#bg-form').serialize());
            // $.ajax({
            //    alert('sdfsdfsdf');
            //     type: "get",
            //  session('my_random_string')
            //         alert( msg );
            //     }
            // });
        });
    });
    var product_ids = [];
    // function AddToCart(product_id){
    //     product_ids.array_replace(product_id);
    //     console.log(product_id,product_ids);
    //     $("#ProductIds").val(product_ids);
    // }

    //     function AddToCart(product_id) {
    //     var index = product_ids.indexOf(product_id);

    //     if (index !== -1) {
    //         product_ids[index] = product_id; // Replace the existing product_id
    //     } else {
    //         product_ids.push(product_id); // Add the product_id if it doesn't exist
    //     }

    //     console.log(product_id, product_ids);
    //     $("#ProductIds").val(product_ids);
    // }

    //ss
    $(document).ready(function() {
        $('#month_priligy').hide();
        $('#month_normal').hide();
        $('#comb_pill_sol').hide();
        $('#minoxidil').hide();
        $('#min_fin_2in1').hide();
        $('#beard_minox').hide();
        $('#strength30').hide();
        $('#beard').hide();
        $('#beard2').hide();
        $('#beard3').hide();
    });

    // code to add product to purchase
    function AddToCart(product_id, strength = null, prod_name = null) {
        console.log('product_id', product_id);
        console.log('strength', strength);
        console.log('prod_name', prod_name);

        if (strength != null && strength != '') {
            $('#Sildenafil_tablet_box_100').addClass('d-none');
            $('#Sildenafil_tablet_box_50').addClass('d-none');
            $('#tadalafil_tablet_box_20').addClass('d-none');
            $('#tadalafil_tablet_box_10').addClass('d-none');
            $('#tadalafil_daily_tablet_box_5').addClass('d-none');
            $('#viagra_connect_box_50').addClass('d-none');
            $('#priligy_box_30').addClass('d-none');
            $('#priligy_box_60').addClass('d-none');
            if (prod_name == 'Sildenafil') {

                if (strength == '100mg') {
                    $('#Sildenafil_tablet_box_100').removeClass('d-none');
                } else if (strength == '50mg') {
                    $('#Sildenafil_tablet_box_50').removeClass('d-none');
                }
            } else if (prod_name == 'tadalafil') {


                if (strength == '20mg') {
                    $('#tadalafil_tablet_box_20').removeClass('d-none');
                } else if (strength == '10mg') {
                    $('#tadalafil_tablet_box_10').removeClass('d-none');
                }
            } else if (prod_name == 'tadalafil_daily') {


                if (strength == '5mg') {
                    $('#tadalafil_daily_tablet_box_5').removeClass('d-none');
                }
            } else if (prod_name == 'viagra_connect') {

                if (strength == '50mg') {
                    $('#viagra_connect_box_50').removeClass('d-none');
                }
            } else if (prod_name == 'priligy') {
                if (strength == '30mg') {
                    $('#priligy_box_30').removeClass('d-none');
                } else if (strength == '60mg') {
                    $('#priligy_box_60').removeClass('d-none');
                }
            }
        } else {
            console.log('das');
            // if(prod_name == 'pill_solution'){
            //     $('#cont_2').attr('type','submit');
            // }
            // if(prod_name == 'minoxidil'){
            //     $('#cont_2').attr('type','submit');
            // }
        }



        var product_ids = []; // Initialize an empty array for product IDs

        if (product_ids.length === 0) {
            product_ids.push(product_id); // Add the first product ID
        } else {
            product_ids[0] = product_id; // Replace the existing product ID
        }
        $("#tadalafil_daily").hide();
        $("#viagra_connect").hide();
        $("#teda").hide();
        $("#sid").hide();
        if (parseInt(product_ids) === 42 || parseInt(product_ids) === 66 || parseInt(product_ids) === 67 || parseInt(
            product_ids) === 68 || parseInt(product_ids) === 69) {
            $("#month_priligy").show();
            $("#month_normal").hide();
        } else {
            $("#month_normal").show();
            $("#month_priligy").hide();
        }

        if (parseInt(product_ids) === 39 || parseInt(product_ids) === 49 || parseInt(product_ids) === 50 || parseInt(
            product_ids) === 51 || parseInt(product_ids) === 52 || parseInt(product_ids) === 63 || parseInt(
            product_ids) === 64 || parseInt(product_ids) === 65) {
            $("#sid").show();
            $("#teda").hide();
            $("#tadalafil_daily").hide();
            $("#viagra_connect").hide();
        } else if (parseInt(product_ids) === 41 || parseInt(product_ids) === 53 || parseInt(product_ids) === 54 || parseInt(
            product_ids) === 55 || parseInt(product_ids) === 56 || parseInt(product_ids) === 59 || parseInt(
            product_ids) === 61) {
            $("#teda").show();
            $("#sid").hide();

        } else if (parseInt(product_ids) === 40) {
            $("#teda").hide();
            $("#sid").hide();
            $("#tadalafil_daily").show();
        } else if (parseInt(product_ids) === 45) {
            $("#teda").hide();
            $("#sid").hide();
            $("#tadalafil_daily").hide();
            $("#viagra_connect").show();
        } else {
            $("#teda").hide();
            $("#sid").hide();
            $("#tadalafil_daily").hide();
            $("#viagra_connect").hide();
        }

        // if(parseInt(product_ids) === 27 || parseInt(product_ids) === 70 ) {
        //     $("#strength30").show();
        // } else {
        //     $("#strength30").hide();

        // }
        // if(parseInt(product_ids) === 47) {
        //     $("#strength30").show();
        // } else {
        //     $("#strength30").hide();

        // }
        if(parseInt(product_ids) === 119){
            $('#beard_subs').removeClass('d-none');
        }
        else if(parseInt(product_ids) === 120){
            $('#beard_subs').removeClass('d-none');
        }
        else {

            $('#beard_subs').addClass('d-none');

        }
        if (parseInt(product_ids) === 22 || parseInt(product_ids) === 104) {
            $("#comb_pill_sol").show();
        } else {
            $("#comb_pill_sol").hide();

        }
        if (parseInt(product_ids) === 116 || parseInt(product_ids) === 115 && prod_name == null) {
            $("#comb_pill_sol").show();
        } else if (parseInt(product_ids) === 116 || parseInt(product_ids) === 115 && prod_name == 'pill_solution') {
            $("#comb_pill_sol").show();

        } else {
            $("#comb_pill_sol").hide();
        }

        if (parseInt(product_ids) === 124 && prod_name == null) {
            $("#minoxidil").show();
        } else if (parseInt(product_ids) === 124 || parseInt(product_ids) === 118 && prod_name == 'minoxidil') {
            $("#minoxidil").show();

        } else {
            $("#minoxidil").hide();
        }
        if (parseInt(product_ids) === 122 && prod_name == null) {
            $("#min_fin_2in1").show();
        } else if (parseInt(product_ids) === 121 || parseInt(product_ids) === 122 && prod_name == 'min_fin_2in1') {
            $("#min_fin_2in1").show();

        } else {
            $("#min_fin_2in1").hide();
        }

        if (parseInt(product_ids) === 119 && prod_name == null) {
            $("#beard_minox").show();
        } else if (parseInt(product_ids) === 120 || parseInt(product_ids) === 119 && prod_name == 'beard_minox') {
            $("#beard_minox").show();

        } else {
            $("#beard_minox").hide();
        }

        if (parseInt(product_ids) === 105 || parseInt(product_ids) === 106) {
            $("#beard").show();
        } else {
            $("#beard").hide();

        }

        if (parseInt(product_ids) === 107 || parseInt(product_ids) === 108) {
            $("#beard2").show();
        } else {
            $("#beard2").hide();

        }

        if (parseInt(product_ids) === 109 || parseInt(product_ids) === 110) {
            $("#beard3").show();
        } else {
            $("#beard3").hide();

        }

        $("#ProductIds").val(product_ids.join(',')); // Convert the array to a comma-separated string and set the value
    }

    $('.show-product-modal').click(function(e){
        e.preventDefault();
        var data = $(this).data('product')
        var image = $(this).data('image')

        var modal = $('#product-modal')
        $('.modal-product-image').attr('src', image);
        $('.modal-product-title').html(data.name)
        $('.modal-product-description').html(data.description)
        modal.modal('show')
        return false;
    })

    function OpenModal(product) {
        console.log(product);
        return false
    }
</script>



<script>
var productList = <?=json_encode($productList)?>;
    var mediaList = <?=json_encode($mediaList)?>;
    $(document).ready(function() {
        $('#step2').hide();
        $('#step3').hide();
        $('#step4').hide();
        // $("#other_rec_prod").hide();
        $(".all-treatment-btn").click(function() {
            if($("#other_rec_prod").css('display') == "flex") $("#other_rec_prod").css('display', "none")
            else $("#other_rec_prod").css('display', "flex")
        })
            function getProductInfo(id) {
            for(i = 0 ; i < productList.length ; i ++) {
                if(productList[i].id == id) return productList[i];
            }
        }
        function getMediaInfo(id) {
            for(i = 0 ; i < mediaList.length ; i ++) {
                if(mediaList[i].mediable_id == id) return mediaList[i];
            }
        }
        function getProductListWithSameCode(id) {
            var productInfo = getProductInfo(id);
            if(!productInfo) return null;
            var proList = [productInfo];
            for(i = 0 ; i < productList.length ; i ++) {
                if(productList[i].id == productInfo.id) continue;
                if(productList[i].type == null || productList[i].type == "") continue;
                if(productList[i].type == productInfo.type ) {
                    proList.push(productList[i]);
                }
            }
            return proList;
        }
        var input_prod_id;
        $('#Sildenafil_tablet_100').hide();
        $('#cont_1').click(function() {
            input_prod_id = $('#ProductIds').val();
            var productInfo = getProductInfo(input_prod_id);
            if(!productInfo) return;
            var productListWithSameCode = getProductListWithSameCode(input_prod_id);
            if(productListWithSameCode.length == 0) return;
            var tmpHTML = "";
            for(var i = 0 ; i < productListWithSameCode.length ; i ++) {
                var tmpProductInfo = productListWithSameCode[i];
                var mediaInfo = getMediaInfo(tmpProductInfo.id)
                var tmpTag = "";
                if(tmpProductInfo.tags.length > 0) tmpTag = tmpProductInfo.tags[0].name;
                tmpHTML += `<div class="col-md-6 myBtn" style="margin-bottom: 20px;" onclick="AddToCart('${tmpProductInfo.id}')">
                        <div class="form-group form-radio">
                            <input type="radio" id="Sildenafil${i}" name="strength_type" value="${tmpTag}">
                            <label class="" for="Sildenafil${i}">
                                <h3>${tmpTag}</h3>
                                <figure>
                                    <img src="{{asset('storage/images/products/${mediaInfo.file_name}')}}"
                                            alt="">
                                </figure>
                            </label>
                        </div>
                    </div>`;
            }
            $("#strength-view-content").html(`
                <div class="row">
                    ${tmpHTML}
                </div>`)
            $('#step1').hide();
            $('#step2').show();

            ('#step2 .ctsm_radio_box [type="radio"]').change(function(){
                if(this.checked) {
                    $("#cont_2").prop("disabled", false);
                }
                else {
                    $("#cont_2").prop("disabled", true);
                }
            })
            if (parseInt(input_prod_id) === 43 || parseInt(input_prod_id) === 47 || parseInt(
                input_prod_id) == 111 || parseInt(input_prod_id) == 113) {

                $('#step2').hide();
                $('#step3').hide();
                $('#step4').show();
            }


        });
        $('#cont_2').click(function() {
            input_prod_id = $('#ProductIds').val();


            if (parseInt(input_prod_id) === 116 || parseInt(input_prod_id) === 115 || parseInt(
                    input_prod_id) === 124 || parseInt(input_prod_id) === 118 || parseInt(input_prod_id) ===
                121 || parseInt(input_prod_id) === 122 || parseInt(input_prod_id) == 119 || parseInt(
                    input_prod_id) == 120) {

                $('#step2').hide();
                $('#step3').hide();
                $('#step4').show();
            } else {
                $('#step2').hide();
                $('#step3').show();
            }


        });
        $('#cont_3').click(function() {

            $('#step3').hide();
            $('#step4').show();


        });
        $('#step3_back').click(function() {
            $('#step3').hide();
            $('#step2').show();
        });
        $('#step4_back').click(function() {
            $('#step4').hide();
            <?php if($category == 30 || $category == 31){ ?>

            if (parseInt(input_prod_id) === 47 || parseInt(input_prod_id) === 111 || parseInt(input_prod_id) === 113) {
                $('#step1').show();
            } else {
                $('#step2').show();
            }
            <?php }elseif($category == 33){ ?>
            if (parseInt(input_prod_id) === 43) {
                $('#step1').show();
            } else {
                $('#step3').show();
            }
            <?php }else{ ?>

            $('#step3').show();

            <?php  } ?>
        });
        $('#step2_back').click(function() {
            $('#step2').hide();
            $('#step1').show();
        });
    });

    ValidButtonStep1();
    ValidButtonStep2();
    ValidButtonStep3();
    $('#step1 .recmd-tablets-card').click(function() {
        ValidButtonStep1();
    })
    $('#step2 .ctsm_radio_box .form-radio').click(function() {
        ValidButtonStep2();
        // alert('s');
    })
    $('#step3 .tablets-list-box').click(function() {
        ValidButtonStep3();
        // alert('s');
    })

    function ValidButtonStep1() {
        if ($('#step1 .recmd-tablets-card').hasClass('active')) {

            $('#cont_1').prop('disabled', false);
        } else {

            $('#cont_1').prop('disabled', true);
        }
    }

    function ValidButtonStep2() {
        if ($('#step2 .ctsm_radio_box [type="radio"]').is(':checked')) {

            $('#cont_2').prop('disabled', false);
        } else {

            $('#cont_2').prop('disabled', true);
        }
    }

    function ValidButtonStep3() {
        if ($('#step3 .tablets-list-box .row').hasClass('active')) {

            $('#cont_3').prop('disabled', false);
        } else {

            $('#cont_3').prop('disabled', true);
        }
    }




    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })

    $('.moon').css('display','none');
    $('.read-m-btn').click(function (){
        $('.moon').css('display','inherit');

    })

    $(document.body).ready(function() {

        const elemRecCarousel = document.getElementById('rec_prod')

        const carousel = new bootstrap.Carousel(elemRecCarousel, {
            interval: 2000000,
            touch: true
        })

        const elemOtherRecCarousel = document.getElementById('other_rec_prod')

        const otherCarousel = new bootstrap.Carousel(elemOtherRecCarousel, {
            interval: 2000000,
            touch: true
        })

        $(".tag-selector > li").click(function() {
            $(this).parent().children("li").removeClass("nav-item-selected");
            $(this).addClass("nav-item-selected")
        })
        $(".product-toolbar .checkout-btn").click(function(){
            $("#submit_form").submit();
        })
        function validateEmail(email) {
            // Regular expression for validating email addresses
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }
        function checkEmail() {
            var email = $("#email").val();
            if(!email) {
                alert("Please enter your email address");
                return;
            }

            if(!validateEmail(email)) {
                alert("Please enter your valid email address");
                return;
            }
            if($(".input-password").css("display") == "none")
                $.get("/user/email/"+email, function(res) {
                    if(res.id) {
                        $(".img-view img").attr("src", "/frontend/images/login.jpg");
                        $(".input-password").show();
                    }
                    else {
                        localStorage.setItem("new_user_email", email);

                    $.post("/temp/email", {email: email, session_id: "<?php echo $session_id; ?>", _token: "<?php echo csrf_token(); ?>"});
                        $(".auth-view").addClass("d-none")
                        $(".authed-view").removeClass("d-none");
                        $("body").css("background-color", "#e4e4e4")
                    }
                })
            else {
                var password = $("#pwd").val();
                if(!password) {
                    alert("Please enter your password!");
                    return;
                }
                $(".quest-v21-signin-form").submit();

            }
        }

        $("#btn_signin").click(checkEmail)
        $("#email").keyup(function(e) {
            if(e.keyCode == 13) {
                checkEmail();
            }
        })

        $("#pwd").keyup(function(e) {
            if(e.keyCode == 13) {
                checkEmail();
            }
        })
        $(".tablets-item").click(function() {
            var pId = $(this).attr("data-id");
            var productList = <?php echo json_encode($productList); ?>;
            $(this).parent().children(".tablets-item").removeClass("selected");
            $(this).addClass("selected");
            $(this).parent().parent().parent().children(".product-toolbar").children("button").attr("onclick", "AddToCart('"+pId+"')");

            for(var i = 0 ; i < productList.length ; i ++) {
                if(productList[i].id == pId) {
                    $(this).parent().parent().parent().children(".product-detail-description").html(productList[i].description)
                    $(this).parent().parent().parent().children(".product-highlite").html(productList[i].highlite ? productList[i].highlite : "Pill free option")
                    $(this).parent().parent().parent().children(".product-name").html(productList[i].name)
                    $(this).parent().parent().parent().children(".product-price").html('Starting at £'+productList[i].first_time_disc + " a month")
                    break;
                }
            }
        })

        if(window.screen.width > 991) {
            $(".carousel-indicators").css("display", "none")
            $(".carousel-control-prev").css("display", "none")
            $(".carousel-control-next").css("display", "none")
            $(".carousel-item").removeClass("carousel-item")
            $(".carousel").removeClass("slide")
            $(".carousel").removeClass("carousel")
        }
    })
</script>

        @error('email')
        <script>
            $(document.body).ready(function() {
                $(".input-password").show();
            })
        </script>
        @enderror

<!--product add to cart popup -->
<!-- <script>
        $(document).ready(function() {
            $('.myBtn').click(function() {
                var $quesProductDiv = $('.ques_product_seccess');
                $quesProductDiv.show();

                setTimeout(function () {
                    $quesProductDiv.css('opacity', 0);
                }, 2000);

                setTimeout(function () {
                    $quesProductDiv.hide();
                    $quesProductDiv.css('opacity', 1);
                }, 2500);
            });
        });
    </script>     -->
