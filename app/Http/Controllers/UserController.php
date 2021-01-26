<?php

namespace App\Http\Controllers;

use App\Models\{User, Condominium, Group,UsersAccess};
use App\Http\Requests\{UserCreateRequest, UserUpdateRequest};

class UserController extends Controller
{

    public function index()
    {
        $users = User::search()
            ->orderBy('name')
            ->paginate(20);

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.tabs');
    }

    public function store(UserCreateRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('avatar')) {
            $data['avatar'] = $this->storeAvatar($request);
        }

        $user = User::create($data);

        return redirect()
            ->route('users.edit', [$user, 'tab' => 'details'])
            ->withToastSuccess('Usuário cadastrado com sucesso!');
    }

    public function show(User $user)
    {
        return view('users.show', [
            'user'          => $user,            
        ]);
    }

    public function edit(User $user)
    {
        return view('users.tabs', [
            'user'          => $user,            
        ]);
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        $data = $request->filled('password')
            ? $request->all()
            : $request->except(['password', 'password_confirmation']);

        if ($request->hasFile('avatar')) {
            $data['avatar'] = $this->storeAvatar($request);
        }

        $user->update($data);

        return redirect('users')
            ->withToastSuccess('Usuário atualizado com sucesso!');
    }

    public function destroy(User $user)
    {
        if ($user == auth()->user()) {
            return back()->withError('Oops, Não é permitido remover o próprio usuário!');
        }

        $user->delete();

        return redirect('users')
            ->withToastSuccess('Usuário excluído com sucesso!');
    }
}