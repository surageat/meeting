@extends('layout.adminlayout')
@section('header')
<table class="table table-hover">
    <th>
        <a href="{{route('userinternal.create')}}">
            <button type="button" class="btn btn-success btn-lg" style="font-size: 200%; line-height: 1.5em;">บุคลากรภายใน</button>
        </a>
        <a href="{{route('userexternal.create')}}">
            <button type="button" class="btn btn-secondary btn-lg" style="font-size: 200%; line-height: 1.5em;">บุคลากรภายนอก</button>
        </a>
    </th>
    <th></th>
    <th>
        <a href="{{route('userexternal.create')}}">
            <button type="button" class="btn btn-primary btn-lg">รายชื่อผู้ใช้</button>
        </a>
    </th>
</table>
<br>
@endsection
@section('content')
<div class="containner ">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-outline-info">
                <div class="card-body">
                    <form action="{{url('userinternal')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Username</label>
                                <input type="text" class="form-control" name="IP_user" placeholder="" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" name="IP_pass" placeholder="" required="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">ชื่อ</label>
                                <input type="text" class="form-control" name="IP_name" placeholder="name" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">นามสกุล</label>
                                <input type="text" class="form-control" name="IP_lname" placeholder="" required="">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">ตำแหน่ง</label>
                                <input type="text" class="form-control" name="IP_position" placeholder="" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">คณะ</label>
                                <select class="form-control form-control-line" name="IP_faculty" required="">
                                    <option>---ไม่ระบุ-----</option>
                                    <option>วิทยาการสารสนเทศ</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">แผนก/สาขา</label>
                                <select class="form-control form-control-line" name="IP_department" required="">
                                    <option>---ไม่ระบุ-----</option>
                                    <option>เทคโนโลยีสารสนเทศ</option>
                                    <option>ภูมิสารสนเทศ</option>
                                    <option>สารสนเทศศาสตร์</option>
                                    <option>นิเทศศาสตร์</option>
                                    <option>สื่อนฤมิต</option>
                                    <option>วิทยาการคอมพิวเตอร์</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">สังกัด/หน่วยงาน</label>
                                <input type="text" class="form-control" name="IP_institution" placeholder="หน่วยงาน" required="">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">เบอร์โทรศัพท์</label>
                                <input type="text" class="form-control" name="IP_tel" placeholder="" required="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Email</label>
                                <input type="email" class="form-control" name="ip_email" placeholder="" required="">
                            </div>
                        </div>
                        <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-inbox"></i> เพิ่มผู้ใช้</button>
                        <button type="button" class="btn btn-danger btn-lg">ยกเลิก</button>
                    </div>
                    </form>
                   
                </div>

            </div>
        </div>

    </div>

</div>
<!-- Row -->
@include('sweetalert::alert')
@endsection