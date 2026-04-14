@extends('layouts.app')

@section('content')
<div style="min-height:100vh;background:linear-gradient(120deg,#e3f2fd 0%,#bbdefb 100%);display:flex;align-items:center;justify-content:center;">
    <div style="width:100%;max-width:500px;background:#fff;border-radius:16px;box-shadow:0 4px 24px #1976d233;padding:2.5rem 2rem;">
        <h1 style="color:#1a237e;text-align:center;margin-bottom:2rem;">Detall usuari</h1>
        <div style="font-size:1.13rem;color:#222;font-weight:500;letter-spacing:0.5px;margin-bottom:1.2rem;">
            <span style="display:block;margin-bottom:0.5rem;">Nom: {{ $user->name }}</span>
            <span style="display:block;margin-bottom:0.5rem;">Email: {{ $user->email }}</span>
            <span style="display:block;margin-bottom:0.5rem;">Rol: {{ $user->role }}</span>
        </div>
        <div style="text-align:center;">
            <a href="{{ route('users.index') }}" style="display:inline-block;background:linear-gradient(90deg,#757575 0%,#bdbdbd 100%);color:#fff;font-weight:600;border:none;border-radius:30px;padding:0.7rem 2.2rem;font-size:1.1rem;box-shadow:0 2px 8px #75757533;transition:background 0.2s,box-shadow 0.2s;text-decoration:none;">Tornar</a>
        </div>
    </div>
</div>
@endsection
