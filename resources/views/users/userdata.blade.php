@extends('layouts.app')

@section('content')

<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">
                        <a href="{{ route('profile.edit') }}">
                            <i class="fa fa-user-edit"></i> Alterar Usuário
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

<div class="row">
    <!-- [ form-element ] start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header p-b-5">
                <h5><i class="fa fa-info-circle"></i>  Preencha os campos abaixo e clique em Salvar Alterações</h5>
            </div> <!-- fim </card-header p-b-5>-->
            <div class="card-body">
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-horizontal" method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                            @method('PUT')

                            @csrf

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Nome *</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name', $user->name) }}">

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Email *</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="{{ $user->email }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label">Nova Senha</label>
                                <div class="col-md-9">
                                    <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Nova Senha">

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Confirmar Senha</label>
                                <div class="col-md-9">
                                    <input type="password" name="password_confirmation" class="form-control"  placeholder="Confirmar Senha">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Foto</label>
                                <div class="col-md-9">
                                    <input type="hidden" name="old_avatar" value="{{ $user->avatar ?? null }}">
                                    <div class="kv-avatar">
                                        <div class="file-loading">
                                            <input type="file" id="avatar" name="avatar" value="{{ old('avatar') }}">
                                        </div>
                                    </div>

                                    @if ($errors->has('avatar'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('avatar') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <hr>

                            <div class="form-group row mb-0">
                                <div class="col-md-9 offset-md-2">
                                    <button type="submit" class="btn btn-secondary">
                                        <i class="fa fa-check"></i> Salvar Alterações
                                    </button>

                                    <a class="btn btn-light" href="{{ route('home') }}">
                                        <i class="fa fa-undo"></i> Voltar ao Painel
                                    </a>
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
