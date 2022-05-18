@extends('layouts.template', ['title' => __('จัดทำรายงานสถานภาพตำบล (Tambon profile)')])

@section('content')
@include('goals.goals_1s.header', [
'title' => __('จัดทำรายงานสถานภาพตำบล (Tambon profile)') ,
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



    <form action="{{route('form1.store')}}" method="post" enctype="multipart/form-data">
        @csrf


        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        
                        <section id="part-1">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h2>จำนวนประชากร</h2>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <div class="">
                                        <label class="label_float"> ชาย : </label>
                                        <div class="form-group">
                                            <div class="input-group mb-4">
                                                <input type="number"  value="0" class="form-control" id="form1s_man" min="0"
                                                    name="form1s_man" required autofocus>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">คน</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12  col-md-6">
                                    <div class="">
                                        <label class="label_float"> หญิง : </label>
                                        <div class="form-group">
                                            <div class="input-group mb-4">
                                                <input type="number"  value="0" class="form-control" id="form1s_woman" min="0"
                                                    name="form1s_woman" required autofocus>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">คน</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <div class="">
                                        <label class="label_float"> ประชากรทั้งหมด(รวม ชาย-หญิง) : </label>
                                        <div class="form-group">
                                            <div class="input-group mb-4">
                                                <input type="number"  value="0" class="form-control" id="form1s_totalgender"
                                                    min="0" name="form1s_totalgender" required autofocus>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">คน</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12  col-md-6">
                                    <div class="">
                                        <label class="label_float"> จำนวนครัวเรือน : </label>
                                        <div class="form-group">
                                            <div class="input-group mb-4">
                                                <input type="number"  value="0" class="form-control" id="form1s_household" min="0"
                                                    name="form1s_household" required autofocus>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">คน</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <div class="">
                                        <label class="label_float"> จำนวนผู้สูงอายุ : </label>
                                        <div class="form-group">
                                            <div class="input-group mb-4">
                                                <input type="number"  value="0" class="form-control" id="form1s_elderly" min="0"
                                                    name="form1s_elderly" required autofocus>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">คน</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12  col-md-6">
                                    <div class="">
                                        <label class="label_float"> จำนวนเด็กแรกเกิด ถึง 6 ปี : </label>
                                        <div class="form-group">
                                            <div class="input-group mb-4">
                                                <input type="number"  value="0" class="form-control" id="form1s_child_to_6_years"
                                                    min="0" name="form1s_child_to_6_years" required autofocus>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">คน</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <div class="">
                                        <label class="label_float"> จำนวนผู้สูงอายุที่ป่วยเป็นโรคเรื้อรัง : </label>
                                        <div class="form-group">
                                            <div class="input-group mb-4">
                                                <input type="number"  value="0" class="form-control" id="form1s_chronic_patient"
                                                    min="0" name="form1s_chronic_patient" required autofocus>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">คน</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12  col-md-6">
                                    <div class="">
                                        <label class="label_float"> จำนวนสตรีตั้งครรภ์ : </label>
                                        <div class="form-group">
                                            <div class="input-group mb-4">
                                                <input type="number"  value="0" class="form-control" id="form1s_pregnant_women"
                                                    min="0" name="form1s_pregnant_women" required autofocus>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">คน</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <div class="">
                                        <label class="label_float"> จำนวนผู้สูงอายุที่ช่วยตนเองไม่ได้ : </label>
                                        <div class="form-group">
                                            <div class="input-group mb-4">
                                                <input type="number"  value="0" class="form-control"
                                                    id="form1s_elderly_can_not_help" min="0"
                                                    name="form1s_elderly_can_not_help" required autofocus>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">คน</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12  col-md-6">
                                    <div class="">
                                        <label class="label_float"> จำนวนสตรีอายุ 35 ปี ขึ้นไป : </label>
                                        <div class="form-group">
                                            <div class="input-group mb-4">
                                                <input type="number"  value="0" class="form-control" id="form1s_woman_to_35_years"
                                                    min="0" name="form1s_woman_to_35_years" required autofocus>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">คน</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-12 ">
                                    <div class="">
                                        <label class="label_float"> จำนวนผู้พิการ : </label>
                                        <div class="form-group">
                                            <div class="input-group mb-4">
                                                <input type="number"  value="0" class="form-control" id="form1s_handicapped"
                                                    min="0" name="form1s_handicapped" required autofocus>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">คน</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section id="part-2">
                            <hr>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h2>สถาบันทางการศึกษา</h2>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ศูนย์พัฒนาเด็กเล็ก : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control"
                                                id="form1s_child_development_center" min="0"
                                                name="form1s_child_development_center" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> โรงเรียน : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_school" min="0"
                                                name="form1s_school" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> วิทยาลัย : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_college" min="0"
                                                name="form1s_college" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> มหาวิทยาลัย : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_university" min="0"
                                                name="form1s_university" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ศูนย์เรียนรู้ชุมชน : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control"
                                                id="form1s_community_learning_center" min="0"
                                                name="form1s_community_learning_center" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ศูนย์การศึกษานอกโรงเรียนและการศึกษาตามอัธยาศัย :
                                    </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_non_formal_education"
                                                min="0" name="form1s_non_formal_education" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> ที่อ่านหนังสือประจำหมู่บ้าน : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_village_books" min="0"
                                                name="form1s_village_books" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> สถาบันทางการศึกษาอื่น ๆ 1 : </label>

                                    <div class="form-group">
                                        <textarea class="form-control mb-2" name="form1s_other_educational_1"
                                            id="form1s_other_educational_1" rows="3" autofocus
                                            placeholder="อื่น ๆ โปรดระบุ"></textarea>
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control"
                                                id="form1s_other_educational_1_quantity" min="0" autofocus
                                                name="form1s_other_educational_1_quantity">
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> สถาบันทางการศึกษาอื่น ๆ 2 : </label>

                                    <div class="form-group">
                                        <textarea class="form-control mb-2" name="form1s_other_educational_2" autofocus
                                            id="form1s_other_educational_2" rows="3"
                                            placeholder="อื่น ๆ โปรดระบุ"></textarea>
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control"
                                                id="form1s_other_educational_2_quantity" min="0" autofocus
                                                name="form1s_other_educational_2_quantity">
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>


                        <section id="part-3">
                            <hr>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h2>สถาบันและองค์กรทางศาสนา</h2>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> วัด : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_measure" min="0"
                                                name="form1s_measure" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> คริสตจักร : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_church" min="0"
                                                name="form1s_church" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> สำนักสงฆ์ : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_abbey" min="0"
                                                name="form1s_abbey" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ศาลเจ้า : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_shrine" min="0"
                                                name="form1s_shrine" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> สถาบันและองค์กรทางศาสนาอื่น ๆ 1 : </label>

                                    <div class="form-group">
                                        <textarea class="form-control mb-2" name="form1s_other_religion_1"
                                            id="form1s_other_religion_1" rows="3" autofocus
                                            placeholder="อื่น ๆ โปรดระบุ"></textarea>
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" autofocus
                                                id="form1s_other_religion_1_quantity" min="0"
                                                name="form1s_other_religion_1_quantity">
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> สถาบันและองค์กรทางศาสนาอื่น ๆ 2 : </label>

                                    <div class="form-group">
                                        <textarea class="form-control mb-2" name="form1s_other_religion_2" autofocus
                                            id="form1s_other_religion_2" rows="3"
                                            placeholder="อื่น ๆ โปรดระบุ"></textarea>
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" autofocus
                                                id="form1s_other_religion_2_quantity" min="0"
                                                name="form1s_other_religion_2_quantity">
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>

                        <section id="part-4">
                            <hr>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h2>สาธารณสุข</h2>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> โรงพยาบาลส่งเสริมสุขภาพประจำตำบล : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_health_hospital"
                                                min="0" name="form1s_health_hospital" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> สาธารณสุขอื่น ๆ 1 : </label>

                                    <div class="form-group">
                                        <textarea class="form-control mb-2" name="form1s_other_public_health_1"
                                            autofocus id="form1s_other_public_health_1" rows="3"
                                            placeholder="อื่น ๆ โปรดระบุ"></textarea>
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" autofocus
                                                id="form1s_other_public_health_1_quantity" min="0"
                                                name="form1s_other_public_health_1_quantity">
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> สาธารณสุขอื่น ๆ 2 : </label>

                                    <div class="form-group">
                                        <textarea class="form-control mb-2" name="form1s_other_public_health_2"
                                            autofocus id="form1s_other_public_health_2" rows="3"
                                            placeholder="อื่น ๆ โปรดระบุ"></textarea>
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" autofocus
                                                id="form1s_other_public_health_2_quantity" min="0"
                                                name="form1s_other_public_health_2_quantity">
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>

                        <section id="part-5">
                            <hr>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h2>ความปลอดภัยในชีวิตและทรัพย์สิน</h2>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> สถานีตำรวจ : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_police" min="0"
                                                name="form1s_police" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> สาธารณสุขอื่น ๆ 1 : </label>

                                    <div class="form-group">
                                        <textarea class="form-control mb-2" name="form1s_other_police_1" autofocus
                                            id="form1s_other_police_1" rows="3"
                                            placeholder="อื่น ๆ โปรดระบุ"></textarea>
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" autofocus
                                                id="form1s_other_police_1_quantity" min="0"
                                                name="form1s_other_police_1_quantity">
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> สาธารณสุขอื่น ๆ 2 : </label>

                                    <div class="form-group">
                                        <textarea class="form-control mb-2" name="form1s_other_police_2" autofocus
                                            id="form1s_other_police_2" rows="3"
                                            placeholder="อื่น ๆ โปรดระบุ"></textarea>
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" autofocus
                                                id="form1s_other_police_2_quantity" min="0"
                                                name="form1s_other_police_2_quantity">
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>

                        <section id="part-6">
                            <hr>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h2>หน่วยงานราชการ</h2>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ที่ว่าการอำเภอ : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_district_office"
                                                min="0" name="form1s_district_office" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> สำนักงานพัฒนาชุมชน : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control"
                                                id="form1s_community_development_office" min="0"
                                                name="form1s_community_development_office" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> สำนักงานเกษตร : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_agriculture_office"
                                                min="0" name="form1s_agriculture_office" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> สำนักงานสาธารณสุข : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_public_health_office"
                                                min="0" name="form1s_public_health_office" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> สำนักงานปศุสัตว์ : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_livestock_office"
                                                min="0" name="form1s_livestock_office" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>


                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> สาธารณสุขอื่น ๆ 1 : </label>

                                    <div class="form-group">
                                        <textarea class="form-control mb-2" name="form1s_other_government_agencies_1"
                                            autofocus id="form1s_other_government_agencies_1" rows="3"
                                            placeholder="อื่น ๆ โปรดระบุ"></textarea>
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" autofocus
                                                id="form1s_other_government_agencies_1_quantity" min="0"
                                                name="form1s_other_government_agencies_1_quantity">
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> สาธารณสุขอื่น ๆ 2 : </label>

                                    <div class="form-group">
                                        <textarea class="form-control mb-2" name="form1s_other_government_agencies_2"
                                            autofocus id="form1s_other_government_agencies_2" rows="3"
                                            placeholder="อื่น ๆ โปรดระบุ"></textarea>
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" autofocus
                                                id="form1s_other_government_agencies_2_quantity" min="0"
                                                name="form1s_other_government_agencies_2_quantity">
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>

                        <section id="part-7">
                            <hr>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h2>หน่วยธุรกิจ</h2>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ธนาคาร : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_bank" min="0"
                                                name="form1s_bank" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ปั๊มน้ำมันและก๊าซ : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_oil_and_gas_pump"
                                                min="0" name="form1s_oil_and_gas_pump" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> โรงงานอุตสาหกรรม : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_industrial_plant"
                                                min="0" name="form1s_industrial_plant" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ฟาร์มหมู : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_pig_farm" min="0"
                                                name="form1s_pig_farm" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ฟาร์มไก่ : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_chicken_farm" min="0"
                                                name="form1s_chicken_farm" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> โรงสี : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_rice_mill" min="0"
                                                name="form1s_rice_mill" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> อู่ซ่อมรถ : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_garage" min="0"
                                                name="form1s_garage" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ร้านขายอาหาร : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_food_store" min="0"
                                                name="form1s_food_store" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>



                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> ร้านขายเครื่องใช้ไฟฟ้า : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_electronics_store"
                                                min="0" name="form1s_electronics_store" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>



                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> หน่วยธุรกิจอื่น ๆ 1 : </label>

                                    <div class="form-group">
                                        <textarea class="form-control mb-2" name="form1s_other_business_1" autofocus
                                            id="form1s_other_business_1" rows="3"
                                            placeholder="อื่น ๆ โปรดระบุ"></textarea>
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" autofocus
                                                id="form1s_other_business_1_quantity" min="0"
                                                name="form1s_other_business_1_quantity">
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> หน่วยธุรกิจอื่น ๆ 2 : </label>

                                    <div class="form-group">
                                        <textarea class="form-control mb-2" name="form1s_other_business_2" autofocus
                                            id="form1s_other_business_2" rows="3"
                                            placeholder="อื่น ๆ โปรดระบุ"></textarea>
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" autofocus
                                                id="form1s_other_business_2_quantity" min="0"
                                                name="form1s_other_business_2_quantity">
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>

                        <section id="part-8">
                            <hr>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h2>แหล่งน้ำธรรมชาติ</h2>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> แม่น้ำ : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_river" min="0"
                                                name="form1s_river" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ลำห้วย : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_creek" min="0"
                                                name="form1s_creek" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> อ่างเก็บน้ำธรรมชาติ : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_natural_reservoir"
                                                min="0" name="form1s_natural_reservoir" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> สาธารณสุขอื่น ๆ 1 : </label>

                                    <div class="form-group">
                                        <textarea class="form-control mb-2" name="form1s_other_river_1" autofocus
                                            id="form1s_other_river_1" rows="3" placeholder="อื่น ๆ โปรดระบุ"></textarea>
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_other_river_1_quantity"
                                                autofocus min="0" name="form1s_other_river_1_quantity">
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> สาธารณสุขอื่น ๆ 2 : </label>

                                    <div class="form-group">
                                        <textarea class="form-control mb-2" name="form1s_other_river_2" autofocus
                                            id="form1s_other_river_2" rows="3" placeholder="อื่น ๆ โปรดระบุ"></textarea>
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_other_river_2_quantity"
                                                autofocus min="0" name="form1s_other_river_2_quantity">
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>

                        <section id="part-9">
                            <hr>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h2>แหล่งน้ำที่สร้างขึ้น</h2>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> เหมืองฝาย : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_irrigation_system"
                                                min="0" name="form1s_irrigation_system" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> คลองชลประทาน : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_irrigation_canal"
                                                min="0" name="form1s_irrigation_canal" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> คลองส่งน้ำ : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_canal" min="0"
                                                name="form1s_canal" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> สระ : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_pool" min="0"
                                                name="form1s_pool" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> อ่างเก็บน้ำที่สร้างขึ้นเอง : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_self_built_reservoir"
                                                min="0" name="form1s_self_built_reservoir" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> บ่อน้ำตื้น : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_shallow_well" min="0"
                                                name="form1s_shallow_well" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> บ่อโยก : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_rocking_pond" min="0"
                                                name="form1s_rocking_pond" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ประปาหมู่บ้าน : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_village_water_supply"
                                                min="0" name="form1s_village_water_supply" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> แหล่งน้ำที่สร้างขึ้นอื่น ๆ 1 : </label>

                                    <div class="form-group">
                                        <textarea class="form-control mb-2" name="form1s_other_water_source_1" autofocus
                                            id="form1s_other_water_source_1" rows="3"
                                            placeholder="อื่น ๆ โปรดระบุ"></textarea>
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" autofocus
                                                id="form1s_other_water_source_1_quantity" min="0"
                                                name="form1s_other_water_source_1_quantity">
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> แหล่งน้ำที่สร้างขึ้นอื่น ๆ 2 : </label>

                                    <div class="form-group">
                                        <textarea class="form-control mb-2" name="form1s_other_water_source_2" autofocus
                                            id="form1s_other_water_source_2" rows="3"
                                            placeholder="อื่น ๆ โปรดระบุ"></textarea>
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control"
                                                id="form1s_other_water_source_2_quantity" min="0" autofocus
                                                name="form1s_other_water_source_2_quantity">
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>

                        <section id="part-10">
                            <hr>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h2>ทรัพยากรธรรมชาติ</h2>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> ป่าไม้ : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_forest" min="0"
                                                name="form1s_forest" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> ทรัพยากรธรรมชาติอื่น ๆ 1 : </label>

                                    <div class="form-group">
                                        <textarea class="form-control mb-2" name="form1s_other_natural_resources_1"
                                            autofocus id="form1s_other_natural_resources_1" rows="3"
                                            placeholder="อื่น ๆ โปรดระบุ"></textarea>
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control"
                                                id="form1s_other_natural_resources_1_quantity" min="0" autofocus
                                                name="form1s_other_natural_resources_1_quantity">
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> ทรัพยากรธรรมชาติอื่น ๆ 2 : </label>

                                    <div class="form-group">
                                        <textarea class="form-control mb-2" name="form1s_other_natural_resources_2"
                                            autofocus id="form1s_other_natural_resources_2" rows="3"
                                            placeholder="อื่น ๆ โปรดระบุ"></textarea>
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control"
                                                id="form1s_other_natural_resources_2_quantity" min="0" autofocus
                                                name="form1s_other_natural_resources_2_quantity">
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>

                        <section id="part-11">
                            <hr>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h2>แหล่งทุนในตำบล</h2>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> กองทุนสวัสดิการชุมชน : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_community_welfare_fund"
                                                min="0" name="form1s_community_welfare_fund" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> โครงการเงินออม : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_savings_program"
                                                min="0" name="form1s_savings_program" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> กองทุนหลักประกันสุขภาพฯ (สปสช.) : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_health_security_fund"
                                                min="0" name="form1s_health_security_fund" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> กองทุนสวัสดิการสมทบ : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control"
                                                id="form1s_contribution_welfare_fund" min="0"
                                                name="form1s_contribution_welfare_fund" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> แหล่งทุนในตำบลอื่น ๆ 1 : </label>

                                    <div class="form-group">
                                        <textarea class="form-control mb-2" name="form1s_other_capital_1" autofocus
                                            id="form1s_other_capital_1" rows="3"
                                            placeholder="อื่น ๆ โปรดระบุ"></textarea>
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" autofocus
                                                id="form1s_other_capital_1_quantity" min="0"
                                                name="form1s_other_capital_1_quantity">
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> แหล่งทุนในตำบลอื่น ๆ 2 : </label>

                                    <div class="form-group">
                                        <textarea class="form-control mb-2" name="form1s_other_capital_2" autofocus
                                            id="form1s_other_capital_2" rows="3"
                                            placeholder="อื่น ๆ โปรดระบุ"></textarea>
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" autofocus
                                                id="form1s_other_capital_2_quantity" min="0"
                                                name="form1s_other_capital_2_quantity">
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>

                        <section id="part-12">
                            <hr>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <h2>กลุ่มอาชีพ / วิสาหกิจชุมชนภายในชุมชน</h2>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> กลุ่มอาชีพสินค้า OTOP : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" id="form1s_otop" min="0"
                                                name="form1s_otop" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> กลุ่มวิสาหกิจชุมชน : </label>
                                    <div class="form-group">
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control"
                                                id="form1s_community_enterprise_group" min="0"
                                                name="form1s_community_enterprise_group" required autofocus>
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> กลุ่มอาชีพ / วิสาหกิจชุมชนภายในชุมชนอื่น ๆ 1 : </label>

                                    <div class="form-group">
                                        <textarea class="form-control mb-2" name="form1s_other_enterprise_1" autofocus
                                            id="form1s_other_enterprise_1" rows="3"
                                            placeholder="อื่น ๆ โปรดระบุ"></textarea>
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control" 
                                                id="form1s_other_enterprise_1_quantity" min="0"
                                                name="form1s_other_enterprise_1_quantity">
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> กลุ่มอาชีพ / วิสาหกิจชุมชนภายในชุมชนอื่น ๆ 2 : </label>

                                    <div class="form-group">
                                        <textarea class="form-control mb-2" name="form1s_other_enterprise_2" autofocus
                                            id="form1s_other_enterprise_2" rows="3"
                                            placeholder="อื่น ๆ โปรดระบุ"></textarea>
                                        <div class="input-group mb-4">
                                            <input type="number"  value="0" class="form-control"
                                                id="form1s_other_enterprise_2_quantity" min="0"
                                                name="form1s_other_enterprise_2_quantity">
                                            <div class="input-group-append">
                                                <span class="input-group-text">แห่ง</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>
                        
                         <center> <button type="submit" class="btn btn-primary" onclick="return confirm('กรุณาตรวจสอบความถูกต้องของข้อมูลก่อนกดยืนยัน ?')">บันทึกข้อมูล</button></center>
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
