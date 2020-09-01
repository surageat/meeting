@extends('layout.adminlayout')
@section('header')
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor mb-0 mt-0">ผู้ใช้งานระบบ</h3>
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
            <a href="{{route('userexternal.index')}}" class="btn btn-secondary  btn-lg" type="button" >รายชื่อบุคลากรภายใน</a>
            <a href="{{route('userexternal.index')}}" class="btn btn-success btn-lg" type="button" >รายชื่อบุคลากรภายนอก</a><br/><br/>
                    
                    <table class="table  tabel-bordered  table-striped">
                        <tr>
                            <th>ลำดับ</th>
                            <th>ผู้ใช้งานระบบ</th>
                            <th>รหัสผ่าน</th>
                            <th>ชื่อ</th>
                            <th>เบอร์โทรศัพท์</th>
                            <th>หน่วยงาน</th>
                            <th>แก้ไขข้อมูล</th>
                            <th>ลบข้อมูล</th>
                        </tr>
                        @foreach($External_personnel as $row)
                        <tr>
                            <td>{{$row['EP_id']}}</td>
                            <td>{{$row['EP_user']}}</td>
                            <td>{{$row['EP_pass']}}</td>
                            <td>{{$row['EP_name']}}</td>
                            <td>{{$row['EP_tel']}}</td>
                            <td>{{$row['EP_institution']}}</td>
                            <td>
                                <a href="{{action('ExternalController@edit',$row['EP_id'])}}" class="btn btn-warning"><i class="fa fa-wrench"></i></a>
                            </td>
                            <td>
                                <form method="post" class="delete_form" action="{{action('ExternalController@destroy',$row['EP_id'])}}">
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