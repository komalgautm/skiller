<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $menu = Menu::count();
        if($menu == 0){
            Menu::create([
                'menu_name' => 'Dashborad',
                'url' => '/admin/dashboard',
                'icon_name' => '<i class="mdi mdi-view-dashboard"></i>',
                'order_id' => 1,
                'status' => 1
            ]);
    
            Menu::create([
                'menu_name' => 'Countries',
                'url' => '/show-country',
                'icon_name' => '<i class="mdi mdi-view-dashboard"></i>',
                'order_id' => 2,
                'status' => 1
            ]);
    
            Menu::create([
                'menu_name' => 'Cities',
                'url' => '/show-country',
                'icon_name' => '<i class="mdi mdi-view-dashboard"></i>',
                'order_id' => 3,
                'status' => 1
            ]);
    
            Menu::create([
                'menu_name' => 'Language',
                'url' => '/show-country',
                'icon_name' => '<i class="fas fa-language"></i>',
                'order_id' => 4,
                'status' => 1
            ]);
    
            Menu::create([
                'menu_name' => 'Category',
                'url' => '/show-country',
                'icon_name' => '<i class="mdi mdi-view-dashboard"></i>',
                'order_id' => 5,
                'status' => 1
            ]);
    
            Menu::create([
                'menu_name' => 'Users',
                'url' => '/admin/users',
                'icon_name' => '<i class="fas fa-users"></i>',
                'order_id' => 6,
                'status' => 1
            ]);
        }
    }
}
