
<!-- FOOTER START  -->
    <footer>
        <div class="container-xxl container">
            <div class="row footer-upper">
                <div class="col-lg-5 col-md-12 order-custm1">
                    <!-- <p>©<b><?php print_r(date("Y"));?></b> <strong>  AGENT</strong> All right reserved</p> -->
                    <p><strong>Pharmacy Owner :</strong> ClickPharm (GPHC: 9011992) </p>
                    <p><strong>Address: </strong> Ground Floor 5 Building 11, Thames Industrial Park, Princess Margaret
                        Road, East Tilbury, Tilbury, Essex, RM18 8RH, United Kingdom</p>
                    <p> <strong>Superintendent Pharmacist: </strong>Anthony Olayiwola (GPHC: 2217450)</p>
                </div>
                <div class="col-lg-2 col-md-12 order-custm2">
                    <a href="{{ url('/') }}" class="ftr-logo">
                        <img src="{{ asset('frontend_new/images/logo.png') }}" alt="logo" width="90" height="61" />
                    </a>
                </div>
                <div class="col-lg-5 col-md-12 order-custm3">

                    <ul class="d-flex align-items-center">
                        <!-- <li>
                            <a href="{{route('page.show',['slug' => 'about-us'])}}">About Us</a>
                        </li> -->
                        <!-- <li>
                            <a href="{{route('agent_health')}}">Agent Health</a>
                        </li> -->
                        <li>
                            <a href="{{route('affiliate.index')}}">Affiliate</a>
                        </li>
                        <li>
                            <a href="{{route('page.contactus')}}">Contact Us</a>
                        </li>
                        <li>
                            <a href="{{route('page.aboutus')}}">About Us</a>
                        </li>

                        <!-- <li>
                            <a href="{{route('blog_list')}}">Blogs</a>
                        </li> -->

                        <!-- <li>
                            <a href="{{route('page.showfaq')}}">FAQ</a>
                        </li> -->
                        <!-- <li>
                            <a href="{{route('page.show',['slug' => 'privacy-policy'])}}">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="{{route('page.show',['slug' => 'terms-and-conditions'])}}">Term & Conditions</a>
                        </li> -->
                        @php
                        $page = DB::table('pages')->get();
                        @endphp
                        @foreach($page as $pages)
                        <li>
                            <a href="{{ url( '/page',$pages->slug) }}">{{$pages->title}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER END  -->
