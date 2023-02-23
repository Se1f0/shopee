<div style="margin-top: -20px">
    <!-- Begin Li's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!--Shopping Cart Area Strat-->
    @if (Cart::instance('cart')->count() > 0)
        <div class="Shopping-cart-area pt-60 pb-60">
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
                                            <th class="li-product-quantity">Quantity</th>
                                            <th class="li-product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach (Cart::instance('cart')->content() as $item)
                                            <tr>
                                                <td class="li-product-remove"><a href="#"
                                                        wire:click.prevent="destroy('{{ $item->rowId }}')"><i
                                                            class="fa fa-trash" aria-hidden="true"></i></a>
                                                </td>
                                                <td class="li-product-thumbnail"><a
                                                        href="{{ route('product.details', ['slug' => $item->model->slug]) }}"><img
                                                            src="{{ asset('assets/images/product/small-size/product') }}-{{ $item->model->id }}.jpg"
                                                            alt="{{ $item->model->name }}"></a>
                                                </td>
                                                <td class="li-product-name"><a
                                                        href="{{ route('product.details', ['slug' => $item->model->slug]) }}">{{ $item->model->name }}</a>
                                                </td>
                                                <td class="li-product-price"><span
                                                        class="amount">${{ $item->model->regular_price }}</span></td>
                                                <td class="quantity">
                                                    <label>Quantity</label>
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" value="{{ $item->qty }}"
                                                            type="text">
                                                        <div class="dec qtybutton"
                                                            wire:click.prevent="decreaseQuantity('{{ $item->rowId }}')">
                                                            <i class="fa fa-angle-down"></i></a>
                                                        </div>
                                                        <div class="inc qtybutton"
                                                            wire:click.prevent="increaseQuantity('{{ $item->rowId }}')">
                                                            <i class="fa fa-angle-up"></i>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal"><span
                                                        class="amount">${{ $item->subtotal }}</span></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="coupon-all">
                                        <div class="coupon">
                                            <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                                placeholder="Coupon code" type="text">
                                            <input class="button" name="apply_coupon" value="Apply coupon"
                                                type="submit">
                                        </div>
                                        <div class="coupon2">
                                            <input class="button" name="update_cart" value="Update cart" type="submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="cart-page-total">
                                        <h2>Cart totals</h2>
                                        <ul>
                                            <li>Subtotal <span>${{ Cart::instance('cart')->subtotal() }}</span></li>
                                            <li>Tax
                                                ({{ config('cart.tax') }}%)<span>${{ Cart::instance('cart')->tax() }}</span>
                                            </li>
                                            <li>Shipping <span>Free</span></li>
                                            <li>Total <span>${{ Cart::instance('cart')->total() }}</span></li>
                                        </ul>
                                        <a href="#">Proceed to checkout</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
                                <h2>No item in the cart !</h2>
                                <p>Browse the shop page and add items into the cart</p>
                            </div>
                            <div class="error-button">
                                <a href="index.html">to the shop page</a>
                            </div>
                            <div class="error-button">
                                <a href="index.html">Back to home page</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Error 404 Area End -->
    @endif
    <!--Shopping Cart Area End-->
</div>
