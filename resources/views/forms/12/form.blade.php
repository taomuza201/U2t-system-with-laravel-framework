@extends('layouts.template', ['title' => __('ความรู้ที่จำเป็นในการถ่ายทอดเทคโนโลยีที่สอดคล้องกับธรรมชาติการเรียนรู้
ศักยภาพ และความต้องการของชุมชน')])

@section('content')
@include('goals.goals_1s.header', [
'title' => __('ความรู้ที่จำเป็นในการถ่ายทอดเทคโนโลยีที่สอดคล้องกับธรรมชาติการเรียนรู้ ศักยภาพ และความต้องการของชุมชน') ,
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



    <form action="{{route('form12.store')}}" method="post" enctype="multipart/form-data">
        @csrf


        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <section id="part-1">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <p class="text-red">คำชี้แจง :
                                        ให้ทำการสอบถามข้อมูลความต้องการของชุมชน/สิ่งที่ต้องการพัฒนาภายในชุมชนจากผู้ที่เกี่ยวข้อง
                                        จากนั้นทำการค้นหาความรู้ที่จำเป็นในการถ่ายทอดเทคโนโลยีที่สอดคล้องกับธรรมชาติการเรียนรู้
                                        ศักยภาพ และความต้องการของชุมชน
                                        และศึกษาสื่อ/เครื่องมือในกระบวนการจัดการเรียนรู้ที่เหมาะสม
                                    </p>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-6">
                                    <label class="label_float"> ความต้องการของชุมชน : </label>
                                    <div class="form-group">
                                        <textarea class="form-control" name="form12s_definition" id="form12s_definition"
                                            rows="3" required autofocus placeholder="ตัวอย่าง เช่น ต้องการพัฒนาในด้านการตลาด"></textarea>
                                    </div>
                                </div>

                                <div class="col-12  col-md-6">
                                    <label class="label_float"> อ้างอิงจาก : </label>
                                    <div class="form-group">
                                        <textarea class="form-control" name="form12s_refer" id="form12s_refer" rows="3"
                                            required autofocus placeholder="เว็บไซต์ที่เกี่ยวข้องหรือชื่อหนังสือ"></textarea>
                                    </div>
                                </div>

                            </div>


                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> รายละเอียด : </label>
                                    <div class="form-group">
                                        <textarea class="form-control" name="form12s_details" id="form12s_details"
                                            rows="3" required autofocus placeholder="รายละเอียดเรื่องที่ได้ทำการศึกษา"></textarea>
                                    </div>
                                </div>

                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> สื่อ/เครื่องมือในการจัดการเรียนรู้ : </label>
                                    <div class="form-group">
                                        <textarea class="form-control" name="form12s_learning_tools"
                                            id="form12s_learning_tools" rows="3" required autofocus placeholder="สื่อการเรียนรู้ เช่น สื่อประกอบการเรียนรู้ เผาดิน แบบธรรมชาติ"></textarea>
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
        selector: '#form12s_details,#form12s_learning_tools',
        language: 'th_TH',
        content_css: "{{asset('argon/css/tinymce.css')}}",

        image_class_list: [{
            title: 'img-responsive',
            value: 'img-responsive'
        }, ],
        height: 500,
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
