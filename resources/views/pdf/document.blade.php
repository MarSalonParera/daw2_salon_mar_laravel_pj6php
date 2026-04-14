<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document PDF</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; margin: 40px; }
        .header { text-align: center; margin-bottom: 30px; }
        .logo { width: 120px; margin-bottom: 10px; }
        .title { font-size: 24px; font-weight: bold; margin-bottom: 20px; }
        .content { font-size: 16px; }
        .footer { margin-top: 40px; text-align: right; font-size: 12px; color: #888; }
    </style>
</head>
<body>
    <div class="header">
        <img src="{{ public_path('imatges/logo-onu.png') }}" class="logo" alt="Logo ONU">
        <div class="title">Certificat d'Usuari</div>
    </div>
    <div class="content">
        <p>Certifiquem que l'usuari <strong>{{ $user->name }}</strong> amb email <strong>{{ $user->email }}</strong> i rol <strong>{{ $user->role }}</strong> forma part de l'aplicació ONU.</p>
        <p>Data d'emissió: <strong>{{ date('d/m/Y') }}</strong></p>
    </div>
    <div class="footer">
        ONU - {{ config('app.name') }}
    </div>
</body>
</html>