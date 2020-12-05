@extends('admin.layout')
@section('head')
    <title>Danh sách tin tuyển dụng</title>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách tin tuyển dụng</h1>
                <div class="table-responsive'">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Tiêu đề</th>
                            <th>Mô tả chi tiết</th>
                            <th>Mức lương tối thiểu</th>
                            <th>Ngành nghề/ lĩnh vực</th>
                            <th>Trạng thái tin tuyển dụng</th>
                            <th>Địa điểm</th>
                            <th>Ngày đăng</th>
                            <th>Ảnh</th>
                            <th>Sửa</th>
                            <th>Xóa</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($jobs as $job)
                            <tr class="odd gradeX" align="center">
                                <td>{{$job->id}}</td>
                                <td>{{$job->title}}</td>
                                <td><!-- Trigger the modal with a button -->
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal_hoso_{{$job->id}}">Nhấn để mở</button>

                                    <!-- Modal -->
                                    <div id="myModal_hoso_{{$job->id}}" class="modal fade" role="dialog">
                                        <div class="modal-dialog modal-lg">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Chi tiết tin tuyển dụng</h4>
                                                </div>
                                                <div class="modal-body text-left">
                                                    <b>Tiêu đề: </b>{{$job->title}} <br>
                                                    <b>Mô tả chi tiết: </b><br>{!!$job->description!!} <br>
                                                    <b>Mức lương tối thiểu: </b>{{$job->salary}}<br>
                                                    <b>Ngành nghề/ lĩnh vực: </b>{{$job->career->name}} <br>
                                                    <b>Trạng thái tin tuyển dụng: </b>{{$job->status->name}} <br>
                                                    <b>Ngày đăng: </b>{{date_format(date_create($job->created_at), 'd-m-Y')}}<br>
                                                    <b>Ảnh</b><br><img src="{{asset($job->image)}}" alt="{{$job->title}}" height="250px">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div></td>
                                <td>{{$job->salary}}</td>
                                <td>{{$job->career->name}}</td>
                                <td>{{$job->status->name}}</td>
                                <td>{{$job->city->name}}</td>
                                <td>{{date_format(date_create($job->created_at), 'd-m-Y')}}</td>
                                <td><img src="{{asset($job->image)}}" alt="{{$job->title}}" height="250px"></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('employer.job.detail',$job->id)}}">Sửa</a></td>
                                <td class="center">
                                    <form action="{{route('employer.job.destroy', $job->id)}}" method="POST">
                                        @csrf
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
