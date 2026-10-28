<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Accounts</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <nav class="pos-navbar navbar navbar-expand-md navbar-light">
        <div class="container">
            <a class="pos-brand navbar-brand" href="<?= base_url('/') ?>">POS System</a>
            <div class="navbar-nav ml-auto">
                <a class="nav-link active" href="<?= site_url('customers') ?>">Customers</a>
                <a class="nav-link" href="<?= site_url('users') ?>">Users</a>
                <a class="nav-link text-danger" href="<?= site_url('logout') ?>">Log Out</a>
            </div>
        </div>
    </nav>

    <main class="container py-4">
    <div class="page-header d-flex justify-content-between align-items-end">
        <div>
            <h1>Customer Accounts</h1>
            <p>Manage the people connected to your POS.</p>
        </div>
        <a class="btn btn-primary" href="<?= site_url('customers/new') ?>">Add Customer</a>
    </div>

    <div class="pos-card card">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

        <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= esc($customer['full_name']) ?></td>
                <td><?= esc($customer['email']) ?></td>
                <td><?= esc($customer['phone']) ?></td>
                <td>
                    <a class="btn btn-info btn-sm"
                       href="<?= site_url('customers/' . $customer['id']) ?>">View</a>
                    <a class="btn btn-primary btn-sm"
                       href="<?= site_url('customers/' . $customer['id'] . '/edit') ?>">Edit</a>
                    <form method="post"
                          action="<?= site_url('customers/' . $customer['id'] . '/delete') ?>"
                          class="d-inline"
                          onsubmit="return confirm('Delete this customer?');">
                        <?= csrf_field() ?>
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    </main>
</body>
</html>