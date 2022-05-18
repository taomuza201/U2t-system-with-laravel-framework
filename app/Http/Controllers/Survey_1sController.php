<?php

namespace App\Http\Controllers;

use App\Survey_1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Survey_1sController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('survey.survey_1s.index');
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

        $chk_set = Survey_1::select('survey_1s_set')->where('survey_1s_districts_id', Auth::user()->districts_id)->first();

        if ($chk_set == '') {
            echo 'is null';

            $survey_1s_set = 1;
        } else {
            $survey_1s_set = $chk_set->survey_1s_set + 1;
        }


        $survey_1s = new Survey_1();
        $survey_1s->survey_1s_address = $request->survey_1s_address;
        $survey_1s->survey_1s_set =$survey_1s_set;

        $survey_1s->survey_1s_no_1 = $request->survey_1s_no_1;
        $survey_1s->survey_1s_no_1_note = $request->survey_1s_no_1_note;

        $survey_1s->survey_1s_no_2 = $request->survey_1s_no_2;
        $survey_1s->survey_1s_no_2_note = $request->survey_1s_no_2_note;

        $survey_1s->survey_1s_no_3 = $request->survey_1s_no_3;
        $survey_1s->survey_1s_no_3_note = $request->survey_1s_no_3_note;

        $survey_1s->survey_1s_no_4= $request->survey_1s_no_4;
        $survey_1s->survey_1s_no_4_note = $request->survey_1s_no_4_note;

        $survey_1s->survey_1s_no_5 = $request->survey_1s_no_5;
        $survey_1s->survey_1s_no_5_note = $request->survey_1s_no_5_note;

        $survey_1s->survey_1s_no_6 = $request->survey_1s_no_6;
        $survey_1s->survey_1s_no_6_note = $request->survey_1s_no_6_note;

        $survey_1s->survey_1s_user  = Auth::user()->id;
        $survey_1s->survey_1s_districts_id  =Auth::user()->districts_id ;



        $survey_1s->save();

         return back()->withsuccess(__('บันทึกแบบสำรวจชุดที่ 1 สำหรับที่พักอาศัยสำเร็จ.'));
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
