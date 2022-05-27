@extends('layouts.default')
@section('title')
    Inventory
@endsection
@section('content')
    <style>

    </style>
    <a href="{{ route('inventory.show') }}">
        <div class="card font-weight-bold inventory-card-coust pl-5 mr-4 col-3 d-inline-block" style="max-width:300px; min-width:300px;">
            <div class="card-body ">
                <div class="mb-4"> <img src="{{ asset('images/tomato.WEBP') }}" class="d-inline mr-5"
                        style="max-height:30px;">
                    <p class="d-inline ">tomato</p>
                </div>
                <div>
                    <p class="d-inline p-coust ">weight</p>
                    <p class="d-inline ml-5 p-coust">74 kg</p>
                </div>
                <div>
                    <p class="d-inline p-coust ">Quantity</p>
                    <p class="d-inline ml-5 p-coust">32 u</p>
                </div>
            </div>
        </div>
    </a>
@endsection
