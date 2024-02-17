@extends('layouts.app')
@section('title', 'User Profile')
@section('content')
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
                       
                        <div class="card shadow bg-white ab">
                            <table class="table table-hover">
                                <thead class="">
                                    <tr>
                                        <!-- <th>Id</th> -->
                                        <th>Patient_name</th>
                                        <th>Category</th>
                                        <th>Date</th>
                                        <th>PDF Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    @foreach($quationnair as $quationnairs)    
                                    <tr class="">
                                            <!-- <td>{{$quationnairs->id}}</td> -->
                                            <td>{{$quationnairs->users->username}}</td>
                                            <td>{{$quationnairs->categories->name}}</td>
                                            <td>{{$quationnairs->created_at->format('m/d/Y')}}</td>
                                            <td>@if(!empty($quationnairs->signature))
                                                    <p>PDF Signed</p>
                                                @elseif(empty($quationnairs->signature))
                                                    <p>PDF not Signed</p>
                                                @endif
                                            </td>
                                            <td><a href="{{ route('doctor.patient_patient_detail', ['id' => $quationnairs->userid, 'catid' => $quationnairs->category, 'session_id' => $quationnairs->session_id]) }}" id="page-delete">
                                                <button class="btn  btn-primary">Show Detail</button></a></td>
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
