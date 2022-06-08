@extends('layouts.default')
@section('title')
    Customers
@endsection
@section('content')
<div class="card border-radius-coust">
    <div class="card-body">
        <h5 class="mb-4 ml-3"> Edit Customer Details</h5>

    <form action="{{ route('customers.update', $customer) }}" method="POST" autocomplete="off">
        @csrf
        @method('PUT')
        <div class="col-5 mb-3 inputField d-inline-block mr-5"  >   
        <input class="form-control" type="text" id="name" name="name"required placeholder=" " value="{{ $customer->name }}">
        <label for="name">Name</label>
        </div>

        <div class="col-5 mb-3 inputField d-inline-block ml-5"  >   
        <input class="form-control" type="text" id="delegate" name="delegate"required placeholder=" " value="{{ $customer->delegate }}">
        <label for="delegate">Delegate</label>
        </div>

        <div class="col-5 mb-3 inputField d-inline-block mr-5"  >   
        <input class="form-control" type="text" id="phone" name="phone"required placeholder=" " value="{{ $customer->phone }}">
        <label for="phone">Phone</label>
        </div>

        <div class="col-5 mb-3 inputField d-inline-block ml-5"  >   
        <input class="form-control" type="text" id="email" name="email"required placeholder=" " value="{{ $customer->email }}">
        <label for="email">Email</label>
        </div>

        <div class="col-5 mb-3 inputField d-inline-block mr-5"  >   
        <input class="form-control" type="text" id="address" name="address"required placeholder=" " value="{{ $customer->address }}">
        <label for="address">Address</label>
        </div>

        <div class="col-5 mb-3 inputField d-inline-block ml-5"  >   
        <input class="form-control" type="text" id="note" name="note"required placeholder=" " value="{{ $customer->note }}">
        <label for="note">Note</label>
        </div>
        <br><br>

        <button type="submit" class="btn btn-primary ml-3 waves-effect waves-light mr-3 border-radius-coust col-1">Save</button>
        <a href="{{ route('customers.index') }}"> <button type="button"
            class="btn btn-danger waves-effect waves-light border-radius-coust col-1">Cancel</button></a>
        </form>
    </div></div>
@endsection
