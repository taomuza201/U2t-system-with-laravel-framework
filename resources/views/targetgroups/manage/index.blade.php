@extends('layouts.template', ['title' => __('กลุ่มเป้าหมาย')])

@section('content')
@include('targetgroups.manage.header', [
'title' => __('ข้อมูลกลุ่มเป้าหมาย' ) ,
])


<style>
    .dataTables_filter {
        display: none;
    }

</style>

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8 col-md-7">
                            <h3 class="mb-0">ข้อมูลกลุ่มเป้าหมาย</h3>
                        </div>
                        <div class="col-12 col-md-5  text-right">

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                        <select
                                            class="form-control{{ $errors->has('districts_id') ? ' is-invalid' : '' }}"
                                            name="districts" id="districts" required>
                                            <option value="" data-districts_id="all">ทั้งหมด</option>
                                            @foreach ($districts as $row)
                                            <option value="{{$row->districts_name}}" data-districts_id="{{$row->districts_id}}">{{$row->districts_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <input type="text" class="form-control" placeholder=" ค้นหารายชื่อกลุ่มเป้าหมาย"
                                        id="search"  >
                                        
                                        &nbsp
                                        <button class="btn btn-icon btn-3 btn-primary " type="button" id="exportexcel" onclick="exportexcel(this)">
                                     
                                            
                                            <span class="btn-inner--text">ดาวน์โหลด Excel</span>
                                            
                                        </button>

                                </div>
                                
                                
                            </div>


                        </div>
                    </div>
                </div>

                <div class="col-12">

                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    @if (session('fail'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif


                    <div class="table-responsive">
                        <table class="table align-items-center table-flush table-striped" id="myTable">
                            <thead class="thead-light">
                                <tr>
                                    <th align="center" scope="col">
                                        <center>ลำดับ </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> ตำบล </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center>คำนำหน้า </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> ชื่อ </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> นามสกุล </center>
                                    </th>
                                    {{-- <th align="center" scope="col">
                                        <center> เบอร์โทรศัพท์ </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> ที่อยู่ </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> อาชีพปัจจุบัน </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> เหตุผล/เป้าหมายที่เข้าร่วมโครงการ </center>
                                    </th> --}}


                                    <th align="center" scope="col">
                                        <center> จัดการข้อมูล </center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($targetgroups as $row)
                                <tr>
                                    <td align="center"> </td>
                                    <td align=""> {{$row->districts_name }}</td>
                                    <td>
                                        @if ($row->targetgroups_gender == 'Mr')
                                        นาย
                                        @elseif($row->targetgroups_gender == 'Ms')
                                        นาง
                                        @elseif($row->targetgroups_gender == 'Mrs')
                                        นางสาว
                                        @elseif($row->targetgroups_gender == 'prof')
                                        อาจารย์
                                        @elseif($row->targetgroups_gender == 'asstprof')
                                        ผู้ช่วยศาสตราจารย์
                                        @endif
                                    </td>
                                    <td>{{$row->targetgroups_fname}}</td>
                                    <td>{{$row->targetgroups_lname}}</td>
                                    {{-- <td>{{$row->targetgroups_phone}}</td>
                                    <td>{{$row->targetgroups_address}}</td>
                                    <td>{{$row->targetgroups_career}}</td>
                                    <td>{{$row->targetgroups_reason}}</td> --}}


                                    <td align="center">
                                        <button type="button" class="btn btn-success  btn-sm" id="edit-modal"
                                            data-id="{{$row->targetgroups_id }}"> แก้ขไขข้อมูล</button>

                                        <a type="button" class="btn btn-danger btn-sm" style="color:white"
                                            href="{{URL('targetgroups/'.$row->targetgroups_id .'/destroy')}}"
                                            onclick="return confirm('คุณต้องการลบรายการ ? {{$row->targetgroups_fname }}')">ลบ</a>

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
<div class="modal fade" id="targetgroupsModal" tabindex="-1" role="dialog" aria-labelledby="targetgroupsModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="targetgroupsModalLabel">เพิ่มข้อมูลตำบล</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form role="form" method="POST" action="targetgroups/store" id="form_targetgroups">
                    @csrf

                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email">{{ __('คำนำหน้า') }}</label>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-badge"></i></span>
                            </div>

                            <select class="form-control{{ $errors->has('targetgroups_gender') ? ' is-invalid' : '' }}"
                                name="targetgroups_gender" id="targetgroups_gender" required>
                                <option value="">กรุณาเลือกคำนำหน้า</option>
                                <option value="Mr">นาย</option>
                                <option value="Ms">นาง</option>
                                <option value="Mrs">นางสาว</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('targetgroups_fname') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email">{{ __('ชื่อ') }}</label>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                            </div>
                            <input class="form-control{{ $errors->has('targetgroups_fname') ? ' is-invalid' : '' }}"
                                placeholder="{{ __('ชื่อ') }}" type="text" name="targetgroups_fname"
                                id="targetgroups_fname" value="{{ old('targetgroups_fname') }}" required autofocus>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('targetgroups_lname') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email">{{ __('นามสกุล') }}</label>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                            </div>
                            <input class="form-control{{ $errors->has('targetgroups_lname') ? ' is-invalid' : '' }}"
                                placeholder="{{ __('นามสกุล') }}" type="text" name="targetgroups_lname"
                                id="targetgroups_lname" value="{{ old('targetgroups_lname') }}" required autofocus>
                        </div>
                    </div>



                    <div class="form-group{{ $errors->has('targetgroups_phone') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email">{{ __('เบอร์โทรศัพท์') }}</label>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                            </div>

                            <input class="form-control{{ $errors->has('targetgroups_phone') ? ' is-invalid' : '' }}"
                                placeholder="{{ __('เบอร์โทรศัพท์') }}" type="text" name="targetgroups_phone" onkeypress="return onlyNumberKey(event)"   maxlength="10"
                                id="targetgroups_phone" value="{{ old('targetgroups_phone') }}" required autofocus>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('targetgroups_address') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email">{{ __('ที่อยู่') }}</label>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-building"></i></span>
                            </div>

                            <textarea
                                class="form-control{{ $errors->has('targetgroups_address') ? ' is-invalid' : '' }}"
                                placeholder="{{ __('ที่อยู่') }}" type="text" name="targetgroups_address"
                                id="targetgroups_address" value="{{ old('targetgroups_address') }}" required autofocus
                                cols="30" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('targetgroups_career') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email">{{ __('อาชีพปัจจุบัน') }}</label>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-briefcase-24"></i></span>
                            </div>

                            <textarea class="form-control{{ $errors->has('targetgroups_career') ? ' is-invalid' : '' }}"
                                placeholder="{{ __('อาชีพปัจจุบัน') }}" type="text" name="targetgroups_career"
                                id="targetgroups_career" value="{{ old('targetgroups_career') }}" required autofocus
                                cols="30" rows="2"></textarea>
                        </div>
                    </div>




                    <div class="form-group{{ $errors->has('targetgroups_reason') ? ' has-danger' : '' }}">
                        <label class="form-control-label"
                            for="input-email">{{ __('เหตุผล/เป้าหมายที่เข้าร่วมโครงการ') }}</label>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-air-baloon"></i></span>
                            </div>

                            <textarea class="form-control{{ $errors->has('targetgroups_reason') ? ' is-invalid' : '' }}"
                                placeholder="{{ __('เหตุผล/เป้าหมายที่เข้าร่วมโครงการ') }}" type="text"
                                name="targetgroups_reason" id="targetgroups_reason"
                                value="{{ old('targetgroups_reason') }}" required autofocus cols="30"
                                rows="3"></textarea>
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


<script>

function exportexcel (){

        
var districts = $('#districts').children("option:selected").data('districts_id');

console.log(districts);
window.location.href = "targetgroups/export/"+districts;

}
    $(document).ready(function () {

        window.setTimeout(function () {
            $(".alert").fadeTo(500, 0).slideUp(500, function () {
                $(this).remove();
            });
        }, 2000);


        var table = $('#myTable').DataTable({
            "ordering": false,
            "language": {
                "search": "ค้นหา ชื่อ - สกุล:",
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
                "searchable": false
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



        $('#districts').on('change', function () {
            

            $.ajax({
                url: "people/getpro?districts_name="+this.value,
                success: function (data) {

                    $('#pro').html('');
                    $('#pro').html(data);

               
                }
            })
            
            table.columns(1).search(this.value).draw();
            $('#search').val('');
        });


        $('#search').keyup(function () {

table.search($(this).val()).draw();
})




    });

    function onlyNumberKey(evt) { 
          
          // Only ASCII charactar in that range allowed 
          var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
          if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
              return false; 
          return true; 
      } 

    $('body').on('click', '#addtargetgroupsModal', function () {

        $('#targetgroupsModalLabel').text('เพิ่มข้อมูลกลุ่มเป้าหมาย');
        $('#targetgroupsModal').modal('show');

        $('#targetgroups_gender').val('');
        $('#targetgroups_fname').val('');
        $('#targetgroups_lname').val('');
        $('#targetgroups_phone').val('');
        $('#targetgroups_address').val('');
        $('#targetgroups_career').val('');
        $('#targetgroups_reason').val('');

    });

    $('body').on('click', '#edit-modal', function () {

        var id = $(this).data('id');

        $.get('targetgroups/' + id + '/edit', function (data) {
            $('#targetgroupsModalLabel').text('แก้ไขข้อมูลกลุ่มเป้าหมาย');
            $('#targetgroupsModal').modal('show');
            $('#targetgroups_gender').val(data.targetgroups_gender);
            $('#targetgroups_fname').val(data.targetgroups_fname);
            $('#targetgroups_lname').val(data.targetgroups_lname);
            $('#targetgroups_phone').val(data.targetgroups_phone);

            $('#targetgroups_address').val(data.targetgroups_address);
            $('#targetgroups_career').val(data.targetgroups_career);
            $('#targetgroups_reason').val(data.targetgroups_reason);




            document.getElementById("form_targetgroups").action = 'targetgroups/' + id +
                '/update';
            document.getElementById("form_targetgroups").method = "post";
        })
    });


       



    

</script>

@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
