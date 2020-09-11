@extends('layout.adminlayout')
@section('header')
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor mb-0 mt-0">ห้องประชุม</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">หน้าหลัก</a></li>
                    <li class="breadcrumb-item active">เพิ่มห้องประชุม</li>
                 </ol>
        </div>
    </div>

    @endsection
    @section('content')
<div class="container ">
    <form>
        <div class="form-group col-md-4">
            <label for="date" class="text-info">ชื่อห้องประชุม</label><br>
            <input type="text" name="meeting" id="date" class="form-control">
        </div> 
        

        <div class="text-center">
            <button type="button" class="btn btn-primary">ยืนยัน</button>
            <button type="button" class="btn btn-danger" >ยกเลิก</button>
        </div>
     </form>
</div>

    @endsection
    
