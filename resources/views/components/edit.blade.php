<h1>Editar Organisme</h1>

<form method="POST" action="{{ route('organismes.update', $organisme->id) }}">
@csrf
@method('PUT')

<input name="nom_organisme" value="{{ $organisme->nom_organisme }}">
<input name="codi_oficial" value="{{ $organisme->codi_oficial }}">

<button>Actualitzar</button>
</form>