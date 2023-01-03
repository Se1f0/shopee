<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ShopComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $n_items = 12;
        $products = Product::paginate($n_items);
        $product_count = Product::count();
        $pages = ceil($product_count/$n_items);
        return view('livewire.shop-component', [
            'products' => $products,
            'count' => $product_count,
            'pages' => $pages,
            'n_items' => $n_items
        ]);
    }
}
