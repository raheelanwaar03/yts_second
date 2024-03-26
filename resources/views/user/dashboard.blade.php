@extends('user.layout.app')

@section('content')
    <div class="inner-banner overflow-hidden">
        <marquee behavior="scroll" class="bg-warning text-dark p-2" style="font-size: 16px;" direction="left" scrollamount="7">
           {{ $marquee->text }}
        </marquee>
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
                            <div class="col-xl-6 col-xxl-4 col-lg-6 col-md-6">
                                <div class="dashboard__card">
                                    <div class="dashboard__card-icon">
                                        <i class="las la-wallet"></i>
                                    </div>
                                    <div class="dashboard__card-content">
                                        <p class="info">Current Balance</p>
                                        <h3 class="title">{{ auth()->user()->balance }} pkr</h3>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-xl-6 col-xxl-4 col-lg-6 col-md-6">
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
                            </div> --}}
                            <div class="col-xl-6 col-xxl-4 col-lg-6 col-md-6">
                                <div class="dashboard__card">
                                    <div class="dashboard__card-icon">
                                        <i class="las la-file-invoice-dollar"></i>
                                    </div>
                                    <div class="dashboard__card-content">
                                        <p class="info">Recived Withdraw</p>
                                        <h3 class="title">{{ total_withdraw() }} pkr</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- buttons --}}
                    <div class="d-flex justify-content-around align-items-center mt-5">
                        <a href="{{ route('User.Withdraw') }}" class="btn btn-warning"><small>Withdraw Now</small></a>
                        <a href="{{ route('User.Withdraw.History') }}" class="btn btn-warning">Statment</a>
                    </div>
                    {{-- chart --}}
                    <div class="mt-5">
                        <canvas id="earningChart" width="400" height="200"></canvas>

                        <script>
                            // Add your data here
                            var earningsData = {
                                labels: ['Usman', 'Zaid', 'Umer', 'Abubakar', 'Abdullah'],
                                datasets: [{
                                    label: 'Last Week Top Users',
                                    backgroundColor: '#ffc107',
                                    borderColor: '#ffc106',
                                    borderWidth: 1,
                                    data: [
                                        1000, 700, 500, 350, 250
                                    ],
                                }]
                            };

                            // Get the canvas element
                            var ctx = document.getElementById('earningChart').getContext('2d');

                            // Create the chart
                            var myBarChart = new Chart(ctx, {
                                type: 'bar',
                                data: earningsData,
                            });
                        </script>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="d-flex justify-content-around align-items-center">
                        <a href="{{ route('User.All.Tasks') }}" class="btn btn-warning">Daily Earn</a>
                        <a href="{{ route('User.Spin') }}" class="btn btn-warning">Play & Earn</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
