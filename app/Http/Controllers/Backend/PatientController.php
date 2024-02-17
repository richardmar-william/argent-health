<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QuesAns;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Mail;
use Redirect;

class PatientController extends Controller
{

     /* fucntion for patient history */
     public function patient_history(){
        $quationnair = QuesAns::orderBy('id','DESC')->where('userid','!=','')->where('epdf','!=','')->groupBy('session_id')->get();
        return view('backend.patient.patient_history',compact('quationnair'));
    }

    /* fucntion for new patient history */
    public function new_patient_history(){
        $quationnair = QuesAns::orderBy('id','DESC')->where('userid','!=','')->where('epdf','=','')->groupBy('session_id')->get();
        return view('frontend.doctor.new_patient_history',compact('quationnair'));
    } 

    /* fucntion for reminder */
    public function reminder(){
        $patient = User::where('role','=',3)->orderBy('id','DESC')->get();
         return view('backend.reminder',compact('patient'));
    }


    /* fucntion to send reminder notification */
    public function send_notification($id){
            $user = User::where('id',$id)->first();    
            //dd($user->email);
            $data["email"] = $user->email;
            $data["name"] = $user->username;
            $data["title"] = "From Title";
            $data["body"] = "This is to remind you that your subscription is ending. Please 
                            subscribe to get the the benefits continue.";
      
            Mail::send('emails.reminder', $data, function($message)use($data) {
                $message->to($data["email"], $data["email"])
                        ->subject($data["title"]); 
            });

            return Redirect::back()->with(['message' => 'Reminder has been sent successfully to '. $user->username.'.']);
    }



    


}
