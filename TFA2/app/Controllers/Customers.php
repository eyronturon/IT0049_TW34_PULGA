<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = (new \App\Models\CustomerModel())->findAll();

        return view('customers/index', ['customers' => $customers]);
    }
}