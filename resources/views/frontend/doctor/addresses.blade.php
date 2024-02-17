@extends('layouts.app')
@section('title', 'User Address')
@section('content')
    <section class="breadcrumb-area comon-padding" style="background-color: #09c6a2">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>Addresses</h2>
                <ul>
                    <li><a href="{{route('home')}}">home</a></li>
                    <li> My addresses</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="user-dashboard pt-4 pb-5 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="dashboard-left-inr">
                        <livewire:frontend.user.addresses-component />
                    </div>
                </div>
                <div class="col-lg-4">
                    @include('partials.frontend.doctor.sidebar')
                </div>
            </div>
        </div>
    </section>
@endsection
