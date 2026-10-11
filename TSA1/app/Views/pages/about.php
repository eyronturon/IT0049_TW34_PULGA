<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About - Tasks for Today</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="<?= base_url('/') ?>">Tasks for Today</a>
            <div class="navbar-nav">
                <a class="nav-link" href="<?= base_url('/') ?>">Today's Tasks</a>
                <a class="nav-link" href="<?= base_url('tasks') ?>">All Tasks</a>
                <a class="nav-link" href="<?= base_url('profile') ?>">Profile</a>
                <a class="nav-link active" href="<?= base_url('about') ?>">About</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card shadow-sm border-0 p-4">
                    <div class="card-body">
                        <h2 class="font-weight-bold mb-3">About Tasks for Today</h2>
                        <p class="text-muted">
                            Tasks for Today is a simple task management web application designed to help teams organize daily to-do lists and track task progress.
                        </p>

                        <hr>

                        <h5 class="font-weight-bold mb-3">Developer</h5>
                        <p class="mb-1"><strong>Developed by:</strong> Aeron Pulga</p>
                        <p class="mb-3"><strong>Course:</strong> Web System Technologies</p>

                        <h5 class="font-weight-bold mb-2">Features</h5>
                        <ul class="text-muted">
                            <li>Filter and view tasks due today</li>
                            <li>View complete task history ordered by date</li>
                            <li>Demo user profile dashboard</li>
                        </ul>

                        <a href="<?= base_url('/') ?>" class="btn btn-primary mt-3">Back to Today's Tasks</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>