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
        App\User::insert([
            'name' => 'Ikeogu Emmanuel ',
            'email' => 'ikeogu322@gmail.com',
            'password' => bcrypt('password'),
            'state' => 'Rivers State',
            'discipline' => 'Computer Science',
            'institution' => 'University of Port Harcourt',
            'avatar' => 'user.png',
            'gender' => 'Male',
            'phone' => ' 08133627610',
            'isAdmin' => '1',
        ]);

       
       
    }
}