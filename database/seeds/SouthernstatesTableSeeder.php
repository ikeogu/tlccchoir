<?php

use Illuminate\Database\Seeder;
use App\SouthernStates;
class SouthernstatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\SouthernStates::insert([
            'name' => 'Akwa-ibom',
            'route' => 'Akwa-ibom'

        ]);
        App\SouthernStates::insert([
            'name' => 'Bayelsa',
            'route' => 'Bayelsa'

        ]);
        App\SouthernStates::insert([
            'name' => 'Cross-River',
            'route' => 'Cross-River'

        ]);
        App\SouthernStates::insert([
            'name' => 'Edo',
            'route' => 'Edo'

        ]);
        App\SouthernStates::insert([
            'name' => 'Rivers',
            'route' => 'Rivers'

        ]);
        App\SouthernStates::insert([
            'name' => 'Delta',
            'route' => 'Delta'

        ]);
    }
}
