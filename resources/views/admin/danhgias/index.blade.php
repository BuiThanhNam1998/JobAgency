@extends('quantri.layout')
@section('head')
    <title>Danh sách đánh giá</title>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách đánh giá</h1>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr align="center">
                            <th style="width: 100px">Lịch hẹn</th>
                            <th>Người đánh giá</th>
                            <th>Trình độ ứng viên</th>
                            <th style="width: 140px">Điểm chuyên môn của ứng viên</th>
                            <th>Nhận xét</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($danhgias as $danhgia)
                            <tr class="odd gradeX" align="center">
                                <td>{{$danhgia->lichhen->thoigian->format('H:m d/m/Y')}}</td>
                                <td>{{$danhgia->user->name}}</td>
                                <td>{{$danhgia->trinhdo->ten}}</td>
                                <td>{{$danhgia->diemchuyenmon}}</td>
                                <td>{!!$danhgia->nhanxet!!}</td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('quantri.danhgias.edit',$danhgia->id)}}">Sứa</a></td>
                                <td class="center">
                                    <form action="{{route('quantri.danhgias.destroy',$danhgia->id)}}" method="POST">
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
