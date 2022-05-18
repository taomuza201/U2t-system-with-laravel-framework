@extends('layouts.template', ['title' => __('ข้อมูลรายชื่อบุคคล')])

@section('content')
@include('survey.survey_1s.header', [
'title' => __('แบบสำรวจชุดที่ 1 สำหรับที่พักอาศัย ') ,
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

    <form action="survey_1s/store" method="post">
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
                                    <label class="label_float"> ที่อยู่ : </label>
                                    <span>
                                        <input type="text" class="form-control" id="survey_1s_address"
                                            name="survey_1s_address" placeholder="กรุณากรอกที่พักอาศัย" required
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
                                    <tr>
                                        <td class="screen" style="white-space: normal; "> 1.
                                            มีการประเมินตนเองและบุคคลที่อาศัยอยู่ในครัวเรือนว่า
                                            <br> –
                                            เป็นกลุ่มเสี่ยงต่อการติดเชื้อหรือหากติดเชื้อแล้วจะมีอาการรุนแรงหรือไม่
                                            เช่นผู้สูงอายุผู้ป่วยเรื้อรัง หรือไม่
                                            <br> – ในการทำงานหรือการใช้ชีวิตประจำวันมีความเสี่ยงต่อการติดเชื้อ เช่น
                                            บุคลากรทางการแพทย์
                                            ผู้ปฏิบัติงานในสถานบันเทิง/สถานบริการต่างๆ เป็นต้น หรือไม่
                                            <br> -
                                            ตนเองหรือบุคคลในครัวเรือนมีการเดินทางกลับจากพื้นที่เสี่ยงหรือพื้นที่ระบาด
                                            หรือไม่
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="survey_1s_no_1" id="survey_1s_no_1" value="yes"
                                                    checked required>
                                                <label>มี</label>
                                                <input type="radio" name="survey_1s_no_1" id="survey_1s_no_1"
                                                value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea
                                                class="form-control{{ $errors->has('survey_1s_no_1_note') ? ' is-invalid' : '' }}"
                                                placeholder="{{ __('หมายเหตุ') }}" name="survey_1s_no_1_note"
                                                id="survey_1s_no_1_note" cols="30" rows="3" maxlength="255"
                                                style="height:auto;"></textarea>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>


                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; "> 2. มีการสังเกตอาการของตนเองและบุคคลที่อาศัยอยู่ร่วมกัน หากพบว่ามีไข้ ร่วมกับไอ มีน้ำมูก เจ็บคอ จมูกไม่ได้กลิ่น ลิ้นไม่รับรส หายใจเร็ว หายใจเหนื่อย หรือหายใจลำบากอย่างใดอย่างหนึ่ง และอาจมีอาการ ท้องเสียร่วมด้วย ให้รีบไปพบแพทย์ทันที หรือไม่
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="survey_1s_no_2" id="survey_1s_no_2" value="yes"
                                                    checked required>
                                                <label>มี</label>
                                                <input type="radio" name="survey_1s_no_2" id="survey_1s_no_2"
                                                value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea
                                                class="form-control{{ $errors->has('survey_1s_no_2_note') ? ' is-invalid' : '' }}"
                                                placeholder="{{ __('หมายเหตุ') }}" name="survey_1s_no_2_note"
                                                id="survey_1s_no_2_note" cols="30" rows="3" maxlength="255"
                                                style="height:auto;"></textarea>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; "> 3. มีการดูแลสุขอนามัยด้วยการล้างมือบ่อย ๆ ด้วยน้ำและสบู่ หรือเจลแอลกอฮอล์โดยเฉพาะก่อนเตรียม ปรุงอาหาร ก่อนรับประทานอาหาร หลังเข้าห้องน้ำ หลังหยิบจับสิ่งสกปรก หลังเยี่ยมผู้ป่วยในสถานพยาบาล หลังสัมผัสหรือเล่นกับสัตว์เลี้ยง และหลังกลับจากนอกบ้าน หรือไม่
                                            <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="survey_1s_no_3" id="survey_1s_no_3" value="yes"
                                                    checked required>
                                                <label>มี</label>
                                                <input type="radio" name="survey_1s_no_3" id="survey_1s_no_3"
                                                value="no"" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea
                                                class="form-control{{ $errors->has('survey_1s_no_3_note') ? ' is-invalid' : '' }}"
                                                placeholder="{{ __('หมายเหตุ') }}" name="survey_1s_no_3_note"
                                                id="survey_1s_no_3_note" cols="30" rows="3" maxlength="255"
                                                style="height:auto;"></textarea>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>
                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; "> 
                                        4. มีการรับประทานอาหารที่ปรุงสุกใหม่ และใช้ช้อนส่วนตัว หรือไม่
                                            <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="survey_1s_no_4" id="survey_1s_no_4" value="yes"
                                                    checked required>
                                                <label>มี</label>
                                                <input type="radio" name="survey_1s_no_4" id="survey_1s_no_4"
                                                value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea
                                                class="form-control{{ $errors->has('survey_1s_no_4_note') ? ' is-invalid' : '' }}"
                                                placeholder="{{ __('หมายเหตุ') }}" name="survey_1s_no_4_note"
                                                id="survey_1s_no_4_note" cols="30" rows="3" maxlength="255"
                                                style="height:auto;"></textarea>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; "> 5. ไม่ใช้สิ่งของเครื่องใช้ส่วนตัวร่วมกัน เช่น ผ้าเช็ดหน้า ผ้าเช็ดตัว ช้อน แก้วน้ำ หลอดดูดน้ำ หรือไม่<tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="survey_1s_no_5" id="survey_1s_no_5" value="yes"
                                                    checked required>
                                                <label>มี</label>
                                                <input type="radio" name="survey_1s_no_5" id="survey_1s_no_5"
                                                value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea
                                                class="form-control{{ $errors->has('survey_1s_no_5_note') ? ' is-invalid' : '' }}"
                                                placeholder="{{ __('หมายเหตุ') }}" name="survey_1s_no_5_note"
                                                id="survey_1s_no_5_note" cols="30" rows="3" maxlength="255"
                                                style="height:auto;"></textarea>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">6. เมื่อกลับจากการทำภารกิจหรือกิจกรรมนอกบ้าน ให้ล้างมือ ชำระร่างกาย เปลี่ยนเครื่องแต่งกายทันที หรือไม่<tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="survey_1s_no_6" id="survey_1s_no_6" value="yes"
                                                    checked required>
                                                <label>มี</label>
                                                <input type="radio" name="survey_1s_no_6" id="survey_1s_no_6"
                                                value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea
                                                class="form-control{{ $errors->has('survey_1s_no_6_note') ? ' is-invalid' : '' }}"
                                                placeholder="{{ __('หมายเหตุ') }}" name="survey_1s_no_6_note"
                                                id="survey_1s_no_6_note" cols="30" rows="3" maxlength="255"
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
