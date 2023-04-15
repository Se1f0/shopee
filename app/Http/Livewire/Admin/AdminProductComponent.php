<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class AdminProductComponent extends Component
{
    public $product_id;

    use WithPagination;

    public function deleteProduct()
    {
        $product = Product::find($this->product_id);
        if ($product->image) {
            unlink('assets/images/product/large-size/' . $product->image);
            unlink('assets/images/product/small-size/' . $product->image);
        }
        if ($product->images) {
            $images = explode(",", $product->images);
            foreach ($images as $image) {
                if ($image) {
                    unlink('assets/images/product/large-size/' . $image);
                    unlink('assets/images/product/small-size/' . $image);
                }
            }
        }
        $product->delete();
        session()->flash('message', 'Product has been deleted successfully!');
    }

    public function render()
    {

        $products = Product::orderBy('name', 'asc')->paginate(10);
        return view('livewire.admin.admin-product-component', ['products' => $products]);
    }
}
