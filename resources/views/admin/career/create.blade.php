@extends('admin.layout')
@section('head')
    <title>Thêm ngành mới</title>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm ngành nghề hoặc lĩnh vực mới</h1>
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
                <form action="{{route('admin.career.insert')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>* Ngành nghề hoặc lĩnh vực</label>
                        <input class="form-control" name="name" placeholder="Nhập ngành nghề hoặc lĩnh vực" />
                    </div>

                    <button type="submit" class="btn btn-default">Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    @endsection
