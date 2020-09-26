@extends('layout.homelayout')
@section('header')
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor mb-0 mt-0">บันทึกข้อคิดเห็น</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">หน้าหลัก</a></li>
            <li class="breadcrumb-item ">บันทึกข้อคิดเห็น</li>
        </ol>
    </div>
</div>
<table class="table table-hover">
    <th>
        <a href="{{route('comments.index')}}" class="btn btn-primary btn-lg" type="button">ความคิดเห็นที่บันทึก </a>
    </th>
</table>
<br>
@endsection


@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-body">
                <form action="{{action('CommentsController@update',$comments->id)}}" method="post">
                    {{csrf_field()}}
                    {{ method_field('PATCH')}}

                    <div class="form-group col-md-4">
                        <label for="Meet_id" class="text-info">รหัสการประชุม</label><br>
                        <input type="text" name="Meet_id" id="Meet_id" class="form-control" required="" value="{{$comments->Meet_id}}">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="OF_id" class="text-info">รหัสบุคลากร</label><br>
                        <input type="text" name="OF_id" id="OF_id" class="form-control" required="" value="{{$comments->OF_id}}">
                    </div> 

                    <div class="form-group  col-md-12">
                        <label class="text-info">ความคิดเห็น</label><br>
                        <textarea class="form-control" name="C_meet" id="message" rows="14" >{{$comments->C_meet}}</textarea>
                    </div>
                
                    <div class=" text-center">
                        <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-inbox"></i>แก้ไขข้อมูล</button>
                        <button type="button" class="btn btn-danger btn-lg">ยกเลิก</button>
                    </div>
            
            <input type="hidden" name="_method" value="PATCH">
            </form>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection