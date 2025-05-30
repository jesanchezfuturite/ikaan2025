<div class="main-menu">
    <div class="main-menu-header">
        <img class="img-40" src="{{URL::to('/')}}/back/assets/images/user.png" alt="User-Profile-Image">
        <div class="user-details">
            <span id="more-details">{{ Auth::user()->name }}   <i class="ti-angle-down"></i></span>
        </div>
    </div>
    <div class="main-menu-content">
        <ul class="main-navigation">
            <li class="more-details">
                @if(Auth::user()->id != 1)
                    <a href="{{ route('user.edit', base64_encode(Auth::user()->id)) }}"><i class="ti-user"></i>Mi Pérfil</a>
                @endif
                <a href="{{ route('admin_logout') }}"><i class="ti-layout-sidebar-left"></i>Logout</a>
            </li>

            {{-- Menu --}}
            @foreach($menuItems['parents'] as $k => $item)
                @if( $item->parent_as_child == 1)
                    <li class="nav-item">
                        <a href="{{ url('cms/dashboard').'/'.$item['url'] }}">
                            <i class="{{$item['icon']}}"></i>
                            <span class="pcoded-mtext" >{{$item['name']}}</span>
                        </a>
                    </li>
                @else
                <li class="nav-item">
                    <a href="#!">
                        <span class="pcoded-micon"><i class="{{$item['icon']}}"></i></span>
                        <span class="pcoded-mtext" data-i18n="nav.dash.main">{{$item['name']}}</span>
                        <span class="pcoded-mcaret"></span>
                    </a>

                    @foreach($menuItems[$item->id]['children'] as $ki => $i)
                        @if($i['parent'] == $item['id'])
                            <ul class="tree-1">
                                <li class="has-class">
                                    <a href="{{ url('cms/dashboard').'/'.$i['url'] }}">
                                        <span class="pcoded-mtext" data-i18n="nav.dash.default">{{ $i['name'] }}</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                <li>
                            </ul>
                        @endif
                    @endforeach
                </li>
                
                @endif
            @endforeach
        </ul>
    </div>
</div>