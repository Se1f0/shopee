<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;

class ShopComponent extends Component
{
    use WithPagination;

    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('\App\Models\Product');
        session()->flash('success_message', 'Item added in cart!');
        return redirect()->route('shop.cart');
    }

    public function render()
    {
        $n_items = 12;
        $products = Product::paginate($n_items);
        $product_count = Product::count();
        $pages = ceil($product_count / $n_items);
        return view('livewire.shop-component', [
            'products' => $products,
            'count' => $product_count,
            'pages' => $pages,
            'n_items' => $n_items
        ]);
    }
}
