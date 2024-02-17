<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Stripe\Exception\CardException;
use Stripe\StripeClient;
use App\Models\{Coupon, User, Order};
use App\Models\PaymentMethod;
use App\Models\ShippingCompany;
use App\Models\UserAddress;
use App\Services\OrderService;
use Gloudemans\Shoppingcart\Facades\Cart;

class StripeController extends Controller
{
    private $stripe;
    public function __construct()
    {
        $this->stripe = new StripeClient(env('STRIPE_SECRET'));
    }

    public function index()
    {
        $user= auth()->user();
        if($user->role==User::ROLE_USER)
        $role='user';
        if($user->role==User::ROLE_DOCTOR)
        $role='doctor';

    Cart::destroy();

    $orders= Order::where('user_id', $user->id)->get();
    return redirect('/'.$role.'/orders')->with(['orders'=>$orders,  'message' => 'Payment done successfully','alert-type' => 'success',]); 
    }

    public function payment(Request $request, OrderService $orderService)
    {

        $validator = Validator::make($request->all(), [
            'fullName' => 'required',
            'cardNumber' => 'required',
            'month' => 'required',
            'year' => 'required',
            'cvv' => 'required'
        ]);
        $amount= $request->amount;
        if ($validator->fails()) {
            $request->session()->flash('danger', $validator->errors()->first());
            return redirect()->back()->with(['message' => 'Validate','alert-type' => 'danger']);
        }

        $token = $this->createToken($request);
        if (!empty($token['error'])) {
            return redirect()->back()->with(['message' => 'Payment failed','alert-type' => 'danger']);
        }
        if (empty($token['id'])) {
            return redirect()->back()->with(['message' => 'Payment failed','alert-type' => 'danger']);
        }

        $charge = $this->createCharge($token['id'], $amount*100);
        if (!empty($charge)) {
            if($charge['error']){
                return redirect()->back()->with(['message'=> $charge['error'], 'alert-type' => 'danger']);
            }
            if($charge['status'] == 'succeeded'){
                $request->session()->flash('success', 'Payment completed.');
                $orderService->createOrder($request);
            }
        } else {
            return redirect()->back()->with(['message' => 'Payment failed','alert-type' => 'danger']);
        }
        return response()->redirectTo('/pay');
    }

    private function createToken($cardData)
    {
        $token = null;
        try {
            $token = $this->stripe->tokens->create([
                'card' => [
                    'number' => $cardData['cardNumber'],
                    'exp_month' => $cardData['month'],
                    'exp_year' => $cardData['year'],
                    'cvc' => $cardData['cvv']
                ]
            ]);
        } catch (CardException $e) {
            $token['error'] = $e->getError()->message;
        } catch (Exception $e) {
            $token['error'] = $e->getMessage();
        }
        return $token;
    }

    private function createCharge($tokenId, $amount)
    {
        $charge = null;
        try {
            $charge = $this->stripe->charges->create([
                'amount' => $amount,
                'currency' => 'usd',
                'source' => $tokenId,
                'description' => 'Payment'
            ]);
        } catch (Exception $e) {
            $charge['error'] = $e->getMessage();
        }
        return $charge;

    }
}