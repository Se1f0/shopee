<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\HomeSlider;
use App\Models\Product;
use App\Models\Sale;
use Livewire\Component;
use Cart;
use Illuminate\Support\Facades\Auth;

class HomeComponent extends Component
{
    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('\App\Models\Product');
        session()->flash('success_message', 'Item added in cart!');
        $this->emitTo('cart-icon-component', 'refreshComponent');
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
        $categories = Category::orderBy('name', 'ASC')->get();
        $slides = HomeSlider::where('status', 1)->get();
        $lproducts = Product::orderBy('created_at', 'desc')->get()->take(8);
        $fproducts = Product::where('featured', 1)->inRandomOrder()->get()->take(8);
        $sproducts = Product::where('sale_price', '>', 0)->inRandomOrder()->get()->take(8);
        $sale = Sale::find(1);
        if (Auth::check()) {
            Cart::instance('cart')->restore(Auth::user()->email);
        }
        return view('livewire.home-component', ['slides' => $slides, 'lproducts' => $lproducts, 'fproducts' => $fproducts, 'categories' => $categories, 'sproducts' => $sproducts, 'sale' => $sale]);
    }
}
