@extends('layouts.app')
@section('title', 'About')
@section('content')
<div class="pagehead"><div class="eyebrow">OUR APPLICATION</div><h1>About the POS System</h1><p>A simple Point of Sale foundation built with the Laravel framework.</p></div>
<section class="panel about-panel"><h2>Project Overview</h2><p>This application demonstrates the basics of Laravel's Model-View-Controller (MVC) structure. Routes connect URLs to controller methods, while Blade views display the pages.</p><p>The Customer Accounts and User Accounts pages use static PHP arrays containing five sample records each. The data is for demonstration only and is not stored in a database.</p><h2>Project Features</h2><ul><li>Four connected pages with working navigation</li><li>Separate controllers for pages, customers, and users</li><li>Reusable Blade layout and responsive styling</li><li>Sample account tables rendered using Laravel Blade loops</li></ul></section>
@endsection
