<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PhoneCall;

class PhoneCallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PhoneCall::create([
            'name' => 'Google Meet',
            'is_deleted' => 1
        ]);
        PhoneCall::create([
            'name' => 'Zoom',
            'is_deleted' => 1
        ]);
        PhoneCall::create([
            'name' => 'teams',
            'is_deleted' => 1
        ]);
        PhoneCall::create([
            'name' => 'Phone Call',
            'is_deleted' => 1
        ]);
    }
}
