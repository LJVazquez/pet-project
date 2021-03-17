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
                        <img src="{{ Auth::user()->getAvatar() }}" alt="{{ Auth::user()->name }} avatar"
                            style="height:128px;width:128px;object-fit:cover;border-radius:50%">
                    </div>

                    <div class="field">
                        <label class="label">Avatar</label>
                        <div class="control has-icons-left has-icons-right">
                            <input name="avatar" class="input @error('avatar') is-danger @enderror " type="file"
                                placeholder="Avatar" value="{{ $user->avatar }}">
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
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
                                placeholder="Max. 20 caracteres alfanumericos" value="{{ $user->username }}">
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
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
                                placeholder="Max. 20 caracteres" value="{{ $user->firstname }}">
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
                                placeholder="Max. 20 caracteres" value="{{ $user->lastname }}">
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
                                placeholder="Email" value="{{ $user->email }}">
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        @error('email')
                            <p class="help is-danger">{{ $errors->first('email') }}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="label">Tipo de usuario</label>
                        <div class="control">
                            <div class="select @error('foundation') is-danger @enderror">
                                <select name="foundation">
                                    <option value="0">Particular</option>
                                    <option value="1" {{ $user->foundation ? 'selected' : '' }}>Fundacion</option>
                                </select>
                            </div>
                        </div>
                        @error('foundation')
                            <p class="help is-danger">{{ $errors->first('foundation') }}</p>
                        @enderror
                        @if (session('foundation-error'))
                            <p class="help is-danger">{{ session('foundation-error') }}</p>
                        @endif
                    </div>

                    <div class="field">
                        <label class="label">Bio</label>
                        <div class="control">
                            <textarea name="bio" class="textarea @error('bio') is-danger @enderror "
                                placeholder="Max. 160 caracteres" style=" resize:none">{{ $user->bio }}</textarea>
                        </div>
                        @error('foundation')
                            <p class="help is-danger">{{ $errors->first('bio') }}</p>
                        @enderror
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button type="submit" class="button is-success">Actualizar</button>
                        </div>
                        <div class="control">
                            <a href="/profiles/{{ Auth::id() }}" class="button is-link is-light">Volver</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
                const $notification = $delete.parentNode;

                $delete.addEventListener('click', () => {
                    $notification.parentNode.removeChild($notification);
                });
            });
        });

    </script>
@endsection
