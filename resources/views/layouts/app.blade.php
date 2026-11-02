<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'POS Management') | POS Management</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="topbar">
        <div class="shell navwrap">
            <a class="brand" href="{{ route('home') }}"><span class="brand-icon">P</span> POS Management</a>
            <nav aria-label="Main navigation">
                <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                <a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                <a class="{{ request()->routeIs('customers') ? 'active' : '' }}" href="{{ route('customers') }}">Customers</a>
                <a class="{{ request()->routeIs('users') ? 'active' : '' }}" href="{{ route('users') }}">Users</a>
            </nav>
        </div>
    </header>
    <main class="shell">@yield('content')</main>
    <footer class="shell footer">Laravel POS Foundations · IT0049 TFA5</footer>
</body>
</html>
