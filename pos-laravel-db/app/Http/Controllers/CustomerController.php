<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class CustomerController extends Controller
{
    // Customer Accounts page (/customers)
    public function index()
    {
        return view('customers', [
            'title'     => 'Customer Accounts',
            'customers' => Customer::orderBy('id')->get(),
        ]);
    }
}
