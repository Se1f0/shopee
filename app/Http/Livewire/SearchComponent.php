<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Cart;

class SearchComponent extends Component
{
    use WithPagination;
    public $pageSize = 12;
    public $orderBy = "Default";

    public $q;
    public $search_term;

    public function mount()
    {
        $this->fill(request()->only('q'));
        $this->search_term = '%' . $this->q . '%';
    }

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

    public function render()
    {
        if ($this->orderBy == "Price (Low to High)") {
            $products = Product::where('name', 'like', $this->search_term)->orderBy('regular_price', 'ASC')->paginate($this->pageSize);
        } else if ($this->orderBy == "Name (A - Z)") {
            $products = Product::where('name', 'like', $this->search_term)->orderBy('name', 'ASC')->paginate($this->pageSize);
        } else if ($this->orderBy == "Name (Z - A)") {
            $products = Product::where('name', 'like', $this->search_term)->orderBy('name', 'DESC')->paginate($this->pageSize);
        } else if ($this->orderBy == "Price (High to Low)") {
            $products = Product::where('name', 'like', $this->search_term)->orderBy('regular_price', 'DESC')->paginate($this->pageSize);
        } else if ($this->orderBy == "Newest") {
            $products = Product::where('name', 'like', $this->search_term)->orderBy('created_at', 'DESC')->paginate($this->pageSize);
        } else if ($this->orderBy == "Oldest") {
            $products = Product::where('name', 'like', $this->search_term)->orderBy('created_at', 'ASC')->paginate($this->pageSize);
        } else {
            $products = Product::where('name', 'like', $this->search_term)->paginate($this->pageSize);
        }

        $product_count = $products->total();
        $pages = ceil($product_count / $this->pageSize);

        $categories = Category::orderBy('name', 'ASC')->get();

        return view('livewire.search-component', [
            'products' => $products,
            'count' => $product_count,
            'pages' => $pages,
            'categories' => $categories
        ]);
    }
}
