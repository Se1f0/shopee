{{-- <x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<x-app-layout>
    <div class="breadcrumb-area" style="margin-top: -20px">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="active">Reset your password</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="page-section mb-60" style="margin-top: 20px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                    <form method="POST" action="{{ route('password.store') }}">
                        @csrf
                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div class="login-form">
                            <h4 class="login-title">Reset your password</h4>
                            <div class="row">
                                <div class="col-md-12 mb-20">
                                    <label>Email Address*</label>
                                    <input class="mb-0" type="email" name="email" placeholder="Email Address"
                                        value="{{ $request->email }}" required autofocus>
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label>Password</label>
                                    <input class="mb-0" type="password" name="password" placeholder="Password"
                                        required autocomplete="new-password">
                                </div>
                                <div class="col-md-6 mb-20">
                                    <label>Confirm Password</label>
                                    <input class="mb-0" type="password" name="password_confirmation"
                                        placeholder="Confirm Password" required>
                                </div>
                                <div class="col-md-8">
                                    <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                        <button class="register-button mt-0">Reset password</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
