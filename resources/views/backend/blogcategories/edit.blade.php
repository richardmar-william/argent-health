@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="#">
@endsection

@section('content')
      <div class="card mb-3 admin-craete">
          <div class="card-header d-flex">
              <i class="fa fa-table"></i>
              <a href="{{ route('admin.blogcategories.index') }}" class="btn btn-primary ml-auto">Back</a>
          </div>
        <div class="card-body">
            <form method="POST" action="{{route('admin.blogcategories.updateBlogCatgeory')}}">
                <input type="hidden" name="id" value="{{$blogcat->id}}">
                @csrf
                @method('PATCH')
                <div class="col-lg-12 form-group">
                    <label for="body">Title</label>
                    <textarea name="title" class="form-control summernote">{{$blogcat->title}}</textarea>
                    @error('content')<span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="col-lg-12 form-group">
                    <label for="body">Slug</label>
                    <textarea name="slug" class="form-control summernote">{{ $blogcat->slug }}</textarea>
                    @error('content')<span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="col-lg-12 form-group">
                    <button type="submit" class="btn btn-primary mt-3">Update</button>
                </div>
            </form>
          
        </div>
      </div>
@endsection

