<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageSettingController extends Controller
{
    public $file_path = 'backend.pagesetting.';
	public $ignors = [
	    '_token'
	];

  // Page settings list view
  public function page_list(){
    return view($this->file_path.'page-list');
  }

	// Edit view function
    public function edit($page_type){
    	return view($this->file_path.$page_type,['page_type' => $page_type]);
    }

    // Update data function
    public function update(Request $request, $page_type){
        foreach ($request->all() as $key => $value) {
          	if(!in_array($key, $this->ignors)):
        	    updateMeta($key, $value, $page_type, $request);
           	endif;
        }
        return redirect()->back()->with('success', SlugToText($page_type).' is updated successfully.');
    }    


}
