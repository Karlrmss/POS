<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin',
                'full_name' => 'John Admin',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Sarah Cruz',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Daniel Reyes',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Michael Santos',
                'role' => 'Manager'
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Angela Garcia',
                'role' => 'Staff'
            ]
        ];

        return view('users', [
            'users' => $users
        ]);
    }
}