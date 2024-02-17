<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\{QuesAns, Questions};
use App\Models\Product;
use App\Models\Category;

class QuestionnaireController extends Controller
{
    public function index($cat)
    {

        $products = Product::select('*')
        ->where('category_id', '=', $cat)
        ->where('quantity','>',0)
        ->active()
        ->get();
// for deleting Questioners data if user is not login
        // $usersToDelete = QuesAns::whereRaw('CHAR_LENGTH(session_id) > 10')->get();
        // foreach ($usersToDelete as $u) {
        //     $u->delete();
        // }



        $questions=Questions::where('Quescategory', $cat)->get();
        if($cat==31){
            return view('frontend.questionnaire.beard',compact('cat','products', 'questions'));
        }
        elseif($cat ==32){
            return view('frontend.questionnaire.erectiledysfunction',compact('cat','products', 'questions'));
        }elseif($cat ==33){
            return view('frontend.questionnaire.premature',compact('cat','products', 'questions'));
        }
        else{
            return view('frontend.questionnaire.hairLoss',compact('cat','products', 'questions'));
        }
    }

    public function index_new($cat)
    {
        return view('frontend.questionnaire.index2',compact('cat'));
    }

    
    public function abortQuestionnaire(Request $request)
    {
        $id =session('my_random_string');
        $quesAns = QuesAns::where(['category'=> $request->catId, 'session_id'=>$id])->orderBy('id','desc')->get();
        return view('frontend.questionnaire.abortQuestionnaire', compact('quesAns'));
    }

// =========================== 
// satus code for questionnaires
// 404 =>saftey alert and questinnaire abort
// 401 => notification alert
// 200 =>success
    public function storeAquestion(Request $request)
    {

      
        if (Auth::check()) {
            $id = auth()->user()->id;
        } else {
            $id =session('my_random_string');
        }
        // Question 1
        if($request->question == 'What was your sex assigned at birth?'){
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->where('category', $request->catId)->first();
                if ($user != null) {
                    $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
                }
                if($request->question == 'What was your sex assigned at birth?' && $request->answer =='male'){
                    $ques = QuesAns::updateOrCreate([
                        'session_id' => $id,
                        'question' => $request->question,
                        'answer' => $request->answer,
                        'category' => $request->catId,
                        'details' => $request->detail,

                    ]);
                    $msg =[
                        'status' =>200,
                        'message'=>"Go for next Questions"
                    ];
                    return $msg;
                }else{
                    $msg =[
                        'status' =>404,
                        'message'=>"gents products are formulated for individuals who are born male and don’t 
                        currently offer safe treatments prescribed for people born female"
                    ];
                    return $msg;
                }
        }



        // Question 2
        if($request->question == 'WHAT IS YOUR AGE GROUP'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }

            if($request->question == 'WHAT IS YOUR AGE GROUP' && $request->answer !='under18'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $msg =[
                    'status' =>404,
                    'message'=>"You are below 18"
                ];
                return $msg;
            }
        }




         // Question 3
      
        if($request->question == 'WHAT TYPE OF BEARD Do you currently have'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }

