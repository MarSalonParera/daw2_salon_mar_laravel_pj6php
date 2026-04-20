@extends('layouts.site')

@section('title', 'Inici')

@section('content')
    <section class="hero">
        <div>
            <span class="eyebrow">Projecte Laravel PJ6</span>
            <h1>Gestio de la base de dades d organismes de l aplicacio ONU</h1>
            <p class="lead">
                Aquesta aplicacio permet gestionar organismes internacionals i els usuaris interns amb rols de gestor i consultor.
            </p>
            <div class="actions">
                <a class="button" href="{{ route('info') }}">Informacio</a>
                <a class="button secondary" href="{{ route('login') }}">Validacio d usuaris</a>
            </div>
        </div>

        <div class="card">
            <h2>Funcionalitats disponibles</h2>
            <ul class="clean-list">
                <li>Dashboards diferents per a gestors i consultors.</li>
                <li>Gestio completa d usuaris per al rol gestor.</li>
                <li>Gestio i consulta de la taula principal d organismes.</li>
                <li>Generacio de PDF amb DomPDF.</li>
                <li>Control d accessos i redireccio segura.</li>
            </ul>
        </div>
    </section>
@endsection
