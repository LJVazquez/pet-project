<header>
    <div class="media box is-shadowless is-radiusless mb-0">
        <figure class="media-left">
            <p class="image is-128x128 is-square">
                <img src="{{ asset('img/nova.jpg') }}" class="is-rounded">
            </p>
        </figure>
        <div class="media-content">
            <div class="content">
                <p>
                    <strong>{{ $user->name }}</strong>
                    <br>
                    <small>{{ '@' . $user->name }}</small>
                    <br>
                    <small>Member since {{ $user->created_at->isoFormat('MMMM Do YYYY') }}</small>
                    <br>
                    <button class="button is-small is-light">Editar perfil</button>
                </p>
            </div>
        </div>

    </div>
    <div class="hero is-small is-white">
        <div class="hero-body">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nihil, aliquam quasi eveniet, qui magni
                nisi molestias repudiandae omnis laboriosam expedita aut porro beatae at itaque. Obcaecati optio
                aspernatur sunt! Facilis obcaecati pariatur temporibus id reiciendis ipsum, delectus, repellat
                perspiciatis eos, sunt nam? Voluptate voluptas ipsam fugit voluptatum, dolor quas.</p>
            <button class="button is-info is-pulled-right mt-1">Seguir</button>
        </div>

    </div>
</header>
