<?php

use Illuminate\Database\Seeder;
use App\NorthernStates;

class NorthernstatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\NorthernStates::insert([
            'name' => 'Bauchi',
            'route' => 'Bauchi'

        ]);
        App\NorthernStates::insert([
            'name' => 'Benue',
            'route' => 'Benue'

        ]);
        App\NorthernStates::insert([
            'name' => 'Borno',
            'route' => 'Borno'

        ]);
        App\NorthernStates::insert([
            'name' => 'Kano',
            'route' => 'Kano'

        ]);
        App\NorthernStates::insert([
            'name' => 'Katsina',
            'route' => 'Katsina'

        ]);
        App\NorthernStates::insert([
            'name' => 'Taraba',
            'route' => 'Taraba'

        ]);
        App\NorthernStates::insert([
            'name' => 'Niger',
            'route' => 'Niger'

        ]);
        App\NorthernStates::insert([
            'name' => 'Adamawa',
            'route' => 'Adamawa'

        ]);
        App\NorthernStates::insert([
            'name' => 'Kaduna',
            'route' => 'Kaduna'

        ]);
        App\NorthernStates::insert([
            'name' => 'Sokoto',
            'route' => 'Sokoto'

        ]);
        App\NorthernStates::insert([
            'name' => 'Gombe',
            'route' => 'Gombe'

        ]);
        App\NorthernStates::insert([
            'name' => 'Jigawa',
            'route' => 'Jigawa'

        ]);
        App\NorthernStates::insert([
            'name' => 'Kebbi',
            'route' => 'Kebbi'

        ]);
        App\NorthernStates::insert([
            'name' => 'Nassarawa',
            'route' => 'Nassarawa'

        ]);
        App\NorthernStates::insert([
            'name' => 'Yobe',
            'route' => 'Yobe'

        ]);
        App\NorthernStates::insert([
            'name' => 'Zamfara',
            'route' => 'Zamfara'

        ]);
        App\NorthernStates::insert([
            'name' => 'illorin',
            'route' => 'illorin'

        ]);
        App\NorthernStates::insert([
            'name' => 'Abuja',
            'route' => 'Abuja'

        ]);
    }
}
