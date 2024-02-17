<?php

namespace App\Http\Controllers;

use App\Models\Delivery_address;
use PDF;
use Illuminate\Http\Request;
use App\Models\QuesAns;
use App\Models\Temp;
use App\Models\User;
use Mail;
use Redirect;

class PDFController extends Controller
{
    public function generatePDF($id,$catid,$session_id)
    {
         //dd($id,$catid,$session_id);
        //  $this->generatePDFattachment();
        //  die();

        // $quesAns = QuesAns::where(['category'=> $catid, 'userid'=>$id, 'session_id'=>$session_id])->get();
        // $user_data = QuesAns::where(['category'=> $catid, 'userid'=>$id, 'session_id'=>$session_id])->orderBy('id','desc')->groupBy('userid')->get();
        //    dd($quesAns, $user_data);
        $quesAns = Temp::where(['category_id'=> $catid, 'user_id'=>$id, 'session_id'=>$session_id])->first();
        //dd($quesAns);
        // $data['user_data']=$user_data;
        $data['quesAns']=$quesAns;
        
        $usr = User::where(['id'=>$id])->first();
        $user_email = $usr->email; 
        $session_id = $quesAns->session_id;
        $user_name = $usr->full_name;
        $message = 'Hello '.ucfirst($user_name).'<br> Thank you for use our service. Please find the prescription in the attaachment. <br><br> Thank you <br> Best Regards..!! ';
        //dd($user_email, $session_id, $user_name, $message );

        /* TO SEND PDF TO THE USER*/ 
        $data["email"] = "dev123@yopmail.com";
        // $data['user_data']=$user_data;
        $data["session_id"] = $session_id;
        $data["title"] = "Prescription PDF";
        $data["body"] = $message;
        $data["user_name"] = $user_name; 
          
        $userAddress = Delivery_address::where('user_id',$usr->id)->first();
        $data["address"] = $userAddress->address;
        /* to generate pdf*/
        if($quesAns != null){
          $pdf = PDF::loadView('frontend.doctor.patient_detailpdf', compact('quesAns'));
        }

          /* code to save pdf into project folder */
          $path = public_path('pdf/');
          $fileName =  date('YmdHis').microtime(). '.' . 'pdf' ;
          $pdf->save($path . '/' . $fileName);
            
        // Mail::send('emails.pdf_email', $data, function ($message) use ($data, $pdf) {
        //     $message->to($data["email"])
        //         ->subject($data["title"])
        //         ->attachData($pdf->output(), "prescription.pdf");
        // });
         
        /* saving pdf to database */
        $update = Temp::where('session_id', $session_id)->update(['epdf' => $fileName]);
       
        //  return $pdf->download('invoice.pdf');
        $quationnair = Temp::where('user_id','!=','')->where('epdf','!=','')->groupBy('session_id')->get();
        return view('frontend.doctor.patient_history',compact('quationnair'))->with('successMsg', 'Hello, prescription ePDF is generated and sent to the patient with an email.');
        
    }


    // public function generatePDFattachment()
    // {
    //     $data["email"] = "dev123@yopmail.com";
    //     $data["title"] = "From ItSolutionStuff.com";
    //     $data["body"] = "This is Demo";
 
    //     $files = [
    //         public_path('pdf/202305231051250.67935800 1684839085.pdf'),
         
    //     ];
  
    //     Mail::send('emails.pdf_email', $data, function($message)use($data, $files) {
    //         $message->to($data["email"], $data["email"])
    //                 ->subject($data["title"]);
 
    //         foreach ($files as $file){
    //             $message->attach($file);
    //         }
            
    //     });
 
    //     return Redirect::back()->withErrors(['msg' => 'Prescription PDF generated and sent with Mail successfully to the user.']);
        
    // }

     
    public function prescription(Request $request){
      //dd($request->all());
      $save_pre = Temp::where('session_id', $request->session_id)->update(['doc_pin' => $request->doc_pin, 'note' => $request->note ]);
        if($save_pre){
          return redirect()->back()->with('success', 'PDF edited successfully.');
        }
    }
    


}
