<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Image;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $sku;
    public $stock_status = 'instock';
    public $featured = 0;
    public $quantity;
    public $image;
    public $images;
    public $category_id;

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function addProduct()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'regular_price' => 'required',
            'sale_price' => 'required',
            'sku' => 'required',
            'stock_status' => 'required',
            'featured' => 'required',
            'quantity' => 'required',
            'image' => 'required',
            'category_id' => 'required'
        ]);

        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_desc = $this->short_description;
        $product->desc = $this->description;
        $product->regular_price = $this->regular_price;
        $product->sale_price = $this->sale_price;
        $product->SKU = $this->sku;
        $product->stock_status = $this->stock_status;
        $product->featured = $this->featured;
        $product->quantity = $this->quantity;

        $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
        $resizedImageLarge = Image::make($this->image->getRealPath());
        $resizedImageSmall = Image::make($this->image->getRealPath());
        $resizedImageLarge->resize(300, 300);
        $resizedImageSmall->resize(150, 150);
        $path_large = public_path() . '\assets\images\product\large-size\\' . $imageName;
        $path_small = public_path() . '\assets\images\product\small-size\\' . $imageName;
        $resizedImageLarge->save($path_large);
        $resizedImageSmall->save($path_small);
        $product->image = $imageName;

        if ($this->images) {
            $imagesName = '';
            foreach ($this->images as $key => $image) {
                $imageName = Carbon::now()->timestamp . $key . '.' . $image->extension();
                $resizedImageLarge = Image::make($image->getRealPath());
                $resizedImageSmall = Image::make($image->getRealPath());
                $resizedImageLarge->resize(300, 300);
                $resizedImageSmall->resize(150, 150);
                $path_large = public_path() . '\assets\images\product\large-size\\' . $imageName;
                $path_small = public_path() . '\assets\images\product\small-size\\' . $imageName;
                $resizedImageLarge->save($path_large);
                $resizedImageSmall->save($path_small);
                $imagesName = $imagesName . ',' . $imageName;
            }
            $imgs = substr($imagesName, 1);
            $product->images = $imgs;
        }

        $product->category_id = $this->category_id;
        $product->save();
        session()->flash('message', 'Product has been added successfully!');
    }

    public function render()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('livewire.admin.admin-add-product-component', ['categories' => $categories]);
    }
}
