@extends('layouts.app')
@section('title', 'Customer Accounts')
@section('content')
<div class="pagehead"><div class="eyebrow">ACCOUNT DIRECTORY</div><h1>Customer Accounts</h1><p>Browse the five sample customers currently listed in this demonstration.</p></div>
<section class="panel"><div class="panel-heading"><h2>Customer List</h2><span class="count">{{ count($customers) }} records</span></div><div class="table-scroll"><table><thead><tr><th>ID</th><th>Customer Name</th><th>Email</th><th>Phone</th><th>Status</th></tr></thead><tbody>

@foreach ($customers as $customer)
    <tr>
        <td>{{ $customer->full_name }}</td>
        <td>{{ $customer->email }}</td>
        <td>{{ $customer->phone }}</td>
    </tr>
@endforeach
</tbody></table></div></section>
@endsection
