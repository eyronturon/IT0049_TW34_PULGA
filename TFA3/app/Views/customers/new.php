<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Customer</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <main class="container mt-4">
        <h1>New Customer</h1>

        <form method="post" action="<?= site_url('customers') ?>">
            <?= csrf_field() ?>

            <div class="form-group row">
                <label for="full_name" class="col-sm-2 col-form-label">Full name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="full_name" name="full_name"
                           value="<?= esc(old('full_name') ?? '', 'attr') ?>" required>
                    <?= validation_show_error('full_name') ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email"
                           value="<?= esc(old('email') ?? '', 'attr') ?>" required>
                    <?= validation_show_error('email') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm-10">
                  <input type="tel" class="form-control" id="phone" name="phone"
                    value="<?= esc(old('phone') ?? '', 'attr') ?>" maxlength="20">
                 </div>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
            <a href="<?= site_url('customers') ?>" class="btn btn-danger">Back</a>
        </form>
    </main>
</body>
</html>