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

    <h1>User Accounts</h1>

    <table class="table table-bordered">
        <tr>
            <th>Username</th>
            <th>Full Name</th>
            <th>Created At</th>
            <th>Avatar</th>
            <th>Actions</th>
        </tr>

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
                         width="64" height="64">
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
    </table>

    <p><a class="btn btn-success" href="<?= site_url('users/new') ?>">Add User</a></p>
        </div>
</body>
</html>