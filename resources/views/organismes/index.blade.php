@extends('layouts.site')

@section('title', 'Organismes')

@section('content')
    <section class="table-card">
        <div style="display:flex;justify-content:space-between;align-items:center;gap:12px;flex-wrap:wrap;margin-bottom:18px;">
            <div>
                <span class="eyebrow">Taula principal</span>
                <h1 style="margin:0;">Resum d organismes</h1>
            </div>

            @if (auth()->user()->role === 'gestor')
                <div class="actions" style="margin-top:0;">
                    <a class="button" href="{{ route('organismes.create') }}">Afegir organisme</a>
                </div>
            @endif
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titol del llibre</th>
                    <th>Codi oficial</th>
                    <th>Accions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($organismes as $organisme)
                    <tr>
                        <td>{{ $organisme->id }}</td>
                        <td>{{ $organisme->titol_llibre }}</td>
                        <td>{{ $organisme->codi_oficial }}</td>
                        <td>
                            <div class="table-actions">
                                <a class="button secondary" href="{{ route('organismes.show', $organisme) }}">Visualitzar</a>

                                @if (auth()->user()->role === 'gestor')
                                    <a class="button secondary" href="{{ route('organismes.edit', $organisme) }}">Modificar</a>
                                    <a class="button secondary" href="{{ route('organismes.pdf', $organisme) }}">PDF</a>
                                    <form method="POST" action="{{ route('organismes.destroy', $organisme) }}" onsubmit="return confirm('Vols eliminar aquest organisme?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button danger" type="submit">Esborrar</button>
                                    </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
