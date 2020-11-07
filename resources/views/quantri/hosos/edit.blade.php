@extends('quantri.layout')
@section('content')
@section('head')
    <title>Sửa hồ sơ</title>
@endsection
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa hồ sơ</h1>
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
                <form action="{{route('quantri.hosos.update',$hoso->id)}}" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label>Chọn file CV</label>
                            <input type="file" name="cv" id="cv"/>
                        </div>
                        <label>* Họ và tên</label>
                        <input class="form-control" name="ten" placeholder="Nhập họ và tên" value="{{$hoso->ten}}"/>
                    </div>
                    <div class="form-group">
                        <label>* Số chứng minh thư</label>
                        <input class="form-control" name="socmt" placeholder="Nhập số chứng minh thư" value="{{$hoso->socmt}}"/>
                    </div>
                    <div class="form-group">
                        <label>* Ngày cấp chứng minh thư</label>
                        <input class="form-control" name="ngaycapcmt" placeholder="Nhập ngày cấp chứng minh thư" value="{{$hoso->ngaycapcmt->format('Y-m-d')}}" type="date"/>
                    </div>
                    <div class="form-group">
                        <label>Nơi cấp chứng minh thư</label>
                        <select class="form-control" id="sel1" name="noicapcmt_id">
                            @foreach($thanhphos as $thanhpho)
                                <option value="{{$thanhpho->id}}" @if($thanhpho->id == $hoso->noicapcmt_id)selected @endif>{{$thanhpho->ten}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>* Ngày sinh</label>
                        <input class="form-control" name="ngaysinh" placeholder="Nhập ngày sinh" value="{{$hoso->ngaysinh->format('Y-m-d')}}" type="date"/>
                    </div>
                    <div class="form-group">
                        <label>Giới tính</label>
                        <select class="form-control" id="sel1" name="gioitinh" >
                            <option value="0" @if($hoso->gioitinh == 0)selected @endif>Nữ</option>
                            <option value="1" @if($hoso->gioitinh == 1)selected @endif>Nam</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Ngày có thể bắt đầu làm việc</label>
                        <input class="form-control" name="ngaycothebatdaulamviec" placeholder="Nhập ngày có thể bắt đầu làm việc" value="@if($hoso->ngaycothebatdaulamviec){{$hoso->ngaycothebatdaulamviec->format('d/m/Y')}}@endif" type="date" />
                    </div>
                    <div class="form-group">
                        <label>* Số điện thoại</label>
                        <input class="form-control" name="sodienthoai" placeholder="Nhập số điện thoại" value="{{$hoso->sodienthoai}}"/>
                    </div>
                    <div class="form-group">
                        <label>* Email</label>
                        <input class="form-control" name="email" placeholder="Nhập email" value="{{$hoso->email}}"/>
                    </div>
                    <div class="form-group">
                        <label>Tỉnh/ thành phố</label>
                        <select class="form-control" id="sel1" name="thanhpho_id">
                            @foreach($thanhphos as $thanhpho)
                                <option value="{{$thanhpho->id}}" @if($thanhpho->id == $hoso->thanhpho_id)selected @endif>{{$thanhpho->ten}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>* Quận/ huyện</label>
                        <input class="form-control" name="quanhuyen" placeholder="Nhập quận/ huyện" value="{{$hoso->quanhuyen}}"/>
                    </div>
                    <div class="form-group">
                        <label>* Địa chỉ chi tiết</label>
                        <input class="form-control" name="diachichitiet" placeholder="Nhập địa chỉ chi tiết" value="{{$hoso->diachichitiet}}"/>
                    </div>
                    <div class="form-group">
                        <label>* Học vấn</label>
                        <input class="form-control" name="hocvan" placeholder="Nhập học vấn" value="{{$hoso->hocvan}}"/>
                    </div>
                    <div class="form-group">
                        <label>* Kinh nghiệm làm việc</label>
                        <textarea name="kinhnghiemlamviec" id="kinhnghiemlamviec" rows="10" cols="80">{{$hoso->kinhnghiemlamviec}}</textarea>
                        <script>
                            CKEDITOR.replace( 'kinhnghiemlamviec' );
                        </script>
                    </div>
                    <div class="form-group">
                        <label>Ngôn ngữ</label>
                        <input class="form-control" name="ngonngu" placeholder="Nhập ngôn ngữ" value="{{$hoso->ngonngu}}"/>
                    </div>
                    <div class="form-group">
                        <label>Các giấy chứng nhận/ chứng chỉ khác</label>
                        <input class="form-control" name="cacgiaychungnhan_chungchi" placeholder="Nhập các giấy chứng nhận/ chứng chỉ khác" value="{{$hoso->cacgiaychungnhan_chungchi}}"/>
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label>Mã User</label>--}}
{{--                        <select class="form-control" id="sel1" name="ungvien_id">--}}
{{--                            @foreach($ungviens as $ungvien)--}}
{{--                                <option value="{{$ungvien->id}}"@if($ungvien->id == $hoso->ungvien_id)selected @endif>{{$ungvien->id}},{{$ungvien->name}}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label>Trạng thái hồ sơ</label>--}}
{{--                        <select class="form-control" id="sel1" name="trangthai_hoso_id">--}}
{{--                            @foreach($trangthai_hosos as $trangthai_hoso)--}}
{{--                                <option value="{{$trangthai_hoso->id}}"@if($trangthai_hoso->id == $hoso->trangthai_hoso_id)selected @endif>{{$trangthai_hoso->ten}}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}
                    <div class="form-group">
                        <label>Tiêu đề tin ứng tuyển</label>
                        <select class="form-control" id="sel1" name="tintuyendung_id">
                            @foreach($tintuyendungs as $tintuyendung)
                                <option value="{{$tintuyendung->id}}"@if($tintuyendung->id == $hoso->tintuyendung_id)selected @endif>{{$tintuyendung->tieude}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">Sửa hồ sơ</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection
