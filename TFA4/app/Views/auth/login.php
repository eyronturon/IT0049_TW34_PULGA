<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - POS System</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body class="login-page">
    <main class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 col-lg-5">
                <div class="login-card card">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <div class="pos-brand mb-2">POS System</div>
                            <h1 class="h3 mb-1">Welcome back</h1>
                            <p class="text-muted mb-0">Sign in to manage your accounts.</p>
                        </div>

                        <?php if (session()->getFlashdata('error')): ?>
                            <div class="alert alert-danger" role="alert">
                                <?= esc(session()->getFlashdata('error')) ?>
                            </div>
                        <?php endif ?>

                        <form method="post" action="<?= site_url('login') ?>">
                            <?= csrf_field() ?>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text"
                                       class="form-control"
                                       id="username"
                                       name="username"
                                       value="<?= esc(old('username') ?? '', 'attr') ?>"
                                       required>
                                <?= validation_show_error('username') ?>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password"
                                       class="form-control"
                                       id="password"
                                       name="password"
                                       required>
                                <?= validation_show_error('password') ?>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">
                                Log In
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
