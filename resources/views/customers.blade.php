@extends('layouts.tfa7')
@section('title', 'Customers | POS Management')
@section('content')
<div class="heading"><div><div class="eyebrow">ACCOUNT DIRECTORY</div><h1>Customer Accounts</h1><p class="sub">Browse and manage customer records.</p></div><a class="btn" href="{{ route('customers.create') }}">+ New Customer</a></div>
<div class="card table-scroll"><table><thead><tr><th>ID</th><th>Customer Name</th><th>Email</th><th>Phone</th><th>Action</th></tr></thead><tbody>@forelse($customers as $customer)<tr><td>{{ $customer->id }}</td><td>{{ $customer->full_name }}</td><td>{{ $customer->email }}</td><td>{{ $customer->phone ?: '—' }}</td><td><a class="mini" href="{{ route('customers.edit', $customer) }}">Edit</a></td></tr>@empty<tr><td colspan="5">No customers found.</td></tr>@endforelse</tbody></table></div>
@endsection
