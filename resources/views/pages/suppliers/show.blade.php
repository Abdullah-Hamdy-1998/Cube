@extends('layouts.default')
@section('title')
    Suppliers
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="mb-5 ml-3"> View Supplier Details</h5>

        <div class="col-5 mb-3 mt-3 inputField d-inline-block mr-5"  > 
    <input class="form-control" type="text" id="name" name="name" placeholder=" "required value="{{ $supplier->name }}" disabled>
    <label for="name">Name</label>
        </div>

        <div class="col-5 mb-3 mt-3 inputField d-inline-block mr-5"  > 
    <input class="form-control" type="text" id="delegate" name="delegate"required placeholder=" " value="{{ $supplier->delegate }}" disabled>
    <label for="delegate">Delegate</label>
        </div>

        <div class="col-5 mb-3 mt-3 inputField d-inline-block mr-5"  > 
    <input class="form-control" type="text" id="phone" name="phone"placeholder=" " required value="{{ $supplier->phone }}" disabled>
    <label for="phone">Phone</label>
        </div>

        <div class="col-5 mb-3 mt-3 inputField d-inline-block mr-5"  > 
    <input class="form-control" type="text" id="email" name="email"required placeholder=" " value="{{ $supplier->email }}" disabled>
    <label for="email">Email</label>
        </div>

        <div class="col-5 mb-3 mt-3 inputField d-inline-block mr-5"  > 
    <input class="form-control" type="text" id="address" name="address"placeholder=" "required value="{{ $supplier->address }}" disabled>
    <label for="address">Address</label>
        </div>

        <div class="col-5 mb-3 mt-3 inputField d-inline-block mr-5"  > 
    <input class="form-control" type="text" id="note" name="note"placeholder=" "required value="{{ $supplier->note }}" disabled>
    <label for="note">Note</label>
        </div>
    <br><br>

    @can('write-data')
        <a href="{{ route('suppliers.edit', $supplier) }}""> <button type=" button"
            class="btn btn-primary waves-effect waves-light ml-3 border-radius-coust mr-3 col-1">Edit</button></a>
            @endcan
    <a href="{{ route('suppliers.index') }}"> <button type="button"
        class="btn btn-danger waves-effect waves-light border-radius-coust col-1">Cancel</button></a>
        @endsection
