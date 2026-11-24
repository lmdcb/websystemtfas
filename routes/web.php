<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::get('/dashboard', fn () => redirect()->route('customers.index'))
    ->middleware('auth')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('customers', CustomerController::class)->except(['show']);
    Route::resource('users', UserController::class)->except(['show']);
});

require __DIR__.'/auth.php';
