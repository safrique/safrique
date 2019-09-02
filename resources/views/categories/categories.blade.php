<!DOCTYPE html>

<html lang="en">
<head>
    <title>safrique categories</title>

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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">

    <style>
        .categories-layout {
            margin-top: 2em;
        }
    </style>
</head>

<body>

<div id="categories">
    <div class="navbar">
        <navbar></navbar>
    </div>

    <div class="categories-layout">
        <div class="level">
            <h1 class="subtitle is-2 level-item has-text-centered">safrique</h1>
        </div>

        {{--    <router-link to="/categories">--}}
        {{--        <span class="icon is-small"><i class="fa fa-bars" aria-hidden="true"></i></span>--}}
        {{--        <span>Categories</span>--}}
        {{--    </router-link>--}}

        <router-view></router-view>

{{--        <categories></categories>--}}
    </div>
</div>
</body>
</html>



