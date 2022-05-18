@extends('layouts.template', ['title' => __('แบบสำรวจชุดที่ 4 สำหรับโรงเรียน')])

@section('content')
@include('survey.survey_4s.header', [
'title' => __('แบบสำรวจชุดที่ 4 สำหรับโรงเรียน') ,
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

</style>
<div class="container-fluid mt--7">

    <form action="survey_4s/store" method="post">
        @csrf

        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row">
                            <div class="col-12">
                                @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row align-items-center m-1">
                            <div class="col-12 col-md-7">
                                <div class="custom-control custom-radio">
                                    <label class="label_float"> ชื่อสถานศึกษา : </label>
                                    <span>
                                        <input type="text" class="form-control" id="survey_4s_school"
                                            name="survey_4s_school" placeholder="กรุณากรอกชื่อสถานศึกษา" required
                                            autofocus> </span>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center m-1">
                            <div class="col-12 col-md-7">
                                <div class="custom-control custom-radio">
                                    <label class="label_float"> ที่อยู่ : </label>
                                    <span>
                                        <input type="text" class="form-control" id="survey_4s_address"
                                            name="survey_4s_address" placeholder="กรุณากรอกที่อยู่" required
                                            autofocus> </span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12">


                        <div id="dimension_1">
                            @include('survey.survey_4s.dimension_1')
                        </div>


                        <div id="dimension_2" >
                            @include('survey.survey_4s.dimension_2')
                        </div>


                        <div id="dimension_3" >
                            @include('survey.survey_4s.dimension_3')
                        </div>


                        <div id="dimension_4" >
                            @include('survey.survey_4s.dimension_4')
                        </div>
                        <div id="dimension_5" >
                            @include('survey.survey_4s.dimension_5')
                        </div>
                        <div id="dimension_6" >
                            @include('survey.survey_4s.dimension_6')
                        </div>

                        {{-- <div class="row m-5">
                            <div class="col-1 col-md-4 ">
                            </div>
                            <div class="col-8 col-md-4 ">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">ส่งแบบสำรวจ</button>
                            </div>
                            <div class="ccol-1 ol-md-4 ">
                            </div>
                        </div> --}}
    </form>


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

        $("#dimension_2").hide();
        $("#dimension_3").hide();
        $("#dimension_4").hide();
        $("#dimension_5").hide();
        $("#dimension_6").hide();

    });


    $(document).ready(function () {
       
    $("#next_dimension_1").click(function () {
        $("#dimension_1").show('slow');
        $("#dimension_2").hide();
        $("#dimension_3").hide();
        $("#dimension_4").hide();
        $("#dimension_5").hide();
        $("#dimension_6").hide();
        console.log('next_dimension_1');
    });


    $("#next_dimension_2").click(function () {
        $("#dimension_1").hide();
        $("#dimension_2").show('slow');
        $("#dimension_3").hide();
        $("#dimension_4").hide();
        $("#dimension_5").hide();
        $("#dimension_6").hide();
        console.log('next_dimension_2');
    });

    $("#next_dimension_3").click(function () {
        $("#dimension_1").hide();
        $("#dimension_2").hide();
        $("#dimension_3").show('slow');
        $("#dimension_4").hide();
        $("#dimension_5").hide();
        $("#dimension_6").hide();
        console.log('next_dimension_3');
    });


    $("#next_dimension_4").click(function () {
        $("#dimension_1").hide();
        $("#dimension_2").hide();
        $("#dimension_3").hide();
        $("#dimension_4").show('slow');
        $("#dimension_5").hide();
        $("#dimension_6").hide();
        console.log('next_dimension_4');
    });
    $("#next_dimension_5").click(function () {
        $("#dimension_1").hide();
        $("#dimension_2").hide();
        $("#dimension_3").hide();
        $("#dimension_4").hide();
        $("#dimension_5").show('slow');
        $("#dimension_6").hide();

        console.log('next_dimension_5');
    });

    $("#next_dimension_6").click(function () {
        $("#dimension_1").hide();
        $("#dimension_2").hide();
        $("#dimension_3").hide();
        $("#dimension_4").hide();
        $("#dimension_5").hide();
        $("#dimension_6").show('slow');
        console.log('next_dimension_6');
    });





    $("#back_dimension_1").click(function () {
        $("#dimension_1").show('slow');
        $("#dimension_2").hide();
        $("#dimension_3").hide();
        $("#dimension_4").hide();
        $("#dimension_5").hide();
        $("#dimension_6").hide();
       
    });


    $("#back_dimension_2").click(function () {
        $("#dimension_1").hide();
        $("#dimension_2").show('slow');
        $("#dimension_3").hide();
        $("#dimension_4").hide();
        $("#dimension_5").hide();
        $("#dimension_6").hide();
      
    });

    $("#back_dimension_3").click(function () {
        $("#dimension_1").hide();
        $("#dimension_2").hide();
        $("#dimension_3").show('slow');
        $("#dimension_4").hide();
        $("#dimension_5").hide();
        $("#dimension_6").hide();

    });


    $("#back_dimension_4").click(function () {
        $("#dimension_1").hide();
        $("#dimension_2").hide();
        $("#dimension_3").hide();
        $("#dimension_4").show('slow');
        $("#dimension_5").hide();
        $("#dimension_6").hide();
       
    });
    $("#back_dimension_5").click(function () {
        $("#dimension_1").hide();
        $("#dimension_2").hide();
        $("#dimension_3").hide();
        $("#dimension_4").hide();
        $("#dimension_5").show('slow');
        $("#dimension_6").hide();

     
    });

    $("#back_dimension_6").click(function () {
        $("#dimension_1").hide();
        $("#dimension_2").hide();
        $("#dimension_3").hide();
        $("#dimension_4").hide();
        $("#dimension_5").hide();
        $("#dimension_6").show('slow');
      
    });





    });

</script>

@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
