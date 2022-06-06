@extends('layouts.default')
@section('title')
    Items
@endsection
@section('content')
<div class="card">
    <div class="card-body">
    <img src="{{ asset('images/avatars/' . $item->avatar) }}" alt="user" class="rounded-circle mx-auto d-block"
        style="max-width: 25%">

        <div class="col-5 mb-3 d-inline-block mr-5"  >    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <input class="form-control" type="text" id="name" name="name" value="{{ $item->name }}" disabled></div>

    <div class="col-5 mb-3 d-inline-block ml-5"  >  <label for="description" class="col-sm-2 col-form-label">Description</label>
    <input class="form-control" type="text" id="description" name="description" value="{{ $item->description }}"
        disabled></div>
    <br><br>
    @can('write-data')
        <a href="{{ route('items.edit', $item) }}"><button type="button"
                class="btn btn-primary waves-effect waves-light border-radius-coust col-1">Edit</button></a>
    @endcan
    <a href="{{ route('items.index') }}"> <button type="button"
            class="btn btn-danger waves-effect waves-light border-radius-coust col-1">Cancel</button></a>
    </div></div>
@endsection
