@extends('layouts.admin')

@section('content')
<div class="card shadow bg-white ab">
      <div class="card-header">
         <h3 class="card-title">Page Settings</h3>
      </div>
    <table class="table table-hover">
        <thead class="">
            <tr>
                <th>Page</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="">
            <tr>
               <td>About Us</td>
               <td><a href="{{route('admin.pagesetting.edit_page','about-us')}}" class="btn btn-primary">Edit</a></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection