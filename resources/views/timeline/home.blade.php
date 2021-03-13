@extends ('timeline.layout')

@section('content')
    <div class="columns mt-1">

        <div class="column is-one-fifth">
            @include('timeline.menu')
        </div>

        <div class="column">
            <div class="columns is-multiline">
                <div class="column is-full">
                    @include('.timeline.message-box')
                </div>
                <div class="column is-full">
                    @include('timeline.board-message')
                </div>
            </div>
        </div>

        <div class="column is-one-quarter is-hidden-touch">
            @include('timeline.top-organizations')
        </div>

    </div>
@endsection
