  @extends('layouts.app')

  @section('content')

  <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css"> -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>

  <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">

  <style>
    .kbw-signature {
      width: 100%;
      height: 200px;
    }

    .signature-img .sig_image {
      max-width: 100%;
      max-height: 100%;
    }

    #sig canvas {
      width: 100% !important;
      height: auto;
    }

    .navbar-brand-mob {
      display: none;
    }

    .patient-details-page .container {
      background-color: #ffffff;
      padding: 25px !important;
    }

    .patiet-detail-clas {
      margin-bottom: 30px;
    }

    .sign-btns-main {
      display: flex;
      align-items: center;
      gap: 15px;
      justify-content: center;
    }
  </style>

  <body class="dashboard-open">
    <section class="user-dashboard patient-details-page">
      <div class="container" style="max-width: 1100px;">
        @include('partials.frontend.doctor.sidebar')
        <div class="patient-details-pdf">
        @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
          <!-- Header -->
          <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#e1e1e1">
            <!-- <tr>
              <td height="20"></td>
            </tr> -->
            <tr>
              <td>
                <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff" style="border-radius: 10px 10px 0 0;">
                  <!-- <tr class="hiddenMobile">
                    <td height="20"></td>
                  </tr> -->
                  <tr>
                    <td>
                      <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding patiet-detail-clas">
                        <tbody>
                          <tr>
                            <td>
                              <table width="100%  " border="0" cellpadding="0" cellspacing="0" align="left" class="col">
                                <tbody>
                                  <tr>
                                    <td align="left">
                                      <img src="{{ url('/frontend_new/images/quest-logo.png') }}" width="20%" height="20%" alt="logo" border="0" />

                                    </td>
                                    <td style=" font-size: 32px; font-weight: 600; text-align:center; ">
                                      Private Prescription
                                    </td>
                                  </tr>
                                  <tr class="visibleMobile">
                                    <td height="10" style="border-bottom: 1px solid black;" colspan="2"></td>
                                  </tr>
                                  <tr>
                                    <td style="font-size: 21px; padding-top:20px; font-weight: 700; text-transform: uppercase; color: #333; font-family: 'Open Sans', sans-serif; line-height: 24px; vertical-align: top; text-align: left;">
                                      Patient Details
                                    </td>
                                  </tr>

                                  <tr class="visibleMobile">
                                    <td height="5"></td>
                                  </tr>
                                  <tr>
                                    <td style="font-size: 16px; font-weight: 700; color: #333; font-family: 'Open Sans', sans-serif; line-height: 22px; vertical-align: top; text-align: left;">
                                      Patient Name : <span style="font-weight: 400; color: #333;">{{ $user_data->full_name }}</span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="font-size: 16px; font-weight: 700; color: #333; font-family: 'Open Sans', sans-serif; line-height: 22px; vertical-align: top; text-align: left;">
                                      DOB : <span style="font-weight: 400; color: #333;">{{ isset($user_data->dob) ? $user_data->dob : '' }}</span>
                                    </td>
                                  </tr>
                                  <tr>
                                  @php  $usr = DB::table('delivery_address')->where('user_id',$user_data->id)->first(); @endphp
                                    <td style="font-size: 16px; font-weight: 700; color: #333; font-family: 'Open Sans', sans-serif; line-height: 22px; vertical-align: top; text-align: left;">
                                      Address : <span style="font-weight: 400; color: #333;">{{ $usr->address??'' }}, {{ $usr->city??'' }}, {{ $usr->zip_code??'' }}</span>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>

            <!-- product section -->
            @php
                $order_id = DB::table('orders')->where('session_id',$temp_data->session_id)->first();
                //dd($order_id,$temp_data->session_id);
                //$product_id = DB::table('order_product')->where('order_id',$order_id->id)->get(); 

                $product_id = DB::table('temp')->where('session_id',$temp_data->session_id)->first();
                $product_ids = explode(",",$product_id->product_ids);
                    //dd($product_ids);
                $product = DB::table('products')->whereIn('id',$product_ids)->get();
                //dd($product);
                //$p_image = DB::table('media')->where('mediable_id',$product_id[0]->product_id)->get();
                //dd($order_id, $product_id, $product, $p_image );
            @endphp
            <tr>
              <td>
                <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff">
                  <tbody>
                    <tr>
                      <td>
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                          <tbody>
                            <tr>
                              <th style="font-size: 16px; font-weight: 600; color: #fff; font-family: 'Open Sans', sans-serif; text-transform: uppercase; line-height: 20px; text-align: center; vertical-align: middle; padding: 10px 7px; border: 1px solid #585858; background-color: #242423;" align="left">
                                QTY
                              </th>
                              <th style="font-size: 16px; font-weight: 600; color: #fff; font-family: 'Open Sans', sans-serif; text-transform: uppercase; line-height: 20px; text-align: center; vertical-align: middle; padding: 10px 7px; border: 1px solid #585858; background-color: #242423;" align="left">
                                PRODUCT NAME
                              </th>
                              <th style="font-size: 16px; font-weight: 600; width:135px; color: #fff; font-family: 'Open Sans', sans-serif; text-transform: uppercase; line-height: 20px; text-align: center; vertical-align: middle; padding: 10px 7px; border: 1px solid #585858; background-color: #242423;" align="left">
                                PACK SIZE
                              </th>
                              <th style="font-size: 16px; font-weight: 600; width:135px; color: #fff; font-family: 'Open Sans', sans-serif; text-transform: uppercase; line-height: 20px; text-align: center; vertical-align: middle; padding: 10px 7px; border: 1px solid #585858; background-color: #242423;" align="left">
                                SUBSCRIPTION
                              </th>
                            </tr>
                       @foreach($product as $products)
                            <tr>
                              <td style="font-size: 19px; font-family: 'Open Sans', sans-serif; color: #000; text-align: center; line-height: 15px; padding:10px 7px; text-align: center; vertical-align: middle; border: 1px solid #585858; border-top: 0; background-color: #d8d8d8;">
                              {{ $products->quantity }}
                              </td>
                              <td style="font-size: 19px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 15px; padding:10px 7px; text-align: center; vertical-align: middle; border: 1px solid #585858; border-top: 0; background-color: #d8d8d8;">
                                {{ $products->name }}
                              </td>
                              <td style="font-size: 19px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 15px; padding:10px 7px; text-align: center; vertical-align: middle; border: 1px solid #585858; border-top: 0; background-color: #d8d8d8;">
                                {{ $products->quantity }}
                              </td>
                              <td style="font-size: 19px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 15px; padding:10px 7px; text-align: center; vertical-align: middle; border: 1px solid #585858; border-top: 0; background-color: #d8d8d8;">
                              {{ ($products->subscription_duration == 1)? $products->subscription_duration.' Month': $products->subscription_duration.' Months' }}
                              </td>
                            </tr>
                      @endforeach      
                            <tr>
                              <td height="1" colspan="4" style="border-bottom:1px solid #e4e4e4"></td>
                            </tr>

                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td height="20"></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
            
             <!-- prescription -->
             <tr>
              <td>
                <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff">
                  <tbody>
                    <tr>
                      <td>
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                          <tbody>
                            <tr>
                              <th style="font-size: 16px; font-weight: 600; color: #fff; font-family: 'Open Sans', sans-serif; text-transform: uppercase; line-height: 20px; text-align: center; vertical-align: middle; padding: 10px 7px; border: 1px solid #585858; background-color: #242423;" align="left">
                                Prescription
                              </th>
                            </tr>
                            <tr>
                              <td style="font-size: 19px; font-family: 'Open Sans', sans-serif; color: #000; text-align: center; line-height: 15px; padding:10px 7px; text-align: center; vertical-align: middle; border: 1px solid #585858; border-top: 0; background-color: #d8d8d8;">
                              {{ $temp_data->note }}
                              </td>
                            </tr>    
                            <tr>
                              <td height="1" colspan="4" style="border-bottom:1px solid #e4e4e4"></td>
                            </tr>

                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td height="20"></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
            <!-- prescription -->

            <tr>
              <td>
                <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff">
                  <tr>
                    <td>
                      <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                        <tbody>
                          @php
                          $prescriber_id = Auth::id();
                          // dd($prescriber_id);
                          $prescriber = \App\Models\User::where('id',$prescriber_id)->first();
                          $prescriberAddress = \App\Models\Delivery_address::where('user_id',$prescriber_id)->first();
                          // dd($prescriber);
                          @endphp
                          <tr>
                            <td style="font-size: 18px; font-weight: 700; padding-top:10px; text-transform: uppercase; color: #333; font-family: 'Open Sans', sans-serif; line-height: 22px; vertical-align: top; text-align: left;">
                              Prescriber Details
                            </td>

                          </tr>
                          <tr class="visibleMobile">
                            <td height="3"></td>
                          </tr>
                          <tr>
                            <td style="font-size: 16px; font-weight: 700; color: #333; font-family: 'Open Sans', sans-serif; line-height: 22px; vertical-align: top; text-align: left;">
                              Name : <span style="font-weight: 400; color: #333;">{{ $prescriber->full_name }}</span>
                            </td>
                          </tr>
                          <tr>
                            <td style="font-size: 16px; font-weight: 700; color: #333; font-family: 'Open Sans', sans-serif; line-height: 22px; vertical-align: top; text-align: left;">
                              Registraton Number : <span style="font-weight: 400; color: #333;">{{ $prescriber->doc_id }}</span>
                            </td>
                          </tr>
                          <tr>
                            <td style="font-size: 16px; font-weight: 700; color: #333; font-family: 'Open Sans', sans-serif; line-height: 22px; vertical-align: top; text-align: left;">
                              Mobile Number : <span style="font-weight: 400; color: #333;">{{ $prescriber->phone }}</span>
                            </td>
                          </tr>
                          <tr>
                            <td style="font-size: 16px; font-weight: 700; color: #333; font-family: 'Open Sans', sans-serif; line-height: 22px; vertical-align: top; text-align: left;">
                              Address : <span style="font-weight: 400; color: #333;">{{ $prescriberAddress->address??'N/A' }}</span>
                            </td>
                          </tr>
                          <tr>
                            <td style="font-size: 16px; font-weight: 700; color: #333; font-family: 'Open Sans', sans-serif; line-height: 22px; vertical-align: top; text-align: left;">
                              Date : <span style="font-weight: 400; color: #333;">{{ date("d/m/y") }}</span>
                            </td>
                          </tr>
                          <tr class="spacer">
                            <td height="30"></td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <tr>
              <td>
                <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff">
                  <tbody>
                    <tr>
                      <td>
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                          <tbody>
                            <tr style="display: flex;">
                              <td class="" style="width:50%">
                                <table border="0" cellpadding="0" cellspacing="0" align="left" bgcolor="#f1f1f1" style="border: 1px solid #5a5a5a; width:100%">

                                  <tbody>
                                    <tr class="visibleMobile">
                                      <td height="25"></td>
                                    </tr>
                                    <tr>
                                      <td style="padding: 0px 8px 0 8px;">
                                        <p style="font-size: 15px; font-weight: 600; margin-bottom: 20px; color: #000; font-family: 'Open Sans', sans-serif; line-height: 20px; vertical-align: top; text-align:center;"> Digitally Signed Prescription</p>
                                        <!-- <p style="font-size: 15px; font-weight: 600; margin-bottom: 20px; color: #000; font-family: 'Open Sans', sans-serif; line-height: 20px; vertical-align: top; text-align:center;">{{ $prescriber->full_name }}</p> -->
                                        <p style="font-size: 15px; font-weight: 600; margin-bottom: 20px; color: #000; font-family: 'Open Sans', sans-serif; line-height: 20px; vertical-align: top; text-align:center;">Doctor Pin: {{ $temp_data->doc_pin }}</p>
                                          @if($temp_data->doc_pin == "" && $temp_data->note == "") 
                                           <form action="{{ route('prescription.submit') }}" method="POST">
                                              @csrf
                                              <input type="text" id="doc_in" name="doc_pin" placeholder="Doctor Pin"><br>
                                              <input type="hidden" id="doc_in" name="session_id" value="{{ $temp_data->session_id }}"><br>
                                              <textarea type="text" id="note" name="note" value="Note"></textarea><br><br>
                                              <input type="submit" value="Submit">
                                          </form> 
                                          @endif
                                          @if($temp_data->doc_pin != "" && $temp_data->note != "" )
                                          <div class="generate-prescription-pdf">
                                            <a class="pure-black-btn" style="margin-top: 30px;" href="{{ route('generate.epdf', ['id' => $user_data->id, 'catid' => $temp_data->category_id, 'session_id' => $temp_data->session_id]) }}">Generate
                                              Prescription PDF</a>
                                          </div>
                                          @endif
                                        <!-- signature area -->
                                        <!-- <div class="signature"> -->
                                          <!-- if a signature is genrated then display the signature and pdf genrate button   -->
                                          <!-- @if(!empty($temp_data->signature))
                                          <div class="signature-img" style="text-align: center;">
                                            <img class="sig_image" src="{{ asset('upload/') }}{{ '/'. $temp_data ->signature}}" max-width='230px' height="230px">
                                          </div>
                                          <div class="generate-prescription-pdf">
                                            <a class="pure-black-btn" style="margin-top: 30px;" href="{{ route('generate.epdf', ['id' => $user_data->id, 'catid' => $temp_data->category_id, 'session_id' => $temp_data->session_id]) }}">Generate
                                              and Send Prescription PDF</a>
                                          </div>
                                          @else
                                          <div class="">
                                            @if($errors->any())
                                            <h4>{{$errors->first()}}</h4>
                                            @endif
                                            <div class="card-body p-0 mb-4">
                                              @if ($message = Session::get('success'))
                                              <div class="alert alert-success  alert-dismissible">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                <strong>{{ $message }}</strong>
                                              </div>
                                              @endif
                                              <form method="POST" action="{{ route('signaturepad.upload') }}">
                                                <input type="hidden" name="session_id" value="{{ $temp_data->session_id }}">
                                                @csrf
                                                <div class="sss">
                                                  <label class="" style="font-weight: 600;" for="">Signature:</label>
                                                  <br />
                                                  <div id="sig" style="height: 295px; overflow:hidden;"></div>
                                                  <br />
                                                  <div class="sign-btns-main">
                                                    <button id="clear" class="pure-black-btn mt-2" style="width: 100%;">Clear Signature</button>
                                                    <textarea id="signature64" name="signed" style="display: none"></textarea>
                                                    <button class="pure-white-btn mt-2" style="width: 100%;">Save & Continue..</button>
                                                  </div>
                                                </div>


                                              </form>

                                            </div>
                                          </div>
                                          @endif
                                          <script type="text/javascript">
                                            var sig = $('#sig').signature({
                                              syncField: '#signature64',
                                              syncFormat: 'PNG'
                                            });
                                            $('#clear').click(function(e) {
                                              e.preventDefault();
                                              sig.signature('clear');
                                              $("#signature64").val('');
                                            });
                                          </script>
                                        </div> -->
                                        <!-- signature area -->
                                      </td>
                                    </tr>
                                    <tr>

                                    </tr>
                                    <tr class="visibleMobile">
                                      <td height="25"></td>
                                    </tr>
                                  </tbody>
                                </table>

                              </td>
                              <td style="width: 50%;">
                                <table border="0" cellpadding="0" cellspacing="0" align="right" style="border: 1px solid #cdcdcd; width:93%; height:100%">
                                  <tbody>
                                  </tbody>
                                  <tr class="visibleMobile">
                                    <td height="20"></td>
                                  </tr>
                                  <tr>
                                    <td style="padding: 0px 30px 20px 50px;">
                                      <ul>
                                        <li style="list-style: disc;font-size: 16px; font-weight: 400; color: #000; font-family: 'Open Sans', sans-serif; line-height: 26px; vertical-align: top; text-align: left; "> 
                                        <!-- By signing this prescription, you confirm that you are aware of and accept clinical responsibility for all items prescribed 
                                        for your a0G8d00000AGdcnEADpatient. You also confirm that a face-to-face consultation has taken place and that you agree 
                                        to Acre Pharmacy terms and conditions presented on the pharmacy website. -->
                                        By signing this prescription, you confirm that you are aware of and accept clinical responsibility for all items prescribed for your patient. 
                                      And you agree to all term and conditions for prescribing. 
                                        </li>
                                      </ul>
                                    </td>
                                  </tr>
                                  <tr class="visibleMobile">
                                    <td height="6"></td>
                                  </tr>
                                  <tr>
                                    <td style="padding: 0px 30px 0 50px;">
                                      <ul>
                                        <li style="list-style: disc;font-size: 16px; font-weight: 400; color: #000; font-family: 'Open Sans', sans-serif; line-height: 26px; vertical-align: top; text-align: left; ">
                                          If you have any questions, please Contact Info@agenthealth.co.uk
                                        </li>
                                      </ul>
                                    </td>
                                  </tr>
                                  <tr class="visibleMobile">
                                    <td height="20"></td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>

                    <tr class="visibleMobile">
                      <td height="12"></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
            <tr>
              <td>
                <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff">
                  <tbody>
                    <tr>
                      <td>
                        <table width="540" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                          <tbody>
                            <tr>
                              <td>
                                <table width="400" border="0" cellpadding="0" cellspacing="0" align="left" bgcolor="#f1f1f1" style="border: 1px solid #5a5a5a;margin-top:30px;">

                                  <tbody>
                                    <tr class="visibleMobile">
                                      <td height="10"></td>
                                    </tr>
                                    <tr>
                                      <td><img src="{{ asset('images/check.png') }}" style="width: 100%; max-width: 43px; margin-bottom: 7px;"></td>
                                    </tr>
                                    <tr>
                                      <td style="font-size: 14px; font-weight: 400; color: #000; font-family: 'Open Sans', sans-serif; line-height: 20px; vertical-align: top; text-align: left; padding: 0px 8px 0 8px;">
                                        I confirm that I have evaluated the competency, training and insurance of the 3rd party practitioner
                                        and confirm they are suitable to administer the treatment to the named patient.
                                      </td>
                                    </tr>
                                    <tr class="visibleMobile">
                                      <td height="10"></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>

                    <tr class="visibleMobile">
                      <td height="30"></td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </table>
        </div>
      </div>




      <body class="dashboard-open">
        @endsection