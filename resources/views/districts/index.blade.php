@extends('layouts.app', ['title' => __('จัดการข้อมูลตำบล')])
@section('content')
@include('layouts.headers.normal', [
'title' => __('จัดการข้อมูลตำบล' ) ,
])

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
                        <div class="col-8">
                            <h3 class="mb-0">จัดการข้อมูลตำบล</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="" class="btn btn-sm btn-primary" data-toggle="modal" id="adddistrictsModal"
                                data-target="#districtsModal">เพิ่มข้อมูลตำบล</a>
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
                                        <center> ตำบล </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> จัดการข้อมูล </center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                @php
                                $count = 1;
                                @endphp
                                @foreach ($districts as $row)
                                <tr>
                                    <td align="center">{{$count }}</td>
                                    <td>{{$row->districts_name }}</td>

                                    <td align="center">
                                        <button type="button" class="btn btn-success  btn-sm" id="edit-modal" data-id="{{$row->districts_id}}">แก้ไขข้อมูล</button>

                                        <a type="button" class="btn btn-danger btn-sm" style="color:white"
                                            href="{{URL('districts/'.$row->districts_id.'/destroy')}}"
                                            onclick="return confirm('คุณต้องการลบรายการ ? {{$row->districts_name }}')">ลบ</a>

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


<!-- Modal -->
<div class="modal fade" id="districtsModal" tabindex="-1" role="dialog" aria-labelledby="districtsModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="districtsModalLabel">เพิ่มข้อมูลตำบล</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form role="form" method="POST" action="districts/store" id="form_districts">
                    @csrf

                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                            </div>
                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                placeholder="{{ __('ชื่อตำบล') }}" type="text" name="districts_name" id="districts_name"
                                value="{{ old('districts_name') }}" required autofocus>
                        </div>
                        @if ($errors->has('name'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('districts_name') }}</strong>
                        </span>
                        @endif
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

        $('#myTable').DataTable({
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
                "infoFiltered":   '',
                "infoEmpty":      "แสดงข้อมูลทั้งหมด 0  รายการ",
                "lengthMenu": "แสดง _MENU_ รายการ",
                "zeroRecords": "ไม่มีรายการ",
                // "serverSide": false,
            },

            "columnDefs": [{
                "targets": [2],
                "searchable": false
            }]

        });
    });


    $('body').on('click', '#adddistrictsModal', function () {

        $('#districtsModalLabel').text('เพิ่มข้อมูล');
        $('#districtsModal').modal('show');
        $('#districts_name').val('');
    });

    $('body').on('click', '#edit-modal', function () {

        var id = $(this).data('id');

        $.get('districts/' + id + '/edit', function (data) {
            $('#districtsModalLabel').text('แก้ไขข้อมูล');
            $('#districtsModal').modal('show');
            $('#districts_name').val(data.districts_name);
            document.getElementById("form_districts").action = 'districts/' + id +
                '/update';
            document.getElementById("form_districts").method = "post";
        })
    });

</script>


@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
