<aside class="menu box is-shadowless is-radiusless">
    <p class="menu-label has-text-weight-bold">Organizaciones top</p>
    <ul class="menu-list">
        @foreach (range(1, 5) as $friend)
            <li class="is-flex is-align-items-center mb-3">
                <figure class="image is-48x48">
                    <img src="https://i.pravatar.cc/150?img=26" alt="" class="is-rounded">
                </figure>
                <a href="#">Jackie</a>
            </li>
        @endforeach
    </ul>
</aside>
