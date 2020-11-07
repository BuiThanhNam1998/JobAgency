@extends('quantri.layout')
@section('head')
    <title>Thêm hồ sơ mới</title>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Nộp hồ sơ {{$tintuyendung->tieude}}</h1>
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
                <form action="{{route('ungvien.hosos.store')}}" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>* CV</label>
                        <input type="file" name="cv" id="cv"/>
                    </div>
                    <div class="form-group">
                        @csrf
                        <label>* Họ và tên</label>
                        <input class="form-control" name="ten" value="{{old('ten', $hoso->ten)}}" placeholder="Nhập họ và tên"  />
                    </div>
                    <div class="form-group">
                        <label>* Số chứng minh thư</label>
                        <input class="form-control" name="socmt" value="{{old('socmt', $hoso->socmt)}}" placeholder="Nhập số chứng minh thư" />
                    </div>
                    <div class="form-group">
                        <label>* Ngày cấp chứng minh thư</label>
                        <input class="form-control" name="ngaycapcmt" value="{{old('ngaycapcmt', str_replace(' 00:00:00', '', $hoso->ngaycapcmt))}}" placeholder="Nhập ngày cấp chứng minh thư" type="date" />
                    </div>
                    <div class="form-group">
                        <label>Nơi cấp chứng minh thư</label>
                        <select class="form-control" id="sel1" name="noicapcmt_id">
                            @foreach($thanhphos as $thanhpho)

                                <option value="{{$thanhpho->id}}" @if($thanhpho->id == old('noicapcmt_id', '')) selected @endif @if($thanhpho->id == $hoso->noicapcmt_id)selected @endif>{{$thanhpho->ten}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>* Ngày sinh</label>
                        <input class="form-control" name="ngaysinh" value="{{old('ngaysinh', str_replace(' 00:00:00', '', $hoso->ngaysinh))}}" placeholder="Nhập ngày sinh" type="date" />
                    </div>
                    <div class="form-group">
                        <label>Giới tính</label>
                        <select class="form-control" id="sel1" name="gioitinh">
                            <option value="0" @if(0 == old('gioitinh', $hoso->gioitinh))selected @endif>Nữ</option>
                            <option value="1" @if(1 == old('gioitinh', $hoso->gioitinh))selected @endif>Nam</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Ngày có thể bắt đầu làm việc</label>
                        <input class="form-control" name="ngaycothebatdaulamviec" value="{{old('ngaycothebatdaulamviec', '')}}" placeholder="Nhập ngày có thể bắt đầu làm việc" type="date" />
                    </div>
                    <div class="form-group">
                        <label>* Số điện thoại</label>
                        <input class="form-control" name="sodienthoai" value="{{old('sodienthoai', $hoso->sodienthoai)}}" placeholder="Nhập số điện thoại" />
                    </div>
                    <div class="form-group">
                        <label>* Email</label>
                        <input class="form-control" name="email" value="{{old('email', $hoso->email)}}" placeholder="Nhập email" />
                    </div>
                    <div class="form-group">
                        <label>Tỉnh/ thành phố</label>
                        <select class="form-control" id="sel1" name="thanhpho_id">
                            @foreach($thanhphos as $thanhpho)
                                <option value="{{$thanhpho->id}}" @if($thanhpho->id == old('thanhpho_id', '')) selected @endif @if($thanhpho->id == $hoso->thanhpho_id)selected @endif>{{$thanhpho->ten}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>* Quận/ huyện</label>
                        <input class="form-control" name="quanhuyen" value="{{old('quanhuyen', $hoso->quanhuyen)}}" placeholder="Nhập quận/ huyện" />
                    </div>
                    <div class="form-group">
                        <label>* Địa chỉ chi tiết</label>
                        <input class="form-control" name="diachichitiet" value="{{old('diachichitiet', $hoso->diachichitiet)}}" placeholder="Nhập địa chỉ chi tiết"  />
                    </div>
                    <div class="form-group">
                        <label>* Học vấn</label>
                        <input class="form-control" name="hocvan" value="{{old('hocvan', $hoso->hocvan)}}" placeholder="Nhập học vấn"  />
                    </div>
                    <div class="form-group">
                        <label>* Kinh nghiệm làm việc</label>
                        <textarea name="kinhnghiemlamviec" id="kinhnghiemlamviec" rows="10" cols="80">{{old('kinhnghiemlamviec', $hoso->kinhnghiemlamviec)}}</textarea>
                        <script>
                            CKEDITOR.replace( 'kinhnghiemlamviec' );
                        </script>
                    </div>
                    <div class="form-group">
                        <label>Ngôn ngữ</label>
                        <input class="form-control" name="ngonngu" value="{{old('ngonngu', $hoso->ngonngu)}}" placeholder="Nhập ngôn ngữ" />
                    </div>
                    <div class="form-group">
                        <label>Các giấy chứng nhận/ chứng chỉ khác</label>
                        <input class="form-control" name="cacgiaychungnhan_chungchi" value="{{old('cacgiaychungnhan_chungchi', $hoso->cacgiaychungnhan_chungchi)}}" placeholder="Nhập các giấy chứng nhận/ chứng chỉ khác" />
                    </div>

                    <input type="hidden" name="tintuyendung_id" value="{{$tintuyendung->id}}">
                    <button type="submit" class="btn btn-default">Thêm hồ sơ mới</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection
