@extends('layouts.app')

@section('content')
@include('dashboard.head')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"
    integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
    crossorigin="anonymous"></script>
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
                        <div class="col-12 btn  btn-lg vertical-center span btn-primary "
                            style=" height: 100px;text-align: center;  "
                            onclick="window.location='{{route('forms.index')}}'">
                            แบบฟอร์มกรอกข้อมูลตามภาระงานประจำ
                        </div>
                    </div>


                    <div class="row p-3 align-middle ">
                        <div class="col-12 btn  btn-lg vertical-center span btn-success "
                            style=" height: 100px;text-align: center;  "
                            onclick="window.location='{{url('repostform')}}'">
                            สรุปการกรอกข้อมูลตามภาระงานประจำ
                        </div>
                    </div>



                    <div class="row p-3 align-middle ">
                        <div class="col-12 btn  btn-lg vertical-center span btn-warning"
                            style=" height: 100px;text-align: center;"
                            onclick="window.location='{{URL('blog_details')}}'">
                            ไดอารี่
                        </div>
                    </div>




                    <div class="row p-3 align-middle ">
                        <div class="col-12 btn  btn-lg vertical-center span btn-info"
                            style=" height: 100px;text-align: center;"
                            onclick="window.location='{{URL('targetgroups')}}'">
                            กลุ่มเป้าหมาย
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
