<html>
<head>
    <title>User Accounts</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <div class="container">
    <nav>
        <a href="<?= base_url('/') ?>">Home</a> |
        <a href="<?= base_url('about') ?>">About</a> |
        <a href="<?= base_url('customers') ?>">Customers</a> |
        <a href="<?= base_url('users') ?>">Users</a>
    </nav>

    <h1>Customer Accounts</h1>

    <table class="table table-bordered">
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>

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
    </table>

    <p><a class="btn btn-success" href="<?= site_url('customers/new') ?>">Add Customer</a></p>
        </div>
</body>
</html>