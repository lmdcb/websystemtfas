<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // Retrieve all users from MySQL using Eloquent
        $users = User::all();

        // Pass the records to the existing Blade view
        return view('users', compact('users'));
    }
}
