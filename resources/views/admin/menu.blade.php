@php
    $user = auth()->user();
@endphp
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            @if($user->hasRole($user->id, 2))
                <li>
                    <a href="#"><i class="fa fa-users fa-fw"></i> Người dùng<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{route('admin.user.list')}}">Danh sách người dùng</a>
                        </li>
                    </ul>
                </li>

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
                </li>

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
                </li>

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
                </li>

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
                </li>

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
                </li>

            @endif
            @if($user->hasRole($user->id, 2) || $user->hasRole($user->id, 3))
                <li>
                    <a href="#"><i class="fas fa-sign"></i> Tin tuyển dụng<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{route('employer.job.list')}}">Danh sách tin tuyển dụng</a>
                            <a href="{{route('employer.job.create')}}">Thêm tin tuyển dụng mới</a>
                        </li>
                    </ul>
                </li>
            @endif
            @if($user->hasRole($user->id, 3))
                <li>
                    <a href="#"><i class="fas fa-sign"></i>Đơn ứng tuyển<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{route('employer.application.list')}}">Danh sách tin tuyển dụng</a>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
