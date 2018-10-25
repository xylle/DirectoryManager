<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ URL::asset('js/app.js') }}" defer></script>
    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="{{ URL::asset('asset/bootstrap-4.1.1/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('asset/datatables-1.10.19/css/dataTables.bootstrap4.min.css') }}">

    <!-- Font Awesome JS -->
    <script defer src="{{ URL::asset('asset/fontawesome-free-5.1.0-web/js/solid.js') }}"></script>
    <script defer src="{{ URL::asset('asset/fontawesome-free-5.1.0-web/js/fontawesome.js') }}"></script>
    <!-- jQuery - Slim version (=without AJAX) -->
    <script src="{{ URL::asset('asset/jquery-3.3.1/jquery-3.3.1.min.js') }}"></script>
    <!-- Popper.JS -->
    <script src="{{ URL::asset('asset/popper-1.14.3/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ URL::asset('asset/bootstrap-4.1.1/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('asset/datatables-1.10.19/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('asset/datatables-1.10.19/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- <script src="{{ URL::asset('asset/js-cookie-2.2.0/js.cookie.min.js') }}"></script> -->

    <!-- Fonts -->
    <link href="{{ URL::asset('css/nunito.css') }}" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index') }}"> Users </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('groups.index') }}"> Groups </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('computers.index') }}"> Computers </a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
