<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New User</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <main class="container py-5">
        <div class="content-narrow">
            <div class="form-card">
        <h1>New User</h1>

        <form method="post" action="<?= site_url('users') ?>">
            <?= csrf_field() ?>

            <div class="form-group row">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" name="username"
                           value="<?= esc(old('username') ?? '', 'attr') ?>" required>
                    <?= validation_show_error('username') ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="full_name" class="col-sm-2 col-form-label">Full name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="full_name" name="full_name"
                           value="<?= esc(old('full_name') ?? '', 'attr') ?>" required>
                    <?= validation_show_error('full_name') ?>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Save</button>
            <a href="<?= site_url('users') ?>" class="btn btn-danger">Back</a>
        </form>
            </div>
        </div>
    </main>
</body>
</html>