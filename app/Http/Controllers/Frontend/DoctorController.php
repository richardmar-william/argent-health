<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Frontend\ProfileRequest;
use App\Models\Order;
use App\Services\ImageService;
use Illuminate\Support\Facades\Hash;
use App\Traits\ImageUploadTrait;
use App\Models\QuesAns;
use App\Models\Temp;
use App\Models\User;


class DoctorController extends Controller
{
    public function dashboard()
    {
        return view('frontend.doctor.dashboard');
    }
    public function profile()
    {
        return view('frontend.doctor.profile');
    }

    public function updateProfile(ProfileRequest $request)
    {

        $user = auth()->user();
        if (!empty($request->password) && !Hash::check($request->password, $user->password)) {
            $password = bcrypt($request->password);
        }

        if ($request->hasFile('user_image')) {
            if ($user->user_image) {
                (new ImageService())->unlinkImage($user->user_image, 'users');
            }
            $userImage = (new ImageService())->storeUserImages($user->username, $request->user_image);
        }

        $user->update([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'receive_email' => $request->receive_email,
            'user_image' => $userImage ?? $user->user_image,
            'password' => $password ?? $user->password
        ]);
        return redirect()->back()->with([
            'message' => 'Updated profile successfully',
            'alert-type' => 'success'
        ]);
    }

    public function removeImage()
    {
        if (auth()->user()->user_image) {
            (new ImageService())->unlinkImage(auth()->user()->user_image, 'users');
            auth()->user()->update(['user_image' => NULL]);

            toast('Image removed successfully', 'success');
            return redirect()->back();
        }

        toast('please try again later', 'warning');
        return redirect()->back();
    }

    public function addresses()
    {
        return view('frontend.doctor.addresses');
    }

    public function orders()
    {
        return view('frontend.doctor.orders');
    }


    /* fucntion for patient history */
    public function patient_history(){
        // $quationnair = Temp::orderBy('id','DESC')->where('user_id','!=','')->where('epdf','!=','')->get();
        $quationnair = Temp::select('user_id','session_id')->where('user_id','!=','')->where('epdf','!=','')->groupBy('user_id')->get();
        // dd($quationnair);
        return view('frontend.doctor.patient_history',compact('quationnair'));
    }
    /* fucntion for patient profile */
    public function patient_profile($id){

        // $quationnair = Temp::orderBy('id','DESC')->where('user_id','!=','')->where('epdf','!=','')->get();
        $user_details = User::where('id','=',$id)->get();
       
        // dd($quationnair);
        return view('frontend.doctor.patient_profile',compact('user_details'));
    }

    /* fucntion for new patient history */
    public function new_patient_history(){
        // $quationnair = Temp::orderBy('id','DESC')->where('userid','!=','')->where('epdf','=','')->get();
        $quationnair = Temp::orderBy('id','DESC')->where('epdf','=',null)->get();
        //dd($quationnair);
        return view('frontend.doctor.new_patient_history',compact('quationnair'));
    } 

     /* fucntion for patient detail */
     public function patient_detail(Request $request){
        //dd($request->session_id);
        $temp_data = Temp::where(['session_id'=>$request->session_id])->first();
        $user_data = User::where(['id'=>$temp_data->user_id])->first();
        // $quesAns = QuesAns::where(['category'=> $request->catid, 'userid'=>$request->id, 'session_id'=>$request->session_id])->get();
        // $user_data = QuesAns::where(['category'=> $request->catid, 'userid'=>$request->id])->orderBy('id','desc')->groupBy('userid')->first();
        return view('frontend.doctor.patient_detail',compact('temp_data','user_data'));
    }

     
    /*  */
    public function patient_questionnaire(Request $request) {
        $temp_data = Temp::where(['session_id'=>$request->session_id])->first();
        $user_data = User::where(['id'=>$temp_data->user_id])->first();
        $dataArray =$temp_data->jason_data;
        // $question
        $question = json_decode($dataArray, true);
       
        return view('frontend.doctor.patient_questionnaire',compact('temp_data','user_data','question'));
        
    }

    public function patient_allorders(Request $request){
        // dd($request->all());
        // $temp_data = Temp::where(['session_id'=>$request->user_id])->get();
        // $order_data = Order::where(['user_id'=>$request->id])->get();
        $order_data = Order::where('user_id',$request->id)
        ->orderBy(\request()->sortBy ?? 'id', \request()->orderBy ?? 'desc')
        ->paginate(\request()->limitBy ?? 10);
        // $user_data = User::where(['id'=>$temp_data->user_id])->first();
        // $dataArray =$temp_data->jason_data;
        // $question
        // $question = json_decode($dataArray, true);
    //    dd($order_data);
        return view('frontend.doctor.patient_allorders',compact('order_data'));
    }

}
