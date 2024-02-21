<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta
        name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootstrap css  -->
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- font cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_new/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend_new/css/responsive.css') }}">
        <title>dasboard</title>
        
    </head>
    <body class="dashboard-open">
        <div class="app-layout">
            <div class="header dasboard-header">
                <div
                    class="container-xxl">
                    <!-- header start-->
                    <nav class="navbar navbar-expand-lg navbar-light ">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <figure>
                            <img src="http://49.249.236.30:3007/agent/public/frontend_new/images/logo.png" alt="logo" class="navbar-brand-img" />
                            </figure>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav  navbar-right">
                                <li class="nav-item dropdown ">
                                    <a class="nav-link dropdown-toggle dev" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    @auth()
                                      {{  ucfirst(auth()->user()->full_name) }}
                                    @endauth
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li class="dropdown-item">
                                            <a class="" href="{{ route('affiliate.profile') }}"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400" aria-hidden="true"></i>Profile</a>
                                        </li>
                                        <!-- <li>
                                            <a class="dropdown-item" href="#">Message</a>
                                        </li> -->
                                        @auth()
                                            <li class="menu-logout dropdown-item">
                                                <a class="text-decoration-none text-center text-dark" href="javascript:void(0);" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    <i class="fa fa-sign-out mr-2" aria-hidden="true"></i>Logout
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>
                                        @endauth
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- header end -->
                </div>
            </div>