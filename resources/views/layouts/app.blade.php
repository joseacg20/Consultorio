<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Sistema Medico
                </a>
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
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('patient') }}">{{ __('Soy Paciente') }}</a>
                            </li>
                        @else
                            @php
                                $user = Auth::user();
                                $user->id;
                                $user->roles;
                                $pivotRoles = $user->roles()->orderBy('role_id','asc')->get();
                                $cont = 0;
                                $cont2 = 0;
                            @endphp
                            @if($cont==0)
                                @foreach ($pivotRoles as $role)
                                    @if($role->pivot->role_id == 1)
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                Roles <span class="caret"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('assign') }}">
                                                    Asignar Rol
                                                </a>
                                                <a class="dropdown-item" href="{{ route('administradores.index') }}">
                                                    Ver Roles
                                                </a>
                                                <a class="dropdown-item" href="{{ route('administradores.create') }}">
                                                    Crear Rol 
                                                </a>
                                                {{-- <a class="dropdown-item" href="{{ route('role') }}">
                                                    Desasignar Rol
                                                </a> --}}
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                Notas <span class="caret"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('notas.index') }}">
                                                    Ver Notas
                                                </a>
                                                <a class="dropdown-item" href="{{ route('notas.create') }}">
                                                    Crear Nota 
                                                </a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                Doctores <span class="caret"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('doctores.index') }}">
                                                    Ver Doctores
                                                </a>
                                                <a class="dropdown-item" href="{{ route('doctores.create') }}">
                                                    Registrar Doctor 
                                                </a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                Pacientes <span class="caret"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('pacientes.index') }}">
                                                    Ver Pacientes
                                                </a>
                                                <a class="dropdown-item" href="{{ route('pacientes.create')}}">
                                                    Registrar Pacientes
                                                </a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                Secretarias <span class="caret"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('secretarias.index') }}">
                                                    Ver Secretarias
                                                </a>
                                                <a class="dropdown-item" href="{{ route('secretarias.create') }}">
                                                    Registrar Secretarias 
                                                </a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Cerrar Sesion') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                        @break
                                    @endif
                                    @if($role->pivot->role_id == 2)
                                        @php
                                            $cont=1;
                                        @endphp
                                    @endif
                                    @if($role->pivot->role_id == 3)
                                        @php
                                            $cont2=1;
                                        @endphp
                                    @endif
                                    @if($cont2 == 1 && $cont == 1)
                                        {{-- <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown" href="{{ route('notas.create') }}" role="button">Crear Nota<span class="caret"></span>
                                            </a>
                                        </li> --}}
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                Notas <span class="caret"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('notas.index') }}">
                                                    Ver Notas
                                                </a>
                                                <a class="dropdown-item" href="{{ route('notas.create') }}">
                                                    Crear Nota 
                                                </a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                Pacientes <span class="caret"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('pacientes.index') }}">
                                                    Ver Pacientes
                                                </a>
                                                <a class="dropdown-item" href="{{ route('pacientes.create')}}">
                                                    Registrar Pacientes
                                                </a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Cerrar Sesion') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>                              
                                        @break
                                    @endif
                                    @if($role->pivot->role_id == 3 && $cont==0)
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown" href="{{ route('notas.index') }}" role="button">Notas<span class="caret"></span>
                                            </a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Cerrar Sesion') }}
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                        @break
                                    @endif
                                @endforeach
                            @endif
                            @if($cont == 1 && $cont2 == 0)
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown" href="{{ route('notas.create') }}" role="button">Nota<span class="caret"></span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        Pacientes <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('pacientes.index') }}">
                                            Ver Pacientes
                                        </a>
                                        <a class="dropdown-item" href="{{ route('pacientes.create')}}">
                                            Registrar Pacientes
                                        </a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Cerrar Sesion') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endif
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
