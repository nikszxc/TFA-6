@extends('layouts.app')

@section('content')
    <h1>About</h1>
    <p class="sub">What this project is.</p>

    <div class="card">
        <p>
            This is a basic Point-of-Sale (POS) system rebuilt in Laravel. Version 0.2 replaces
            the static arrays with a real database.
        </p>
        <ul class="list">
            <li>Routes are defined in <code>routes/web.php</code>.</li>
            <li><strong>PageController</strong> serves the landing and about pages.</li>
            <li><strong>CustomerController</strong> and <strong>UserController</strong> read records through the <code>Customer</code> and <code>User</code> Eloquent models.</li>
            <li>Tables are created by migrations and filled by seeders.</li>
            <li>Views are Blade templates that share one layout.</li>
        </ul>
    </div>
@endsection
