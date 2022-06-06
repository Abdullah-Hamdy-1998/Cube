@extends('layouts.default')
@section('title')
    Suppliers
@endsection
@section('content')
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
    <div class="card">
        <div class="card-body">
    <form action="{{ route('suppliers.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
        @csrf
        <div class="col-5 mb-3 d-inline-block mr-5"  >     <label for="name" class="col-sm-2 col-form-label">Name</label>
        <input class="form-control" type="text" id="name" name="name" value="{{ old('name') }}"></div>

        <div class="col-5 d-inline-block ml-5">  <label for="delegate" class="col-sm-2 col-form-label">Delegate</label>
        <input class="form-control" type="text" id="delegate" name="delegate" value="{{ old('delegate') }}"></div>

        <div class="col-5 mb-3 d-inline-block mr-5"  >    <label for="phone" class="col-sm-2 col-form-label">Phone</label>
        <input class="form-control" type="text" id="phone" name="phone" value="{{ old('phone') }}"></div>

        <div class="col-5 d-inline-block ml-5"  > <label for="email" class="col-sm-2 col-form-label">Email</label>
        <input class="form-control" type="text" id="email" name="email" value="{{ old('email') }}"></div>

        <div class="col-5 mb-3 d-inline-block mr-5"  >   <label for="address" class="col-sm-2 col-form-label">Address</label>
        <input class="form-control" type="text" id="address" name="address" value="{{ old('address') }}"></div>

        <div class="col-5 d-inline-block ml-5"  >    <label for="note" class="col-sm-2 col-form-label">Note</label>
        <input class="form-control" type="text" id="note" name="note" value="{{ old('note') }}"></div>

        <br><br>

        <button type="submit" class="btn btn-primary waves-effect waves-light border-radius-coust col-1 ml-3 mr-3 ">Add</button>
        <a href="{{ route('suppliers.create') }}"> <button type="button"
                class="btn btn-danger waves-effect waves-light border-radius-coust col-1 ml-3 ">Cancel</button></a>
    </form>
        </div></div>
@endsection
