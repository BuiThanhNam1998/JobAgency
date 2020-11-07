@extends('quantri.layout')
@section('head')
    <title>Cấu hình</title>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cấu hình</h1>
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
                <form action="{{route('quantri.settings.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>* Thời gian gửi mail mỗi ngày</label>
                        <input type="time" class="form-control" value="{{data_get($settings, 'send_mail_every_day', '')}}" name="send_mail_every_day" placeholder="Nhập thời gian gửi mail mỗi ngày" />
                    </div>

                    <button type="submit" class="btn btn-default">Lưu</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection
