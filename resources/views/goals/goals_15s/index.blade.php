@extends('layouts.template', ['title' => __('เป้าหมายที่ 15 ระบบสื่อสารชุมชนรวมสื่อดิจิทัล')])

@section('content')
@include('goals.goals_15s.header', [
'title' => __('เป้าหมายที่ 15 ระบบสื่อสารชุมชนรวมสื่อดิจิทัล') ,
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



    <form action="store" method="post" enctype="multipart/form-data">
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
                                        <input type="text" class="form-control" id="goals_15s_at_name"
                                            name="goals_15s_at_name" placeholder="ชื่อผู้ใช้ข้อมูล" required autofocus>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-12 col-md-7">
                                <div class="custom-control custom-radio">
                                    <label class="label_float"> สถานที่สอบถามข้อมูล : </label>
                                    <span>
                                        <input type="text" class="form-control" id="goals_15s_address"
                                            name="goals_15s_address" placeholder="สถานที่สอบถามข้อมูล" required
                                            autofocus> </span>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-12 col-md-7">
                                <div class="custom-control custom-radio">
                                    <label class="label_float"> ปัญหา/อุปสรรค์ : </label>
                                    <span>
                                        <textarea type="text" class="form-control" id="goals_15s_problem" rows="3"
                                            name="goals_15s_problem" placeholder="ปัญหา/อุปสรรค์" required autofocus></textarea>
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
                                                <input type="radio" name="goals_15s_indicators_1" value="high" checked
                                                    required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_15s_indicators_1" value="standard"
                                                    required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_15s_indicators_1" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_15s_indicators_1" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_15s_indicators_1_refer"
                                                id="goals_15s_indicators_1_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_15s_indicators_1_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>





                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">2. ครัวเรือนยากจน ผู้ว่างงาน ผู้สูงอายุ
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_15s_indicators_2" value="high" checked
                                                    required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_15s_indicators_2" value="standard"
                                                    required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_15s_indicators_2" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_15s_indicators_2" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_15s_indicators_2_refer"
                                                id="goals_15s_indicators_2_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_15s_indicators_2_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">3. ใช้ช่องทางการสื่อสารอย่างน้อย ๑ ช่องทาง ในการรับรู้ข่าวสารจากแหล่งข้อมูลต่างทั้งภาครัฐ กลุ่มองค์เอกชน อย่างทันสถานการณ์และความจำเป็น
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_15s_indicators_3" value="high" checked
                                                    required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_15s_indicators_3" value="standard"
                                                    required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_15s_indicators_3" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_15s_indicators_3" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_15s_indicators_3_refer"
                                                id="goals_15s_indicators_3_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_15s_indicators_3_refer_file"></div>
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
                                        <td class="screen" style="white-space: normal; ">1. พัฒนาช่องทางการสื่อสารเรื่องสำคัญที่กลุ่มเป้าหมายสามารถเช้าถึงในได้ เช่น การรับงบประมาณช่วยเหลือ การเข้าร่วมกิจกรรม การนัดหมายระดมแรงงาน นัดหมายประชุม หารือ เป็นต้น
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_15s_operation_1" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_15s_operation_1" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_15s_operation_1_refer"
                                                id="goals_15s_operation_1_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_15s_operation_1_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">2. กรณีสถานการณ์ทั่วไป สื่อสารผ่านช่องทางหนังสือราชการ ประกาศหอกระจายข่าว บอกปากต่อปาก เป็นต้น
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_15s_operation_2" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_15s_operation_2" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_15s_operation_2_refer"
                                                id="goals_15s_operation_2_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_15s_operation_2_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">3. กรณีสถานการณ์ฉุกเฉิน ใช้การแจ้งข่าวต่อเป้าหมายที่รวดเร็วโดยออกประกาศเสียงตามสายโทรศัพท์ เป็นต้น
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_15s_operation_3" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_15s_operation_3" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_15s_operation_3_refer"
                                                id="goals_15s_operation_3_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_15s_operation_3_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">4. การสื่อสารกรณีต้องขอมติ ขอคิดเห็นใช้การประชาคมประชุม เป็นหลัก เพื่อเป็นการตรวจสอบข้อมูลคนและหาข้อสรุปได้รวดเร็วทันเวลา
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_15s_operation_4" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_15s_operation_4" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_15s_operation_4_refer"
                                                id="goals_15s_operation_4_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_15s_operation_4_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">5. การกำหนดบทบาทให้คณะกรรมการ หรือ ศูนย์ประสานงานขององค์กรหรือหน่วยงาน หรือผู้รับผิดชอบ ดำเนินการคัดเลือก ข้อมูล เนื้อหาของการสื่อสาร
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_15s_operation_5" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_15s_operation_5" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_15s_operation_5_refer"
                                                id="goals_15s_operation_5_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                                <div id="goals_15s_operation_5_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>









                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">6. พัฒนาทักษะการสื่อสารให้กับบุคลากรขององค์กรหลักในตำบล
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_15s_operation_6" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_15s_operation_6" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_15s_operation_6_refer"
                                                id="goals_15s_operation_6_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                                <div id="goals_15s_operation_6_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">7. เปิดช่องทางรับข้อคิดเห็น ข้อร้องเรียนการบริการสาธารณะ
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_15s_operation_7" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_15s_operation_7" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_15s_operation_7_refer"
                                                id="goals_15s_operation_7_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                                <div id="goals_15s_operation_7_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">8. กำหนดบทบาทให้บุคลากรขององค์กรปกครองส่วนท้องถิ่นรับผิดชอบหมู่บ้านในการสื่อสารของหน่วยงาน
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_15s_operation_8" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_15s_operation_8" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_15s_operation_8_refer"
                                                id="goals_15s_operation_8_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                                <div id="goals_15s_operation_8_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>


                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">9. ทำนุบำรุงอุปกรณ์การสื่อสารในที่สาธารณะ เช่น หอกระจายข่าว วิทยุชุมชน เป็นต้น
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_15s_operation_9" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_15s_operation_9" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_15s_operation_9_refer"
                                                id="goals_15s_operation_9_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                                <div id="goals_15s_operation_9_refer_file"></div>
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
                                <input type="hidden" name="goals_15s_refer" value="{{$round}}">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">ส่งแบบสำรวจ</button>
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
