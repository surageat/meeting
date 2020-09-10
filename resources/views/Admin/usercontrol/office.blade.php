@extends('layout.adminlayout')
@section('header')
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor mb-0 mt-0">รายชื่อผู้ใช้งานระบบ</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">หน้าหลัก</a></li>
            <li class="breadcrumb-item active">รายชื่อผู้ใช้งานระบบ</li>
        </ol>
    </div>
</div>
@endsection

@section('content')

    <div class="col-md-12">
        <br><br>
        <div Align="right">
                    <table class="table  tabel-bordered  table-striped">
                        <tr>
                            <th>ผู้ใช้งาน</th>
                            <th>ชื่อ</th>
                            <th>นามสกุล</th>
                            <th>ตำแหน่ง</th>
                            <th>แผนกงาน</th>
                            <th>หน่วยงาน</th>
                            <th>เบอร์โทรศัพท์</th>
                            <th>อีเมลล์</th>
                            <th>สถานะ</th>
                            <th>แก้ไขข้อมูล</th>
                            <th>ลบข้อมูล</th>
                        </tr>
                        @foreach($offices as $row)
                        <tr>
                            <td>{{$row['username']}}</td>
                            <td>{{$row['name']}}</td>
                            <td>{{$row['OF_lname']}}</td>
                            <td>{{$row['OF_rank']}}</td>
                            <td>{{$row['OF_department']}}</td>
                            <td>{{$row['OF_institution']}}</td>
                            <td>{{$row['OF_tel']}}</td>
                            <td>{{$row['email']}}</td>
                            <td>{{$row['OF_status']}}</td>
                            <td>
                                <a href="{{action('OfficeController@edit',$row['id'])}}" class="btn btn-warning"><i class="fa fa-wrench"></i></a>
                            </td>
                            <td>
                                <form method="post" class="delete_form" action="{{action('OfficeController@destroy',$row['id'])}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
        </div>
    </div>

@include('sweetalert::alert')
@endsection