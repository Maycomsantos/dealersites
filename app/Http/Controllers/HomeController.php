<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        return view('home',[
            'users' =>  User::count(),
        ]);
    }

    public function setActiveAba($index)
    {
        session(['active_aba' => $index]);
    }

    public function resetActiveAba()
    {
        session(['active_aba' => -1]);
    }
}