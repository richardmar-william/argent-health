@extends('layouts.admin')

@section('content')
@can('add-page')
<!-- <p><a href="#" class="btn btn-primary">Send A reminder</a></p> -->

@endcan
<div class="card shadow bg-white ab">
    <div class="card-header py-3 d-flex">
        <h6 class="m-0 font-weight-bold text-primary">
            Send A reminder
        </h6>
        <div class="ml-auto"></div>
    </div>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
    <table class="table table-hover">
        <thead class="">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="">
          @foreach($patient as $patients)
            <tr class="">
                <td>{{ $patients->id }}</td>
                <td>{{ $patients->username }}</td>
                <td>
                  <a class="badge badge-success" href="{{ route('admin.send_notification',$patients->id) }}">Send Reminder</a>
                </td>
            </tr>
           @endforeach 
        </tbody>
    </table>
</div>
@endsection