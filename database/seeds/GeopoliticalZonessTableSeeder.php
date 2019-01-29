<?php

use Illuminate\Database\Seeder;
use App\Geopoliticalzone;

class GeopoliticalZonessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Geopoliticalzone::insert([
            'name' => 'Northern Zone',
            'states' => '19',
            'route' => 'northern_zone'

        ]);

        App\Geopoliticalzone::insert([
            'name' => 'South East',
            'states' => '5',
            'route' => 'south_east'

        ]);
        App\Geopoliticalzone::insert([
            'name' => 'South South',
            'states' => '6',
            'route' => 'south_south'

        ]);
        App\Geopoliticalzone::insert([
            'name' => 'South West',
            'states' => '6',
            'route' => 'south_west'

        ]);
    }
}
