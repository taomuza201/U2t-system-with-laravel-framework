@extends('layouts.app')

@section('content')
@include('layouts.headers.normal', [
'title' => __('แบบฟอร์มกรอกข้อมูลตามภาระงานประจำ' ) ,
])

<style>
    .dataTables_filter {
        display: none;
    }

    .label_float {
        margin-top: 10px;
        float: left;
    }

    /* span {
        display: block;
        overflow: hidden;
        padding: 0px 4px 0px 6px;
    } */

    .border_top {
        border-top-style: solid;
    }

    .border_bottom {
        border-bottom-style: solid;
    }

    .vertical-center {
        display: flex;
        justify-content: center;
        align-items: center;
        /* text-justify:auto;
             */
        word-wrap: break-word;

    }

    .span {
        word-wrap: break-word;
        white-space: initial;
    }

</style>

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">


                <div class="col-12">



                    <div class="row p-3 align-middle ">
                        <div class="col-12 btn  btn-lg vertical-center span "
                            style=" height: 100px;text-align: center; background-color:#3bd6c6;color:white "
                            onclick="window.location='{{route('form1.index')}}'">
                            1.จัดทำรายงานสถานภาพตำบล (Tambon profile)
                        </div>
                    </div>


                    <div class="row p-3 align-middle ">
                        <div class="col-12 btn  btn-lg vertical-center span "
                            style=" height: 100px;text-align: center; background-color:#3bd6c6;color:white "
                            onclick="window.location='{{route('form2.index')}}'">
                            2.รวบรวม สำรวจ จัดเก็บข้อมูลด้านทรัพยากรมนุษย์ เชิงลึกของตำบล
                        </div>
                    </div>


                    <div class="row p-3 align-middle ">
                        <div class="col-12 btn  btn-lg vertical-center span "
                            style=" height: 100px;text-align: center; background-color:#3bd6c6;color:white "
                            onclick="window.location='{{route('form3.index')}}'">
                            3.ข้อมูลสถานการณ์โรคระบาด ทั้งในระกับท้องถิ่น จังหวัด ภาค ประเทศ และนานาชาติ
                        </div>
                    </div>

                    <div class="row p-3 align-middle ">
                        <div class="col-12 btn  btn-lg vertical-center span "
                            style=" height: 100px;text-align: center; background-color:#3bd6c6;color:white "
                            onclick="window.location='{{route('form4.index')}}'">
                            4.ความรู้ด้านการจัดการโรคระบาดที่เกี่ยวข้อง
                        </div>
                    </div>



                    <div class="row p-3 align-middle ">
                        <div class="col-12 btn  btn-lg vertical-center span "
                            style=" height: 100px;text-align: center; background-color:#3bd6c6;color:white "
                            onclick="window.location='{{route('form5.index')}}'">
                            5.การแลกเปลี่ยนเรียนรู้ที่เกี่ยวข้องกับงานด้านสุขภาพ หรือโรคระบาดต่างๆ
                        </div>
                    </div>


                    <div class="row p-3 align-middle ">
                        <div class="col-12 btn  btn-lg vertical-center span "
                            style=" height: 100px;text-align: center; background-color:#3bd6c6;color:white "
                            onclick="window.location='{{route('form6.index')}}'">
                          6.ต้นแบบหน่วยงานภายใน ในการจัดการข้อมูลให้อยู่ในรูปแบบข้อมูลอิเลคทรอนิกส์ (จัดทำครั้งเดียว)
                        </div>
                    </div>


                    <div class="row p-3 align-middle ">
                        <div class="col-12 btn  btn-lg vertical-center span "
                            style=" height: 100px;text-align: center; background-color:#3bd6c6;color:white "
                            onclick="window.location='{{route('form7.index')}}'">
                           7.ประชาสัมพันธ์การดำเนินงานโครงการ/กิจกรรมยกระดับศักยภาพตำบล
                        </div>
                    </div>

                    <div class="row p-3 align-middle ">
                        <div class="col-12 btn  btn-lg vertical-center span "
                            style=" height: 100px;text-align: center; background-color:#3bd6c6;color:white "
                            onclick="window.location='{{route('form8.index')}}'">
                            8.สำรวจ และจัดเก็บข้อมูลเชิงลึกด้านศักยภาพของกลุ่มเป้าหมาย/วิสาหกิจที่เข้าร่วมโครงการ
                        </div>
                    </div>


                    <div class="row p-3 align-middle ">
                        <div class="col-12 btn  btn-lg vertical-center span "
                            style=" height: 100px;text-align: center; background-color:#3bd6c6;color:white "
                            onclick="window.location='{{route('form9.index')}}'">
                            9.แนวทางการจัดการเรียนรู้ที่มีประสิทธิภาพ สอดคล้องกับธรรมชาติการเรียนรู้และบริบทของชุมชน
                        </div>
                    </div>


                    <div class="row p-3 align-middle ">
                        <div class="col-12 btn  btn-lg vertical-center span "
                            style=" height: 100px;text-align: center; background-color:#3bd6c6;color:white "
                            onclick="window.location='{{route('form10.index')}}'">
                            10.ศึกษาสภาพแว้ดล้อมทรัพยากรในตำบลเพื่อเป็นข้อมูลตัดสินใจการพัฒนาอาชีพใหม่ในชุมชน
                        </div>
                    </div>

                    <div class="row p-3 align-middle ">
                        <div class="col-12 btn  btn-lg vertical-center span "
                            style=" height: 100px;text-align: center; background-color:#3bd6c6;color:white "
                            onclick="window.location='{{route('form11.index')}}'">
                            11.แนวทางการพัฒนาอาชีพใหม่ ในกรอบการพัฒนานาของประเทศ และนานาชาติ
                        </div>
                    </div>

                    <div class="row p-3 align-middle ">
                        <div class="col-12 btn  btn-lg vertical-center span "
                            style=" height: 100px;text-align: center; background-color:#3bd6c6;color:white "
                            onclick="window.location='{{route('form12.index')}}'">
                            12.ความรู้ที่จำเป็นในการถ่ายทอดเทคโนโลยีที่สอดคล้องกับธรรมชาติการเรียนรู้ ศักยภาพ และความต้องการของชุมชน
                        </div>
                    </div>

                    <div class="row p-3 align-middle ">
                        <div class="col-12 btn  btn-lg vertical-center span "
                            style=" height: 100px;text-align: center; background-color:#3bd6c6;color:white "
                            onclick="window.location='{{route('form13.index')}}'">
                            13.กระบวนการการแลกเปลี่ยนเรียนรู้ในชุมชน
                        </div>
                    </div>

                    
                    <div class="row p-3 align-middle ">
                        <div class="col-12 btn  btn-lg vertical-center span "
                            style=" height: 100px;text-align: center; background-color:#3bd6c6;color:white  "
                            onclick="window.location='{{route('form14.index')}}'">
                            14.ประชาสัมพันธ์/สร้างความเข้าใจกับชุมชน ในกระบวนการด้านการถ่ายทอดความรู้
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('layouts.footers.auth')
</div>
@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
