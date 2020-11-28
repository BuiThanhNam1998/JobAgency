@extends('quantri.layout')
@section('head')
    <title>Sửa đánh giá</title>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa đánh giá</h1>
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
                <form action="{{route('quantri.danhgias.update',$danhgia->id)}}" method="POST">
                    <div class="form-group">
                        @csrf
                        @method('patch')
                        <label>Lịch hẹn</label>
                        {{$lichhen->thoigian}}
{{--                        <select class="form-control" id="sel1" name="lichhen_id">--}}
{{--                            @foreach($lichhens as $lichhen)--}}
{{--                                <option value="{{$lichhen->id}}"@if($lichhen->id == $danhgia->lichhen_id)selected @endif>{{$lichhen->thoigian}}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label>Người đánh giá</label>--}}
{{--                        <select class="form-control" id="sel1" name="user_id">--}}
{{--                            @foreach($users as $user)--}}
{{--                                <option value="{{$user->id}}"@if($user->id == $danhgia->user_id)selected @endif>{{$user->name}}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}
                    <div class="form-group">
                        <label>Trình độ ứng viên</label>
                        <select class="form-control" id="sel1" name="trinhdo_id">
                            @foreach($trinhdos as $trinhdo)
                                <option value="{{$trinhdo->id}}"@if($trinhdo->id == $danhgia->trinhdo_id)selected @endif>{{$trinhdo->ten}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>* Điểm chuyên môn của ứng viên</label>
                        <input class="form-control" name="diemchuyenmon" placeholder="Nhập điểm chuyên môn "value="{{$danhgia->diemchuyenmon}}" />
                    </div>
                    <div class="form-group">
                        <label>* Nhận xét</label>
                        <textarea name="nhanxet" id="nhanxet" rows="10" cols="80">{{$danhgia->nhanxet}}</textarea>
                        <script>
                            CKEDITOR.replace( 'nhanxet' );
                        </script>
                    </div>
                    <input type="hidden" name="back_url" value="{{$back_url}}">
                    <button type="submit" class="btn btn-default">Sửa đánh giá</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection
