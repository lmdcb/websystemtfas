<!doctype html>
<html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>@yield('title', 'POS Management')</title><link rel="stylesheet" href="{{ asset('css/tfa7.css') }}"></head>
<body><header class="top"><nav class="nav"><a class="brand" href="{{ route('home') }}">▣ POS Management</a>
<div><a href="{{ route('home') }}">Home</a><a href="{{ route('about') }}">About</a>
@auth
<a href="{{ route('customers.index') }}">Customers</a><a href="{{ route('users.index') }}">Users</a>
<form action="{{ route('logout') }}" method="POST" style="display:inline">@csrf <button type="submit" style="background:#D8C9BB;color:#304265;border:0;border-radius:7px;padding:9px 12px;cursor:pointer;font-weight:bold">Logout</button></form>
@else
<a href="{{ route('login') }}">Login</a><a href="{{ route('register') }}">Register</a>
@endauth
</div></nav></header>
<main class="container">@if(session('success'))<div class="notice">{{ session('success') }}</div>@endif
@if($errors->any())<div class="notice" role="alert">{{ $errors->first() }}</div>@endif
@yield('content')</main><footer>Laravel POS Foundations · IT0049 TFA8</footer></body></html>
