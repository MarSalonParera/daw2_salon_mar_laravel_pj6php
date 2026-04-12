<h1>ADMIN DASHBOARD</h1>

<p>Benvingut, {{ auth()->user()->name }}</p>
<p>ROL: {{ auth()->user()->role }}</p>

<a href="/users">Gestió d'usuaris</a>
<a href="/organismes">Gestió d'organismes</a>