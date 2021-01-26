<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $settings->app_name }} | Login</title>

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body>
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="card">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
