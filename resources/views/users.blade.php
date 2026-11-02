@extends('layouts.app')
@section('title', 'User Accounts')
@section('content')
<div class="pagehead"><div class="eyebrow">TEAM DIRECTORY</div><h1>User Accounts</h1><p>View the five sample users and their assigned roles.</p></div>
<section class="panel"><div class="panel-heading"><h2>User List</h2><span class="count">{{ count($users) }} records</span></div><div class="table-scroll"><table><thead><tr><th>ID</th><th>Full Name</th><th>Email</th><th>Role</th><th>Status</th></tr></thead><tbody>

@foreach ($users as $user)
    <tr>
        <td>{{ $user->username }}</td>
        <td>{{ $user->full_name }}</td>
    </tr>
@endforeach

</tbody></table></div></section>
@endsection
