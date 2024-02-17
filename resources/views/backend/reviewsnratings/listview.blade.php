@extends('layouts.admin')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex">
            <h6 class="m-0 text-primary">
               UserName <p class="font-weight-bold">{{$username}}</p>
            </h6>
             <h6 class="text-primary" style="margin-left:20px;margin-top:8px;">
              Category <p class="font-weight-bold">{{$category}}</p>   
            </h6>
            <div class="ml-auto">
                <a href="{{ route('admin.questionerList.index') }}" class="btn btn-primary">
                    <span class="text">Back to Questioner Listing</span>
                </a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                   <!--  <th>User Name</th>
                    <th>Category</th> -->
                    <th>Question</th>
                    <th>Answer</th>
                    <th>Detail</th>
                    <th>Created at</th>
                    
                </tr>
                </thead>
                <tbody>

                 @forelse($questioners as $key=>$questioner)
                    <tr>
                        <td>{{$key+1}}</td>
                       <!--  <td>{{ $questioner->users?$questioner->users->username:'N/A' }}</td>
                        <td>{{ $questioner->categories?$questioner->categories->name:'N/A' }}</td>-->
                        <td>{{ $questioner->question }}</td>
                        <td>{{ $questioner->answer }}</td>
                        <td>{{ $questioner->detail }}</td>
                        <td>{{ $questioner->created_at?$questioner->created_at->format('d-m-Y'):'N/A' }}</td>
                     </tr>
                         @empty
                            <tr>
                                <td colspan="5" class="text-center">Nothing found.</td>
                            </tr>
                        @endforelse
                </tbody>
                
            </table>
        </div>
    </div>
@endsection
