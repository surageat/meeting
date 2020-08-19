@extends('layout.adminlayout')
@section('header')
    <div class="row page-titles"> 
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="text-themecolor mb-0 mt-0">เชิญประชุม</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">หน้าหลัก</a></li>
                    <li class="breadcrumb-item active">เชิญการประชุม</li>
                 </ol>
        </div>
    </div>
    @endsection


@section('content')
<div class="container">
    <div class="col-md-12">
        <br><br>
    <div Align="right"><a href="{{route('userexternal.index')}}" class="btu-btu-primary"><button type="button" class="btn btn-primary col-md-1">เพิ่ม</button><a><br/><br/>
    <table  class="table  tabel-bordered  table-striped">
        <tr> 
            <th>id</th>
            <th>user</th>
            <th>pass</th>
            <th>name</th>
            <th>tel</th>
            <th>institution</th>
            <th>edit</th>
            <th>delete</th>
        </tr> 
        @foreach($External_personnel as $row)  
        <tr>
            <td>{{$row['EP_id']}}</td>
            <td>{{$row['EP_user']}}</td>
            <td>{{$row['EP_pass']}}</td>
            <td>{{$row['EP_name']}}</td>
            <td>{{$row['EP_tel']}}</td>
            <td>{{$row['EP_institution']}}</td>
            <td><a action="{{action('ExternalController@destroy',$row['EP_id'])}}" class="btn btn-warning"><i class="fa fa-wrench"></i> Edit</a></td>
            <td>
                <form method="post" class="delete_form" action="{{action('ExternalController@edit',$row['EP_id'])}}" >
                    {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> Delete</button>
                </form>
          </td>
        </tr>
        @endforeach
    </table>
</div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $('.delete_form').on('submit',function(){
        if(confirm("ต้องการลบข้อมูลหรือไม่ ?")){
            return true;
        }else{
            return false;
        }
    });
});

</script>
@include('sweetalert::alert')
@endsection

    

    