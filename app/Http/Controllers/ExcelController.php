<?php

namespace App\Http\Controllers;

use App\District;
use App\Exports\PeopleExport;
use App\Exports\PeopleViewExport;
use App\Exports\targetgroupsViewExport;
use App\people;
use Illuminate\Http\Request;



use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($districts)
    {
        
                if($districts=='all'){
                    $name  = 'ทั้งหมด';
                }else{
                    $data= District::where('districts_id',$districts)->first();
                    $name  = $data->districts_name ;
                }
      

        return Excel::download(new PeopleViewExport($districts), 'ข้อมูลรายชื่อ'.$name.'.xlsx');
    }
    public function targetgroups($districts)
    {
        
                if($districts=='all'){
                    $name  = 'ทั้งหมด';
                }else{
                    $data= District::where('districts_id',$districts)->first();
                    $name  = $data->districts_name ;
                }
      

        return Excel::download(new targetgroupsViewExport($districts), 'ข้อมูลกลุ่มเป้าหมาย'.$name.'.xlsx');
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
        //
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
        //
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
        //
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
    }
}
