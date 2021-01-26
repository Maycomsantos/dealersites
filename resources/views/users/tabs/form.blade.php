{{--  @extends('layouts.app')

@section('content')

<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">
                        <a href="{{ route('users.index') }}">
                            <i class="fa fa-users-cog"></i>
                            {{ isset($group->id) ? 'Editar Usuário' : 'Novo Usuário' }}
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
</div>  --}}

<div class="card">
    <div class="card-header">
        <i class="fa fa-info-circle"></i>
        <h5>Preencha os campos e clique em Salvar Usuário</h5>
        <hr class="m-b-5">
    </div>

    <div class="card-body">
        @isset($user)
            <form method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
                @method('PUT')
        @else
            <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
        @endisset

        @csrf

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nome *</label>
            <div class="col-md-9">
                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user->name ?? null) }}" placeholder="Nome" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email *</label>
            <div class="col-md-9">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email ?? null) }}" placeholder="Email" >

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Grupo *</label>
            <div class="col-md-9">
                <select name="group_id" class="form-control @error('group_id') is-invalid @enderror select2" style="width:100%;">
                    <option value="">Selecione o grupo</option>
                    @foreach($groups as $group)
                        <option value="{{ $group->id }}"
                            {{ set_selected($group->id, old('group_id', $user->group_id ?? null)) }}>
                            {{ $group->name }}
                        </option>
                    @endforeach
                </select>

                @error('group_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Unidade *</label>
            <div class="col-md-9">
                <select name="apartment_id" class="form-control @error('apartment_id') is-invalid @enderror select2" style="width:100%;">
                    <option value="">Selecione o unidade </option>
                    @foreach($condominiums as $condominium)
                        <optgroup label="{{ $condominium->name }}">
                            @foreach($condominium->blocks as $block)
                                <optgroup label="{{ $block->name }}">
                                    @foreach($block->apartments as $apartment)
                                        <option value="{{ $apartment->id }}"
                                            {{ set_selected($apartment->id, old('apartment_id', $user->apartment_id ?? null)) }}>
                                            {{ $apartment->name }}
                                        </option>
                                    @endforeach
                                </optgroup>
                            @endforeach
                        </optgroup>
                    @endforeach
                </select>

                @error('apartment_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Senha</label>
            <div class="col-md-9">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Senha">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Confirmar Senha</label>
            <div class="col-md-9">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Senha">
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

                @error('avatar'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Status</label>
            <div class="col-md-9">
                <input type="hidden" name="status" value="0">
                <input type="checkbox" name="status" value="1"
                    {{ set_checked(old('status', $group->status ?? 1), 1) }}>

                @error('status')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <hr>

        <div class="form-group row mb-0">
            <div class="col-md-9 offset-md-2">
                <button type="submit" class="btn btn-secondary">
                    <i class="fa fa-check"></i> Salvar Usuário
                </button>

                <a class="btn btn-light" href="{{ route('users.index') }}">
                    <i class="fa fa-undo"></i> Voltar à listagem
                </a>
            </div>
        </div>

        </form>

    </div> <!-- </card-body> -->
</div> <!-- </card> -->

{{--  @endsection  --}}


