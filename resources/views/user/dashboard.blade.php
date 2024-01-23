@extends('user.layout.app')

@section('content')
    <div class="inner-banner section-bg overflow-hidden">
        <div class="container">
            <div class="inner__banner__content text-center">
                <h2 class="title">User Dashboard</h2>
                <ul class="breadcums d-flex flex-wrap justify-content-center">
                    <li><a href="{{ route('User.Dashboard') }}">Home</a>//</li>
                    <li>Dashboard</li>
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


    <!-- Dashboard Section Starts Here -->
    <div class="dashbaord-section padding-top padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xl-4 col-xxl-3 col-xl-4">
                    <div class="sidebar dashboard__sidebar">
                        <div class="dashboard-user text-center">
                            <div class="thumb"><img src="{{ asset('assets/images/dashboard/cc2.png') }}" alt="dashboard">
                            </div>
                            <div class="content mt-3">
                                <h3 class="name">User</h3>
                                <p class="text-white">email@gmail.com</p>
                            </div>
                        </div>
                        <ul class="dashbard__tab tags">
                            <li><a href="#" class="active">Overview</a></li>
                            <li><a href="{{ route('User.Dashboard') }}">Dashboard</a></li>
                            <li><a href="{{ route('User.Withdraw') }}">Withdraw</a></li>
                            <li><a href="{{ route('User.All.Tasks') }}">Task</a></li>
                            <li><a href="{{ route('User.Withdraw.History') }}">Withdraw History</a></li>
                            <li><a href="{{ route('User.Referral.Link') }}">Referral Link</a></li>
                            <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button class="btn btn-warning">Sign Out</button>
                                </form>
                            </li>
                        </ul>
                        <button class="btn-close btn-close-white d-lg-none"></button>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-8 col-xxl-9">
                    <div class="dashboard__wrapper">
                        <div class="row pt-5 gy-4">
                            <div class="col-xl-6 col-xxl-4 col-lg-6 col-md-6">
                                <div class="dashboard__card">
                                    <div class="dashboard__card-icon">
                                        <i class="las la-wallet"></i>
                                    </div>
                                    <div class="dashboard__card-content">
                                        <p class="info">Total Balance</p>
                                        <h3 class="title">{{ auth()->user()->balance }} pkr</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-xxl-4 col-lg-6 col-md-6">
                                <div class="dashboard__card">
                                    <div class="dashboard__card-icon">
                                        <i class="las la-money-bill-alt"></i>
                                    </div>
                                    <div class="dashboard__card-content">
                                        <p class="info">Total Team</p>
                                        <h3 class="title">{{ total_team() }} pkr</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-xxl-4 col-lg-6 col-md-6">
                                <div class="dashboard__card">
                                    <div class="dashboard__card-icon">
                                        <i class="las la-file-invoice-dollar"></i>
                                    </div>
                                    <div class="dashboard__card-content">
                                        <p class="info">Pending Withdraw</p>
                                        <h3 class="title">{{ pending_withdraw() }} pkr</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-xxl-4 col-lg-6 col-md-6">
                                <div class="dashboard__card">
                                    <div class="dashboard__card-icon">
                                        <i class="las la-file-invoice-dollar"></i>
                                    </div>
                                    <div class="dashboard__card-content">
                                        <p class="info">Approved Withdraw</p>
                                        <h3 class="title">{{ total_withdraw() }} pkr</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
