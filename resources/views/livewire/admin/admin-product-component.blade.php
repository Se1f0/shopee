<div style="margin-top: -20px">
    <!-- Begin Li's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="active">Products</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!--Shopping Cart Area Strat-->
    <div class="Shopping-cart-area pt-60 pb-60">
        {{-- <button type="button" class="btn btn-success" style="margin-bottom: 5px; margin-left: 1380px"
            onclick="location.href='{{ route('admin.product.add') }}'">Add New
            Product</button> --}}
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <input type="text" class="form-control float-left mb-10" placeholder="Search..."
                        wire:model="searchTerm" />
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-success float-right mb-10"
                        onclick="location.href='{{ route('admin.product.add') }}'">Add New Product
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
                                        <th class="li-product-thumbnail">images</th>
                                        <th class="cart-product-name">Name</th>
                                        <th class="li-product-price">Stock</th>
                                        <th class="li-product-price">Price</th>
                                        <th class="li-product-price">Sale Price</th>
                                        <th class="li-product-price">Category</th>
                                        <th class="li-product-price">Date</th>
                                        <th class="li-product-quantity">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = ($products->currentPage() - 1) * $products->perPage();
                                    @endphp
                                    @foreach ($products as $product)
                                        <tr>
                                            <td class="li-product-price"><span class="amount">{{ ++$i }}</span>
                                            </td>
                                            <td class="li-product-price"><span class="amount">{{ $product->id }}</span>
                                            </td>
                                            <td class="li-product-thumbnail"><img
                                                    src="{{ asset('assets/images/product/small-size') }}/{{ $product->image }}"
                                                    alt="{{ $product->name }}">
                                            </td>
                                            <td class="li-product-price"><span
                                                    class="amount">{{ $product->name }}</span>
                                            </td>
                                            <td class="li-product-price"><span
                                                    class="amount">{{ $product->stock_status }}</span>
                                            </td>
                                            <td class="li-product-price"><span
                                                    class="amount">${{ $product->regular_price }}</span>
                                            </td>
                                            <td class="li-product-price"><span
                                                    class="amount">${{ $product->sale_price }}</span>
                                            </td>
                                            <td class="li-product-price"><span
                                                    class="amount">{{ $product->category->name }}</span>
                                            </td>
                                            <td class="li-product-price"><span
                                                    class="amount">{{ $product->created_at }}</span>
                                            </td>
                                            <td class="li-product-price">
                                                <button type="button" class="btn btn-warning mb-10"
                                                    onclick="location.href='{{ route('admin.product.edit', ['product_id' => $product->id]) }}'">
                                                    <i class="fa fa-pencil" aria-hidden="true"></i> Edit
                                                </button>
                                                <button type="button" class="btn btn-danger"
                                                    onclick="deleteConfirmation({{ $product->id }})">
                                                    <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $products->links('custom-pagination') }}
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
                        <h4 class="pb-3">Do you want to delete this Product ?</h4>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            data-bs-target="#deleteConfirmation">Cancel</button>
                        <button type="button" class="btn btn-danger" onclick="deleteProduct()">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function deleteConfirmation(id) {
            @this.set('product_id', id);
            $('#deleteConfirmation').modal('show');
        }

        function deleteProduct() {
            @this.call('deleteProduct');
            $('#deleteConfirmation').modal('hide');
        }
    </script>
@endpush
