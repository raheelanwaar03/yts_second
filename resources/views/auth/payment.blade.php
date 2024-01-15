<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Package Selection and Payment</title>
    <!-- Add Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #212529;
            color: white;
        }

        .container {
            margin-top: 50px;
        }

        .form-container {
            background-color: #343a40;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
            margin-bottom: 20px;
        }

        .form-container h1 {
            color: #ff5757;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container label {
            color: white;
        }

        .form-container button {
            background-color: #ff5757;
            border: none;
        }

        .package-cards {
            margin-top: 20px;
        }

        .package-card {
            background-color: #212529;
            color: white;
            padding: 20px;
            border-radius: 10px;
            border: 2px solid #ff5757;
            margin-bottom: 20px;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .package-card:hover {
            transform: scale(1.05);
        }

        .selected-card {
            background-color: #ff5757;
            border-color: #ff5757;
        }

        .upload-container {
            background-color: #343a40;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
            margin-bottom: 20px;
        }

        .upload-container label {
            color: #ff5757;
            margin-bottom: 10px;
            display: block;
        }

        .upload-container input[type="file"] {
            display: none;
        }

        .add-proof-btn {
            background-color: #ff5757;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
        }

        .add-proof-btn:hover {
            background-color: #cc4646;
        }

        .bank-details {
            background-color: #343a40;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
            margin-bottom: 20px;
        }

        .bank-details h2 {
            color: #ff5757;
            margin-bottom: 20px;
        }

        .copy-icon {
            cursor: pointer;
            margin-left: 5px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="form-container">
                    <h1>Select Package</h1>
                    <form action="{{ route('Store/Fees/Details') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="package-cards">
                            <select name="plan" class="form-control">
                                <option value="silver">
                                    <h2>Silver</h2>
                                </option>
                                <option value="gold">
                                    <h2>Gold</h2>
                                </option>
                                <option value="dimond">
                                    <h2>Dimond</h2>
                                </option>
                            </select>
                        </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bank-details">
                    <h2>Admin Bank Details</h2>
                    <p>Account Number: <span id="bankNumber">1234 5678 9012 3456</span> <span class="copy-icon"
                            onclick="copyBankNumber()">📋</span></p>
                    <p>Bank Name: Your Bank</p>
                    <p>Account Holder: Admin Name</p>
                </div>
            </div>

            <div class="col-lg-12 col-md-6">


                <div class="form-container">
                    <h1>Confirm Payment</h1>
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="sender_name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="sender_name" name="sender_name" required>
                        </div>
                        <label for="transactionId" class="form-label">Transaction ID</label>
                        <input type="number" class="form-control" id="transactionId" name="trx_id" required>
                    </div>
                    <div class="mb-3">
                        <label for="sender_number" class="form-label">Your Number</label>
                        <input type="number" class="form-control" id="sender_number" name="sender_number" required>
                    </div>
                    <div class="upload-container">
                        <label for="paymentScreenshot">Payment Screenshot</label>
                        <input type="file" class="form-control" id="paymentScreenshot" name="screen_shot"
                            accept="image/*" style="display:none" onchange="displayFileName(this)">
                        <button type="button" class="add-proof-btn"
                            onclick="document.getElementById('paymentScreenshot').click()">Add Proof</button>
                        <span id="fileName"></span>
                    </div>
                    <button type="submit" class="btn btn-light">Confirm Payment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS and Popper.js scripts (optional but recommended) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function copyBankNumber() {
            let bankNumber = document.getElementById('bankNumber').innerText;
            navigator.clipboard.writeText(bankNumber);

            // Show tooltip
            let tooltip = document.createElement('span');
            tooltip.innerHTML = 'Copied!';
            tooltip.classList.add('text-success');
            let copyIcon = document.querySelector('.copy-icon');
            copyIcon.appendChild(tooltip);

            // Remove tooltip after 2 seconds
            setTimeout(() => {
                tooltip.remove();
            }, 2000);
        }

        function displayFileName(input) {
            const fileName = input.files[0].name;
            document.getElementById('fileName').innerText = fileName;
        }
    </script>

</body>

</html>
