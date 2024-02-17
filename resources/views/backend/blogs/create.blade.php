@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="#">
@endsection

@section('content')
      <div class="card mb-3 admin-craete">
          <div class="card-header d-flex">
              <i class="fa fa-table"></i>
              <p>Blog Deatils</p>
              <a href="{{ route('admin.blogs.index') }}" class="btn btn-primary ml-auto">Back</a>
          </div>
        <div class="card-body">
            <form method="POST" action="{{route('admin.blogs.store')}}" enctype="multipart/form-data">
                @csrf
               
                <div class="col-lg-12 form-group">
                    <label for="body">Title</label>
                    <input type="text" name="title" class="form-control">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-lg-12 form-group">
                    <label for="body">Description</label>
                    <textarea name="description" class="form-control summernote" ></textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
               
                <div class="col-lg-12 form-group">
                    <label for="body">Slug</label>
                    <input type="text" name="slug" class="form-control">
                    @error('slug')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="col-lg-12 form-group">
                    @php $result = DB::table('blogcat')->get();  @endphp
                    <label for="body">Category</label>
                    <select name="category_id" class="form-control"> 
                        <?php foreach($result as $key => $value){ ?>
                            <option value="<?php echo $value->id;?>"><?php echo $value->title;     ?></option> 
                        <?php } ?>
                    </select>
                    @error('category')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-lg-12 form-group">
                    <label for="body">Image</label>
                    
                    <input id="uploadImage" type="file" name="image" class="form-control">
                    @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <!-- <img id="uploadPreview" style="width: 100px; height: 100px;" /> -->
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

