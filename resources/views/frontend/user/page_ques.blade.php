@extends('layouts.app')
@section('title', 'User Profile')
@section('content')
<body class="dashboard-open">

    <!-- <section class="breadcrumb-area comon-padding" style="background-color: #09c6a2">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>Dashboard</h2>
                <ul>
                    <li><a href="{{ route('home') }}">home</a></li>
                    <li> My profile</li>
                </ul>
            </div>
        </div>
    </section> -->
    <section class="questinnaire-main active">
        <div class="container-xxl container">
            <div class="questinnaire-step1 qtnr-inner d-none">
                <h2 class="questinnaire-heading">What is your type of hair loss</h2>
                <div class="step-form-section active">
                    <form>
                        <div class="step-form-group">
                            <div class="steps-hair-loss-info">
                                <div class="hair-loss-img">
                                    <figure>
                                        <img class="img-fluid" src="{{ asset('frontend/assets/step-icon/hair-loss.png') }}" alt="">
                                    </figure>
                                </div>
                                <div class="steps-hair-loss-des">
                                    <h6>Genetic Hair Loss/ Mild</h6>
                                </div>
                            </div>
                            <div class="steps-hair-loss-info">
                                <div class="hair-loss-img">
                                    <figure>
                                        <img class="img-fluid" src="{{ asset('frontend/assets/step-icon/hair-loss.png') }}" alt="">
                                    </figure>
                                </div>
                                <div class="steps-hair-loss-des">
                                    <h6>Receding Hairline</h6>
                                </div>
                            </div>
                            <div class="steps-hair-loss-info">
                                <div class="hair-loss-img">
                                    <figure>
                                        <img class="img-fluid" src="{{ asset('frontend/assets/step-icon/hair-loss.png') }}" alt="">
                                    </figure>
                                </div>
                                <div class="steps-hair-loss-des">
                                    <h6>Thin Crown</h6>
                                </div>
                            </div>
                            <div class="steps-hair-loss-info">
                                <div class="hair-loss-img">
                                    <figure>
                                        <img class="img-fluid" src="{{ asset('frontend/assets/step-icon/hair-loss.png') }}" alt="">
                                    </figure>
                                </div>
                                <div class="steps-hair-loss-des">
                                    <h6>Thinning All Over</h6>
                                </div>
                            </div>
                            <div class="steps-hair-loss-info">
                                <div class="hair-loss-img">
                                    <figure>
                                        <img class="img-fluid" src="{{ asset('frontend/assets/step-icon/hair-loss.png') }}" alt="">
                                    </figure>
                                </div>
                                <div class="steps-hair-loss-des">
                                    <h6>Extensive Hair Loss</h6>
                                </div>
                            </div>
                            <div class="steps-hair-loss-info">
                                <div class="hair-loss-img">
                                    <figure>
                                        <img class="img-fluid" src="{{ asset('frontend/assets/step-icon/hair-loss.png') }}" alt="">
                                    </figure>
                                </div>
                                <div class="steps-hair-loss-des">
                                    <h6>Patchy</h6>
                                </div>
                            </div>
                            <div class="steps-hair-loss-info">
                                <div class="hair-loss-img">
                                    <figure>
                                        <img class="img-fluid" src="{{ asset('frontend/assets/step-icon/hair-loss.png') }}" alt="">
                                    </figure>
                                </div>
                                <div class="steps-hair-loss-des">
                                    <h6>Completely Bald</h6>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="questinnaire-step1 qtnr-inner d-none">
                <h2 class="questinnaire-heading">How much hair have you lost?</h2>
                <div class="step-form-section active">
                    <form>
                        <div class="step-form-group">
                            <div class="steps-hair-loss-info">
                                <div class="hair-loss-img">
                                    <figure>
                                        <img class="img-fluid" src="{{ asset('frontend/assets/step-icon/hair-comb.png') }}" alt="">
                                    </figure>
                                </div>
                                <div class="steps-hair-loss-des">
                                    <h4>A little</h4>
                                    <h6>Only I notice it</h6>
                                </div>
                            </div>
                            <div class="steps-hair-loss-info">
                                <div class="hair-loss-img">
                                    <figure>
                                        <img class="img-fluid" src="{{ asset('frontend/assets/step-icon/hair-comb.png') }}" alt="">
                                    </figure>
                                </div>
                                <div class="steps-hair-loss-des">
                                    <h4>Some</h4>
                                    <h6>Those close to me notice it</h6>
                                </div>
                            </div>
                            <div class="steps-hair-loss-info">
                                <div class="hair-loss-img">
                                    <figure>
                                        <img class="img-fluid" src="{{ asset('frontend/assets/step-icon/hair-comb.png') }}" alt="">
                                    </figure>
                                </div>
                                <div class="steps-hair-loss-des">
                                    <h4>A lot</h4>
                                    <h6>It’s obvious to everyone</h6>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="questinnaire-step1 qtnr-inner active">
                <h2 class="questinnaire-heading">Have you tried hair loss treatments before?</h2>
                <div class="step-form-section active">
                    <form>
                        <div class="step-form-group">
                            <div class="steps-hair-loss-info">
                                <div class="hair-loss-img">
                                    <figure>
                                        <img class="img-fluid" src="{{ asset('frontend/assets/step-icon/draw-check-mark.png') }}" alt="">
                                    </figure>
                                </div>
                                <div class="steps-hair-loss-des">
                                    <h6>Yes</h6>
                                </div>
                            </div>
                            <div class="steps-hair-loss-info">
                                <div class="hair-loss-img">
                                    <figure>
                                        <img class="img-fluid" src="{{ asset('frontend/assets/step-icon/cancel.png') }}" alt="">
                                    </figure>
                                </div>
                                <div class="steps-hair-loss-des">
                                    <h6>No</h6>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="user-dashboard py-5 ">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    @include('partials.frontend.user.sidebar')
                </div>
            </div>
        </div>
    </section>
    </body
@endsection
