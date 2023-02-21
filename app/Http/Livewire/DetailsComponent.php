<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class DetailsComponent extends Component
{
    public $slug;

    public function mount(string $slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        $product = Product::where('slug', $this->slug)->first();
        $rproducts = Product::where('category_id', $product->category_id)->inRandomOrder()->limit(6)->get();
        $nproducts = Product::Latest()->take(5)->get();
        return view('livewire.details-component', ['product' => $product, 'rproducts' => $rproducts, 'nproducts' => $nproducts]);
    }
}
