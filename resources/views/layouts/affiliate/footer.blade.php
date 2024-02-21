 <!-- footer start-->
 <footer>
                <div class="container-xxl container">
                    <div class="row footer-upper">
                        <div class="col-lg-5 col-md-12 order-custm1">
                            <p>©<b>2023</b> <strong>  AGENT</strong> All right reserved</p>
                        </div>
                        <div class="col-lg-2 col-md-12 order-custm2">
                            <!-- <a href="http://49.249.236.30:3007/agent/public" class="ftr-logo"> -->
                            <a href="{{ url('/') }}" class="ftr-logo">
                                <img src="http://49.249.236.30:3007/agent/public/frontend_new/images/logo.png" alt="logo">
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

                        <li>
                            <a href="{{route('blog_list')}}">Blogs</a>
                        </li>

                        <li>
                            <a href="{{route('page.showfaq')}}">FAQ</a>
                        </li>
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
            <!-- footer end -->
        </div>


        <!-- js cdn -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <script>
            $(".side-bar").click(function () {
                $(this).toggleClass("open");
                $(".user-sidebar").toggleClass("open");
            });
        </script>
    </body>
</html>