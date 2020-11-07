@extends('quantri.layout')
@section('head')
    <title>Danh sách trạng thái tin tuyển dụng</title>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách trạng thái tin tuyển dụng</h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>Trạng thái tin tuyển dụng</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                @foreach($trangthai_tintuyendungs as $trangthai_tintuyendung)
                    <tr class="odd gradeX" align="center">
                        <td>{{$trangthai_tintuyendung->ten}}</td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('quantri.trangthai_tintuyendungs.edit',$trangthai_tintuyendung->id)}}">Sửa</a></td>
                        <td class="center">
                            <form action="{{route('quantri.trangthai_tintuyendungs.destroy',$trangthai_tintuyendung->id)}}" method="POST">
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
