@extends('layouts.template', ['title' => __('ไดอารี่')])

@section('content')
@include('blog.blog_details.read.header', [
'title' => __('') ,
])


<style>
    .dataTables_filter {
        display: none;
    }

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

    .vertical-center {
        display: flex;
        justify-content: center;
        align-items: center;

        word-wrap: break-word;
    }
    
   p img {
    display: block;
        border: 0;
        width: 75%;
        height: auto;
     
    }
    img {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

</style>

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="row">
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
                </div>
            </div>
            <div class="card shadow">



                <div class="col-12 mb-4">


                    <div class="row p-3 align-middle ">
                        <button type="button" class="btn btn-primary btn-lg btn-block"
                            onclick="window.location='{{URL('/blog_details/write/'.$id)}}'">เพิ่ม ไดอารี่</button>
                    </div>

                    @php
                    $number = 1;
                    @endphp
                    @foreach ($blog_detail as $row)
                    {{-- <div class="row p-3 align-middle ">
                            <div class="col-12 btn  btn-lg vertical-center"  > 
                              
                            </div>
                        </div> --}}

                    <div class="card mt-3">
                        <div class="card-body">
                            <h5 class="card-title">เรื่องที่ {{$number}} : {{$row->blog_details_title}} | ลงข้อมูล ณ วันที่ {{ Carbon\Carbon::parse($row->created_at)->format('d/m/Y') }} </h5>
                            <hr>
                            {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}
                            <div class="card-text">
                                {!!$row->blog_details_body!!}

                            </div>

                        </div>
                        <ul class="list-group list-group-flush"> 
                            <li class="list-group-item text-right">
                                <button type="button" class="btn btn-success btn-sm"  onclick="window.location='{{URL('/blog_details/'.$row->blog_details_id.'/edit')}}'">แก้ไข</button>
                                <a type="button" class="btn btn-danger btn-sm" style="color:white"
                                        href="{{URL('blog_details/'.$row->blog_details_id .'/destroy')}}"
                                        onclick="return confirm('คุณต้องการลบรายการ ? {{$row->blog_details_title  }}')">ลบ</a>

                            </li>

                        </ul>
                    </div>
                    @php
                    $number ++;
                    @endphp
                    @endforeach

                    @php
                        
                    @endphp

                    @if ($blog_detail ==  '[]')
                     <div>
                       <center>   <h1 style="color: red">ยังไม่มีข้อมูล !!!</h1> </center>
                     </div>
                    @endif







                </div>


            </div>
        </div>
    </div>

    @include('layouts.footers.auth')
</div>





<script>
    $(document).ready(function () {
        $('img').removeAttr('style');
        window.setTimeout(function () {
            $(".alert").fadeTo(500, 0).slideUp(500, function () {
                $(this).remove();
            });
        }, 2000);



    });


</script>

@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
