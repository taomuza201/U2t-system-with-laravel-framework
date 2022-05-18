@extends('layouts.template', ['title' => __('ข้อมูลรายชื่อบุคคล')])

@section('content')
@include('goals.manage.header', [
'title' => __('แบบสอบถามรายงานการจัดทำตำบลโปรไฟล์ ') ,
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

</style>

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                {{-- <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">จัดการข้อมูลผู้ใช้งาน</h3>
                        </div>
                        <div class="col-4 text-right">
                            <button href="" class="btn btn-sm btn-primary" id="adduserModal"
                                data-toggle="modal">เพิ่มข้อมูลใช้งาน</button>
                        </div>
                    </div>
                </div> --}}
                @php
                $chkdata = App\Goal::orderBy('goals_id','desc')->first()
                @endphp
          
                    @if (Carbon\Carbon::parse($chkdata->goals_end)->format('Y-m-d') < now()->format('Y-m-d'))

                    <div class="row">
                        <div class="col-12 p-5">
                           <h2 style="color:#ff4a4a">  อยู่นอกช่วงเวลาในการกรอกข้อมูล</h2>
                        </div>
                    </div>
                   
                    @else

                    
                    <div class="col-12">

                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                        @if (session('fail'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif


                        <div class="row p-3 align-middle ">
                            <div class="col-12 btn btn-primary btn-lg vertical-center"
                                onclick="window.location='{{URL('goals_1s/'.$chkdata->goals_id)}}'"
                                style=" height: 100px;text-align: center;">
                                เป้าหมายที่ 1 อปท.และองค์กรชุมชน<br>มีสมรรถนะจัดการสูง
                            </div>
                        </div>


                        <div class="row p-3">
                            <div class="col-12 btn btn-info btn-lg vertical-center" style=" height: 100px;"
                                onclick="window.location='{{URL('goals_2s/'.$chkdata->goals_id)}}'">
                                เป้าหมายที่ 2 ได้รับการจัดสรรทรัพยากร<br>อย่างเป็นธรรม
                            </div>
                        </div>



                        <div class="row p-3">
                            <div class="col-12 btn btn-success btn-lg vertical-center " style=" height: 100px;"
                                onclick="window.location='{{URL('goals_3s/'.$chkdata->goals_id)}}'">

                                เป้าหมายที่ 3 สามารถวิเคราะห์รายรับรายจ่าย<br>ของสถาบันการเงินชุมชน ธนาคารชุมชน

                            </div>
                        </div>


                        <div class="row p-3">
                            <div class="col-12 btn btn-warning btn-lg vertical-center" style=" height: 100px;"
                                onclick="window.location='{{URL('goals_4s/'.$chkdata->goals_id)}}'">

                                เป้าหมายที่ 4 มีการสร้างสมมาชีพเต็มพื้นที่
                            </div>
                        </div>

                        <div class="row p-3">
                            <div class="col-12 btn btn-lg vertical-center"
                                style=" height: 100px;background-color: #f6ab49; color:#fff"
                                onclick="window.location='{{URL('goals_5s/'.$chkdata->goals_id)}}'">

                                เป้าหมายที่ 5 ส่งเสริมเกษตรกรทฤษฎีใหม่<br>ในปรัชญาเศรษฐกิจพอเพียง
                            </div>
                        </div>

                        <div class="row p-3">
                            <div class="col-12 btn btn-lg vertical-center"
                                style=" height: 100px;background-color: #6a92ff; color:#fff"
                                onclick="window.location='{{URL('goals_6s/'.$chkdata->goals_id)}}'">

                                เป้าหมายที่ 6 มีการขุดสระน้ำประจำครอบครัว
                            </div>
                        </div>


                        <div class="row p-3">
                            <div class="col-12 btn btn-lg vertical-center"
                                style=" height: 100px;background-color: #2acaea; color:#fff"
                                onclick="window.location='{{URL('goals_7s/'.$chkdata->goals_id)}}'">

                                เป้าหมายที่ 7 จัดการวิสาหกิจชุมชน
                            </div>
                        </div>

                        <div class="row p-3">
                            <div class="col-12 btn btn-lg vertical-center"
                                style=" height: 100px;background-color: #ff4a4a; color:#fff"
                                onclick="window.location='{{URL('goals_8s/'.$chkdata->goals_id)}}'">

                                เป้าหมายที่ 8 ฝึกอบรมทักษะอาชีพ
                            </div>
                        </div>

                        <div class="row p-3">
                            <div class="col-12 btn btn-lg vertical-center"
                                style=" height: 100px;background-color: #ebcd91; color:#fff"
                                onclick="window.location='{{URL('goals_9s/'.$chkdata->goals_id)}}'">

                                เป้าหมายที่ 9 จัดการโครงสร้างพื้นฐาน <br>ทางกายภาพ สิ่งแวดล้อม พลังงาน
                            </div>
                        </div>

                        <div class="row p-3">
                            <div class="col-12 btn btn-lg vertical-center"
                                style=" height: 100px;background-color: #81d82e; color:#fff"
                                onclick="window.location='{{URL('goals_10s/'.$chkdata->goals_id)}}'">

                                เป้าหมายที่ 10 การจัดการตำบลปลอดภัย
                            </div>
                        </div>


                        <div class="row p-3">
                            <div class="col-12 btn btn-lg vertical-center"
                                style=" height: 100px;background-color: #4661af; color:#fff"
                                onclick="window.location='{{URL('goals_11s/'.$chkdata->goals_id)}}'">
                                เป้าหมายที่ 11 พัฒนาคุณภาพกลุ่มเปราะบาง
                            </div>
                        </div>


                        <div class="row p-3">
                            <div class="col-12 btn btn-lg vertical-center"
                                style=" height: 100px;background-color: #94aec5; color:#fff"
                                onclick="window.location='{{URL('goals_12s/'.$chkdata->goals_id)}}'">
                                เป้าหมายที่ 12 ระบบการดูแลสุขภาพชุมชน<br>ดูแลประชาชนทุกคน
                            </div>
                        </div>

                        <div class="row p-3">
                            <div class="col-12 btn btn-info btn-lg vertical-center" style=" height: 100px;"
                                onclick="window.location='{{URL('goals_13s/'.$chkdata->goals_id)}}'">
                                เป้าหมายที่ 13 ศูนย์เรียนรู้ตำบล
                            </div>
                        </div>



                        <div class="row p-3">
                            <div class="col-12 btn btn-success btn-lg vertical-center" style=" height: 100px;"
                                onclick="window.location='{{URL('goals_14s/'.$chkdata->goals_id)}}'">

                                เป้าหมายที่ 14 ระบบยุติธรรมชุมชน
                            </div>
                        </div>


                        <div class="row p-3">
                            <div class="col-12 btn btn-warning btn-lg vertical-center" style=" height: 100px;"
                                onclick="window.location='{{URL('goals_15s/'.$chkdata->goals_id)}}'">

                                เป้าหมายที่ 15 ระบบสื่อสารชุมชนรวมสื่อดิจิทัล
                            </div>
                        </div>

                        <div class="row p-3">
                            <div class="col-12 btn btn-lg vertical-center"
                                style=" height: 100px;background-color: #f6ab49; color:#fff"
                                onclick="window.location='{{URL('goals_16s/'.$chkdata->goals_id)}}'">

                                เป้าหมายที่ 16 ตำบลทำความดี
                            </div>
                        </div>


                        <div class="row p-3">
                            <div class="col-12 btn btn-lg vertical-center"
                                style=" height: 100px;background-color: #6a92ff; color:#fff"
                                onclick="window.location='{{URL('goals_17s/'.$chkdata->goals_id)}}'">

                                เป้าหมายที่ 17 ข้อมูลทั่วไปเกี่ยวกับตำบล
                            </div>
                        </div>


                    </div>

                    @endif
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
