<div style="margin-top: -20px">
    <!-- Begin Li's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ route('shop') }}">Shop</a></li>
                    <li class="active">{{ $product->name }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!-- content-wraper start -->
    <div class="content-wraper">
        @php
            $witems = Cart::instance('wishlist')
                ->content()
                ->pluck('id');
        @endphp
        <div class="container">
            <div class="row single-product-area">
                <div class="col-lg-5 col-md-6">
                    <!-- Product Details Left -->
                    <div class="product-details-left">
                        <div class="product-details-images slider-navigation-1">
                            <div class="lg-image">
                                <img src="{{ asset('assets/images/product/large-size') }}/{{ $product->image }}"
                                    alt="{{ $product->name }}">
                            </div>
                            <div class="lg-image">
                                <img src="{{ asset('assets/images/product/large-size/product-2.jpg') }}"
                                    alt="product image">
                            </div>
                            <div class="lg-image">
                                <img src="{{ asset('assets/images/product/large-size/product-3.jpg') }}"
                                    alt="product image">
                            </div>
                            <div class="lg-image">
                                <img src="{{ asset('assets/images/product/large-size/product-4.jpg') }}"
                                    alt="product image">
                            </div>
                            <div class="lg-image">
                                <img src="{{ asset('assets/images/product/large-size/product-5.jpg') }}"
                                    alt="product image">
                            </div>
                            <div class="lg-image">
                                <img src="{{ asset('assets/images/product/large-size/product-6.jpg') }}"
                                    alt="product image">
                            </div>
                        </div>
                        <div class="product-details-thumbs slider-thumbs-1">
                            <div class="sm-image"><img
                                    src="{{ asset('assets/images/product/small-size/product-1.jpg') }}"
                                    alt="product image thumb">
                            </div>
                            <div class="sm-image"><img
                                    src="{{ asset('assets/images/product/small-size/product-2.jpg') }}"
                                    alt="product image thumb">
                            </div>
                            <div class="sm-image"><img
                                    src="{{ asset('assets/images/product/small-size/product-3.jpg') }}"
                                    alt="product image thumb">
                            </div>
                            <div class="sm-image"><img
                                    src="{{ asset('assets/images/product/small-size/product-4.jpg') }}"
                                    alt="product image thumb">
                            </div>
                            <div class="sm-image"><img
                                    src="{{ asset('assets/images/product/small-size/product-5.jpg') }}"
                                    alt="product image thumb">
                            </div>
                            <div class="sm-image"><img
                                    src="{{ asset('assets/images/product/small-size/product-6.jpg') }}"
                                    alt="product image thumb">
                            </div>
                        </div>
                    </div>
                    <!--// Product Details Left -->
                </div>

                <div class="col-lg-7 col-md-6">
                    <div class="product-details-view-content sp-normal-content pt-60">
                        <div class="product-info">
                            <h2>{{ $product->name }}</h2>
                            <span class="product-details-ref">Reference: {{ $product->SKU }}</span>
                            <div class="rating-box pt-20">
                                <ul class="rating rating-with-review-item">
                                    @php
                                        $avgRating = 0;
                                    @endphp
                                    @foreach ($product->orderItems->where('rstatus', 1) as $oredrItem)
                                        @php
                                            $avgRating = $avgRating + $oredrItem->review->rating;
                                        @endphp
                                    @endforeach
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $avgRating)
                                            <li><i class="fa fa-star"></i></li>
                                        @else
                                            <li class="no-star"><i class="fa fa-star-o"></i></li>
                                        @endif
                                    @endfor

                                    {{-- <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                    <li class="no-star"><i class="fa fa-star-o"></i></li> --}}
                                    <li class="product-details-ref">(
                                        {{ $product->orderItems->where('rstatus', 1)->count() }} review)</li>
                                </ul>
                            </div>
                            @if ($product->sale_price > 0 && $sale->status == 1 && $sale->sales_date > Carbon\Carbon::now())
                                <div class="price-box pt-20">
                                    <span class="old-price old-price-2"><s>${{ $product->regular_price }}</s></span>
                                    <br>
                                    <span class="new-price new-price-2">${{ $product->sale_price }}</span>
                                </div>
                                <div class="countersection">
                                    <div class="li-countdown"
                                        data-expire="{{ Carbon\Carbon::parse($sale->sales_date)->format('Y/m/d H:m:s') }}">
                                    </div>
                                </div>
                                <br><br>
                            @else
                                <div class="price-box pt-20">
                                    <span class="new-price new-price-2">${{ $product->regular_price }}</span>
                                </div>
                            @endif
                            <div class="product-desc">
                                <p>
                                    <span>{!! $product->short_desc !!}</span>
                                </p>
                            </div>
                            <div class="single-add-to-cart">
                                <form action="#" class="cart-quantity">
                                    <div class="quantity">
                                        <label> Status : <span
                                                style="color: darkgreen">{{ $product->stock_status }}</span> </label>
                                        <label> Total quantity : <span
                                                style="color: darkgreen">{{ $product->quantity }}</span> </label>
                                        {{-- <label>Selected Quantity</label>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" value="{{ $qty }}"
                                                type="text" disabled>
                                            <div class="dec qtybutton" wire:click.prevent="decreaseQuantity()">
                                                <i class="fa fa-angle-down"></i></a>
                                            </div>
                                            <div class="inc qtybutton" wire:click.prevent="increaseQuantity()">
                                                <i class="fa fa-angle-up"></i>
                                            </div>
                                        </div>
                                    </div> --}}
                                        @if ($product->sale_price > 0 && $sale->status == 1 && $sale->sales_date > Carbon\Carbon::now())
                                            <button class="add-to-cart"
                                                wire:click.prevent="store({{ $product->id }} , '{{ $product->name }}' , {{ $product->sale_price }})">Add
                                                to cart</button>
                                        @else
                                            <button class="add-to-cart"
                                                wire:click.prevent="store({{ $product->id }} , '{{ $product->name }}' , {{ $product->regular_price }})">Add
                                                to cart</button>
                                        @endif
                                        @if ($witems->contains($product->id))
                                            <button class="add-to-cart"
                                                wire:click.prevent="removeFromWishlist({{ $product->id }})"
                                                style="background-color: orange">Remove
                                                from wishlist</button>
                                        @else
                                            <button class="add-to-cart"
                                                wire:click.prevent="addToWishlist({{ $product->id }},'{{ $product->name }}',{{ $product->regular_price }})"
                                                style="background-color: orange">Add
                                                to wishlist</button>
                                        @endif
                                </form>
                            </div>
                            <div class="product-additional-info">
                                <div class="product-social-sharing">
                                    <ul>
                                        <li class="facebook"><a href="#"><i
                                                    class="fa fa-facebook"></i>Facebook</a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a>
                                        </li>
                                        <li class="google-plus"><a href="#"><i
                                                    class="fa fa-google-plus"></i>Google +</a></li>
                                        <li class="instagram"><a href="#"><i
                                                    class="fa fa-instagram"></i>Instagram</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wraper end -->
    <!-- Begin Product Area -->
    <div class="product-area pt-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="li-product-tab">
                        <ul class="nav li-product-menu">
                            <li><a class="active" data-toggle="tab" href="#description"><span>Description</span></a>
                            </li>
                            <li><a data-toggle="tab" href="#product-details"><span>Product Details</span></a></li>
                            <li><a data-toggle="tab" href="#reviews"><span>Reviews</span></a></li>
                        </ul>
                    </div>
                    <!-- Begin Li's Tab Menu Content Area -->
                </div>
            </div>
            <div class="tab-content">
                <div id="description" class="tab-pane active show" role="tabpanel">
                    <div class="product-description">
                        <span>{!! $product->desc !!}</span>
                    </div>
                </div>
                <div id="product-details" class="tab-pane" role="tabpanel">
                    <div class="product-details-manufacturer">
                        <a href="#">
                            <img src="{{ asset('assets/images/product-details/1.jpg') }}"
                                alt="Product Manufacturer Image">
                        </a>
                        <p><span>Reference</span> demo_7</p>
                        <p><span>Reference</span> demo_7</p>
                    </div>
                </div>
                <div id="reviews" class="tab-pane" role="tabpanel">
                    <div class="product-reviews">
                        <h5 class="mb-20">{{ $product->orderItems->where('rstatus', 1)->count() }} review for
                            {{ $product->name }}</h5>
                        @foreach ($product->orderItems->where('rstatus', 1) as $orderItem)
                            <div class="product-details-comment-block mb-10 mt-100">
                                <img src="{{ asset('assets/images/product-details/1.jpg') }}"
                                    alt="Product Manufacturer Image">
                                <span> <em><strong>{{ $orderItem->order->user->name }}</strong></em> on
                                    <em><strong>{{ Carbon\Carbon::parse($orderItem->review->created_at)->format('d F Y g:i A') }}</strong></em></span>
                                <div class="comment-review">
                                    <span>Rating</span>
                                    <ul class="rating">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $orderItem->review->rating)
                                                <li><i class="fa fa-star"></i></li>
                                            @else
                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                            @endif
                                        @endfor
                                    </ul>
                                </div>
                                <div class="comment-author-infos pt-25">
                                    <span>Comment</span>
                                    <em> <b>{{ $orderItem->review->comment }}</b> </em>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End Here -->
    <!-- Begin Li's Laptop Product Area -->
    <section class="product-area li-laptop-product pt-30 pb-50">
        <div class="container">
            <div class="row">
                <!-- Begin Li's Section Area -->
                <div class="col-lg-12">
                    <div class="li-section-title">
                        <h2>
                            <span>Related products</span>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="product-active owl-carousel">
                            @foreach ($rproducts as $rproduct)
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="{{ route('product.details', ['slug' => $rproduct->slug]) }}">
                                                <img src="{{ asset('assets/images/product/large-size') }}/{{ $rproduct->image }}"
                                                    alt="{{ $rproduct->name }}">
                                            </a>
                                            @if ($rproduct->sale_price > 0 && $sale->status == 1 && $sale->sales_date > Carbon\Carbon::now())
                                                <span class="sticker" style="background-color: red">Sale</span>
                                            @endif
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="product-details.html">{{ $rproduct->orderItems->where('rstatus', 1)->count() }}
                                                            review</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            @php
                                                                $avgRating = 0;
                                                            @endphp
                                                            @foreach ($rproduct->orderItems->where('rstatus', 1) as $oredrItem)
                                                                @php
                                                                    $avgRating = $avgRating + $oredrItem->review->rating;
                                                                @endphp
                                                            @endforeach
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                @if ($i <= $avgRating)
                                                                    <li><i class="fa fa-star"></i></li>
                                                                @else
                                                                    <li class="no-star"><i class="fa fa-star-o"></i>
                                                                    </li>
                                                                @endif
                                                            @endfor
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name"
                                                        href="{{ route('product.details', ['slug' => $rproduct->slug]) }}">{{ $rproduct->name }}</a>
                                                </h4>
                                                @if ($rproduct->sale_price > 0 && $sale->status == 1 && $sale->sales_date > Carbon\Carbon::now())
                                                    <div class="price-box">
                                                        <span
                                                            class="new-price new-price-2">${{ $rproduct->sale_price }}</span>
                                                        <span class="old-price">${{ $rproduct->regular_price }}</span>
                                                        {{-- <span class="discount-percentage">-7%</span> --}}
                                                    </div>
                                                    <div class="countersection">
                                                        <div class="li-countdown"
                                                            data-expire="{{ Carbon\Carbon::parse($sale->sales_date)->format('Y/m/d H:m:s') }}">
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="price-box">
                                                        <span class="new-price">${{ $rproduct->regular_price }}</span>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    @if ($rproduct->sale_price > 0 && $sale->status == 1 && $sale->sales_date > Carbon\Carbon::now())
                                                        <li class="add-cart active"><a href="#"
                                                                wire:click.prevent="store({{ $rproduct->id }} , '{{ $rproduct->name }}' , {{ $rproduct->sale_price }})">Add
                                                                to cart</a></li>
                                                    @else
                                                        <li class="add-cart active"><a href="#"
                                                                wire:click.prevent="store({{ $rproduct->id }} , '{{ $rproduct->name }}' , {{ $rproduct->regular_price }})">Add
                                                                to cart</a></li>
                                                    @endif
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
                <!-- Li's Section Area End Here -->
            </div>
            <div class="row" style="margin-top: 75px">
                <!-- Begin Li's Section Area -->
                <div class="col-lg-12">
                    <div class="li-section-title">
                        <h2>
                            <span>Latest products</span>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="product-active owl-carousel">
                            @foreach ($nproducts as $nproduct)
                                <div class="col-lg-12">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="{{ route('product.details', ['slug' => $nproduct->slug]) }}">
                                                <img src="{{ asset('assets/images/product/large-size') }}/{{ $nproduct->image }}"
                                                    alt="{{ $nproduct->name }}">
                                            </a>
                                            <span class="sticker">New</span>
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="product-review">
                                                    <h5 class="manufacturer">
                                                        <a href="product-details.html">{{ $nproduct->orderItems->where('rstatus', 1)->count() }}
                                                            review</a>
                                                    </h5>
                                                    <div class="rating-box">
                                                        <ul class="rating">
                                                            @php
                                                                $avgRating = 0;
                                                            @endphp
                                                            @foreach ($nproduct->orderItems->where('rstatus', 1) as $oredrItem)
                                                                @php
                                                                    $avgRating = $avgRating + $oredrItem->review->rating;
                                                                @endphp
                                                            @endforeach
                                                            @for ($i = 1; $i <= 5; $i++)
                                                                @if ($i <= $avgRating)
                                                                    <li><i class="fa fa-star"></i></li>
                                                                @else
                                                                    <li class="no-star"><i class="fa fa-star-o"></i>
                                                                    </li>
                                                                @endif
                                                            @endfor
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h4><a class="product_name"
                                                        href="{{ route('product.details', ['slug' => $nproduct->slug]) }}">{{ $nproduct->name }}</a>
                                                </h4>
                                                @if ($nproduct->sale_price > 0 && $sale->status == 1 && $sale->sales_date > Carbon\Carbon::now())
                                                    <div class="price-box">
                                                        <span
                                                            class="new-price new-price-2">${{ $nproduct->sale_price }}</span>
                                                        <span class="old-price">${{ $nproduct->regular_price }}</span>
                                                        {{-- <span class="discount-percentage">-7%</span> --}}
                                                    </div>
                                                    <div class="countersection">
                                                        <div class="li-countdown"
                                                            data-expire="{{ Carbon\Carbon::parse($sale->sales_date)->format('Y/m/d H:m:s') }}">
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="price-box">
                                                        <span class="new-price">${{ $nproduct->regular_price }}</span>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    @if ($nproduct->sale_price > 0 && $sale->status == 1 && $sale->sales_date > Carbon\Carbon::now())
                                                        <li class="add-cart active"><a href="#"
                                                                wire:click.prevent="store({{ $nproduct->id }} , '{{ $nproduct->name }}' , {{ $nproduct->sale_price }})">Add
                                                                to cart</a></li>
                                                    @else
                                                        <li class="add-cart active"><a href="#"
                                                                wire:click.prevent="store({{ $nproduct->id }} , '{{ $nproduct->name }}' , {{ $nproduct->regular_price }})">Add
                                                                to cart</a></li>
                                                    @endif
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
                <!-- Li's Section Area End Here -->
            </div>
        </div>

    </section>
    <!-- Li's Laptop Product Area End Here -->
</div>
