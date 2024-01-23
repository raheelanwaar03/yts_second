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
                            <li><a href="#">Max Deposit</a></li>
                            <li><a href="#">Withdraw Fund</a></li>
                            <li><a href="#">Deposit List</a></li>
                            <li><a href="#">Deposit History</a></li>
                            <li><a href="#">Earnings History</a></li>
                            <li><a href="#">Referral Link</a></li>
                            <li><a href="#">Account Settings</a></li>
                            <li><a href="#">Security Settings</a></li>
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
                            <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
                                <div class="dashboard__card">
                                    <div class="dashboard__card-content">
                                        <p class="info">Referral Link</p>
                                        <h3 class="title">
                                            <span class="referral-link"
                                                onclick="copyReferralLink()">{{ route('register', ['referral' => Auth::user()->name]) }}</span>
                                            <span class="copy-icon" onclick="copyReferralLink()">📋</span>
                                        </h3>
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
        function copyReferralLink() {
            let referralLink = document.querySelector('.referral-link').innerText;
            navigator.clipboard.writeText(referralLink);

            // Show tooltip
            let tooltip = document.createElement('span');
            tooltip.innerHTML = 'Copied!';
            tooltip.classList.add('text-success');
            document.querySelector('.copy-icon').appendChild(tooltip);

            // Remove tooltip after 2 seconds
            setTimeout(() => {
                tooltip.remove();
            }, 2000);
        }
    </script>
@endsection