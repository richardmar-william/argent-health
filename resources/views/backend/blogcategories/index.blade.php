@extends('layouts.admin')

@section('content')
@can('add-page')
<p><a href="{{ route('admin.blogcategories.create') }}" class="btn btn-primary">Create A New FAQ</a></p>
@endcan
<div class="card shadow bg-white ab">
    <table class="table table-hover">
        <thead class="">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="">
            @php
              $blogcat = App\Models\BlogCategory::orderBy('id','desc')->get();
            @endphp
           @foreach($blogcat as $blogcategories)
            <tr class="">
                <td>{{ $blogcategories->id }}</td>
                <td>{{ $blogcategories->title }}</td>
                <td>{{ $blogcategories->slug }}</td>
                <td><a href="{{ route('admin.blogcategories.edit',$blogcategories->id) }}"><i class="fa fa-edit"></i></a></td>
                <td>
                    <a href="{{ route('admin.blogcategories.destroyBlogCatgeory',$blogcategories->id) }}" id="page-delete">
                    <button class="btn  btn-danger"><i class="fa fa-trash "></i></button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection