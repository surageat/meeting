@extends('layout.adminlayout')
@section('header')
    <table class="table table-hover">
        <th>
            <a href="{{ route('room.index') }}" class="btn btn-primary btn-lg" type="button">รายชื่อห้องประชุม </a>
        </th>
    </table>

    @endsection
    @section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-body">
                <form action="{{action('RoomController@update',$id)}}" method="post">
                    {{csrf_field()}}
                    {{ method_field('PATCH') }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>MR_name</label>
                            <input type="text" name="MR_name" class="form-control" required="" value="{{$meeting_room->MR_name}}">
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
<!-- Row -->
@include('sweetalert::alert')

@endsection