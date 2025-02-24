<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: url('{{ asset('images/anime-bang-dream-kasumi-toyama-hd-wallpaper-preview.jpg') }}') no-repeat center center fixed;
            background-size: cover;
        }
        .form-container {
            background: rgba(255, 255, 255, 0.85);
            padding: 20px;
            border-radius: 10px;
            max-width: 500px;
            margin: auto;
        }
    </style>
</head>
<body class="container mt-5">

    <div class="form-container shadow-lg">
        <h1 class="text-center mb-4">Create Task</h1>

        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Title:</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Description:</label>
                <textarea name="description" class="form-control"></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success">Save Task</button>
                <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS (Optional, for Bootstrap components like modals) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
