<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Source Code Of Spin Wheel</title>
    <!---------------  CSS  --------------------->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <!---------------  Font Aewsome  --------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!---------------  Chart JS  --------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <!---------------  Chart JS Plugin  --------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.1.0/chartjs-plugin-datalabels.min.js">
    </script>
    <style>
        .swal-success {
            background-color: #28ba32;
            color: white;
            width: 350px;
            border-radius: 8px;
        }

        .swal-error {
            background-color: #b9351e;
            color: white;
            width: 350px;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <x-alert />

    <h1>JACKPOT</h1>
    <div class="container">
        <div class="wheel_box">
            <canvas id="spinWheel"></canvas>
            @if ($spin == 'get')
            <button id="spin_btn">Spin</button>
            <i class="fa-solid fa-location-arrow"></i>
            @else
            <button id="spin_btn" disabled>Spin</button>
            <i class="fa-solid fa-location-arrow"></i>
            @endif
        </div>
        <div id="text">
            <p>Wheel Of Fortune</p>
        </div>
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:10px;">
            <h2 style="color: white">Reward:
                ({{ total_reward() }})</h2>
            <a href="{{ route('User.Spin.Withdraw') }}"
                style="text-decoration:none;border-radius:12px;padding:12px;background-color:yellow;">Withdraw</a>
        </div>
    </div>
    <!---------------  SCRIPT  --------------------->
    <script src="{{ asset('assets/script.js') }}"></script>
</body>

</html>
