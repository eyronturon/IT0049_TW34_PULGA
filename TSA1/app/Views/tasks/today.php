<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Today's Tasks - Tasks for Today</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

    <!-- Bootstrap Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="<?= base_url('/') ?>">Tasks for Today</a>
            <div class="navbar-nav">
                <a class="nav-link active" href="<?= base_url('/') ?>">Today's Tasks</a>
                <a class="nav-link" href="<?= base_url('tasks') ?>">All Tasks</a>
                <a class="nav-link" href="<?= base_url('profile') ?>">Profile</a>
                <a class="nav-link" href="<?= base_url('about') ?>">About</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="jumbotron py-4 bg-white shadow-sm border">
            <h1 class="display-5 font-weight-bold">Today's Tasks</h1>
            <p class="lead text-muted">Filtered dashboard showing tasks scheduled for today (<strong><?= esc($today) ?></strong>).</p>
            <a href="<?= base_url('tasks') ?>" class="btn btn-primary">View All Tasks</a>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-header bg-white font-weight-bold">
                Tasks Due Today (<?= count($tasks) ?> found)
            </div>
            <div class="card-body p-0">
                <table class="table table-striped table-hover mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Task Title</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($tasks)): ?>
                            <tr>
                                <td colspan="4" class="text-center text-muted py-4">No tasks scheduled for today!</td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($tasks as $index => $task): ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td><?= esc($task['title']) ?></td>
                                    <td><span class="badge badge-info"><?= esc($task['task_date']) ?></span></td>
                                    <td>
                                        <?php if ($task['status'] === 'completed'): ?>
                                            <span class="badge badge-success">Completed</span>
                                        <?php elseif ($task['status'] === 'in-progress'): ?>
                                            <span class="badge badge-primary">In Progress</span>
                                        <?php else: ?>
                                            <span class="badge badge-warning">Pending</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>