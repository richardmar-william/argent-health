@extends('layouts.app')
@section('title', $product->name)
@section('content')
<!-- SILDENAFIL-BANNER START  -->
<section class="sildenafil-banner">
    <div class="container-xxl container">
        <div class="row sildenafil-inner">
            <div class="col-lg-7 col-md-12 col-sm-12 text-center">
                @if($product->media_count)
                <figure>

                    @foreach ($product->media as $media)
                    @if($product->media)
                    <img src="{{ asset('storage/images/products/' . $media->file_name ) }}" alt="{{ $product->name }}">
                    @else
                    <img src="{{ asset('img/no-img.png' ) }}" alt="{{ $product->name }}">
                    @endif
                    @endforeach
                    @else
                    <img src="{{ asset('img/no-img.png' ) }}" alt="{{ $product->name }}">
                    @endif
                </figure>

            </div>
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="sildenafil-right">
                    <ul class="breadcrumb">
                        <li><a href="javascript:void(0);" class="silde-navigationb">Home/</a></li>
                        <li><a href="javascript:void(0);" class="silde-navigationb">Erectile Dysfunction/</a></li>
                        <li><a href="javascript:void(0);" class="active navigation"> Sildenafil </a></li>
                    </ul>
                    <div class="product-details-content">
                        <h3 class="silden-head">{{ $product->name }}</h3>
                        <div class="rating-number">
                            <div class="quick-view-number">
                                <span class="score">
                                    <div class="score-wrap">
                                        @if($product->approved_reviews_avg_rating)
                                            @for($i = 0; $i < 5; $i++)
                                                <span class="stars-active">
                                                    <i class="{{ round($product->approved_reviews_avg_rating) <= $i ? 'far' : 'fas' }} fa-star"></i>
                                                </span>
                                            @endfor
                                        @else
                                            @for($i = 0; $i < 5; $i++)
                                                <i class="far fa-star"></i>
                                            @endfor
                                        @endif
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="details-price">
                            <span>${{ $product->price }}</span>
                        </div>
                        <!-- {!! html_entity_decode($product->description) !!} -->
                      
                        <div class="product-details-cati-tag mt-35">
                            <ul>
                                <li class="categories-title">Categories :</li>
                                <li><a href="{{ route('shop.index', $product->category->slug) }}">{{ $product->category->name }}</a></li>
                            </ul>
                        </div>
                        <div class="product-details-cati-tag mtb-10">
                            <ul>
                                <li class="categories-title">Tags :</li>
                                <li>
                                    @if($product->tags->count() > 0)
                                        @foreach($product->tags as $tag)
                                            {{ $tag->name }}
                                            <span>{{ $loop->last ? '' : ',' }}</span>
                                        @endforeach
                                    @endif
                                </li>
                            </ul>
                        </div>

                    </div>
                    <ul class="silder-list">
                        <li>$15 For First Month</li>
                        <li>$24 Per Month Thereafter</li>
                    </ul>
                      <a href="{{route('questionnaire.index', $product->category_id)}}" class="trans-btn see-detailbtn">Start Journey</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SILDENAFIL-BANNER END  -->

