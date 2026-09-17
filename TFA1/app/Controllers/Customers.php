<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            ['full_name' => 'Harry Kane', 'email' => 'HKane@gmail.com', 'phone' => '09164813317'],
            ['full_name' => 'Mark Snowpher', 'email' => 'wynter@gmail.com', 'phone' => '09264968843'],
            ['full_name' => 'Declan Rice', 'email' => 'declan@gmail.com', 'phone' => '09148534476'],
            ['full_name' => 'Daniel Gipal', 'email' => 'daniel@example.com', 'phone' => '09234865591'],
            ['full_name' => 'Jai Opetaia', 'email' => 'jaiOp@gmail.com', 'phone' => '09153427741'],
        ];

        return view('customers/index', ['customers' => $customers]);
    }
}