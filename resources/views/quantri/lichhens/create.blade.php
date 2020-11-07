@extends('quantri.layout')
@section('head')
    <title>Thêm lịch hẹn mới</title>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm lịch hẹn mới</h1>
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
                <form action="{{route('quantri.lichhens.store')}}" method="POST">
                    <div class="form-group">
                        @csrf
                        <label>* Thời gian</label>
                        <input class="form-control" name="thoigian" value="{{old('thoigian', '')}}" placeholder="Nhập thời gian "  type="datetime-local"/>
                    </div>
                    <div class="form-group">
                        <label>* Địa điểm</label>
                        <input class="form-control" name="diadiem" value="{{old('diadiem', '')}}" placeholder="Nhập địa điểm " />
                    </div>
                    <div class="form-group">
                        <label>* Mô tả</label>
                        <textarea name="mota" id="mota" rows="10" cols="80">{{old('mota', '')}}</textarea>
                        <script>
                            // Replace the <textarea id="editor1"> with a CKEditor
                            // instance, using default configuration.
                            CKEDITOR.replace( 'mota' );
                        </script>
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label>Trạng thái lịch hẹn</label>--}}
{{--                        <select class="form-control" id="sel1" name="trangthai_id">--}}
{{--                            @foreach($trangthai_lichhens as $trangthai_lichhen)--}}
{{--                                <option value="{{$trangthai_lichhen->id}}">{{$trangthai_lichhen->ten}}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}
                    <div class="form-group">
                        <label>Nhân viên tham gia phỏng vấn</label>
                        <select class="js-example-basic-multiple form-control" name="nhanvien_ids[]" multiple="multiple">
                            @foreach($nhanviens as $nhanvien)
                                <option value="{{$nhanvien->id}}">{{$nhanvien->email}}, ({{$nhanvien->name}})</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <strong>Tên ứng viên:</strong> {{$hoso->ten}}, <strong>Ngày sinh:</strong> {{$hoso->ngaysinh->format('d/m/Y')}}<br> <strong>Email:</strong> {{$hoso->email}}
                        <input type="hidden" value="{{$hoso_id}}" name="hoso_id">
{{--                        <label>Hồ sơ</label>--}}
{{--                        <select class="form-control" id="sel1" name="hoso_id">--}}
{{--                            @foreach($hosos as $hoso)--}}
{{--                                <option value="{{$hoso->id}}"@if($hoso->id == $hoso_id)selected @endif>{{$hoso->ten}},{{$hoso->ngaysinh}}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
                    </div>
                    <button type="submit" class="btn btn-default">Thêm lịch hẹn mới</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection
