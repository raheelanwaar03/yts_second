@extends('user.layout.app')

@section('content')
    <!-- Banner Section Starts Here -->
    <div class="inner-banner section-bg overflow-hidden">
        <div class="container">
            <div class="inner__banner__content text-center">
                <h2 class="title">Get in Touch With us</h2>
                <ul class="breadcums d-flex flex-wrap justify-content-center">
                    <li><a href="{{ url('/') }}">Home</a>/</li>
                    <li>Contact</li>
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


    <!-- Contact Section Starts Here -->
    <div class="contact-section">
        <div class="container">
            <div class="row padding-top padding-bottom gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="contact__info__item plan__item">
                        <div class="icon">
                            <i class="las la-map-marker"></i>
                        </div>
                        <div class="content">
                            <h3 class="title">Office Address</h3>
                            <p>Mian Address</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="contact__info__item plan__item">
                        <div class="icon">
                            <i class="las la-envelope-open-text"></i>
                        </div>
                        <div class="content">
                            <h3 class="title">Email Address</h3>
                            <ul class="contacts">
                                <li><a
                                        href="https://template.viserlab.com/cdn-cgi/l/email-protection#b8dcddd5d7f8dfd5d9d1d496dbd7d5"><span
                                            class="__cf_email__"
                                            data-cfemail="87efe2ebebe8a9e4fee5e2f5c7e0eae6eeeba9e4e8ea">[email&#160;protected]</span></a>
                                </li>
                                <li><a
                                        href="https://template.viserlab.com/cdn-cgi/l/email-protection#b4d0d1d9dbf4d3d9d5ddd89ad7dbd9"><span
                                            class="__cf_email__"
                                            data-cfemail="d1b9b4bdbdbeffb2a8b3b4a391b6bcb0b8bdffb2bebc">[email&#160;protected]</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="contact__info__item plan__item">
                        <div class="icon">
                            <i class="las la-phone-volume"></i>
                        </div>
                        <div class="content">
                            <h3 class="title">Phone Number</h3>
                            <ul class="contacts">
                                <li><a href="tel:02834">+10-928 4591 8725</a></li>
                                <li><a href="tel:02834">+91-123 4356 9150</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
