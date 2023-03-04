<div style="margin-top: -20px">
    <!-- Begin Li's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="{{ route('admin.coupons') }}">All Coupons</a></li>
                    <li class="active">Add new Coupon</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <div class="page-section mb-60" style="margin-top: 20px">
        {{-- <button type="button" class="btn btn-success" style="margin-bottom: 5px; margin-left: 1110px"
            onclick="location.href='{{ route('admin.categories') }}'">All Categories</button> --}}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                    <button type="button" class="btn btn-success float-right mb-10"
                        onclick="location.href='{{ route('admin.coupons') }}'">All Coupons
                    </button>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            <strong>Success | {{ Session::get('message') }}</strong>
                        </div>
                    @endif
                    <form wire:submit.prevent="addCoupon">
                        <div class="login-form">
                            <h4 class="login-title">Add new Coupon</h4>
                            <div class="row">
                                <div class="col-md-12 col-12 mb-20">
                                    <label>Coupon Code</label>
                                    <input class="mb-0" type="text" name="code" placeholder="Coupon Code"
                                        autofocus autocomplete="code" wire:model="code">
                                    @error('code')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label for="featured">Type</label>
                                    <select class="form-control" name="type" wire:model="type">
                                        <option value="">Select type</option>
                                        <option value="fixed">Fixed</option>
                                        <option value="percentage">Percentage</option>
                                    </select>
                                    @error('type')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label>Coupon value</label>
                                    <input class="mb-0" type="text" name="value" placeholder="Coupon Value"
                                        wire:model="value">
                                    @error('value')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label>Cart value</label>
                                    <input class="mb-0" type="text" name="cart_value" placeholder="Cart Value"
                                        wire:model="cart_value">
                                    @error('cart_value')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label>Expiry Date</label>
                                    <input class="mb-0" type="text" id="expiry-date" name="expiry_date"
                                        placeholder="YYYY-MM-DD" required wire:model="expiry_date">
                                    @error('expiry_date')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-8">
                                    <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                        <button class="register-button mt-0" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(function() {
            $('#expiry-date').datetimepicker({
                format: 'Y-MM-DD',
            }).on('dp.change', function(e) {
                var data = $('#expiry-date').val();
                @this.set('expiry_date', data)
            });
        })
    </script>
@endpush
