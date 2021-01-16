<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{route('index')}}"><h2>Job <em>Agency</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ request()->routeIs('index') ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('index')}}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item {{ request()->routeIs('job.list') ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('job.list')}}">Jobs</a>
                    </li>

                    <li class="nav-item {{ request()->routeIs('about-us') ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('about-us')}}">About us</a>
                    </li>

                    <li class="nav-item {{ request()->routeIs('contact-us') ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('contact-us')}}">Contact Us</a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown {{ request()->routeIs('user.*') ? 'active' : '' }}">
                            <a class="nav-link dropdown-toggle"
                               data-toggle="dropdown" href="#"
                               role="button" aria-haspopup="true"
                               aria-expanded="false">{{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu">
                                @if(Auth::user()->hasRole(Auth::id(), 3))
                                    <a class="dropdown-item" href="{{ route('employer.job.list') }}">Quản lý</a>
                                @elseif(Auth::user()->hasRole(Auth::id(), 2))
                                    <a class="dropdown-item" href="{{ route('admin.user.list') }}">Quản lý</a>
                                @endif
                                <a class="dropdown-item" href="{{ route('user.profile.list') }}">Hồ sơ</a>
                                <a class="dropdown-item" href="{{ route('user.application.list') }}">Đơn ứng tuyển</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>
