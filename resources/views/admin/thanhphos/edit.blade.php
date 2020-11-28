@extends('quantri.layout')
@section('head')
    <title>Sửa thành phố</title>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa tỉnh/ thành phố</h1>
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
                <form action="{{route('quantri.thanhphos.update', $thanhpho->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label>* Tên tỉnh/ thành phố</label>
                        <input class="form-control" name="ten" placeholder="Nhập tên tỉnh/ thành phố" value="{{$thanhpho->ten}}"/>
                    </div>

                    <button type="submit" class="btn btn-default">Sửa tỉnh/ thành phố</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection
