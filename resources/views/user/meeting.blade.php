@extends('layout.home')
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
<div class="container ">
    <form>
        <div class="form-group col-md-4">
            <label for="date" class="text-info">วันที่</label><br>
            <input type="date" name="date" id="date" class="form-control">
        </div> 
        
        <div class="form-group  col-md-4 ">
            <label for="meeting" class="text-info">เรื่องการประชุม</label><br>
            <input type="text" name="meeting" id="meeting" class="form-control">
        </div> 
    
        <div class="form-group  col-md-12">
            <label for="details" class="text-info">รายละเอียด</label><br>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
        </div> 
        
        <div class="text-center">
            <button type="button" class="btn btn-primary">ยืนยันการเข้าร่วม</button>
            <button type="button" class="btn btn-danger">ไม่เข้าร่วม</button>
        </div>
     </form>
</div>

    @endsection
    

