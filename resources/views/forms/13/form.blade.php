@extends('layouts.template', ['title' => __('กระบวนการการแลกเปลี่ยนเรียนรู้ในชุมชน')])

@section('content')
@include('goals.goals_1s.header', [
'title' => __('กระบวนการการแลกเปลี่ยนเรียนรู้ในชุมชน') ,
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



    <form action="{{route('form13.store')}}" method="post" enctype="multipart/form-data">
        @csrf


        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <section id="part-1">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <p class="text-red">คำชี้แจง : เป็นกิจกรรมเพื่อพัฒนาให้เกิดศูนย์กลางและกระบวนการ การแลกเปลี่ยนเรียนรู้ในชุมชน  โดยทีมงานเป็นแกนนำหลักในการจัดกิจกรรม สามารถใช้ช่องทางออนไลน์หรือสื่อออนไลน์ในการจัดกิจกรรมได้
                                    </p>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> ชื่อเรื่อง : </label>
                                    <input type="text" class="form-control" id="form13s_title"
                                        name="form13s_title" required autofocus placeholder="ตัวอย่าง เช่น ข้อมูลของศูนย์เรียนรู้ภายในชุมชน">
                                </div>

                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float">ผู้ที่เกี่ยวข้อง / ผู้ให้ความคิดเห็น : </label>
                                    <textarea class="form-control" id="form13s_commentator"
                                        name="form13s_commentator" required autofocus rows="5" placeholder="ตัวอย่าง เช่น อปท., กลุ่มเป้าหมาย/วิสาหกิจ หรือผู้ที่สามารถให้ความรู้ที่เกี่ยวข้องได้"></textarea>
                                </div>
                             
                            </div>

                            <div class="row align-items-center">
                                <div class="col-12  col-md-12">
                                    <label class="label_float"> รายละเอียด : </label>
                                   <div class="form-group">
                                       <textarea class="form-control" name="form13s_details" id="form13s_details" rows="3" required autofocus placeholder="รายละเอียดข้อมูลของศูนย์เรียนรู้ภายในชุมชน"></textarea>
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
        selector: '#form13s_details',
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
