@extends('user.layout.app')

@section('content')
    <div class="inner-banner overflow-hidden">
    </div>
    <!-- Banner Section Ends Here -->


    <!-- Dashboard Section Starts Here -->
    <div class="dashbaord-section padding-top padding-bottom" style="margin-top: -200px">
        <div class="container">
            <div class="row sm">
                <div class="col-lg-12 col-xl-12 col-xxl-12">
                    <div class="dashboard__wrapper">
                        <div class="row pt-5 gy-4">
                            <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
                                <div class="dashboard__card">
                                    <div class="dashboard__card-content">
                                        <form method="POST" action="{{ route('password.store') }}">
                                            @csrf

                                            <!-- Password Reset Token -->
                                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                            <!-- Email Address -->
                                            <div>
                                                <x-input-label for="email" :value="__('Email')" />
                                                <x-text-input id="email" class="block mt-1 w-full" type="email"
                                                    name="email" :value="old('email', $request->email)" required autofocus
                                                    autocomplete="username" readonly />
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>

                                            <!-- Password -->
                                            <div class="mt-4">
                                                <x-input-label for="password" :value="__('Password')" />
                                                <x-text-input id="password" class="block mt-1 w-full" type="password"
                                                    name="password" required autocomplete="new-password" /><span
                                                    class="eye-icon" onclick="togglePasswordVisibility()"><i
                                                        class="las la-eye"></i></span>
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div>

                                            <!-- Confirm Password -->
                                            <div class="mt-4">
                                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                                <x-text-input id="confirm" class="block mt-1 w-full"
                                                    type="password_confirmation" name="password_confirmation" required
                                                    autocomplete="new-password" />
                                                <span class="eye-icon" onclick="PasswordVisibility()"><i
                                                        class="las la-eye"></i></span>
                                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                            </div>
                                            <div class="flex items-center justify-end mt-4">
                                                <x-primary-button class="btn btn-dark">
                                                    {{ __('Reset Password') }}
                                                </x-primary-button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById('password');
            var eyeIcon = document.querySelector('.eye-icon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = '👁️';
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = '👁️';
            }
        }
        function PasswordVisibility() {
            var passwordInput = document.getElementById('confirm');
            var eyeIcon = document.querySelector('.eye-icon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = '👁️';
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = '👁️';
            }
        }
    </script>
@endsection
