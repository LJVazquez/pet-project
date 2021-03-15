@extends ('layout')

@section('content')
    <div class="columns mt-1">

        <div class="column">
            <div class="columns is-multiline">

                <div class="column is-full">
                    @include('profiles.header')
                    @include('base-components.message-board')
                </div>

            </div>
        </div>

        <div class="column is-one-third is-multiline is-hidden-mobile">
            @include('base-components.following')
        </div>

    </div>
@endsection
