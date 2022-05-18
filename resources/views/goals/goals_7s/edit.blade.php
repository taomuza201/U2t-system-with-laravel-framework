@extends('layouts.template', ['title' => __('เป้าหมายที่ 7 จัดการวิสาหกิจชุมชน')])

@section('content')
@include('goals.goals_7s.header', [
'title' => __('เป้าหมายที่ 7 จัดการวิสาหกิจชุมชน') ,
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

    <form action="{{$goals_7s->goals_7s_id}}/update" method="post" enctype="multipart/form-data" id="myForm">
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
                                        <input type="text" class="form-control" id="goals_7s_at_name"
                                            name="goals_7s_at_name" placeholder="ชื่อผู้ใช้ข้อมูล" required autofocus>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-12 col-md-7">
                                <div class="custom-control custom-radio">
                                    <label class="label_float"> สถานที่สอบถามข้อมูล : </label>
                                    <span>
                                        <input type="text" class="form-control" id="goals_7s_address"
                                            name="goals_7s_address" placeholder="สถานที่สอบถามข้อมูล" required
                                            autofocus> </span>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-12 col-md-7">
                                <div class="custom-control custom-radio">
                                    <label class="label_float"> ปัญหา/อุปสรรค์ : </label>
                                    <span>
                                        <textarea type="text" class="form-control" id="goals_7s_problem" rows="3"
                                            name="goals_7s_problem" placeholder="ปัญหา/อุปสรรค์" required autofocus></textarea>
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
                                                <input type="radio" name="goals_7s_indicators_1" value="high" checked
                                                    required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_7s_indicators_1" value="standard"
                                                    required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_7s_indicators_1" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_7s_indicators_1" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_7s_indicators_1_refer"
                                                id="goals_7s_indicators_1_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_7s_indicators_1_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>





                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">2. การประเมินศักยภาพวิสาหกิจ (กรมส่งเสริมการเกษตร)
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_7s_indicators_2" value="high" checked
                                                    required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_7s_indicators_2" value="standard"
                                                    required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_7s_indicators_2" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_7s_indicators_2" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_7s_indicators_2_refer"
                                                id="goals_7s_indicators_2_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_7s_indicators_2_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">3. ครัวเรือนที่มีรายได้ต่ำกว่าเกณฑ์จปฐ. ลดลงหรือไม่มีเลย
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_7s_indicators_3" value="high" checked
                                                    required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_7s_indicators_3" value="standard"
                                                    required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_7s_indicators_3" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_7s_indicators_3" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_7s_indicators_3_refer"
                                                id="goals_7s_indicators_3_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_7s_indicators_3_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>


                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">4. ความครอบคลุมการจัดการตามคุณลักษณะวิสาหกิจ
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_7s_indicators_4" value="high" checked
                                                    required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_7s_indicators_4" value="standard"
                                                    required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_7s_indicators_4" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_7s_indicators_4" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_7s_indicators_4_refer"
                                                id="goals_7s_indicators_4_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_7s_indicators_4_refer_file"></div>
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
                                        <td class="screen" style="white-space: normal; ">1. รวมกลุ่มฝึกทักษะอาชีพที่เป็นภูมิปัญญาท้องถิ่นเช่น ขนมไทย ปลูกผักปลอดสารหัตถกรรมจักสาน การจัดการท่องเที่ยวชุมชน น้ำมะพร้าว เป็นต้น
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_7s_operation_1" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_7s_operation_1" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_7s_operation_1_refer"
                                                id="goals_7s_operation_1_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_7s_operation_1_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">2. จัดหาตลาดเพื่อขายผลผลิต กระจายสินค้าทั้งในหมู่บ้านตำบลและภายนอกตำบล
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_7s_operation_2" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_7s_operation_2" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_7s_operation_2_refer"
                                                id="goals_7s_operation_2_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_7s_operation_2_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">3. สนับสนุนให้สมาชิกกลุ่มวิสาหกิจบันทึกบัญชีครัวเรือนและใช้ข้อมูลประกอบการปรับลดค่าใช้จ่าย
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_7s_operation_3" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_7s_operation_3" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_7s_operation_3_refer"
                                                id="goals_7s_operation_3_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_7s_operation_3_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">4. กองทุน องค์กรการเงินอนุมัติให้กลุ่มวิสาหกิจกู้ยืมดอกเบี้ยต่ำเพื่อลงทุนประกอบอาชีพ
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_7s_operation_4" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_7s_operation_4" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_7s_operation_4_refer"
                                                id="goals_7s_operation_4_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_7s_operation_4_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">5. กำหนดข้อตกลงระดับครอบครัว หมู่บ้าน ตำบลในการสนับสนุนสิ่งของ อุปกรณ์เครื่องมือ ที่สาธารณะสำหรับครอบครัวยากจนที่รวมตัวเป็นวิสาหกิจทำกิน ทั้งการผลิต แปรรูป จำหน่าย
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_7s_operation_5" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_7s_operation_5" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_7s_operation_5_refer"
                                                id="goals_7s_operation_5_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                                <div id="goals_7s_operation_5_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>









                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">6. กำหนดข้อตกลงให้สมาชิกจัดหาหรือผลิตวัตถุดิบในพื้นที่เพื่อการประกอบการวิสาหกิจชุมชน
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_7s_operation_6" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_7s_operation_6" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_7s_operation_6_refer"
                                                id="goals_7s_operation_6_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                                <div id="goals_7s_operation_6_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    
                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">7. ฝึกอบรม เช่น การตลาด การบรรจุภัณฑ์ มาตรฐานสินค้า ผลิตภัณฑ์ เป็นต้น
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_7s_operation_7" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_7s_operation_7" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_7s_operation_7_refer"
                                                id="goals_7s_operation_7_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                                <div id="goals_7s_operation_7_refer_file"></div>
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


$.get(  {{$goals_7s->goals_7s_id}}+ '/edit', function (data) {
  
    $('#goals_7s_at_name').val(data.goals_7s_at_name);
    $('#goals_7s_address').val(data.goals_7s_address);
    $('#goals_7s_problem').val(data.goals_7s_problem);


    $("input[name=goals_7s_indicators_1][value=" + data.goals_7s_indicators_1 + "]").prop('checked', true);
    $("input[name=goals_7s_indicators_2][value=" + data.goals_7s_indicators_2 + "]").prop('checked', true);
    $("input[name=goals_7s_indicators_3][value=" + data.goals_7s_indicators_3 + "]").prop('checked', true);
    $("input[name=goals_7s_indicators_4][value=" + data.goals_7s_indicators_4 + "]").prop('checked', true);
    $("input[name=goals_7s][value=" + data.goals_7s + "]").prop('checked', true);
    // $("input[name=goals_7s_indicators_6][value=" + data.goals_7s_indicators_6 + "]").prop('checked', true);
    // $("input[name=goals_7s_indicators_7][value=" + data.goals_7s_indicators_7 + "]").prop('checked', true);
    // $("input[name=goals_7s_indicators_8][value=" + data.goals_7s_indicators_8 + "]").prop('checked', true);
    // $("input[name=goals_7s_indicators_9][value=" + data.goals_7s_indicators_9 + "]").prop('checked', true);
    // $("input[name=goals_7s_indicators_10][value=" + data.goals_7s_indicators_10 + "]").prop('checked', true);
    // $("input[name=goals_7s_indicators_11][value=" + data.goals_7s_indicators_11 + "]").prop('checked', true);


    let data_indicators  = [data.goals_7s_indicators_1_refer, data.goals_7s_indicators_2_refer,data.goals_7s_indicators_3_refer,data.goals_7s_indicators_4_refer,data.goals_7s_refer,data.goals_7s_indicators_6_refer,data.goals_7s_indicators_7_refer];

    let data_indicators_name  = [data.goals_7s_indicators_1_name, data.goals_7s_indicators_2_name,data.goals_7s_indicators_3_name,data.goals_7s_indicators_4_name,data.goals_7s_name,data.goals_7s_indicators_6_name,data.goals_7s_indicators_7_name];
    for(i = 1; i <=4 ; i++){
    let goals_7s_indicators_refer_file = document.getElementById('goals_7s_indicators_'+i+'_refer_file');
    let children = '<li>     <a href="{{URL('goals/goals_7s')}}/'+data_indicators[i-1]+'" download="'+data_indicators_name[i-1]+'">' + data_indicators_name[i-1] + '</a> </li>';

    if(data_indicators_name[i-1] != null){
        goals_7s_indicators_refer_file.innerHTML = '<ul>'+children+'</ul>';
    }
  

    }



    $("input[name=goals_7s_operation_1][value=" + data.goals_7s_operation_1 + "]").prop('checked', true);
    $("input[name=goals_7s_operation_2][value=" + data.goals_7s_operation_2 + "]").prop('checked', true);
    $("input[name=goals_7s_operation_3][value=" + data.goals_7s_operation_3 + "]").prop('checked', true);
    $("input[name=goals_7s_operation_4][value=" + data.goals_7s_operation_4 + "]").prop('checked', true);
    $("input[name=goals_7s_operation_5][value=" + data.goals_7s_operation_5 + "]").prop('checked', true);
    $("input[name=goals_7s_operation_6][value=" + data.goals_7s_operation_6 + "]").prop('checked', true);
    $("input[name=goals_7s_operation_7][value=" + data.goals_7s_operation_7 + "]").prop('checked', true);

    let data_operation  = [data.goals_7s_operation_1_refer, data.goals_7s_operation_2_refer,data.goals_7s_operation_3_refer,data.goals_7s_operation_4_refer,data.goals_7s_operation_5_refer,data.goals_7s_operation_6_refer,data.goals_7s_operation_7_refer];
    let data_operation_name = [data.goals_7s_operation_1_name, data.goals_7s_operation_2_name,data.goals_7s_operation_3_name,data.goals_7s_operation_4_name,data.goals_7s_operation_5_name,data.goals_7s_operation_6_name,data.goals_7s_operation_7_name];


    for(i = 1; i <=7 ; i++){
    let goals_7s_operation_refer_file = document.getElementById('goals_7s_operation_'+i+'_refer_file');
    
    let children = '<li>     <a href="{{URL('goals/goals_7s')}}/'+data_operation[i-1]+'" download="'+data_operation_name[i-1]+'">' + data_operation_name[i-1] + '</a> </li>';

    
    if(data_operation_name[i-1] != null){
        goals_7s_operation_refer_file.innerHTML = '<ul>'+children+'</ul>';
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
