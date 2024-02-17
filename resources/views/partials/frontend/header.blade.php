@php
use App\Models\Category;
$category = Category::select('slug', 'cover', 'name')
->get();
@endphp




<header class="header">
    <div class="topHeader">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p><b>Limited time offer:</b> Claim up to 40% Discount Now</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand navbar-brand-mob" href="{{ url('/') }}">
                <img src="{{ asset('frontend_new/images/logo.png') }}" alt="logo" class="navbar-brand-img" width="90"  />
            </a>
            <a class="navbar-brand navbar-brand-desk" href="{{ url('/') }}">
                <img src="{{ asset('frontend_new/images/logo.png') }}" alt="logo" class="navbar-brand-img" width="90" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">


                @if((auth()->user() && auth()->user()->role === 3) || !auth()->user())
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">our treatments</a>
                            <ul class="dropdown-menu" id="dropDownNavbar">
                                @foreach ($category as $global_category)
                                <li>
                                    <a href="{{ route('shop.index', $global_category->slug) }}">
                                        {{ $global_category->name }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </li>

                    </ul>
                @endif

{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="javascript:void(0);">learn</a>--}}
{{--                    </li>--}}

                <ul class="login-signup d-lg-none">
                    @if(auth()->check())
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            @auth()
                            {{  ucfirst(auth()->user()->full_name) }}
                            @endauth
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            @if(auth()->user()->role === 1)
                            <a class="dropdown-item text-dark" href="{{ url('/admin')  }}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Profile
                            </a>
                            @elseif(auth()->user()->role == 2)
                            <a class="dropdown-item text-dark" href="{{ url('/doctor/profile') }}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Profile
                            </a>
                            @elseif(auth()->user()->role == 4)
                            <a class="dropdown-item text-dark" href="{{ url('/affiliate/profile') }}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Profile
                            </a>
                            @else
                            <a class="dropdown-item text-dark"  href="{{ url('/user/profile') }}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Profile
                            </a>
                            @endif
                            @auth()
                            <div class="menu-logout">
                                <a class="text-decoration-none text-center text-dark" href="javascript:void(0);" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out mr-2" aria-hidden="true"></i>Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                            @endauth
                        </div>
                    </li>

                    @else
                    @guest
                    <li>
                        <a href="{{ route('login') }}">Login </a>
                    </li>
                    @if (route('register'))
                    <li>
                        <a href="{{ route('register') }}"> Register</a>
                    </li>
                    @endif
                    @endguest
                    @endif
                    @if((auth()->user() && auth()->user()->role === 3) || !auth()->user())
                        <li>
                            <a class="white-trans-btn" href="{{ url('questionnaireCat') }}">get started</a>
                        </li>
                    @endif
                </ul>
            </div>
            <ul class="login-signup d-none d-lg-flex">
                @if(auth()->check())
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" data-bs-toggle="dropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        @auth()
                        {{  ucfirst(auth()->user()->full_name) }}
                        @endauth
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu"
                        aria-labelledby="userDropdown">
                        @if(auth()->user()->role === 1)
                        <a class="dropdown-item text-dark" href="{{ url('/admin')  }}">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Profile
                        </a>
                        @elseif(auth()->user()->role == 2)
                        <a class="dropdown-item text-dark" href="{{ url('/doctor/profile') }}">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Profile
                        </a>
                        @elseif(auth()->user()->role == 4)
                        <a class="dropdown-item text-dark" href="{{ url('/affiliate/profile') }}">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Profile
                        </a>
                        @else
                        <a class="dropdown-item text-dark"  href="{{ url('/user/profile') }}">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>Profile
                        </a>
                        @endif
                        @auth()
                        <a class="dropdown-item text-dark" href="{{ url('/message') }}">
                            <i class="fas fa-message fa-sm fa-fw mr-2 text-gray-400"></i>Message
                        </a>
                        <div class="menu-logout">
                            <a class="text-decoration-none text-center text-dark" href="javascript:void(0);" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out mr-2" aria-hidden="true"></i>Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        @endauth
                    </div>
                </li>

                @else
                @guest
                <li>
                    <a href="{{ route('login') }}">Login </a>
                </li>
                @if (route('register'))
                <li>
                    <a href="{{ route('register') }}"> Register</a>
                </li>
                @endif
                @endguest
                @endif
                     @if((auth()->user() && auth()->user()->role === 3) || !auth()->user())
                        <a class="white-trans-btn" href="{{ url('questionnaireCat') }}">get started</a>
                     @endif




            </ul>
        </nav>
    </div>
</header>
