@extends('ungvien.layout')
@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Tin tuyển dụng {{$tintuyendung->ten}}</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href="{{route('ungvien.index')}}">Trang chủ</a> / <span>Thông tin chi tiết tin tuyển dụng</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div id="content">
            <div class="row">
                <div class="col-sm-9">

                    <div class="row">
                        <div class="col-sm-4">
                            <img src="{{asset('image/career/' .$tintuyendung->anh)}}" alt="">
                        </div>
                        <div class="col-sm-8">
                            <div class="single-item-body">
                                <p class="single-item-title">
                                    <h2>{{$tintuyendung->tieude}}</h2>
                                </p>
                                <p class="single-item-price">
                                    <span class="flash-sale">{{number_format($tintuyendung->luong)}} đồng</span>
                                </p>
                            </div>

                            <div class="clearfix"></div>
                            <div class="space20">&nbsp;</div>

                            <div class="single-item-desc">
                                <p>{!!$tintuyendung->mota!!}</p>
                            </div><br><br><br>
                            <div>Ngày đăng tin: <strong>{{$tintuyendung->ngaydang->format('d/m/Y')}}</strong></div>
                            <div class="space20">&nbsp;</div>
                        </div>
                    </div>

                    <div class="space40">&nbsp;</div>
                    <div class="woocommerce-tabs">
                        <div class="panel" id="tab-description">
                            <p>{{$tintuyendung->mota}}</p>
                        </div>
                        @if(auth()->check() && auth()->user()->vaitro->ten == 'Ứng viên')
                            <button type="button" class="btn btn-success"><a href="{{route('ungvien.hosos.create', ['tintuyendung' => $tintuyendung->id])}}"style="color: white">Nộp hồ sơ ngay</a></button>
                        @endif
                        @if(auth()->check() && auth()->user()->vaitro->ten == 'Quản trị viên')
                            <button type="button" class="btn btn-success"><a href="{{route('quantri.hosos.create', ['tintuyendung' => $tintuyendung->id])}}" style="color: white">Nộp hồ sơ ngay</a></button>

                        @elseif(auth()->check() == false)
                            <button type="button" class="btn btn-success"><a href="{{route('login')}}" style="color: white">Bạn muốn nộp hồ sơ? Đăng nhập ngay</a></button>
                        @endif
                    </div>
                    <div class="space50">&nbsp;</div>
                    <div class="beta-products-list">
                        <h4>Tin tuyển dụng tương tự</h4>

                        <div class="row">
                            @foreach($tintuyendung_tuongtus as $tintuyendung_tuongtu)
                                <div class="col-sm-4">
                                    <div class="single-item">
{{--                                        @if($tintuyendung_tuongtu-> luong > 10000000)--}}
{{--                                            <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>--}}
{{--                                        @endif--}}
                                        <div class="single-item-header">
                                            <a href="{{route('ungvien.chitiettins.show',$tintuyendung_tuongtu->id)}}"><img src="{{asset('image/career/' . $tintuyendung_tuongtu->anh)}}" alt="" height="250px"></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title"><a href="{{route('ungvien.chitiettins.show',$tintuyendung_tuongtu->id)}}">{{$tintuyendung_tuongtu->tieude}}</a></p>
                                            <p class="single-item-price" style="font-size: 18px">
                                                @if($tintuyendung_tuongtu->luong > 10000000)
                                                    <span class="flash-sale">{{number_format($tintuyendung_tuongtu->luong)}} đồng</span>
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row">{{$tintuyendung_tuongtus->links()}}</div>
                    </div> <!-- .beta-products-list -->
                </div>
                <div class="col-sm-3 aside">
                    <div class="widget">
                        <h3 class="widget-title">Tin tuyển dụng HOT</h3>
                        <div class="widget-body">
                            <div class="beta-sales beta-lists">
                                @foreach($tintuyendung_hots as $tintuyendung_hot)
                                    <div class="media beta-sales-item">
                                        <a href="{{route('ungvien.chitiettins.show',$tintuyendung_hot->id)}}"><img src="{{asset('image/career/'. $tintuyendung_hot->anh)}}" alt="" height="250px"></a>
                                        <div class="media-body">
                                            <p class="single-item-title"><a href="{{route('ungvien.chitiettins.show',$tintuyendung_hot->id)}}">{{$tintuyendung_hot->tieude}}</a></p>
                                            <span class="flash-sale">{{number_format($tintuyendung_hot->luong)}} đồng</span>

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div> <!-- best sellers widget -->
                    <div class="widget">
                        <h3 class="widget-title">Tin tuyển dụng mới</h3>
                        <div class="widget-body">
                            <div class="beta-sales beta-lists">
                                @foreach($tintuyendung_news as $tintuyendung_new)
                                    <div class="media beta-sales-item">
                                        <a href="{{route('ungvien.chitiettins.show',$tintuyendung_new->id)}}"><img src="{{asset('image/career/' . $tintuyendung_new->anh)}}" alt="" height="250px"></a>
                                        <div class="media-body">
                                            <p class="single-item-title"><a href="{{route('ungvien.chitiettins.show',$tintuyendung_new->id)}}">{{$tintuyendung_new->tieude}}</a></p>
                                            <span class="flash-sale">{{number_format($tintuyendung_new->luong)}} đồng</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div> <!-- best sellers widget -->
                </div>
            </div>
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection
