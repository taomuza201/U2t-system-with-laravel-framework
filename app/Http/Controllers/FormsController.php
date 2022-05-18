<?php

namespace App\Http\Controllers;

use App\District;
use App\Form1;
use App\Form2;
use App\Form3;
use App\Form4;
use App\Form5;
use App\Form6;
use App\Form7;
use App\Form8;
use App\Form9;
use App\Form10;
use App\Form11;
use App\Form12;
use App\Form13;
use App\Form14;
use App\Village;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forms.index');
    }

    public function forms_admin()
    {
        return view('forms-admin.index');
    }

    public function villages($id)
    {
        $villages = Village::where('villages_districts_id', $id)->get();

        return view('forms-admin.villages', compact('villages'))->render();
    }
    public function forms1()
    {
        $form = Form1::select('*', 'form1s.created_at')->join('districts', 'form1s.form1s_districts_id', '=', 'districts.districts_id')
            ->join('users', 'form1s.form1s_user', '=', 'users.id')
            ->get();
        $districts = District::get();
        return view('forms-admin.1.index', compact('form', 'districts'));
    }

    public function forms2()
    {
        $form = Form2::select('*', 'form2s.created_at')->join('districts', 'form2s.form2s_districts_id', '=', 'districts.districts_id')
            ->join('villages', 'form2s.form2s_villages_id', '=', 'villages.villages_id')
            ->join('users', 'form2s.form2s_user', '=', 'users.id')->get();
        $districts = District::get();
        $villages = Village::get();
        return view('forms-admin.2.index', compact('form', 'districts', 'villages'));
    }
    public function forms3()
    {
        $form = Form3::select('*', 'form3s.created_at')->join('districts', 'form3s.form3s_districts_id', '=', 'districts.districts_id')
            ->join('users', 'form3s.form3s_user', '=', 'users.id')
            ->get();
        $districts = District::get();
        return view('forms-admin.3.index', compact('form', 'districts'));
    }
    public function forms4()
    {
        $form = Form4::select('*', 'form4s.created_at')->join('districts', 'form4s.form4s_districts_id', '=', 'districts.districts_id')->get();
        $districts = District::get();
        return view('forms-admin.4.index', compact('form', 'districts'));
    }

    public function forms4_report($id)
    {

        if ($id == 'all') {
            $form = Form4::select('*', 'form4s.created_at')->join('districts', 'form4s.form4s_districts_id', '=', 'districts.districts_id')->get();
            $districts_name = 'ทั้งหมด';
        } else {
            $form = Form4::select('*', 'form4s.created_at')->join('districts', 'form4s.form4s_districts_id', '=', 'districts.districts_id')->where('form4s_districts_id', $id)->get();
            $districts = District::find($id);
            $districts_name = $districts->districts_name;
        }

        $headers = array(

            "Content-type" => "text/html",

            "Content-Disposition" => "attachment;Filename=ฟอร์มที่ 4 " . $districts_name . ".doc",

        );

        $content = '<html>
            <head><meta charset="utf-8"></head>
            <style>
            *{
             font-size: 16px;
            }
            p{
             font-size: 16px;
            }
            </style>
            <body>';

        foreach ($form as $row) {
            $content .= '<center><h1>ชื่อเรื่อง ' . $row->form4s_title . '</h1></center>';
            $content .= '<center><h2>แหล่งอ้างอิง  ' . $row->form4s_refer . '</h2></center>';
            $new = str_replace("../../uploads_image/", "http://www.system.octuslog.org/uploads_image/", $row->form4s_details);
            $content .= '<p  style="font-size: 16px"> ' . $new . '</p>';
            $content .= '<br style="page-break-before: always">';
        }

        $content .= '</body>
            </html>';

        return \Response::make($content, 200, $headers);

    }
    public function forms5()
    {
        $form = Form5::select('*', 'form5s.created_at')->join('districts', 'form5s.form5s_districts_id', '=', 'districts.districts_id')->get();
        $districts = District::get();
        return view('forms-admin.5.index', compact('form', 'districts'));
    }
    public function forms5_report($id)
    {

        if ($id == 'all') {
            $form = Form5::select('*', 'form5s.created_at')->join('districts', 'form5s.form5s_districts_id', '=', 'districts.districts_id')->get();
            $districts_name = 'ทั้งหมด';
        } else {
            $form = Form5::select('*', 'form5s.created_at')->join('districts', 'form5s.form5s_districts_id', '=', 'districts.districts_id')->where('form5s_districts_id', $id)->get();
            $districts = District::find($id);
            $districts_name = $districts->districts_name;
        }

        $headers = array(

            "Content-type" => "text/html",

            "Content-Disposition" => "attachment;Filename=ฟอร์มที่ 5 " . $districts_name . ".doc",

        );

        $content = '<html>
            <head><meta charset="utf-8"></head>
            <style>
            *{
             font-size: 16px;
            }
            p{
             font-size: 16px;
            }
            </style>
            <body>';

        foreach ($form as $row) {
            $content .= '<center><h1>ชื่อเรื่อง ' . $row->form5s_title . '</h1></center>';
            $content .= '<center><h2>ผู้ให้ความคิดเห็น	  ' . $row->form5s_commentator . '</h2></center>';
            $new = str_replace("../../uploads_image/", "http://www.system.octuslog.org/uploads_image/", $row->form5s_details);
            $content .= '<p> ' . $new . '</p>';

            $content .= '<br style="page-break-before: always">';
        }

        $content .= '</body>
            </html>';

        return \Response::make($content, 200, $headers);

    }
    public function forms6()
    {
        $form = Form6::select('*', 'form6s.created_at')->join('districts', 'form6s.form6s_districts_id', '=', 'districts.districts_id')->get();
        $districts = District::get();
        return view('forms-admin.6.index', compact('form', 'districts'));
    }
    public function forms6_report($id)
    {

        if ($id == 'all') {
            $form = Form6::select('*', 'form6s.created_at')->join('districts', 'form6s.form6s_districts_id', '=', 'districts.districts_id')->get();
            $districts_name = 'ทั้งหมด';
        } else {
            $form = Form6::select('*', 'form6s.created_at')->join('districts', 'form6s.form6s_districts_id', '=', 'districts.districts_id')->where('form6s_districts_id', $id)->get();
            $districts = District::find($id);
            $districts_name = $districts->districts_name;
        }

        $headers = array(

            "Content-type" => "text/html",

            "Content-Disposition" => "attachment;Filename=ฟอร์มที่ 6 " . $districts_name . ".doc",

        );

        $content = '<html>
            <head><meta charset="utf-8"></head>
            <body>';

        foreach ($form as $row) {
            $content .= '<center><h1>หน่วยงาน ' . $row->form6s_agency . '</h1></center>';
            $content .= '<center><h2>งาน	  ' . $row->form6s_work . '</h2></center>';
            $newstring = substr($row->form6s_file, -3);
            if ($newstring != 'pdf') {
                $content .= '<img src="http://www.system.octuslog.org/uploads_image/' . $row->form6s_file . '" width="auto" height="auto" > ';

            } else {
                $content .= '<a  href="http://www.system.octuslog.org/uploads_image/' . $row->form6s_file . '"> ' . $row->form6s_file . '</a>';

            }

            $content .= '<br style="page-break-before: always">';
        }

        $content .= '</body>
            </html>';

        return \Response::make($content, 200, $headers);

    }
    public function forms7()
    {
        $form = Form7::select('*', 'form7s.created_at')->join('districts', 'form7s.form7s_districts_id', '=', 'districts.districts_id')->get();
        $districts = District::get();
        return view('forms-admin.7.index', compact('form', 'districts'));
    }
    public function forms7_report($id)
    {

        if ($id == 'all') {
            $form = Form7::select('*', 'form7s.created_at')->join('districts', 'form7s.form7s_districts_id', '=', 'districts.districts_id')->get();
            $districts_name = 'ทั้งหมด';
        } else {
            $form = Form7::select('*', 'form7s.created_at')->join('districts', 'form7s.form7s_districts_id', '=', 'districts.districts_id')->where('form7s_districts_id', $id)->get();
            $districts = District::find($id);
            $districts_name = $districts->districts_name;
        }

        $headers = array(

            "Content-type" => "text/html",

            "Content-Disposition" => "attachment;Filename=ฟอร์มที่ 7 " . $districts_name . ".doc",

        );

        $content = '<html>
            <head><meta charset="utf-8"></head>
            <style>
            *{
             font-size: 16px;
            }
            p{
             font-size: 16px;
            }
            </style>
            <body>';

        foreach ($form as $row) {
            $content .= '<center><h1>ชื่อโครงการ/กิจกรรม	 ' . $row->form7s_title . '</h1></center>';
            $new = str_replace("../../uploads_image/", "http://www.system.octuslog.org/uploads_image/", $row->form7s_details);
            $content .= '<p  style="font-size: 16px"> ' . $new . '</p>';

            $content .= '<br style="page-break-before: always">';
        }

        $content .= '</body>
            </html>';

        return \Response::make($content, 200, $headers);

    }
    public function forms8()
    {
        $form = Form8::select('*', 'form8s.created_at')->join('districts', 'form8s.form8s_districts_id', '=', 'districts.districts_id')
            ->join('villages', 'form8s.form8s_villages_id', '=', 'villages.villages_id')
            ->join('users', 'form8s.form8s_user', '=', 'users.id')
            ->get();
        $districts = District::get();
        $villages = Village::get();
        return view('forms-admin.8.index', compact('form', 'districts', 'villages'));
    }
    public function forms9()
    {
        $form = Form9::select('*', 'form9s.created_at')->join('districts', 'form9s.form9s_districts_id', '=', 'districts.districts_id')->get();
        $districts = District::get();
        return view('forms-admin.9.index', compact('form', 'districts'));
    }
    public function forms9_report($id)
    {

        if ($id == 'all') {
            $form = Form9::select('*', 'form9s.created_at')->join('districts', 'form9s.form9s_districts_id', '=', 'districts.districts_id')->get();
            $districts_name = 'ทั้งหมด';
        } else {
            $form = Form9::select('*', 'form9s.created_at')->join('districts', 'form9s.form9s_districts_id', '=', 'districts.districts_id')->where('form9s_districts_id', $id)->get();
            $districts = District::find($id);
            $districts_name = $districts->districts_name;
        }

        $headers = array(

            "Content-type" => "text/html",

            "Content-Disposition" => "attachment;Filename=ฟอร์มที่ 9 " . $districts_name . ".doc",

        );

        $content = '<html>
            <head><meta charset="utf-8"></head>
            <style>
            *{
             font-size: 16px;
            }
            p{
             font-size: 16px;
            }
            </style>
            <body>';

        foreach ($form as $row) {
            $content .= '<center><h1>ชื่อเรื่อง	 ' . $row->form9s_title . '</h1></center>';
            $content .= '<center><h2>อ้างอิง ' . $row->form9s_refer . '</h2></center>';
            $new = str_replace("../../uploads_image/", "http://www.system.octuslog.org/uploads_image/", $row->form9s_details);
            $content .= '<p  style="font-size: 16px"> ' . $new . '</p>';

            $content .= '<br style="page-break-before: always">';
        }

        $content .= '</body>
            </html>';

        return \Response::make($content, 200, $headers);

    }
    public function forms10()
    {
        $form = Form10::select('*', 'form10s.created_at')->join('districts', 'form10s.form10s_districts_id', '=', 'districts.districts_id')
            ->join('villages', 'form10s.form10s_villages_id', '=', 'villages.villages_id')
            ->join('users', 'form10s.form10s_user', '=', 'users.id')
            ->get();
        $districts = District::get();
        $villages = Village::get();
        return view('forms-admin.10.index', compact('form', 'districts', 'villages'));
    }
    public function forms11()
    {
        $form = Form11::select('*', 'form11s.created_at')->join('districts', 'form11s.form11s_districts_id', '=', 'districts.districts_id')->get();
        $districts = District::get();
        return view('forms-admin.11.index', compact('form', 'districts'));
    }
    public function forms11_report($id)
    {

        if ($id == 'all') {
            $form = Form11::select('*', 'form11s.created_at')->join('districts', 'form11s.form11s_districts_id', '=', 'districts.districts_id')->get();
            $districts_name = 'ทั้งหมด';
        } else {
            $form = Form11::select('*', 'form11s.created_at')->join('districts', 'form11s.form11s_districts_id', '=', 'districts.districts_id')->where('form11s_districts_id', $id)->get();
            $districts = District::find($id);
            $districts_name = $districts->districts_name;
        }

        $headers = array(

            "Content-type" => "text/html",

            "Content-Disposition" => "attachment;Filename=ฟอร์มที่ 11 " . $districts_name . ".doc",

        );

        $content = '<html>
            <head><meta charset="utf-8"></head>
            <style>
            *{
             font-size: 16px;
            }
            p{
             font-size: 16px;
            }
            </style>
            <body>';

        foreach ($form as $row) {
            $content .= '<center><h1>ชื่อเรื่อง	 ' . $row->form11s_title . '</h1></center>';
            $content .= '<center><h2>อ้างอิง ' . $row->form11s_refer . '</h2></center>';
            $new = str_replace("../../uploads_image/", "http://www.system.octuslog.org/uploads_image/", $row->form11s_details);
            $content .= '<p  style="font-size: 16px"> ' . $new . '</p>';

            $content .= '<br style="page-break-before: always">';
        }

        $content .= '</body>
            </html>';

        return \Response::make($content, 200, $headers);

    }
    public function forms12()
    {
        $form = Form12::select('*', 'form12s.created_at')->join('districts', 'form12s.form12s_districts_id', '=', 'districts.districts_id')->get();
        $districts = District::get();
        return view('forms-admin.12.index', compact('form', 'districts'));
    }
    public function forms12_report($id)
    {

        if ($id == 'all') {
            $form = Form12::select('*', 'form12s.created_at')->join('districts', 'form12s.form12s_districts_id', '=', 'districts.districts_id')->get();
            $districts_name = 'ทั้งหมด';
        } else {
            $form = Form12::select('*', 'form12s.created_at')->join('districts', 'form12s.form12s_districts_id', '=', 'districts.districts_id')->where('form12s_districts_id', $id)->get();
            $districts = District::find($id);
            $districts_name = $districts->districts_name;
        }

        $headers = array(

            "Content-type" => "text/html",

            "Content-Disposition" => "attachment;Filename=ฟอร์มที่ 12 " . $districts_name . ".doc",

        );

        $content = '<html>
            <head><meta charset="utf-8"></head>
            <style>
            *{
             font-size: 16px;
            }
            p{
             font-size: 16px;
            }
            </style>
            <body>';

        foreach ($form as $row) {
            $content .= '<center><h1>	ความต้องการของชุมชน		 ' . $row->form12s_title . '</h1></center>';
            $content .= '<center><h2>อ้างอิง ' . $row->form12s_refer . '</h2></center>';
            $content .= '<center><h2>	รายละเอียด	</h2></center>';
            $new = str_replace("../../uploads_image/", "http://www.system.octuslog.org/uploads_image/", $row->form12s_details);
            $content .= '<p  style="font-size: 16px"> ' . $new . '</p>';
            $content .= '<center><h2>	สื่อ/เครื่องมือในการจัดการเรียนรู้	</h2></center>';
            $form12s_learning_tools = str_replace("../../uploads_image/", "http://www.system.octuslog.org/uploads_image/", $row->form12s_learning_tools);
            $content .= '<p  style="font-size: 16px"> ' . $form12s_learning_tools . '</p>';

            $content .= '<br style="page-break-before: always">';
        }

        $content .= '</body>
            </html>';

        return \Response::make($content, 200, $headers);

    }

    public function forms13()
    {
        $form = Form13::select('*', 'form13s.created_at')->join('districts', 'form13s.form13s_districts_id', '=', 'districts.districts_id')->get();
        $districts = District::get();
        return view('forms-admin.13.index', compact('form', 'districts'));
    }
    public function forms13_report($id)
    {

        if ($id == 'all') {
            $form = Form13::select('*', 'form13s.created_at')->join('districts', 'form13s.form13s_districts_id', '=', 'districts.districts_id')->get();
            $districts_name = 'ทั้งหมด';
        } else {
            $form = Form13::select('*', 'form13s.created_at')->join('districts', 'form13s.form13s_districts_id', '=', 'districts.districts_id')->where('form13s_districts_id', $id)->get();
            $districts = District::find($id);
            $districts_name = $districts->districts_name;
        }

        $headers = array(

            "Content-type" => "text/html",

            "Content-Disposition" => "attachment;Filename=ฟอร์มที่ 13 " . $districts_name . ".doc",

        );

        $content = '<html>
            <head><meta charset="utf-8"></head>
            <style>
            *{
             font-size: 16px;
            }
            p{
             font-size: 16px;
            }
            </style>
            <body>';

        foreach ($form as $row) {
            $content .= '<center><h1>	ชื่อเรื่อง ' . $row->form13s_title . '</h1></center>';
            $content .= '<center><h2>ผู้ที่เกี่ยวข้อง ' . $row->form13s_commentator . '</h2></center>';
            $content .= '<center><h2>	รายละเอียด	</h2></center>';
            $new = str_replace("../../uploads_image/", "http://www.system.octuslog.org/uploads_image/", $row->form13s_details);
            $content .= '<p  style="font-size: 16px"> ' . $new . '</p>';
            $content .= '<br style="page-break-before: always">';
        }

        $content .= '</body>
            </html>';

        return \Response::make($content, 200, $headers);
    }
    public function forms14()
    {
        $form = Form14::select('*', 'form14s.created_at')->join('districts', 'form14s.form14s_districts_id', '=', 'districts.districts_id')->get();
        $districts = District::get();
        return view('forms-admin.14.index', compact('form', 'districts'));
    }

    public function forms14_report($id)
    {

        if ($id == 'all') {
            $form = Form14::select('*', 'form14s.created_at')->join('districts', 'form14s.form14s_districts_id', '=', 'districts.districts_id')->get();
            $districts_name = 'ทั้งหมด';
        } else {
            $form = Form14::select('*', 'form14s.created_at')->join('districts', 'form14s.form14s_districts_id', '=', 'districts.districts_id')->where('form14s_districts_id', $id)->get();
            $districts = District::find($id);
            $districts_name = $districts->districts_name;
        }

        $headers = array(

            "Content-type" => "text/html",

            "Content-Disposition" => "attachment;Filename=ฟอร์มที่ 14 " . $districts_name . ".doc",

        );

        $content = '<html>
            <head><meta charset="utf-8"></head>
            <style>
            *{
             font-size: 16px;
            }
            p{
             font-size: 16px;
            }
            </style>
            <body>';

        foreach ($form as $row) {
            $content .= '<center><h1>	ชื่อเรื่อง ' . $row->form14s_title . '</h1></center>';
            $content .= '<center><h2>	รายละเอียด	</h2></center>';
            $new = str_replace("../../uploads_image/", "http://www.system.octuslog.org/uploads_image/", $row->form14s_details);
            $content .= '<p  style="font-size: 16px"> ' . $new . '</p>';
            $content .= '<br style="page-break-before: always">';
        }

        $content .= '</body>
            </html>';

        return \Response::make($content, 200, $headers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function upload(Request $request)
    {
        $fileName = time() . '.' . $request->file('file')->extension();
        $request->file('file')->move(public_path('uploads_image'), $fileName);
        $url = "../uploads_image/" . $fileName;
        return response()->json(['location' => $url]);
    }

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
