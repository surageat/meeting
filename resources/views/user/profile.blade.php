@extends('layout.homelayout')


@section('content')
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-12 col-lg-4 col-xlg-3">
                        <div class="card">
                            <div class="card-body">
                                <center class="mt-4"> <img src="{{asset('img/user/user1.jpg')}}" class="img-circle" width="150" />
                                    <h3 ><a href="profile">{{ Auth::user()->name }}&nbsp;&nbsp; {{ Auth::user()->OF_lname }}</a></h3>
                                    <h4 class="card-subtitle text-muted"><i class="fa fa-id-card fa-sm fa-fw mr-2 text-black-400"></i>{{ Auth::user()->OF_status }}</h4>
        
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> 
                                
                                <h4 class="text-muted p-t-30 db">  <i class="fa fa-users fa-sm fa-fw mr-2 text-black-400"></i>{{ Auth::user()->OF_rank }}</h4>
                                <h1 class="text-muted p-t-30 db"></h1>
                                <h4 class="text-muted p-t-30 db">  <i class="fa fa-address-card fa-sm fa-fw mr-2 text-black-400""></i>{{ Auth::user()->OF_department }}</h4>
                               
                                <h4> <i class="fa fa-envelope fa-sm fa-fw mr-2 text-black-400"></i><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="95fdf4fbfbf4f2fae3f0e7d5f2f8f4fcf9bbf6faf8">{{ Auth::user()->email}}</a></h4>
                                <h4  class="text-muted p-t-30 db"> <i class="fa fa-university fa-sm fa-fw mr-2 text-black-400"></i>{{ Auth::user()->OF_institution }}</h4>
                                
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
                                        <form class="form-horizontal form-material">
                                            <div class="form-group">
                                                <label class="col-md-12">ชื่อ</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="ชื่อ" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">นามสกุล</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="นามสกุล" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">ตำแหน่ง</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line">
                                                        <option>---ไม่ระบุ-----</option>
                                                        <option>คณะบดี</option>
                                                        <option>รองคณะบดี</option>
                                                        <option>อาจารย์</option>
                                                        <option>บุคลากร</option>
                                                        <option>แม่บ้าน</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">คณะ</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line"> 
                                                        <option>---ไม่ระบุ-----</option>
                                                        <option>วิทยาการสารสนเทศ</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">สาขา</label>
                                                <div class="col-sm-12">
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
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" placeholder="อีเมลผู้ใช้งาน" class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Password</label>
                                                <div class="col-md-12">
                                                    <input type="password" placeholder="ระบุรหัสผ่าน" class="form-control form-control-line">
                                                </div>
                                            </div>
  
                                            <div class="form-group">
                                                <label class="col-md-12">เบอร์โทรศัพท์</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="080-xxxx-xxx" class="form-control form-control-line">
                                                </div>
                                            </div>
                                          
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Update Profile</button>
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
@endsection