<section class="consultation-sec consultation-sec-v2  silden-icon-upper pt-120">
    <div class="container-xxl container">
        <div class="row cstm-row backed-upper silden-icon">
            <div class="col-lg-3 col-6">
                <div class="consult-div d-flex align-items-center">
                    <?xml version="1.0" standalone="no"?>
                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                    preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                    fill="#000000" stroke="none">
                    <path d="M2370 5114 c-19 -2 -78 -9 -130 -15 -791 -90 -1522 -586 -1924 -1305
                    -146 -262 -252 -589 -297 -914 -17 -121 -17 -504 -1 -630 22 -165 62 -340 113
                    -495 60 -180 188 -447 288 -597 l71 -107 -242 -418 c-239 -411 -243 -419 -243
                    -475 0 -61 17 -93 69 -132 27 -21 33 -21 1294 -24 1281 -3 1414 0 1617 34 432
                    73 839 256 1183 533 118 96 325 306 413 421 792 1028 702 2465 -212 3379 -399
                    398 -879 639 -1449 726 -100 15 -472 28 -550 19z m545 -343 c632 -106 1161
                    -450 1516 -985 224 -337 348 -726 365 -1141 28 -672 -259 -1340 -761 -1772
                    -276 -238 -617 -413 -955 -492 -245 -57 -199 -55 -1468 -58 l-1173 -4 12 23
                    c7 13 96 167 198 343 185 318 186 320 186 380 0 59 -1 62 -76 165 -308 425
                    -456 903 -436 1410 23 579 249 1095 656 1500 382 381 862 605 1401 654 108 10
                    418 -4 535 -23z"/>
                    <path d="M2159 4010 c-76 -40 -73 -22 -79 -520 l-5 -445 -445 -5 c-499 -6
                    -481 -3 -521 -81 -18 -36 -19 -62 -19 -400 0 -347 1 -363 21 -398 11 -20 32
                    -45 47 -56 26 -19 47 -20 472 -25 l445 -5 5 -445 c5 -425 6 -446 25 -472 11
                    -15 36 -36 56 -47 35 -20 51 -21 399 -21 348 0 364 1 399 21 20 11 45 32 56
                    47 19 26 20 47 25 472 l5 445 445 5 c425 5 446 6 472 25 15 11 36 36 47 56 20
                    35 21 51 21 399 0 348 -1 364 -21 399 -11 20 -32 45 -47 56 -26 19 -47 20
                    -472 25 l-445 5 -5 445 c-5 425 -6 446 -25 472 -11 15 -36 36 -56 47 -35 20
                    -51 21 -400 21 -338 -1 -367 -2 -400 -20z m561 -711 c0 -269 4 -425 11 -455
                    13 -52 60 -98 116 -113 24 -7 194 -11 451 -11 l412 0 0 -160 0 -160 -411 0
                    c-263 0 -426 -4 -453 -11 -54 -13 -100 -60 -115 -114 -7 -26 -11 -187 -11
                    -452 l0 -413 -160 0 -160 0 0 413 c0 256 -4 426 -11 450 -15 56 -61 103 -113
                    116 -30 7 -186 11 -455 11 l-411 0 0 160 0 160 413 0 c268 0 426 4 452 11 50
                    14 100 64 114 114 7 26 11 184 11 453 l0 412 160 0 160 0 0 -411z"/>
                    </g>
                    </svg>
                    <div class="consult-heading">
                        <h4>Ongoing Clinic &amp; <br>Support</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="consult-div d-flex align-items-center">
                    <?xml version="1.0" standalone="no"?>
                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                    preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                    fill="#000000" stroke="none">
                    <path d="M1450 5029 c-128 -14 -283 -55 -376 -98 -143 -67 -233 -150 -294
                    -270 -50 -99 -53 -121 -57 -411 -5 -291 -2 -319 41 -382 l24 -36 -32 -63 c-29
                    -58 -31 -71 -31 -164 1 -84 4 -108 24 -148 31 -64 109 -132 174 -153 51 -16
                    53 -17 81 -86 15 -39 48 -99 72 -135 24 -36 44 -68 44 -71 0 -3 -70 -76 -155
                    -163 -168 -171 -174 -182 -139 -250 l15 -31 -183 -186 c-101 -103 -212 -223
                    -247 -267 -147 -182 -235 -351 -247 -473 l-6 -57 202 -405 c111 -223 211 -415
                    222 -427 20 -22 64 -34 171 -48 l49 -7 -4 -245 -3 -245 24 -19 c32 -26 82 -25
                    109 4 20 21 22 34 22 153 l0 129 36 -42 c88 -106 260 -215 389 -248 197 -50
                    478 15 1239 286 137 49 250 89 252 89 1 0 4 -81 6 -181 3 -176 4 -181 27 -200
                    32 -26 77 -24 106 6 25 24 25 25 25 219 l0 195 58 11 c31 6 64 14 72 17 8 4
                    227 10 485 13 449 6 473 8 530 28 124 46 199 130 212 242 l6 50 294 0 294 0
                    24 25 25 24 0 1120 0 1120 -22 15 c-20 14 -148 16 -1171 16 l-1148 0 -24 -25
                    -25 -24 0 -281 c0 -245 -2 -280 -15 -280 -9 0 -53 9 -99 21 l-83 21 -108 108
                    -107 108 45 56 c113 137 184 373 203 664 l7 109 95 7 c253 18 435 106 492 238
                    65 150 -36 355 -217 441 l-68 32 -196 3 -197 4 -16 66 c-44 177 -167 333 -326
                    411 -47 23 -116 48 -155 57 -87 19 -331 26 -445 13z m415 -174 c99 -25 176
                    -69 239 -134 53 -57 106 -148 121 -213 l7 -26 -204 -4 c-179 -4 -210 -7 -266
                    -27 -132 -48 -275 -168 -394 -331 -66 -90 -134 -155 -191 -181 -32 -14 -65
                    -19 -145 -19 -97 0 -104 1 -128 25 l-25 26 3 267 3 268 38 77 c58 116 145 182
                    315 237 132 43 141 41 95 -17 -74 -97 -133 -268 -133 -388 0 -35 6 -52 25 -70
                    52 -53 135 -15 135 62 0 64 27 167 60 232 56 111 129 174 248 212 71 22 121
                    23 197 4z m334 -612 c-41 -43 -96 -105 -121 -138 -59 -78 -129 -142 -181 -166
                    -37 -16 -67 -19 -259 -19 l-217 0 74 98 c86 114 158 186 235 235 97 61 123 66
                    344 67 l199 0 -74 -77z m554 66 c78 -21 177 -140 177 -210 0 -49 -51 -100
                    -127 -129 -66 -24 -207 -50 -277 -50 l-52 0 -22 128 c-12 70 -25 139 -28 154
                    -6 25 -1 29 65 63 107 53 185 66 264 44z m-456 -286 c20 -99 28 -390 14 -495
                    -28 -211 -100 -384 -201 -487 -140 -142 -385 -197 -579 -130 -82 28 -198 106
                    -256 172 -51 59 -105 155 -141 254 -27 75 -53 102 -99 103 -48 0 -116 40 -137
                    80 -32 62 -19 177 25 218 22 21 28 21 502 24 l480 3 67 33 c86 42 162 112 240
                    219 33 46 63 81 66 78 3 -2 11 -35 19 -72z m1143 -1188 c0 -232 3 -291 15
                    -314 30 -60 55 -56 239 35 l153 76 151 -76 c84 -42 161 -76 172 -76 12 0 32
                    11 45 25 l25 24 0 296 0 295 320 0 320 0 0 -1000 0 -1000 -453 0 -454 0 -16
                    60 c-21 75 -69 130 -138 159 -49 22 -59 22 -397 19 l-347 -4 -117 -31 c-65
                    -17 -127 -34 -138 -38 -20 -6 -20 -5 -20 914 l0 921 320 0 320 0 0 -285z m640
                    70 l0 -215 -110 55 c-60 30 -119 55 -130 55 -11 0 -70 -25 -130 -55 l-110 -55
                    0 215 0 215 240 0 240 0 0 -215z m-2690 -168 l170 -113 -108 -136 -108 -136
                    -164 135 c-91 74 -169 139 -175 144 -6 6 28 47 95 114 58 58 108 105 112 105
                    5 0 85 -51 178 -113z m876 -185 c-20 -40 -40 -72 -44 -72 -4 0 -24 24 -44 53
                    -20 28 -49 68 -63 88 l-26 36 23 67 23 66 83 -83 84 -84 -36 -71z m-321 186
                    c-4 -13 -25 -70 -47 -128 -22 -58 -42 -113 -45 -122 -3 -10 -9 -18 -12 -18 -4
                    0 -25 44 -46 98 -21 53 -51 109 -65 123 l-26 27 70 7 c39 4 91 13 116 20 63
                    17 62 17 55 -7z m583 -219 l92 -21 0 -638 0 -637 -402 -134 c-370 -123 -409
                    -134 -473 -133 -79 1 -140 24 -199 77 -22 20 -98 139 -204 322 -93 159 -181
                    298 -195 308 -29 23 -66 18 -97 -13 -38 -38 -27 -71 96 -273 l117 -191 -16
                    -43 c-71 -190 -255 -304 -471 -290 -43 3 -82 9 -86 14 -5 4 -90 176 -191 381
                    l-182 374 18 56 c48 155 135 273 404 545 124 125 227 227 231 227 3 0 84 -65
                    180 -145 169 -140 193 -155 235 -139 8 4 70 76 137 161 66 85 124 151 128 146
                    5 -4 32 -66 61 -138 30 -71 62 -138 71 -147 27 -27 82 -23 105 6 11 13 41 81
                    68 150 26 70 51 125 56 124 4 -2 43 -50 86 -108 127 -170 152 -166 257 43 39
                    75 72 137 75 137 3 0 48 -9 99 -21z m1244 -1339 c14 -11 28 -29 31 -40 5 -19
                    1 -20 -114 -20 -114 0 -121 -1 -144 -25 -16 -15 -25 -36 -25 -55 0 -19 9 -40
                    25 -55 23 -24 28 -25 178 -25 273 0 517 -12 517 -25 0 -28 -48 -82 -95 -105
                    l-50 -25 -460 -6 c-449 -6 -463 -7 -580 -32 -66 -15 -219 -61 -340 -103 -1061
                    -367 -1193 -394 -1403 -288 -42 22 -103 65 -144 103 -78 72 -194 220 -181 231
                    4 4 26 13 48 20 114 36 207 102 288 203 27 34 51 64 53 66 2 2 14 -9 26 -25
                    95 -121 265 -195 413 -179 42 4 206 54 477 146 776 263 752 257 1144 258 295
                    1 313 0 336 -19z"/>
                    <path d="M3065 1895 c-16 -15 -25 -36 -25 -55 0 -19 9 -40 25 -55 23 -24 31
                    -25 135 -25 104 0 112 1 135 25 16 15 25 36 25 55 0 19 -9 40 -25 55 -23 24
                    -31 25 -135 25 -104 0 -112 -1 -135 -25z"/>
                    <path d="M3065 1655 c-16 -15 -25 -36 -25 -55 0 -19 9 -40 25 -55 24 -25 26
                    -25 215 -25 189 0 191 0 215 25 16 15 25 36 25 55 0 19 -9 40 -25 55 -24 25
                    -26 25 -215 25 -189 0 -191 0 -215 -25z"/>
                    </g>
                    </svg>
                    <div class="consult-heading">
                        <h4>Free, Discreet, Next <br>Day delivery
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="consult-div d-flex align-items-center">
                    <?xml version="1.0" standalone="no"?>
                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                    preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                    fill="#000000" stroke="none">
                    <path d="M3305 4935 l-25 -24 0 -511 0 -511 25 -24 c22 -23 32 -25 120 -25
                    l95 0 0 -215 c0 -216 0 -216 25 -240 25 -26 63 -32 94 -16 9 5 86 113 171 240
                    l153 231 474 0 474 0 24 25 25 24 0 511 0 511 -25 24 -24 25 -791 0 -791 0
                    -24 -25z m1495 -535 l0 -400 -449 0 c-247 0 -457 -3 -466 -6 -9 -4 -59 -70
                    -111 -148 l-94 -141 0 123 c0 117 -1 124 -25 147 -22 23 -32 25 -120 25 l-95
                    0 0 400 0 400 680 0 680 0 0 -400z"/>
                    <path d="M3625 4615 c-16 -15 -25 -36 -25 -55 0 -19 9 -40 25 -55 l24 -25 331
                    0 c193 0 339 4 349 10 31 16 46 65 31 100 -7 17 -21 35 -31 40 -10 6 -156 10
                    -349 10 l-331 0 -24 -25z"/>
                    <path d="M3625 4295 c-16 -15 -25 -36 -25 -55 0 -19 9 -40 25 -55 l24 -25 471
                    0 471 0 24 25 c16 15 25 36 25 55 0 19 -9 40 -25 55 l-24 25 -471 0 -471 0
                    -24 -25z"/>
                    <path d="M2215 4633 c-967 -84 -1775 -784 -1995 -1728 -75 -321 -74 -690 1
                    -1015 53 -228 179 -521 306 -715 307 -466 777 -804 1308 -940 224 -57 324 -69
                    570 -69 179 0 243 4 345 22 501 86 918 304 1261 659 328 340 526 742 606 1228
                    25 154 25 496 0 650 -42 256 -123 503 -234 714 -65 125 -178 298 -204 311 -49
                    27 -119 -12 -119 -66 0 -16 27 -67 69 -131 547 -820 441 -1917 -252 -2616
                    -171 -173 -347 -298 -572 -407 -313 -153 -631 -220 -980 -207 -180 7 -298 24
                    -461 67 -717 190 -1290 762 -1473 1471 -57 219 -65 284 -65 539 -1 250 7 313
                    59 523 97 385 326 759 629 1029 494 439 1170 619 1817 482 63 -13 149 -35 189
                    -49 93 -32 124 -32 155 0 30 29 32 64 4 98 -37 48 -330 124 -563 146 -102 10
                    -308 12 -401 4z"/>
                    <path d="M2213 4148 c-354 -30 -571 -170 -619 -399 -15 -73 -12 -204 12 -459
                    l6 -65 -44 3 c-86 7 -169 -63 -198 -168 -35 -125 32 -274 146 -328 27 -13 56
                    -27 64 -31 8 -4 22 -39 31 -77 39 -173 115 -344 205 -463 l54 -72 -71 -66
                    c-38 -36 -86 -92 -105 -123 l-35 -57 -72 -12 c-172 -28 -331 -148 -407 -305
                    -52 -108 -60 -164 -60 -398 0 -198 0 -199 25 -223 29 -30 74 -32 106 -6 24 19
                    24 22 29 248 l5 228 32 67 c42 90 100 150 186 193 76 38 113 45 103 19 -3 -9
                    -6 -83 -6 -165 0 -129 -2 -149 -16 -149 -27 0 -119 -101 -132 -146 -28 -94 -8
                    -169 63 -239 102 -103 243 -101 338 5 64 71 81 145 55 234 -13 45 -105 146
                    -132 146 -14 0 -16 20 -16 139 0 76 3 153 6 170 l7 31 113 0 114 0 0 -53 c0
                    -29 6 -61 13 -70 6 -9 90 -75 186 -147 122 -90 182 -130 201 -130 19 0 79 40
                    201 130 96 72 180 138 187 147 6 9 12 41 12 70 l0 53 115 0 c63 0 115 -4 115
                    -9 0 -5 -14 -14 -31 -21 -76 -32 -154 -140 -184 -257 -23 -87 -20 -139 10
                    -168 52 -53 135 -15 135 63 0 97 66 211 133 227 90 23 187 -95 187 -227 0 -78
                    83 -116 135 -63 30 29 33 81 10 168 -30 117 -96 210 -182 257 -25 14 -30 19
                    -13 14 94 -24 206 -118 249 -208 35 -75 41 -122 41 -329 0 -197 0 -198 25
                    -222 32 -33 78 -33 110 0 25 24 25 25 25 223 0 235 -8 290 -61 399 -76 159
                    -232 275 -406 304 l-72 12 -35 57 c-19 31 -67 87 -105 123 l-71 66 54 72 c91
                    120 187 343 211 486 8 48 15 56 69 73 22 7 61 34 86 59 94 94 115 229 54 341
                    -42 77 -83 105 -157 105 l-59 0 6 65 c24 261 28 386 12 459 -50 235 -262 368
                    -639 400 -144 12 -206 12 -354 -1z m350 -159 c256 -22 406 -90 469 -212 16
                    -32 22 -66 26 -139 3 -62 1 -98 -5 -98 -6 0 -13 18 -17 41 -9 54 -39 80 -133
                    112 -142 49 -244 61 -503 61 -296 0 -435 -22 -571 -90 -46 -23 -69 -58 -69
                    -105 0 -11 -5 -19 -11 -19 -8 0 -10 29 -7 98 7 149 51 215 182 278 145 70 377
                    96 639 73z m167 -413 c36 -9 85 -23 110 -31 l45 -15 39 -177 c22 -98 48 -218
                    58 -268 14 -69 24 -95 44 -112 34 -31 76 -30 105 4 94 104 109 112 134 63 43
                    -83 -18 -180 -115 -180 -63 0 -84 -24 -99 -115 -54 -325 -213 -581 -424 -685
                    -387 -190 -784 120 -878 685 -15 91 -36 115 -99 115 -97 0 -158 97 -115 180
                    25 49 40 41 134 -63 29 -34 71 -35 105 -4 20 17 30 43 44 112 10 50 36 170 58
                    268 l39 178 67 20 c133 41 210 48 453 45 169 -3 247 -8 295 -20z m-730 -1671
                    l0 -65 -76 0 -76 0 14 23 c18 26 114 107 128 107 6 0 10 -29 10 -65z m871 23
                    c29 -24 59 -53 67 -65 l14 -23 -76 0 -76 0 0 65 c0 36 4 65 10 65 5 0 33 -19
                    61 -42z m-552 -79 c87 -12 203 -2 282 26 l39 14 0 -124 0 -124 -120 -91 -120
                    -91 -120 91 -120 91 0 124 0 124 39 -14 c22 -7 76 -19 120 -26z m-584 -674
                    c50 -49 15 -135 -55 -135 -19 0 -40 9 -55 25 -16 15 -25 36 -25 55 0 19 9 40
                    25 55 15 16 36 25 55 25 19 0 40 -9 55 -25z"/>
                    </g>
                    </svg>
                    <div class="consult-heading">
                        <h4>online consultation <br>with doctors</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="consult-div d-flex align-items-center">
                    <?xml version="1.0" standalone="no"?>
                    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 20010904//EN"
                    "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                    preserveAspectRatio="xMidYMid meet">

                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                    fill="#000000" stroke="none">
                    <path d="M2370 5114 c-19 -2 -78 -9 -130 -15 -220 -25 -475 -94 -700 -191
                    -570 -244 -1065 -732 -1316 -1299 -263 -592 -294 -1232 -91 -1861 l31 -97 -61
                    -64 c-71 -74 -89 -119 -72 -182 21 -74 92 -115 177 -101 33 5 225 194 1810
                    1778 975 975 1780 1785 1788 1800 29 55 8 152 -41 184 -77 50 -143 37 -232
                    -49 l-63 -60 -135 42 c-138 44 -308 82 -450 101 -83 11 -454 21 -515 14z m406
                    -305 c116 -11 313 -48 403 -75 l54 -16 -165 -165 -165 -165 -79 13 c-116 20
                    -434 17 -559 -4 -318 -55 -621 -189 -860 -380 -77 -62 -220 -204 -284 -282
                    -206 -251 -341 -550 -398 -880 -21 -125 -24 -443 -4 -559 l13 -79 -165 -165
                    -165 -165 -16 54 c-27 91 -64 288 -75 403 -71 728 230 1468 789 1939 466 392
                    1079 584 1676 526z m-956 -1504 l-815 -815 -3 62 c-9 166 43 429 122 614 82
                    193 181 339 336 494 292 293 671 453 1080 459 l95 1 -815 -815z"/>
                    <path d="M4140 4621 c-54 -17 -94 -45 -180 -129 -132 -129 -140 -106 131 -378
                    122 -122 232 -227 244 -234 13 -7 35 -10 49 -6 37 9 187 167 216 229 83 174
                    -40 413 -258 503 -58 24 -150 31 -202 15z m165 -162 c89 -47 175 -161 175
                    -232 0 -43 -24 -88 -68 -131 l-41 -39 -88 81 c-48 44 -121 114 -161 154 l-72
                    74 47 46 c27 25 57 50 68 56 32 18 97 14 140 -9z"/>
                    <path d="M3608 4142 c-95 -96 -108 -113 -108 -143 0 -30 21 -54 233 -266 212
                    -212 236 -233 266 -233 30 0 47 13 143 108 88 89 108 114 108 138 0 62 -55 98
                    -108 70 -15 -8 -54 -42 -87 -75 l-59 -61 -53 52 -53 52 67 68 c74 75 85 111
                    45 150 -39 40 -75 29 -150 -45 l-68 -67 -52 53 -52 53 61 59 c33 33 67 72 75
                    87 28 53 -8 108 -70 108 -24 0 -49 -20 -138 -108z"/>
                    <path d="M4885 3809 c-31 -17 -3554 -3541 -3571 -3571 -29 -55 -8 -152 41
                    -184 77 -50 143 -37 232 48 l63 61 118 -36 c180 -55 218 -64 342 -86 482 -84
                    957 -35 1410 146 634 254 1172 793 1418 1424 225 577 241 1174 46 1772 l-28
                    86 61 64 c86 89 100 155 49 232 -30 46 -131 70 -181 44z m-131 -707 c47 -189
                    61 -309 60 -542 0 -230 -12 -339 -61 -539 -78 -325 -246 -653 -471 -921 -289
                    -346 -710 -611 -1152 -726 -379 -99 -826 -95 -1184 11 l-59 17 165 165 165
                    165 69 -11 c38 -6 130 -14 204 -17 444 -21 895 130 1245 416 103 85 261 253
                    337 360 171 242 281 512 329 815 17 104 17 427 0 529 l-13 79 163 163 c105
                    106 166 159 170 151 4 -6 18 -58 33 -115z m-648 -740 c-46 -352 -196 -654
                    -451 -907 -150 -150 -298 -250 -486 -330 -184 -78 -410 -125 -602 -125 l-82 0
                    815 815 815 815 3 -76 c2 -41 -4 -128 -12 -192z"/>
                    <path d="M3192 3717 c-49 -52 -41 -63 211 -315 207 -207 236 -232 265 -232 27
                    0 45 13 122 93 50 50 93 102 96 114 9 34 -5 62 -38 79 -40 21 -70 8 -134 -57
                    l-48 -49 -196 195 c-168 167 -200 195 -226 195 -19 0 -39 -9 -52 -23z"/>
                    <path d="M2870 3392 c-16 -17 -30 -41 -30 -53 0 -17 65 -89 233 -256 127 -129
                    242 -236 254 -239 31 -8 65 16 156 112 84 89 97 124 57 164 -36 36 -75 26
                    -141 -37 l-60 -57 -192 191 c-121 121 -202 194 -219 198 -22 6 -33 1 -58 -23z"/>
                    <path d="M2695 3219 c-32 -18 -195 -181 -211 -211 -8 -15 -12 -38 -9 -51 8
                    -29 451 -473 482 -482 12 -3 34 0 50 9 33 17 196 181 212 213 24 48 -14 103
                    -72 103 -23 0 -46 -16 -103 -72 l-75 -72 -51 52 -52 51 67 70 c75 78 85 111
                    44 149 -41 39 -71 29 -148 -45 l-70 -67 -51 52 -52 51 72 75 c57 58 72 80 72
                    104 0 55 -60 96 -105 71z"/>
                    <path d="M2317 2800 c-102 -40 -194 -138 -223 -238 -24 -83 -16 -201 20 -272
                    36 -72 104 -141 175 -176 51 -26 65 -29 161 -29 94 0 111 3 160 27 68 33 142
                    106 172 167 26 53 36 157 18 190 -16 31 -57 45 -91 31 -31 -13 -49 -48 -49
                    -96 0 -93 -97 -174 -210 -174 -126 0 -219 92 -220 218 0 61 20 115 58 155 30
                    31 92 67 117 67 25 0 65 46 65 75 0 35 -42 75 -77 75 -15 -1 -50 -9 -76 -20z"/>
                    <path d="M1782 2307 c-46 -49 -35 -70 121 -220 102 -100 135 -137 117 -133
                    -14 2 -130 24 -258 47 l-232 43 -28 -21 c-18 -13 -28 -31 -30 -53 -3 -31 10
                    -46 230 -267 203 -203 237 -233 264 -233 38 0 74 36 74 75 0 23 -25 54 -136
                    166 -76 76 -128 136 -118 134 10 -3 120 -23 243 -46 186 -34 228 -39 251 -29
                    32 13 55 59 47 92 -4 13 -107 123 -230 246 -206 204 -227 222 -259 222 -23 0
                    -42 -8 -56 -23z"/>
                    <path d="M1149 1677 c-21 -16 -39 -51 -39 -75 0 -25 262 -607 285 -632 25 -28
                    76 -26 103 3 28 30 28 53 -3 119 l-25 53 93 93 93 93 55 -25 c66 -31 79 -32
                    113 -5 29 23 36 73 14 102 -18 23 -611 287 -645 287 -15 0 -35 -6 -44 -13z
                    m295 -252 l59 -26 -49 -50 c-55 -56 -46 -60 -100 57 l-34 74 33 -14 c17 -8 59
                    -26 91 -41z"/>
                    <path d="M825 1286 c-141 -45 -235 -148 -265 -290 -25 -121 12 -240 104 -332
                    92 -92 211 -129 332 -104 162 34 278 156 291 308 4 48 2 61 -17 85 -42 53
                    -130 25 -130 -42 0 -63 -14 -96 -60 -142 -160 -160 -423 -9 -370 213 17 69 84
                    138 158 162 56 19 72 38 72 84 0 53 -50 78 -115 58z"/>
                    </g>
                    </svg>
                    <div class="consult-heading">
                        <h4>Cancel anytime
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="how-its-work hard-easy-sec pt-100 pb-100">
    <div class="container-xxl container">
        <div class="main-heading text-center how-its-head">
            <h2>Sildenafil makes hard easy</h2>
        </div>
        <div class="row how-its-row">
            <div class="col-md-4 col-sm-12">
                <div class="how-its-workdiv text-center">
                    <figure>
                        <img src="{{ asset('frontend_new/images/hand-with-candel 1.png') }}" class="img-fluid"
                            alt="Quick Consultation">
                    </figure>
                    <figcaption>
                        <h4>Feel the urge</h4>
                        <p>Sildenafil starts to work when you’re sexually <br> aroused. So start by getting in the
                            mood</p>
                    </figcaption>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="how-its-workdiv text-center">
                    <figure>
                        <img src="{{ asset('frontend_new/images/hand-with-candel 1 (1).png') }}" class="img-fluid"
                            alt="Free-Fast-Delivery">
                    </figure>
                    <figcaption>
                        <h4>Take the pills</h4>
                        <p>Sildenafil takes 30-60 minutes to work, with the <br> sweet spot at the one-hour mark.
                        </p>
                    </figcaption>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="how-its-workdiv text-center">
                    <figure>
                        <img src="{{ asset('frontend_new/images/hand-with-candel 1 (2).png') }}" class="img-fluid"
                            alt="Continous-Support">
                    </figure>
                    <figcaption>
                        <h4>Enjoy the ride</h4>
                        <p>Effects last for four hours, sometimes longer. Get <br> ready for a great time with your
                            partner.</p>
                    </figcaption>
                </div>
            </div>
        </div>

    </div>
