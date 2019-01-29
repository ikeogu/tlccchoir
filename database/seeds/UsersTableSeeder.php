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
            'name' => 'Marvelous Analechi ',
            'email' => 'marvelousanelechi@gmail.com',
            'password' => bcrypt('password'),
            'state' => 'Rivers State',
            'discipline' => 'Electrical Engineer',
            'institution' => 'University of Port Harcourt',
            'avatar' => 'user.png',
            'gender' => 'Male',
            'phone' => ' 08167931124',
            'isAdmin' => '1',
        ]);
        App\User::insert([
            'name' => 'Offor Nesta Emeka',
            'email' => 'obinestaemeka@gmail.com',
            'password' => bcrypt('password'),
            'state' => 'Lagos State',
            'discipline' => 'Business Administration',
            'institution' => 'University of Benin',
            'avatar' => 'user.png',
            'gender' => 'Male',
            'phone' => ' 08076162791',
            'isAdmin' => '1',
        ]);
       

       
       
    }
}