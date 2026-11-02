@extends('layouts.app')
@section('title', 'Home')
@section('content')
<section class="hero">
    <div class="eyebrow">WELCOME TO YOUR WORKSPACE</div>
    <h1>Manage your POS accounts<br><span>in one simple place.</span></h1>
    <p>A beginner-friendly Laravel Point of Sale application for browsing customer and user account information.</p>
    <div class="actions"><a class="button" href="{{ route('customers') }}">View Customers →</a><a class="button secondary" href="{{ route('users') }}">View Users</a></div>
</section>
<section class="tiles">
    <a class="tile" href="{{ route('customers') }}"><div class="tile-icon">◎</div><h2>Customer Accounts</h2><p>View sample customer profiles and account statuses.</p><span>Explore customers →</span></a>
    <a class="tile" href="{{ route('users') }}"><div class="tile-icon">▣</div><h2>User Accounts</h2><p>Browse sample staff members and assigned roles.</p><span>Explore users →</span></a>
    <a class="tile" href="{{ route('about') }}"><div class="tile-icon">ⓘ</div><h2>About the System</h2><p>Learn about this Laravel MVC practice project.</p><span>Learn more →</span></a>
</section>
@endsection
