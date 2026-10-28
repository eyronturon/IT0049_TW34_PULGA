<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>POS System</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <nav class="pos-navbar navbar navbar-expand-md navbar-light">
        <div class="container">
            <a class="pos-brand navbar-brand" href="<?= base_url('/') ?>">POS System</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#mainNavigation" aria-controls="mainNavigation"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavigation">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link active" href="<?= base_url('/') ?>">Home</a>
                    <a class="nav-link" href="<?= base_url('about') ?>">About</a>
                    <a class="nav-link" href="<?= base_url('customers') ?>">Customers</a>
                    <a class="nav-link" href="<?= base_url('users') ?>">Users</a>
                    <a class="nav-link text-danger" href="<?= site_url('logout') ?>">Log Out</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="container py-4">
        <div class="page-header">
            <h1>Point-of-Sale Dashboard</h1>
            <p>Manage your customers and staff accounts from one place.</p>
        </div>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="dashboard-card card">
                    <div class="card-body">
                        <h2>Customer Accounts</h2>
                        <p>View, add, edit, and manage customer records.</p>
                        <a class="btn btn-primary" href="<?= site_url('customers') ?>">
                            Open Customers
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="dashboard-card card">
                    <div class="card-body">
                        <h2>User Accounts</h2>
                        <p>Manage staff usernames, profiles, and avatars.</p>
                        <a class="btn btn-primary" href="<?= site_url('users') ?>">
                            Open Users
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>