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
                <a class="nav-link" href="<?= site_url('customers') ?>">Customers</a>
                <a class="nav-link active" href="<?= site_url('users') ?>">Users</a>
                <a class="nav-link text-danger" href="<?= site_url('logout') ?>">Log Out</a>
            </div>
        </div>
    </nav>

    <main class="container py-4">
    <div class="page-header d-flex justify-content-between align-items-end">
        <div>
            <h1>User Accounts</h1>
            <p>Manage staff access and profile information.</p>
        </div>
        <a class="btn btn-primary" href="<?= site_url('users/new') ?>">Add User</a>
    </div>

    <div class="pos-card card">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Full Name</th>
                        <th>Created At</th>
                        <th>Avatar</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= esc($user['username']) ?></td>
                <td><?= esc($user['full_name']) ?></td>
                <td><?= esc($user['created_at']) ?></td>
                <td>
                    <?php $avatarFile = $user['avatar'] ?? ''; ?>
                    <?php $avatarUrl = $avatarFile !== ''
                        ? base_url('uploads/' . $avatarFile)
                        : base_url('images/emp' . ((($user['id'] - 1) % 5) + 1) . '.jpg'); ?>
                    <img src="<?= esc($avatarUrl, 'attr') ?>"
                         alt="<?= esc($user['username'], 'attr') ?> avatar"
                         class="avatar-thumbnail"
                         width="52" height="52">
                </td>
                <td>
                    <a class="btn btn-info btn-sm"
                       href="<?= site_url('users/' . $user['id']) ?>">View</a>
                    <a class="btn btn-primary btn-sm"
                       href="<?= site_url('users/' . $user['id'] . '/edit') ?>">Edit</a>
                    <form method="post"
                          action="<?= site_url('users/' . $user['id'] . '/delete') ?>"
                          class="d-inline"
                          onsubmit="return confirm('Delete this user?');">
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