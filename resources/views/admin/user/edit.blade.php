@extends('admin.layout')
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
                <form action="{{route('admin.user.update', $user->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>* User</label>
                        <input class="form-control" disabled name="name" placeholder="Nhập họ tên người dùng" value="{{$user->name}}"/>
                    </div>
                    <div class="form-group">
                        <label>* Email</label>
                        <input class="form-control" disabled name="email" placeholder="Nhập email người dùng" value="{{$user->email}}"/>
                    </div>
                    <div class="form-group">
                        <label>* Vai trò</label>
                        <select class="form-control" id="sel1" name="role_id">
                            @foreach($roles as $role)
                                <option value="{{$role->id}}"
                                    @if($role->id == $user->role->id) {{ 'selected' }} @endif>{{$role->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">Save</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection()
