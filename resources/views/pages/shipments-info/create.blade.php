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


        <div class="col-5 d-inline-block inputField ">  
            <input class="form-control field-coust" type="text" id="type"placeholder=" "Required name="type" value="{{ old('type') }}">
            <label for="type" >Type</label>
        </div>
    
        <br><br>
        <button type="submit" class="btn btn-primary waves-effect waves-light border-radius-coust col-1 mb-3 mt-1 ml-3 mr-3">Add</button>
        <a href="{{ route('infos.index') }}"> 
            <button type="button"
            class="btn btn-danger waves-effect waves-light border-radius-coust col-1 mb-3 ml-3">Cancel</button></a>
        </form></div></div>
@endsection
