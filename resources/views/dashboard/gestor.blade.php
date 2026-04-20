@extends('layouts.site')

@section('title', 'Dashboard Gestor')

@section('content')
    <section class="page-grid">
        <div class="card">
            <span class="eyebrow">Dashboard Gestor</span>
            <h1>Panell de control del gestor</h1>
            <p class="lead">
                Des d aqui pots administrar usuaris, gestionar la taula principal d organismes i generar documents PDF.
            </p>
            <div class="actions">
                <a class="button" href="{{ route('users.index') }}">Gestio d usuaris</a>
                <a class="button secondary" href="{{ route('organismes.index') }}">Gestio d organismes</a>
                <a class="button secondary" href="{{ route('pdf.certificat') }}">PDF del meu usuari</a>
            </div>
        </div>

        <div class="stats">
            <div class="stat">
                <span class="muted">Usuaris totals</span>
                <strong>{{ \App\Models\User::count() }}</strong>
            </div>
            <div class="stat">
                <span class="muted">Organismes registrats</span>
                <strong>{{ \App\Models\Organisme::count() }}</strong>
            </div>
            <div class="stat">
                <span class="muted">Organismes actius</span>
                <strong>{{ \App\Models\Organisme::where('actiu', true)->count() }}</strong>
            </div>
        </div>
    </section>
@endsection
