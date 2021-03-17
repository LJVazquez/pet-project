@extends ('layout')

@section('content')
    <div class="columns mt-1">

        <div class="column">
            <div class="columns is-centered is-multiline">

                <div class="column is-full">
                    @include('profiles.header')
                </div>
                <div class="column is-full">

                    @if (session('message'))
                        <div class="notification is-primary has-text-centered">
                            <button class="delete"></button>
                            {{ session('message') }}
                        </div>
                    @endif

                    @include('base-components.message-board')

                </div>

                <div class="column has-text-centered">
                    {{ $posts->links() }}
                </div>

            </div>
        </div>

        <div class="column is-one-third is-multiline is-hidden-mobile">
            @include('base-components.following')
        </div>

    </div>
@endsection
