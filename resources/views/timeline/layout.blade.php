<!DOCTYPE html>
<html>

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
        @include('timeline.navbar')
        @yield('content')
    </div>

    <script>
        const burgerIcon = document.querySelector('.navbar-burger');
        burgerIcon.addEventListener('click', () => {
            document.getElementById('nav-links').classList.toggle('is-active')
        })

    </script>
    @yield('js')
</body>

</html>
