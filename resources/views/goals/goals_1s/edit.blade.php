@extends('layouts.template', ['title' => __('เป้าหมายที่ 1 อปท.และองค์กรชุมชนมีสมรรถนะจัดการสูง')])

@section('content')
@include('goals.goals_1s.header', [
'title' => __('เป้าหมายที่ 1 อปท.และองค์กรชุมชนมีสมรรถนะจัดการสูง') ,
])


<style>
    .dataTables_filter {
        display: none;
    }

    .label_float {
        margin-top: 10px;
        /* float: left; */
    }

    span {
        display: block;
        overflow: hidden;
        padding: 0px 4px 0px 6px;
    }

    .border_top {
        border-top-style: solid;
    }

    .border_bottom {
        border-bottom-style: solid;
    }

</style>
<div class="container-fluid mt--7">

    <form action="{{$goals_1s->goals_1s_id}}/update" method="post" enctype="multipart/form-data" id="myForm">
        @csrf

        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row">
                            <div class="col-12">
                                @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-12 col-md-7">
                                <div class="custom-control custom-radio">
                                    <label class="label_float"> ชื่อผู้ให้ข้อมูล : </label>
                                    <span>
                                        <input type="text" class="form-control" id="goals_1s_at_name"
                                            name="goals_1s_at_name" placeholder="ชื่อผู้ใช้ข้อมูล" required autofocus>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-12 col-md-7">
                                <div class="custom-control custom-radio">
                                    <label class="label_float"> สถานที่สอบถามข้อมูล : </label>
                                    <span>
                                        <input type="text" class="form-control" id="goals_1s_address"
                                            name="goals_1s_address" placeholder="สถานที่สอบถามข้อมูล" required
                                            autofocus> </span>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-12 col-md-7">
                                <div class="custom-control custom-radio">
                                    <label class="label_float"> ปัญหา/อุปสรรค์ : </label>
                                    <span>
                                        <textarea type="text" class="form-control" id="goals_1s_problem" rows="3"
                                            name="goals_1s_problem" placeholder="ปัญหา/อุปสรรค์" required autofocus></textarea 
                                    </span>
                                </div>
                            </div>
                        </div>


                    </div>


                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th align="center" scope="col" style="width: 100px;">
                                            <center>ตัวชี้วัด</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="screen" style="white-space: normal; "> 1. การประเมินประสิทธิภาพขององค์กรปกครองส่วนท้องถิ่น (LPA)
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_1s_indicators_1" value="high"  required id="goals_1s_indicators_1">
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_1s_indicators_1" value="standard" required id="goals_1s_indicators_1">
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_1s_indicators_1" value="low" required id="goals_1s_indicators_1">
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_1s_indicators_1" value="none" required id="goals_1s_indicators_1">
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file"  class="form-control "name="goals_1s_indicators_1_refer" id="goals_1s_indicators_1_refer"    />
                                            <div id="goals_1s_indicators_1_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    

                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; "> 2. ครัวเรือนที่มีรายได้ต่ำกว่าเกณฑ์ จปฐ. ลดลง หรือไม่มีเลย
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_1s_indicators_2" value="high"  required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_1s_indicators_2" value="standard" required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_1s_indicators_2" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_1s_indicators_2" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file"  class="form-control "name="goals_1s_indicators_2_refer" id="goals_1s_indicators_2_refer"   />  
                                            <div id="goals_1s_indicators_2_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">3. ตัวชี้วัดความเข้มแข็งของชุมชนท้องถิ่น
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_1s_indicators_3" value="high"  required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_1s_indicators_3" value="standard" required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_1s_indicators_3" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_1s_indicators_3" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file"  class="form-control "name="goals_1s_indicators_3_refer" id="goals_1s_indicators_3_refer"   />
                                            <div id="goals_1s_indicators_3_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>


                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">4. ตัวชี้วัดเมืองอยู่ดีมีสุข
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_1s_indicators_4" value="high"  required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_1s_indicators_4" value="standard" required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_1s_indicators_4" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_1s_indicators_4" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file"  class="form-control "name="goals_1s_indicators_4_refer" id="goals_1s_indicators_4_refer"   />
                                            <div id="goals_1s_indicators_4_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">5. ตัวชี้วัดความสุขสู่ตำบลจัดการตนเอง
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_1s_indicators_5" value="high"  required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_1s_indicators_5" value="standard" required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_1s_indicators_5" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_1s_indicators_5" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file"  class="form-control "name="goals_1s_indicators_5_refer" id="goals_1s_indicators_5_refer"   />
                                            <div id="goals_1s_indicators_5_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>


                                    
                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">6. ครัวเรือนไม่มีที่ทำกิน
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_1s_indicators_6" value="high"  required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_1s_indicators_6" value="standard" required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_1s_indicators_6" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_1s_indicators_6" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file"  class="form-control "name="goals_1s_indicators_6_refer" id="goals_1s_indicators_6_refer"   />
                                            <div id="goals_1s_indicators_6_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>


                                    
                                     
                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">7. ครัวเรือนกลุ่มเปราะบาง
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_1s_indicators_7" value="high"  required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_1s_indicators_7" value="standard" required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_1s_indicators_7" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_1s_indicators_7" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file"  class="form-control "name="goals_1s_indicators_7_refer" id="goals_1s_indicators_7_refer"   />
                                            <div id="goals_1s_indicators_7_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                                  
                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">8. การทำงานร่วมกันของกลุ่มองค์กรชุมชน หน่วยงานในชุมชน ในการจัดทำแผนตำบลโครงการพัฒนาร่วม เป็นต้น
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_1s_indicators_8" value="high"  required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_1s_indicators_8" value="standard" required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_1s_indicators_8" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_1s_indicators_8" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file"  class="form-control "name="goals_1s_indicators_8_refer" id="goals_1s_indicators_8_refer"   />
                                            <div id="goals_1s_indicators_8_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>




                                </tbody>
                                <thead class="thead-light">
                                    <tr>
                                        <th align="center" scope="col" style="width: 100px;">
                                            <center>งานเด่นที่มีการดำเนินการ</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                                           
                                    <tr class="">
                                        <td class="screen" style="white-space: normal; ">1. การจัดทำแผนงานเพื่อช่วยเหลือครอบครัวยากจนที่ผ่านการวิเคราะห์สรุปจากแผนชุมชน หมู่บ้าน สู่แผนพัฒนาท้องถิ่น หรือแผนตำบล
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_1s_operation_1" value="yes"  required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_1s_operation_1" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file"  class="form-control "name="goals_1s_operation_1_refer" id="goals_1s_operation_1_refer"   />
                                            <div id="goals_1s_operation_1_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    

                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">2. การใช้ข้อมูลกลุ่มเป้าหมาย ในการวิเคราะห์ออกแบบการดูแลช่วยเหลือเพื่อการแก้ไขปัญหา
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_1s_operation_2" value="yes"  required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_1s_operation_2" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file"  class="form-control "name="goals_1s_operation_2_refer" id="goals_1s_operation_2_refer"   />
                                            <div id="goals_1s_operation_2_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">3. การกำหนด กติกา ข้อตกลงในการใช้พื้นที่สาธารณะเพื่อแก้ไขปัญหาขาดแคลนที่ทำกิน สำหรับครอบครัวยากจน
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_1s_operation_3" value="yes"  required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_1s_operation_3" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file"  class="form-control "name="goals_1s_operation_3_refer" id="goals_1s_operation_3_refer"   />
                                            <div id="goals_1s_operation_3_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; "> 4. การพัฒนาทักษะอาชีพเสริม เพื่อเพิ่มรายได้ ลดรายจ่าย
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_1s_operation_4" value="yes"  required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_1s_operation_4" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file"  class="form-control "name="goals_1s_operation_4_refer" id="goals_1s_operation_4_refer"   />
                                            <div id="goals_1s_operation_4_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">5. สนับสนุน กองทุน องค์กรการเงินให้มีการจัดการเงินสนับสนุน
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_1s_operation_5" value="yes"  required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_1s_operation_5" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file"  class="form-control "name="goals_1s_operation_5_refer" id="goals_1s_operation_5_refer"   />
                                            <div id="goals_1s_operation_5_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">6. สนับสนุนการจัดบริการสาธารณะเพื่อแก้ไขปัญหาความยากจน เช่น รถรับส่ง ฝึกอาชีพ จัดตลาดนัดสีเขียว เป็นต้น
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_1s_operation_6" value="yes"  required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_1s_operation_6" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file"  class="form-control "name="goals_1s_operation_6_refer" id="goals_1s_operation_6_refer"   />
                                            <div id="goals_1s_operation_6_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>





                                </tbody>
                            </table>


                        </div>
                        <div class="row m-5">
                            <div class="col-1 col-md-4 ">
                            </div>
                            <div class="col-8 col-md-4 ">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">บันทึกแบบสำรวจ</button>
                            </div>
                            <div class="ccol-1 ol-md-4 ">
                            </div>
                        </div>
    </form>


