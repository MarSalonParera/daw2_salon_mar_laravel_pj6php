@extends('layouts.site')

@section('title', 'Usuaris')

@section('content')
    <section class="table-card">
        <div style="display:flex;justify-content:space-between;align-items:center;gap:12px;flex-wrap:wrap;margin-bottom:18px;">
            <div>
                <span class="eyebrow">Gestio d usuaris</span>
                <h1 style="margin:0;">Llista d usuaris</h1>
            </div>
            <div class="actions" style="margin-top:0;">
                <a class="button" href="{{ route('users.create') }}">Crear usuari</a>
                <a class="button secondary" href="{{ route('users.pdf') }}">Llista en PDF</a>
            </div>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Role</th>
                    <th>Email</th>
                    <th>Accions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ ucfirst($user->role) }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <div class="table-actions">
                                <a class="button secondary" href="{{ route('users.edit', $user) }}">Modificar</a>
                                <form method="POST" action="{{ route('users.destroy', $user) }}" onsubmit="return confirm('Vols eliminar aquest usuari?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="button danger" type="submit">Esborrar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
