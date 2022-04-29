@extends('layouts.default')
@section('title')
    Shipments Info
@endsection
@section('content')
    <label for="type" class="col-sm-2 col-form-label">Type</label>
    <input class="form-control" type="text" id="type" name="type" value="{{ $shipment_info->type }}" disabled>
    <br><br>
    <a href="{{ route('infos.edit', $shipment_info) }}"><button type="button"
            class="btn btn-primary waves-effect waves-light ">Edit</button></a>
    <a href="{{ route('infos.index') }}"> <button type="button"
            class="btn btn-danger waves-effect waves-light ">Cancel</button></a>
@endsection
