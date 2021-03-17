<!DOCTYPE html>
<html class="has-background-light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <script src="https://kit.fontawesome.com/a3cc8340a6.js" crossorigin="anonymous"></script>
    @yield('css')
</head>

<body class="has-navbar-fixed-top">
    <div class="container">
        @include('base-components.navbar')
        @yield('content')
    </div>

    @include('scripts')
    @yield('js')
</body>

</html>
