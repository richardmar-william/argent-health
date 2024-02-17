<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use App\Services\ImageService;
use App\Traits\ImageUploadTrait;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    use ImageUploadTrait;

    public function index(): View
    {
        $this->authorize('access_product');

        $products = Product::with('category', 'tags', 'firstMedia')
            ->when(\request()->keyword != null, function ($query) {
                $query->search(\request()->keyword);
            })
            ->when(\request()->status != null, function ($query) {
                $query->whereStatus(\request()->status);
            })
            ->orderBy(\request()->sortBy ?? 'id', \request()->orderBy ?? 'desc')
            ->paginate(\request()->limitBy ?? 10);

        return view('backend.products.index', compact('products'));
    }

    public function create(): View
    {
        $this->authorize('create_product');

        $categories = Category::active()->get(['id', 'name']);
        $tags = Tag::active()->get(['id', 'name']);

        $treatData = Product::selectRaw("group_concat(treat_method) as treat_method")->whereRaw("treat_method is not null and treat_method <> ''")->groupBy(DB::Raw("1=1"))->first()->toArray();


        $treat_method = array_unique(explode(",", $treatData['treat_method']));

        
        $typesData = Product::whereRaw("type is not null")->groupBy(DB::Raw("type"))->get()->toArray();
        $types = [];
        foreach($typesData as $type) {
            array_push($types, $type['type']);
        }
        $types = array_unique($types);

        return view('backend.products.create', compact('categories', 'tags', "types", 'treat_method'));
    }

    public function store(ProductRequest $request): RedirectResponse
    {
        $this->authorize('create_product');
        
        if ($request->validated()){
            // dd($request->all());
            $createData = $request->except('tags', 'images', '_token');
            if(isset($createData['treat_method']) && is_array($createData['treat_method'])) $createData['treat_method'] = implode(",", $createData['treat_method']);
            $product = Product::create($createData);
            $product->tags()->attach($request->tags);

            if ($request->images && count($request->images) > 0) {
                (new ImageService())->storeProductImages($request->images, $product);
            }

            clear_cache();

            return redirect()->route('admin.products.index')->with([
                'message' => 'Create product successfully',
                'alert-type' => 'success'
            ]);
        }

        return back()->with([
            'message' => 'Something was wrong, please try again late',
            'alert-type' => 'error'
        ]);
    }

    public function show(Product $product): View
    {
        $this->authorize('show_product');

        return view('backend.products.show', compact('product'));
    }

    public function edit(Product $product): View
    {
        $this->authorize('edit_product');

        $categories = Category::whereStatus(true)->get(['id', 'name']);
        $tags = Tag::whereStatus(1)->get(['id', 'name']);
        $treatData = Product::selectRaw("group_concat(treat_method) as treat_method")->whereRaw("treat_method is not null and treat_method <> ''")->groupBy(DB::Raw("1=1"))->first()->toArray();
        $treat_method = array_unique(explode(",", $treatData['treat_method']));

        $typesData = Product::groupBy(DB::Raw("type"))->get()->toArray();
        $types = [];
        foreach($typesData as $type) {
            array_push($types, $type['type']);
        }
        $types = array_unique($types);


        return view('backend.products.edit', compact('product', 'categories', 'tags','types',"treat_method"));
    }

    public function update(ProductRequest $request, Product $product): RedirectResponse
    {
        $this->authorize('edit_product');

        if ($request->validated()) {
            $updateData = $request->except('tags', 'images', '_token');
            if(isset($updateData['treat_method']) && is_array($updateData['treat_method'])) $updateData['treat_method'] = implode(",", $updateData['treat_method']);
            // print_r($updateData); exit;
            $product->update($updateData);
            $product->tags()->sync($request->tags);

            if ($request->images && $product->media->count() > 0) {
                foreach ($product->media as $media) {
                    (new ImageService())->unlinkImage($media->file_name, 'products');
                    $media->delete();
                }
            }

            $i = $product->media()->count() + 1;

            if ($request->images && count($request->images) > 0) {
                (new ImageService())->storeProductImages($request->images, $product, $i);
            }

            clear_cache();
            return redirect()->route('admin.products.index')->with([
                'message' => 'Updated product successfully',
                'alert-type' => 'success'
            ]);
        }

        return back()->with([
            'message' => 'Something was wrong, please try again late',
            'alert-type' => 'error'
        ]);
    }

    public function destroy(Product $product): RedirectResponse
    {
        $this->authorize('delete_product');

        if ($product->media->count() > 0) {
            foreach ($product->media as $media) {
                (new ImageService())->unlinkImage($media->file_name, 'products');
                $media->delete();
            }
        }

        $product->delete();

        clear_cache();
        return redirect()->route('admin.products.index')->with([
            'message' => 'Deleted product successfully',
            'alert-type' => 'success'
        ]);
    }

    public function removeImage(Request $request): bool
    {
        $this->authorize('delete_product');

        $product = Product::findOrFail($request->product_id);
        $image = $product->media()->whereId($request->image_id)->first();

        (new ImageService())->unlinkImage($image->file_name, 'products');
        $image->delete();
        clear_cache();

        return true;
    }
}
