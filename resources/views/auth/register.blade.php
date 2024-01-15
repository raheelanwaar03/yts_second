
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Your Website</title>
    <!-- Add Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: red;
            color: white;
        }

        .container {
            margin-top: 50px;
        }

        .logo-container {
            background-image: url({{ asset('assets/bg/bg.jpg') }});
            /* Replace with the path to your background image */
            background-size: cover;
            background-position: center;
            padding: 20px;
            border-radius: 10px;
        }

        .logo img {
            width: 50px;
            /* Adjust the width of the image as needed */
            height: auto;
            margin-right: 10px;
        }
    </style>
</head>

<body>

    <x-alert />
    <div class="container mb-3">
        <div class="row">
            <!-- Left side: Logo and Name of the website with background image -->
            <div class="col-md-6 logo-container">
                <div class="logo">

                </div>
                <h1>{{ env('APP_NAME') }}</h1>
            </div>
            <!-- Right side: User Registration Form -->
            <div class="col-md-6 mb-3">
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <h2 class="text-center">(Sign up)</h2>
                    <div class="mb-3">
                        <label for="name" class="form-label">Username</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Mobile</label>
                        <input type="number" minlength="11" maxlength="11" class="form-control" id="mobile"
                            name="mobile" required>
                    </div>
                    <input type="text" name="referral" value="{{ $referral }}" hidden>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password" name="password_confirmation" required>
                    </div>
                    <button type="submit" class="btn btn-danger">Register</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS and Popper.js scripts (optional but recommended) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
