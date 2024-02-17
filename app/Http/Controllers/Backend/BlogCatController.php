<?php

namespace App\Http\Controllers\Backend;
use App\Models\BlogCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogCatController extends Controller
{
     /*function to display all the blog category*/ 
     public function index()
     {
      
         $blogcategory = BlogCategory::orderBy('id','desc')->paginate(5);
         return view('backend.blogcategories.index', compact('blogcategory'));
     }
     /*function to create the blog category*/ 
     public function create()
     {
         return view('backend.blogcategories.create');
     }

     /*function to store blog category */  
 public function store(Request $request)
 {
         //dd($request);
         $request->validate([
             'title' => 'required',
             'slug' => 'required'
         ]);
     
         BlogCategory::create($request->all());
         return redirect()->route('admin.blogcategories.index')->with(['message' => ' Blog Category has been created successfully','alert-type' => 'success']); 
 } 

 /*function to edit page*/
 public function editablogcat($id)
 { 
         $blogcat = BlogCategory::where('id',$id)->first();
         return view('backend.blogcategories.edit',compact('id','blogcat'));
 }
 
     /* function to update the blog category */
 public function updateBlogCatgeory(Request $request)
 { 
    //dd($request);
     $request->validate([
         'title' => 'required',
         'slug' => 'required',
         ]);

         BlogCategory::where('id',$request->id)->update([
         'title'=>$request->title,
         'slug'=>$request->slug
     ]);
     
     return redirect()->route('admin.blogcategories.index')->with(['message' => 'Blog Catgeory updated successfully','alert-type' => 'success']); 
     }

     /* function to delete a blog category   */
 public function destroyBlogCatgeory($id){
    BlogCategory::where('id',$id)->delete();
     return redirect()->route('admin.blogcategories.index')->with(['message' => 'Blog Catgeory has been deleted successfully','alert-type' => 'success']);
     
 }    
}
