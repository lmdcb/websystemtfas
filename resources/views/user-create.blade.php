@extends('layouts.tfa7')
@section('title', 'New User')
@section('content')
<h1>New User</h1><p class="sub">Add a user account.</p><section class="card form-card"><form method="POST" action="{{ route('users.store') }}">@csrf
<label for="username">Username *</label><input id="username" name="username" value="{{ old('username') }}" required>@error('username')<p class="error">{{ $message }}</p>@enderror
<label for="full_name">Full Name *</label><input id="full_name" name="full_name" value="{{ old('full_name') }}" required>@error('full_name')<p class="error">{{ $message }}</p>@enderror
<label for="email">Email</label><input id="email" type="email" name="email" value="{{ old('email') }}">@error('email')<p class="error">{{ $message }}</p>@enderror
<label for="role">Role</label><input id="role" name="role" value="{{ old('role') }}">@error('role')<p class="error">{{ $message }}</p>@enderror
<label for="status">Status</label><select id="status" name="status"><option value="">Select status</option><option value="Active" @selected(old('status')==='Active')>Active</option><option value="Inactive" @selected(old('status')==='Inactive')>Inactive</option></select>@error('status')<p class="error">{{ $message }}</p>@enderror
<div class="actions end"><a class="btn secondary" href="{{ route('users.index') }}">Cancel</a><button class="btn" type="submit">Add User</button></div></form></section>
@endsection
