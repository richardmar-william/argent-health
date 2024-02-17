<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($slug, Request $request)
    {
        //dd($slug);
        if(!$slug){
            $slug=$request->slug;
        }
        $product = Product::with('media', 'category', 'tags', 'approvedReviews')
            ->withCount('media')
            ->withAvg('approvedReviews', 'rating')
            ->withCount('approvedReviews')
            ->active()
            ->whereSlug($slug)
            ->hasQuantity()
            ->activeCategory()
            ->firstOrFail();

        $relatedProducts = Product::with('firstMedia')->whereHas('category', function ($query) use ($product) {
            $query->whereId($product->category_id);
            $query->whereStatus(1);
        })
            ->where('id', '<>', $product->id)
            ->inRandomOrder()
            ->active()
            ->hasQuantity()
            ->take(4)
            ->get(['id', 'slug', 'name', 'price']);

            if($request->index==1){
             return view('frontend.product.view', compact('product', 'relatedProducts'));
            }
            return view('frontend.product.show', compact('product', 'relatedProducts'));
    }


    public function beardGrowth(){
        return view('frontend.product.beard-growth');
    }


   //26jun23
   public function product_detail($slug, Request $request) {
     
       return view('frontend.products.'.$slug.'');

   }



}
