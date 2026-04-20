<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Llista usuaris</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; margin: 32px; color: #1f2933; }
        h1 { color: #0f5a5c; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 10px; border-bottom: 1px solid #eadfce; text-align: left; }
        th { color: #08393b; }
    </style>
</head>
<body>
    <h1>Llista d usuaris de l aplicacio</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Role</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ ucfirst($user->role) }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
