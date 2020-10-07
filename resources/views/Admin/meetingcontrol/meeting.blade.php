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
        <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-primary" href="{{ route('invite.index')}}">เชิญเข้าร่วมประชุม</a>
        </div>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search " title="Type in a name" >
        <br><br>
        <table  class="table table-striped table-bordered" style="width:100%"  id="myTable">
                <tr>
                    <th>หัวข้อเรื่องประชุม</th>
                    <th>วันที่</th>
                    <th>ครั้งที่</th>
                    <th>เวลา</th>
                    <th>สถานที่</th>
                    <th>ตารางการประชุม</th>
                    <th>ผู้ดูแลการประชุม</th>
                    <th>ห้องประชุม</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>
                <tbody>
                    @foreach($Meeting as $r)
                    <tr>
                        <td>{{ $r->Meet_heading}}</td>
                        <td>{{ $r->Meet_date}}</td>
                        <td>{{ $r->Meet_no}}</td>
                        <td>{{ $r->Meet_time}}</td>
                        <td>{{ $r->Meet_place}}</td>
                        <td>{{ $r->Meet_table}}</td>
                        <td>{{ $r->name}}</td>
                        <td>{{ $r->MR_name}}</td>

                        <td>
                            <a href="{{action('MeetingController@edit',$r->id )}}" class="btn btn-warning"><i class="fa fa-wrench"></i></a>
                        </td>
                        <td>
                            <form method="post" class="delete_form" action="{{ action('MeetingController@destroy',$r->id ) }}" onclick="return confirm('ต้องการลบข้อมูลใช่ หรือ ไม่')">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
            {!!$Meeting->links() !!}
        </div>
    </div>
</div>
@endsection