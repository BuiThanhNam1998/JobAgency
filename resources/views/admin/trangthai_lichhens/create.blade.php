@extends('quantri.layout')
@section('head')
    <title>Thêm trạng thái lịch hẹn mới</title>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm trạng thái lịch hẹn mới</h1>
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
                <form action="{{route('quantri.trangthai_lichhens.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>* Trạng thái lịch hẹn</label>
                        <input class="form-control" name="ten" placeholder="Nhập trạng thái lịch hẹn" />
                    </div>

                    <button type="submit" class="btn btn-default">Thêm trạng thái lịch hẹn mới</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    @endsection
