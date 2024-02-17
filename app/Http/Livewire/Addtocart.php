<?php

namespace App\Http\Livewire;
use Livewire\Component;

use App\Models\Category;
use App\Models\Product;
use App\Services\CartService;
use Gloudemans\Shoppingcart\Facades\Cart;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class Addtocart extends Component
{
    use LivewireAlert;

    public function render()
    {
        return view('livewire.addtocart');
    }

    public function cart($id)
    {
       
       $product = Product::whereId($id)->active()->hasQuantity()->activeCategory()->firstOrFail();
        try {
            (new CartService())->addToList('default', $product);
            $this->emit('update_cart');
            $this->alert('success', 'added to Cart.');
        } catch(\Exception $exception) {
            $this->alert('warning', $exception->getMessage());
        }
    }
}
