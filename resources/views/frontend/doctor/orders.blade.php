@extends('layouts.app')
@section('title', 'User Orders')
@section('content')
    <section class="breadcrumb-area comon-padding" style="background-color: #09c6a2">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>Orders</h2>
                <ul>
                    <li><a href="{{route('home')}}">home</a></li>
                    <li> My orders</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="user-dashboard py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="dashboard-left-inr">
                        <livewire:frontend.user.orders-component />
                    </div>
                </div>
                <div class="col-lg-4">
                    @include('partials.frontend.doctor.sidebar')
                </div>
            </div>
        </div>
    </section>
@endsection
