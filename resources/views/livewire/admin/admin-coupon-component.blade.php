<div style="margin-top: -20px">
    <!-- Begin Li's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="active">Coupons</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!--Shopping Cart Area Strat-->
    <div class="Shopping-cart-area pt-60 pb-60">
        {{-- <button type="button" class="btn btn-success" style="margin-bottom: 5px; margin-left: 1375px"
            onclick="location.href='{{ route('admin.category.add') }}'">Add New
            Category</button> --}}
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <button type="button" class="btn btn-success float-right mb-10"
                        onclick="location.href='{{ route('admin.coupon.add') }}'">Add New Coupon
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            <strong>Success | {{ Session::get('message') }}</strong>
                        </div>
                    @endif
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>

                                        <th class="li-product-thumbnail">#</th>
                                        <th class="li-product-thumbnail">ID</th>
                                        <th class="cart-product-name">Code</th>
                                        <th class="li-product-price">Type</th>
                                        <th class="li-product-price">Value</th>
                                        <th class="li-product-price">Cart Value</th>
                                        <th class="li-product-price">Created At</th>
                                        <th class="li-product-price">Expired In</th>
                                        <th class="li-product-quantity">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = ($coupons->currentPage() - 1) * $coupons->perPage();
                                    @endphp
                                    @foreach ($coupons as $coupon)
                                        <tr>
                                            <td class="li-product-price"><span class="amount">{{ ++$i }}</span>
                                            </td>
                                            <td class="li-product-price"><span class="amount">{{ $coupon->id }}</span>
                                            </td>
                                            <td class="li-product-price"><span class="amount">{{ $coupon->code }}</span>
                                            </td>
                                            <td class="li-product-price"><span class="amount">{{ $coupon->type }}</span>
                                            </td>
                                            @if ($coupon->type == 'fixed')
                                                <td class="li-product-price"><span
                                                        class="amount">${{ $coupon->value }}</span>
                                                </td>
                                            @else
                                                <td class="li-product-price"><span
                                                        class="amount">{{ $coupon->value }}%</span>
                                                </td>
                                            @endif

                                            <td class="li-product-price"><span
                                                    class="amount">${{ $coupon->cart_value }}</span>
                                            </td>
                                            <td class="li-product-price"><span
                                                    class="amount">{{ $coupon->created_at }}</span>
                                            </td>
                                            <td class="li-product-price"><span
                                                    class="amount">{{ $coupon->expiry_date }}</span>
                                            </td>
                                            <td class="li-product-price">
                                                <button type="button" class="btn btn-warning"
                                                    onclick="location.href='{{ route('admin.coupon.edit', ['coupon_id' => $coupon->id]) }}'">
                                                    <i class="fa fa-pencil" aria-hidden="true"></i> Edit
                                                </button>
                                                <button type="button" class="btn btn-danger"
                                                    onclick="deleteConfirmation({{ $coupon->id }})">
                                                    <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $coupons->links('custom-pagination') }}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Shopping Cart Area End-->
</div>

<div class="modal" id="deleteConfirmation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body pb-30 pt-30">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4 class="pb-3">Do you want to delete this Coupon ?</h4>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            data-bs-target="#deleteConfirmation">Cancel</button>
                        <button type="button" class="btn btn-danger" onclick="deleteCoupon()">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function deleteConfirmation(id) {
            @this.set('coupon_id', id);
            $('#deleteConfirmation').modal('show');
        }

        function deleteCoupon() {
            @this.call('deleteCoupon');
            $('#deleteConfirmation').modal('hide');
        }
    </script>
@endpush
