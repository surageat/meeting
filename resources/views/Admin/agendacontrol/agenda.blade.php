@extends('layout.adminlayout')


@section('script')
<script>
    $(document).ready(function() {

        $(document).on('click', '.page-link', function(event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page);
        });

        function fetch_data(page) {
            var _token = $("input[name=_token]").val();
            $.ajax({
                url: "{{ route('agenda.index') }}",
                method: "POST",
                data: {data,
                    _token: _token,
                    page: page
                },
                success: function(data) {
                    $('#table_data').html(data);
                }
            });
        }

    });
</script>

@endsection
@section('header')
<div class="row page-titles">
    <div class="col-md-6 col-8 align-self-center">
        <h3 class="text-themecolor mb-0 mt-0">รายชื่อวาระการประชุม</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">หน้าหลัก</a></li>
            <li class="breadcrumb-item active">รายชื่อวาระการประชุม</li>
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
                    <th>ชื่อวาระการประชุม</th>
                    <th>รายละเอียดวาระการประชุม</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>

                @foreach($meeting_agendas as $row)
                <tr>
                    <td>{{ $row->id}}</td>
                    <td>{{ $row->MA_agenda}}</td>
                    <td>{{ $row->MA_details}}</td>

                    <td>
                        <a href="{{action('AgendasController@edit', $row->id) }}" class="btn btn-warning"><i class="fa fa-wrench"></i></a>
                    </td>
                    <td>
                        <form method="post" class="delete_form" action="{{ action('AgendasController@destroy', $row->id) }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>

                @endforeach
            </table>
            {!! $meeting_agendas ->links() !!}
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection