@extends('layouts.default')
@section('title')
    Customers
@endsection
@section('content')
<div class="card border-radius-coust">
        <div class="card-body">
            <h5 class="mb-4 ml-3"> View Customer Details</h5>

            <div class="col-5 mb-3 mt-3 inputField d-inline-block mr-5"  > 
    <input class="form-control" type="text" id="name" name="name"required placeholder=" " value="{{ $customer->name }}" disabled>
    <label for="name">Name</label>
            </div>
            <div class="col-5 mb-3 mt-3 inputField d-inline-block mr-5"  > 
    <input class="form-control" type="text" id="delegate" name="delegate"required placeholder=" " value="{{ $customer->delegate }}" disabled>
    <label for="delegate">Delegate</label>
            </div>

            <div class="col-5 mb-3 mt-3 inputField d-inline-block mr-5"  >         
    <input class="form-control" type="text" id="phone" name="phone" required placeholder=" " value="{{ $customer->phone }}" disabled>
    <label for="phone">Phone</label>
            </div>

            <div class="col-5 mb-3 mt-3 inputField d-inline-block mr-5"  >         
    <input class="form-control" type="text" id="email" name="email" required placeholder=" "  value="{{ $customer->email }}" disabled>
    <label for="email">Email</label>
            </div>

            <div class="col-5 mb-3 mt-3 inputField d-inline-block mr-5"  >                     
    <input class="form-control" type="text" id="address" name="address" required placeholder=" "  value="{{ $customer->address }}" disabled>
    <label for="address">Address</label>
            </div>
            <div class="col-5 mb-3 mt-3 inputField d-inline-block mr-5"  >                             
    <input class="form-control" type="text" id="note" name="note" required placeholder=" " value="{{ $customer->note }}" disabled>
    <label for="note">Note</label>
            </div>
    <br><br>

    @can('write-data')
        <a href="{{ route('customers.edit', $customer) }}""> <button type=" button"
            class="btn btn-primary waves-effect ml-3 waves-light border-radius-coust mr-3 col-1">Edit</button></a>
            @endcan
    <a href="{{ route('customers.index') }}"> <button type="button"
        class="btn btn-danger waves-effect waves-light border-radius-coust col-1">Cancel</button></a>
    </div></div>
@endsection
