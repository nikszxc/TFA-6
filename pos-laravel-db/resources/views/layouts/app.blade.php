<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'POS' }} | POS System</title>
    <style>
        :root {
            --bg: #0b0d12;
            --panel: #131722;
            --line: #232a3b;
            --text: #e8ebf3;
            --muted: #8b93a7;
            --accent: #f5b942;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: "Segoe UI", system-ui, sans-serif;
            background: radial-gradient(circle at 20% -10%, #1a2036 0%, var(--bg) 55%);
            color: var(--text);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        nav {
            display: flex; align-items: center; gap: 8px; flex-wrap: wrap;
            padding: 16px 32px;
            background: rgba(19, 23, 34, .85);
            border-bottom: 1px solid var(--line);
            position: sticky; top: 0; backdrop-filter: blur(8px);
        }
        .brand { font-weight: 700; letter-spacing: .08em; color: var(--accent); margin-right: auto; }
        nav a.link {
            color: var(--muted); text-decoration: none; padding: 8px 14px;
            border-radius: 8px; font-size: .95rem; transition: .15s;
        }
        nav a.link:hover { color: var(--text); background: var(--line); }
        nav a.link.active { color: var(--bg); background: var(--accent); font-weight: 600; }
        main { flex: 1; width: 100%; max-width: 960px; margin: 0 auto; padding: 48px 24px; }
        h1 { font-size: 2rem; margin-bottom: 8px; }
        .sub { color: var(--muted); margin-bottom: 28px; }
        .card {
            background: var(--panel); border: 1px solid var(--line);
            border-radius: 14px; padding: 28px;
        }
        .hero { text-align: center; padding: 56px 24px; }
        .hero h1 { font-size: 2.6rem; }
        .hero .btns { margin-top: 28px; display: flex; gap: 12px; justify-content: center; flex-wrap: wrap; }
        .btn {
            text-decoration: none; padding: 11px 22px; border-radius: 10px;
            border: 1px solid var(--line); color: var(--text); font-weight: 600;
        }
        .btn.primary { background: var(--accent); color: var(--bg); border-color: var(--accent); }
        .btn:hover { filter: brightness(1.12); }
        table { width: 100%; border-collapse: collapse; }
        th, td { text-align: left; padding: 13px 14px; border-bottom: 1px solid var(--line); }
        th { color: var(--muted); font-size: .8rem; text-transform: uppercase; letter-spacing: .08em; }
        tbody tr:hover { background: rgba(255,255,255,.03); }
        .badge {
            background: rgba(245,185,66,.14); color: var(--accent);
            padding: 3px 10px; border-radius: 999px; font-size: .82rem;
        }
        ul.list { margin: 12px 0 0 20px; color: var(--muted); line-height: 1.8; }
        footer { text-align: center; color: var(--muted); font-size: .85rem; padding: 20px; border-top: 1px solid var(--line); }
    </style>
</head>
<body>
    <nav>
        <span class="brand">POS SYSTEM</span>
        <a class="link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
        <a class="link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
        <a class="link {{ request()->routeIs('customers') ? 'active' : '' }}" href="{{ route('customers') }}">Customers</a>
        <a class="link {{ request()->routeIs('users') ? 'active' : '' }}" href="{{ route('users') }}">Users</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>POS System v0.1 &middot; Built with Laravel &middot; Static data (no database)</footer>
</body>
</html>
