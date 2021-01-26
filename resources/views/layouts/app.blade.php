<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    {{-- <title>{{ $settings->app_name }}</title> --}}

    <link rel="shortcut icon" type="image/ico" href="{{ asset('favicon.ico') }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/fileinput/css/fileinput.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/select2/css/select2.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/summernote/summernote.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">

</head>


<body class="">
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>

    @include('layouts/sidebar')

    <header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed header-condomine">
        @include('layouts/navbar')
    </header>

    <div class="pcoded-main-container">
        <div class="pcoded-content">
            
            <div id="content-box">

                {{-- @includeWhen(userIsSuperAdmin(), 'components.errors') --}}

                @yield('content')


            </div>

            <footer class="sticky-footer bg-white">
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="copyright text-center">
                                    Powered by <strong>{{ $settings->app_name }} </strong> &copy;{{ now()->year }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="{{ asset('js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/pcoded.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/jquery.maskMoney.min.js') }}"></script>

    <script src="{{ asset('js/plugins/apexcharts.min.js') }}"></script>
    <script src="{{ asset('plugins/fileinput/js/fileinput.js') }}"></script>
    <script src="{{ asset('plugins/fileinput/themes/fas/theme.min.js') }}"></script>
    <script src="{{ asset('plugins/fileinput/js/locales/pt-BR.js') }}"></script>
    <script src="{{ asset('plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('plugins/summernote/summernote.js') }}"></script>
    <script src="{{ asset('plugins/datepicker/js/bootstrap-datepicker.min.js') }}"></script>

    <script src="{{ asset('js/functions.js') }}" defer></script>
    <script src="{{ asset('js/plugins.js') }}" defer></script>

    <script>
        var baseUrl = @json(url('/'))

        const setActiveAba = index => $.get(`${baseUrl}/set-active-aba/${index}`)

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
    </script>

    @stack('scripts')
  
</body>
</html>
