<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'hassam',
                'first_name' => 'Hassam',
                'last_name' => 'Admin',
                'phone' => '1234567890',
                'email' => 'a@a',
                'password' => Hash::make('aaaaaaaa'),
                'role' => 'Admin',
            ],
            [

                'username' => 'john',
                'first_name' => 'John',
                'last_name' => 'Doe',
                'phone' => '9876543210',
                'email' => 'john@example.com',
                'password' => Hash::make('password123'),
                'role' => 'User',
            ],
            [
                'username' => 'jane',
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'phone' => '5555555555',
                'email' => 'jane@example.com',
                'password' => Hash::make('password456'),
                'role' => 'User',
            ],
        ]);
    }
}
