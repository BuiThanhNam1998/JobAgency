@extends('quantri.layout')
@section('head')
    <title>Thêm người dùng mới</title>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm người dùng mới</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <!-- /.col-lg-12 -->
            <h4 style="color: #ff8080">* Là các thông tin bắt buộc bạn phải điền</h4>
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{route('quantri.users.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>* User</label>
                        <input class="form-control" name="name" placeholder="Nhập họ tên người dùng" />
                    </div>
                    <div class="form-group">
                        <label>* Email</label>
                        <input class="form-control" name="email" placeholder="Nhập email người dùng" />
                    </div>
                    <div class="form-group">
                        <label>* Mật khẩu</label>
                        <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu người dùng" />
                    </div>
                    <div class="form-group">
                        <label>* Xác nhận mật khẩu</label>
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Nhập mật khẩu người dùng" />
                    </div>
                    <div class="form-group">
                        <label>Vai trò</label>
                        <select class="form-control" id="sel1" name="vaitro_id">
                            @foreach($vaitros as $vaitro)
                                <option value="{{$vaitro->id}}">{{$vaitro->ten}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">Thêm người dùng mới</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    @endsection()
