<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('oauth/token', '\Laravel\Passport\Http\Controllers\AccessTokenController@issueToken')
    ->middleware('passport-credentials');

Route::post('oauth/token/refresh', '\Laravel\Passport\Http\Controllers\TransientTokenController@refresh')
    ->middleware(['web', 'auth', 'passport-credentials']);

    Route::middleware(['auth:api', 'check.user'])->group(function () {
        Route::ApiResource('users', 'Api\UsersController');
});