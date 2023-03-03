<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Models\Sale;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;

class ShopComponent extends Component
{
    use WithPagination;
    public $pageSize = 12;
    public $orderBy = "Default";

    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('\App\Models\Product');
        session()->flash('success_message', 'Item added in cart!');
        $this->emitTo('cart-icon-component', 'refreshComponent');
        return redirect()->route('shop.cart');
    }

    public function changeOrderBy($order)
    {
        $this->orderBy = $order;
    }

    public function addToWishlist($product_id, $product_name, $product_price)
    {
        Cart::instance('wishlist')->add($product_id, $product_name, 1, $product_price)->associate('\App\Models\Product');
        $this->emitTo('wishlist-icon-component', 'refreshComponent');
    }

    public function removeFromWishlist($product_id)
    {
        foreach (Cart::instance('wishlist')->content() as $witem) {
            if ($witem->id == $product_id) {
                Cart::instance('wishlist')->remove($witem->rowId);
                // session()->flash('success_message', 'Item has been removed from the wishlist!');
                $this->emitTo('wishlist-icon-component', 'refreshComponent');
                return;
            }
        }
    }

    public function render()
    {
        if ($this->orderBy == "Price (Low to High)") {
            $products = Product::orderBy('regular_price', 'ASC')->paginate($this->pageSize);
        } else if ($this->orderBy == "Name (A - Z)") {
            $products = Product::orderBy('name', 'ASC')->paginate($this->pageSize);
        } else if ($this->orderBy == "Name (Z - A)") {
            $products = Product::orderBy('name', 'DESC')->paginate($this->pageSize);
        } else if ($this->orderBy == "Price (High to Low)") {
            $products = Product::orderBy('regular_price', 'DESC')->paginate($this->pageSize);
        } else if ($this->orderBy == "Newest") {
            $products = Product::orderBy('created_at', 'DESC')->paginate($this->pageSize);
        } else if ($this->orderBy == "Oldest") {
            $products = Product::orderBy('created_at', 'ASC')->paginate($this->pageSize);
        } else {
            $products = Product::paginate($this->pageSize);
        }

        $product_count = Product::count();
        $pages = ceil($product_count / $this->pageSize);

        $categories = Category::orderBy('name', 'ASC')->get();

        $sale = Sale::find(1);

        return view('livewire.shop-component', [
            'products' => $products,
            'count' => $product_count,
            'pages' => $pages,
            'categories' => $categories,
            'sale' => $sale,
        ]);
    }
}
