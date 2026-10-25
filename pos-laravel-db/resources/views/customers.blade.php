@extends('layouts.app')

@section('content')
    <h1>Customer Accounts</h1>
    <p class="sub">{{ $customers->count() }} customers (from the database)</p>

    <div class="card">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $customer->full_name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
