@extends('layout.adminlayout')
@section('header')
<table class="table table-hover">
    <th>
        <a href="{{route('room.index')}}" class="btn btn-primary btn-lg" type="button">รายชื่อห้องประชุม </a>
    </th>
</table>


    @endsection
    @section('content')
<div class="container ">
<form method="post" action="{{url('room')}}">
    {{csrf_field()}}
        <div class="form-group col-md-4">
            <label for="date" class="text-info">ชื่อห้องประชุม</label><br>
            <input type="text" name="MR_name" id="MR_name" class="form-control">
        </div> 
        

        <div class=" text-center">
            <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-inbox"></i>เพิ่มข้อมูล</button>
            <button type="button" class="btn btn-danger btn-lg">ยกเลิก</button>
        </div>
     </form>
</div>

//show data
<div class="col-md-12">
    <br><br>
    <div Align="right">
                <table class="table  tabel-bordered  table-striped">
                    <tr>
                        <th>ชื่อห้องประชุม</th>
                    </tr>
                    @foreach($meeting_room as $row)
                    <tr>
                        <td>{{$row['username']}}</td>
                        <td>{{$row['name']}}</td>
                        <td>{{$row['OF_lname']}}</td>
                        <td>{{$row['OF_rank']}}</td>
                        <td>{{$row['OF_department']}}</td>
                        <td>{{$row['OF_institution']}}</td>
                        <td>{{$row['OF_tel']}}</td>
                        <td>{{$row['email']}}</td>
                        <td>{{$row['OF_status']}}</td>
                        <td>
                            <a href="{{action('OfficeController@edit',$row['id'])}}" class="btn btn-warning"><i class="fa fa-wrench"></i></a>
                        </td>
                        <td>
                            <form method="post" class="delete_form" action="{{action('OfficeController@destroy',$row['id'])}}">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
    </div>
</div>



@include('sweetalert::alert')
    @endsection
    
    
