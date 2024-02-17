<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\City;
use App\Models\UserAddress;
use App\Models\Address;
use App\Models\Delivery_address;
use App\Models\Billing_address;

class HomeController extends Controller
{
    public function index(): View
    {
        $coupon = Coupon::active()->public()->first();

        $categories = Category::select('slug', 'cover', 'name')
            ->whereNotNull('parent_id')->get();

        return view('frontend.index', compact('categories', 'coupon'));
    }

    public function search(Request $request): JsonResponse
    {
        $data = Product::select('slug', 'name')
            ->where('name', 'LIKE', '%' . $request->productName . '%')
            ->active()
            ->hasQuantity()
            ->activeCategory()
            ->take(5)
            ->get();

        return response()->json($data);
    }

    public function RegisterNew(Request $request)
    {
        //dd($request->all());

        $user = new User();
        $user->full_name = $request->fName;
        $user->email = $request->email;
        $user->phone = $request->number;
        $user->password = Hash::make($request->password);
        $user->sex = $request->sex;
        $user->dob = $request->dob;
        $user->role = 3;
        $user->save();

        // Save Address in user address table
        $user_address = new Delivery_address();
        $user_address->user_id = $user->id;
        $user_address->zip_code = $request->postcode;
        $user_address->address = $request->address;
        $user_address->city = $request->city;
        $user_address->save();

        Auth::login($user, true);
        return redirect()->back();
    }


    public function billing_address(Request $request)
    {
        $user_id = auth()->user()->id;

        // Save Address in user address table
        $address = new Address();
        $address->city = $request->city;
        $address->user_id = $user_id;
        $address->bill = $request->address;
        $address->save();
        return redirect()->back()->with('successMsg', 'Billing Address added Successfull...');
    }


    public function delivery_address(Request $request)
    {
        $user_id = auth()->user()->id;

        //Save Address in user address table
        $address = new Delivery_address();
        $address->user_id = $user_id;
        $address->city = $request->city;
        $address->address = $request->address;
        $address->zip_code = $request->zip_code;
        $address->save();
        // dd($address);
        // dd($address->save());
        return redirect()->back()->with('successMsg', 'Delivery Address added Successfull...');
    }


    // function to save bill address
    public function save_bill_address(Request $request)
    {
        $user_id = auth()->user()->id;

        //Save Address in user address table
        $address = new Billing_address();
        $address->user_id = $user_id;
        $address->city = $request->bcity;
        $address->address = $request->baddress;
        $address->zip_code = $request->bpostcode;
        $address->save();

        return redirect()->back()->with('successMsg', 'Billing Address added Successfull...');
    }
}
