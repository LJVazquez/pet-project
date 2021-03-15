@extends ('timeline.layout')

@section('content')
    <div class="columns mt-1">

        <div class="column is-one-fifth">
        </div>

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

        <div class="column is-one-quarter is-hidden-touch">
            @include('timeline.top-organizations')
        </div>

    </div>
@endsection
