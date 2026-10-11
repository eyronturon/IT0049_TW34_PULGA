<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index(): string
    {
        $model = new TaskModel();
        $today = date('Y-m-d');

        $tasks = $model->where('task_date', $today)->findAll();

        return view('tasks/today', [
            'tasks' => $tasks,
            'today' => $today,
        ]);
    }

    public function all(): string
    {
        $model = new TaskModel();
        
        $tasks = $model->orderBy('task_date', 'DESC')->findAll();

        return view('tasks/index', [
            'tasks' => $tasks,
        ]);
    }
}