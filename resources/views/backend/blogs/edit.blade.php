@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="#">
@endsection

@section('content')
      <div class="card mb-3 admin-craete">
          <div class="card-header d-flex">
              <i class="fa fa-table"></i>
              <a href="{{ route('admin.blogs.index') }}" class="btn btn-primary ml-auto">Back</a>
          </div>
        <div class="card-body">
            <form method="POST" action="{{route('admin.blogs.update')}}" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{$blog->id}}">
                @csrf
                @method('PATCH')
                <div class="col-lg-12 form-group">
                    <label for="body">Title</label>
                    <input type="text" name="title" class="form-control" value="{{$blog->title}}">
                    @error('title')<div class="alert alert-danger">{{ $message }}</div>@enderror
                </div>

                <div class="col-lg-12 form-group">
                    <label for="body">Description</label>
                    <textarea name="description" class="form-control summernote" >{{$blog->description}}</textarea>
                    @error('description')<div class="alert alert-danger">{{ $message }}</div>@enderror
                </div>

                <div class="col-lg-12 form-group">
                    <label for="body">Slug</label>
                    <input type="text" name="slug" class="form-control" value="{{$blog->slug}}">
                    @error('slug')<div class="alert alert-danger">{{ $message }}</div>@enderror
                </div>
                
                <div class="col-lg-12 form-group">
                    @php $result = DB::table('blogcat')->get();  @endphp
                    <label for="body">Category</label>
                    <select name="category_id" class="form-control"> 
                        <?php foreach($result as $key => $value){ ?>
                            <option value="{{$value->id}}" @if($blog->category_id == $value->id)selected @endif><?php echo $value->title;?></option> 
                        <?php } ?>
                    </select>
                    @error('category')<div class="alert alert-danger">{{ $message }}</div>@enderror
                </div>

                <div class="col-lg-12 form-group">
                    <label for="body">Image</label>
                    <input type="file" name="image" class="form-control" value="{{ $blog->image }}">
                    <input type="hidden" name="image1" class="form-control" value="{{ $blog->image }}">
                    <img src="{{ asset('images/') }}{{ '/'. $blog->image}}" width="100px">
                    @error('content')<span class="text-danger">{{ $message }}</span>@enderror
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