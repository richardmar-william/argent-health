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
                                    <th colspan="5" class="text-start">Profile Details</th>
                                </tr>    
                            </thead>
                                <tbody class="">
                                    @foreach($user_details as $detail)  
                                
                                  
                                        <tr class="" >
                                          
                                        <td class="fw-bold">Name: </td><td>{{$detail->full_name}}</td>
                                         </tr>
                                        <tr class="" >
                                          
                                        <td class="fw-bold">Username: </td><td>{{$detail->username}}</td>
                                         </tr>
                                        <tr class="" >
                                          
                                        <td class="fw-bold">Email: </td><td>{{$detail->email}}</td>
                                         </tr>
                                        <tr class="" >
                                          
                                        <td class="fw-bold">Phone: </td><td>{{$detail->phone}}</td>
                                         </tr>
                                        <tr class="" >
                                          
                                        <td class="fw-bold">Status: </td><td>{{ $detail->status}}</td>
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