</section>

<section>
    <div class="consultation-left container container-xxl">
        <div class="row consultation-row">
            <div class="col-lg-6 col-md-12">
                <div class="consultation-left-box">
                    <h2 class="consultation-head">IS SILDENAFIL <br> RIGHT FOR ME </h2>
                    <p class="consultation-text">Erection difficulties are very common. 40% of men will experience ED by
                        age 40. Fortunately,
                        there are effective solutions available. Sildenafil is the most popular treatment for men with
                        ED. It has been clinically proven to work for the vast majority of guys with ED.</p>
                    <a href="javascript:void(0);" class="trans-btn black-btn learn-more-card-btn">Start Consultation</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12consultation-right">
                <div class="consultation-right-inner">
                    <h3 class="consultation-right-head">Not sure if Sildenafil is right for you?</h3>
                    <p class="consultation-right-text">Get professional medical guidance without in-person visits or
                        long pharmacy queues.</p>

                    <table class="consultation-right-table">
                        <tr>
                            <td class="pt-0">How long does it last?</td>
                            <td class="pt-0">4 Hours</td>
                        </tr>
                        <tr>
                            <td>How long to feel the effect?</td>
                            <td>60 Minutes</td>
                        </tr>
                        <tr>
                            <td>Don't combine with</td>
                            <td>Nitrates, alcohol</td>
                        </tr>
                        <tr>
                            <td class="pb-0">Benefits</td>
                            <td class="pb-0">Works for most guys; cost <br> effective; clinically approved</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- slider sec start -->
