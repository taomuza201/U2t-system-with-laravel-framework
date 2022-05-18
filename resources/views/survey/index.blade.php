@extends('layouts.template', ['title' => __('ข้อมูลรายชื่อบุคคล')])

@section('content')
@include('survey.survey_1s.header', [
'title' => __('แบบสำรวจเพื่อเฝ้าระวังการแพร่ระบาดของโรคติดต่ออุบัติใหม่ ') ,
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
                        <div class="col-12 btn btn-primary btn-lg vertical-center"   onclick="window.location='{{URL('survey_1s')}}'"
                            style=" height: 100px;text-align: center;">
                            แบบสำรวจชุดที่ 1 สำหรับที่พักอาศัย
                        </div>
                    </div>


                    <div class="row p-3">
                        <div class="col-12 btn btn-info btn-lg vertical-center" style=" height: 100px;"  onclick="window.location='{{URL('survey_2s')}}'">
                            แบบสำรวจชุดที่  2  สำหรับตลาด

                        </div>
                    </div>



                    <div class="row p-3">
                        <div class="col-12 btn btn-success btn-lg vertical-center" style=" height: 100px;"  onclick="window.location='{{URL('survey_3s')}}'">

                            แบบสำรวจชุดที่ 3 สำหรับศาสนสถาน	
                        </div>
                    </div>



                    <div class="row p-3">
                        <div class="col-12 btn btn-warning btn-lg vertical-center" style=" height: 100px;"  onclick="window.location='{{URL('survey_4s')}}'">

                            แบบสำรวจชุดที่  4  สำหรับโรงเรียน	
                        </div>
                    </div>


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
