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
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nihil, aliquam quasi eveniet, qui magni
                nisi molestias repudiandae omnis laboriosam expedita aut porro beatae at itaque. Obcaecati optio
                aspernatur sunt! Facilis obcaecati pariatur temporibus id reiciendis ipsum, delectus, repellat
                perspiciatis eos, sunt nam? Voluptate voluptas ipsam fugit voluptatum, dolor quas.</p>
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
