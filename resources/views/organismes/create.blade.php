<h1>Crear Organisme</h1>

<form method="POST" action="{{ route('organismes.store') }}">
    @csrf

    <input name="titol_llibre" placeholder="titol_llibre">
    <input name="codi_oficial" placeholder="codi">
    <input name="nom_organisme" placeholder="nom">

    <button>Guardar</button>
</form>