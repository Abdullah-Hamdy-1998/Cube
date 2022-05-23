@extends('layouts.default')
@section('title')
    Shipments
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{ route('shipments.create') }}"> <button class="btn">add</button></a>
            <a href="{{ route('shipments.show',4) }}"> <button class="btn">show</button></a>
        </div>
    </div>
@endsection
