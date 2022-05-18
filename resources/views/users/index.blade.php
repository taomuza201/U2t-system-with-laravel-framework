@extends('layouts.app', ['title' => __('จัดการข้อมูลผู้ใช้งาน')])
@section('content')
@include('layouts.headers.normal', [
'title' => __('จัดการข้อมูลผู้ใช้งาน' ) ,
])


<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">จัดการข้อมูลผู้ใช้งาน</h3>
                        </div>
                        <div class="col-4 text-right">
                            <button href="" class="btn btn-sm btn-primary" id="adduserModal" data-toggle="modal" >เพิ่มข้อมูลใช้งาน</button>
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
                                <th align="center" scope="col"><center>ลำดับ   </center> </th>
                                <th align="center" scope="col"><center> สังกัดตำบล   </center> </th>
                                <th align="center" scope="col">
                                    <center>คำนำหน้า </center>
                                </th>
                                <th align="center" scope="col"><center> ชื่อ   </center> </th>
                                <th align="center" scope="col"><center> นามสกุล   </center> </th>
                                <th align="center" scope="col"><center> อีเมล   </center> </th>
                                <th align="center" scope="col"><center> สถานะการใช้งานระบบ   </center> </th>
              
                                <th align="center" scope="col">
                                    <center> ตำแหน่ง </center>
                                </th>
                                <th align="center" scope="col">
                                    <center> ประเภท </center>
                                </th>
                                <th align="center" scope="col">
                                    <center> เบอร์โทรศัพท์ </center>
                                </th>
                                <th align="center" scope="col">
                                    <center> สถานะการใช้งาน </center>
                                </th>
                                
                                <th align="center" scope="col"><center> จัดการข้อมูล   </center> </th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                                $count = 1;
                            @endphp
                        @foreach ($user as $row)
                        <tr>
                            <td align="center">{{$count }}</td>
                            <td>{{$row->districts_name }}</td>
                            <td>
                                @if ($row->gender == 'Mr')
                                นาย
                                @elseif($row->gender == 'Ms')
                                นางสาว
                                @elseif($row->gender == 'Mrs')
                                นาง
                                @elseif($row->gender == 'prof')
                                อาจารย์
                                @elseif($row->gender == 'asstprof')
                                ผู้ช่วยศาสตราจารย์
                                @endif
                            </td>
                            <td>{{$row->fname}}</td>
                            <td>{{$row->lname}}</td>
                            <td>{{$row->email}}</td>
                            <td>
                                @if ($row->position == 'admin')
                                    ผู้ดูแลระบบ
                                @elseif($row->position == 'operator')
                                    เจ้าหน้าปฏิติบัตงาน
                                @elseif($row->position == 'professor')
                                อาจารย์
                                @endif
                            
                            </td>
          
                            <td>
                                @if ($row->status == '1')
                                1. เจ้าหน้าที่วิเคราะห์ข้อมูล (Data Analytics)
                                @elseif($row->status == '2')
                                2. เจ้าหน้าที่จัดการข้อมูลติดตาม/เฝ้าระวัง COVID (ร่วมกับ ศบค.)
                                @elseif($row->status == '3')
                                3. เจ้าหน้าที่จัดการข้อมูลราชการในพื้นที่ ที่เป็นข้อมูลอิเล็คทรอนิกส์ (ร่วมกับ
                                กพร.)
                                @elseif($row->status == '4')
                                4. เจ้าหน้าที่ดำเนินกิจกรรม/โครงการยกระดับรายตำบล
                                @elseif($row->status == '5')
                                5. เจ้าหน้าที่พัฒนาทักษะอาชีพใหม่
                                @elseif($row->status == '6')
                                6. เจ้าหน้าที่ถ่ายทอดองค์ความรู้เทคโนโลยี นวัตกรรม
                                @endif
                            </td>
                            <td>
                                @if ($row->type == '1')
                                01 บัณฑิตจบใหม่
                                @elseif($row->type == '2')
                                02 ประชาชน
                                @elseif($row->type == '3')
                                03 นักศึกษา
                                @endif
                            </td>
                            <td>
                                {{$row->phone}}
                            </td>
                            <td>
                                <center>
                                @if ($row->active ==1)
                                <span class="badge badge-success">Active</span>
                                @else
                                <span class="badge badge-danger">None Active</span>
                                @endif
                            </center>
                            </td>

                       
                            <td align="center">
                                <button type="button" class="btn btn-success  btn-sm"  id="edit-modal" data-id="{{$row->id}}">  แก้ไขข้อมูล</button>
                                <a type="button" class="btn btn-danger btn-sm" style="color:white"
                                href="{{URL('user/'.$row->id.'/destroy')}}"
                                onclick="return confirm('คุณต้องการลบรายการ ? {{$row->fname }}')">ลบ</a>

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
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userModalLabel">เพิ่มข้อมูลตำบล</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form role="form" method="POST" action="user/store" id="form_user">
                    @csrf


                    
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email">{{ __('คำนำหน้า') }}</label>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-badge"></i></span>
                            </div>

                            <select class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}"
                                name="gender" id="gender" required>
                                <option value="">กรุณาเลือกคำนำหน้า</option>
                                <option value="Mr">นาย</option>
                                <option value="Ms">นางสาว</option>
                                <option value="Mrs">นาง</option>
                                <option value="prof">อาจารย์</option>
                                <option value="asstprof">ผู้ช่วยศาสตราจารย์</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email">{{ __('ชื่อ') }}</label>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                            </div>
                            <input class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}"
                                placeholder="{{ __('ชื่อ') }}" type="text" name="fname" id="fname"
                                value="{{ old('fname') }}" required autofocus>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('lname') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email">{{ __('นามสกุล') }}</label>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                            </div>
                            <input class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}"
                                placeholder="{{ __('นามสกุล') }}" type="text" name="lname" id="lname"
                                value="{{ old('lname') }}" required autofocus>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email">{{ __('อีเมล') }}</label>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                            </div>
                            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                placeholder="{{ __('อีเมล') }}" type="email" name="email" id="email"
                                value="{{ old('email') }}" required autofocus>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email">{{ __('	
                            สถานะการใช้งานระบบ
                            ') }}</label>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                            </div>

                            <select class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}"
                                name="position" id="position" required>
                                <option value="">เลือกสถานะการใช้งานระบบ</option>
                                <option value="admin">ผู้ดูแลระบบ</option>
                                <option value="professor">อาจารย์</option>
                                <option value="operator">เจ้าหน้าปฏิติบัตงาน</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email">{{ __('ตำแหน่ง') }}</label>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                            </div>

                            <select class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }}"
                                name="status" id="status" required>
                                <option value="">กรุณาเลือกตำแหน่ง</option>
                                <option value="1">1. เจ้าหน้าที่วิเคราะห์ข้อมูล (Data Analytics)</option>
                                <option value="2">2. เจ้าหน้าที่จัดการข้อมูลติดตาม/เฝ้าระวัง COVID (ร่วมกับ ศบค.)
                                </option>
                                <option value="3">3. เจ้าหน้าที่จัดการข้อมูลราชการในพื้นที่ ที่เป็นข้อมูลอิเล็คทรอนิกส์
                                    (ร่วมกับ กพร.)</option>
                                <option value="4">4. เจ้าหน้าที่ดำเนินกิจกรรม/โครงการยกระดับรายตำบล</option>
                                <option value="5">5. เจ้าหน้าที่พัฒนาทักษะอาชีพใหม่</option>
                                <option value="6">6. เจ้าหน้าที่ถ่ายทอดองค์ความรู้เทคโนโลยี นวัตกรรม</option>

                            </select>
                        </div>
                    </div>




                    <div class="form-group{{ $errors->has('type') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email">{{ __('ประเภท') }}</label>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                            </div>

                            <select class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}"
                                name="type" id="type" required>
                                <option value="">กรุณาเลือกประเภท</option>
                                <option value="1">01 บัณฑิตจบใหม่</option>
                                <option value="2">02 ประชาชน</option>
                                <option value="3">03 นักศึกษา</option>

                            </select>
                        </div>
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



                        
                    <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email">{{ __('เบอร์โทรศัพท์') }}</label>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                            </div>

                            <input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                placeholder="{{ __('เบอร์โทรศัพท์') }}" type="text" name="phone" 
                                id="phone" value="{{ old('phone') }}" required autofocus>
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email">{{ __('สถานะการใช้งาน') }}</label>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                {{-- <span class="input-group-text"><i class="ni ni-mobile-button"></i></span> --}}
                            </div>


                            <div class="custom-control custom-radio mb-3">
                                <input name="active" class="custom-control-input" id="customRadio5" type="radio" checked value="1">
                                <label class="custom-control-label" for="customRadio5">Active  &nbsp;</label>
                              </div>
                              <div class="custom-control custom-radio mb-3">
                                <input name="active" class="custom-control-input" id="customRadio6" type="radio" value="0">
                                <label class="custom-control-label" for="customRadio6">None Active</label>
                              </div>

                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('รหัสผ่าน') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email">{{ __('รหัสผ่าน') }}</label>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                            </div>

                            <input class="form-control{{ $errors->has('รหัสผ่าน') ? ' is-invalid' : '' }}"
                            placeholder="{{ __('รหัสผ่าน') }}" type="password" name="password" id="password" value="123456789"
                            value="{{ old('รหัสผ่าน') }}"  autofocus>
                            </select>
                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('position_orther') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email">{{ __('สถานะพิเศษ') }}</label>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                            </div>

                            <select class="form-control{{ $errors->has('position_orther') ? ' is-invalid' : '' }}"
                                name="position_orther" id="position_orther">
                                <option value="0">ไม่มี</option>
                                <option value="admin">ผู้ดูแลระบบ</option>
                                <option value="professor">อาจารย์</option>
                                <option value="operator">เจ้าหน้าปฏิติบัตงาน</option>

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


