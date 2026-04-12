<h1>Nou Organisme</h1>

<form method="POST" action="{{ route('organismes.store') }}">
@csrf

<input name="titol_llibre" placeholder="Títol">
<input name="codi_oficial" placeholder="Codi">
<input name="nom_organisme" placeholder="Nom">

<select name="tipus">
    <option>organisme</option>
    <option>fons</option>
    <option>programa</option>
    <option>agència</option>
</select>

<input name="any_fundacio">
<input name="pressupost_anual">
<input name="pais_seu">
<input name="ciutat_seu">
<input type="date" name="data_creacio_registre">
<input name="nombre_empleats">

<select name="actiu">
    <option value="1">Sí</option>
    <option value="0">No</option>
</select>

<input name="web_oficial">

<button>Guardar</button>
</form>