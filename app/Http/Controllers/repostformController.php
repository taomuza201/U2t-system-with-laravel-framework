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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class repostformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form1 = Form1::join('districts', 'form1s.form1s_districts_id', '=', 'districts.districts_id')->select('districts.districts_name', 'districts.districts_id', 'form1s_districts_id', DB::raw('count(*) as total'))->groupBy('form1s_districts_id')->orderBy('total', 'desc')->get();

        $form2 = Form2::join('districts', 'form2s.form2s_districts_id', '=', 'districts.districts_id')->select('districts.districts_name', 'districts.districts_id', 'form2s_districts_id', DB::raw('count(*) as total'))->groupBy('form2s_districts_id')->orderBy('total', 'desc')->get();

        $form3 = Form3::join('districts', 'form3s.form3s_districts_id', '=', 'districts.districts_id')->select('districts.districts_name', 'districts.districts_id', 'form3s_districts_id', DB::raw('count(*) as total'))->groupBy('form3s_districts_id')->orderBy('total', 'desc')->get();

        $form4 = Form4::join('districts', 'form4s.form4s_districts_id', '=', 'districts.districts_id')->select('districts.districts_name', 'districts.districts_id', 'form4s_districts_id', DB::raw('count(*) as total'))->groupBy('form4s_districts_id')->orderBy('total', 'desc')->get();

        $form5 = Form5::join('districts', 'form5s.form5s_districts_id', '=', 'districts.districts_id')->select('districts.districts_name', 'districts.districts_id', 'form5s_districts_id', DB::raw('count(*) as total'))->groupBy('form5s_districts_id')->orderBy('total', 'desc')->get();

        $form6 = Form6::join('districts', 'form6s.form6s_districts_id', '=', 'districts.districts_id')->select('districts.districts_name', 'districts.districts_id', 'form6s_districts_id', DB::raw('count(*) as total'))->groupBy('form6s_districts_id')->orderBy('total', 'desc')->get();

        $form7 = Form7::join('districts', 'form7s.form7s_districts_id', '=', 'districts.districts_id')->select('districts.districts_name', 'districts.districts_id', 'form7s_districts_id', DB::raw('count(*) as total'))->groupBy('form7s_districts_id')->orderBy('total', 'desc')->get();

        $form8 = Form8::join('districts', 'form8s.form8s_districts_id', '=', 'districts.districts_id')->select('districts.districts_name', 'districts.districts_id', 'form8s_districts_id', DB::raw('count(*) as total'))->groupBy('form8s_districts_id')->orderBy('total', 'desc')->get();

        $form9 = Form9::join('districts', 'form9s.form9s_districts_id', '=', 'districts.districts_id')->select('districts.districts_name', 'districts.districts_id', 'form9s_districts_id', DB::raw('count(*) as total'))->groupBy('form9s_districts_id')->orderBy('total', 'desc')->get();

        $form10 = Form10::join('districts', 'form10s.form10s_districts_id', '=', 'districts.districts_id')->select('districts.districts_name', 'districts.districts_id', 'form10s_districts_id', DB::raw('count(*) as total'))->groupBy('form10s_districts_id')->orderBy('total', 'desc')->get();

        $form11 = Form11::join('districts', 'form11s.form11s_districts_id', '=', 'districts.districts_id')->select('districts.districts_name', 'districts.districts_id', 'form11s_districts_id', DB::raw('count(*) as total'))->groupBy('form11s_districts_id')->orderBy('total', 'desc')->get();

        $form12 = Form12::join('districts', 'form12s.form12s_districts_id', '=', 'districts.districts_id')->select('districts.districts_name', 'districts.districts_id', 'form12s_districts_id', DB::raw('count(*) as total'))->groupBy('form12s_districts_id')->orderBy('total', 'desc')->get();

        $form13 = Form13::join('districts', 'form13s.form13s_districts_id', '=', 'districts.districts_id')->select('districts.districts_name', 'districts.districts_id', 'form13s_districts_id', DB::raw('count(*) as total'))->groupBy('form13s_districts_id')->orderBy('total', 'desc')->get();

        $form14 = Form14::join('districts', 'form14s.form14s_districts_id', '=', 'districts.districts_id')->select('districts.districts_name', 'districts.districts_id', 'form14s_districts_id', DB::raw('count(*) as total'))->groupBy('form14s_districts_id')->orderBy('total', 'desc')->get();

        return view('repostform.index', compact('form1', 'form2', 'form3', 'form4', 'form5', 'form6', 'form7', 'form8', 'form9', 'form10', 'form11', 'form12', 'form13', 'form14'));
    }

    public function districts($districts, $queryform)
    {

        $districts_form_name = District::find($districts);
        switch ($queryform) {
            case 'form1':
                $form = Form1::join('districts', 'form1s.form1s_districts_id', '=', 'districts.districts_id')
                    ->join('users', 'form1s.form1s_user', '=', 'users.id')
                    ->select('districts.districts_name', 'form1s_user', 'users.*', DB::raw('count(*) as total'))
                    ->where('form1s.form1s_districts_id', $districts)
                    ->groupBy('form1s_user')
                    ->orderBy('total', 'desc')->get();


                    $form_name = 'จัดทำรายงานสถานภาพตำบล (Tambon profile) '.$districts_form_name->districts_name ;
                break;
            case 'form2':
                $form = Form2::join('districts', 'form2s.form2s_districts_id', '=', 'districts.districts_id')
                    ->join('users', 'form2s.form2s_user', '=', 'users.id')
                    ->select('districts.districts_name', 'form2s_user', 'users.*', DB::raw('count(*) as total'))
                    ->where('form2s.form2s_districts_id', $districts)
                    ->groupBy('form2s_user')
                    ->orderBy('total', 'desc')->get();

                    $form_name = 'รวบรวม สำรวจ จัดเก็บข้อมูลด้านทรัพยากรมนุษย์ เชิงลึกของตำบล '.$districts_form_name->districts_name ;
                break;
            case 'form3':
                $form = Form3::join('districts', 'form3s.form3s_districts_id', '=', 'districts.districts_id')
                    ->join('users', 'form3s.form3s_user', '=', 'users.id')
                    ->select('districts.districts_name', 'form3s_user', 'users.*', DB::raw('count(*) as total'))
                    ->where('form3s.form3s_districts_id', $districts)
                    ->groupBy('form3s_user')
                    ->orderBy('total', 'desc')->get();

                    $form_name = 'ข้อมูลสถานการณ์โรคระบาด ทั้งในระกับท้องถิ่น จังหวัด ภาค ประเทศ และนานาชาติ '.$districts_form_name->districts_name ;
                break;
            case 'form4':
                $form = Form4::join('districts', 'form4s.form4s_districts_id', '=', 'districts.districts_id')
                    ->join('users', 'form4s.form4s_user', '=', 'users.id')
                    ->select('districts.districts_name', 'form4s_user', 'users.*', DB::raw('count(*) as total'))
                    ->where('form4s.form4s_districts_id', $districts)
                    ->groupBy('form4s_user')
                    ->orderBy('total', 'desc')->get();

                    $form_name = 'ความรู้ด้านการจัดการโรคระบาดที่เกี่ยวข้อง '.$districts_form_name->districts_name ;
                break;
            case 'form5':
                $form = Form5::join('districts', 'form5s.form5s_districts_id', '=', 'districts.districts_id')
                    ->join('users', 'form5s.form5s_user', '=', 'users.id')
                    ->select('districts.districts_name', 'form5s_user', 'users.*', DB::raw('count(*) as total'))
                    ->where('form5s.form5s_districts_id', $districts)
                    ->groupBy('form5s_user')
                    ->orderBy('total', 'desc')->get();

                    $form_name = 'การแลกเปลี่ยนเรียนรู้ที่เกี่ยวข้องกับงานด้านสุขภาพ หรือโรคระบาดต่างๆ '.$districts_form_name->districts_name ;
                break;
            case 'form6':
                $form = Form6::join('districts', 'form6s.form6s_districts_id', '=', 'districts.districts_id')
                    ->join('users', 'form6s.form6s_user', '=', 'users.id')
                    ->select('districts.districts_name', 'form6s_user', 'users.*', DB::raw('count(*) as total'))
                    ->where('form6s.form6s_districts_id', $districts)
                    ->groupBy('form6s_user')
                    ->orderBy('total', 'desc')->get();

                    $form_name = 'ต้นแบบหน่วยงานภายใน ในการจัดการข้อมูลให้อยู่ในรูปแบบข้อมูลอิเลคทรอนิกส์ '.$districts_form_name->districts_name ;
                break;
            case 'form7':
                $form = Form7::join('districts', 'form7s.form7s_districts_id', '=', 'districts.districts_id')
                    ->join('users', 'form7s.form7s_user', '=', 'users.id')
                    ->select('districts.districts_name', 'form7s_user', 'users.*', DB::raw('count(*) as total'))
                    ->where('form7s.form7s_districts_id', $districts)
                    ->groupBy('form7s_user')
                    ->orderBy('total', 'desc')->get();

                    $form_name = 'ประชาสัมพันธ์การดำเนินงานโครงการ/กิจกรรมยกระดับศักยภาพตำบล '.$districts_form_name->districts_name ;
                break;
            case 'form8':
                $form = Form8::join('districts', 'form8s.form8s_districts_id', '=', 'districts.districts_id')
                    ->join('users', 'form8s.form8s_user', '=', 'users.id')
                    ->select('districts.districts_name', 'form8s_user', 'users.*', DB::raw('count(*) as total'))
                    ->where('form8s.form8s_districts_id', $districts)
                    ->groupBy('form8s_user')
                    ->orderBy('total', 'desc')->get();

                    $form_name = 'สำรวจ และจัดเก็บข้อมูลเชิงลึกด้านศักยภาพของกลุ่มเป้าหมาย/วิสาหกิจที่เข้าร่วมโครงการ '.$districts_form_name->districts_name ;
                break;
            case 'form9':
                $form = Form9::join('districts', 'form9s.form9s_districts_id', '=', 'districts.districts_id')
                    ->join('users', 'form9s.form9s_user', '=', 'users.id')
                    ->select('districts.districts_name', 'form9s_user', 'users.*', DB::raw('count(*) as total'))
                    ->where('form9s.form9s_districts_id', $districts)
                    ->groupBy('form9s_user')
                    ->orderBy('total', 'desc')->get();

                    $form_name = 'แนวทางการจัดการเรียนรู้ที่มีประสิทธิภาพ สอดคล้องกับธรรมชาติการเรียนรู้และบริบทของชุมชน '.$districts_form_name->districts_name ;
                break;
            case 'form10':
                $form = Form10::join('districts', 'form10s.form10s_districts_id', '=', 'districts.districts_id')
                    ->join('users', 'form10s.form10s_user', '=', 'users.id')
                    ->select('districts.districts_name', 'form10s_user', 'users.*', DB::raw('count(*) as total'))
                    ->where('form10s.form10s_districts_id', $districts)
                    ->groupBy('form10s_user')
                    ->orderBy('total', 'desc')->get();

                    $form_name = 'ศึกษาสภาพแว้ดล้อมทรัพยากรในตำบลเพื่อเป็นข้อมูลตัดสินใจการพัฒนาอาชีพใหม่ในชุมชน '.$districts_form_name->districts_name ;
                break;
            case 'form11':
                $form = Form11::join('districts', 'form11s.form11s_districts_id', '=', 'districts.districts_id')
                    ->join('users', 'form11s.form11s_user', '=', 'users.id')
                    ->select('districts.districts_name', 'form11s_user', 'users.*', DB::raw('count(*) as total'))
                    ->where('form11s.form11s_districts_id', $districts)
                    ->groupBy('form11s_user')
                    ->orderBy('total', 'desc')->get();

                    $form_name = 'แนวทางการพัฒนาอาชีพใหม่ ในกรอบการพัฒนานาของประเทศ และนานาชาติ '.$districts_form_name->districts_name ;
                break;
            case 'form12':
                $form = Form12::join('districts', 'form12s.form12s_districts_id', '=', 'districts.districts_id')
                    ->join('users', 'form12s.form12s_user', '=', 'users.id')
                    ->select('districts.districts_name', 'form12s_user', 'users.*', DB::raw('count(*) as total'))
                    ->where('form12s.form12s_districts_id', $districts)
                    ->groupBy('form12s_user')
                    ->orderBy('total', 'desc')->get();
                    $form_name = 'ความรู้ที่จำเป็นในการถ่ายทอดเทคโนโลยีที่สอดคล้องกับธรรมชาติการเรียนรู้ ศักยภาพ และความต้องการของชุมชน '.$districts_form_name->districts_name ;
                break;
            case 'form13':
                $form = Form13::join('districts', 'form13s.form13s_districts_id', '=', 'districts.districts_id')
                    ->join('users', 'form13s.form13s_user', '=', 'users.id')
                    ->select('districts.districts_name', 'form13s_user', 'users.*', DB::raw('count(*) as total'))
                    ->where('form13s.form13s_districts_id', $districts)
                    ->groupBy('form13s_user')
                    ->orderBy('total', 'desc')->get();
                    $form_name = 'กระบวนการการแลกเปลี่ยนเรียนรู้ในชุมชน '.$districts_form_name->districts_name ;
                break;
            case 'form14':
                $form = Form14::join('districts', 'form14s.form14s_districts_id', '=', 'districts.districts_id')
                    ->join('users', 'form14s.form14s_user', '=', 'users.id')
                    ->select('districts.districts_name', 'form14s_user', 'users.*', DB::raw('count(*) as total'))
                    ->where('form14s.form14s_districts_id', $districts)
                    ->groupBy('form14s_user')
                    ->orderBy('total', 'desc')->get();
                    $form_name = 'ประชาสัมพันธ์/สร้างความเข้าใจกับชุมชน ในกระบวนการด้านการถ่ายทอดความรู้ '.$districts_form_name->districts_name ;
                break;

        }

        // return $form;
        return view('repostform.details',compact('form','form_name'));
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
