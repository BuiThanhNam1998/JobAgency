@extends('ungvien.layout')
@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Tất cả tin tuyển dụng</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href="{{route('ungvien.index')}}">Home</a> / <span>Ngành nghề/ lĩnh vực</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-3">
                        <ul class="aside-menu">
                            @foreach($nganhs as $nganh)
                                <li><a href="{{route('ungvien.nganhs.show',$nganh->id)}}">{{$nganh->ten}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <div class="beta-products-list">
                            <h4>Tin tuyển dụng mới</h4>
                            <div class="beta-products-details">
                                <p class="pull-left">Tìm thấy {{$count_tintuyendung_theonganhs}} tin tuyển dụng</p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="row">
                                @foreach($tintuyendung_theonganhs as $index=>$tintuyendung_theonganh)
                                    @if($index % 3 == 0)
                            </div>
                            <br><br>
                            <div class="row">
                                @endif
                                    <div class="col-sm-4">
                                        <div class="single-item">
{{--                                            @if($tintuyendung_theonganh-> luong > 10000000)--}}
{{--                                                <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>--}}
{{--                                            @endif--}}
                                            <div class="single-item-header">
                                                <a href="{{route('ungvien.chitiettins.show',$tintuyendung_theonganh->id)}}"><img src="{{asset('image/career/' . $tintuyendung_theonganh->anh)}}" alt="" height="250px"></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title"><a href="{{route('ungvien.chitiettins.show',$tintuyendung_theonganh->id)}}">{{$tintuyendung_theonganh->tieude}}</a></p>
                                                <p class="single-item-price" style="font-size: 18px">
                                                        <span>{{number_format($tintuyendung_theonganh->luong)}} đồng</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div> <!-- .beta-products-list -->
                        <div class="row">{{$tintuyendung_theonganhs->links()}}</div>
                        <div class="space50">&nbsp;</div>

{{--                        <div class="beta-products-list">--}}
{{--                            <h4>Tin tuyển dụng khác</h4>--}}
{{--                            <div class="beta-products-details">--}}
{{--                                <p class="pull-left">Tìm thấy {{count($tintuyendung_nganh_khacs)}} tin tuyển dụng</p>--}}
{{--                                <div class="clearfix"></div>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                @foreach($tintuyendung_nganh_khacs as $tintuyendung_khac)--}}
{{--                                    <div class="col-sm-4">--}}
{{--                                        <div class="single-item">--}}
{{--                                            @if($tintuyendung_khac->luong>10000000)--}}
{{--                                                <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>--}}
{{--                                            @endif--}}
{{--                                            <div class="single-item-header">--}}
{{--                                                <a href="{{route('ungvien.chitiettins.show',$tintuyendung_khac->id)}}"><img src="{{asset('image/career/' . $tintuyendung_khac->anh)}}" alt="" height="250px"></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="single-item-body">--}}
{{--                                                <p class="single-item-title"><a href="{{route('ungvien.chitiettins.show',$tintuyendung_khac->id)}}">{{$tintuyendung_khac->tieude}}</a></p>--}}
{{--                                                <p class="single-item-price" style="font-size: 18px">--}}
{{--                                                    <span>{{number_format($tintuyendung_khac->luong)}} đồng</span>--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                            <div class="space40">&nbsp;</div>--}}

{{--                        </div> <!-- .beta-products-list -->--}}
                    </div>
                </div> <!-- end section with sidebar and main content -->


            </div> <!-- .main-content -->
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection
