<?php

namespace App\Http\Controllers;

use App\Survey_3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Survey_3sController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('survey.survey_3s.index');
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
        $chk_set = Survey_3::select('survey_3s_set')->where('survey_3s_districts_id', Auth::user()->districts_id)->first();

        if ($chk_set == '') {
            echo 'is null';

            $survey_3s_set = 1;
        } else {
            $survey_3s_set = $chk_set->survey_3s_set + 1;
        }


        $survey_3s = new Survey_3();

        $survey_3s->survey_3s_address = $request->survey_3s_address;
        $survey_3s->survey_3s_religious_place = $request->survey_3s_religious_place;
        $survey_3s->survey_3s_set =$survey_3s_set;

        $survey_3s->survey_3s_no_1 = $request->survey_3s_no_1;
        $survey_3s->survey_3s_no_1_note = $request->survey_3s_no_1_note;

        $survey_3s->survey_3s_no_2 = $request->survey_3s_no_2;
        $survey_3s->survey_3s_no_2_note = $request->survey_3s_no_2_note;

        $survey_3s->survey_3s_no_3 = $request->survey_3s_no_3;
        $survey_3s->survey_3s_no_3_note = $request->survey_3s_no_3_note;

        $survey_3s->survey_3s_no_4= $request->survey_3s_no_4;
        $survey_3s->survey_3s_no_4_note = $request->survey_3s_no_4_note;

        $survey_3s->survey_3s_no_5 = $request->survey_3s_no_5;
        $survey_3s->survey_3s_no_5_note = $request->survey_3s_no_5_note;

        $survey_3s->survey_3s_no_6 = $request->survey_3s_no_6;
        $survey_3s->survey_3s_no_6_note = $request->survey_3s_no_6_note;

        $survey_3s->survey_3s_no_7 = $request->survey_3s_no_7;
        $survey_3s->survey_3s_no_7_note = $request->survey_3s_no_7_note;

        $survey_3s->survey_3s_no_8 = $request->survey_3s_no_8;
        $survey_3s->survey_3s_no_8_note = $request->survey_3s_no_8_note;

  


        $survey_3s->survey_3s_user  = Auth::user()->id;
        $survey_3s->survey_3s_districts_id  =Auth::user()->districts_id ;



        $survey_3s->save();

         return back()->withsuccess(__('บันทึกแบบสำรวจชุดที่ 3 สำหรับศาสนสถานสำเร็จ.'));
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
