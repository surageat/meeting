@extends('layout.adminlayout')
@section('header')
<table class="table table-hover">
    <th>
        <a href="{{route('admin.index')}}" class="btn btn-primary btn-lg" type="button">รายชื่อผู้ดูแลระบบ </a>
    </th>
</table>
<br>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-body">
            <form action="{{url('admin')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label >Username</label>
                            <input type="text" name="username" class="form-control"  required="" >
                        </div>
                        <div class="form-group col-md-6">
                            <label >Password</label>
                            <input type="password" name="password" class="form-control"  required="">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label >ชื่อ</label>
                            <input type="text" name="name" class="form-control"  required="" >
                        </div>
                        <div class="form-group col-md-6">
                            <label >นามสกุล</label>
                            <input type="text" name="lname" class="form-control"  required="" >
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label >ตำแหน่ง</label>
                            <input type="text" name="rank" class="form-control"  required="" >
                        </div>
    
                        <div class="form-group col-md-6">
                            <label >เบอร์โทรศัพท์</label>
                            <input type="tel" name="tel" class="form-control"   required="" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 ">
                            <label >อีเมลล์</label>
                            <input type="email" name="email" class="form-control"  placeholder="example@email.com" required="" >
                        </div>
                    </div>
                    <div class=" text-center">
                        <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-inbox"></i>เพิ่มข้อมูล</button>
                        <button type="button" class="btn btn-danger btn-lg">ยกเลิก</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Row -->
@include('sweetalert::alert')
@endsection