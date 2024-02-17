<div class="cartBox">
    <!-- <div class="cartPlusMinus">
        <span wire:click="decreaseQuantity()" class="btn btn-sm btn-link text-dark p-0">
            <i class="fas fa-caret-left"></i>
        </span>
        <span class="cartQty">{{ $quantity }}
        </span>
        <span wire:click="increaseQuantity()" class="btn btn-sm btn-link text-dark p-0">
            <i class="fas fa-caret-right"></i>
        </span>
    </div> -->
    <!-- <div class="quickview-btn-cart" style="margin: 0 10px; cursor: pointer"> -->
        <a wire:click="addToCart()" class="trans-btn black-btn learn-more-card-btn detailbtn">Buy Now</a>
    <!-- </div> -->

    <!-- <div class="quickview-btn-wishlist">
        <a wire:click="addToWishList()" class="btn-hover" style="cursor: pointer">
            <i class='far fa-heart'></i>
        </a>
    </div> -->
</div>

<!-- <script>
    $('.detailbtn').on('click', function(){
        setTimeout(function() {
            window.location.href="{{url('/')}}/checkout";
    }, 500);
    })
    
</script> -->
