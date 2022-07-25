<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'is_admin' => 1,
                'password' =>  Hash::make('12345678'),
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'is_admin' => 0,
                'password' => Hash::make('123456789'),
            ],
        ];

        foreach($userData as $key => $val) {
            User::create($val);
        };
    }
}