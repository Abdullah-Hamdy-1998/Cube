<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $customers = Customer::all();
        return view('pages.customers.index', ['customers' => $customers]);
    }

    public function create()
    {
        return view('pages.customers.create');
    }

    public function store(Request $request)
    {
        Customer::create($request->all());
        return redirect()->route('customers.index');
    }

    public function show(Customer $customer)
    {
        return view('pages.customers.show', ['customer' => $customer]);
    }

    public function edit(Customer $customer)
    {
        return view('pages.customers.edit', ['customer' => $customer]);
    }

    public function update(Request $request, Customer $customer)
    {
        $customer->update($request->all());
        return redirect()->route('customers.index')->with('success', 'Customer updated successfully.');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index');
    }
}
