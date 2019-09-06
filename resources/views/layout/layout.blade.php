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

        /*#home_footer {*/
        /*    position: fixed;*/
        /*    height: 100px;*/
        /*    bottom: 0;*/
        /*    width: 100%;*/
        /*}*/
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


{{--    <style>--}}
{{--        /* Remove the navbar's default margin-bottom and rounded borders */--}}
{{--        .navbar {--}}
{{--            margin-bottom: 0;--}}
{{--            border-radius: 0;--}}
{{--        }--}}

{{--        .navbar-bigger {--}}
{{--            font-size: 110%;--}}
{{--        }--}}

{{--        .carousel-control {--}}
{{--            color: #ff0000;--}}
{{--        }--}}

{{--        /* Add a gray background color and some padding to the footer */--}}
{{--        footer {--}}
{{--            background-color: #2eb82e;--}}
{{--            padding: 25px;--}}
{{--        }--}}

{{--        .carousel-inner img {--}}
{{--            width: 100%; /* Set width to 100% */--}}
{{--            margin: auto;--}}
{{--            min-height: 200px;--}}
{{--        }--}}

{{--        /* Hide the carousel text when the screen is less than 600 pixels wide */--}}
{{--        @media (max-width: 600px) {--}}
{{--            .carousel-caption {--}}
{{--                display: none;--}}
{{--            }--}}
{{--        }--}}
{{--    </style>--}}
