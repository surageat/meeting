@extends('layout.adminlayout')

@section('header')
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor mb-0 mt-0">รายการประชุม</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">หน้าหลัก</a></li>
            <li class="breadcrumb-item active">รายการประชุม</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="col-md-12">
        <div Align="right">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search.. " title="Type in a name">
            <br><br>
            <form id="active">
                <table class="table table-bordered " width="100%" id="myTable">
                    <thead class="thead-light">
                        <tr>
                            <th>ชื่อ-นามสกุล</th>
                            <th>ตำแหน่ง</th>
                            <th>แผนกงาน</th>
                            <th>หน่วยงาน</th>
                            <th>สถานะ</th>
                            <th>เลือก</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($offices as $row)
                        <tr>
                            <td>{{$row->name}} &nbsp; {{$row->OF_lname}}</td>
                            <td>{{$row->OF_rank}}</td>
                            <td>{{$row->OF_department}}</td>
                            <td>{{$row->OF_institution}}</td>
                            <td>{{$row->OF_status}}</td>

                            <td>
                                <form method="post" class="">
                                    {{ csrf_field() }}
                                    <input type="checkbox" name="" value="DELETE">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class=" text-center">
                    <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-inbox"></i>เพิ่มข้อมูล</button>
                    <button type="button" class="btn btn-danger btn-lg">ยกเลิก</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection