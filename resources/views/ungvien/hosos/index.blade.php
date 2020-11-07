@extends('quantri.layout')
@section('head')
    <title>Danh sách hồ sơ</title>
@endsection
@section('content')
    <div class="container-fluid">
        TÌm kiếm
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('ungvien.hosos.index')}}" method="get">
            Tên: <input type="text" name="filter_name" value="{{$filter_name}}"> <br>
            Email:<input type="text" name="filter_mail" value="{{$filter_mail}}"> <br>
            Trạng thái hồ sơ:
            <select name="filter_trang_thai_ho_so_id">
                <option value="">Tất cả</option>
                @foreach($trangthaihosos as $trangthaihoso)
                    <option value="{{$trangthaihoso->id}}" @if($trangthaihoso->id == $filter_trang_thai_ho_so_id) selected @endif>{{$trangthaihoso->ten}}</option>
                @endforeach
            </select><br>
            Tiêu đề tin tuyển dụng:
            <select name="filter_tieude">
                <option value="">Tất cả</option>
                @foreach($tintuyendungs as $tintuyendung)
                    <option value="{{$tintuyendung->id}}" @if($tintuyendung->id == $filter_tieude) selected @endif>{{$tintuyendung->tieude}}</option>
                @endforeach
            </select><br>
            Ngành tuyển dụng: <select name="filter_nganh_id">
                <option value="">Tất cả</option>
                @foreach($nganhs as $nganh)
                    <option value="{{$nganh->id}}" @if($nganh->id == $filter_nganh_id) selected @endif>{{$nganh->ten}}</option>
                @endforeach
            </select><br>
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
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr align="center">
                            <th>Họ tên</th>
                            <th>CV</th>
                            <th>Ngày có thể bắt đầu làm việc</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Trạng thái hồ sơ</th>
                            <th>Tiêu đề</th>
                            <th>Ngành ứng tuyển</th>
                            <th>Chi tiết hồ sơ</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($hosos as $hoso)
                            <tr class="odd gradeX" align="center">
                                <td>{{$hoso->ten}}</td>
                                <td>
                                    @if($hoso->cv)
                                        <a href="{{asset("image/cv/{$hoso->cv}")}}" target="_blank">CV</a>
                                    @endif
                                </td>
                                <td>@if($hoso->ngaycothebatdaulamviec)
                                        {{$hoso->ngaycothebatdaulamviec->format('d/m/Y')}}
                                    @endif
                                </td>
                                <td>{{$hoso->sodienthoai}}</td>
                                <td>{{$hoso->email}}</td>
                                <td>{{$hoso->trangthai_hoso->ten}}</td>
                                <td>{{$hoso->tintuyendung->tieude}}</td>
                                <td>{{$hoso->tintuyendung->nganh->ten}}</td>
                                <td><!-- Trigger the modal with a button -->
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

