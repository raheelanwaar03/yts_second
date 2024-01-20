<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Web Name</title>
    <!-- Add Bootstrap CSS link -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #fcde67;
            color: #FFFFFF;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: #5bccf6;
            padding: 10px;
            text-align: center;
            display: flex;
            justify-content: space-between;
        }

        #web-name {
            color: #FFFFFF;
            font-size: 24px;
        }

        .top-bar-icons {
            display: flex;
            align-items: center;
        }

        .top-bar-icons i {
            margin-left: 15px;
            font-size: 20px;
        }

        section {
            text-align: center;
            padding: 20px;
        }

        .card {
            background-color: #5bccf6;
            color: #FFFFFF;
            padding: 20px;
            margin: 10px;
            border-radius: 10px;
        }

        .button-container {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .button-container button {
            background-color: #5bccf6;
            color: #FFFFFF;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        footer {
            background-color: #5bccf6;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            display: flex;
            justify-content: space-around;
        }

        .bottom-bar-link {
            color: #FFFFFF;
            background-color: #5bccf6;
            padding: 10px;
            margin: 5px;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
        }

        /* Sidebar styling */
        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #5bccf6;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 20px;
            color: #FFFFFF;
            display: block;
            transition: 0.3s;
        }

        .sidebar a:hover {
            color: #e5e4e4;
        }

        .sidebar .close-btn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #main-content {
            transition: margin-left .5s;
            padding: 16px;
            width: 100%;
        }

        #chart {
            height: auto;
            background-color: #5bccf6;
            margin: 20px;
            border: 2px solid #5bccf6;
            padding: 20px;
            margin-bottom: 150px;
            border-radius: 8px;
            box-shadow: 0 0 10px #030e12;
        }

        .marquee-container {
            overflow: hidden;
            white-space: nowrap;
            border: 1px solid #030e12;
            padding: 3px;
            width: 300px;
            box-shadow: #030e12;
            margin: 0 auto;
        }

        .marquee-content {
            display: inline-block;
            animation: marqueeAnimation 15s linear infinite;
            color: #fff;
        }

        @keyframes marqueeAnimation {
            from {
                transform: translateX(100%);
            }

            to {
                transform: translateX(-100%);
            }
        }
    </style>
</head>

<body>
    <header>
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
        <div id="web-name">{{ env('APP_NAME') }}</div>
        <div class="top-bar-icons">
            <i class="fas fa-user"></i>
            <i class="fas fa-bell"></i>
        </div>
    </header>

    <!-- Sidebar -->
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="close-btn" onclick="closeNav()">&times;</a>
        <a href="{{ route('User.Dashboard') }}" class="sidebar-link">Home</a>
        <a href="{{ route('profile.edit') }}" class="sidebar-link">Account Profile</a>
        <a href="{{ route('User.Team') }}" class="sidebar-link">My Team</a>
        <a href="{{ route('profile.edit') }}" class="sidebar-link">Promote Channal</a>
        <a href="{{ route('profile.edit') }}" class="sidebar-link">Invite Team</a>
        <a href="{{ route('profile.edit') }}" class="sidebar-link">Setting</a>
        <a href="{{ route('profile.edit') }}" class="sidebar-link">Contact Us</a>
        @if (auth()->user())
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="sidebar-link">Login</a>
        @endif
    </div>

    <!-- Page content -->
    <div id="main-content">
        <section>
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-sm-3">
                    <div class="card shodow-lg" style="border: 1px solid #030e12">
                        <h2>Current Balance</h2>
                        <p>500.00</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-3">
                    <div class="card shodow-lg" style="border: 1px solid #030e12">
                        <h2>Withdraw</h2>
                        <p>100.00</p>
                    </div>
                </div>
            </div>
            <div class="button-container mb-3">
                <button><a href="#" style="color: #FFFFFF;font-size:12px;"><span style="margin-right:5px"><i
                                class="fas fa-money-bill-wave"></i></span>Withdraw Now</a></button>
                <button><a href="#" style="color: #FFFFFF;font-size:12px;"><span style="margin-right:5px"><i
                                class="fas fa-history"></i></span>View History</a></button>
            </div>

            <div class="marquee-container" style="background-color: #5bccf6;">
                <div class="marquee-content">
                    <p>
                        {{ env('APP_NAME') }} is Very good platform to invest your time and money. It is a real earning
                        platform. Refere this to your friends and family.
                    </p>
                </div>
            </div>

            <div id="chart">
                <h2 style="color: #fff;">Top Users Chart</h2>
                <canvas id="myChart"></canvas>
                <script>
                    // Example chart data (replace with your actual data)
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['User 1', 'User 2', 'User 3', 'User 4', 'User 5'],
                            datasets: [{
                                label: 'Points',
                                data: [20, 16, 14, 10, 5],
                                backgroundColor: '#030e12',
                                borderColor: 'black',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                </script>
            </div>
        </section>
    </div>

    <footer>
        <a href="#" class="btn btn-light text-info"><span style="font-size: 16px;margin-right:5px;">$</span>Earn
            Now</a>
        <a href="#" class="btn btn-light text-info"><span style="font-size: 16px;margin-right:5px;">$</span>Daily
            Reward</a>
    </footer>

    <!-- Add Bootstrap JS and Popper.js links -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main-content").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main-content").style.marginLeft = "0";
        }
    </script>
</body>

</html>
