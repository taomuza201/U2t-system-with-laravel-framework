@extends('layouts.template', ['title' => __('แนวทางการพัฒนาอาชีพใหม่ ในกรอบการพัฒนานาของประเทศ และนานาชาติ')])

@section('content')
@include('goals.goals_1s.header', [
'title' => __('แนวทางการพัฒนาอาชีพใหม่ ในกรอบการพัฒนานาของประเทศ และนานาชาติ') ,
])


<style>
    .dataTables_filter {
        display: none;
    }

    .label_float {
        margin-top: 10px;
        /* float: left; */
    }

    span {
        display: block;
        overflow: hidden;
        padding: 0px 4px 0px 6px;
    }

    .border_top {
        border-top-style: solid;
    }

    .border_bottom {
        border-bottom-style: solid;
    }

    input[type=number] {
        text-align: right;
    }

</style>
<div class="container-fluid mt--7">



    <form action="{{route('form11.store')}}" method="post" enctype="multipart/form-data">
        @csrf


        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <section id="part-1">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <p class="text-red">คำชี้แจง : ให้ทำการศึกษาเรียนรู้แนวทางการพัฒนาอาชีพใหม่ในกรอบการพัฒนานาของประเทศ และนานาชาติ ซึ่งต้องสอดคล้องกับข้อมูลของตำบลตนเอง
                                    </p>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> ชื่อเรื่อง : </label>
                                    <input type="text" class="form-control" id="form11s_title"
                                        name="form11s_title" required autofocus>
                                </div>

                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> แหล่งอ้างอิง : </label>
                                    <textarea class="form-control" id="form11s_refer"
                                        name="form11s_refer" required autofocus rows="5" placeholder="เว็บไซต์ที่เกี่ยวข้องหรือหนังสือที่เกี่ยวข้อง"></textarea>
                                </div>
                             
                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> รายละเอียด : </label>
                                   <div class="form-group">
                                       <textarea class="form-control" name="form11s_details" id="form11s_details" rows="3" required autofocus placeholder="แนวทางการพัฒนาอาชีพใหม่"></textarea>
                                   </div>
                                </div>
                               
                            </div>




                        </section>



                        <center> <button type="submit" class="btn btn-primary mt-4"
                                onclick="return confirm('กรุณาตรวจสอบความถูกต้องของข้อมูลก่อนกดยืนยัน ?')">บันทึกข้อมูล</button>
                        </center>
                    </div>

                </div>

            </div>

        </div>





    </form>





    @include('layouts.footers.auth')
</div>



<script src="https://cdn.tiny.cloud/1/96knb3qrcnx6302vv67otnbrjsnch2xswg86g1d3flc4bhyb/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#form11s_details',
        language: 'th_TH',
        content_css: "{{asset('argon/css/tinymce.css')}}",

        image_class_list: [{
            title: 'img-responsive',
            value: 'img-responsive'
        }, ],
        height: 900,
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
        images_upload_url: "{{route('upload')}}",
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





@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
