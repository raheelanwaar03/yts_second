@extends('layouts.app')
@section('content')
    <div class="inner-banner section-bg overflow-hidden">
        <div class="container">
            <div class="inner__banner__content text-center">
                <h2 class="title">Sign In Account</h2>
                <ul class="breadcums d-flex flex-wrap justify-content-center">
                    <li><a href="{{ url('/') }}">Home</a>//</li>
                    <li>Sign In</li>
                </ul>
            </div>
        </div>
        <div class="shapes">
            <img src="{{ asset('assets/images/banner/inner-bg.png') }}" alt="banner" class="shape shape1">
            <img src="{{ asset('assets/images/banner/inner-thumb.png') }}" alt="banner"
                class="shape shape2 d-none d-lg-block">
        </div>
    </div>
    <!-- Banner Section Ends Here -->


    <!-- Account Section Starts Here -->
    <div class="account-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-xl-5 d-none d-lg-block">
                    <div class="section__thumb rtl me-5">
                        <img src="{{ asset('assets/images/account/thumb.png') }}" alt="account">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5">
                    <div class="account__form__wrapper">
                        <h3 class="title">Hello, Welcome Back</h3>
                        <form class="form account__form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control form--control" name="email"
                                    placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <input type="password" id="password" name="password" class="form-control form--control"
                                    placeholder="Password">
                                <span class="eye-icon" onclick="togglePasswordVisibility()"><i
                                        class="las la-eye"></i></span>
                            </div>
                            <div class=" d-flex flex-wrap align-items-center">
                                <div class="form--check me-4">
                                    <input type="checkbox" name="remember" id="rem-me">
                                    <label for="rem-me">Remember Me</label>
                                </div>
                                <a href="{{route('password.request')}}" class="forgot-pass text--base">Forgot Password</a>
                            </div>
                            <button type="submit" class="btn cmn--btn mt-4">Sign In Account</button>
                        </form>
                        <p class="mt-4">Don't have on Account yet?</p>
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
    </script>
@endsection
