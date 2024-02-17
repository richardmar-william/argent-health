@extends('layouts.admin')

@section('content')
@can('add-page')
<p><a href="#" class="btn btn-primary">Patient History</a></p>
@endcan
<div class="card shadow bg-white ab">
    @if(!empty($successMsg))
    <div class="alert alert-success"> {{ $successMsg }}</div>
    @endif
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
        @foreach($quationnair as $quationnairs)
        <tr class="">
            <!-- <td>{{$quationnairs->id}}</td> -->
            <td>{{ucfirst($quationnairs->users->username)}}</td>
            <td>{{$quationnairs->categories->name}}</td>
            <td>{{$quationnairs->created_at->format('m/d/Y')}}</td>
            <td>
                <a href="{{ asset('pdf/'.$quationnairs->epdf) }}" target="_blank"><i class="fas fa-file"></i></a>
            </td>
            <td>
                <a href="#" target="_blank">Proceed</i></a>
            </td>
            <!-- <div class="popup" onclick="myFunction()"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                    <span class="popuptext" id="myPopup">@if(!empty($quationnairs->epdf))
                    <embed src="{{ asset('pdf/') }}{{ '/'. $quationnairs->epdf}}"
                        type="application/pdf" frameBorder="0" scrolling="auto" height="800%" width="400%">
                    </embed>
                    @endif</span>
                </div>     -->
            </td>
            <!-- <td><a href="{{ route('doctor.patient_patient_detail', ['id' => $quationnairs->userid, 'catid' => $quationnairs->category, 'session_id' => $quationnairs->session_id]) }}" id="page-delete">
                    <button class="btn  btn-primary">Show Detail</button></a></td> -->
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection