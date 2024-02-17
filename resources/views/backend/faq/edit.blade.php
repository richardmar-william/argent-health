@extends('layouts.admin')

@section('style')
    <link rel="stylesheet" href="#">
@endsection

@section('content')
      <div class="card mb-3 admin-craete">
          <div class="card-header d-flex">
              <i class="fa fa-table"></i>
              <a href="{{ route('admin.faq.index') }}" class="btn btn-primary ml-auto">Back</a>
          </div>
        <div class="card-body">
            <form method="POST" action="{{route('admin.faq.updateafaq')}}">
                <input type="hidden" name="id" value="{{$faq->id}}">
                @csrf
                @method('PATCH')
                <div class="col-lg-12 form-group">
                    <label for="body">Question</label>
                    <textarea name="question" class="form-control summernote">{{$faq->question}}</textarea>
                    @error('content')<span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="col-lg-12 form-group">
                    <label for="body">Answer</label>
                    <textarea name="answer" class="form-control summernote">{{ $faq->answer }}</textarea>
                    @error('content')<span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="col-lg-12 form-group">
                    <button type="submit" class="btn btn-primary mt-3">Update</button>
                </div>
            </form>
          
        </div>
      </div>
@endsection

