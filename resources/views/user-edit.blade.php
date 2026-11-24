@extends('layouts.tfa7')
@section('title', 'Edit User')
@section('content')
<h1>Edit User</h1><p class="sub">Update user details and profile picture.</p><section class="card form-card"><form method="POST" enctype="multipart/form-data" action="{{ route('users.update', $user) }}">@csrf @method('PUT')
<label for="username">Username *</label><input id="username" name="username" value="{{ old('username', $user->username) }}" required>@error('username')<p class="error">{{ $message }}</p>@enderror
<label for="full_name">Full Name *</label><input id="full_name" name="full_name" value="{{ old('full_name', $user->full_name) }}" required>@error('full_name')<p class="error">{{ $message }}</p>@enderror
<label for="email">Email</label><input id="email" type="email" name="email" value="{{ old('email', $user->email) }}">@error('email')<p class="error">{{ $message }}</p>@enderror
<label for="role">Role</label><input id="role" name="role" value="{{ old('role', $user->role) }}">@error('role')<p class="error">{{ $message }}</p>@enderror
<label for="status">Status</label><select id="status" name="status"><option value="">Select status</option><option value="Active" @selected(old('status', $user->status)==='Active')>Active</option><option value="Inactive" @selected(old('status', $user->status)==='Inactive')>Inactive</option></select>@error('status')<p class="error">{{ $message }}</p>@enderror
<label for="avatar">Profile Picture (JPG, PNG, WEBP; max 2 MB)</label><div class="preview">@if($user->avatar)<img class="avatar big" src="{{ asset('storage/'.$user->avatar) }}" alt="Current avatar">@else<img class="avatar big" src="{{ asset('images/avatar-placeholder.svg') }}" alt="Default avatar">@endif</div><input id="avatar" name="avatar" type="file" accept="image/jpeg,image/png,image/webp">@error('avatar')<p class="error">{{ $message }}</p>@enderror
<div class="actions end"><a class="btn secondary" href="{{ route('users.index') }}">Cancel</a><button class="btn" type="submit">Save Changes</button></div></form></section>
@endsection
