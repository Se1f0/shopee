<div style="margin-top: -20px">
    <!-- Begin Li's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ route('user.orders') }}">Orders</a></li>
                    <li class="active">Order {{ $order->id }} Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <div class="Shopping-cart-area pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <h2>Ordered Items</h2>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="li-product-thumbnail">images</th>
                                        <th class="cart-product-name">Name</th>
                                        <th class="li-product-price">Unit Price</th>
                                        <th class="li-product-quantity">Quantity</th>
                                        <th class="li-product-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order->orderItems as $item)
                                        <tr>
                                            <td class="li-product-thumbnail"><a
                                                    href="{{ route('product.details', ['slug' => $item->product->slug]) }}"><img
                                                        src="{{ asset('assets/images/product/small-size') }}/{{ $item->product->image }}"
                                                        alt="{{ $item->product->name }}"></a>
                                            </td>
                                            <td class="li-product-name"><a
                                                    href="{{ route('product.details', ['slug' => $item->product->slug]) }}">{{ $item->product->name }}</a>
                                            </td>
                                            <td class="li-product-price"><span
                                                    class="amount">${{ $item->price }}</span>
                                            </td>
                                            <td class="li-product-price"><span
                                                    class="amount">{{ $item->quantity }}</span>
                                            </td>
                                            <td class="product-subtotal"><span
                                                    class="amount">${{ $item->price * $item->quantity }}</span></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mr-auto">
                                <div class="cart-page-total">
                                    <h2>Order totals</h2>
                                    <ul>
                                        <li>Subtotal <span>${{ $order->subtotal }}</span></li>
                                        <li>Discount<span>-${{ number_format($order->discount, 2) }}</span></li>
                                        <li>Tax
                                            ({{ config('cart.tax') }}%)<span>${{ number_format($order->tax, 2) }}</span>
                                        </li>
                                        <li>Total <span>${{ number_format($order->total, 2) }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mr-auto">
                                <div class="cart-page-total">
                                    <h2>Billing Details</h2>
                                    <ul>
                                        <li>First Name <span>{{ $order->firstname }}</span></li>
                                        <li>Last Name<span>{{ $order->lastname }}</span></li>
                                        <li>Mobile Number<span>{{ $order->mobile }}</span></li>
                                        <li>Email<span>{{ $order->email }}</span></li>
                                        <li>Country<span>{{ $order->country }}</span></li>
                                        <li>Address Line 1<span>{{ $order->line1 }}</span></li>
                                        <li>Address Line 2<span>{{ $order->line2 }}</span></li>
                                        <li>City<span>{{ $order->city }}</span></li>
                                        <li>Province<span>{{ $order->province }}</span></li>
                                        <li>Zipcode<span>{{ $order->zipcode }}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @if ($order->is_shipping_different)
                            <div class="row">
                                <div class="col-md-12 mr-auto">
                                    <div class="cart-page-total">
                                        <h2>Shipping Details</h2>
                                        <ul>
                                            <li>First Name <span>{{ $order->shipping->firstname }}</span></li>
                                            <li>Last Name<span>{{ $order->shipping->lastname }}</span></li>
                                            <li>Mobile Number<span>{{ $order->shipping->mobile }}</span></li>
                                            <li>Email<span>{{ $order->shipping->email }}</span></li>
                                            <li>Country<span>{{ $order->shipping->country }}</span></li>
                                            <li>Address Line 1<span>{{ $order->shipping->line1 }}</span></li>
                                            <li>Address Line 2<span>{{ $order->shipping->line2 }}</span></li>
                                            <li>City<span>{{ $order->shipping->city }}</span></li>
                                            <li>Province<span>{{ $order->shipping->province }}</span></li>
                                            <li>Zipcode<span>{{ $order->shipping->zipcode }}</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12 mr-auto">
                                <div class="cart-page-total">
                                    <h2>Transaction</h2>
                                    <ul>
                                        <li>Transaction Mode <span>{{ $order->transaction->mode }}</span></li>
                                        <li>Status<span>{{ $order->transaction->status }}</span></li>
                                        <li>Transaction Date<span>{{ $order->transaction->created_at }}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
