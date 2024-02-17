@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">
                <!-- Edit user:  -->
                Update Form
               
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
            <form action="{{ route('admin.final.request', $id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <input class="form-control" type="hidden" name="account_number" value="{{ $user->account_number}}">
                <input class="form-control" type="hidden" name="email" value="{{ $user->email}}">
                <input class="form-control" type="hidden" name="name_on_account" value="{{ $user->sort_code}}">
                <input class="form-control" type="hidden" name="sort_code" value="{{ $user->name_on_account}}">
                <div class="row">
                    <!-- <div class="col-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" type="email" name="email" value="{{ $user->email}}" disabled>
                            @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div> -->
                    <div class="col-6">
                        <div class="form-group">
                            <label for="account_number">Account Number</label>
                            <input class="form-control" id="account_number" type="number" name="account_number" value="{{ $user->account_number}}" disabled>
                            @error('account_number')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="email">Sort Code</label>
                            <input class="form-control" id="sort_code" type="text" name="sort_code" value="{{ $user->sort_code}}" disabled>
                            @error('sort_code')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="account_number">Name On Account</label>
                            <input class="form-control" id="name_on_account" type="text" name="name_on_account" value="{{ $user->name_on_account }}" disabled>
                            @error('name_on_account')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
                </div>

              

             <div class="form-group pt-4 ml-4">
                    <button class="btn btn-primary" type="submit" name="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
