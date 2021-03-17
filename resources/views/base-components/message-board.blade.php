@forelse ($posts as $post)
    <div class="media box is-shadowless is-radiusless">
        <figure class="media-left">
            <img src="{{ $post->user->getAvatar() }}" alt="{{ $post->user->name }} avatar"
                style="height:64px;width:64px;object-fit:cover;border-radius:50%">
            </p>
        </figure>
        <div class="media-content">
            <div class="content">
                <p>
                    <a href="/profiles/{{ $post->user->username }}"><strong>{{ $post->user->username }}</strong></a>
                    <small class="is-pulled-right">{{ $post->created_at->diffForHumans() }}</small>
                    <br>{{ $post->body }} <br>
                </p>
            </div>
            <nav class="level is-mobile is-pulled-right">
                <div class="level-right">
                    <a class="level-item">
                        <span class="icon is-small"><i class="fas fa-dollar-sign"></i></span>
                        <p>Donar</p>
                    </a>
                    <a class="level-item">
                        <span class="icon is-small"><i class="fas fa-hand-sparkles"></i></span>
                        <p class="ml-2">Adoptar</p>
                    </a>
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
