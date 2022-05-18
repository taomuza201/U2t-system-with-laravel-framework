@extends('layouts.template', ['title' => __('เป้าหมายที่ 10 การจัดการตำบลปลอดภัย')])

@section('content')
@include('goals.goals_10s.header', [
'title' => __('เป้าหมายที่ 10 การจัดการตำบลปลอดภัย') ,
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
                                        <input type="text" class="form-control" id="goals_10s_at_name"
                                            name="goals_10s_at_name" placeholder="ชื่อผู้ใช้ข้อมูล" required autofocus>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-12 col-md-7">
                                <div class="custom-control custom-radio">
                                    <label class="label_float"> สถานที่สอบถามข้อมูล : </label>
                                    <span>
                                        <input type="text" class="form-control" id="goals_10s_address"
                                            name="goals_10s_address" placeholder="สถานที่สอบถามข้อมูล" required
                                            autofocus> </span>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-12 col-md-7">
                                <div class="custom-control custom-radio">
                                    <label class="label_float"> ปัญหา/อุปสรรค์ : </label>
                                    <span>
                                        <textarea type="text" class="form-control" id="goals_10s_problem" rows="3"
                                            name="goals_10s_problem" placeholder="ปัญหา/อุปสรรค์" required autofocus></textarea>
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
                                                <input type="radio" name="goals_10s_indicators_1" value="high" checked
                                                    required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_10s_indicators_1" value="standard"
                                                    required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_10s_indicators_1" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_10s_indicators_1" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_10s_indicators_1_refer"
                                                id="goals_10s_indicators_1_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_10s_indicators_1_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>





                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; "> 2. ตัวชี้วัดตำบลที่มีการจัดการชุมชนปลอดภัยและเข้มแข็งได้มาตรฐาน (สถาบันการแพทย์ฉุกเฉิน)
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_10s_indicators_2" value="high" checked
                                                    required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_10s_indicators_2" value="standard"
                                                    required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_10s_indicators_2" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_10s_indicators_2" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_10s_indicators_2_refer"
                                                id="goals_10s_indicators_2_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_10s_indicators_2_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">3. ตัวชี้วัดโครงสร้างพื้นฐาน ระบบสาธารณูปโภคและสาธารณูปการ (กรมส่งเสริมการปกครองส่วนท้องถิ่น)
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_10s_indicators_3" value="high" checked
                                                    required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_10s_indicators_3" value="standard"
                                                    required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_10s_indicators_3" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_10s_indicators_3" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_10s_indicators_3_refer"
                                                id="goals_10s_indicators_3_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_10s_indicators_3_refer_file"></div>
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
                                        <td class="screen" style="white-space: normal; ">1. จัดทำแผน และฝึกซ้อมแผนเผชิญเหตุทั้งแผนนั่งโต๊ะ และแผนเสมือนจริง
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_10s_operation_1" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_10s_operation_1" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_10s_operation_1_refer"
                                                id="goals_10s_operation_1_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_10s_operation_1_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">2. ฝึกอบรมทักษะประชาชน แกนนำ อาสาสมัคร เพื่อเฝ้าระวัง ดูแลและช่วยเหลือเมื่อเกิดภัยพิบัติ
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_10s_operation_2" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_10s_operation_2" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_10s_operation_2_refer"
                                                id="goals_10s_operation_2_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_10s_operation_2_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">3. จัดตั้งกลุ่มอาสาสมัครในการเฝ้าระวัง ป้องกัน และช่วยเหลือเมื่อเกิดภัยพิบัติ
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_10s_operation_3" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_10s_operation_3" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_10s_operation_3_refer"
                                                id="goals_10s_operation_3_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_10s_operation_3_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">4. จัดตั้งกองทุนช่วยเหลือกันเมื่อเกิดภัยพิบัติ ( อาหาร ที่พัก อุปกรณ์ประกอบ อาชีพ พันธ์พืช สัตว์ เป็นต้น )
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_10s_operation_4" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_10s_operation_4" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_10s_operation_4_refer"
                                                id="goals_10s_operation_4_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_10s_operation_4_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">5. ฝึกอบรมอาสาสมัครเฝ้าระวังความรุ่นแรงในครอบครัว
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_10s_operation_5" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_10s_operation_5" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_10s_operation_5_refer"
                                                id="goals_10s_operation_5_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                                <div id="goals_10s_operation_5_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>









                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">6. จัดศูนย์ประสานงานและระบบการสื่อสาร ข้อมูลเพิ่อความปลอดภัยหลายรูปแบบ หลายช่องทาง ในชุมชน
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_10s_operation_6" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_10s_operation_6" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_10s_operation_6_refer"
                                                id="goals_10s_operation_6_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                                <div id="goals_10s_operation_6_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    
                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">7. จัดตั้งกองทุนและจัดสวัสดิการเพื่อช่วยเหลือผู้ดูแล ผู้ประสบปัญหาครอบครัว
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_10s_operation_7" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_10s_operation_7" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_10s_operation_7_refer"
                                                id="goals_10s_operation_7_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                                <div id="goals_10s_operation_7_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>




                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">8. พัฒนาระบบการให้คำปรึกษา ส่งต่อเพื่อแก้ไขปัญหาความรุนแรงในหลายรูปแบบ และหลายช่องทาง
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_10s_operation_8" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_10s_operation_8" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_10s_operation_8_refer"
                                                id="goals_10s_operation_8_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                                <div id="goals_10s_operation_8_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>


                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">9. รณรงค์การขับขี่ปลอดภัย สำรวจสภาพรถยนต์ รถจักรยานยนต์ รถจักยานยนต์ใบอนุญาตขับขั่
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_10s_operation_9" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_10s_operation_9" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_10s_operation_9_refer"
                                                id="goals_10s_operation_9_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                                <div id="goals_10s_operation_9_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>


                                    
                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">10.   จัดการจุดเสี่ยง จุดอันตราย
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_10s_operation_10" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_10s_operation_10" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_10s_operation_10_refer"
                                                id="goals_10s_operation_10_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                                <div id="goals_10s_operation_10_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">11.   ฝึกอบรมทักษะการขับขี่ปลอดภัย
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_10s_operation_11" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_10s_operation_11" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_10s_operation_11_refer"
                                                id="goals_10s_operation_11_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                                <div id="goals_10s_operation_11_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>


                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">12.   ฝึกทักษะอาสาสมัครป้องกันภัยฝ่ายพลเรือน (อปพร.) ชุดรักษาความปลอดภัยหมู่บ้าน (ชรบ.)
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_10s_operation_12" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_10s_operation_12" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_10s_operation_12_refer"
                                                id="goals_10s_operation_12_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                                <div id="goals_10s_operation_12_refer_file"></div>
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
                                <input type="hidden" name="goals_10s_refer" value="{{$round}}">
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
