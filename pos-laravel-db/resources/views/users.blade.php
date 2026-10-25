@extends('layouts.app')

@section('content')
    <h1>User Accounts</h1>
    <p class="sub">{{ $users->count() }} users (from the database)</p>

    <div class="card">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Full Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><span class="badge">{{ $user->username }}</span></td>
                        <td>{{ $user->full_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
