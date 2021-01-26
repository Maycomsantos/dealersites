<div class="m-header">
    <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
    <a href="{{ route('home') }}" class="b-brand logo">
            <img src="{{ asset('img/logo.png') }}" style="width:90%" alt="logocontabil" class="logo">
        <i class="fa fa-university logo-thumb"></i>
    </a>
    <a href="{{ route('home') }}" class="mob-toggler">
        <i class="feather icon-more-vertical"></i>
    </a>
</div>

<div class="collapse navbar-collapse">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a href="#!" class="pop-search">
                <i class="feather icon-search"></i>
            </a>
            <div class="search-bar">
                <input type="text" class="form-control border-0 shadow-none" placeholder="Digite o nome do morador">
                <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">

        @can('messages.index')
            <li>
                <div class="dropdown">
                    <a class="dropdown-toggle" href="{{ route('messages.index') }}">
                        <i class="far fa-bell"></i>
                        @if ($alertMessages)
                            <span class="badge bg-danger">
                                <span class="sr-only"></span>
                            </span>
                        @endif
                    </a>
                </div>
            </li>
        @endcan

        <li>
            <div class="dropdown drp-user">
                <a href="#!" class="dropdown-toggle" data-toggle="dropdown">
                    {{-- <x-avatar :source="Auth::user()->avatar" /> --}}
                    {{-- {{ Auth::user()->name }} --}}
                </a>

                <div class="dropdown-menu dropdown-menu-right profile-notification">
                    <ul class="pro-body">

                        @can('profile.edit')
                        <li>
                            <a href="{{ route('profile.edit') }}" class="dropdown-item">
                                <i class="fa fa-user-edit text-gray-400 mr-2"></i>
                                Alterar Usuário
                            </a>
                        </li>
                        @endcan

                        @can('profile')
                        <li>
                            <a href="{{ route('profile') }}" class="dropdown-item">
                                <i class="fa fa-user-circle text-gray-400 mr-2"></i>
                                Meu Perfil
                            </a>
                        </li>
                        @endcan

                      
                    </ul>
                </div>
            </div>
        </li>
       
    </ul>
</div>
