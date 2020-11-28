@extends('quantri.layout')
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
                <form action="{{route('quantri.tintuyendungs.update',$tintuyendung->id)}}" method="POST" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label>* Tiêu đề tin tuyển dụng</label>
                        <input class="form-control" name="tieude" placeholder="Nhập tiêu đề tin tuyển dụng " value="{{$tintuyendung->tieude}}"/>
                    </div>
                    <div class="form-group">
                        <label>* Mô tả tin tuyển dụng</label>
                        <textarea name="mota" id="mota" rows="10" cols="80">{{$tintuyendung->mota}}</textarea>
                        <script>
                            CKEDITOR.replace( 'mota' );
                        </script>
                    </div>
                    <div class="form-group">
                        <label>Mức lương tối thiểu</label>
                        <input class="form-control" name="luong" placeholder="Nhập mức lương tối thiểu " value="{{$tintuyendung->luong}}"/>
                    </div>
                    <div class="form-group">
                        <label>Ngành nghề/ lĩnh vực</label>
                        <select class="form-control" id="sel1" name="nganh_id">
                            @foreach($nganhs as $nganh)
                                <option value="{{$nganh->id}}" @if($nganh->id == $tintuyendung->nganh_id)selected @endif>{{$nganh->ten}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Trạng thái tin tuyển dụng</label>
                        <select class="form-control" id="sel1" name="trangthai_id">
                            @foreach($trangthai_tintuyendungs as $trangthai_tintuyendung)
                                <option value="{{$trangthai_tintuyendung->id}}" @if($trangthai_tintuyendung->id == $tintuyendung->trangthai_id)selected @endif>{{$trangthai_tintuyendung->ten}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>* Ngày đăng tin tuyển dụng</label>
                        <input class="form-control" name="ngaydang" placeholder="Nhập ngày đăng tin tuyển dụng " value="{{$tintuyendung->ngaydang->format('Y-m-d')}}" type="date"/>
                    </div>
                    <div class="form-group">
                        <label>Chọn ảnh</label>
                        <input type="file" name="anh" id="anh"/>
                        <td><img src="{{asset("image/career/{$tintuyendung->anh}")}}" id="preview" alt="" height="250px"></td>
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

                    $("#anh").change(function() {
                        readURL(this);
                    });
                </script>
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection
