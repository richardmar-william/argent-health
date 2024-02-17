@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="#">
@endsection

@section('content')
      <div class="card mb-3 admin-craete">
          <div class="card-header d-flex">
              <i class="fa fa-table"></i>
              <a href="{{ route('admin.reviewsnratings.index') }}" class="btn btn-primary ml-auto">Back</a>
          </div>
        <div class="card-body">
            <form method="POST" action="{{route('admin.reviewsnratings.update')}}" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{$review->id}}">
                @csrf
                <div class="col-lg-12 form-group">
                    <label for="body">Name</label>
                    <input type="text" name="name" class="form-control" value="{{$review->name}}">
                    @error('name')<div class="alert alert-danger">{{ $message }}</div>@enderror
                </div>

                <div class="col-lg-12 form-group">
                    <label for="body">Review</label>
                    <textarea name="review" class="form-control summernote" >{{$review->review}}</textarea>
                    @error('review')<div class="alert alert-danger">{{ $message }}</div>@enderror
                </div>
                
                <div class="col-lg-12 form-group">
                <label for="body">Star Ratings</label>
                    <select name="starrating" class="form-control"> 
                        <option selected>{{$review->starrating}}</option>
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
                    <input type="file" name="image" class="form-control" value="{{$review->image}}">
                    <img src="{{ asset('images/') }}{{ '/'. $review->image}}" width="100px">
                    @error('image')<div class="alert alert-danger">{{ $message }}</div>@enderror
                </div>


                <div class="col-lg-12 form-group">
                    <button type="submit" class="btn btn-primary mt-3">Update</button>
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