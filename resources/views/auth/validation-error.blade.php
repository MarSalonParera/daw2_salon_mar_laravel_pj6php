@extends('layouts.site')

@section('title', 'Error de validacio')

@section('content')
    <section class="page-grid">
        <div class="card">
            <span class="eyebrow">Validacio incorrecta</span>
            <h1>No s ha pogut iniciar sessio</h1>
            <p class="lead">
                Les credencials introduides no son correctes o s ha superat el nombre d intents permesos.
            </p>
            <div class="actions">
                <a class="button" href="{{ route('login') }}">Tornar a provar</a>
                <a class="button secondary" href="{{ route('home') }}">Tornar a inici</a>
            </div>
        </div>
    </section>
@endsection
