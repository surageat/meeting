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
            <table class="table  tabel-bordered  table-striped">
                <tr>
                    <th>หัวข้อเรื่องประชุม</th>
                    <th>วันที่</th>
                    <th>ครั้งที่</th>
                    <th>เวลา</th>
                    <th>สถานที่</th>
                    <th>ตารางการประชุม</th>
                    <th>ผู้ดูแลการประชุม</th>
                    <th>ห้องประชุม</th>
                    <th>เข้าร่วม</th>
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
                            <a href="{{route('invite.create')}}" class="btn btn-info">เชิญประชุม</i></a>
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