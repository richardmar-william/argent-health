@extends('layouts.admin')

@section('content')
@can('add-page')
<!-- <p><a href="{{ route('admin.reviewsnratings.create') }}" class="btn btn-primary">Create A New Rating and Review</a></p> -->
@endcan
<div class="card shadow bg-white ab">
                            <table class="table table-hover">
                                <thead class="">
                                    <tr>
                                        <th>Question</th>
                                        <th>Answer</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    @php
                                        foreach (json_decode($data->jason_data, true) as $item) {
                                    @endphp      
                                        <tr>
                                            <td>{{ $item['ques'] }}</td>
                                            <td>{{ $item['answer'] }}</td>
                                        </tr>
                                    @php
                                     }
                                    @endphp
                                </tbody>
                            </table>
                        </div>
@endsection