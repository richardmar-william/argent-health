<!-- © 2018 Shift Technologies. All rights reserved. -->
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed;background-color:#f9f9f9" id="bodyTable">
	<tbody>
		<tr>
			<td style="padding-right:10px;padding-left:10px;" align="center" valign="top" id="bodyCell">
		
				<table border="0" cellpadding="0" cellspacing="0" width="100%" class="wrapperBody" style="max-width:600px">
					<tbody>
						<tr>
							<td align="center" valign="top">
								<table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableCard" style="background-color:#fff;border-color:#e5e5e5;border-style:solid;border-width:0 1px 1px 1px;">
									<tbody>
										<tr>
											<td style="background-color:#00d2f4;font-size:1px;line-height:3px" class="topBorder" height="3">&nbsp;</td>
										</tr>
										<tr>
											<td style="padding-top: 60px; padding-bottom: 20px;" align="center" valign="middle" class="emailLogo">
												<a href="#" style="text-decoration:none" target="_blank">
													<img alt="" border="0" src="http://49.249.236.30:3007/agent/public/images/quest-logo.png" style="width:100%;max-width:150px;height:auto;display:block" width="150">
												</a>
											</td>
										</tr>
										
										<tr>
											<td style="padding-bottom: 5px; padding-left: 20px; padding-right: 20px;" align="center" valign="top" class="mainTitle">
												<h2 class="text" style="color:#000;font-family:Poppins,Helvetica,Arial,sans-serif;font-size:28px;font-weight:500;font-style:normal;letter-spacing:normal;line-height:36px;text-transform:none;text-align:center;padding:0;margin:0">Hi {{ $data['fullname'] }}</h2>
											</td>
										</tr>
										<tr>
															<td style="padding-bottom: 20px;" align="center" valign="top" class="description">
																<p class="text" style="color:#666;font-family:'Open Sans',Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;font-style:normal;letter-spacing:normal;line-height:22px;text-transform:none;text-align:center;padding:0;margin:0">Your Order Ref ID: {{$data['ref_id']}} confirmed successfully!</p>
															</td>
														</tr>
													
										<tr>
											<td style="padding-left:20px;padding-right:20px" align="center" valign="top" class="containtTable ui-sortable">
												<table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableDescription" style="">
													<tbody>
														
															
															@if(sizeof($data['product_details'])>0)
                                                            <tr >
															<td style="margin-bottom:5px;padding-bottom: 10px;border-bottom:1px solid black;" align="center" valign="top" >
																S.no.
															</td>
															<td style="margin-bottom:5px;padding-bottom: 10px;border-bottom:1px solid black;" align="center" valign="top" >
																Product name
															</td>
															<td style="margin-bottom:5px;padding-bottom: 10px;border-bottom:1px solid black;" align="center" valign="top" >
																Price/Subscription
															</td>
														</tr>
                                                            @foreach( $data['product_details'] as $det_key=>$detail)
                                                            <tr>
                                                            <td style="padding-bottom: 20px;" align="center" valign="top" class="description">
                                                            {{$det_key+1}}
                                                            </td>
                                                            <td style="padding-bottom: 20px;" align="center" valign="top" class="description">
                                                            <p class="text" style="color:#666;font-family:'Open Sans',Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;font-style:normal;letter-spacing:normal;line-height:22px;text-transform:none;text-align:center;padding:0;margin:0"> {{$detail->name}}  
                                                            </td>
                                                            <td style="padding-bottom: 20px;" align="center" valign="top" class="description">
                                                            <p class="text" style="color:#666;font-family:'Open Sans',Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;font-style:normal;letter-spacing:normal;line-height:22px;text-transform:none;text-align:center;padding:0;margin:0">@php
                                                        switch($detail->subscription_duration){
                                                        case(1):
                                                            $total_price = $detail->subscription_price1.'/'.$detail->subscription_duration.' Month'; 
                                                        break;
                                                        case(3):
                                                            $total_price = $detail->subscription_price3.'/'.$detail->subscription_duration.' Months'; 
                                                        break;
                                                        case(6):
                                                            $total_price = $detail->subscription_price6.'/'.$detail->subscription_duration.' Months'; 
                                                        break;
                                                        }
                                                        @endphp
                                                    
                                                        £{{$total_price}}    
                                                    </p>
                                                            </td>
                                                            
                                                        </td>
                                                        </tr>
                                                            @endforeach
                                                            @endif
                                                          
															
														
                                                      
                                          
													</tbody>
												</table>
												<!-- <table border="0" cellpadding="0" cellspacing="0" width="100%" class="tableButton" style="">
													<tbody>
														<tr>
															<td style="padding-top:20px;padding-bottom:20px" align="center" valign="top">
																<table border="0" cellpadding="0" cellspacing="0" align="center">
																	<tbody>
																		<tr>
																			<td style="background-color: #242423; padding: 12px 35px; border-radius: 50px;" align="center" class="ctaButton"> <a href="{{route('login')}}" style="color:#fff;font-family:Poppins,Helvetica,Arial,sans-serif;font-size:13px;font-weight:600;font-style:normal;letter-spacing:1px;line-height:20px;text-transform:uppercase;text-decoration:none;display:block" target="_blank" class="text">Login</a>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</td>
														</tr>
													</tbody>
												</table> -->
											</td>
										</tr>
										<tr>
											<td style="font-size:1px;line-height:1px" height="20">&nbsp;</td>
										</tr>
								
									</tbody>
								</table>
								<table border="0" cellpadding="0" cellspacing="0" width="100%" class="space">
									<tbody>
										<tr>
											<td style="font-size:1px;line-height:1px" height="30">&nbsp;</td>
										</tr>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
				
			</td>
		</tr>
	</tbody>
</table>