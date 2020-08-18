@extends('layout.adminlayout')
@section('header')
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <a href="userinternal">
            <button type="button" class="btn btn-success btn-lg" style="font-size: 200%; line-height: 1.5em;">บุคลากรภายใน</button>
        </a>
        <a href="{{route('userexternal.create')}}">
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
                <form action="{{url('userexternal')}}" method="post" >
                    {{csrf_field()}}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Username</label>
                            <input type="text" name="EP_user" class="form-control" id="inputEmail4" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" name="EP_pass" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">ชื่อ</label>
                            <input type="text" name="EP_name" class="form-control" id="inputEmail4" placeholder="name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">ตำแหน่ง</label>
                            <input type="text" name="EP_position" class="form-control" id="inputPassword4" placeholder="position">
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-6 ">
                            <label for="inputEmail4">เบอร์โทรศัพท์</label>
                            <input type="text" name="EP_tel" class="form-control" id="inputEmail4" placeholder="08x-xxxx-xxx">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">สถานที่ทำงาน</label>
                            <input type="text" name="EP_institution" class="form-control" id="inputPassword4" placeholder="หน่วยงาน">
                        </div>
                    </div>

                    <div class=" text-center">
                        <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-inbox"></i> เพิ่มผู้ใช้</button>
                        <button type="button" class="btn btn-danger btn-lg">ยกเลิก</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Row -->

@endsection

@section('script')

<script>
    $('#submit').on('click', function() {
      console.log("btn click");
      var data = $('#namid').val();
      console.log(data);
      if (data == 'status=1') {
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'บันทึกข้อมูลสำเร็จ',
          showConfirmButton: false,
          timer: 1500
        })
      } else if (data == 'status=0') {
        Swal.fire({
          position: 'top-end',
          icon: 'error',
          title: 'บันทึกข้อมูลไม่สำเร็จ',
          showConfirmButton: false,
          timer: 1500
        })
      }
    })
  </script>
@endsection