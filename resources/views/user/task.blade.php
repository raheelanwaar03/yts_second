<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Tasks</title>
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

        .earn-now-heading {
            font-size: 24px;
            color: #e2af28;
        }

        .task-container {
            background-color: #00001c;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
            margin-bottom: 20px;
        }

        .task {
            margin-bottom: 20px;
        }

        .task-description {
            font-size: 16px;
        }

        .link-btn {
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

    <div class="top-bar" style="border:1px solid #e2af28">
        <i class="fas fa-arrow-left back-icon" onclick="goBack()"></i>
        <h1 class="text-center">Earn Now</h1>
    </div>

    <div class="container">
        <div class="task-container">
            @forelse ($tasks as $task)
                <div class="task">
                    <p class="task-description">{{ $task->title }}</p>
                    @if ($task->status == 'pending')
                        <a href="{{ route('User.Get.Task.Reward', $task->id) }}" class="link-btn text-decoration-none"
                            onclick="window.open('{{ $task->link }}', '_blank')">Get Reward</a>
                    @else
                        <a href="{{ route('User.Success.Task.Reward') }}"
                            class="btn btn-sm btn-dark text-decoration-none">Get Reward</a>
                    @endif
                </div>
                <br>
            @empty
                <h4>No Tasks for you</h4>
            @endforelse
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>


    <script>
        function openLink(link) {
            window.open(link, '_blank');
        }

        function goBack() {
            // Implement your navigation logic here
            // For demo purposes, it will simply navigate back in the browser history
            window.history.back();
        }
    </script>

</body>

</html>
