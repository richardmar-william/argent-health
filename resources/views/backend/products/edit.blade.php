@extends('layouts.admin')

@section('styles')
    <link rel="stylesheet" href="{{ asset('backend/vendor/select2/css/select2.min.css') }}">
@endsection

@section('content')
<style>
    .select2-selection--single {
        height: 42px !important;
        padding-top: 6px;
        border: 1px solid black !important;
    }
    .select2-selection__arrow > b{
        margin-top: 6px !important;
    }
    </style>
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">
                Edit product ({{ $product->name }})
            </h6>
            <div class="ml-auto">
                <a href="{{ route('admin.products.index') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-home"></i>
                    </span>
                    <span class="text">Back to products</span>
                </a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.products.update', $product) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="name" class="text-small text-uppercase">{{ __('Product Name') }}</label>
                            <input id="name" type="text" class="form-control form-control-lg" name="name"
                                   value="{{ old('name', $product->name) }}">
                            @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="name_from_admin" class="text-small text-uppercase">{{ __('Product Name from Admin') }}</label>
                            <input id="name_from_admin" type="text" class="form-control form-control-lg" name="name_from_admin"
                                   value="{{ old('name_from_admin', $product->name_from_admin) }}">
                            @error('name_from_admin')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="price" class="text-small text-uppercase">{{ __('Price') }}</label>
                            <input id="price" type="number" class="form-control form-control-lg" name="price"
                                   value="{{ old('price', $product->price) }}">
                            @error('price')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    
                    <div class="col-4">
                        <div class="form-group">
                            <label for="first_time_disc" class="text-small text-uppercase">{{ __('first time discount') }}</label>
                            <input id="first_time_disc" type="number" class="form-control form-control-lg" name="first_time_disc"
                                   value="{{ old('first_time_disc', $product->first_time_disc) }}" >
                            @error('first_time_disc')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-4">
                    <div class="form-group">
                            <label for="subscription_duration">{{ __('subscription Duration') }}</label>
                            <select name="subscription_duration" id="subscription_duration" class="form-control">
                                <option value="">---</option>
                                <option value="1" {{ old('subscription_duration', $product->subscription_duration) == "1" ? 'selected' : null }}>1 Month</option>
                                <option value="3" {{ old('subscription_duration', $product->subscription_duration) == "3" ? 'selected' : null }}>3 Months</option>
                                <option value="6" {{ old('subscription_duration', $product->subscription_duration) == "6" ? 'selected' : null }}>6 Months</option>
                            </select>
                            @error('subscription_duration')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="quantity" class="text-small text-uppercase">{{ __('quantity') }}</label>
                            <input id="quantity" type="number" max="10000" class="form-control form-control-lg"
                                   name="quantity"
                                   value="{{ old('quantity', $product->quantity) }}">
                            @error('quantity')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="quantity_mg" class="text-small text-uppercase">{{ __('quantity in mg') }}</label>
                            <input id="quantity_mg" type="number" max="10000" class="form-control form-control-lg" name="quantity_mg"
                                   value="{{ old('quantity_mg', $product->quantity_mg) }}" >
                            @error('quantity_mg')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="">---</option>
                                @forelse($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id', $product->category_id) == $category->id ? 'selected' : null }}>
                                        {{ $category->name }}
                                    </option>
                                @empty
                                @endforelse
                            </select>
                            @error('category_id')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="tags">Tags</label>

                            <select name="tags[]" id="tags" class="form-control select2" multiple="multiple">
                                @forelse($tags as $tag)
                                    <option value="{{ $tag->id }}"
                                        {{ in_array($tag->id, $product->tags->pluck('id')->toArray()) ? 'selected' : null }}>
                                        {{ $tag->name }}
                                    </option>
                                @empty
                                @endforelse
                            </select>
                            @error('tags')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
</div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="treat_method">Recommended Question(s)</label>

                            <select name="treat_method[]" id="treat_method" class="form-control select2" multiple="multiple">
                                @forelse($treat_method as $treat)
                                    <option value="{{ $treat }}"
                                        {{ in_array($treat, explode(",", $product->treat_method)) ? 'selected' : null }}>
                                        {{ $treat }}
                                    </option>
                                @empty
                                @endforelse
                            </select>
                            @error('treat_method')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <label for="highlite" class="text-small ">{{ __('Highlight') }}</label>
                            <input id="highlite" type="text" class="form-control form-control-lg" name="highlite"
                                   value="{{ old('highlite',$product->highlite) }}">
                            @error('highlite')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="type">Code</label>
                            <select name="type" id="type" style="height: 42px;" class="form-control select2">
                                @forelse($types as $type)

                                    <option value="{{ $type }}" {{$product->type == $type ? "selected": ""}}>
                                        {{ $type }}
                                    </option>
                                @empty
                                @endforelse
                            </select>
                            @error('type')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>


                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="featured">Featured</label>
                            <select name="featured" id="featured" class="form-control">
                                <option
                                    value="1" {{ old('featured', $product->featured) == "Yes" ? 'selected' : null }}>Yes
                                </option>
                                <option value="0" {{ old('featured', $product->featured) == "No" ? 'selected' : null }}>
                                    No
                                </option>
                            </select>
                            @error('featured')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="1" {{ old('status', $product->status) == "Active" ? 'selected' : null }}>
                                    Active
                                </option>
                                <option value="0" {{ old('status', $product->status) == "Inactive" ? 'selected' : null }}>
                                    Inactive
                                </option>
                            </select>
                            @error('status')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="description" class="text-small text-uppercase">{{ __('Description') }}</label>
                            <textarea name="description" class="form-control summernote">
                                {!! old('description', $product->description) !!}
                            </textarea>
                            @error('description')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="details" class="text-small text-uppercase">{{ __('Details') }}</label>
                            <textarea name="details" class="form-control summernote">
                                {!! old('details', $product->description) !!}
                            </textarea>
                            @error('details')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <label for="images">images</label>
                        <br>
                        <div class="file-loading">
                            <input type="file" name="images[]" id="product-images" class="file-input-overview"
                                   multiple="multiple">
                        </div>
                        @error('images')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Update') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('backend/vendor/select2/js/select2.full.min.js') }}"></script>
    <script>
        $(function () {
            // summernote
            $('.summernote').summernote({
                tabSize: 2,
                height: 200,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });

            // select2
            function matchStart(params, data) {
                // If there are no search terms, return all of the data
                if ($.trim(params.term) === '') {
                    return data;
                }

                // Skip if there is no 'children' property
                if (typeof data.children === 'undefined') {
                    return null;
                }

                // `data.children` contains the actual options that we are matching against
                var filteredChildren = [];
                $.each(data.children, function (idx, child) {
                    if (child.text.toUpperCase().indexOf(params.term.toUpperCase()) == 0) {
                        filteredChildren.push(child);
                    }
                });

                // If we matched any of the timezone group's children, then set the matched children on the group
                // and return the group object
                if (filteredChildren.length) {
                    var modifiedData = $.extend({}, data, true);
                    modifiedData.children = filteredChildren;

                    // You can return modified objects from here
                    // This includes matching the `children` how you want in nested data sets
                    return modifiedData;
                }

                // Return `null` if the term should not be displayed
                return null;
            }

            $(".select2").select2({
                tags: true,
                closeOnSelect: false,
                minimumResultsForSearch: Infinity,
                matcher: matchStart
            });

            // upload images
            $("#product-images").fileinput({
                theme: "fas",
                maxFileCount: 5,
                allowedFileTypes: ['image'],
                showCancel: true,
                showRemove: false,
                showUpload: false,
                overwriteInitial: false,
                initialPreview: [
                    @if($product->media()->count() > 0)
                        @foreach($product->media as $media)
                            "{{ asset('storage/images/products/' . $media->file_name) }}",
                        @endforeach
                    @endif
                ],
                initialPreviewAsData: true,
                initialPreviewFileType: 'image',
                initialPreviewConfig: [
                        @if($product->media()->count() > 0)
                            @foreach($product->media as $media)
                                {
                                    caption: "{{ $media->file_name }}",
                                    size: "{{ $media->file_size }}",
                                    width: "120px",
                                    url: "{{ route('admin.products.remove_image', [
                                                            'image_id' => $media->id,
                                                            'product_id' => $product->id,
                                                            '_token' => csrf_token()
                                                        ]) }}",
                                    key: {{ $media->id }}
                                },
                            @endforeach
                        @endif
                ]
            }).on('filesorted', function (event, params) {
               console.log(params.previewId, params.oldIndex, params.newIndex, params.stack)
            });
        })
    </script>
@endsection
