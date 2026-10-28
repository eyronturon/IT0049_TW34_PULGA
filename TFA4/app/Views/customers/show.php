<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Details</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <main class="container py-5">
        <div class="content-narrow">
            <div class="detail-card">
        <h1>Customer Details</h1>
        <dl class="row">
            <dt class="col-sm-3">Full name</dt>
            <dd class="col-sm-9"><?= esc($customer['full_name']) ?></dd>

            <dt class="col-sm-3">Email</dt>
            <dd class="col-sm-9"><?= esc($customer['email']) ?></dd>

            <dt class="col-sm-3">Phone</dt>
            <dd class="col-sm-9"><?= esc($customer['phone'] ?? '') ?></dd>
        </dl>

        <a class="btn btn-primary"
           href="<?= site_url('customers/' . $customer['id'] . '/edit') ?>">Edit</a>
        <a class="btn btn-danger" href="<?= site_url('customers') ?>">Back</a>
            </div>
        </div>
    </main>
</body>
</html>
