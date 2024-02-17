<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Common\RegisterRequest;
use Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, RegisterRequest::rules());
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'full_name' => $data['full_name'],
            'username' => $data['email'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'sex' => $data['sex'],
            'dob' => $data['dob'],
            // 'referral_code' => $data['referral_code'],
            'password' => Hash::make($data['password'])
        ]);
         
        Mail::send('emails.register_email', ['data'=> $data], function($message)use($data) {
                $message->to($data['email'])->subject('Welcome to Agent Health!')->from(config('mail.from.address'), config('mail.from.name'));
    
            });
        $user->assignRole('user');

        return $user;
    }
}