<script>

$(document).ready(function () {

window.setTimeout(function () {
$(".alert").fadeTo(500, 0).slideUp(500, function () {
    $(this).remove();
});
}, 2000);
});

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


    $('body').on('click', '#adduserModal', function () {

        $('#userModalLabel').text('เพิ่มข้อมูล');
        $('#userModal').modal('show');
        
        $('#fname').val('' );
            $('#lname').val('' );
            $('#email').val('' );
            $('#position').val('' );
            $('#districts_id').val('' );
            $('#gender').val('');

            $('#status').val('');
            $('#type').val('');
            $('#phone').val('')
            $('#position_orther').val(0)
            $('#password').val('123456789');

    });

    $('body').on('click', '#edit-modal', function () {

        var id = $(this).data('id');

        $.get('user/' + id + '/edit', function (data) {
            $('#userModalLabel').text('แก้ไขข้อมูล');
            $('#userModal').modal('show');
            $('#gender').val(data.gender);
            $('#fname').val(data.fname);
            $('#lname').val(data.lname);
            $('#email').val(data.email);

            $('#status').val(data.status);
            $('#type').val(data.type);
            $('#phone').val(data.phone);
            $('#position_orther').val(data.position_orther);

            if(data.active ==1){
                $("#customRadio5").prop("checked", true);
            }else{
                $("#customRadio6").prop("checked", true);
            }


            $('#position').val(data.position );
            $('#districts_id').val(data.districts_id );
            $('#password').val('' );



            document.getElementById("form_user").action = 'user/' + id +
                '/update';
            document.getElementById("form_user").method = "post";
        })
    });

</script>

@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
