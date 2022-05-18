@extends('layouts.template', ['title' => __('รวบรวม สำรวจ จัดเก็บข้อมูลด้านทรัพยากรมนุษย์ เชิงลึกของตำบล')])

@section('content')
@include('goals.goals_1s.header', [
'title' => __('รวบรวม สำรวจ จัดเก็บข้อมูลด้านทรัพยากรมนุษย์ เชิงลึกของตำบล') ,
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



    <<form action="{{route('form3.store')}}" method="post" enctype="multipart/form-data">
        @csrf


        <div class="row">
            <div class="col">
                <div class="card shadow ">
                    <div class="card-header border-0 rounded">
                        <section id="part-1">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <p class="text-red">คำชี้แจง : ให้ทำการติดตาม สืบค้น
                                        และรวบรวมข้อมูลสถานการณ์ยอดผู้ติดเชื้อโรคโควิด-19 ทั้งในระดับท้องถิ่น จังหวัด
                                        ภาค ประเทศ และนานาชาติ  ( {{$districts->districts_name}} )
                                    </p>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ตำบล : </label>
                                    <input type="number" class="form-control" id="form3s_district" min="0" value="{{$form->form3s_district}}"
                                        name="form3s_district" required autofocus>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> อำเภอ : </label>
                                    <input type="number" class="form-control" id="form3s_prefecture" min="0" value="{{$form->form3s_prefecture}}"
                                        name="form3s_prefecture" required autofocus>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> จังหวัด : </label>
                                    <input type="number" class="form-control" id="form3s_province" min="0" value="{{$form->form3s_province}}"
                                        name="form3s_province" required autofocus>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ประเทศ : </label>
                                    <input type="number" class="form-control" id="form3s_country" min="0" value="{{$form->form3s_country}}"
                                        name="form3s_country" required autofocus>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ทวีป : </label>
                                    <input type="number" class="form-control" id="form3s_continent" min="0" value="{{$form->form3s_continent}}"
                                        name="form3s_continent" required autofocus>
                                </div>
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ทั่วโลก : </label>
                                    <input type="number" class="form-control" id="form3s_world" min="0" value="{{$form->form3s_world}}"
                                        name="form3s_world" required autofocus>
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
