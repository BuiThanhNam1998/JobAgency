@extends('admin.layout')
@section('head')
    <title>Danh sách người dùng</title>
@endsection
@section('content')
    <div class="container-fluid">
        <h3>TÌm kiếm:</h3>
        <form action="{{route('admin.user.list')}}" method="get">
            <div class="form-group">
                <label >Tên:</label>
                <input type="text" class="form-control" name="filter_name" value="{{ $params['filter_name'] }}" placeholder="Nhập tên cần tìm" style="width: 500px">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="filter_mail" value="{{ $params['filter_mail'] }}" placeholder="Nhập email cần tìm" style="width: 500px">
            </div>
            <div class="form-group">
                <label for="sel1"> Vai trò:</label><br>
                <select class="form-control" name="role_id" style="width: 500px">
                    <option value="">Tất cả</option>
                    @foreach($roles as $role)
                        <option value="{{$role->id}}"
                                @if($role->id == $params['role_id']) {{ 'selected' }} @endif>{{$role->name}}
                        </option>
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
                    <th>ID</th>
                    <th>Họ tên</th>
                    <th>Email</th>
                    <th>Vai trò</th>
                    <th>Sửa</th>
                    <th>Block</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr class="odd gradeX" align="center">
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role->name}}</td>
                        <td class="center">
                            <i class="fa fa-pencil fa-fw"></i>
                            <a href="{{route('admin.user.detail',$user->id)}}">Sửa</a>
                        </td>
                        <td class="center">
                            <button type="button" class="status-user" data-id="{{$user->id}}">
                                {{$user->status ? 'Active' : 'Block'}}
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <script>
        $(document).ready(function () {
            $('.status-user').click(function () {
                let userId = $(this).data("id")
                $.ajax({
                    method: "POST",
                    context: $(this),
                    url: "{{route('admin.user.change.status')}}",
                    data: {
                        _token: "{{ csrf_token() }}",
                        user_id: userId,
                    }
                }).done(function(data) {
                    let icon = data.code == '200' ? 'success' : 'warning';
                    $.toast({
                        text: data.message,
                        icon: icon,
                        showHideTransition: 'fade',
                        allowToastClose: true,
                        hideAfter: 3000,
                        stack: 5,
                        position: 'bottom-right',
                        textAlign: 'left',
                        loader: false,
                    });
                    let $statusText = (data.status == 1) ? 'Active' : 'Block';
                    $(this).text($statusText);
                });
            })
        })
    </script>
@endsection
