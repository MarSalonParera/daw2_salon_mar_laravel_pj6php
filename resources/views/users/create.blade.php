@extends('layouts.site')

@section('title', 'Crear usuari')

@section('content')
    <section class="form-card">
        <span class="eyebrow">Nou usuari</span>
        <h1>Crear usuari de l aplicacio</h1>

        <form method="POST" action="{{ route('users.store') }}">
            @csrf
            <div class="form-grid">
                <div class="field">
                    <label for="name">Nom</label>
                    <input id="name" name="name" value="{{ old('name') }}" required>
                </div>

                <div class="field">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" required>
                </div>

                <div class="field">
                    <label for="role">Role</label>
                    <select id="role" name="role" required>
                        <option value="gestor" @selected(old('role') === 'gestor')>Gestor</option>
                        <option value="consultor" @selected(old('role') === 'consultor')>Consultor</option>
                    </select>
                </div>

                <div class="field">
                    <label for="password">Contrasenya</label>
                    <input id="password" name="password" type="password" required>
                </div>

                <div class="field-full">
                    <label for="password_confirmation">Confirmar contrasenya</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" required>
                </div>
            </div>

            <div class="actions">
                <button class="button" type="submit">Crear</button>
                <a class="button secondary" href="{{ route('users.index') }}">Cancelar</a>
            </div>
        </form>
    </section>
@endsection
