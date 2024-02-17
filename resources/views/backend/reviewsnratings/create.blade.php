@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="#">
@endsection

@section('content')
      <div class="card mb-3 admin-craete">
          <div class="card-header d-flex">
              <i class="fa fa-table"></i>
              <p>Rating and Review</p>
              <a href="{{ route('admin.reviewsnratings.index') }}" class="btn btn-primary ml-auto">Back</a>
          </div>
        <div class="card-body">
            <form method="POST" action="{{route('admin.reviewsnratings.store')}}" enctype="multipart/form-data">
                @csrf
               
                <div class="col-lg-12 form-group">
                    <label for="body">name</label>
                    <input type="text" name="name" class="form-control">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-lg-12 form-group">
                    <label for="body">Review</label>
                    <textarea name="review" class="form-control summernote"></textarea>
                    @error('review')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
               
                <!-- <div class="col-lg-12 form-group">
                    <label for="body">Slug</label>
                    <input type="text" name="slug" class="form-control">
                    @error('slug')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div> -->
                
                <div class="col-lg-12 form-group start-color">
                    <label for="body">Star Ratings</label>
                    <select name="starrating" class="form-control"> 
                        <option>&#9734;</option>
                        <option>&#9734; &#9734;</option>
                        <option>&#9734; &#9734; &#9734;</option>
                        <option>&#9734; &#9734; &#9734; &#9734;</option>
                        <option>&#9734; &#9734; &#9734; &#9734; &#9734;</option>
                    </select>
                    @error('starrating')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-lg-12 form-group">
                    <label for="body">Image</label>
                    <input type="file" name="image" class="form-control">
                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-lg-12 form-group">
                    <button type="submit" class="btn btn-primary mt-3">Create</button>
                </div>
            </form>
          
        </div>
      </div>   
@endsection

@section('scripts')
<script>
        $(document).ready(function() {
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
        });
</script>
@endsection

