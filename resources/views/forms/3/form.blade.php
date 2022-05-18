@extends('layouts.template', ['title' => __('ข้อมูลสถานการณ์โรคระบาด ทั้งในระกับท้องถิ่น จังหวัด ภาค ประเทศ
และนานาชาติ')])

@section('content')
@include('goals.goals_1s.header', [
'title' => __('ข้อมูลสถานการณ์โรคระบาด ทั้งในระกับท้องถิ่น จังหวัด ภาค ประเทศ และนานาชาติ') ,
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



    <form action="{{route('form3.store')}}" method="post" enctype="multipart/form-data">
        @csrf


        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <section id="part-1">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <p class="text-red">คำชี้แจง : ให้ทำการติดตาม สืบค้น
                                        และรวบรวมข้อมูลสถานการณ์ยอดผู้ติดเชื้อโรคโควิด-19 ทั้งในระดับท้องถิ่น จังหวัด
                                        ภาค ประเทศ และนานาชาติ ( {{$districts->districts_name}} )
                                    </p>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ตำบล : </label>
                                    <input type="number" class="form-control" id="form3s_district" min="0" value="0"
                                        name="form3s_district" required autofocus>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> อำเภอ : </label>
                                    <input type="number" class="form-control" id="form3s_prefecture" min="0" value="0"
                                        name="form3s_prefecture" required autofocus>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> จังหวัด : </label>
                                    <input type="number" class="form-control" id="form3s_province" min="0" value="0"
                                        name="form3s_province" required autofocus>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ประเทศ : </label>
                                    <input type="number" class="form-control" id="form3s_country" min="0" value="0"
                                        name="form3s_country" required autofocus>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ทวีป : </label>
                                    <input type="number" class="form-control" id="form3s_continent" min="0" value="0"
                                        name="form3s_continent" required autofocus>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ทั่วโลก : </label> 
                                    <input type="number" class="form-control" id="form3s_world" min="0" value="0"
                                        name="form3s_world" required autofocus> 
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






@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
