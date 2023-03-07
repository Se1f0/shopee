<div style="margin-top: -20px">
    <!-- Begin Li's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="active">Orders</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!--Shopping Cart Area Strat-->
    @if ($orders->count() > 0)
        <div class="Shopping-cart-area pt-60 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-13">
                        @if (Session::has('order_message'))
                            <div class="alert alert-success">
                                <strong>Success | {{ Session::get('order_message') }}</strong>
                            </div>
                        @endif
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="li-product-thumbnail">#</th>
                                            <th class="li-product-thumbnail">ID</th>
                                            <th class="li-product-thumbnail">Subtotal</th>
                                            <th class="li-product-thumbnail">Discount</th>
                                            <th class="li-product-thumbnail">Tax</th>
                                            <th class="cart-product-name">Total</th>
                                            <th class="li-product-thumbnail">First Name</th>
                                            <th class="li-product-thumbnail">Last Name</th>
                                            <th class="li-product-thumbnail">Mobile</th>
                                            <th class="li-product-thumbnail">Email</th>
                                            <th class="li-product-thumbnail">Zipcode</th>
                                            <th class="li-product-price">Status</th>
                                            <th class="li-product-price">Order Date</th>
                                            <th class="li-product-quantity">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = ($orders->currentPage() - 1) * $orders->perPage();
                                        @endphp
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td class="li-product-price"><span
                                                        class="amount">{{ ++$i }}</span>
                                                </td>
                                                <td class="li-product-price"><span
                                                        class="amount">{{ $order->id }}</span>
                                                </td>
                                                <td class="li-product-price"><span
                                                        class="amount">${{ $order->subtotal }}</span>
                                                </td>
                                                <td class="li-product-price"><span
                                                        class="amount">${{ $order->discount }}</span>
                                                </td>
                                                <td class="li-product-price"><span
                                                        class="amount">${{ $order->tax }}</span>
                                                </td>
                                                <td class="li-product-price"><span
                                                        class="amount">${{ $order->total }}</span>
                                                </td>
                                                <td class="li-product-price"><span
                                                        class="amount">{{ $order->firstname }}</span>
                                                </td>
                                                <td class="li-product-price"><span
                                                        class="amount">{{ $order->lastname }}</span>
                                                </td>
                                                <td class="li-product-price"><span
                                                        class="amount">{{ $order->mobile }}</span>
                                                </td>
                                                <td class="li-product-price"><span
                                                        class="amount">{{ $order->email }}</span>
                                                </td>
                                                <td class="li-product-price"><span
                                                        class="amount">{{ $order->zipcode }}</span>
                                                </td>
                                                <td class="li-product-price"><span
                                                        class="amount">{{ $order->status }}</span>
                                                </td>
                                                <td class="li-product-price"><span
                                                        class="amount">{{ $order->created_at }}</span>
                                                </td>
                                                <td class="li-product-price">
                                                    <button type="button" class="btn btn-info"
                                                        onclick="location.href='{{ route('user.order.details', ['order_id' => $order->id]) }}'">
                                                        <i class="fa fa-info-circle" aria-hidden="true"></i> Details
                                                    </button>
                                                    {{-- <button type="button" class="btn btn-danger"
                                                    onclick="deleteConfirmation({{ $order->id }})">
                                                    <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                                </button> --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $orders->links('custom-pagination') }}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Shopping Cart Area End-->
    @else
        <!-- Error 404 Area Start -->
        <div class="error404-area pt-30 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="error-wrapper text-center ptb-50 pt-xs-20">
                            <div class="error-text">
                                <h2>You didn't make any orders !</h2>
                                <p>Browse the shop page to order products</p>
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
