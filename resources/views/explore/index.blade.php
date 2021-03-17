@extends ('layout')

@section('content')
    <div class="columns is-centered mt-1">

        <div class="column is-three-fifths">
            <div class="columns is-multiline">

                {{-- <div class="column is-12">
                    @include('posts.new-post-form')
                </div> --}}

                <div class="column">
                    @include('base-components.message-board')
                </div>

            </div>
        </div>

        <div class="column is-one-third is-multiline is-hidden-mobile">
            @include('posts.top-organizations')
            {{-- @include('base-components.following') --}}
        </div>

    </div>
@endsection
