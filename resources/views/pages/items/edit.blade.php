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
            <button type="submit" class="btn btn-primary waves-effect waves-light border-radius-coust col-1 mb-3 mt-1 ml-3 mr-3">Add</button>
    <div class="col-5 mb-3 mt-3 inputField d-inline-block mr-5"  > 
    <input type="file" class="form-control" name="image" accept=".jpg,.jpeg,.png" />
    <label class="form-label" for="image">Upload Avatar</label></div>
    
    <div class="col-5 mb-3 mt-3 inputField d-inline-block mr-5"  > 
    <input class="form-control" type="text" id="name" name="name" value="{{ $item->name }}" >
    <label for="name" class="col-sm-2 col-form-label">Name</label>
    </div>

    <div class="col-5 mb-3 mt-3 inputField d-inline-block mr-5"  > 
    <input class="form-control" type="text" id="description" name="description" value="{{ $item->description }}" >
    <label for="description" class="col-sm-2 col-form-label">Description</label>
    </div>
    <br><br>

    <button type="submit" lass="btn btn-primary waves-effect waves-light border-radius-coust mr-3 col-1">Edit</button>
    <a href="{{ route('items.index') }}"> <button type="button"
            class="btn btn-danger waves-effect waves-light border-radius-coust col-1">Cancel</button></a>
</form>
    </div></div>
@endsection
