@extends ('timeline.layout')

@section('content')
    <div class="columns mt-1">

        <div class="column">
            <div class="columns is-multiline">

                <div class="column is-full">
                    @include('.timeline.new-post-form')
                </div>

                <div class="column is-full">
                    @include('timeline.message-board')
                </div>

            </div>
        </div>

        <div class="column is-one-third is-hidden-mobile">
            @include('timeline.top-organizations')
            @include('timeline.following')
        </div>

    </div>
@endsection
