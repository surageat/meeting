@extends('layout.adminlayout')
@section('header')
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor mb-0 mt-0">รายการประชุม</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">หน้าหลัก</a></li>
            <li class="breadcrumb-item active">รายการประชุม</li>
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
                <th>หัวข้อเรื่องประชุม</th>
                <th>วันที่</th>
                <th>ครั้งที่</th>
                <th>เวลา</th>
                <th>สถานที่</th>
                <th>ผู้ดูแลการประชุม</th>
                <th>ห้องประชุม</th>
                <th>แก้ไข</th>
                <th>ลบ</th>
            </tr>

            @foreach($data as $row)
            <tr>
                <td>{{ $row['Meet_heading']}}</td>
                <td>{{ $row['Meet_date']}}</td>
                <td>{{ $row['Meet_no']}}</td>
                <td>{{ $row['Meet_time']}}</td>
                <td>{{ $row['Meet_place']}}</td>
                <td>{{ $row['Meet_table']}}</td>
                <td>{{ $row['admin_id']}}</td>
                <td>{{ $row['MR_id']}}</td>

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