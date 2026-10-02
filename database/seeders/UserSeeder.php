<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->insert([
            [
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('admin12345'),
            'roles_id' => '1',
            ],
        ]);

        \DB::table('users')->insert([
            [
                'name' => 'user',
                'email' => 'user@test.com',
                'password' => Hash::make('user12345'),
                'roles_id' => '2',
            ]
        ]);
    }
}
