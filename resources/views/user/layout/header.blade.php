<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BootStrap Link -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <!-- Icon Link -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">

    <!-- Plugings Link -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">

    <!-- Custom Link -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <title>{{ env('APP_NAME') }} - {{ env('APP_NAME') }} Earn</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <div class="preloader">
        <div class="preinnner">
            <div class="ring"></div>
            <div class="ring"></div>
            <div class="ring"></div>
        </div>
    </div>
    <div class="overlay"></div>

    <x-alert />

    <!-- Header Section Starts Here -->
    <div class="header">
        <div class="header-top">
            <div class="container">
                <div
                    class="header__top__wrapper d-flex flex-wrap align-items-center justify-content-center justify-content-md-between text-center">
                    <ul class="contacts d-flex flex-wrap justify-content-center">
                        <li><a
                                href="https://template.viserlab.com/cdn-cgi/l/email-protection#8befeee6e4cbece6eae2e7a5e8e4e6"><i
                                    class="las la-envelope-open"></i> <span class="__cf_email__"
                                    data-cfemail="3652535b5976515b575f5a1855595b">[help@gmail.com]</span></a></li>
                        <li><a href="tel:129075"><i class="las la-phone-volume"></i> 123 - 456 - 7890</a></li>
                    </ul>
                    <div class="right__area d-flex flex-wrap align-items-center mt-3 mt-md-0">
                        <select name="language" class="nice-select custom--scrollbar">
                            <option>English</option>
                        </select>
                        <a href="{{ route('login') }}" class="user__thumb ms-3 me-3 me-lg-0">
                            <img src="{{ asset('assets/images/dashboard/user.png') }}" alt="dashboard">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="header-bottom-area">
                    <div class="logo"><a href="{{ route('login') }}"><img
                                src="{{ asset('assets/images/logo.png') }}" alt="logo"></a></div>
                    <ul class="menu">
                        <li>
                            <a href="{{ route('User.Dashboard') }}">Dashboard</a>
                        </li>
                        @if (auth()->user())
                            <li>
                                <a href="#0">User</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('User.Withdraw') }}">Withdraw</a></li>
                                    <li><a href="{{ route('User.Withdraw.History') }}">Withdraw History</a></li>
                                    <li><a href="{{ route('User.Team') }}">My Team</a></li>
                                    <li><a href="{{ route('User.All.Tasks') }}">Task</a></li>
                                    <li><a href="{{ route('User.Referral.Link') }}">Invite Team</a></li>
                                    <li><a href="{{ route('profile.edit') }}">Setting</a></li>
                                </ul>
                            </li>
                        @endif
                        <li class="d-none d-lg-block">
                            <a href="#0" class="search--btn"><i class="fas fa-search"></i></a>
                        </li>
                        <li class="p-0 d-lg-none mt-3 mt-lg-0">
                            @if (auth()->user())
                                <div class="button__wrapper">
                                    <a href="{{ route('register') }}" class="cmn--btn">Register</a>
                                    <a href="{{ route('login') }}" class="cmn--btn">Login</a>
                                </div>
                            @else
                                <div class="button__wrapper">
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="cmn--btn">Logout</button>
                                    </form>
                                </div>
                            @endif
                        </li>
                    </ul> <!-- Menu End -->

                    @if (auth()->user())
                        <div class="button__wrapper d-none d-lg-block">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="cmn--btn">Logout</button>
                            </form>
                        </div>
                    @else
                        <div class="button__wrapper d-none d-lg-block">
                            <a href="{{ route('register') }}" class="cmn--btn">Register</a>
                            <a href="{{ route('login') }}" class="cmn--btn">Login</a>
                        </div>
                    @endif


                    <div class="header-trigger-wrapper d-flex d-lg-none align-items-center">
                        <div class="mobile-nav-right d-flex align-items-center"></div>
                        <a href="#0" class="search--btn me-4 text--base"><i class="fas fa-search"></i></a>
                        <div class="header-trigger d-block d--none">
                            <span></span>
                        </div>
                    </div> <!-- Trigger End-->
                </div>
            </div>
        </div>
    </div>
    <div class="search__form__wrapper">
        <div class="form__inner">
            <form class="search__form">
                <div class="form-group">
                    <input type="text" class="form-control form--control" placeholder="Search Here...">
                    <button type="submit" class="cmn--btn btn">Search</button>
                </div>
            </form>
            <button class="btn-close btn-close-white"></button>
        </div>
    </div>
