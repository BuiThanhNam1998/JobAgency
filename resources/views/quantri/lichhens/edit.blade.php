@extends('quantri.layout')
@section('head')
    <title>Sửa lịch hẹn</title>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa lịch hẹn</h1>
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
                <form action="{{route('quantri.lichhens.update',$lichhen->id)}}" method="POST">
                    <div class="form-group">
                        @csrf
                        @method('patch')
                        <label>* Thời gian</label>
                        <input class="form-control" name="thoigian" placeholder="Nhập thời gian "value="{{str_replace(' ', 'T', $lichhen->thoigian->format('Y-m-d H:i:s'))}}"  type="datetime-local"/>
                    </div>
                    <div class="form-group">
                        <label>* Địa điểm</label>
                        <input class="form-control" name="diadiem" placeholder="Nhập địa điểm " value="{{$lichhen->diadiem}}" />
                    </div>
                    <div class="form-group">
                        <label>* Mô tả</label>
                        <textarea name="mota" id="mota" rows="10" cols="80">{{$lichhen->mota}}</textarea>
                        <script>
                            CKEDITOR.replace( 'mota' );
                        </script>
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label>Trạng thái lịch hẹn</label>--}}
{{--                        <select class="form-control" id="sel1" name="trangthai_id">--}}
{{--                            @foreach($trangthai_lichhens as $trangthai_lichhen)--}}
{{--                                <option value="{{$trangthai_lichhen->id}}"@if($trangthai_lichhen->id == $lichhen->trangthai_id)selected @endif>{{$trangthai_lichhen->ten}}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}
                    <div class="form-group">
                        <label>Nhân viên tham gia phỏng vấn</label>
                        <select class="js-example-basic-multiple form-control" name="nhanvien_ids[]" multiple="multiple">
                            @foreach($nhanviens as $nhanvien)
                                <option value="{{$nhanvien->id}}" @if(in_array($nhanvien->id, $nhanvien_ids))selected @endif>{{$nhanvien->email}}, ({{$nhanvien->name}})</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Hồ sơ </label><br>
                        <strong>Tên ứng viên:</strong> {{$lichhen->hoso->ten}}, <strong>Ngày sinh:</strong> {{$lichhen->hoso->ngaysinh->format('d/m/Y')}}<br> <strong>Email:</strong> {{$lichhen->hoso->email}}
{{--                        <select class="form-control" id="sel1" name="hoso_id">--}}
{{--                            @foreach($hosos as $hoso)--}}
{{--                                <option value="{{$hoso->id}}"@if($hoso->id == $lichhen->hoso_id)selected @endif>{{$hoso->id}},{{$hoso->ten}},{{$hoso->ngaysinh}}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
                    </div>

                    <button type="submit" class="btn btn-default">Sửa lịch hẹn</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection
