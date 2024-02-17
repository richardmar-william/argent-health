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
    margin-bottom: 15px;
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

      <div class="patient-details-pdf">

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
                            <table width="100%" border="0" cellpadding="0" cellspacing="0" align="left" class="col">
                              <tbody>
                                <tr>
                                  <td align="left">

                                    <img src="{{ url('/frontend_new/images/quest-logo.png') }}" width="15%" height="15%" alt="logo" border="0" />

                                  </td>
                                  <td style="font-size: 32px; font-weight: 600; text-align:center;">
                                    Private Prescription
                                  </td>
                                </tr>
                                <tr class="visibleMobile">
                                  <td height="10" style="border-bottom: 1px solid #cdcdcd;" colspan="2"></td>
                                </tr>
                                <tr>
                                  <td style="font-size: 21px; padding-top:20px; font-weight: 700; text-transform: uppercase; color: #333; font-family: 'Open Sans', sans-serif; line-height: 24px; vertical-align: top; text-align: left;">
                                    Patient Details
                                  </td>
                                </tr>

                                <tr class="visibleMobile">
                                  <td height="5"></td>
                                </tr>
                               
                              
                               
                               @php  $usr = DB::table('users')->where('id',$quesAns->user_id)->first(); @endphp
                                
                                <tr>
                                  <td style="font-size: 16px; font-weight: 700; color: #333; font-family: 'Open Sans', sans-serif; line-height: 22px; vertical-align: top; text-align: left;">
                                    Patient Name : <span style="font-weight: 400; color: #333;">{{ $usr->full_name }}</span>
                                  </td>
                                </tr>
                                <tr>
                                  <td style="font-size: 16px; font-weight: 700; color: #333; font-family: 'Open Sans', sans-serif; line-height: 22px; vertical-align: top; text-align: left;">
                                    DOB : <span style="font-weight: 400; color: #333;">{{ isset($usr->dob) ? $usr->dob : '' }}</span>
                                  </td>
                                </tr>
                                <tr>
                                @php  $usr = DB::table('delivery_address')->where('user_id',$quesAns->user_id)->first(); @endphp
                                
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
          $order_id = DB::table('orders')->where('session_id',$quesAns->session_id)->first();
          
          $product_id = explode(",",$quesAns->product_ids);
          $product = DB::table('products')->whereIn('id',$product_id)->get();
          //dd($product);
          //$p_image = DB::table('media')->where('mediable_id',$product_id[0]->product_id)->get();
          //dd($product,$p_image);
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
                              Subscription
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
                            in progress
                            </td>
                          </tr>
                          <tr>
                            <td height="1" colspan="4" style="border-bottom:1px solid #e4e4e4"></td>
                          </tr>
                        @endforeach
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
                              {{ $quesAns->note }}
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
                        <!-- <tr>
                  <td style="font-size: 16px; font-weight: 600; color: #333; font-family: 'Open Sans', sans-serif; line-height: 22px; vertical-align: top; text-align: left;">
                      Address And Postcode : <span style="font-weight: 400; color: #333;"> {{ $prescriber->addresss?$prescriber->addresss->address:'N/A' }}</span>
                  </td>
              </tr> -->
                        <tr>
                          <td style="font-size: 16px; font-weight: 700; color: #333; font-family: 'Open Sans', sans-serif; line-height: 22px; vertical-align: top; text-align: left;">
                            Mobile Number : <span style="font-weight: 400; color: #333;">{{ $prescriber->phone }}</span>
                          </td>
                        </tr>
                        <tr>
                          <td style="font-size: 16px; font-weight: 700; color: #333; font-family: 'Open Sans', sans-serif; line-height: 22px; vertical-align: top; text-align: left;">
                           Address: <span style="font-weight: 400; color: #333;">{{ $prescriberAddress->address??'' }}</span>
                          </td>
                        </tr>
                        <tr>
                          <td style="font-size: 16px; font-weight: 700; color: #333; font-family: 'Open Sans', sans-serif; line-height: 22px; vertical-align: top; text-align: left;">
                            Date : <span style="font-weight: 400; color: #333;">{{ date("d/m/y") }}</span>
                          </td>
                        </tr>
                        <tr>
                          <td style="font-size: 16px; font-weight: 700; color: #333; font-family: 'Open Sans', sans-serif; line-height: 22px; vertical-align: top; text-align: left;">
                            Profession : <span style="font-weight: 400; color: #333;">GPhC</span>
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
                          <tr>
                            <td style="width:50%;">
                              <table border="0" cellpadding="0" cellspacing="0" align="left" bgcolor="#f1f1f1" style="border: 1px solid #5a5a5a; width:100%; height:600px">

                                <tbody>
                                  <tr class="visibleMobile">
                                    <td height="25"></td>
                                  </tr>
                                  <tr>
                                    <td style="font-size: 15px; padding: 0px 8px 0 8px; font-weight: 600; margin-bottom: 20px; color: #000; font-family: 'Open Sans', sans-serif; line-height: 20px; vertical-align: top; text-align:center;">
                                      Digitally Signed Prescription
                                      {{-- ucwords($prescriber->full_name) --}}<br>
                                        <!-- <p style="font-size: 15px; font-weight: 600; margin-bottom: 20px; color: #000; font-family: 'Open Sans', sans-serif; line-height: 20px; vertical-align: top; text-align:center;">{{ $prescriber->full_name }}</p><br> -->
                                        <p style="font-size: 15px; font-weight: 600; margin-bottom: 20px; color: #000; font-family: 'Open Sans', sans-serif; line-height: 20px; vertical-align: top; text-align:center;">Doctor Pin: {{ $quesAns->doc_pin }}</p>
                                      <!-- signature area -->
                                      <!-- <img src="{{ asset('upload/') }}{{ '/'. $quesAns->signature}}" width="200px" style="margin-top: 20px; width:40%;  height:30%"> -->
                                  </tr>
                                  <tr class="visibleMobile">
                                    <td height="25"></td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                            <td style="width: 50%;">
                              <table border="0" cellpadding="0" cellspacing="0" align="right" style="border: 1px solid #cdcdcd; width:93%;">
                                <tbody>
                                </tbody>
                                <tr class="visibleMobile">
                                  <td height="20"></td>
                                </tr>
                                <tr>
                                  <td style="padding: 0px 30px 20px 21px;">
                                    <ul>
                                      <li style="list-style: disc;font-size: 15px; font-weight: 400; color: #000; font-family: 'Open Sans', sans-serif; line-height: 26px; vertical-align: top; text-align: left; "> 
                                      <!-- By signing this prescription, you confirm that you are aware of and accept clinical responsibility for all items prescribed 
                                      for your a0G8d00000AGdcnEADpatient. You also confirm that a face-to-face consultation has taken place and that you agree to 
                                      Acre Pharmacy terms and conditions presented on the pharmacy website. -->
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
                                  <td style="padding: 0px 30px 0 21px;">
                                    <ul>
                                      <li style="list-style: disc;font-size: 15px; font-weight: 400; color: #000; font-family: 'Open Sans', sans-serif; line-height: 26px; vertical-align: top; text-align: left; ">
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
                      <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                        <tbody>
                          <tr>
                            <td>
                              <table width="350" border="0" cellpadding="0" cellspacing="0" align="left" bgcolor="#f1f1f1" style="border: 1px solid #5a5a5a;">

                                <tbody>
                                  <tr class="visibleMobile">
                                    <td height="10"></td>
                                  </tr>
                                  <tr>
                                    <td><img src="{{ asset('images/check.png') }}" style="width: 100%; max-width: 33px; margin-bottom: 7px;"></td>
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