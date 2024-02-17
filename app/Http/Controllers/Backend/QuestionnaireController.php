<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\{Questions, QuesAns, User, QuesOptions};



class QuestionnaireController extends Controller
{
    public function index()
    {
        $questions =  Questions::orderBy('id','desc')->paginate('15');
        return view('backend.questionnaire.index', compact('questions'));
    }
    public function create()
    {

        $mainCategories = Category::whereNull('parent_id')->get(['id', 'name']);

        return view('backend.questionnaire.create', compact('mainCategories'));
    }

    public function addQuestion(Request $request)
    {

        $request->validate([
            'Quesname' => 'required',
            'Quescategory' => 'required',
            'status' => 'required',
            'Option' => 'required',
        ]);
        
        $question=Questions::create($request->post());
        foreach($request->Option as $key=>$opt){
            $options= new QuesOptions;
            $options->question_id= $question->id;
            $options->option=$opt;
            $options->description=$request['description'.$key];
            $options->is_correct=$request['is_correct'.$key]??0;
            $options->is_detail=$request['is_detail'.$key]??0;
            $options->save();
            }
        return redirect()->route('admin.questioners.index')->with(['message' => ' Questionnaire has been done successfully','alert-type' => 'success']);        
    }

    public function editaQues($id)
    {
        $mainCategories = Category::whereNull('parent_id')->get(['id', 'name']);
        $questions =  Questions::where('id','=',$id)->first();
        return view('backend.questionnaire.edit', compact('questions','mainCategories'));
    
    }


    public function destroyAQues($id)
    {
        Questions::where('id',$id)->delete();

        return redirect()->route('admin.questioners.index')->with(['message' => 'Questionnaire has been deleted  successfully','alert-type' => 'success']); 
    
    
    }

    public function updateaQuestion(Request $request)
    {
        Questions::where('id',$request->id)->update([
            'Quesname'=>$request->Quesname,
            'Quescategory'=>$request->Quescategory,
            'status'=>$request->status
        ]);

        return redirect()->route('admin.questioners.index')->with(['message' => 'Questionnaire has been updated successfully','alert-type' => 'success']); 
    
    }

    /**
    * Questioners attempt listing 
    */
    public function list(){
        $keyword=\request()->keyword;
         $questioners = QuesAns::with('users', 'categories')
            ->whereHas('users', function ($query) use ($keyword){
            $query->where('username', 'like', '%'.$keyword.'%');
            })
             ->orwhereHas('categories', function ($query) use ($keyword){
            $query->where('name', 'like', '%'.$keyword.'%');
            })
            ->orderBy(\request()->sortBy ?? 'id', \request()->orderBy ?? 'desc')->groupBy('category','session_id', 'userid')->paginate('15');
        return view('backend.questionnaire.list', compact('questioners'));
    }

    /**
    * Questioners attempt detail view 
    */

    public function show(Request $request){
        $questioners=QuesAns::where(['userid'=>$request->userId, 'category'=>$request->catId])->get();
        $username= User::whereId($request->userId)->value('username');
        $category= Category::whereId($request->catId)->value('name');
        return view('backend.questionnaire.listview', compact('questioners', 'username', 'category'));
    }
}


