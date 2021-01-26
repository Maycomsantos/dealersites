@extends('layouts.app')

@section('content')
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">
                        <a href="{{ route('users.index') }}">
                            <i class="fa fa-users-cog"></i> Usuários
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

<div class="card">
    <div class="card-header">
        <i class="fa fa-list"></i>
            <h5>Listagem de Usuários do Sistema</h5>
        <hr class="m-b-5">
    </div>

    <div class="card-body">
        <div class="row">

            <div class="col-md-6">
                <form method="GET" action="{{ route('users.index') }}">
                    <div class="input-group mb-3">
                        <input class="form-control" name="search" value="{{ request('search') ?? '' }}" placeholder="Pesquisar......"/>
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary" type="submit" >
                                <i class="fa fa-search"></i> Buscar
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            @can('users.create')
            <div class="col-md-6 text-right">
                <a href="{{ route('users.create') }}" class="btn btn-secondary">
                    <i class="fa fa-plus"></i> Novo Usuário
                </a>
            </div>
            @endcan

            <hr>

            <div class="col-md-12 table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>                            
                            <th>Nome</th>
                            <th>Email</th>                                                        
                            <th class="text-center w-15">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>                        
                            <td>
                                <a href="{{ route('users.show', $user->id) }}">
                                    {{ $user->name }}
                                </a>
                            </td>
                            <td>{{ $user->email }}</td>                                                       
                            <td class="text-center">

                                <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-secondary" title="Visualizar Usuário">
                                    <i class="fa fa-search"></i>
                                </a>

                                @can('users.edit')
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Editar Usuário">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                @endcan

                                @can('users.destroy')
                                    <a href="javascript:;" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $user->id }})" data-toggle="tooltip" data-placement="top" title="Excluir Usuário">
                                        <i class="fa fa-trash"></i>
                                    </a>

                                    <form id="btn-delete-{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}"
                                        method="post" class="hidden">

                                        @method('DELETE')
                                        @csrf
                                    </form>
                                @endcan
                            </td>
                        </tr>
                        
                    @endforeach
                    </tbody>
                </table>
               
                    {{ $users->links() }}
            

        </div>
    </div>
</div>

@endsection
