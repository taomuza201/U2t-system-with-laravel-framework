@extends('layouts.template', ['title' => __('ไดอารี่')])

@section('content')
@include('blog.blog_details.header', [
'title' => __('ไดอารี่ ') ,
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
.span{
word-wrap: break-word;
white-space: initial;
}
</style>

<div class="container-fluid mt--7">
    <div class="row">
        <div class="col">
            <div class="card shadow">
               
                    
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


                        @foreach ($blog_subjects as $row)
                        <div class="row p-3 align-middle ">
                            <div class="col-12 btn  btn-lg vertical-center span" 
                                onclick="window.location='{{URL('/blog_details/subject/'.$row->blog_subjects_id)}}'"
                                style=" height: 100px;text-align: center;background-color: {{$row->blog_subjects_color}}; color:#fff;" > 
                            <span class="span">    {{$row->blog_subjects_title}}</span>
                            </div>
                        </div>
                        @endforeach

                     


                        


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


    $(document).ready(function () {






    });

</script>

@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
