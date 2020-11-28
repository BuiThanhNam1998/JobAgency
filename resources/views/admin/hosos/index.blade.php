@extends('quantri.layout')
@section('head')
    <title>Danh sách hồ sơ</title>
@endsection
@section('content')
<div class="container-fluid">
    <h3>Tìm kiếm:</h3>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('quantri.hosos.index')}}" method="get">
        <div class="form-group">
            <label >Tên:</label>
            <input type="text" class="form-control" name="filter_name" value="{{$filter_name}}" placeholder="Nhập tên ứng viên cần tìm" style="width: 500px">
        </div>
        <div class="form-group">
            <label>Từ ngày:</label>
            <input type="date" class="form-control" name="filter_from_date" value="{{$filter_from_date}}" placeholder="Nhập ngày" style="width: 500px">
        </div>
        <div class="form-group">
            <label>Đến ngày:</label>
            <input type="date" class="form-control" name="filter_to_date" value="{{$filter_to_date}}" placeholder="Nhập ngày" style="width: 500px">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="filter_mail" value="{{$filter_mail}}" placeholder="Nhập email ứng viên cần tìm" style="width: 500px">
        </div>
        <div class="form-group">
            <label for="sel1"> Trạng thái hồ sơ:</label><br>
            <select class="form-control"  name="filter_trang_thai_ho_so_id" style="width: 500px">
                <option value="">Tất cả</option>
                @foreach($trangthaihosos as $trangthaihoso)
                    <option value="{{$trangthaihoso->id}}" @if($trangthaihoso->id == $filter_trang_thai_ho_so_id) selected @endif>{{$trangthaihoso->ten}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="sel1">Tiêu đề tin tuyển dụng:</label><br>
            <select class="form-control" name="filter_tieude"  style="width: 500px">
                <option value="">Tất cả</option>
                @foreach($tintuyendungs as $tintuyendung)
                    <option value="{{$tintuyendung->id}}" @if($tintuyendung->id == $filter_tieude) selected @endif>{{$tintuyendung->tieude}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="sel1">Ngành tuyển dụng:</label><br>
            <select class="form-control" name="filter_nganh_id"  style="width: 500px">
                <option value="">Tất cả</option>
                @foreach($nganhs as $nganh)
                    <option value="{{$nganh->id}}" @if($nganh->id == $filter_nganh_id) selected @endif>{{$nganh->ten}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit">Tìm kiếm</button>
    </form>
    <script !src="">
        $(document).ready(function () {
            $("select[name=filter_tieude]").change(function () {
                var value = $("select[name=filter_tieude]").val();
                if(value == "") {
                    return;
                }
                $("select[name=filter_nganh_id]").val("");
            });
            $("select[name=filter_nganh_id]").change(function () {
                var value = $("select[name=filter_nganh_id]").val();
                if(value == "") {
                    return;
                }
                $("select[name=filter_tieude]").val("");
            });
        });
    </script>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách hồ sơ</h1>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example" style="width: 1200px">
                    <thead>
                    <tr align="center">
                        <th style="width: 70px">Họ tên</th>
                        <th style="width: 20px">CV</th>
{{--                        <th>Ngày có thể bắt đầu làm việc</th>--}}
                        <th style="width: 30px">Số điện thoại</th>
                        <th style="width: 40px">Email</th>
                        <th style="width: 55px">Trạng thái hồ sơ</th>
                        <th style="width: 80px">Tiêu đề</th>
{{--                        <th>Ngành ứng tuyển</th>--}}
                        <th style="width: 30px">Chi tiết hồ sơ</th>
                        <th style="width: 40px">Quản lý CV</th>
                        <th style="width: 30px">Đặt lịch</th>
                        <th>Ngày nộp hồ sơ</th>
                        <th style="width: 30px">Sửa</th>
                        <th style="width: 30px">Xóa</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($hosos as $hoso)
                        <tr class="odd gradeX" align="center">
                            <td style="width: 70px">{{$hoso->ten}}</td>
                            <td style="width: 20px">
                                @if($hoso->cv)
                                    <a href="{{asset("image/cv/{$hoso->cv}")}}" target="_blank">CV</a>
                                @endif
                            </td>
{{--                            <td>--}}
{{--                                @if($hoso->ngaycothebatdaulamviec)--}}
{{--                                    {{$hoso->ngaycothebatdaulamviec->format('d/m/Y')}}--}}
{{--                                    @endif--}}
{{--                            </td>--}}
                            <td style="width: 30px">{{$hoso->sodienthoai}}</td>
                            <td style="width: 40px">{{$hoso->email}}</td>
                            <td style="width: 55px">{{$hoso->trangthai_hoso->ten}}</td>
                            <td style="width: 80px">{{$hoso->tintuyendung->tieude}}</td>
{{--                            <td>{{$hoso->tintuyendung->nganh->ten}}</td>--}}
                            <td style="width: 30px"><!-- Trigger the modal with a button -->
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal_hoso_{{$hoso->id}}">Nhấn để mở</button>

                                <!-- Modal -->
                                <div id="myModal_hoso_{{$hoso->id}}" class="modal fade" role="dialog">
                                    <div class="modal-dialog modal-lg">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Chi tiết hồ sơ ứng viên</h4>
                                            </div>
                                            <div class="modal-body text-left">
{{--                                                <p>Some text in the modal.</p>--}}
                                                <b>Họ tên: </b>{{$hoso->ten}} <br>
                                                <b>Số chứng minh thư: </b>{{$hoso->socmt}} <br>
                                                <b>Ngày cấp chứng minh thư: </b>{{$hoso->ngaycapcmt->format('d/m/Y')}} <br>
                                                <b>Nơi cấp chứng minh thư: </b>{{$hoso->noicapcmt->ten}} <br>
                                                <b>Ngày sinh: </b>{{$hoso->ngaysinh->format('d/m/Y')}} <br>
                                                <b>Giới tính: </b>@if($hoso->gioitinh) Nam @else Nữ @endif <br>
                                                <b>Ngày có thể bắt đầu làm việc: </b>@if($hoso->ngaycothebatdaulamviec){{$hoso->ngaycothebatdaulamviec->format('d/m/Y')}}@endif <br>
                                                <b>Số điện thoại: </b>{{$hoso->sodienthoai}} <br>
                                                <b>Email: </b>{{$hoso->email}} <br>
                                                <b>Tỉnh/ thành phố: </b>{{$hoso->thanhpho->ten}} <br>
                                                <b>Quận/ huyện: </b>{{$hoso->quanhuyen}} <br>
                                                <b>Địa chỉ chi tiết: </b>{{$hoso->diachichitiet}} <br>
                                                <b>Học vấn: </b>{{$hoso->hocvan}} <br>
                                                <b>Kinh nghiệm làm việc: </b>{!!$hoso->kinhnghiemlamviec!!} <br>
                                                <b>Ngôn ngữ: </b>{{$hoso->ngonngu}} <br>
                                                <b>Các giấy chứng chỉ/ chứng nhận khác: </b>{{$hoso->cacgiaychungnhan_chungchi}} <br>
                                                <b>Trạng thái hồ sơ: </b>{{$hoso->trangthai_hoso->ten}} <br>
                                                <b>Tiêu đề: </b>{{$hoso->tintuyendung->tieude}} <br>
                                                <b>Ngành ứng tuyển: </b>{{$hoso->tintuyendung->nganh->ten}} <br>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div></td>
                            <td style="width: 40px">
                                @if($hoso->trangthai_hoso->ten == 'Chờ phê duyệt CV')
                                <form action="{{route('quantri.hosos.update', $hoso->id)}}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <input type="hidden" value="{{$hoso->cv}}" name="cv">
                                    <input type="hidden" value="{{$hoso->ten}}" name="ten">
                                    <input type="hidden" value="{{$hoso->socmt}}" name="socmt">
                                    <input type="hidden" value="{{$hoso->ngaycapcmt}}" name="ngaycapcmt">
                                    <input type="hidden" value="{{$hoso->noicapcmt_id}}" name="noicapcmt_id">
                                    <input type="hidden" value="{{$hoso->ten}}" name="ten">
                                    <input type="hidden" value="{{$hoso->ngaysinh}}" name="ngaysinh">
                                    <input type="hidden" value="{{$hoso->gioitinh}}" name="gioitinh">
                                    <input type="hidden" value="{{$hoso->ngaycothebatdaulamviec}}" name="ngaycothebatdaulamviec">
                                    <input type="hidden" value="{{$hoso->sodienthoai}}" name="sodienthoai">
                                    <input type="hidden" value="{{$hoso->email}}" name="email">
                                    <input type="hidden" value="{{$hoso->thanhpho_id}}" name="thanhpho_id">
                                    <input type="hidden" value="{{$hoso->quanhuyen}}" name="quanhuyen">
                                    <input type="hidden" value="{{$hoso->diachichitiet}}" name="diachichitiet">
                                    <input type="hidden" value="{{$hoso->hocvan}}" name="hocvan">
                                    <input type="hidden" value="{{$hoso->kinhnghiemlamviec}}" name="kinhnghiemlamviec">
                                    <input type="hidden" value="{{$hoso->ngonngu}}" name="ngonngu">
                                    <input type="hidden" value="{{$hoso->cacgiaychungnhan_chungchi}}" name="cacgiaychungnhan_chungchi">
                                    <input type="hidden" value="{{$hoso->ungvien_id}}" name="ungvien_id">
                                    <input type="hidden" value="{{$trangthaihoso_plucks['Được chấp nhận CV']}}" name="trangthai_hoso_id">
                                    <input type="hidden" value="{{$hoso->tintuyendung_id}}" name="tintuyendung_id">
                                    <button type="submit" class="btn btn-success">Chấp nhận CV</button><br><br>
                                </form>
                                <form action="{{route('quantri.hosos.update', $hoso->id)}}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <input type="hidden" value="{{$hoso->cv}}" name="cv">
                                    <input type="hidden" value="{{$hoso->ten}}" name="ten">
                                    <input type="hidden" value="{{$hoso->socmt}}" name="socmt">
                                    <input type="hidden" value="{{$hoso->ngaycapcmt}}" name="ngaycapcmt">
                                    <input type="hidden" value="{{$hoso->noicapcmt_id}}" name="noicapcmt_id">
                                    <input type="hidden" value="{{$hoso->ten}}" name="ten">
                                    <input type="hidden" value="{{$hoso->ngaysinh}}" name="ngaysinh">
                                    <input type="hidden" value="{{$hoso->gioitinh}}" name="gioitinh">
                                    <input type="hidden" value="{{$hoso->ngaycothebatdaulamviec}}" name="ngaycothebatdaulamviec">
                                    <input type="hidden" value="{{$hoso->sodienthoai}}" name="sodienthoai">
                                    <input type="hidden" value="{{$hoso->email}}" name="email">
                                    <input type="hidden" value="{{$hoso->thanhpho_id}}" name="thanhpho_id">
                                    <input type="hidden" value="{{$hoso->quanhuyen}}" name="quanhuyen">
                                    <input type="hidden" value="{{$hoso->diachichitiet}}" name="diachichitiet">
                                    <input type="hidden" value="{{$hoso->hocvan}}" name="hocvan">
                                    <input type="hidden" value="{{$hoso->kinhnghiemlamviec}}" name="kinhnghiemlamviec">
                                    <input type="hidden" value="{{$hoso->ngonngu}}" name="ngonngu">
                                    <input type="hidden" value="{{$hoso->cacgiaychungnhan_chungchi}}" name="cacgiaychungnhan_chungchi">
                                    <input type="hidden" value="{{$hoso->ungvien_id}}" name="ungvien_id">
                                    <input type="hidden" value="{{$trangthaihoso_plucks['Bị từ chối CV']}}" name="trangthai_hoso_id">
                                    <input type="hidden" value="{{$hoso->tintuyendung_id}}" name="tintuyendung_id">
                                    <button type="submit"class="btn btn-danger">Từ chối CV</button>
                                </form>
                                @endif
                            </td>
                            <td style="width: 30px">
                                @if($hoso->trangthai_hoso->ten == 'Được chấp nhận CV' || $hoso->trangthai_hoso->ten == 'Không tham gia phỏng vấn' || $hoso->trangthai_hoso->ten == 'Chờ tiếp tục phỏng vấn')
                                    <a href="{{route('quantri.lichhens.create', ['hoso_id' => $hoso->id])}}" class="btn btn-success">Đặt Lịch</a><br><br>
                                @endif

                                    @if($hoso->trangthai_hoso->ten == 'Được chấp nhận CV')
                                        <form action="{{route('quantri.hosos.update', $hoso->id)}}" method="POST">
                                            @method('PUT')
                                            @csrf
                                            <input type="hidden" value="{{$hoso->cv}}" name="cv">
                                            <input type="hidden" value="{{$hoso->ten}}" name="ten">
                                            <input type="hidden" value="{{$hoso->socmt}}" name="socmt">
                                            <input type="hidden" value="{{$hoso->ngaycapcmt}}" name="ngaycapcmt">
                                            <input type="hidden" value="{{$hoso->noicapcmt_id}}" name="noicapcmt_id">
                                            <input type="hidden" value="{{$hoso->ten}}" name="ten">
                                            <input type="hidden" value="{{$hoso->ngaysinh}}" name="ngaysinh">
                                            <input type="hidden" value="{{$hoso->gioitinh}}" name="gioitinh">
                                            <input type="hidden" value="{{$hoso->ngaycothebatdaulamviec}}" name="ngaycothebatdaulamviec">
                                            <input type="hidden" value="{{$hoso->sodienthoai}}" name="sodienthoai">
                                            <input type="hidden" value="{{$hoso->email}}" name="email">
                                            <input type="hidden" value="{{$hoso->thanhpho_id}}" name="thanhpho_id">
                                            <input type="hidden" value="{{$hoso->quanhuyen}}" name="quanhuyen">
                                            <input type="hidden" value="{{$hoso->diachichitiet}}" name="diachichitiet">
                                            <input type="hidden" value="{{$hoso->hocvan}}" name="hocvan">
                                            <input type="hidden" value="{{$hoso->kinhnghiemlamviec}}" name="kinhnghiemlamviec">
                                            <input type="hidden" value="{{$hoso->ngonngu}}" name="ngonngu">
                                            <input type="hidden" value="{{$hoso->cacgiaychungnhan_chungchi}}" name="cacgiaychungnhan_chungchi">
                                            <input type="hidden" value="{{$hoso->ungvien_id}}" name="ungvien_id">
                                            <input type="hidden" value="{{$trangthaihoso_plucks['Từ chối tham gia phỏng vấn']}}" name="trangthai_hoso_id">
                                            <input type="hidden" value="{{$hoso->tintuyendung_id}}" name="tintuyendung_id">
                                            <button type="submit" class="btn btn-danger">Hủy hồ sơ</button>
                                        </form>
                                    @endif
                            </td>
                            <td>{{$hoso->created_at}}</td>
                            <td style="width: 30px" class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('quantri.hosos.edit',$hoso->id)}}">Sửa</a></td>
                            <td style="width: 30px" class="center">
                                <form action="{{route('quantri.hosos.destroy',$hoso->id)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit">
                                        <i class="fa fa-trash-o  fa-fw"></i>Xóa
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
@endsection
