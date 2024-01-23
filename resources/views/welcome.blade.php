@extends('user.layout.app')

@section('content')
    <section class="banner-section overflow-hidden">
        <div class="container">
            <div class="banner__wrapper d-flex align-items-center justify-content-between">
                <div class="banner__content">
                    <h1 class="title">Best {{ env('APP_NAME') }} Investment Platform</h1>
                    <p>
                        {{ env('APP_NAME') }} Earn is a platform where you can earn daily profit by doing simple tasks.
                    </p>
                    <a href="sign-in.html" class="cmn--btn">Get Started</a>
                </div>
                <div class="banner__thumb d-none d-lg-block">
                    <img src="{{ asset('assets/images/banner/thumb.png') }}" alt="banner">
                    <div class="shapes">
                        <img src="{{ asset('assets/images/banner/big-coin.png') }}" alt="banner" class="shape shape1">
                        <img src="{{ asset('assets/images/banner/light.png') }}" alt="banner" class="shape shape2">
                        <img src="{{ asset('assets/images/banner/sm-coin.png') }}" alt="banner" class="shape shape3">
                        <img src="{{ asset('assets/images/banner/sm-coin.png') }}" alt="banner" class="shape shape4">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="choose-us padding-top padding-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="section__thumb rtl">
                        <img src="assets/images/choose-us/thumb.png" alt="choose-us">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose__us__content">
                        <div class="section__header mb-0">
                            <h2 class="section__header-title">Why Choose Our Investment Platform </h2>
                            <p>"Unlock financial success with our proven investment plans, blending innovation and
                                expertise for a secure and lucrative future."</p>
                        </div>
                        <p>Invest in our plans for a secure and prosperous future! Our meticulously crafted investment
                            strategies prioritize long-term growth, delivering robust returns that outperform market
                            benchmarks. With a track record of consistent success, we leverage cutting-edge analytics
                            and expert insights to navigate dynamic market conditions. Your financial goals are our top
                            priority, and our diversified portfolio ensures resilience in any economic climate. Join us
                            in building wealth and securing a brighter tomorrow. Invest smart, invest with us!.</p>
                        <ul class="info__list d-flex flex-wrap mt-4">
                            <li> Simple Task</li>
                            <li> Invest Once Earn Daily</li>
                            <li> Earn good commission on refer</li>
                            <li> Work at your home</li>
                        </ul>
                        <div class="button__wrapper">
                            <a href="about.html" class="cmn--btn">Know More</a>
                            <a href="contact.html" class="cmn--btn2">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="plan-section padding-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section__header text-center">
                        <h2 class="section__header-title">Our Investment Plan</h2>
                        <p>Here are our Investment plans which will be long-term benifit for you</p>
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
        </div>
    </section>
    <section class="feature-section padding-bottom overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section__header text-center">
                        <h2 class="section__header-title">Best for {{ env('APP_NAME') }} Investment</h2>
                        <p>"Unlock financial success with our proven investment plans, blending innovation and expertise
                            for a secure and lucrative future."</p>
                    </div>
                </div>
            </div>
            <div class="feature__slider">
                <div class="single-slide">
                    <div class="feature__item">
                        <div class="feature__item-icon">
                            <img src="assets/images/feature/1.png" alt="feature">
                        </div>
                        <div class="feature__item-content">
                            <h4 class="title">Get More Profit</h4>
                            <p>Maecenas tempuslusning eget condim entum and rhoncus eumpesit.</p>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="feature__item">
                        <div class="feature__item-icon">
                            <img src="assets/images/feature/2.png" alt="feature">
                        </div>
                        <div class="feature__item-content">
                            <h4 class="title">24/7 Support</h4>
                            <p>Maecenas tempuslusning eget condim entum and rhoncus eumpesit.</p>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="feature__item">
                        <div class="feature__item-icon">
                            <img src="assets/images/feature/3.png" alt="feature">
                        </div>
                        <div class="feature__item-content">
                            <h4 class="title">Strong Protection</h4>
                            <p>Maecenas tempuslusning eget condim entum and rhoncus eumpesit.</p>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="feature__item">
                        <div class="feature__item-icon">
                            <img src="assets/images/feature/4.png" alt="feature">
                        </div>
                        <div class="feature__item-content">
                            <h4 class="title">Relability</h4>
                            <p>Maecenas tempuslusning eget condim entum and rhoncus eumpesit.</p>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="feature__item">
                        <div class="feature__item-icon">
                            <img src="assets/images/feature/4.png" alt="feature">
                        </div>
                        <div class="feature__item-content">
                            <h4 class="title">Relability</h4>
                            <p>Maecenas tempuslusning eget condim entum and rhoncus eumpesit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="referral-section padding-top padding-bottom section-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 align-self-end d-none d-lg-block">
                    <div class="section__thumb rtl me-5">
                        <img src="assets/images/referral/thumb.png" alt="referral">
                        <div class="shapes">
                            <img src="assets/images/referral/clock.png" alt="referral" class="shape shape1">
                            <img src="assets/images/referral/man.png" alt="referral" class="shape shape2">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section__header">
                        <h2 class="section__header-title">Good Referral Commission</h2>
                        <p>Get referral commission accourding to your plan. The more you invest in our plans the more
                            commission you will get.</p>
                    </div>
                    <a href="sign-up.html" class="cmn--btn">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    <section class="investor-section padding-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section__header text-center">
                        <h2 class="section__header-title">Our Best Investor</h2>
                        <p>The are with us through a long time and earning good profit to make their lifestyle better.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center gy-5">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="investor__item">
                        <div class="investor__item-thumb">
                            <img src="assets/images/investor/investor1.png" alt="investor">
                        </div>
                        <div class="investor__item-content">
                            <h3 class="name">Robart Williams</h3>
                            <p class="invest-amount">Invest 2500 pkr</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="investor__item">
                        <div class="investor__item-thumb">
                            <img src="assets/images/investor/investor2.png" alt="investor">
                        </div>
                        <div class="investor__item-content">
                            <h3 class="name">Munna Ahmed</h3>
                            <p class="invest-amount">Invest 3500 pkr</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="investor__item">
                        <div class="investor__item-thumb">
                            <img src="assets/images/investor/investor3.png" alt="investor">
                        </div>
                        <div class="investor__item-content">
                            <h3 class="name">Maliha Mahtab</h3>
                            <p class="invest-amount">Invest 4500 pkr</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="investor__item">
                        <div class="investor__item-thumb">
                            <img src="assets/images/investor/investor4.png" alt="investor">
                        </div>
                        <div class="investor__item-content">
                            <h3 class="name">Taposhi Ahmed</h3>
                            <p class="invest-amount">Invest 5500 pkr</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="faq-section padding-top padding-bottom bg_img" style="background: url(assets/images/faq/bg.png);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10">
                    <div class="section__header text-center max-p">
                        <h2 class="section__header-title">Frequently Asked Questions</h2>
                        <p>Aenean vulputate eleifend tellus. Aenean leo ligul porttitoeu consequat vitae eleifend.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="faq__wrapper">
                        <div class="faq__item">
                            <div class="faq__item-title">
                                <h4 class="title">Why You should become an Investor?</h4>
                            </div>
                            <div class="faq__item-content">
                                <p>Fringilla mauris amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget
                                    bibendum sodales augue velit cursus nunc quis gravida magna mi a libero. Fusce
                                    vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed,
                                    nonummy idmetus</p>
                            </div>
                        </div>
                        <div class="faq__item">
                            <div class="faq__item-title">
                                <h4 class="title">Why You Choose Us?</h4>
                            </div>
                            <div class="faq__item-content">
                                <p>Fringilla mauris amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget
                                    bibendum sodales augue velit cursus nunc quis gravida magna mi a libero. Fusce
                                    vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed,
                                    nonummy idmetus</p>
                            </div>
                        </div>
                        <div class="faq__item open active">
                            <div class="faq__item-title">
                                <h4 class="title">What is {{ env('APP_NAME') }} Investment?</h4>
                            </div>
                            <div class="faq__item-content">
                                <p>{{ env('APP_NAME') }} investment is a company which will help you to earn easy money
                                    and start
                                    your
                                    freelance career and earn very good profit.</p>
                            </div>
                        </div>
                        <div class="faq__item">
                            <div class="faq__item-title">
                                <h4 class="title">How to do we work?</h4>
                            </div>
                            <div class="faq__item-content">
                                <p>Fringilla mauris amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget
                                    bibendum sodales augue velit cursus nunc quis gravida magna mi a libero. Fusce
                                    vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed,
                                    nonummy idmetus</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
