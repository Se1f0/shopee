<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class WishlistComponent extends Component
{

    public function removeFromWishlist($product_id)
    {
        foreach (Cart::instance('wishlist')->content() as $witem) {
            if ($witem->id == $product_id) {
                Cart::instance('wishlist')->remove($witem->rowId);
                session()->flash('success_message', 'Item has been removed from the wishlist!');
                $this->emitTo('wishlist-icon-component', 'refreshComponent');
                return;
            }
        }
    }

    public function render()
    {
        return view('livewire.wishlist-component');
    }
}
