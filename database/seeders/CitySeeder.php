<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;
class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        City::create([
            'country_id' => 1,
            'name' => 'Adelaide',
            'is_deleted' => 0
        ]);
        City::create([
            'country_id' => 1,
            'name' => 'Sydney',
            'is_deleted' => 0
        ]);
        City::create([
            'country_id' => 1,
            'name' => 'Melbourne',
            'is_deleted' => 0
        ]);
        City::create([
            'country_id' => 1,
            'name' => 'Canberra',
            'is_deleted' => 0
        ]);
        City::create([
            'country_id' => 1,
            'name' => 'Perth',
            'is_deleted' => 0
        ]);
        City::create([
            'country_id' => 1,
            'name' => 'Brisbane',
            'is_deleted' => 0
        ]);
        City::create([
            'country_id' => 1,
            'name' => 'Hobart',
            'is_deleted' => 0
        ]);

    }
}
