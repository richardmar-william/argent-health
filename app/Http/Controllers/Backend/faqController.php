<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class faqController extends Controller
{
        /*function to display all the FAQ*/ 
        public function index()
        {
            //dd('sdfsdf');
            $faqs = Faq::orderBy('id','desc')->paginate(5);
        
            return view('backend.faq.index', compact('faqs'));
        }
        /*function to create the FAQ*/ 
        public function create()
        {
            return view('backend.faq.create');
        }

        /*function to store FAQ */  
    public function store(Request $request)
    {
            //dd($request);
            $request->validate([
                'question' => 'required',
                'answer' => 'required',
            ]);
        
            Faq::create($request->all());
            return redirect()->route('admin.faq.index')->with(['message' => ' FAQ has been created successfully','alert-type' => 'success']); 
    } 
    /*function to edit page*/
    public function editfaq($id)
    {
            $faq = Faq::where('id',$id)->first();
            return view('backend.faq.edit',compact('id','faq'));
    }
        /* function to update the FAQ */
    public function updateafaq(Request $request)
    { 
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
            ]);

        Faq::where('id',$request->id)->update([
            'question'=>$request->question,
            'answer'=>$request->answer
        ]);
        
        return redirect()->route('admin.faq.index')->with(['message' => 'FAQ updated successfully','alert-type' => 'success']); 
        }

        /* function to delete a FAQ */
    public function destroyfaq($id){
        FAQ::where('id',$id)->delete();
        return redirect()->route('admin.faq.index')->with(['message' => 'FAQ has been deleted successfully','alert-type' => 'success']);
        
    }    


}