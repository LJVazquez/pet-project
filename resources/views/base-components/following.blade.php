<aside class="menu box is-shadowless is-radiusless">
    <p class="menu-label has-text-weight-bold">Siguiendo</p>
    <ul class="menu-list">
        @foreach ($following as $user)
            <li class="is-flex is-align-items-center mb-3">
                <img src="{{ $user->getAvatar() }}" alt="{{ $user->name }} avatar"
                    style="height:48px;width:48px;object-fit:cover;border-radius:50%">
                <a href="/profiles/{{ $user->username }}">{{ $user->username }}</a>
            </li>
        @endforeach
    </ul>
</aside>
