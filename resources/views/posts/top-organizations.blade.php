<aside class="menu box is-shadowless is-radiusless">
    <p class="menu-label has-text-weight-bold">Ultimos usuarios registrados</p>
    <ul class="menu-list">
        @foreach ($users as $user)
            <li class="is-flex is-align-items-center mb-3">
                <img src="{{ $user->getAvatar() }}" alt="" class="avatar is-64">
                <a href="/profiles/{{ $user->username }}">{{ $user->username }}</a>
            </li>
        @endforeach
    </ul>
</aside>
