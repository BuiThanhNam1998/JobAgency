@extends('admin.layout')
@section('head')
    <title>Sửa tin tuyển dụng</title>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa tin tuyển dụng</h1>
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
                <form action="{{route('employer.job.update',$job->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>* Tiêu đề tin tuyển dụng</label>
                        <input class="form-control" name="title" placeholder="Nhập tiêu đề tin tuyển dụng " value="{{$job->title}}"/>
                    </div>
                    <div class="form-group">
                        <label>* Mô tả tin tuyển dụng</label>
                        <textarea name="description" id="description" rows="10" cols="80">{{$job->description}}</textarea>
                        <script>
                            CKEDITOR.replace( 'description' );
                        </script>
                    </div>
                    <div class="form-group">
                        <label>Mức lương tối thiểu</label>
                        <input class="form-control" name="salary" placeholder="Nhập mức lương tối thiểu " value="{{$job->salary}}"/>
                    </div>
                    <div class="form-group">
                        <label>Ngành nghề/ lĩnh vực</label>
                        <select class="form-control" id="sel1" name="career_id">
                            @foreach($careers as $career)
                                <option value="{{$career->id}}" @if($career->id == $job->career_id)selected @endif>{{$career->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Hình thức tuyển dụng</label>
                        <select class="form-control" id="sel1" name="type_id">
                            @foreach($jobTypes as $jobType)
                                <option value="{{$jobType->id}}" @if($jobType->id == $job->type_id) selected @endif>{{$jobType->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Trạng thái tin tuyển dụng</label>
                        <select class="form-control" id="sel1" name="status_id">
                            @foreach($jobStatuses as $jobStatus)
                                <option value="{{$jobStatus->id}}" @if($jobStatus->id == $job->status_id) selected @endif>{{$jobStatus->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Địa điểm</label>
                        <select class="form-control" id="sel1" name="city_id">
                            @foreach($cities as $city)
                                <option value="{{$city->id}}" @if($city->id == $job->city_id) selected @endif>{{$city->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>* Ngày đăng tin tuyển dụng</label>
                        <input class="form-control" name="post_date" placeholder="Nhập ngày đăng tin tuyển dụng " value="{{date_format(date_create($job->post_date), 'Y-m-d')}}" type="date"/>
                    </div>
                    <div class="form-group">
                        <label>Chọn ảnh</label>
                        <input type="file" name="image" id="image" />
                        <td><img src="{{asset($job->image)}}" id="preview" alt="" height="250px"></td>
                    </div>
                    <button type="submit" class="btn btn-default">Sửa tin tuyển dụng</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </form>
                <script>
                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function(e) {
                                $('#preview').attr('src', e.target.result);
                            }

                            reader.readAsDataURL(input.files[0]);
                        }
                    }

                    $("#image").change(function() {
                        readURL(this);
                    });
                </script>
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection
