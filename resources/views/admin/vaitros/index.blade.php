@extends('quantri.layout')
@section('head')
    <title>Danh sách vai trò</title>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách vai trò</h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>Tên vai trò hoặc quyền</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                @foreach($vaitros as $vaitro)
                    <tr class="odd gradeX" align="center">
                        <td>{{$vaitro->ten}}</td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('quantri.vaitros.edit',$vaitro->id)}}">Sửa</a></td>
                        <td class="center"><form action="{{route('quantri.vaitros.destroy',$vaitro->id)}}"method ="post">
                                @csrf
                                @method('delete')
                                <button type="submit"><i class="fa fa-trash-o  fa-fw"></i>Xóa</button>
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
