@extends('layout.homelayout')


@section('content')
<!-- Row -->
<div class="row">
    <!-- Column -->
    <div class="col-md-12 col-lg-4 col-xlg-3">
        <div class="card">
            <div class="card-body">
                <center class="mt-4"> <img src="{{asset('img/user/user1.jpg')}}" class="img-circle" width="150" />
                    <h3><a href="profile">{{ Auth::user()->name }}&nbsp;&nbsp; {{ Auth::user()->OF_lname }}</a></h3>
                    <h4 class="card-subtitle text-muted"><i class="fa fa-id-card fa-sm fa-fw mr-2 text-black-400"></i>{{ Auth::user()->OF_status }}</h4>

                </center>
            </div>
            <div>
                <hr>
            </div>
            <div class="card-body">

                <h4 class="text-muted p-t-30 db"> <i class="fa fa-users fa-sm fa-fw mr-2 text-black-400"></i>{{ Auth::user()->OF_rank }}</h4>
                <h1 class="text-muted p-t-30 db"></h1>
                <h4 class="text-muted p-t-30 db"> <i class="fa fa-database fa-sm fa-fw mr-2 text-black-400"></i>{{ Auth::user()->OF_department }}</h4>

                <h4> <i class="fa fa-envelope fa-sm fa-fw mr-2 text-black-400"></i><a href="{{url('https://accounts.google.com/signin/v2/identifier?service=accountsettings&continue=https%3A%2F%2Fmyaccount.google.com%2F&flowName=GlifWebSignIn&flowEntry=AddSession')}}" class="__cf_email__" >{{ Auth::user()->email}}</a></h4>
                <h4 class="text-muted p-t-30 db"> <i class="fa fa-university fa-sm fa-fw mr-2 text-black-400"></i>{{ Auth::user()->OF_institution }}</h4>

                <h4 class="text-muted p-t-30 db"> <i class="fa fa-mobile fa-sm fa-fw mr-2 text-black-400"></i> {{ Auth::user()->OF_tel }}</h4>


            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-md-12 col-lg-8 col-xlg-9">
        <div class="card">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs profile-tab" role="tablist">
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">แก้ไขข้อมูลส่วนตัว</a> </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane" id="settings" role="tabpanel">
                    <div class="card-body">
                        <form class="form-horizontal form-material" action="{{action('ProfileController@update','id')}}" method="post">
                            {{csrf_field()}}
                            {{ method_field('PATCH') }}
                            <div class="form-group">
                                <label class="col-md-12">ชื่อ</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="ชื่อ" class="form-control form-control-line" name="name" required="" value="{{ Auth::user()->name }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">นามสกุล</label>
                                <div class="col-md-12">
                                    <input type="text"  class="form-control form-control-line"  name="OF_lname"required="" value="{{ Auth::user()->OF_lname }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">ตำแหน่ง</label>
                                <input type="text" name="OF_rank" class="form-control" required="" value="{{ Auth::user()->OF_rank }}">
                            </div>
                            <div class="form-group ">
                                <label>แผนกงาน</label>
                                <select class="col-sm-12" name="OF_department" required="" value="{{ Auth::user()->OF_department }}">
                                    <option>---ไม่ระบุ-----</option>
                                    <option>เทคโนโลยีสารสนเทศ</option>
                                    <option>ภูมิสารสนเทศ</option>
                                    <option>สารสนเทศศาสตร์</option>
                                    <option>นิเทศศาสตร์</option>
                                    <option>สื่อนฤมิต</option>
                                    <option>วิทยาการคอมพิวเตอร์</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="example-email" class="col-md-12">หน่วยงาน</label>
                                <div class="col-md-12">
                                <input type="text" name="OF_institution" class="form-control" required="" value="{{ Auth::user()->OF_institution }}">
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label class="col-md-12">Password</label>
                                <div class="col-md-12">
                                    <input type="password" name="password" class="form-control" required="" value="{{ Auth::user()->password}}">
                                </div>
                            </div>
                            

                            <div class="form-group">
                                <label class="col-md-12">เบอร์โทรศัพท์</label>
                                <div class="col-md-12">
                                <input type="text" name="OF_tel" class="form-control" required="" value="{{ Auth::user()->OF_tel }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">E-mail</label>
                                <div class="col-md-12">
                                <input type="email" name="email" class="form-control"  required="" value="{{ Auth::user()->email }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success" type="submit">Update Profile</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<!-- Row -->
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
@include('sweetalert::alert')
@endsection