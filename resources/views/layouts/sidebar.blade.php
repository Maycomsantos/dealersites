
<nav class="pcoded-navbar menupos-fixed menu-light ">
    <div class="navbar-wrapper  ">

        <div class="navbar-content scroll-div ">
            <ul class="nav pcoded-inner-navbar ">

                <li class="nav-item pcoded-menu-caption">
                    <label>Dealersites</label>
                </li>


                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <span class="pcoded-micon">
                            <i class="fas fa-fw fa-tachometer-alt"></i>
                        </span>
                        <span class="pcoded-mtext">Painel de Controle</span>
                    </a>
                </li>

                @foreach ($modules as $aba => $options)
                    <li class="nav-item pcoded-hasmenu {{ session('active_aba') == $loop->index ? 'active pcoded-trigger' : '' }}">
                        <a href="#" onclick="setActiveAba({{ $loop->index }})">
                            <span class="pcoded-micon">
                                <i class="fas fa-fw {{ $options->icon }}"></i>
                            </span>
                            <span class="pcoded-mtext">{{ $aba }}</span>
                        </a>
                        <ul class="pcoded-submenu">
                            @foreach ($options->menus as $menu)
                                <li class="" aria-labelledby="headingPages">
                                    <a class="collapse-item" href="{{ route($menu->route) }}">
                                        <i class="{{ $menu->icon }}"></i> {{ $menu->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
                

            </ul>
        </div>
    </div>
</nav>
