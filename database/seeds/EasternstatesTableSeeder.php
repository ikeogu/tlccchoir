<?php

use Illuminate\Database\Seeder;
use App\EasthernStates;
class EasternstatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\EasthernStates::insert([
            'name' => 'Abia',
            'route' => 'Abia'

        ]);
        App\EasthernStates::insert([
            'name' => 'Anambra',
            'route' => 'Anambra'

        ]);
        App\EasthernStates::insert([
            'name' => 'Ebonyi',
            'route' => 'Ebonyi'

        ]);
        App\EasthernStates::insert([
            'name' => 'Enugu',
            'route' => 'Enugu'

        ]);
        App\EasthernStates::insert([
            'name' => 'Imo',
            'route' => 'Imo'

        ]);
    }
}
