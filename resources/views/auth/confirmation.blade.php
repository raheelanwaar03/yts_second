<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Alert Page</title>
    <!-- Add Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #212529;
            color: white;
        }

        .top-bar {
            background-color: #343a40;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .container {
            margin-top: 20px;
            text-align: center;
        }

        .alert-message {
            background-color: #343a40;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
            margin-bottom: 20px;
        }

        .okay-btn {
            background-color: #ff5757;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="top-bar">
        <h1 class="text-center">{{ env('APP_NAME') }}</h1>
    </div>

    <div class="container">
        <div class="alert-message">
            <h2>Verfication Page</h2>
            <p>{{ $verification->text }}</p>
            <a href="{{ route('dashboard') }}" class="okay-btn text-decoration-none">Okay</a>
        </div>
    </div>

    <!-- Add Bootstrap JS and Popper.js scripts (optional but recommended) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function handleOkayClick() {
            // Customize this function based on what you want to happen when the "Okay" button is clicked
            console.log("Okay button clicked!");
        }
    </script>

</body>

</html>
