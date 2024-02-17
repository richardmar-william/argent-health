@extends('layouts.admin')

@section('styles')
    <link rel="stylesheet" href="{{ asset('backend/vendor/datepicker/themes/classic.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/vendor/datepicker/themes/classic.date.css') }}">
    <style>
        .picker__select--month,
        .picker__select--year {
            padding: 0 !important;
        }
        #content .select2-container--default .select2-selection--multiple {
            height:auto;
        }
    </style>
@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">
                Create new coupon
            </h6>
            <div class="ml-auto">
                <a href="{{ route('admin.affiliate.affiliateCouponShow') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                    </span>
                    <span class="text">Back to coupons</span>
                </a>
            </div>
        </div>
        <div class="card-body">
        <form action="{{ route('admin.affiliate.affiliatecoupon_create') }}" method="POST" id="couponForm">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="cat_id">Category Name</label>
                        <select name="cat_id[]" id="cat_id" class="form-control selector" multiple="multiple">
                            <option value="" disabled>---</option>
                            @foreach($category as $cat)
                            <option value="{{$cat->id}}" {{ old('cat_id') == $cat->id ? 'selected' : null }}>
                                {{$cat->name}}
                            </option>
                            @endforeach
                        </select>
                        @error('cat_id')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="code">Coupon Name</label>
                        <input class="form-control" id="code" type="text" name="code" value="{{ old('code') }}">
                        @error('code')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-6">
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control" >
                            <option value="1" {{ old('status') == "1" ? 'selected' : null }}>Active</option>
                            <option value="0" {{ old('status') == "0" ? 'selected' : null }}>Inactive</option>
                        </select>
                        @error('status')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="coupon_type">Type</label>
                        <select name="type" id="coupon_type" class="form-control">
                            <option value="percentage" {{ old('type') == 'percentage' ? 'selected' : null }}>
                                percentage
                            </option>
                        </select>
                        @error('type')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-6">
                    <div class="form-group addval">
                        <label for="value">Value</label>
                        <input class="form-control hidval" id="value" type="number" name="values[]" value="{{ old('value') }}">
                        @error('value')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            <div class="col-6">
                    <div class="form-group addcom">
                        <label for="status">Commission</label>
                        <input class="form-control hidcom" id="commission" type="number" name="commissions[]" value="{{ old('value') }}">
                        @error('commission')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="start_date">Start date</label>
                        <input class="form-control" id="start_date" type="date" name="start_date"
                               value="{{ old('start_date') }}" >
                        @error('start_date')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="expire_date">Expire date</label>
                        <input class="form-control" id="expire_date" type="date" name="expire_date"
                               value="{{ old('expire_date') }}" >
                        @error('expire_date')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
            <div class="form-group pt-4 ml-3">
                <button class="btn btn-primary" type="submit" name="submit">Create</button>
            </div>
        </form>
    </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('backend/vendor/datepicker/picker.js') }}"></script>
    <script src="{{ asset('backend/vendor/datepicker/picker.date.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(function () {
            $('#code').keyup(function () {
                this.value = this.value.toUpperCase();
            });

            $("#start_date").pickadate({
                format: 'yyyy-mm-dd',
                selectMonths: true, 
                selectYears: true, 
                clear: 'Clear',
                close: 'Ok',
                closeOnSelect: true,
            });

            var startdate = $('#start_date').pickadate('picker');
            var enddate = $('#expire_date').pickadate('picker');

            $("#start_date").change(function () {
               selected_ci_date = "";
                selected_ci_date = $('#start_date').val();
                if (selected_ci_date != null) {
                    var cidate = new Date(selected_ci_date);
                    min_codate = "";
                    min_codate = new Date();
                    min_codate.setDate(cidate.getDate() + 1);
                    enddate.set('min', min_codate);

                }
            });

            $('#expire_date').pickadate({
                format: 'yyyy-mm-dd',
                min: new Date(),
                selectMonths: true, 
                selectYears: true, 
                clear: 'Clear',
                close: 'Ok',
                closeOnSelect: true,
            });
        });
    </script>
    <script src="/js/jquery.validate1.16.0.min.js"></script>
    <script>
        /////////////////////////////
                $(".selector").select2({});
//////////////////////////////////////////
         $(document).ready(function () {
        $("#couponForm").validate({
            rules: {
                'cat_id[]': {
                    required: true
                },
                code: {
                    required: true,
                    maxlength: 100
                },
                status: {
                    required: true
                },
                type: {
                    required: true
                },
                'values[]': {
                    required: true,
                    number: true,
                    min: 0
                },
                'commissions[]': {
                    required: true,
                    number: true,
                    min: 0
                },
                start_date: {
                    required: true,
                    date: true
                },
                expire_date: {
                    required: true,
                    date: true
                }
            },
            messages: {
                'cat_id[]': {
                    required: "Please select at least one category."
                },
                code: {
                    required: "Please enter a coupon name.",
                    maxlength: "Coupon name must not exceed 100 characters."
                },
                status: {
                    required: "Please select a status."
                },
                type: {
                    required: "Please select a coupon type."
                },
                'values[]': {
                    required: "Please enter a value.",
                    number: "Please enter a valid number.",
                    min: "Value must be equal to or greater than 0."
                },
                'commissions[]': {
                    required: "Please enter a commission.",
                    number: "Please enter a valid number.",
                    min: "Commission must be equal to or greater than 0."
                },
                start_date: {
                    required: "Please select a start date.",
                    date: "Please enter a valid date."
                },
                expire_date: {
                    required: "Please select an expiration date.",
                    date: "Please enter a valid date."
                }
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    });
    </script>
  <script>
    $(document).ready(function() {
        $('#cat_id').on('change', function() {
            const selectedLength = $(this).find('option:selected').length;

            const currentLength = $('.hidval').length;
            if (selectedLength < currentLength) {
                if (selectedLength != 0) {
                    $('.hidval').slice(selectedLength).remove();
                }
            }
            for (let i = currentLength; i < selectedLength; i++) {
                $('.addval').append('<input class="form-control hidval" type="number" name="values[]">');
            }

            ////////////////////////////////////////////////////////////////////////////////////////
            const currentLengths = $('.hidcom').length;
            if (selectedLength < currentLengths) {
                if (selectedLength != 0) {
                    $('.hidcom').slice(selectedLength).remove();
                }
            }
            for (let i = currentLengths; i < selectedLength; i++) {
                $('.addcom').append('<input class="form-control hidcom" type="number" name="commissions[]">');
            }
        });
    });
</script>
@endsection
