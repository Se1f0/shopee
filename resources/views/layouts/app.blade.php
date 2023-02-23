<!doctype html>
<html class="no-js" lang="zxx">

<!-- index-231:32-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home Version Two || limupa - Digital Products Store ECommerce Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">
    <!-- Material Design Iconic Font-V2.2.0 -->
    <link rel="stylesheet" href="{{ asset('assets/css/material-design-iconic-font.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- Font Awesome Stars-->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-stars.css') }}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- Jquery-ui CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
    <!-- Venobox CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/venobox.css') }}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- Bootstrap V4.1.3 Fremwork CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/helper.css') }}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    @livewireStyles
</head>

<body>
    <!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
 <![endif]-->
    <!-- Begin Body Wrapper -->
    <div class="body-wrapper">
        <!-- Begin Header Area -->
        <header>
            <!-- Begin Header Top Area -->
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <!-- Begin Header Top Left Area -->
                        <div class="col-lg-3 col-md-4">
                            <div class="header-top-left">
                                <ul class="phone-wrap">
                                    <li><span>Telephone Enquiry:</span><a href="#">(+123) 123 321 345</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Header Top Left Area End Here -->
                        <!-- Begin Header Top Right Area -->
                        <div class="col-lg-9 col-md-8">
                            <div class="header-top-right">
                                <ul class="ht-menu">
                                    <!-- Begin Setting Area -->
                                    <li>
                                        @auth
                                            <ul class="phone-wrap">
                                                <li>
                                                    <span>{{ Auth::user()->name }}</span>
                                                </li>
                                            </ul>
                                        @else
                                            <ul class="phone-wrap">
                                                <li>
                                                    <a href="{{ route('login') }}"><i class="fa fa-sign-in"></i> Log In</a>
                                                </li>
                                            </ul>
                                            <span> &nbsp&nbsp/&nbsp&nbsp </span>
                                            <ul class="phone-wrap">
                                                <li>
                                                    <a href="{{ route('register') }}"><i class="fa fa-user-plus"></i>
                                                        Register </a>
                                                </li>
                                            </ul>
                                            @endif
                                        </li>
                                        <!-- Setting Area End Here -->
                                        <!-- Begin Currency Area -->
                                        <li>
                                            <span class="currency-selector-wrapper">Currency :</span>
                                            <div class="ht-currency-trigger"><span>USD $</span></div>
                                            <div class="currency ht-currency">
                                                <ul class="ht-setting-list">
                                                    <li><a href="#">EUR €</a></li>
                                                    <li class="active"><a href="#">USD $</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Currency Area End Here -->
                                        <!-- Begin Language Area -->
                                        <li>
                                            <span class="language-selector-wrapper">Language :</span>
                                            <div class="ht-language-trigger"><span>English</span></div>
                                            <div class="language ht-language">
                                                <ul class="ht-setting-list">
                                                    <li class="active"><a href="#"><img
                                                                src="{{ asset('assets/images/menu/flag-icon/1.jpg') }}"
                                                                alt="">English</a>
                                                    </li>
                                                    <li><a href="#"><img
                                                                src="{{ asset('assets/images/menu/flag-icon/2.jpg') }}"
                                                                alt="">Français</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Language Area End Here -->
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Top Area End Here -->
                <!-- Begin Header Middle Area -->
                <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Logo Area -->
                            <div class="col-lg-3">
                                <div class="logo pb-sm-30 pb-xs-30">
                                    <a href="{{ route('home.index') }}">
                                        <img src="{{ asset('assets/images/menu/logo/1.jpg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Header Logo Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                                <!-- Begin Header Middle Searchbox Area -->
                                @livewire('header-search-component')
                                <!-- Header Middle Searchbox Area End Here -->
                                <!-- Begin Header Middle Right Area -->
                                <div class="header-middle-right">
                                    <ul class="hm-menu">
                                        @livewire('wishlist-icon-component')
                                        @livewire('cart-icon-component')
                                    </ul>
                                </div>
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Middle Area End Here -->
                <!-- Begin Header Bottom Area -->
                <div class="header-bottom header-sticky d-none d-lg-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Begin Header Bottom Menu Area -->
                                <div class="hb-menu hb-menu-2 d-xl-block">
                                    <nav>
                                        <ul>
                                            <li><a href="/">Home</a></li>
                                            <li><a href="{{ route('shop') }}">Shop</a></li>
                                            <li><a href="contact.html">About us</a></li>
                                            <li><a href="contact.html">Contact us</a></li>
                                            @auth
                                                <li class="dropdown-holder"><a href="#">My Account</a>
                                                    @if (Auth::user()->utype == 'ADM')
                                                        <ul class="hb-dropdown">
                                                            <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                                            <li><a href="#">Products</a></li>
                                                            <li><a href="{{ route('admin.categories') }}">Categories</a></li>
                                                            <li>
                                                                <form method="POST" action="{{ route('logout') }}">
                                                                    @csrf
                                                                    <a href="{{ route('logout') }}"
                                                                        onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    @else
                                                        <ul class="hb-dropdown">
                                                            <li><a href="{{ route('user.dashboard') }}">Dashboardd</a></li>
                                                            <li>
                                                                <form method="POST" action="{{ route('logout') }}">
                                                                    @csrf
                                                                    <a href="{{ route('logout') }}"
                                                                        onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    @endif
                                                </li>
                                            @else
                                                <li style="display: none"></li>
                                                @endif
                                                <!-- Begin Header Bottom Menu Information Area -->
                                                <li class="hb-info f-right p-0 d-sm-none d-lg-block">
                                                    <span>6688 London, Greater London BAS 23JK, UK</span>
                                                </li>
                                                <!-- Header Bottom Menu Information Area End Here -->
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- Header Bottom Menu Area End Here -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Header Bottom Area End Here -->
                    <!-- Begin Mobile Menu Area -->
                    <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                        <div class="container">
                            <div class="row">
                                <div class="mobile-menu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu Area End Here -->
                </header>
                <!-- Header Area End Here -->
                {{ $slot }}
                <!-- Begin Footer Area -->
                <div class="footer">
                    <!-- Begin Footer Static Top Area -->
                    <div class="footer-static-top">
                        <div class="container">
                            <!-- Begin Footer Shipping Area -->
                            <div class="footer-shipping pt-60 pb-55 pb-xs-25">
                                <div class="row">
                                    <!-- Begin Li's Shipping Inner Box Area -->
                                    <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                                        <div class="li-shipping-inner-box">
                                            <div class="shipping-icon">
                                                <img src="{{ asset('assets/images/shipping-icon/1.png') }}"
                                                    alt="Shipping Icon">
                                            </div>
                                            <div class="shipping-text">
                                                <h2>Free Delivery</h2>
                                                <p>And free returns. See checkout for delivery dates.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Li's Shipping Inner Box Area End Here -->
                                    <!-- Begin Li's Shipping Inner Box Area -->
                                    <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                                        <div class="li-shipping-inner-box">
                                            <div class="shipping-icon">
                                                <img src="{{ asset('assets/images/shipping-icon/2.png') }}"
                                                    alt="Shipping Icon">
                                            </div>
                                            <div class="shipping-text">
                                                <h2>Safe Payment</h2>
                                                <p>Pay with the world's most popular and secure payment methods.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Li's Shipping Inner Box Area End Here -->
                                    <!-- Begin Li's Shipping Inner Box Area -->
                                    <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                                        <div class="li-shipping-inner-box">
                                            <div class="shipping-icon">
                                                <img src="{{ asset('assets/images/shipping-icon/3.png') }}"
                                                    alt="Shipping Icon">
                                            </div>
                                            <div class="shipping-text">
                                                <h2>Shop with Confidence</h2>
                                                <p>Our Buyer Protection covers your purchasefrom click to delivery.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Li's Shipping Inner Box Area End Here -->
                                    <!-- Begin Li's Shipping Inner Box Area -->
                                    <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                                        <div class="li-shipping-inner-box">
                                            <div class="shipping-icon">
                                                <img src="{{ asset('assets/images/shipping-icon/4.png') }}"
                                                    alt="Shipping Icon">
                                            </div>
                                            <div class="shipping-text">
                                                <h2>24/7 Help Center</h2>
                                                <p>Have a question? Call a Specialist or chat online.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Li's Shipping Inner Box Area End Here -->
                                </div>
                            </div>
                            <!-- Footer Shipping Area End Here -->
                        </div>
                    </div>
                    <!-- Footer Static Top Area End Here -->
                    <!-- Begin Footer Static Middle Area -->
                    <div class="footer-static-middle">
                        <div class="container">
                            <div class="footer-logo-wrap pt-50 pb-35">
                                <div class="row">
                                    <!-- Begin Footer Logo Area -->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="footer-logo">
                                            <img src="{{ asset('assets/images/menu/logo/1.jpg') }}" alt="Footer Logo">
                                            <p class="info">
                                                We are a team of designers and developers that create high quality HTML Template
                                                & Woocommerce, Shopify Theme.
                                            </p>
                                        </div>
                                        <ul class="des">
                                            <li>
                                                <span>Address: </span>
                                                6688Princess Road, London, Greater London BAS 23JK, UK
                                            </li>
                                            <li>
                                                <span>Phone: </span>
                                                <a href="#">(+123) 123 321 345</a>
                                            </li>
                                            <li>
                                                <span>Email: </span>
                                                <a href="mailto://info@yourdomain.com">info@yourdomain.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Footer Logo Area End Here -->
                                    <!-- Begin Footer Block Area -->
                                    <div class="col-lg-2 col-md-3 col-sm-6">
                                        <div class="footer-block">
                                            <h3 class="footer-block-title">Product</h3>
                                            <ul>
                                                <li><a href="#">Prices drop</a></li>
                                                <li><a href="#">New products</a></li>
                                                <li><a href="#">Best sales</a></li>
                                                <li><a href="#">Contact us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Footer Block Area End Here -->
                                    <!-- Begin Footer Block Area -->
                                    <div class="col-lg-2 col-md-3 col-sm-6">
                                        <div class="footer-block">
                                            <h3 class="footer-block-title">Our company</h3>
                                            <ul>
                                                <li><a href="#">Delivery</a></li>
                                                <li><a href="#">Legal Notice</a></li>
                                                <li><a href="#">About us</a></li>
                                                <li><a href="#">Contact us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Footer Block Area End Here -->
                                    <!-- Begin Footer Block Area -->
                                    <div class="col-lg-4">
                                        <div class="footer-block">
                                            <h3 class="footer-block-title">Follow Us</h3>
                                            <ul class="social-link">
                                                <li class="twitter">
                                                    <a href="https://twitter.com/" data-toggle="tooltip" target="_blank"
                                                        title="Twitter">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="rss">
                                                    <a href="https://rss.com/" data-toggle="tooltip" target="_blank"
                                                        title="RSS">
                                                        <i class="fa fa-rss"></i>
                                                    </a>
                                                </li>
                                                <li class="google-plus">
                                                    <a href="https://www.plus.google.com/discover" data-toggle="tooltip"
                                                        target="_blank" title="Google +">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                </li>
                                                <li class="facebook">
                                                    <a href="https://www.facebook.com/" data-toggle="tooltip" target="_blank"
                                                        title="Facebook">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="youtube">
                                                    <a href="https://www.youtube.com/" data-toggle="tooltip" target="_blank"
                                                        title="Youtube">
                                                        <i class="fa fa-youtube"></i>
                                                    </a>
                                                </li>
                                                <li class="instagram">
                                                    <a href="https://www.instagram.com/" data-toggle="tooltip"
                                                        target="_blank" title="Instagram">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Begin Footer Newsletter Area -->
                                        <div class="footer-newsletter">
                                            <h4>Sign up to newsletter</h4>
                                            <form action="#" method="post" id="mc-embedded-subscribe-form"
                                                name="mc-embedded-subscribe-form" class="footer-subscribe-form validate"
                                                target="_blank" novalidate>
                                                <div id="mc_embed_signup_scroll">
                                                    <div id="mc-form" class="mc-form subscribe-form form-group">
                                                        <input id="mc-email" type="email" autocomplete="off"
                                                            placeholder="Enter your email" />
                                                        <button class="btn" id="mc-submit">Subscribe</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Footer Newsletter Area End Here -->
                                    </div>
                                    <!-- Footer Block Area End Here -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Static Middle Area End Here -->
                    <!-- Begin Footer Static Bottom Area -->
                    <div class="footer-static-bottom pt-55 pb-55">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- Begin Footer Links Area -->
                                    <div class="footer-links">
                                        <ul>
                                            <li><a href="#">Online Shopping</a></li>
                                            <li><a href="#">Promotions</a></li>
                                            <li><a href="#">My Orders</a></li>
                                            <li><a href="#">Help</a></li>
                                            <li><a href="#">Customer Service</a></li>
                                            <li><a href="#">Support</a></li>
                                            <li><a href="#">Most Populars</a></li>
                                            <li><a href="#">New Arrivals</a></li>
                                            <li><a href="#">Special Products</a></li>
                                            <li><a href="#">Manufacturers</a></li>
                                            <li><a href="#">Our Stores</a></li>
                                            <li><a href="#">Shipping</a></li>
                                            <li><a href="#">Payments</a></li>
                                            <li><a href="#">Warantee</a></li>
                                            <li><a href="#">Refunds</a></li>
                                            <li><a href="#">Checkout</a></li>
                                            <li><a href="#">Discount</a></li>
                                            <li><a href="#">Refunds</a></li>
                                            <li><a href="#">Policy Shipping</a></li>
                                        </ul>
                                    </div>
                                    <!-- Footer Links Area End Here -->
                                    <!-- Begin Footer Payment Area -->
                                    <div class="copyright text-center">
                                        <a href="#">
                                            <img src="{{ asset('assets/images/payment/1.png') }}" alt="">
                                        </a>
                                    </div>
                                    <!-- Footer Payment Area End Here -->
                                    <!-- Begin Copyright Area -->
                                    <div class="copyright text-center pt-25">
                                        <span><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></span>
                                    </div>
                                    <!-- Copyright Area End Here -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer Static Bottom Area End Here -->
                </div>
                <!-- Footer Area End Here -->
                <!-- Begin Quick View | Modal Area -->
                <div class="modal fade modal-wrapper" id="exampleModalCenter">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <div class="modal-inner-area row">
                                    <div class="col-lg-5 col-md-6 col-sm-6">
                                        <!-- Product Details Left -->
                                        <div class="product-details-left">
                                            <div class="product-details-images slider-navigation-1">
                                                <div class="lg-image">
                                                    <img src="{{ asset('assets/images/product/large-size/product-1.jpg') }}"
                                                        alt="product image">
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
                                                        alt="product image thumb"></div>
                                                <div class="sm-image"><img
                                                        src="{{ asset('assets/images/product/small-size/product-2.jpg') }}"
                                                        alt="product image thumb"></div>
                                                <div class="sm-image"><img
                                                        src="{{ asset('assets/images/product/small-size/product-3.jpg') }}"
                                                        alt="product image thumb"></div>
                                                <div class="sm-image"><img
                                                        src="{{ asset('assets/images/product/small-size/product-4.jpg') }}"
                                                        alt="product image thumb"></div>
                                                <div class="sm-image"><img
                                                        src="{{ asset('assets/images/product/small-size/product-5.jpg') }}"
                                                        alt="product image thumb"></div>
                                                <div class="sm-image"><img
                                                        src="{{ asset('assets/images/product/small-size/product-6.jpg') }}"
                                                        alt="product image thumb"></div>
                                            </div>
                                        </div>
                                        <!--// Product Details Left -->
                                    </div>

                                    <div class="col-lg-7 col-md-6 col-sm-6">
                                        <div class="product-details-view-content pt-60">
                                            <div class="product-info">
                                                <h2>Today is a good day Framed poster</h2>
                                                <span class="product-details-ref">Reference: demo_15</span>
                                                <div class="rating-box pt-20">
                                                    <ul class="rating rating-with-review-item">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                        <li class="review-item"><a href="#">Read Review</a></li>
                                                        <li class="review-item"><a href="#">Write Review</a></li>
                                                    </ul>
                                                </div>
                                                <div class="price-box pt-20">
                                                    <span class="new-price new-price-2">$57.98</span>
                                                </div>
                                                <div class="product-desc">
                                                    <p>
                                                        <span>100% cotton double printed dress. Black and white striped top and
                                                            orange high waisted skater skirt bottom. Lorem ipsum dolor sit amet,
                                                            consectetur adipisicing elit. quibusdam corporis, earum facilis et
                                                            nostrum dolorum accusamus similique eveniet quia pariatur.
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="product-variants">
                                                    <div class="produt-variants-size">
                                                        <label>Dimension</label>
                                                        <select class="nice-select">
                                                            <option value="1" title="S" selected="selected">40x60cm
                                                            </option>
                                                            <option value="2" title="M">60x90cm</option>
                                                            <option value="3" title="L">80x120cm</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="single-add-to-cart">
                                                    <form action="#" class="cart-quantity">
                                                        <div class="quantity">
                                                            <label>Quantity</label>
                                                            <div class="cart-plus-minus">
                                                                <input class="cart-plus-minus-box" value="1"
                                                                    type="text">
                                                                <div class="dec qtybutton"><i class="fa fa-angle-down"></i>
                                                                </div>
                                                                <div class="inc qtybutton"><i class="fa fa-angle-up"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="add-to-cart" type="submit">Add to cart</button>
                                                    </form>
                                                </div>
                                                <div class="product-additional-info pt-25">
                                                    <a class="wishlist-btn" href="wishlist.html"><i
                                                            class="fa fa-heart-o"></i>Add to wishlist</a>
                                                    <div class="product-social-sharing pt-25">
                                                        <ul>
                                                            <li class="facebook"><a href="#"><i
                                                                        class="fa fa-facebook"></i>Facebook</a></li>
                                                            <li class="twitter"><a href="#"><i
                                                                        class="fa fa-twitter"></i>Twitter</a></li>
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
                    </div>
                </div>
                <!-- Quick View | Modal Area End Here -->
            </div>
            <!-- Body Wrapper End Here -->
            <!-- Modernizr js -->
            <script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
            <!-- jQuery-V1.12.4 -->
            <script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
            <!-- Popper js -->
            <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
            <!-- Bootstrap V4.1.3 Fremwork js -->
            <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
            <!-- Ajax Mail js -->
            <script src="{{ asset('assets/js/ajax-mail.js') }}"></script>
            <!-- Meanmenu js -->
            <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
            <!-- Wow.min js -->
            <script src="{{ asset('assets/js/wow.min.js') }}"></script>
            <!-- Slick Carousel js -->
            <script src="{{ asset('assets/js/slick.min.js') }}"></script>
            <!-- Owl Carousel-2 js -->
            <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
            <!-- Magnific popup js -->
            <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
            <!-- Isotope js -->
            <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
            <!-- Imagesloaded js -->
            <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
            <!-- Mixitup js -->
            <script src="{{ asset('assets/js/jquery.mixitup.min.js') }}"></script>
            <!-- Countdown -->
            <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
            <!-- Counterup -->
            <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
            <!-- Waypoints -->
            <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
            <!-- Barrating -->
            <script src="{{ asset('assets/js/jquery.barrating.min.js') }}"></script>
            <!-- Jquery-ui -->
            <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
            <!-- Venobox -->
            <script src="{{ asset('assets/js/venobox.min.js') }}"></script>
            <!-- Nice Select js -->
            <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
            <!-- ScrollUp js -->
            <script src="{{ asset('assets/js/scrollUp.min.js') }}"></script>
            <!-- Main/Activator js -->
            <script src="{{ asset('assets/js/main.js') }}"></script>

            <script src="https://kit.fontawesome.com/87d8587084.js" crossorigin="anonymosus"></script>

            @livewireScripts
        </body>

        <!-- index-231:38-->

        </html>
