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
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <tr>
                <th>ผู้ใช้</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>ตำแหน่ง</th>
                <th>เบอร์โทรศัพท์</th>
                <th>อีเมลล์</th>
                <th>แก้ไขข้อมูล</th>
                <th>ลบข้อมูล</th>
            </tr>
            @foreach($admin as $row)
            <tr>
                <td>{{$row['username']}}</td>
                <td>{{$row['name']}}</td>
                <td>{{$row['lname']}}</td>
                <td>{{$row['rank']}}</td>
                <td>{{$row['tel']}}</td>
                <td>{{$row['email']}}</td>

                <td>
                    <a href="{{action('AdminController@edit',$row['id'])}}" class="btn btn-warning"><i class="fa fa-wrench"></i></a>
                </td>
                <td>
                    <form method="post" class="delete_form" action="{{action('AdminController@destroy',$row['id'])}}"  onclick="return confirm('ต้องการลบข้อมูลใช่ หรือ ไม่')">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        {!! $admin ->links() !!}
</div>
@endsection