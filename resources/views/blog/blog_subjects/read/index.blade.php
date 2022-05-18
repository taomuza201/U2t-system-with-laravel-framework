@extends('layouts.template', ['title' => __('ไดอารี่')])

@section('content')
@include('blog.blog_subjects.read.header', [
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
        /* text-justify:auto;
         */
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



                @php
                $number_count = count($blog_detail);
                @endphp

                @foreach ($blog_detail as $row)


                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">เรื่องที่ {{ $number_count -$loop->index }} :
                            {{$row->blog_details_title}} | ลงข้อมูล ณ วันที่
                            {{ Carbon\Carbon::parse($row->created_at)->format('d/m/Y') }} </h5>
                        <hr>

                        <div class="card-text">

                            @php

                            $details = str_replace("../upload_blog", "../../upload_blog", $row->blog_details_body);
                            $details = str_replace("../images", "../../images", $details);
                            @endphp
                            {!!$details!!}

                        </div>

                    </div>

                    <center> <button class="btn  btn-info mb-3" data-blog_details_id="{{$row->blog_details_id}}"
                            id="copy">คัดลอกข้อมูล</button></center>
                </div>


                @endforeach

                @php

                @endphp

                @if ($blog_detail == '[]')
                <div>
                    <center>
                        <h1 style="color: red">ยังไม่มีข้อมูล !!!</h1>
                    </center>
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

        window.setTimeout(function () {
            $(".alert").fadeTo(500, 0).slideUp(500, function () {
                $(this).remove();
            });
        }, 2000);



    });

    $('#copy').click(function () {

        let id = $(this).data('blog_details_id');

        $.ajax({

            url: "{{url('/blog_details/copy')}}" + '/' + id,
            success: function (response) {
                alert('คัดลอกข้อมูลสำเร็จ');
            }
        });
    });

    $(document).ready(function () {

        $('img').removeAttr('style');




    });

</script>

@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
