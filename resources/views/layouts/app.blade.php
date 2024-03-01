<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/boosted@5.3.2/dist/css/boosted.min.css" rel="stylesheet"
          integrity="sha384-fyenpx19UpfUhZ+SD9o9IdxeIJKE6upKx0B54OcXy1TqnO660Qw9xw6rOASP+eir" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/boosted@5.3.2/dist/js/boosted.bundle.min.js"
            integrity="sha384-+lAXqnipqQpjxMdd/9Hp2GOzB4aIouKEYRZ7AE66h68BDob7UlMLpZY7w7SqrC+M"
            crossorigin="anonymous"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .map-orange{margin: 50px auto;position: relative; width: 200px}

    </style>

</head>

<body>
<div id="app">
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark" aria-label="Main navigation">
        <div class="container-xxl">
            <div class="navbar-brand me-auto me-lg-4">
                <a class="stretched-link" href="/">
                    <img src="https://boosted.orange.com/docs/5.3/assets/brand/orange-logo.svg" width="50" height="50"
                         alt="Boosted - Back to Home" loading="lazy">
                </a>
            </div>


            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target=".bd-navbar"
                    aria-controls="bd-navbar1 bd-navbar2" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="bd-navbar1" class="navbar-collapse collapse me-lg-auto bd-navbar mb-0 border-0">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/"
                           onclick="dataLayer.push({'event': 'clic', 'site_name':'accessibility-boosted', 'phase':'prod', 'track_category':'navbar', 'track_name':'home'});">Home</a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link active" aria-current="true" href="/docs/5.3/getting-started/introduction/"--}}
{{--                           onclick="dataLayer.push({'event': 'clic', 'site_name':'accessibility-boosted', 'phase':'prod', 'track_category':'navbar', 'track_name':'docs'});">Docs</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="/docs/5.3/examples/"--}}
{{--                           onclick="dataLayer.push({'event': 'clic', 'site_name':'accessibility-boosted', 'phase':'prod', 'track_category':'navbar', 'track_name':'examples'});">Examples</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="/docs/5.3/guidelines/"--}}
{{--                           onclick="dataLayer.push({'event': 'clic', 'site_name':'accessibility-boosted', 'phase':'prod', 'track_category':'navbar', 'track_name':'guidelines'});">Design--}}
{{--                            guidelines</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="https://oran.ge/icons" target="_blank" rel="noopener"--}}
{{--                           onclick="dataLayer.push({'event': 'clic', 'site_name':'accessibility-boosted', 'phase':'prod', 'track_category':'navbar', 'track_name':'icons'});">Solaris--}}
{{--                            icons</a>--}}
{{--                    </li>--}}
                </ul>
            </div>
        </div>
    </nav>
    {{--
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Employee track system') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
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
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
    --}}

    <main class="container py-4 ">
        @yield('content')
    </main>
</div>
<!-- Scripts -->
<script src="{{ asset('js/boosted.bundle.min.js') }}" defer></script>
@yield('scripts')
</body>
</html>
