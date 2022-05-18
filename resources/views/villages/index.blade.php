@extends('layouts.app', ['title' => __('จัดการข้อมูลหมู่บ้าน')])
@section('content')
@include('layouts.headers.normal', [
'title' => __('จัดการข้อมูลหมู่บ้าน' ) ,
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
                            <h3 class="mb-0">จัดการข้อมูลหมู่บ้าน</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="" class="btn btn-sm btn-primary" data-toggle="modal" id="addvillagesModal"
                                data-target="#villagesModal">เพิ่มข้อมูลหมู่บ้าน</a>
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
                                        <center> หมู่บ้าน </center>
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
                                @foreach ($villages as $row)
                                <tr>
                                    <td align="center">{{$count }}</td>
                                    <td>{{$row->villages_name  }}</td>
                                    <td>{{$row->districts_name   }}</td>
                             

                                    <td align="center">
                                        <button type="button" class="btn btn-success  btn-sm" id="edit-modal" data-id="{{$row->villages_id}}">แก้ไขข้อมูล</button>

                                        <a type="button" class="btn btn-danger btn-sm" style="color:white"
                                            href="{{URL('villages/'.$row->villages_id.'/destroy')}}"
                                            onclick="return confirm('คุณต้องการลบรายการ ? {{$row->villages_name }}')">ลบ</a>

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
<div class="modal fade" id="villagesModal" tabindex="-1" role="dialog" aria-labelledby="villagesModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="villagesModalLabel">เพิ่มข้อมูลตำบล</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form role="form" method="POST" action="villages/store" id="form_villages">
                    @csrf

                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                            </div>
                            <input class="form-control{{ $errors->has('villages_name') ? ' is-invalid' : '' }}"
                                placeholder="{{ __('ชื่อหมู่บ้าน') }}" type="text" name="villages_name" id="villages_name"
                                value="{{ old('villages_name') }}" required autofocus>
                        </div>
                        @if ($errors->has('villages_name'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('villages_name') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email">{{ __('สังกัดตำบล') }}</label>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-square-pin"></i></span>
                            </div>

                            <select class="form-control{{ $errors->has('districts_id') ? ' is-invalid' : '' }}"
                                name="districts_id" id="districts_id" required>
                                <option value="">เลือกสังกัดตำบล</option>
                                @foreach ($districts as $row)
                                <option value="{{$row->districts_id}}">{{$row->districts_name}}</option>
                                @endforeach
                            </select>
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
                "targets": ['2','3'],
                "searchable": false
            }]

        });
    });


    $('body').on('click', '#addvillagesModal', function () {

        $('#villagesModalLabel').text('เพิ่มข้อมูล');
        $('#villagesModal').modal('show');
        $('#villages_name').val('');
        $('#districts_id').val('');
    });

    $('body').on('click', '#edit-modal', function () {

        var id = $(this).data('id');

        $.get('villages/' + id + '/edit', function (data) {
            $('#villagesModalLabel').text('แก้ไขข้อมูล');
            $('#villagesModal').modal('show');

            $('#districts_id').val(data.villages_districts_id);
            $('#villages_name').val(data.villages_name);


            document.getElementById("form_villages").action = 'villages/' + id +
                '/update';
            document.getElementById("form_villages").method = "post";
        })
    });

</script>


@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
