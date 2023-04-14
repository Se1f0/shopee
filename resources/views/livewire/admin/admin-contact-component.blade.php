<div style="margin-top: -20px">
    <!-- Begin Li's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="active">Contacts</li>
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
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>

                                        <th class="li-product-thumbnail">#</th>
                                        <th class="li-product-thumbnail">ID</th>
                                        <th class="cart-product-name">Subject</th>
                                        <th class="cart-product-name">Name</th>
                                        <th class="li-product-price">Email</th>
                                        <th class="li-product-price">Phone</th>
                                        <th class="li-product-price">Message</th>
                                        <th class="li-product-price">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = ($contacts->currentPage() - 1) * $contacts->perPage();
                                    @endphp
                                    @foreach ($contacts as $contact)
                                        <tr>
                                            <td class="li-product-price"><span class="amount">{{ ++$i }}</span>
                                            </td>
                                            <td class="li-product-price"><span class="amount">{{ $contact->id }}</span>
                                            </td>
                                            <td class="li-product-price"><span
                                                    class="amount">{{ $contact->subject }}</span>
                                            </td>
                                            <td class="li-product-price"><span
                                                    class="amount">{{ $contact->name }}</span>
                                            </td>
                                            <td class="li-product-price"><span
                                                    class="amount">{{ $contact->email }}</span>
                                            </td>
                                            <td class="li-product-price"><span
                                                    class="amount">{{ $contact->phone }}</span>
                                            </td>
                                            <td class="li-product-price"><span
                                                    class="amount">{{ $contact->comment }}</span>
                                            </td>
                                            <td class="li-product-price"><span
                                                    class="amount">{{ $contact->created_at }}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $contacts->links('custom-pagination') }}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Shopping Cart Area End-->
</div>
