<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
                'subdomain'      => null,
            ],
            [
                'id'             => 2,
                'name'           => 'Company 1',
                'email'          => 'company1@company1.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
                'subdomain'      => 'company1',
            ],
            [
                'id'             => 3,
                'name'           => 'Company 2',
                'email'          => 'company2@company2.com',
                'password'       => Hash::make('password'),
                'remember_token' => null,
                'subdomain'      => 'company2',
            ],
        ];

        User::insert($users);
    }
}
