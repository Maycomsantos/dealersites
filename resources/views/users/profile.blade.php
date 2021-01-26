@extends('layouts.app')

@section('content')
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">
                        <a href="{{ route('profile') }}"> <i class="fa fa-user-circle"></i> Meu Perfil</a>
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

<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">

                        <div class="card-header py-3 bg-light">
                            <div class="text-center">
                                <img class="rounded-circle img-profile" src="{{ uploads_path($user->avatar) }}" width="120">
                            </div>
                        </div>

                        <div class="card-header">
                            <div class="text-right">
                                @can('profile.edit')
                                <a href="{{ route('profile.edit') }}" class="btn btn-sm btn-secondary">
                                    Alterar Dados do Usuário
                                </a>
                                @endcan
                            </div>
                        </div>

                        <hr>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nome</label>
                            <div class="col-md-9">
                                <p class="form-control-plaintext">{{ $user->name }}</p>
                            </div>
                        </div>

                        <hr class="hr-dotted">

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-md-9">
                                <p class="form-control-plaintext">{{ $user->email }}</p>
                            </div>
                        </div>

                        <hr class="hr-dotted">

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Grupo</label>
                            <div class="col-md-9">
                                <p class="form-control-plaintext">{{ $user->group->name }}</p>
                            </div>
                        </div>

                        <hr class="hr-dotted">

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Unidade</label>
                            <div class="col-md-9">
                                <p class="form-control-plaintext">{{ $user->apartment->fullname }}</p>
                            </div>
                        </div>

                        <hr class="hr-dotted">

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Qtd. Acessos</label>
                            <div class="col-md-9">
                                <p class="form-control-plaintext">{{ $user->access_number }}</p>
                            </div>
                        </div>

                        <hr class="hr-dotted">

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Último Login em</label>
                            <div class="col-md-9">
                                <p class="form-control-plaintext">
                                    {{ $user->last_login_at->format('d/m/Y H:i:s') }}
                                </p>
                            </div>
                        </div>

                        <hr class="hr-dotted">

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Status</label>
                            <div class="col-md-9">
                                <p class="form-control-plaintext">
                                    {{ icon_status($user->status) }}
                                </p>
                            </div>
                        </div>





                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- fim </card> -->
    </div> <!-- fim </c2l-md-14> -->
    <!-- [ form-element ] end -->
</div> <!-- fim </row> -->
@endsection

@include('users.scripts.avatar')
