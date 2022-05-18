@extends('layouts.template', ['title' => __('ข้อมูลรายชื่อบุคคล')])

@section('content')
@include('people.header', [
'title' => __('ข้อมูลรายชื่อบุคคล') ,
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
                            <h3 class="mb-0">ข้อมูลอาจารย์</h3>
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
                                    
                                    <input type="text" class="form-control" placeholder=" ค้นหารายชื่อบุลคล"
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

                    <div id="pro">
                        @include('people.pro')
                    </div>
                    <hr>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush table-striped" id="myTable">
                            <thead class="thead-light">
                                <tr>
                                    <th align="center" scope="col">
                                        <center>ลำดับ </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center>ตำบล </center>
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
                                    <th align="center" scope="col">
                                        <center> ตำแหน่ง </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> ประเภท </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> อีเมล </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> เบอร์โทรศัพท์ </center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($people as $row)
                                <tr>
                                    <td></td>
                                    <td>{{$row->districts_name}}</td>
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
                                        {{$row->email}}
                                    </td>
                                    <td>
                                        {{$row->phone}}
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






<script>
    $(document).ready(function () {

        window.setTimeout(function () {
            $(".alert").fadeTo(500, 0).slideUp(500, function () {
                $(this).remove();
            });
        }, 2000);



    });


    function exportexcel (){

        
         var districts = $('#districts').children("option:selected").data('districts_id');
    
         console.log(districts);
         window.location.href = "people/export/"+districts;
      
    }
    $(document).ready(function () {




        

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
                "targets": ['2', '4', '5'],
                "searchable": false
            }]

        });

//  เรียงลำดับตังเลข
        table.on( 'order.dt search.dt', function () {
            table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );



    } ).draw();
        $('#search').keyup(function () {



            table.search($(this).val()).draw();
        })

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

    });

</script>

@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
