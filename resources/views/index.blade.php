<h1>Organismes</h1>

<a href="{{ url('/organismes/create') }}">Crear nou organisme</a>

<table border="1">
@foreach($organismes as $o)
<tr>
    <td>{{ $o->nom_organisme }}</td>
    <td>{{ $o->codi_oficial }}</td>

    <td>
        <a href="{{ route('organismes.show', $o->id) }}">Mostra</a>
        <a href="{{ route('organismes.edit', $o->id) }}">Edita</a>

        <form action="{{ route('organismes.destroy', $o->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Esborra</button>
        </form>
    </td>
</tr>
@endforeach
</table>