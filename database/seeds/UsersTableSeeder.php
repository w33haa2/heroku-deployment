<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        User::create([
            'name' => 'Admin Admin',
            'email' => 'admin@white.com',
            'user_type' => 'admin',
            'password' => Hash::make('secret'),
        ]);
    }
}
