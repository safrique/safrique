<!DOCTYPE html>

<html lang="en">

<head>
    <title>safrique</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Free Images --}}
    {{-- https://unsplash.com --}}
    {{-- https://www.freeimages.com/ --}}

    <style>
        h1 {
            text-align: center;
        }

        .content {
            margin-top: 4em;
        }

        .built-with {
            text-align: center;
        }

        .built-with a {
            font-style: italic;
        }
    </style>
</head>

<body>
<header class="home_navbar">
    @include('layout.home_navbar')
</header>

<div class="content">
    <h1>safrique</h1>

    <div class="site_layout">
        @yield('site-layout')
    </div>

    <div class="about_me">
        @yield('about-me')
    </div>

    <div class="home_content">
        @yield('home-content')
    </div>
</div>

<footer>
    @include('layout.home_footer')
</footer>

</body>
</html>
