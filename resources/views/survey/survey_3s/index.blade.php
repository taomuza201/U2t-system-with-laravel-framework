@extends('layouts.template', ['title' => __('ข้อมูลรายชื่อบุคคล')])

@section('content')
@include('survey.survey_3s.header', [
'title' => __('แบบสำรวจชุดที่ 3 สำหรับศาสนสถาน') ,
])


<style>
    .dataTables_filter {
        display: none;
    }

    .label_float {
        margin-top: 10px;
        float: left;
    }

    span {
        display: block;
        overflow: hidden;
        padding: 0px 4px 0px 6px;
    }
    .border_top{
        border-top-style: solid;
    }

    .border_bottom{
        border-bottom-style: solid;
    }

</style>
<div class="container-fluid mt--7">

    <form action="survey_3s/store" method="post">
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
                        <div class="row align-items-center m-1">
                            <div class="col-12 col-md-7">
                                <div class="custom-control custom-radio">
                                    <label class="label_float"> ชื่อศาสนสถาน : </label>
                                    <span>
                                        <input type="text" class="form-control" id="survey_3s_religious_place"
                                            name="survey_3s_religious_place" placeholder="กรุณากรอกชื่อศาสนสถาน" required
                                            autofocus> </span>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center m-1">
                            <div class="col-12 col-md-7">
                                <div class="custom-control custom-radio">
                                    <label class="label_float"> ที่อยู่ : </label>
                                    <span>
                                        <input type="text" class="form-control" id="survey_3s_address"
                                            name="survey_3s_address" placeholder="กรุณากรอกที่อยู่" required
                                            autofocus> </span>
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
                                            <center>แนวปฏิบัติ </center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td class="screen" style="white-space: normal; "> 1. มีการคัดกรอง ผู้นำทางศาสนา ผู้ประกอบพิธีกรรมทางศาสนา/ผู้ปฏิบัติงาน หรือผู้เข้าร่วมประกอบ พิธีกรรมทางศาสนา หากมีอาการไข้หรือ วัดอุณหภูมิได้ตั้งแต่ 37.5 องศาเซลเซียสขึ้นไป ร่วมกับไอ น้ำมูก เจ็บ คอ จมูกไม่ได้กลิ่น ลิ้นไม่รับรส หายใจเร็ว หายใจเหนื่อย หรือหายใจลำบากอย่างใดอย่างหนึ่ง และอาจมีอาการ ท้องเสียร่วมด้วย ขอความร่วมมือไม่เข้าร่วมกิจกรรม/พิธีกรรมทางศาสนาและแนะนำไปพบแพทย์ หรือไม่ <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="survey_3s_no_1" id="survey_3s_no_1" value="yes"
                                                    checked required>
                                                <label>มี</label>
                                                <input type="radio" name="survey_3s_no_1" id="survey_3s_no_1"
                                                value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea
                                                class="form-control{{ $errors->has('survey_3s_no_1_note') ? ' is-invalid' : '' }}"
                                                placeholder="{{ __('หมายเหตุ') }}" name="survey_3s_no_1_note"
                                                id="survey_3s_no_1_note" cols="30" rows="3" maxlength="255"
                                                style="height:auto;"></textarea>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>


                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; "> 2. กำหนดให้ผู้เข้าร่วมกิจกรรม ต้องสวมหน้ากากผ้าหรือหน้ากากอนามัยตลอดเวลา และจัดให้มีอุปกรณ์ป้องกันตนเองที่จำเป็น หรือไม่
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="survey_3s_no_2" id="survey_3s_no_2" value="yes"
                                                    checked required>
                                                <label>มี</label>
                                                <input type="radio" name="survey_3s_no_2" id="survey_3s_no_2"
                                                value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea
                                                class="form-control{{ $errors->has('survey_3s_no_2_note') ? ' is-invalid' : '' }}"
                                                placeholder="{{ __('หมายเหตุ') }}" name="survey_3s_no_2_note"
                                                id="survey_3s_no_2_note" cols="30" rows="3" maxlength="255"
                                                style="height:auto;"></textarea>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; "> 3. จัดให้มีที่ล้างมือพร้อมสบู่และน้ำ หรือเจลแอลกอฮอล์สำหรับทำความสะอาดมือไว้บริการบริเวณ ต่าง ๆ อย่างเพียงพอ หรือไม่
                                            <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="survey_3s_no_3" id="survey_3s_no_3" value="yes"
                                                    checked required>
                                                <label>มี</label>
                                                <input type="radio" name="survey_3s_no_3" id="survey_3s_no_3"
                                                value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea
                                                class="form-control{{ $errors->has('survey_3s_no_3_note') ? ' is-invalid' : '' }}"
                                                placeholder="{{ __('หมายเหตุ') }}" name="survey_3s_no_3_note"
                                                id="survey_3s_no_3_note" cols="30" rows="3" maxlength="255"
                                                style="height:auto;"></textarea>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>
                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; "> 
                                        4. มีมาตรการหรือกำหนดสัญลักษณ์เพื่อให้มีการเว้นระยะห่างระหว่างบุคคลอย่างน้อย 1 เมตร และ จำกัดจำนวนผู้เข้าร่วมกิจกรรมตามขนาดพื้นที่ เพื่อลดความแออัด เช่น กระจายมุมประกอบพิธีกรรม หรือไม่
                                            <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="survey_3s_no_4" id="survey_3s_no_4" value="yes"
                                                    checked required>
                                                <label>มี</label>
                                                <input type="radio" name="survey_3s_no_4" id="survey_3s_no_4"
                                                value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea
                                                class="form-control{{ $errors->has('survey_3s_no_4_note') ? ' is-invalid' : '' }}"
                                                placeholder="{{ __('หมายเหตุ') }}" name="survey_3s_no_4_note"
                                                id="survey_3s_no_4_note" cols="30" rows="3" maxlength="255"
                                                style="height:auto;"></textarea>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; "> 5. จัดให้มีการลงทะเบียนก่อนเข้าและออกจากสถานที่ ด้วยแอพพลิเคชั่นที่ทางราชการกำหนด หรือ จัดให้มีสมุดสำหรับลงทะเบียน หรือไม่<tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="survey_3s_no_5" id="survey_3s_no_5" value="yes"
                                                    checked required>
                                                <label>มี</label>
                                                <input type="radio" name="survey_3s_no_5" id="survey_3s_no_5"
                                                value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea
                                                class="form-control{{ $errors->has('survey_3s_no_5_note') ? ' is-invalid' : '' }}"
                                                placeholder="{{ __('หมายเหตุ') }}" name="survey_3s_no_5_note"
                                                id="survey_3s_no_5_note" cols="30" rows="3" maxlength="255"
                                                style="height:auto;"></textarea>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">6. มีการทำความสะอาดพื้นผิว และอุปกรณ์ที่ใช้ร่วมกันทุกวัน เช่น ห้องสำหรับประกอบพิธีกรรมทาง ศาสนา ห้องสารภาพบาป เป็นต้น และทำความสะอาดห้องส้วม อย่างน้อยวันละ 2 ครั้ง และอาจเพิ่มความถี่ กรณี มีผู้ใช้บริการมากขึ้น ด้วยน้ำยาทำความสะอาดและฆ่าเชื้อโรคด้วยโซเดียมไฮโปคลอไรท์ 0.1% โดยเน้นบริเวณจุด เสี่ยง ได้แก่ ลูกบิดประตู ก๊อกน้ำอ่างล้างมือ ที่กดโถส้วมหรือ โถปัสสาวะ และสายฉีดน้ำชำระ ทั้งนี้ ต้องจัดให้มีสบู่ สำหรับล้างมือ อย่างเพียงพอ หรือไม่
                                            <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="survey_3s_no_6" id="survey_3s_no_6" value="yes"
                                                    checked required>
                                                <label>มี</label>
                                                <input type="radio" name="survey_3s_no_6" id="survey_3s_no_6"
                                                value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea
                                                class="form-control{{ $errors->has('survey_3s_no_6_note') ? ' is-invalid' : '' }}"
                                                placeholder="{{ __('หมายเหตุ') }}" name="survey_3s_no_6_note"
                                                id="survey_3s_no_6_note" cols="30" rows="3" maxlength="255"
                                                style="height:auto;"></textarea>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">7. จัดให้มีการระบายอากาศในอาคารอย่างเหมาะสม เช่น ให้เปิดประตู หน้าต่าง เพื่อระบายอากาศ หากมีเครื่องปรับอากาศให้ทำความสะอาดระบบระบายอากาศอย่างสม่ำเสมอ หรือไม่<tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="survey_3s_no_7" id="survey_3s_no_7" value="yes"
                                                    checked required>
                                                <label>มี</label>
                                                <input type="radio" name="survey_3s_no_7" id="survey_3s_no_7"
                                                value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea
                                                class="form-control{{ $errors->has('survey_3s_no_7_note') ? ' is-invalid' : '' }}"
                                                placeholder="{{ __('หมายเหตุ') }}" name="survey_3s_no_7_note"
                                                id="survey_3s_no_7_note" cols="30" rows="3" maxlength="255"
                                                style="height:auto;"></textarea>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">8. กรณี จัดให้มีการปรุง/ประกอบอาหาร ให้ปฏิบัติ ดังนี้
                                            <br>- หากผู้สัมผัสอาหารมีอาการไข้หรือ วัดอุณหภูมิได้ตั้งแต่ 37.5 องศาเซลเซียสขึ้นไป ร่วมกับไอ น้ำมูก เจ็บคอ จมูกไม่ได้กลิ่น ลิ้นไม่รับรส หายใจเร็ว หายใจเหนื่อย หรือหายใจลำบากอย่างใดอย่างหนึ่ง และอาจ มีอาการท้องเสียร่วมด้วย ให้งดปฏิบัติหน้าที่ แจ้งผู้นำ หรือหัวหน้างาน และไปพบแพทย์
                                            <br>- ในขณะปฏิบัติงาน ผู้สัมผัสอาหารต้องสวมหมวกคลุมผม ผ้ากันเปื้อน หน้ากากผ้า และถุงมือ และมีการปฏิบัติตนตามหลักสุขาภิบาลอาหาร  
                                            <br>- หมั่นล้างมือด้วยสบู่และน้ำ ก่อนหยิบหรือจับอาหารและหลังการใช้ส้วม
                                            <br> - ปกปิดอาหาร ใช้ถุงมือและที่คีบอาหาร ห้ามใช้มือหยิบจับอาหารที่พร้อมรับประทานโดยตรง และ จัดให้มีช้อนกลางเมื่อเสิร์ฟอาหารที่ต้องรับประทานร่วมกัน หรือ จัดให้ใช้ช้อนกลางส่วนตัว - ทำความสะอาดสถานที่ พื้นที่ หรืออุปกรณ์ เช่น ห้องครัว อุปกรณ์ปรุง/ประกอบอาหาร โต๊ะ อาหาร เก้าอี้ ด้วยน้ำยาทำความสะอาด อย่างน้อยวันละ 2 ครั้ง อาจเพิ่มความถี่ในการทำความสะอาด กรณี มีผู้ใช้บริการจำนวนมาก และล้างภาชนะอุปกรณ์หรือสิ่งของเครื่องใช้ให้สะอาดทุกครั้งหลังใช้งาน 
                                            <br>- สถานที่ปรุง/ประกอบอาหาร ควรจัดให้มีการระบายอากาศได้ดี
                                            <br>- จัดให้มีภาชนะรองรับขยะที่มีฝาปิดไว้ภายในสถานที่ปรุง/ประกอบอาหาร ควรมีการคัดแยกขยะ อย่างน้อย 2 ประเภท ได้แก่ ขยะย่อยสลายได้ และขยะรีไซเคิล และเก็บรวบรวมขยะใส่ถุงขยะ ปิดปากถุงให้ มิดชิดก่อนส่งไปกำจัดอย่างถูกต้อง ทุกวัน หรือไม่
                                           
                                            <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="survey_3s_no_8" id="survey_3s_no_8" value="yes"
                                                    checked required>
                                                <label>มี</label>
                                                <input type="radio" name="survey_3s_no_8" id="survey_3s_no_8"
                                                value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea
                                                class="form-control{{ $errors->has('survey_3s_no_8_note') ? ' is-invalid' : '' }}"
                                                placeholder="{{ __('หมายเหตุ') }}" name="survey_3s_no_8_note"
                                                id="survey_3s_no_8_note" cols="30" rows="3" maxlength="255"
                                                style="height:auto;"></textarea>
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


    $(document).ready(function () {






    });

</script>

@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
