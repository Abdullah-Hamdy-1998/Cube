@extends('layouts.default')
@section('title')
    Shipments Info
@endsection
@section('content')
<div class="card">
    <div class="card-body">

    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
    <form action="{{ route('infos.store') }}" method="POST" autocomplete="off">
        @csrf
        <label for="type" class="col-sm-2 col-form-label">Type</label>
        <input class="form-control" type="text" id="type" name="type" value="{{ old('type') }}">
        <br><br>
        <button type="submit" class="btn btn-primary waves-effect waves-light ">Add</button>
        <a href="{{ route('infos.index') }}"> <button type="button"
                class="btn btn-danger waves-effect waves-light ">Cancel</button></a>
    </form></div></div>
@endsection
