<!-- Add CkEditor -->
<script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>

@extends('layouts.admin')
@section('content') 
<p><a href="#" class="btn btn-primary">About-Us</a></p>
@if(session('success'))
    <p class="alert alert-success success-msg">{{session('success')}}</p>
@endif
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Settings</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.pagesetting.page_list') }}">Page Settings List</a></li>
              <li class="breadcrumb-item active">Submit Your Work Page Settings</li>              
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        
        

        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Admin Email Section -->
                <div class="card-body diff-section">
                  <!-- section1 -->
                  <div class="form-group"> 
                   <h4 class="card-header">Section1</h4> 
                    <div class="form-group">
                      <label for="section1_title3">Section1 Title</label>
                        <input type="text" name="section1_title" class="form-control" id="section1_title" placeholder="Enter title" value="{{ GetMetaData('section1_title',$page_type) }}">
                      </div> 
                      <label for="content">Section1 Content</label>
                      <textarea class="form-control summernote" placeholder="Enter content" rows="4" name="section1_content" id="section1_content">{{ GetMetaData('section1_content',$page_type) }}</textarea>
                  </div>
                  <div class="form-group">  
                      <label for="section1_button_text">Section1 Button Text</label>
                      <input type="text" name="section1_button_text" class="form-control" id="section1_button_text" placeholder="Enter button text" value="{{ GetMetaData('section1_button_text',$page_type) }}">
                    
                      <label for="section1_button_url">Section1 Button URL</label>
                      <input type="text" class="form-control" placeholder="Enter URL" rows="4" name="section1_button_url" id="section1_button_url" value="{{ GetMetaData('section1_button_url',$page_type) }}">
                  </div>
                  <div class="form-group">
                    <label>Section1 Image</label>
                  <div class="choose-input-wrapper">
                    <img src="{{ asset('storage/'.GetMetaData('section1_image',$page_type)) }}" id="section1_image_src" style="width: 100px; height: 100px;"/>
                      <div class="input-group">
                        <div class="custom-file" style="overflow: hidden;">                        
                          <input type="file" class="custom-file-input11" name="section1_image" id="section1_image" onchange="ValidateFile(this,['.jpg', '.jpeg', '.png'],'image_src');">
                          <input type="hidden" name="old_image" value="{{ GetMetaData('section1_image',$page_type) }}">
                          <label class="custom-file-label" for="section1_image">Choose file</label>
                        </div>                   
                      </div>
                    </div>
                  </div>

                 <!-- section2 -->
                  <div class="form-group"> 
                  <h4 class="card-header">Section2</h4> 
                    <div class="form-group">
                      <label for="section2_title">Section2 Title</label>
                      <input type="text" name="section2_title" class="form-control" id="section2_title" placeholder="Enter title" value="{{ GetMetaData('section2_title',$page_type) }}">
                     </div> 
                    <label for="content">Section2 Content</label>
                    <textarea class="form-control summernote" placeholder="Enter content" rows="4" name="section2_content" id="section2_content">{{ GetMetaData('section2_content',$page_type) }}</textarea>
                  </div>
                  <div class="form-group">
                    <label>Section2 Image</label>
                  <div class="choose-input-wrapper">
                    <img src="{{ asset('storage/'.GetMetaData('section2_image',$page_type)) }}" id="section2_image_src" style="width: 100px; height: 100px;"/>
                      <div class="input-group">
                        <div class="custom-file" style="overflow: hidden;">                        
                          <input type="file" class="custom-file-input11" name="section2_image" id="section2_image" onchange="ValidateFile(this,['.jpg', '.jpeg', '.png'],'image_src');">
                          <input type="hidden" name="old_image" value="{{ GetMetaData('section2_image',$page_type) }}">
                          <label class="custom-file-label" for="section2_image">Choose file</label>
                        </div>                   
                      </div>
                    </div>
                  </div>
                   <!-- section3 -->
                  <div class="form-group"> 
                  <h4 class="card-header">Section3</h4> 
                  <div class="form-group">
                      <label for="section3_title">Section3 Title</label>
                      <input type="text" name="section3_title" class="form-control" id="section3_title" placeholder="Enter title" value="{{ GetMetaData('section3_title',$page_type) }}">
                     </div> 
                    <label for="content">Section3 Content</label>
                    <textarea class="form-control summernote" placeholder="Enter content" rows="4" name="section3_content" id="section3_content">{{ GetMetaData('section3_content',$page_type) }}</textarea>
                  </div>
                  <div class="form-group">
                    <label>Section3 Image</label>
                  <div class="choose-input-wrapper">
                    <img src="{{ asset('storage/'.GetMetaData('section3_image',$page_type)) }}" id="section3_image_src" style="width: 100px; height: 100px;"/>
                      <div class="input-group">
                        <div class="custom-file" style="overflow: hidden;">                        
                          <input type="file" class="custom-file-input11" name="section3_image" id="section3_image" onchange="ValidateFile(this,['.jpg', '.jpeg', '.png'],'image_src');">
                          <input type="hidden" name="old_image" value="{{ GetMetaData('section3_image',$page_type) }}">
                          <label class="custom-file-label" for="section3_image">Choose file</label>
                        </div>                   
                      </div>
                    </div>
                  </div>

                  <!-- section4 -->
                  <div class="form-group">
                  <h4 class="card-header">Section4</h4>
                    <label for="Section4 Title">Section4 Title</label>
                    <input type="text" name="section4_title" class="form-control" id="section4_title" placeholder="Enter title" value="{{ GetMetaData('section4_title',$page_type) }}">
                  <div class="form-group">  
                    <label for="Section4 heading">Section4 heading1</label>
                    <input type="text" class="form-control" placeholder="Enter content" rows="4" name="section4_heading1" id="section4_heading1" value="{{ GetMetaData('section4_heading1',$page_type) }}">
                  </div>
                  <div class="form-group">  
                    <label for="Section4 Content1">Section4 Content1</label>
                    <textarea class="form-control summernote" placeholder="Enter content" rows="4" name="section4_content1" id="section4_content1">{{ GetMetaData('section4_content1',$page_type) }}</textarea>
                  </div>
                  <div class="form-group">  
                    <label for="Section4 heading2">Section4 heading2</label>
                    <input type="text" class="form-control" placeholder="Enter content" rows="4" name="section4_heading2" id="section4_heading1" value="{{ GetMetaData('section4_heading2',$page_type) }}">
                  </div>
                  <div class="form-group">  
                    <label for="section4_content2">Section4 Content2</label>
                    <textarea class="form-control summernote" placeholder="Enter content" rows="4" name="section4_content2" id="section4_content2">{{ GetMetaData('section4_content2',$page_type) }}</textarea>
                  </div> 
                  <div class="form-group">
                      <label for="section4_button_text">Section4 Button Text</label>
                      <input type="text" name="section4_button_text" class="form-control" id="section4_button_text" placeholder="Enter button text" value="{{ GetMetaData('section4_button_text',$page_type) }}">
                    
                      <label for="section4_button_url">Section4 Button URL</label>
                      <input type="text" class="form-control" placeholder="Enter URL" rows="4" name="section4_button_url" id="section1_button_url" value="{{ GetMetaData('section4_button_url',$page_type) }}">
                  </div> 
                  
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div><!-- /.content-wrapper-->
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