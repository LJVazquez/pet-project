<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pet project!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a3cc8340a6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    @yield('css')
</head>

<body class="bg-light">
    @include('timeline.navbar')
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script>
        const burgerIcon = document.querySelector('.navbar-burger');
        burgerIcon.addEventListener('click', () => {
            document.getElementById('nav-links').classList.toggle('is-active')
        })

        @yield('js-in')

    </script>
    @yield('js-out')
</body>

</html>
