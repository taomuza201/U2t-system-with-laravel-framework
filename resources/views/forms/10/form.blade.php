@extends('layouts.template', ['title' =>
__('ศึกษาสภาพแว้ดล้อมทรัพยากรในตำบลเพื่อเป็นข้อมูลตัดสินใจการพัฒนาอาชีพใหม่ในชุมชน')])

@section('content')
@include('goals.goals_1s.header', [
'title' => __('ศึกษาสภาพแว้ดล้อมทรัพยากรในตำบลเพื่อเป็นข้อมูลตัดสินใจการพัฒนาอาชีพใหม่ในชุมชน') ,
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



    <form action="{{route('form10.store')}}" method="post" enctype="multipart/form-data">
        @csrf


        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <section id="part-1">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <p class="text-red">คำชี้แจง : ให้ทำการศึกษาสภาพแว้ดล้อมทรัพยากรในตำบล ด้านเศรษฐกิจ
                                        สังคม สิ่งแวดล้อม ศิลปวัฒนธรรม และทุนชุมชน
                                        เพื่อเป็นข้อมูลตัดสินใจการพัฒนาอาชีพใหม่ในชุมชน
                                    </p>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> หมู่บ้าน : </label>
                                    <select name="form10s_villages_id" id="form10s_villages_id" class="form-control" required autofocus>
                                        <option value="">กรุณาเลือกหมู่บ้าน</option>

                                        @foreach ($villages as $row)
                                        <option value="{{$row->villages_id}}">{{$row->villages_name}}</option>
                                        @endforeach
                                 
        
                                    </select>
                                </div>
                               
                            </div>


                            <div class="row align-items-center">

                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ด้านเศรษฐกิจ : </label>
                                    <div class="form-group">
                                        <textarea id="my-textarea" class="form-control" name="form10s_economic" required
                                            rows="4" autofocus></textarea>
                                    </div>
                                </div>

                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ด้านสังคม : </label>
                                    <div class="form-group">
                                        <textarea id="my-textarea" class="form-control" name="form10s_social" required
                                            rows="4" autofocus></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">

                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ด้านสิ่งแวดล้อม : </label>
                                    <div class="form-group">
                                        <textarea id="my-textarea" class="form-control" name="form10s_environmental" required
                                            rows="4" autofocus></textarea>
                                    </div>
                                </div>

                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ด้านศิลปวัฒนธรรม : </label>
                                    <div class="form-group">
                                        <textarea id="my-textarea" class="form-control" name="form10s_culture" required
                                            rows="4" autofocus></textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="row align-items-center">

                                <div class="col-12  col-md-12">
                                    <label class="label_float"> ด้านทุนชุมชน : </label>
                                    <div class="form-group">
                                        <textarea id="my-textarea" class="form-control" name="form10s_community_grants" required
                                            rows="4" autofocus></textarea>
                                    </div>
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
