<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{

    public function index()
    {
        $this->authorize('read-data');
        $suppliers = Supplier::all();
        return view('pages.suppliers.index', ['suppliers' => $suppliers]);
    }

    public function create()
    {
        $this->authorize('write-data');
        return view('pages.suppliers.create');
    }

    public function store(Request $request)
    {
        $this->authorize('write-data');
        Supplier::create($request->all());
        return redirect()->route('suppliers.index');
    }

    public function show(Supplier $supplier)
    {
        $this->authorize('read-data');
        return view('pages.suppliers.show', ['supplier' => $supplier]);
    }

    public function edit(Supplier $supplier)
    {
        $this->authorize('write-data');
        return view('pages.suppliers.edit', ['supplier' => $supplier]);
    }

    public function update(Request $request, Supplier $supplier)
    {
        $this->authorize('write-data');
        $supplier->update($request->all());
        return redirect()->route('suppliers.index')->with('success', 'Supplier updated successfully.');
    }

    public function destroy(Supplier $supplier)
    {
        $this->authorize('write-data');
        $supplier->delete();
        return redirect()->route('suppliers.index');
    }

    public function getSuppliers()
    {
        $this->authorize('read-data');
        $suppliers = Supplier::all();
        return response()->json($suppliers);
    }
}
