@extends('layouts.site')

@section('title', 'Dashboard Consultor')

@section('content')
    <section class="page-grid">
        <div class="card">
            <span class="eyebrow">Dashboard Consultor</span>
            <h1>Panell de consulta</h1>
            <p class="lead">
                Aquest espai et permet consultar el resum de la taula principal i visualitzar la fitxa completa de cada organisme.
            </p>
            <div class="actions">
                <a class="button" href="{{ route('organismes.index') }}">Veure organismes</a>
                <a class="button secondary" href="{{ route('pdf.certificat') }}">PDF del meu usuari</a>
            </div>
        </div>

        <div class="card">
            <h2>Permisos del consultor</h2>
            <ul class="clean-list">
                <li>Acces a inici, informacio i validacio.</li>
                <li>Acces al seu dashboard.</li>
                <li>Consulta de la llista resumida d organismes.</li>
                <li>Consulta de la fitxa detallada d un organisme.</li>
            </ul>
        </div>
    </section>
@endsection
