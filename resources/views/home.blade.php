@extends('layouts.tfa7')
@section('title', 'Home | POS Management')
@section('content')
<section class="hero"><div class="eyebrow">LARAVEL POS SYSTEM</div><h1>Welcome to POS Management</h1><p>Manage customer accounts, user records, and profile pictures in one place.</p><div class="actions"><a class="btn" href="{{ route('customers.index') }}">View Customers</a><a class="btn secondary" href="{{ route('users.index') }}">View Users</a></div></section>
@endsection
