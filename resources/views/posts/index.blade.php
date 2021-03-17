@extends ('layout')

@section('content')
    <div class="columns is-centered mt-1">

        <div class="column is-three-fifths">
            <div class="columns is-multiline">

                <div class="column is-12">
                    @include('posts.new-post-form')
                </div>

                <div class="column">

                    @if (session('message'))
                        <div class="notification is-primary has-text-centered">
                            <button class="delete"></button>
                            {{ session('message') }}
                        </div>
                    @endif

                    @include('base-components.message-board')

                    <div class="column has-text-centered">
                        {{ $posts->links() }}
                    </div>

                </div>



            </div>
        </div>

        <div class="column is-one-third is-multiline is-hidden-mobile">
            @include('posts.top-organizations')
            @include('base-components.following')
        </div>

    </div>
@endsection
