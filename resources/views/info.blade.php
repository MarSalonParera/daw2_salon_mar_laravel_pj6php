<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ONU</title>
</head>

<body>

<header style="text-align:center; padding:20px; background-color:#f9f9f9; border-bottom:1px solid #ddd;">
    <a href="{{ url('/') }}">
        <x-application-logo style="width:150px; display:block; margin:0 auto;" />
    </a>
</header>

<p>Pàgina informativa de l'aplicació web ONU</p>

<ol>
    <li>Administrador: CRUD organismes</li>
    <li>Bàsic: visualitzar organismes</li>
</ol>

<a href="{{ url('/') }}">Inici</a>

</body>
</html>