@extends('layout.adminlayout')
@section('header')
<table class="table table-hover">
    <th>
        <a href="{{route('agenda.index')}}" class="btn btn-primary btn-lg" type="button">วาระการประชุม </a>
    </th>
</table>
<br>
@endsection

@section('content')
<div class="container ">
    <form method="post" action="{{ url('agenda') }}">
        {{ csrf_field() }}
        <div class="form-group col-md-4">
            <label for="date" class="text-info">ชื่อวาระประชุม</label><br>
            <input type="text" name="MA_agenda" id="MA_agenda" class="form-control">
        </div>

        <div class="form-group  col-md-12">
            <label for="details" class="text-info">รายละเอียด</label><br>
            <textarea class="form-control" name="MA_details" id="exampleFormControlTextarea1" rows="15"></textarea>
        </div>

        <div class=" text-center">
            <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-inbox"></i>เพิ่มข้อมูล</button>
            <button type="button" class="btn btn-danger btn-lg">ยกเลิก</button>
        </div>
    </form>
</div>

@endsection