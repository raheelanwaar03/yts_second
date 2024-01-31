<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Withdraw Balance</title>
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

        .balance-card {
            background-color: #e2af28;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
            margin-bottom: 20px;
        }

        .withdrawal-form-container {
            background-color: #e2af28;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
        }

        .withdraw-btn {
            background-color: #00001c;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .error-modal {
            color: #00001c;
            text-align: center;
            font-size: 18px;
        }

        .modal-header,
        .modal-body {
            background-color: #e2af28;
            color: white;
        }

        .back-icon {
            cursor: pointer;
            color: #e4f21c;
            font-size: 18px;
        }

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

    <div class="top-bar">
        <i class="fas fa-arrow-left back-icon" onclick="goBack()"></i>
        <h1>Withdraw Balance</h1>
    </div>

    <div class="container">
        <div class="balance-card">
            <h2>Your Account Balance</h2>
            <p>{{ auth()->user()->balance }}</p>
            <h2>Your Level</h2>
            <p>{{ auth()->user()->level }}</p>
        </div>

        <div class="withdrawal-form-container">
            <h2>Withdrawal Instructions</h2>
            <p>Follow the steps below to withdraw your balance:</p>
            <ol>
                <li>Ensure your account balance is above the minimum withdrawal amount.</li>
                <li>Fill out the withdrawal request form below.</li>
                <li>Click the "Withdraw" button to initiate the withdrawal process.</li>
            </ol>

            <form action="{{ route('User.Store.Withdraw') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="withdrawAmount" class="form-label">Withdrawal Amount</label>
                    <input type="number" class="form-control" name="amount" id="withdrawAmount" required>
                </div>

                <div class="mb-3">
                    <label for="accountTitle" class="form-label">Account Title</label>
                    <input type="text" class="form-control" name="title" id="accountTitle" required>
                </div>

                <div class="mb-3">
                    <label for="accountNumber" class="form-label">Account Number</label>
                    <input type="number" class="form-control" name="account" id="accountNumber" required>
                </div>

                <div class="mb-3">
                    <label for="withdrawMethod" class="form-label">Withdrawal Method</label>
                    <select class="form-select" name="bank" id="withdrawMethod" required>
                        <option value="" selected disabled>Select withdrawal method</option>
                        <option value="easypaisa">Easypaisa</option>
                        <option value="jazzcash">Jazzcash</option>
                        <!-- Add more withdrawal methods as needed -->
                    </select>
                </div>

                <button type="submit" class="withdraw-btn">Withdraw</button>
            </form>
        </div>
    </div>

    <!-- Error Modal -->
    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Error</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="error-modal" id="withdrawAmountError"></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS and Popper.js scripts (optional but recommended) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Add Font Awesome JS script (optional but recommended) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

    <script>
        function validateWithdrawal() {
            var withdrawAmount = document.getElementById("withdrawAmount").value;
            var minimumLimit = 100; // Set your minimum limit here

            if (withdrawAmount < minimumLimit) {
                document.getElementById("withdrawAmountError").innerText = "Withdrawal amount must be at least $" +
                    minimumLimit;
                $('#errorModal').modal('show'); // Show the error modal
            } else {
                document.getElementById("withdrawAmountError").innerText = "";
                withdrawBalance();
            }
        }

        function goBack() {
            // Implement your navigation logic here
            // For demo purposes, it will simply navigate back in the browser history
            window.history.back();
        }
    </script>

</body>

</html>
