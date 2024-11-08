<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        // Mengambil data customer dari database
        $customers = Customer::all();

        // Mengirimkan variabel $customers ke view
        return view('ecommerce-customers', compact('customers'));
    }
}
