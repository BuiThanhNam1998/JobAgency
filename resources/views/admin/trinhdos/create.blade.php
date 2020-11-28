@extends('quantri.layout')
@section('head')
    <title>Thêm trình độ mới</title>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm trình độ mới</h1>
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
                <form action="{{route('quantri.trinhdos.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>* Trình độ</label>
                        <input class="form-control" name="ten" placeholder="Nhập trình độ" />
                    </div>

                    <button type="submit" class="btn btn-default">Thêm trình độ mới</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection
