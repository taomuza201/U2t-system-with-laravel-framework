@extends('layouts.template', ['title' => __('สำรวจ และจัดเก็บข้อมูลเชิงลึกด้านศักยภาพของกลุ่มเป้าหมาย/วิสาหกิจที่เข้าร่วมโครงการ')])

@section('content')
@include('goals.goals_1s.header', [
'title' => __('สำรวจ และจัดเก็บข้อมูลเชิงลึกด้านศักยภาพของกลุ่มเป้าหมาย/วิสาหกิจที่เข้าร่วมโครงการ') ,
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

    input[type=number] {
        text-align: right;
    }

</style>
<div class="container-fluid mt--7">



    <form action="{{route('form8.store')}}" method="post" enctype="multipart/form-data">
        @csrf


        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <section id="part-1">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <p class="text-red">คำชี้แจง : ให้ทำการสำรวจและจัดเก็บข้อมูลเชิงลึกด้านศักยภาพของกลุ่มเป้าหมาย/วิสาหกิจที่เข้าร่วมโครงการ	ในกรณีที่สมาชิกกลุ่มวิสาหกิจไม่ได้เป็นคนในพื้นที่ ให้ใส่ที่อยู่ตามกลุ่มวิสาหกิจนั้นๆ 												
                                    </p>
                                </div>
                            </div>
 
                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> หมู่บ้าน : </label>
                                    <select name="form8s_villages_id" id="form8s_villages_id" class="form-control" required autofocus>
                                        <option value="">กรุณาเลือกหมู่บ้าน</option>

                                        @foreach ($villages as $row)
                                        <option value="{{$row->villages_id}}">{{$row->villages_name}}</option>
                                        @endforeach
                                 
        
                                    </select>
                                </div>
                               
                            </div>


                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> บ้านเลขที่ : </label>
                                    <input type="text" class="form-control" id="form8s_house_number"  name="form8s_house_number"
                                        required autofocus>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> เพศ : </label>
                                    <select name="form8s_sex" id="form8s_sex" class="form-control" required autofocus>
                                        <option value="">กรุณาเลือกเพศ</option>
                                        <option value="ชาย">ชาย</option>
                                        <option value="หญิง">หญิง</option>
                                        <option value="อื่นๆ">อื่นๆ</option>
                                        <option value="ไม่ระบุ/ไม่ทราบ">ไม่ระบุ/ไม่ทราบ</option>
                                    </select>
        
                                    
                                </div>
                               
                            </div>

                            
                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> ชื่อ-สกุล : </label>
                                    <input type="text" class="form-control" id="form8s_name"name="form8s_name"
                                        required autofocus>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> อายุ : </label>
                                    <input type="number" class="form-control" id="form8s_age" name="form8s_age"
                                        required autofocus>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ศาสนา : </label>
                                    <select name="form8s_religion" id="form8s_religion" class="form-control" required autofocus>
                                        <option value="">กรุณาเลือกศาสนา</option>
                                        <option value="ศาสนาพุทธ">ศาสนาพุทธ</option>
                                        <option value="ศาสนาอิสลาม">ศาสนาอิสลาม</option>
                                        <option value="ศาสนาคริสต์">ศาสนาคริสต์</option>
                                        <option value="ศาสนาอื่น ๆ">ศาสนาอื่น ๆ</option>
                                        <option value="ไม่มีศาสนา">ไม่มีศาสนา</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> เกี่ยวข้องกับหัวหน้าครัวเรือน : </label>
                                    <select name="form8s_about_head_of_household" id="form8s_about_head_of_household" class="form-control" required autofocus>
                                        <option value="">กรุณาเลือกความสัมพันธ์</option>
                                        <option value="เทียด">เทียด</option>
                                        <option value="ทวด">ทวด</option>
                                        <option value="ปู่/ตา">ปู่/ตา</option>
                                        <option value="ย่า/ยาย">ย่า/ยาย</option>
                                        <option value="บิดา">บิดา</option>
                                        <option value="มารดา">มารดา</option>
                                        <option value="ลุง">ลุง</option>
                                        <option value="ป้า">ป้า</option>
                                        <option value="น้า/อา">น้า/อา</option>
                                        <option value="พี่สะใภ้/น้องสะใภ้">พี่สะใภ้/น้องสะใภ้</option>
                                        <option value="พี่เขย/น้องเขย">พี่เขย/น้องเขย</option>
                                        <option value="ลูกพี่ลูกน้อง">ลูกพี่ลูกน้อง</option>
                                        <option value="บุตร">บุตร</option>
                                        <option value="หลาน">หลาน</option>
                                        <option value="เหลน">เหลน</option>
                                        <option value="เหลนสะใภ้/เหลนเขย">เหลนสะใภ้/เหลนเขย</option>
                                    </select>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> กรุณาเลือกระดับการศึกษา : </label>
                                    <select name="form8s_education_level" id="form8s_education_level" class="form-control" required autofocus>
                                        <option value="">กรุณาเลือกระดับการศึกษา</option>
                                        <option value="ต่ำกว่าระดับประถมศึกษา">ต่ำกว่าระดับประถมศึกษา</option>
                                        <option value="ระดับประถมศึกษา">ระดับประถมศึกษา</option>
                                        <option value="ระดับมัธยมศึกษา">ระดับมัธยมศึกษา</option>
                                        <option value="ระดับปริญญาตรี">ระดับปริญญาตรี</option>
                                        <option value="ประกาศนียบัตรบัณฑิตหรือเทียบเท่า">ประกาศนียบัตรบัณฑิตหรือเทียบเท่า</option>
                                        <option value="ไม่ได้รับการศึกษา">ไม่ได้รับการศึกษา</option>
                                        <option value="อื่นๆ">อื่นๆ</option>
                                        <option value="ไม่ระบุ/ไม่ทราบ">ไม่ระบุ/ไม่ทราบ</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> อาชีพหลัก/กำลังศึกษา : </label>
                                    <select name="form8s_occupation" id="form8s_occupation" class="form-control" required autofocus>
                                        <option value="">กรุณาเลือกอาชีพหลัก</option>
                                        <option value="ประกอบอาชีพเกษตรกร">ประกอบอาชีพเกษตรกร</option>
                                        <option value="ประกอบธุรกิจการค้า">ประกอบธุรกิจการค้า</option>
                                        <option value="รับเงินเดือนประจำ">รับเงินเดือนประจำ</option>
                                        <option value="รับจ้างทางการเกษตร">รับจ้างทางการเกษตร</option>
                                        <option value="รับจ้างทั่วไป">รับจ้างทั่วไป</option>
                                        <option value="กำลังศึกษา">กำลังศึกษา</option>
                                        <option value="ว่างงาน">ว่างงาน</option>
                                        <option value="อื่นๆ">อื่นๆ</option>
                                       
                                    </select>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ความเชี่ยวชาญ : </label>                            
                                        <div class="form-group">
                                            <textarea id="my-textarea" class="form-control" name="form8s_expertise" rows="3"     autofocus></textarea>
                                        </div>
                                </div>
                            </div>


                            
                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ที่พักอาศัยตั้งอยู่บน : </label>
                                    <select name="form8s_address_on" id="form8s_address_on" class="form-control" required autofocus>
                                        <option value="">กรุณาเลือกที่พักอาศัย</option>
                                        <option value="ที่ดินของตนเอง">ที่ดินของตนเอง</option>
                                        <option value="เช่า">เช่า</option>
                                        <option value="ที่สาธารณะ">ที่สาธารณะ</option>
                                        <option value="อื่นๆ">อื่นๆ</option>
                                    </select>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ที่ดินที่ใช้ประกอบอาชีพ : </label>
                                    <select name="form8s_occupational_land" id="form8s_occupational_land" class="form-control" required autofocus>
                                        <option value="">กรุณาเลือกที่ดินที่ใช้ประกอบอาชีพ</option>
                                        <option value="ที่ดินของตนเอง">ที่ดินของตนเอง</option>
                                        <option value="เช่า">เช่า</option>
                                        <option value="ที่สาธารณะ">ที่สาธารณะ</option>
                                        <option value="อื่นๆ">อื่นๆ</option>
                                    </select>
                                </div>
                            </div>


                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> มีการเก็บออมเงินรูปแบบใด : </label>
                                    <select name="form8s_saving_type" id="form8s_saving_type" class="form-control" required autofocus>
                                        <option value="">กรุณาเลือกการเก็บออมเงิน</option>
                                        <option value="เงินสด">เงินสด</option>
                                        <option value="เงินฝากธนาคาร">เงินฝากธนาคาร</option>
                                        <option value="เงินฝากกองทุนต่างๆ">เงินฝากกองทุนต่างๆ</option>
                                        <option value="ทำประกันชีวิต">ทำประกันชีวิต</option>
                                        <option value="ซื้อทองคำ">ซื้อทองคำ</option>
                                        <option value="ซื้อบ้านหรือที่ดิน">ซื้อบ้านหรือที่ดิน</option>
                                        <option value="ไม่มีการออมเงิน">ไม่มีการออมเงิน</option>
                                        <option value="อื่นๆ">อื่นๆ</option>
                                    </select>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> รายได้จากอาชีพหลัก : </label>
                                    <input type="number" class="form-control" id="form8s_main_money" min="0" name="form8s_main_money" value="0" maxlength="9"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"    required autofocus>
                                </div>
                            </div>


                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> รายได้จากอาชีพรอง/อาชีพเสริม : </label>
                                    <input type="number" class="form-control" id="form8s_sub_money" min="0" name="form8s_sub_money" value="0"  maxlength="9"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"  required autofocus>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> รายจ่าย : </label> 
                                    <input type="number" class="form-control" id="form8s_expenses" min="0" name="form8s_expenses" value="0" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    type = "number"  maxlength="9"
                                    required autofocus>
                                </div>
                            </div>

                        </section>
                        <div class="row">
                            <div class="col-12">
                                <p class="text-red">หมายเหตุ : ในกรณีที่ไม่ทราบรายได้และรายจ่ายให้ใส่จำนวนเงินเท่ากับ 0 
                                </p>
                            </div>
                        </div>



                        <center> <button type="submit" class="btn btn-primary mt-4"
                                onclick="return confirm('กรุณาตรวจสอบความถูกต้องของข้อมูลก่อนกดยืนยัน ?')">บันทึกข้อมูล</button>
                        </center>
                    </div>

                </div>

            </div>

        </div>





    </form>





    @include('layouts.footers.auth')
</div>






@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
