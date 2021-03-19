@extends('layout')

@section('content')

    {{-- Pop up de actualizacion --}}

    @if (session('message'))
        <div class="notification is-primary has-text-centered">
            <button class="delete"></button>
            {{ session('message') }}
        </div>
    @endif

    <div class="columns is-centered mt-1">
        <div class="column is-half">
            <div class="box">


                <form action="/profiles/{{ $user->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="field is-flex is-justify-content-center">
                        <img src="{{ $user->getAvatar() }}" alt="{{ $user->name }} avatar"
                            style="height:128px;width:128px;object-fit:cover;border-radius:50%">
                    </div>

                    <div class="field">
                        <label class="label">Avatar</label>
                        <div class="control has-icons-left has-icons-right">
                            <input name="avatar" class="input @error('avatar') is-danger @enderror " type="file"
                                placeholder="Avatar" value="{{ $user->avatar }}">
                            <span class="icon is-small is-left">
                                <i class="fas fa-portrait"></i>
                            </span>
                        </div>
                        @error('avatar')
                            <p class="help is-danger">{{ $errors->first('avatar') }}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="label">Usuario</label>
                        <div class="control has-icons-left has-icons-right">
                            <input name="username" class="input @error('username') is-danger @enderror " type="text"
                                placeholder="Max. 20 caracteres alfanumericos" value="{{ $user->username }}" required>
                            <span class="icon is-small is-left">
                                <i class="fas fa-smile"></i>
                            </span>
                        </div>
                        @error('username')
                            <p class="help is-danger">{{ $errors->first('username') }}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="label">Nombre</label>
                        <div class="control has-icons-left has-icons-right">
                            <input name="firstname" class="input @error('firstname') is-danger @enderror " type="text"
                                placeholder="Max. 20 caracteres" value="{{ $user->firstname }}" required>
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        @error('firstname')
                            <p class="help is-danger">{{ $errors->first('firstname') }}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="label">Apellido</label>
                        <div class="control has-icons-left has-icons-right">
                            <input name="lastname" class="input @error('lastname') is-danger @enderror " type="text"
                                placeholder="Max. 20 caracteres" value="{{ $user->lastname }}" required>
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        @error('lastname')
                            <p class="help is-danger">{{ $errors->first('lastname') }}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control has-icons-left has-icons-right">
                            <input name="email" class="input @error('email') is-danger @enderror " type="email"
                                placeholder="Email" value="{{ $user->email }}" required>
                            <span class="icon is-small is-left">
                                <i class="fas fa-at"></i>
                            </span>
                        </div>
                        @error('email')
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="label">Bio</label>
                        <div class="control">
                            <textarea name="bio" class="textarea @error('bio') is-danger @enderror "
                                placeholder="Max. 160 caracteres" style=" resize:none">{{ $user->bio }}</textarea>
                        </div>
                        @error('bio')
                            <p class="help is-danger">{{ $errors->first('bio') }}</p>
                        @enderror
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button type="submit" class="button is-success">Actualizar</button>
                        </div>
                        <div class="control">
                            <a href="/profiles/{{ $user->username }}" class="button is-link is-light">Volver</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
