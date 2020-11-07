@extends('quantri.layout')
@section('head')
    <title>Danh sách người dùng</title>
@endsection
@section('content')
    <div class="container-fluid">
        <h3>TÌm kiếm:</h3>
        <form action="{{route('quantri.users.index')}}" method="get">
            <div class="form-group">
                <label >Tên:</label>
                <input type="text" class="form-control" name="filter_name" value="{{$filter_name}}" placeholder="Nhập tên cần tìm" style="width: 500px">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="filter_mail" value="{{$filter_mail}}" placeholder="Nhập email cần tìm" style="width: 500px">
            </div>
            <div class="form-group">
                <label for="sel1"> Vai trò:</label><br>
                <select class="form-control" name="filter_vaitro" style="width: 500px">
                    <option value="">Tất cả</option>
                    @foreach($vaitros as $vaitro)
                        <option value="{{$vaitro->id}}" @if($vaitro->id == $filter_vaitro) selected @endif>{{$vaitro->ten}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit">Tìm kiếm</button>
        </form>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách người dùng</h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>Họ tên</th>
                    <th>Email</th>
                    <th>Vai trò</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr class="odd gradeX" align="center">
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->vaitro->ten}}</td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('quantri.users.edit',$user->id)}}">Sửa</a></td>
                        <td class="center">
                            <form action="{{route('quantri.users.destroy',$user->id)}}" method="POST">
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
