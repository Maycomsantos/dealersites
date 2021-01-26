@extends('layouts.app')

@section('content')

<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">
                        <a href="{{ route('settings.index') }}">
                            <i class="fa fa-users-cog"></i>
                            Configurações Gerais
                        </a>
                    </h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#!">Configurações</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="card">
    <div class="card-header">
        <i class="fa fa-info-circle"></i>
            <h5>Preencha os campos e clique em Salvar Alteração</h5>
        <hr class="m-b-5">
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('settings.update', $settings->id) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nome do Sistema *</label>
                <div class="col-md-9">
                    <input type="text" name="app_name" class="form-control @error('app_name') is-invalid @enderror"
                        value="{{ old('app_name', $settings->app_name) }}" placeholder="Nome do Sistema">

                    @error('app_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Descrição *</label>
                <div class="col-md-9">
                    <input type="text" name="description" class="form-control @error('description') is-invalid @enderror"
                        value="{{ old('description', $settings->description) }}" placeholder="Descrição">

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email *</label>
                <div class="col-md-9">
                    <input id="email" type="email" class="form-control @error('email') is-invalid' @enderror" name="email"
                        value="{{ old('email', $settings->email) }}" placeholder="Email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Telefone</label>
                <div class="col-md-9">
                    <input type="text" name="phone" class="form-control phone @error('phone') is-invalid @enderror"
                        value="{{ old('phone', $settings->phone) }}" placeholder="(99) 99999-9999">

                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Logo</label>
                <div class="col-md-9">

                    <input type="hidden" name="old_logo" value="{{ $settings->logo }}">

                    <div class="kv-avatar">
                        <div class="file-loading">
                            <input type="file" id="logo" name="logo" value="{{ old('logo') }}">
                        </div>
                    </div>

                    @error('avatar')
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
                        <i class="fa fa-check"></i> Salvar Alteração
                    </button>

                    <a class="btn btn-light" href="{{ route('home') }}">
                        <i class="fa fa-undo"></i> Cancelar
                    </a>
                </div>
            </div>


        </form>

    </div> <!-- </card-body> -->
</div> <!-- </card> -->

@endsection

@push('scripts')
<script type="text/javascript">
    $('#logo').fileinput({
        theme: "fas",
        language: "pt-BR",
        showUpload: false,
        showCancel: false,
        showClose: false,
        showCaption: false,
        removeClass: 'btn btn-danger',
        title: 'teste',
        allowedFileExtensions: [
            'jpg', 'jpeg', 'png'
        ],
        defaultPreviewContent: [
            "<img src='{{ uploads_path($settings->logo ?? "settings/logo.png") }}' class='file-preview-image' width='180'>",
        ],
        fileActionSettings: {
            showRemove: false,
        },
        overwriteInitial: true,
        purifyHtml: true,
    })
</script>
@endpush
