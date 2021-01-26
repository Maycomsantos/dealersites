@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h4 mb-0 text-gray-800">
                Painel de Controle
            </h1>
        </div>

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card bg-c-blue order-card">
                    <div class="card-body">
                        <h6 class="text-white">Usuários</h6>
                        <h2 class="text-right text-white">
                            <i class="fa fa-users float-left"></i>
                            <span>{{ $users }}</span>
                            <a  href="/users" class="fas fa-angle-up"></a>
                        </h2>
                    </div>
                </div>
            </div>
           
        <div class="row">
            <div class="col-lg-12 mb-4">
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-gray">
                            <i class="fa fa-question-circle"></i> Ajuda e Suporte
                        </h6>
                    </div>
                    {{-- <div class="card-body">
                        <p>Seja bem vindo ao {{ $settings->app_name . ', ' . Auth::user()->name }}.</p>
                        <p>
                            Caso ocorra algum problema ou dúvida na utilização do sistema, entre em contato conosco pelo
                            email
                            <a href="mailto:{{ $settings->email }}" class="font-weight-bold text-primary"
                                target="_top">{{ $settings->email }}</a> ou pelo telefone
                            {{ $settings->phone }}
                        </p>
                    </div> --}}
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
