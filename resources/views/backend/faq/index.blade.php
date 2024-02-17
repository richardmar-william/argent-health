@extends('layouts.admin')

@section('content')
@can('add-page')
<p><a href="{{ route('admin.faq.create') }}" class="btn btn-primary">Create A New FAQ</a></p>
@endcan
<div class="card shadow bg-white ab">
    <table class="table table-hover">
        <thead class="">
            <tr>
                <th>Id</th>
                <th>Question</th>
                <th>Answer</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="">
            @php
              $faqlist = App\Models\Faq::orderBy('id','desc')->get();
            @endphp
           @foreach($faqlist as $faqs)
            <tr class="">
                <td>{{$faqs->id}}</td>
                <td>{{$faqs->question}}</td>
                <td>{{$faqs->answer}}</td>
                <td><a href="{{ route('admin.faq.edit',$faqs->id) }}"><i class="fa fa-edit"></i></a></td>
                <td>
                    <a href="{{ route('admin.faq.destroyfaq',$faqs->id) }}" id="page-delete">
                    <button class="btn  btn-danger"><i class="fa fa-trash "></i></button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection