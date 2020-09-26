@extends('layout.homelayout')
@section('header')
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor mb-0 mt-0">เรื่องการประชุม</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">หน้าหลัก</a></li>
                    <li class="breadcrumb-item active">เรื่องการประชุม</li>
                 </ol>
        </div>
    </div>
    @endsection

    @section('content')
    <div class="container">
        <div class="col-md-12">
            <div Align="right">
                <table class="table  tabel-bordered  table-striped">
                    <tr>
                        <th>หัวข้อเรื่องการประชุม</th>
                        <th>วันที่</th>
                        <th>ครั้งที่</th>
                        <th>เวลา</th>
                        <th>สถานที่</th>
                        <th>ตารางการประชุม</th>
                        <th>ห้องประชุม</th>
                        <th>ผู้ดูแลการประชุม</th>
                    </tr>
                </table>
          <br><br>
          <br><br>
          <br><br>
          <br><br>
          <br><br>
          <br><br>
          <br><br>
          <br><br>
          <br><br>
          <br><br>
        <div class="text-center ">
            <button type="button" class="btn btn-primary">ยืนยันการเข้าร่วม</button>
            <button type="button" class="btn btn-danger">ไม่เข้าร่วม</button>
        </div>
    </div>
</div>
    @endsection
    

