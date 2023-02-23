<div>
    <!-- Begin Li's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="active">Wishlist</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    @if (Cart::instance('wishlist')->count() > 0)
        <!--Wishlist Area Strat-->
        <div class="wishlist-area pt-60 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @if (Session::has('success_message'))
                            <div class="alert alert-success">
                                <strong>Success | {{ Session::get('success_message') }}</strong>
                            </div>
                        @endif
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="li-product-remove">remove</th>
                                            <th class="li-product-thumbnail">images</th>
                                            <th class="cart-product-name">Product</th>
                                            <th class="li-product-price">Unit Price</th>
                                            <th class="li-product-stock-status">Stock Status</th>
                                            <th class="li-product-add-cart">add to cart</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (Cart::instance('wishlist')->content() as $item)
                                            <tr>
                                                <td class="li-product-remove"><a href="#"
                                                        wire:click.prevent="removeFromWishlist({{ $item->model->id }})"><i
                                                            class="fa fa-trash" aria-hidden="true"></i></a>
                                                </td>
                                                <td class="li-product-thumbnail"><a href="#"><img
                                                            src="{{ asset('assets/images/product/small-size/product') }}-{{ $item->model->id }}.jpg"
                                                            alt="{{ $item->model->name }}"></a></td>
                                                <td class="li-product-name"><a
                                                        href="#">{{ $item->model->name }}</a>
                                                </td>
                                                <td class="li-product-price"><span
                                                        class="amount">${{ $item->model->regular_price }}</span></td>
                                                <td class="li-product-stock-status"><span
                                                        class="in-stock">{{ $item->model->stock_status }}</span>
                                                </td>
                                                <td class="li-product-add-cart"><a href="#">add to cart</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Wishlist Area End-->
    @else
        <!-- Error 404 Area Start -->
        <div class="error404-area pt-30 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        @if (Session::has('success_message'))
                            <div class="alert alert-success">
                                <strong>Success | {{ Session::get('success_message') }}</strong>
                            </div>
                        @endif
                        <div class="error-wrapper text-center ptb-50 pt-xs-20">
                            <div class="error-text">
                                <h2>No items in the wishlist !</h2>
                                <p>Browse the shop page and add items to your wishlist</p>
                            </div>
                            <div class="error-button">
                                <a href="{{ route('shop') }}">to the shop page</a>
                            </div>
                            <div class="error-button">
                                <a href="/">Back to home page</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Error 404 Area End -->
    @endif
</div>
