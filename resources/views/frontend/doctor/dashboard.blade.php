@extends('layouts.app')
@section('title', 'User Dashboard')
@section('content')
    <!-- <section class="breadcrumb-area comon-padding" style="background-color: #09c6a2">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>Dashboard</h2>
                <ul>
                    <li><a href="{{route('home')}}">home</a></li>
                    <li> My profile</li>
                </ul>
            </div>
        </div>
    </section> -->
    <!-- <section class="container pt-4 pb-5 ">
        <div class="row">
            <div class="col-lg-8">
                Doctor Dashboard
            </div>

            <div class="col-4">
                this is Doctor Dashboard..
            </div>

        </div>
    </section> -->
    <body class="dashboard-open">

    <section class="user-dashboard py-5 ">
        <div class="container">
            <div class="row">
                
                    @include('partials.frontend.doctor.sidebar')
            
    
                <div class="col-12">
                <div class="dashboard-left-inr">
                        <h2 class="user-heading">Dashboard</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
@endsection
