<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Source Code Of Spin Wheel</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <!---------------  Chart JS Plugin  --------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.1.0/chartjs-plugin-datalabels.min.js">
    </script>
</head>

<body>
    <h1>JACKPOT</h1>
    <div class="container">
        <div class="wheel_box">
            <canvas id="spinWheel"></canvas>
            <button id="spin_btn" class="hiddenButton"><small style="font-size: 15px;">Spin</small></button>
            <i class="fa-solid fa-location-arrow"></i>
        </div>
        <div id="text">
            <p>Spin and Win</p>
        </div>
    </div>

    <!---------------  SCRIPT  --------------------->
    <script src="{{ asset('assets/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</body>

</html>
