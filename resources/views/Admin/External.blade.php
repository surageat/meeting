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
<div class="row">
    <div class="col-lg-12">
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
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                    </div>
                 
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">ชื่อ</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">ตำแหน่ง</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="position">
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="08x-xxxx-xxx">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">สถานที่ทำงาน</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="หน่วยงาน">
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary"> <i class="fa fa-check"></i>ตกลง</button>
                        <button type="button" class="btn btn-danger">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Row -->

@endsection