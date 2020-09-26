@extends('layout.homelayout')
@section('header')
    <div class="row page-titles">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor mb-0 mt-0">วาระการประชุม</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">หน้าหลัก</a></li>
                    <li class="breadcrumb-item active">วาระการประชุม</li>
                 </ol>
        </div>
    </div>
    @endsection
    

    @section('content')
    <div class="container ">
        <form action="{{url('agendas')}}" method="post">
            {{csrf_field()}}
            <div class="form-group col-md-4">
                <label for="agendas" class="text-info">วาระ แจ้งเพื่อทราบ</label><br>
                <input type="text" name=""  class="form-control"  required="">
            </div> 
            
            <div class="form-group  col-md-4 ">
                <label for="agendas" class="text-info">วาระ เรื่องรับรองรายงานการประชุม</label><br>
                <input type="text" name=""   class="form-control" required="">
            </div> 
    
            <div class="form-group  col-md-4 ">
                <label for="agendas" class="text-info">วาระ เรื่องสืบเนือง</label><br>
                <input type="text" name=""  class="form-control"   required="">
            </div> 
        
            <div class="form-group  col-md-4 ">
                <label for="agendas" class="text-info">วาระ เรื่องเพื่อพิจารณา</label><br>
                <input type="text" name=""  class="form-control" required="">
            </div> 
    
            <div class="form-group  col-md-4 ">
                <label for="agendas" class="text-info">วาระ เรื่องอื่นๆ (ถ้ามี)</label><br>
                <input type="text" name=""   class="form-control" required="">
            </div> 

            <div class="custom-file  col-md-2">
            <input type="file"  name=""  id="input-b2" class="file" data-show-preview="false"  required="">

        </div>

        <div class=" text-center">
            <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-inbox"></i>เพิ่มข้อมูล</button>
            <button type="button" class="btn btn-danger btn-lg">ยกเลิก</button>
        </div>

 @endsection