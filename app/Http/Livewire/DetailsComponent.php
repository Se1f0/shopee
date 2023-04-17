<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Sale;
use Livewire\Component;
use Cart;
use Illuminate\Support\Facades\Auth;

class DetailsComponent extends Component
{
    public $slug;
    // public $qty = 1;

    public function mount(string $slug)
    {
        $this->slug = $slug;
    }

    // public function increaseQuantity()
    // {
    //     $this->qty = $this->qty + 1;
    // }

    // public function decreaseQuantity()
    // {
    //     $this->qty = $this->qty - 1;
    // }

    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('\App\Models\Product');
        session()->flash('success_message', 'Item added in cart!');
        return redirect()->route('shop.cart');
    }

    public function addToWishlist($product_id, $product_name, $product_price)
    {
        Cart::instance('wishlist')->add($product_id, $product_name, 1, $product_price)->associate('\App\Models\Product');
        // $this->emitTo('wishlist-icon-component', 'refreshComponent');
        session()->flash('success_message', 'Item added into the wishlist !');
        return redirect()->route('shop.wishlist');
    }

    public function removeFromWishlist($product_id)
    {
        foreach (Cart::instance('wishlist')->content() as $witem) {
            if ($witem->id == $product_id) {
                Cart::instance('wishlist')->remove($witem->rowId);
                session()->flash('success_message', 'Item has been removed from the wishlist!');
                // $this->emitTo('wishlist-icon-component', 'refreshComponent');
                return redirect()->route('shop.wishlist');
            }
        }
    }

    public function render()
    {
        $product = Product::where('slug', $this->slug)->first();
        $rproducts = Product::where('category_id', $product->category_id)->inRandomOrder()->limit(6)->get();
        $nproducts = Product::Latest()->take(5)->get();

        $sale = Sale::find(1);

        if (Auth::check()) {
            Cart::instance('cart')->store(Auth::user()->email);
            Cart::instance('wishlist')->store(Auth::user()->email);
        }

        return view('livewire.details-component', ['product' => $product, 'rproducts' => $rproducts, 'nproducts' => $nproducts, 'sale' => $sale]);
    }
}
