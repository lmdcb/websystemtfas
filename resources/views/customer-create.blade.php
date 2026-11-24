@extends('layouts.tfa7')
@section('title', 'New Customer')
@section('content')
<h1>New Customer</h1><p class="sub">Add a customer account.</p><section class="card form-card"><form method="POST" action="{{ route('customers.store') }}">@csrf
<label for="full_name">Full Name *</label><input id="full_name" name="full_name" value="{{ old('full_name') }}" required>@error('full_name')<p class="error">{{ $message }}</p>@enderror
<label for="email">Email Address *</label><input id="email" name="email" type="email" value="{{ old('email') }}" required>@error('email')<p class="error">{{ $message }}</p>@enderror
<label for="phone">Phone Number</label><input id="phone" name="phone" value="{{ old('phone') }}">@error('phone')<p class="error">{{ $message }}</p>@enderror
<div class="actions end"><a class="btn secondary" href="{{ route('customers.index') }}">Cancel</a><button class="btn" type="submit">Add Customer</button></div></form></section>
@endsection
