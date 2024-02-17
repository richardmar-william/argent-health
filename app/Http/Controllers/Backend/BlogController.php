<?php

namespace App\Http\Controllers\Backend;
use App\Models\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\JsonRequest;

class BlogController extends Controller
{
        /*function to display all the blog category*/ 
        public function index()
        {
        //dd('asdad');
            $blog = Blog::orderBy('id','desc')->paginate(5);
            return view('backend.blogs.index', compact('blog'));
        }

       /*function to create the blog category*/ 
        public function create()
        {
            return view('backend.blogs.create');
        }

        /*function to store blog category */  
        public function store(Request $request)
        {
                //dd($request);'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                
                $request->validate([
                    'title' => 'required',
                    'description' => 'required',
                    'slug' => 'required',
                    'category_id' => 'required',
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                
                ]);
            
                $input = $request->all();
                if ($image = $request->file('image')) {
                    $destinationPath = 'images/';
                    $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                    $image->move($destinationPath, $profileImage);
                    $input['image'] = "$profileImage";
                }
                //dd($input, $image, $name, $destinationPath ); 
                Blog::create($input);
            
                return redirect()->route('admin.blogs.index')
                                ->with(['message' => ' Blog has been created successfully','alert-type' => 'success']); 
            
        } 

        /*function to edit page*/
        public function edit($id)
        { 
            //dd($id,'dflshdalfh');
                $blog = Blog::where('id',$id)->first();
                return view('backend.blogs.edit',compact('id','blog'));
        }
        
            /* function to update the blog category */
        public function update(Request $request, Blog $blog)
        { 
            //dd($request, $blog);
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'slug' => 'required',
                'category_id' => 'required',
                // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
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
            
            //$blog->update($input);
            
            Blog::where('id',$request->id)->update([
                'title' => $request->title,
                'slug' => $request->slug,
                'description' => $request->description,
                'category_id' => $request->category_id,
                'image' => isset($profileImage) ? $profileImage : $request->image1,
                
            ]);

            return redirect()->route('admin.blogs.index')->with(['message' => 'Blog updated successfully','alert-type' => 'success']); 
            }

            /* function to delete a blog category*/
        public function destroy($id){
            Blog::where('id',$id)->delete();
            return redirect()->route('admin.blogs.index')->with(['message' => 'Blog has been deleted successfully','alert-type' => 'success']);
            
        }    
}
