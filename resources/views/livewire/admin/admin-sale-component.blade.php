<div style="margin-top: -20px">
    <!-- Begin Li's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="active">Sale Settings</li>
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
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            <strong>Success | {{ Session::get('message') }}</strong>
                        </div>
                    @endif
                    <form wire:submit.prevent="updateSale">
                        <div class="login-form">
                            <h4 class="login-title">Sale Settings</h4>
                            <div class="row">
                                <div class="col-md-12 mb-20">
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status" wire:model="status">
                                        <option value="0">Inactive</option>
                                        <option value="1">Active</option>
                                    </select>
                                    @error('status')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-20">
                                    <label>Sale Date</label>
                                    <input class="mb-0" type="text" id="sale-date" name="sale_date"
                                        placeholder="YYYY-MM-DD" required wire:model="sale_date">
                                    @error('sale_date')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-8">
                                    <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                        <button class="register-button mt-0" type="submit">Update</button>
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
            $('#sale-date').datetimepicker({
                format: 'Y-MM-DD H:m:s',
            }).on('dp.change', function(e) {
                var data = $('#sale-date').val();
                @this.set('sale_date', data)
            });
        })
    </script>
@endpush
