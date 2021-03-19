<aside class="menu box is-shadowless is-radiusless">
    <p class="menu-label has-text-weight-bold">Siguiendo</p>
    <ul class="menu-list">
        @forelse ($following as $user)
            <li class="is-flex is-align-items-center mb-3">
                <img src="{{ $user->getAvatar() }}" alt="{{ $user->name }} avatar" class="avatar">
                <a href="/profiles/{{ $user->username }}">{{ $user->username }}</a>
            </li>
        @empty
            <p class="help">Vacio! :(</p>
        @endforelse
    </ul>
</aside>
