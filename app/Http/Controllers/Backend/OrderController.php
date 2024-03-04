<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Order;
use App\Models\OrderTransaction;
use App\Models\User;
use App\Models\UserAddress;
use App\Models\City;
use App\Models\Country;
use App\Models\Delivery_address;
use App\Models\Temp;
use Auth;
use App\Notifications\Frontend\User\OrderStatusNotification;
use App\Services\OmnipayService;
use App\Traits\SMPT2GoTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Session;
use Mail;

class OrderController extends Controller
{
    use SMPT2GoTrait;
    public function index(): View
    {
        $this->authorize('access_order');

        $orders = Order::with('user', 'paymentMethod')
            ->when(\request()->keyword != null, function ($query) {
                $query->search(\request()->keyword);
            })
            ->when(\request()->status != null, function ($query) {
                $query->whereOrderStatus(\request()->status);
            })
            ->orderBy(\request()->sortBy ?? 'id', \request()->orderBy ?? 'desc')
            //->groupBy('trans_ref_id')
            //->whereNotNull('trans_ref_id')
            ->paginate(\request()->limitBy ?? 10);

        return view('backend.orders.index', compact('orders'));
    }

    public function show(Order $order): View
    {
        $this->authorize('show_order');

        $orderStatusArray = [
            '0' => 'New order',
            '1' => 'Paid',
            '2' => 'Under process',
            '3' => 'Finished',
            '4' => 'Rejected',
            '5' => 'Canceled',
            '6' => 'Refund requested',
            '7' => 'Returned order',
            '8' => 'Refunded',
        ];

        $key = array_search($order->order_status, array_keys($orderStatusArray));
        foreach ($orderStatusArray as $k => $v) {
            if ($k <= $key) {
                unset($orderStatusArray[$k]);
            }
        }

        return view('backend.orders.show', compact('order', 'orderStatusArray'));
    }

    public function update(Request $request, Order $order): RedirectResponse
    {
        $this->authorize('edit_order');

        $user = User::find($order->user_id);

        if ($request->order_status == Order::REFUNDED){
            $omniPay = new OmnipayService('PayPal_Express');
            $response = $omniPay->refund([
                'amount' => $order->total,
                'transactionReference' => $order->transactions()->where('transaction_status', OrderTransaction::PAID)
                    ->first()->transaction_number,
                'cancelUrl' => $omniPay->getCancelUrl($order->id),
                'returnUrl' => $omniPay->getReturnUrl($order->id),
                'notifyUrl' => $omniPay->getNotifyUrl($order->id),
            ]);

            if ($response->isSuccessful()) {
                $order->update(['order_status' => Order::REFUNDED]);
                $order->transactions()->create([
                    'transaction_status' => OrderTransaction::REFUNDED,
                    'transaction_number' => $response->getTransactionReference(), // coming from PayPal
                    'payment_result' => 'success'
                ]);

                // $user->notify(new OrderStatusNotification($order));

                return back()->with([
                    'message' => 'Refunded successfully',
                    'alert-type' => 'success',
                ]);
            }

        } else {
            
            $order->update(['order_status'=> $request->order_status]);

            $order->transactions()->create([
                'transaction_status' => $request->order_status,
                'transaction_number'=> null,
                'payment_result'=> null,
            ]);
            $data = $order->toArray();
            $get_data = Temp::where('session_id', $data['session_id'])->first();
           $prod_det = $get_data->toArray();
          $prod = explode(",", $prod_det['product_ids']);
          //dd($prod); 
          $prod_name = DB::table('products')->whereIn('id',$prod)->get();  
          $data['product_details'] = $prod_name;
        //   dd($prod_name);
      
            $data['fullname'] = $user->full_name;
            $data['email'] = $user->email;
            // dd($data);
            if($request->order_status == 2){
                $this->sendOrderConfirmMail($user->full_name, $data['ref_id']);
            }
            // $user->notify(new OrderStatusNotification($order));

            return back()->with([
                'message' => 'updated successfully',
                'alert-type' => 'success',
            ]);

        }
    }

    public function destroy(Order $order): RedirectResponse
    {
        $this->authorize('delete_order');

        $order->delete();

        return redirect()->route('admin.orders.index')->with([
            'message' => 'Deleted successfully',
            'alert-type' => 'success'
        ]);
    }


    public function delivery($id)
    {
      $order = Order::where('id',$id)->update(["delivery_status"=>1]);
      $wallet = DB::table('referral_wallets')->where('referral_id',$id)->update(["delivery_status"=>1]);
      return redirect()->back()->with([
        'message' => 'Delivery successfully Done',
        'alert-type' => 'success'
    ]);

    }