<section class="sildenafil-sec pb-120  swiper-design">
    <div class="container-xxl container">
        <div class="swiper-slider6">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="sildenafil-wrap">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="main-heading text-left">
                                    <h2>What is Sildenafil? </h2>
                                    <p>Sildenafil citrate is a well known PDE5 inhibitor that has been prescribed by 
                                        doctors for the last 20 years, Sildenafil works by helping the blood vessels 
                                        in your penis to relax and open up. This allows blood to flow into the penis 
                                        when you become sexually aroused, resulting in a harder and longer-lasting erection.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <figure>
                                    <img src="{{ asset('frontend_new/images/sildenafil-img.png') }}" alt="Sildenafil" />
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="sildenafil-wrap">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="main-heading text-left">
                                    <h2>What is Sildenafil? </h2>
                                    <p>Sildenafil citrate is a well known PDE5 inhibitor that has been prescribed by 
                                        doctors for the last 20 years, Sildenafil works by helping the blood vessels 
                                        in your penis to relax and open up. This allows blood to flow into the penis 
                                        when you become sexually aroused, resulting in a harder and longer-lasting erection.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <figure>
                                    <img src="{{ asset('frontend_new/images/sildenafil-img.png') }}" alt="Sildenafil" />
                                </figure>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<!-- BLACK-SEC2 START  -->
