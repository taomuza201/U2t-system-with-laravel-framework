@extends('layouts.template', ['title' => __('ไดอารี่')])

@section('content')
@include('blog.blog_subjects.history.header', [
'title' => __('') ,
])


{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"> --}}
<style>
    .label_float {
        margin-top: 10px;
        float: left;
    }


    .border_top {
        border-top-style: solid;
    }

    .border_bottom {
        border-bottom-style: solid;
    }

    .dataTables_filter {
        display: none;
    }

    table tr {
        cursor: pointer;
    }

    .number_center {
        text-align: center;
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

            @if (session('fial'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('fial') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8 col-md-5">
                            {{-- <h3 class="mb-0">ข้อมูล {{$blog_subjects_title}}</h3> --}}
                        </div>
                        <div class="col-12 col-md-7  text-right">


                            <div class="input-group">
                                <div class="input-group-prepend " style="width: 30%">

                                    <select class="form-control-group" name="districts" id="districts" required>
                                        <option value="" data-districts_id="all">ทั้งหมด</option>
                                        @foreach ($districts as $row)
                                        <option value="{{$row->districts_name}}"
                                            data-districts_id="{{$row->districts_id}}">{{$row->districts_name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <input type="text" class="form-control  " placeholder=" ค้นหารายชื่อบุลคล" id="search">
                                &nbsp

                            </div>




                        </div>
                    </div>
                </div>

                <div class="col-12">


                    <div class="table-responsive">
                        <table class="table align-items-center   table-hover table-bordered" id="myTable">
                            <thead class="thead-light">
                                <tr>
                                    <th align="center" scope="col">
                                        <center> ลำดับ </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> ชื่อ - นามสกุล </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> สังกัดตำบล </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> จำนวนที่กรอก </center>
                                    </th>

                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($blog_detail as $row)
                                <tr href="{{URL('/blog_details/history/'.$id.'/'.$row->id)}}" class="href" data-link="{{URL('/blog_details/history/'.$id.'/'.$row->id)}}">
                                    <td class="number_center"></td>
                                    <td>{{$row->fname}} {{$row->lname}}</td>
                                    <td>{{$row->districts_name  }} </td>
                                    @php
                                    $count = DB::table('blog_details')->where('blog_details_user',$row->id)
                                    ->where('blog_details_blog_subjects_id', $id)->get();
                                    @endphp
                                    <td class="number_center">
                                        {{$count = $count->count()}}
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4" class="text-right text-red">จำนวนที่กรอกทั้งหมด: <span id="total"></span></td>
                                </tr>
                            </tfoot>

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


        $("table tr").mousedown(function(e){
            document.oncontextmenu = function() {return false;};
        e.preventDefault();

        var href = $(this).attr("data-link");
        if( e.button == 2 ) {
            window.open(href, '_blank');

        }
    });




    });

</script>


<script>
    $(document).ready(function () {


        var districts_id = $('#districts').children("option:selected").data('districts_id');
            $.ajax({

                url: "{{url('sum')}}/"+districts_id+'/'+ {{$id}},

                success: function (response) {

                    $('#total').text(response);
                }
            });


        $('table  .href').click(function () {
            window.location = $(this).attr('href');
            return false;



        });

        var table = $('#myTable').DataTable({
            "ordering": true,
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
                "targets": [2],
                // "searchable": false
            }],

        });


        //  เรียงลำดับตังเลข
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


            table.columns(2).search(this.value).draw();
            $('#search').val('');
            var districts_id = $('#districts').children("option:selected").data('districts_id');

            let subject = {{$id}}
            $.ajax({

                url: "{{url('sum')}}/"+districts_id+'/'+subject,

                success: function (response) {

                    $('#total').text(response);
                }
            });
        });


    });

</script>


@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
