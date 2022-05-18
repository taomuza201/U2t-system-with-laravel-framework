@extends('layouts.template', ['title' => __('ประชาสัมพันธ์การดำเนินงานโครงการ/กิจกรรมยกระดับศักยภาพตำบล')])

@section('content')
@include('goals.goals_1s.header', [
'title' => __('ประชาสัมพันธ์การดำเนินงานโครงการ/กิจกรรมยกระดับศักยภาพตำบล') ,
])


<style>
    @import url('https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    p {
        font-family: 'Prompt', sans-serif;
    }
    img,.img-responsive{
    max-width: 80%;
    height: auto;
}
    .dataTables_filter {
        display: none;
    }

    .label_float {
        margin-top: 10px;
        font-size: 20px;
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

    textarea {
        pointer-events: none;
        opacity: 0.7;
    }

    select {
        pointer-events: none;
        opacity: 0.7;
    }

</style>
<div class="container-fluid mt--7">



    <form action="{{route('form4.store')}}" method="post" enctype="multipart/form-data">
        @csrf


        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <section id="part-1">

                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> ชื่อโครงการ/กิจกรรม : </label>
                                    <p style="text-indent: 2.5em;">
                                        {{$form->form7s_title}}
                                    </p>
                                </div>

                            </div>


                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> รายละเอียด : </label>
                                    <div class="form-group">
                                        <p style="text-indent: 2.5em;">
                                            {!!$details!!}
                                        </p>

                                    </div>
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
