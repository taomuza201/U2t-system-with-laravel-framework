{{-- @extends('layouts.app')

@section('content')
@include('layouts.headers.cards')

 --}}


@extends('layouts.app', ['title' => __('Todo List')])

@section('content')
    @include('todolist.header_todolists', [
        'title' => __('ToDo Lists') ,  
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
                        <div class="col-8  col-md-6">
                            <h3 class="mb-0">Todo Lists</h3>
                        </div>
                        <div class="col-4 text-right col-md-6">
                            <a href="" class="btn btn-sm btn-primary" data-toggle="modal" id="addtodolistModal"
                                data-target="#todolistModal">Add Todo Lists</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 p-5">


                    <div class="row">
                        <div class="col-8 col-md-8">
                            <button type="button" class="btn btn-primary btn-sm" onclick="select_status(this)"  data-status="all">
                                ทั้งหมด <span class="badge badge-light">{{$count_todolist[0]}}</span>
                            </button>
                            <button type="button" class="btn  btn-sm btn-danger" onclick="select_status(this)"  data-status="notcompleted">
                                งานยังไม่เสร็จแล้วทั้งหมด <span class="badge badge-light">
                                    {{$count_todolist[6]}} 
                            </button>
                            <button type="button" class="btn btn-success btn-sm" onclick="select_status(this)"  data-status="completed">
                                งานเสร็จแล้วทั้งหมด <span class="badge badge-light">{{$count_todolist[1]}}</span>
                            </button>
  
                            @if (auth::user()->position == 'professor' || auth::user()->position == 'admin' || auth::user()->position_orther == 'admin')
                                
                            <button type="button" class="btn btn-warning btn-sm" onclick="select_status(this)"  data-status="assign">
                                งานที่หมอบหมาย <span class="badge badge-light">{{$count_todolist[2]}}</span>
                            </button>
                            <button type="button" class="btn btn-info btn-sm" onclick="select_status(this)"   data-status="assigncompleted">
                                งานที่หมอบหมายเสร็จแล้ว <span class="badge badge-light">{{$count_todolist[3]}}</span>
                            </button>


                            @endif

                            @if(auth::user()->position == 'operator' || auth::user()->position_orther == 'admin')
                            <button type="button" class="btn btn-warning btn-sm" onclick="select_status(this)"  data-status="my">
                                งานของฉัน <span class="badge badge-light">{{$count_todolist[4]}}</span>
                            </button>
                            <button type="button" class="btn btn-info btn-sm" onclick="select_status(this)"   data-status="mycompleted">
                                งานเสร็จแล้วของฉัน <span class="badge badge-light">{{$count_todolist[5]}}</span>
                            </button>

                            @endif
                        </div>
                        <div class="col-12  col-md-4 " >
                         <input type="text" class="form-control" placeholder="ค้นหา Todo Lists" id="search">
                        </div>
                    </div>
                    <hr>


                    <div id="todolist">
                        {{-- @include('todolist.todolists') --}}
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('layouts.footers.auth')
</div>


<!-- Modal -->
<div class="modal fade" id="todolistModal" tabindex="-1" role="dialog" aria-labelledby="todolistModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="todolistModalLabel">เพิ่มข้อมูล Todo Lists </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form role="form" method="POST" action="todolist/store" id="form_todolist"  enctype="multipart/form-data">
                    @csrf

                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email">{{ __('หัวเรื่อง') }}</label>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-bullet-list-67"></i></span>
                            </div>
                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                placeholder="{{ __('หัวข้อ') }}" type="text" name="todolists_title" id="todolists_title"
                                value="{{ old('todolists_title') }}" required autofocus>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('todolists_detail') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email">{{ __('รายละเอียด') }}</label>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-bullet-list-67"></i></span>
                            </div>

                            <textarea style="align-content:left;" name="todolists_detail" id="todolists_detail" required
                                autofocus rows="5"
                                class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"></textarea>

                        </div>
                    </div>

                    @if (auth::user()->position == 'admin' || auth::user()->position == 'professor' || auth::user()->position_orther == 'admin'  )

                    <div class="form-group{{ $errors->has('todolists_assign ') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email">{{ __('หมอบหมายงานให้') }}</label>
                        <div class="input-group input-group-alternative mb-3">
                            {{-- <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                            </div> --}}


                            <select  class="form-control" multiple  data-placeholder="เลือกผู้รับผิดชอบงาน..."
                                name="todolists_assign[]" id="todolists_assign" required autofocus style="font-size:20px;">
                                
                                @foreach ($user as $row)
                                <option value="{{$row->id}}">{{$row->fname}} {{$row->lname}} </option>
                                @endforeach
                            </select>

                        </div>
                    </div>


                    @endif


                    <div class="form-group{{ $errors->has('todolists_assign ') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email">{{ __('กำหนดวันส่งงาน') }}</label>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                            </div>



                            <input class="form-control " data-provide="datepicker"
                                value="{{substr(Carbon\Carbon::now()->format('d-m-Y'),0,10)}}" name="todolists_deadline"
                                data-date-language="th-th" id="todolists_deadline" data-date-start-date="0d"
                                data-date-end-date="" data-date-format="dd-mm-yyyy" required>

                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('todolists_assign ') ? ' has-danger' : '' }}">
                        <label class="form-control-label" for="input-email"  id="file_title">แนบเอกสาร</label>
                        <div class="input-group input-group-alternative mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-folder-17"></i></span>
                            </div>


                                <input type="file" multiple  class="form-control "name="file[]" id="file" onchange="javascript:updateList()" accept="image/*,.pdf,.doc,.docx,.xlsx" />
                                

                        </div>
                                <p>ไฟล์เอกสาร:</p>
                                <div id="fileList"></div>
                    </div>
            </div>
            <div class="modal-footer">
         
                   <a type="button" class="btn btn-danger"  onclick="return confirm('คุณต้องการลบ ?') " style="color: white" id="delete" href="">ลบ</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
            </div>
        </div>
    </div>
