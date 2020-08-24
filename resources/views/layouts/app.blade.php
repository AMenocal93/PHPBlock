<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PhpBLock') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
            <!-- Left Side Of Navbar icon-->
        <nav class="navbar navbar-expand-md navbar-dark bg-primary navbar-laravel">
          <a href="{{url('/home')}}" class="brand-logo"><img src="imagenes/icono.ico" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Cerrar sesión') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url ('/introduccion') }}">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url ('/proyectos')}}">Empezar</a>
                <li class="nav-item">
                    <a class="nav-link" href="{{url ('/Roles')}}">Roles</a>
                    <li class="nav-item">
                       <a class="nav-link" href="{{url ('/usuarios')}}">Usuarios</a>
                       <li class="nav-item">
                           <a class="nav-link dropdown-toggle" href="{{url ('/introduccion') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Ayuda </a>
                           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url ('/introduccion#Logic')}}">Logic</a>
                            <a class="dropdown-item" href="{{url ('/introduccion#Loops')}}">Loops</a>
                            <a class="dropdown-item" href="{{url ('/introduccion#Math')}}">Math</a>
                            <a class="dropdown-item" href="{{url ('/introduccion#Text')}}">Text</a>
                            <a class="dropdown-item" href="{{url ('/introduccion#Colour')}}">Colour</a>
                            <a class="dropdown-item" href="{{url ('/introduccion#Lists')}}">Lists</a>
                            <a class="dropdown-item" href="{{url ('/introduccion#Variables')}}">Variables</a>
                            <a class="dropdown-item" href="{{url ('/introduccion#Funtions')}}">Funciones</a>                             
                        </div>  
                        
                        @endguest
                    </ul>
                </div>
            </nav>
            <main class="py-4">
                @yield('content_app')
            </main>
            
        </div>
    </body>
    </html>
