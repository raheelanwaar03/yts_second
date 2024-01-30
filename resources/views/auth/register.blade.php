@extends('layouts.app')
@section('content')
    <div class="inner-banner section-bg overflow-hidden">
        <div class="container">
            <div class="inner__banner__content text-center">
                <h2 class="title">Sign Up Account</h2>
                <ul class="breadcums d-flex flex-wrap justify-content-center">
                    <li><a href="{{ url('/') }}">Home</a>//</li>
                    <li>Sign Up</li>
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
                        <h3 class="title">Create your account</h3>
                        <form class="form account__form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control form--control" name="name"
                                    placeholder="Your Username">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form--control" name="email"
                                    placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control form--control" name="mobile"
                                    placeholder="Your Mobile Number">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form--control"
                                    placeholder="Password">
                                <span class="eye-icon"><i class="las la-eye"></i></span>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password_confirmation" class="form-control form--control"
                                    placeholder="Password">
                                <span class="eye-icon"><i class="las la-eye"></i></span>
                            </div>
                            <input type="text" name="referral" value="{{ $referral }}" hidden>
                            <div class=" d-flex flex-wrap align-items-center">
                                <div class="form--check me-4">
                                    <input type="checkbox" name="remember" id="rem-me">
                                    <label for="rem-me">Remember Me</label>
                                </div>
                                <a href="#" class="forgot-pass text--base">Forgot Password</a>
                            </div>
                            <button type="submit" class="btn cmn--btn mt-4">Sign Up</button>
                        </form>
                        <p class="mt-4">Don't have on Account yet? <a class="ms-2 text--base"
                                href="{{ route('register') }}">Create
                                Account</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
