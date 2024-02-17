<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Faq;
use App\Models\Blog;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\Frontend\ContactRequest;
use Mail;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($slug)
    {
        $static_page = Page::active()->whereSlug($slug)->firstOrFail();
        if (!Cache::has('static_page')) {
            Cache::remember('static_page', 3600, function () use ($static_page) {
                return $static_page;
            });
        }

        return view('frontend.pages.show', compact('static_page'));
    }


    public function contactUs(){
        return view('frontend.pages.contact-us');
    }

    public function postContactus(ContactRequest $request){
        $data= $request->all();
        $data['contactBy']= implode(", ",$request->contactBy);
        try{
        Mail::send('emails.contact_us', ['data'=>$data], function($message)use($data) {
            $message->to('info@agenthealth.Co.uk')->subject('Contact Mail')->from(config('mail.from.address'), config('mail.from.name'));

        });
            }catch(\Exception $e){
                return redirect()->back()->with(['message'=> 'Something went wrong.', 'alert_type'=>'danger']); 
         }
           
        return redirect()->back()->with(['message'=> 'Email sent successfully.', 'alert_type'=>'success']);   
            
    }
    

      /* controller for faq */
    public function faq(){
        $faqs = Faq::get();
        return view('frontend.pages.faq', compact('faqs'));
    }
      /* controller for about-us */   
    public function pageaboutus(){
        $page_type = 'about-us';
        return view('frontend.pages.about-us',compact('page_type'));
    }
      /* faq search form */
    public function faqsearch(Request $request){
        //dd($request->search);
        $faqsearch = Faq::where('question','LIKE','%'.$request->search.'%')->get();
        return view('frontend.pages.faq', compact('faqsearch'));
    }

    /* function for bloglisting*/
    public function blog_list(){
        $blogs = Blog::get();
        return view('frontend.blog.blog_list', compact('blogs'));
        
    }

    /* function for blog detail pAGE*/
    public function blog_detail($id){
         $blogs = Blog::where('id',$id)->first();
         
        return view('frontend.blog.blog_detail',compact('blogs'));
        
    }

    /* agent health page */
    public function agent_health(){
        return view('frontend.pages.agent_health');
    }
}
