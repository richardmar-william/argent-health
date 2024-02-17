<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuesAns;
use App\Models\Temp;

class SignaturePadController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('signaturePad');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function upload(Request $request)
    {
        $folderPath = public_path('upload/');
        
        $image_parts = explode(";base64,", $request->signed);
      
        $image_type_aux = explode("image/", $image_parts[0]);
           
        $image_type = $image_type_aux[1];
           
        $image_base64 = base64_decode($image_parts[1]);
           
        $file = $folderPath . date('YmdHis') . '.'.$image_type;

        $imagename = date('YmdHis') . '.'.$image_type;
        //dd($file,$imagename);
        /* saving signature to database */
        $update = Temp::where('session_id', $request->session_id)->update(['signature' => $imagename]);

        file_put_contents($file, $image_base64);
        return back()->with('success', 'success Full upload signature');
    }
}
