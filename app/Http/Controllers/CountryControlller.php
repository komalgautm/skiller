<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Countries;
use App\Models\Menu;
use App\Models\SubMenu;
use Carbon\Carbon;


class CountryControlller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['menu'] = Menu::where('status', 1)->get();
        $data['country'] = Countries::where('is_deleted', 0)->get(); 
        return view('BackEnd.CountryView', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['menu'] = Menu::where('status', 1)->get();
        $data['sub_menu'] = SubMenu::where('status', 1)->get();
        return view('BackEnd.AddCountry', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $country_data = array(
            'country_code' =>  $request->country_code,
            'name' => $request->country_name,
            'status' =>1,
            'is_deleted' => 0,
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s")
        );
        
        $country = Countries::insert($country_data);
        if(isset($country)){
          return redirect('/admin/show-country');
        } else {
            echo "Not sent";
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_country_status(Request $request)
    {
        $data = Countries::where('id', $request->id)
       ->update([
           'status' => $request->status
        ]);
        echo json_encode($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['menu'] = Menu::where('status', 1)->get();
        $data['sub_menu'] = SubMenu::where('status', 1)->get();
        $data['country'] = Countries::where('id', $id)->where('status', 1)->get(); 
        return view('BackEnd.EditCountry', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $country_data = array(
            'country_code' =>  $request->country_code,
            'name' => $request->country_name,
            'status' =>1,
            'is_deleted' => 0,
            'updated_at'=>date("Y-m-d H:i:s")
        );
        
        $country = Countries::where('id', $request->country_id)->update($country_data);
        if(isset($country)){
          return redirect('/admin/show-country');
        } else {
            echo "Not sent";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Countries::where('id', $id)->update(['is_deleted' => 1]);   
        return redirect('/admin/show-country');
    }
}
