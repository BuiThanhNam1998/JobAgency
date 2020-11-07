@extends('quantri.layout')
@section('head')
    <title>Danh sách trạng thái hồ sơ</title>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách trạng thái hồ sơ</h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>Trạng thái hồ sơ</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                @foreach($trangthai_hosos as $trangthai_hoso)
                    <tr class="odd gradeX" align="center">
                        <td>{{$trangthai_hoso->ten}}</td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('quantri.trangthai_hosos.edit',$trangthai_hoso->id)}}">Sửa</a></td>
                        <td class="center">
                            <form action="{{route('quantri.trangthai_hosos.destroy',$trangthai_hoso->id)}}" method="POST">
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
