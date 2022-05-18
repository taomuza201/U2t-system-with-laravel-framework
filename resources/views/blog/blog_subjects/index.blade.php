@extends('layouts.template', ['title' => __('ไดอารี่')])

@section('content')
@include('blog.blog_subjects.header', [
'title' => __('ไดอารี่') ,
])



<style>
    /* .dataTables_filter {
        display: none;
    } */

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
                        <div class="col-12">
                            <h3 class="mb-0">จัดการข้อมูลไดอารี่</h3>
                        </div>
                        <div class="col-12   text-md-right   text-center">
                            <a href="" class="btn btn-sm btn-primary" data-toggle="modal" id="Addblog_subjects"
                                data-target="#blog_subjectsModal">
                                เพิ่มหัวข้อ</a>
                        </div>
                    </div>
                </div>

                <div class="col-12">


                    <div class="table-responsive">
                        <table class="table align-items-center table-flush table-striped table-hover" id="myTable">
                            <thead class="thead-light">
                                <tr>
                                    <th align="center" scope="col">
                                        <center> ลำดับ </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> ครั้งที่ </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> วันเริ่มต้นกรอกข้อมูล </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> วันสิ้นสุดกรอกข้อมูล </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> สี </center>
                                    </th>
                                    <th align="center" scope="col">
                                        <center> จัดการข้อมูล </center>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($blog_subjects as $row)
                                <tr>
                                    <td id="td" href="{{URL('/blog_subjects/'.$row->blog_subjects_id.'/history?blog_subjects_title='.$row->blog_subjects_title)}}"> </td>
                                    <td id="td" href="{{URL('/blog_subjects/'.$row->blog_subjects_id.'/history?blog_subjects_title='.$row->blog_subjects_title)}}"> 
                                        {{$row->blog_subjects_title}}
                                    </td>
                                    <td id="td" href="{{URL('/blog_subjects/'.$row->blog_subjects_id.'/history?blog_subjects_title='.$row->blog_subjects_title)}}">
                                        {{ Carbon\Carbon::parse($row->blog_subjects_start)->format('d/m/Y') }}
                                    </td>
                                    <td  id="td" href="{{URL('/blog_subjects/'.$row->blog_subjects_id.'/history?blog_subjects_title='.$row->blog_subjects_title)}}">
                                        {{ Carbon\Carbon::parse($row->blog_subjects_end)->format('d/m/Y') }}
                                    </td>
                                    <td   id="td" href="{{URL('/blog_subjects/'.$row->blog_subjects_id.'/history?blog_subjects_title='.$row->blog_subjects_title)}}">
                                        <center>

                                            <div style="background-color: {{$row->blog_subjects_color}}" class="p-2">  </div>

                                        
                                        
                                    </td>
                                    <td>

                                      

                                   
                                    <center> <button type="button" class="btn btn-success btn-sm" id="edit-modal"
                                        data-id="{{$row->blog_subjects_id  }}">แก้ไขข้อมูล</button> 

                                        <a type="button" class="btn btn-danger btn-sm" style="color:white"
                                        href="{{URL('blog_subjects/'.$row->blog_subjects_id.'/destroy')}}"
                                        onclick="return confirm('คุณต้องการลบรายการ ? {{$row->blog_subjects_title }}')">ลบ</a>
                                    </center>
                                   
                                        
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
<div class="modal fade" id="blog_subjectsModal" tabindex="-1" role="dialog" aria-labelledby="blog_subjectsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="blog_subjectsModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form role="form" method="POST" action="blog_subjects/store" id="form_blog_subjects">
                    @csrf


                    <div class="form-group{{ $errors->has('type_items_name') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email">หัวเรื่อง..</label>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-bullet-list-67"></i></span>
                            </div>

                            <textarea name="blog_subjects_title" id="blog_subjects_title" " rows="3" class="form-control "></textarea>
                            
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('blog_subjects_start') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email">วันเริ่มต้นกรอกข้อมูล</label>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-bullet-list-67"></i></span>
                            </div>

                            <input class="form-control " data-provide="datepicker"
                                value="{{substr(Carbon\Carbon::now()->format('d-m-Y'),0,10)}}" id="blog_subjects_start"
                                onchange="myFunction()" name="blog_subjects_start" data-date-language="th-th"
                                data-date-start-date="0d" data-date-end-date="" data-date-format="dd-mm-yyyy" required>


                        </div>
                    </div>


         

                    
                    <div class="form-group{{ $errors->has('blog_subjects_end') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email">กำหนดวันสิ้นสุดการกรอกข้อมูล</label>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-bullet-list-67"></i></span>
                            </div>

                            <input class="form-control " data-provide="datepicker"
                                value="{{substr(Carbon\Carbon::now()->format('d-m-Y'),0,10)}}" id="blog_subjects_end"
                                onchange="myFunction()" name="blog_subjects_end" data-date-language="th-th"
                                data-date-start-date="0d" data-date-end-date="" data-date-format="dd-mm-yyyy" required>


                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('blog_subjects_end') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email">สี</label>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-bullet-list-67"></i></span>
                            </div>

                            <input class="form-control"  name="blog_subjects_color" id="blog_subjects_color"  type="color" required>

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

        window.setTimeout(function () {
            $(".alert").fadeTo(500, 0).slideUp(500, function () {
                $(this).remove();
            });
        }, 2000);



    });


    $(document).ready(function(){
    $('table tr #td').click(function(){
        window.location = $(this).attr('href');
        return false;
    });
});

</script>


<script>
    $(document).ready(function () {

        var table =        $('#myTable').DataTable({
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
    


        //  เรียงลำดับตังเลข
        table.on('order.dt search.dt', function () {
            table.column(0, {
                search: 'applied',
                order: 'applied'
            }).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1;
            });



        }).draw();

    });




    $('body').on('click', '#Addblog_subjects', function () {

        $('#blog_subjectsModalLabel').text('กำหนดช่วงเวลาในการกรอกข้อมูล');
        $('#blog_subjects_color').val('');
        $('#blog_subjects_title').val('');
        // $('#goals_start').val({{substr(Carbon\Carbon::now()->format('d-m-Y'),0,10)}});
        // $('#goals_end').val({{substr(Carbon\Carbon::now()->format('d-m-Y'),0,10)}});
        $('#blog_subjectsModal').modal('show');

    });

    $('body').on('click', '#edit-modal', function () {

        var id = $(this).data('id');

        $.get('blog_subjects/' + id + '/edit', function (data) {

            $('#blog_subjectsModal').modal('show');
           
            let  blog_subjects_start = new Date(data.blog_subjects_start)
            let  blog_subjects_end = new Date(data.blog_subjects_end)
            
            $('#blog_subjects_title').val(data.blog_subjects_title);
            $('#blog_subjects_color').val(data.blog_subjects_color);

        
            
            $('#blog_subjects_start').val(blog_subjects_start.getDate() + '-' +blog_subjects_start.getMonth()+'-'+ +blog_subjects_start.getFullYear());
            $('#blog_subjects_end').val(blog_subjects_end.getDate() + '-' +blog_subjects_end.getMonth()+'-'+ +blog_subjects_end.getFullYear());


            document.getElementById("form_blog_subjects").action = 'blog_subjects/' + id +
                '/update';
            document.getElementById("form_blog_subjects").method = "post";
        })
    });

</script>


@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
