@extends('layout.homelayout')
@section('header')
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor mb-0 mt-0">บันทึกข้อคิดเห็น</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="home">หน้าหลัก</a></li>
            <li class="breadcrumb-item ">บันทึกข้อคิดเห็น</li>
        </ol>
    </div>
    <div class="col-md-5 col-3 align-self-center">
        <button class="btn float-right hidden-sm-down btn-success">ความคิดเห็นที่บันทึก</button>
    </div>

</div>
@endsection


@section('content')
<!--js Ckeditor comment-->
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

<div>
    <form>
        <textarea name="editor" ></textarea><br>
        <div class=" text-center">
            <button class="btn float-center hidden-sm-down btn-primary">บันทึก</button>
            <button class="btn float-center hidden-sm-down btn-danger">ยกเลิก</button>
        </div>
    </form>
    <script>
        CKEDITOR.replace('editor');
        $("form").submit(function(e) {
            var messageLength = CKEDITOR.instances['editor'].getData().replace(/<[^>]*>/gi, '').length;
            if (!messageLength) {
                alert('Please enter a message');
                e.preventDefault();
            }
        });
    </script>
</div>
@endsection