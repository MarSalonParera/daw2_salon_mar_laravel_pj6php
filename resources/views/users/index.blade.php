<h1>USUARIS</h1>

<a href="/users/create">Crear usuari</a>

@foreach ($users as $user)
    <p>
        {{ $user->name }} - {{ $user->email }} - {{ $user->role }}

        <a href="/users/{{ $user->id }}/edit">Edit</a>

        <form action="/users/{{ $user->id }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>
    </p>
@endforeach
