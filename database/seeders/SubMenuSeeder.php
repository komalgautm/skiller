<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubMenu;

class SubMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $submenu = SubMenu::count();
        if($submenu == 0){
            SubMenu::create([
                'menu_id' => 2,
                'sub_menu_name' => 'View Country',
                'url' => '/admin/show-country',
                'order_id' => 1,
                'icon_name' => '<i class="mdi mdi-note-outline"></i>',
                'status' => 1
            ]);
    
            SubMenu::create([
                'menu_id' => 2,
                'sub_menu_name' => 'Add Country',
                'url' => '/admin/add-country', 
                'order_id' => 2,
                'icon_name' => '<i class="mdi mdi-note-outline"></i>',
                'status' => 1
            ]);
    
            SubMenu::create([
                'menu_id' => 3,
                'sub_menu_name' => 'View Cities',
                'url' => '/show-country',
                'order_id' => 1,
                'icon_name' => '<i class="mdi mdi-note-outline"></i>',
                'status' => 1
            ]);
    
            SubMenu::create([
                'menu_id' => 3,
                'sub_menu_name' => 'Add Cities',
                'url' => '/admin/add-city',
                'order_id' => 2,
                'icon_name' => '<i class="mdi mdi-note-outline"></i>',
                'status' => 1
            ]);
    
            SubMenu::create([
                'menu_id' => 4,
                'sub_menu_name' => 'View Language',
                'url' => '/show-country',
                'order_id' => 1,
                'icon_name' => '<i class="mdi mdi-note-outline"></i>',
                'status' => 1
            ]);
    
            SubMenu::create([
                'menu_id' => 4,
                'sub_menu_name' => 'Add Language',
                'url' => '/show-country',
                'order_id' => 2,
                'icon_name' => '<i class="mdi mdi-note-outline"></i>',
                'status' => 1
            ]);
    
            SubMenu::create([
                'menu_id' => 5,
                'sub_menu_name' => 'View Category',
                'url' => '/show-country',
                'order_id' => 1,
                'icon_name' => '<i class="mdi mdi-note-outline"></i>',
                'status' => 1
            ]);
    
            SubMenu::create([
                'menu_id' => 5,
                'sub_menu_name' => 'Add Category',
                'url' => '/show-country',
                'order_id' => 2,
                'icon_name' => '<i class="mdi mdi-note-outline"></i>',
                'status' => 1
            ]);

        }
    }
}
