@extends('layouts.app')

@section('content')
@include('layouts.headers.normal', [
'title' => __('สรุปการกรอกข้อมูลตามภาระงานประจำ' ) ,
])

<style>
    .dataTables_filter {
        display: none;
    }

    .label_float {
        margin-top: 10px;
        float: left;
    }

    /* span {
        display: block;
        overflow: hidden;
        padding: 0px 4px 0px 6px;
    } */

    .border_top {
        border-top-style: solid;
    }

    .border_bottom {
        border-bottom-style: solid;
    }

    .vertical-center {
        display: flex;
        justify-content: center;
        align-items: center;
        /* text-justify:auto;
             */
        word-wrap: break-word;

    }

    .span {
        word-wrap: break-word;
        white-space: initial;
    }

    th {
        text-align: center;
    }

    .td-center {
        text-align: center;
    }

</style>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="col-12 p-2">


                    <div class="row">
                        <div class="col-12 col-md-6 mb-5">
                            <div class="card shadow">
                                <div class="card-header border-0">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="mb-0"> 1.จัดทำรายงานสถานภาพตำบล (Tambon profile)</h3>
                                        </div>

                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">ลำดับที่</th>
                                                <th scope="col">ตำบล</th>
                                                <th scope="col">จำนวน</th>
                                                <th scope="col">#</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($form1 as $row )
                                            <tr>
                                                <th scope="row">
                                                    {{ $loop->index  +1 }}
                                                </th>
                                                <td>
                                                    {{$row->districts_name }}
                                                </td>
                                                <td>
                                                    {{$row->total }}
                                                </td>
                                                <td class="td-center">
                                                    <a href="{{ url('repostform/'.$row->districts_id.'/form1') }}"
                                                        class="btn btn-info  btn-sm">ดูเพิ่มเติม</a>
                                                </td>
                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-5">
                            <div class="card shadow">
                                <div class="card-header border-0">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="mb-0"> 2.รวบรวม สำรวจ จัดเก็บข้อมูลด้านทรัพยากรมนุษย์
                                                เชิงลึกของตำบล</h3>
                                        </div>

                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">ลำดับที่</th>
                                                <th scope="col">ตำบล</th>
                                                <th scope="col">จำนวน</th>
                                                <th scope="col">#</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($form2 as $row )
                                            <tr>
                                                <th scope="row">
                                                    {{ $loop->index  +1 }}
                                                </th>
                                                <td>
                                                    {{$row->districts_name }}
                                                </td>
                                                <td>
                                                    {{$row->total }}
                                                </td>
                                                <td class="td-center">
                                                    <a href="{{ url('repostform/'.$row->districts_id.'/form2') }}"
                                                        class="btn btn-info  btn-sm">ดูเพิ่มเติม</a>
                                                </td>
                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6 mb-5">
                            <div class="card shadow">
                                <div class="card-header border-0">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="mb-0"> 3.ข้อมูลสถานการณ์โรคระบาด ทั้งในระกับท้องถิ่น จังหวัด ภาค
                                                ประเทศ และนานาชาติ</h3>
                                        </div>

                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">ลำดับที่</th>
                                                <th scope="col">ตำบล</th>
                                                <th scope="col">จำนวน</th>
                                                <th scope="col">#</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($form3 as $row )
                                            <tr>
                                                <th scope="row">
                                                    {{ $loop->index  +1 }}
                                                </th>
                                                <td>
                                                    {{$row->districts_name }}
                                                </td>
                                                <td>
                                                    {{$row->total }}
                                                </td>
                                                <td class="td-center">
                                                    <a href="{{ url('repostform/'.$row->districts_id.'/form3') }}"
                                                        class="btn btn-info  btn-sm">ดูเพิ่มเติม</a>
                                                </td>
                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-5">
                            <div class="card shadow">
                                <div class="card-header border-0">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="mb-0"> 4.ความรู้ด้านการจัดการโรคระบาดที่เกี่ยวข้อง</h3>
                                        </div>

                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">ลำดับที่</th>
                                                <th scope="col">ตำบล</th>
                                                <th scope="col">จำนวน</th>
                                                <th scope="col">#</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($form4 as $row )
                                            <tr>
                                                <th scope="row">
                                                    {{ $loop->index  +1 }}
                                                </th>
                                                <td>
                                                    {{$row->districts_name }}
                                                </td>
                                                <td>
                                                    {{$row->total }}
                                                </td>
                                                <td class="td-center">
                                                    <a href="{{ url('repostform/'.$row->districts_id.'/form4') }}"
                                                        class="btn btn-info  btn-sm">ดูเพิ่มเติม</a>
                                                </td>
                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="row">


                        <div class="col-12 col-md-6 mb-5">
                            <div class="card shadow">
                                <div class="card-header border-0">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="mb-0"> 5.การแลกเปลี่ยนเรียนรู้ที่เกี่ยวข้องกับงานด้านสุขภาพ
                                                หรือโรคระบาดต่างๆ</h3>
                                        </div>

                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">ลำดับที่</th>
                                                <th scope="col">ตำบล</th>
                                                <th scope="col">จำนวน</th>
                                                <th scope="col">#</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($form5 as $row )
                                            <tr>
                                                <th scope="row">
                                                    {{ $loop->index  +1 }}
                                                </th>
                                                <td>
                                                    {{$row->districts_name }}
                                                </td>
                                                <td>
                                                    {{$row->total }}
                                                </td>
                                                <td class="td-center">
                                                    <a href="{{ url('repostform/'.$row->districts_id.'/form5') }}"
                                                        class="btn btn-info  btn-sm">ดูเพิ่มเติม</a>
                                                </td>
                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-5">
                            <div class="card shadow">
                                <div class="card-header border-0">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="mb-0"> 6.ต้นแบบหน่วยงานภายใน
                                                ในการจัดการข้อมูลให้อยู่ในรูปแบบข้อมูลอิเลคทรอนิกส์ </h3>
                                        </div>

                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">ลำดับที่</th>
                                                <th scope="col">ตำบล</th>
                                                <th scope="col">จำนวน</th>
                                                <th scope="col">#</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($form6 as $row )
                                            <tr>
                                                <th scope="row">
                                                    {{ $loop->index  +1 }}
                                                </th>
                                                <td>
                                                    {{$row->districts_name }}
                                                </td>
                                                <td>
                                                    {{$row->total }}
                                                </td>
                                                <td class="td-center">
                                                    <a href="{{ url('repostform/'.$row->districts_id.'/form6') }}"
                                                        class="btn btn-info  btn-sm">ดูเพิ่มเติม</a>
                                                </td>
                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="row">


                        <div class="col-12 col-md-6 mb-5">
                            <div class="card shadow">
                                <div class="card-header border-0">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="mb-0">
                                                7.ประชาสัมพันธ์การดำเนินงานโครงการ/กิจกรรมยกระดับศักยภาพตำบล</h3>
                                        </div>

                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">ลำดับที่</th>
                                                <th scope="col">ตำบล</th>
                                                <th scope="col">จำนวน</th>
                                                <th scope="col">#</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($form7 as $row )
                                            <tr>
                                                <th scope="row">
                                                    {{ $loop->index  +1 }}
                                                </th>
                                                <td>
                                                    {{$row->districts_name }}
                                                </td>
                                                <td>
                                                    {{$row->total }}
                                                </td>
                                                <td class="td-center">
                                                    <a href="{{ url('repostform/'.$row->districts_id.'/form7') }}"
                                                        class="btn btn-info  btn-sm">ดูเพิ่มเติม</a>
                                                </td>
                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-5">
                            <div class="card shadow">
                                <div class="card-header border-0">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="mb-0"> 8.สำรวจ
                                                และจัดเก็บข้อมูลเชิงลึกด้านศักยภาพของกลุ่มเป้าหมาย/วิสาหกิจที่เข้าร่วมโครงการ
                                            </h3>
                                        </div>

                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">ลำดับที่</th>
                                                <th scope="col">ตำบล</th>
                                                <th scope="col">จำนวน</th>
                                                <th scope="col">#</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($form8 as $row )
                                            <tr>
                                                <th scope="row">
                                                    {{ $loop->index  +1 }}
                                                </th>
                                                <td>
                                                    {{$row->districts_name }}
                                                </td>
                                                <td>
                                                    {{$row->total }}
                                                </td>

                                                <td class="td-center">
                                                    <a href="{{ url('repostform/'.$row->districts_id.'/form8') }}"
                                                        class="btn btn-info  btn-sm">ดูเพิ่มเติม</a>
                                                </td>
                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="row">


                        <div class="col-12 col-md-6 mb-5">
                            <div class="card shadow">
                                <div class="card-header border-0">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="mb-0"> 9.แนวทางการจัดการเรียนรู้ที่มีประสิทธิภาพ
                                                สอดคล้องกับธรรมชาติการเรียนรู้และบริบทของชุมชน</h3>
                                        </div>

                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">ลำดับที่</th>
                                                <th scope="col">ตำบล</th>
                                                <th scope="col">จำนวน</th>
                                                <th scope="col">#</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($form9 as $row )
                                            <tr>
                                                <th scope="row">
                                                    {{ $loop->index  +1 }}
                                                </th>
                                                <td>
                                                    {{$row->districts_name }}
                                                </td>
                                                <td>
                                                    {{$row->total }}
                                                </td>
                                                <td class="td-center">
                                                    <a href="{{ url('repostform/'.$row->districts_id.'/form9') }}"
                                                        class="btn btn-info  btn-sm">ดูเพิ่มเติม</a>
                                                </td>
                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-5">
                            <div class="card shadow">
                                <div class="card-header border-0">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="mb-0">
                                                10.ศึกษาสภาพแว้ดล้อมทรัพยากรในตำบลเพื่อเป็นข้อมูลตัดสินใจการพัฒนาอาชีพใหม่ในชุมชน
                                            </h3>
                                        </div>

                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">ลำดับที่</th>
                                                <th scope="col">ตำบล</th>
                                                <th scope="col">จำนวน</th>
                                                <th scope="col">#</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($form10 as $row )
                                            <tr>
                                                <th scope="row">
                                                    {{ $loop->index  +1 }}
                                                </th>
                                                <td>
                                                    {{$row->districts_name }}
                                                </td>
                                                <td>
                                                    {{$row->total }}
                                                </td>
                                                <td class="td-center">
                                                    <a href="{{ url('repostform/'.$row->districts_id.'/form10') }}"
                                                        class="btn btn-info  btn-sm">ดูเพิ่มเติม</a>
                                                </td>
                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>


                    <div class="row">


                        <div class="col-12 col-md-6 mb-5">
                            <div class="card shadow">
                                <div class="card-header border-0">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="mb-0"> 11.แนวทางการพัฒนาอาชีพใหม่ ในกรอบการพัฒนานาของประเทศ
                                                และนานาชาติ</h3>
                                        </div>

                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">ลำดับที่</th>
                                                <th scope="col">ตำบล</th>
                                                <th scope="col">จำนวน</th>
                                                <th scope="col">#</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($form11 as $row )
                                            <tr>
                                                <th scope="row">
                                                    {{ $loop->index  +1 }}
                                                </th>
                                                <td>
                                                    {{$row->districts_name }}
                                                </td>
                                                <td>
                                                    {{$row->total }}
                                                </td>
                                                <td class="td-center">
                                                    <a href="{{ url('repostform/'.$row->districts_id.'/form11') }}"
                                                        class="btn btn-info  btn-sm">ดูเพิ่มเติม</a>
                                                </td>
                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-5">
                            <div class="card shadow">
                                <div class="card-header border-0">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="mb-0">
                                                12.ความรู้ที่จำเป็นในการถ่ายทอดเทคโนโลยีที่สอดคล้องกับธรรมชาติการเรียนรู้
                                                ศักยภาพ และความต้องการของชุมชน</h3>
                                        </div>

                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">ลำดับที่</th>
                                                <th scope="col">ตำบล</th>
                                                <th scope="col">จำนวน</th>
                                                <th scope="col">#</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($form12 as $row )
                                            <tr>
                                                <th scope="row">
                                                    {{ $loop->index  +1 }}
                                                </th>
                                                <td>
                                                    {{$row->districts_name }}
                                                </td>
                                                <td>
                                                    {{$row->total }}
                                                </td>
                                                <td class="td-center">
                                                    <a href="{{ url('repostform/'.$row->districts_id.'/form12') }}"
                                                        class="btn btn-info  btn-sm">ดูเพิ่มเติม</a>
                                                </td>
                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>


                    <div class="row">


                        <div class="col-12 col-md-6 mb-5">
                            <div class="card shadow">
                                <div class="card-header border-0">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="mb-0"> 13.กระบวนการการแลกเปลี่ยนเรียนรู้ในชุมชน</h3>
                                        </div>

                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">ลำดับที่</th>
                                                <th scope="col">ตำบล</th>
                                                <th scope="col">จำนวน</th>
                                                <th scope="col">#</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($form13 as $row )
                                            <tr>
                                                <th scope="row">
                                                    {{ $loop->index  +1 }}
                                                </th>
                                                <td>
                                                    {{$row->districts_name }}
                                                </td>
                                                <td>
                                                    {{$row->total }}
                                                </td>
                                                <td class="td-center">
                                                    <a href="{{ url('repostform/'.$row->districts_id.'/form13') }}"
                                                        class="btn btn-info  btn-sm">ดูเพิ่มเติม</a>
                                                </td>
                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mb-5">
                            <div class="card shadow">
                                <div class="card-header border-0">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h3 class="mb-0"> 14.ประชาสัมพันธ์/สร้างความเข้าใจกับชุมชน
                                                ในกระบวนการด้านการถ่ายทอดความรู้</h3>
                                        </div>

                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col">ลำดับที่</th>
                                                <th scope="col">ตำบล</th>
                                                <th scope="col">จำนวน</th>
                                                <th scope="col">#</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($form14 as $row )
                                            <tr>
                                                <th scope="row">
                                                    {{ $loop->index  +1 }}
                                                </th>
                                                <td>
                                                    {{$row->districts_name }}
                                                </td>
                                                <td>
                                                    {{$row->total }}
                                                </td>
                                                <td class="td-center">
                                                    <a href="{{ url('repostform/'.$row->districts_id.'/form14') }}"
                                                        class="btn btn-info  btn-sm">ดูเพิ่มเติม</a>
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
            </div>
        </div>
    </div>

    @include('layouts.footers.auth')
</div>
@endsection

@push('js')

<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
