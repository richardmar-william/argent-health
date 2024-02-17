<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;

class ShopController extends Controller
{
    public function index($slug = null)
    {
        
        $cat_id = Category::select('id')
        ->where('slug', '=', $slug)
        ->get();

        // dd($cat_id[0]->id);
        $products = Product::select('*')
        ->where('category_id', '=', $cat_id[0]->id)
        ->where('quantity','>',0)
        ->active()
        ->get();

    if($slug=='hair-loss'){
    return view('frontend.product.hair-loss', compact('products','slug'));
    }
    if($slug=='beard'){
     return view('frontend.product.beard-growth', compact('products','slug')); 
    }
    if($slug=='premature-ejaculation'){
     return view('frontend.product.pre-mature', compact('products','slug')); 
    }
    return view('frontend.shop.index', compact('products','slug'));

        // return view('frontend.shop.index', compact('slug'));
    }

    public function index2($slug = null)
    {
        
        $cat_id = Category::select('id')
        ->where('slug', '=', $slug)
        ->get();

        // dd($cat_id[0]->id);
        $products = Product::select('*')
        ->where('category_id', '=', $cat_id[0]->id)
        ->where('quantity','>',0)
        ->active()
        ->get();

    if($slug=='hair-loss'){
    return view('frontend.product.hair-loss', compact('products','slug'));
    }
    if($slug=='beard'){
     return view('frontend.product.beard-growth', compact('products','slug')); 
    }
    return view('frontend.shop.shop2', compact('products','slug'));

        // return view('frontend.shop.index', compact('slug'));
    }

    public function home()
    {
        
        return redirect('/');
    }
}