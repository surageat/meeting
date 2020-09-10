@extends('layout.adminlayout')
@section('header')
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor mb-0 mt-0">เพิ่มการประชุม</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">หน้าหลัก</a></li>
                    <li class="breadcrumb-item active">เพิ่มการประชุม</li>
                 </ol>
        </div>
    </div>

    @endsection

    @section('content')
<div class="container ">
    <form>
        <div class="form-group col-md-4">
            <label for="date" class="text-info">เรื่อง</label><br>
            <input type="text" name="meeting" id="date" class="form-control">
        </div> 
        
        <div class="form-group  col-md-4 ">
            <label for="meeting" class="text-info">วันที่</label><br>
            <input type="date" name="meeting" id="meeting" class="form-control">
        </div> 

        <div class="form-group  col-md-4 ">
            <label for="meeting" class="text-info">ครั้งที่</label><br>
            <input type="number" name="meeting" id="meeting" class="form-control">
        </div> 
    
        <div class="form-group  col-md-4 ">
            <label for="meeting" class="text-info">เวลา</label><br>
            <input type="text" name="meeting" id="meeting" class="form-control">
        </div> 


        <div class="form-group  col-md-4 ">
            <label for="meeting" class="text-info">สถานที่</label><br>
            <input type="text" name="meeting" id="meeting" class="form-control">
        </div> 
        
        <label for="meeting" class="text-info">เพิ่มไฟล์ ที่เกี่ยวข้องกับการประชุม</label><br>
        <div class="custom-file  col-md-2">
            <input type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">เพิ่มไฟล์</label>
        </div>

        <div class="text-center">
            <button type="button" class="btn btn-primary">ยืนยัน</button>
            <button type="button" class="btn btn-danger" >ยกเลิก</button>
        </div>
     </form>
</div>

    @endsection
    
