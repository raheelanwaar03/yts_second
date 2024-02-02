<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Team Tree</title>
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
            background-color: #e2af28;
            padding: 20px;
        }

        .tree-container {
            background-color: #e2af28;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
            margin-bottom: 20px;
        }

        .user-node {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }

        .user-name {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .referral-link {
            cursor: pointer;
            color: #e2af28;
            text-decoration: underline;
            margin-top: 5px;
        }

        .copy-icon {
            cursor: pointer;
            margin-left: 5px;
            color: #e2af28;
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

    <div class="top-bar">
        <i class="fas fa-arrow-left navigation-icon" style="color: #e2af28" onclick="goBack()"></i>
        <h1>Total Withdraw: ({{ withdraw() }})</h1>
    </div>

    <div class="container">
        <div class="transaction-list">
            <div class="transaction-item">
                @forelse ($history as $item)
                    <div class="transaction-info">
                        <p>Date : {{ $item->created_at }}</p>
                        <p>Amount : {{ $item->amount }}</p>
                        @if ($item->status == 'pending')
                            <p>Status: <span class="btn btn-sm btn-dark">
                                    {{ $item->status }}</span></p>
                        @else
                            <p class="status-approved">Status: <span class="btn btn-sm btn-success">
                                    {{ $item->status }}
                                </span></p>
                        @endif
                    </div>
                @empty
                    <h3>No Transcation</h3>
                @endforelse
                <!-- Add more transaction items as needed -->
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS and Popper.js scripts (optional but recommended) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Add Font Awesome JS script (optional but recommended) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

    <script>
        function copyReferralLink() {
            let referralLink = document.querySelector('.referral-link').innerText;
            navigator.clipboard.writeText(referralLink);

            // Show tooltip
            let tooltip = document.createElement('span');
            tooltip.innerHTML = 'Copied!';
            tooltip.classList.add('text-success');
            document.querySelector('.copy-icon').appendChild(tooltip);

            // Remove tooltip after 2 seconds
            setTimeout(() => {
                tooltip.remove();
            }, 2000);
        }

        function goBack() {
            // Implement your navigation logic here
            // For demo purposes, it will simply navigate back in the browser history
            window.history.back();
        }
    </script>

</body>

</html>
