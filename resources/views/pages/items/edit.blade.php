@extends('layouts.default')
@section('title')
    Items
@endsection
@section('content')
<div class="card">
    <div class="card-body">
<form action="{{ route('items.update',$item) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
    @csrf
    @method('PUT')
    <label class="form-label" for="image">Upload Avatar</label>
    <input type="file" class="form-control" name="image" accept=".jpg,.jpeg,.png" />

    <label for="name" class="col-sm-2 col-form-label">Name</label>
    <input class="form-control" type="text" id="name" name="name" value="{{ $item->name }}" >

    <label for="description" class="col-sm-2 col-form-label">Description</label>
    <input class="form-control" type="text" id="description" name="description" value="{{ $item->description }}" >
    <br><br>
    <button type="submit" class="btn btn-primary waves-effect waves-light ">Save</button>
    <a href="{{ route('items.index') }}"> <button type="button"
            class="btn btn-danger waves-effect waves-light ">Cancel</button></a>
</form>
    </div></div>
@endsection
