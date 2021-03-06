@extends('layout.adminlayout')
@section('header')
<table class="table table-hover">
    <th>
        <a href="{{route('offices.index')}}" class="btn btn-primary btn-lg" type="button">รายชื่อผู้ใช้งานระบบ </a>
    </th>
</table>
<br>
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-body">
                <form action="{{action('OfficeController@update',$id)}}" method="post">
                    {{csrf_field()}}
                    {{ method_field('PATCH') }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" required="" value="{{$offices->username}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required="" value="{{$offices->password}}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>ชื่อ</label>
                            <input type="text" name="name" class="form-control" required="" value="{{$offices->name}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>นามสกุล</label>
                            <input type="text" name="OF_lname" class="form-control" required="" value="{{$offices->OF_lname}}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>ตำแหน่ง</label>
                            <input type="text" name="OF_rank" class="form-control" required="" value="{{$offices->OF_rank}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>แผนกงาน</label>
                            <select class="form-control form-control-line" name="OF_department" required="" value="{{$offices->OF_department}}">
                                <option>---ไม่ระบุ-----</option>
                                <option>เทคโนโลยีสารสนเทศ</option>
                                <option>ภูมิสารสนเทศ</option>
                                <option>สารสนเทศศาสตร์</option>
                                <option>นิเทศศาสตร์</option>
                                <option>สื่อนฤมิต</option>
                                <option>วิทยาการคอมพิวเตอร์</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6 ">
                            <label>หน่วยงาน</label>
                            <input type="text" name="OF_institution" class="form-control" required="" value="{{$offices->OF_institution}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>เบอร์โทรศัพท์</label>
                            <input type="text" name="OF_tel" class="form-control" required="" value="{{$offices->OF_tel}}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 ">
                            <label>อีเมลล์</label>
                            <input type="email" name="email" class="form-control" placeholder="example@email.com" required="" value="{{$offices->email}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>สถานะ</label>
                            <select class="form-control form-control-line" name="OF_status" required="" placeholder="ระบุ" value="{{$offices->OF_status}}">
                                <option>ผู้ดูแล</option>
                                <option>บุคลากรภายนอก</option>
                                <option>บุคคลากรภายใน</option>

                            </select>
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