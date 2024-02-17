@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card shadow-sm mb-4">
            <div class="card-header d-flex py-3">
                <h4 class="m-0 font-weight-bold text-success">Contact us</h4>
            </div>
            <div class="col-11 mr-auto">
                @include('partials.backend.filter', ['model' => route('admin.questionerList.index')])
            </div>
            <div class="table-responsive">
                <table class="table table-content table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User Name</th>
                            <th>Category</th>
                            <th>Created at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($questioners as $key => $questioner)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$questioner->users?$questioner->users->username:'N/A' }}</td>
                                <td>{{$questioner->categories?$questioner->categories->name:'N/A' }}</td>
                                <td>{{$questioner->created_at?$questioner->created_at->format('d-m-Y'):'N/A' }}</td>
                                <td>
                                    <div class="btn-group btn-group-toggle">
                                        <a href="{{ route('admin.questionerList.show', ['userId'=>$questioner->userid, 'catId'=>$questioner->category]) }}" title="Show" class="btn-primary btn btn-sm"><i class="fa fa-eye"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">No List found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                    <tr>
                        <th colspan="5">
                            <div class="float-right">
                            {!!$questioners->links() !!}
                            </div>
                        </th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
