<div style="margin-top: -20px">
    <!-- Begin Li's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ route('admin.categories') }}">All Categories</a></li>
                    <li class="active">Add new category</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <div class="page-section mb-60" style="margin-top: 20px">
        <button type="button" class="btn btn-success" style="margin-bottom: 5px; margin-left: 1110px"
            onclick="location.href='{{ route('admin.categories') }}'">All Categories</button>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            <strong>Success | {{ Session::get('message') }}</strong>
                        </div>
                    @endif
                    <form wire:submit.prevent="storeCategory">
                        <div class="login-form">
                            <h4 class="login-title">Add new Category</h4>
                            <div class="row">
                                <div class="col-md-12 col-12 mb-20">
                                    <label>Category Name</label>
                                    <input class="mb-0" type="text" name="name" placeholder="Category Name"
                                        autofocus autocomplete="name" wire:model="name" wire:keyup="generateSlug">
                                    @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label>Category Slug</label>
                                    <input class="mb-0" type="text" name="slug" placeholder="Category Slug"
                                        wire:model="slug">
                                    @error('slug')
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
