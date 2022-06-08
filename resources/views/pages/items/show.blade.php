@extends('layouts.default')
@section('title')
    Items
@endsection
@section('content')
<div class="card">
    <div class="card-body">
    <img src="{{ asset('images/avatars/' . $item->avatar) }}" alt="user" class="rounded-circle mx-auto d-block"
        style="max-width: 25%">

        <div class="col-5 d-inline-block inputField ">  
            <input class="form-control " type="text" id="name"placeholder=" "Required name="name"  value="{{ $item->name }}" disabled>
            <label for="name" >Username</label></div>
    
        <div class="col-5 d-inline-block inputField ">  
        <input class="form-control" type="text" id="description" name="description" value="{{ $item->description }}"
            disabled>
            <label for="description" class="col-sm-2 col-form-label">Description</label>
        </div>
    <br><br>

    @can('write-data')
        <a href="{{ route('items.edit', $item) }}">        
            <button type="submit" class="btn btn-primary waves-effect waves-light border-radius-coust col-1 mb-3 mt-1 ml-3 mr-3">Edit</button>
        </a>
    @endcan
    <a href="{{ route('items.index') }}"> <button type="button"
        class="btn btn-danger waves-effect waves-light border-radius-coust col-1 mb-3 ml-3">Cancel</button></a>

    </div></div>
@endsection
