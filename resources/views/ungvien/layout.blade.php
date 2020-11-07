<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADS </title>
    <link rel="shortcut icon" type="image/png" href="{{asset('CADSFLAG.ICO')}}" />
    <link href='https://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dest/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dest/vendors/colorbox/example3/colorbox.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dest/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dest/rs-plugin/css/responsive.css')}}">
    <link rel="stylesheet" title="style" href="{{asset('assets/dest/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dest/css/animate.css')}}">
    <link rel="stylesheet" title="style" href="{{asset('assets/dest/css/huong-style.css')}}">
</head>
<body>

<div id="header">
    <div class="header-top">
        <div class="container">
            <div class="pull-left auto-width-left">
                <ul class="top-menu menu-beta l-inline">
                    <li><a href="{{route('ungvien.index')}}"><i class="fa fa-home"></i> Công ty Cổ phần Phần mềm CADS
                        </a></li>
                    <li><a href="{{route('ungvien.index')}}"><i class="fa fa-phone"></i> Hotline tuyển dụng: 090 340 2799</a></li>
                </ul>
            </div>
            <div class="pull-right auto-width-right">
                <ul class="top-details menu-beta l-inline">
                    @if(auth()->check())
                        <li><a href="#"><i class="fa fa-user"></i>{{auth()->user()->name}}</a></li>
                        <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">@csrf</form>
                        <li><a href="login.html" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    @else
                        <li><a href="{{route('register')}}">Đăng kí</a></li>
                        <li><a href="{{route('login')}}">Đăng nhập</a></li>
                    @endif
                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-top -->
    <div class="header-body">
        <div class="container beta-relative">
            <div class="pull-left">
                <a href="{{route('ungvien.index')}}" id="logo"><img src="{{asset('image\slide\logo.png')}}" width="140px" alt=""></a>
            </div>
{{--            <div class="pull-right beta-components space-left ov">--}}
{{--                <div class="space10">&nbsp;</div>--}}
{{--                <div class="beta-comp">--}}
{{--                    <form role="search" method="get" id="searchform" action="/">--}}
{{--                        <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..." />--}}
{{--                        <button class="fa fa-search" type="submit" id="searchsubmit"></button>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-body -->
    <div class="header-bottom" style="background-color: #0277b8;">
        <div class="container">
            <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
            <div class="visible-xs clearfix"></div>
            <nav class="main-menu">
                <ul class="l-inline ov">
                    <li><a href="{{route('ungvien.index')}}">Trang chủ</a></li>
                    <li><a href="{{route('ungvien.nganhs.index')}}">Tin tuyển dụng</a>
{{--                        <ul class="sub-menu" style="height: 500px; overflow-y: scroll">--}}
{{--                            @foreach(\App\Nganh::query()->get() as $nganh)--}}
{{--                                <li><a href="{{route('ungvien.nganhs.show', $nganh->id)}}">{{$nganh->ten}}</a></li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
                    </li>
                    <li><a href="{{route('ungvien.gioithieu.index')}}">Giới thiệu về công ty</a></li>
                    @if(auth()->check())
                        @if(auth()->user()->vaitro->ten == 'Ứng viên')
                            <li><a href="{{route('ungvien.dashboard.index')}}">Trang quản lý</a></li>
                        @else
                            <li><a href="{{route('quantri.dashboard.index')}}">Trang quản lý</a></li>
                        @endif
                    @endif
                </ul>
                <div class="clearfix"></div>
            </nav>
        </div> <!-- .container -->
    </div> <!-- .header-bottom -->
</div> <!-- #header -->
@yield('content')

<div id="footer" class="color-div">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="widget">
                    <h4 class="widget-title">Địa chỉ liên hệ</h4>
                    <div class="contact-info">
                        <i class="fa fa-map-marker"></i>
                        <p>Hỗ trợ tư vấn:  1900 1294</p>
                        <p>Hotline: 090 340 2799</p><br>
                        <p>
                            Hà Nội: Phòng 4B, Tòa nhà ICC, Số 1277 đường Giải Phóng, Quận Hoàng Mai
                            Tel: (024) 3641 3449
                            Fax: (84-024) 364 11279<br>
                            E-mail:<a href="mailto:info@cads.com.vn"><span style="color:#A9A9A9;">info@cads.com.vn</span></a>
                        </p><br>
                        <p>
                            TP. HCM: Lầu 3, 289 Đinh Bộ Lĩnh, Phường 26, Quận Bình Thạnh
                            Tel/Fax:  (028) 3914 3786<br>
                            E-mail:<a href="mailto:info@cads.com.vn"><span style="color:#A9A9A9;">sale@cads.com.vn</span></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="widget">
                    <h4 class="widget-title">Về CADS</h4>
                    <div>
                        <ul>
                            <li><a href="{{route('ungvien.index')}}"><i class="fa fa-chevron-right"></i> Trang chủ</a></li>
                            <li><a href="{{route('ungvien.nganhs.index')}}"><i class="fa fa-chevron-right"></i> Tin tuyển dụng</a></li>
                            <li><a href="{{route('ungvien.gioithieu.index')}}"><i class="fa fa-chevron-right"></i> Giới thiệu về công ty</a></li>
                            @if(auth()->check())
                            <li><a href="{{route('quantri.dashboard.index')}}"><i class="fa fa-chevron-right"></i> Trang quản lý</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                    <div class="widget">
                        <h4 class="widget-title">Video</h4>
                        <div>
                            <iframe width="100%" src="https://www.youtube.com/embed/XeUBpwjibWM?showinfo=1&amp;autoplay=0&amp;controls=1&amp;rel=0" allowfullscreen=""></iframe>
                        </div>
                    </div>
            </div>
            <div class="col-sm-4">
                <div class="widget">
                    <h4 class="widget-title">Chia sẻ Facebook</h4>
                    <div style="border: medium none; overflow: hidden; height: 385px; width: 340px;background:#fff;" class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/PhanMemKeToanCADS/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=340&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FPhanMemKeToanCADS%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline"><span style="vertical-align: bottom; width: 340px; height: 500px;"><iframe name="f24e58da00e917c" width="1000px" height="1000px" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v3.2/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D46%23cb%3Df247dac493184b8%26domain%3Dwww.cads.com.vn%26origin%3Dhttps%253A%252F%252Fwww.cads.com.vn%252Ff3eaa53dda22cf4%26relation%3Dparent.parent&amp;container_width=340&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FPhanMemKeToanCADS%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline" style="border: none; visibility: visible; width: 340px; height: 500px;" class=""></iframe></span></div>
                </div>
            </div>
        </div> <!-- .row -->
    </div> <!-- .container -->
</div> <!-- #footer -->
<div class="copyright">
    <div class="container">
        <p class="pull-left">Bản quyền thuộc CADS. (&copy;) 2020</p>

        <div class="clearfix"></div>
    </div> <!-- .container -->
</div> <!-- .copyright -->


<!-- include js files -->
<script src="{{asset('assets/dest/js/jquery.js')}}"></script>
<script src="{{asset('assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js')}}"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="{{asset('assets/dest/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
<script src="{{asset('assets/dest/vendors/colorbox/jquery.colorbox-min.js')}}"></script>
<script src="{{asset('assets/dest/vendors/animo/Animo.js')}}"></script>
<script src="{{asset('assets/dest/vendors/dug/dug.js')}}"></script>
<script src="{{asset('assets/dest/js/scripts.min.js')}}"></script>
<script src="{{asset('assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('assets/dest/js/waypoints.min.js')}}"></script>
<script src="{{asset('assets/dest/js/wow.min.js')}}"></script>
<!--customjs-->
<script src="{{asset('assets/dest/js/custom2.js')}}"></script>
@stack('scripts')
<script>
    $(document).ready(function($) {
        $(window).scroll(function(){
            if($(this).scrollTop()>150){
                $(".header-bottom").addClass('fixNav')
            }else{
                $(".header-bottom").removeClass('fixNav')
            }}
        )
    })
</script>
</body>
</html>
