@extends('layouts.app')
@section('title', 'User Profile')
@section('content')
<style>
/* Popup container - can be anything you want */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -169px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
.page-link {
    color: #242423;
}
.page-item.active .page-link{
    background-color: #242423;
    border-color: #242423;
}
</style>
<body class="dashboard-open">
    <!-- <section class="breadcrumb-area comon-padding" style="background-color: #09c6a2">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>Dashboard</h2>
                <ul>
                    <li><a href="{{ route('home') }}">home</a></li>
                    <li> Patient History</li>
                </ul>
            </div>
        </div>
    </section> -->
    <section class="user-dashboard dashboard-none py-5 ">
        <div class="container">
            <div class="row">

            @include('partials.frontend.doctor.sidebar')

                <div class="col-lg-12">
                    <div class="dashboard-left-inr">
                    @if(!empty($successMsg))
                      <div class="alert alert-success"> {{ $successMsg }}</div>
                    @endif
                        <div class="card shadow bg-white ab">
                            <table class="table table-hover">
                                <thead class="">
                                    <tr>
                                        <!-- <th>Id</th> -->
                                        <th>Ref_id</th>
                                        <th>User</th>
                                        <th>Amount</th>
                                        <th>Subscription Duration</th>
                                        <th>PDF Status</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                      
                                        <!-- <th>Action</th> -->
                                    </tr>
                                </thead>
                                <tbody class="">
                                    @foreach($order_data as $data)  
                                
                                     @php $user_name = DB::table('users')->where('id',$data->user_id)->first();
                                        $category_id = DB::table('temp')->where('user_id',$data->user_id)->where('session_id',$data->session_id)->first();
                                        if(!isset($category_id)){
                                            continue;
                                        }
                                        if(isset($category_id)){
                                        $category = DB::table('categories')->where('id',$category_id->category_id)->first(); 
                                        }
                                     @endphp  
                                    <tr class="" >
                                    
                                            <td>{{$data->ref_id}}</td>
                                            <td>{{$user_name->full_name}}</td>
                                            <td>{{$data->total}}</td>
                                            <td>{{($data->subscription == 1)? $data->subscription.' Month': $data->subscription.' Months'}}</td>
                                          
                                            <td>  @if(isset($category_id->epdf) && !empty($category_id->epdf))
                                            <a href="{{ asset('pdf/'.$category_id->epdf) }}" class="fs-3" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
                            @else
                            PDF Not Generated
                            @endif
                           </td>
                                            <td>{{ $category->name??''}}</td>
                                          
                                            
                                           
                                            
                                            <td>
                                                @if(isset($category_id))
                                                <a href="{{ route('doctor.patient.questionnaire', ['id' => $data->user_id, 'catid' => $category_id->category_id, 'session_id' => $category_id->session_id] ) }}" id="quest_page">
                                                    <button class="btn  btn-primary">Show Questionnaire</button></a>
                                                   
                                                    @endif
                                                 
                                                </td>
                                          
                                            </div>    
                                            <!-- <div class="popup" onclick="myFunction()"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                             <span class="popuptext" id="myPopup">@if(!empty($quationnairs->epdf))
                                                <embed src="{{ asset('pdf/') }}{{ '/'. $quationnairs->epdf}}"
                                                    type="application/pdf" frameBorder="0" scrolling="auto" height="800%" width="400%">
                                                </embed>
                                                @endif</span>
                                            </div>     -->
                                            
                                            
                                            
                                          
                                        </tr> 
                                    @endforeach
                                </tbody>
                                <tfoot>
                <tr>
                    <td colspan="10">
                        <div class="float-right">
                            {!! $order_data->appends(request()->all())->links() !!}
                        </div>
                    </td>
                </tr>
                </tfoot>
                            </table>
                            
                        </div>
                    </div>
                </div>
                   
            </div>
        </div>
    </section>
</body>
@endsection

<script>
// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>