@extends('layout.adminlayout')
@section('content')
<div class="container ">
    <form method="post" action="{{ url('room') }}">
        {{ csrf_field() }}
        <div class="form-group col-md-4">
            <label for="date" class="text-info">ชื่อห้องประชุม</label><br>
            <input type="text" name="MR_name" id="MR_name" class="form-control">
        </div>
        <div class=" text-center">
            <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-inbox"></i>เพิ่มข้อมูล</button>
            <button type="button" class="btn btn-danger btn-lg">ยกเลิก</button>
        </div>
    </form>
</div>
<br>
<br>

<div class="table-responsive">
    <table class="table  tabel-bordered  table-striped">
        <tr>
            <th>id</th>
            <th>ชื่อห้องประชุม</th>
            <th>แก้ไข</th>
            <th>ลบ</th>
        </tr>

        @foreach($meeting_rooms as $row)
        <tr>
            <td>{{ $row->id}}</td>
            <td>{{ $row->MR_name}}</td>

            <td>
                <a href="{{action('RoomController@edit', $row->id) }}" class="btn btn-warning"><i class="fa fa-wrench"></i></a>
            </td>
            <td>
                <form method="post" class="delete_form" action="{{ action('RoomController@destroy', $row->id) }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                </form>
            </td>
        </tr>

        @endforeach
        
    </table>
    {!! $meeting_rooms ->links() !!}
   
</div>

@include('sweetalert::alert')
@endsection