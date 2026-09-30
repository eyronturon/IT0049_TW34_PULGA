<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = (new \App\Models\UserModel())->findAll();
        
        return view('users/index', ['users' => $users]);
    }
}