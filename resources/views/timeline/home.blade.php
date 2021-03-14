@extends ('timeline.layout')

@section('content')
    <div class="container px-0">

        <div class="row justify-content-around gx-0">

            <div class="col-12 col-lg-6 bg-white mb-2 pb-2">
                <div class="border-top border-bottom py-2 d-flex align-items-center">
                    <img src="https://i.pravatar.cc/150?img=15" alt="" class="rounded-circle me-2" height="48">
                    <div class="lh-1">
                        {{ Auth::user()->name }}<br>
                        <span class="fw-light">Usuario</span>
                    </div>
                </div>
                <form action="/posts" method="POST" class="bg-white mx-2">
                    @csrf
                    <textarea type="text" class="form-control my-2 @error('body')border-danger @else border-0 @enderror"
                        name="body" style="resize:none;" value="old('body')"
                        placeholder="Estoy buscando un cachorro de..."></textarea>
                    @error('body')
                        <p class="text-danger">{{ $errors->first('body') }}</p>
                    @enderror
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Publicar</button>
                    </div>
                </form>
            </div>
            <div class="col-12 col-lg-4 mb-2 pb-2 bg-white">
                <h3>Empresas top</h3>
            </div>
        </div>

        <div class="row justify-content-around gx-0">
            <div class="col-12 col-lg-6 my-2 pb-2">
                @foreach ($posts as $post)
                    <div class="card border-0 rounded-0 mb-2">
                        {{-- <img src="..." class="card-img-top" alt="..."> --}}

                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <img src="https://i.pravatar.cc/150?img=15" alt="" class="rounded-circle me-2" height="48">
                                <div class="lh-1">
                                    <span class="fw-bold">{{ Auth::user()->name }}</span><br>
                                    <span class="fw-light">Usuario</span>
                                </div>
                            </div>
                            <p class="card-text">{{ $post->body }}</p>
                            <div class="text-end">
                                <a href="#"><i class="fas fa-hand-sparkles"></i></a>
                                <a class="ms-2" href="#"><i class="fas fa-money-bill-wave"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-12 col-lg-4 bg-white my-2 pb-2">
                <h3>Siguiendo</h3>
            </div>
        </div>

    @endsection
