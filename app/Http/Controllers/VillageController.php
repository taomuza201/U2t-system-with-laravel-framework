<?php

namespace App\Http\Controllers;

use App\Village;
use App\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class VillageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $districts = District::select('*')->get();
        $villages = Village::select('*')->join('districts', 'villages.villages_districts_id', '=', 'districts.districts_id')->get();
        return view('villages.index',compact('districts','villages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // print_r($request->all());
        $villages = new Village();
        $villages->villages_districts_id   = $request->districts_id ;
        $villages->villages_name  = $request->villages_name ;

        $villages->save();

        return Redirect::back()->withsuccess(__('เพิ่มข้อมูลหมู่บ้านสำเร็จ.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Village::select('*')
        ->where('villages_id', $id)
        ->first();

    return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $data = Village::find($id);
        $data->villages_districts_id   = $request->get('districts_id');
        $data->villages_name  = $request->get('villages_name');
        $data->save();

        return back()->withsuccess(__('แก้ไขข้อมูลสำเร็จ.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $villages = Village::find($id);
        $villages->delete();
        return Redirect::back()->withsuccess(__('ลบรายการข้อมูลสำเร็จ.'));
    }
}
