<nav class="navbar header-navbar">
    <div class="navbar-wrapper">
        {{-- logo --}}
        <div class="navbar-logo">
            <a class="mobile-menu" id="mobile-collapse" href="{{URL::to(Config::get('app.base_url_admin'))}}">
                <i class="ti-menu"></i>
            </a>
            <a class="mobile-search morphsearch-search" href="{{URL::to(Config::get('app.base_url_admin'))}}">
                <i class="ti-search"></i>
            </a>
            <a href="{{URL::to(Config::get('app.base_url_admin'))}}">
                <img class="img-fluid" src="{{url('/back/assets/images/logo.png')}}" alt="Theme-Logo" />
            </a>
            <a class="mobile-options">
                <i class="ti-more"></i>
            </a>
        </div>

        {{-- top menu --}}
        <div class="navbar-container container-fluid">
            <div>
                {{-- nav left --}}
                <ul class="nav-left">
                    <li>
                        <a id="collapse-menu" href="#">
                            <i class="ti-menu"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#!" onclick="javascript:toggleFullScreen()">
                            <i class="ti-fullscreen"></i>
                        </a>
                    </li>
                </ul>

                {{-- nav right --}}
                <ul class="nav-right">
                    <li class="user-profile header-notification">
                        <a href="#!">
                            <img src="{{url('/back/assets/images/user.png')}}" alt="User-Profile-Image">
                            <span>{{ Auth::user()->name }}</span>
                            <i class="ti-angle-down"></i>
                        </a>

                        <ul class="show-notification profile-notification">
                            <li>
                                <a href="{{route('admin_logout')}}">
                                    <i class="ti-layout-sidebar-left"></i> Cerrar sesión
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
