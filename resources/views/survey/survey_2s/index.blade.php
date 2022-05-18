@extends('layouts.template', ['title' => __('ข้อมูลรายชื่อบุคคล')])

@section('content')
@include('survey.survey_2s.header', [
'title' => __('แบบสำรวจชุดที่  2  สำหรับตลาด') ,
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

    <form action="survey_2s/store" method="post">
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
                                    <label class="label_float"> ชื่อตลาด : </label>
                                    <span>
                                        <input type="text" class="form-control" id="survey_2s_maket"
                                            name="survey_2s_maket" placeholder="กรุณากรอกชื่อตลาด" required
                                            autofocus> </span>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center m-1">
                            <div class="col-12 col-md-7">
                                <div class="custom-control custom-radio">
                                    <label class="label_float"> ที่อยู่ : </label>
                                    <span>
                                        <input type="text" class="form-control" id="survey_2s_address"
                                            name="survey_2s_address" placeholder="กรุณากรอกที่อยู่" required
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
                                        <td class="screen" style="white-space: normal; "> 1.
                                            กำหนดให้มีทางเข้า-ออก ที่ชัดเจน และมีการคัดกรองพนักงาน เจ้าหน้าที่ และผู้รับบริการ พร้อมทำสัญลักษณ์ให้กับผู้ที่ผ่านการคัดกรอง หากพบว่ามีอาการไข้หรือวัดอุณหภูมิได้ ตั้งแต่ 37.5 องศา เซลเซียสขึ้นไป ร่วมกับ ไอ น้ำมูก เจ็บคอ จมูกไม่ได้กลิ่น ลิ้นไม่รับรส หายใจเร็ว หายใจเหนื่อย หรือหายใจ ลำบาก อย่างใดอย่างหนึ่ง และอาจมีอาการท้องเสียร่วมด้วย แนะนำไปพบแพทย์ทันที หรือไม่
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="survey_2s_no_1" id="survey_2s_no_1" value="yes"
                                                    checked required>
                                                <label>มี</label>
                                                <input type="radio" name="survey_2s_no_1" id="survey_2s_no_1"
                                                value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea
                                                class="form-control{{ $errors->has('survey_2s_no_1_note') ? ' is-invalid' : '' }}"
                                                placeholder="{{ __('หมายเหตุ') }}" name="survey_2s_no_1_note"
                                                id="survey_2s_no_1_note" cols="30" rows="3" maxlength="255"
                                                style="height:auto;"></textarea>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>


                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; "> 2. มีมาตรการให้ผู้ค้าและผู้ใช้บริการต้องสวมหน้ากากผ้าหรือหน้ากากอนามัยตลอดเวลาที่ใช้บริการ หรือไม่ 
                                    <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="survey_2s_no_2" id="survey_2s_no_2" value="yes"
                                                    checked required>
                                                <label>มี</label>
                                                <input type="radio" name="survey_2s_no_2" id="survey_2s_no_2"
                                                value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea
                                                class="form-control{{ $errors->has('survey_2s_no_2_note') ? ' is-invalid' : '' }}"
                                                placeholder="{{ __('หมายเหตุ') }}" name="survey_2s_no_2_note"
                                                id="survey_2s_no_2_note" cols="30" rows="3" maxlength="255"
                                                style="height:auto;"></textarea>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; "> 3. มีมาตรการเว้นระยะห่างระหว่างบุคคล แผงค้า โต๊ะและที่นั่งรับประทานอาหาร การเลือกซื้อสินค้า และชำระเงิน อย่างน้อย 1 เมตร รวมถึงกำหนดมาตรการเพื่อลดความแออัด เช่น กำหนดจำนวนคนต่อพื้นที่ กำหนดระยะเวลาที่ใช้บริการ ไม่จัดกิจกรรมหรือให้บริการที่ทำให้เกิดการรวมกลุ่มของผู้คน หรือไม่
                                            <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="survey_2s_no_3" id="survey_2s_no_3" value="yes"
                                                    checked required>
                                                <label>มี</label>
                                                <input type="radio" name="survey_2s_no_3" id="survey_2s_no_3"
                                                value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea
                                                class="form-control{{ $errors->has('survey_2s_no_3_note') ? ' is-invalid' : '' }}"
                                                placeholder="{{ __('หมายเหตุ') }}" name="survey_2s_no_3_note"
                                                id="survey_2s_no_3_note" cols="30" rows="3" maxlength="255"
                                                style="height:auto;"></textarea>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>
                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; "> 
                                        4. จัดให้มีที่ล้างมือด้วยสบู่และน้ำหรือเจลแอลกอฮอล์ ให้บริการแก่ผู้ค้าและผู้ซื้ออย่างเพียงพอ หรือไม่
                                            <tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="survey_2s_no_4" id="survey_2s_no_4" value="yes"
                                                    checked required>
                                                <label>มี</label>
                                                <input type="radio" name="survey_2s_no_4" id="survey_2s_no_4"
                                                value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea
                                                class="form-control{{ $errors->has('survey_2s_no_4_note') ? ' is-invalid' : '' }}"
                                                placeholder="{{ __('หมายเหตุ') }}" name="survey_2s_no_4_note"
                                                id="survey_2s_no_4_note" cols="30" rows="3" maxlength="255"
                                                style="height:auto;"></textarea>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; "> 5. จัดให้มีการทำความสะอาด บริเวณพื้นตลาด แผงจำหน่ายอาหารสดหรือแผงชำแหละเนื้อสัตว์สด ด้วยน้ำยาทำความสะอาดหรือน้ำยาฆ่าเชื้อเป็นประจำทุกวัน และทำความสะอาดตลาดตามหลักการสุขาภิบาล อย่างน้อยสัปดาห์ละ 1 ครั้ง หรือไม่<tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="survey_2s_no_5" id="survey_2s_no_5" value="yes"
                                                    checked required>
                                                <label>มี</label>
                                                <input type="radio" name="survey_2s_no_5" id="survey_2s_no_5"
                                                value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea
                                                class="form-control{{ $errors->has('survey_2s_no_5_note') ? ' is-invalid' : '' }}"
                                                placeholder="{{ __('หมายเหตุ') }}" name="survey_2s_no_5_note"
                                                id="survey_2s_no_5_note" cols="30" rows="3" maxlength="255"
                                                style="height:auto;"></textarea>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">6. จัดให้มีการทำความสะอาดห้องน้ำ ห้องส้วมที่ให้บริการในตลาด หรือไม่<tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="survey_2s_no_6" id="survey_2s_no_6" value="yes"
                                                    checked required>
                                                <label>มี</label>
                                                <input type="radio" name="survey_2s_no_6" id="survey_2s_no_6"
                                                value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea
                                                class="form-control{{ $errors->has('survey_2s_no_6_note') ? ' is-invalid' : '' }}"
                                                placeholder="{{ __('หมายเหตุ') }}" name="survey_2s_no_6_note"
                                                id="survey_2s_no_6_note" cols="30" rows="3" maxlength="255"
                                                style="height:auto;"></textarea>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">7. จัดให้มีภาชนะรองรับขยะที่มีฝาปิดไว้ภายในบริเวณตลาด และเก็บรวบรวมขยะไว้ยังที่พักขยะรวม ของตลาดทุกวัน หรือไม่<tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="survey_2s_no_7" id="survey_2s_no_7" value="yes"
                                                    checked required>
                                                <label>มี</label>
                                                <input type="radio" name="survey_2s_no_7" id="survey_2s_no_7"
                                                value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea
                                                class="form-control{{ $errors->has('survey_2s_no_7_note') ? ' is-invalid' : '' }}"
                                                placeholder="{{ __('หมายเหตุ') }}" name="survey_2s_no_7_note"
                                                id="survey_2s_no_7_note" cols="30" rows="3" maxlength="255"
                                                style="height:auto;"></textarea>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">8. จัดสภาพแวดล้อมในตลาด เพื่อความสะดวกผู้ซื้อและลดระยะเวลาใช้บริการตลาด เช่น จัดให้มีการ ระบายอากาศที่เหมาะสม จัดทำผังแสดงโซนการจำหน่ายสินค้า จัดทำป้ายราคาสินค้า หรือไม่<tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="survey_2s_no_8" id="survey_2s_no_8" value="yes"
                                                    checked required>
                                                <label>มี</label>
                                                <input type="radio" name="survey_2s_no_8" id="survey_2s_no_8"
                                                value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea
                                                class="form-control{{ $errors->has('survey_2s_no_8_note') ? ' is-invalid' : '' }}"
                                                placeholder="{{ __('หมายเหตุ') }}" name="survey_2s_no_8_note"
                                                id="survey_2s_no_8_note" cols="30" rows="3" maxlength="255"
                                                style="height:auto;"></textarea>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    <tr class="border_top">
                                        <td class="screen" style="white-space: normal; ">9. มีการสื่อสารและประชาสัมพันธ์ ให้ความรู้ในการป้องกันโรคติดเชื้อโควิดตามช่องทางต่าง ๆ และสื่อสาร เน้นย้ำประชาสัมพันธ์ให้ผู้ประกอบกิจการเจ้าของร้าน/แผงในตลาด รวมถึงผู้ช่วยขายทั้งชาวไทยและแรงงาน ต่างด้าว ให้สังเกตอาการตนเอง หรือถ้าได้เดินทางไป หรือเกี่ยวข้องกับแหล่งที่เกิดการระบาด แนะนำให้ไป ตรวจคัดกรอง COVID-19 โดยเร็วที่สุด หรือไม่<tr>
                                        <td>
                                            <center>
                                                <input type="radio" name="survey_2s_no_9" id="survey_2s_no_9" value="yes"
                                                    checked required>
                                                <label>มี</label>
                                                <input type="radio" name="survey_2s_no_9" id="survey_2s_no_9"
                                                value="no" required>
                                                <label>ไม่มี</label>
                                            </center>
                                        </td>
                                    </tr>
                                    <tr class="">
                                        <td>
                                            <textarea
                                                class="form-control{{ $errors->has('survey_2s_no_9_note') ? ' is-invalid' : '' }}"
                                                placeholder="{{ __('หมายเหตุ') }}" name="survey_2s_no_9_note"
                                                id="survey_2s_no_9_note" cols="30" rows="3" maxlength="255"
                                                style="height:auto;"></textarea>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    {{-- <tr>
                                       <div class="border_top"></div>
                                    </tr> --}}


                                    
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
