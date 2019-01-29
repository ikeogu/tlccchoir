<?php

use Illuminate\Database\Seeder;
use App\WesthernStates;
class WesternstatesTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\WesthernStates::insert([
            'name' => 'Ogun',
            'route' => 'Ogun'

        ]);
        App\WesthernStates::insert([
            'name' => 'Osun',
            'route' => 'Osun'

        ]);
        App\WesthernStates::insert([
            'name' => 'Oyo',
            'route' => 'Oyo'

        ]);
        App\WesthernStates::insert([
            'name' => 'Ondo',
            'route' => 'Ondo'

        ]);
        App\WesthernStates::insert([
            'name' => 'Lagos',
            'route' => 'Lagos'

        ]);
        App\WesthernStates::insert([
            'name' => 'Ekiti',
            'route' => 'Ekiti'

        ]);
    }
}
