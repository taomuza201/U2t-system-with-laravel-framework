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
    input {
      
        pointer-events: none;
        opacity: 0.7;
    }
    textarea{
        pointer-events: none;
        opacity: 0.7;
    }
    select{
        pointer-events: none;
        opacity: 0.7;
    }

</style>
<div class="container-fluid mt--7">



    <form action="" method="post" enctype="multipart/form-data">
        @csrf


        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <section id="part-1">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <p class="text-red">คำชี้แจง : ให้ทำการสำรวจจัดเก็บข้อมูลด้านทรัพยากรมนุษย์เชิงลึกของตำบล โดยสำรวจข้อมูลของประชากรคิดเป็น 70% ต่อครัวเรือนทั้งหมดในแต่ละหมู่บ้าน																	
                                    </p>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> หมู่บ้าน : </label>
                                    <input type="text" class="form-control" id="form8s_villages_id" min="0" name="form8s_villages_id"   
                                     value="{{$villages->villages_name}}"
                                        required autofocus>
                                </div>
                            
                            </div>




                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> บ้านเลขที่ : </label>
                                    <input type="text" class="form-control" id="form8s_house_number"  name="form8s_house_number"
                                    value="{{$form->form8s_house_number}}"    required autofocus>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> เพศ : </label>
                                    <input class="form-control" type="text" name=""    value="{{$form->form8s_sex}}">
                                   
        
                                    
                                </div>
                               
                            </div>

                            
                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> ชื่อ-สกุล : </label>
                                    <input type="text" class="form-control" id="form8s_name"name="form8s_name"  value="{{$form->form8s_name}}"
                                        required autofocus>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> อายุ : </label>
                                    <input type="number" class="form-control" id="form8s_age" name="form8s_age" value="{{$form->form8s_age}}"
                                        required autofocus>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ศาสนา : </label>
                                    <input class="form-control" type="text" name="" value="{{$form->form8s_religion}}">
                                 
                                </div>
                            </div>
                            
                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> เกี่ยวข้องกับหัวหน้าครัวเรือน : </label>
                                    <input class="form-control" type="text" name="" value="{{$form->form8s_about_head_of_household}}">
                                   
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> กรุณาเลือกระดับการศึกษา : </label>
                                    <input class="form-control" type="text" name="" value="{{$form->form8s_education_level}}">
                                   
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> อาชีพหลัก/กำลังศึกษา : </label>
                                    <input class="form-control" type="text" name="" value="{{$form->form8s_occupation}}">

                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ความเชี่ยวชาญ : </label>                            
                                        <div class="form-group">
                                            <textarea id="my-textarea" class="form-control" name="form8s_expertise" rows="3"    required autofocus>{{$form->form8s_expertise}}</textarea>
                                        </div>
                                </div>
                            </div>


                            
                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ที่พักอาศัยตั้งอยู่บน : </label>
                                    <input class="form-control" type="text" name="" value="{{$form->form8s_address_on}}">                                 
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ที่ดินที่ใช้ประกอบอาชีพ : </label>
                                    <input class="form-control" type="text" name="" value="{{$form->form8s_occupational_land}}">                                  
                                </div>
                            </div>


                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> มีการเก็บออมเงินรูปแบบใด : </label>
                                    <input class="form-control" type="text" name="" value="{{$form->form8s_saving_type}}">                               
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> รายได้จากอาชีพหลัก : </label>
                                    <input type="number" class="form-control" id="form8s_main_money" min="0" name="form8s_main_money" value="{{$form->form8s_main_money}}"
                                        required autofocus>
                                </div>
                            </div>


                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> รายได้จากอาชีพรอง/อาชีพเสริม : </label>
                                    <input type="number" class="form-control" id="form8s_sub_money" min="0" name="form8s_sub_money" value="{{$form->form8s_sub_money}}"
                                        required autofocus>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> รายจ่าย : </label>
                                    <input type="number" class="form-control" id="form8s_expenses" min="0" name="form8s_expenses" value="{{$form->form8s_expenses}}"
                                    required autofocus>
                                </div>
                            </div>


                        </section>



                     
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