</div>
</div>
</div>
</div>

@include('layouts.footers.auth')
</div>






<script>


$(document).ready(function () {


$.get(  {{$goals_1s->goals_1s_id}}+ '/edit', function (data) {
  
    $('#goals_1s_at_name').val(data.goals_1s_at_name);
    $('#goals_1s_address').val(data.goals_1s_address);
    $('#goals_1s_problem').val(data.goals_1s_problem);


    $("input[name=goals_1s_indicators_1][value=" + data.goals_1s_indicators_1 + "]").prop('checked', true);
    $("input[name=goals_1s_indicators_2][value=" + data.goals_1s_indicators_2 + "]").prop('checked', true);
    $("input[name=goals_1s_indicators_3][value=" + data.goals_1s_indicators_3 + "]").prop('checked', true);
    $("input[name=goals_1s_indicators_4][value=" + data.goals_1s_indicators_4 + "]").prop('checked', true);
    $("input[name=goals_1s_indicators_5][value=" + data.goals_1s_indicators_5 + "]").prop('checked', true);
    $("input[name=goals_1s_indicators_6][value=" + data.goals_1s_indicators_6 + "]").prop('checked', true);
    $("input[name=goals_1s_indicators_7][value=" + data.goals_1s_indicators_7 + "]").prop('checked', true);
    $("input[name=goals_1s_indicators_8][value=" + data.goals_1s_indicators_8 + "]").prop('checked', true);


    let data_indicators  = [data.goals_1s_indicators_1_refer, data.goals_1s_indicators_2_refer,data.goals_1s_indicators_3_refer,data.goals_1s_indicators_4_refer,data.goals_1s_indicators_5_refer,data.goals_1s_indicators_6_refer,data.goals_1s_indicators_7_refer,data.goals_1s_indicators_8_refer];

    let data_indicators_name  = [data.goals_1s_indicators_1_name, data.goals_1s_indicators_2_name,data.goals_1s_indicators_3_name,data.goals_1s_indicators_4_name,data.goals_1s_indicators_5_name,data.goals_1s_indicators_6_name,data.goals_1s_indicators_7_name,data.goals_1s_indicators_8_name];
    for(i = 1; i <=8 ; i++){
    let goals_1s_indicators_refer_file = document.getElementById('goals_1s_indicators_'+i+'_refer_file');
    let children = '<li>     <a href="{{URL('goals/goals_1s')}}/'+data_indicators[i-1]+'" download="'+data_indicators_name[i-1]+'">' + data_indicators_name[i-1] + '</a> </li>';

    if(data_indicators_name[i-1] != null){
        goals_1s_indicators_refer_file.innerHTML = '<ul>'+children+'</ul>';
    }
  

    }



    $("input[name=goals_1s_operation_1][value=" + data.goals_1s_operation_1 + "]").prop('checked', true);
    $("input[name=goals_1s_operation_2][value=" + data.goals_1s_operation_2 + "]").prop('checked', true);
    $("input[name=goals_1s_operation_3][value=" + data.goals_1s_operation_3 + "]").prop('checked', true);
    $("input[name=goals_1s_operation_4][value=" + data.goals_1s_operation_4 + "]").prop('checked', true);
    $("input[name=goals_1s_operation_5][value=" + data.goals_1s_operation_5 + "]").prop('checked', true);
    $("input[name=goals_1s_operation_6][value=" + data.goals_1s_operation_6 + "]").prop('checked', true);


    let data_operation  = [data.goals_1s_operation_1_refer, data.goals_1s_operation_2_refer,data.goals_1s_operation_3_refer,data.goals_1s_operation_4_refer,data.goals_1s_operation_5_refer,data.goals_1s_operation_6_refer,data.goals_1s_operation_7_refer];
    let data_operation_name = [data.goals_1s_operation_1_name, data.goals_1s_operation_2_name,data.goals_1s_operation_3_name,data.goals_1s_operation_4_name,data.goals_1s_operation_5_name,data.goals_1s_operation_6_name,data.goals_1s_operation_7_name];
    for(i = 1; i <=6 ; i++){
    let goals_1s_operation_refer_file = document.getElementById('goals_1s_operation_'+i+'_refer_file');
    
    let children = '<li>     <a href="{{URL('goals/goals_1s')}}/'+data_operation[i-1]+'" download="'+data_operation_name[i-1]+'">' + data_operation_name[i-1] + '</a> </li>';

    
    if(data_operation_name[i-1] != null){
        goals_1s_operation_refer_file.innerHTML = '<ul>'+children+'</ul>';
    }



    }






 
})



});

    $(document).ready(function () {

        window.setTimeout(function () {
            $(".alert").fadeTo(500, 0).slideUp(500, function () {
                $(this).remove();
            });
        }, 2000);



    });




</script>

@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
