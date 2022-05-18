@extends('layouts.template', ['title' => __(' แบบสำรวจชุดที่ 2 สำหรับตลาด')])

@section('content')
@include('survey.survey_2s.header', [
'title' => __(' แบบสำรวจชุดที่ 2 สำหรับตลาด') ,
])


<style>
    /* table tr {
        cursor: pointer;

    } */

    .dataTables_filter {
        display: none;
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
                        <div class="col-8 col-md-5">
                            {{-- <h3 class="mb-0">ข้อมูลอาจารย์</h3> --}}
                        </div>
                        <div class="col-12 col-md-7  text-right">

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                        <select
                                            class="form-control{{ $errors->has('districts_id') ? ' is-invalid' : '' }}"
                                            name="districts" id="districts" required>
                                            <option value="" data-districts_id="all">ทั้งหมด</option>
                                            @foreach ($districts as $row)
                                            <option value="{{$row->districts_name}}"
                                                data-districts_id="{{$row->districts_id}}">{{$row->districts_name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <input type="text" class="form-control" placeholder=" ค้นหา ตลาด" id="search">

                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-8 col-md-5">
                            {{-- <h3 class="mb-0">ข้อมูลอาจารย์</h3> --}}
                        </div>
                        <div class="col-12 col-md-7  text-right">
                            <button class="btn btn-icon btn-3 btn-primary " type="button" id="exportexcel"
                                onclick="exportexcel(this)">
                                <span class="btn-inner--text">ดาวน์โหลด Excel</span>

                            </button>
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
                                        <center> ชื่อตลาด </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> ที่อยู่ </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> สังกัดตำบล </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> ผู้เก็บข้อมูล </center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($survey_2s as $row)
                                <tr {{-- href="{{URL('manage_survey/survey_2s/'.$row->survey_2s_id)}}" --}}>
                                    <td align="center"></td>
                                    <td>{{$row->survey_2s_maket}}</td>
                                    <td>{{$row->survey_2s_address}}</td>
                                    <td>{{$row->districts_name}}</td>
                                    <td>{{$row->fname}} {{$row->lname}}</td>
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
                "targets": ['2', '3'],
                // "searchable": false
            }]

        });

        table.on('order.dt search.dt', function () {
            table.column(0, {
                search: 'applied',
                order: 'applied'
            }).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1;
            });

        }).draw();





        $('#search').keyup(function () {

            table.search($(this).val()).draw();
        })

        $('#districts').on('change', function () {
            table.columns(3).search(this.value).draw();
            $('#search').val('');
        });

    });

    function exportexcel() {


        var districts = $('#districts').children("option:selected").data('districts_id');

        console.log(districts);
        window.location.href = "export/" + districts + '/survey_2s';

    }

</script>


@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
