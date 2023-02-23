<span>
    <!-- Begin Header Middle Wishlist Area -->
    <li class="hm-wishlist">
        <a href="{{ route('shop.wishlist') }}">
            <span class="cart-item-count wishlist-item-count">{{ Cart::instance('wishlist')->count() }}</span>
            <i class="fa fa-heart-o"></i>
        </a>
    </li>
    <!-- Header Middle Wishlist Area End Here -->
</span>
