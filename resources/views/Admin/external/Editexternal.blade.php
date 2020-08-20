@extends('layout.adminlayout')
@section('header')
<table class="table table-hover">
    <th>
        <a href="{{route('userinternal.create')}}" type="button" class="btn btn-success btn-lg" style="font-size: 200%; line-height: 1.5em;">บุคลากรภายใน</a>
        <a href="{{route('userexternal.create')}}" type="button" class="btn btn-secondary btn-lg" style="font-size: 200%; line-height: 1.5em;">บุคลากรภายนอก</a>
    </th>
    <th>
        <a href="{{route('userexternal.index')}}" class="btn btn-primary btn-lg" type="button">รายชื่อผู้ใช้งานระบบ </a>
    </th>
</table>
<br>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-body">
                <form action="{{action('ExternalController@update',$id)}}" method="post">
                    {{csrf_field()}}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Username</label>
                            <input type="text" name="EP_user" class="form-control" placeholder="" required="" value="{{$external_personnel->EP_user}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" name="EP_pass" class="form-control" placeholder="Password" required="" value="{{$external_personnel->EP_pass}}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">ชื่อ</label>
                            <input type="text" name="EP_name" class="form-control" placeholder="name" required="" value="{{$external_personnel->EP_name}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">ตำแหน่ง</label>
                            <input type="text" name="EP_position" class="form-control" placeholder="position" required="" value="{{$external_personnel->EP_position}}">
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-6 ">
                            <label for="inputEmail4">เบอร์โทรศัพท์</label>
                            <input type="text" name="EP_tel" class="form-control" id="inputEmail4" placeholder="08x-xxxx-xxx" required="" value="{{$external_personnel->EP_tel}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">สถานที่ทำงาน</label>
                            <input type="text" name="EP_institution" class="form-control" id="inputPassword4" placeholder="หน่วยงาน" required="" value="{{$external_personnel->EP_institution}}">
                        </div>
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