@extends('layouts.site')

@section('title', 'Informacio')

@section('content')
    <section class="page-grid">
        <div class="card">
            <h1>Informacio de l aplicacio</h1>
            <p>
                L objectiu d aquesta aplicacio es gestionar la taula principal d organismes i la taula d usuaris de manera separada segons el rol autenticat.
            </p>
        </div>

        <div class="card">
            <h2>Com iniciar sessio</h2>
            <p>Accedeix a la pagina de validacio, introdueix el teu correu electronic i la teva contrasenya.</p>
            <p>Si ets gestor veuras el dashboard de gestio. Si ets consultor veuras el dashboard de consulta.</p>
        </div>

        <div class="card">
            <h2>Com tancar sessio</h2>
            <p>
                Quan estiguis autenticat, fes clic sobre el teu nom d usuari a la part superior dreta per executar el logout.
            </p>
            <div class="actions">
                <a class="button secondary" href="{{ route('home') }}">Tornar a inici</a>
                <a class="button" href="{{ route('login') }}">Anar a validacio</a>
            </div>
        </div>
    </section>
@endsection
