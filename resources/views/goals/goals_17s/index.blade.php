@extends('layouts.template', ['title' => __('เป้าหมายที่ 17 ข้อมูลทั่วไปเกี่ยวกับตำบล')])

@section('content')
@include('goals.goals_17s.header', [
'title' => __('เป้าหมายที่ 17 ข้อมูลทั่วไปเกี่ยวกับตำบล') ,
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



    <form action="store" method="post" enctype="multipart/form-data">
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

                        {{-- <div class="row align-items-center">
                            <div class="col-12 col-md-7">
                                <div class="custom-control custom-radio">
                                    <label class="label_float"> ชื่อผู้ให้ข้อมูล : </label>
                                    <span>
                                        <input type="text" class="form-control" id="goals_17s_at_name"
                                            name="goals_17s_at_name" placeholder="ชื่อผู้ใช้ข้อมูล" required autofocus>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-12 col-md-7">
                                <div class="custom-control custom-radio">
                                    <label class="label_float"> สถานที่สอบถามข้อมูล : </label>
                                    <span>
                                        <input type="text" class="form-control" id="goals_17s_address"
                                            name="goals_17s_address" placeholder="สถานที่สอบถามข้อมูล" required
                                            autofocus> </span>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-12 col-md-7">
                                <div class="custom-control custom-radio">
                                    <label class="label_float"> ปัญหา/อุปสรรค์ : </label>
                                    <span>
                                        <input type="text" class="form-control" id="goals_17s_problem"
                                            name="goals_17s_problem" placeholder="ปัญหา/อุปสรรค์" required autofocus>
                                    </span>
                                </div>
                            </div>
                        </div> --}}


                    </div>


                    <div class="col-12">
                        <div class="table-responsive">

                            <table class="table table-hover table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th align="center" scope="col" style="width: 100px;">
                                            <center>ข้อมูลประชากร</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td class="screen" style="white-space: normal; ">1. จำนวนประชากรทั้งตำบล
                                    <tr>
                                        <td>
                                            
                                            <div class="input-group mb-4">
                                                <input type="number" name="goals_17s_people" id="goals_17s_people" class="form-control" style="text-align: right" required>
                                                <div class="input-group-append">
                                                  <span class="input-group-text">คน</span>
                                                </div>
                                              </div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td class="screen" style="white-space: normal; ">2. จำนวนประชากรชาย
                                    <tr>
                                        <td>
                                            
                                            <div class="input-group mb-4">
                                                <input type="number" name="goals_17s_male" id="goals_17s_male" class="form-control" style="text-align: right" required>
                                                <div class="input-group-append">
                                                  <span class="input-group-text">คน</span>
                                                </div>
                                              </div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td class="screen" style="white-space: normal; ">3. จำนวนประชากรหญิง
                                    <tr>
                                        <td>
                                            
                                            <div class="input-group mb-4">
                                                <input type="number" name="goals_17s_female" id="goals_17s_female" class="form-control" style="text-align: right" required>
                                                <div class="input-group-append">
                                                  <span class="input-group-text">คน</span>
                                                </div>
                                              </div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>
                                </tbody>



                                <thead class="thead-light">
                                    <tr>
                                        <th align="center" scope="col" style="width: 100px;">
                                            <center>ข้อมูลประชากรตามช่วงวัย</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td class="screen" style="white-space: normal; ">1. จำนวนประชากรอายุ 1 - 14 ปี
                                    <tr>
                                        <td>
                                            
                                            <div class="input-group mb-4">
                                                <input type="number" name="goals_17s_age_1_14" id="goals_17s_age_1_14" class="form-control" style="text-align: right" required>
                                                <div class="input-group-append">
                                                  <span class="input-group-text">คน</span>
                                                </div>
                                              </div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td class="screen" style="white-space: normal; ">2. จำนวนประชากรอายุ 15 - 35 ปี
                                    <tr>
                                        <td>
                                            
                                            <div class="input-group mb-4">
                                                <input type="number" name="goals_17s_age_15_35" id="goals_17s_age_15_35" class="form-control" style="text-align: right" required>
                                                <div class="input-group-append">
                                                  <span class="input-group-text">คน</span>
                                                </div>
                                              </div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td class="screen" style="white-space: normal; ">3. จำนวนประชากรอายุ 36 - 56 ปี
                                    <tr>
                                        <td>
                                            
                                            <div class="input-group mb-4">
                                                <input type="number" name="goals_17s_age_36_56" id="goals_17s_age_36_56" class="form-control" style="text-align: right" required>
                                                <div class="input-group-append">
                                                  <span class="input-group-text">คน</span>
                                                </div>
                                              </div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>


                                    <tr>
                                        <td class="screen" style="white-space: normal; ">4. จำนวนประชากรอายุ 57 ขึ้นปี
                                    <tr>
                                        <td>
                                            
                                            <div class="input-group mb-4">
                                                <input type="number" name="goals_17s_age_57_plus" id="goals_17s_age_57_plus" class="form-control" style="text-align: right" required>
                                                <div class="input-group-append">
                                                  <span class="input-group-text">คน</span>
                                                </div>
                                              </div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>
                                </tbody>

                                <thead class="thead-light">
                                    <tr>
                                        <th align="center" scope="col" style="width: 100px;">
                                            <center>ข้อมูลขนาดพื้นที่ทั้งตำบล</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td class="screen" style="white-space: normal; ">1. ข้อมูลขนาดพื้นที่ทั้งตำบล
                                    <tr>
                                        <td>
                                            
                                            <div class="input-group mb-4">
                                                <input type="number" name="goals_17s_area_size" id="goals_17s_area_size" class="form-control" style="text-align: right" required>
                                                <div class="input-group-append">
                                                  <span class="input-group-text">ตารางกี่โลเมตร</span>
                                                </div>
                                              </div>
                                        </td>
                                    </tr>
                                    </td>
                                    </tr>

                                </tbody>





                                
                                
                            </table>


                        </div>
                        <div class="row m-5">
                            <div class="col-1 col-md-4 ">
                            </div>
                            <div class="col-8 col-md-4 ">
                                <input type="hidden" name="goals_17s_refer" value="{{$round}}">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">ส่งแบบสำรวจ</button>
                            </div>
                            <div class="ccol-1 ol-md-4 ">
                            </div>
                        </div>
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



    });

</script>

@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
