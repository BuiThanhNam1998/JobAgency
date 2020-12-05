<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            @if(auth()->user()->role->name == 'Quản trị viên')
            <li>
                <a href="#"><i class="fa fa-users fa-fw"></i> Cấu hình</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-users fa-fw"></i> Người dùng<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#">Danh sách người dùng</a>
                        <a href="#">Thêm người dùng mới</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            @endif
            @if(auth()->user()->role->name == 'Quản trị viên' || auth()->user()->role->name == 'Ứng viên' )
            <li>
                <a href="#"><i class="fa fa-address-card"></i> Hồ sơ<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    @if(auth()->user()->role->name == 'Quản trị viên')
                    <li>
                        <a href="{{route('quantri.hosos.index')}}">Danh sách hồ sơ</a>
                        <a href="{{route('quantri.hosos.create')}}">Thêm hồ sơ mới</a>
                    </li>
                    @endif
                    @if(auth()->user()->role->name == 'Ứng viên')
                            <li>
                                <a href="{{route('ungvien.hosos.index')}}">Danh sách hồ sơ</a>
                            </li>
                    @endif
                </ul>
                <!-- /.nav-second-level -->
            </li>
            @endif
            @if(auth()->user()->role->name == 'Quản trị viên')
            <li>
                <a href="#"><i class="fas fa-sign"></i> Tin tuyển dụng<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    @if(auth()->user()->role->name == 'Quản trị viên')
                    <li>
                        <a href="{{route('employer.job.list')}}">Danh sách tin tuyển dụng</a>
                        <a href="{{route('employer.job.create')}}">Thêm tin tuyển dụng mới</a>
                    </li>
                    @endif
                </ul>
                <!-- /.nav-second-level -->
            </li>
            @endif
            @if(auth()->user()->role->name == 'Quản trị viên' || auth()->user()->role->name == 'Nhân viên' )
            <li>
                <a href="#"><i class="far fa-calendar-alt"></i> Lịch hẹn<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                        <li>
                            <a href="{{route('quantri.lichhens.index')}}">Danh sách lịch hẹn</a>
                        </li>
{{--                    @if(auth()->user()->role->name == 'Quản trị viên')--}}
{{--                        <li>--}}
{{--                            <a href="{{route('quantri.lichhens.create')}}">Thêm lịch hẹn mới</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}
                </ul>
                <!-- /.nav-second-level -->
            </li>
            @endif
            @if(auth()->user()->role->name == 'Quản trị viên')
            <li>
                <a href="#"><i class="fas fa-tasks"></i> Trạng thái hồ sơ<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    @if(auth()->user()->role->name == 'Quản trị viên')
                    <li>
                        <a href="{{route('quantri.trangthai_hosos.index')}}">Danh sách trạng thái hồ sơ</a>
                        <a href="{{route('quantri.trangthai_hosos.create')}}">Thêm trạng thái hồ sơ mới</a>
                    </li>
                    @endif
                </ul>
                <!-- /.nav-second-level -->
            </li>
            @endif
            @if(auth()->user()->role->name == 'Quản trị viên')
            <li>
                <a href="#"><i class="fas fa-tasks"></i> Trạng thái tin tuyển dụng<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    @if(auth()->user()->role->name == 'Quản trị viên')
                    <li>
                        <a href="{{route('quantri.trangthai_tintuyendungs.index')}}">Danh sách trạng thái tin tuyển dụng</a>
                        <a href="{{route('quantri.trangthai_tintuyendungs.create')}}">Thêm trạng thái tin tuyển dụng mới</a>
                    </li>
                    @endif
                </ul>
                <!-- /.nav-second-level -->
            </li>
            @endif
            @if(auth()->user()->role->name == 'Quản trị viên')
            <li>
                <a href="#"><i class="fas fa-tasks"></i> Trạng thái lịch hẹn<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    @if(auth()->user()->role->name == 'Quản trị viên')
                    <li>
                        <a href="{{route('quantri.trangthai_lichhens.index')}}">Danh sách trạng thái lịch hẹn</a>
                        <a href="{{route('quantri.trangthai_lichhens.create')}}">Thêm trạng thái lịch hẹn mới</a>
                    </li>
                    @endif
                </ul>
                <!-- /.nav-second-level -->
            </li>
           @endif
           @if(auth()->user()->role->name == 'Quản trị viên')
            <li>
                <a href="#"><i class="fas fa-code-branch"></i> Ngành nghề, lĩnh vực<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    @if(auth()->user()->role->name == 'Quản trị viên')
                    <li>
                        <a href="{{route('admin.career.list')}}">Danh sách các ngành</a>
                        <a href="{{route('admin.career.create')}}">Thêm ngành mới</a>
                    </li>
                    @endif
                </ul>
                <!-- /.nav-second-level -->
            </li>
            @endif
            @if(auth()->user()->role->name == 'Quản trị viên')
            <li>
                <a href="#"><i class="fa fa-cubes"></i> Vai trò<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    @if(auth()->user()->role->name == 'Quản trị viên')
                    <li>
                        <a href="#">Danh sách vai trò</a>
                        <a href="#">Thêm vai trò mới</a>
                    </li>
                    @endif
                </ul>
                <!-- /.nav-second-level -->
            </li>
            @endif
            @if(auth()->user()->role->name == 'Quản trị viên')
            <li>
                <a href="#"><i class="fas fa-city"></i> Thành phố<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    @if(auth()->user()->role->name == 'Quản trị viên')
                    <li>
                        <a href="{{route('quantri.thanhphos.index')}}">Danh sách thành phố</a>
                        <a href="{{route('quantri.thanhphos.create')}}">Thêm thành phố mới</a>
                    </li>
                    @endif
                </ul>
                <!-- /.nav-second-level -->
            </li>
            @endif
                @if(auth()->user()->role->name == 'Quản trị viên')
                    <li>
                        <a href="#"><i class="fas fa-city"></i> Trình độ<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            @if(auth()->user()->role->name == 'Quản trị viên')
                                <li>
                                    <a href="{{route('quantri.trinhdos.index')}}">Danh sách trình độ</a>
                                    <a href="{{route('quantri.trinhdos.create')}}">Thêm trình độ mới</a>
                                </li>
                            @endif
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                @endif
{{--                @if(auth()->user()->role->name == 'Quản trị viên')--}}
{{--                    <li>--}}
{{--                        <a href="#"><i class="fas fa-city"></i>Đánh giá<span class="fa arrow"></span></a>--}}
{{--                        <ul class="nav nav-second-level">--}}
{{--                            @if(auth()->user()->role->name == 'Quản trị viên')--}}
{{--                                <li>--}}
{{--                                    <a href="{{route('quantri.danhgias.index')}}">Danh sách đánh giá</a>--}}
{{--                                    <a href="{{route('quantri.danhgias.create')}}">Thêm đánh giá mới</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}
{{--                        </ul>--}}
{{--                        <!-- /.nav-second-level -->--}}
{{--                    </li>--}}
{{--                @endif--}}
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
