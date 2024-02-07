<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spin&Win</title>
    <!---------------  CSS  --------------------->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <!---------------  Font Aewsome  --------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
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
                <a href="{{ route('User.Success') }}" id="spin_btn"
                    style="font-size: 20px;text-decoration:none;padding-top:15px;padding-left:9px">spin</a>
                <i class="fa-solid fa-location-arrow"></i>
            @else
                <button id="spin_btn" style="font-size: 20px;">Spin</button>
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
