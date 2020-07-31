@extends('layout.adminlayout')
@section('header')
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <a href="userinternal">
            <button type="button" class="btn btn-success btn-lg" style="font-size: 200%; line-height: 1.5em;">บุคลากรภายใน</button>
        </a>
        <a href="userexternal">
            <button type="button" class="btn btn-secondary btn-lg" style="font-size: 200%; line-height: 1.5em;">บุคลากรภายนอก</button>
        </a>
    </div>
</div>
<br>
@endsection
@section('content')
<div class="containner ">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-outline-info">
                <div class="card-body">
                    <form action="#">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Username</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="s">
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">ชื่อ</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">นามสกุล</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">ตำแหน่ง</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">คณะ</label>
                                <select class="form-control form-control-line">
                                    <option>---ไม่ระบุ-----</option>
                                    <option>วิทยาการสารสนเทศ</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">แผนก/สาขา</label>
                                <select class="form-control form-control-line">
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
                                <input type="text" class="form-control" id="inputPassword4" placeholder="หน่วยงาน">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">เบอร์โทรศัพท์</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Email</label>
                                <input type="email" class="form-control" id="inputPassword4" placeholder="">
                            </div>
                        </div>

                    </form>
                    <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-inbox"></i> เพิ่มผู้ใช้</button>
            <button type="button" class="btn btn-danger btn-lg">ยกเลิก</button>
        </div>
                </div>

            </div>
        </div>
        
    </div>

</div>
<!-- Row -->

@endsection