<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
class AdminControlller extends Controller
{
    //
    public function login(){
        return view('Backend.login');
    }

    public function admin_login(Request $request){
        $request->validate([
            'user_name' => 'required',
            'password' => 'required'
        ]);

        print_r($request);
    }

    public function index(){
        $data['menu'] = Menu::where('status', 1)->get();
        return view('Backend.dashboard', $data);
    }
}
