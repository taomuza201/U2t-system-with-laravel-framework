@extends('layouts.app')
@section('content')
@include('layouts.headers.normal', [
'title' => ('ความรู้ที่จำเป็นในการถ่ายทอดเทคโนโลยีที่สอดคล้องกับธรรมชาติการเรียนรู้ ศักยภาพ และความต้องการของชุมชน' ),
])

<style>
    table tbody tr {
        cursor: pointer;
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

            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-8">
                            <h3 class="mb-0">ความรู้ที่จำเป็นในการถ่ายทอดเทคโนโลยีที่สอดคล้องกับธรรมชาติการเรียนรู้
                                ศักยภาพ และความต้องการของชุมชน {{$districts->districts_name}}
                            </h3>
                        </div>
                        <div class="col-12 col-md-4 text-center  text-md-right">
                            <a href="{{route('form12.create')}}" class="btn  btn-primary ">เพิ่มข้อมูล</a>
                        </div>
                    </div>
                </div>

                <div class="col-12">


                    <div class="table-responsive">
                        <table class="table align-items-center table-flush table-striped" id="maintable">
                            <thead class="thead-light">
                                <tr>
                                    <th align="center" scope="col">
                                        <center> ลำดับ </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center>ความต้องการของชุมชน </center>
                                    </th>


                                    <th align="center" scope="col">
                                        <center> ผู้กรอกข้อมูล </center>
                                    </th>

                                    <th align="center" scope="col">
                                        <center> เก็บข้อมูล ณ วันที่ </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> จัดการข้อมูล</center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                @php
                                $count = 1;
                                @endphp
                                @foreach ($form as $row)
                                <tr>
                                    <td align="center">{{$count }}</td>
                                    <td align="center">

                                      @php
                                          echo  substr($row->form12s_definition ,0,100).'..'
                                      @endphp
                                      </td>
                                    <td align="center">
                                        {{$row->fname}} {{$row->lname}}
                                    </td>

                                    <td align="center">
                                        {{$row->created_at->format('d-m-Y H:i:s') }}
                                    </td>
                                    <td align="center">
                                        <a type="button" class="btn btn-info btn-sm" style="color:white"
                                            href="{{url('/forms-12/'.$row->form12s_id)}}">ดูข้อมูล</a>

                                        <a type="button" class="btn btn-danger btn-sm" style="color:white"
                                            href="{{URL('forms-12/delete/'.$row->form12s_id)}}"
                                            onclick="return confirm('คุณต้องการลบข้อมูล ?')">ลบ</a>
                                    </td>

                                </tr>

                                @php
                                $count ++;
                                @endphp
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




<script>
    $(document).ready(function () {



        var table = $('#maintable').DataTable({
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
                    "searchable": false
                },
                {
                    "targets": 0, // your case first column
                    "className": "text-center",
                },
            ],


        });

        table.on('order.dt search.dt', function () {
            table.column(0, {
                search: 'applied',
                order: 'applied'
            }).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1;
            });


        }).draw();
    });

</script>


@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
