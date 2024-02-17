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
    <section class="user-dashboard py-5 ">
        <div class="container">
            <div class="row">
                 @include('partials.frontend.doctor.sidebar')
                <div class="col-lg-12">
                    
                <div class="user-dash-info">
                    <div class="dashboard-left-inr">
                        <form action="{{ route('doctor.update_profile') }}" method="POST" enctype="multipart/form-data"
                            autocomplete="off">
                            @csrf
                            @method('PATCH')
                            <div class="row">
                                <div class="col-lg-12 text-center mb-4">
                                    <div class="user-profile-img">
                                        @if (auth()->user()->user_image)
                                            <img src="{{ asset('storage/images/users/' . auth()->user()->user_image) }}"
                                                class="img-thumbnail" width="120" alt="{{ auth()->user()->full_name }}">
                                            <div class="remove-profile-img">
                                                <a href="{{ route('doctor.remove_image') }}" class="btn btn-sm btn-outline-danger">Remove
                                                    image</a>
                                            </div>
                                        @else
                                            <img src="{{ asset('img/avatar.png') }}" class="img-thumbnail" width="120"
                                                alt="{{ auth()->user()->full_name }}">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <label for="full_name" class="text-small text-uppercase">Full Name</label>
                                    <input type="text" class="form-control form-control-lg" name="full_name" id="full_name"
                                        value="{{ old('full_name', auth()->user()->full_name) }}">
                                    @error('full_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label for="email" class="text-small text-uppercase">Email</label>
                                    <input type="email" class="form-control form-control-lg" name="email" id="email"
                                        value="{{ old('email', auth()->user()->email) }}">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
        
                                <div class="col-lg-6 form-group">
                                    <label for="phone" class="text-small text-uppercase">Phone Number</label>
                                    <input type="text" class="form-control form-control-lg" name="phone" id="phone"
                                        placeholder="ex. 9665xxxxxxxx" value="{{ old('phone', auth()->user()->phone) }}">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label for="password" class="text-small text-uppercase">
                                        Password
                                        <small class="ml-auto text-secondary">(optional)</small>
                                    </label>
                                    <input type="password" class="form-control form-control-lg" name="password" id="password"
                                        value="{{ old('password') }}">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <label for="password_confirmation" class="text-small text-uppercase">Re-Password</label>
                                    <input type="password" class="form-control form-control-lg" name="password_confirmation"
                                        id="password_confirmation" value="{{ old('password_confirmation') }}">
                                    @error('password-confirm')
                                        <span class="text-danger"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label for="receive-email">Receive Email</label>
                                    <select name="receive_email" id="receive-email" class="form-control">
                                        <option value="">---</option>
                                        <option value="1"
                                            {{ old('receive_email', auth()->user()->receive_email) == 1 ? 'selected' : null }}>Yes
                                        </option>
                                        <option value="0"
                                            {{ old('receive_email', auth()->user()->receive_email) == 0 ? 'selected' : null }}>No
                                        </option>
                                    </select>
                                    @error('receive_email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <label for="user_image" class="text-small text-uppercase">Image</label>
                                    <div class="file-upload">
                                        <div class="file-select">
                                            <div class="file-select-button" id="fileName">Choose File</div>
                                            <div class="file-select-name" id="noFile">No file chosen...</div> 
                                            <input type="file" name="user_image" id="user_image">
                                        </div>
                                    </div>
                                    <!-- <input type="file" id="user_image" name="user_image"><br> -->
                                    @error('user_image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button class="button bg-dark text-white" type="submit">Update</button>
                                </div>
                            </div>
                        </form>
                        <!-- {!! JsValidator::formRequest('App\Http\Requests\Frontend\LoginRequest') !!} -->
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <body class="dashboard-open">
@endsection
