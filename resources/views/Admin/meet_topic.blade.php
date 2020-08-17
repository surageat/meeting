@extends('layout.adminlayout')
@section('header')
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor mb-0 mt-0">จัดการวาระการประชุม</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">หน้าหลัก</a></li>
                    <li class="breadcrumb-item active">จัดการวาระการประชุม</li>
                 </ol>
        </div>
    </div>
    @endsection
    @section('content')

    <div class="container ">
    <form>
        <div class="form-group col-md-12">
            <label for="date" class="text-info">เรื่องประชุม</label><br>
            <input type="text" name="text" id="text" class="form-control">
        </div> 

        <div class="form-group  col-md-12">
            <label for="details" class="text-info">รายละเอียด</label><br>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
        </div> 
        
        <div class="text-center">
            <button type="button" class="btn btn-primary">ยืนยัน</button>
            <button type="button" class="btn btn-danger">ยกเลิก</button>
        </div>




        
    </form>
    @endsection
    