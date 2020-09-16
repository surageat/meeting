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
@include('sweetalert::alert')
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                    {{csrf_field()}}
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label >Username</label>
                            <input   type="text" name="username"  class="form-control "  value="{{ old('username') }}" required autocomplete="username" autofocus >
                        </div>
                        

                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-4">
                            <label >Password</label>
                            <input id="password"type="password" name="password"  class="form-control "  value="{{ old('password') }}" required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="col-md-4">
                        <label >{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                    </div>

                    

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label >ชื่อ</label>
                            <input id="name" type="text" name="name"  class="form-control "  value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>
                        <div class="form-group col-md-6">
                            <label >นามสกุล</label>
                            <input type="text" name="OF_lname" class="form-control "  value="{{ old('OF_lname') }}" required autocomplete="OF_lname" autofocus >
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label >ตำแหน่ง</label>
                            <input type="text" name="OF_rank"  class="form-control "  value="{{ old('OF_rank') }}" required autocomplete="OF_rank" autofocus >
                        </div>
                        <div class="form-group col-md-6">
                            <label >แผนกงาน</label>
                            <select class="form-control form-control-line" name="OF_department"  class="form-control "  value="{{ old('OF_department') }}" required autocomplete="OF_department" autofocus>
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
                            <label >หน่วยงาน</label>
                            <input type="text" name="OF_institution"  class="form-control "  value="{{ old('OF_institution') }}" required autocomplete="OF_institution" autofocus>
                        </div>
                        <div class="form-group col-md-6">
                            <label >เบอร์โทรศัพท์</label>
                            <input type="tel" name="OF_tel"  class="form-control "  value="{{ old('OF_tel') }}" required autocomplete="OF_tel" autofocus >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 ">
                            <label >อีเมลล์</label>
                            <input id="password-confirm" id="email" type="email" name="email"  class="form-control "  value="{{ old('email') }}" required autocomplete="email">
                        </div>
                        <div class="form-group col-md-6">
                            <label >สถานะ</label>
                            <select class="form-control form-control-line" name="OF_status"  class="form-control "  value="{{ old('OF_status') }}" required autocomplete="OF_status" autofocus>
                                    <option>ผู้ดูแล</option>
                                    <option>บุคลากรภายนอก</option>
                                    <option>บุคคลากรภายใน</option>
                                   
                                </select>
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

