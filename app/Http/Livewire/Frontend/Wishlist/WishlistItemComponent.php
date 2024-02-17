<?php

namespace App\Http\Livewire\Frontend\Wishlist;

use Gloudemans\Shoppingcart\Facades\Cart;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class WishlistItemComponent extends Component
{
    use LivewireAlert;
    public string $item;

    public function moveToCart($rowId)
    {
        $this->emit('move_to_cart', $rowId);
        $item = Cart::instance('wishlist')->get($rowId);
        Cart::instance('cart')->add($item->id,$item->name,1,$item->price)->associate('App\\Models\\Product');
        Cart::instance('wishlist')->remove($rowId);
        $this->alert('success', 'Item move to cart.');
        return redirect('/wishlist');
    }

    public function removeFromWishlist($rowId)
    {
        // $this->emit('remove_from_wishlist', $rowId);
        Cart::instance('wishlist')->remove($rowId);
        $this->emit('refreshComponent');
        $this->alert('success', 'Item removed from wishlist!');
        return redirect('/wishlist');
    }

    public function render()
    {
        return view('livewire.frontend.wishlist.wishlist-item-component', [
            'wishlistItem' => Cart::instance('wishlist')->content()->get($this->item)
        ]);
    }
}
