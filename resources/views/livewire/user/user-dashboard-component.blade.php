<div style="margin-top: -20px">
    <!-- Begin Li's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!--Shopping Cart Area Strat-->
    <div class="Shopping-cart-area pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="myaccount-content">
                        <h3>Summary</h3>
                        <div class="content">
                            <style>
                                .content {
                                    padding-top: 40px;
                                    padding-bottom: 40px;
                                }

                                .icon-stat {
                                    display: block;
                                    overflow: hidden;
                                    position: relative;
                                    padding: 15px;
                                    margin-bottom: 1em;
                                    background-color: #fff;
                                    border-radius: 4px;
                                    border: 1px solid #ddd;
                                }

                                .icon-stat-label {
                                    display: block;
                                    color: #999;
                                    font-size: 13px;
                                }

                                .icon-stat-value {
                                    display: block;
                                    font-size: 28px;
                                    font-weight: 600;
                                }

                                .icon-stat-visual {
                                    position: relative;
                                    top: 22px;
                                    display: inline-block;
                                    width: 32px;
                                    height: 32px;
                                    border-radius: 4px;
                                    text-align: center;
                                    padding-top: 5px;
                                    font-size: 16px;
                                    line-height: 30px;
                                }

                                .bg-primary {
                                    color: #fff;
                                    background: #d74b4b;
                                }

                                .bg-secondary {
                                    color: #fff;
                                    background: #6685a4;
                                }

                                .icon-stat-footer {
                                    padding: 10px 0 0;
                                    margin-top: 10px;
                                    color: #aaa;
                                    font-size: 12px;
                                    border-top: 1px solid #eee;
                                }
                            </style>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <div class="icon-stat">
                                            <div class="row">
                                                <div class="col-xs-8 text-left">
                                                    <span class="icon-stat-label ml-3 mb-3">Total Cost</span>
                                                    <span class="icon-stat-value ml-3 mt-3">${{ $totalCost }}</span>
                                                </div>
                                                <div class="col-xs-4 text-center">
                                                    <i class="fa fa-dollar icon-stat-visual bg-primary ml-3 mt-3"></i>
                                                </div>
                                            </div>
                                            <div class="icon-stat-footer">
                                                <i class="fa fa-clock-o"></i> Updated Now
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="icon-stat">
                                            <div class="row">
                                                <div class="col-xs-8 text-left">
                                                    <span class="icon-stat-label ml-3 mb-3">Total Purchase</span>
                                                    <span class="icon-stat-value ml-3 mt-3">{{ $totalPurchase }}</span>
                                                </div>
                                                <div class="col-xs-4 text-center">
                                                    <i class="fa fa-gift icon-stat-visual bg-secondary ml-3 mt-3"></i>
                                                </div>
                                            </div>
                                            <div class="icon-stat-footer">
                                                <i class="fa fa-clock-o"></i> Updated Now
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="icon-stat">
                                            <div class="row">
                                                <div class="col-xs-8 text-left">
                                                    <span class="icon-stat-label ml-3 mb-3">Total Delivered</span>
                                                    <span class="icon-stat-value ml-3 mt-3">{{ $totalDelivered }}</span>
                                                </div>
                                                <div class="col-xs-4 text-center">
                                                    <i class="fa fa-dollar icon-stat-visual bg-primary ml-3 mt-3"></i>
                                                </div>
                                            </div>
                                            <div class="icon-stat-footer">
                                                <i class="fa fa-clock-o"></i> Updated Now
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <div class="icon-stat">
                                            <div class="row">
                                                <div class="col-xs-8 text-left">
                                                    <span class="icon-stat-label ml-3 mb-3">Total Canceled</span>
                                                    <span class="icon-stat-value ml-3 mt-3">{{ $totalCanceled }}</span>
                                                </div>
                                                <div class="col-xs-4 text-center">
                                                    <i class="fa fa-gift icon-stat-visual bg-secondary ml-3 mt-3"></i>
                                                </div>
                                            </div>
                                            <div class="icon-stat-footer">
                                                <i class="fa fa-clock-o"></i> Updated Now
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-13">
                    <h3>Latest Orders</h3>
                    @if ($orders->count() > 0)
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
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
                                        @foreach ($orders as $order)
                                            <tr>
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
                                                    <button type="button" class="btn btn-info  btn-sm mb-10"
                                                        onclick="location.href='{{ route('user.order.details', ['order_id' => $order->id]) }}'">
                                                        <i class="fa fa-info-circle" aria-hidden="true"></i> Details
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </form>
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
            </div>
        </div>
    </div>
    <!--Shopping Cart Area End-->
</div>
