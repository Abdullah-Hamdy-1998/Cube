@extends('layouts.default')
@section('title')
    Shipments Info
@endsection
@section('content')
<div class="card border-radius-coust">
    <div class="card-body">

    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
    <form action="{{ route('infos.update', $shipment_info) }}" method="POST" autocomplete="off">
        @csrf
        @method('PUT')
        <div class="col-5 mb-3 inputField d-inline-block mr-5"  >  
            <input class="form-control field-coust"  type="text" id="type" name="type"Required placeholder=" " value="{{ $shipment_info->type}}">
            <label for="type" class="">Type</label></div>
            <br><br>
        <button type="submit" class="btn btn-primary waves-effect waves-light border-radius-coust ml-3 mr-3 col-1">Save</button>
        <a href="{{ route('infos.index') }}"> <button type="button"
            class="btn btn-danger waves-effect waves-light border-radius-coust col-1">Cancel</button></a>
    </form></div></div>
@endsection
