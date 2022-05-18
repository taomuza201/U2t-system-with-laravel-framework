<?php

namespace App\Http\Controllers;

use App\Goal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class GoalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('goals.index');
        // return view('layouts.403.index');
    }
    public function manage()
    {

        $goal = Goal::orderBy('goals_id','desc')->get();
        return view('goals.manage.index', compact('goal'));
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
        $chkgoal = Goal::select()->orderBy('goals_id', 'desc')->first();

        $now_date = now()->format('Y-m-d');

        if ($chkgoal != '') {

            if ($now_date > $chkgoal->goals_end) {
                // echo ' หมดเวลา';

                $goal = new Goal();
                $goal->goals_start = Carbon::parse($request->goals_start)->format('Y-m-d');
                $goal->goals_end = Carbon::parse($request->goals_end)->format('Y-m-d');
                $goal->goals_no = $chkgoal->goals_no + 1;
                $goal->save();
                return Redirect::back()->withsuccess(__('กำหนดช่วงเวลาการกรอกข้อมูสำเร็จ.'));
            } else {
                return Redirect::back()->withfial(__('ไม่สามารถกำหนดช่วงเวาได้เนื่องจากยังไม่หมช่วงเวลาในการกรอกข้อมูล.'));
            }
        }else{
            $goal = new Goal();
            $goal->goals_start = Carbon::parse($request->goals_start)->format('Y-m-d');
            $goal->goals_end = Carbon::parse($request->goals_end)->format('Y-m-d');
            $goal->goals_no = 1;
            $goal->save();
            return Redirect::back()->withsuccess(__('กำหนดช่วงเวลาการกรอกข้อมูสำเร็จ.'));
        }

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

        $data = Goal::select('*')
            ->where('goals_id', $id)
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
        $goal = Goal::find($id);
        $goal->goals_start = Carbon::parse($request->goals_start)->format('Y-m-d');
        $goal->goals_end = Carbon::parse($request->goals_end)->format('Y-m-d');
        // $goal->goals_no = $chkgoal->goals_no + 1;
        $goal->save();
        return Redirect::back()->withsuccess(__('แก้ไขช่วงเวลาการกรอกข้อมูสำเร็จ.'));
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
