<?php

namespace Database\Seeders;
use App\Models\User;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@localhost',
            'status'=>'admin',
            'password' => 'admin12345678',
        ]);

        User::create([
            'name' => 'Member',
            'email' => 'member@localhost',
            'password' => 'member12345678',
            'status' => 'member'
        ]);

    }
}
