<section class="form-card">
    <span class="eyebrow">Taula principal</span>
    <h1>{{ $title }}</h1>

    <form method="POST" action="{{ $action }}">
        @csrf
        @if ($method !== 'POST')
            @method($method)
        @endif

        <div class="form-grid">
            <div class="field">
                <label for="titol_llibre">Titol del llibre</label>
                <input id="titol_llibre" name="titol_llibre" value="{{ old('titol_llibre', optional($organisme)->titol_llibre) }}" required>
            </div>

            <div class="field">
                <label for="codi_oficial">Codi oficial</label>
                <input id="codi_oficial" name="codi_oficial" value="{{ old('codi_oficial', optional($organisme)->codi_oficial) }}" required>
            </div>

            <div class="field-full">
                <label for="nom_organisme">Nom organisme</label>
                <input id="nom_organisme" name="nom_organisme" value="{{ old('nom_organisme', optional($organisme)->nom_organisme) }}" required>
            </div>

            <div class="field">
                <label for="tipus">Tipus</label>
                <select id="tipus" name="tipus" required>
                    @php($selectedTipus = old('tipus', optional($organisme)->tipus))
                    <option value="organisme" @selected($selectedTipus === 'organisme')>Organisme</option>
                    <option value="fons" @selected($selectedTipus === 'fons')>Fons</option>
                    <option value="programa" @selected($selectedTipus === 'programa')>Programa</option>
                    <option value="agencia" @selected($selectedTipus === 'agencia')>Agencia</option>
                </select>
            </div>

            <div class="field">
                <label for="any_fundacio">Any fundacio</label>
                <input id="any_fundacio" name="any_fundacio" type="number" value="{{ old('any_fundacio', optional($organisme)->any_fundacio) }}" required>
            </div>

            <div class="field">
                <label for="pressupost_anual">Pressupost anual</label>
                <input id="pressupost_anual" name="pressupost_anual" type="number" step="0.01" value="{{ old('pressupost_anual', optional($organisme)->pressupost_anual) }}" required>
            </div>

            <div class="field">
                <label for="nombre_empleats">Nombre empleats</label>
                <input id="nombre_empleats" name="nombre_empleats" type="number" value="{{ old('nombre_empleats', optional($organisme)->nombre_empleats) }}" required>
            </div>

            <div class="field">
                <label for="pais_seu">Pais seu</label>
                <input id="pais_seu" name="pais_seu" value="{{ old('pais_seu', optional($organisme)->pais_seu) }}" required>
            </div>

            <div class="field">
                <label for="ciutat_seu">Ciutat seu</label>
                <input id="ciutat_seu" name="ciutat_seu" value="{{ old('ciutat_seu', optional($organisme)->ciutat_seu) }}" required>
            </div>

            <div class="field">
                <label for="data_creacio_registre">Data creacio registre</label>
                <input id="data_creacio_registre" name="data_creacio_registre" type="date" value="{{ old('data_creacio_registre', optional($organisme)->data_creacio_registre) }}" required>
            </div>

            <div class="field-full">
                <label for="web_oficial">Web oficial</label>
                <input id="web_oficial" name="web_oficial" type="url" value="{{ old('web_oficial', optional($organisme)->web_oficial) }}" required>
            </div>

            <div class="field-full">
                <label for="actiu">Estat</label>
                <select id="actiu" name="actiu" required>
                    @php($selectedActiu = (string) old('actiu', optional($organisme)->actiu ?? '1'))
                    <option value="1" @selected($selectedActiu === '1')>Actiu</option>
                    <option value="0" @selected($selectedActiu === '0')>Inactiu</option>
                </select>
            </div>
        </div>

        <div class="actions">
            <button class="button" type="submit">Guardar</button>
            <a class="button secondary" href="{{ route('organismes.index') }}">Cancelar</a>
        </div>
    </form>
</section>
