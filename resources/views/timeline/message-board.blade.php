@foreach (range(1, 5) as $post)
    <div class="media box">
        <figure class="media-left">
            <p class="image is-64x64">
                <img src="https://bulma.io/images/placeholders/128x128.png" class="is-rounded">
            </p>
        </figure>
        <div class="media-content">
            <div class="content">
                <p>
                    <strong>Barbara Middleton</strong>
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porta eros lacus, nec ultricies elit
                    blandit non. Suspendisse pellentesque mauris sit amet dolor blandit rutrum. Nunc in tempus turpis.
                    <br>
                </p>
            </div>
            <nav class="level">
                <div class="level-left">
                    <p><small>Publicado hace 3 hs</small></p>
                </div>
                <div class="level-right">
                    <a class="level-item">
                        <span class="icon is-small"><i class="fas fa-dollar-sign"></i></span>
                    </a>
                    <a class="level-item">
                        <span class="icon is-small"><i class="fas fa-hand-sparkles"></i></span>
                    </a>
                </div>
            </nav>
        </div>
    </div>
@endforeach
