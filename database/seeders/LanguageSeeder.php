<?php

namespace Database\Seeders;
use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Language::create([
            'name' => 'English',
            'is_deleted' => 1
        ]);
        Language::create([
            'name' => 'Spanish',
            'is_deleted' => 1
        ]);
        Language::create([
            'name' => 'Arabic',
            'is_deleted' => 1
        ]);
        Language::create([
            'name' => 'Russian',
            'is_deleted' => 1
        ]);
        Language::create([
            'name' => 'Japanese',
            'is_deleted' => 1
        ]);
        Language::create([
            'name' => 'Korean',
            'is_deleted' => 1
        ]);
    }
}
