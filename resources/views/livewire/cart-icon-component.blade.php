<span>
    <!-- Begin Header Mini Cart Area -->
    <li class="hm-minicart">
        <div class="hm-minicart-trigger">
            <span class="item-icon"></span>
            <span class="item-text">${{ Cart::total() }}
                <span class="cart-item-count">{{ Cart::count() }}</span>
            </span>
        </div>
        <span></span>
        <div class="minicart">
            @if (Cart::count() > 0)
                <ul class="minicart-product-list">
                    @foreach (Cart::content() as $item)
                        <li>
                            <a href="{{ route('product.details', ['slug' => $item->model->slug]) }}"
                                class="minicart-product-image">
                                <img src="{{ asset('assets/images/product/small-size/product') }}-{{ $item->model->id }}.jpg"
                                    alt="{{ $item->model->name }}">
                            </a>
                            <div class="minicart-product-details">
                                <h6><a
                                        href="{{ route('product.details', ['slug' => $item->model->slug]) }}">{{ $item->model->name }}</a>
                                </h6>
                                <span>${{ $item->model->regular_price }} x {{ $item->qty }}</span>
                            </div>
                            <button class="close">
                                <i class="fa fa-close"></i>
                            </button>
                        </li>
                    @endforeach
                </ul>
                <p class="minicart-total">SUBTOTAL: <span>${{ Cart::subtotal() }}</span></p>
                <p class="minicart-total">TOTAL: <span>${{ Cart::total() }}</span></p>
                <div class="minicart-button">
                    <a href="{{ route('shop.cart') }}"
                        class="li-button li-button-dark li-button-fullwidth li-button-sm">
                        <span>View Full Cart</span>
                    </a>
                    <a href="{{ route('shop.checkout') }}" class="li-button li-button-fullwidth li-button-sm">
                        <span>Checkout</span>
                    </a>
                </div>
            @else
                <center>
                    <p class="minicart-total">
                        The cart is empty !
                    </p>
                </center>

                <div class="minicart-button">
                    <a href="{{ route('shop.cart') }}"
                        class="li-button li-button-dark li-button-fullwidth li-button-sm">
                        <span>View Full Cart</span>
                    </a>
                    <a href="{{ route('shop') }}" class="li-button li-button-dark li-button-fullwidth li-button-sm">
                        <span>Go to the shop</span>
                    </a>
                </div>
            @endif
        </div>
    </li>
    <!-- Header Mini Cart Area End Here -->
</span>
