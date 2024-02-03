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
                            <i class="lab la-whatsapp"></i>
                        </div>
                        <div class="content">
                            <h3 class="title">What's app</h3>
                            <a href="{{ $contact->link }}" target="_blank">Contact</a>
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
                                <li><a href="mailto:{{ $contact->email }}"><span>[{{ $contact->email }}]</span></a>
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
                                <li><a href="tel:{{ $contact->number }}">{{ $contact->number }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
