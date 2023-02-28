<div style="margin-top: -20px">
    <!-- Begin Li's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="active">Categories</li>
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
                        onclick="location.href='{{ route('admin.category.add') }}'">Add New Category
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
                                        <th class="cart-product-name">Name</th>
                                        <th class="li-product-price">Slug</th>
                                        <th class="li-product-quantity">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = ($categories->currentPage() - 1) * $categories->perPage();
                                    @endphp
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td class="li-product-price"><span class="amount">{{ ++$i }}</span>
                                            </td>
                                            <td class="li-product-price"><span class="amount">{{ $category->id }}</span>
                                            </td>
                                            <td class="li-product-price"><span
                                                    class="amount">{{ $category->name }}</span>
                                            </td>
                                            <td class="li-product-price"><span
                                                    class="amount">{{ $category->slug }}</span>
                                            </td>
                                            <td class="li-product-price">
                                                <button type="button" class="btn btn-warning"
                                                    onclick="location.href='{{ route('admin.category.edit', ['category_id' => $category->id]) }}'">
                                                    <i class="fa fa-pencil" aria-hidden="true"></i> Edit
                                                </button>
                                                <button type="button" class="btn btn-danger"
                                                    onclick="deleteConfirmation({{ $category->id }})">
                                                    <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $categories->links('custom-pagination') }}
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
@endpush
