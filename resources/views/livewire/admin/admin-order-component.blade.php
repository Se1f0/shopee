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
    <div class="Shopping-cart-area pt-60 pb-60">
        {{-- <button type="button" class="btn btn-success" style="margin-bottom: 5px; margin-left: 1375px"
            onclick="location.href='{{ route('admin.category.add') }}'">Add New
            Category</button> --}}
        <div class="container">
            {{-- <div class="row">
                <div class="col-12">
                    <button type="button" class="btn btn-success float-right mb-10"
                        onclick="location.href='{{ route('admin.category.add') }}'">Add New Category
                    </button>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-13">
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
                                            <td class="li-product-price"><span class="amount">{{ ++$i }}</span>
                                            </td>
                                            <td class="li-product-price"><span class="amount">{{ $order->id }}</span>
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
                                                <button type="button" class="btn btn-warning mb-10"
                                                    onclick="location.href='{{ route('admin.category.edit', ['category_id' => $order->id]) }}'">
                                                    <i class="fa fa-pencil" aria-hidden="true"></i> Edit
                                                </button>
                                                <button type="button" class="btn btn-danger"
                                                    onclick="deleteConfirmation({{ $order->id }})">
                                                    <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                                </button>
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
</div>

{{-- <div class="modal" id="deleteConfirmation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body pb-30 pt-30">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h4 class="pb-3">Do you want to delete this Category ?</h4>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            data-bs-target="#deleteConfirmation">Cancel</button>
                        <button type="button" class="btn btn-danger" onclick="deleteCategory()">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function deleteConfirmation(id) {
            @this.set('category_id', id);
            $('#deleteConfirmation').modal('show');
        }

        function deleteCategory() {
            @this.call('deleteCategory');
            $('#deleteConfirmation').modal('hide');
        }
    </script>
@endpush --}}
