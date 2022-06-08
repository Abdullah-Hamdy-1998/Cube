@extends('layouts.default')
@section('title')
    Suppliers
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="mb-5 ml-3"> Edit Supplier Details</h5>

    <form action="{{ route('suppliers.update', $supplier) }}" method="POST" autocomplete="off">
        @csrf
        @method('PUT')
        <div class="col-5 mb-3 inputField d-inline-block mr-5"  >   
        <input class="form-control" type="text" id="name" name="name"required placeholder=" " value="{{ $supplier->name }}">
        <label for="name" >Name</label>
        </div>

        <div class="col-5 mb-3 inputField d-inline-block mr-5"  >   
        <input class="form-control" type="text" id="delegate" name="delegate"required placeholder=" " value="{{ $supplier->delegate }}">
        <label for="delegate">Delegate</label>
        </div>

        <div class="col-5 mb-3 inputField d-inline-block mr-5"  >   
        <input class="form-control" type="text" id="phone" name="phone" placeholder=" " required value="{{ $supplier->phone }}">
        <label for="phone">Phone</label>
        </div>

        <div class="col-5 mb-3 inputField d-inline-block mr-5"  >   
        <input class="form-control" type="text" id="email" name="email" placeholder=" " required value="{{ $supplier->email }}">
        <label for="email">Email</label>
        </div>

        <div class="col-5 mb-3 inputField d-inline-block mr-5"  >   
        <input class="form-control" type="text" id="address" name="address"placeholder=" "required value="{{ $supplier->address }}">
        <label for="address">Address</label>
        </div>

        <div class="col-5 mb-3 inputField d-inline-block mr-5"  >   
        <input class="form-control" type="text" id="note" name="note"placeholder=" "required value="{{ $supplier->note }}">
        <label for="note">Note</label>
        </div>

        <br><br>

        <button type="submit" class="btn btn-primary ml-3 waves-effect waves-light mr-3 border-radius-coust col-1">Save</button>
        <a href="{{ route('suppliers.index') }}"> <button type="button"
            class="btn btn-danger waves-effect waves-light border-radius-coust col-1">Cancel</button></a>
        </form></div></div>
@endsection
