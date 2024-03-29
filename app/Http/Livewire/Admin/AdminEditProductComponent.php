<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Image;

class AdminEditProductComponent extends Component
{
    use WithFileUploads;
    public $product_id;
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
    public $newimage;
    public $newimages;

    public function mount($product_id)
    {
        $product = Product::find($product_id);
        $this->product_id = $product->id;
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->short_description = $product->short_desc;
        $this->description = $product->desc;
        $this->regular_price = $product->regular_price;
        $this->sale_price = $product->sale_price;
        $this->sku = $product->SKU;
        $this->stock_status = $product->stock_status;
        $this->featured = $product->featured;
        $this->quantity = $product->quantity;
        $this->image = $product->image;
        $this->images = explode(',', $product->images);
        $this->category_id = $product->category_id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'slug' => ['required', Rule::unique('products')->ignore($this->product_id)],
            'short_description' => 'required',
            'description' => 'required',
            'regular_price' => 'required|numeric',
            'sale_price' => 'numeric',
            'sku' => 'required',
            'stock_status' => 'required',
            'quantity' => 'required|numeric',
            'category_id' => 'required',
        ]);
        if ($this->newimage) {
            $this->validateOnly($fields, [
                'newimage' => 'required',
            ]);
        }
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updateProduct()
    {
        $this->validate([
            'name' => 'required',
            'slug' => ['required', Rule::unique('products')->ignore($this->product_id)],
            'short_description' => 'required',
            'description' => 'required',
            'regular_price' => 'required|numeric',
            'sale_price' => 'numeric',
            'sku' => 'required',
            'stock_status' => 'required',
            'featured' => 'required',
            'quantity' => 'required|numeric',
            'category_id' => 'required'
        ]);
        if ($this->newimage) {
            $this->validate([
                'newimage' => 'required',
            ]);
        }

        $product = Product::find($this->product_id);
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

        if ($this->newimage) {
            unlink('assets/images/product/large-size/' . $product->image);
            unlink('assets/images/product/small-size/' . $product->image);
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $resizedImageLarge = Image::make($this->newimage->getRealPath());
            $resizedImageSmall = Image::make($this->newimage->getRealPath());
            $resizedImageLarge->resize(300, 300);
            $resizedImageSmall->resize(150, 150);
            $path_large = public_path() . '\assets\images\product\large-size\\' . $imageName;
            $path_small = public_path() . '\assets\images\product\small-size\\' . $imageName;
            $resizedImageLarge->save($path_large);
            $resizedImageSmall->save($path_small);
            $product->image = $imageName;
        }

        if ($this->newimages) {
            if ($product->images) {
                $images = explode(",", $product->images);
                foreach ($images as $image) {
                    if ($image) {
                        unlink('assets/images/product/large-size/' . $image);
                        unlink('assets/images/product/small-size/' . $image);
                    }
                }
            }

            $imagesName = '';
            foreach ($this->newimages as $key => $image) {
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
        redirect()->route('admin.product.edit', ['product_id' => $this->product_id]);
        session()->flash('message', 'Product has been updated successfully!');
    }

    public function render()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('livewire.admin.admin-edit-product-component', ['categories' => $categories]);
    }
}
