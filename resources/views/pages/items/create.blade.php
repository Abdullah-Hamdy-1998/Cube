@extends('layouts.default')
@section('title')
    Items
@endsection
@section('content')
<div class="card">
    <div class="card-body">
    <form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
        @csrf
        <div class="col-5 d-inline-block inputField mb-3 ">  
        <input type="file" class="form-control" name="image" accept=".jpg,.jpeg,.png" />
        <label class="form-label" for="image">Upload Avatar</label></div>
        
        <div class="col-5 d-inline-block inputField ">  
            <input class="form-control " type="text" id="name"placeholder=" "Required name="name" value="{{ old('name') }}">
            <label for="name" >Username</label></div>
    

            <div class="col-5 d-inline-block inputField ">  
                <input class="form-control " type="text" id="description"placeholder=" "Required name="description" value="{{ old('description') }}">
                <label for="description" >Description</label></div>
            <br><br>
            <button type="submit" class="btn btn-primary waves-effect waves-light border-radius-coust col-1 mb-3 mt-1 ml-3 mr-3">Add</button>
            <a href="{{ route('items.index') }}"> <button type="button"
                class="btn btn-danger waves-effect waves-light border-radius-coust col-1 mb-3 ml-3">Cancel</button></a>

    </form>
    </div></div>
@endsection
