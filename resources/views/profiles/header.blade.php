<header>
    <div class="media box is-shadowless is-radiusless mb-0">
        <figure class="media-left">
            <img src="{{ $user->getAvatar() }}" alt="{{ $user->name }} avatar"
                style="height:128px;width:128px;object-fit:cover;border-radius:50%">
        </figure>
        <div class="media-content">
            <div class="content">
                <p>
                    <strong>{{ $user->firstname . ' ' . $user->lastname }}</strong>
                    <br>
                    <small>{{ '@' . $user->username }}</small>
                    <br>
                    <small>Member since {{ $user->created_at->isoFormat('MMMM Do YYYY') }}</small>
                    <br>
                    @can('edit', $user)
                        <a href="/profiles/{{ $user->id }}/edit" class="button is-small is-light">Editar perfil</a>
                    @endcan
                </p>
            </div>
        </div>

    </div>
    <div class="hero is-small is-white">
        <div class="hero-body">
            <p>{{ $user->bio ? $user->bio : 'Este usuario todavía no compartió su bio :(' }}</p>
            <form action="/profiles/{{ $user->id }}/follow" method="POST">
                @csrf
                @unless(Auth::id() === $user->id)
                    <button type="submit" class="button is-info is-pulled-right mt-1">
                        {{ Auth::user()->isFollowing($user) ? 'Dejar de seguir' : 'Seguir' }}
                    </button>
                @endunless
            </form>
        </div>
    </div>
</header>
