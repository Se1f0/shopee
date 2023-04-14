<div style="margin-top: -20px">
    <div class="breadcrumb-area" style="margin-top: -20px">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="active">Settings</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="page-section mb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                    @if (Session::has('settings_success'))
                        <div class="alert alert-success" role="alert">{{ Session::get('settings_success') }}</div>
                    @endif
                    <form wire:submit.prevent='saveSettings'>
                        <div class="login-form">
                            <h4 class="login-title">Settings</h4>
                            <div class="row">
                                <div class="col-md-12 col-12 mb-20">
                                    <label>Primary Email</label>
                                    <input class="mb-0" type="text" placeholder="Primary Email" name="email"
                                        autofocus wire:model="email">
                                </div>
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <div class="col-md-12 col-12 mb-20">
                                    <label>Secondary Email</label>
                                    <input class="mb-0" type="text" placeholder="Secondary Email" name="email2"
                                        autofocus wire:model="email2">
                                </div>
                                @error('email2')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <div class="col-md-12 col-12 mb-20">
                                    <label>Primary Phone</label>
                                    <input class="mb-0" type="text" placeholder="Primary Phone" name="phone"
                                        autofocus wire:model="phone">
                                </div>
                                @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <div class="col-md-12 col-12 mb-20">
                                    <label>Secondary Phone</label>
                                    <input class="mb-0" type="text" placeholder="Secondary Phone" name="phone2"
                                        autofocus wire:model="phone2">
                                </div>
                                @error('phone2')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <div class="col-md-12 col-12 mb-20">
                                    <label>Address</label>
                                    <input class="mb-0" type="text" placeholder="Address" name="address" autofocus
                                        wire:model="address">
                                </div>
                                @error('address')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <div class="col-md-12 col-12 mb-20">
                                    <label>Facebook</label>
                                    <input class="mb-0" type="text" placeholder="Facebook" name="facebook"
                                        autofocus wire:model="facebook">
                                </div>
                                @error('facebook')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <div class="col-md-12 col-12 mb-20">
                                    <label>Instagram</label>
                                    <input class="mb-0" type="text" placeholder="Instagram" name="instagram"
                                        autofocus wire:model="instagram">
                                </div>
                                @error('instagram')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <div class="col-md-12 col-12 mb-20">
                                    <label>Twitter</label>
                                    <input class="mb-0" type="text" placeholder="Twitter" name="twitter" autofocus
                                        wire:model="twitter">
                                </div>
                                @error('twitter')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <div class="col-md-12 col-12 mb-20">
                                    <label>Youtube</label>
                                    <input class="mb-0" type="text" placeholder="Youtube" name="youtube" autofocus
                                        wire:model="youtube">
                                </div>
                                @error('youtube')
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
