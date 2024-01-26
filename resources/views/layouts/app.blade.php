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
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">

        <div class="container">
            <header class="blog-header py-5">
                <div class="row flex-nowrap justify-content-between align-items-center">

                    <div class="col-8 ">
                        <a class="blog-header-logo text-dark school-logo " href="{{ url('/') }}">Old School</a>
                    </div>

                    <div class="col-4 d-flex justify-content-end align-items-center">


                        @if (Route::has('login'))
                            {{-- Will check if the user is authenticated or not --}}
                            @auth
                                {{-- If the user is authenticated redirect to home --}}
                                <a class="btn btn-sm btn-outline-secondary mx-3" href="{{ url('/home') }}">Home</a>
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Welcome, {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            @else
                                <a class="btn btn-sm btn-outline-secondary mx-3" href="{{ route('login') }}">Login</a>
                                @if (Route::has('register'))
                                    <a class="btn btn-sm btn-outline-secondary" href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        @endif


                    </div>
                </div>
            </header>
        </div>



        <main class="py-4 container">
            @yield('content')
        </main>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    @stack('scripts')

</body>

</html>
