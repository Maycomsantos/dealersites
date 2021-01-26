@extends('layouts.app')

@section('content')

<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">
                        <a href="{{ route('users.index') }}">
                            <i class="fa fa-users-cog"></i>
                            {{ isset($user->id) ? 'Editar Usuário' : 'Novo Usuário' }}
                        </a>
                    </h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#!">Preferências</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="container-fluid">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">

                <a class="nav-item nav-link @activeTab('')" data-toggle="tab" href="#tab-default">
                    Dados Cadastrais
                </a>

                @isset($user)
                    <a class="nav-item nav-link @activeTab('details')" data-toggle="tab" href="#tab-details">
                        Permissões Unidades
                    </a>
                @endisset
            </div>
        </nav>

        <div class="tab-content">

            <div class="tab-pane fade show @activeTab('')" id="tab-default">
                @include('users.tabs.form')
            </div>

            @isset($user)

                <div class="tab-pane fade show @activeTab('details')" id="tab-details">
                    @include('users.tabs.condominiums-permission')
                </div>

            @endisset
        </div>
    </div>
</div>
@endsection

@include('users.scripts.avatar')
