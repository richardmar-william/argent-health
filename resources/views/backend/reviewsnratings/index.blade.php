@extends('layouts.admin')

@section('content')
@can('add-page')
<p><a href="{{ route('admin.reviewsnratings.create') }}" class="btn btn-primary">Create A New Rating and Review</a></p>
@endcan
<div class="card shadow bg-white ab">
    <table class="table table-hover">
        <thead class="">
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Name</th>
                <th>Review</th>
                <th>Star Rating</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="">
         @foreach ($review as $reviews)
            <tr class="">
                <td>{{$reviews->id}}</td>
                <td><img src="{{ asset('images/') }}{{ '/'. $reviews->image}}" width="100px"></td>
                <td>{{$reviews->name}}</td>
                <td>{{$reviews->review}}</td>
                <td>{{$reviews->starrating}}</td>
                <td><a href="{{ route('admin.reviewsnratings.edit',$reviews->id) }}"><i class="fa fa-edit"></i></a></td>
                <td>
                    <a href="{{ route('admin.reviewsnratings.destroy',$reviews->id) }}" id="page-delete">
                    <button class="btn  btn-danger"><i class="fa fa-trash "></i></button></a>
                </td>
            </tr>
          @endforeach
        </tbody>
    </table>
</div>
@endsection