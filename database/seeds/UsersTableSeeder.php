<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'FEBRI',
            'email' => 'admin@gmail.com',
            'level' => 'Admin',
            'password' => bcrypt('ganesha'),
        ]);

        User::create([
            'name' => 'RIAN',
            'email' => 'user@gmail.com',
            'level' => 'User',
            'password' => bcrypt('user'),
        ]);
    }
}
