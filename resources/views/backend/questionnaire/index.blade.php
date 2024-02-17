@extends('layouts.admin')

@section('content')
@can('add-page')
<p><a href="{{ route('admin.questioners.create') }}" class="btn btn-primary">Create A New Question</a></p>
@endcan
<div class="card shadow bg-white ab">
    <table class="table table-hover">
        <thead class="">
            <tr>
                <th>Question Title</th>
                <th>Category</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="">
            @forelse($questions as $ques)
            @php

            $categoryName = App\Models\Category::select('name')->where('id','=',$ques->Quescategory)->first();
           @endphp
            <tr class="">
                <td>{{ $ques->Quesname }}</td>
                <td><a href="{{ route('admin.pages.show',$ques->id ) }}">{{ $categoryName->name }}</a></td>
                <td>@if($ques->status==\App\Models\Questions::STATUS_ACTIVE)
                    Active
                    @else
                    Inactive
                    @endif
                </td>

                @can('edit-page')
                <td><a href="{{ route('admin.questioners.edit',$ques->id) }}"><i class="fa fa-edit"></i></a></td>
                @endcan

                <td>
                    <form method="post" action="{{ route('admin.questioners.destroyAQues',$ques->id) }}"
                        id="page-delete-{{ $ques->id }}">
                        @csrf
                        @method('DELETE')
                        @can('delete-page')
                        <button type="submit" class="btn  btn-danger"
                            onclick="if (confirm('Are You sure to Delete This Page?')) { document.getElementById('page-delete-{{ $ques->id }}').submit(); } else { return false; }">
                            <i class="fa fa-trash "></i>
                        </button>
                        @endcan
                    </form>
                </td>
            </tr>
            <tr>
                @empty
                <td colspan="4" class="text-center">No pages found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection