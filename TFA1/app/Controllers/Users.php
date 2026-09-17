<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            ['username' => 'admin', 'full_name' => 'Admin User', 'role' => 'Administrator'],
            ['username' => 'employee1', 'full_name' => 'Frank Castle', 'role' => 'employee'],
            ['username' => 'employee2', 'full_name' => 'Michael Olise', 'role' => 'employee'],
            ['username' => 'manager1', 'full_name' => 'Matt Murdock', 'role' => 'Manager'],
            ['username' => 'staff1', 'full_name' => 'John Cena', 'role' => 'Staff'],
        ];

        return view('users/index', ['users' => $users]);
    }
}