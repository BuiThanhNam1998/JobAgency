@extends('quantri.layout')
@section('head')
    <title>Danh sách lịch hẹn</title>
@endsection
@section('content')
    <div class="container-fluid">
        <h3>TÌm kiếm:</h3>
        <form action="{{route('quantri.lichhens.index')}}" method="get">
            <div class="form-group">
                <label >Email:</label>
                <input type="text" class="form-control" name="filter_hoso_email" value="{{$filter_hoso_email}}" placeholder="Nhập email ứng viên cần tìm" style="width: 500px">
            </div>
            <div class="form-group">
                <label >Tên:</label>
                <input type="text" class="form-control" name="filter_hoso_ten" value="{{$filter_hoso_ten}}" placeholder="Nhập tên ứng viên cần tìm" style="width: 500px">
            </div>
            <div class="form-group">
                <label >Số chứng minh thư:</label>
                <input type="text" class="form-control" name="filter_hoso_socmt" value="{{$filter_hoso_socmt}}" placeholder="Nhập số chứng minh thư ứng viên cần tìm" style="width: 500px">
            </div>
            <div class="form-group">
                <label for="sel1"> Trạng thái lịch hẹn:</label><br>
                <select class="form-control" name="filter_trang_thai_lich_hen" style="width: 500px">
                    <option value="">Tất cả</option>
                    @foreach($trangthailichhens as $trangthailichhen)
                        <option value="{{$trangthailichhen->id}}" @if($trangthailichhen->id == $filter_trang_thai_lich_hen) selected @endif>{{$trangthailichhen->ten}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit">Tìm kiếm</button>
        </form>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách lịch hẹn</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example"style="width: 1300px" >
                        <thead>
                        <tr align="center">
                            <th style="width: 50px">Thời gian</th>
                            <th style="width: 200px">Nhân viên tham gia</th>
                            <th style="width: 50px">Trạng thái lịch hẹn</th>
                            <th style="width: 50px">Hồ sơ</th>
                            <th style="width: 30px">Đánh giá buổi hẹn</th>
                            <th style="width: 50px">Kết quả đánh giá</th>
                            <th style="width: 50px">Địa điểm</th>
                            <th style="width: 150px">Mô tả</th>
                            @if(auth()->user()->vaitro->ten == 'Quản trị viên')
                            <th style="width: 30px">Sửa</th>
                            <th style="width: 30px">Xóa</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($lichhens as $lichhen)
                            <tr class="odd gradeX" align="center">
                                <td style="width: 50px">{{$lichhen->thoigian->format('H:i d/m/Y')}}</td>
                                <td style="width: 200px">
                                    @foreach($lichhen->nhanviens as $nhanvien)
                                        <a href="{{route('quantri.users.index', ['filter_mail' => $nhanvien->email])}}" target="_blank">*{{$nhanvien->name}}</a><br>
                                    @endforeach
                                </td>

                                <td style="width: 50px">{{$lichhen->trangthai_lichhen->ten}}</td>
                                <td style="width: 50px"><!-- Trigger the modal with a button -->
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal_hoso_{{$lichhen->hoso->id}}">{{$lichhen->hoso->ten}}</button>

                                    <!-- Modal -->
                                    <div id="myModal_hoso_{{$lichhen->hoso->id}}" class="modal fade" role="dialog">
                                        <div class="modal-dialog modal-lg">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Chi tiết hồ sơ ứng viên</h4>
                                                </div>
                                                <div class="modal-body text-left">
                                                    {{--                                                <p>Some text in the modal.</p>--}}
                                                    <b>Họ tên: </b>{{$lichhen->hoso->ten}} <br>
                                                    <b>Số chứng minh thư: </b>{{$lichhen->hoso->socmt}} <br>
                                                    <b>Ngày cấp chứng minh thư: </b>{{$lichhen->hoso->ngaycapcmt->format('d/m/Y')}} <br>
                                                    <b>Nơi cấp chứng minh thư: </b>{{$lichhen->hoso->noicapcmt->ten}} <br>
                                                    <b>Ngày sinh: </b>{{$lichhen->hoso->ngaysinh->format('d/m/Y')}} <br>
                                                    <b>Giới tính: </b>@if($lichhen->hoso->gioitinh) Nam @else Nữ @endif <br>
                                                    <b>Ngày có thể bắt đầu làm việc: </b>@if($lichhen->hoso->ngaycothebatdaulamviec)
                                                                                            {{$lichhen->hoso->ngaycothebatdaulamviec->format('d/m/Y')}}
                                                                                          @endif <br>
                                                    <b>Số điện thoại: </b>{{$lichhen->hoso->sodienthoai}} <br>
                                                    <b>Email: </b>{{$lichhen->hoso->email}} <br>
                                                    <b>Tỉnh/ thành phố: </b>{{$lichhen->hoso->thanhpho->ten}} <br>
                                                    <b>Quận/ huyện: </b>{{$lichhen->hoso->quanhuyen}} <br>
                                                    <b>Địa chỉ chi tiết: </b>{{$lichhen->hoso->diachichitiet}} <br>
                                                    <b>Học vấn: </b>{{$lichhen->hoso->hocvan}} <br>
                                                    <b>Kinh nghiệm làm việc: </b>{{$lichhen->hoso->kinhnghiemlamviec}} <br>
                                                    <b>Ngôn ngữ: </b>{{$lichhen->hoso->ngonngu}} <br>
                                                    <b>Các giấy chứng chỉ/ chứng nhận khác: </b>{{$lichhen->hoso->cacgiaychungnhan_chungchi}} <br>
                                                    <b>Trạng thái hồ sơ: </b>{{$lichhen->hoso->trangthai_hoso->ten}} <br>
                                                    <b>Tiêu đề: </b>{{$lichhen->hoso->tintuyendung->tieude}} <br>
                                                    <b>Ngành ứng tuyển: </b>{{$lichhen->hoso->tintuyendung->nganh->ten}} <br>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div><br><br>
                                        <a href="{{route('quantri.hosos.index', ['filter_mail' => $lichhen->hoso->email])}}" target="_blank">Trang hồ sơ ứng viên</a>

                                </td>
                                <td style="width: 30px">
                                    @if($lichhen->nhanviens()->where('user.id', auth()->id())->count() !== 0)
                                        @if($lichhen->trangthai_lichhen->ten=="Chờ phỏng vấn")
                                            <a href="{{route('quantri.danhgias.create', ['lichhen_id' => $lichhen->id, 'back_url' => url()->full()])}}">Đánh giá</a>
                                        @endif
                                    @endif
                                </td>
                                <td style="width: 50px">
                                    Đã đánh giá: {{$lichhen->danhgias()->count()}}/{{$lichhen->nhanviens()->count()}}
                                    <!-- Trigger the modal with a button -->
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal_danhgias_lich_hen_{{$lichhen->id}}">Kết quả đánh giá</button>

                                    <!-- Modal -->
                                    <div id="myModal_danhgias_lich_hen_{{$lichhen->id}}" class="modal fade" role="dialog">
                                        <div class="modal-dialog modal-lg">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Chi tiết đánh giá buổi hẹn của ứng viên</h4>
                                                </div>
                                                <div class="modal-body text-left">
                                                    @foreach($lichhen->danhgias as $danhgia)
                                                        <b>Người đánh giá: </b>{{$danhgia->user->name}}<br>
                                                        <b>Trình độ: </b>{{$danhgia->trinhdo->ten}}<br>
                                                        <b>Diểm chuyên môn: </b>{{$danhgia->diemchuyenmon}}<br>
                                                        <b>Nhận xét: </b>{!!$danhgia->nhanxet!!}
                                                        <br><br><br><br>
                                                    @endforeach
                                                    Chưa đánh giá:
                                                    @foreach($lichhen->nhanviens as $nhanvien)
                                                        @if($lichhen->danhgias->where('user_id', $nhanvien->id)->count() == 0)
                                                                <a href="{{route('quantri.users.index', ['filter_mail' => $nhanvien->email])}}" target="_blank">{{$nhanvien->name}}</a>,
                                                        @endif
                                                    @endforeach<br><br>
                                                    @if($lichhen->trangthai_lichhen->ten=="Chờ phỏng vấn")
                                                        @if($lichhen->nhanviens()->count() == $lichhen->danhgias()->count())
                                                            <form action="{{route('quantri.lichhens.update', $lichhen->id)}}" style="display: inline" method="POST">
                                                                @method('PUT')
                                                                @csrf
                                                                <input type="hidden" value="{{$lichhen->thoigian}}" name="thoigian">
                                                                <input type="hidden" value="{{$lichhen->diadiem}}" name="diadiem">
                                                                <input type="hidden" value="{{$lichhen->mota}}" name="mota">
                                                                <input type="hidden" value="{{$trangthailichhen_plucks['Đã hoàn tất, từ chối ứng viên']}}" name="trangthai_id">
                                                                <input type="hidden" value="{{$lichhen->hoso_id}}" name="hoso_id">
                                                                @foreach($lichhen->nhanviens as $nhanvien)
                                                                    <input type="hidden" value="{{$nhanvien->id}}" name="nhanvien_ids[]">
                                                                @endforeach
                                                                @if(auth()->user()->vaitro->ten == 'Quản trị viên')
                                                                    <button type="submit" class="btn btn-default">Từ chối ứng viên</button>
                                                                @endif
                                                            </form>
                                                            <form action="{{route('quantri.lichhens.update', $lichhen->id)}}" style="display: inline" method="POST">
                                                                @method('PUT')
                                                                @csrf
                                                                <input type="hidden" value="{{$lichhen->thoigian}}" name="thoigian">
                                                                <input type="hidden" value="{{$lichhen->diadiem}}" name="diadiem">
                                                                <input type="hidden" value="{{$lichhen->mota}}" name="mota">
                                                                <input type="hidden" value="{{$trangthailichhen_plucks['Tiếp tục phỏng vấn']}}" name="trangthai_id">
                                                                <input type="hidden" value="{{$lichhen->hoso_id}}" name="hoso_id">
                                                                @foreach($lichhen->nhanviens as $nhanvien)
                                                                    <input type="hidden" value="{{$nhanvien->id}}" name="nhanvien_ids[]">
                                                                @endforeach
                                                                @if(auth()->user()->vaitro->ten == 'Quản trị viên')
                                                                <button type="submit" class="btn btn-default">Tiếp tục phỏng vấn ứng viên</button>
                                                                @endif
                                                            </form>
                                                            <form action="{{route('quantri.lichhens.update', $lichhen->id)}}" style="display: inline" method="POST">
                                                                @method('PUT')
                                                                @csrf
                                                                <input type="hidden" value="{{$lichhen->thoigian}}" name="thoigian">
                                                                <input type="hidden" value="{{$lichhen->diadiem}}" name="diadiem">
                                                                <input type="hidden" value="{{$lichhen->mota}}" name="mota">
                                                                <input type="hidden" value="{{$trangthailichhen_plucks['Đã hoàn tất, được nhận làm việc']}}" name="trangthai_id">
                                                                <input type="hidden" value="{{$lichhen->hoso_id}}" name="hoso_id">
                                                                @foreach($lichhen->nhanviens as $nhanvien)
                                                                    <input type="hidden" value="{{$nhanvien->id}}" name="nhanvien_ids[]">
                                                                @endforeach
                                                                @if(auth()->user()->vaitro->ten == 'Quản trị viên')
                                                                <button type="submit" class="btn btn-default">Chấp nhận ứng viên</button>
                                                                @endif
                                                            </form>
                                                            @endif
                                                            @if($lichhen->danhgias()->count() ==0)
                                                                <form action="{{route('quantri.lichhens.update', $lichhen->id)}}" style="display: inline" method="POST">
                                                                    @method('PUT')
                                                                    @csrf
                                                                    <input type="hidden" value="{{$lichhen->thoigian}}" name="thoigian">
                                                                    <input type="hidden" value="{{$lichhen->diadiem}}" name="diadiem">
                                                                    <input type="hidden" value="{{$lichhen->mota}}" name="mota">
                                                                    <input type="hidden" value="{{$trangthailichhen_plucks['Đã hoàn tất, không tham gia phỏng vấn']}}" name="trangthai_id">
                                                                    <input type="hidden" value="{{$lichhen->hoso_id}}" name="hoso_id">
                                                                    @foreach($lichhen->nhanviens as $nhanvien)
                                                                        <input type="hidden" value="{{$nhanvien->id}}" name="nhanvien_ids[]">
                                                                    @endforeach
                                                                    @if(auth()->user()->vaitro->ten == 'Quản trị viên')
                                                                        <button type="submit" class="btn btn-default">Không tham gia phỏng vấn</button>
                                                                    @endif
                                                                </form>
                                                            @endif
                                                        @endif
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </td>
                                <td style="width: 50px">{{$lichhen->diadiem}}</td>
                                <td style="width: 150px">{!!$lichhen->mota!!}</td>
                                @if(auth()->user()->vaitro->ten == 'Quản trị viên')
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('quantri.lichhens.edit', $lichhen->id)}}">Sứa</a></td>
                                    <td class="center">
                                        <form action="{{route('quantri.lichhens.destroy',$lichhen->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit">
                                                <i class="fa fa-trash-o  fa-fw"></i>Xóa
                                            </button>
                                        </form>
                                    </td>
                                @endif
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
