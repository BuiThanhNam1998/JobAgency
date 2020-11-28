@extends('quantri.layout')
@section('head')
    <title>Danh sách trạng thái lịch hẹn</title>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách trạng thái lịch hẹn</h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>Trạng thái lịch hẹn</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                @foreach($trangthai_lichhens as $trangthai_lichhen)
                    <tr class="odd gradeX" align="center">
                        <td>{{$trangthai_lichhen->ten}}</td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('quantri.trangthai_lichhens.edit',$trangthai_lichhen->id)}}">Sửa</a></td>
                        <td class="center">
                            <form action="{{route('quantri.trangthai_lichhens.destroy',$trangthai_lichhen->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit">
                                    <i class="fa fa-trash-o  fa-fw"></i>Xóa
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    @endsection
