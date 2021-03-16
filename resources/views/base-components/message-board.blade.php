@foreach ($posts as $post)
    <div class="media box is-shadowless is-radiusless">
        <figure class="media-left">
            <p class="image is-64x64 is-1by1">
                <img src="{{ asset('img/nova.jpg') }}" class="is-rounded">
            </p>
        </figure>
        <div class="media-content">
            <div class="content">
                <p>
                    <a href="/profiles/{{ $post->user->id }}"><strong>{{ $post->user->name }}</strong></a>
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
@endforeach
