<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailChimpController extends Controller
{
    public function index(Request $request){
       // dd('mail chimp controller ');
       //dd($request->all());
        $this->validate($request,[
            'name'=>'required|max:8',
            'email'=>'required',
            'phone'=>'required',
            'service'=>'required',
         ]);

        $listId = env('e049ce049f');
        $mailchimp = new \Mailchimp(env('bb7f3497b74b3f386d4f4b07bcff0ed6-us21'));  

        $campaign = $mailchimp->campaigns->create('regular', [
            'list_id' => $listId,
            'subject' => 'Subscription Mail',
            'from_email' => $request->email,
            'from_name' => $request->name,
            'to_name' => 'Subscribers'

        ], [
            'html' => $request->input('content'),
            'text' => strip_tags($request->input('content'))
        ]);

        //Send campaign
        $mailchimp->campaigns->send($campaign['id']);

        dd('Campaign send successfully.');
        return redirect()->back()->with('success', 'Thank you for subscribing!');
    }

    
}
