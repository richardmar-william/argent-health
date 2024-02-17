@extends('layouts.admin')

@section('content')
@can('add-page')
<p><a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">Create A New Blog</a></p>
@endcan
<div class="card shadow bg-white ab">
    <table class="table table-hover">
        <thead class="">
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Title</th>
                <th>Description</th>
                <th>Slug</th>
                <th>Category Id</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="">
          @foreach($blog as $blogs)
            <tr class="">
                <td>{{ $blogs->id }}</td>
                <td><img src="{{ asset('images/') }}{{ '/'. $blogs->image}}" width="100px"></td>
                <td>{{ $blogs->title }}</td>
                <td>{{ strip_tags($blogs->description) }}</td>
                <td>{{ $blogs->slug }}</td>
                <td>{{ $blogs->category_id }}</td>
                <td><a href="{{ route('admin.blogs.edit',$blogs->id) }}"><i class="fa fa-edit"></i></a></td>
                <td>
                    <a href="{{ route('admin.blogs.destroy',$blogs->id) }}" id="page-delete">
                    <button class="btn  btn-danger"><i class="fa fa-trash "></i></button></a>
                </td>
            </tr>
           @endforeach
        </tbody>
    </table>
</div>
@endsection