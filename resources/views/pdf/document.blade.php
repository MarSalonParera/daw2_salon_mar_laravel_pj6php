<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Certificat usuari</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; margin: 32px; color: #1f2933; }
        .header, .footer { text-align: center; }
        .header img { width: 90px; margin: 0 auto 12px; }
        .panel { border: 1px solid #d8cdbc; border-radius: 12px; padding: 22px; margin-top: 24px; }
        h1 { color: #0f5a5c; }
        table { width: 100%; border-collapse: collapse; margin-top: 12px; }
        td { padding: 10px 0; border-bottom: 1px solid #eee3d2; }
        .footer { margin-top: 24px; color: #55606d; font-size: 12px; }
    </style>
</head>
<body>
    <div class="header">
        <img src="{{ public_path('imatges/logo-onu.png') }}" alt="Logo ONU">
        <h1>Certificat d usuari autenticat</h1>
    </div>

    <div class="panel">
        <p>Aquest document certifica les dades de l usuari autenticat dins de l aplicacio ONU.</p>
        <table>
            <tr><td><strong>ID</strong></td><td>{{ $user->id }}</td></tr>
            <tr><td><strong>Nom</strong></td><td>{{ $user->name }}</td></tr>
            <tr><td><strong>Role</strong></td><td>{{ ucfirst($user->role) }}</td></tr>
            <tr><td><strong>Email</strong></td><td>{{ $user->email }}</td></tr>
        </table>
    </div>

    <div class="footer">Document generat el {{ now()->format('d/m/Y H:i') }}</div>
</body>
</html>
