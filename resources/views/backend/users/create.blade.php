@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">
                Create user
            </h6>
            <div class="ml-auto">
                <a href="{{ route('admin.users.index') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-home"></i>
                    </span>
                    <span class="text">Back to users</span>
                </a>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.users.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="full_name" class="text-small text-uppercase">{{ __('Full Name') }}</label>
                            <input id="full_name" type="text" class="form-control form-control-lg" name="full_name"
                                   value="{{ old('full_name') }}" placeholder="Full Name">
                            @error('full_name')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="username" class="text-small text-uppercase">{{ __('Username') }}</label>
                            <input id="username" type="text" class="form-control form-control-lg" name="username"
                                   value="{{ old('username') }}" placeholder="Username">
                            @error('username')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="email" class="text-small text-uppercase">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control form-control-lg" name="email"
                                   placeholder="Enter your Email">
                            @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="phone" class="text-small text-uppercase">{{ __('Phone') }}</label>
                            <input id="phone" type="text" class="form-control form-control-lg" name="phone"
                                   placeholder="Enter your Phone Number">
                            @error('phone')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="">-- Choose Status User --</option>
                                <option value="1" {{ old('status') == "1" ? 'selected' : null }}>Active</option>
                                <option value="0" {{ old('status') == "0" ? 'selected' : null }}>Inactive</option>
                            </select>
                            @error('status')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="address" class="text-small text-uppercase">{{ __('address') }}</label>
                            <input id="address" type="text" class="form-control form-control-lg" name="address"
                                   placeholder="Enter your address">
                            @error('address')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                  
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="password" class="text-small text-uppercase">{{ __('New Password') }}</label>
                            <input id="password" type="password" class="form-control form-control-lg"
                                   name="password"
                                   placeholder="Enter your password">
                            @error('password')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="password-confirm"
                                   class="text-small text-uppercase">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control form-control-lg"
                                   name="password_confirmation" placeholder="Confirm Password">
                            @error('password-confirm')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- <div class="col-6">
                        <label for="user_image">User image</label>
                        <br>
                        <div class="form-group">
                            <input type="file" name="user_image">
                        </div>
                        @error('user_image')<span class="text-danger">{{ $message }}</span>@enderror
                    </div> -->
                    <div class="col-6">
                        <div class="form-group">
                            <label for="userRole">User Role</label>
                            <select name="userRole" id="userRole" class="form-control">
                                <option value="">-- Choose Status User --</option>
                                <option value="2" {{ old('status') == "2" ? 'selected' : null }}>Doctor</option>
                                <option value="3" {{ old('status') == "3" ? 'selected' : null }}>User</option>
                            </select>
                            @error('userRole')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group d-none" id="doc_pin_input">
                            <label for="doc_pin">Pin</label>
                            <input id="doc_pin" type="text" class="form-control form-control-lg" maxlength="5" name="doc_pin"
                                   value="{{ old('doc_pin') }}" placeholder="Pin">
                            @error('doc_pin')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
    document.getElementById('userRole').addEventListener('change', function() {
    var docPinElement = document.getElementById('doc_pin_input');

    docPinElement.classList.add('d-none');

    if (this.value == 2) {
        docPinElement.classList.remove('d-none');
    }
});
    </script>
@endsection
