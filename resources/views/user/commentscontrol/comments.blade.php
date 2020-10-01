@extends('layout.homelayout')
@section('header')
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor mb-0 mt-0">ความคิดเห็นที่บันทึก</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">หน้าหลัก</a></li>
            <li class="breadcrumb-item ">ความคิดเห็นที่บันทึก</li>
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
                    <th>id</th>
                    <th>รหัสการประชุม</th>
                    <th>รหัสบุคลากร</th>
                    <th>ความคิดเห็น</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>
                @foreach($comments as $row)
                <tr>
                    <td>{{ $row->id}}</td>
                    <td>{{ $row->Meet_heading}}</td>
                    <td>{{ $row->name}}</td>
                    <td>{{ $row->C_meet}}</td>

                    <td>
                        <a href="{{action('CommentsController@edit', $row->id) }}" class="btn btn-warning"><i class="fa fa-wrench"></i></a>
                    </td>
                    <td>
                        <form method="post" class="delete_form" action="{{ action('CommentsController@destroy', $row->id) }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE"  class="delete_form">
                            <button class="btn btn-danger " type="submit"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            {!! $comments->links() !!}
        </div>
    </div>
</div>
@endsection

