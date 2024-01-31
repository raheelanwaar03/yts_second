@extends('user.layout.app')

@section('content')
    <div class="inner-banner overflow-hidden">
    </div>
    <!-- Banner Section Ends Here -->


    <!-- Dashboard Section Starts Here -->
    <div class="dashbaord-section padding-top padding-bottom" style="margin-top: -200px">
        <div class="container">
            <div class="row sm">
                <div class="col-lg-4 col-xl-4 col-xxl-3 col-xl-4">
                    <div class="sidebar dashboard__sidebar">
                        <div class="dashboard-user text-center">
                            <div class="thumb"><img src="{{ asset('assets/images/dashboard/cc2.png') }}" alt="dashboard">
                            </div>
                            <div class="content mt-3">
                                <h3 class="name">{{ auth()->user()->name }}</h3>
                                <p class="text-white">{{ auth()->user()->email }}</p>
                            </div>
                        </div>
                        <ul class="dashbard__tab tags">
                            <li><a href="#" class="active">Overview</a></li>
                            <li><a href="{{ route('User.Dashboard') }}">Dashboard</a></li>
                            <li><a href="{{ route('User.Withdraw') }}">Withdraw</a></li>
                            <li><a href="{{ route('User.Withdraw.History') }}">Withdraw History</a></li>
                            <li><a href="{{ route('User.Team') }}">My Team</a></li>
                            <li><a href="{{ route('User.All.Tasks') }}">Task</a></li>
                            <li><a href="{{ route('User.Referral.Link') }}">Invite Team</a></li>
                            <li><a href="{{ route('profile.edit') }}">Profile</a></li>
                            <li><a href="{{ route('User.Setting.Password') }}">Setting</a></li>
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
                                        <h4 class="info">Referral Link</h4>
                                        <p class="title">
                                        <p style="word-wrap: break-word;" id="link">
                                            {{ route('register', ['referral' => Auth::user()->name]) }}
                                        </p>
                                        <span class="copy-icon" onclick="copyReferralLink()">📋</span>
                                        </p>
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
            let referralLink = document.querySelector('#link').innerText;
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
