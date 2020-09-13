@extends('layout.adminlayout')
@section('header')
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor mb-0 mt-0">รายชื่อห้องประชุม</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">หน้าหลัก</a></li>
            <li class="breadcrumb-item active">รายชื่อห้องประชุม</li>
        </ol>
    </div>
</div>
@endsection


@section('content')
<div class="container">
<div class="col-md-12">
    <br><br>
    <div Align="right">
        <table class="table  tabel-bordered  table-striped">
            <tr>
                <th>id</th>
                <th>ชื่อห้องประชุม</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
            </tr>

            @foreach($meeting_rooms as $row)
            <tr>
            <td>{{ $row['id']}}</td>
                <td>{{ $row['MR_name']}}</td>

                <td>
                    <a href="{{action('RoomController@edit', $row['id']) }}" class="btn btn-warning"><i class="fa fa-wrench"></i></a>
                </td>
                <td>
                    <form method="post" class="delete_form" action="{{ action('RoomController@destroy', $row['id']) }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>

            @endforeach
        </table>
    </div>
</div>
</div>
@include('sweetalert::alert')
@endsection