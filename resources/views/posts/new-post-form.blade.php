<header class="media box is-shadowless is-radiusless">
    <figure class="media-left">
        <p class="image is-64x64 is-square">
            <a href="/profiles/{{ Auth::user()->username }}">
                <img src="{{ Auth::user()->getAvatar() }}" alt="{{ Auth::user()->name }} avatar"
                    class="avatar is-64">
            </a>
        </p>
    </figure>

    <div class="media-content">
        <div class="content">
            <form action="/posts" method="POST" enctype="multipart/form-data">
                @csrf
                <p>
                    <a href="/profiles/{{ Auth::user()->username }}">
                        <strong>{{ Auth::user()->firstname }}</strong>
                        <small>{{ '@' . Auth::user()->username }}</small>
                    </a>
                </p>
                <div class="control">
                    <textarea class="textarea @error('body') is-danger @enderror" name="body"
                        placeholder="Tengo un cachorro de..." style="resize:none" required></textarea>
                </div>
                @error('body')<p class="help is-danger mb-1">{{ $errors->first('body') }}</p>@enderror
                @error('image')<p class="help is-danger mb-1">{{ $errors->first('image') }}</p>@enderror

                <div class="file is-right is-info mt-2" id="upload-image">
                    <label class="file-label">
                        <input class="file-input" type="file" name="image">
                        <span class="file-cta">
                            <span class="file-icon">
                                <i class="far fa-image"></i>
                            </span>
                            <span class="file-label">
                                Cargar
                            </span>
                        </span>
                        <span class="file-name">
                            Subir una imagen
                        </span>
                    </label>
                </div>

                <button type="submit" class="button is-primary is-pulled-right mt-2">Enviar</button>

            </form>
        </div>
    </div>
</header>
