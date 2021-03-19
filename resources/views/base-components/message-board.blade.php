@forelse ($posts as $post)

    <div class="media box is-shadowless is-radiusless">

        <figure class="media-left">
            <img src="{{ $post->user->getAvatar() }}" alt="{{ $post->user->name }} avatar"
                style="height:64px;width:64px;object-fit:cover;border-radius:50%">
            </p>
        </figure>

        <div class="media-content">

            <form class="content" action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('DELETE')
                <p>
                    <a href="/profiles/{{ $post->user->username }}"><strong>{{ $post->user->username }}</strong></a>
                    @can('delete', $post)
                        <button type="submit" class="delete is-pulled-right"></button>
                    @endcan
                    <br>{{ $post->body }} <br>
                </p>
            </form>

            @if ($post->image)
                <figure class="image mb-2">
                    <img src="{{ $post->getImage() }}" style="max-height:500px;object-fit:cover">
                </figure>
            @endif


            <nav class="level is-mobile">

                <div class="level-left">
                    <small class="level-item is-pulled-left">{{ $post->created_at->diffForHumans() }}</small>
                </div>

                <div class="level-right">
                    <form action="/posts/{{ $post->id }}/interest" method="POST">
                        @csrf
                        <a class="level-item">
                            @auth
                                <button class="button is-small is-success @if (!$post->isUserInterested(Auth::user())) is-light @endif">
                                    <span class="icon">
                                        <i class="fas fa-hand-sparkles"></i>
                                    </span>
                                    <span>
                                        {{ $post->interesteds->count() ? 'Interesado (' . $post->interesteds->count() . ')' : 'Me interesa' }}</span>
                                </button>
                            @else
                                <button class="button is-small is-success is-light">
                                    <span class="icon">
                                        <i class="fas fa-hand-sparkles"></i>
                                    </span>
                                    <span>
                                        {{ $post->interesteds->count() ? 'Me interesa (' . $post->interesteds->count() . ')' : 'Me interesa' }}</span>
                                </button>
                            @endauth
                        </a>
                    </form>
                </div>
            </nav>
        </div>
    </div>

@empty

    <div class="media box is-shadowless is-radiusless">
        @if (Request::path() === 'posts')
            No hay posts. Agrega nuevos amigos!
        @else
            El usuario todavia no tiene posteos.
        @endif
    </div>

@endforelse
