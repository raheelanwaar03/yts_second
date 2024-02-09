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
        @forelse ($tasks as $task)
            <div class="container" style="border: 1px solid #e4f21c">
                <div class="task-container">
                    <div class="task">
                        <p class="task-description">{{ $task->title }}</p>
                        @if ($task->status == 'pending')
                            <a href="{{ route('User.Get.Task.Reward', $task->id) }}" class="btn btn-sm btn-warning text-decoration-none"
                                onclick="window.open('{{ $task->link }}', '_blank')">Get Reward</a>
                        @else
                            <button class="btn btn-sm btn-dark text-decoration-none">Reward Taken</button>
                        @endif
                    </div>
                    <br>
                </div>
            </div>
        @empty
            <h4>No Tasks for you</h4>
        @endforelse
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

</body>

</html>
