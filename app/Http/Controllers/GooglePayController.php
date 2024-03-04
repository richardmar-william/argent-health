<?php

namespace App\Http\Controllers;

use App\Models\GPayTransaction;
use Illuminate\Http\Request;
use App\Services\OrderService;
use App\Mail\OrderCompleted;
use App\Models\affiliateCoupon;
use App\Models\AffiliateCouponDetails;
use App\Models\Temp;
use App\Models\Order;
use App\Models\Product;
use App\Models\Media;
use Illuminate\Support\Facades\Cache;
use App\Models\UserAddress;
use App\Traits\SMPT2GoTrait;
use Session;
Use DB;
use Mail;

class GooglePayController extends Controller
{
	use SMPT2GoTrait;
    public function store(Request $request){
        try{
            $user_id = auth()->id();

            $transactions = new GPayTransaction;
            if(!$request['order_id']) {
                $latestOrder = Order::latest()->first();

                if ($latestOrder && strpos($latestOrder->ref_id, 'ORD-') === 0) {
                    $arrOrder = explode('-', $latestOrder->ref_id);
                    $newNumber = (int)$arrOrder[1] + 1;
                    $order_id = 'ORD-' . $newNumber;
                } else {
                    // If there's no record or if the ref_id is not in the expected format, fallback to 'ORD-1000'
                    $order_id = 'ORD-1000';
                }


                $coupon_data = affiliateCoupon::where('code',$request->coupon_code)->first();
                ////////////////////////////////////////////////////////////////////////


                // code to calculate the price
                if(!isset($request->total_price)){
                    return redirect()->back();
                }
                $total_price = $request->total_price;
                $subscription_dur = $request->subscription_duration;
                $prodcut_id = $request->product_id;
                $sessionId = $request->session_id;
                if(!isset($total_price, $subscription_dur, $prodcut_id, $sessionId)){
                    return redirect()->back();
                }
                Session::put('sessionid',$sessionId);
                $get_data = Temp::where('session_id', $sessionId)->first();
                    if(isset($coupon_data)){
                        $get = AffiliateCouponDetails::where('coupon_id',$coupon_data->id)->where('cat_id',$get_data->category_id)->first();
                        $user_off = $get->value;
                        $discount = ($user_off/100)*$total_price;
                        $final_price = $total_price - $discount;
                        }
                    else{
                        $final_price = $total_price;
                    }

                $prod_name = DB::table('products')->where('id',$prodcut_id)->get();

                //////////////////////////////////////////////////////////////////////////
                // code to update the user when placing order
                $update_user_id = Temp::where('session_id', $request->session_id)->update(['user_id' => $user_id, 'final_price' => $final_price ]);

                // code to create the orders placing order
                $order = Order::create([
                        'ref_id' => $order_id,
                        'user_id' => $user_id,
                        'affiliate_code_id' => isset($coupon_data->id) ? $coupon_data->id : '',
                        'user_address_id' => $request->address_id,
                    // 'user_address_id' => $request['userAddressId'],
                    // 'shipping_company_id' => $request['shippingCompanyId'],
                    // 'payment_method_id' => $request['paymentMethodId'],
                        'subtotal' => $request->total_price,
                        // 'discount_code' => session()->has('coupon') ? session()->get('coupon')['code'] : NULL,
                        'discount_code' => $request->coupon_code,
                    // 'discount' => getNumbersOfCart()->get('discount'),
                    // 'shipping' => getNumbersOfCart()->get('shipping'),
                        'tax' => getNumbersOfCart()->get('productTaxes'),
                        'total' => $final_price,
                        'subscription' => $subscription_dur,
                        'currency' => 'GBP',
                        'order_status' => 0,

                        'session_id'=>$request->session_id,
                    ]);
                $orderId=$order->id;
            }
            else {
                $orderId = $request['order_id'];
            }
            // print_r($request->all()); exit;
            $transactions->order_id = $orderId;
            $transactions->transaction_id = $request['_token'];
            $transactions->amount = $request['amount'];
            // $transactions->type = $request['data']['paymentMethodData']['tokenizationData']['type'] ?? '';
            // $transactions->type = 1;
            // $transactions->type = 1;
            // $transactions->type = 1;
            // $transactions->type = 1;
            // $transactions->type = 1;
            // $transactions->type = 1;
            // $transactions->type = 1;
            if($transactions->save()) {
             session()->flash('order_id', $order->ref_id);
                // Mail::send('emails.orders.place_order', ['data'=> $transactions], function($message)use($transactions) {
                //     $message->to(Auth()->user()->email)->subject('Order Confirmed!')->from(config('mail.from.address'), config('mail.from.name'));
							$full_name = auth()->user()->full_name;
							$order_num = $order->ref_id;
							$this->SendOrderConfirmMail($full_name, $order_num);
            }
            // print_r($transactions); exit;
            
            $fileurl = getcwd()."/storage/response_log.json";
            $fileContent = json_decode(file_get_contents($fileurl));
            array_push($fileContent, $request->all());
            file_put_contents($fileurl, json_encode($fileContent));

            //CURL for trust pay
            $jsonData = [
                "alias" => "ws@agenthealth.com",
                "version" => "1.00",
                "request" => [
                    [
                        "currencyiso3a" => "GBP",
                        "requesttypedescriptions" => ["AUTH"],
                        "sitereference" => "test_agenthealth119402",
                        "baseamount" => $final_price,
                        "orderreference" => $order_id,
                        "accounttypedescription" => "ECOM",
                        "pan" => $ccnumber,
                        "expirydate" => $formattedDate,
                        "securitycode" => $request->cvc
                    ]
                ]
            ];

            $headers = [
                "Content-Type: application/json",
                "Accept: application/json",
            ];

            $curl = curl_init();

                    curl_setopt_array($curl, [
                        CURLOPT_URL => 'https://webservices.securetrading.net/json/',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_USERPWD => 'ws@agenthealth.com:_3d{,Kk[,!dd',
                        CURLOPT_HTTPHEADER => $headers,
                        CURLOPT_CUSTOMREQUEST => 'POST',
                        CURLOPT_POSTFIELDS => json_encode($jsonData),
                        ]);
                    $response = curl_exec($curl);

                        if (curl_errno($curl)) {

                        return view('frontend.checkout.error',compact('user_id','order_id'));

                        } else {

                                    $responseData = json_decode($response, true);

                                    $errorcode = $responseData['response'][0]['errorcode'];
                                    if($errorcode == 0){
                                        $requestReference = $responseData['requestreference'];

                                        $ResponseCode = $responseData['response'][0]['acquirerresponsecode'];
                                        $ammount = $responseData['response'][0]['baseamount'];
                                        $currency = $responseData['response'][0]['currencyiso3a'];
                                        $merchantname = $responseData['response'][0]['merchantname'];
                                        $orderreference = $responseData['response'][0]['orderreference'];

                                        return view('frontend.checkout.success',compact('user_id','order_id', 'orderreference', 'currency', 'ammount', 'merchantname'));
                                    }
                                    else{
                                        return view('frontend.checkout.error',compact('user_id','order_id'));
                                    }
                            }
                            curl_close($curl);
            //curl for payment
            return response(['success' => true, 'url' => '/checkout/success1']);

        }
        catch (Exception $e) {
            return response(['success' => false]);
        }
    }
    
    public function setConfig(Request $request) {
        $fileurl = getcwd()."/storage/request_log.json";
        exit($fileurl);
        print_r(file_get_contents($fileurl)); exit;
        $fileContent = json_decode(file_get_contents($fileurl));
        array_push($fileContent, $request->all());
        file_put_contents($fileurl, json_encode($fileContent));
        exit("success");
    }
}

