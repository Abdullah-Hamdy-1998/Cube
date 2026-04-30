@extends('layouts.default')
@section('title')
    Shipments Info
@endsection
@section('content')
<div class="card border-radius-coust">
    <div class="card-body">
        <div class="col-5 mb-3 inputField d-inline-block mr-5"  >  
            <input class="form-control field-coust"  type="text" id="type" name="type"Required placeholder=" " value="{{ $shipment_info->type}}">
            <label for="type" >Type</label></div>

    <br><br>
    @can('write-data')
        <a href="{{ route('infos.edit', $shipment_info) }}"><button type="button"
            class="btn btn-primary waves-effect waves-light border-radius-coust ml-3 mr-3 col-1">Edit</button></a>
    @endcan
    <a href="{{ route('infos.index') }}"> <button type="button"
        class="btn btn-danger waves-effect waves-light border-radius-coust col-1">Cancel</button></a>
    </div></div>
@endsection
