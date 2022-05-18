@extends('layouts.default')
@section('title')
    Suppliers
@endsection
@section('content')
<div class="card">
    <div class="card-body">
    <form action="{{ route('suppliers.update', $supplier) }}" method="POST" autocomplete="off">
        @csrf
        @method('PUT')
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <input class="form-control" type="text" id="name" name="name" value="{{ $supplier->name }}">

        <label for="delegate" class="col-sm-2 col-form-label">Delegate</label>
        <input class="form-control" type="text" id="delegate" name="delegate" value="{{ $supplier->delegate }}">

        <label for="phone" class="col-sm-2 col-form-label">Phone</label>
        <input class="form-control" type="text" id="phone" name="phone" value="{{ $supplier->phone }}">

        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <input class="form-control" type="text" id="email" name="email" value="{{ $supplier->email }}">

        <label for="address" class="col-sm-2 col-form-label">Address</label>
        <input class="form-control" type="text" id="address" name="address" value="{{ $supplier->address }}">

        <label for="note" class="col-sm-2 col-form-label">Note</label>
        <input class="form-control" type="text" id="note" name="note" value="{{ $supplier->note }}">

        <br><br>

        <button type="submit" class="btn btn-primary waves-effect waves-light ">Save</button>
        <a href="{{ route('suppliers.index') }}"> <button type="button"
                class="btn btn-danger waves-effect waves-light ">Cancel</button></a>
    </form></div></div>
@endsection
