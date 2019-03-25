<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'El-Elah',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'), // secret
            'remember_token' => str_random(10),
        ]);
    }
}
