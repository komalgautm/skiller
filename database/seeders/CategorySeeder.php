<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::create([
            'name' => 'Accountants',
                'status' => 1
        ]);

        Category::create([
              'name' => 'Appliances',
                'status' => 1
        ]);

        Category::create([
            'name' => 'Bakers',
              'status' => 1
        ]);

        Category::create([
            'name' => 'Bicycle Service',
            'status' => 1
        ]);

        Category::create([
            'name' => 'Web',
            'status' => 1
        ]);
    }
}
