<header class="box has-background-info"
    style="background: url('https://i0.wp.com/discussingfilm.net/wp-content/uploads/2019/05/67d4b2dd-1320-4276-9ab9-3660344c8594.jpeg?fit=810%2C405&ssl=1') center center; background-size:cover;">
    <div class="media">
        <div class="media-left">
            <figure class="image is-128x128 is-1by1">
                <img src="{{ asset('img/nova.jpg') }}" alt="{{ $user->name }} avatar" class="is-rounded">
            </figure>
        </div>
        <div class="media-content">
            <div class="content">
                <p class="has-text-white"><span class="title has-text-white">{{ $user->name }}</span>
                    <br>
                    {{ '@' . $user->name }}
                    <br>
                    Joined {{ $user->created_at->diffForHumans() }}
                </p>
            </div>
        </div>
        <div class="media-right">
            <button class="button is-small is-white">Editar perfil</button>
            <button class="button is-small is-info">Seguir</button>
        </div>
    </div>
</header>
