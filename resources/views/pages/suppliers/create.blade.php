@extends('layouts.default')
@section('title')
    Suppliers
@endsection
@section('content')
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
    <form action="{{ route('suppliers.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
        @csrf
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <input class="form-control" type="text" id="name" name="name" value="{{ old('name') }}">

        <label for="delegate" class="col-sm-2 col-form-label">Delegate</label>
        <input class="form-control" type="text" id="delegate" name="delegate" value="{{ old('delegate') }}">

        <label for="phone" class="col-sm-2 col-form-label">Phone</label>
        <input class="form-control" type="text" id="phone" name="phone" value="{{ old('phone') }}">

        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <input class="form-control" type="text" id="email" name="email" value="{{ old('email') }}">

        <label for="address" class="col-sm-2 col-form-label">Address</label>
        <input class="form-control" type="text" id="address" name="address" value="{{ old('address') }}">

        <label for="note" class="col-sm-2 col-form-label">Note</label>
        <input class="form-control" type="text" id="note" name="note" value="{{ old('note') }}">

        <br><br>

        <button type="submit" class="btn btn-primary waves-effect waves-light ">Add</button>
        <a href="{{ route('suppliers.create') }}"> <button type="button"
                class="btn btn-danger waves-effect waves-light ">Cancel</button></a>
    </form>
@endsection
