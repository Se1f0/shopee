<div style="margin-top: -20px">
    <!-- Begin Li's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="active">All Slides</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!--Shopping Cart Area Strat-->
    <div class="Shopping-cart-area pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <button type="button" class="btn btn-success float-right mb-10"
                        onclick="location.href='{{ route('admin.home.slider.add') }}'">Add New Slide
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
                                        <th class="li-product-thumbnail">image</th>
                                        <th class="cart-product-name">Top title</th>
                                        <th class="li-product-price">Title</th>
                                        <th class="li-product-price">SubTitle</th>
                                        <th class="li-product-price">Link</th>
                                        <th class="li-product-price">Status</th>
                                        <th class="li-product-quantity">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        // $i = ($slides->currentPage() - 1) * $slides->perPage();
                                        $i = 0;
                                    @endphp
                                    @foreach ($slides as $slide)
                                        <tr>
                                            <td class="li-product-price"><span class="amount">{{ ++$i }}</span>
                                            </td>
                                            <td class="li-product-price"><span class="amount">{{ $slide->id }}</span>
                                            </td>
                                            <td class="li-product-thumbnail"><img
                                                    src="{{ asset('assets/slider') }}/{{ $slide->image }}"
                                                    alt="{{ $slide->id }}" width="80">
                                            </td>
                                            <td class="li-product-price"><span
                                                    class="amount">{{ $slide->top_title }}</span>
                                            </td>
                                            <td class="li-product-price"><span class="amount">{{ $slide->title }}</span>
                                            </td>
                                            <td class="li-product-price"><span
                                                    class="amount">{{ $slide->sub_title }}</span>
                                            </td>
                                            <td class="li-product-price"><span
                                                    class="amount">{{ $slide->link }}</span>
                                            </td>
                                            <td class="li-product-price"><span
                                                    class="amount">{{ $slide->status == 1 ? 'Active' : 'Inactive' }}</span>
                                            </td>
                                            <td class="li-product-price">
                                                <button type="button" class="btn btn-warning mb-10"
                                                    onclick="location.href='{{ route('admin.home.slider.edit', ['slide_id' => $slide->id]) }}'">
                                                    <i class="fa fa-pencil" aria-hidden="true"></i> Edit
                                                </button>
                                                {{-- <button type="button" class="btn btn-danger"
                                                    onclick="deleteConfirmation({{ $slide->id }})">
                                                    <i class="fa fa-trash" aria-hidden="true"></i> Delete
                                                </button> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- {{ $slides->links('custom-pagination') }} --}}
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
@endpush --}}
