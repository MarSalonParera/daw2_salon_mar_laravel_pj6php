@extends('layouts.site')

@section('title', 'Fitxa organisme')

@section('content')
    <section class="card">
        <span class="eyebrow">Fitxa detallada</span>
        <h1>{{ $organisme->nom_organisme }}</h1>

        <div class="stats">
            <div class="stat"><span class="muted">ID</span><strong>{{ $organisme->id }}</strong></div>
            <div class="stat"><span class="muted">Tipus</span><strong>{{ ucfirst($organisme->tipus) }}</strong></div>
            <div class="stat"><span class="muted">Actiu</span><strong>{{ $organisme->actiu ? 'Si' : 'No' }}</strong></div>
        </div>

        <table style="margin-top:22px;">
            <tbody>
                <tr><th>Titol del llibre</th><td>{{ $organisme->titol_llibre }}</td></tr>
                <tr><th>Codi oficial</th><td>{{ $organisme->codi_oficial }}</td></tr>
                <tr><th>Any de fundacio</th><td>{{ $organisme->any_fundacio }}</td></tr>
                <tr><th>Pressupost anual</th><td>{{ number_format($organisme->pressupost_anual, 2, ',', '.') }} EUR</td></tr>
                <tr><th>Pais seu</th><td>{{ $organisme->pais_seu }}</td></tr>
                <tr><th>Ciutat seu</th><td>{{ $organisme->ciutat_seu }}</td></tr>
                <tr><th>Data creacio registre</th><td>{{ \Illuminate\Support\Carbon::parse($organisme->data_creacio_registre)->format('d/m/Y') }}</td></tr>
                <tr><th>Nombre empleats</th><td>{{ $organisme->nombre_empleats }}</td></tr>
                <tr><th>Web oficial</th><td><a href="{{ $organisme->web_oficial }}" target="_blank" rel="noreferrer">{{ $organisme->web_oficial }}</a></td></tr>
            </tbody>
        </table>

        <div class="actions">
            <a class="button secondary" href="{{ route('organismes.index') }}">Tornar a la llista</a>
            @if (auth()->user()->role === 'gestor')
                <a class="button" href="{{ route('organismes.pdf', $organisme) }}">Descarregar PDF</a>
            @endif
        </div>
    </section>
@endsection
