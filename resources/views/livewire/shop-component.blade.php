<div style="margin-top: -20px">
    <!-- Begin Li's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="active">Shop</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!-- Begin Li's Content Wraper Area -->
    <div class="content-wraper pt-60 pb-60 pt-sm-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-1 order-lg-2">
                    <!-- Begin Li's Banner Area -->
                    <div class="single-banner shop-page-banner">
                        <a href="#">
                            <img src="{{ asset('assets/images/bg-banner/2.jpg') }}" alt="Li's Static Banner">
                        </a>
                    </div>
                    <!-- Li's Banner Area End Here -->
                    <!-- shop-top-bar start -->
                    <div class="shop-top-bar mt-30">
                        <div class="shop-bar-inner">
                            <div class="product-view-mode">
                                <!-- shop-item-filter-list start -->
                                <ul class="nav shop-item-filter-list" role="tablist">
                                    <li class="active" role="presentation"><a aria-selected="true" class="active show"
                                            data-toggle="tab" role="tab" aria-controls="grid-view"
                                            href="#grid-view"><i class="fa fa-th"></i></a></li>
                                    <li role="presentation"><a data-toggle="tab" role="tab"
                                            aria-controls="list-view" href="#list-view"><i
                                                class="fa fa-th-list"></i></a></li>
                                </ul>
                                <!-- shop-item-filter-list end -->
                            </div>
                            <div class="toolbar-amount">
                                @if ($page == $pages)
                                    <span>Showing {{ ($page - 1) * 13 }}–{{ $count }} of {{ $count }}
                                        item(s)</span>
                                @else
                                    <span>Showing {{ ($page - 1) * 13 + 1 }}–{{ $page * 12 }} of {{ $count }}
                                        results</span>
                                @endif
                            </div>
                        </div>
                        <!-- product-select-box start -->
                        {{-- <div class="product-select-box">
                            <div class="product-short">
                                <p>Sort By:</p>
                                <select class="nice-select">
                                    <option value="default">Default</option>
                                    <option value="name-asc">Name (A - Z)</option>
                                    <option value="name-desc">Name (Z - A)</option>
                                    <option value="price-asc">Price (Low to High)</option>
                                    <option value="price-desc">Price (High to Low)</option>
                                    <option value="date">Newness</option>
                                    <option value="rating">Rating (Lowest)</option>
                                </select>
                            </div>
                        </div> --}}
                        <!-- product-select-box end -->
                    </div>
                    <!-- shop-top-bar end -->
                    <!-- shop-products-wrapper start -->
                    <div class="shop-products-wrapper">
                        <div class="tab-content">
                            <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                                <div class="product-area shop-product-area">
                                    <div class="row">
                                        @foreach ($products as $product)
                                            <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a
                                                            href="{{ route('product.details', ['slug' => $product->slug]) }}">
                                                            <img src="{{ asset('assets/images/product/large-size/product') }}-{{ $product->id }}.jpg"
                                                                alt="{{ $product->name }}">
                                                        </a>
                                                        <span class="sticker">New</span>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="product-review">
                                                                <h5 class="manufacturer">
                                                                    <a href="product-details.html">Graphic Corner</a>
                                                                </h5>
                                                                <div class="rating-box">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i>
                                                                        </li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4><a class="product_name"
                                                                    href="{{ route('product.details', ['slug' => $product->slug]) }}">{{ $product->name }}</a>
                                                            </h4>
                                                            <div class="price-box">
                                                                <span
                                                                    class="new-price">${{ $product->regular_price }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart active"><a href="#"
                                                                        wire:click.prevent="store({{ $product->id }} , '{{ $product->name }}' , {{ $product->regular_price }})">Add
                                                                        to cart</a></li>
                                                                <li><a href="#" title="quick view"
                                                                        class="quick-view-btn" data-toggle="modal"
                                                                        data-target="#exampleModalCenter"><i
                                                                            class="fa fa-eye"></i></a></li>
                                                                <li><a class="links-details" href="wishlist.html"><i
                                                                            class="fa fa-heart-o"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div id="list-view" class="tab-pane fade product-list-view" role="tabpanel">
                                <div class="row">
                                    <div class="col">
                                        @foreach ($products as $product)
                                            <div class="row product-layout-list">
                                                <div class="col-lg-3 col-md-5 ">
                                                    <div class="product-image">
                                                        <a
                                                            href="{{ route('product.details', ['slug' => $product->slug]) }}">
                                                            <img src="{{ asset('assets/images/product/large-size/product') }}-{{ $product->id }}.jpg"
                                                                alt="{{ $product->name }}">
                                                        </a>
                                                        <span class="sticker">New</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-md-7">
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="product-review">
                                                                <h5 class="manufacturer">
                                                                    <a href="product-details.html">Graphic Corner</a>
                                                                </h5>
                                                                <div class="rating-box">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i
                                                                                class="fa fa-star-o"></i>
                                                                        </li>
                                                                        <li class="no-star"><i
                                                                                class="fa fa-star-o"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4><a class="product_name"
                                                                    href="{{ route('product.details', ['slug' => $product->slug]) }}">{{ $product->name }}</a>
                                                            </h4>
                                                            <div class="price-box">
                                                                <span
                                                                    class="new-price">${{ $product->regular_price }}</span>
                                                            </div>
                                                            <p>${{ $product->short_desc }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="shop-add-action mb-xs-30">
                                                        <ul class="add-actions-link">
                                                            <li class="add-cart"><a href="#"
                                                                    wire:click.prevent="store({{ $product->id }} , '{{ $product->name }}' , {{ $product->regular_price }})">Add
                                                                    to cart</a>
                                                            </li>
                                                            <li class="wishlist"><a href="wishlist.html"><i
                                                                        class="fa fa-heart-o"></i>Add to wishlist</a>
                                                            </li>
                                                            <li><a class="quick-view" data-toggle="modal"
                                                                    data-target="#exampleModalCenter"
                                                                    href="#"><i class="fa fa-eye"></i>Quick
                                                                    view</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="paginatoin-area">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 pt-xs-15">
                                        @if ($page == $pages)
                                            <p>Showing {{ ($page - 1) * 13 }}–{{ $count }} of
                                                {{ $count }}
                                                item(s)</p>
                                        @else
                                            <p>Showing {{ ($page - 1) * 13 + 1 }}–{{ $page * 12 }} of
                                                {{ $count }} results</p>
                                        @endif
                                    </div>
                                    {{ $products->links('custom-pagination') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shop-products-wrapper end -->
                </div>
                <div class="col-lg-3 order-2 order-lg-1">
                    <!--sidebar-categores-box start  -->
                    {{-- <div class="sidebar-categores-box mt-sm-30 mt-xs-30">
                        <div class="sidebar-title">
                            <h2>Sort by</h2>
                        </div>
                        <!-- category-sub-menu start -->
                        <div class="category-sub-menu">
                            <ul>
                                <li class="has-sub"><a href="# ">Prime Video</a>
                                    <ul>
                                        <li><a href="#">All Videos</a></li>
                                        <li><a href="#">Blouses</a></li>
                                        <li><a href="#">Evening Dresses</a></li>
                                        <li><a href="#">Summer Dresses</a></li>
                                        <li><a href="#">T-Rent or Buy</a></li>
                                        <li><a href="#">Your Watchlist</a></li>
                                        <li><a href="#">Watch Anywhere</a></li>
                                        <li><a href="#">Getting Started</a></li>
                                    </ul>
                                </li>
                                <li class="has-sub"><a href="#">Computer</a>
                                    <ul>
                                        <li><a href="#">TV & Video</a></li>
                                        <li><a href="#">Audio & Theater</a></li>
                                        <li><a href="#">Camera, Photo</a></li>
                                        <li><a href="#">Cell Phones</a></li>
                                        <li><a href="#">Headphones</a></li>
                                        <li><a href="#">Video Games</a></li>
                                        <li><a href="#">Wireless Speakers</a></li>
                                    </ul>
                                </li>
                                <li class="has-sub"><a href="#">Electronics</a>
                                    <ul>
                                        <li><a href="#">Amazon Home</a></li>
                                        <li><a href="#">Kitchen & Dining</a></li>
                                        <li><a href="#">Bed & Bath</a></li>
                                        <li><a href="#">Appliances</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- category-sub-menu end -->
                    </div> --}}
                    <!--sidebar-categores-box end  -->
                    <div class="sidebar-categores-box">
                        <form action="#">
                            <div class="sidebar-title">
                                <h2>Sort By</h2>
                            </div>
                            <!-- btn-clear-all start -->
                            <button class="btn-clear-all mb-sm-30 mb-xs-30"
                                wire:click.prevent="changeOrderBy('Default')">Default</button>
                            <!-- btn-clear-all end -->
                            <!-- filter-sub-area start -->
                            <div class="filter-sub-area">
                                <h5 class="filter-sub-titel">Name</h5>
                                <div class="categori-checkbox">
                                    <ul>
                                        <li wire:click.prevent="changeOrderBy('Name (A - Z)')"><input type="radio"
                                                name="product-categori" {!! $orderBy == 'Name (A - Z)' ? 'checked' : '' !!}><a href="#">Name
                                                (A - Z)</a>
                                        </li>
                                        <li wire:click.prevent="changeOrderBy('Name (Z - A)')"><input type="radio"
                                                name="product-categori" {!! $orderBy == 'Name (Z - A)' ? 'checked' : '' !!}><a href="#">Name
                                                (Z - A)</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- filter-sub-area end -->
                            <!-- filter-sub-area start -->
                            <div class="filter-sub-area pt-sm-10 pt-xs-10">
                                <h5 class="filter-sub-titel">Price</h5>
                                <div class="categori-checkbox">
                                    <ul>
                                        <li wire:click.prevent="changeOrderBy('Price (Low to High)')"><input
                                                type="radio" name="product-categori" {!! $orderBy == 'Price (Low to High)' ? 'checked' : '' !!}><a
                                                href="#">Price (Low
                                                to High)</a></li>
                                        <li wire:click.prevent="changeOrderBy('Price (High to Low)')"><input
                                                type="radio" name="product-categori" {!! $orderBy == 'Price (High to Low)' ? 'checked' : '' !!}><a
                                                href="#">Price (High
                                                to Low)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- filter-sub-area end -->
                            <!-- filter-sub-area start -->
                            <div class="filter-sub-area pt-sm-10 pt-xs-10">
                                <h5 class="filter-sub-titel">Time</h5>
                                <div class="size-checkbox">
                                    <ul>
                                        <li wire:click.prevent="changeOrderBy('Newest')"><input type="radio"
                                                name="product-size" {!! $orderBy == 'Newest' ? 'checked' : '' !!}><a
                                                href="#">Newest</a>
                                        </li>
                                        <li wire:click.prevent="changeOrderBy('Oldest')"><input type="radio"
                                                name="product-size" {!! $orderBy == 'Oldest' ? 'checked' : '' !!}><a
                                                href="#">Oldest</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                        <!-- filter-sub-area end -->
                    </div>
                    <!--sidebar-categores-box end  -->
                    <!--sidebar-categores-box start  -->
                    {{-- <div class="sidebar-categores-box">
                        <div class="sidebar-title">
                            <h2>Filter By</h2>
                        </div>
                        <!-- btn-clear-all start -->
                        <button class="btn-clear-all mb-sm-30 mb-xs-30">Clear all</button>
                        <!-- btn-clear-all end -->
                        <!-- filter-sub-area start -->
                        <div class="filter-sub-area">
                            <h5 class="filter-sub-titel">Brand</h5>
                            <div class="categori-checkbox">
                                <form action="#">
                                    <ul>
                                        <li><input type="checkbox" name="product-categori"><a href="#">Prime
                                                Video
                                                (13)</a>
                                        </li>
                                        <li><input type="checkbox" name="product-categori"><a
                                                href="#">Computers
                                                (12)</a>
                                        </li>
                                        <li><input type="checkbox" name="product-categori"><a
                                                href="#">Electronics
                                                (11)</a>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <!-- filter-sub-area end -->
                        <!-- filter-sub-area start -->
                        <div class="filter-sub-area pt-sm-10 pt-xs-10">
                            <h5 class="filter-sub-titel">Categories</h5>
                            <div class="categori-checkbox">
                                <form action="#">
                                    <ul>
                                        <li><input type="checkbox" name="product-categori"><a href="#">Graphic
                                                Corner
                                                (10)</a></li>
                                        <li><input type="checkbox" name="product-categori"><a href="#">
                                                Studio
                                                Design
                                                (6)</a></li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <!-- filter-sub-area end -->
                        <!-- filter-sub-area start -->
                        <div class="filter-sub-area pt-sm-10 pt-xs-10">
                            <h5 class="filter-sub-titel">Size</h5>
                            <div class="size-checkbox">
                                <form action="#">
                                    <ul>
                                        <li><input type="checkbox" name="product-size"><a href="#">S
                                                (3)</a>
                                        </li>
                                        <li><input type="checkbox" name="product-size"><a href="#">M
                                                (3)</a>
                                        </li>
                                        <li><input type="checkbox" name="product-size"><a href="#">L
                                                (3)</a>
                                        </li>
                                        <li><input type="checkbox" name="product-size"><a href="#">XL
                                                (3)</a>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <!-- filter-sub-area end -->
                        <!-- filter-sub-area start -->
                        <div class="filter-sub-area pt-sm-10 pt-xs-10">
                            <h5 class="filter-sub-titel">Color</h5>
                            <div class="color-categoriy">
                                <form action="#">
                                    <ul>
                                        <li><span class="white"></span><a href="#">White (1)</a></li>
                                        <li><span class="black"></span><a href="#">Black (1)</a></li>
                                        <li><span class="Orange"></span><a href="#">Orange (3) </a></li>
                                        <li><span class="Blue"></span><a href="#">Blue (2) </a></li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <!-- filter-sub-area end -->
                        <!-- filter-sub-area start -->
                        <div class="filter-sub-area pt-sm-10 pb-sm-15 pb-xs-15">
                            <h5 class="filter-sub-titel">Dimension</h5>
                            <div class="categori-checkbox">
                                <form action="#">
                                    <ul>
                                        <li><input type="checkbox" name="product-categori"><a href="#">40x60cm
                                                (6)</a>
                                        </li>
                                        <li><input type="checkbox" name="product-categori"><a href="#">60x90cm
                                                (6)</a>
                                        </li>
                                        <li><input type="checkbox" name="product-categori"><a href="#">80x120cm
                                                (6)</a>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                        <!-- filter-sub-area end -->
                    </div> --}}
                    <!--sidebar-categores-box end  -->
                    <!--sidebar-categores-box start  -->
                    <!-- category-sub-menu start -->
                    {{-- <div class="sidebar-categores-box mb-sm-0 mb-xs-0">
                        <div class="sidebar-title">
                            <h2>Laptop</h2>
                        </div>
                        <div class="category-tags">
                            <ul>
                                <li><a href="# ">Devita</a></li>
                                <li><a href="# ">Cameras</a></li>
                                <li><a href="# ">Sony</a></li>
                                <li><a href="# ">Computer</a></li>
                                <li><a href="# ">Big Sale</a></li>
                                <li><a href="# ">Accessories</a></li>
                            </ul>
                        </div>
                        <!-- category-sub-menu end -->
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Content Wraper Area End Here -->

</div>
