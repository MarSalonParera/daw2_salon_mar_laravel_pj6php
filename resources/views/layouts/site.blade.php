<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'ONU')</title>
    <style>
        :root {
            --bg: #f4efe7;
            --panel: #fffdf8;
            --accent: #0f5a5c;
            --accent-dark: #08393b;
            --accent-soft: #dbeceb;
            --gold: #d4922e;
            --text: #1f2933;
            --muted: #55606d;
            --danger: #b53a2d;
            --border: #ded4c5;
            --shadow: 0 18px 50px rgba(28, 40, 38, 0.12);
        }

        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Georgia, "Times New Roman", serif;
            color: var(--text);
            background:
                radial-gradient(circle at top left, rgba(212, 146, 46, 0.16), transparent 26%),
                linear-gradient(180deg, #f5f1ea 0%, #efe7dc 100%);
            min-height: 100vh;
        }

        a { color: inherit; text-decoration: none; }
        .shell { max-width: 1180px; margin: 0 auto; padding: 24px; }
        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            padding: 18px 24px;
            border: 1px solid rgba(222, 212, 197, 0.9);
            background: rgba(255, 253, 248, 0.88);
            backdrop-filter: blur(10px);
            border-radius: 22px;
            box-shadow: var(--shadow);
        }
        .brand { display: flex; align-items: center; gap: 16px; flex-wrap: wrap; }
        .brand img { width: 64px; height: 64px; object-fit: contain; }
        .brand-copy strong { display: block; font-size: 1.3rem; }
        .brand-copy span { color: var(--muted); font-size: 0.95rem; }
        .nav { display: flex; flex-wrap: wrap; gap: 10px; align-items: center; justify-content: flex-end; }
        .nav-link, .button, button.button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            border-radius: 999px;
            padding: 12px 18px;
            font-size: 0.96rem;
            font-weight: 700;
            border: 1px solid transparent;
            transition: 0.2s ease;
            cursor: pointer;
        }
        .nav-link:hover, .button:hover, button.button:hover { transform: translateY(-1px); }
        .button, button.button { background: var(--accent); color: #fff; }
        .button.secondary, .nav-link {
            background: rgba(255,255,255,0.7);
            border-color: var(--border);
            color: var(--accent-dark);
        }
        .button.danger { background: var(--danger); color: #fff; }
        .user-chip {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: var(--accent-dark);
            color: #fff;
            border-radius: 999px;
            padding: 6px 8px 6px 14px;
        }
        .user-chip form { margin: 0; }
        .role-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: var(--accent-soft);
            color: var(--accent-dark);
            padding: 8px 12px;
            border-radius: 999px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            font-size: 0.82rem;
        }
        .content { padding: 28px 0 44px; }
        .hero {
            display: grid;
            grid-template-columns: 1.4fr 1fr;
            gap: 24px;
            align-items: stretch;
        }
        .card, .table-card, .form-card {
            background: rgba(255, 253, 248, 0.92);
            border: 1px solid rgba(222, 212, 197, 0.9);
            border-radius: 28px;
            padding: 28px;
            box-shadow: var(--shadow);
        }
        .hero h1, .card h1 { font-size: 3rem; line-height: 1.05; margin: 0 0 18px; }
        h2 { margin-top: 0; }
        .eyebrow {
            display: inline-block;
            color: var(--gold);
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            margin-bottom: 14px;
        }
        .lead { font-size: 1.1rem; color: var(--muted); line-height: 1.65; max-width: 60ch; }
        .actions { display: flex; flex-wrap: wrap; gap: 12px; margin-top: 22px; }
        .page-grid { display: grid; gap: 20px; }
        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 16px;
            margin-top: 22px;
        }
        .stat {
            background: #f7f3eb;
            border: 1px solid var(--border);
            border-radius: 22px;
            padding: 18px;
        }
        .stat strong { display: block; font-size: 2rem; color: var(--accent-dark); }
        .muted { color: var(--muted); }
        .status-ok, .status-off {
            display: inline-flex;
            align-items: center;
            padding: 7px 12px;
            border-radius: 999px;
            font-weight: 700;
            font-size: 0.88rem;
        }
        .status-ok { background: #dff4e8; color: #1b6a3d; }
        .status-off { background: #f7d9d5; color: #8d2e24; }
        table { width: 100%; border-collapse: collapse; }
        th, td {
            text-align: left;
            padding: 14px 10px;
            border-bottom: 1px solid #ece2d3;
            vertical-align: top;
        }
        th { color: var(--accent-dark); font-size: 0.92rem; text-transform: uppercase; letter-spacing: 0.04em; }
        .table-actions { display: flex; flex-wrap: wrap; gap: 8px; }
        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
        }
        .field, .field-full { display: flex; flex-direction: column; gap: 8px; }
        .field-full { grid-column: 1 / -1; }
        label { font-weight: 700; color: var(--accent-dark); }
        input, select {
            width: 100%;
            padding: 12px 14px;
            border-radius: 14px;
            border: 1px solid #cbbda9;
            background: #fff;
            font-size: 1rem;
        }
        .notice, .errors {
            margin-bottom: 18px;
            border-radius: 16px;
            padding: 14px 16px;
        }
        .notice { background: #dff4e8; color: #1b6a3d; }
        .errors { background: #f7d9d5; color: #8d2e24; }
        .clean-list { padding-left: 20px; margin: 0; line-height: 1.8; }
        .footer-note { margin-top: 18px; color: var(--muted); font-size: 0.92rem; }
        @media (max-width: 860px) {
            .hero, .form-grid { grid-template-columns: 1fr; }
            .topbar { flex-direction: column; align-items: stretch; }
            .nav { justify-content: flex-start; }
            .hero h1, .card h1 { font-size: 2.2rem; }
        }
    </style>
</head>
<body>
    <div class="shell">
        <header class="topbar">
            <div class="brand">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('imatges/logo.svg') }}" alt="Logo">
                </a>
                <div class="brand-copy">
                    <strong>ONU Manager</strong>
                    <span>Aplicacio de gestio amb Laravel</span>
                </div>

                @auth
                    <span class="role-badge">Rol: {{ auth()->user()->role }}</span>
                @endauth
            </div>

            <nav class="nav">
                @auth
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                @endauth

                <a class="nav-link" href="{{ route('home') }}">Inici</a>
                <a class="nav-link" href="{{ route('info') }}">Informacio</a>

                @auth
                    <span class="user-chip">
                        <span>{{ auth()->user()->name }}</span>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="button">Logout</button>
                        </form>
                    </span>
                @else
                    <a class="button" href="{{ route('login') }}">Login</a>
                @endauth
            </nav>
        </header>

        <main class="content">
            @if (session('status'))
                <div class="notice">{{ session('status') }}</div>
            @endif

            @if ($errors->any())
                <div class="errors">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            @yield('content')
        </main>
    </div>
</body>
</html>
