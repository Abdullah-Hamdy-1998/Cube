@extends('layouts.default')
@section('title')
    Customers
@endsection
@section('content')
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
    <form action="{{ route('customers.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                <h5 class="mb-5 ml-3"> Add New Customer</h5>
                <div class="col-5 d-inline-block inputField mr-5">  
                <input class="form-control" type="text" id="name" name="name" required placeholder=" " value="{{ old('name') }}">
            <label for="name">Name</label>
        </div>

        <div class="col-5 d-inline-block mb-3 inputField ml-5">  
        <input class="form-control" type="text" id="delegate" name="delegate"required placeholder=" " value="{{ old('delegate') }}">
        <label for="delegate">Delegate</label>
        </div>

        <div class="col-5 d-inline-block inputField mr-5">  
        <input class="form-control" type="text" id="phone" name="phone"required placeholder=" " value="{{ old('phone') }}">
        <label for="phone">Phone</label>
        </div>
        <div class="col-5 d-inline-block inputField mb-3 ml-5">  
        <input class="form-control" type="text" id="email" name="email"required placeholder=" " value="{{ old('email') }}">
        <label for="email">Email</label>
        </div>

        <div class="col-5 d-inline-block inputField mb-3 mr-5">  
        <input class="form-control" type="text" id="address" name="address"required placeholder=" " value="{{ old('address') }}">
        <label for="address">Address</label>
        </div>
        <div class="col-5 d-inline-block inputField mb-3 ml-5">  
        <input class="form-control"  type="text" id="note" name="note" placeholder=" "required value="{{ old('note') }}">
        <label for="note">Note</label>
        </div>
        <br><br>

        <button type="submit" class="btn btn-primary ml-3 waves-effect waves-light mr-3 border-radius-coust col-1">Save</button>
        <a href="{{ route('customers.create') }}"> <button type="button"
            class="btn btn-danger waves-effect waves-light border-radius-coust col-1">Cancel</button></a>
        </form>
<div></div>
@endsection