</div>


</form>





    <div class="modal fade" id="modal-showdatatodolist" tabindex="-1" role="dialog" aria-labelledby="modal-showdatatodolist" aria-hidden="true">
      <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
          <div class="modal-content">
              
              <div class="modal-header">
                  <h5 class="modal-title">ส่งงาน :&nbsp; </h5>
                  <h5 class="modal-title" id="modal-title-default"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
              </div>
              
              <div class="modal-body">
                  
                <p>รายละเอียด :</p>
                <p id="showdatatodolist_text"></p>
                <hr>
                <p>ไฟล์เอกสาร :</p>
                <div id="showdatatodolist_file_list"></div>

                <hr>

                <form role="form" method="post" action="todolist/success" id="form_uploadtodolist"  enctype="multipart/form-data">
                    @csrf

             
                <div id="setshowupload" >
                    <p>อัพโหลดไฟล์งาน :</p>
                    <div id="showdatatodolist_file"></div>

                    <div class="form-group{{ $errors->has('todolists_assign ') ? ' has-danger' : '' }}">
                        <div class="input-group input-group-alternative mb-3">
                            <div   div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-folder-17"></i></span>
                            </div>


                                <input type="file" multiple  class="form-control "name="fileupload[]" id="inputuploadfile" onchange="javascript:uploadfileListFN()" accept="image/*,.pdf,.doc,.docx,.xlsx" />
                            

                        </div>
                                <div id="uploadfileList"></div>
                    </div>
              </div>

              <div id="setsuccess" >
                <p>เอกสารที่ส่ง :</p>
                <div id="uploadfileListsuccess"></div>
              </div>
              
            </div>
              <div class="modal-footer">

                <input type="hidden"  id="uploadid" name="uploadid" value="">
                  <div  id="setbtnshowupload">
                    <button type="submit" class="btn btn-primary">ส่งงาน</button>
                  </div>
                </form>
                  <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">ยกเลิก</button>
              </div>
            </div>   
        </div> 
    </div>
    








<script>

showdataTodolist = function(tododata) {
    
    $('#modal-showdatatodolist').modal('show');

    let id = $(tododata).data('id');

    $('#uploadid').val(id);

    

$.get('todolist/' + id + '/edit', function (data) {
 


    $('#modal-title-default').text(data.todolists_title);
    $('#showdatatodolist_text').text(data.todolists_detail);



$.get('todolist/' + id + '/todolists_assigns', function (assigns) {

  

    if( ( assigns.todolists_assigns_at  == {{auth()->user()->id }}  ||  data.todolists_madeby   == {{auth()->user()->id}} ) &&  data.todolists_status == 0  ){
        $('#setshowupload').show();
        $('#setbtnshowupload').show();

        // $('#setsuccess').hide();
    }

})

    if(data.todolists_status == 1){
        
        $('#setsuccess').show();
    }else{
        $('#setsuccess').hide();
    }



})


$.get('todolist/' + id + '/get_todolist_files/', function (data) {

    var output = document.getElementById('showdatatodolist_file_list');

    var children = "";
    for (var i = 0; i < data.length; ++i) {
        children += '<li>     <a href="{{URL('uploads_file')}}/'+data[i].todolist_files_path+'" download>' + data[i].todolist_files_title + '</a> </li>';
    }

    if(children==''){
        output.innerHTML = '<ul>ไม่มีเอกสาร</ul>';
    }else
    {
    output.innerHTML = '<ul>'+children+'</ul>';
    }

})



$.get('todolist/' + id + '/get_todolist_files_success/', function (data) {

    var output = document.getElementById('uploadfileListsuccess');

    var children = "";
    for (var i = 0; i < data.length; ++i) {
        children += '<li>     <a href="{{URL('uploads_file')}}/'+data[i].todolist_files_path+'" download>' + data[i].todolist_files_title + '</a> </li>';
    }

    if(children==''){
        output.innerHTML = '<ul>ไม่มีเอกสาร</ul>';
    }else
    {
    output.innerHTML = '<ul>'+children+'</ul>';
    }

})









  
}

