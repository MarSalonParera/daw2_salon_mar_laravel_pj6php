@extends('layouts.site')

@section('title', 'Error de base de dades')

@section('content')
    <section class="page-grid">
        <div class="card">
            <span class="eyebrow">Excepcio</span>
            <h1>No s ha pogut accedir al servidor MySQL</h1>
            <p class="lead">
                S ha produit una excepcio en intentar connectar amb la base de dades. Revisa la configuracio del servidor, les credencials i el servei MySQL o MariaDB.
            </p>
            <p class="muted">{{ $message }}</p>
            <div class="actions">
                <a class="button secondary" href="{{ route('home') }}">Tornar a inici</a>
            </div>
        </div>
    </section>
@endsection
