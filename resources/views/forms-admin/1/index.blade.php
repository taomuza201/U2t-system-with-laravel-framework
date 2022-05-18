@extends('layouts.app')
@section('pageTitle', 'จัดทำรายงานสถานภาพตำบล (Tambon profile)')
@section('content')
@include('layouts.headers.normal', [
'title' => ('จัดทำรายงานสถานภาพตำบล (Tambon profile)' ),
])


<style>
    table tr {
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
                            <h3 class="mb-0">จัดทำรายงานสถานภาพตำบล (Tambon profile) </h3>
                        </div>
                        <div class="col-12 col-md-4 text-center  text-md-right">
                            {{-- <a href="{{route('form1.create')}}" class="btn btn-primary" >เพิ่มข้อมูล</a> --}}

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
                                        <center> ชาย </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> หญิง </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> ประชากรทั้งหมด(รวม ชาย-หญิง) </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> จำนวนครัวเรือน </center>
                                    </th>

                                    <th align="center" scope="col">
                                        <center> จำนวนผู้สูงอายุ </center>
                                    </th>


                                    <th align="center" scope="col">
                                        <center> จำนวนเด็กแรกเกิด ถึง 6 ปี </center>
                                    </th>


                                    <th align="center" scope="col">
                                        <center> จำนวนผู้สูงอายุที่ป่วยเป็นโรคเรื้อรัง </center>
                                    </th>

                                    <th align="center" scope="col">
                                        <center> จำนวนสตรีตั้งครรภ์ </center>
                                    </th>



                                    <th align="center" scope="col">
                                        <center> จำนวนผู้สูงอายุที่ช่วยตนเองไม่ได้ </center>
                                    </th>



                                    <th align="center" scope="col">
                                        <center> จำนวนสตรีอายุ 35 ปี ขึ้นไป </center>
                                    </th>



                                    <th align="center" scope="col">
                                        <center> จำนวนผู้พิการ </center>
                                    </th>


                                    <th align="center" scope="col">
                                        <center> ศูนย์พัฒนาเด็กเล็ก </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> โรงเรียน </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center>วิทยาลัย </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> มหาวิทยาลัย </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center>ศูนย์เรียนรู้ชุมชน </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> ศูนย์การศึกษานอกโรงเรียนและการศึกษาตามอัธยาศัย</center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> ที่อ่านหนังสือประจำหมู่บ้าน </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> วัด </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center>คริสตจักร </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center>สำนักสงฆ์ </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> ศาลเจ้า</center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> โรงพยาบาลส่งเสริมสุขภาพประจำตำบล </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> สถานีตำรวจ </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> ที่ว่าการอำเภอ </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> สำนักงานพัฒนาชุมชน </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> สำนักงานเกษตร </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> สำนักงานสาธารณสุข</center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> สำนักงานปศุสัตว์</center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> ธนาคาร </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center>ปั๊มน้ำมันและก๊าซ </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> โรงงานอุตสาหกรรม </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> ฟาร์มหมู </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center>ฟาร์มไก่ </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center>โรงสี </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center>อู่ซ่อมรถ </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center>ร้านขายอาหาร </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> ร้านขายเครื่องใช้ไฟฟ้า</center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> แม่น้ำ </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> ลำห้วย </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> อ่างเก็บน้ำธรรมชาติ </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> เหมืองฝาย </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> คลองชลประทาน </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> คลองส่งน้ำ </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> สระ </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> อ่างเก็บน้ำที่สร้างขึ้นเอง </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> บ่อน้ำตื้น </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> บ่อโยก </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> ประปาหมู่บ้าน </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> ป่าไม้ </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> กองทุนสวัสดิการชุมชน </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> โครงการเงินออม </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> กองทุนหลักประกันสุขภาพฯ (สปสช.) </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> กองทุนสวัสดิการสมทบ </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> กลุ่มอาชีพสินค้า OTOP</center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> กลุ่มวิสาหกิจชุมชน </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> เก็บข้อมูลโดย </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> เพิ่มข้อมูล ณ วันที่ </center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                @php
                                $count = 1;
                                @endphp
                                @foreach ($form as $row)
                                <tr href="{{url('/forms-1/'.$row->form1s)}}">
                                    <td align="center">{{$count }}</td>
                                    <td align="center">{{$row->districts_name  }}</td>
                                    <td align="center">{{$row->form1s_man  }}</td>
                                    <td align="center">{{$row->form1s_woman  }}</td>
                                    <td align="center">{{$row->form1s_totalgender  }}</td>
                                    <td align="center">{{$row->form1s_household  }}</td>
                                    <td align="center">{{$row->form1s_elderly }}</td>
                                    <td align="center">{{$row->form1s_child_to_6_years }}</td>
                                    <td align="center">{{$row->form1s_chronic_patient  }}</td>
                                    <td align="center">{{$row->form1s_pregnant_women  }}</td>
                                    <td align="center">{{$row->form1s_elderly_can_not_help  }}</td>
                                    <td align="center">{{$row->form1s_woman_to_35_years  }}</td>
                                    <td align="center">{{$row->form1s_handicapped  }}</td>
                                    <td align="center">{{$row->form1s_child_development_center  }}</td>
                                    <td align="center">{{$row->form1s_school  }}</td>
                                    <td align="center">{{$row->form1s_college  }}</td>
                                    <td align="center">{{$row->form1s_university  }}</td>
                                    <td align="center">{{$row->form1s_community_learning_center  }}</td>
                                    <td align="center">{{$row->form1s_non_formal_education  }}</td>
                                    <td align="center">{{$row->form1s_village_books  }}</td>
                                    <td align="center">{{$row->form1s_measure  }}</td>
                                    <td align="center">{{$row->form1s_church  }}</td>
                                    <td align="center">{{$row-> form1s_abbey }}</td>
                                    <td align="center">{{$row-> form1s_shrine }}</td>
                                    <td align="center">{{$row-> form1s_health_hospital }}</td>
                                    <td align="center">{{$row->form1s_police  }}</td>
                                    <td align="center">{{$row->form1s_district_office  }}</td>
                                    <td align="center">{{$row-> form1s_community_development_office }}</td>
                                    <td align="center">{{$row-> form1s_agriculture_office }}</td>
                                    <td align="center">{{$row-> form1s_public_health_office }}</td>
                                    <td align="center">{{$row->form1s_livestock_office  }}</td>
                                    <td align="center">{{$row-> form1s_bank }}</td>
                                    <td align="center">{{$row->form1s_oil_and_gas_pump  }}</td>
                                    <td align="center">{{$row-> form1s_industrial_plant }}</td>
                                    <td align="center">{{$row->  form1s_pig_farm}}</td>
                                    <td align="center">{{$row-> form1s_chicken_farm }}</td>
                                    <td align="center">{{$row-> form1s_rice_mill }}</td>
                                    <td align="center">{{$row-> form1s_garage }}</td>
                                    <td align="center">{{$row-> form1s_food_store }}</td>
                                    <td align="center">{{$row-> form1s_electronics_store }}</td>
                                    <td align="center">{{$row->form1s_river  }}</td>
                                    <td align="center">{{$row->  form1s_creek}}</td>
                                    <td align="center">{{$row->  form1s_natural_reservoir}}</td>
                                    <td align="center">{{$row-> form1s_irrigation_system }}</td>
                                    <td align="center">{{$row-> form1s_irrigation_canal }}</td>
                                    <td align="center">{{$row->  form1s_canal}}</td>
                                    <td align="center">{{$row-> form1s_pool }}</td>
                                    <td align="center">{{$row->  form1s_self_built_reservoir}}</td>
                                    <td align="center">{{$row->  form1s_shallow_well}}</td>
                                    <td align="center">{{$row->  form1s_rocking_pond}}</td>
                                    <td align="center">{{$row-> form1s_village_water_supply }}</td>
                                    <td align="center">{{$row-> form1s_forest }}</td>
                                    <td align="center">{{$row->form1s_community_welfare_fund  }}</td>
                                    <td align="center">{{$row-> form1s_savings_program }}</td>
                                    <td align="center">{{$row->  form1s_health_security_fund}}</td>
                                    <td align="center">{{$row->  form1s_contribution_welfare_fund}}</td>
                                    <td align="center">{{$row->  form1s_otop}}</td>
                                    <td align="center">{{$row->  form1s_community_enterprise_group}}</td>

                                    <td align="center">
                                        {{$row->fname }} {{  $row->lname }}
                                    </td>

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

</script>


@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>




@endpush
