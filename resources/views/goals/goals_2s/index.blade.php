@extends('layouts.template', ['title' => __('เป้าหมายที่ 2 ได้รับการจัดสรรทรัพยากรอย่างเป็นธรรม')])

@section('content')
@include('goals.goals_2s.header', [
'title' => __('เป้าหมายที่ 2 ได้รับการจัดสรรทรัพยากรอย่างเป็นธรรม') ,
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
                                        <input type="text" class="form-control" id="goals_2s_at_name"
                                            name="goals_2s_at_name" placeholder="ชื่อผู้ใช้ข้อมูล" required autofocus>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-12 col-md-7">
                                <div class="custom-control custom-radio">
                                    <label class="label_float"> สถานที่สอบถามข้อมูล : </label>
                                    <span>
                                        <input type="text" class="form-control" id="goals_2s_address"
                                            name="goals_2s_address" placeholder="สถานที่สอบถามข้อมูล" required
                                            autofocus> </span>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-12 col-md-7">
                                <div class="custom-control custom-radio">
                                    <label class="label_float"> ปัญหา/อุปสรรค์ : </label>
                                    <span>
                                        <textarea type="text" class="form-control" id="goals_2s_problem"  rows="3"
                                            name="goals_2s_problem" placeholder="ปัญหา/อุปสรรค์" required autofocus></textarea>
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
                                                <input type="radio" name="goals_2s_indicators_1" value="high" checked required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_2s_indicators_1" value="standard" required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_2s_indicators_1" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_2s_indicators_1" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file"  class="form-control "name="goals_2s_indicators_1_refer" id="goals_2s_indicators_1_refer"   accept="image/*,.pdf,.docx,.xlsx"  />
                                            
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    

                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; "> 2. ครัวเรือนที่มีรายได้ต่ำกว่าเกณฑ์ จปฐ. ลดลง หรือไม่มีเลย
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_2s_indicators_2" value="high" checked required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_2s_indicators_2" value="standard" required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_2s_indicators_2" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_2s_indicators_2" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file"  class="form-control "name="goals_2s_indicators_2_refer" id="goals_2s_indicators_2_refer"  accept="image/*,.pdf,.docx,.xlsx" />  
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">3. ตัวชี้วัดความเข้มแข็งของชุมชนท้องถิ่น
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_2s_indicators_3" value="high" checked required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_2s_indicators_3" value="standard" required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_2s_indicators_3" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_2s_indicators_3" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file"  class="form-control "name="goals_2s_indicators_3_refer" id="goals_2s_indicators_3_refer" accept="image/*,.pdf,.docx,.xlsx"  />
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>


                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">4. ตัวชี้วัดเมืองอยู่ดีมีสุข
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_2s_indicators_4" value="high" checked required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_2s_indicators_4" value="standard" required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_2s_indicators_4" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_2s_indicators_4" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file"  class="form-control "name="goals_2s_indicators_4_refer" id="goals_2s_indicators_4_refer"  accept="image/*,.pdf,.docx,.xlsx"  />
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">5. ตัวชี้วัดความสุขสู่ตำบลจัดการตนเอง
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_2s_indicators_5" value="high" checked required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_2s_indicators_5" value="standard" required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_2s_indicators_5" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_2s_indicators_5" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file"  class="form-control "name="goals_2s_indicators_5_refer" id="goals_2s_indicators_5_refer"  accept="image/*,.pdf,.docx,.xlsx"  />
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>


                                    
                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">6. ครัวเรือนไม่มีที่ทำกิน ได้รับการช่วยเหลือ
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_2s_indicators_6" value="high" checked required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_2s_indicators_6" value="standard" required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_2s_indicators_6" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_2s_indicators_6" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file"  class="form-control "name="goals_2s_indicators_6_refer" id="goals_2s_indicators_6_refer"   accept="image/*,.pdf,.docx,.xlsx" />
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>


                                    
                                     
                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">7. ครัวเรือนกลุ่มเปราะบาง ได้รับการดูแล การทำงานร่วมกันของกลุ่ม องค์กรชุมชนที่ให้การดูแล ช่วยเหลือกัน เป็นต้น
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_2s_indicators_7" value="high" checked required>
                                                <label>สูงกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_2s_indicators_7" value="standard" required>
                                                <label>มาตรฐาน</label> <br>
                                                <input type="radio" name="goals_2s_indicators_7" value="low" required>
                                                <label>ต่ำกว่ามาตรฐาน</label>
                                                <input type="radio" name="goals_2s_indicators_7" value="none" required>
                                                <label>ไม่มีข้อมูล</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file"  class="form-control "name="goals_2s_indicators_7_refer" id="goals_2s_indicators_7_refer"  accept="image/*,.pdf,.docx,.xlsx"  />
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
                                        <td class="screen" style="white-space: normal; ">1. ข้อตกลงของชุมชนในการจัดสรรที่ทำกินให้ครัวเรือนยากจน
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_2s_operation_1" value="yes" checked required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_2s_operation_1" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file"  class="form-control "name="goals_2s_operation_1_refer" id="goals_2s_operation_1_refer"  accept="image/*,.pdf,.docx,.xlsx"  />
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    

                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">2. กองทุนสวัสดิการให้ผู้ต้องการความช่วยเหลือเป็นสมาชิก รับสวัสดิการได้โดยไม่ต้องจ่ายสมทบกองทุน กลุ่มออมทรัพย์
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_2s_operation_2" value="yes" checked required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_2s_operation_2" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file"  class="form-control "name="goals_2s_operation_2_refer" id="goals_2s_operation_2_refer"  accept="image/*,.pdf,.docx,.xlsx"  />
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>



                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">3. ให้ครัวเรือนยากจนมีสิทธิ์ใช้บริการกู้ยืมได้ การพัฒนาทักษะอาชีพเสริม เพื่อเพิ่มรายได้ ลดรายจ่าย
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_2s_operation_3" value="yes" checked required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_2s_operation_3" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file"  class="form-control "name="goals_2s_operation_3_refer" id="goals_2s_operation_3_refer"  accept="image/*,.pdf,.docx,.xlsx"  />
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; "> 4. ได้สิทธิในการใช้ประโยชน์จากกองทุนข้าว กองทุนปุ๋ย รับสิทธิ์ฌาปนกิจเมื่อเสียชีวิตจากเงื่อนไขเป็นสมาชิกในชุมชน อาจไม่ได้เป็นสมาชิกในกลุ่ม
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_2s_operation_4" value="yes" checked required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_2s_operation_4" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file"  class="form-control "name="goals_2s_operation_4_refer" id="goals_2s_operation_4_refer" accept="image/*,.pdf,.docx,.xlsx"  />
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">5. ได้รับการช่วยเหลือจากกองทุน สถาบันการเงินชุมชน จากเหตุภัยพิบัติแม้ไม่ได้เป็นสมาชิก
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="goals_2s_operation_5" value="yes" checked required>
                                                <label>มี</label>
                                                <input type="radio" name="goals_2s_operation_5" value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            อ้างอิง หลักฐานประกอบ
                                            <input type="file"  class="form-control "name="goals_2s_operation_5_refer" id="goals_2s_operation_5_refer"  accept="image/*,.pdf,.docx,.xlsx"  />
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
                                <input type="hidden" name="goals_2s_refer" value="{{$round}}">
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
