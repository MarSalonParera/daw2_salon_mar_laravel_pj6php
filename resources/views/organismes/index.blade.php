<h1>Organismes</h1>

<a href="{{ route('organismes.create') }}">Crear</a>

@foreach($organismes as $o)
    <p>
        {{ $o->nom_organisme }}
        -
        <form method="POST" action="{{ route('organismes.destroy', $o) }}">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>
    </p>
@endforeach