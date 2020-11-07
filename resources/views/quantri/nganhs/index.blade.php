@extends('quantri.layout')
@section('head')
    <title>Danh sách ngành nghề</title>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách ngành nghề hoặc lĩnh vực</h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>Tên ngành nghề hoặc lĩnh vực</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                @foreach($nganhs as $nganh)
                    <tr class="odd gradeX" align="center">
                        <td>{{$nganh->ten}}</td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('quantri.nganhs.edit',$nganh->id)}}">Sửa</a></td>
                        <td class="center">
                            <form action="{{route('quantri.nganhs.destroy',$nganh->id)}}" method="POST">
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
        <!-- /.row -->
    </div>
    @endsection
