<?php

namespace App\Http\Controllers;

use App\Survey_4;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Survey_4sController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('survey.survey_4s.index');
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
        $chk_set = Survey_4::select('survey_4s_set')->where('survey_4s_districts_id', Auth::user()->districts_id)->first();

        if ($chk_set == '') {
            echo 'is null';

            $survey_4s_set = 1;
        } else {
            $survey_4s_set = $chk_set->survey_4s_set + 1;
        }


        $survey_4s = new Survey_4();

        $survey_4s->survey_4s_address = $request->survey_4s_address;
        $survey_4s->survey_4s_school = $request->survey_4s_school;
        $survey_4s->survey_4s_set =$survey_4s_set;

        $survey_4s->survey_4s_no_1 = $request->survey_4s_no_1;
        $survey_4s->survey_4s_no_1_note = $request->survey_4s_no_1_note;

        $survey_4s->survey_4s_no_2 = $request->survey_4s_no_2;
        $survey_4s->survey_4s_no_2_note = $request->survey_4s_no_2_note;

        $survey_4s->survey_4s_no_3 = $request->survey_4s_no_3;
        $survey_4s->survey_4s_no_3_note = $request->survey_4s_no_3_note;

        $survey_4s->survey_4s_no_4= $request->survey_4s_no_4;
        $survey_4s->survey_4s_no_4_note = $request->survey_4s_no_4_note;

        $survey_4s->survey_4s_no_5 = $request->survey_4s_no_5;
        $survey_4s->survey_4s_no_5_note = $request->survey_4s_no_5_note;

        $survey_4s->survey_4s_no_6 = $request->survey_4s_no_6;
        $survey_4s->survey_4s_no_6_note = $request->survey_4s_no_6_note;

        $survey_4s->survey_4s_no_7 = $request->survey_4s_no_7;
        $survey_4s->survey_4s_no_7_note = $request->survey_4s_no_7_note;

        $survey_4s->survey_4s_no_8 = $request->survey_4s_no_8;
        $survey_4s->survey_4s_no_8_note = $request->survey_4s_no_8_note;

        $survey_4s->survey_4s_no_9 = $request->survey_4s_no_9;
        $survey_4s->survey_4s_no_9_note = $request->survey_4s_no_9_note;

        $survey_4s->survey_4s_no_10 = $request->survey_4s_no_10;
        $survey_4s->survey_4s_no_10_note = $request->survey_4s_no_10_note;




        $survey_4s->survey_4s_no_11 = $request->survey_4s_no_11;
        $survey_4s->survey_4s_no_11_note = $request->survey_4s_no_11_note;

        $survey_4s->survey_4s_no_12 = $request->survey_4s_no_12;
        $survey_4s->survey_4s_no_12_note = $request->survey_4s_no_12_note;

        $survey_4s->survey_4s_no_13 = $request->survey_4s_no_13;
        $survey_4s->survey_4s_no_13_note = $request->survey_4s_no_13_note;

        $survey_4s->survey_4s_no_14= $request->survey_4s_no_14;
        $survey_4s->survey_4s_no_14_note = $request->survey_4s_no_14_note;

        $survey_4s->survey_4s_no_15 = $request->survey_4s_no_15;
        $survey_4s->survey_4s_no_15_note = $request->survey_4s_no_15_note;

        $survey_4s->survey_4s_no_16 = $request->survey_4s_no_16;
        $survey_4s->survey_4s_no_16_note = $request->survey_4s_no_16_note;

        $survey_4s->survey_4s_no_17 = $request->survey_4s_no_17;
        $survey_4s->survey_4s_no_17_note = $request->survey_4s_no_17_note;

        $survey_4s->survey_4s_no_18 = $request->survey_4s_no_18;
        $survey_4s->survey_4s_no_18_note = $request->survey_4s_no_18_note;

        $survey_4s->survey_4s_no_19 = $request->survey_4s_no_19;
        $survey_4s->survey_4s_no_19_note = $request->survey_4s_no_19_note;

        $survey_4s->survey_4s_no_20 = $request->survey_4s_no_20;
        $survey_4s->survey_4s_no_20_note = $request->survey_4s_no_20_note;



        
        $survey_4s->survey_4s_no_21 = $request->survey_4s_no_21;
        $survey_4s->survey_4s_no_21_note = $request->survey_4s_no_21_note;

        $survey_4s->survey_4s_no_22 = $request->survey_4s_no_22;
        $survey_4s->survey_4s_no_22_note = $request->survey_4s_no_22_note;

        $survey_4s->survey_4s_no_23 = $request->survey_4s_no_23;
        $survey_4s->survey_4s_no_23_note = $request->survey_4s_no_23_note;

        $survey_4s->survey_4s_no_24= $request->survey_4s_no_24;
        $survey_4s->survey_4s_no_24_note = $request->survey_4s_no_24_note;

        $survey_4s->survey_4s_no_25 = $request->survey_4s_no_25;
        $survey_4s->survey_4s_no_25_note = $request->survey_4s_no_25_note;

        $survey_4s->survey_4s_no_26 = $request->survey_4s_no_26;
        $survey_4s->survey_4s_no_26_note = $request->survey_4s_no_26_note;

        $survey_4s->survey_4s_no_27 = $request->survey_4s_no_27;
        $survey_4s->survey_4s_no_27_note = $request->survey_4s_no_27_note;

        $survey_4s->survey_4s_no_28 = $request->survey_4s_no_28;
        $survey_4s->survey_4s_no_28_note = $request->survey_4s_no_28_note;

        $survey_4s->survey_4s_no_29 = $request->survey_4s_no_29;
        $survey_4s->survey_4s_no_29_note = $request->survey_4s_no_29_note;

        $survey_4s->survey_4s_no_30 = $request->survey_4s_no_30;
        $survey_4s->survey_4s_no_30_note = $request->survey_4s_no_30_note;





        $survey_4s->survey_4s_no_31 = $request->survey_4s_no_31;
        $survey_4s->survey_4s_no_31_note = $request->survey_4s_no_31_note;

        $survey_4s->survey_4s_no_32 = $request->survey_4s_no_32;
        $survey_4s->survey_4s_no_32_note = $request->survey_4s_no_32_note;

        $survey_4s->survey_4s_no_33 = $request->survey_4s_no_33;
        $survey_4s->survey_4s_no_33_note = $request->survey_4s_no_33_note;

        $survey_4s->survey_4s_no_34= $request->survey_4s_no_34;
        $survey_4s->survey_4s_no_34_note = $request->survey_4s_no_34_note;

        $survey_4s->survey_4s_no_35 = $request->survey_4s_no_35;
        $survey_4s->survey_4s_no_35_note = $request->survey_4s_no_35_note;

        $survey_4s->survey_4s_no_36 = $request->survey_4s_no_36;
        $survey_4s->survey_4s_no_36_note = $request->survey_4s_no_36_note;

        $survey_4s->survey_4s_no_37 = $request->survey_4s_no_37;
        $survey_4s->survey_4s_no_37_note = $request->survey_4s_no_37_note;

        $survey_4s->survey_4s_no_38 = $request->survey_4s_no_38;
        $survey_4s->survey_4s_no_38_note = $request->survey_4s_no_38_note;

        $survey_4s->survey_4s_no_39 = $request->survey_4s_no_39;
        $survey_4s->survey_4s_no_39_note = $request->survey_4s_no_39_note;

        $survey_4s->survey_4s_no_40 = $request->survey_4s_no_40;
        $survey_4s->survey_4s_no_40_note = $request->survey_4s_no_40_note;




        $survey_4s->survey_4s_no_41 = $request->survey_4s_no_41;
        $survey_4s->survey_4s_no_41_note = $request->survey_4s_no_41_note;

        $survey_4s->survey_4s_no_42 = $request->survey_4s_no_42;
        $survey_4s->survey_4s_no_42_note = $request->survey_4s_no_42_note;

        $survey_4s->survey_4s_no_43 = $request->survey_4s_no_43;
        $survey_4s->survey_4s_no_43_note = $request->survey_4s_no_43_note;

        $survey_4s->survey_4s_no_44 = $request->survey_4s_no_44;
        $survey_4s->survey_4s_no_44_note = $request->survey_4s_no_44_note;

      


        





        $survey_4s->survey_4s_user  = Auth::user()->id;
        $survey_4s->survey_4s_districts_id  =Auth::user()->districts_id ;



        $survey_4s->save();

         return back()->withsuccess(__('บันทึกแบบสำรวจชุดที่  4  สำหรับโรงเรียนสำเร็จ.'));

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
