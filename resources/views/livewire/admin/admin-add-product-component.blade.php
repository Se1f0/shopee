<div style="margin-top: -20px">
    <!-- Begin Li's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ route('admin.products') }}">All Products</a></li>
                    <li class="active">Add new product</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <div class="page-section mb-60" style="margin-top: 20px">
        {{-- <button type="button" class="btn btn-success" style="margin-bottom: 5px; margin-left: 1110px"
            onclick="location.href='{{ route('admin.categories') }}'">All Products</button> --}}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                    <button type="button" class="btn btn-success float-right mb-10"
                        onclick="location.href='{{ route('admin.products') }}'">All Products
                    </button>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            <strong>Success | {{ Session::get('message') }}</strong>
                        </div>
                    @endif
                    <form wire:submit.prevent="addProduct">
                        <div class="login-form">
                            <h4 class="login-title">Add new Product</h4>
                            <div class="row">
                                <div class="col-md-12 col-12 mb-20">
                                    <label>Product Name</label>
                                    <input class="mb-0" type="text" name="name" placeholder="Name" autofocus
                                        autocomplete="name" wire:model="name" wire:keyup="generateSlug">
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label>Product Slug</label>
                                    <input class="mb-0" type="text" name="slug" placeholder="Slug"
                                        wire:model="slug">
                                    @error('slug')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label>Short description</label>
                                    <textarea class="form-control" name="short_description" placeholder="Short description" wire:model="short_description"></textarea>
                                    @error('short_description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description" placeholder="Description" wire:model="description"></textarea>
                                    @error('description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label>Regular price</label>
                                    <input class="mb-0" type="text" name="regular_price"
                                        placeholder="Regular Price" wire:model="regular_price">
                                    @error('regular_price')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label>Sale price</label>
                                    <input class="mb-0" type="text" name="sale_price" placeholder="Sale Price"
                                        wire:model="sale_price">
                                    @error('sale_price')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label>SKU</label>
                                    <input class="mb-0" type="text" name="sku" placeholder="SKU"
                                        wire:model="sku">
                                    @error('sku')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label for="stock_status">Stock status</label>
                                    <select class="form-control" name="stock_status" wire:model="stock_status">
                                        <option value="instock">In stock</option>
                                        <option value="outofstock">Out of stock</option>
                                    </select>
                                    @error('stock_status')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label for="featured">Featured</label>
                                    <select class="form-control" name="featured" wire:model="featured">
                                        <option value="0">Yes</option>
                                        <option value="1">No</option>
                                    </select>
                                    @error('featured')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label>Quantity</label>
                                    <input class="mb-0" type="text" name="quantity" placeholder="Quantity"
                                        wire:model="quantity">
                                    @error('quantity')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label>Image</label>
                                    <input class="mb-0" type="file" name="image" placeholder="Image"
                                        wire:model="image">
                                    @if ($image)
                                        <img src="{{ $image->temporaryUrl() }}" width="120">
                                    @endif
                                    @error('image')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label for="category_id">Category</label>
                                    <select class="form-control" name="category_id" wire:model="category_id">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-8">
                                    <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                        <button class="register-button mt-0" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
