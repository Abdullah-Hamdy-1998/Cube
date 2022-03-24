<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function index()
    {
        return view('pages.items.index');
    }

    public function create()
    {
        return view('pages.items.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('pages.items.show');
    }

    public function edit($id)
    {
        return view('pages.items.edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
