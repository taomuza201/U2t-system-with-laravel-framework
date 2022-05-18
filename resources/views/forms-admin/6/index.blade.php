@extends('layouts.app')
@section('pageTitle', 'ต้นแบบหน่วยงานภายใน ในการจัดการข้อมูลให้อยู่ในรูปแบบข้อมูลอิเลคทรอนิกส์')
@section('content')
@include('layouts.headers.normal', [
'title' => ('ต้นแบบหน่วยงานภายใน ในการจัดการข้อมูลให้อยู่ในรูปแบบข้อมูลอิเลคทรอนิกส์' ),
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
                        <div class="col-12 col-md-8 mb-2">
                            <h3 class="mb-0">ต้นแบบหน่วยงานภายใน ในการจัดการข้อมูลให้อยู่ในรูปแบบข้อมูลอิเลคทรอนิกส์
                                <button onclick="export_doc()" class="btn btn-icon btn-3 btn-primary btn-sm"
                                    type="button">
                                    <span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span>
                                    <span class="btn-inner--text">ดาวน์โหลด Word</span>
                                </button>
                            </h3>
                        </div>
                        <div class="col-12 col-md-4 text-center  text-md-right">
                            <div class="input-group-prepend">
                                <select class="form-control{{ $errors->has('districts_id') ? ' is-invalid' : '' }}"
                                    name="districts" id="districts" required>
                                    <option value="" data-districts_id="all">ทั้งหมด</option>
                                    @foreach ($districts as $row)
                                    <option value="{{$row->districts_name}}" data-districts_id="{{$row->districts_id}}">
                                        {{$row->districts_name}}</option>
                                    @endforeach
                                </select>
                            </div>

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
                                        <center> ตำบล </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> งานเรื่อง </center>
                                    </th>


                                    <th align="center" scope="col">
                                        <center> เก็บข้อมูล ณ วันที่ </center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                @php
                                $count = 1;
                                @endphp
                                @foreach ($form as $row)
                                <tr href="{{url('/forms-6/'.$row->form6s_id)}}">
                                    <td align="center">{{$count }}</td>
                                    <td align="center">{{$row->districts_name  }}</td>
                                    <td align="center">{{$row->form6s_work}}</td>


                                    <td align="center">
                                        {{$row->created_at->format('d-m-Y H:i:s') }}
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="{{ asset('fonts/vfs_fonts.js') }}"></script>
<script>
    pdfMake.fonts = {
        THSarabun: {
            normal: 'THSarabun.ttf',
            bold: 'THSarabun-Bold.ttf',
            italics: 'THSarabun-Italic.ttf',
            bolditalics: 'THSarabun-BoldItalic.ttf'
        }
    }
    $(document).ready(function () {
        $('table tbody tr').click(function () {
            window.location = $(this).attr('href');
            return false;
        });


        var table = $('#maintable').DataTable({
            dom: 'Bfrtip',

            buttons: [{
                    "extend": 'excel',
                    "text": 'EXCEL',
                },
                {
                    "extend": 'pdf',
                    "text": 'PDF',
                    "pageSize": 'A4',
                    "charset": "utf-8",
                    "customize": function (
                        doc) {
                        doc.defaultStyle = {
                            font: 'THSarabun',
                            fontSize: 16,

                        };

                    }
                },
                {
                    "extend": 'print',
                    "text": 'พิมพ์เอกสาร',
                },
            ],
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
                    // "targets": [1],
                    "searchable": false
                },
                {
                    "targets": 0, // your case first column
                    "className": "text-center",
                },
            ],

            "pageLength": 50,
        });

        table.on('order.dt search.dt', function () {
            table.column(0, {
                search: 'applied',
                order: 'applied'
            }).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1;
            });


        }).draw();


        $('#districts').on('change', function () {


            table.columns(1).search(this.value).draw();

        });
    });


    function export_doc() {

        let districts = $('#districts').find(':selected').attr('data-districts_id')
        let win = window.open('forms-6-admin/report/' + districts, '_blank');
    }

</script>

@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
