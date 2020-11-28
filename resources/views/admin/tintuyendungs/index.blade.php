@extends('quantri.layout')
@section('head')
    <title>Danh sách tin tuyển dụng</title>
@endsection
@section('content')
    <div class="container-fluid">
        <h3>TÌm kiếm:</h3>
        <form action="{{route('quantri.tintuyendungs.index')}}" method="get">
            <div class="form-group">
                <label > Tiêu đề tin tuyển dụng:</label>
                <input type="text" class="form-control" name="filter_tieude" value="{{$filter_tieude}}" placeholder="Nhập tiêu đề tin tuyển dụng cần tìm" style="width: 500px">
            </div>
            <div class="form-group">
                <label > Mức lương:</label>
                <input type="text" class="form-control" name="filter_luong"  value="{{$filter_luong}}" placeholder="Nhập mức lương cần tìm" style="width: 500px">
            </div>
            <div class="form-group">
                <label for="sel1"> Ngành tuyển dụng:</label><br>
                <select class="form-control" name="filter_nganh" style="width: 500px">
                    <option value="">Tất cả</option>
                    @foreach($nganhs as $nganh)
                        <option value="{{$nganh->id}}" @if($nganh->id == $filter_nganh) selected @endif>{{$nganh->ten}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="sel1"> Trạng thái tin tuyển dụng:</label><br>
                <select class="form-control" name="filter_trangthai" style="width: 500px">
                    <option value="">Tất cả</option>
                    @foreach($trangthais as $trangthai)
                        <option value="{{$trangthai->id}}" @if($trangthai->id == $filter_trangthai) selected @endif>{{$trangthai->ten}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit">Tìm kiếm</button>
        </form>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách tin tuyển dụng</h1>
                <div class="table-responsive'">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr align="center">
                            <th>Tiêu đề</th>
                            <th>Mô tả chi tiết</th>
                            <th>Mức lương tối thiểu</th>
                            <th>Ngành nghề/ lĩnh vực</th>
                            <th>Trạng thái tin tuyển dụng</th>
                            <th>Ngày đăng</th>
                            <th>Ảnh</th>
                            @if(auth()->user()->vaitro->ten == 'Quản trị viên')
                            <th>Sửa</th>
                                <th>Xóa</th>
                            @endif

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tintuyendungs as $tintuyendung)
                            <tr class="odd gradeX" align="center">
                                <td>{{$tintuyendung->tieude}}</td>
                                {{--                        <td>{{$tintuyendung->mota}}</td>--}}
                                <td><!-- Trigger the modal with a button -->
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal_hoso_{{$tintuyendung->id}}">Nhấn để mở</button>

                                    <!-- Modal -->
                                    <div id="myModal_hoso_{{$tintuyendung->id}}" class="modal fade" role="dialog">
                                        <div class="modal-dialog modal-lg">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Chi tiết tin tuyển dụng</h4>
                                                </div>
                                                <div class="modal-body text-left">
                                                    {{--                                                <p>Some text in the modal.</p>--}}
                                                    <b>Tiêu đề: </b>{{$tintuyendung->tieude}} <br>
                                                    <b>Mô tả chi tiết: </b><br>{!!$tintuyendung->mota!!} <br>
                                                    <b>Mức lương tối thiểu: </b>{{$tintuyendung->luong}}<br>
                                                    <b>Ngành nghề/ lĩnh vực: </b>{{$tintuyendung->nganh->ten}} <br>
                                                    <b>Trạng thái tin tuyển dụng: </b>{{$tintuyendung->trangthai_tintuyendung->ten}} <br>
                                                    <b>Ngày đăng: </b>{{$tintuyendung->ngaydang->format('d/m/Y')}} <br>
                                                    <b>Ảnh</b><br><img src="{{asset("image/career/{$tintuyendung->anh}")}}" alt="" height="250px">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div></td>
                                <td>{{$tintuyendung->luong}}</td>
                                <td>{{$tintuyendung->nganh->ten}}</td>
                                <td>{{$tintuyendung->trangthai_tintuyendung->ten}}</td>
                                <td>{{$tintuyendung->ngaydang->format('d/m/Y')}}</td>
                                <td><img src="{{asset("image/career/{$tintuyendung->anh}")}}" alt="" height="250px"></td>
                                @if(auth()->user()->vaitro->ten == 'Quản trị viên')
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('quantri.tintuyendungs.edit',$tintuyendung->id)}}">Sửa</a></td>
                                @endif
                                <td class="center">
                                    <form action="{{route('quantri.tintuyendungs.destroy',$tintuyendung->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"><i class="fa fa-trash-o  fa-fw"></i>Xóa</button>
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
