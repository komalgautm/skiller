<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Countries;
use App\Models\Menu;
use App\Models\SubMenu;
use Illuminate\Support\Facades\DB;

class CityControlller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['menu'] = Menu::where('status', 1)->get();
        $data['country'] = Countries::where('is_deleted', 0)->get();
        return view('Backend.AddCity', $data);
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
        $city_data = array(
            'country_id' => $request->country_id,
            'name' => $request->city_name,
            'status' => 1,
            'is_deleted' =>0,
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s")
        );
        
        $city = City::insert($city_data);
        if(isset($city)){
          return redirect('/admin/add-city');
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
    public function show()
    {
        //
        $data['menu'] = Menu::where('status', 1)->get();
        $data['sub_menu'] = SubMenu::where('status', 1)->get();

        $data['city'] = DB::table('cities')
            ->join('countries', 'countries.id', '=', 'cities.country_id')
            ->select('cities.id as city_id','cities.name as city_name', 'cities.status','cities.created_at' ,'countries.id as country_id', 'countries.name as country_name')
            ->where('cities.is_deleted', 0)
            ->get();

        return view('Backend.CityView', $data);
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
        $data['country'] = Countries::where('is_deleted', 0)->get();
        $data['city'] = city::where('id', $id)->get();
        return view('Backend.EditCity', $data);
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
        $city_data = array(
            'country_id' => $request->country_id,
            'name' => $request->city_name,
            'status' => 1,
            'is_deleted' =>0,
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s")
        );
        
        $city = City::where('id', $request->city_id)->update($city_data);
        if(isset($city)){
          return redirect('/admin/show-city');
        } else {
            echo "Not update";
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
        //
        $data = City::where('id', $id)->update(['is_deleted' => 1]);   
        return redirect('/admin/show-city');
    }

    function update_city_status(Request $request){
        $data = City::where('id', $request->id)
        ->update([
            'status' => $request->status
         ]);
         echo json_encode($data);
    }
}
