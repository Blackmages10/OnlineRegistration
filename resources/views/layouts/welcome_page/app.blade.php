<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>{{ config('app.name', 'Online Registration') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">



</head>
<body>
    <div id="app">

         <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar_gradient">
            <div class="container-fluid ">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li>

                    </li>
                </ul>
                <form class="d-flex">
                    @if (Route::has('login'))
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                            <li class="nav-item">
                                <a class="button1 five" id="button1" href="{{ url('/') }}" >Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="button1 five" id="button1" href="{{ url('/about') }}" >About Us</a>
                            </li>
                            <li class="nav-item">
                            @auth
                              <a class="button1 five " id="button1" href="{{ url('/home') }}" >{{ auth()->user()->first_name }}</a>
                            </li>
                            @else
                            <li class="nav-item">
                            <a class="button1 five" id="button1" href="{{ route('login') }}" >Log in</a>
                                </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="button1 five" id="button1" href="{{ route('register') }}" >Register</a>
                            </li>
                            @endif
                            @endauth


                    </ul>
                @endif

                </form>
              </div>
            </div>
          </nav>


        <main class="py-4">
            @yield('content')
        </main>
    </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>



    </body>
</html>
