<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Details</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <main class="container mt-4">
        <h1>User Details</h1>
        <?php $avatarFile = $user['avatar'] ?? ''; ?>
        <?php $avatarUrl = $avatarFile !== ''
            ? base_url('uploads/' . $avatarFile)
            : base_url('images/emp' . ((($user['id'] - 1) % 5) + 1) . '.jpg'); ?>
        <p>
            <img src="<?= esc($avatarUrl, 'attr') ?>"
                 alt="<?= esc($user['username'], 'attr') ?> avatar"
                 width="100" height="100">
        </p>
        <dl class="row">
            <dt class="col-sm-3">Username</dt>
            <dd class="col-sm-9"><?= esc($user['username']) ?></dd>

            <dt class="col-sm-3">Full name</dt>
            <dd class="col-sm-9"><?= esc($user['full_name']) ?></dd>

            <dt class="col-sm-3">Created at</dt>
            <dd class="col-sm-9"><?= esc($user['created_at']) ?></dd>
        </dl>

        <a class="btn btn-primary"
           href="<?= site_url('users/' . $user['id'] . '/edit') ?>">Edit</a>
        <a class="btn btn-danger" href="<?= site_url('users') ?>">Back</a>
    </main>
</body>
</html>
