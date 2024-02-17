@extends('layouts.app')
@section('title', 'Questionnaire')
@section('content')
<div class="breadcrumb-area comon-padding" style="background-color: #09c6a2">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>Questionnaire</h2>
        </div>
    </div>
</div>
<div class="abort-sec mt-5 mb-5">
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <thead class="bg-light">
                    <tr>
                        <th class="border-0" scope="col"><strong class="text-small text-uppercase">Question </strong>
                        </th>
                        <th class="border-0" scope="col"><strong class="text-small text-uppercase">Answer</strong></th>
                        <th class="border-0" scope="col"><strong class="text-small text-uppercase">Details</strong></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($quesAns as $ques)
                    <tr>
                        <td>{{ $ques->question }}</td>
                        <td>{{ $ques->answer }}</td>
                        <td>{{ $ques->details }}</td>
                    </tr>
                    @empty
                    @endforelse
            </table>
        </div>
    </div>
</div>
@endsection