<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layouts.css') }}">
    @yield('extra-css')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('extra-js')
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
            <div class="container">
                <div class="img-link">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('images/logo-savitac.PNG') }}" alt="logo">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a href="{{ route('home') }}"
                                class="nav-link {{ request()->is('/') ? 'active' : '' }}">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('partner') }}"
                                class="nav-link {{ request()->is('partenaires') ? 'active' : '' }}">Nos Partenaires</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('missions') }}"
                                class="nav-link {{ request()->is('missions') ? 'active' : '' }}">Nos missions</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('mines') }}" 
                            class="nav-link {{ request()->is('mines') ? 'active' : '' }}">Mines</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact') }}"
                                class="nav-link {{ request()->is('contact') ? 'active' : '' }}">Nous contacter</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            {{-- @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                    <li class="divider"></li>
                                    @if (Auth::user()->role->type == 'admin')
                                        <li>
                                            <a href="{{ route('dashboard') }}" class="dropdown-item">
                                                Tableau de bord
                                            </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="{{ route('partner-create') }}" class="dropdown-item">Ajouter un
                                                partenaire</a>
                                        </li>
                                    @endif
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <footer class="text-center p-4 bg-primary text-light">
            &copy; 2024 Copyright:
            <a href="https://www.fiverr.com/dodomayamba?up_rollout=true">Dorian Mayamba</a>
        </footer>
    </div>
    <script type="text/javascript">
        setTimeout(() => {
            $('.alert').fadeOut('slow');
        }, 3000)
    </script>
</body>

</html>
