@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">
                <!-- Edit user:  -->
                ({{ $user->full_name }})
            </h6>
            <div class="ml-auto">
                <a href="{{ route('admin.affiliate.index') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-home"></i>
                    </span>
                    <span class="text">Back</span>
                </a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.affiliate_update', $user) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="full_name">Full Name</label>
                            <input class="form-control" id="full_name" type="text" name="full_name" value="{{ old('full_name', $user->full_name) }}" disabled>
                            @error('full_name')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" type="email" name="email" value="{{ old('email', $user->email) }}" disabled>
                            @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input class="form-control" id="username" type="text" name="username" value="{{ old('username', $user->username) }}">
                            @error('username')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" type="email" name="email" value="{{ old('email', $user->email) }}">
                            @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>

                

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input class="form-control" id="phone" type="text" name="phone" value="{{ old('phone', $user->phone) }}" disabled>
                            @error('phone')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="account_number">Account Number</label>
                            <input class="form-control" id="account_number" type="text" name="account_number" value="{{ old('account_number', $user->account_number) }}" disabled>
                            @error('account_number')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <!-- <div class="col-6">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control"disabled>
                                <option value="1" {{ old('status', $user->status) == "Active" ? 'selected' : null }}>Active</option>
                                <option value="0" {{ old('status', $user->status) == "Inactive" ? 'selected' : null }}>Inactive</option>
                            </select>
                            @error('status')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div> -->
                </div>

                <div class="row">
                    <!-- <div class="col-6">
                        <label for="receive-email">Receive Email</label>
                        <select name="receive_email" id="receive-email" class="form-control" disabled>
                            <option value="">---</option>
                            <option value="1" {{ old('receive_email', $user->receive_email) == 1 ? 'selected' : null }}>Yes</option>
                            <option value="0" {{ old('receive_email', $user->receive_email) == 0 ? 'selected' : null }}>No</option>
                        </select>
                        @error('receive_email')<span class="text-danger">{{ $message }}</span>@enderror
                    </div> -->
                    <!-- <div class="col-6">
                        <div class="form-group">
                            <label for="password" class="text-danger">Change password</label>
                            <input class="form-control" id="password" type="password" name="password" value="{{ old('password') }}">
                            @error('password')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div> -->
                </div>

                <!-- <div class="row">
                    <div class="col-12">
                        @if($user->user_image)
                            <img src="{{ asset('storage/images/users/' . $user->user_image) }}" alt="{{ $user->full_name }}" width="60" height="60">
                        @else
                            <img src="{{ asset('img/avatar.png') }}" alt="{{ $user->full_name }}" width="60" height="60">
                        @endif
                        <br>
                        <<input type="file" name="user_image"> 
                    </div>
                </div> -->

                <!-- <div class="form-group pt-4">
                    <button class="btn btn-primary" type="submit" name="submit">Update</button>
                </div> -->
            </form>
        </div>
    </div>
@endsection