uploadfileListFN = function() {
    var input = document.getElementById('inputuploadfile');
    var output = document.getElementById('uploadfileList');
    var children = "";
    for (var i = 0; i < input.files.length; ++i) {
        children += '<li>' + input.files.item(i).name + '</li>';
    }
    output.innerHTML = '<ul>'+children+'</ul>';
}






updateList = function() {
    var input = document.getElementById('file');
    var output = document.getElementById('fileList');
    var children = "";
    for (var i = 0; i < input.files.length; ++i) {
        children += '<li>' + input.files.item(i).name + '</li>';
    }
    output.innerHTML = '<ul>'+children+'</ul>';
}

    $(document).ready(function () {


      
       


        $(document).on('hide.bs.modal','#modal-showdatatodolist', function () {
            $('#setshowupload').hide();
            $('#setbtnshowupload').hide();
            $('#setsuccess').hide();
            $('#setshowupload').hide();

            });




        $('#setshowupload').hide();
        $('#setbtnshowupload').hide();


        
        $.ajax({
                url: "todolist/fetch_todolist?status=all",
                success: function (data) {

                    $('#todolist').html('');
                    $('#todolist').html(data);
                }
            })


        window.setTimeout(function () {
        $(".alert").fadeTo(500, 0).slideUp(500, function () {
            $(this).remove();
        });
    }, 2000);




    });


    function select_status(data) {

        let status = $(data).data('status');
    
        
        $.ajax({
                url: "todolist/fetch_todolist?status=" + status,
                success: function (data) {

                    $('#todolist').html('');
                    $('#todolist').html(data);
                }
            })

    }




    $('body').on('click', '#edit-modal', function () {

     
        
        $("#todolists_assign",this).chosen({no_results_text: "Oops, nothing found!"}); 
        $("#todolists_assign").chosen({width: "inherit"}) 


        $("#todolists_assign").removeAttr("required");

        let id = $(this).data('id');

        $("#delete").show();
        $("#delete").attr("href", "{{URL('todolist')}}/"+id+"/destroy/");

        $.get('todolist/' + id + '/edit', function (data) {


            $('#todolistModalLabel').text('แก้ไขข้อมูล Todo List');
            $('#todolistModal').modal('show');
            
            $('#todolists_title').val(data.todolists_title);
            $('#todolists_detail').val(data.todolists_detail);

            
            // $('#todolists_assign').val(10);
            // $('#todolists_assign').trigger("liszt:updated");
            
            let  todolists_deadline =  data.todolists_deadline;
            
   
            $('#todolists_deadline').val(todolists_deadline);


        })

        var children = "";
        $.get('todolist/' + id + '/get_todolist_files', function (data) {

            var output = document.getElementById('fileList');

            var children = "";
            for (var i = 0; i < data.length; ++i) {
                children += '<li>     <a href="{{URL('uploads_file')}}/'+data[i].todolist_files_path+'" download>' + data[i].todolist_files_title + '</a> </li>';
            }
            output.innerHTML = '<ul>'+children+'</ul>';


        })


            document.getElementById("form_todolist").action = 'todolist/' + id +
                '/update';
            document.getElementById("form_todolist").method = "post";


    });

    


    $('body').on('click', '#addtodolistModal', function () {

        $("#delete").hide();
        $("#delete").attr("href", "");
        $('#todolists_assign').prop('required', true);

        $("#todolists_assign",this).chosen({no_results_text: "Oops, nothing found!"}); 
        $("#todolists_assign").chosen({width: "inherit"}) 

        document.getElementById("form_todolist").action = 'todolist/store';
        document.getElementById("form_todolist").method = "post";

        $('#todolistModalLabel').text('เพิ่มข้อมูล Todo Lists');
        $('#todolistModal').modal('show');
        $('#todolists_title').val('');
        $('#todolists_detail').val('');
        $('#todolists_assign').val('');
        $('#todolists_deadline').val('{{substr(Carbon\Carbon::now()->format('d-m-Y'),0,10)}}');

      

    });

    $(document).on('keyup', '#search', function () {
            var search = $('#search').val();

          
            $.ajax({
                url: "todolist/search?search=" + search,
                success: function (data) {
                    $('#todolist').html('');
                    $('#todolist').html(data);
                }
            })
        });

</script>


@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
