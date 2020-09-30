@extends('layout.homelayout')


@section('header')

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
            <input type="text" name="Meet_id"  id="Meet_id"  class="form-control" >
               
        </div>


        <div class="form-group col-md-4">
            <label for="OF_id" class="text-info">รหัสบุคลากร</label><br>
            <input type="text" name="OF_id"  id="OF_id"  class="form-control" >
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


