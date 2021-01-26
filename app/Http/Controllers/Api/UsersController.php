<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\UsersResource;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        return UsersResource::collection(User::all());
    }
}