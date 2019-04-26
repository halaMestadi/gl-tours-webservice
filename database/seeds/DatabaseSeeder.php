<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(AppUsersTableSeeder::class);
        // $this->call(PlacesTableSeeder::class);
        // $this->call(AdsTableSeeder::class);
    }
}
