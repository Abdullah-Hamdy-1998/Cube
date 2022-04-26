<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{

    public function index()
    {
        $suppliers = Supplier::all();
        return view('pages.suppliers.index', ['suppliers' => $suppliers]);
    }

    public function create()
    {
        return view('pages.suppliers.create');
    }

    public function store(Request $request)
    {
        Supplier::create($request->all());
        return view('pages.suppliers.index');
    }

    public function show(Supplier $supplier)
    {
        return view('pages.suppliers.show', ['supplier' => $supplier]);
    }

    public function edit(Supplier $supplier)
    {
        return view('pages.suppliers.edit', ['supplier' => $supplier]);
    }

    public function update(Request $request, Supplier $supplier)
    {
        $supplier->update($request->all());
        return redirect()->route('suppliers.index')->with('success', 'Supplier updated successfully.');
    }

    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect()->route('suppliers.index');
    }
}
