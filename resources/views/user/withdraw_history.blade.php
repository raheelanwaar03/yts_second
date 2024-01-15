<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Withdrawal Transactions</title>
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

        .transaction-list {
            background-color: #343a40;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
            margin-bottom: 20px;
        }

        .transaction-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #495057;
            border-radius: 5px;
        }

        .transaction-info {
            flex: 1;
            margin-right: 10px;
        }

        .back-btn {
            background-color: #ff5757;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Styles based on transaction status */
        .status-pending {
            color: #ff5757;
            /* Red */
        }

        .status-approved {
            color: #28a745;
            /* Green */
        }

        .status-rejected {
            color: #ffcc00;
            /* Your favorite color */
        }
    </style>
</head>

<body>

    <div class="top-bar">
        <h1>History</h1>
    </div>

    <div class="container">
        <div class="transaction-list">
            <div class="transaction-item">
                @forelse ($history as $item)
                    <div class="transaction-info">
                        <p>Date : {{ $item->created_at }}</p>
                        <p>Amount : {{ $item->amount }}</p>
                        @if ($item->status == 'pending')
                            <p class="status-pending">Status: {{ $item->status }}</p>
                        @else
                            <p class="status-approved">Status: {{ $item->status }}</p>
                        @endif
                    </div>
                    <button class="back-btn" onclick="goBack()">Back</button>
                @empty
                    <h3>No Transcation</h3>
                @endforelse
                <!-- Add more transaction items as needed -->
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS and Popper.js scripts (optional but recommended) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function goBack() {
            // Implement your navigation logic here
            // For demo purposes, it will simply navigate back in the browser history
            window.history.back();
        }
    </script>

</body>

</html>
