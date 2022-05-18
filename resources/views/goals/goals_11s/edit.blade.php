@extends('layouts.template', ['title' => __('เป้าหมายที่ 11 พัฒนาคุณภาพกลุ่มเปราะบาง')])

@section('content')
@include('goals.goals_11s.header', [
'title' => __('เป้าหมายที่ 11 พัฒนาคุณภาพกลุ่มเปราะบาง') ,
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

    <form action="{{$goals_11s->goals_11s_id}}/update" method="post" enctype="multipart/form-data" id="myForm">
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
                                        <input type="text" class="form-control" id="goals_11s_at_name"
                                            name="goals_11s_at_name" placeholder="ชื่อผู้ใช้ข้อมูล" required autofocus>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-12 col-md-7">
                                <div class="custom-control custom-radio">
                                    <label class="label_float"> สถานที่สอบถามข้อมูล : </label>
                                    <span>
                                        <input type="text" class="form-control" id="goals_11s_address"
                                            name="goals_11s_address" placeholder="สถานที่สอบถามข้อมูล" required
                                            autofocus> </span>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-12 col-md-7">
                                <div class="custom-control custom-radio">
                                    <label class="label_float"> ปัญหา/อุปสรรค์ : </label>
                                    <span>
                                        <textarea type="text" class="form-control" id="goals_11s_problem" rows="3"
                                        name="goals_11s_problem" placeholder="ปัญหา/อุปสรรค์" required autofocus></textarea>
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
                                        <td class="screen" style="white-space: normal; ">1. การประเมินประสิทธิภาพขององค์กรปกครองส่วนท้องถิ่น (LPA)
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_11s_indicators_1" value="high" checked
                                                    required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_11s_indicators_1" value="standard"
                                                    required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_11s_indicators_1" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_11s_indicators_1" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_11s_indicators_1_refer"
                                                id="goals_11s_indicators_1_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_11s_indicators_1_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>





                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">2. ตัวชี้วัดความเปราะบาง (พีระ ตั้งธรรมลักษณ์)
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_11s_indicators_2" value="high" checked
                                                    required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_11s_indicators_2" value="standard"
                                                    required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_11s_indicators_2" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_11s_indicators_2" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_11s_indicators_2_refer"
                                                id="goals_11s_indicators_2_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_11s_indicators_2_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">3. การประเมินคุณภาพชีวิต (องค์การอนามัยโลก)
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_11s_indicators_3" value="high" checked
                                                    required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_11s_indicators_3" value="standard"
                                                    required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_11s_indicators_3" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_11s_indicators_3" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_11s_indicators_3_refer"
                                                id="goals_11s_indicators_3_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_11s_indicators_3_refer_file"></div>
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
                                        <td class="screen" style="white-space: normal; ">1. การฝึกอบรมอาสาสมัคร แกนนำเพื่อการดูแลที่มีทักษะเฉพาะต่อกลุ่มเพราะบาง
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_11s_operation_1" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_11s_operation_1" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_11s_operation_1_refer"
                                                id="goals_11s_operation_1_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_11s_operation_1_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">2. การปรับสภาพแวดล้อมที่ปลอดภัยหรือเอื้อต่อกลุ่มเปาะบาง
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_11s_operation_2" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_11s_operation_2" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_11s_operation_2_refer"
                                                id="goals_11s_operation_2_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_11s_operation_2_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">3. การจัดบริการดูแลสุขภาพต่อเนื่องที่บ้านโดยบุคลากรสาธารณสุขและอาสาสมัคร
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_11s_operation_3" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_11s_operation_3" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_11s_operation_3_refer"
                                                id="goals_11s_operation_3_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_11s_operation_3_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">4. การตั้งศูนย์การเรียนรู้เกี่ยวกับการดูแล ช่วยเหลือประสานงานกลุ่มเปราะบางการตั้งศูนย์กายอุปกรณ์ เพิ่มสิ่งของ อุปกรณ์ที่จำเป็นต่อการดูแลกลุ่มเปราะบาง
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_11s_operation_4" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_11s_operation_4" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_11s_operation_4_refer"
                                                id="goals_11s_operation_4_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_11s_operation_4_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">5. พัฒนาระบบข้อมูลสุขภาพ และนำใช้เพื่อออกแบบดูแลช่วยเหลือ 
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_11s_operation_5" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_11s_operation_5" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_11s_operation_5_refer"
                                                id="goals_11s_operation_5_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                                <div id="goals_11s_operation_5_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>









                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">6. การจัดตั้งกองทุนและสวัสดิการเพื่อการดูแล ช่วยเหลือกลุ่มเปราะบาง
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_11s_operation_6" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_11s_operation_6" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_11s_operation_6_refer"
                                                id="goals_11s_operation_6_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                                <div id="goals_11s_operation_6_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    
                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">7. การตั้งกฎ กติกา ข้อตกลงร่วมกันในการช่วยเหลือสนับสนุนกลุ่มเปราะบาง
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_11s_operation_7" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_11s_operation_7" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_11s_operation_7_refer"
                                                id="goals_11s_operation_7_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                                <div id="goals_11s_operation_7_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>




                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">8. การส่งเสริมอาชีพ และกิจกรรมการลดรายจ่ายสำหรับสมาชิกครัวเรือนที่มีกลุ่มเปราะบาง
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_11s_operation_8" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_11s_operation_8" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_11s_operation_8_refer"
                                                id="goals_11s_operation_8_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                                <div id="goals_11s_operation_8_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>


                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">9. การจัดทำแผนการช่วยเหลือดูแลเป็นรายครัวเรือนแบบมีส่วนร่วม
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_11s_operation_9" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_11s_operation_9" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_11s_operation_9_refer"
                                                id="goals_11s_operation_9_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                                <div id="goals_11s_operation_9_refer_file"></div>
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


$.get(  {{$goals_11s->goals_11s_id}}+ '/edit', function (data) {
  
    $('#goals_11s_at_name').val(data.goals_11s_at_name);
    $('#goals_11s_address').val(data.goals_11s_address);
    $('#goals_11s_problem').val(data.goals_11s_problem);


    $("input[name=goals_11s_indicators_1][value=" + data.goals_11s_indicators_1 + "]").prop('checked', true);
    $("input[name=goals_11s_indicators_2][value=" + data.goals_11s_indicators_2 + "]").prop('checked', true);
    $("input[name=goals_11s_indicators_3][value=" + data.goals_11s_indicators_3 + "]").prop('checked', true);
    // $("input[name=goals_11s_indicators_4][value=" + data.goals_11s_indicators_4 + "]").prop('checked', true);
    // $("input[name=goals_11s_indicators_5][value=" + data.goals_11s_indicators_5 + "]").prop('checked', true);
    // $("input[name=goals_11s_indicators_6][value=" + data.goals_11s_indicators_6 + "]").prop('checked', true);
    // $("input[name=goals_11s_indicators_7][value=" + data.goals_11s_indicators_7 + "]").prop('checked', true);
    // $("input[name=goals_11s_indicators_8][value=" + data.goals_11s_indicators_8 + "]").prop('checked', true);
    // $("input[name=goals_11s_indicators_9][value=" + data.goals_11s_indicators_9 + "]").prop('checked', true);
    // $("input[name=goals_11s_indicators_10][value=" + data.goals_11s_indicators_10 + "]").prop('checked', true);
    // $("input[name=goals_11s_indicators_11][value=" + data.goals_11s_indicators_11 + "]").prop('checked', true);


    let data_indicators  = [data.goals_11s_indicators_1_refer, data.goals_11s_indicators_2_refer,data.goals_11s_indicators_3_refer];

    let data_indicators_name  = [data.goals_11s_indicators_1_name, data.goals_11s_indicators_2_name,data.goals_11s_indicators_3_name];
    for(i = 1; i <=3 ; i++){
    let goals_11s_indicators_refer_file = document.getElementById('goals_11s_indicators_'+i+'_refer_file');
    let children = '<li>     <a href="{{URL('goals/goals_11s')}}/'+data_indicators[i-1]+'" download="'+data_indicators_name[i-1]+'">' + data_indicators_name[i-1] + '</a> </li>';

    if(data_indicators_name[i-1] != null){
        goals_11s_indicators_refer_file.innerHTML = '<ul>'+children+'</ul>';
    }
  

    }



    $("input[name=goals_11s_operation_1][value=" + data.goals_11s_operation_1 + "]").prop('checked', true);
    $("input[name=goals_11s_operation_2][value=" + data.goals_11s_operation_2 + "]").prop('checked', true);
    $("input[name=goals_11s_operation_3][value=" + data.goals_11s_operation_3 + "]").prop('checked', true);
    $("input[name=goals_11s_operation_4][value=" + data.goals_11s_operation_4 + "]").prop('checked', true);
    $("input[name=goals_11s_operation_5][value=" + data.goals_11s_operation_5 + "]").prop('checked', true);
    $("input[name=goals_11s_operation_6][value=" + data.goals_11s_operation_6 + "]").prop('checked', true);
    $("input[name=goals_11s_operation_7][value=" + data.goals_11s_operation_7 + "]").prop('checked', true);
    $("input[name=goals_11s_operation_8][value=" + data.goals_11s_operation_8 + "]").prop('checked', true);
    $("input[name=goals_11s_operation_9][value=" + data.goals_11s_operation_9 + "]").prop('checked', true);
    // $("input[name=goals_11s_operation_10][value=" + data.goals_11s_operation_10 + "]").prop('checked', true);
    // $("input[name=goals_11s_operation_11][value=" + data.goals_11s_operation_11 + "]").prop('checked', true);
    // $("input[name=goals_11s_operation_12][value=" + data.goals_11s_operation_12 + "]").prop('checked', true);

    let data_operation  = [data.goals_11s_operation_1_refer, data.goals_11s_operation_2_refer,data.goals_11s_operation_3_refer,data.goals_11s_operation_4_refer,data.goals_11s_operation_5_refer,data.goals_11s_operation_6_refer,data.goals_11s_operation_7_refer,data.goals_11s_operation_8_refer,data.goals_11s_operation_9_refer];
    let data_operation_name = [data.goals_11s_operation_1_name, data.goals_11s_operation_2_name,data.goals_11s_operation_3_name,data.goals_11s_operation_4_name,data.goals_11s_operation_5_name,data.goals_11s_operation_6_name,data.goals_11s_operation_7_name,data.goals_11s_operation_8_name,data.goals_11s_operation_9_name];


    for(i = 1; i <=9 ; i++){
    let goals_11s_operation_refer_file = document.getElementById('goals_11s_operation_'+i+'_refer_file');
    
    let children = '<li>     <a href="{{URL('goals/goals_11s')}}/'+data_operation[i-1]+'" download="'+data_operation_name[i-1]+'">' + data_operation_name[i-1] + '</a> </li>';

    
    if(data_operation_name[i-1] != null){
        goals_11s_operation_refer_file.innerHTML = '<ul>'+children+'</ul>';
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
