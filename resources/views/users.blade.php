@extends('layouts.tfa7')
@section('title', 'Users | POS Management')
@section('content')
<div class="heading"><div><div class="eyebrow">USER DIRECTORY</div><h1>User Accounts</h1><p class="sub">Browse users and their profile pictures.</p></div><a class="btn" href="{{ route('users.create') }}">+ New User</a></div>
<div class="card table-scroll"><table><thead><tr><th>Avatar</th><th>Username</th><th>Full Name</th><th>Email</th><th>Role</th><th>Status</th><th>Action</th></tr></thead><tbody>@forelse($users as $user)<tr><td>@if($user->avatar)<img class="avatar" src="{{ asset('storage/'.$user->avatar) }}" alt="Avatar for {{ $user->username }}">@else<img class="avatar" src="{{ asset('images/avatar-placeholder.svg') }}" alt="Default avatar">@endif</td><td>{{ $user->username }}</td><td>{{ $user->full_name }}</td><td>{{ $user->email ?: '—' }}</td><td>{{ $user->role ?: '—' }}</td><td>{{ $user->status ?: '—' }}</td><td><a class="mini" href="{{ route('users.edit', $user) }}">Edit</a></td></tr>@empty<tr><td colspan="7">No users found.</td></tr>@endforelse</tbody></table></div>
@endsection
