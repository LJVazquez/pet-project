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

                <form action="/profiles/{{ $user->id }}" method="post">
                    @csrf
                    @method('PATCH')

                    <div class="field">
                        <label class="label">Usuario</label>
                        <div class="control has-icons-left has-icons-right">
                            <input name="username" class="input @error('username') is-danger @enderror " type="text"
                                placeholder="Usuario" value="{{ $user->username }}">
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        @error('username')username
                            <p class="help is-error">{{ $errors->first('username') }}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="label">Nombre</label>
                        <div class="control has-icons-left has-icons-right">
                            <input name="firstname" class="input @error('firstname') is-danger @enderror " type="text"
                                placeholder="Nombre" value="{{ $user->firstname }}">
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        @error('firstname')
                            <p class="help is-error">{{ $errors->first('firstname') }}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="label">Apellido</label>
                        <div class="control has-icons-left has-icons-right">
                            <input name="lastname" class="input @error('lastname') is-danger @enderror " type="text"
                                placeholder="Apellido" value="{{ $user->lastname }}">
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        @error('lastname')
                            <p class="help is-error">{{ $errors->first('lastname') }}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control has-icons-left has-icons-right">
                            <input name="email" class="input @error('email') is-danger @enderror " type="text"
                                placeholder="Email" value="{{ $user->email }}">
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        @error('email')
                            <p class="help is-error">{{ $errors->first('email') }}</p>
                        @enderror
                    </div>

                    <label class="label">Tipo de usuario</label>
                    {{-- <div class="field">
                        <label class="label">Subject</label>
                        <div class="control">
                            <div class="select">
                                <select>
                                    <option>Select dropdown</option>
                                    <option>With options</option>
                                </select>
                            </div>
                        </div>
                    </div> --}}

                    <div class="field">
                        <label class="label">Bio</label>
                        <div class="control">
                            <textarea class="textarea" placeholder="Textarea" style="resize:none"></textarea>
                        </div>
                    </div>

                    {{-- <div class="field">
                        <div class="control">
                            <label class="checkbox">
                                <input type="checkbox">
                                I agree to the <a href="#">terms and conditions</a>
                            </label>
                        </div>
                    </div> --}}

                    {{-- <div class="field">
                        <div class="control">
                            <label class="radio">
                                <input type="radio" name="question">
                                Yes
                            </label>
                            <label class="radio">
                                <input type="radio" name="question">
                                No
                            </label>
                        </div>
                    </div> --}}

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
