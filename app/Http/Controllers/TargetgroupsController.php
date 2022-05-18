<?php

namespace App\Http\Controllers;

use App\User;
use App\District;
use App\Targetgroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class TargetgroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $districts = District::select('*')->get();
        $targetgroups = Targetgroup::select('*')
            ->join('districts', 'targetgroups.targetgroups_districts_id', '=', 'districts.districts_id')->where('targetgroups_districts_id',Auth::user()->districts_id)
            ->get();
        return view('targetgroups.index', compact('targetgroups', 'districts'));
    }


    public function manage_targetgroups()
    {
        $districts = District::select('*')->get();
        $targetgroups = Targetgroup::select('*')
            ->join('districts', 'targetgroups.targetgroups_districts_id', '=', 'districts.districts_id')
            ->get();
        return view('targetgroups.manage.index', compact('targetgroups', 'districts'));
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
     

        $targetgroups = new Targetgroup();
        $targetgroups->targetgroups_gender = $request->targetgroups_gender; 
        $targetgroups->targetgroups_fname = $request->targetgroups_fname; 
        $targetgroups->targetgroups_lname = $request->targetgroups_lname; 
        $targetgroups->targetgroups_phone = $request->targetgroups_phone; 
        $targetgroups->targetgroups_address = $request->targetgroups_address; 
        $targetgroups->targetgroups_career = $request->targetgroups_career; 
        $targetgroups->targetgroups_reason = $request->targetgroups_reason; 
        $targetgroups->targetgroups_districts_id  = Auth::user()->districts_id;
        $targetgroups->save();

        return Redirect::back()->withsuccess(__('เพิ่มข้อมูลกลุ่มเป้าหมายสำเร็จ.'));
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
        $data = Targetgroup::select('*')
        ->join('districts', 'targetgroups.targetgroups_districts_id', '=', 'districts.districts_id')
        ->where('targetgroups_id',$id)->first();

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
        
        $targetgroups =  Targetgroup::find($id);

        $targetgroups->targetgroups_gender = $request->targetgroups_gender; 
        $targetgroups->targetgroups_fname = $request->targetgroups_fname; 
        $targetgroups->targetgroups_lname = $request->targetgroups_lname; 
        $targetgroups->targetgroups_phone = $request->targetgroups_phone; 
        $targetgroups->targetgroups_address = $request->targetgroups_address; 
        $targetgroups->targetgroups_career = $request->targetgroups_career; 
        $targetgroups->targetgroups_reason = $request->targetgroups_reason; 
        $targetgroups->targetgroups_districts_id  = Auth::user()->districts_id;
        $targetgroups->save();
        return Redirect::back()->withsuccess(__('แก้ไขข้อมูลกลุ่มเป้าหมายสำเร็จ.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $targetgroup =  Targetgroup::find($id);
       $targetgroup->delete();

        return Redirect::back()->withsuccess(__('ลบข้อมูลกลุ่มเป้าหมายสำเร็จ.'));


    }
}
