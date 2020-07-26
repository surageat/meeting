@extends('layout.home')


@section('content')
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-12 col-lg-4 col-xlg-3">
                        <div class="card">
                            <div class="card-body">
                                <center class="mt-4"> <img src="{{asset('img/user/user1.jpg')}}" class="img-circle" width="150" />
                                    <h4 class="card-title mt-2">คมสันต์ ประริทร</h4>
                                    <h6 class="card-subtitle">แม่บ้าน</h6>
        
                                </center>
                            </div>
                            <div>
                                <hr> </div>
                            <div class="card-body"> 
                                <small class="text-muted p-t-30 db">คณะ</small>
                                <h6>วิทยาการสารสนเทศ</h6>
                                <small class="text-muted p-t-30 db">สาขา</small>
                                <h6>เทคโนโลยีสารสนเทศ</h6>
                                <small class="text-muted">Email </small>
                                <h6><a href="https://www.wrappixel.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="95fdf4fbfbf4f2fae3f0e7d5f2f8f4fcf9bbf6faf8">[email&#160;protected]</a></h6>
                                <small class="text-muted p-t-30 db">Address</small>
                                <h6>6/5 หกดพ อใกดกดก จ.หกดเหกเกด 154444</h6>
                                <small class="text-muted p-t-30 db">Phone</small>
                                <h6>+91 654 784 547</h6>
                                
                                
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