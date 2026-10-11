<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Tasks - Tasks for Today</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="<?= base_url('/') ?>">Tasks for Today</a>
            <div class="navbar-nav">
                <a class="nav-link" href="<?= base_url('/') ?>">Today's Tasks</a>
                <a class="nav-link active" href="<?= base_url('tasks') ?>">All Tasks</a>
                <a class="nav-link" href="<?= base_url('profile') ?>">Profile</a>
                <a class="nav-link" href="<?= base_url('about') ?>">About</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h3 font-weight-bold mb-0">All Tasks (Unfiltered)</h1>
            <a href="<?= base_url('/') ?>" class="btn btn-outline-secondary btn-sm">Back to Today</a>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-header bg-white font-weight-bold">
                Complete Task History (Ordered by Date)
            </div>
            <div class="card-body p-0">
                <table class="table table-bordered table-hover mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Task Date</th>
                            <th>Status</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tasks as $task): ?>
                            <tr>
                                <td><?= esc($task['id']) ?></td>
                                <td><?= esc($task['title']) ?></td>
                                <td><strong><?= esc($task['task_date']) ?></strong></td>
                                <td>
                                    <?php if ($task['status'] === 'completed'): ?>
                                        <span class="badge badge-success">Completed</span>
                                    <?php elseif ($task['status'] === 'in-progress'): ?>
                                        <span class="badge badge-primary">In Progress</span>
                                    <?php else: ?>
                                        <span class="badge badge-warning">Pending</span>
                                    <?php endif; ?>
                                </td>
                                <td class="text-muted small"><?= esc($task['created_at']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>