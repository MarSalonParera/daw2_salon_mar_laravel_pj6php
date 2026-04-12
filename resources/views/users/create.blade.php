<h1>Crear usuari</h1>

<form method="POST" action="/users">
    @csrf

    <input name="name" placeholder="Nom">
    <input name="email" placeholder="Email">
    <input name="password" placeholder="Password">

    <select name="role">
        <option value="admin">admin</option>
        <option value="basic">basic</option>
    </select>

    <button>Crear</button>
</form>
