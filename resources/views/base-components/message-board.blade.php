@foreach ($posts as $post)
    <div class="media box">
        <figure class="media-left">
            <p class="image is-64x64 is-1by1">
                <img src="{{ asset('img/nova.jpg') }}" class="is-rounded">
            </p>
        </figure>
        <div class="media-content">
            <div class="content">
                <p>
                    <strong>{{ $post->user->name }}</strong>
                    <br>{{ $post->body }} <br>
                </p>
            </div>
            <nav class="level">
                <div class="level-left">
                    <p><small>{{ $post->created_at->diffForHumans() }}</small></p>
                </div>
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
