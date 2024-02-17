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
                                        <th>Patient_name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                       
                                        <th>Action</th>
                                      
                                        <!-- <th>Action</th> -->
                                    </tr>
                                </thead>
                                <tbody class="">
                                    @foreach($quationnair as $quationnairs)  
                                
                                     @php $user_name = DB::table('users')->where('id',$quationnairs->user_id)->first();
                                        
                                        $category = DB::table('categories')->where('id',$quationnairs->category_id)->first(); 
                                     @endphp  
                                    <tr class="" >
                                            <!-- <td>{{$quationnairs->id}}</td> -->
                                            <td><a href="{{ route('doctor.patient_profile',$quationnairs->user_id) }}">{{$user_name->full_name}}</a></td>
                                            <td>{{$user_name->email}}</td>
                                            <td>{{$user_name->phone}}</td>
                                            <td>{{ ($user_name->status == 1) ?'Active':'Inactive'}}</td>
                                          
                                            
                                           
                                          
                                            <td>
                                                <!-- <a href="{{ route('doctor.patient.questionnaire', ['id' => $quationnairs->userid, 'catid' => $quationnairs->category, 'session_id' => $quationnairs->session_id] ) }}" id="quest_page">
                                                    <button class="btn  btn-primary">Show Questionnaire</button></a> -->
                                                <a href="{{ route('doctor.patient.all-orders', ['id' => $quationnairs->user_id] ) }}" >
                                                    <button class="btn  btn-primary">Show Order</button></a>
                                                </td>
                                            
                                            	<!-- <a href="{{ asset('pdf/'.$quationnairs->epdf) }}" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></a> -->
                                            <!-- </div>     -->
                                            <!-- <div class="popup" onclick="myFunction()"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                             <span class="popuptext" id="myPopup">@if(!empty($quationnairs->epdf))
                                                <embed src="{{ asset('pdf/') }}{{ '/'. $quationnairs->epdf}}"
                                                    type="application/pdf" frameBorder="0" scrolling="auto" height="800%" width="400%">
                                                </embed>
                                                @endif</span>
                                            </div>     -->
                                            
                                            
                                            
                                            
                                            <!-- <td><a href="{{ route('doctor.patient_patient_detail', ['id' => $quationnairs->userid, 'catid' => $quationnairs->category, 'session_id' => $quationnairs->session_id]) }}" id="page-delete">
                                                <button class="btn  btn-primary">Show Detail</button></a></td> -->
                                        </tr> 
                                    @endforeach
                                </tbody>
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