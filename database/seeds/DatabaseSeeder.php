<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //$this->call(UsersTableSeeder::class);
         $this->call(GeopoliticalZonessTableSeeder::class);
         $this->call(EasternstatesTableSeeder::class);
         $this->call(NorthernstatesTableSeeder::class);
         $this->call(SouthernstatesTableSeeder::class);
         $this->call(WesternstatesTableSeeder::class);
    }
}
