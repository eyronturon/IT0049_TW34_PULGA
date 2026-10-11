<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo Profile - Tasks for Today</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

    <!-- Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="<?= base_url('/') ?>">Tasks for Today</a>
            <div class="navbar-nav">
                <a class="nav-link" href="<?= base_url('/') ?>">Today's Tasks</a>
                <a class="nav-link" href="<?= base_url('tasks') ?>">All Tasks</a>
                <a class="nav-link active" href="<?= base_url('profile') ?>">Profile</a>
                <a class="nav-link" href="<?= base_url('about') ?>">About</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-0 text-center p-4">
                    <div class="card-body">
                        <img src="https://github.com/eyronturon.png" 
                            alt="Aeron Pulga Avatar" 
                            class="rounded-circle img-thumbnail mb-3" 
                            width="120" height="120">

                        <h2 class="card-title font-weight-bold"><?= esc($user['full_name'] ?? 'Demo User') ?></h2>
                        <p class="text-muted mb-4">@<?= esc($user['username'] ?? 'username') ?></p>

                        <ul class="list-group list-group-flush text-left mb-4">
                            <li class="list-group-item">
                                <strong>Email:</strong> <?= esc($user['email'] ?? 'demo@example.com') ?>
                            </li>
                            <li class="list-group-item">
                                <strong>Role:</strong> Lead Developer / Demo Account
                            </li>
                            <li class="list-group-item">
                                <strong>Member Since:</strong> <?= esc($user['created_at'] ?? '2026-10-11') ?>
                            </li>
                        </ul>

                        <a href="<?= base_url('/') ?>" class="btn btn-primary">Back to Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>