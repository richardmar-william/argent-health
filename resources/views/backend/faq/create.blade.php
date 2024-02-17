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
            <form method="POST" action="{{route('admin.faq.store')}}">
                @csrf
               
                <div class="col-lg-12 form-group">
                    <label for="body">Question</label>
                    <textarea name="question" class="form-control summernote"></textarea>
                    @error('content')<span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="col-lg-12 form-group">
                    <label for="body">Answer</label>
                    <textarea name="answer" class="form-control summernote"></textarea>
                    @error('content')<span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <div class="col-lg-12 form-group">
                    <button type="submit" class="btn btn-primary mt-3">Create</button>
                </div>
            </form>
          
        </div>
      </div>
@endsection

@section('script')
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