     /* function for the royal mail shipment gatway */
     public  function order_shipment(request $request){
         $weightInGrams = $request->weightInGrams;
         $packageFormatIdentifier = $request->packageFormatIdentifier;
         $heightInMms = $request->heightInMms;
         $widthInMms = $request->widthInMms;
         $depthInMms = $request->depthInMms;    
         $order_id =  $request->order_id;
         
         $order = Order::where('id',$order_id)->first();
         //dd($order->ref_id);
         $user = User::where('id',$order->user_id)->first();
         //dd( $user->id);
         
         // $city = City::where('id',$address->city_id)->first();
         // $country = Country::where('id',$address->country_id)->first();
         //dd($address->zip_code);
         //dd($user_address);
         $address = Delivery_address::where('user_id',$user->id)->first();
         $user_address = UserAddress::where('user_id',$user->id)->first(); 
         //dd($address, $user_address );
         
         // if($address == null || $user_address == null){
             //   return redirect()->back()->with('error2', 'User does not have delivery address. So can not proceed without delivery address.');   
             // }
             
             
             //dd($order->user_address_id);
             $order_address = Delivery_address::where('id',$order->user_address_id)->first();
             //checking if order has address id
             if(isset($order_address)) {
                 $addressLine1 = $order_address->address;
                 $city = $order_address->city;
                 $postcode = $order_address->zip_code;
                } 
        else {
            $addressLine1 = $address->address;    
            $city = $address->city; 
            $postcode = $address->zip_code;
        }
        
        
        
        
        // if($address != null){
            //   $addressLine1 = $address->address;    
            //   $city = $address->city; 
            //   $postcode = $address->zip_code;    
            // }
            // else{
            //   $city_d = City::where('id', $user_address->city_id)->first();
            //   $country = Country::where('id',$user_address->country_id)->first();
            //   $addressLine1 = $user_address->address;
            //   $city = $city_d->name;
            //   $postcode = $user_address->zip_code;   
            // }


        $sender_id = Auth::id(); 
         //dd($sender_id);
        $sender = User::where('id',$sender_id)->first();
         //dd($sender->full_name);
        $fullName = $user->full_name;    
           
        // $county = $country->name; 
        //dd($address, $addressLine1, $city);   
        $countryCode = "";    
        $userphone = $user->phone;    
        $useremail = $user->email;

        /* senders */
        $tradingName = $sender->full_name;    
        $phoneNumber = $sender->phone;    
        $emailAddress = $sender->email;    

        $sendNotificationsTo = $user->full_name;
        
        $orderDate = $order->created_at;
        $subtotal = $order->subtotal;
        $shippingCostCharged = $order->shipping;
        $otherCosts = $order->tax;
        $total = $order->total;
                header("content-type: application/json");
       print_r(json_encode(array(
                "items" => array(
                    array(
                        "orderReference" => $order->id,
                        "recipient" => array(
                            "address" => array(
                                "fullName" => $fullName,
                                "addressLine1" => $addressLine1,
                                "city" => $city,
                                "county" => "UK",
                                "postcode" => $postcode,
                                "countryCode" => "GB" // Corrected the country code to "GB" for the United Kingdom
                            ),
                            "phoneNumber" => $userphone,
                            "emailAddress" => $useremail
                        ),
                        
                        "sender" => array(
                            "tradingName" => $tradingName,
                            // "phoneNumber" => $phoneNumber,
                            "phoneNumber" => $userphone,
                            "emailAddress" => "info@agenthealth.co.uk"
                            // "emailAddress" => $emailAddress
                            // "emailAddress" => $useremail
                        ),
                        "billing" => array(
                            "address" => array(
                                "fullName" => $fullName,
                                "addressLine1" => $addressLine1,
                                "city" => $city,
                                "county" => "UK",
                                "postcode" => $postcode,
                                "countryCode" => "GB" // Corrected the country code to "GB" for the United Kingdom
                            ),
                            "phoneNumber" => $userphone,
                            "emailAddress" => $useremail
                        ),
                        "packages" => array(
                            array(
                                "weightInGrams" => $weightInGrams,
                                "packageFormatIdentifier" => "parcel",
                                "dimensions" => array(
                                    "heightInMms" => $heightInMms,
                                    "widthInMms" => $widthInMms,
                                    "depthInMms" => $depthInMms
                                ),
                                "contents" => array(
                                    array(
                                        "SKU" => $order->ref_id,
                                        "quantity" => 1,
                                        "unitValue" => 4,
                                        "unitWeightInGrams" => $weightInGrams,
                                        "requiresExportLicence" => true
                                    )
                                )
                            )
                        ),
                        "orderDate" => $orderDate,
                        "subtotal" => $subtotal,
                        "shippingCostCharged" => $shippingCostCharged,
                        "otherCosts" => $otherCosts,
                        "total" => $total,
                        "currencyCode" => "GBP", 
                        "postageDetails" => array(
                            "sendNotificationsTo" => "sender",
                            "consequentialLoss" => 0,
                            "receiveEmailNotification" => true,
                            "receiveSmsNotification" => true,
                            "guaranteedSaturdayDelivery" => false,
                            "requestSignatureUponDelivery" => true,
                            "isLocalCollect" => true,
                            "requiresExportLicense" => true
                        ),
                        "label" => array(
                            "includeLabelInResponse" => true,
                            "includeCN" => true,
                            "includeReturnsLabel" => true
                        )
                ))))); exit;

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.parcel.royalmail.com/api/v1/orders',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode(array(
                "items" => array(
                    array(
                        "orderReference" => $order->id,
                        "recipient" => array(
                            "address" => array(
                                "fullName" => $fullName,
                                "addressLine1" => $addressLine1,
                                "city" => $city,
                                "county" => "UK",
                                "postcode" => $postcode,
                                "countryCode" => "GB" // Corrected the country code to "GB" for the United Kingdom
                            ),
                            "phoneNumber" => $userphone,
                            "emailAddress" => $useremail
                        ),
                        "sender" => array(
                            "tradingName" => $tradingName,
                            // "phoneNumber" => $phoneNumber,
                            "phoneNumber" => $userphone,
                            // "emailAddress" => $emailAddress
                            "emailAddress" => $useremail
                        ),
                        "billing" => array(
                            "address" => array(
                                "fullName" => $fullName,
                                "addressLine1" => $addressLine1,
                                "city" => $city,
                                "county" => "UK",
                                "postcode" => $postcode,
                                "countryCode" => "GB" // Corrected the country code to "GB" for the United Kingdom
                            ),
                            "phoneNumber" => $userphone,
                            "emailAddress" => $useremail
                        ),
                        "packages" => array(
                            array(
                                "weightInGrams" => $weightInGrams,
                                "packageFormatIdentifier" => "parcel",
                                "dimensions" => array(
                                    "heightInMms" => $heightInMms,
                                    "widthInMms" => $widthInMms,
                                    "depthInMms" => $depthInMms
                                ),
                                "contents" => array(
                                    array(
                                        "SKU" => $order->ref_id,
                                        "quantity" => 1,
                                        "unitValue" => 4,
                                        "unitWeightInGrams" => $weightInGrams,
                                        "requiresExportLicence" => true
                                    )
                                )
                            )
                        ),
                        "orderDate" => $orderDate,
                        "subtotal" => $subtotal,
                        "shippingCostCharged" => $shippingCostCharged,
                        "otherCosts" => $otherCosts,
                        "total" => $total,
                        "currencyCode" => "GBP", 
                        "postageDetails" => array(
                            "sendNotificationsTo" => "sender",
                            "consequentialLoss" => 0,
                            "receiveEmailNotification" => true,
                            "receiveSmsNotification" => true,
                            "guaranteedSaturdayDelivery" => false,
                            "requestSignatureUponDelivery" => true,
                            "isLocalCollect" => true,
                            "requiresExportLicense" => true
                        ),
                        "label" => array(
                            "includeLabelInResponse" => true,
                            "includeCN" => true,
                            "includeReturnsLabel" => true
                        )
                    )
                )
            )),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer 04ea0173-574e-402a-8c9a-fcc6145adba6', // Corrected the authorization header
                'Content-Type: application/json'
            ),
        ));
        
        $response = curl_exec($curl);
        curl_close($curl);

        $responseData = json_decode($response, true);
        
        
        if (isset($responseData['successCount'])) {
            $successCount = $responseData['successCount'];
        } else {
            echo "Success Count not found in the response.";
        }

        //  echo "<pre>";
        if($successCount == 1){
             //  die();
             // dd('yes');
             $update = Order::where("id", $order_id)->update(["status" => 1, 'order_status' => 2]);
            //  print_r($order_id); exit;
          return redirect()->back()->with('success', 'Shipment Process is started successfully.');   
         }
        else{
            // dd('no');
          return redirect()->back()->with('error', 'Some error occured during the shipment... pleas try after some time.');   
        } 
    }

    public function QN(Request $request){
      $data = Temp::where('session_id',$request->s_id)->first();
      return view('backend.orders.orderQN', compact('data'));


    }

}