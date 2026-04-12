<h1>Editar usuari</h1>

<form method="POST" action="/users/{{ $user->id }}">
    @csrf
    @method('PUT')

    <input name="name" value="{{ $user->name }}">
    <input name="email" value="{{ $user->email }}">

    <select name="role">
        <option value="admin" @if($user->role=='admin') selected @endif>admin</option>
        <option value="basic" @if($user->role=='basic') selected @endif>basic</option>
    </select>

    <button>Update</button>
</form>