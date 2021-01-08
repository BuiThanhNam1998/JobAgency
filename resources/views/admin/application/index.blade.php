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
                            <th>Tin tuyển dụng</th>
                            <th>Tên người ứng tuyển</th>
                            <th>Hồ sơ</th>
                            <th>Trạng thái</th>
                            <th>Ngày ứng tuyển</th>
                            <th>Sửa</th>
                            <th>Xóa</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($applications as $application)
                            <tr class="odd gradeX" align="center">
                                <td>{{$application->id}}</td>
                                <td>
                                    <a href="{{route('employer.job.detail', ['id' => $application->job->id])}}" target="_blank">
                                        {{$application->job->title}}
                                    </a>
                                </td>
                                <td>
                                    {{$application->profile->user->name}}
                                </td>
                                <td>{{$application->profile->name}}</td>
                                <td>
                                    <select name="status" class="status-application" data-id="{{$application->id}}">
                                        @foreach($applicationStatuses as $applicationStatus)
                                            <option
                                                value="{{$applicationStatus->id}}"
                                                {{$applicationStatus->id == $application->status->id ? 'selected' : ''}}
                                            >
                                                {{$applicationStatus->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>{{date_format(date_create($application->created_at), 'd-m-Y')}}</td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('employer.application.detail',$application->id)}}">Sửa</a></td>
                                <td class="center">
                                    <form action="{{route('employer.application.destroy', $application->id)}}" method="POST">
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
    <script>
        $(document).ready(function () {
            $('.status-application').change(function () {
                let statusId = $(this).val();
                let applicationId = $(this).data("id")
                $.ajax({
                    method: "POST",
                    url: "{{route('employer.application.change.status')}}",
                    data: {
                        _token: "{{ csrf_token() }}",
                        status_id: statusId,
                        application_id: applicationId
                    }
                }).done(function(data) {
                    let icon = data.code == '200' ? 'success' : 'warning';
                    $.toast({
                        text: data.message,
                        icon: icon,
                        showHideTransition: 'fade',
                        allowToastClose: true,
                        hideAfter: 3000,
                        stack: 5,
                        position: 'bottom-right',
                        textAlign: 'left',
                        loader: false,
                    });
                });
            })
        })
    </script>
    @endsection
