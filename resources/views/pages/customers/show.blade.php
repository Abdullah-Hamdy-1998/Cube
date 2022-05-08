@extends('layouts.default')
@section('title')
    Customers
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <input class="form-control" type="text" id="name" name="name" value="{{ $customer->name }}" disabled>

    <label for="delegate" class="col-sm-2 col-form-label">Delegate</label>
    <input class="form-control" type="text" id="delegate" name="delegate" value="{{ $customer->delegate }}"disabled>

    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
    <input class="form-control" type="text" id="phone" name="phone" value="{{ $customer->phone }}"disabled>

    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <input class="form-control" type="text" id="email" name="email" value="{{ $customer->email }}"disabled>

    <label for="address" class="col-sm-2 col-form-label">Address</label>
    <input class="form-control" type="text" id="address" name="address" value="{{ $customer->address }}"disabled>

    <label for="note" class="col-sm-2 col-form-label">Note</label>
    <input class="form-control" type="text" id="note" name="note" value="{{ $customer->note }}"disabled>

    <br><br>

    <a href="{{ route('customers.edit', $customer) }}""> <button type=" button"
        class="btn btn-primary waves-effect waves-light ">Edit</button></a>
    <a href="{{ route('customers.index') }}"> <button type="button"
            class="btn btn-danger waves-effect waves-light ">Cancel</button></a>
        </div></div>
@endsection
