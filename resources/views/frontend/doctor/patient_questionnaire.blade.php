@extends('layouts.app')
@section('title', 'User Profile')
@section('content')

@php



@endphp


<body class="dashboard-open">
    <section class="user-dashboard dashboard-none py-5 ">
        <div class="container">
            <div class="row">

            @include('partials.frontend.doctor.sidebar')

                <div class="col-lg-12">
                    <div class="dashboard-left-inr">
                    @if(!empty($successMsg))
                      <div class="alert alert-success"> {{ $successMsg }}</div>
                    @endif
                    <div class="card shadow bg-white ab">
                            <table class="table table-hover">
                                <thead class="">
                                    <tr>
                                        <th>Patient Name</th>
                                        <th>Category</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    @php 
                                      $cat = DB::table('categories')->where('id',$temp_data->category_id)->first();
                                    @endphp
                                        <tr>
                                            <td>{{ $user_data->full_name }}</td>
                                            <td>{{ $cat->name }}</td>
                                        </tr>
                                 
                                </tbody>
                            </table>
                        </div>
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
                                        foreach ($question as $item) {
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
                    </div>
                </div>
                   
            </div>
        </div>
    </section>
</body>
@endsection

<script>
// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>