<?php

use App\Models\User;
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
            'name'=>'admin',
            'role'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('123456')
        ]);

        User::create([
            'name'=>'tuhin',
            'role'=>'manager',
            'email'=>'tuhin@gmail.com',
            'password'=>bcrypt('123456')
        ]);
    }
}
