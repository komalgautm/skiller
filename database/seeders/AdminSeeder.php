<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => 9595959595,
            'password' => bcrypt('admin'),
            'status' => 1
        ]);
    }
}
