<div style="margin-top: -20px">
    <div class="breadcrumb-area" style="margin-top: -20px">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="active">Change Password</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="page-section mb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                    @if (Session::has('password_success'))
                        <div class="alert alert-success" role="alert">{{ Session::get('password_success') }}</div>
                    @endif
                    @if (Session::has('password_error'))
                        <div class="alert alert-danger" role="alert">{{ Session::get('password_error') }}</div>
                    @endif
                    <form wire:submit.prevent="changePassword">
                        <div class="login-form">
                            <h4 class="login-title">Change Password</h4>
                            <div class="row">
                                <div class="col-md-12 col-12 mb-20">
                                    <label>Current Password*</label>
                                    <input class="mb-0" type="password" placeholder="Current Password"
                                        name="current_password" autofocus wire:model="current_password">
                                </div>
                                @error('current_password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <div class="col-12 mb-20">
                                    <label>New Password</label>
                                    <input class="mb-0" type="password" name="password" placeholder="New Password"
                                        wire:model="password">
                                </div>
                                @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <div class="col-12 mb-20">
                                    <label>Confirm Password</label>
                                    <input class="mb-0" type="password" name="password_confirmation"
                                        placeholder="Confirm Password" wire:model="password_confirmation">
                                </div>
                                @error('password_confirmation')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <div class="col-md-12">
                                    <button class="register-button mt-0">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
