<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            [
                'username' => 'admin01',
                'name' => 'John Cruz',
                'role' => 'Admin'
            ],
            [
                'username' => 'staff01',
                'name' => 'Mark Santos',
                'role' => 'Staff'
            ],
            [
                'username' => 'staff02',
                'name' => 'Anna Reyes',
                'role' => 'Staff'
            ],
            [
                'username' => 'cashier01',
                'name' => 'Lisa Garcia',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier02',
                'name' => 'James Mendoza',
                'role' => 'Cashier'
            ]
        ];

        return view('users', $data);
    }
}