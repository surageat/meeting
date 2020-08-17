@extends('layout.adminlayout')
@section('header')
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor mb-0 mt-0">รายงานการประชุม</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">หน้าหลัก</a></li>
                    <li class="breadcrumb-item active">รายงานการประชุม</li>
                 </ol>
        </div>
    </div>
    @endsection
    @section('content')

    <form>

    <div class="form-group col-md-12">
        <label for="date" class="text-info">เพิ่ม URL</label><br>
        <input type="text" name="text" id="text" class="form-control">
    </div> 


    <div class="form-group col-md-12">
        <label for="date" class="text-info">เพิ่มหัวข้อ</label><br>
        <input type="text" name="text" id="text" class="form-control">
    </div> 


    <div class="custom-file  col-md-2">
        <input type="file" class="custom-file-input" id="customFile">
        <label class="custom-file-label" for="customFile">เพิ่มไฟล์</label>
    </div>

    <div class="text-center">
        <button type="button" class="btn btn-primary">ยืนยัน</button>
        <button type="button" class="btn btn-danger" >ยกเลิก</button>
    </form>
        
    @endsection