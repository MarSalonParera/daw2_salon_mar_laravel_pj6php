<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Fitxa organisme</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; margin: 32px; color: #1f2933; }
        .header img { width: 90px; }
        .header { text-align: center; margin-bottom: 20px; }
        h1 { color: #0f5a5c; }
        table { width: 100%; border-collapse: collapse; }
        th, td { text-align: left; padding: 10px; border-bottom: 1px solid #eadfce; }
        th { width: 36%; color: #08393b; }
    </style>
</head>
<body>
    <div class="header">
        <img src="{{ public_path('imatges/logo-onu.png') }}" alt="Logo ONU">
        <h1>Fitxa PDF d organisme</h1>
    </div>

    <table>
        <tr><th>ID</th><td>{{ $organisme->id }}</td></tr>
        <tr><th>Titol del llibre</th><td>{{ $organisme->titol_llibre }}</td></tr>
        <tr><th>Codi oficial</th><td>{{ $organisme->codi_oficial }}</td></tr>
        <tr><th>Nom organisme</th><td>{{ $organisme->nom_organisme }}</td></tr>
        <tr><th>Tipus</th><td>{{ ucfirst($organisme->tipus) }}</td></tr>
        <tr><th>Any fundacio</th><td>{{ $organisme->any_fundacio }}</td></tr>
        <tr><th>Pressupost anual</th><td>{{ number_format($organisme->pressupost_anual, 2, ',', '.') }} EUR</td></tr>
        <tr><th>Pais seu</th><td>{{ $organisme->pais_seu }}</td></tr>
        <tr><th>Ciutat seu</th><td>{{ $organisme->ciutat_seu }}</td></tr>
        <tr><th>Data creacio registre</th><td>{{ \Illuminate\Support\Carbon::parse($organisme->data_creacio_registre)->format('d/m/Y') }}</td></tr>
        <tr><th>Nombre empleats</th><td>{{ $organisme->nombre_empleats }}</td></tr>
        <tr><th>Actiu</th><td>{{ $organisme->actiu ? 'Si' : 'No' }}</td></tr>
        <tr><th>Web oficial</th><td>{{ $organisme->web_oficial }}</td></tr>
    </table>
</body>
</html>
