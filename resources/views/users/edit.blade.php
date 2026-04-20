@extends('layouts.site')

@section('title', 'Editar usuari')

@section('content')
    <section class="form-card">
        <span class="eyebrow">Edicio d usuari</span>
        <h1>Modificar usuari</h1>

        <form method="POST" action="{{ route('users.update', $user) }}">
            @csrf
            @method('PUT')

            <div class="form-grid">
                <div class="field">
                    <label for="name">Nom</label>
                    <input id="name" name="name" value="{{ old('name', $user->name) }}" required>
                </div>

                <div class="field">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required>
                </div>

                <div class="field">
                    <label for="role">Role</label>
                    <select id="role" name="role" required>
                        <option value="gestor" @selected(old('role', $user->role) === 'gestor')>Gestor</option>
                        <option value="consultor" @selected(old('role', $user->role) === 'consultor')>Consultor</option>
                    </select>
                </div>

                <div class="field">
                    <label for="password">Nova contrasenya</label>
                    <input id="password" name="password" type="password">
                </div>

                <div class="field-full">
                    <label for="password_confirmation">Confirmar nova contrasenya</label>
                    <input id="password_confirmation" name="password_confirmation" type="password">
                </div>
            </div>

            <div class="actions">
                <button class="button" type="submit">Guardar canvis</button>
                <a class="button secondary" href="{{ route('users.index') }}">Cancelar</a>
            </div>
        </form>
    </section>
@endsection
