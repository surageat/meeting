@extends('layout.adminlayout')
@section('header')
<table class="table table-hover">
    <th>
        <a href="{{route('room.index')}}" class="btn btn-primary btn-lg" type="button">ห้องประชุม </a>
    </th>
</table>
<br>
@endsection

@section('content')
@include('sweetalert::alert')
<div class="container ">
    <form method="post" action="{{ url('room') }}">
        {{ csrf_field() }}
        <div class="form-group col-md-4">
            <label class="text-info">ชื่อห้องประชุม</label><br>
            <input type="text" name="MR_name" id="MR_name" class="form-control">
        </div>

        <div class=" text-center">
            <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-inbox"></i>เพิ่มข้อมูล</button>
            
        </div>
    </form>
</div>

@endsection

