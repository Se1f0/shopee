<div style="margin-top: -20px">
    <!-- Begin Li's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ route('admin.home.slider') }}">All Slides</a></li>
                    <li class="active">Edit Slide</li>
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
                        onclick="location.href='{{ route('admin.home.slider') }}'">All Slides
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
                    <form wire:submit.prevent="updateSlide">
                        <div class="login-form">
                            <h4 class="login-title">Edit Slide</h4>
                            <div class="row">
                                <div class="col-md-12 col-12 mb-20">
                                    <label>Slide Top Title</label>
                                    <input class="mb-0" type="text" name="top_title" placeholder="Top Title"
                                        autofocus autocomplete="top_title" wire:model="top_title">
                                    @error('top_title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label>Slide Title</label>
                                    <input class="mb-0" type="text" name="title" placeholder="Title"
                                        wire:model="title">
                                    @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label>Slide Subtitle</label>
                                    <input class="mb-0" type="text" name="sub_title" placeholder="Subtitle"
                                        wire:model="sub_title">
                                    @error('sub_title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label>Link</label>
                                    <input class="mb-0" type="text" name="link" placeholder="Link"
                                        wire:model="link">
                                    @error('link')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status" wire:model="status">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                    @error('status')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label>Image</label>
                                    <input class="mb-0" type="file" name="image" placeholder="Image"
                                        wire:model="newimage">
                                    @if ($newimage)
                                        <img src="{{ $newimage->temporaryUrl() }}" width="100">
                                    @else
                                        <img src="{{ asset('assets/images/slider') }}/{{ $image }}"
                                            width="100">
                                    @endif
                                    @error('newimage')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-8">
                                    <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                        <button class="register-button mt-0" type="submit">Update</button>
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
