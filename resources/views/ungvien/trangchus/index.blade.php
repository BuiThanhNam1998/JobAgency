@extends('ungvien.layout')
@section('content')
    <div class="rev-slider">
        <div class="fullwidthbanner-container">
            <div class="fullwidthbanner">
                <div class="bannercontainer" >
                    <div class="banner">
                        <ul>
                            @foreach($slide as $sl)
                            <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                                <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
                                    <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="{{asset('image/slide/' . $sl->anh)}}" data-src="{{asset('image/slide/' . $sl->anh)}}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('{{asset('image/slide/' . $sl->anh)}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                    </div>
                                </div>

                            </li>
                                @endforeach
                        </ul>
                    </div>
                </div>

                <div class="tp-bannertimer"></div>
            </div>
        </div>
        <!--slider-->
    </div>
    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="beta-products-list">
                            <h4>Tin tuyển dụng mới</h4>
                            <div class="beta-products-details">
                                <p class="pull-left">Tìm thấy {{$count_tintuyendung_news}} tin tuyển dụng</p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="row">
                                @foreach($tintuyendung_news as $index => $new)
                                    @if($index % 4 == 0)
                                        </div>
                            <br><br>
                                        <div class="row">
                                        @endif
                                    <div class="col-sm-3">
                                        <div class="single-item">
{{--                                            @if($new->ngaydang !='2020-02-18')--}}
{{--                                                <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>--}}
{{--                                            @endif--}}
                                            <div class="single-item-header">
                                                <a href="{{route('ungvien.chitiettins.show',$new->id)}}"><img src="{{asset('image/career/' . $new->anh)}}" alt="" height="244px," width="320px"></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title" ><a href="{{route('ungvien.chitiettins.show',$new->id)}}">{{$new->tieude}}</a></p>
                                                <p class="single-item-price" style="font-size: 18px">
                                                    <span class="flash-sale">{{number_format($new->luong)}} đồng</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="beta-btn primary" href="{{route('ungvien.chitiettins.show',$new->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="row">{{$tintuyendung_news->links()}}</div>
                        </div> <!-- .beta-products-list -->

                        <div class="space50">&nbsp;</div>

                        <div class="beta-products-list">
                            <h4>Tin tuyển dụng HOT</h4>
{{--                            <div class="beta-products-details">--}}
{{--                                <p class="pull-left">Tìm thấy {{$count_tintuyendung_hots}} tin tuyển dụng</p>--}}
{{--                                <div class="clearfix"></div>--}}
{{--                            </div>--}}
                            <div class="row">
                                @foreach($tintuyendung_hots as $index => $tintuyendung_hot)
                                    @if($index % 4 == 0)
                            </div>
                            <br><br>
                            <div class="row">
                                @endif
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="{{route('ungvien.chitiettins.show',$tintuyendung_hot->id)}}"><img src="{{asset('image/career/' . $tintuyendung_hot->anh)}}" alt="" height="244px" width="320px"></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title"><a href="{{route('ungvien.chitiettins.show',$tintuyendung_hot->id)}}">{{$tintuyendung_hot->tieude}}</a></p>
                                                <p class="single-item-price"  style="font-size: 18px">
                                                    <span class="flash-sale">{{number_format($tintuyendung_hot->luong)}} đồng</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div> <!-- .beta-products-list -->
                    </div>
                </div> <!-- end section with sidebar and main content -->


            </div> <!-- .main-content -->
        </div> <!-- #content -->
    </div>

    @endsection
@push('scripts')
{{--    <script src="{{asset('assets/dest/js/scripts.min.js')}}"></script>--}}
@endpush
