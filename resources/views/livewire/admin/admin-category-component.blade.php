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
        <button type="button" class="btn btn-success" style="margin-bottom: 5px; margin-left: 1375px"
            onclick="location.href='{{ route('admin.category.add') }}'">Add New
            Category</button>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if (Session::has('success_message'))
                        <div class="alert alert-success">
                            <strong>Success | {{ Session::get('success_message') }}</strong>
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
