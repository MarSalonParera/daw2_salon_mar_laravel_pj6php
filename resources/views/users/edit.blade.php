<h1>Editar usuari</h1>

<form method="POST" action="/users/{{ $user->id }}" class="container">
    @csrf
    @method('PUT')

    <input name="name" value="{{ $user->name }}" class="form-control mb-2">
    <input name="email" value="{{ $user->email }}" class="form-control mb-2">

    <select name="role" class="form-control mb-2">
        <option value="admin" @if($user->role=='admin') selected @endif>admin</option>
        <option value="basic" @if($user->role=='basic') selected @endif>basic</option>
    </select>

    <button class="btn btn-primary">Actualizar</button>
    <a href="/users" class="btn btn-secondary ml-2">Volver</a>
    <button type="reset" class="btn btn-warning ml-2">Cancelar</button>
</form>