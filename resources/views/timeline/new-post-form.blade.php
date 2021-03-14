<div class="col-12">
    <div class="border-top border-bottom py-2 d-flex align-items-center">
        <img src="https://i.pravatar.cc/150?img=15" alt="" class="rounded-circle me-2" height="48">
        <div class="lh-1">
            {{ Auth::user()->name }}<br>
            <span class="fw-light">Usuario</span>
        </div>
    </div>
</div>

<form action="/posts" method="POST">
    @csrf
    <textarea type="text" class="form-control my-2 @error('body')border-danger @else border-0 @enderror" name="body"
        style="resize:none;" value="old('body')" placeholder="Estoy buscando un cachorro de..."></textarea>
    @error('body')
        <p class="text-danger">{{ $errors->first('body') }}</p>
    @enderror
    <div class="d-grid mx-2">
        <button type="submit" class="btn btn-primary">Publicar</button>
    </div>
</form>
