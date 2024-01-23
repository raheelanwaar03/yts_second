@extends('user.layout.app')

@section('content')
    <div class="inner-banner section-bg overflow-hidden">
        <div class="container">
            <div class="inner__banner__content text-center">
                <h2 class="title">Investment Plan</h2>
                <ul class="breadcums d-flex flex-wrap justify-content-center">
                    <li><a href="{{ route('User.Dashboard') }}">Home</a>/</li>
                    <li>Investment Plan</li>
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


    <!-- Plan Section Starts Here -->
    <section class="plan-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section__header text-center">
                        <h2 class="section__header-title">Our Investment Plan</h2>
                        <p>Unlock financial success with our proven investment plans, blending innovation and expertise for
                            a secure and lucrative future</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="d-flex align-items-center">
                        <div class="plan__item">
                            <div class="plan__item-header">
                                <h2 class="plan-parcent">Silver</h2>
                                <p class="plan-parcent-info">Daily Profit</p>
                            </div>
                            <div class="plan__item-body">
                                <ul class="plan__info">
                                    <li>
                                        <span class="title">Tasks:</span>
                                        <span class="value"> 5</span>
                                    </li>
                                    <li>
                                        <span class="title">Referral Commission :</span>
                                        <span class="value">(accourding to plan)</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="plan__item-footer">
                                <a href="{{ route('login') }}" class="btn btn-warning">
                                    <p class="footer-info"> Invest</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="plan__item">
                        <div class="plan__item-header">
                            <h2 class="plan-parcent">Gold</h2>
                            <p class="plan-parcent-info">Daily Profit</p>
                        </div>
                        <div class="plan__item-body">
                            <ul class="plan__info">
                                <li>
                                    <span class="title">Tasks:</span>
                                    <span class="value">10</span>
                                </li>
                                <li>
                                    <span class="title">Referral Commission :</span>
                                    <span class="value">(accourding to plan)</span>
                                </li>
                            </ul>
                        </div>
                        <div class="plan__item-footer">
                            <a href="{{ route('login') }}" class="btn btn-warning">
                                <p class="footer-info"> Invest</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6 col-sm-6">
                    <div class="plan__item">
                        <div class="plan__item-header">
                            <h2 class="plan-parcent">Dimond</h2>
                            <p class="plan-parcent-info">Daily Profit</p>
                        </div>
                        <div class="plan__item-body">
                            <ul class="plan__info">
                                <li>
                                    <span class="title">Tasks:</span>
                                    <span class="value"> 15</span>
                                </li>
                                <li>
                                    <span class="title">Referral Commission :</span>
                                    <span class="value">(accourding to plan)</span>
                                </li>
                            </ul>
                        </div>
                        <div class="plan__item-footer">
                            <a href="{{ route('login') }}" class="btn btn-warning">
                                <p class="footer-info"> Invest</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
