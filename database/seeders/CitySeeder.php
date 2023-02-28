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
            'name' => 'Adelaide',
            'status' => 1
        ]);
        City::create([
            'name' => 'Sydney',
            'status' => 1
        ]);
        City::create([
            'name' => 'Melbourne',
            'status' => 1
        ]);
        City::create([
            'name' => 'Canberra',
            'status' => 1
        ]);
        City::create([
            'name' => 'Perth',
            'status' => 1
        ]);
        City::create([
            'name' => 'Brisbane',
            'status' => 1
        ]);
        City::create([
            'name' => 'Hobart',
            'status' => 1
        ]);

    }
}
