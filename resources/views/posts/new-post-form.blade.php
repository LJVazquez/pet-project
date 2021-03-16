<header class="media box is-shadowless is-radiusless">
    <figure class="media-left">
        <p class="image is-64x64 is-square">
            <a href="/profiles/{{ Auth::user()->id }}">
                <img src="{{ asset('img/nova.jpg') }}" class="is-rounded">
            </a>
        </p>
    </figure>

    <div class="media-content">
        <div class="content">
            <form action="/posts" method="POST">
                @csrf
                <p>
                    <a href="/profiles/{{ Auth::user()->id }}">
                        <strong>{{ Auth::user()->name }}</strong>
                        <small>{{ '@' . Auth::user()->name }}</small>
                    </a>
                </p>
                <div class="control">
                    <textarea class="textarea @error('body') is-danger @enderror" name="body"
                        placeholder="Tengo un cachorro de..." style="resize:none"></textarea>
                </div>
                @error('body')<p class="has-text-danger mb-1">{{ $errors->first('body') }}</p>@enderror
                <button type="submit" class="button is-primary is-pulled-right mt-2">Enviar</button>
            </form>
        </div>
    </div>
</header>