            if($request->question == 'WHAT TYPE OF BEARD Do you currently have' && $request->answer =='slow-or-patchy-growth'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }elseif($request->question == 'WHAT TYPE OF BEARD Do you currently have' && $request->answer =='hair-loss-over'){
                $msg =[
                    'status' =>404,
                    'message'=>"Hair loss around red or inflamed skin could be dermatitis or a fungal infection. Therefore, it's best to consult your GP as they will be
                     able to organise an investigation/ prescribe medication to help with the skin condition"
                ];
                return $msg;
            }
            elseif($request->question == 'WHAT TYPE OF BEARD Do you currently have' && $request->answer =='defined-circular-areas-of-no-growth'){
                $msg =[
                    'status' =>404,
                    'message'=>"Defined circular areas of hair loss on the beard may suggest a form of alopecia, therefore it 
                    is best to consult your GP so they can investigate"
                ];
                return $msg;
            }
            else{
                $msg =[
                    'status' =>404,
                    'message'=>"A complete lack of beard growth may suggest a hormonal problem or an autoimmune condition. Therefore, it's best to consult your GP as
                     they will be able to organise an investigation into the root cause of your inability to grow beard hair"
                ];
                return $msg;
            }
        }


              // Question 4
   
        if($request->question == 'Have you noticed ANY CHANGES SUDDEN IN YOUR BEARD growth'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }

            if($request->question == 'Have you noticed ANY CHANGES SUDDEN IN YOUR BEARD growth' && $request->answer =='no'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $msg =[
                    'status' =>404,
                    'message'=>"The safety of our patients is our top priority. Unfortunately, we are unable to recommend the treatment you have selected because it is not designed for sudden hair loss. Rapid hair
                     loss may be a sign of an underlying condition, so we recommend contacting your GP for advice to investigate"
                ];
                return $msg;
            }
        }


     // Question 5

        if($request->question == 'ANY LOSS OF HAIR ON ANY PARTS OF YOUR BODY OTHERWISE'){

            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            // return $request;
            if($request->question == "ANY LOSS OF HAIR ON ANY PARTS OF YOUR BODY OTHERWISE" && $request->answer =='no'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,

                ]);
                $msg =[
                    'status' =>401,
                    'message'=>"WILL REVIEW text MANUALLY"
                ];
                return $msg;
            }
        }



     // Question 6
        if($request->question == 'HAVE YOU TAKEN MINOXIDIL IN PAST 12 MONTHS'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == 'HAVE YOU TAKEN MINOXIDIL IN PAST 12 MONTHS' && $request->answer =='no'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->details,
                    'category' => $request->catId,

                ]);
                $msg =[
                    'status' =>401,
                    'message'=>" GIVE DETAILS OF WHAT HAPPEN, EFFICACY, 
                    SIDE EFFECTS – WILL answers REVIEW MANUALLY – then continue to q7"
                ];
                return $msg;
            }
        }



         // Question 7

        if($request->question == 'ARE YOU ALLERGIC TO MINOXIDIL'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == 'ARE YOU ALLERGIC TO MINOXIDIL' && $request->answer =='no'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $msg =[
                    'status' =>404,
                    'message'=>"ARE YOU NOT Eligiable to take this medicine"
                ];
                return $msg;
            }
        }

        // Qurestion 8
        if($request->question == 'Do you suffer from sensitive or damaged skin, or have you been diagnosed with a skin condition around the beard area?'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }

            if($request->question == 'Do you suffer from sensitive or damaged skin, or have you been diagnosed with a skin condition around the beard area?' && $request->answer =='yes'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,

                ]);
                $msg =[
                    'status' =>401,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $msg =[
                    'status' =>404,
                    'message'=>"ARE YOU NOT Eligiable to take this medicine"
                ];
                return $msg;
            }
        }



        // Qurestion 9
        if($request->question == 'Have you been diagnosed with high or low blood pressure?'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == 'Have you been diagnosed with high or low blood pressure?' && $request->answer =='no'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $msg =[
                    'status' =>404,
                    'message'=>"ARE YOU NOT Eligiable to take this medicine"
                ];
                return $msg;
            }
        }


        
        // Qurestion 10

        if($request->question == 'DO YOU SMOKE'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == 'DO YOU SMOKE' && $request->answer =='no'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>401,
                    'message'=>"continue but we will note this "
                ];
                return $msg;
            }
        }


        // Qurestion 11

        if($request->question == "It's really important to let us know if you have any"){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == "It's really important to let us know if you have any" && $request->answer =='yes'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,

                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>401,
                    'message'=>"continue but we will note this "
                ];
                return $msg;
            }
        }



        // if($request->question == 'YES THE ABOVE APPLIES TO ME'){
        //     if($request->question == 'YES THE ABOVE APPLIES TO ME' && $request->answer =='if-yes-then-ask-them-to-fill-in'){
        //         Session::push(['question'], [$request->question]);
        //         return session()->all();

        //     }else{
        //         return "this value will stored and you wil continue";
        //     }
        // }
        // Qurestion 12

        if($request->question == 'WOULD YOU LIKE TO TELL YOUR GP'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == 'WOULD YOU LIKE TO TELL YOUR GP' && $request->answer =='yes'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->details,
                    'category' => $request->catId,

                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,

                ]);
                $msg =[
                    'status' =>500,
                    'message'=>"continue but we will note this "
                ];
                return $msg;
            }
        }


    }
    


    // ===========================
    public function storeBeared(Request $request)
    {

        $id =session('my_random_string');
        if (Auth::check()) {
            $Userid = auth()->user()->id;
            QuesAns::where('session_id', $id)->update(['userid' => $Userid]);
        } 
        // Question 1
        if($request->question == 'Identify your birth gender'){
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->where('category', $request->catId)->first();
                if ($user != null) {
                    $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
                }
                if($request->question == 'Identify your birth gender' && $request->answer =='male'){
                    $ques = QuesAns::updateOrCreate([
                        'session_id' => $id,
                        'question' => $request->question,
                        'answer' => $request->answer,
                        'category' => $request->catId,
                        'details' => $request->detail,

                    ]);
                    $msg =[
                        'status' =>200,
                        'message'=>"Go for next Questions"
                    ];
                    return $msg;
                }else{
                    $msg =[
                        'status' =>404,
                        'message'=>"Regrettably, Agent's beard growth products are currently
                        designed only for those identified as male at birth."
                    ];
                    return $msg;
                }
        }



        // Question 2
        if($request->question == 'Please indicate your age group'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }

            if($request->question == 'Please indicate your age group' && $request->answer !='under18'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $msg =[
                    'status' =>404,
                    'message'=>"Unfortunately, your provided age makes you unsuitable for this Agent treatment.
                    "
                ];
                return $msg;
            }
        }




         // Question 3
      
        if($request->question == 'Describe your current beard growth'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }

            if($request->question == 'Describe your current beard growth' && $request->answer =='slow-or-patchy-growth'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }elseif($request->question == 'WHAT TYPE OF BEARD Do you currently have' && $request->answer =='hair-loss-over'){
                $msg =[
                    'status' =>404,
                    'message'=>"Hair loss around red or inflamed skin could signal dermatitis or a fungal infection. Consult your GP for an investigation or to prescribe medication to help with the skin condition"
                ];
                return $msg;
            }
            elseif($request->question == 'WHAT TYPE OF BEARD Do you currently have' && $request->answer =='defined-circular-areas-of-no-growth'){
                $msg =[
                    'status' =>404,
                    'message'=>"Defined circular areas of hair loss on the beard may suggest a form of alopecia. Consult your GP for further investigation."
                ];
                return $msg;
            }
            else{
                $msg =[
                    'status' =>404,
                    'message'=>" complete absence of beard growth could indicate a hormonal issue or an autoimmune condition. It's best to consult your GP who can conduct an investigation into the root cause of your inability to grow beard hair"
                ];
                return $msg;
            }
        }


              // Question 4
   
        if($request->question == 'Have you observed any sudden changes in your beard growth'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }

            if($request->question == 'Have you observed any sudden changes in your beard growth' && $request->answer =='no'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $msg =[
                    'status' =>404,
                    'message'=>"The safety of our patients is our top priority. Unfortunately, the treatment you selected is not designed for sudden hair loss, which may signal an underlying condition. We recommend contacting your GP for advice."
                ];
                return $msg;
            }
        }


     // Question 5

        if($request->question == 'Are you currently on any of the following medications'){

            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            // return $request;
            if($request->question == "Are you currently on any of the following medications" && $request->answer =='no'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,

                ]);
                $msg =[
                    'status' =>401,
                    'message'=>"Please specify the areas of your body affected and how long you have been experiencing this hair loss.Highlight for admin review"
                ];
                return $msg;
            }
        }



     // Question 6
        if($request->question == 'Have you used minoxidil in the past 12 months'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == 'Have you used minoxidil in the past 12 months' && $request->answer =='no'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->details,
                    'category' => $request->catId,

                ]);
                $msg =[
                    'status' =>401,
                    'message'=>"Please provide details about your previous experience with minoxidil, including formulation, efficacy, and side effects"
                ];
                return $msg;
            }
        }



        // Question 7

        if($request->question == 'Do you have a known allergy to minoxidil'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == 'Do you have a known allergy to minoxidil' && $request->answer =='no'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $msg =[
                    'status' =>404,
                    'message'=>"Unfortunately, our topical solution contains minoxidil which is unsuitable if you are allergic"
                ];
                return $msg;
            }
        }

        // Qurestion 8
        if($request->question == 'Do you have sensitive or damaged skin, or a diagnosed skin condition in the beard area'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }

            if($request->question == 'Do you have sensitive or damaged skin, or a diagnosed skin condition in the beard area' && $request->answer =='no'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,

                ]);
                $msg =[
                    'status' =>401,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,

                ]);
                $msg =[
                    'status' =>401,
                    'message'=>"Please provide details about your skin condition, including any diagnosis if applicable"
                ];
                return $msg;
            }
        }



        // Qurestion 9
        if($request->question == 'Have you been diagnosed with high or low blood pressure'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == 'Have you been diagnosed with high or low blood pressure' && $request->answer =='no'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $msg =[
                    'status' =>404,
                    'message'=>"This treatment is not suitable for you"
                ];
                return $msg;
            }
        }


        
        // Qurestion 10

        if($request->question == 'DO YOU SMOKE'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == 'DO YOU SMOKE' && $request->answer =='no'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>401,
                    'message'=>"Continue but note this for admin review "
                ];
                return $msg;
            }
        }


        // Qurestion 11

        if($request->question == "Have you had any of the following"){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == "Have you had any of the following" && $request->answer =='no'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,

                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>401,
                    'message'=>"Please provide specific details about any or all of the above conditions that apply to you "
                ];
                return $msg;
            }
        }



  
        // Qurestion 12

        if($request->question == 'Would you like to inform your gp about this consultation'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == 'Would you like to inform your gp about this consultation' && $request->answer =='yes'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->details,
                    'category' => $request->catId,

                ]);
                $msg =[
                    'status' =>401,
                    'message'=>"Please provide your GP's name and the practice's address"
                ];
                return $msg;
            }else{
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,

                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Continue to final treatment selection "
                ];
                return $msg;
            }
        }


    }
    
    // ===========================
    public function storeHairLoss(Request $request)
    {       

        $id =session('my_random_string');
        if (Auth::check()) {
            $Userid = auth()->user()->id;
            QuesAns::where('session_id', $id)->update(['userid' => $Userid]);
        } 
        
        // Question 1
        if($request->question == 'What is your type of hair loss'){
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->where('category', $request->catId)->first();
                if ($user != null) {
                    $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
                }
                if($request->question == 'What is your type of hair loss' && $request->answer =='Patchy'){
                    $msg =[
                        'status' =>404,
                        'message'=>"Our treatments may not be effective if you're experiencing patchy hair loss, as this could suggest a form of alopecia. Please consult with your GP"
                    ];
                    return $msg;
                }elseif($request->question == 'What is your type of hair loss' && $request->answer =='Completely bald'){
                    $msg =[
                        'status' =>404,
                        'message'=>"Our treatments are not designed to work on completely bald areas"
                    ];
                    return $msg;
                }else{
                    $ques = QuesAns::updateOrCreate([
                        'session_id' => $id,
                        'question' => $request->question,
                        'answer' => $request->answer,
                        'category' => $request->catId,
                        'details' => $request->detail,

                    ]);
                    $msg =[
                        'status' =>200,
                        'message'=>"Go fopr next Question"
                    ];
                    return $msg;
                }
        }



        // Question 2
        if($request->question == 'When did you notice any hair loss'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }

            if($request->question == 'When did you notice any hair loss' && $request->answer =='past couple of months / years'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $msg =[
                    'status' =>404,
                    'message'=>"Our treatments are not suitable for sudden hair loss. Please consult your GP"
                ];
                return $msg;
            }
        }




         // Question 3
      
        if($request->question == 'Have you experienced hair loss anywhere else on your body'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }

            if($request->question == 'Have you experienced hair loss anywhere else on your body' && $request->answer =='yes'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }
            else{
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }
        }


        // Question 4
   
        if($request->question == 'Have you taken any of these medications consistently over the last 12 months: Minoxidil, Regaine, Finasteride, or Propecia'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }

            if($request->question == ' Have you taken any of these medications consistently over the last 12 months: Minoxidil, Regaine, Finasteride, or Propecia' && $request->answer =='no'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }
        }


     // Question 5

        if($request->question == 'Do you have any scalp problems'){

            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            // return $request;
            if($request->question == "Do you have any scalp problems" && $request->answer =='no'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions112"
                ];
                return $msg;
            }elseif($request->question == "Do you have any scalp problems" && $request->answer =='yes'  && $request->detail=='Dandruff'){

                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,

                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $msg =[
                    'status' =>404,
                    'message'=>"Saftey Alert"
                ];
                return $msg;
            }
        }



     // Question 6
        if($request->question == 'Are any of the following true'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == 'Are any of the following true' && $request->answer =='no'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,
                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
               
                $msg =[
                    'status' =>300,
                    'message'=>"Safety Alert!"
                ];
                return $msg;
            }
        }

     // Question 6_1
        if($request->question == 'Have you previously been diagnosed with breast cancer, prostate cancer, or are you currently undergoing PSA'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == 'Have you previously been diagnosed with breast cancer, prostate cancer, or are you currently undergoing PSA' && $request->answer =='no'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,
                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
            
                $msg =[
                    'status' =>300,
                    'message'=>"Our treatments are not suitable for patients with your medical history. Please consult your GP"
                ];
                return $msg;
            }
        }

     // Question 6_2
         if($request->question == 'Are you experiencing, or have previously experienced, depression, anxiety or panic disorders'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == 'Are you experiencing, or have previously experienced, depression, anxiety or panic disorders' && $request->answer =='no'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,
                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }elseif($request->question == 'Are you experiencing, or have previously experienced, depression, anxiety or panic disorders' && $request->answer =='yes' && $request->details =='I understand and agree to stop this treatment immediately and consult a doctor if I experience symptoms of depression, anxiety, or panic disorders'){
               $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,
                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }
            else{
                $msg =[
                    'status' =>404,
                    'message'=>"Saftey Alert !"
                ];
                return $msg;
            }
        }
     // Question 6_3
        if($request->question == 'Do you have uncontrolled low or high blood pressure'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == 'Do you have uncontrolled low or high blood pressure' && $request->answer =='no'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,
                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
            
                $msg =[
                    'status' =>404,
                    'message'=>"Our treatments are not suitable for patients with your medical history. Please consult your GP"
                ];
                return $msg;
            }
        }
     // Question 7

        if($request->question == 'Do you have any of the following problems'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == 'Do you have a known allergy to minoxidil' && $request->answer =='no'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $msg =[
                    'status' =>404,
                    'message'=>"Saftey Alert"
                ];
                return $msg;
            }
        }

     // Qurestion 8
        if($request->question == 'Do you have any intolerances/allergies to the following'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }

            if($request->question == 'Do you have any intolerances/allergies to the following' && $request->answer =='Lactose' && $request->details=='yes'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,

                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $msg =[
                    'status' =>404,
                    'message'=>"Our treatments are not suitable for patients with your medical history. Please consult your GP"
                ];
                return $msg;

            }
        }



     // Qurestion 9
        if($request->question == "It's really important to tell us about"){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == "It's really important to tell us about" && $request->answer =='no'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }
        }


        
        // // Qurestion 10

        // if($request->question == 'DO YOU SMOKE'){
        //     $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
        //     if ($user != null) {
        //         $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
        //     }
        //     if($request->question == 'DO YOU SMOKE' && $request->answer =='no'){
        //         $ques = QuesAns::updateOrCreate([
        //             'session_id' => $id,
        //             'question' => $request->question,
        //             'answer' => $request->answer,
        //             'details' => $request->detail,
        //             'category' => $request->catId,


        //         ]);
        //         $msg =[
        //             'status' =>200,
        //             'message'=>"Go for next Questions"
        //         ];
        //         return $msg;
        //     }else{
        //         $ques = QuesAns::updateOrCreate([
        //             'session_id' => $id,
        //             'question' => $request->question,
        //             'answer' => $request->answer,
        //             'details' => $request->detail,
        //             'category' => $request->catId,


        //         ]);
        //         $msg =[
        //             'status' =>401,
        //             'message'=>"Continue but note this for admin review "
        //         ];
        //         return $msg;
        //     }
        // }


        // // Qurestion 11

        // if($request->question == "Have you had any of the following"){
        //     $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
        //     if ($user != null) {
        //         $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
        //     }
        //     if($request->question == "Have you had any of the following" && $request->answer =='no'){
        //         $ques = QuesAns::updateOrCreate([
        //             'session_id' => $id,
        //             'question' => $request->question,
        //             'answer' => $request->answer,
        //             'details' => $request->detail,
        //             'category' => $request->catId,

        //         ]);
        //         $msg =[
        //             'status' =>200,
        //             'message'=>"Go for next Questions"
        //         ];
        //         return $msg;
        //     }else{
        //         $ques = QuesAns::updateOrCreate([
        //             'session_id' => $id,
        //             'question' => $request->question,
        //             'answer' => $request->answer,
        //             'details' => $request->detail,
        //             'category' => $request->catId,


        //         ]);
        //         $msg =[
        //             'status' =>401,
        //             'message'=>"Please provide specific details about any or all of the above conditions that apply to you "
        //         ];
        //         return $msg;
        //     }
        // }



        // if($request->question == 'YES THE ABOVE APPLIES TO ME'){
        //     if($request->question == 'YES THE ABOVE APPLIES TO ME' && $request->answer =='if-yes-then-ask-them-to-fill-in'){
        //         Session::push(['question'], [$request->question]);
        //         return session()->all();

        //     }else{
        //         return "this value will stored and you wil continue";
        //     }
        // }
        // Qurestion 12

        // if($request->question == 'Would you like to inform your gp about this consultation'){
        //     $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
        //     if ($user != null) {
        //         $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
        //     }
        //     if($request->question == 'Would you like to inform your gp about this consultation' && $request->answer =='yes'){
        //         $ques = QuesAns::updateOrCreate([
        //             'session_id' => $id,
        //             'question' => $request->question,
        //             'answer' => $request->answer,
        //             'details' => $request->details,
        //             'category' => $request->catId,

        //         ]);
        //         $msg =[
        //             'status' =>401,
        //             'message'=>"Please provide your GP's name and the practice's address"
        //         ];
        //         return $msg;
        //     }else{
        //         $ques = QuesAns::updateOrCreate([
        //             'session_id' => $id,
        //             'question' => $request->question,
        //             'answer' => $request->answer,
        //             'details' => $request->detail,
        //             'category' => $request->catId,

        //         ]);
        //         $msg =[
        //             'status' =>200,
        //             'message'=>"Continue to final treatment selection "
        //         ];
        //         return $msg;
        //     }
        // }


    }
    // ===========================

    public function storeerectiledysfunction(Request $request)
    {
        $id =session('my_random_string');
        if (Auth::check()) {
            $Userid = auth()->user()->id;
            QuesAns::where('session_id', $id)->update(['userid' => $Userid]);
        } 
        // Question 1
        // I have previously been able to maintain an erection, but I'm now unable to do so reliably
        if($request->question == 'Kindly tell us your age'){
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->where('category', $request->catId)->first();
                if ($user != null) {
                    $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
                }
                if($request->question == 'Kindly tell us your age' && $request->answer =="26-69"){
                    $ques = QuesAns::updateOrCreate([
                        'session_id' => $id,
                        'question' => $request->question,
                        'answer' => $request->answer,
                        'category' => $request->catId,
                        'details' => $request->detail,

                    ]);
                    $msg =[
                        'status' =>200,
                        'message'=>"Go for next Questions"
                    ];
                    
                    return $msg;
                }elseif($request->question == 'Kindly tell us your age' && $request->answer == '18-25' && $request->detail =="I have previously been able to maintain an erection, but I'm now unable to do so reliably"){
                    $ques = QuesAns::updateOrCreate([
                        'session_id' => $id,
                        'question' => $request->question,
                        'answer' => $request->answer,
                        'category' => $request->catId,
                        'details' => $request->detail,

                    ]);
                    $msg =[
                        'status' =>200,
                        'message'=>"Go for next Questions"
                    ];
                    
                    return $msg;
                  
                }
                elseif($request->question == 'Kindly tell us your age' && $request->answer == "70 or over" && $request->detail =="Between 90/50 and 140/90 mmHg"){
                    $ques = QuesAns::updateOrCreate([
                        'session_id' => $id,
                        'question' => $request->question,
                        'answer' => $request->answer,
                        'category' => $request->catId,
                        'details' => $request->detail,
                    ]);
                    $msg =[
                        'status' =>200,
                        'message'=>"Go for next Questions"
                    ];
                    return $msg;
                }else{
                    $msg =[
                        'status' =>404,
                        'message'=>"Regrettably, Agent's beard growth products are currently designed only for those identified as male at birth."
                    ];
                    return $msg;
                }

        }

        // Question 2
        if($request->question == 'Have you tried any of the following treatments before'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }

            if($request->question == 'Have you tried any of the following treatments before'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,
                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }
        }

         // Question 3
      
        if($request->question == 'Do any of the following statements apply to you'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }

            if($request->question == 'Do any of the following statements apply to you' && $request->answer =='no'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }
            else{
                $msg =[
                    'status' =>404,
                    'message'=>"Activate Safety Response"
                ];
                return $msg;
            }
        }
              // Question 4
   
        if($request->question == 'Do any of the following medical conditions apply to you'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }

            if($request->question == 'Do any of the following medical conditions apply to you' && $request->answer =='no'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $msg =[
                    'status' =>404,
                    'message'=>"Activate Safety Response"
                ];
                return $msg;
            }
        }

     // Question 5

        if($request->question == 'Are you currently on any of the following medications'){

            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            // return $request;
            if($request->question == "Are you currently on any of the following medications" && $request->answer =='no'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $msg =[
                    'status' =>404,
                    'message'=>"Activate Safety Response"
                ];
                return $msg;
            }
        }

     // Question 6
        if($request->question == 'Have you experienced any of the following'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == 'Have you experienced any of the following' && $request->answer =='no'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{

                $msg =[
                    'status' =>404,
                    'message'=>"Activate Safety Response"
                ];
                return $msg;
            }
        }

        // Question 7

        if($request->question == 'Do you agree to the following statement'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == 'Do you agree to the following statement' && $request->answer =='yes'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $msg =[
                    'status' =>404,
                    'message'=>"Activate Safety Response"
                ];
                return $msg;
            }
        }

        // Qurestion 8
        if($request->question == 'Are you taking any medications (including over the counter or herbal medicines)? Do you have any other medical conditions not already mentioned'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }

            if($request->question == 'Are you taking any medications (including over the counter or herbal medicines)? Do you have any other medical conditions not already mentioned' && $request->answer =='no'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,

                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,

                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }
        }

        // Qurestion 9
        if($request->question == 'Does any of the following statements regarding allergies apply to you'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == 'Does any of the following statements regarding allergies apply to you' && $request->answer =='I have lactose intolerance but not a lactose allergy' && $request->detail == "I can't tolerate even small amounts of lactose"){
                $msg =[
                    'status' =>404,
                    'message'=>"This treatment is not suitable for you"
                ];
                return $msg;

            }else{
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }
        }

        // Qurestion 10

        if($request->question == "Please share with us any significant illnesses, ongoing medical conditions, medications (prescribed or over-the-counter) you're currently taking, allergies to medication, or surgical procedures you've undergone. This information is crucial for our clinicians to ensure the prescribed treatment is safe for you"){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == "Please share with us any significant illnesses, ongoing medical conditions, medications (prescribed or over-the-counter) you're currently taking, allergies to medication, or surgical procedures you've undergone. This information is crucial for our clinicians to ensure the prescribed treatment is safe for you" && $request->answer =="I don't have a significant illness, ongoing medical condition, operation, allergy to medication, or take prescribed or over-the-counter medication to inform you about."){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Activate Safety Response"
                ];
                return $msg;
            }else{
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Activate Safety Response"
                ];
                return $msg;
            }
        }
        // Qurestion 11

        if($request->question == "Would you like us to inform your GP about your treatment"){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == "Would you like us to inform your GP about your treatment"){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,

                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }
        }
  
        // Qurestion 12

        if($request->question == 'On average, how often do you anticipate having sex and using these medications'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == 'On average, how often do you anticipate having sex and using these medications'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->details,
                    'category' => $request->catId,

                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }    
        
        }
                // Qurestion 13

                if($request->question == 'How would you prefer to take your medication'){
                    $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
                    if ($user != null) {
                        $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
                    }
                    if($request->question == 'How would you prefer to take your medication'){
                        $ques = QuesAns::updateOrCreate([
                            'session_id' => $id,
                            'question' => $request->question,
                            'answer' => $request->answer,
                            'details' => $request->details,
                            'category' => $request->catId,
        
                        ]);
                        $msg =[
                            'status' =>200,
                            'message'=>"Go for next Questions"
                        ];
                        return $msg;
                    }    
                
                }


    }
    // ===========================

    public function storeApremature(Request $request)
    {

        $id =session('my_random_string');
        if (Auth::check()) {
            $Userid = auth()->user()->id;
            QuesAns::where('session_id', $id)->update(['userid' => $Userid]);
        } 
        // Question 1
        if($request->question == 'Could you please verify your age group'){
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->where('category', $request->catId)->first();
                if ($user != null) {
                    $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
                }
                if($request->question == 'Could you please verify your age group' && $request->answer !='Under 18'){
                    $ques = QuesAns::updateOrCreate([
                        'session_id' => $id,
                        'question' => $request->question,
                        'answer' => $request->answer,
                        'category' => $request->catId,
                        'details' => $request->detail,

                    ]);
                    $msg =[
                        'status' =>200,
                        'message'=>"Go for next Questions"
                    ];
                    return $msg;
                }else{
                    $msg =[
                        'status' =>404,
                        'message'=>"Saftey alert"
                    ];
                    return $msg;
                }
        }



        // Question 2
        if($request->question == "Could you specify the duration for which you've been experiencing premature ejaculation"){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }

            if($request->question == "Could you specify the duration for which you've been experiencing premature ejaculation" ){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }
        }




         // Question 3
      
        if($request->question == 'How regularly does premature ejaculation affect you'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }

            if($request->question == 'How regularly does premature ejaculation affect you' ){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,

                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }
        }


              // Question 4
   
        if($request->question == 'How soon after penetration do you typically ejaculate'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }

            if($request->question == 'How soon after penetration do you typically ejaculate'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,

                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }
            elseif($request->question == 'How soon after penetration do you typically ejaculate' && $request->answer == '10 minutes and above'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,

                ]);
                $msg =[
                    'status' =>401,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }
        }


        // Question 5

        if($request->question == 'Would you say you have control over when you ejaculate'){

            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            // return $request;
            if($request->question == "Would you say you have control over when you ejaculate" ){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }
        }



        // Question 6
        if($request->question == 'Has premature ejaculation caused distress or difficulties in your sexual relationships'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == 'Has premature ejaculation caused distress or difficulties in your sexual relationships'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }
        }



         // Question 7

        if($request->question == 'Have you previously tried any medication for premature ejaculation such as Paroxetine 20mg, Dapoxetine 30mg, Dapoxetine 60mg, Delay spray, Delay wipes, or any other treatment?'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == 'Have you previously tried any medication for premature ejaculation such as Paroxetine 20mg, Dapoxetine 30mg, Dapoxetine 60mg, Delay spray, Delay wipes, or any other treatment?' && $request->answer =='no'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,
                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,
                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }
        }

        // Qurestion 8
        if($request->question == 'Are you always able to achieve and maintain an erection when you desire'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }

            if($request->question == 'Are you always able to achieve and maintain an erection when you desire'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,

                ]);
                $msg =[
                    'status' =>401,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }
        }



        // Qurestion 9
        if($request->question == 'Do you regularly use any of the following recreational substances?'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == 'Do you regularly use any of the following recreational substances?' && $request->answer =='Other narcotic drugs'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,
                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }elseif($request->question == 'Do you regularly use any of the following recreational substances?' && $request->answer =='no'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,
                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }{
                $msg =[
                    'status' =>404,
                    'message'=>"ARE YOU NOT Eligiable to take this medicine"
                ];
                return $msg;
            }
        }


        
        // Qurestion 10

        if($request->question == 'Do any of the following health conditions pertain to you?'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == 'Do any of the following health conditions pertain to you?' && $request->answer =='None of the above apply to me'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }elseif($request->question == 'Do any of the following health conditions pertain to you?' && $request->answer =='Other medical conditions not mentioned here'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,


                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }
            else{
                $msg =[
                    'status' =>404,
                    'message'=>"Saftey alert"
                ];
                return $msg;
            }
        }


        // Qurestion 11

        if($request->question == "Are you currently taking any of the following medications?"){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == "Are you currently taking any of the following medications?" && $request->answer =='None of the above apply to me'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,

                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }elseif($request->question == "Are you currently taking any of the following medications?" && $request->answer =='Other medical conditions not mentioned here'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->detail,
                    'category' => $request->catId,

                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{

                $msg =[
                    'status' =>404,
                    'message'=>"continue but we will note this "
                ];
                return $msg;
            }
        }

        // Qurestion 12

        if($request->question == 'Do you have any allergies to the following'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == 'Do you have any allergies to the following' && $request->answer !='Lactose'){
                $ques = QuesAns::updateOrCreate([
                    'session_id' => $id,
                    'question' => $request->question,
                    'answer' => $request->answer,
                    'details' => $request->details,
                    'category' => $request->catId,

                ]);
                $msg =[
                    'status' =>200,
                    'message'=>"Go for next Questions"
                ];
                return $msg;
            }else{
                
                $msg =[
                    'status' =>404,
                    'message'=>"Saftey Alert !!"
                ];
                return $msg;
            }
        }


      // Qurestion 13

        if($request->question == 'Please inform us about any major illnesses, ongoing medical conditions, medications (prescribed or over-the-counter) you take, allergies to medication, or surgeries. This information is necessary for our clinicians to ensure the prescribed treatment is safe for you'){
            $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
            if ($user != null) {
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
            }
            if($request->question == 'Please inform us about any major illnesses, ongoing medical conditions, medications (prescribed or over-the-counter) you take, allergies to medication, or surgeries. This information is necessary for our clinicians to ensure the prescribed treatment is safe for you'){
                    $ques = QuesAns::updateOrCreate([
                        'session_id' => $id,
                        'question' => $request->question,
                        'answer' => $request->answer,
                        'details' => $request->details,
                        'category' => $request->catId,

                    ]);
                    $msg =[
                        'status' =>200,
                        'message'=>"Go for next Questions"
                    ];
                    return $msg;
                }
        }          
        


              // Qurestion 14

              if($request->question == 'Would you like us to inform your GP about your treatment?'){
                $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->first();
                if ($user != null) {
                    $user = QuesAns::where('question', '=', $request->question)->where('session_id','=',$id)->where('category', $request->catId)->delete();
                }
                if($request->question == 'Would you like us to inform your GP about your treatment?'){
                        $ques = QuesAns::updateOrCreate([
                            'session_id' => $id,
                            'question' => $request->question,
                            'answer' => $request->answer,
                            'details' => $request->details,
                            'category' => $request->catId,
    
                        ]);
                        $msg =[
                            'status' =>200,
                            'message'=>"Go for next Questions"
                        ];
                        return $msg;
                    }
            }  


    
    
    }
    

}