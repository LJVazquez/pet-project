<aside class="menu box">
    <p class="menu-label has-text-weight-bold">Siguiendo</p>
    <ul class="menu-list">
        @foreach ($following as $user)
            <li class="is-flex is-align-items-center mb-3">
                <figure class="image is-48x48">
                    <img src="https://i.pravatar.cc/150?img=26" alt="" class="is-rounded">
                </figure>
                <a href="/profiles/{{ $user->id }}">{{ $user->name }}</a>
            </li>
        @endforeach
    </ul>
</aside>
