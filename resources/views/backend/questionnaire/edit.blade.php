@extends('layouts.admin')

@section('content')

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 font-weight-bold text-primary">
                Edit : {{ $questions->Quesname }}
            </h6>
            <div class="ml-auto">
                <a href="{{ route('admin.questioners.index') }}" class="btn btn-primary">
                    <span class="icon text-white-50">
                        <i class="fa fa-home"></i>
                    </span>
                    <span class="text">Back to Questions</span>
                </a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.questioners.updateaQuestion', $questions) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="title">Question Title</label>
                            <input class="form-control" id="title" type="text" name="Quesname" value="{{ old('title', $questions->Quesname) }}"
                                   placeholder="ex. Categories">
                            @error('title')<span class="text-danger">{{ $message }}</span>@enderror
                            <input type="hidden" name="id" value="{{ $questions->id }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="">---</option>
                                <option value="1" {{ $questions->status == "1" ? 'selected' : null }}>Active</option>
                                <option value="0" {{ $questions->status == "0" ? 'selected' : null }}>Inactive</option>
                            </select>
                            @error('status')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="form-group">
                            <label for="status">QuestionCategory</label>
                            <select name="Quescategory" id="category" class="form-control">
                            @php
                                <option value="">---</option>

                                @foreach($mainCategories as $cat)
                                <option value="{{ $cat->id }}" @if( $cat->id == $questions->Quescategory) selected @else '' @endif>{{ $cat->name }}</option>
                                @endforeach
                           
                            </select>
                            @error('status')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    
                </div>
                <div id="options" class="row col-12">
                @foreach($questions->options as $key=>$opt)
                
                    <div class="col-4">
                        <div class="form-group">
                            <label for="title">Option{{$key+1}}</label>
                            <input class="form-control" type="text" name="Option[]" value="{{$opt['option']}}" placeholder="ex. Below 18" readonly>
                            @error('options')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                     <div class="col-6">
                        <div class="form-group">
                              <label for="title">Description</label>
                            <input class="form-control" type="text" name="description" value="{{$opt['description']}}" placeholder=" description" readonly>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                              <label for="title">is_correct</label>
                            <input class="form-control" type="checkbox" name="is_correct" {{($opt['is_correct']==1)?'checked':''}} readonly>
                        </div>
                    </div>
                
                @endforeach
                </div>
                <div><button type="button" name="add" id="add" class="btn btn-success ">Add More</button></div>
                <div class="form-group pt-4">
                    <button class="btn btn-primary" type="submit" name="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('scriptcontent')
<script>
     var i="{{$key}}";  
      $('#add').click(function(){  
           i++;  
           $('#options').append('<div class="col-6" id="opt'+i+'"><div class="form-group"><label for="title">Option '+(+i+1)+' </label><input class="form-control" type="text" name="Option[]" value="" placeholder="ex. Below 18 "></div></div> <div class="col-6" id="desc'+i+'"><div class="form-group"><label for="title">Description</label><input class="form-control" type="text" name="description'+i+'" placeholder=" description "></div></div><div class="col-2" id="crt'+i+'"><div class="form-group"><label for="title">is_correct</label><input class="form-control" type="checkbox" name="is_correct'+i+'" value="1" "></div></div><div class="col-2" id="rmv'+i+'"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></div>');  
      });  


      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#opt'+button_id+'').remove();
           $('#desc'+button_id+'').remove(); 
           $('#crt'+button_id+'').remove(); 
           i--;  
           $(this).hide();
      });  

    </script>
@endsection