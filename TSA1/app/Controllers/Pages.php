<?php

namespace App\Controllers;

use App\Models\UserModel;

class Pages extends BaseController
{
    public function profile(): string
    {
        $model = new UserModel();
        $user = $model->first(); 

        return view('pages/profile', [
            'user' => $user,
        ]);
    }

    public function about(): string
    {
        return view('pages/about');
    }
}