@extends('layouts.admin')


@section('content')
@can('add-page')
<p><a href="#" class="btn btn-d-black patient-history">Patient History</a></p>
@endcan
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
	* {
		font-family: Poppins;
	}
	.patient-history {
		width: 100%;
		background-color: #000;
		color: white;
	}
	.question {
		font-size: 16px;
		font-family: Poppins;
	}
	.answer {
		font-size: 14px;
		font-family: Poppins;
		color: darkblue;
		font-weight: bold;
	}
</style>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-bs-toggle="tab" href="#home">Patient history</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="tab" href="#menu1">Email grabber</a>
  </li>
</ul>
<!-- Tab panes -->
<div class="tab-content" style=" padding: 20px;">
  <div class="tab-pane container active" id="home">
    <div class="card shadow bg-white ab">
        @if(!empty($successMsg))
        <div class="alert alert-success"> {{ $successMsg }}</div>
        @endif
        <table class="table table-hover">
            <thead class="">
                <tr>
                    <!-- <th>Id</th> -->
                    <th>Patient_name</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>PDF Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach($quationnair as $quationnairs)
            <tr class="">
                <!-- <td>{{$quationnairs->id}}</td> -->
                <td>{{ucfirst($quationnairs->users->username)}}</td>
                <td>{{$quationnairs->categories->name}}</td>
                <td>{{$quationnairs->created_at->format('m/d/Y')}}</td>
                <td>
                    <a href="{{ asset('pdf/'.$quationnairs->epdf) }}" target="_blank"><i class="fas fa-file"></i></a>
                </td>
                <td>
                    <a href="#" target="_blank">Proceed</i></a>
                </td>
                <!-- <div class="popup" onclick="myFunction()"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                        <span class="popuptext" id="myPopup">@if(!empty($quationnairs->epdf))
                        <embed src="{{ asset('pdf/') }}{{ '/'. $quationnairs->epdf}}"
                            type="application/pdf" frameBorder="0" scrolling="auto" height="800%" width="400%">
                        </embed>
                        @endif</span>
                    </div>     -->
                </td>
                <!-- <td><a href="{{ route('doctor.patient_patient_detail', ['id' => $quationnairs->userid, 'catid' => $quationnairs->category, 'session_id' => $quationnairs->session_id]) }}" id="page-delete">
                        <button class="btn  btn-primary">Show Detail</button></a></td> -->
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
  </div>
  <div class="tab-pane container fade" id="menu1">
        <div class="card shadow bg-white ab">
        @if(!empty($successMsg))
        <div class="alert alert-success"> {{ $successMsg }}</div>
        @endif
        <table class="table table-hover">
            <thead class="">
                <tr>
                    <!-- <th>Id</th> -->
                    <th style="width: 15%;">Email Address</th>
                    <th style="width: 10%;">Category</th>
                    <th style="width: 15%;">Date</th>
                    <th>Questions</th>
                    <th style="width: 15%;">Product</th>
                </tr>
            </thead>
            @foreach($emails as $ekey => $email)
						@php
						$category = \App\Models\Category::where("id",$email->category_id)->get()->first();
						if(empty($category)) $categoryName = "";
						else $categoryName = $category->name;

						$product = \App\Models\Product::where("id",$email->product_ids)->get()->first();
						if(empty($product)) $productName = "";
						else $productName = $product->name;

						$parsedQuesArr = json_decode($email->jason_data);
						
						@endphp
            <tr class="">
                <!-- <td>{{$quationnairs->id}}</td> -->
                <td><a href='mailto:{{$email->email}}'>{{$email->email}}</td>
                <td>{{$categoryName}}</td>
                <td>{{$email->updated_at}}</td>
                <td>
									
									@if(sizeof($parsedQuesArr) == 0)
										No questionnaire
									@else
									<div id="accordion">
										<div class="card">
											<div class="card-header">
												<a class="btn" data-bs-toggle="collapse" href="#collapse_{{$ekey}}">
													Click to show
												</a>
											</div>
											<div id="collapse_{{$ekey}}" class="collapse" data-bs-parent="#accordion">
												<ul>
													@foreach($parsedQuesArr as $ques) 
														<li>
															<div class="question">Question: <?php echo $ques->ques;?></div>
															<div class="answer">Answer: <?php echo $ques->answer;?></div>
														</li>
													@endforeach
												</ul>
												
											</div>
										</div>
									</div>		
									@endif
								</td>
                <td>{{$productName}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

	</div>
</div>
@endsection