<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        // Retrieve all customers from MySQL using Eloquent
        $customers = Customer::all();

        // Pass the records to the existing Blade view
        return view('customers', compact('customers'));
    }
}
