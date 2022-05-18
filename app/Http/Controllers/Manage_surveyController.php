<?php

namespace App\Http\Controllers;

use App\District;
use App\Survey_1;
use App\Survey_2;
use App\Survey_3;
use App\Survey_4;
use Illuminate\Http\Request;

use App\Exports\SurveyViewExport;
use Maatwebsite\Excel\Facades\Excel;

class Manage_surveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('survey.manage.index');
    }
    

    public function export($districts,$survey)
    {
      
        if($districts=='all'){
            $name  = 'ทั้งหมด';
        }else{
            $data= District::where('districts_id',$districts)->first();
            $name  = $data->districts_name ;
        }

        if($survey == 'survey_1s'){
                $survey_name = 'แบบสำรวจชุดที่ 1 สำหรับที่พักอาศัย';
        }else if($survey == 'survey_2s'){
            $survey_name = 'แบบสำรวจชุดที่ 2 สำหรับตลาด';
        }else if($survey == 'survey_3s'){
            $survey_name = 'แบบสำรวจชุดที่ 3 สำหรับศาสนสถาน';
        }else if($survey == 'survey_4s'){
            $survey_name = 'แบบสำรวจชุดที่ 4 สำหรับโรงเรียน';
        }
        

        return Excel::download(new SurveyViewExport($districts,$survey), 'ข้อมูลแบบสอบถามโควิด-'.$name.'-'.$survey_name.'.xlsx');
    }
    
    public function survey_1s()
    {
        $survey_1s= Survey_1::select('*')->join('districts', 'survey_1s.survey_1s_districts_id', '=', 'districts.districts_id')
        ->join('users', 'survey_1s.survey_1s_user', '=', 'users.id')
        ->get();
        $districts = District::get();
        return view('survey.manage.survey_1s.index',compact('survey_1s','districts'));
    }

    public function survey_1s_detail($id)
    {
        // $survey_1s= Survey_1::where('survey_1s_id',$id)->first();
        // return view('survey.manage.survey_1s.index',compact('survey_1s'));
    }
    public function survey_2s()
    {
        $survey_2s= Survey_2::select('*')->join('districts', 'survey_2s.survey_2s_districts_id', '=', 'districts.districts_id')
        ->join('users', 'survey_2s.survey_2s_user', '=', 'users.id')
        ->get();
        $districts = District::get();
        return view('survey.manage.survey_2s.index',compact('survey_2s','districts'));
    }
    public function survey_3s()
    {
        $survey_3s= Survey_3::select('*')->join('districts', 'survey_3s.survey_3s_districts_id', '=', 'districts.districts_id')
        ->join('users', 'survey_3s.survey_3s_user', '=', 'users.id')
        ->get();
        $districts = District::get();
        return view('survey.manage.survey_3s.index',compact('survey_3s','districts'));
    }
    public function survey_4s()
    {
        $survey_4s= Survey_4::select('*')->join('districts', 'survey_4s.survey_4s_districts_id', '=', 'districts.districts_id')
        ->join('users', 'survey_4s.survey_4s_user', '=', 'users.id')
        ->get();
        $districts = District::get();
        return view('survey.manage.survey_4s.index',compact('survey_4s','districts'));
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
