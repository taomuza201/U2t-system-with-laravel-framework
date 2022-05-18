@extends('layouts.template', ['title' => __('ไดอารี่')])

@section('content')
@include('blog.blog_details.write.header', [
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

    p img {
        display: block;
        border: 0;
        width: 200px;
    }

    .img-responsive {
        width: 100%;
        height: auto;
    }

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
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


                    <form action="{{ route('blog_details.store')}}" method="post" id="submitform" class="mt-4"
                        enctype="multipart/form-data">
                        <span>ชื่อเรื่อง </span>
                        <input class="form-control" type="text" name="blog_details_title" id="blog_details_title"
                            required>
                        <span>รายละเอียด </span>
                        <textarea name="blog_details_body" id="blog_details_body" required></textarea>

                        <input type="hidden" name="blog_details_blog_subjects_id" id="blog_details_blog_subjects_id"
                            value="{{$id}}">
                        <center><button type="submit" class="btn btn-success m-4">บันทึกข้อมูล</button> </center>
                        @csrf

                    </form>



                </div>


            </div>
        </div>
    </div>

    @include('layouts.footers.auth')
</div>



<script src="https://cdn.tiny.cloud/1/96knb3qrcnx6302vv67otnbrjsnch2xswg86g1d3flc4bhyb/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#blog_details_body',
        language: 'th_TH',
        content_css: "{{asset('argon/css/tinymce.css')}}",

        image_class_list: [{
            title: 'img-responsive',
            value: 'img-responsive'
        }, ],
        height: 700,
        setup: function (editor) {
            editor.on('init change', function () {
                editor.save();
            });
        },
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste imagetools"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | fullscreen",

        image_title: true,
        automatic_uploads: true,
        images_upload_url: "{{route('upload_tiny')}}",
        file_picker_types: 'image',
        file_picker_callback: function (cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');
            input.onchange = function () {
                var file = this.files[0];

                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function () {
                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);
                    cb(blobInfo.blobUri(), {
                        title: file.name
                    });
                };
            };
            input.click();
        }
    });

</script>



<script>
    $(document).ready(function () {


        $('img').removeAttr('style');

        $('body').on('sumbit', '#submitform', function (e) {
            e.preventDefault();
            // var input = this.getInputElement();
            //             input.$.accept = 'image/*';
            // $('img').removeAttr('style');
            $.ajax({
                url: $(this).attr('action'),
                type: "POST",
                data: new FormData(this),
                success: function (data) {

                },
            });
        })




    });

</script>

@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
