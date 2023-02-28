<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Countries;
class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $createMultiplecountry = [
            [
                'country_code' => 'AU',
                'name' => 'Australia',
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];
        
        Countries::insert($createMultiplecountry); // Eloquent
    }
}
