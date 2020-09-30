@extends('layout.homelayout')

@section('header')
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor mb-0 mt-0">บันทึกข้อคิดเห็น</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">หน้าหลัก</a></li>
            <li class="breadcrumb-item ">บันทึกข้อคิดเห็น</li>
        </ol>
    </div>
</div>
<table class="table table-hover">
    <th>
        <a href="{{route('comments.index')}}" class="btn btn-primary btn-lg" type="button">ความคิดเห็นที่บันทึก </a>
    </th>
</table>
<br>
@endsection


@section('content')
<div class="container ">
    <form method="post" action="{{ url('comments') }}">
        {{ csrf_field() }}
        
        <div class="form-group col-md-4">
            <label for="Meet_id" class="text-info">รหัสการประชุม</label><br>
            <select type="text" name="Meet_id"  id="Meet_id"  class="form-control" required="" >
                <option value="">เลือก</option>
                @foreach($meetings as $meet)
                    <option value="{{$meet->id}}">{{$meet->id}}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group col-md-4">
            <label for="OF_id" class="text-info">รหัสบุคลากร</label><br>
            <select type="text" name="OF_id"  id="OF_id"  class="form-control" required="" >
                <option value="">เลือก</option>
                @foreach($offices as $of)
                    <option value="{{$of->id}}">{{$of->name}}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group  col-md-12">
            <label for="C_meet" class="text-info">ความคิดเห็น</label><br>
            <textarea class="form-control" name="C_meet" id="exampleFormControlTextarea1" rows="15"></textarea>
        </div>

        <div class=" text-center">
            <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-inbox"></i>บันทึกข้อมูล</button>
            <button type="button" class="btn btn-danger btn-lg">ยกเลิก</button>
        </div>
    </form>
</div>

@include('sweetalert::alert')
@endsection


