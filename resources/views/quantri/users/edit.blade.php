@extends('quantri.layout')
@section('head')
    <title>Sửa người dùng</title>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa người dùng</h1>
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
                <form action="{{route('quantri.users.update',$user->id)}}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label>* User</label>
                        <input class="form-control" disabled name="name" placeholder="Nhập họ tên người dùng" value="{{$user->name}}"/>
                    </div>
                    <div class="form-group">
                        <label>* Email</label>
                        <input class="form-control" disabled name="email" placeholder="Nhập email người dùng" value="{{$user->email}}"/>
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label>* Mật khẩu</label>--}}
{{--                        <input type="password" class="form-control" disabled name="password" placeholder="Nhập mật khẩu người dùng" />--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label>* Nhập lại mật khẩu</label>--}}
{{--                        <input type="password" class="form-control" disabled name="password_confirmation" placeholder="Nhập mật khẩu người dùng" />--}}
{{--                    </div>--}}
                    <div class="form-group">
                        <label>* Vai trò</label>
                        <select class="form-control" id="sel1" name="vaitro_id">
                            @foreach($vaitros as $vaitro)
                                <option value="{{$vaitro->id}}" @if($vaitro->id == $user->vaitro_id)selected @endif>{{$vaitro->ten}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">Sửa người dùng</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection()
