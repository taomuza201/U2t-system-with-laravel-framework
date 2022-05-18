@extends('layouts.template', ['title' => __('จัดการข้อมูล 17 เป้าหมาย')])

@section('content')
@include('goals.goals_17s.header', [
'title' => __('จัดการข้อมูล 17 เป้าหมาย') ,
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
    <div class="row">
        <div class="col">

            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            @if (session('fial'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('fial') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h3 class="mb-0">จัดการข้อมูล 17 เป้าหมาย</h3>
                        </div>
                        <div class="col-12   text-md-right   text-center">
                            <a href="" class="btn btn-sm btn-primary" data-toggle="modal" id="Addgoal"
                                data-target="#goalModal">
                                เพิ่มรอบการกรอกข้อมูล 17 เป้าหมาย</a>
                        </div>
                    </div>
                </div>

                <div class="col-12">


                    <div class="table-responsive">
                        <table class="table align-items-center table-flush table-striped" id="myTable">
                            <thead class="thead-light">
                                <tr>
                                    <th align="center" scope="col">
                                        <center> ลำดับ </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> ครั้งที่ </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> วันเริ่มต้นกรอกข้อมูล </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> วันสิ้นสุดกรอกข้อมูล </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> จัดการข้อมูล </center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($goal as $row)
                                <tr>
                                    <td> </td>
                                    <td>
                                        {{$row->goals_no}}
                                    </td>
                                    <td>
                                        {{ Carbon\Carbon::parse($row->goals_start)->format('d/m/Y') }}
                                    </td>
                                    <td>
                                        {{ Carbon\Carbon::parse($row->goals_end)->format('d/m/Y') }}
                                    </td>
                                    <td>

                                        {{-- {{ now()->format('Y-m-d')}} --}}

                                    @if (    Carbon\Carbon::parse($row->goals_end)->format('Y-m-d')  >= now()->format('Y-m-d'))
                                    <center> <button type="button" class="btn btn-success btn-sm" id="edit-modal"
                                        data-id="{{$row->goals_id }}">จัดการข้อมูลช่วงเวลา</button> </center>
                                    @else 
                                    <center> <button type="button" class="btn btn-success btn-sm" id="edit-modal" disabled
                                        data-id="{{$row->goals_id }}">จัดการข้อมูลช่วงเวลา</button> </center>
                                    @endif
                                        
                                    </td>
                                </tr>

                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footers.auth')
</div>



<!-- Modal -->
<div class="modal fade" id="goalModal" tabindex="-1" role="dialog" aria-labelledby="goalModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="goalModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form role="form" method="POST" action="manage_goal/store" id="form_goal">
                    @csrf


                    <div class="form-group{{ $errors->has('type_items_name') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email">กำหนดวันเริ่มการกรอกข้อมูล</label>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-bullet-list-67"></i></span>
                            </div>
                            <input class="form-control " data-provide="datepicker"
                                value="{{substr(Carbon\Carbon::now()->format('d-m-Y'),0,10)}}" id="goals_start"
                                onchange="myFunction()" name="goals_start" data-date-language="th-th"
                                data-date-start-date="0d" data-date-end-date="" data-date-format="dd-mm-yyyy" required>
                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('type_items_name') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email">กำหนดวันสิ้นสุดการกรอกข้อมูล</label>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-bullet-list-67"></i></span>
                            </div>
                            <input class="form-control " data-provide="datepicker"
                                value="{{substr(Carbon\Carbon::now()->format('d-m-Y'),0,10)}}" id="goals_end"
                                onchange="myFunction()" name="goals_end" data-date-language="th-th"
                                data-date-start-date="0d" data-date-end-date="" data-date-format="dd-mm-yyyy" required>
                        </div>
                    </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
            </div>
        </div>
    </div>
</div>


</form>

<script>
    $(document).ready(function () {

        window.setTimeout(function () {
            $(".alert").fadeTo(500, 0).slideUp(500, function () {
                $(this).remove();
            });
        }, 2000);



    });

</script>


<script>
    $(document).ready(function () {

        var table = $('#myTable').DataTable({
            "ordering": false,
            "language": {
                "search": "ค้นหา :",
                "paginate": {
                    "first": "หน้าแรก",
                    "last": "หน้าสุดท้าย",
                    "next": "หน้าถัดไป",
                    "previous": "ก่อนหน้า",

                },
                "info": "แสดงข้อมูล _START_ ถึง _END_ จากข้อมูลทั้งหมด _TOTAL_ รายการ",
                "infoFiltered": '',
                "infoEmpty": "แสดงข้อมูลทั้งหมด 0  รายการ",
                "lengthMenu": "แสดง _MENU_ รายการ",
                "zeroRecords": "ไม่มีรายการ",
                // "serverSide": false,
            },

            "columnDefs": [{
                "targets": [2],
                "searchable": false
            }]

        });


        //  เรียงลำดับตังเลข
        table.on('order.dt search.dt', function () {
            table.column(0, {
                search: 'applied',
                order: 'applied'
            }).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1;
            });



        }).draw();

    });




    $('body').on('click', '#Addgoal', function () {

        $('#goalModalLabel').text('กำหนดช่วงเวลาในการกรอกข้อมูล');

        // $('#goals_start').val({{substr(Carbon\Carbon::now()->format('d-m-Y'),0,10)}});
        // $('#goals_end').val({{substr(Carbon\Carbon::now()->format('d-m-Y'),0,10)}});
        $('#goalModal').modal('show');

    });

    $('body').on('click', '#edit-modal', function () {

        var id = $(this).data('id');

        $.get('manage_goal/' + id + '/edit', function (data) {

            $('#goalModal').modal('show');
           
            let  goals_start = new Date(data.goals_start)
            let  goals_end = new Date(data.goals_end)
            

            
            $('#goals_start').val(goals_start.getDate() + '-' +goals_start.getMonth()+'-'+ +goals_start.getFullYear());
            $('#goals_end').val(goals_end.getDate() + '-' +goals_end.getMonth()+'-'+ +goals_end.getFullYear());


            document.getElementById("form_goal").action = 'manage_goal/' + id +
                '/update';
            document.getElementById("form_goal").method = "post";
        })
    });

</script>


@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
