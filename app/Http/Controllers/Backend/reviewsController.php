<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reviews;

class reviewsController extends Controller
{
    /*function to display all the blog category*/ 
    public function index()
    {
        $review = Reviews::orderBy('id','desc')->paginate(5);
        return view('backend.reviewsnratings.index', compact('review'));
    }

   /*function to create the blog category*/ 
    public function create()
    {
        return view('backend.reviewsnratings.create');
    }

    /*function to store blog category */  
    public function store(Request $request)
    {
            //dd('true',$request);
            $request->validate([
                'name' => 'required',
                'review' => 'required',
                'starrating' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        
            $input = $request->all();
            if ($image = $request->file('image')) {
                $destinationPath = 'images/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = "$profileImage";
            }
            //dd($input, $image, $profileImage, $destinationPath ); 
            Reviews::create($input);
        
            return redirect()->route('admin.reviewsnratings.index')
                            ->with(['message' => 'The Review has been created successfully','alert-type' => 'success']); 
        
    } 

    /*function to edit page*/
    public function edit($id)
    { 
        //dd($id,'dflshdalfh');
            $review = Reviews::where('id',$id)->first();
            return view('backend.reviewsnratings.edit',compact('id','review'));
    }
    
        /* function to update the blog category */
    public function update(Request $request)
    { 
        $request->validate([
            'name' => 'required',
            'review' => 'required',
            'starrating' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
    
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
        
        
        Reviews::where('id',$request->id)->update([
            'name'=>$request->name,
            'review'=>$request->review,
            'starrating'=>$request->starrating,
            'image'=>$profileImage,
        ]);

        return redirect()->route('admin.reviewsnratings.index')->with(['message' => 'Review updated successfully','alert-type' => 'success']); 
        }

        /* function to delete a blog category*/
    public function destroy($id){
        Reviews::where('id',$id)->delete();
        return redirect()->route('admin.reviewsnratings.index')->with(['message' => 'Review has been deleted successfully','alert-type' => 'success']);
        
    }    
}
