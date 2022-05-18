@extends('layouts.template', ['title' => __('เป้าหมายที่ 3 สามารถวิเคราะห์รายรับรายจ่ายของสถาบันการเงินชุมชน
ธนาคารชุมชน')])

@section('content')
@include('goals.goals_3s.header', [
'title' => __('เป้าหมายที่ 3 สามารถวิเคราะห์รายรับรายจ่ายของสถาบันการเงินชุมชน ธนาคารชุมชน') ,
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
                                        <input type="text" class="form-control" id="goals_3s_at_name"
                                            name="goals_3s_at_name" placeholder="ชื่อผู้ใช้ข้อมูล" required autofocus>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-12 col-md-7">
                                <div class="custom-control custom-radio">
                                    <label class="label_float"> สถานที่สอบถามข้อมูล : </label>
                                    <span>
                                        <input type="text" class="form-control" id="goals_3s_address"
                                            name="goals_3s_address" placeholder="สถานที่สอบถามข้อมูล" required
                                            autofocus> </span>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-12 col-md-7">
                                <div class="custom-control custom-radio">
                                    <label class="label_float"> ปัญหา/อุปสรรค์ : </label>
                                    <span>
                                        <textarea type="text" class="form-control" id="goals_3s_problem" rows="3"
                                            name="goals_3s_problem" placeholder="ปัญหา/อุปสรรค์" required autofocus></textarea>
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
                                        <td class="screen" style="white-space: normal; ">1.
                                            การประเมินประสิทธิภาพขององค์กรปกครองส่วนท้องถิ่น (LPA)
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_3s_indicators_1" value="high" checked
                                                    required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_3s_indicators_1" value="standard"
                                                    required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_3s_indicators_1" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_3s_indicators_1" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_3s_indicators_1_refer"
                                                id="goals_3s_indicators_1_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_3s_indicators_1_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>





                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; "> 2. คนในชุมชนทั้งหมด
                                            เป็นสมาชิกสถาบันการเงินชุมชน
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_3s_indicators_2" value="high" checked
                                                    required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_3s_indicators_2" value="standard"
                                                    required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_3s_indicators_2" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_3s_indicators_2" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_3s_indicators_2_refer"
                                                id="goals_3s_indicators_2_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_3s_indicators_2_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">3.
                                            คนในชุมชนเป็นสมาชิกกลุ่มกองทุนที่มีการจัดการเงิน
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_3s_indicators_3" value="high" checked
                                                    required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_3s_indicators_3" value="standard"
                                                    required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_3s_indicators_3" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_3s_indicators_3" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_3s_indicators_3_refer"
                                                id="goals_3s_indicators_3_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_3s_indicators_3_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>


                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">4.
                                            ครัวเรือนมีการใช้บัญชีครัวเรือน
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_3s_indicators_4" value="high" checked
                                                    required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_3s_indicators_4" value="standard"
                                                    required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_3s_indicators_4" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_3s_indicators_4" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_3s_indicators_4_refer"
                                                id="goals_3s_indicators_4_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_3s_indicators_4_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">5.
                                            ครัวเรือนมีแหล่งเงินกู้ของชุมชนที่เป็นกลุ่มกองทุน หรือ สถาบันการเงิน
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_3s_indicators_5" value="high" checked
                                                    required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_3s_indicators_5" value="standard"
                                                    required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_3s_indicators_5" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_3s_indicators_5" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_3s_indicators_5_refer"
                                                id="goals_3s_indicators_5_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_3s_indicators_5_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">6.
                                            แบบประเมินความเสี่ยงสถาบันการเงินชุมชน
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_3s_indicators_6" value="high" checked
                                                    required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_3s_indicators_6" value="standard"
                                                    required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_3s_indicators_6" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_3s_indicators_6" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_3s_indicators_6_refer"
                                                id="goals_3s_indicators_6_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_3s_indicators_6_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>




                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">7. กลุ่มทางสังคม องค์กรชุมชน
                                            มีการดูแลช่วยเหลือกัน
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_3s_indicators_7" value="high" checked
                                                    required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_3s_indicators_7" value="standard"
                                                    required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_3s_indicators_7" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_3s_indicators_7" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_3s_indicators_7_refer"
                                                id="goals_3s_indicators_7_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_3s_indicators_7_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>


                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">8. กลุ่มทางสังคม องค์กร
                                            ที่มีการส่งเสริมการออมและการจัดการเงิน
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_3s_indicators_8" value="high" checked
                                                    required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_3s_indicators_8" value="standard"
                                                    required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_3s_indicators_8" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_3s_indicators_8" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_3s_indicators_8_refer"
                                                id="goals_3s_indicators_8_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_3s_indicators_8_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>


                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">9.
                                            ตัวชี้วัดความเข้มแข็งของชุมชนท้องถิ่น
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_3s_indicators_9" value="high" checked
                                                    required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_3s_indicators_9" value="standard"
                                                    required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_3s_indicators_9" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_3s_indicators_9" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_3s_indicators_9_refer"
                                                id="goals_3s_indicators_9_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_3s_indicators_9_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>


                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">10.   ตัวชี้วัดเมืองอยู่ดีมีสุข
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_3s_indicators_10" value="high" checked
                                                    required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_3s_indicators_10" value="standard"
                                                    required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_3s_indicators_10" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_3s_indicators_10" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_3s_indicators_10_refer"
                                                id="goals_3s_indicators_10_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_3s_indicators_10_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">11.  
                                            ตัวชี้วัดความสุขสู่ตำบลจัดการตนเอง
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_3s_indicators_11" value="high" checked
                                                    required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_3s_indicators_11" value="standard"
                                                    required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_3s_indicators_11" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_3s_indicators_11" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_3s_indicators_11_refer"
                                                id="goals_3s_indicators_11_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_3s_indicators_11_refer_file"></div>
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
                                        <td class="screen" style="white-space: normal; ">1. กำหนด กฎ
                                            ระเบียบกองทุนให้ปันผลกำไรเพื่อช่วยเหลือผู้อยู่ในภาวะทุกข์ยาก
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_3s_operation_1" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_3s_operation_1" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_3s_operation_1_refer"
                                                id="goals_3s_operation_1_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_3s_operation_1_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">2.
                                            กองทุนจัดให้มีสวัสดิการหลายแบบ เช่น สวัสดิการโลงศพ
                                            ชุดกายอุปกรณ์สวัสดิการเมื่อป่วย ตาย ภัยพิบัติ เป็นต้น
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_3s_operation_2" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_3s_operation_2" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_3s_operation_2_refer"
                                                id="goals_3s_operation_2_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_3s_operation_2_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">3.
                                            ครัวเรือนยากจนมีสิทธิ์ใช้บริการกู้ยืม จากองทุนได้โดยไม่ได้เป็นสมาชิก
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_3s_operation_3" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_3s_operation_3" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_3s_operation_3_refer"
                                                id="goals_3s_operation_3_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_3s_operation_3_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">4. พัฒนาทักษะคณะกรรมการ กองทุน
                                            กลุ่มเพื่อให้เข้าใจ
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_3s_operation_4" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_3s_operation_4" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_3s_operation_4_refer"
                                                id="goals_3s_operation_4_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                            <div id="goals_3s_operation_4_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">5. สถาบันการเงินชุมชน
                                            ธนาคารชุมชน บริการฝาก ถอน กู้ยืมและสวัสดิการ
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_3s_operation_5" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_3s_operation_5" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_3s_operation_5_refer"
                                                id="goals_3s_operation_5_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                                <div id="goals_3s_operation_5_refer_file"></div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>









                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">6. สถานบันการเงินชุมชน
                                            ธนาคารชุมชน บริการรับฝากเงินที่บ้าน
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_3s_operation_6" value="yes" checked
                                                    required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_3s_operation_6" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file" class="form-control " name="goals_3s_operation_6_refer"
                                                id="goals_3s_operation_6_refer" accept="image/*,.pdf,.docx,.xlsx" />
                                                <div id="goals_3s_operation_6_refer_file"></div>
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
                                <input type="hidden" name="goals_3s_refer" value="{{$round}}">
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
