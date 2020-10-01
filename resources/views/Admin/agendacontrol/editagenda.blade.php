@extends('layout.adminlayout')
@section('header')
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h4 class="text-themecolor mb-0 mt-0">รายชื่อวาระการประชุม</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">หน้าหลัก</a></li>
            <li class="breadcrumb-item active">รายชื่อวาระการประชุม</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-body">
                <form action="{{action('AgendasController@update',$meeting_agendas->id)}}" method="post">
                    {{csrf_field()}}
                    {{ method_field('PATCH')}}
                    <div class="form-group ">
                        <label class="text-info">ชื่อวาระประชุม</label>
                        <input type="text" name="MA_agenda" class="form-control col-md-4" required="" value="{{$meeting_agendas->MA_agenda}}">
                    </div>
                    <div class="form-group  col-md-12">
                        <label class="text-info">รายละเอียด</label><br>
                        <textarea class="form-control" name="MA_details" id="message" rows="15" >{{$meeting_agendas->MA_details}}</textarea>
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

@endsection