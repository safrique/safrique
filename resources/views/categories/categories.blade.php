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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{--    <script src="https://unpkg.com/vue/dist/vue.js"></script>--}}
    {{--    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>--}}
</head>

<body>
{{--<div id="categories" class="categories">--}}
<div id="app" class="categories">
    <router-link to="/">Categories:</router-link>
    <p>
        <router-link to="/basketball">Go to Basketball</router-link> |

        <router-link to="/foo">Go to Foo</router-link> |
        <router-link to="/bar">Go to Bar</router-link>
    </p>

    <router-view></router-view>
</div>
</body>
</html>



