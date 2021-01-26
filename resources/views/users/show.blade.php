@extends('layouts.app')

@section('content')
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">
                        <a href="{{ route('users.show', $user->id) }}">
                            <i class="fa fa-users-cog"></i> Visualizar Usuário
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
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">

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
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


