
@php
 $product1 = \App\Models\Product::where('category_id', 30)->get();
@endphp
@foreach($product1 as $products)
    @php   
            $media = DB::table('media')->where('mediable_id',$products->id)->first();
            $pro_tag = DB::table('product_tags')->where('product_id',$products->id)->first();
            //dd($pro_tag);
            if($pro_tag)
            $tag = DB::table('tags')->where('id',$pro_tag->tag_id)->first(); 
            
    @endphp
    <div class="recmd-tablets-card mt-30">
        <div class="r-t-card-body">
            <figure>
                <img src="{{asset('storage/images/products/')}}{{ '/'. $media->file_name}}" height="90px" alt="">
            </figure>
            <div class="r-t-body-cont">
            <h5>{{ $products->name }}</h5>
                <p>{{ $products->description }}</p>
                <h4>from £{{$products->price}} </h4>
            </div>
        </div>
        <div class="r-t-card-footer">

                
                        <a wire:click="cart({{ $products->id }})" class="trans-btn black-btn learn-more-card-btn detailbtn">Add</a>
        
        </div>
    </div>
    @endforeach
</div>

<!-- <script>
    $('.detailbtn').on('click', function(){
        setTimeout(function() {
            window.location.href="{{url('/')}}/checkout";
    }, 500);
    })
    
</script> -->
