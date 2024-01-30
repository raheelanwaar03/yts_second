<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Profile</title>
    <!-- Add Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add Font Awesome CSS link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #00001c;
            color: white;
        }

        .top-bar {
            background-color: #00001c;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .container {
            margin-top: 20px;
        }

        .profile-container {
            background-color: #00001c;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
            margin-bottom: 20px;
        }

        .profile-details {
            display: flex;
            justify-content: space-between;
        }

        .profile-label {
            font-size: 16px;
            color: #e2af28;
        }

        .profile-value {
            font-size: 16px;
        }

        .edit-profile-btn {
            background-color: #e2af28;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .back-icon {
            cursor: pointer;
            color: #e2af28;
            font-size: 18px;
        }
    </style>
</head>

<body>

    <div class="top-bar">
        <i class="fas fa-arrow-left back-icon" onclick="goBack()"></i>
        <h1 style="color: #e2af28;">User Profile</h1>
    </div>

    <div class="container">
        <div class="profile-container">
            <div class="profile-details">
                <div>
                    <div class="profile-label">Username:</div>
                    <div class="profile-value">{{ auth()->user()->name }}</div>
                </div>
                <div>
                    <div class="profile-label">Email:</div>
                    <div class="profile-value">{{ auth()->user()->email }}</div>
                </div>
            </div>
            <div class="profile-details mt-3">
                <div>
                    <div class="profile-label">Phone:</div>
                    <div class="profile-value">{{ auth()->user()->mobile }}</div>
                </div>
                <div>
                    <div class="profile-label">Level:</div>
                    <div class="profile-value">{{ auth()->user()->level }}</div>
                </div>
            </div>
            <div class="profile-details mt-3">
                <div>
                    <div class="profile-label">Plan</div>
                    <div class="profile-value">{{ $user->trxIds->plan ?? 'null'}}</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS and Popper.js scripts (optional but recommended) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Add Font Awesome JS script (optional but recommended) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

    <script>
        function editProfile() {
            // Implement your edit profile logic here
            // For demo purposes, display a simple alert
            alert("Edit Profile functionality will be implemented here!");
        }

        function goBack() {
            // Implement your navigation logic here
            // For demo purposes, it will simply navigate back in the browser history
            window.history.back();
        }
    </script>

</body>

</html>
