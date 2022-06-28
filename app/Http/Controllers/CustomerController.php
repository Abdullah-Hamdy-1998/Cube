<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $this->authorize('read-data');
        $customers = Customer::all();
        return view('pages.customers.index', ['customers' => $customers]);
    }

    public function create()
    {
        $this->authorize('write-data');
        return view('pages.customers.create');
    }

    public function store(Request $request)
    {
        $this->authorize('write-data');
        Customer::create($request->all());
        return redirect()->route('customers.index');
    }

    public function show(Customer $customer)
    {
        $this->authorize('read-data');
        return view('pages.customers.show', ['customer' => $customer]);
    }

    public function edit(Customer $customer)
    {
        $this->authorize('write-data');
        return view('pages.customers.edit', ['customer' => $customer]);
    }

    public function update(Request $request, Customer $customer)
    {
        $this->authorize('write-data');
        $customer->update($request->all());
        return redirect()->route('customers.index')->with('success', 'Customer updated successfully.');
    }

    public function destroy(Customer $customer)
    {
        $this->authorize('write-data');
        $customer->delete();
        return redirect()->route('customers.index');
    }

    public function getCustomers()
    {
        $this->authorize('read-data');
        $customers = Customer::all();
        return response()->json($customers);
    }
}
