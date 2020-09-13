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
    <form action="{{url('addmeeting')}}" method="post">
        {{csrf_field()}}
        <div class="form-group col-md-4">
            <label for="date" class="text-info">หัวข้อเรื่อง</label><br>
            <input type="text" name="Meet_heading"  class="form-control"  required="">
        </div> 
        
        <div class="form-group  col-md-4 ">
            <label for="meeting" class="text-info">วันที่</label><br>
            <input type="date" name="Meet_date"   class="form-control" required="">
        </div> 

        <div class="form-group  col-md-4 ">
            <label for="meeting" class="text-info">ครั้งที่</label><br>
            <input type="text" name="Meet_no"  class="form-control"   required="">
        </div> 
    
        <div class="form-group  col-md-4 ">
            <label for="meeting" class="text-info">เวลา</label><br>
            <input type="text" name="Meet_time"  class="form-control" required="">
        </div> 

        <div class="form-group  col-md-4 ">
            <label for="meeting" class="text-info">สถานที่</label><br>
            <input type="text" name="Meet_place"   class="form-control" required="">
        </div> 
        <div class="form-group  col-md-4 ">
            <label for="meeting" class="text-info">ผู้ดูแลการประชุม</label><br>
        <select type="text" name="OF_id"   class="form-control" required="" >
        @foreach($meetings as $meeting)
            <option value="{{$meeting->id}}">{{$meeting->OF_name}}</option>
            @endforeach
        </select>
        </div>
        <div class="form-group  col-md-4 ">
            <label for="meeting" class="text-info">ห้องประชุม</label><br>
        <select type="text" name="MR_id"   class="form-control" required="" >
        @foreach($meetings as $meeting)
            <option value="{{ $meeting->id}}">{{ $meeting->MR_name}}</option>
            @endforeach
        </select>
        </div>
        
        <div class="custom-file  col-md-2">
            <input type="file"  name="Meet_table"  id="input-b2" class="file" data-show-preview="false"  required="">

        </div>

         <div class=" text-center">
            <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-inbox"></i>เพิ่มข้อมูล</button>
            <button type="button" class="btn btn-danger btn-lg">ยกเลิก</button>
        </div>
     </form>
</div>
    @include('sweetalert::alert')
    @endsection
    