<section class="black-sec home-free-cnslt product-deatils-b-sec">
    <div class="container-xxl container">
        <div class="unsure-div d-flex justify-content-between align-items-center flex-wrap-wrap">
            <div class="text-white">
                <h2>Get a free consultation</h2>
                <p>Speak with one of our clinicians and get personalised advice. Monday to Friday 9am - 4:30pm</p>
            </div>
            <a class="white-btn" href="javascript:void(0);">Book Consultation <span>Book Consultation</span></a>
        </div>
    </div>
</section>
<!-- BLACK-SEC2 END  -->

<!-- MEDICAL-SEC START  -->
<section class="medical-sec pt-120 pb-120">
    <div class="container-xxl container">
        <div class="main-heading text-center">
            <h2>Get expert advise from medical professionals</h2>
            <p>we will pair you with expert medical providers to ensure the right treament for you</p>
        </div>
        <div class="row cstm-row">
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-4">
                        <figure class="expert">
                            <img src="{{ asset('frontend_new/images/medical-img1.png') }}" alt="medical-img1">
                        </figure>
                    </div>
                    <div class="col-4">
                        <figure class="expert">
                            <img src="{{ asset('frontend_new/images/medical-img2.png') }}" alt="medical-img2">
                        </figure>
                    </div>
                    <div class="col-4">
                        <figure class="expert">
                            <img src="{{ asset('frontend_new/images/medical-img3.png') }}" alt="medical-img3">
                        </figure>
                    </div>
                    <div class="col-4">
                        <figure class="expert">
                            <img src="{{ asset('frontend_new/images/medical-img4.png') }}" alt="medical-img4">
                        </figure>
                    </div>
                    <div class="col-4">
                        <figure class="expert">
                            <img src="{{ asset('frontend_new/images/medical-img5.png') }}" alt="medical-img5">
                        </figure>
                    </div>
                    <div class="col-4">
                        <figure class="expert">
                            <img src="{{ asset('frontend_new/images/medical-img6.png') }}" alt="medical-img6">
                        </figure>
                    </div>
                </div>
                <a href="javascript:void(0);" class="trans-btn">get started</a>
            </div>
            <div class="col-lg-4 col-md-12">
                <figure class="mob">
                    <img src="{{ asset('frontend_new/images/mobile-gif.gif') }}" alt="mobile">
                </figure>
                <a href="javascript:void(0);" class="trans-btn">Chat now!</a>
            </div>
        </div>
        <div class="row cstm-row2">
            <div class="col-lg-8 col-6 d-flex justify-content-lg-center justify-content-end">
                <a href="javascript:void(0);" class="trans-btn">get started</a>
            </div>
            <div class="col-lg-4 col-6 d-flex justify-content-lg-center justify-content-start">
                <a href="javascript:void(0);" class="trans-btn">Chat now!</a>
            </div>
        </div>
    </div>
