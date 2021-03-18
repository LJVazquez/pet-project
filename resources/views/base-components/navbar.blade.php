<nav class="navbar is-info is-fixed-top">
    <div class="container ">
        <div class="navbar-brand">
            <a href="/" class="navbar-item">
                <img src="{{ asset('/img/logo.png') }}" alt="logo"></a>
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div class="navbar-menu" id="nav-links">
            <div class="navbar-start">
                <a href="/explore" class="navbar-item">
                    Explorar
                </a>
            </div>
            <div class="navbar-end">
                @auth
                    <form action="/logout" method="post" class="navbar-item">
                        @csrf
                        <button class="button is-danger">Logout</button>
                    </form>
                @else
                    <div class="navbar-item">
                        <div class="buttons">
                            <a href="/register" class="button is-primary">
                                <strong>Sign up</strong>
                            </a>
                            <a href="/login" class="button is-light">
                                Log in
                            </a>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</nav>
