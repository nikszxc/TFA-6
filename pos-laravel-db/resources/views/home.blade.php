@extends('layouts.app')

@section('content')
    <div class="card hero">
        <h1>Welcome to the POS System</h1>
        <p class="sub">A simple Point-of-Sale application rebuilt in Laravel.</p>
        <div class="btns">
            <a class="btn primary" href="{{ route('customers') }}">Customer Accounts</a>
            <a class="btn" href="{{ route('users') }}">User Accounts</a>
            <a class="btn" href="{{ route('about') }}">About</a>
        </div>
    </div>
@endsection