</section>
<!-- MEDICAL-SEC END  -->

<!-- FAQ START  -->
<section class="faq pt-100 pb-100">
    <div class="container-xxl container">
        <div class="main-heading text-center faq-head">
            <h2>Frequently Asked Questions about sildenafil</h2>
            <p>Have Questions? We’re Here to help.</p>
        </div>
        <form action="" method="get">
            <div class="input-group">
                <span><i class="fa-solid fa-magnifying-glass"></i></span>
                <input type="search" name="" class="form-control" placeholder="Search">
            </div>
        </form>
        <div class="accordion question-acco" id="questionaccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        How long does Sildenafil Take to work?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        Sildenafil typically starts working in about 15-30 minutes, but its peak effect begins for most
                        men about one hour after it’s taken on an empty stomach. Keep in mind that food in the stomach
                        can delay the absorption of sildenafil by up to an hour, and also that the timing of each
                        individual’s response is a little bit different. Remember that sildenafil will only work when
                        you are sexually aroused, but it should make it easier to get and sustain an erection during
                        sexual intercourse.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How does Sildenafil work?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        agent is a 100% online telehealth platform that connects patients to licensed healthcare
                        professionals in the UK. We offer support for conditions ranging from sexual health to
                        skincare, and hair care. Through our easy online process, anyone can answer a few questions,
                        meet with a licensed medical provider, and then get a customised treatment plan, including
                        medical and over-the-counter products, shipped right to their door.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        How long does Sildenafil’s effect last for?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        agent is a 100% online telehealth platform that connects patients to licensed healthcare
                        professionals in the UK. We offer support for conditions ranging from sexual health to
                        skincare, and hair care. Through our easy online process, anyone can answer a few questions,
                        meet with a licensed medical provider, and then get a customised treatment plan, including
                        medical and over-the-counter products, shipped right to their door.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        What side effects can Sildenafil cause?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        agent is a 100% online telehealth platform that connects patients to licensed healthcare
                        professionals in the UK. We offer support for conditions ranging from sexual health to
                        skincare, and hair care. Through our easy online process, anyone can answer a few questions,
                        meet with a licensed medical provider, and then get a customised treatment plan, including
                        medical and over-the-counter products, shipped right to their door.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Is Sildenafil safe to buy Online?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        agent is a 100% online telehealth platform that connects patients to licensed healthcare
                        professionals in the UK. We offer support for conditions ranging from sexual health to
                        skincare, and hair care. Through our easy online process, anyone can answer a few questions,
                        meet with a licensed medical provider, and then get a customised treatment plan, including
                        medical and over-the-counter products, shipped right to their door.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Can I drink alcohol whilst taking Sildenafil?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        agent is a 100% online telehealth platform that connects patients to licensed healthcare
                        professionals in the UK. We offer support for conditions ranging from sexual health to
                        skincare, and hair care. Through our easy online process, anyone can answer a few questions,
                        meet with a licensed medical provider, and then get a customised treatment plan, including
                        medical and over-the-counter products, shipped right to their door.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        Are there any Meds that can’t be taken with Sildenafil?
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                    data-bs-parent="#questionaccordion">
                    <div class="accordion-body">
                        agent is a 100% online telehealth platform that connects patients to licensed healthcare
                        professionals in the UK. We offer support for conditions ranging from sexual health to
                        skincare, and hair care. Through our easy online process, anyone can answer a few questions,
                        meet with a licensed medical provider, and then get a customised treatment plan, including
                        medical and over-the-counter products, shipped right to their door.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQ END  -->

@endsection