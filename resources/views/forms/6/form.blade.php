@extends('layouts.template', ['title' => __('ต้นแบบหน่วยงานภายใน ในการจัดการข้อมูลให้อยู่ในรูปแบบข้อมูลอิเลคทรอนิกส์
')])

@section('content')
@include('goals.goals_1s.header', [
'title' => __('ต้นแบบหน่วยงานภายใน ในการจัดการข้อมูลให้อยู่ในรูปแบบข้อมูลอิเลคทรอนิกส์ ') ,
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



    <form action="{{route('form6.store')}}" method="post" enctype="multipart/form-data">
        @csrf


        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <section id="part-1">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <p class="text-red">คำชี้แจง : (จัดทำครั้งเดียว) ให้ทำการศึกษากระบวนการทำงานร่วมกับเทศบาล/อบต.
                                        เพื่อสรรหาต้นแบบหน่วยงานภายใน
                                        ในการจัดการข้อมูลให้อยู่ในรูปแบบข้อมูลอิเลคทรอนิกส์ จากนั้นให้ทำการจัดทำ Workflow แผนงานของหน่วยงานภายในต้นแบบที่ได้รับเลือก สามารถดูตัวอย่างได้ที่ : <a href=" https://www.thakho.go.th/กระบวนการทำงาน-workflow-analysis/" target="_blank" rel="noopener noreferrer">กระบวนการทำงาน (Workflow analysis)</a>
                                    </p>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> หน่วยงาน : </label>
                                    <input class="form-control" type="text" name="form6s_agency" required autofocus placeholder="ตัวอย่าง เช่น สำนักงานปลัดฝ่ายบริหารงานทั่วไป เทศบาล/อบต. ....... ">
                                </div>

                                <div class="col-12  col-md-6">
                                    <label class="label_float"> งาน : </label>
                                    <input class="form-control" type="text" name="form6s_work" required autofocus placeholder="ตัวอย่าง เช่น ฝ่ายนโยบายและแผน ">
                                </div>

                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">

                                    <div id="divpdf" class="mt-3">
                                        <iframe id="iframe" src="" width="100%" height="600px"> </iframe>
                                    </div>
                                    <div class="form-group" >
                                        
                                        <label class="col-form-label">อัพโลหดไฟล์ :</label> <br>
                                        <div id="divimg">
                                            <center> <img src="{{ asset('img/none.png') }}" id="show_form6s_file"
                                                class="img-fluid img-responsive"> </center>
                                        <br>
                                        </div>
                                     
                                        <input type="file" name="form6s_file" id="form6s_file" class="form-control"
                                            accept="image/*,application/pdf" required autofocus>
                                    </div>
                                </div>

                            <div class="row">
                                <div class="col-12">
                                    <p class="text-red">หมายเหตุ : สามารถ Upload File ได้ทั้ง PDF และ PNG ซึ่งในกรณีที่ Upload File ในอุปกรณ์เคลื่อนที่จะไม่สามารถแสดงตัวอย่างได้
                                    </p>
                                </div>
                            </div>




                        </section>



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

<script>

    $(document).ready(function () {
        $("#divpdf").hide();
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#show_form6s_file').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }



    $("#form6s_file").change(function () {
        let typefile = this.value.split('.')[1];



        if (typefile == 'pdf') {
            $("#divpdf").show();
            $("#divimg").hide();
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#iframe').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        
        } else {
            $("#divpdf").hide();
            $("#divimg").show();

            readURL(this);
        }


    });

</script>






@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
