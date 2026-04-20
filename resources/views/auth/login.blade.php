@extends('layouts.site')

@section('title', 'Validacio')

@section('content')
    <section class="page-grid">
        <div class="form-card" style="max-width: 680px; margin: 0 auto;">
            <span class="eyebrow">Validacio</span>
            <h1>Acces d usuaris</h1>
            <p class="lead">Introdueix les teves credencials per entrar al dashboard corresponent al teu rol.</p>

            <form method="POST" action="{{ route('login.store') }}">
                @csrf
                <div class="form-grid">
                    <div class="field-full">
                        <label for="email">Correu electronic</label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" required autofocus>
                    </div>

                    <div class="field-full">
                        <label for="password">Contrasenya</label>
                        <input id="password" name="password" type="password" required>
                    </div>
                </div>

                <div class="actions">
                    <button class="button" type="submit">Entrar</button>
                    <a class="button secondary" href="{{ route('home') }}">Tornar a inici</a>
                </div>
            </form>

            <p class="footer-note">
                Les contrasenyes dels usuaris es guarden en format hash i els intents no autoritzats es bloquegen i es redirigeixen.
            </p>
        </div>
    </section>
@endsection
