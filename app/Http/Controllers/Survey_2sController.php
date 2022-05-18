<?php

namespace App\Http\Controllers;

use App\Survey_1;
use App\Survey_2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Survey_2sController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('survey.survey_2s.index');
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
        $chk_set = Survey_2::select('survey_2s_set')->where('survey_2s_districts_id', Auth::user()->districts_id)->first();

        if ($chk_set == '') {
            echo 'is null';

            $survey_2s_set = 1;
        } else {
            $survey_2s_set = $chk_set->survey_2s_set + 1;
        }


        $survey_2s = new Survey_2();
        $survey_2s->survey_2s_maket = $request->survey_2s_maket;
        $survey_2s->survey_2s_address = $request->survey_2s_address;

        $survey_2s->survey_2s_set =$survey_2s_set;

        $survey_2s->survey_2s_no_1 = $request->survey_2s_no_1;
        $survey_2s->survey_2s_no_1_note = $request->survey_2s_no_1_note;

        $survey_2s->survey_2s_no_2 = $request->survey_2s_no_2;
        $survey_2s->survey_2s_no_2_note = $request->survey_2s_no_2_note;

        $survey_2s->survey_2s_no_3 = $request->survey_2s_no_3;
        $survey_2s->survey_2s_no_3_note = $request->survey_2s_no_3_note;

        $survey_2s->survey_2s_no_4= $request->survey_2s_no_4;
        $survey_2s->survey_2s_no_4_note = $request->survey_2s_no_4_note;

        $survey_2s->survey_2s_no_5 = $request->survey_2s_no_5;
        $survey_2s->survey_2s_no_5_note = $request->survey_2s_no_5_note;

        $survey_2s->survey_2s_no_6 = $request->survey_2s_no_6;
        $survey_2s->survey_2s_no_6_note = $request->survey_2s_no_6_note;

        $survey_2s->survey_2s_no_7 = $request->survey_2s_no_7;
        $survey_2s->survey_2s_no_7_note = $request->survey_2s_no_7_note;

        $survey_2s->survey_2s_no_8 = $request->survey_2s_no_8;
        $survey_2s->survey_2s_no_8_note = $request->survey_2s_no_8_note;

        $survey_2s->survey_2s_no_9 = $request->survey_2s_no_9;
        $survey_2s->survey_2s_no_9_note = $request->survey_2s_no_9_note;



        $survey_2s->survey_2s_user  = Auth::user()->id;
        $survey_2s->survey_2s_districts_id  =Auth::user()->districts_id ;



        $survey_2s->save();

         return back()->withsuccess(__('บันทึกแบบสำรวจชุดที่ 2 สำหรับตลาดสำเร็จ.'));
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
